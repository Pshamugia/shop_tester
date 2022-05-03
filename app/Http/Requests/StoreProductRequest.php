<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreProductRequest extends FormRequest
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
     * @return array<string, mixed>
     */
    public function rules()
    {
        $rules = [
            'sku' => 'required|unique:products',
            'name' => 'required',
            'price' => 'required|numeric',
        ];

        $productType = request()->productType;

        if ($productType == 1) {
            $rules = array_merge($rules, [
                'size' => 'required',
            ]);
        }
        if ($productType == 2) {
            $rules = array_merge($rules, [
                'width' => 'required',
                'length' => 'required',
                'height' => 'required'
            ]);
        }
        if ($productType == 3) {
            $rules = array_merge($rules, [
                'weight' => 'required',
            ]);
        }


        return $rules;
    }
}
