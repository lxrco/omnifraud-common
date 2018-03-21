<?php declare(strict_types=1);

namespace Omnifraud\Request\Data;

class Account
{
    /** @var null|string */
    protected $id;

    /** @var null|string */
    protected $username;

    /** @var null|string */
    protected $email;

    /** @var null|string */
    protected $phone;

    /** @var null|\DateTime */
    protected $createdAt;

    /** @var null|\DateTime */
    protected $updatedAt;

    /** @var null|string */
    protected $lastOrderId;

    /** @var null|int Number of orders the customer made */
    protected $totalOrderCount;

    /** @var null|int Total amount of orders made by customer */
    protected $totalOrderAmount;

    /** @var null|int Number of different credit cards that where tested and failed */
    protected $failedCreditsCardsCount;

    public function getId()
    {
        return $this->id;
    }

    public function setId(?string $id): void
    {
        $this->id = $id;
    }

    public function getUsername(): ?string
    {
        return $this->username;
    }

    public function setUsername(?string $username): void
    {
        $this->username = $username;
    }

    public function getEmail(): ?string
    {
        return $this->email;
    }

    public function setEmail(?string $email)
    {
        $this->email = $email;
    }

    public function getPhone(): ?string
    {
        return $this->phone;
    }

    public function setPhone(?string $phone)
    {
        $this->phone = $phone;
    }

    public function getCreatedAt(): ?\DateTime
    {
        return $this->createdAt;
    }

    public function setCreatedAt(?\DateTime $createdAt): void
    {
        $this->createdAt = $createdAt;
    }

    public function getUpdatedAt(): ?\DateTime
    {
        return $this->updatedAt;
    }

    public function setUpdatedAt(?\DateTime $updatedAt): void
    {
        $this->updatedAt = $updatedAt;
    }

    public function getLastOrderId(): ?string
    {
        return $this->lastOrderId;
    }

    public function setLastOrderId(?string $lastOrderId): void
    {
        $this->lastOrderId = $lastOrderId;
    }

    public function getTotalOrderCount(): ?int
    {
        return $this->totalOrderCount;
    }

    public function setTotalOrderCount(?int $totalOrderCount): void
    {
        $this->totalOrderCount = $totalOrderCount;
    }

    public function getTotalOrderAmount(): ?int
    {
        return $this->totalOrderAmount;
    }

    public function setTotalOrderAmount(?int $totalOrderAmount)
    {
        $this->totalOrderAmount = $totalOrderAmount;
    }

    public function getFailedCreditsCardsCount(): ?int
    {
        return $this->failedCreditsCardsCount;
    }

    public function setFailedCreditsCardsCount(?int $failedCreditsCardsCount)
    {
        $this->failedCreditsCardsCount = $failedCreditsCardsCount;
    }
}
