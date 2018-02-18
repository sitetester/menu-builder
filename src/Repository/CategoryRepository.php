<?php

namespace App\Repository;

use App\Entity\Category;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Symfony\Bridge\Doctrine\RegistryInterface;

class CategoryRepository extends ServiceEntityRepository
{
    public function __construct(RegistryInterface $registry)
    {
        parent::__construct($registry, Category::class);
    }

    /**
     * @param int $parentId
     *
     * @return Category[]
     */
    public function getCategoriesByParentId(int $parentId, bool $userLoggedIn): array
    {
        $dql = "SELECT c FROM App\Entity\Category c  WHERE c.parentId = :parentId ";

        if (!$userLoggedIn) {
            $dql .= ' AND c.active =:active';
        }

        $dql .= ' ORDER BY c.id ASC ';

        $query = $this->getEntityManager()->createQuery($dql);
        $query->setParameter('parentId', $parentId);

        if (!$userLoggedIn) {
            $query->setParameter('active', true);
        }

        return $query->getResult();
    }

    public function incrementDecrementCountsByIds(array $categoryIds, string $operator, bool $childCount = true, bool $productsCount = true)
    {
        $categoryIds = implode(', ', $categoryIds);
        $query = " UPDATE App\Entity\Category c SET ";


        if ($childCount) {
            $query .= ($operator === '+') ? ' c.childCount = c.childCount + 1 ' : ' c.childCount = c.childCount - 1 ';
            $query .= ', ';
            $query .= ($operator === '+') ? ' c.activeChildCount = c.activeChildCount + 1 ' : ' c.activeChildCount = c.activeChildCount - 1 ';
        }

        if ($childCount && $productsCount) {
            $query .= ($childCount && $productsCount) ? ', ' : '';
        }

        if ($productsCount) {
            $query .= ($operator === '+') ? ' c.productsCount = c.productsCount + 1 ' : ' c.productsCount = c.productsCount - 1 ';
            $query .= ', ';
            $query .= ($operator === '+') ? ' c.activeProductsCount = c.activeProductsCount + 1 ' : ' c.activeProductsCount = c.activeProductsCount - 1 ';
        }

        $query .= " WHERE c.id IN ($categoryIds)";

        $query = $this->getEntityManager()->createQuery($query);

        return $query->execute();
    }


    public function incrementDecrementActiveCountsByIds(array $categoryIds, string $operator, bool $activeChildCount = true, bool $activeProductsCount = true)
    {
        $categoryIds = implode(', ', $categoryIds);
        $query = " UPDATE App\Entity\Category c SET ";


        if ($activeChildCount) {
            $query .= ($operator === '+') ? ' c.activeChildCount = c.activeChildCount + 1 ' : ' c.activeChildCount = c.activeChildCount - 1 ';
        }

        if ($activeChildCount && $activeProductsCount) {
            $query .= ', ';
        }

        if ($activeProductsCount) {
            $query .= ($operator === '+') ? ' c.activeProductsCount = c.activeProductsCount + 1 ' : ' c.activeProductsCount = c.activeProductsCount - 1 ';
        }

        $query .= " WHERE c.id IN ($categoryIds)";

        $query = $this->getEntityManager()->createQuery($query);

        return $query->execute();
    }

    public function decrementChildCountByIds(array $categoryIds, int $childCount)
    {
        $categoryIds = implode(', ', $categoryIds);

        $query = " UPDATE App\Entity\Category c SET c.childCount = c.childCount -  :childCount";
        $query .= " WHERE c.id IN ($categoryIds)";

        $query = $this->getEntityManager()->createQuery($query);
        $query->setParameter('childCount', $childCount);

        return $query->getResult();
    }

    public function deleteCategoriesByIds(array $categoryIds)
    {
        $categoryIds = implode(', ', $categoryIds);

        $query = $this->getEntityManager()->createQuery(
            "DELETE FROM App\Entity\Category c WHERE c.id IN ($categoryIds)"
        );

        return $query->getResult();
    }
}
