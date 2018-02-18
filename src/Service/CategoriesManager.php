<?php

namespace App\Service;

use App\Entity\Category;
use Doctrine\ORM\EntityManagerInterface;

class CategoriesManager
{
    private $entityManager;
    private $productManager;

    public function __construct(EntityManagerInterface $entityManager, ProductManager $productManager)
    {
        $this->entityManager = $entityManager;
        $this->productManager = $productManager;
    }

    /**
     * This method is called when some product is added|deleted
     * Updates childCount field of all parent level category tree
     *
     */
    public function updateParentCategoryTreeCounts(
        int $categoryId,
        string $operator,
        bool $childCount = true,
        bool $productsCount = true
    ): void {
        $this->getRepository()->incrementDecrementCountsByIds(
            $this->getParentCategoryTreeIds($categoryId),
            $operator,
            $childCount,
            $productsCount
        );
    }

    private function getRepository()
    {
        return $this->entityManager->getRepository(Category::class);
    }

    public function getParentCategoryTreeIds(int $categoryId): array
    {
        $categoryIds = [];

        $category = $this->entityManager->getRepository(Category::class)->find($categoryId);
        if ($category !== null) {

            if ($category->getParentId() !== 0) {
                $categoryIds = array_merge($categoryIds, $this->getParentCategoryTreeIds($category->getParentId()));
            }

            $categoryIds[] = $category->getId();
        }

        return $categoryIds;
    }

    public function updateParentCategoryTreeActiveCounts(
        int $categoryId,
        string $operator,
        bool $activeChildCount = true,
        bool $activeProductsCount = true
    ): void {
        $this->getRepository()->incrementDecrementActiveCountsByIds(
            $this->getParentCategoryTreeIds($categoryId),
            $operator,
            $activeChildCount,
            $activeProductsCount
        );
    }

    public function deleteCategory(int $id): void
    {
        $childCategoryTreeIds = $this->getChildCategoryTreeIds($id);

        // delete all products
        $this->productManager->deleteProductsByCategoryIds($childCategoryTreeIds);

        // decrement prent category tree child count by (childCount)
        $this->getRepository()->decrementChildCountByIds(
            $this->getParentCategoryTreeIds($id),
            $this->getRepository()->find($id)->getChildCount()
        );

        // delete all subcategories, including current one
        $this->getRepository()->deleteCategoriesByIds($childCategoryTreeIds);
    }

    private function getChildCategoryTreeIds(int $parentId): array
    {
        $categoryIds = [];

        $categories = $this->entityManager->getRepository(Category::class)->getCategoriesByParentId($parentId, false);
        if (count($categories)) {
            foreach ($categories as $category) {
                $categoryIds = array_merge($categoryIds, $this->getChildCategoryTreeIds($category->getId())); // 30
            }
        }

        $categoryIds[] = $parentId;

        return $categoryIds;
    }

    public function getCategoriesByParentId(int $parentId, bool $userLoggedIn): array
    {
        return $this->getRepository()->getCategoriesByParentId($parentId, $userLoggedIn);
    }

    public function isParentCategoryTreeIncrementedChildCountGreaterThanMaxAllowedChildren(int $categoryId): bool
    {
        if ($categoryId !== 0) {
            foreach ($this->getParentCategoryTreeIds($categoryId) as $categoryTreeId) {
                $treeCategory = $this->getRepository()->find($categoryTreeId);

                if (($treeCategory->getChildCount() + 1) > $treeCategory->getMaxAllowedChildren()) {
                    return true;
                }
            }
        }

        return false;
    }

    public function isGreaterThanParentCategoryTreeMaxAllowedChildren(int $maxAllowedChildren, int $parentCategoryId): bool
    {
        if ($parentCategoryId !== 0) {
            foreach ($this->getParentCategoryTreeIds($parentCategoryId) as $categoryTreeId) {
                if ($maxAllowedChildren > $this->getRepository()->find($categoryTreeId)->getMaxAllowedChildren()) {
                    return true;
                }
            }
        }

        return false;
    }

    public function isLessThanChildCategoryTreeMaxAllowedChildren(Category $currentCategory): bool
    {
        foreach ($this->getChildCategoryTreeIds($currentCategory->getId()) as $childCategoryTreeId) {
            if ($currentCategory->getMaxAllowedChildren() < $this->getRepository()->find($childCategoryTreeId)->getMaxAllowedChildren()) {
                return true;
            }
        }

        return false;
    }
}