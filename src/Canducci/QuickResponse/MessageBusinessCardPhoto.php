<?php namespace Canducci\QuickResponse;

use Canducci\QuickResponse\Contracts\IMessageBusinessCardPhoto;
use Canducci\QuickResponse\Contracts\IMessagePeople;
use Canducci\QuickResponse\Contracts\IMessagePhone;

class MessageBusinessCardPhoto extends MessageBusinessCardSimple implements IMessageBusinessCardPhoto {

    protected $photo;

    function __construct(IMessagePeople $people, IMessagePhone $phone, $photo)
    {
        $this->photo = $photo;
        parent::__construct($people, $phone);
    }


    public function setPhoto($byte)
    {
        $this->photo = $byte;
        return $this;
    }

    public function getPhoto()
    {
        return $this->photo;
    }

    public function getMessage()
    {
        $phone = sprintf('%s%s%s',
        $this->phone->getCountry(),
        $this->phone->getArea(),
        $this->phone->getNumber());

        $card  = 'BEGIN:VCARD'."\n";
        $card .= 'FN:'.$this->people->getName()."\n";
        $card .= 'TEL;WORK;VOICE:'.($phone)."\n";
        if (!is_null($this->photo))
        {
            $card .= 'PHOTO;JPEG;ENCODING=BASE64:' . base64_encode($this->photo) . "\n";
        }
        $card .= 'END:VCARD';

        return $card;

    }

}