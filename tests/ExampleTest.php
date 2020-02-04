<?php

namespace Codeat3\LaravelNovaLikeable\Tests;

use Codeat3\LaravelNovaLikeable\LaravelNovaLikeableServiceProvider;
use Orchestra\Testbench\TestCase;

class ExampleTest extends TestCase
{
    protected function getPackageProviders($app)
    {
        return [LaravelNovaLikeableServiceProvider::class];
    }

    /** @test */
    public function true_is_true()
    {
        $this->assertTrue(true);
    }
}
