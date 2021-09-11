<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class TourStoreRequest extends FormRequest
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
            'name'        => 'required|max:255',
            'slug'        => 'required|max:255',
            'duration'    => 'required',
            'category'    => 'required',
            'price'       => 'required|integer|min:0',
            'image'       => 'required|image|mimes:jpeg,png,jpg,gif,svg',
            'image_seo'   => 'nullable|image|mimes:jpeg,png,jpg,gif,svg',
            'address'     => 'required|max:255',
            'destination' => 'required',
            'overview'    => 'required'
        ];
    }
}
