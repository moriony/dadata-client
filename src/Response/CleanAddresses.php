<?php

namespace Moriony\Dadata\Response;

use GuzzleHttp\Collection;

class CleanAddresses extends Collection
{
    public function __construct(array $data)
    {
        foreach ($data as $key => & $address) {
            $address = new CleanAddress($address);
        }
        parent::__construct($data);
    }
}