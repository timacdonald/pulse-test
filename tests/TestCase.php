<?php

namespace Tests;

use Illuminate\Foundation\Testing\TestCase as BaseTestCase;
use Illuminate\Support\Facades\DB;

abstract class TestCase extends BaseTestCase
{
    use CreatesApplication;

    protected function setUp(): void
    {
        parent::setUp();

        file_put_contents(base_path('memory.log'), round(memory_get_usage() / 1000000, 2).PHP_EOL, FILE_APPEND);
        file_put_contents(base_path('connected-threads.log'), DB::select("show status where `variable_name` = 'Threads_connected';")[0]->Value.PHP_EOL, FILE_APPEND);
    }
}
