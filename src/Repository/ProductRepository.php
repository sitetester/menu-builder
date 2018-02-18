<?php

namespace App\Repository;

use App\Entity\Product;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Symfony\Bridge\Doctrine\RegistryInterface;

class ProductRepository extends ServiceEntityRepository
{
    public function __construct(RegistryInterface $registry)
    {
        parent::__construct($registry, Product::class);
    }

    public function deleteProductsByCategoriesIds(array $categoryIds): void
    {
        $categoryIds = implode(', ', $categoryIds);

        $query = $this->getEntityManager()->createQuery(
            "DELETE FROM App\Entity\Product p WHERE p.category IN ($categoryIds)"
        );

        $query->execute();
    }
}
