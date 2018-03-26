<?php

namespace Tests\Request\Data;

use Omnifraud\Request\Data\Payment;
use PHPUnit\Framework\TestCase;

class PaymentTest extends TestCase
{
    /** @var \Omnifraud\Request\Data\Payment */
    private $payment;

    public function setUp()
    {
        $this->payment = new Payment();
    }

    public function testBin()
    {
        $this->payment->setBin(444444);
        $this->assertSame(444444, $this->payment->getBin());
    }

    public function testLast4()
    {
        $this->payment->setLast4('0123');
        $this->assertSame('0123', $this->payment->getLast4());
    }

    public function testExpiryMonth()
    {
        $this->payment->setExpiryMonth(3);
        $this->assertSame(3, $this->payment->getExpiryMonth());
    }

    public function testExpiryYear()
    {
        $this->payment->setExpiryYear(19);
        $this->assertSame(19, $this->payment->getExpiryYear());
    }

    public function testExpiryYearFullYear()
    {
        $this->payment->setExpiryYear(2019);
        $this->assertSame(19, $this->payment->getExpiryYear());
    }

    public function testAvs()
    {
        $this->payment->setAvs('X');
        $this->assertSame('X', $this->payment->getAvs());
    }

    public function testCvv()
    {
        $this->payment->setCvv('M');
        $this->assertSame('M', $this->payment->getCvv());
    }
}
