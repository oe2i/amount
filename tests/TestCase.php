<?php

namespace Oe2i\Amount\Tests;

use Orchestra\Testbench\TestCase as Orchestra;
use Oe2i\Amount\AmountServiceProvider;

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
