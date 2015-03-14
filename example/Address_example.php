<?php
/**
 * Created by PhpStorm.
 * User: user
 * Date: 12.02.2015
 * Time: 22:00
 */

namespace NovaPoshta_example;

use NovaPoshta\ApiModels\Address;
use NovaPoshta\DataMethods\Address_getStreet;
use NovaPoshta\DataMethods\Address_getWarehouses;
use NovaPoshta\DataMethods\Address_getCities;
use NovaPoshta\DataMethods\Address_getAreas;

class Address_example
{
    static public function save()
    {
        $address = new Address();
        $address->setCounterpartyRef('2718756a-b39b-11e4-a77a-005056887b8d');
        $address->setBuildingNumber('2/2');
        $address->setFlat('22');
        $address->setNote('Перший підїзд');
        $address->setStreetRef('c55c9056-4148-11dd-9198-001d60451983');

        return $address->save();
    }

    static public function update()
    {
        $address = new Address();
        $address->Ref = 'e29115c8-6f59-11e4-acce-0050568002cf';
        $address->CounterpartyRef = '2718756a-b39b-11e4-a77a-005056887b8d';
        $address->BuildingNumber = '92';
        $address->Flat = '22';
        $address->Note = 'Перший';
        $address->StreetRef = 'c55c9056-4148-11dd-9198-001d60451983';

        return $address->update();
    }

    static public function delete()
    {
        $address = new Address();
        $address->Ref = 'e29115c8-6f59-11e4-acce-0050568002cf';

        return $address->delete();
    }

    static public function getCities()
    {
        $data = new Address_getCities();
        $data->setRef('db5c896a-391c-11dd-90d9-001a92567626');
        $data->setPage(1);
        $data->setFindByString('Пол');

        return Address::getCities($data);
    }

    static public function getStreet()
    {
        $data = new Address_getStreet();
        $data->setCityRef('8d5a980d-391c-11dd-90d9-001a92567626');
        $data->setFindByString('Авт');
        $data->setPage(1);

        return Address::getStreet($data);
    }

    static public function getWarehouses()
    {
        $data = new Address_getWarehouses();
        $data->setCityRef('ebc0eda9-93ec-11e3-b441-0050568002cf');
        $data->setPage(1);

        return Address::getWarehouses($data);
    }

    static public function getAreas()
    {
        $data = new Address_getAreas();
        $data->setRef('7150813d-9b87-11de-822f-000c2965ae0e');
        $data->setPage(1);

        return Address::getAreas($data);
    }
}
