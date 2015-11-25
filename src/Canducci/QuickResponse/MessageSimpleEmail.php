<?php namespace Canducci\QuickResponse;

use Canducci\QuickResponse\Contracts\IMessageSimpleEmail;

class MessageSimpleEmail implements IMessageSimpleEmail {

    protected $email;

    public function __construct($email)
    {
        $this->email = $email;
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
        return sprintf('mailto:%s',$this->email);
    }

}