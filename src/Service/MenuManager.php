<?php

namespace App\Service;

use App\Entity\Category;
use App\Entity\Product;

class MenuManager
{
    private $categoriesManager;

    public function __construct(CategoriesManager $categoriesManager)
    {
        $this->categoriesManager = $categoriesManager;
    }

    /**
     *
     * @param int $parentId
     *
     * @return string
     */
    public function displayMenu(bool $userLoggedIn, int $parentId = 0): string
    {
        /** @var Category[] $categories */
        $categories = $this->categoriesManager->getCategoriesByParentId($parentId, $userLoggedIn);
        $menu = '';

        if (is_array($categories) && count($categories)) {
            $menu = '<ul>';
            foreach ($categories as $category) {
                $menu .= '<li style="margin-top:5px;">';

                $menu .= $category->getActive() ? '<span style="color: black;">' : '<span style="color: grey;">';
                $menu .= $category->getName();
                $menu .= '</span>';

                if ($userLoggedIn) {
                    $menu .= ' (<span style="font-weight: bold;">' . $category->getProductsCount() . '</span>)';
                    $menu .= ' (<span style="font-weight: bold;">' . $category->getChildCount() . '</span> of ' . $category->getMaxAllowedChildren() . ')';
                } else {
                    $menu .= ' (<span style="font-weight: bold;">' . $category->getActiveProductsCount() . '</span>)';
                    /*$menu .= ' (<span style="font-weight: bold;">' . $category->getActiveChildCount() . '</span> of ' . $category->getMaxAllowedChildren(
                        ) . ')';*/
                }

                if ($userLoggedIn) {
                    $menu .= $this->getCategoryEditLinks($category);
                }

                $menu .= '</li>';
                $menu .= $this->displayMenu($userLoggedIn, $category->getId()); // recursion

                foreach ($category->getProducts() as $product) {
                    if (!$userLoggedIn) {
                        if ($product->getActive()) {
                            $menu .= $this->displayProductsMenu($userLoggedIn, $product);
                        }
                    } else {
                        $menu .= $this->displayProductsMenu($userLoggedIn, $product);
                    }
                }
            }

            $menu .= '</li></ul>';
        }

        return $menu;
    }

    private function getCategoryEditLinks(Category $category): string
    {
        $menu = '';

        if ($category->getChildCount() !== $category->getMaxAllowedChildren()) {
            $menu .= ' | <a id="add_category_' . $category->getId() . '" href="/categories/add/' . $category->getId(
                ) . '" style="color: green">Add Subcategory</a>';
            $menu .= ' | <a id="add_product_' . $category->getId() . '" href="/products/add/' . $category->getId() . '" style="color: green">Add Product</a>';
        }

        $menu .= ' | <a href="/categories/edit/' . $category->getId() . '" style="font-weight: bold;">Edit</a>';
        $menu .= ' | <a href="/categories/delete/' . $category->getId() . '" title="Click to delete" style="color: red">X</a>';

        return $menu;
    }

    /**
     *
     * @param Product $productId
     *
     * @return string
     */
    public function displayProductsMenu($userLoggedIn, Product $product): string
    {
        $menu = '<ul>';

        $menu .= '<li>';
        $menu .= $product->getActive() ? '<span style="color: black;">' : '<span style="color: grey;">';
        $menu .= $product->getName() . ' (' . $product->getCurrency() . '' . $product->getPrice() . ')';
        $menu .= '</span>';

        if ($userLoggedIn) {
            $menu .= $this->getProductEditLinks($product);
        }

        $menu .= '</li>';
        $menu .= '</li></ul>';

        return $menu;
    }

    private function getProductEditLinks(Product $product): string
    {
        $menu = '';

        $menu .= ' | <a href="/products/edit/' . $product->getId() . '">Edit</a>';
        $menu .= ' | <a href="/products/delete/' . $product->getId() . '" style="color: red">[x]</a>';

        return $menu;
    }
}