<?php declare(strict_types=1);

namespace Omnifraud\NullDriver;

use Omnifraud\Contracts\ResponseInterface;
use Omnifraud\Contracts\ServiceInterface;
use Omnifraud\Request\Request;

class NullService implements ServiceInterface
{
    public function trackingCode(string $pageType, string $sessionId, bool $quote = true): string
    {
        return '';
    }

    public function validateRequest(Request $request): ResponseInterface
    {
        return new NullResponse();
    }

    public function updateRequest(Request $request): ResponseInterface
    {
        return new NullResponse();
    }

    public function getRequestExternalLink(string $requestUid): ?string
    {
        return 'http://example.com/request/' . $requestUid;
    }

    public function logRefusedRequest(Request $request): void
    {
        // TODO: Implement logRefusedRequest() method.
    }

    public function cancelRequest(Request $request): void
    {
        // TODO: Implement cancelRequest() method.
    }
}
