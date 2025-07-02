<?php

namespace App\Http\Requests\Auth;

use Illuminate\Foundation\Http\FormRequest;

class RegisterRequest extends FormRequest
{
    /**
     * Détermine si l'utilisateur est autorisé à faire cette requête.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Règles de validation.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'name' => ['required', 'string', 'regex:/^[a-zA-Z\s]+$/'],
            'email' => [
                'required',
                'string',
                'email',
                'max:255',
                'unique:users',
                'regex:/^[a-zA-Z0-9._%+-]+@(gmail\.com|gmail\.fr|yahoo\.com)$/i',
                function ($attribute, $value, $fail) {
                    // Empêche les répétitions comme .com.com ou .fr.fr
                    if (preg_match('/\.(com|fr)\.\1$/i', $value)) {
                        $fail('Le domaine de l\'adresse e-mail est invalide (répétition).');
                    }
                },
            ],
            'password' => [
                'required',
                'min:6',
                'confirmed',
            ],
        ];
    }

    /**
     * Messages d'erreur personnalisés.
     */
    public function messages(): array
    {
        return [
            'name.required' => 'Le nom est obligatoire.',
            'name.regex' => 'Le nom ne doit pas contenir de caractères spéciaux.',
            'email.required' => 'L\'adresse e-mail est obligatoire.',
            'email.email' => 'L\'adresse e-mail doit être valide.',
            'email.max' => 'L\'adresse e-mail ne doit pas dépasser 255 caractères.',
            'email.unique' => 'Cette adresse e-mail est déjà utilisée.',
            'email.regex' => 'L\'adresse e-mail doit être une adresse @gmail.com, @gmail.fr ou @yahoo.com.',
            'password.required' => 'Le mot de passe est obligatoire.',
            'password.min' => 'Le mot de passe doit contenir au moins 6 caractères.',
            'password.confirmed' => 'La confirmation du mot de passe ne correspond pas.',
        ];
    }
}
