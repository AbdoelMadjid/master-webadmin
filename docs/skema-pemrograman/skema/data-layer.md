# Skema Data Layer

URL aplikasi: `/help/pemrograman/skema/data-layer`

[⬅ Kembali ke README Docs](../README.md)

Struktur model, relasi, migration, seeder, dan pattern query yang dipakai proyek.

Tag:
- `domain model`
- `schema evolution`
- `query discipline`
- `max 3 eager relations`
- `max nested depth 2`
- `mandatory transaction`
- `no query in loop`

## Komponen Inti

- `app/Models/*` untuk entity dan relasi Eloquent.
- `database/migrations/*` untuk versi skema tabel.
- `database/seeders/*` dan `database/factories/*` untuk data awal/testing.
- `app/Providers/AppServiceProvider.php` untuk guard global (misal strict mode, lazy loading policy).

## Flow Data End-to-End

Langkah/aturan:
- 1. Request masuk -> controller/use-case validasi input.
- 2. Query dieksekusi lewat model/scope/query object.
- 3. Loading relasi harus dikendalikan (selective eager loading).
- 4. Data dibentuk ke response/view resource.
- 5. Operasi tulis kritikal dibungkus transaction.

## Struktur Model & Relasi yang Direkomendasikan

- Gunakan nama relasi eksplisit dan konsisten dengan domain bisnis.
- Simpan logic query reusable di local scope (misal `scopeActive()`, `scopeForTenant()`) agar tetap testable.
- Hindari menaruh logic presentasi di model.

## Standar Migration

Langkah/aturan:
- Migration harus idempotent dan mudah ditelusuri (satu perubahan skema per migration).
- Tambahkan index saat menambah kolom yang dipakai filter/sort/join.
- Gunakan foreign key untuk menjaga integritas data, termasuk aturan on update/delete yang tepat.
- Pisahkan perubahan berisiko tinggi (rename/drop kolom besar) ke migration terpisah dan window rilis khusus.

## Contoh Migration Ringkas

> Catatan: Kombinasi index harus mengikuti query real, bukan sekadar menambah index sebanyak mungkin.

## Seeder & Factory Strategy

- Gunakan factory untuk membangun graph data relasi secara konsisten.
- Seeder & Factory Strategy
- Pisahkan seeder demo/testing agar tidak tercampur dengan seed production.
- Gunakan factory untuk membangun graph data relasi secara konsisten.

## Pattern Query yang Disarankan

Langkah/aturan:
- Pakai `select()` kolom minimal untuk endpoint list.
- Pakai `with()` atau `withCount()` untuk mencegah N+1 pada endpoint list/detail.
- Pakai pagination untuk dataset besar; hindari memuat semua data ke memori.
- Ekstrak filter dinamis ke scope/query object agar controller tetap ringkas dan mudah diuji.

## Contoh Query Aman (List + Filter + Relasi)

> Peringatan: Hindari pola query dalam loop (`N+1`). Jika menemukan query tambahan per item, evaluasi eager loading.

## Transaksi & Konsistensi Data

- Bungkus proses tulis multi-tabel dengan `DB::transaction()`.
- Jika ada side effect eksternal (email, webhook), trigger setelah transaction sukses.
- Gunakan locking seperlunya pada proses race-condition (stok, saldo, nomor dokumen).
- Transaksi & Konsistensi Data

## Observability & Debugging

- Catat query lambat dan endpoint yang memicu.
- Tambahkan logging kontekstual (user id, tenant id, request id) saat exception data layer.
- Audit migration/seeder pada release checklist.
- Observability & Debugging

## Checklist Review Data Layer (Pra-Merge)

Langkah/aturan:
- 1. Model dan relasi sudah mencerminkan domain, bukan sekadar tabel.
- 2. Migration punya index dan foreign key yang relevan.
- 3. Query list wajib select kolom minimal + pagination + eager loading yang relevan.
- 4. Operasi tulis multi-entity menggunakan transaction.
- 5. Seeder/factory cukup untuk local dev dan test case utama.
- 6. Tidak ada N+1 dan tidak ada query berat tanpa batasan.

## 6. Tidak ada N+1 dan tidak ada query berat tanpa batasan.

Langkah/aturan:
- **Rule wajib:** kolom yang dipakai untuk filter, sort, join, dan foreign key harus memiliki index yang sesuai.
- **Rule wajib:** endpoint list harus pakai pagination; unbounded fetch dilarang.
- **Rule wajib:** maksimal `3 eager relations` per query default (kecuali ada justifikasi di PR).
- **Rule wajib:** maksimal `2 level nested eager loading` agar kompleksitas query terkendali.
- **Rule wajib:** operasi tulis multi-tabel atau kritikal konsistensi harus di dalam `DB::transaction()`.
- **Rule wajib:** side effect eksternal (email, webhook, dispatch queue) dieksekusi setelah commit transaction.
- **Rule wajib:** query di dalam loop dilarang kecuali ada batasan terukur dan terdokumentasi.
- **Rule opsional:** gunakan query cache hanya untuk data read-heavy yang stabil dengan strategi invalidasi jelas.

## Use-Case Wajib Transaction

- Create order + order items + update stock.
- Pembayaran: update invoice, ledger, dan status order sekaligus.
- Proses approval berjenjang yang mengubah beberapa tabel status.
- Import batch yang menulis parent-child records.

> Peringatan: Jika satu use-case menghasilkan lebih dari satu perubahan tabel penting, default-nya harus memakai transaction.

## Template Transaksi Standar

```php
DB::transaction(function () use ($payload) {
    $order = Order::create([...]);

    foreach ($payload['items'] as $item) {
        $order->items()->create([...]);
        Product::whereKey($item['product_id'])
            ->decrement('stock', $item['qty']);
    }

    $order->refresh();
});

// trigger event/job setelah commit bila perlu
```

## Gate Review PR (Strict)

Langkah/aturan:
- 1. Jelaskan impact query dan index baru pada deskripsi PR.
- 2. Sertakan bukti tidak ada N+1 pada endpoint yang diubah.
- 3. Jika melewati batas eager relations/depth, wajib ada justifikasi teknis yang jelas di PR.
- 4. Untuk proses finansial/stok, jelaskan batas transaction dan strategi concurrency secara eksplisit.
- 5. Pastikan migration rollback aman sebelum merge.
