<?php

namespace Mpp\PreventgoBundle\Model;

class RequestError
{
    protected string $message;
    protected int $code;

    public function __construct()
    {
        $this->message = null;
        $this->code = null;
    }

    public function setMessage(string $message): self
    {
        $this->message = $message;

        return $this;
    }

    public function getMessage(): ?string
    {
        return $this->message;
    }

    public function setCode(int $code): self
    {
        $this->code = $code;

        return $this;
    }

    public function getCode(): ?int
    {
        return $this->code;
    }
}