<?php

namespace Mpp\PreventgoBundle\Model;

class Result
{
    const DOCUMENT_TYPE_FAMILY_UNDEFINED = 'UNDEFINED';
    const DOCUMENT_TYPE_FAMILY_BANK_ACCOUNT = 'BANK_ACCOUNT';
    const DOCUMENT_TYPE_FAMILY_TAX = 'TAX_DOCUMENT';
    const DOCUMENT_TYPE_FAMILY_ADDRESS = 'ADDRESS_DOCUMENT';
    const DOCUMENT_TYPE_FAMILY_PAYSLIP = 'PAYSLIP_DOCUMENT';
    const DOCUMENT_TYPE_FAMILY_IDENTITY = 'IDENTITY_DOCUMENT';
    const DOCUMENT_TYPE_FAMILY_VRC = 'VRC_DOCUMENT';
    const DOCUMENT_TYPE_FAMILY_FAMILY_ALLOWANCE = 'FAMILY_ALLOWANCE_DOCUMENT';
    const DOCUMENT_TYPE_FAMILY_RETIREMENT_PENSION = 'RETIREMENT_PENSION_DOCUMENT';
    const DOCUMENT_TYPE_FAMILY_INSURANCE_ATTESTATION = 'INSURANCE_ATTESTATION_DOCUMENT';

    const DOCUMENT_TYPE_UNDEFINED = 'UNDEFINED';
    const DOCUMENT_TYPE_TAX_NOTICE = 'TAX_NOTICE';
    const DOCUMENT_TYPE_TAX_JUSTIFICATION = 'TAX_JUSTIFICATION';
    const DOCUMENT_TYPE_RIB = 'RIB';
    const DOCUMENT_TYPE_PROPERTY_TAX_NOTICE = 'PROPERTY_TAX_NOTICE';
    const DOCUMENT_TYPE_LOCAL_RESIDENCE_TAX_NOTICE = 'LOCAL_RESIDENCE_TAX_NOTICE';
    const DOCUMENT_TYPE_ENERGY_INVOICE = 'ENERGY_INVOICE';
    const DOCUMENT_TYPE_ENERGY_SCHEDULE = 'ENERGY_SCHEDULE';
    const DOCUMENT_TYPE_PHONE_INVOICE = 'PHONE_INVOICE';
    const DOCUMENT_TYPE_PROVIDER_ATTESTATION = 'PROVIDER_ATTESTATION';
    const DOCUMENT_TYPE_PAYSLIP = 'PAYSLIP';
    const DOCUMENT_TYPE_FAMILY_ALLOWANCE = 'FAMILY_ALLOWANCE';
    const DOCUMENT_TYPE_RETIREMENT_PENSION = 'RETIREMENT_PENSION';
    const DOCUMENT_TYPE_INSURANCE_ATTESTATION = 'INSURANCE_ATTESTATION';
    const DOCUMENT_TYPE_ID_CARD = 'ID_CARD';
    const DOCUMENT_TYPE_PASSPORT = 'PASSPORT';
    const DOCUMENT_TYPE_RESIDENCE_PERMIT = 'RESIDENCE_PERMIT';
    const DOCUMENT_TYPE_DRIVER_LICENSE = 'DRIVER_LICENSE';
    const DOCUMENT_TYPE_VISA = 'VISA';
    const DOCUMENT_TYPE_VEHICLE_REGISTRATION_CERTIFICATE = 'VEHICLE_REGISTRATION_CERTIFICATE';

    protected ?RequestInfo $requestInfo;
    protected ?string $documentTypeFamily;
    protected ?string $documentType;
    protected ?string $certificateUrl;
    protected ?array $pages; // TODO: DocumentPage
    protected ?RequestError $error;
    protected ?int $controlsSummary;
    protected ?array $keysWithError;
    protected ?AddressDocumentInfo $addressDocumentInfo;
    protected ?BankAccountInfo $bankAccountInfo;

    // TODO
    protected ?TaxDocumentInfo $taxDocumentInfo;
    protected ?PayslipDocumentInfo $payslipDocumentInfo;
    protected ?FamilyAllowanceDocumentInfo $familyAllowanceDocumentInfo;
    protected ?IdentityDocumentInfo $identityDocumentInfo;
    protected ?VrcDocumentInfo $vrcDocumentInfo;
    protected ?InsuranceAttestationDocumentInfo $insuranceAttestationDocumentInfo;

    public function __construct()
    {
        $this->requestInfo = null;
        $this->documentTypeFamily = self::DOCUMENT_TYPE_FAMILY_UNDEFINED;
        $this->documentType = self::DOCUMENT_TYPE_UNDEFINED;
        $this->certificateUrl = null;
        $this->pages = null;
        $this->error = null;
        $this->controlsSummary = null;
        $this->keysWithError = null;
        $this->addressDocumentInfo = null;
        $this->bankAccountInfo = null;
    }

    public function setRequestInfo(RequestInfo $requestInfo): self
    {
        $this->requestInfo = $requestInfo;

        return $this;
    }

    public function getRequestInfo(): ?RequestInfo
    {
        return $this->requestInfo;
    }

    public function setDocumentTypeFamily(string $documentTypeFamily): self
    {
        $this->documentTypeFamily = $documentTypeFamily;

        return $this;
    }

    public function getDocumentTypeFamily(): ?string
    {
        return $this->documentTypeFamily;
    }

    public function setDocumentType(string $documentType): self
    {
        $this->documentType = $documentType;

        return $this;
    }

    public function getDocumentType(): ?string
    {
        return $this->documentType;
    }

    public function setCertificateUrl(string $certificateUrl): self
    {
        $this->certificateUrl = $certificateUrl;

        return $this;
    }

    public function getCertificateUrl(): ?string
    {
        return $this->certificateUrl;
    }

    public function setPages(array $pages): self
    {
        $this->pages = $pages;

        return $this;
    }

    public function getPages(): ?array
    {
        return $this->pages;
    }

    public function setError(RequestError $error): self
    {
        $this->error = $error;

        return $this;
    }

    public function getError(): ?RequestError
    {
        return $this->error;
    }

    public function setControlsSummary(int $controlsSummary): self
    {
        $this->controlsSummary = $controlsSummary;

        return $this;
    }

    public function getControlsSummary(): ?int
    {
        return $this->controlsSummary;
    }

    public function setKeysWithError(array $keysWithError): self
    {
        $this->keysWithError = $keysWithError;

        return $this;
    }

    public function getKeysWithError(): ?array
    {
        return $this->keysWithError;
    }


    public function setAddressDocumentInfo(AddressDocumentInfo $addressDocumentInfo): self
    {
        $this->addressDocumentInfo = $addressDocumentInfo;

        return $this;
    }

    public function getAddressDocumentInfo(): ?AddressDocumentInfo
    {
        return $this->addressDocumentInfo;
    }

    public function setBankAccountInfo(BankAccountInfo $bankAccountInfo): self
    {
        $this->bankAccountInfo = $bankAccountInfo;

        return $this;
    }

    public function getBankAccountInfo(): ?BankAccountInfo
    {
        return $this->bankAccountInfo;
    }
}
