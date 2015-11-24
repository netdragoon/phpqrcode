<?php namespace Canducci\QuickResponse\Contracts;

interface IMessagePeople extends IMessageType {

    public function setName($name);
    public function getName();

}