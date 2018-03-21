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

    /** @var int Number of orders customers */
    protected $totalOrderCount;

    /** @var int */
    protected $totalOrderAmount;

    /** @var int */
    protected $failedCreditsCardsCount;

    /**
     * @return string
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @param string $id
     */
    public function setId($id)
    {
        $this->id = $id;
    }

    /**
     * @return string
     */
    public function getUsername()
    {
        return $this->username;
    }

    /**
     * @param string $username
     */
    public function setUsername($username)
    {
        $this->username = $username;
    }

    /**
     * @return string
     */
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * @param string $email
     */
    public function setEmail($email)
    {
        $this->email = $email;
    }

    /**
     * @return string
     */
    public function getPhone()
    {
        return $this->phone;
    }

    /**
     * @param string $phone
     */
    public function setPhone($phone)
    {
        $this->phone = $phone;
    }

    /**
     * @return \DateTime
     */
    public function getCreatedAt()
    {
        return $this->createdAt;
    }

    /**
     * @param \DateTime $createdAt
     */
    public function setCreatedAt(\DateTime $createdAt)
    {
        $this->createdAt = $createdAt;
    }

    /**
     * @return \DateTime
     */
    public function getUpdatedAt()
    {
        return $this->updatedAt;
    }

    /**
     * @param \DateTime $updatedAt
     */
    public function setUpdatedAt(\DateTime $updatedAt)
    {
        $this->updatedAt = $updatedAt;
    }

    /**
     * @return string
     */
    public function getLastOrderId()
    {
        return $this->lastOrderId;
    }

    /**
     * @param string $lastOrderId
     */
    public function setLastOrderId($lastOrderId)
    {
        $this->lastOrderId = $lastOrderId;
    }

    /**
     * @return int
     */
    public function getTotalOrderCount()
    {
        return $this->totalOrderCount;
    }

    /**
     * @param int $totalOrderCount
     */
    public function setTotalOrderCount($totalOrderCount)
    {
        $this->totalOrderCount = $totalOrderCount;
    }

    /**
     * @return mixed
     */
    public function getTotalOrderAmount()
    {
        return $this->totalOrderAmount;
    }

    /**
     * @param mixed $totalOrderAmount
     */
    public function setTotalOrderAmount($totalOrderAmount)
    {
        $this->totalOrderAmount = $totalOrderAmount;
    }

    /**
     * @return int
     */
    public function getFailedCreditsCardsCount()
    {
        return $this->failedCreditsCardsCount;
    }

    /**
     * Number of different credit cards that where tested and failed
     * @param int $failedCreditsCardsCount
     */
    public function setFailedCreditsCardsCount($failedCreditsCardsCount)
    {
        $this->failedCreditsCardsCount = $failedCreditsCardsCount;
    }
}
