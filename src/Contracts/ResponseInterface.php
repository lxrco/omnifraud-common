<?php declare(strict_types=1);

namespace Omnifraud\Contracts;

interface ResponseInterface
{
    /**
     * The score assigned by the service, where 100 is the best and 0 is the
     * worst. In the event that the response is pending, this is nullable.
     *
     * @return float|null
     */
    public function getScore(): ?float;

    /**
     * Whether or not the transaction is guaranteed if your service provider
     * supports liability shifting.
     *
     * @return bool
     */
    public function isGuaranteed(): bool;

    /**
     * Determines if this response is still pending. Pending responses can be
     * neither scored nor guaranteed. This is an indicator that you need to
     * queue this response for updating.
     *
     * @return bool
     */
    public function isPending(): bool;

    /**
     * Get raw response from the service.
     *
     * @return string
     */
    public function getRawResponse(): string;

    /**
     * Get remote UID of the request used for future requests to the service.
     * Useful for refreshing pending responses, cancelling, etc.
     *
     * @return string
     */
    public function getRequestUid(): string;
}
