<?php

namespace App\Http\Requests;

use App\Album;
use Illuminate\Foundation\Http\FormRequest;

class CreateAlbumForm extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize() {
        return true;
    }
    
    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules() {
        return [
            'title' => 'required|between:1,100',
            'artist' => 'required|between:1,100'
        ];
    }
    
    /**
     * This function is used by the AlbumController's store method. It takes all
     * the form input and creates a new database entry based on said input.
     */
    public function persist() {
        Album::create([
            'slug' => str_slug(request()->title, "-"),
            'title' => htmlspecialchars(request()->title),
            'artist' => htmlspecialchars(request()->artist),
        ]);
    }
}
