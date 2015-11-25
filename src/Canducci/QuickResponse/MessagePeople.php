<?php namespace Canducci\QuickResponse;

use Canducci\QuickResponse\Contracts\IMessagePeople;
use Canducci\QuickResponse\Contracts\IMessageSkype;

class MessagePeople extends MessageSkype implements IMessagePeople, IMessageSkype {

    public function __construct($name)
    {
        parent::__construct($name);
    }
}