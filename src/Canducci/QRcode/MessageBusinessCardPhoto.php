<?php namespace Canducci\QRcode;

use Canducci\QRcode\Contracts\IMessageBusinessCardPhoto;

class MessageBusinessCardPhoto
    extends MessageBusinessCardSimple
    implements IMessageBusinessCardPhoto {

    protected $photo;

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