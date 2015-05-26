<?php

namespace Moriony\Dadata;

use GuzzleHttp\Collection;
use GuzzleHttp\Command\Guzzle\Description;
use GuzzleHttp\Command\Guzzle\GuzzleClient;
use GuzzleHttp\Command\Guzzle\Serializer;
use Moriony\Dadata\RequestLocation\JsonBodyLocation;
use Moriony\Dadata\Subscriber\Authorization;

class Factory
{
    public function createClient(array $config)
    {
        return new Client($this->createGuzzleClient($config));
    }

    public function createGuzzleClient(array $config)
    {
        $config = new Collection($config);
        $httpClient = new \GuzzleHttp\Client();
        $description = new Description(include_once(__DIR__ . '/Resources/service.php'));
        $serializer = new Serializer($description, [
            'json_body' => new JsonBodyLocation('body')
        ]);
        $client = new GuzzleClient($httpClient, $description, ['serializer' => $serializer]);
        $client->getEmitter()->attach(new Authorization($config->get('token'), $config->get('secret')));
        return $client;
    }
}