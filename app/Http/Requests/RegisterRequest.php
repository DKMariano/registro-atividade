<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class RegisterRequest extends FormRequest
{
    public function authorize(): bool
    {
        return true; // Permite que qualquer usuário acesse
    }

    public function rules(): array
    {
        return [
            'nome' => 'required|min:6|max:255',
            'email' => 'required|email|unique:users,email',
            'cpf' => ['required', 'string', 'size:14', 'regex:/^\d{3}\.\d{3}\.\d{3}-\d{2}$/'],
            'password' => 'required|min:6|max:255|confirmed',
        ];
    }
}

