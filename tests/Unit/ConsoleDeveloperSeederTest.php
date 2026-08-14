<?php

namespace Tests\Unit;

use App\Models\AppSupport\ConsoleDeveloper;
use Tests\TestCase;

class ConsoleDeveloperSeederTest extends TestCase
{
    public function test_get_seeder_files_returns_array_of_seeders(): void
    {
        $seeders = ConsoleDeveloper::getSeederFiles();

        $this->assertIsArray($seeders);
        $this->assertNotEmpty($seeders);

        $firstSeeder = $seeders[0];
        $this->assertArrayHasKey('id', $firstSeeder);
        $this->assertArrayHasKey('filename', $firstSeeder);
        $this->assertArrayHasKey('path', $firstSeeder);
        $this->assertArrayHasKey('type', $firstSeeder);
        $this->assertArrayHasKey('is_runnable', $firstSeeder);
    }

    public function test_read_seeder_file_returns_content(): void
    {
        $result = ConsoleDeveloper::readSeederFile('database/seeders/DatabaseSeeder.php');

        $this->assertTrue($result['success']);
        $this->assertEquals('DatabaseSeeder.php', $result['file_name']);
        $this->assertStringContainsString('class DatabaseSeeder', $result['content']);
    }

    public function test_read_seeder_file_blocks_unauthorized_paths(): void
    {
        $result = ConsoleDeveloper::readSeederFile('.env');

        $this->assertFalse($result['success']);
        $this->assertEquals('Path file tidak diizinkan.', $result['message']);
    }
}
