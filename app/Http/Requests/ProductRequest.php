<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;
use Illuminate\Validation\Rules\File;

class ProductRequest extends FormRequest
{
    public function authorize(): bool
    {
        return true;
    }

    public function rules(): array
    {
        return [
            /** en esta verificacion el max indica que no puede pesar mas de 10 MB, 
             * tambien le establezco las dimenciones
             */
            'urlfoto' => [ File::image()->max(10 * 1024)->dimensions(Rule::dimensions()
                                                    ->maxWidth(650)
                                                    ->maxHeight(650))],
            'name' => ['required'],
            'price' => ['required', 'decimal:2'],
            'stock' => ['required', 'numeric'],
            'category_id' => ['required'],
        ];
    }
}
