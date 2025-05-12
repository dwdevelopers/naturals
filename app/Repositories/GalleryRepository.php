<?php

namespace App\Repositories;

use App\Models\Gallery;

class GalleryRepository implements GalleryRepositoryInterface
{
    public function all()
    {
        return Gallery::with(['category', 'images'])
            ->latest()
            ->get();
    }

    public function find($id)
    {
        return Gallery::with('images')->findOrFail($id);
    }

    public function create(array $data)
    {
        return Gallery::create($data);
    }

    public function createWithImages(array $data, array $imagePaths)
    {
        $gallery = $this->create([
            'gallery_category_id' => $data['gallery_category_id'],
            'title' => $data['title'],
            'is_active' => $data['is_active'] === 'active',
        ]);

        foreach ($imagePaths as $path) {
            $gallery->images()->create(['image_path' => $path]);
        }

        return $gallery;
    }

    public function update($id, array $data)
    {
        $gallery = Gallery::findOrFail($id);
        $gallery->update($data);
        return $gallery;
    }

    public function updateWithImages($id, array $data, array $imagePaths)
    {
        $gallery = Gallery::findOrFail($id);

        $gallery->update([
            'gallery_category_id' => $data['gallery_category_id'],
            'title' => $data['title'],
            'status' => $data['is_active'] === 'active',
        ]);

        // Delete old images
        $gallery->images()->delete();

        // Add new images
        foreach ($imagePaths as $path) {
            $gallery->images()->create(['image_path' => $path]);
        }

        return $gallery;
    }

    public function delete($id)
    {
        $gallery = Gallery::findOrFail($id);
        $gallery->images()->delete();
        return $gallery->delete();
    }
}
