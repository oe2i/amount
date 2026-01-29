<?php

/**
 * Copyright (c) 2026 OE2i Inc.
 * Licensed under the Apache License, Version 2.0
 */

declare(strict_types=1);

namespace Oe2i\Amount;

use Illuminate\Support\ServiceProvider;

class AmountServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        // Bind the logic class into the container
        $this->app->singleton('amount', function () {
            return new Amount();
        });
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        // Place for publishing config, loading translations etc.
    }
}
