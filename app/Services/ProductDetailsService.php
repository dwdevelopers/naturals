<?php
namespace App\Services;

use App\Repositories\ProductDetailsRepositoryInterface;

class ProductDetailsService
{
    protected $productDetailsRepository;

    public function __construct(ProductDetailsRepositoryInterface $productDetailsRepository)
    {
        $this->productDetailsRepository = $productDetailsRepository;
    }

    public function getAllProductDetails()
    {
        return $this->productDetailsRepository->all();
    }

    public function getProductDetailById($id)
    {
        return $this->productDetailsRepository->find($id);
    }

    public function createProductDetail(array $data)
    {
        return $this->productDetailsRepository->create($data);
    }

    public function updateProductDetail($id, array $data)
    {
        return $this->productDetailsRepository->update($id, $data);
    }

    public function deleteProductDetail($id)
    {
        return $this->productDetailsRepository->delete($id);
    }
}
