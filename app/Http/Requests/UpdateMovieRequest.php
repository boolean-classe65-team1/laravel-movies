<?php

namespace App\Http\Requests;
use App\Http\Requests\StoreMovieRequest;
use Illuminate\Foundation\Http\FormRequest;

class UpdateMovieRequest extends StoreMovieRequest
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
}
