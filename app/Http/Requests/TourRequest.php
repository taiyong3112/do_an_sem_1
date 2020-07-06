<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class TourRequest extends FormRequest
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
            'name'=>'required',
            'summary' => 'required',
            'content' => 'required',
            'upload' => 'required|mimes:jpeg,png,gif',
            'adult_price' => 'required',
            'children_price' => 'required',
            'duration' => 'required',
            'destination_id' => 'required'
        ];
    }
    public function messages()
    {
        return [
            'name.required' => 'Please enter tour name',
            'summary.required' => 'Please enter tour summary',
            'content.required' => 'Please enter tour content',
            'upload.required' => 'Please select tour picture',
            'upload.mimes' => 'Please select correct picture format (png, jpeg, gif)',
            'adult_price.required' => 'Please enter adults price',
            'children_price.required' => 'Please enter children price',
            'duration.required' => 'Please enter tour duration',
            'destination_id' => 'Please choose a Destination'
        ];
    }
}
