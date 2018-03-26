<?php declare(strict_types=1);

namespace Omnifraud\Response;

use Omnifraud\Contracts\MessageInterface;

class BaseMessage implements MessageInterface, \JsonSerializable
{
    /** @var string */
    protected $type;

    /** @var string */
    protected $message;

    /** @var string */
    protected $code;

    public function __construct(string $type, string $code, string $message)
    {
        $this->type = $type;
        $this->message = $message;
        $this->code = $code;
    }

    public function getType(): string
    {
        return $this->type;
    }

    public function getMessage(): string
    {
        return $this->message;
    }

    public function getCode(): string
    {
        return $this->code;
    }

    public function jsonSerialize(): array
    {
        return ['type' => $this->getType(), 'message' => $this->getMessage()];
    }
}
