<?php

namespace Mpp\PreventgoBundle\Model;

abstract class CheckResult
{
    public const string OK = 'OK';
    public const string KO = 'KO';
    public const string SKIPPED = 'SKIPPED';
    public const string FAILED = 'FAILED';
}
