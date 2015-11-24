<?php namespace Canducci\QRcode\Contracts;

interface IMessageBusinessCardPhoto extends IMessageBusinessCardSimple {
    public function setPhoto($byte);
    public function getPhoto();
}