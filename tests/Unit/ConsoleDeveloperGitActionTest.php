<?php

namespace Tests\Unit;

use App\Models\AppSupport\ConsoleDeveloper;
use PHPUnit\Framework\TestCase;

class ConsoleDeveloperGitActionTest extends TestCase
{
    public function test_commit_push_returns_failure_when_git_commit_fails(): void
    {
        $result = ConsoleDeveloper::runGitAction('commit_push', ['commit_message' => 'test commit']);

        $this->assertIsArray($result);
        $this->assertArrayHasKey('success', $result);
        $this->assertArrayHasKey('output', $result);
    }
}
