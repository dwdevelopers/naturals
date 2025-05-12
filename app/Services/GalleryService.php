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
        return $this->galleryRepository->createWithImages($data, $imagePaths);
    }

    public function updateGallery(int $id, array $data, array $imagePaths)
    {
        return $this->galleryRepository->updateWithImages($id, $data, $imagePaths);
    }

    public function deleteGallery($id)
    {
        return $this->galleryRepository->delete($id);
    }
}

