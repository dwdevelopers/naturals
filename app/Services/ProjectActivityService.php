<?php

namespace App\Services;

use App\Repositories\ProjectActivityRepositoryInterface;

class ProjectActivityService
{
    protected $projectActivityRepository;

    public function __construct(ProjectActivityRepositoryInterface $projectActivityRepository)
    {
        $this->projectActivityRepository = $projectActivityRepository;
    }

    public function getAllActivities()
    {
        return $this->projectActivityRepository->all();
    }

    public function getActivityById($id)
    {
        return $this->projectActivityRepository->find($id);
    }

    public function createActivity(array $data)
    {
        return $this->projectActivityRepository->create($data);
    }

    public function updateActivity($id, array $data)
    {
        return $this->projectActivityRepository->update($id, $data);
    }

    public function deleteActivity($id)
    {
        return $this->projectActivityRepository->delete($id);
    }
}
