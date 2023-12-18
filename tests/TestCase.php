<?php

namespace Tests;

use Illuminate\Foundation\Testing\TestCase as BaseTestCase;

abstract class TestCase extends BaseTestCase
{
    use CreatesApplication;

    protected function setUp(): void
    {
        parent::setUp();

        file_put_contents(base_path('memory.log'), round(memory_get_usage() / 1000000, 2).PHP_EOL, FILE_APPEND);
    }
}
