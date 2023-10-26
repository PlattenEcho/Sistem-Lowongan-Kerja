<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateLokerRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'nama' => 'required',
            'perusahaan' => 'required',
            'tipe' => 'required',
            'usia_min' => 'required|gte:17|lte:70',
            'usia_max' => 'required|gte:17|lte:70',
            'gaji_min' => 'required|gte:0',
            'gaji_max' => 'required|gte:0',
            'nama_cp' => 'required',
            'email_cp' => 'required|email',
            'no_telp_cp' => 'required|numeric',
            'tgl_aktif' => 'required',
        ];
    }

    public function attributes(): array
    {
        return [
            'nama' => 'Nama pekerjaan',
            'perusahaan' => 'Nama perusahaan',
            'tipe' => 'Tipe pekerjaan',
            'usia_min' => 'Usia minimal',
            'usia_max' => 'Usia maksimal',
            'gaji_min' => 'Gaji minimal',
            'gaji_max' => 'Gaji maksimal',
            'nama_cp' => 'Nama narahubung',
            'email_cp' => 'Email narahubung',
            'no_telp_cp' => 'Nomor telepon narahubung',
            'tgl_aktif' => 'Batas tanggal lamar',
        ];
    }

    public function messages(): array
    {
        return [
            'required' => ':attribute wajib diisi!',
            'gte' => ':attribute harus lebih besar atau sama dengan :value!',
            'lte' => ':attribute harus lebih kecil atau sama dengan :value!',
            'email' => ':attribute hanya boleh berisi email yang valid!',
            'numeric' => ':attribute hanya boleh berisi angka!',
        ];
    }
}
