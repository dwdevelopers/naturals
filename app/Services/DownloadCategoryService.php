<?php
namespace App\Services;

use App\Repositories\DownloadCategoryRepositoryInterface;

class DownloadCategoryService
{
    protected $downloadCategoryRepository;

    public function __construct(DownloadCategoryRepositoryInterface $downloadCategoryRepository)
    {
        $this->downloadCategoryRepository = $downloadCategoryRepository;
    }

    public function getAllCategoryDownloads()
    {
        return $this->downloadCategoryRepository->all();
    }

    public function getCategoryDownloadById($id)
    {
        return $this->downloadCategoryRepository->find($id);
    }

    public function createDownloadCategory(array $data)
    {

        return $this->downloadCategoryRepository->create($data);
    }

    public function updateDownloadCategory($id, array $data)
    {
        return $this->downloadCategoryRepository->update($id, $data);
    }

    public function deleteDownloadCategory($id)
    {
        return $this->downloadCategoryRepository->delete($id);
    }
}
