<?php

use Canducci\QuickResponse\Contracts\IMessageType;
use Canducci\QuickResponse\QuickResponseLevel;
use Canducci\QuickResponse\QuickResponsePixel;
use Canducci\QuickResponse\QuickResponseFrameSize;

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