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
            'sumber' => 'required',
            'rak' => 'required',
        ];
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function mesages()
    {
        return [
            //
            'sumber.require' => 'Sumber Tidak Boleh Kosong',
            'rak.require' => 'Rak Tidak Boleh Kosong',
        ];
    }
}
