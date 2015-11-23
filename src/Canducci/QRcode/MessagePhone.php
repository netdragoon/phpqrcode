<?php namespace Canducci\QRcode;

use Canducci\QRcode\Contracts\IMessagePhone;

class MessagePhone implements IMessagePhone {

    protected $country;
    protected $area;
    protected $number;

    public function country($code)
    {
        $this->country = $code;
        return $this;
    }

    public function area($value)
    {
        $this->area = $value;
        return $this;
    }

    public function number($value)
    {
        $this->number = $value;
        return $this;
    }

    public function get()
    {
        return sprintf('tel:%s%s%s',
            $this->country,
            $this->area,
            $this->number);
    }
}