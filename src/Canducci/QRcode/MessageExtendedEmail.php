<?php namespace Canducci\QRcode;

use Canducci\QRcode\Contracts\IMessageExtendedEmail;

class MessageExtendedEmail implements IMessageExtendedEmail {

    protected $email;
    protected $subject;
    protected $body;
    public function email($value)
    {
        $this->email = $value;
        return $this;
    }

    public function subject($value)
    {
        $this->subject = $value;
        return $this;
    }

    public function body($value)
    {
        $this->body = $value;
        return $this;
    }

    public function get()
    {
        return sprintf('mailto:%s?subject=%s&body=%s',
            $this->email,
            urlencode($this->subject),
            urlencode($this->body));
    }
}