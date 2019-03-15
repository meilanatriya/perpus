<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Http\Request\Request;
class Kategori extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return [
        'kategori' => 'required',
    ];
}

/**
 * Get the validation rules that apply to the request.
 *
 * @return array
 */
public function rules()
{
    return [
        //
        'kategori.require' => 'kategori Tidak Boleh Kosong',
    ];
}
}
