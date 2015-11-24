<?php namespace Canducci\QuickResponse;

use Canducci\QuickResponse\Contracts\IMessageText;

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