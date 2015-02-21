<?php
/**
 * Created by PhpStorm.
 * User: user
 * Date: 12.02.2015
 * Time: 22:00
 */

include_once "../NovaPoshta/autoload.php";

use NovaPoshta\ApiModels\ContactPerson;

class ContactPerson_example
{
    static public function save()
    {
        $contactPerson = new ContactPerson();
        $contactPerson->setCounterpartyRef('2718756a-b39b-11e4-a77a-005056887b8d');
        $contactPerson->setFirstName('Пандан');
        $contactPerson->setLastName('Джедай');
        $contactPerson->setMiddleName('Джедайович');
        $contactPerson->setPhone('380660000000');
        $contactPerson->setEmail('test@i.ua');

        return $contactPerson->save();
    }

    static public function update()
    {
        $contactPerson = new ContactPerson();
        $contactPerson->setRef('6ba7314c-b543-11e4-a77a-005056887b8d');
        $contactPerson->setCounterpartyRef('2718756a-b39b-11e4-a77a-005056887b8d');
        $contactPerson->setFirstName('Панданюк');
        $contactPerson->setLastName('Джедай');
        $contactPerson->setMiddleName('Джедайович');
        $contactPerson->setPhone('380660000000');
        $contactPerson->setEmail('test@i.ua');

        return $contactPerson->update();
    }

    static public function delete()
    {
        $contactPerson = new ContactPerson();
        $contactPerson->setRef('6ba7314c-b543-11e4-a77a-005056887b8d');

        return $contactPerson->delete();
    }
}


$result = ContactPerson_example::delete();

var_dump($result);