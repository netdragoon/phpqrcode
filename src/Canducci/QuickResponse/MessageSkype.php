<?php namespace Canducci\QuickResponse;

use Canducci\QuickResponse\Contracts\IMessageSkype;

class MessageSkype implements IMessageSkype {

    protected $name;

    public function __construct($name)
    {
        $this->name = $name;
    }

    public function getName()
    {
        return $this->name;
    }

    public function setName($name)
    {
        $this->name = $name;
        return $this;
    }

    public function getMessage()
    {
        return sprintf('skype:%s?call', $this->name);
    }
}