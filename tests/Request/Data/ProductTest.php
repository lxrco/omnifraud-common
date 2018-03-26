<?php

namespace Tests\Request\Data;

use Omnifraud\Request\Data\Product;
use PHPUnit\Framework\TestCase;

class ProductTest extends TestCase
{
    /** @var \Omnifraud\Request\Data\Product */
    private $product;

    public function setUp()
    {
        $this->product = new Product();
    }
    public function testSku()
    {
        $this->product->setSku('001125A');
        $this->assertSame('001125A', $this->product->getSku());
    }
    public function testName()
    {
        $this->product->setName('Pink Product');
        $this->assertSame('Pink Product', $this->product->getName());
    }
    public function testUrl()
    {
        $this->product->setUrl('http://example.com/pink-product');
        $this->assertSame('http://example.com/pink-product', $this->product->getUrl());
    }
    public function testImage()
    {
        $this->product->setImage('http://example.org/pink-product.png');
        $this->assertSame('http://example.org/pink-product.png', $this->product->getImage());
    }
    public function testQuantity()
    {
        $this->product->setQuantity(2);
        $this->assertSame(2, $this->product->getQuantity());
    }
    public function testPrice()
    {
        $this->product->setPrice(2500);
        $this->assertSame(2500, $this->product->getPrice());
    }
    public function testWeight()
    {
        $this->product->setWeight(35);
        $this->assertSame(35, $this->product->getWeight());
    }
    public function testIsDigital()
    {
        $this->product->setIsDigital(false);
        $this->assertSame(false, $this->product->isDigital());
    }
    public function testCategory()
    {
        $this->product->setCategory('Products');
        $this->assertSame('Products', $this->product->getCategory());
    }
    public function testSubCategory()
    {
        $this->product->setSubCategory('Pink Products');
        $this->assertSame('Pink Products', $this->product->getSubCategory());
    }
}
