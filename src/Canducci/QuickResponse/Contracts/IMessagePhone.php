<?php namespace Canducci\QuickResponse\Contracts;

interface IMessagePhone extends IMessageType {

    public function setCountry($code);
    public function setArea($code);
    public function setNumber($value);
    public function getCountry();
    public function getArea();
    public function getNumber();

}