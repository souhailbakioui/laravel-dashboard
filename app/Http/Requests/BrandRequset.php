<?php

namespace App\Http\Requests;
use App\Models\Category;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Facades\DB;
class BrandRequset extends FormRequest
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
            
            'brand_name'=>'required|min:4|max:261|unique:brands',
            'file'=>'required',
            'select'=>'required'//|mimes:jpg.jpeg,png'
            
        ];
    }
}
