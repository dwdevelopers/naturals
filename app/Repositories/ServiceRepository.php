<?php

namespace App\Repositories;

use App\Models\Service;

class ServiceRepository implements ServiceRepositoryInterface
{
    public function all()
    {
        return Service::orderByDesc('id')->get();
    }

    public function find($id)
    {
        return Service::find($id);
    }

    public function create(array $data)
    {
        try {
            return Service::create($data);
        } catch (\Exception $e) {
            dd($e->getMessage());  // Optionally, log the exception or handle it more gracefully.
        }
    }

    public function update($id, array $data)
    {
        try {
            $service = Service::find($id);
            if ($service) {
                $service->update($data);
                return $service;
            }
        } catch (\Exception $e) {
            dd($e->getMessage());  // Optionally, log the exception or handle it more gracefully.
        }
        return null;
    }

    public function delete($id)
    {
        return Service::destroy($id);
    }
}
