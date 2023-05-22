<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Facades\Auth;

class StoreAccommodationRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return Auth::check();
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'title' => ['required', 'max:255'],
            // 'slug' => ['required'],
            'room_number' => ['required', 'max:255'],
            'area' => ['required', 'max:255'],
            'bed_size' => ['required', 'max:255'],
            'address' => ['required', 'max:255'],
            'content' => ['required', 'max:10000'],
            'images' => ['required', 'array', 'max:10', 'max:2048'],
            'images.*' => ['image'],
        ];
    }

    /**
     * Get the error messages for the defined validation rules.
     *
     * @return array<string, string>
     */
    public function messages(): array
    {
        // check required and max long length
        return [
            'title.required' => 'A title is required',
            'title.max' => 'A title is max 255 characters',
            'room_number.required' => 'A room number is required',
            'room_number.max' => 'A room number is max 255 characters',
            'area.required' => 'A area is required',
            'area.max' => 'A area is max 255 characters',
            'bed_size.required' => 'A bed size is required',
            'bed_size.max' => 'A bed size is max 255 characters',
            'address.required' => 'A address is required',
            'address.max' => 'A address is max 255 characters',
            'content.required' => 'A content is required',
            'content.max' => 'A content is max 10000 characters',
            'images.max' => 'You can upload up to 5 images.',
        ];
    }
}
