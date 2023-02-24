<?php

declare(strict_types=1);

namespace Rschoonheim\LaravelSubdomains\Tests\Suites\Feature\Facades;

use Orchestra\Testbench\TestCase;
use Illuminate\Support\Facades\URL;
use Illuminate\Support\Facades\Request;
use Rschoonheim\LaravelSubdomains\Subdomain;
use Rschoonheim\LaravelSubdomains\Facades\SubdomainFacade;
use Rschoonheim\LaravelSubdomains\Models\SubdomainContext;

class SubdomainFacadeTest extends TestCase
{
    /** @test */
    public function laravel_facade_returns_instance_of_sub_domain_facade(): void
    {
        $this->assertInstanceOf(
            SubdomainFacade::class,
            Subdomain::getFacadeRoot(),
        );
    }

    /** @test */
    public function service_container_can_create_instance_of_sub_domain_facade(): void
    {
        $this->assertInstanceOf(
            SubdomainFacade::class,
            $this->app->make(SubdomainFacade::class),
        );
    }

    /** @test */
    public function context_returns_a_context_object_holding_information_about_the_current_subdomain(): void
    {
        /** @var SubdomainFacade $facade */
        $facade = $this->app->make(SubdomainFacade::class);
        $context = $facade->context();

        $this->assertInstanceOf(SubdomainContext::class, $context);
        $this->assertEquals("", $context->subdomain);
    }

}