<?php

namespace Legion112\Kickico\Tests\Services;

use Legion112\Kickico\Services\Client;
use PHPUnit\Framework\TestCase;

class ClientTest extends TestCase
{
    public function testSimple()
    {
        /** @var Client $client */
        $client = resolve(Client::class);

        $this->assertTrue($client->doSomething());
    }
}
