<?php declare(strict_types=1);

namespace Omnifraud\Testing;

use Omnifraud\Request\Data\Account;
use Omnifraud\Request\Data\Address;
use Omnifraud\Request\Data\Payment;
use Omnifraud\Request\Data\Product;
use Omnifraud\Request\Data\Purchase;
use Omnifraud\Request\Data\Session;
use Omnifraud\Request\Request;

trait MakesTestRequests
{
    protected function makeTestRequest(): Request
    {
        $request = new Request();

        $purchase = new Purchase();
        $purchase->setId('1');
        $purchase->setCreatedAt(new \DateTime('2017-09-02 12:12:12'));
        $purchase->setCurrencyCode('CAD');
        $purchase->setTotal(56025); // 560.25
        $request->setPurchase($purchase);

        $product1 = new Product();
        $product1->setSku('SKU1');
        $product1->setName('Product number 1');
        $product1->setUrl('http://www.example.com/product-1');
        $product1->setImage('http://www.example.com/product-1/cover.jpg');
        $product1->setQuantity(1);
        $product1->setPrice(6025); // 60.25
        $product1->setWeight(100);
        $product1->setIsDigital(false);
        $product1->setCategory('Category1');
        $product1->setSubCategory('Sub Category 1');
        $purchase->addProduct($product1);

        $product2 = new Product();
        $product2->setSku('SKU2');
        $product2->setName('Product number 2');
        $product2->setUrl('http://www.example.com/product-2');
        $product2->setImage('http://www.example.com/product-2/cover.jpg');
        $product2->setQuantity(2);
        $product2->setPrice(25000); // 250.00
        $product2->setWeight(25);
        $product2->setIsDigital(false);
        $product2->setCategory('Category2');
        $product2->setSubCategory('Sub Category 2');
        $purchase->addProduct($product2);

        $payment = new Payment();
        $payment->setBin(457173);
        $payment->setLast4('9000');
        $payment->setExpiryMonth(9);
        $payment->setExpiryYear(2020);
        $payment->setAvs('Y');
        $payment->setCvv('M');
        $request->setPayment($payment);

        $account = new Account();
        $account->setId('ACCOUNT_ID');
        $account->setUsername('username');
        $account->setEmail('test@example.com');
        $account->setPhone('1234567890');
        $account->setCreatedAt(new \DateTime('2017-01-01 01:01:01'));
        $account->setUpdatedAt(new \DateTime('2017-05-12 02:02:02'));
        $account->setLastOrderId('LAST_ORDER_ID');
        $account->setTotalOrderCount(5);
        $account->setTotalOrderAmount(128700);// 1287.00
        $request->setAccount($account);

        $session = new Session();
        $session->setIp('1.2.3.4');
        $session->setId('SESSION_ID');
        $request->setSession($session);

        $shippingAddress = new Address();
        $shippingAddress->setFullName('John Shipping');
        $shippingAddress->setStreetAddress('1 shipping street');
        $shippingAddress->setUnit('25');
        $shippingAddress->setCity('Shipping Town');
        $shippingAddress->setState('Shipping State');
        $shippingAddress->setPostalCode('12345');
        $shippingAddress->setCountryCode('US');
        $shippingAddress->setPhone('1234567891');
        $request->setShippingAddress($shippingAddress);

        $billingAddress = new Address();
        $billingAddress->setFullName('John Billing');
        $billingAddress->setStreetAddress('1 billing street');
        $billingAddress->setUnit('1A');
        $billingAddress->setCity('Billing Town');
        $billingAddress->setState('Billing State');
        $billingAddress->setPostalCode('54321');
        $billingAddress->setCountryCode('CA');
        $billingAddress->setPhone('0987654321');
        $request->setBillingAddress($billingAddress);

        return $request;
    }
}
