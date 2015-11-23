<?php namespace Canducci\QRcode\Contracts;


interface IMessageSkype extends IMessageType {

    public function user($name);

}