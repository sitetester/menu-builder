<?php

namespace App\Service;

use App\Entity\Category;
use App\Entity\Product;
use App\Repository\ProductRepository;
use Doctrine\ORM\EntityManagerInterface;

class ProductManager
{
    private $entityManager;

    public function __construct(EntityManagerInterface $entityManager)
    {
        $this->entityManager = $entityManager;
    }

    public function deleteProductsByCategoryIds(array $categoryIds): void
    {
        /** @var ProductRepository $repository */
        $repository = $this->entityManager->getRepository(Product::class);
        $repository->deleteProductsByCategoriesIds($categoryIds);
    }

}