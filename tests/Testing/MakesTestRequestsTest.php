<?php declare(strict_types=1);

namespace Tests\Testing;

use Omnifraud\Request\Data\Account;
use Omnifraud\Request\Data\Address;
use Omnifraud\Request\Data\Payment;
use Omnifraud\Request\Data\Purchase;
use Omnifraud\Request\Data\Session;
use Omnifraud\Request\Request;
use Omnifraud\Testing\MakesTestRequests;
use PHPUnit\Framework\TestCase;

class MakesTestRequestsTest extends TestCase
{
    public function testMakeTestRequest()
    {
        $instance = new class
        {
            use MakesTestRequests;

            public function test()
            {
                return $this->makeTestRequest();
            }
        };
        /** @var Request $request */
        $request = $instance->test();

        $this->assertInstanceOf(Request::class, $request);

        $purchase = $request->getPurchase();
        $this->assertInstanceOf(Purchase::class, $purchase);
        $this->assertSame('1', $purchase->getId());
        $this->assertSame('2017-09-02 12:12:12', $purchase->getCreatedAt()->format('Y-m-d H:i:s'));
        $this->assertSame('CAD', $purchase->getCurrencyCode());
        $this->assertSame(56025, $purchase->getTotal());
        $request->setPurchase($purchase);

        $products = $purchase->getProducts();
        $this->assertCount(2, $products);

        $product1 = $products[0];
        $this->assertSame('SKU1', $product1->getSku());
        $this->assertSame('Product number 1', $product1->getName());
        $this->assertSame('http://www.example.com/product-1', $product1->getUrl());
        $this->assertSame('http://www.example.com/product-1/cover.jpg', $product1->getImage());
        $this->assertSame(1, $product1->getQuantity());
        $this->assertSame(6025, $product1->getPrice());
        $this->assertSame(100, $product1->getWeight());
        $this->assertSame(false, $product1->isDigital());
        $this->assertSame('Category1', $product1->getCategory());
        $this->assertSame('Sub Category 1', $product1->getSubCategory());
        $purchase->addProduct($product1);

        $product2 = $products[1];
        $this->assertSame('SKU2', $product2->getSku());
        $this->assertSame('Product number 2', $product2->getName());
        $this->assertSame('http://www.example.com/product-2', $product2->getUrl());
        $this->assertSame('http://www.example.com/product-2/cover.jpg', $product2->getImage());
        $this->assertSame(2, $product2->getQuantity());
        $this->assertSame(25000, $product2->getPrice());
        $this->assertSame(25, $product2->getWeight());
        $this->assertSame(false, $product2->isDigital());
        $this->assertSame('Category2', $product2->getCategory());
        $this->assertSame('Sub Category 2', $product2->getSubCategory());

        $payment = $request->getPayment();
        $this->assertInstanceOf(Payment::class, $payment);
        $this->assertSame(457173, $payment->getBin());
        $this->assertSame('9000', $payment->getLast4());
        $this->assertSame(9, $payment->getExpiryMonth());
        $this->assertSame(20, $payment->getExpiryYear());
        $this->assertSame('Y', $payment->getAvs());
        $this->assertSame('M', $payment->getCvv());

        $account = $request->getAccount();
        $this->assertInstanceOf(Account::class, $account);
        $this->assertSame('ACCOUNT_ID', $account->getId());
        $this->assertSame('username', $account->getUsername());
        $this->assertSame('test@example.com', $account->getEmail());
        $this->assertSame('1234567890', $account->getPhone());
        $this->assertSame('2017-01-01 01:01:01', $account->getCreatedAt()->format('Y-m-d H:i:s'));
        $this->assertSame('2017-05-12 02:02:02', $account->getUpdatedAt()->format('Y-m-d H:i:s'));
        $this->assertSame('LAST_ORDER_ID', $account->getLastOrderId());
        $this->assertSame(5, $account->getTotalOrderCount());
        $this->assertSame(128700, $account->getTotalOrderAmount());

        $session = $request->getSession();
        $this->assertInstanceOf(Session::class, $session);
        $this->assertSame('1.2.3.4', $session->getIp());
        $this->assertSame('SESSION_ID', $session->getId());

        $shippingAddress = $request->getShippingAddress();
        $this->assertInstanceOf(Address::class, $shippingAddress);
        $this->assertSame('John Shipping', $shippingAddress->getFullName());
        $this->assertSame('1 shipping street', $shippingAddress->getStreetAddress());
        $this->assertSame('25', $shippingAddress->getUnit());
        $this->assertSame('Shipping Town', $shippingAddress->getCity());
        $this->assertSame('Shipping State', $shippingAddress->getState());
        $this->assertSame('12345', $shippingAddress->getPostalCode());
        $this->assertSame('US', $shippingAddress->getCountryCode());
        $this->assertSame('1234567891', $shippingAddress->getPhone());

        $billingAddress = $request->getBillingAddress();
        $this->assertInstanceOf(Address::class, $billingAddress);
        $this->assertSame('John Billing', $billingAddress->getFullName());
        $this->assertSame('1 billing street', $billingAddress->getStreetAddress());
        $this->assertSame('1A', $billingAddress->getUnit());
        $this->assertSame('Billing Town', $billingAddress->getCity());
        $this->assertSame('Billing State', $billingAddress->getState());
        $this->assertSame('54321', $billingAddress->getPostalCode());
        $this->assertSame('CA', $billingAddress->getCountryCode());
        $this->assertSame('0987654321', $billingAddress->getPhone());
    }
}
