<?php declare(strict_types=1);

namespace Omnifraud\Contracts;

interface ResponseInterface
{
    /**
     * Get all messages
     * @return MessageInterface[]
     */
    public function getMessages();

    /**
     * How trustworthy is that transaction, 100 mean guaranteed
     * @return float
     */
    public function getPercentScore();

    /**
     * Is this transaction guaranteed
     * @return int
     */
    public function isGuaranteed();

    /**
     * Does this response needs to be updated at a later time?
     * @return bool
     */
    public function isAsync();

    /**
     * Get raw response from the service
     * @return string
     */
    public function getRawResponse();

    /**
     * Get UID of the request, used for future requests to the service
     * @return string
     */
    public function getRequestUid();
}
