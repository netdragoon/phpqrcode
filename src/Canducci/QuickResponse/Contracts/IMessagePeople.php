<?php namespace Canducci\QRcode\Contracts;

interface IMessagePeople extends IMessageType {

    public function setName($name);
    public function getName();

}