<?php declare(strict_types=1);

namespace Omnifraud\Request\Data;

class Product
{
    /** @var null|string */
    protected $sku;

    /** @var null|string */
    protected $name;

    /** @var null|string */
    protected $url;

    /** @var null|string */
    protected $image;

    /** @var null|int */
    protected $quantity;

    /** @var null|int Price in cents */
    protected $price;

    /** @var null|int Weight in grams */
    protected $weight;

    /** @var null|bool */
    protected $isDigital;

    /** @var null|string */
    protected $category;

    /** @var null|string */
    protected $subCategory;

    public function getSku(): ?string
    {
        return $this->sku;
    }

    public function setSku(?string $sku): void
    {
        $this->sku = $sku;
    }

    public function getName(): ?string
    {
        return $this->name;
    }

    public function setName(?string $name): void
    {
        $this->name = $name;
    }

    public function getUrl(): ?string
    {
        return $this->url;
    }

    public function setUrl(?string $url): void
    {
        $this->url = $url;
    }

    public function getImage(): ?string
    {
        return $this->image;
    }

    public function setImage(?string $image): void
    {
        $this->image = $image;
    }

    public function getQuantity(): ?int
    {
        return $this->quantity;
    }

    public function setQuantity(?int $quantity): void
    {
        $this->quantity = $quantity;
    }

    public function getPrice(): ?int
    {
        return $this->price;
    }

    public function setPrice(?int $price): void
    {
        $this->price = $price;
    }

    public function getWeight(): ?int
    {
        return $this->weight;
    }

    public function setWeight(?int $weight): void
    {
        $this->weight = $weight;
    }

    public function isDigital(): ?bool
    {
        return $this->isDigital;
    }

    public function setIsDigital(?bool $isDigital): void
    {
        $this->isDigital = $isDigital;
    }

    public function getCategory(): ?string
    {
        return $this->category;
    }


    public function setCategory(?string $category): void
    {
        $this->category = $category;
    }

    public function getSubCategory(): ?string
    {
        return $this->subCategory;
    }

    public function setSubCategory(?string $subCategory): void
    {
        $this->subCategory = $subCategory;
    }
}
