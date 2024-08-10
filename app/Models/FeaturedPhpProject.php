<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Facades\Http;

class FeaturedPhpProject extends Model
{
    use \Sushi\Sushi;

    protected $rows = [
        [
            'org' => 'ProjektGopher',
            'repo' => 'whisky',
        ],
        [
            'org' => 'ProjektGopher',
            'repo' => 'laravel-ffmpeg-tools',
        ],
        [
            'org' => 'artisan-build',
            'repo' => 'community-prompts',
        ],
        [
            'org' => 'artisan-build',
            'repo' => 'conductor',
        ],
    ];

    public function fetchGitHubData(): void
    {
        Cache::put(
            "FeaturedPhpProject::{$this->org}.{$this->repo}.GitHub",
            Http::get("https://api.github.com/repos/{$this->org}/{$this->repo}")->json(),
        );
    }

    public function fetchPackagistData(): void
    {
        Cache::put(
            "FeaturedPhpProject::{$this->org}.{$this->repo}.Packagist",
            Http::get("https://packagist.org/packages/{$this->org}/{$this->repo}/stats.json")->json(),
        );
    }

    protected function getGitHubAttribute(): object
    {
        return (object) Cache::get("FeaturedPhpProject::{$this->org}.{$this->repo}.GitHub");
    }

    protected function getPackagistAttribute(): object
    {
        return (object) Cache::get("FeaturedPhpProject::{$this->org}.{$this->repo}.Packagist");
    }
}
