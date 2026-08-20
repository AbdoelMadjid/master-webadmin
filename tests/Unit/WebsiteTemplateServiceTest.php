<?php

namespace Tests\Unit;

use App\Services\WebsiteTemplateService;
use Tests\TestCase;

class WebsiteTemplateServiceTest extends TestCase
{
    public function test_it_resolves_default_frontpage_view(): void
    {
        $view = WebsiteTemplateService::resolveView('home-page');
        $this->assertEquals('theme.default.home-page', $view);
    }

    public function test_it_resolves_default_auth_view(): void
    {
        $view = WebsiteTemplateService::resolveAuthView('login');
        $this->assertEquals('auth.theme.default.login', $view);
    }

    public function test_it_falls_back_gracefully_for_missing_frontpage_view(): void
    {
        $view = WebsiteTemplateService::resolveView('non-existent-page');
        $this->assertEquals('theme.default.home-page', $view);
    }

    public function test_it_falls_back_gracefully_for_missing_auth_view(): void
    {
        $view = WebsiteTemplateService::resolveAuthView('non-existent-auth-page');
        $this->assertEquals('auth.theme.default.login', $view);
    }
}
