<?php
namespace App\Services;

use App\Repositories\DownloadRepositoryInterface;

class DownloadService
{
    protected $downloadRepository;

    public function __construct(DownloadRepositoryInterface $downloadRepository)
    {
        $this->downloadRepository = $downloadRepository;
    }

    public function getAllDownloads()
    {
        return $this->downloadRepository->all();
    }

    public function getDownloadById($id)
    {
        return $this->downloadRepository->find($id);
    }

    public function createDownload(array $data)
    {

        return $this->downloadRepository->create($data);
    }

    public function updateDownload($id, array $data)
    {
        return $this->downloadRepository->update($id, $data);
    }

    public function deleteDownload($id)
    {
        return $this->downloadRepository->delete($id);
    }
}
