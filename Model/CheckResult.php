<?php

namespace Mpp\PreventgoBundle\Model;

abstract class CheckResult
{
    const OK = 'OK';
    const KO = 'KO';
    const SKIPPED = 'SKIPPED';
    const FAILED = 'FAILED';
}