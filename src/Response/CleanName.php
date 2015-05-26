<?php

namespace Moriony\Dadata\Response;

use GuzzleHttp\Collection;

class CleanName extends Collection
{
    public function getSource()
    {
        return $this->get('source');
    }

    public function getResult()
    {
        return $this->get('result');
    }

    public function getSurname()
    {
        return $this->get('surname');
    }

    public function getName()
    {
        return $this->get('name');
    }

    public function getPatronymic()
    {
        return $this->get('patronymic');
    }

    public function getGender()
    {
        return $this->get('gender');
    }

    public function getQc()
    {
        return $this->get('qc');
    }
}