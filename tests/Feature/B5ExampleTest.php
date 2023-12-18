<?php

namespace Tests\Feature;

// use Illuminate\Foundation\Testing\RefreshDatabase;
use App\Models\User;
use Database\Seeders\DatabaseSeeder;
use Illuminate\Foundation\Testing\DatabaseTruncation;
use PHPUnit\Framework\Attributes\DataProvider;
use Tests\TestCase;

class B5ExampleTest extends TestCase
{
    use DatabaseTruncation;


    protected function setUp(): void
    {
        parent::setUp();

        $this->seed(DatabaseSeeder::class);
    }

    /**
     * A basic test example.
     */
    public function test_the_application_returns_a_successful_response(): void
    {
        $response = $this->get('/');

        $response->assertStatus(200);
    }

    #[DataProvider('registerProvider')]
    public function test_application_can_handle_multiple_registers($data): void
    {
        foreach (range(1, 1) as $index) {
            $user = User::factory(1)->create();
            foreach ($user as $item) {
                $this->assertDatabaseHas('users', $item->toArray());
            }
        }
    }

    #[DataProvider('registerProvider')]
    public function test_application_can_handle_multiple_registers2($data): void
    {
        foreach (range(1, 1) as $index) {
            $user = User::factory(1)->create();
            foreach ($user as $item) {
                $this->assertDatabaseHas('users', $item->toArray());
            }
        }
    }

    #[DataProvider('registerProvider')]
    public function test_application_can_handle_multiple_registers3($data): void
    {
        foreach (range(1, 1) as $index) {
            $user = User::factory(1)->create();
            foreach ($user as $item) {
                $this->assertDatabaseHas('users', $item->toArray());
            }
        }
    }

    #[DataProvider('registerProvider')]
    public function test_application_can_handle_multiple_registers4($data): void
    {
        foreach (range(1, 1) as $index) {
            $user = User::factory(1)->create();
            foreach ($user as $item) {
                $this->assertDatabaseHas('users', $item->toArray());
            }
        }
    }

    #[DataProvider('registerProvider')]
    public function test_application_can_handle_multiple_registers5($data): void
    {
        foreach (range(1, 1) as $index) {
            $user = User::factory(1)->create();
            foreach ($user as $item) {
                $this->assertDatabaseHas('users', $item->toArray());
            }
        }
    }

    #[DataProvider('registerProvider')]
    public function test_application_can_handle_multiple_registers6($data): void
    {
        foreach (range(1, 1) as $index) {
            $user = User::factory(1)->create();
            foreach ($user as $item) {
                $this->assertDatabaseHas('users', $item->toArray());
            }
        }
    }
    #[DataProvider('registerProvider')]
    public function test_application_can_handle_multiple_registers7($data): void
    {
        foreach (range(1, 1) as $index) {
            $user = User::factory(1)->create();
            foreach ($user as $item) {
                $this->assertDatabaseHas('users', $item->toArray());
            }
        }
    }
    #[DataProvider('registerProvider')]
    public function test_application_can_handle_multiple_registers8($data): void
    {
        foreach (range(1, 1) as $index) {
            $user = User::factory(1)->create();
            foreach ($user as $item) {
                $this->assertDatabaseHas('users', $item->toArray());
            }
        }
    }
    #[DataProvider('registerProvider')]
    public function test_application_can_handle_multiple_registers9($data): void
    {
        foreach (range(1, 1) as $index) {
            $user = User::factory(1)->create();
            foreach ($user as $item) {
                $this->assertDatabaseHas('users', $item->toArray());
            }
        }
    }

    public static function registerProvider()
    {
        $data = [];
        for ($i = 2; $i <= 2; $i++) {
            $data[] = [$i];
        }

        return $data;
    }
}
