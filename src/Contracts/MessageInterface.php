<?php declare(strict_types=1);

namespace Omnifraud\Contracts;

interface MessageInterface
{
    const TYPE_INFO = 'info';
    const TYPE_WARNING = 'warning';
    const TYPE_ERROR = 'error';

    /**
     * Error type, must be one of self::TYPE_*
     * @return string
     */
    public function getType(): string;

    /**
     * Message text
     * @return string
     */
    public function getMessage(): string;

    /**
     * Message Code name
     * @return string
     */
    public function getCode(): string;
}
