<?php

namespace App\Http\Requests;

use Illuminate\Contracts\Validation\ValidationRule;
use Illuminate\Foundation\Http\FormRequest;

class MusicRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true; // Importante: mudar para true para permitir o envio
    }
    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'title'       => 'required|string|max:255',
            'youtube_id'  => 'required|string|size:11',
            'day_of_week' => 'required|integer|between:0,6',
            'description' => 'nullable|string',
            'is_active'   => 'sometimes|boolean'
        ];
    }
}
