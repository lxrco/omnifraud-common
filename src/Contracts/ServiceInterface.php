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
    public function trackingCode($pageType);

    /**
     * Run request validation
     * @param Request $request
     *
     * @return ResponseInterface
     * @throws RequestException
     */
    public function validateRequest(Request $request);

    /**
     * Update a response that was marked as async
     * @param Request $request Most services only require the UID
     *
     * @return ResponseInterface
     * @throws \Omnifraud\Request\RequestException
     */
    public function updateRequest(Request $request);

    /**
     * If the service provides a web interface, this should return the URL at which
     * the request can be viewed
     * @param string $requestUid
     *
     * @return string|null
     */
    public function getRequestExternalLink($requestUid);

    // Those methods can be left empty if the service does not support them

    /**
     * Log a transaction that was refused by payment processor
     * @param Request $request
     *
     * @return void
     * @throws RequestException
     */
    public function logRefusedRequest(Request $request);

    /**
     * Cancel a request for which the transaction was refused/refunded anyway
     *
     * @param string $requestUid
     * @throws RequestException
     */
    public function cancelRequest($requestUid);
}
