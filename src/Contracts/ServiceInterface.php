<?php declare(strict_types=1);

namespace Omnifraud\Contracts;

use Omnifraud\Request\Request;
use Omnifraud\Request\RequestException;

interface ServiceInterface
{
    const PAGE_ALL = 'all';
    const PAGE_CHECKOUT = 'checkout';

    /**
     * Code that must be added to the frontend to track user activity before and
     * during the purchase. Some services do not require this and will return an
     * empty string.
     *
     * @param string $pageType One of self::PAGE_* which page is the customer on
     * @param string $sessionId The session ID of the user to generate tracking
     * code for
     * @param bool $quote If true, will quote and escape the provided session
     * ID. Pass false if your session ID is a JavaScript variable.
     * @return string
     */
    public function trackingCode(string $pageType, string $sessionId, bool $quote = true): string;

    /**
     * Validate a request. This is the main entry point. If the returned
     * response is pending, @see updateRequest
     *
     * @param \Omnifraud\Request\Request $request
     * @return \Omnifraud\Contracts\ResponseInterface
     * @throws \Omnifraud\Request\RequestException
     */
    public function validateRequest(Request $request): ResponseInterface;

    /**
     * Update a previous request. Useful for updating pending responses, or
     * responses that were manually modified through the services web interface.
     *
     * @param \Omnifraud\Request\Request $request Most services only require the UID
     * @return \Omnifraud\Contracts\ResponseInterface
     * @throws \Omnifraud\Request\RequestException
     */
    public function updateRequest(Request $request): ResponseInterface;

    /**
     * Generates a link to the services web view of a request/response. If the
     * service does not provide dedicated web views, null is returned.
     *
     * @param string $requestUid
     * @return string|null
     */
    public function getRequestExternalLink(string $requestUid): ?string;

    // Those methods can be left empty if the service does not support them

    /**
     * Send a refused transaction to the fraud prevention service if it was
     * refused by the payment processor.
     *
     * @param \Omnifraud\Request\Request $request
     * @return void
     * @throws \Omnifraud\Request\RequestException
     */
    public function logRefusedRequest(Request $request): void;

    /**
     * Cancel a fraud review if it was refunded and/or manually refused. Some
     * service will refund the review fee for those.
     *
     * @param Request $request Most services only require the UID
     * @throws \Omnifraud\Request\RequestException
     */
    public function cancelRequest(Request $request): void;
}
