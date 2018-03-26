<?php

namespace Tests\Request;

use Omnifraud\Request\RequestException;
use PHPUnit\Framework\TestCase;

class RequestExceptionTest extends TestCase
{
    public function testMessage()
    {
        $exception = new RequestException('Exception Message');
        $this->assertSame('Exception Message', $exception->getMessage());
    }
}
