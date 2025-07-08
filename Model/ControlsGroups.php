<?php

namespace Mpp\PreventgoBundle\Model;

class ControlsGroups
{
    protected ?HolderControls $holder;
    protected ?DocumentPage $document;

    public function __construct()
    {
        $this->holder = null;
        $this->document = null;
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

    public function setDocument(DocumentPage $document): self
    {
        $this->document = $document;

        return $this;
    }

    public function getDocument(): ?DocumentPage
    {
        return $this->document;
    }
}
