<?php namespace Canducci\QuickResponse\Contracts;

interface IMessageSimpleEmail extends IMessageType {

    public function setEmail($value);
    public function getEmail();

}