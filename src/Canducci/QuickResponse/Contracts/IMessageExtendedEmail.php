<?php namespace Canducci\QRcode\Contracts;

interface IMessageExtendedEmail extends IMessageSimpleEmail {

    public function setSubject($value);
    public function setBody($value);
    public function getSubject();
    public function getBody();


}