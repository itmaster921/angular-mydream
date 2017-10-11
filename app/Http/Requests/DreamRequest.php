<?php namespace App\Http\Requests;

class DreamRequest extends Request {

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'content' => 'required|max:2000',
        ];
    }
    
    public function authorize()
    {
        return true;
    }

}