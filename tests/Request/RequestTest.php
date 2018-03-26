<?php

namespace Tests\Request;

use Omnifraud\Request\Data\Account;
use Omnifraud\Request\Data\Address;
use Omnifraud\Request\Data\Payment;
use Omnifraud\Request\Data\Purchase;
use Omnifraud\Request\Data\Session;
use Omnifraud\Request\Request;
use PHPUnit\Framework\TestCase;

class RequestTest extends TestCase
{
    /** @var \Omnifraud\Request\Request */
    private $request;

    public function setUp()
    {
        $this->request = new Request();
    }

    public function testDefaultValues()
    {
        $request = new Request();

        $this->assertInstanceOf(Purchase::class, $request->getPurchase());
        $this->assertInstanceOf(Payment::class, $request->getPayment());
        $this->assertInstanceOf(Account::class, $request->getAccount());
        $this->assertInstanceOf(Session::class, $request->getSession());
        $this->assertInstanceOf(Address::class, $request->getShippingAddress());
        $this->assertInstanceOf(Address::class, $request->getBillingAddress());
        $this->assertNull($request->getUid());
    }

    public function testPurchase()
    {
        $purchase = new Purchase();
        $this->request->setPurchase($purchase);
        $this->assertSame($purchase, $this->request->getPurchase());
    }

    public function testPayment()
    {
        $payment = new Payment();
        $this->request->setPayment($payment);
        $this->assertSame($payment, $this->request->getPayment());
    }

    public function testAccount()
    {
        $account = new Account();
        $this->request->setAccount($account);
        $this->assertSame($account, $this->request->getAccount());
    }

    public function testSession()
    {
        $session = new Session();
        $this->request->setSession($session);
        $this->assertSame($session, $this->request->getSession());
    }

    public function testShippingAddress()
    {
        $shippingAddress = new Address();
        $this->request->setShippingAddress($shippingAddress);
        $this->assertSame($shippingAddress, $this->request->getShippingAddress());
    }

    public function testBillingAddress()
    {
        $billingAddress = new Address();
        $this->request->setBillingAddress($billingAddress);
        $this->assertSame($billingAddress, $this->request->getBillingAddress());
    }

    public function testUid()
    {
        $this->request->setUid('FRAUD00001');
        $this->assertSame('FRAUD00001', $this->request->getUid());
    }
}
