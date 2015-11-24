<?php namespace Canducci\QuickResponse\Contracts;

use Canducci\QRcode\QuickResponseFrameSize;
use Canducci\QRcode\QuickResponseLevel;
use Canducci\QRcode\QuickResponsePixel;

interface IQuickResponse {

	public function data(IMessageType $message);

	public function render($level = QuickResponseLevel::L, $pixel = QuickResponsePixel::Three, $frame = QuickResponseFrameSize::None);

	public function saveAs($path, $level = QuickResponseLevel::L, $pixel = QuickResponsePixel::Three, $frame = QuickResponseFrameSize::None);

}