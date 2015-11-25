<?php namespace Canducci\QuickResponse;

use Canducci\QuickResponse\Contracts\IMessageAddress;

class MessageAddress implements IMessageAddress {

    protected $label;
    protected $pobox;
    protected $ext;
    protected $street;
    protected $town;
    protected $region;
    protected $postcode;
    protected $country;

    public function __construct($label, $pobox, $ext, $street, $town, $region, $postcode, $country)
    {
        $this->label = $label;
        $this->pobox = $pobox;
        $this->ext = $ext;
        $this->street = $street;
        $this->town = $town;
        $this->region = $region;
        $this->postcode = $postcode;
        $this->country = $country;
    }


    public function getLabel()
    {
        return $this->label;
    }

    public function setLabel($label)
    {
        $this->label = $label;
        return $this;
    }

    public function getPobox()
    {
        return $this->pobox;
    }

    public function setPobox($pobox)
    {
        $this->pobox = $pobox;
        return $this;
    }

    public function getExt()
    {
        return $this->ext;
    }

    public function setExt($ext)
    {
        $this->ext = $ext;
        return $this;
    }

    public function getStreet()
    {
        return $this->street;
    }

    public function setStreet($street)
    {
        $this->street = $street;
        return $this;
    }

    public function getTown()
    {
        return $this->town;
    }

    public function setTown($town)
    {
        $this->town = $town;
        return $this;
    }

    public function getRegion()
    {
        return $this->region;
    }

    public function setRegion($region)
    {
        $this->region = $region;
        return $this;
    }

    public function getPostCode()
    {
        return $this->postcode;
    }

    public function setPostCode($postcode)
    {
        $this->postcode = $postcode;
        return $this;
    }

    public function getCountry()
    {
        return $this->country;
    }

    public function setCountry($country)
    {
        $this->country = $country;
        return $this;
    }

}