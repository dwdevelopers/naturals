<?php
namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class DownloadRequest extends FormRequest
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
        $download = $this->route('download');

        return [
            'name'                   => 'required|string|max:255|unique:downloads,name,' . ($download?->id ?? 'NULL'),
            'download_categories_id' => 'required|exists:download_categories,id',
            'downloads'              => ($download ? 'nullable' : 'required') . '|file|mimes:jpg,jpeg,png,pdf,docx,xlsx|max:10240',
        ];
    }
}
