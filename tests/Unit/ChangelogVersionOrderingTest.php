<?php

namespace Tests\Unit;

use App\Models\AppSupport\Changelog;
use PHPUnit\Framework\TestCase;

class ChangelogVersionOrderingTest extends TestCase
{
    public function test_versions_are_sorted_by_semver_descending(): void
    {
        $versions = [
            ['version' => 'v1.4.0'],
            ['version' => 'v1.4.1'],
            ['version' => 'v1.3.3'],
            ['version' => 'v1.10.0'],
        ];

        $sorted = Changelog::sortVersionsBySemver($versions);

        $this->assertSame(['v1.10.0', 'v1.4.1', 'v1.4.0', 'v1.3.3'], array_column($sorted, 'version'));
    }

    public function test_hashes_are_shortened_to_seven_characters(): void
    {
        $this->assertSame('19c63e8', Changelog::normalizeHash('19c63e8f2f3f4e5d6c7b8a9f0e1d2c3b4a5b6c7d'));
        $this->assertSame('abc1234', Changelog::normalizeHash('abc1234'));
    }
}
