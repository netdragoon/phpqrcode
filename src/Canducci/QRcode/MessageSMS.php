<?php namespace Canducci\QRcode;
use Canducci\QRcode\Contracts\IMessageSMS;

class MessageSMS extends MessagePhone implements IMessageSMS {

    public function getMessage()
    {
        return sprintf('sms:%s%s%s',
            $this->country,
            $this->area,
            $this->number);
    }
}