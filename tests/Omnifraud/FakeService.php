<?php declare(strict_types=1);

namespace Tests\Omnifraud;

class FakeService
{
    public $config;

    public function __construct(array $config = ['default' => true])
    {
        $this->config = $config;
    }
}
