<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreTvSeriesRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            "title" => "required|min:5|max:200",
            "original_title" => "required|min:5",
            "nationality" => "required|min:2",
            "date" => "required",
            "vote" => "required"
        ];
    }
    public function messages()
    {
        return [
            'title.required' => 'Inserire un titolo!',
            'title.min' => 'Inserire un titolo più lungo.',
            'title.max' => 'Titolo inserito troppo lungo!',
            'original_title.required' => 'Inserire un titolo!',
            'original_title.min' => 'Inserire un titolo più lungo.',
            'nationality.required' => 'Inserire una nazionalità!',
            'nationality.min' => 'Nome nazionalità troppo breve. Deve superare almeno 2 caratteri',
            'date.required' => 'Inserire una data',
            'vote.required' => 'Inserire il valore del voto',
        ];
    }
}
