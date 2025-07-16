<?php

namespace Mpp\PreventgoBundle\Model;

class DocumentPage
{
    protected ?string $typeRecognized;
    protected ?QualityControls $quality;
    protected ?string $noAnnotationFound;
    protected ?string $noTamperingSignFound;
    protected ?string $ibanFound;
    protected ?string $ibanFormatValid;
    protected ?string $ibanNotPublic;
    protected ?string $bicCodeFound;

    public function __construct()
    {
        $this->typeRecognized = null;
        $this->quality = null;
        $this->noAnnotationFound = null;
        $this->noTamperingSignFound = null;
        $this->ibanFound = null;
        $this->ibanFormatValid = null;
        $this->ibanNotPublic = null;
        $this->bicCodeFound = null;
    }

    public function setTypeRecognized(?string $typeRecognized): self
    {
        $this->typeRecognized = $typeRecognized;

        return $this;
    }

    public function getTypeRecognized(): ?string
    {
        return $this->typeRecognized;
    }

    public function setQuality(?QualityControls $quality): self
    {
        $this->quality = $quality;

        return $this;
    }

    public function getQuality(): ?QualityControls
    {
        return $this->quality;
    }

    public function setNoAnnotationFound(?string $noAnnotationFound): self
    {
        $this->noAnnotationFound = $noAnnotationFound;

        return $this;
    }

    public function getNoAnnotationFound(): ?string
    {
        return $this->noAnnotationFound;
    }

    public function setNoTamperingSignFound(?string $noTamperingSignFound): self
    {
        $this->noTamperingSignFound = $noTamperingSignFound;

        return $this;
    }

    public function getNoTamperingSignFound(): ?string
    {
        return $this->noTamperingSignFound;
    }

    public function setIbanFound(?string $ibanFound): self
    {
        $this->ibanFound = $ibanFound;

        return $this;
    }

    public function getIbanFound(): ?string
    {
        return $this->ibanFound;
    }

    public function setIbanFormatValid(?string $ibanFormatValid): self
    {
        $this->ibanFormatValid = $ibanFormatValid;

        return $this;
    }

    public function getIbanFormatValid(): ?string
    {
        return $this->ibanFormatValid;
    }

    public function setIbanNotPublic(?string $ibanNotPublic): self
    {
        $this->ibanNotPublic = $ibanNotPublic;

        return $this;
    }

    public function getIbanNotPublic(): ?string
    {
        return $this->ibanNotPublic;
    }

    public function setBicCodeFound(?string $bicCodeFound): self
    {
        $this->bicCodeFound = $bicCodeFound;

        return $this;
    }

    public function getBicCodeFound(): ?string
    {
        return $this->bicCodeFound;
    }
}
