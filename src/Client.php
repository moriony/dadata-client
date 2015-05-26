<?php

namespace Moriony\Dadata;

use GuzzleHttp\Command\Guzzle\GuzzleClient;
use Moriony\Dadata\Response\CleanAddress;
use Moriony\Dadata\Response\CleanAddresses;
use Moriony\Dadata\Response\CleanDate;
use Moriony\Dadata\Response\CleanDates;
use Moriony\Dadata\Response\CleanEmail;
use Moriony\Dadata\Response\CleanEmails;
use Moriony\Dadata\Response\CleanName;
use Moriony\Dadata\Response\CleanNames;
use Moriony\Dadata\Response\CleanPassport;
use Moriony\Dadata\Response\CleanPassports;
use Moriony\Dadata\Response\CleanPhone;
use Moriony\Dadata\Response\CleanPhones;
use Moriony\Dadata\Response\CleanVehicle;
use Moriony\Dadata\Response\CleanVehicles;

class Client
{
    /** @var GuzzleClient */
    protected $guzzle;

    public function __construct(GuzzleClient $guzzle)
    {
        $this->guzzle = $guzzle;
    }

    /**
     * @param string $address
     * @return CleanAddress
     */
    public function cleanAddress($address)
    {
        return $this->cleanAddresses([$address])->get(0);
    }

    /**
     * @param string[] $addresses
     * @return CleanAddresses
     */
    public function cleanAddresses(array $addresses)
    {
        return new CleanAddresses($this->guzzle->cleanAddress([
            'body' => $addresses
        ]));
    }

    /**
     * @param string $phone
     * @return CleanPhone
     */
    public function cleanPhone($phone)
    {
        return $this->cleanPhones([$phone])->get(0);
    }

    /**
     * @param string[] $phones
     * @return CleanPhones
     */
    public function cleanPhones(array $phones)
    {
        return new CleanPhones($this->guzzle->cleanPhone([
            'body' => $phones
        ]));
    }

    /**
     * @param string $passport
     * @return CleanPassport
     */
    public function cleanPassport($passport)
    {
        return $this->cleanPassports([$passport])->get(0);
    }

    /**
     * @param string[] $passports
     * @return CleanPassports
     */
    public function cleanPassports(array $passports)
    {
        return new CleanPassports($this->guzzle->cleanPassport([
            'body' => $passports
        ]));
    }

    /**
     * @param string $name
     * @return CleanName
     */
    public function cleanName($name)
    {
        return $this->cleanNames([$name])->get(0);
    }

    /**
     * @param string[] $names
     * @return CleanNames
     */
    public function cleanNames(array $names)
    {
        return new CleanNames($this->guzzle->cleanName([
            'body' => $names
        ]));
    }

    /**
     * @param string $email
     * @return CleanEmail
     */
    public function cleanEmail($email)
    {
        return $this->cleanEmails([$email])->get(0);
    }

    /**
     * @param string[] $emails
     * @return CleanEmails
     */
    public function cleanEmails(array $emails)
    {
        return new CleanEmails($this->guzzle->cleanEmail([
            'body' => $emails
        ]));
    }

    /**
     * @param string $date
     * @return CleanDate
     */
    public function cleanDate($date)
    {
        return $this->cleanDates([$date])->get(0);
    }

    /**
     * @param string[] $dates
     * @return CleanDates
     */
    public function cleanDates(array $dates)
    {
        return new CleanDates($this->guzzle->cleanDate([
            'body' => $dates
        ]));
    }

    /**
     * @param string $vehicle
     * @return CleanVehicle
     */
    public function cleanVehicle($vehicle)
    {
        return $this->cleanVehicles([$vehicle])->get(0);
    }

    /**
     * @param string[] $vehicles
     * @return CleanVehicles
     */
    public function cleanVehicles(array $vehicles)
    {
        return new CleanVehicles($this->guzzle->cleanVehicle([
            'body' => $vehicles
        ]));
    }
}