<?php declare(strict_types=1);

namespace Omnifraud\Contracts;

interface ResponseInterface
{
    /**
     * Get all messages
     *
     * messages can be
     *
     * @return \Omnifraud\Contracts\MessageInterface[]
     */
    public function getMessages(): array;

    /**
     * How trustworthy is that transaction, 100 is best, 0 is worst
     *
     * @return float|null
     */
    public function getPercentScore(): ?float;

    /**
     * Is this transaction guaranteed, this means the service will cover the purchase with some king of insurance
     *
     * @return bool
     */
    public function isGuaranteed(): bool;

    /**
     * Does this response needs to be updated at a later time?
     *
     * @return bool
     */
    public function isAsync(): bool;

    /**
     * Get raw response from the service
     *
     * @return string
     */
    public function getRawResponse(): string;

    /**
     * Get UID of the request, used for future requests to the service
     *
     * @return string
     */
    public function getRequestUid(): string;
}
