<?php namespace Canducci\QRcode\Contracts; 

interface IQuickResponse {

	public function data(IMessageType $message);
	public function render();
	public function saveAs($path);
}