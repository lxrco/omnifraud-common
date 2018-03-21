<?php declare(strict_types=1);

namespace Omnifraud\Response;

use Omnifraud\Contracts\MessageInterface;

class BaseMessage implements MessageInterface, \JsonSerializable
{
    /** @var int */
    protected $type;

    /** @var string */
    protected $message;

    /** @var string */
    protected $code;

    /**
     * BaseMessage constructor.
     *
     * @param int $type
     * @param $message
     */
    public function __construct($type, $code, $message)
    {
        $this->type = $type;
        $this->message = $message;
        $this->code = $code;
    }

    /**
     * @return int
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * @param int $type
     */
    public function setType($type)
    {
        $this->type = $type;
    }

    /**
     * @return mixed
     */
    public function getMessage()
    {
        return $this->message;
    }

    /**
     * @param mixed $message
     */
    public function setMessage($message)
    {
        $this->message = $message;
    }

    /**
     * @return string
     */
    public function getCode()
    {
        return $this->code;
    }

    /**
     * @param string $code
     */
    public function setCode($code)
    {
        $this->code = $code;
    }

    public function jsonSerialize()
    {
        return ['type' => $this->getType(), 'message' => $this->getMessage()];
    }
}
