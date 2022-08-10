<?php

namespace Tests\Unit\Migrations;

use Tests\TestCase;
use Illuminate\Support\Facades\Artisan;

class MigrationTest extends TestCase
{
    /**
     * A basic unit test example.
     *
     * @return void
     */
    public function test_it_refreshes_rollbacks_and_seeds_the_database()
    {
        $database = env('DB_CONNECTION');

        $this->assertNotNull($database);

        $exitCode = Artisan::call('migrate:refresh', ['--database' => $database]);

        $this->assertEquals(0, $exitCode);

        $exitCode = Artisan::call('migrate:rollback', ['--database' => $database]);

        $this->assertEquals(0, $exitCode);

        $exitCode = Artisan::call('migrate', ['--database' => $database]);

        $this->assertEquals(0, $exitCode);

        $exitCode = Artisan::call('db:seed', ['--database' => $database]);

        $this->assertEquals(0, $exitCode);
    }
}
