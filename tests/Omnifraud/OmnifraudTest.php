<?php declare(strict_types=1);

namespace Tests;

use Omnifraud\NullDriver\NullService;
use Omnifraud\Omnifraud;
use PHPUnit\Framework\TestCase;
use Tests\Omnifraud\FakeService;

class OmnifraudTest extends TestCase
{
    public function testCreatingServicesMethod()
    {
        $omnifraud = new Omnifraud([
            'Null' => NullService::class,
            'Test' => FakeService::class,
        ]);

        // Alias
        $nullService = $omnifraud->service('Null');
        $this->assertInstanceOf(NullService::class, $nullService);

        // Full class
        $nullService = $omnifraud->service(NullService::class);
        $this->assertInstanceOf(NullService::class, $nullService);

        // Should pass config in
        $config = ['config' => 'value'];
        $fake = $omnifraud->service('Test', $config);
        $this->assertInstanceOf(FakeService::class, $fake);
        $this->assertSame($config, $fake->config);

        // And leave default value without config
        $fake = $omnifraud->service('Test');
        $this->assertInstanceOf(FakeService::class, $fake);
        $this->assertSame(['default' => true], $fake->config);
    }

    public function testCreateNullDriver()
    {
        $nullService = Omnifraud::create('Null');

        $this->assertInstanceOf(NullService::class, $nullService);
    }
}
