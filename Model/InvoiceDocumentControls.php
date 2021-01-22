<?php

namespace Mpp\PreventgoBundle\Model;

class InvoiceDocumentControls
{
    protected ?string $typeRecognized;
    protected ?QualityControls $quality;
    protected ?string $noAnnotationFound;
    protected ?string $noTamperingSignFound;

    public function __construct()
    {
        $this->typeRecognized = null;
        $this->quality = null;
        $this->noAnnotationFound = null;
        $this->noTamperingSignFound = null;
    }

    public function setTypeRecognized(string $typeRecognized): self
    {
        $this->typeRecognized = $typeRecognized;

        return $this;
    }

    public function getTypeRecognized(): ?string
    {
        return $this->typeRecognized;
    }

    public function setQuality(QualityControls $quality): self
    {
        $this->quality = $quality;

        return $this;
    }

    public function getQuality(): ?QualityControls
    {
        return $this->quality;
    }

    public function setNoAnnotationFound(string $noAnnotationFound): self
    {
        $this->noAnnotationFound = $noAnnotationFound;

        return $this;
    }

    public function getNoAnnotationFound(): ?string
    {
        return $this->noAnnotationFound;
    }

    public function setNoTamperingSignFound(string $noTamperingSignFound): self
    {
        $this->noTamperingSignFound = $noTamperingSignFound;

        return $this;
    }

    public function getNoTamperingSignFound(): ?string
    {
        return $this->noTamperingSignFound;
    }
}