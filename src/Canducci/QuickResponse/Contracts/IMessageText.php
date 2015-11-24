<?php namespace Canducci\QRcode\Contracts; 

interface IMessageText extends IMessageType {
		
	public function setText($text);
	public function getText();

}
