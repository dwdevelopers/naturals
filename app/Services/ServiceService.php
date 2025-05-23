<?php

namespace App\Services;

use App\Repositories\ServiceRepositoryInterface;

class ServiceService
{
    protected $serviceRepository;

    public function __construct(ServiceRepositoryInterface $serviceRepository)
    {
        $this->serviceRepository = $serviceRepository;
    }

    public function getAllServices()
    {
        return $this->serviceRepository->all();
    }

    public function getServiceById(int $id)
    {
        return $this->serviceRepository->find($id);
    }

    public function createService(array $data)
    {
        return $this->serviceRepository->create($data);
    }

    public function updateService(int $id, array $data)
    {
        return $this->serviceRepository->update($id, $data);
    }

    public function deleteService(int $id)
    {
        return $this->serviceRepository->delete($id);
    }
}
