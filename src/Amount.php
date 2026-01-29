<?php

/**
 * Copyright (c) 2026 OE2i Inc.
 * Licensed under the Apache License, Version 2.0
 */

declare(strict_types=1);

namespace Oe2i\Amount;

use Illuminate\Support\Number;

final class Amount
{
    /**
     * Convert a numeric amount into words.
     */
    public function inWords(float|int $amount, string $locale = 'en'): string
    {
        return Number::spell($amount, locale: $locale);
    }

    /**
     * Format a numeric amount as a currency string.
     */
    public function inFigures(float|int $amount, string $currency = 'NGN', string $locale = 'en_NG'): string
    {
        return Number::currency($amount, in: $currency, locale: $locale);
    }
}
