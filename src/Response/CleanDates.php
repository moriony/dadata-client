<?php

namespace Moriony\Dadata\Response;

use GuzzleHttp\Collection;

class CleanDates extends Collection
{
    public function __construct(array $data)
    {
        foreach ($data as $key => & $date) {
            $date = new CleanDate($date);
        }
        parent::__construct($data);
    }
}