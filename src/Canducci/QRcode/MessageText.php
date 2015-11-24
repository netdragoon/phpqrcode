<?php namespace Canducci\QRcode;

use Canducci\QRcode\Contracts\IMessageText;

class MessageText implements IMessageText {

	protected $text;

	public function getText()
	{
		return $this->text;
	}

	public function setText($text)
	{
		$this->text = $text;
	}	
	public function getMessage()
	{
		return $this->text;
	}
}