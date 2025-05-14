<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ProductDetailsRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        $id = $this->route('productDetail')?->id ?? 'NULL';

        return [
            'name' => 'required|string|max:255',
            'product_id' => 'required|exists:products,id',
            'description' => 'nullable|string',
            'status' => 'required|in:active,inactive',
        ];
    }
}
