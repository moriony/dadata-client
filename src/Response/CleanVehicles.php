<?php

namespace Moriony\Dadata\Response;

use GuzzleHttp\Collection;

class CleanVehicles extends Collection
{
    public function __construct(array $data)
    {
        foreach ($data as $key => & $vehicle) {
            $vehicle = new CleanVehicle($vehicle);
        }
        parent::__construct($data);
    }
}