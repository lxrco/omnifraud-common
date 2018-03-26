<?php

namespace Tests\Response;

use Omnifraud\Contracts\MessageInterface;
use Omnifraud\Response\BaseMessage;
use PHPUnit\Framework\TestCase;

class BaseMessageTest extends TestCase
{
    public function testConstruct()
    {
        $message = new BaseMessage(MessageInterface::TYPE_ERROR, 'TE', 'This is a test message');

        $this->assertSame('error', $message->getType());
        $this->assertSame('TE', $message->getCode());
        $this->assertSame('This is a test message', $message->getMessage());
    }

    public function testJsonSerialization()
    {
        $message = new BaseMessage(MessageInterface::TYPE_ERROR, 'TE', 'This is a test message');

        $this->assertSame('{"type":"error","message":"This is a test message"}', json_encode($message));
    }
}
