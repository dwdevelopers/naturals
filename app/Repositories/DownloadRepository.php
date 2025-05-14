<?php
namespace App\Repositories;

use App\Models\Download;
use App\Repositories\DownloadRepositoryInterface;

class DownloadRepository implements DownloadRepositoryInterface
{
    public function all()
    {
        return Download::with('category')->orderByDesc('id')->get();
    }

    public function find($id)
    {
        return Download::findOrFail($id);
    }

    public function create(array $data)
    {
        try {

             Download::create($data);
        } catch (\Exception $e) {
            dd($e->getMessage());
        }
    }

    public function update($id, array $data)
    {

        $download = $this->find($id);
        $download->update($data);
        return $download;
    }

    public function delete($id)
    {
        return Download::destroy($id);
    }
}
