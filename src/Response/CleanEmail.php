<?php

namespace Moriony\Dadata\Response;

use GuzzleHttp\Collection;

class CleanEmail extends Collection
{
    public function getSource()
    {
        return $this->get('source');
    }

    public function getEmail()
    {
        return $this->get('email');
    }

    public function getQc()
    {
        return $this->get('qc');
    }
}