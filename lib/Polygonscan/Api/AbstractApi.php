<?php

namespace Polygonscan\Api;

use Polygonscan\Client;
use Polygonscan\HttpClient\Request;

/**
 * Class AbstractApi
 * @package Polygonscan\Api
 * @author Maslakou Ihar <igormaslakoff@gmail.com>
 */
abstract class AbstractApi implements ApiInterface
{
    /**
     * The client.
     *
     * @var Client
     */
    protected $client;

    /**
     * @var Request
     */
    protected $request;

    /**
     * @param Client $client
     */
    public function __construct(Client $client)
    {
        $this->client = $client;

        $this->request = new Request($client->getApiKeyToken(), $client->getNetName());
    }
}