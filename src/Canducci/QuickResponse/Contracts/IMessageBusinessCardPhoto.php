<?php namespace Canducci\QuickResponse\Contracts;

interface IMessageBusinessCardPhoto extends IMessageBusinessCardSimple {

    public function setPhoto($byte);
    public function getPhoto();

}