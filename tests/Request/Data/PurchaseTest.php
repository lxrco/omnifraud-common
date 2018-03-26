<?php

namespace Tests\Request\Data;

use Omnifraud\Request\Data\Product;
use Omnifraud\Request\Data\Purchase;
use PHPUnit\Framework\TestCase;

class PurchaseTest extends TestCase
{
    /** @var \Omnifraud\Request\Data\Purchase() */
    private $purchase;

    public function setUp()
    {
        $this->purchase = new Purchase();
    }

    public function testId()
    {
        $this->purchase->setId('ORD12');
        $this->assertSame('ORD12', $this->purchase->getId());
    }

    public function testCreatedAt()
    {
        $this->purchase->setCreatedAt(new \DateTime('2011-01-01 01:01:01'));
        $this->assertSame('2011-01-01 01:01:01', $this->purchase->getCreatedAt()->format('Y-m-d H:i:s'));
    }

    public function testCurrencyCode()
    {
        $this->purchase->setCurrencyCode('CAD');
        $this->assertSame('CAD', $this->purchase->getCurrencyCode());
    }

    public function testTotal()
    {
        $this->purchase->setTotal(25000);
        $this->assertSame(25000, $this->purchase->getTotal());
    }

    public function testProducts()
    {
        $this->purchase->setProducts([]);
        $this->assertSame([], $this->purchase->getProducts());
    }

    public function testProductsWithProducts()
    {
        $product1 = new Product();
        $product1->setName('Product 1');

        $product2 = new Product();
        $product2->setName('Product 2');

        $this->purchase->setProducts([$product1, $product2]);
        $this->assertEquals([$product1, $product2], $this->purchase->getProducts());
    }

    public function testAddProduct()
    {
        $product1 = new Product();
        $product1->setName('Product 1');

        $product2 = new Product();
        $product2->setName('Product 2');

        $this->purchase->setProducts([$product1]);
        $this->purchase->addProduct($product2);
        $this->assertEquals([$product1, $product2], $this->purchase->getProducts());
    }
}
