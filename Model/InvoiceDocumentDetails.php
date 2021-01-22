<?php

namespace Mpp\PreventgoBundle\Model;

class InvoiceDocumentDetails
{
    protected ?string $firstName;
    protected ?string $lastName;
    protected ?string $birthName;
    protected ?string $address;
    protected ?string $issuanceDate;

    public function __construct()
    {
        $this->firstName = null;
        $this->lastName = null;
        $this->birthName = null;
        $this->address = null;
        $this->issuanceDate = null;
    }

    public function setFirstName(string $firstName): self
    {
        $this->firstName = $firstName;

        return $this;
    }

    public function getFirstName(): ?string
    {
        return $this->firstName;
    }

    public function setLastName(string $lastName): self
    {
        $this->lastName = $lastName;

        return $this;
    }

    public function getLastName(): ?string
    {
        return $this->lastName;
    }

    public function setBirthName(string $birthName): self
    {
        $this->birthName = $birthName;

        return $this;
    }

    public function getBirthName(): ?string
    {
        return $this->birthName;
    }

    public function setAddress(string $address): self
    {
        $this->address = $address;

        return $this;
    }

    public function getAddress(): ?string
    {
        return $this->address;
    }

    public function setIssuanceDate(string $issuanceDate): self
    {
        $this->issuanceDate = $issuanceDate;

        return $this;
    }

    public function getIssuanceDate(): ?string
    {
        return $this->issuanceDate;
    }
}