<?php

namespace Moriony\Dadata\Subscriber;

use GuzzleHttp\Command\Event\InitEvent;
use GuzzleHttp\Event\SubscriberInterface;

class Authorization implements SubscriberInterface
{
    protected $token;
    protected $secret;

    public function __construct($token, $secret)
    {
        $this->token = $token;
        $this->secret = $secret;
    }

    public function getEvents()
    {
        return [
            'init' => ['authorize']
        ];
    }

    public function authorize(InitEvent $event)
    {
        $command = $event->getCommand();
        if (false === $command->hasParam('Authorization')) {
            $command['Authorization'] = 'Token ' . $this->token;
        }
        if (false === $command->hasParam('X-Secret')) {
            $command['X-Secret'] = $this->secret;
        }
    }
}