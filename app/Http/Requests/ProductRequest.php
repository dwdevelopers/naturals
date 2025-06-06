<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ProductRequest extends FormRequest
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
        $id = $this->route('product')?->id ?? 'NULL';

        return [
        'name' => 'required|string|max:255|unique:products,name,' . $id,
        'description' => 'nullable|string',
        'status' => 'required|in:active,inactive',
        'image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
        'price' => 'nullable|numeric|min:0.01|max:10000|regex:/^\d+(\.\d{1,2})?$/',  // Price validation
        ];
    }
}
