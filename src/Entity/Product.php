<?php

namespace App\Entity;

class Product
{
    private $id;
    private $name;
    private $active = true;
    private $price;
    private $currency = '€';
    private $category;

    public function getCategory(): Category
    {
        return $this->category;
    }

    public function setCategory(Category $category): Product
    {
        $this->category = $category;

        return $this;
    }

    public function getId(): int
    {
        return $this->id;
    }

    public function getName(): string
    {
        return $this->name;
    }

    public function setName(string $name): Product
    {
        $this->name = $name;

        return $this;
    }

    public function getActive(): bool
    {
        return (bool)$this->active;
    }

    public function setActive(bool $active): Product
    {
        $this->active = $active;

        return $this;
    }

    public function getPrice(): ?float
    {
        return $this->price;
    }

    public function setPrice(float $price): Product
    {
        $this->price = $price;

        return $this;
    }

    public function getCurrency(): string
    {
        return $this->currency;
    }

    public function setCurrency(string $currency): Product
    {
        $this->currency = $currency;

        return $this;
    }

}
