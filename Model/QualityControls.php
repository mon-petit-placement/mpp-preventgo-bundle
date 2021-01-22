<?php

namespace Mpp\PreventgoBundle\Model;

class QualityControls
{
    protected ?string $aboveMinimumThreshold;
    protected ?int $errorCode;

    public function __construct()
    {
        $this->aboveMinimumThreshold = null;
        $this->errorCode = null;
    }

    public function setAboveMinimumThreshold(string $aboveMinimumThreshold): self
    {
        $this->aboveMinimumThreshold = $aboveMinimumThreshold;

        return $this;
    }

    public function getAboveMinimumThreshold(): ?string
    {
        return $this->aboveMinimumThreshold;
    }

    public function setErrorCode(int $errorCode): self
    {
        $this->errorCode = $errorCode;

        return $this;
    }

    public function getErrorCode(): ?int
    {
        return $this->errorCode;
    }
}