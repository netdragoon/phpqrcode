<?php namespace Canducci\QRcode;
use Canducci\QRcode\Contracts\IMessageSMS;

class MessageSMS extends MessagePhone implements IMessageSMS {

    public function get()
    {
        return sprintf('sms:%s%s%s',
            $this->country,
            $this->area,
            $this->number);
    }
}