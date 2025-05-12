<?php

namespace App\Repositories;

use Illuminate\Database\Eloquent\Collection;
use App\Models\Service;

interface ServiceRepositoryInterface
{
    public function all();
    public function find($id);
    public function create(array $data);
    public function update($id, array $data);
    public function delete($id);
}
