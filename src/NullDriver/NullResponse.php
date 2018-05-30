<?php declare(strict_types=1);

namespace Omnifraud\NullDriver;

use Omnifraud\Contracts\ResponseInterface;

class NullResponse implements ResponseInterface
{
    /** @var float */
    protected $score;

    /** @var int */
    protected $requestUid;

    protected static $uid = 'UID0001';

    public function __construct()
    {
        $this->score = mt_rand(0, 10000) / 100;
        $this->requestUid = self::$uid++;
    }

    public function getScore(): ?float
    {
        return $this->score;
    }

    public function isGuaranteed(): bool
    {
        return false;
    }

    public function isPending(): bool
    {
        return false;
    }

    public function getRawResponse(): string
    {
        return json_encode([]);
    }

    public function getRequestUid(): string
    {
        return $this->requestUid;
    }
}
