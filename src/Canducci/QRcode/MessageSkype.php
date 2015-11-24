<?php namespace Canducci\QRcode;

use Canducci\QRcode\Contracts\IMessageSkype;

class MessageSkype implements IMessageSkype {

    protected $name;

    public function getName()
    {
        return $this->name;
    }

    public function setName($name)
    {
        $this->name = $name;
    }

    public function getMessage()
    {
        return sprintf('skype:%s?call', $this->name);
    }
}