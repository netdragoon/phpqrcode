<?php

use Canducci\QuickResponse\MessageBusinessCardDetailed;
use Canducci\QuickResponse\MessagePhone;
use Canducci\QuickResponse\MessageText;
use Canducci\QuickResponse\MessageSMS;
use Canducci\QuickResponse\MessageSimpleEmail;
use Canducci\QuickResponse\MessageExtendedEmail;
use Canducci\QuickResponse\MessagePeople;
use Canducci\QuickResponse\MessageSkype;
use Canducci\QuickResponse\MessageAddress;
use Canducci\QuickResponse\MessageBusinessCardSimple;
use Canducci\QuickResponse\MessageBusinessCardPhoto;

use Canducci\QuickResponse\QuickResponseLevel;
use Canducci\QuickResponse\QuickResponsePixel;
use Canducci\QuickResponse\QuickResponseFrameSize;

use Canducci\QuickResponse\Contracts\IMessagePeople;
use Canducci\QuickResponse\Contracts\IMessageAddress;
use Canducci\QuickResponse\Contracts\IMessagePhone;
use Canducci\QuickResponse\Contracts\IMessageType;

if (!function_exists('quickresponse')) {

    function quickresponse()
    {
        return app('Canducci\QuickResponse\Contracts\IQuickResponse');
    }

}

if (!function_exists('qrRender')) {

    function qrRender(IMessageType $message, $level = QuickResponseLevel::L, $pixel = QuickResponsePixel::Three, $frame = QuickResponseFrameSize::Two)
    {
        return quickresponse()
            ->data($message)
            ->render($level, $pixel, $frame, false);
    }

}

if (!function_exists('qrSaveAs')) {

    function qrSaveAs(IMessageType $message, $path, $level = QuickResponseLevel::L, $pixel = QuickResponsePixel::Three, $frame = QuickResponseFrameSize::Two)
    {
        return quickresponse()
            ->data($message)
            ->saveAs($path, $level, $pixel, $frame, false);
    }

}

if (!function_exists('messageText')) {

    function messageText($text)
    {
        return (new MessageText($text));
    }
}

if (!function_exists('messagePeople')) {

    function messagePeople($name)
    {
        return (new MessagePeople($name));
    }
}

if (!function_exists('messageAddress')) {

    function messageAddress($label, $pobox, $ext, $street, $town, $region, $postcode, $country)
    {
        return (new MessageAddress($label, $pobox, $ext, $street, $town, $region, $postcode, $country));
    }
}

if (!function_exists('messageSkype')) {

    function messageSkype($name)
    {
        return (new messageSkype($name));
    }
}

if (!function_exists('messagePhone')) {

    function messagePhone($country,$area,$number)
    {
        return (new MessagePhone($country,$area, $number));
    }
}

if (!function_exists('messageSMS')) {

    function messageSMS($country,$area, $number)
    {
        return (new MessageSMS($country,$area,$number));
    }
}

if (!function_exists('messageSimpleEmail')) {

    function messageSimpleEmail($email)
    {
        return (new MessageSimpleEmail($email));
    }
}

if (!function_exists('messageExtendedEmail')) {

    function messageExtendedEmail($email, $subject, $body)
    {
        return (new MessageExtendedEmail($email,$subject,$body));
    }
}

if (!function_exists('messageBusinessCardSimple')) {

    function messageBusinessCardSimple(IMessagePeople $people, IMessagePhone $phone)
    {
        return (new MessageBusinessCardSimple($people, $phone));
    }
}

if (!function_exists('messageBusinessCardDetailed')) {

    function messageBusinessCardDetailed(IMessagePeople $people, IMessagePhone $phone, IMessagePhone $phoneprivate, IMessagePhone $phonecelular,$sortName, $orgName, $email, IMessageAddress $address)
    {
        return (new MessageBusinessCardDetailed($people, $phone, $phoneprivate, $phonecelular, $sortName, $orgName, $email, $address));
    }
}

if (!function_exists('messageBusinessCardPhoto')) {

    function messageBusinessCardPhoto(IMessagePeople $people, IMessagePhone $phone, $photo)
    {
        return (new MessageBusinessCardPhoto($people, $phone, $photo));
    }
}
