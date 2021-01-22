<?php

namespace Mpp\PreventgoBundle\Model;

class HolderControls
{
    protected ?HolderDocumentConsistency $documentConsistency;

    public function __construct()
    {
        $this->documentConsistency = null;
    }

    public function setDocumentConsistency(HolderDocumentConsistency $documentConsistency): self
    {
        $this->documentConsistency = $documentConsistency;

        return $this;
    }

    public function getDocumentConsistency(): ?HolderDocumentConsistency
    {
        return $this->documentConsistency;
    }
}