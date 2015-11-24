<?php namespace Canducci\QuickResponse\Contracts;

interface IMessageSkype extends IMessagePeople {

    public function setName($name);
    public function getName();

}