<?php declare(strict_types=1);

namespace Omnifraud\Request\Data;

class Account
{
    /** @var string */
    protected $id;

    /** @var string */
    protected $username;

    /** @var string */
    protected $email;

    /** @var string */
    protected $phone;

    /** @var \DateTime */
    protected $createdAt;

    /** @var \DateTime */
    protected $updatedAt;

    /** @var string */
    protected $lastOrderId;

    /** @var int Number of orders the customer made */
    protected $totalOrderCount;

    /** @var int Total amount of orders made by customer */
    protected $totalOrderAmount;

    /** @var int Number of different credit cards that where tested and failed */
    protected $failedCreditsCardsCount;

    public function getId()
    {
        return $this->id;
    }

    public function setId($id): void
    {
        $this->id = $id;
    }

    public function getUsername(): string
    {
        return $this->username;
    }

    public function setUsername(string $username): void
    {
        $this->username = $username;
    }

    public function getEmail(): string
    {
        return $this->email;
    }

    public function setEmail(string $email)
    {
        $this->email = $email;
    }

    public function getPhone(): string
    {
        return $this->phone;
    }

    public function setPhone(string $phone)
    {
        $this->phone = $phone;
    }

    public function getCreatedAt(): \DateTime
    {
        return $this->createdAt;
    }

    public function setCreatedAt(\DateTime $createdAt): void
    {
        $this->createdAt = $createdAt;
    }

    public function getUpdatedAt(): \DateTime
    {
        return $this->updatedAt;
    }

    public function setUpdatedAt(\DateTime $updatedAt): void
    {
        $this->updatedAt = $updatedAt;
    }

    public function getLastOrderId(): string
    {
        return $this->lastOrderId;
    }

    public function setLastOrderId(string $lastOrderId): void
    {
        $this->lastOrderId = $lastOrderId;
    }

    public function getTotalOrderCount(): int
    {
        return $this->totalOrderCount;
    }

    public function setTotalOrderCount(int $totalOrderCount): void
    {
        $this->totalOrderCount = $totalOrderCount;
    }

    public function getTotalOrderAmount(): int
    {
        return $this->totalOrderAmount;
    }

    public function setTotalOrderAmount(int $totalOrderAmount)
    {
        $this->totalOrderAmount = $totalOrderAmount;
    }

    public function getFailedCreditsCardsCount(): int
    {
        return $this->failedCreditsCardsCount;
    }

    public function setFailedCreditsCardsCount(int $failedCreditsCardsCount)
    {
        $this->failedCreditsCardsCount = $failedCreditsCardsCount;
    }
}
