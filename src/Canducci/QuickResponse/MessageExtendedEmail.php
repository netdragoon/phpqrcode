<?php namespace Canducci\QuickResponse;

use Canducci\QuickResponse\Contracts\IMessageExtendedEmail;

class MessageExtendedEmail implements IMessageExtendedEmail {

    protected $email;
    protected $subject;
    protected $body;

    public function __construct($email, $subject, $body)
    {
        $this->email = $email;
        $this->subject = $subject;
        $this->body = $body;
    }


    public function getEmail()
    {
        return $this->email;
    }

    public function getSubject()
    {
        return $this->subject;
    }

    public function getBody()
    {
        return $this->body;
    }
    public function setEmail($value)
    {
        $this->email = $value;
        return $this;
    }

    public function setSubject($value)
    {
        $this->subject = $value;
        return $this;
    }

    public function setBody($value)
    {
        $this->body = $value;
        return $this;
    }

    public function getMessage()
    {
        return sprintf('mailto:%s?subject=%s&body=%s',
            $this->email,
            urlencode($this->subject),
            urlencode($this->body));
    }

}