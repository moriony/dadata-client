<?php

namespace Moriony\Dadata\Response;

use GuzzleHttp\Collection;

class CleanPhones extends Collection
{
    public function __construct(array $data)
    {
        foreach ($data as $key => & $phone) {
            $phone = new CleanPhone($phone);
        }
        parent::__construct($data);
    }
}