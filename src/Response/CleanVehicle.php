<?php

namespace Moriony\Dadata\Response;

use GuzzleHttp\Collection;

class CleanVehicle extends Collection
{
    public function getSource()
    {
        return $this->get('source');
    }

    public function getResult()
    {
        return $this->get('result');
    }

    public function getBrand()
    {
        return $this->get('brand');
    }

    public function getModel()
    {
        return $this->get('model');
    }

    public function getQc()
    {
        return $this->get('qc');
    }
}