<?php declare(strict_types=1);

namespace Omnifraud\Request;

use Omnifraud\Request\Data\Account;
use Omnifraud\Request\Data\Address;
use Omnifraud\Request\Data\Payment;
use Omnifraud\Request\Data\Purchase;
use Omnifraud\Request\Data\Session;

class Request
{
    /** @var \Omnifraud\Request\Data\Purchase */
    protected $purchase;

    /** @var \Omnifraud\Request\Data\Payment */
    protected $payment;

    /** @var \Omnifraud\Request\Data\Account */
    protected $account;

    /** @var \Omnifraud\Request\Data\Session */
    protected $session;

    /** @var \Omnifraud\Request\Data\Address */
    protected $shippingAddress;

    /** @var \Omnifraud\Request\Data\Address */
    protected $billingAddress;

    /** @var null|string */
    protected $uid;

    public function __construct()
    {
        $this->purchase = new Purchase();
        $this->payment = new Payment();
        $this->account = new Account();
        $this->session = new Session();
        $this->shippingAddress = new Address();
        $this->billingAddress = new Address();
    }

    public function getPurchase(): Purchase
    {
        return $this->purchase;
    }

    public function setPurchase(Purchase $purchase): void
    {
        $this->purchase = $purchase;
    }

    public function getPayment(): Payment
    {
        return $this->payment;
    }

    public function setPayment(Payment $payment): void
    {
        $this->payment = $payment;
    }

    public function getAccount(): Account
    {
        return $this->account;
    }

    public function setAccount(Account $account): void
    {
        $this->account = $account;
    }

    public function getSession(): Session
    {
        return $this->session;
    }

    public function setSession(Session $session): void
    {
        $this->session = $session;
    }

    public function getShippingAddress(): Address
    {
        return $this->shippingAddress;
    }

    public function setShippingAddress(Address $shippingAddress): void
    {
        $this->shippingAddress = $shippingAddress;
    }

    public function getBillingAddress(): Address
    {
        return $this->billingAddress;
    }

    public function setBillingAddress(Address $billingAddress): void
    {
        $this->billingAddress = $billingAddress;
    }

    public function getUid(): ?string
    {
        return $this->uid;
    }

    public function setUid(?string $uid): void
    {
        $this->uid = $uid;
    }
}
