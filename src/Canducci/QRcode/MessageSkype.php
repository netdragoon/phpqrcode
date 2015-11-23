<?php namespace Canducci\QRcode;

use Canducci\QRcode\Contracts\IMessageSkype;

class MessageSkype implements IMessageSkype {

    protected $name;
    public function user($name)
    {
        $this->name = $name;
    }

    public function get()
    {
        return sprintf('skype:%s?call', $this->name);
    }
}