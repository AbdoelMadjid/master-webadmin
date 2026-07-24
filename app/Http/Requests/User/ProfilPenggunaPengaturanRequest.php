<?php

namespace App\Http\Requests\User;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class ProfilPenggunaPengaturanRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return auth()->check();
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        $userId = auth()->id();
        $userDetail = auth()->user()?->userDetail;
        $userDetailId = $userDetail?->id;

        return [
            // Identitas Diri (KTP)
            'nik' => [
                'nullable',
                'string',
                'digits:16',
                Rule::unique('users_details', 'nik')->ignore($userDetailId),
            ],
            'nama_lengkap'      => ['nullable', 'string', 'max:255'],
            'tempat_lahir'      => ['nullable', 'string', 'max:100'],
            'tanggal_lahir'     => ['nullable', 'date'],
            'jenis_kelamin'     => ['nullable', Rule::in(['L', 'P'])],
            'golongan_darah'    => ['nullable', 'string', 'max:5'],
            'agama'             => ['nullable', 'string', 'max:50'],
            'status_perkawinan' => ['nullable', 'string', 'max:50'],
            'pekerjaan'         => ['nullable', 'string', 'max:100'],
            'kewarganegaraan'   => ['nullable', 'string', 'max:50'],

            // Kontak
            'no_hp' => ['nullable', 'string', 'max:20'],

            // Alamat Dipisah
            'alamat_jalan'    => ['nullable', 'string', 'max:255'],
            'no_rumah'        => ['nullable', 'string', 'max:20'],
            'rt_rw'           => ['nullable', 'string', 'max:20'],
            'blok'            => ['nullable', 'string', 'max:20'],
            'desa_kelurahan'  => ['nullable', 'string', 'max:100'],
            'kecamatan'       => ['nullable', 'string', 'max:100'],
            'kabupaten_kota'  => ['nullable', 'string', 'max:100'],
            'provinsi'        => ['nullable', 'string', 'max:100'],
            'kode_pos'        => ['nullable', 'string', 'max:10'],
        ];
    }

    /**
     * Get custom attributes for validator errors.
     *
     * @return array<string, string>
     */
    public function attributes(): array
    {
        return [
            'nik'               => 'NIK (KTP)',
            'nama_lengkap'      => 'Nama Lengkap',
            'tempat_lahir'      => 'Tempat Lahir',
            'tanggal_lahir'     => 'Tanggal Lahir',
            'jenis_kelamin'     => 'Jenis Kelamin',
            'golongan_darah'    => 'Golongan Darah',
            'agama'             => 'Agama',
            'status_perkawinan' => 'Status Perkawinan',
            'pekerjaan'         => 'Pekerjaan',
            'kewarganegaraan'   => 'Kewarganegaraan',
            'no_hp'             => 'Nomor HP',
            'alamat_jalan'      => 'Nama Jalan / Perumahan',
            'no_rumah'          => 'Nomor Rumah',
            'rt_rw'             => 'RT / RW',
            'blok'              => 'Blok',
            'desa_kelurahan'    => 'Desa / Kelurahan',
            'kecamatan'         => 'Kecamatan',
            'kabupaten_kota'    => 'Kabupaten / Kota',
            'provinsi'          => 'Provinsi',
            'kode_pos'          => 'Kode Pos',
        ];
    }
}
