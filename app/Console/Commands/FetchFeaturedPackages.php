<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use App\Models\FeaturedPhpProject;

class FetchFeaturedPackages extends Command
{
    protected $signature = 'featured-packages:fetch';

    protected $description = 'Update local data for featured PHP packages.';

    public function __construct()
    {
        parent::__construct();
    }

    public function handle(): int
    {
        FeaturedPhpProject::all()->each(function (FeaturedPhpProject $project) {
            $project->fetchGitHubData();
            $project->fetchPackagistData();
        });

        return Command::SUCCESS;
    }
}
