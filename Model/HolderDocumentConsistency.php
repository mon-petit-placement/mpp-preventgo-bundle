<?php

namespace Mpp\PreventgoBundle\Model;

class HolderDocumentConsistency
{
    protected ?string $birthNameFound;
    protected ?string $lastNameFound;
    protected ?string $firstNameFound;
    protected ?string $firstNameInitialsFound;
    protected ?string $addressFound;
    protected ?string $phoneNumberFound;

    public function __construct()
    {
        $this->birthNameFound = null;
        $this->lastNameFound = null;
        $this->firstNameFound = null;
        $this->firstNameInitialsFound = null;
        $this->addressFound = null;
        $this->phoneNumberFound = null;
    }

    public function setBirthNameFound(string $birthNameFound): self
    {
        $this->birthNameFound = $birthNameFound;

        return $this;
    }

    public function getBirthNameFound(): ?string
    {
        return $this->birthNameFound;
    }

    public function setLastNameFound(string $lastNameFound): self
    {
        $this->lastNameFound = $lastNameFound;

        return $this;
    }

    public function getLastNameFound(): ?string
    {
        return $this->lastNameFound;
    }

    public function setFirstNameFound(string $firstNameFound): self
    {
        $this->firstNameFound = $firstNameFound;

        return $this;
    }

    public function getFirstNameFound(): ?string
    {
        return $this->firstNameFound;
    }

    public function setFirstNameInitialsFound(string $firstNameInitialsFound): self
    {
        $this->firstNameInitialsFound = $firstNameInitialsFound;

        return $this;
    }

    public function getFirstNameInitialsFound(): ?string
    {
        return $this->firstNameInitialsFound;
    }

    public function setAddressFound(string $addressFound): self
    {
        $this->addressFound = $addressFound;

        return $this;
    }

    public function getAddressFound(): ?string
    {
        return $this->addressFound;
    }

    public function setPhoneNumberFound(string $phoneNumberFound): self
    {
        $this->phoneNumberFound = $phoneNumberFound;

        return $this;
    }

    public function getPhoneNumberFound(): ?string
    {
        return $this->phoneNumberFound;
    }
}