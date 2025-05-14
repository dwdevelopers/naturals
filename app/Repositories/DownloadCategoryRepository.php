<?php

namespace App\Repositories;

use App\Models\DownloadCategory;

class DownloadCategoryRepository implements DownloadCategoryRepositoryInterface
{
    public function all()
    {
        return DownloadCategory::orderByDesc('id')->get();
    }

    public function find($id)
    {
        return DownloadCategory::find($id);
    }

    public function create(array $data)
    {
        try {
            return DownloadCategory::create($data);
        } catch (\Exception $e) {
            dd($e->getMessage());
        }
    }

    public function update($id, array $data)
    {
        try {
            $category = DownloadCategory::find($id);
            if ($category) {
                $category->update($data);
                return $category;
            }
        } catch (\Exception $e) {
            dd($e->getMessage());
        }
        return null;
    }

    public function delete($id)
    {
        return DownloadCategory::destroy($id);
    }
}
