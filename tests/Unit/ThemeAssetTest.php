<?php

namespace Tests\Unit;

use App\Support\ThemeAsset;
use Tests\TestCase;

class ThemeAssetTest extends TestCase
{
    public function test_it_prefers_versioned_file_for_non_default_version(): void
    {
        config()->set('theme.default_version', 'v1');
        config()->set('theme.versions', ['v1', 'v2']);
        config()->set('theme.asset_bases', ['v1' => 'assets', 'v2' => 'assets']);

        $url = ThemeAsset::url('css/style.bundle.css', 'v2');

        $this->assertStringEndsWith('/assets/css/style.bundle-v2.css', $url);
    }

    public function test_it_falls_back_to_base_file_when_versioned_variant_is_missing(): void
    {
        config()->set('theme.default_version', 'v1');
        config()->set('theme.versions', ['v1', 'v2']);
        config()->set('theme.asset_bases', ['v1' => 'assets', 'v2' => 'assets']);

        $url = ThemeAsset::url('media/logos/default.svg', 'v2');

        $this->assertStringEndsWith('/assets/media/logos/default.svg', $url);
    }

    public function test_it_uses_base_file_for_default_theme_version(): void
    {
        config()->set('theme.default_version', 'v1');
        config()->set('theme.versions', ['v1', 'v2']);
        config()->set('theme.asset_bases', ['v1' => 'assets', 'v2' => 'assets']);

        $url = ThemeAsset::url('css/style.bundle.css', 'v1');

        $this->assertStringEndsWith('/assets/css/style.bundle.css', $url);
    }
}
