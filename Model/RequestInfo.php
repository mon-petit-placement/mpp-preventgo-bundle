<?php

namespace Mpp\PreventgoBundle\Model;

class RequestInfo
{
    const STATE_IN_PROGRESS = 'IN_PROGRESS';
    const STATE_DONE = 'DONE';
    const STATE_ERROR = 'ERROR';

    protected ?string $timestamp;
    protected ?string $state;
    protected ?int $duration;
    protected ?string $uuid;
    protected ?int $remainingRequests;
    protected ?string $callbackSecretToken;

    public function __construct()
    {
        $this->timestamp = null;
        $this->state = null;
        $this->duration = null;
        $this->uuid = null;
        $this->remainingRequests = null;
        $this->callbackSecretToken = null;
    }

    public function setTimestamp(string $timestamp): self
    {
        $this->timestamp = $timestamp;

        return $this;
    }

    public function getTimestamp(): ?string
    {
        return $this->timestamp;
    }

    public function setState(string $state): self
    {
        $this->state = $state;

        return $this;
    }

    public function getState(): ?string
    {
        return $this->state;
    }

    public function setDuration(int $duration): self
    {
        $this->duration = $duration;

        return $this;
    }

    public function getDuration(): ?int
    {
        return $this->duration;
    }

    public function setUuid(string $uuid): self
    {
        $this->uuid = $uuid;

        return $this;
    }

    public function getUuid(): ?string
    {
        return $this->uuid;
    }

    public function setRemainingRequests(int $remainingRequests): self
    {
        $this->remainingRequests = $remainingRequests;

        return $this;
    }

    public function getRemainingRequests(): ?int
    {
        return $this->remainingRequests;
    }

    public function setCallbackSecretToken(): self
    {
        $this->callbackSecretToken = $callbackSecretToken;

        return $this;
    }

    public function getCallbackSecretToken(): ?string
    {
        return $this->callbackSecretToken;
    }
}