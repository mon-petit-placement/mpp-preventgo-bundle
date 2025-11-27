<?php

namespace Mpp\PreventgoBundle\Model;

abstract class CheckResult
{
    public const OK = 'OK';
    public const KO = 'KO';
    public const SKIPPED = 'SKIPPED';
    public const FAILED = 'FAILED';
}
