<?php

namespace App\Http\Requests;
use App\Http\Request\Request;

use Illuminate\Foundation\Http\FormRequest;

class Anggota extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function rules()
    {
        return [
            'nama' => 'required',
            'tanggal_lahir' => 'required',
            'alamat' => 'required',
            'username' => 'required',
            'email' => 'required'
        ];
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function messages()
    {
        return [
            //
            'nama.required' => 'Nama Tidak Boleh Kosong',
            'tanggal_lahir.required' => 'Tanggal Tidak Boleh Kosong',
            'alamat.required' => 'Alamat Tidak Boleh Kosong',
            'username.required' => 'username Wajib diisi',
            'password.required' => 'Password Wajib diisi'
        ];
    }
}
