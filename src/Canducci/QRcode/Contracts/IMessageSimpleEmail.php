<?php namespace Canducci\QRcode\Contracts;

interface IMessageSimpleEmail extends IMessageType {

    public function email($value);
}