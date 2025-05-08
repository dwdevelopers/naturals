<?php

namespace App\Repositories;

use App\Models\Gallery;

class GalleryRepository implements GalleryRepositoryInterface
{
    public function all()
    {
        return Gallery::orderByDesc('id')->get();
    }

    public function find($id)
    {
        return Gallery::find($id);
    }

    public function create(array $data)
    {
        return Gallery::create($data);
    }

    public function update($id, array $data)
    {
        try {
            $gallery = Gallery::find($id);
            if ($gallery) {
                $gallery->update($data);
                return $gallery;
            }
        } catch (\Exception $e) {
            dd($e->getMessage());
        }
        return null;
    }

    public function delete($id)
    {
        return Gallery::destroy($id);
    }
}
