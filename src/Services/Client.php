<?php

namespace Legion112\Kickico\Services;

class Client
{
    /**
     * @var \GuzzleHttp\Client
     */
    private $client;

    public function __construct(\GuzzleHttp\Client $client)
    {
        $this->client = $client;
    }

    public function doSomething()
    {
        $response = $this->client->get('/do-something'); // TODO hard code uri

        return $response;
    }
}