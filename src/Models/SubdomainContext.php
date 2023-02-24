<?php

declare(strict_types=1);

namespace Rschoonheim\LaravelSubdomains\Models;
use Illuminate\Support\Facades\App;

readonly class SubdomainContext
{
    public function __construct(
        public string $subdomain,
    ) {}

    public static function create()
    {
        $host = request()->getHost();
        $subdomain = match($host) {
            filter_var($host, FILTER_VALIDATE_IP) => '',
            default => '',
        };

        return App::makeWith(self::class, [
            'subdomain' => $subdomain,
        ]);
    }


}