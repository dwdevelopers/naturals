<?php
namespace App\Repositories;

use App\Models\ProductDetails;
use App\Repositories\ProductDetailsRepositoryInterface;

class ProductDetailsRepository implements ProductDetailsRepositoryInterface
{
    public function all()
    {
        return ProductDetails::with('product')->orderByDesc('id')->get();
    }

    public function find($id)
    {
        return ProductDetails::findOrFail($id);
    }

    public function create(array $data)
    {
        return ProductDetails::create($data);
    }

    public function update($id, array $data)
    {
        $productDetails = $this->find($id);
        $productDetails->update($data);
        return $productDetails;
    }

    public function delete($id)
    {
        return ProductDetails::destroy($id);
    }
}
