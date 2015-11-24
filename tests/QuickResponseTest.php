<?php


class QuickResponseTest extends TestCase
{
    public function setUp()
    {
        parent::setUp();
    }
    public function getQuickResponse()
    {
        return $this->app->make('Canducci\QRcode\Contracts\IQuickResponse');
    }
    public function testInstance()
    {
        $this->assertInstanceOf('Canducci\QRcode\Contracts\IQuickResponse',
            $this->getQuickResponse());
    }
}