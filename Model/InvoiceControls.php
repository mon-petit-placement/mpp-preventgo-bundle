<?php

namespace Mpp\PreventgoBundle\Model;

class InvoiceControls
{
    protected ?HolderControls $holder;
    protected ?InvoiceDocumentControls $document;
    protected ?AdditionalControls $additional;

    public function __construct()
    {
        $this->holder = null;
        $this->document = null;
        $this->additional = null;
    }

    public function setHolder(HolderControls $holder): self
    {
        $this->holder = $holder;

        return $this;
    }

    public function getHolder(): ?HolderControls
    {
        return $this->holder;
    }

    public function setDocument(InvoiceDocumentControls $document): self
    {
        $this->document = $document;

        return $this;
    }

    public function getDocument(): ?InvoiceDocumentControls
    {
        return $this->document;
    }

    public function setAdditional(AdditionalControls $additional): self
    {
        $this->additional = $additional;

        return $this;
    }

    public function getAdditional(): ?AdditionalControls
    {
        return $this->additional;
    }
}