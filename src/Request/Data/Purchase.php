<?php declare(strict_types=1);

namespace Omnifraud\Request\Data;

class Purchase
{
    /** @var null|string */
    protected $id;

    /** @var null|\DateTime */
    protected $createdAt;

    /** @var null|string */
    protected $currencyCode;

    /** @var null|int Total in cents */
    protected $total;

    /** @var \Omnifraud\Request\Data\Product[] */
    protected $products = [];

    public function getId(): ?string
    {
        return $this->id;
    }

    public function setId(?string $id)
    {
        $this->id = $id;
    }


    public function getCreatedAt(): ?\DateTime
    {
        return $this->createdAt;
    }

    public function setCreatedAt(?\DateTime $createdAt): void
    {
        $this->createdAt = $createdAt;
    }

    public function getCurrencyCode(): ?string
    {
        return $this->currencyCode;
    }

    public function setCurrencyCode(?string $currencyCode)
    {
        $this->currencyCode = $currencyCode;
    }

    /**
     * @return \Omnifraud\Request\Data\Product[]
     */
    public function getProducts(): array
    {
        return $this->products;
    }

    /**
     * @param \Omnifraud\Request\Data\Product[] $products
     */
    public function setProducts(array $products): void
    {
        $this->products = $products;
    }

    public function addProduct(Product $product): void
    {
        $this->products[] = $product;
    }

    public function getTotal(): ?int
    {
        return $this->total;
    }

    public function setTotal(?int $total): void
    {
        $this->total = $total;
    }
}
