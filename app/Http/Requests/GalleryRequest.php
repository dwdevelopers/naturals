<?php
namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class GalleryRequest extends FormRequest
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

        $rules = [
            'gallery_category_id' => 'required|exists:gallery_categories,id',
            'title'               => 'required|string|max:255',
            'is_active'           => 'required|in:active,inactive', // Validation for is_active

        ];

        if ($this->isMethod('post')) {
            $rules['image_path']   = 'required|array|min:1';
            $rules['image_path.*'] = 'mimes:jpeg,jpg,png,gif,svg,webp|max:51200';
        }

        if ($this->isMethod('put') || $this->isMethod('patch')) {
            $rules['image_path']   = 'nullable|array';
            $rules['image_path.*'] = 'mimes:jpeg,jpg,png,gif,svg,webp|max:51200';
        }

        return $rules;

    }
    public function messages()
    {
        return [
            'image_path.*.mimes' => 'Each image must be a file of type: jpeg, jpg, png, gif, svg, webp.',
            'image_path.*.max'   => 'Each image must not be larger than 10MB.',
        ];
    }
}
