<?php declare(strict_types=1);

namespace Omnifraud\Request\Data;

class Product
{
    /** @var string  */
    protected $sku;

    /** @var string */
    protected $name;

    /** @var string */
    protected $url;

    /** @var string */
    protected $image;

    /** @var string */
    protected $quantity;

    /** @var string int Price in cents */
    protected $price;

    /** @var int Weight in grams */
    protected $weight;

    /** @var bool */
    protected $isDigital;

    /** @var string */
    protected $category;

    /** @var string */
    protected $subCategory;

    /**
     * @return string
     */
    public function getSku()
    {
        return $this->sku;
    }

    /**
     * @param string $sku
     */
    public function setSku($sku)
    {
        $this->sku = $sku;
    }

    /**
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @param string $name
     */
    public function setName($name)
    {
        $this->name = $name;
    }

    /**
     * @return string
     */
    public function getUrl()
    {
        return $this->url;
    }

    /**
     * @param string $url
     */
    public function setUrl($url)
    {
        $this->url = $url;
    }

    /**
     * @return string
     */
    public function getImage()
    {
        return $this->image;
    }

    /**
     * @param string $image
     */
    public function setImage($image)
    {
        $this->image = $image;
    }

    /**
     * @return string
     */
    public function getQuantity()
    {
        return $this->quantity;
    }

    /**
     * @param string $quantity
     */
    public function setQuantity($quantity)
    {
        $this->quantity = $quantity;
    }

    /**
     * @return string
     */
    public function getPrice()
    {
        return $this->price;
    }

    /**
     * @param string $price
     */
    public function setPrice($price)
    {
        $this->price = $price;
    }

    /**
     * @return int
     */
    public function getWeight()
    {
        return $this->weight;
    }

    /**
     * @param int $weight Grams
     */
    public function setWeight($weight)
    {
        $this->weight = $weight;
    }

    /**
     * @return bool
     */
    public function isDigital()
    {
        return $this->isDigital;
    }

    /**
     * @param bool $isDigital
     */
    public function setIsDigital($isDigital)
    {
        $this->isDigital = $isDigital;
    }

    /**
     * @return string
     */
    public function getCategory()
    {
        return $this->category;
    }

    /**
     * @param string $category
     */
    public function setCategory($category)
    {
        $this->category = $category;
    }

    /**
     * @return string
     */
    public function getSubCategory()
    {
        return $this->subCategory;
    }

    /**
     * @param string $subCategory
     */
    public function setSubCategory($subCategory)
    {
        $this->subCategory = $subCategory;
    }
}
