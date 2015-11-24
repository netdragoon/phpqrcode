<?php namespace Canducci\QRcode\Contracts;

interface IMessageSimpleEmail extends IMessageType {

    public function setEmail($value);
    public function getEmail();
}