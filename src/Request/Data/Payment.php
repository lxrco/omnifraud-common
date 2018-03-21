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


    public function getBin(): int
    {
        return $this->bin;
    }

    public function setBin(int $bin)
    {
        $this->bin = $bin;
    }

    public function getLast4(): string
    {
        return $this->last4;
    }

    public function setLast4(string $last4)
    {
        $this->last4 = $last4;
    }


    public function getExpiryMonth(): int
    {
        return $this->expiryMonth;
    }

    public function setExpiryMonth(int $expiryMonth): void
    {
        $this->expiryMonth = $expiryMonth;
    }

    public function getExpiryYear(): int
    {
        return $this->expiryYear;
    }

    public function setExpiryYear(int $expiryYear): void
    {
        if ($expiryYear > 99) {
            $expiryYear = (int)substr((string)$expiryYear, 2);
        }
        $this->expiryYear = $expiryYear;
    }

    public function getAvs(): string
    {
        return $this->avs;
    }

    public function setAvs(string $avs)
    {
        $this->avs = $avs;
    }

    public function getCvv(): string
    {
        return $this->cvv;
    }

    public function setCvv(string $cvv)
    {
        $this->cvv = $cvv;
    }
}
