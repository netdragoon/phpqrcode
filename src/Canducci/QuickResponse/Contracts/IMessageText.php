<?php namespace Canducci\QuickResponse\Contracts;

interface IMessageText extends IMessageType {
		
	public function setText($text);
	public function getText();

}
