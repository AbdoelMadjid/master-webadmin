<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('referensi_kategori', function (Blueprint $table) {
            $table->id();
            $table->string('kode', 50)->unique();
            $table->string('nama', 100);
            $table->text('deskripsi')->nullable();
            $table->boolean('is_active')->default(true);
            $table->boolean('is_system')->default(false);
            $table->timestamps();
        });

        Schema::create('referensi_item', function (Blueprint $table) {
            $table->id();
            $table->foreignId('kategori_id')->constrained('referensi_kategori')->onDelete('cascade');
            $table->string('kode', 50);
            $table->string('nama', 100);
            $table->integer('urutan')->default(0);
            $table->text('keterangan')->nullable();
            $table->boolean('is_active')->default(true);
            $table->timestamps();
        });

        // Seed default reference data
        $now = now();

        $seedData = [
            [
                'kategori' => [
                    'kode' => 'JENKEL',
                    'nama' => 'Jenis Kelamin',
                    'deskripsi' => 'Acuan pilihan Jenis Kelamin user / data personal',
                    'is_active' => true,
                    'is_system' => true,
                    'created_at' => $now,
                    'updated_at' => $now,
                ],
                'items' => [
                    ['kode' => 'L', 'nama' => 'Laki-Laki', 'urutan' => 1, 'keterangan' => 'Jenis Kelamin Pria'],
                    ['kode' => 'P', 'nama' => 'Perempuan', 'urutan' => 2, 'keterangan' => 'Jenis Kelamin Wanita'],
                ],
            ],
            [
                'kategori' => [
                    'kode' => 'AGAMA',
                    'nama' => 'Agama & Kepercayaan',
                    'deskripsi' => 'Acuan pilihan Agama dan Kepercayaan resmi',
                    'is_active' => true,
                    'is_system' => true,
                    'created_at' => $now,
                    'updated_at' => $now,
                ],
                'items' => [
                    ['kode' => 'ISLAM', 'nama' => 'Islam', 'urutan' => 1, 'keterangan' => 'Agama Islam'],
                    ['kode' => 'KRISTEN', 'nama' => 'Kristen Protestan', 'urutan' => 2, 'keterangan' => 'Agama Kristen Protestan'],
                    ['kode' => 'KATOLIK', 'nama' => 'Katolik', 'urutan' => 3, 'keterangan' => 'Agama Kristen Katolik'],
                    ['kode' => 'HINDU', 'nama' => 'Hindu', 'urutan' => 4, 'keterangan' => 'Agama Hindu'],
                    ['kode' => 'BUDHA', 'nama' => 'Budha', 'urutan' => 5, 'keterangan' => 'Agama Budha'],
                    ['kode' => 'KHONGHUCU', 'nama' => 'Khonghucu', 'urutan' => 6, 'keterangan' => 'Agama Khonghucu'],
                    ['kode' => 'LAINNYA', 'nama' => 'Kepercayaan / Lainnya', 'urutan' => 7, 'keterangan' => 'Kepercayaan lainnya'],
                ],
            ],
            [
                'kategori' => [
                    'kode' => 'STATUS_PERKAWINAN',
                    'nama' => 'Status Perkawinan',
                    'deskripsi' => 'Acuan status pernikahan / perkawinan perorangan',
                    'is_active' => true,
                    'is_system' => true,
                    'created_at' => $now,
                    'updated_at' => $now,
                ],
                'items' => [
                    ['kode' => 'BELUM_MENIKAH', 'nama' => 'Belum Menikah', 'urutan' => 1, 'keterangan' => 'Single / Lajang'],
                    ['kode' => 'MENIKAH', 'nama' => 'Menikah', 'urutan' => 2, 'keterangan' => 'Sudah Menikah'],
                    ['kode' => 'CERAI_HIDUP', 'nama' => 'Cerai Hidup', 'urutan' => 3, 'keterangan' => 'Cerai Hidup'],
                    ['kode' => 'CERAI_MATI', 'nama' => 'Cerai Mati', 'urutan' => 4, 'keterangan' => 'Ditinggal Meninggal'],
                ],
            ],
            [
                'kategori' => [
                    'kode' => 'PENDIDIKAN',
                    'nama' => 'Tingkat Pendidikan',
                    'deskripsi' => 'Acuan jenjang tingkat pendidikan formal lulusan',
                    'is_active' => true,
                    'is_system' => true,
                    'created_at' => $now,
                    'updated_at' => $now,
                ],
                'items' => [
                    ['kode' => 'SD', 'nama' => 'SD / Sederajat', 'urutan' => 1, 'keterangan' => 'Pendidikan Dasar'],
                    ['kode' => 'SMP', 'nama' => 'SMP / Sederajat', 'urutan' => 2, 'keterangan' => 'Pendidikan Menengah Pertama'],
                    ['kode' => 'SMA', 'nama' => 'SMA / SMK / Sederajat', 'urutan' => 3, 'keterangan' => 'Pendidikan Menengah Atas'],
                    ['kode' => 'D3', 'nama' => 'D3 (Diploma 3)', 'urutan' => 4, 'keterangan' => 'Pendidikan Ahli Madya'],
                    ['kode' => 'S1', 'nama' => 'S1 / D4 (Sarjana)', 'urutan' => 5, 'keterangan' => 'Pendidikan Sarjana / Terapan'],
                    ['kode' => 'S2', 'nama' => 'S2 (Magister)', 'urutan' => 6, 'keterangan' => 'Pendidikan Magister / Pascasarjana'],
                    ['kode' => 'S3', 'nama' => 'S3 (Doktor)', 'urutan' => 7, 'keterangan' => 'Pendidikan Doktor'],
                ],
            ],
            [
                'kategori' => [
                    'kode' => 'GOLONGAN_DARAH',
                    'nama' => 'Golongan Darah',
                    'deskripsi' => 'Acuan jenis tipe golongan darah manusia',
                    'is_active' => true,
                    'is_system' => true,
                    'created_at' => $now,
                    'updated_at' => $now,
                ],
                'items' => [
                    ['kode' => 'A', 'nama' => 'Golongan Darah A', 'urutan' => 1, 'keterangan' => 'Tipe A'],
                    ['kode' => 'B', 'nama' => 'Golongan Darah B', 'urutan' => 2, 'keterangan' => 'Tipe B'],
                    ['kode' => 'AB', 'nama' => 'Golongan Darah AB', 'urutan' => 3, 'keterangan' => 'Tipe AB'],
                    ['kode' => 'O', 'nama' => 'Golongan Darah O', 'urutan' => 4, 'keterangan' => 'Tipe O'],
                ],
            ],
            [
                'kategori' => [
                    'kode' => 'STATUS_KEPEGAWAIAN',
                    'nama' => 'Status Kepegawaian',
                    'deskripsi' => 'Acuan status ikatan hubungan kepegawaian personil',
                    'is_active' => true,
                    'is_system' => false,
                    'created_at' => $now,
                    'updated_at' => $now,
                ],
                'items' => [
                    ['kode' => 'PNS', 'nama' => 'PNS / ASN', 'urutan' => 1, 'keterangan' => 'Pegawai Negeri Sipil'],
                    ['kode' => 'PPPK', 'nama' => 'PPPK', 'urutan' => 2, 'keterangan' => 'Pegawai Pemerintah dengan Perjanjian Kerja'],
                    ['kode' => 'TETAP', 'nama' => 'Pegawai Tetap', 'urutan' => 3, 'keterangan' => 'Pegawai Tetap Yayasan / Perusahaan'],
                    ['kode' => 'KONTRAK', 'nama' => 'Pegawai Kontrak', 'urutan' => 4, 'keterangan' => 'Pegawai Kontrak / PKWT'],
                    ['kode' => 'HONORER', 'nama' => 'Honorer / Non-ASN', 'urutan' => 5, 'keterangan' => 'Pegawai Honorer'],
                    ['kode' => 'MAGANG', 'nama' => 'Magang / Internship', 'urutan' => 6, 'keterangan' => 'Peserta Magang'],
                ],
            ],
        ];

        foreach ($seedData as $data) {
            $kategoriId = DB::table('referensi_kategori')->insertGetId($data['kategori']);

            foreach ($data['items'] as $item) {
                DB::table('referensi_item')->insert([
                    'kategori_id' => $kategoriId,
                    'kode' => $item['kode'],
                    'nama' => $item['nama'],
                    'urutan' => $item['urutan'],
                    'keterangan' => $item['keterangan'],
                    'is_active' => true,
                    'created_at' => $now,
                    'updated_at' => $now,
                ]);
            }
        }
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('referensi_item');
        Schema::dropIfExists('referensi_kategori');
    }
};
