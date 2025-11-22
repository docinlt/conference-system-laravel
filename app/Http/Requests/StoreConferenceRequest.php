<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreConferenceRequest extends FormRequest
{
    public function authorize(): bool
    {
        return true;
    }

    public function rules(): array
    {
        return [
            'title'       => ['required', 'string', 'max:255'],
            'description' => ['required', 'string'],
            'lecturers'   => ['required', 'string', 'max:255'],
            'date'        => ['required', 'date'],
            'time'        => ['required'],
            'address'     => ['required', 'string', 'max:255'],
        ];
    }
}
