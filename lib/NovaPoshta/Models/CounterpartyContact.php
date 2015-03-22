<?php
/**
 * Created by PhpStorm.
 * User: user
 * Date: 16.02.2015
 * Time: 20:48
 */

namespace NovaPoshta\Models;

use NovaPoshta\Core\BaseModel;

/**
 * Class CounterpartyContact
 * @package NovaPoshta\Models
 * @property string Ref
 * @property string City
 * @property string Address
 * @property string Contact
 * @property string Phone
 */
class CounterpartyContact extends BaseModel
{
    public function setRef($value)
    {
        $this->Ref = $value;
        return $this;
    }

    public function getRef()
    {
        return $this->Ref;
    }

    public function setCity($value)
    {
        $this->City = $value;
        return $this;
    }

    public function getCity()
    {
        return $this->City;
    }

    public function setAddress($value)
    {
        $this->Address = $value;
        return $this;
    }

    public function getAddress()
    {
        return $this->Address;
    }

    public function setContact($value)
    {
        $this->Contact = $value;
        return $this;
    }

    public function getContact()
    {
        return $this->Contact;
    }

    public function setPhone($value)
    {
        $this->Phone = $value;
        return $this;
    }

    public function getPhone()
    {
        return $this->Phone;
    }
}