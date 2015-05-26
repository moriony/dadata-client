<?php

require_once __DIR__ . '/../vendor/autoload.php';

$factory = new \Moriony\Dadata\Factory();
$client = $factory->createClient([
    'token' => '***auth token here***',
    'secret' => '***secret key here***'
]);

$response = $client->cleanAddress("мск сухонска 11/-89");
$response = $client->cleanPhone("тел 7165219 доб139");
$response = $client->cleanPassport("4509 235857");
$response = $client->cleanName("Срегей владимерович иванов");
$response = $client->cleanEmail("serega@yandex/ru");
$response = $client->cleanDate("24/3/12");
$response = $client->cleanVehicle("форд фокус");

