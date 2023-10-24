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
        return false;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'nama' => 'required|alpha:ascii',
            'tipe' => 'required',
            'usia_min' => 'required|min:17|max:70',
            'usia_max' => 'required|min:17|max:70',
            'gaji_min' => 'required',
            'gaji_max' => 'required',
            'nama_cp' => 'required|alpha:ascii',
            'email_cp' => 'required|email',
            'no_telp_cp' => 'required|numeric',
            'tgl_aktif' => 'required',
            'tgl_tutup' => 'required',
            'status' => 'required'
        ];
    }

    public function attributes(): array
    {
        return [
            'nama' => 'Nama pekerjaan',
            'tipe' => 'Tipe pekerjaan',
            'usia_min' => 'Usia minimal',
            'usia_max' => 'Usia maksimal',
            'gaji_min' => 'Gaji minimal',
            'gaji_max' => 'Gaji maksimal',
            'nama_cp' => 'Nama narahubung',
            'email_cp' => 'Email narahubung',
            'no_telp_cp' => 'Nomor telepon narahubung',
            'tgl_aktif' => 'Batas tanggal lamar',
            'tgl_tutup' => 'Tanggal tutup',
            'status' => 'Status'
        ];
    }

    public function messages(): array
    {
        return [];
    }
}
