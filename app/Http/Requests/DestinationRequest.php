<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class DestinationRequest extends FormRequest
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
            'name' => 'required',
            'upload' => 'required|mimes:jpeg,png,gif',
        ];
    }
    public function messages()
    {
        return [
            'name.required' => 'Destination name cannot be blanked',
            'upload.required' => 'Image cannot be blanked',
            'upload.mimes' => 'File is not valid, only accept .jpeg, .png, .gif files'
        ];
    }
}
