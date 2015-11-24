<?php namespace Canducci\QRcode\Contracts;


interface IMessageSkype extends IMessagePeople {

    public function setName($name);
    public function getName();

}