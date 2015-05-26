<?php

namespace Moriony\Dadata\Response;

use GuzzleHttp\Collection;

class CleanAddress extends Collection
{
    public function getSource()
    {
        return $this->get('source');
    }

    public function getResult()
    {
        return $this->get('result');
    }

    public function getPostalCode()
    {
        return $this->get('postal_code');
    }

    public function getCountry()
    {
        return $this->get('country');
    }

    public function getRegionType()
    {
        return $this->get('region_type');
    }

    public function getRegionTypeFull()
    {
        return $this->get('region_type_full');
    }

    public function getRegion()
    {
        return $this->get('region');
    }

    public function getAreaType()
    {
        return $this->get('area_type');
    }

    public function getAreaTypeFull()
    {
        return $this->get('area_type_full');
    }

    public function getArea()
    {
        return $this->get('area');
    }

    public function getCityType()
    {
        return $this->get('city_type');
    }

    public function getCityTypeFull()
    {
        return $this->get('city_type_full');
    }

    public function getCity()
    {
        return $this->get('city');
    }

    public function getSettlementType()
    {
        return $this->get('settlement_type');
    }

    public function getSettlementTypeFull()
    {
        return $this->get('settlement_type_full');
    }

    public function getSettlement()
    {
        return $this->get('settlement');
    }

    public function getStreetTypeFull()
    {
        return $this->get('street_type_full');
    }

    public function getStreet()
    {
        return $this->get('street');
    }

    public function getHouseType()
    {
        return $this->get('house_type');
    }

    public function getHouseTypeFull()
    {
        return $this->get('house_type_full');
    }

    public function getHouse()
    {
        return $this->get('house');
    }

    public function getBlockType()
    {
        return $this->get('block_type');
    }

    public function getBlockTypeFull()
    {
        return $this->get('block_type_full');
    }

    public function getBlock()
    {
        return $this->get('block');
    }

    public function getFlatType()
    {
        return $this->get('flat_type');
    }

    public function getFlat()
    {
        return $this->get('flat');
    }

    public function getPostalBox()
    {
        return $this->get('postal_box');
    }

    public function getKladrId()
    {
        return $this->get('kladr_id');
    }

    public function getFiasId()
    {
        return $this->get('fias_id');
    }

    public function getOkato()
    {
        return $this->get('okato');
    }

    public function getOktmo()
    {
        return $this->get('oktmo');
    }

    public function getTaxOffice()
    {
        return $this->get('tax_office');
    }

    public function getTaxOfficeLegal()
    {
        return $this->get('tax_office_legal');
    }

    public function getFlatArea()
    {
        return $this->get('flat_area');
    }

    public function getSquareMeterPrice()
    {
        return $this->get('square_meter_price');
    }

    public function getFlatPrice()
    {
        return $this->get('flat_price');
    }

    public function getTimezone()
    {
        return $this->get('timezone');
    }

    public function getGeoLat()
    {
        return $this->get('geo_lat');
    }

    public function getGeoLon()
    {
        return $this->get('geo_lon');
    }

    public function getQcGeo()
    {
        return $this->get('qc_geo');
    }

    public function getQcComplete()
    {
        return $this->get('qc_complete');
    }

    public function getQcHouse()
    {
        return $this->get('qc_house');
    }

    public function getUnparsedParts()
    {
        return $this->get('unparsed_parts');
    }
}