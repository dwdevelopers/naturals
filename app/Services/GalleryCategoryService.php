<?php

namespace App\Services;

use App\Repositories\GalleryCategoryRepositoryInterface;

class GalleryCategoryService
{
    protected $galleryCategoryRepository;

    public function __construct(GalleryCategoryRepositoryInterface $galleryCategoryRepository)
    {
        $this->galleryCategoryRepository = $galleryCategoryRepository;
    }

    public function getAllCategories()
    {
        return $this->galleryCategoryRepository->all();
    }

    public function getCategoryById($id)
    {
        return $this->galleryCategoryRepository->find($id);
    }

    public function createCategory(array $data)
    {
        return $this->galleryCategoryRepository->create($data);
    }

    public function updateCategory($id, array $data)
    {
        return $this->galleryCategoryRepository->update($id, $data);
    }

    public function deleteCategory($id)
    {
        return $this->galleryCategoryRepository->delete($id);
    }
}
