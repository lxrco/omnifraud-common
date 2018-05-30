<?php declare(strict_types=1);

namespace Tests\NullDriver;

use Omnifraud\Contracts\ServiceInterface;
use Omnifraud\NullDriver\NullResponse;
use Omnifraud\NullDriver\NullService;
use Omnifraud\Testing\MakesTestRequests;
use PHPUnit\Framework\TestCase;

class NullDriverTest extends TestCase
{
    use MakesTestRequests;

    public function testTrackingCodeReturnsAnEmptyString()
    {
        $service = new NullService();

        $this->assertSame('', $service->trackingCode(ServiceInterface::PAGE_ALL, 'TrackingCode'));
        $this->assertSame('', $service->trackingCode(ServiceInterface::PAGE_CHECKOUT, 'TrackingCode'));
    }

    public function testValidateRequestReturnsNullResponse()
    {
        $service = new NullService();
        $request = $this->makeTestRequest();

        $response = $service->validateRequest($request);

        $this->assertInstanceOf(NullResponse::class, $response);
    }

    public function testUpdateRequestReturnsNullResponse()
    {
        $service = new NullService();
        $request = $this->makeTestRequest();

        $response = $service->updateRequest($request);

        $this->assertInstanceOf(NullResponse::class, $response);
    }

    public function testGetRequestExternalLinkReturnsALink()
    {
        $service = new NullService();

        $link = $service->getRequestExternalLink('RequestUid');

        $this->assertNotSame(false, filter_var($link, FILTER_VALIDATE_URL), 'Expected a valid URL, but got: ' . $link);
    }

    public function testLogRefusedRequestCanBeCalled()
    {
        $service = new NullService();
        $request = $this->makeTestRequest();

        $service->logRefusedRequest($request);

        $this->assertTrue(true);
    }

    public function testCancelRequestCanBeCalled()
    {
        $service = new NullService();
        $request = $this->makeTestRequest();

        $service->cancelRequest($request);

        $this->assertTrue(true);
    }
}
