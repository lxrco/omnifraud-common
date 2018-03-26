<?php

namespace Tests\Request\Data;

use Omnifraud\Request\Data\Address;
use PHPUnit\Framework\TestCase;

class AddressTest extends TestCase
{
    /** @var \Omnifraud\Request\Data\Address */
    private $account;

    public function setUp()
    {
        $this->account = new Address();
    }

    public function testPhone()
    {
        $this->account->setPhone('5141234567');
        $this->assertSame('5141234567', $this->account->getPhone());
    }
    public function testFullName()
    {
        $this->account->setFullName('John Doe');
        $this->assertSame('John Doe', $this->account->getFullName());
    }
    public function testStreetAddress()
    {
        $this->account->setStreetAddress('1 first avenue');
        $this->assertSame('1 first avenue', $this->account->getStreetAddress());
    }
    public function testUnit()
    {
        $this->account->setUnit('APT 25');
        $this->assertSame('APT 25', $this->account->getUnit());
    }
    public function testCity()
    {
        $this->account->setCity('Montreal');
        $this->assertSame('Montreal', $this->account->getCity());
    }
    public function testState()
    {
        $this->account->setState('QC');
        $this->assertSame('QC', $this->account->getState());
    }
    public function testPostalCode()
    {
        $this->account->setPostalCode('A1A 2B2');
        $this->assertSame('A1A 2B2', $this->account->getPostalCode());
    }
    public function testCountryCode()
    {
        $this->account->setCountryCode('CA');
        $this->assertSame('CA', $this->account->getCountryCode());
    }
}
