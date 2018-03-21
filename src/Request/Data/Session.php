<?php declare(strict_types=1);

namespace Omnifraud\Request\Data;

class Session
{
    /** @var null|string */
    protected $id;

    /** @var null|string */
    protected $ip;

    public function getId(): ?string
    {
        return $this->id;
    }

    public function setId(?string $id): void
    {
        $this->id = $id;
    }

    public function getIp(): ?string
    {
        return $this->ip;
    }

    public function setIp(?string $ip): void
    {
        $this->ip = $ip;
    }
}
