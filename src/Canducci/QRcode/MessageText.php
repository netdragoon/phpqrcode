<?php namespace Canducci\QRcode;

use Canducci\QRcode\Contracts\IMessageText;

class MessageText implements IMessageText {

	protected $text;
	public function text($text)
	{
		$this->text = $text;
	}	
	public function get()
	{
		return $this->text;
	}
}