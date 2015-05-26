<?php

namespace Moriony\Dadata\Response;

use GuzzleHttp\Collection;

class CleanPhone extends Collection
{
    public function getSource()
    {
        return $this->get('source');
    }

    public function getType()
    {
        return $this->get('type');
    }

    public function getPhone()
    {
        return $this->get('phone');
    }

    public function getCountryCode()
    {
        return $this->get('country_code');
    }

    public function getCityCode()
    {
        return $this->get('city_code');
    }

    public function getNumber()
    {
        return $this->get('number');
    }

    public function getExtension()
    {
        return $this->get('extension');
    }

    public function getProvider()
    {
        return $this->get('provider');
    }

    public function getRegion()
    {
        return $this->get('region');
    }

    public function getTimezone()
    {
        return $this->get('timezone');
    }

    public function getQcConflict()
    {
        return $this->get('qc_conflict');
    }

    public function getQc()
    {
        return $this->get('qc');
    }
}