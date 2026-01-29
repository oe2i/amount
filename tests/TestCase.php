<?php

namespace Oe2i\Amount\Tests;

use Oe2i\Amount\AmountServiceProvider;
use Orchestra\Testbench\TestCase as Orchestra;

class TestCase extends Orchestra
{
    protected function getPackageProviders($app): array
    {
        return [
            AmountServiceProvider::class,
        ];
    }

    protected function getPackageAliases($app): array
    {
        return [
            'AmountX' => \Oe2i\Amount\Facades\Amount::class,
        ];
    }
}
