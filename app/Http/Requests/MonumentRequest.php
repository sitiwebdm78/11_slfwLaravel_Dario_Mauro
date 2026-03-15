<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class MonumentRequest extends FormRequest
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
            'visitname' => 'required | min:3',
            'authorname' => 'required | min:3',
            'year' => 'required | numeric',
            'story' => 'required',
            'img' => 'required | image'
        ];
    }

    public function messages()
    {
        return [
            'visitname.required' => 'Il nome del Monumento è Obbligatorio',
            'visitname.min' => 'Il Campo Nome del Monumento deve contenere almeno tre caratteri',
            'authorname.required' => "Il nome del'Autore è Obbligatorio",
            'authorname.min' => "Il campo del nome dell'Autore deve contenere almeno di 3 caratteri",
            'year' => "Il Campo dell'Anno è obbligatorio e deve essere un numero",
            'story'=> "Una breve descrizione del monumento è necessaria",
            'img' => "Devi caricare un immagine"
        ];
    }

}
