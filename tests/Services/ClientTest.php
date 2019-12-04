<?php

namespace Legion112\Kickico\Tests\Services;

use Legion112\Kickico\Services\Client;
use Mockery;
use Mockery\MockInterface;
use PHPUnit\Framework\TestCase;

class ClientTest extends TestCase
{
    /** @var MockInterface */
    private $clientMock;

    protected function setUp(): void
    {
        parent::setUp();
        $this->clientMock = Mockery::mock(\GuzzleHttp\Client::class);
        app()->instance(\GuzzleHttp\Client::class, $this->clientMock);

    }

    public function testSimple()
    {
        /** @var Client $client */
        $this->clientMock->shouldReceive('get')->andReturn(false);
        $client = resolve(Client::class);

        $this->assertTrue($client->doSomething());
    }
}
