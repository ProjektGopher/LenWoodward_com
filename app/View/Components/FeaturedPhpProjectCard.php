<?php

namespace App\View\Components;

use App\Models\FeaturedPhpProject;
use Illuminate\View\Component;

class FeaturedPhpProjectCard extends Component
{
    public function __construct(
        public FeaturedPhpProject $project
    ) {}

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|string
     */
    public function render()
    {
        return view('components.featured-php-project-card');
    }
}
