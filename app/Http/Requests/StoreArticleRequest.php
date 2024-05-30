<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreArticleRequest extends FormRequest
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
            'title'=>'required|max:50', // controlla l'input passato come "title"
            'body' => 'required',
            'cover' => 'mimes:jpg,bmp,png',
            'author_id'=>'required|exists:authors,id',
            'categories'=>'required|array',
            'categories.*'=>'exists:categories,id'
        ];
    }

    public function messages()
    {
        return  [
        'title.required' =>'Il titolo è obbligatorio',
        'title.max' =>'Il titolo è troppo lungo',    
        'body.required' =>'Il contenuto è obbligatorio',

        'cover.mimes' => 'Il formato è sbagliato.',
        'categories.*'=>'Categoria non valida'
        ];
    }
   
}