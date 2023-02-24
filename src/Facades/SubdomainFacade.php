<?php

declare(strict_types=1);

namespace Rschoonheim\LaravelSubdomains\Facades;

use Rschoonheim\LaravelSubdomains\Models\SubdomainContext;

class SubdomainFacade
{

    /**
     * Returns a context object holding information about the current subdomain.
     *
     * @return SubdomainContext
     */
    public function context(): SubdomainContext
    {
        return SubdomainContext::create();
    }


}