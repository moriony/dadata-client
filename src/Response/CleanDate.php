<?php

namespace Moriony\Dadata\Response;

use GuzzleHttp\Collection;

class CleanDate extends Collection
{
    public function getSource()
    {
        return $this->get('source');
    }

    public function getBirthDate()
    {
        return $this->get('birthdate');
    }

    public function getQc()
    {
        return $this->get('qc');
    }
}