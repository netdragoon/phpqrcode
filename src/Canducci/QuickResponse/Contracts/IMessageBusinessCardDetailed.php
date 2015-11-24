<?php namespace Canducci\QuickResponse\Contracts;

interface IMessageBusinessCardDetailed
    extends IMessageBusinessCardSimple, IMessageSimpleEmail {

    public function setSortName($names);
    public function getSortName();

    public function setOrganizationName($name);
    public function getOrganizationName();

    public function setPhone(IMessagePhone $phone);
    public function getPhone();

    public function setPhonePrivate(IMessagePhone $phone);
    public function getPhonePrivate();

    public function setPhoneCelular(IMessagePhone $phone);
    public function getPhoneCelular();

    public function setMessageAddress(IMessageAddress $address);
    public function getMessageAddress();
}