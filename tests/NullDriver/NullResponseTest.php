<?php declare(strict_types=1);

namespace Tests\NullDriver;

use Omnifraud\NullDriver\NullResponse;
use PHPUnit\Framework\TestCase;

class NullResponseTest extends TestCase
{
    public function testGetScoreReturnsARandomScorePerResponse()
    {
        $nullResponse = new NullResponse();
        $nullResponse2 = new NullResponse();

        $score = $nullResponse->getScore();
        $score2 = $nullResponse2->getScore();

        $this->assertInternalType('float', $score);
        $this->assertInternalType('float', $score2);

        $this->assertLessThanOrEqual(100, $score);
        $this->assertLessThanOrEqual(100, $score2);

        $this->assertGreaterThanOrEqual(0, $score);
        $this->assertGreaterThanOrEqual(0, $score2);

        // Does not change
        $this->assertSame($score, $nullResponse->getScore());
        $this->assertSame($score2, $nullResponse2->getScore());
    }

    public function testIsGuaranteedReturnsFalse()
    {
        $response = new NullResponse();

        $this->assertFalse($response->isGuaranteed());
    }

    public function testIsPendingReturnsFalse()
    {
        $response = new NullResponse();

        $this->assertFalse($response->isPending());
    }

    public function testGetRawResponseReturnsAnEmptyJsonArray()
    {
        $response = new NullResponse();

        $this->assertSame("[]", $response->getRawResponse());
    }

    public function testGetRequestUidReturnsARandomString()
    {
        $nullResponse = new NullResponse();
        $nullResponse2 = new NullResponse();

        $requestUid = $nullResponse->getRequestUid();
        $requestUid2 = $nullResponse2->getRequestUid();

        $this->assertInternalType('string', $requestUid);
        $this->assertInternalType('string', $requestUid2);

        // Different
        $this->assertNotEquals($requestUid, $requestUid2, 'Request UID should be unique');

        // Does not change
        $this->assertSame($requestUid, $nullResponse->getRequestUid());
        $this->assertSame($requestUid2, $nullResponse2->getRequestUid());
    }
}
