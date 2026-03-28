<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class MyTourRequest extends FormRequest
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
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */

    public function rules(): array
    {
        return [
           'visitname' => 'required|min:3|max:255',
            'year' => 'required|integer|min:1900|max:' . date('Y'),
            'experience' => 'required|min:3|max:5000',
            'img' => 'required | image'
        ];
    }

    public function messages()
    {
        return [
            'visitname.required' => 'Il nome del Monumento Preferito è Obbligatorio',
            'visitname.min' => 'Il Campo Nome del Monumento deve contenere almeno tre caratteri',
            'year.required' => "Il Campo dell'Anno è obbligatorio, inserisci una data",
            'experience.required'=> "Una breve descrizione del tuo Tour è necessaria",
            'img.required' => "Devi caricare un immagine"
        ];
    }
}
