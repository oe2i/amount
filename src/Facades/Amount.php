<?php

/**
 * Copyright (c) 2026 OE2i Inc.
 * Licensed under the Apache License, Version 2.0
 */

declare(strict_types=1);

namespace Oe2i\Amount\Facades;

use Illuminate\Support\Facades\Facade;

/**
 * @method static string toWords(float|int $amount, string $locale = 'en')
 * @method static string format(float|int $amount, string $currency = 'USD', string $locale = 'en')
 *
 * @see \Oe2i\Amount\Amount
 */
class Amount extends Facade
{
    /**
     * Get the registered name of the component.
     */
    protected static function getFacadeAccessor(): string
    {
        return 'amount';
    }
}
