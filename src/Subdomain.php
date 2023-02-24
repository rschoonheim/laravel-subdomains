<?php

declare(strict_types=1);

namespace Rschoonheim\LaravelSubdomains;

use Illuminate\Support\Facades\Facade;
use Rschoonheim\LaravelSubdomains\Facades\SubdomainFacade;

/**
 * Laravel facade to manage
 * access to the subdomain facade.
 *
 */
class Subdomain extends Facade
{
    /** @inheritDoc */
    protected static function getFacadeAccessor(): string
    {
        return SubdomainFacade::class;
    }
}