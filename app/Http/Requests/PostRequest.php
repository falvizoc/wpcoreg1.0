<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class PostRequest extends FormRequest
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

        $post = $this->route()->parameter('post');

        $rules = [
            'titulo' => 'required',
            'slug' => 'required|unique:posts',
            'categoria_id' => 'required',
            'status' => 'required|in:1,2',
            'file' => 'image'
        ];

        if ($post) {
            $rules['slug'] = 'required|unique:posts,slug,'.$post->id;
        }

        if ($this->status == 2) {
            $rules = array_merge($rules, [
                'categoria_id' => 'required',
                'etiquetas' => 'required',
                'extracto' => 'required',
                'body' => 'required',
            ]);
        }

        return $rules;
    }

    public function attributes()
    {
        return [
            'titulo' => 'Titulo',
            'slug' => 'Slug',
            'categoria_id' => 'Categoria',
            'status' => 'Estado',
            'file' => 'Imagen',
            'extracto' => 'Extracto',
            'body' => 'Cuerpo del Post',
        ];
    }
}
