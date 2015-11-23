<?php namespace Canducci\QRcode\Contracts;

interface IMessageExtendedEmail extends IMessageSimpleEmail {

    public function subject($value);
    public function body($value);

}