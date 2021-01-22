<?php

namespace Mpp\PreventgoBundle\Model;

class AddressDocumentInfo
{
    protected ?InvoiceDocumentDetails $documentDetails;
    protected ?InvoiceControls $controlsGroups;

    public function __construct()
    {
        $this->documentDetails = null;
        $this->controlsGroups = null;
    }

    public function setDocumentDetails(InvoiceDocumentDetails $documentDetails): self
    {
        $this->documentDetails = $documentDetails;

        return $this;
    }

    public function getDocumentDetails(): ?InvoiceDocumentDetails
    {
        return $this->documentDetails;
    }

    public function setControlsGroups(InvoiceControls $controlsGroups): self
    {
        $this->controlsGroups = $controlsGroups;

        return $this;
    }

    public function getControlsGroups(): ?InvoiceControls
    {
        return $this->controlsGroups;
    }
}