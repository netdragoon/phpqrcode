<?php namespace Canducci\QuickResponse\Contracts;

use Canducci\QuickResponse\QuickResponseFrameSize;
use Canducci\QuickResponse\QuickResponseLevel;
use Canducci\QuickResponse\QuickResponsePixel;

interface IQuickResponse {

	public function data(IMessageType $message);
	public function render($level = QuickResponseLevel::L, $pixel = QuickResponsePixel::Three, $frame = QuickResponseFrameSize::None);
	public function saveAs($path, $level = QuickResponseLevel::L, $pixel = QuickResponsePixel::Three, $frame = QuickResponseFrameSize::None);

}