<?php

namespace Tests\Request\Data;

use Omnifraud\Request\Data\Session;
use PHPUnit\Framework\TestCase;

class SessionTest extends TestCase
{
    /** @var \Omnifraud\Request\Data\Session() */
    private $session;

    public function setUp()
    {
        $this->session = new Session();
    }

    public function testId()
    {
        $this->session->setId('2134581512186');
        $this->assertSame('2134581512186', $this->session->getId());
    }

    public function testIp()
    {
        $this->session->setIp('1.2.3.4');
        $this->assertSame('1.2.3.4', $this->session->getIp());
    }
}
