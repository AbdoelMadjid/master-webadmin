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

    public function test_commit_push_treats_clean_repo_as_successful_noop(): void
    {
        $repoDir = sys_get_temp_dir() . '/console-developer-' . uniqid('', true);
        mkdir($repoDir, 0777, true);

        shell_exec('git init ' . escapeshellarg($repoDir) . ' 2>&1');
        shell_exec('git -C ' . escapeshellarg($repoDir) . ' config user.name "Test User" 2>&1');
        shell_exec('git -C ' . escapeshellarg($repoDir) . ' config user.email "test@example.com" 2>&1');

        file_put_contents($repoDir . '/README.md', "hello\n");
        shell_exec('git -C ' . escapeshellarg($repoDir) . ' add README.md 2>&1');
        shell_exec('git -C ' . escapeshellarg($repoDir) . ' commit -m "init" --no-gpg-sign 2>&1');

        $result = ConsoleDeveloper::runGitAction('commit_push', ['commit_message' => 'noop'], $repoDir);

        $this->assertTrue($result['success']);
        $this->assertStringContainsString('no changes added to commit', strtolower($result['output']));
    }
}
