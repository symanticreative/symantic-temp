<?php

namespace App\Http\ViewComposers;

use Illuminate\View\View;

class ServiceListComposer
{
    public $serviceList = [];
    /**
     * Create a movie composer.
     *
     * @return void
     */
    public function __construct()
    {
        $this->serviceList = [
            0   => 'Select Option',
            1   => 'Strategy and Marketing',
            2   => 'Branding and Design',
            3   => 'Website & Application Development ',
            5   => 'Search Engine Optimisation',
            6   => 'Symantic SBD',
            7   => 'Symantic Launch-IT',
            8   => 'Symantic App-D',
        ];
    }

    /**
     * Bind data to the view.
     *
     * @param  View  $view
     * @return void
     */
    public function compose(View $view)
    {
        $view->with('serviceList', $this->serviceList);
    }
}