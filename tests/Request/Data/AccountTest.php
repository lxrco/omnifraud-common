<?php

namespace Tests\Request\Data;

use Omnifraud\Request\Data\Account;
use PHPUnit\Framework\TestCase;

class AccountTest extends TestCase
{
    /** @var \Omnifraud\Request\Data\Account */
    private $account;

    public function setUp()
    {
        $this->account = new Account();
    }

    public function testId()
    {
        $this->account->setId('USERID');
        $this->assertSame('USERID', $this->account->getId());
    }

    public function testUsername()
    {
        $this->account->setUsername('jane.doe');
        $this->assertSame('jane.doe', $this->account->getUsername());
    }

    public function testEmail()
    {
        $this->account->setEmail('jane.doe@example.org');
        $this->assertSame('jane.doe@example.org', $this->account->getEmail());
    }

    public function testPhone()
    {
        $this->account->setPhone('5141234567');
        $this->assertSame('5141234567', $this->account->getPhone());
    }

    public function testCreatedAt()
    {
        $this->account->setCreatedAt(new \DateTime('2011-01-01 01:01:01'));
        $this->assertSame('2011-01-01 01:01:01', $this->account->getCreatedAt()->format('Y-m-d H:i:s'));
    }

    public function testUpdatedAt()
    {
        $this->account->setUpdatedAt(new \DateTime('2011-01-01 01:01:01'));
        $this->assertSame('2011-01-01 01:01:01', $this->account->getUpdatedAt()->format('Y-m-d H:i:s'));
    }

    public function testLastOrderId()
    {
        $this->account->setLastOrderId('ORDER25MD23');
        $this->assertSame('ORDER25MD23', $this->account->getLastOrderId());
    }

    public function testTotalOrderCount()
    {
        $this->account->setTotalOrderCount(7);
        $this->assertSame(7, $this->account->getTotalOrderCount());
    }

    public function testTotalOrderAmount()
    {
        $this->account->setTotalOrderAmount(123456);
        $this->assertSame(123456, $this->account->getTotalOrderAmount());
    }

    public function testFailedCreditsCardsCount()
    {
        $this->account->setFailedCreditsCardsCount(2);
        $this->assertSame(2, $this->account->getFailedCreditsCardsCount());
    }
}
