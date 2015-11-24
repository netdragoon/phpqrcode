<?php namespace Canducci\QRcode;

use Canducci\QRcode\Contracts\IMessageType;
use Canducci\QRcode\Contracts\IQuickResponse;
use QRcode;

require __DIR__."/Lib/qrlib.php";

class QuickResponse implements IQuickResponse {

	protected $value;

	public function __construct()
	{

	}

	public function render()
	{
		QRcode::png($this->value, false, QR_ECLEVEL_L, 4);
		return true;
	}


	public function data(IMessageType $message)
	{
		$this->value = $message->getMessage();
		return $this;
	}


	public function saveAs($path)
	{
		QRcode::png($this->value, $path);
		return true;
	}
}