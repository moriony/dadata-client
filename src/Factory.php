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
    protected $description;

    protected function getDescription()
    {
        if (!$this->description) {
            $this->description = include(__DIR__ . '/Resources/service.php');
        }
        return $this->description;
    }

    public function createClient(array $config)
    {
        return new Client($this->createGuzzleClient($config));
    }

    public function createGuzzleClient(array $config)
    {
        $config = new Collection($config);
        $httpClient = new \GuzzleHttp\Client();
        $description = new Description($this->getDescription());
        $serializer = new Serializer($description, [
            'json_body' => new JsonBodyLocation('body')
        ]);
        $client = new GuzzleClient($httpClient, $description, ['serializer' => $serializer]);
        $client->getEmitter()->attach(new Authorization($config->get('token'), $config->get('secret')));
        return $client;
    }
}