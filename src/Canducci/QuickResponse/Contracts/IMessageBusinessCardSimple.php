<?php namespace Canducci\QuickResponse\Contracts;

interface IMessageBusinessCardSimple extends IMessageType  {

    public function setPeople(IMessagePeople $people);
    public function setPhone(IMessagePhone $phone);
    public function getPeople();
    public function getPhone();

}