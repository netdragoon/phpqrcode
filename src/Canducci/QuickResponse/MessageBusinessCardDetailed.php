<?php namespace Canducci\QRcode;

use Canducci\QRcode\Contracts\IMessageAddress;
use Canducci\QRcode\Contracts\IMessageBusinessCardDetailed;
use Canducci\QRcode\Contracts\IMessagePhone;

class MessageBusinessCardDetailed
    extends MessageBusinessCardSimple
    implements IMessageBusinessCardDetailed
{
    protected $sortName;
    protected $orgName;
    protected $phoneprivate;
    protected $phonecelular;
    protected $address;
    protected $email;

    public function setSortName($names)
    {
        $this->sortName = $names;
        return $this;
    }

    public function getSortName()
    {
        return $this->sortName;
    }

    public function setOrganizationName($name)
    {
        $this->orgName = $name;
        return $this;
    }

    public function getOrganizationName()
    {
        return $this->orgName;
    }

    public function setPhonePrivate(IMessagePhone $phone)
    {
        $this->phoneprivate = $phone;
        return $this;
    }

    public function getPhonePrivate()
    {
        return $this->phoneprivate;
    }

    public function setPhoneCelular(IMessagePhone $phone)
    {
        $this->phonecelular = $phone;
        return $this;
    }

    public function getPhoneCelular()
    {
        return $this->phonecelular;
    }

    public function setMessageAddress(IMessageAddress $address)
    {
        $this->address = $address;
        return $this;
    }

    public function getMessageAddress()
    {
        return $this->address;
    }

    public function getEmail()
    {
        return $this->email;
    }

    public function setEmail($value)
    {
        $this->email = $value;
        return $this;
    }

    public function getMessage()
    {
        $phone1 = sprintf('TEL;WORK;VOICE:%s%s%s',
            $this->getPhone()->getCountry(),
            $this->getPhone()->getArea(),
            $this->getPhone()->getNumber());

        $phone2 = sprintf('TEL;HOME;VOICE:%s%s%s',
            $this->phoneprivate->getCountry(),
            $this->phoneprivate->getArea(),
            $this->phoneprivate->getNumber());

        $phone3 = sprintf('TEL;TYPE=cell:%s%s%s',
            $this->phonecelular->getCountry(),
            $this->phonecelular->getArea(),
            $this->phonecelular->getNumber());

        $car  = 'BEGIN:VCARD'."\n";
        $car .= 'VERSION:2.1'."\n";
        $car .= 'N:'.$this->sortName."\n";
        $car .= 'FN:'.$this->getPeople()->getName()."\n";
        $car .= 'ORG:'.$this->orgName."\n";
        $car .= 'EMAIL:'.$this->email."\n";
        $car .= $phone1."\n";
        $car .= $phone2."\n";
        $car .= $phone3."\n";

        if (!is_null($this->address))
        {
            $car .= 'ADR;TYPE=HOME;LABEL="';
            $car .= $this->address->getLabel().'":';
            $car .= $this->address->getPoBox().';';
            $car .= $this->address->getExt().';';
            $car .= $this->address->getStreet().';';
            $car .= $this->address->getTown().';';
            $car .= $this->address->getPostCode().';';
            $car .= $this->address->getCountry()."\n";
        }

        $car .= 'END:VCARD';

        return $car;
    }

}