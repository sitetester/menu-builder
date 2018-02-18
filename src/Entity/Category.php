<?php

namespace App\Entity;

use Doctrine\Common\Collections\ArrayCollection;

class Category
{
    private $id;
    private $parentId = 0;
    private $name;
    private $active = true;
    private $maxAllowedChildren;

    private $childCount = 0;
    private $activeChildCount = 0;

    private $productsCount = 0;
    private $activeProductsCount = 0;

    private $products;

    public function __construct()
    {
        $this->products = new ArrayCollection();
    }

    public function getId(): int
    {
        return $this->id;
    }

    public function setId(int $id): Category
    {
        $this->id = $id;

        return $this;
    }

    public function getParentId(): int
    {
        return $this->parentId;
    }

    public function setParentId(int $parentId): Category
    {
        $this->parentId = $parentId;

        return $this;
    }

    public function getMaxAllowedChildren(): ?int
    {
        return $this->maxAllowedChildren;
    }

    public function setMaxAllowedChildren(int $maxAllowedChildren): Category
    {
        $this->maxAllowedChildren = $maxAllowedChildren;

        return $this;
    }

    /**
     * @return Product[]
     */
    public function getProducts()
    {
        return $this->products;
    }

    public function getName(): ?string
    {
        return $this->name;
    }

    public function setName(string $name): Category
    {
        $this->name = $name;

        return $this;
    }

    public function getActive(): bool
    {
        return $this->active;
    }

    public function setActive(bool $active): Category
    {
        $this->active = $active;

        return $this;
    }

    public function getChildCount(): int
    {
        return $this->childCount;
    }

    public function setChildCount(int $childCount): Category
    {
        $this->childCount = $childCount;

        return $this;
    }

    public function getActiveChildCount(): int
    {
        return $this->activeChildCount;
    }

    public function setActiveChildCount(int $activeChildCount): Category
    {
        $this->activeChildCount = $activeChildCount;

        return $this;
    }

    public function getProductsCount(): ?int
    {
        return $this->productsCount;
    }

    public function setProductsCount(int $productsCount): Category
    {
        $this->productsCount = $productsCount;

        return $this;
    }

    public function getActiveProductsCount(): int
    {
        return $this->activeProductsCount;
    }

    public function setActiveProductsCount(int $activeProductsCount): Category
    {
        $this->activeProductsCount = $activeProductsCount;

        return $this;
    }
}
