<?php

namespace Mpp\PreventgoBundle\Model;

class BankAccountInfo
{
    protected ?DocumentDetails $documentDetails;
    protected ?ControlsGroups $controlsGroups;

    public function __construct()
    {
        $this->documentDetails = null;
        $this->controlsGroups = null;
    }

    public function getDocumentDetails(): ?DocumentDetails
    {
        return $this->documentDetails;
    }

    public function setDocumentDetails(?DocumentDetails $documentDetails): BankAccountInfo
    {
        $this->documentDetails = $documentDetails;

        return $this;
    }

    public function getControlsGroups(): ?ControlsGroups
    {
        return $this->controlsGroups;
    }

    public function setControlsGroups(?ControlsGroups $controlsGroups): BankAccountInfo
    {
        $this->controlsGroups = $controlsGroups;

        return $this;
    }
}
