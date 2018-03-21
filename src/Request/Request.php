<?php declare(strict_types=1);

namespace Omnifraud\Request;

use Omnifraud\Request\Data\Account;
use Omnifraud\Request\Data\Address;
use Omnifraud\Request\Data\Payment;
use Omnifraud\Request\Data\Purchase;
use Omnifraud\Request\Data\Session;

class Request
{
    /** @var Purchase */
    protected $purchase;

    /** @var Payment */
    protected $payment;

    /** @var Account */
    protected $account;

    /** @var Session */
    protected $session;

    /** @var Address */
    protected $shippingAddress;

    /** @var Address */
    protected $billingAddress;

    /** @var string */
    protected $uid;

    /**
     * Request constructor.
     */
    public function __construct()
    {
        $this->purchase = new Purchase();
        $this->payment = new Payment();
        $this->account = new Account();
        $this->session = new Session();
        $this->shippingAddress = new Address();
        $this->billingAddress = new Address();
    }

    /**
     * @return Purchase
     */
    public function getPurchase()
    {
        return $this->purchase;
    }

    /**
     * @param Purchase $purchase
     */
    public function setPurchase(Purchase $purchase)
    {
        $this->purchase = $purchase;
    }

    /**
     * @return Payment
     */
    public function getPayment()
    {
        return $this->payment;
    }

    /**
     * @param Payment $payment
     */
    public function setPayment(Payment $payment)
    {
        $this->payment = $payment;
    }

    /**
     * @return Account
     */
    public function getAccount()
    {
        return $this->account;
    }

    /**
     * @param Account $account
     */
    public function setAccount(Account $account)
    {
        $this->account = $account;
    }

    /**
     * @return Session
     */
    public function getSession()
    {
        return $this->session;
    }

    /**
     * @param Session $session
     */
    public function setSession(Session $session)
    {
        $this->session = $session;
    }

    /**
     * @return Address
     */
    public function getShippingAddress()
    {
        return $this->shippingAddress;
    }

    /**
     * @param Address $shippingAddress
     */
    public function setShippingAddress(Address $shippingAddress)
    {
        $this->shippingAddress = $shippingAddress;
    }

    /**
     * @return Address
     */
    public function getBillingAddress()
    {
        return $this->billingAddress;
    }

    /**
     * @param Address $billingAddress
     */
    public function setBillingAddress(Address $billingAddress)
    {
        $this->billingAddress = $billingAddress;
    }

    /**
     * @return string
     */
    public function getUid()
    {
        return $this->uid;
    }

    /**
     * @param string $uid
     */
    public function setUid($uid)
    {
        $this->uid = $uid;
    }
}
