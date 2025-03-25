<?php

namespace App\Repositories;

use App\Models\ProjectActivity;

class ProjectActivityRepository implements ProjectActivityRepositoryInterface
{
    public function all()
    {
        
        return ProjectActivity::with('project')->orderByDesc('id')->get();
    }

    public function find($id)
    {
        return ProjectActivity::find($id);
    }

    public function create(array $data)
    {
        try {
            return ProjectActivity::create($data);
        } catch (\Exception $e) {
            dd($e->getMessage());
        }
    }

    public function update($id, array $data)
    {
        try {
            $activity = ProjectActivity::find($id);
            if ($activity) {
                $activity->update($data);
                return $activity;
            }
        } catch (\Exception $e) {
            dd($e->getMessage());
        }
        return null;
    }

    public function delete($id)
    {
        return ProjectActivity::destroy($id);
    }
}
