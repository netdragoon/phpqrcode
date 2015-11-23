<?php namespace Canducci\QRcode;

use Canducci\QRcode\Contracts\IMessageSimpleEmail;

class MessageSimpleEmail implements IMessageSimpleEmail {

    protected $email;
    public function email($value)
    {
        $this->email = $value;
        return $this;
    }

    public function get()
    {
        return sprintf('mailto:%s',$this->email);
    }
}