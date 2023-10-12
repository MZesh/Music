<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UploadRequest extends FormRequest
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
     * @return array<string, \Illuminate\Contracts\Validation\Rule|array|string>
     */
    public function rules(): array
    {
        return [
            'name' => 'required|min:5',
            'artist' => 'required|min:5|max:15',
            'description' => 'required|min:5|max:15',
            'uploaded_by' => 'required|min:5|max:15',
            'category' => 'required|min:5|max:15',
            'music_name' => 'required',
        ];
    }
}
