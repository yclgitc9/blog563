<?php

namespace App\Http\Requests;

use App\Http\Requests\Request;

class ProductUpdateRequest extends Request
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
            'name' => 'required|max:255,' . $this->route('products'),
            'model'  => 'required|max:255,' . $this->route('products'),
            'price' => 'required|max:255,' . $this->route('products'),
            'stock' => 'required|max:255,' . $this->route('products'),
        ];
    }
}
