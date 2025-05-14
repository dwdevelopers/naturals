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
        try {
            if (! empty($imagePaths)) {
                return $this->galleryRepository->updateWithImages($id, $data, $imagePaths);
            }

            return $this->galleryRepository->update($id, $data);
        } catch (\Exception $e) {
            dd($e->getMessage());
            report($e); // Log the exception
            return redirect()->back()->withErrors("Error {$action}ing gallery: " . $e->getMessage());
        }
    }

    public function deleteGallery($id)
    {
        return $this->galleryRepository->delete($id);
    }
}
