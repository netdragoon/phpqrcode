<?php namespace Canducci\QRcode\Contracts;

interface IMessagePhone extends IMessageType {
    public function country($code);
    public function area($code);
    public function number($value);
}