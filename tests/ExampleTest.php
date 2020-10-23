<?php

namespace Rifrocket\TraitConsole\Tests;

use Orchestra\Testbench\TestCase;
use Rifrocket\TraitConsole\TraitConsoleServiceProvider;

class ExampleTest extends TestCase
{

    protected function getPackageProviders($app)
    {
        return [TraitConsoleServiceProvider::class];
    }
    
    /** @test */
    public function true_is_true()
    {
        $this->assertTrue(true);
    }
}
