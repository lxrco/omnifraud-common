<?php declare(strict_types=1);

namespace Omnifraud\Contracts;

interface MessageInterface
{
    const TYPE_INFO = 'info';
    const TYPE_WARNING = 'warning';
    const TYPE_ERROR = 'error';

    /**
     * Error type, must be one of self::TYPE_*
     * @return int
     */
    public function getType();

    /**
     * Message text
     * @return string
     */
    public function getMessage();

    /**
     * Message Code name
     * @return string
     */
    public function getCode();
}
