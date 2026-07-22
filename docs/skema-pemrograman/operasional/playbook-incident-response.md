# Playbook Incident Response

URL aplikasi: `/help/pemrograman/operasional/playbook-incident-response`

[⬅ Kembali ke README Docs](../README.md)

Panduan operasional siapa melakukan apa pada 15 menit pertama incident, agar respons konsisten dan cepat.

Tag:
- `first 15 minutes`
- `clear ownership`
- `fast mitigation`

## Peran Inti Saat Incident

> Catatan: Satu orang boleh memegang lebih dari satu peran pada tim kecil, tetapi IC sebaiknya tidak merangkap eksekutor utama.

## Aturan Umum 0-15 Menit

Langkah/aturan:
- 0-3 menit: triage awal, tentukan severity sementara, bentuk channel war-room.
- 3-7 menit: kumpulkan evidence minimum (error rate, endpoint terdampak, rentang user).
- 7-12 menit: jalankan mitigasi tercepat yang aman (rollback/disable feature/degrade mode).
- 12-15 menit: kirim status update resmi pertama ke stakeholder.

## Definition of Done (Menit 15)

- Severity disepakati dan owner jelas.
- Ada mitigasi awal atau rencana mitigasi terikat waktu.
- Status update pertama sudah terkirim.
- Timeline/log evidence mulai terdokumentasi.

## Sev-1 (Critical) - Aksi 0-15 Menit

```text
0-5 menit:
- deklarasi Sev-1 + tetapkan IC/Ops/Comms/Scribe
- identifikasi blast radius

5-10 menit:
- jalankan mitigasi tercepat (rollback/feature flag)
- validasi dampak user

10-15 menit:
- kirim update resmi #1 ke stakeholder
- verifikasi metrik utama (5xx/latency)
```

## Sev-2 (High) - Aksi 0-15 Menit

```text
0-5 menit: deklarasi Sev-2 + tetapkan owner teknis
5-10 menit: mitigasi ringan (restart worker/partial flag off)
10-15 menit: putuskan eskalasi ke Sev-1 bila memburuk
```

## Sev-3/Sev-4 - Aksi 0-15 Menit

```text
Sev-3:
- triage terstruktur, assign owner, siapkan workaround

Sev-4:
- catat bug + evidence reproduksi
- prioritas ke backlog/sprint
```

## Trigger Eskalasi Otomatis

- Persentase error 5xx melewati threshold kritis.
- Fitur transaksi inti tidak bisa dipakai user.
- Tidak ada mitigasi efektif dalam 15 menit pertama.
- Ada dampak finansial/regulatori atau risiko data integrity.

## Kanal Komunikasi Standar

- **War-room:** koordinasi teknis real-time.
- **Incident channel:** update periodik lintas tim.
- **Status page/internal broadcast:** info resmi ke user/stakeholder.
- **Ticket incident:** sumber kebenaran tunggal (owner, severity, timeline).

## Checklist Operasional Menit 0-15

Langkah/aturan:
- 1. Tentukan severity sementara dalam 3 menit pertama.
- 2. Tetapkan 4 peran minimum: IC, Ops, Comms, Scribe.
- 3. Jalankan mitigasi tercepat yang reversible.
- 4. Kirim update #1 maksimal menit ke-15.
- 5. Simpan evidence untuk RCA/postmortem sejak awal.
