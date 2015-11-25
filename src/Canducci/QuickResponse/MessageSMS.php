<?php namespace Canducci\QuickResponse;

use Canducci\QuickResponse\Contracts\IMessageSMS;

class MessageSMS extends MessagePhone implements IMessageSMS {

    function __construct($country, $area, $number)
    {
        parent::__construct($country, $area, $number);
    }

    public function getMessage()
    {
        return sprintf('sms:%s%s%s',
            $this->country,
            $this->area,
            $this->number);
    }
}