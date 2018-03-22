<?php declare(strict_types=1);

namespace Omnifraud\Contracts;

use Omnifraud\Request\Request;
use Omnifraud\Request\RequestException;

interface ServiceInterface
{
    const PAGE_ALL = 'all';
    const PAGE_CHECKOUT = 'checkout';

    /**
     * Code that must be added to the frontend to track user before actual purchase, some service can return null if
     * they do not require frontend tracking
     *
     * @param string $pageType One of self::PAGE_* which page is the customer on
     *
     * @return string|null
     */
    public function trackingCode(string $pageType): ?string;

    /**
     * Validate a request, this is the main entry point. If the returned response is async, @see updateRequest
     *
     * @param Request $request
     *
     * @return \Omnifraud\Contracts\ResponseInterface
     * @throws \Omnifraud\Request\RequestException
     */
    public function validateRequest(Request $request): ResponseInterface;

    /**
     * Update a previous async request, might still return an async response if the service needs more time to process
     *
     * @param Request $request Most services only require the UID
     *
     * @return \Omnifraud\Contracts\ResponseInterface
     * @throws \Omnifraud\Request\RequestException
     */
    public function updateRequest(Request $request): ResponseInterface;

    /**
     * If the service provides a web interface, this should return the URL at which the request can be viewed
     *
     * @param string $requestUid
     *
     * @return string|null
     */
    public function getRequestExternalLink(string $requestUid): ?string;

    // Those methods can be left empty if the service does not support them

    /**
     * Send a refused transaction to the fraud prevention service if it was refused by the payment processor
     *
     * Can be left empty if not supported
     *
     * @param Request $request
     *
     * @return void
     * @throws \Omnifraud\Request\RequestException
     */
    public function logRefusedRequest(Request $request): void;

    /**
     * Cancel a fraud review if it was refunded and/or manually refused.
     * Some service will refund the review fee for those.
     *
     * Can be left empty if not supported
     *
     * @param string $requestUid
     * @throws \Omnifraud\Request\RequestException
     */
    public function cancelRequest(string $requestUid): void;
}
