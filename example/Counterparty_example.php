<?php
/**
 * Created by PhpStorm.
 * User: user
 * Date: 12.02.2015
 * Time: 22:00
 */

namespace NovaPoshta_example;

use NovaPoshta\ApiModels\Counterparty;
use NovaPoshta\DataMethods\Counterparty_getCounterparties;
use NovaPoshta\DataMethods\Counterparty_getCounterpartyAddresses;
use NovaPoshta\DataMethods\Counterparty_getCounterpartyContactPersons;
use NovaPoshta\DataMethods\Counterparty_getCounterpartyOptions;
use NovaPoshta\DataMethods\Counterparty_getCounterpartyByEDRPOU;
use NovaPoshta\DataMethods\Counterparty_cloneLoyaltyCounterpartySender;

class Counterparty_example
{
    public static function save()
    {
        $counterparty = new Counterparty();
        $counterparty->setCounterpartyProperty('Recipient');
        $counterparty->setCityRef('db5c88d0-391c-11dd-90d9-001a92567626');
        $counterparty->setCounterpartyType('PrivatePerson');
        $counterparty->setFirstName('Пилипко');
        $counterparty->setLastName('Вася');
        $counterparty->setMiddleName('Сергійович');
        $counterparty->setPhone('+380661122333');
        $counterparty->setEmail('test@i.ua');

        return $counterparty->save();
    }

    public static function update()
    {
        $counterparty = new Counterparty();
        $counterparty->setRef('eb863d12-ac7d-11e4-a77a-005056887b8d');
        $counterparty->setCounterpartyProperty('Recipient');
        $counterparty->setCityRef('db5c88d0-391c-11dd-90d9-001a92567626');
        $counterparty->setCounterpartyType('PrivatePerson');
        $counterparty->setFirstName('Пилипко');
        $counterparty->setLastName('Вася');
        $counterparty->setMiddleName('Сергійович');
        $counterparty->setPhone('+380661122333');
        $counterparty->setEmail('test@i.ua');

        return $counterparty->update();
    }

    public static function delete()
    {
        $counterparty = new Counterparty();
        $counterparty->setRef('eb863d12-ac7d-11e4-a77a-005056887b8d');

        return $counterparty->delete();
    }

    public static function getCounterparties()
    {
        $data = new Counterparty_getCounterparties();
        $data->setCounterpartyProperty('Recipient');
        $data->setPage(1);
        $data->setCityRef('8d5a980d-391c-11dd-90d9-001a92567626');
        $data->setFindByString('Петр');

        return Counterparty::getCounterparties($data);
    }

    public static function getCounterpartyAddresses()
    {
        $data = new Counterparty_getCounterpartyAddresses();
        $data->setRef('512c13ac-1d43-11e4-acce-0050568002cf');

        return Counterparty::getCounterpartyAddresses($data);
    }

    public static function getCounterpartyContactPersons()
    {
        $data = new Counterparty_getCounterpartyContactPersons();
        $data->setRef('512c13ac-1d43-11e4-acce-0050568002cf');
        $data->setPage('1');

        return Counterparty::getCounterpartyContactPersons($data);
    }

    public static function getCounterpartyOptions()
    {
        $data = new Counterparty_getCounterpartyOptions();
        $data->setRef('512c13ac-1d43-11e4-acce-0050568002cf');

        return Counterparty::getCounterpartyOptions($data);
    }

    public static function getCounterpartyByEDRPOU()
    {
        $data = new Counterparty_getCounterpartyByEDRPOU();
        $data->setEDRPOU('0000000');
        $data->setCityRef('db5c88d0-391c-11dd-90d9-001a92567626');

        return Counterparty::getCounterpartyByEDRPOU($data);
    }

    public static function cloneLoyaltyCounterpartySender()
    {
        $data = new Counterparty_cloneLoyaltyCounterpartySender();
        $data->setCityRef('db5c88e0-391c-11dd-90d9-001a92567626');

        return Counterparty::cloneLoyaltyCounterpartySender($data);
    }
}
