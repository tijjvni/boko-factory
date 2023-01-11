<?php

namespace App\View\Components;

use Illuminate\View\Component;

class DashboardStatCard extends Component
{
    /**
     * Create a new component instance.
     *
     * @return void
     */


    public $title;
    public $value;
    public $info;

    public function __construct($title, $value, $info = null)
    {
        $this->title = $title;
        $this->value = $value;
        $this->info = $info;
    }

    public function hasInfo($option): bool
    {
        return !is_null($this->info);
    }

    public function render()
    {
        return view('components.dashboard-stat-card');
    }
}
