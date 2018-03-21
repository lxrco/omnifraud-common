<?php declare(strict_types=1);

namespace Omnifraud\Request\Data;

class Payment
{
    /** @var int First 6 numbers of the credit card */
    protected $bin;

    /** @var string Last 6 numbers of the credit card */
    protected $last4;

    /** @var int */
    protected $expiryMonth;

    /** @var int */
    protected $expiryYear;

    /** @var string Response match code. @see http://www.emsecommerce.net/avs_cvv2_response_codes.htm */
    protected $avs;

    /** @var string Response match code. @see http://www.emsecommerce.net/avs_cvv2_response_codes.htm */
    protected $cvv;

    /**
     * @return int
     */
    public function getBin()
    {
        return $this->bin;
    }

    /**
     * @param int $bin
     */
    public function setBin($bin)
    {
        $this->bin = $bin;
    }

    /**
     * @return string
     */
    public function getLast4()
    {
        return $this->last4;
    }

    /**
     * @param string $last4
     */
    public function setLast4($last4)
    {
        $this->last4 = $last4;
    }

    /**
     * @return int
     */
    public function getExpiryMonth()
    {
        return $this->expiryMonth;
    }

    /**
     * @param int $expiryMonth
     */
    public function setExpiryMonth($expiryMonth)
    {
        $this->expiryMonth = sprintf('%02d', $expiryMonth);
    }

    /**
     * @return int
     */
    public function getExpiryYear()
    {
        return $this->expiryYear;
    }

    /**
     * @param int $expiryYear
     */
    public function setExpiryYear(int $expiryYear)
    {
        if ($expiryYear > 99) {
            $expiryYear = (int)substr((string)$expiryYear, 2);
        }
        $this->expiryYear = $expiryYear;
    }

    /**
     * @return string
     */
    public function getAvs()
    {
        return $this->avs;
    }

    /**
     * @param string $avs
     */
    public function setAvs($avs)
    {
        $this->avs = $avs;
    }

    /**
     * @return string
     */
    public function getCvv()
    {
        return $this->cvv;
    }

    /**
     * @param string $cvv
     */
    public function setCvv($cvv)
    {
        $this->cvv = $cvv;
    }
}
