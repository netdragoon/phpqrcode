<?php namespace Canducci\QuickResponse\Contracts;

interface IMessageAddress {

    public function setLabel($value);
    public function setPobox($value);
    public function setExt($value);
    public function setStreet($value);
    public function setTown($value);
    public function setRegion($value);
    public function setPostCode($value);
    public function setCountry($value);
    public function getLabel();
    public function getPobox();
    public function getExt();
    public function getStreet();
    public function getTown();
    public function getRegion();
    public function getPostCode();
    public function getCountry();

}