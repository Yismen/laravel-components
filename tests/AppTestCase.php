<?php

namespace Dainsys\Components\Tests;

use Dainsys\Components\ComponentsServiceProvider;
use Orchestra\Testbench\TestCase as OrchestraTestCase;

class AppTestCase extends OrchestraTestCase
{
    public function setUp(): void
    {
        parent::setUp();
    }

    /**
     * Executed after each test.
     */
    public function tearDown(): void
    {
        parent::tearDown();
    }

    /**
     * Load the command service provider.
     *
     * @param \Illuminate\Foundationlication $app
     * @return array
     */
    protected function getPackageProviders($app): array
    {
        return [
            ComponentsServiceProvider::class,
        ];
    }
}
