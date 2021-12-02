<?php

namespace App\View\Components;

use App\Models\Prize;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class ShowMessage extends Component
{
    public $prizes;
    public $coolPrize;
    public $lamePrizes;

    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->coolPrize = Prize::whereGoodPrize(1)
            ->inRandomOrder()
            ->limit(1)
            ->get();
        $this->lamePrizes = Prize::whereGoodPrize(0)
            ->inRandomOrder()
            ->limit(2)
            ->get();
        $this->prizes = $this->coolPrize->merge($this->lamePrizes)->shuffle();
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return Application|Factory|View
     */
    public function render()
    {
        return view('components.show-message');
    }
}
