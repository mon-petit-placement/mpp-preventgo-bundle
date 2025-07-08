<?php

namespace Mpp\PreventgoBundle\Model;

class DocumentDetails
{
    protected ?string $iban;
    protected ?string $bicCode;

    public function __construct()
    {
        $this->iban = null;
        $this->bicCode = null;
    }

    public function setIban(?string $iban): self
    {
        $this->iban = $iban;

        return $this;
    }

    public function getIban(): ?string
    {
        return $this->iban;
    }

    public function setBicCode(?string $bicCode): self
    {
        $this->bicCode = $bicCode;

        return $this;
    }

    public function getBicCode(): ?string
    {
        return $this->bicCode;
    }
}
