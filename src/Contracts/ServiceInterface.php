<?php declare(strict_types=1);

namespace Omnifraud\Contracts;

use Omnifraud\Request\Request;
use Omnifraud\Request\RequestException;

interface ServiceInterface
{
    const PAGE_ALL = 'all';
    const PAGE_CHECKOUT = 'checkout';

    /**
     * Code that must be added to the frontend to track user before actual purchase
     *
     * @param string $pageType One of self::PAGE_* which page is the customer on
     *
     * @return string|null
     */
    public function trackingCode(string $pageType): ?string;

    /**
     * Run request validation
     * @param Request $request
     *
     * @return \Omnifraud\Contracts\ResponseInterface
     * @throws \Omnifraud\Request\RequestException
     */
    public function validateRequest(Request $request): ResponseInterface;

    /**
     * Update a response that was marked as async
     * @param Request $request Most services only require the UID
     *
     * @return \Omnifraud\Contracts\ResponseInterface
     * @throws \Omnifraud\Request\RequestException
     */
    public function updateRequest(Request $request): ResponseInterface;

    /**
     * If the service provides a web interface, this should return the URL at which
     * the request can be viewed
     * @param string $requestUid
     *
     * @return string|null
     */
    public function getRequestExternalLink($requestUid): ?string;

    // Those methods can be left empty if the service does not support them

    /**
     * Log a transaction that was refused by payment processor
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
     * Cancel a request for which the transaction was refused/refunded anyway
     *
     * Can be left empty if not supported
     *
     * @param string $requestUid
     * @throws \Omnifraud\Request\RequestException
     */
    public function cancelRequest(string $requestUid): void;
}
