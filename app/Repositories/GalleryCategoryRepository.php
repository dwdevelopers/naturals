<?php

namespace App\Repositories;

use App\Models\GalleryCategory;

class GalleryCategoryRepository implements GalleryCategoryRepositoryInterface
{
    public function all()
    {
        return GalleryCategory::orderByDesc('id')->get();
    }

    public function find($id)
    {
        return GalleryCategory::find($id);
    }

    public function create(array $data)
    {
        try {
            return GalleryCategory::create($data);
        } catch (\Exception $e) {
            dd($e->getMessage());
        }
    }

    public function update($id, array $data)
    {
        try {
            $category = GalleryCategory::find($id);
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
        return GalleryCategory::destroy($id);
    }
}
