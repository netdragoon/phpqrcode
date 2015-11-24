<?php namespace Canducci\QuickResponse;

use Canducci\QuickResponse\Contracts\IMessageBusinessCardSimple;
use Canducci\QuickResponse\Contracts\IMessagePeople;
use Canducci\QuickResponse\Contracts\IMessagePhone;

class MessageBusinessCardSimple implements IMessageBusinessCardSimple {

    protected $people;
    protected $phone;

    public function getPeople()
    {
        return $this->people;
    }

    public function getPhone()
    {
        return $this->phone;
    }

    public function setPeople(IMessagePeople $people)
    {
        $this->people = $people;
        return $this;
    }

    public function setPhone(IMessagePhone $phone)
    {
        $this->phone = $phone;
        return $this;
    }

    public function getMessage()
    {
        $phone = sprintf('%s%s%s',
            $this->phone->getCountry(),
            $this->phone->getArea(),
            $this->phone->getNumber());

        $card  = 'BEGIN:VCARD'."\n";
        $card .= 'FN:'.$this->people->getName()."\n";
        $card .= 'TEL;WORK;VOICE:'.($phone)."\n";
        $card .= 'END:VCARD';

        return $card;
    }

}