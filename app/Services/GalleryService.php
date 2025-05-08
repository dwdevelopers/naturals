<?php

namespace App\Services;

use App\Repositories\GalleryRepositoryInterface;

class GalleryService
{
    protected $galleryRepository;

    public function __construct(GalleryRepositoryInterface $galleryRepository)
    {
        $this->galleryRepository = $galleryRepository;
    }

    public function getAllGalleries()
    {
        return $this->galleryRepository->all();
    }

    public function getGalleryById($id)
    {
        return $this->galleryRepository->find($id);
    }

    public function createGallery(array $data, array $imagePaths)
    {
        foreach ($imagePaths as $path) {
            $this->galleryRepository->create([
                'gallery_category_id' => $data['gallery_category_id'],
                'title'               => $data['title'],
                'image_path'          => $path,
                'is_active'           => $data['is_active'] === 'active',
            ]);
        }
    }

    public function updateGallery(int $id, array $data, array $imagePaths)
    {
        // 1) Find the record to get its category
        $gallery = $this->galleryRepository->find($id);
        $categoryId = $gallery->gallery_category_id;

        // 2) Delete all images in that category
        $this->galleryRepository->deleteByCategory($categoryId);

        // 3) Re-create every uploaded image
        $this->createGallery($data, $imagePaths);
    }

    public function deleteGallery($id)
    {
        return $this->galleryRepository->delete($id);
    }
}
