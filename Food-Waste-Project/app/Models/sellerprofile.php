<?php

namespace App\Http\Requests;

use App\Models\User;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class sellerprofile extends FormRequest
{
    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\Rule|array|string>
     */
    public function rules(): array
    {
        return [
            'nama_toko' => ['required' ,'string' ,'max:100'],
            'foto_profil_toko' => ['required', 'image', 'mimes:jpeg,png,jpg', 'max:2048'], // max 2MB
            'alamat_toko'=> ['required' ,'string' ,'max:100'],
        ];
    }
}
