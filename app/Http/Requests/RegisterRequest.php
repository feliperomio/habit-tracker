<?php

namespace App\Http\Requests;

use Illuminate\Contracts\Validation\ValidationRule;
use Illuminate\Foundation\Http\FormRequest;

class RegisterRequest extends FormRequest
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
     * @return array<string, ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'name' => 'required|max:255|string ', //validar do tipo string para o usuario nao inserir coisas que nao podem
            'email' => 'required|email|unique:users,email', //validar se o email é unico no banco de dados
            'password' => 'required|min:6|confirmed', //validar se a senha é confirmada, ou seja, se a senha e a confirmação de senha são iguais
            ];
    }
}
