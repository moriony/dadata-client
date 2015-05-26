<?php
namespace Moriony\Dadata\RequestLocation;

use GuzzleHttp\Command\Guzzle\Operation;
use GuzzleHttp\Command\Guzzle\Parameter;
use GuzzleHttp\Command\CommandInterface;
use GuzzleHttp\Command\Guzzle\RequestLocation\AbstractLocation;
use GuzzleHttp\Message\RequestInterface;
use GuzzleHttp\Stream\Stream;

class JsonBodyLocation extends AbstractLocation
{
    private $jsonContentType;

    /**
     * @param string $locationName
     * @param string $contentType
     */
    public function __construct($locationName, $contentType = 'application/json')
    {
        $this->jsonContentType = $contentType;
    }

    public function visit(CommandInterface $command, RequestInterface $request, Parameter $param, array $context)
    {
        $value = $command[$param->getName()];
        $request->setBody(Stream::factory(json_encode($value)));
    }

    public function after(CommandInterface $command, RequestInterface $request, Operation $operation, array $context)
    {
        if ($this->jsonContentType && !$request->hasHeader('Content-Type')) {
            $request->setHeader('Content-Type', $this->jsonContentType);
        }
    }
}
