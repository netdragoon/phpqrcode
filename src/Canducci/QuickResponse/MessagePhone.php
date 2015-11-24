<?php namespace Canducci\QuickResponse;

use Canducci\QuickResponse\Contracts\IMessagePhone;

class MessagePhone implements IMessagePhone {

    protected $country;
    protected $area;
    protected $number;

    public function getNumber()
    {
        return $this->number;
    }

    public function getArea()
    {
        return $this->area;
    }

    public function getCountry()
    {
        return $this->country;
    }

    public function setCountry($code)
    {
        $this->country = $code;
        return $this;
    }

    public function setArea($value)
    {
        $this->area = $value;
        return $this;
    }

    public function setNumber($value)
    {
        $this->number = $value;
        return $this;
    }

    public function getMessage()
    {
        return sprintf('tel:%s%s%s',
            $this->country,
            $this->area,
            $this->number);
    }
}