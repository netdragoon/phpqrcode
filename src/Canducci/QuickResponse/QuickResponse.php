<?php namespace Canducci\QRcode;

use Canducci\QRcode\Contracts\IMessageType;
use Canducci\QRcode\Contracts\IQuickResponse;
use QRcode as QR;

require __DIR__."/Lib/qrlib.php";

class QuickResponse implements IQuickResponse {

	protected $message;

	public function __construct()
	{

	}

	public function data(IMessageType $message)
	{
		$this->message = $message;
		return $this;
	}

	public function render($level = QuickResponseLevel::L, $pixel = QuickResponsePixel::Three, $frame = QuickResponseFrameSize::Two)
	{
		return $this->renderAs(false, $level, $pixel, $frame, false);
	}

	public function saveAs($path, $level = QuickResponseLevel::L, $pixel = QuickResponsePixel::Three, $frame = QuickResponseFrameSize::Two)
	{
		return $this->renderAs($path, $level, $pixel, $frame, false);
	}

	protected function renderAs($path = false,
								 $level = QuickResponseLevel::L,
								 $pixel = QuickResponsePixel::Three,
								 $frame = QuickResponseFrameSize::None,
								 $print = false)
	{
		return QR::png($this->message->getMessage(), $path, $level, $pixel, $frame, $print);
	}

}