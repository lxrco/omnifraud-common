<?php declare(strict_types=1);

namespace Omnifraud\Contracts;

interface MessageInterface
{
    const TYPE_INFO = 'info';
    const TYPE_WARNING = 'warning';
    const TYPE_ERROR = 'error';

    /**
     * Error type (info/warning/error). Must be one of self::TYPE_*
     *
     * @return string
     */
    public function getType(): string;

    /**
     * Short, 3-letter code associated to this message
     *
     * @return string
     */
    public function getCode(): string;

    /**
     * Message text
     *
     * @return string
     */
    public function getMessage(): string;
}
