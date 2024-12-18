<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class LoginRequest extends FormRequest
{
    /**
     * Kullanıcının bu isteği yapmaya yetkisi olup olmadığını belirler.
     */
    public function authorize(): bool
    {
        // Kullanıcı yetkilendirmesi gerekiyorsa burayı kontrol edebilirsiniz.
        // Şimdilik true yaparak isteğin her zaman yetkili kabul edilmesini sağlıyoruz.
        return true;
    }

    /**
     * İstek doğrulama kurallarını tanımlar.
     */
    public function rules(): array
    {
        return [
            'username' => [],
            'content' => 'required|string|min:10',
            'author' => 'nullable|string|max:100',
        ];
    }

    /**
     * Hata mesajlarını özelleştirmek için kullanılır.
     */
    public function messages(): array
    {
        return [
            'title.required' => 'Başlık alanı zorunludur.',
            'title.max' => 'Başlık en fazla 255 karakter olabilir.',
            'content.required' => 'İçerik alanı zorunludur.',
            'content.min' => 'İçerik en az 10 karakter olmalıdır.',
        ];
    }
}
