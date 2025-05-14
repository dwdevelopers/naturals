<?php

namespace App\Repositories;

interface GalleryRepositoryInterface
{
    public function all();
    public function find($id);
    public function create(array $data);
    public function createWithImages(array $data, array $imagePaths); // Add this line
    public function update($id, array $data);
    public function updateWithImages($id, array $data, array $imagePaths); // Add this line
    public function delete($id);
}
