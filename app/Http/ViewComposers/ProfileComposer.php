<?php

namespace App\Http\ViewComposers;

use Illuminate\View\View;
use App\Setting;

class ProfileComposer
{
    /**
     * The user repository implementation.
     *
     * @var UserRepository
     */
    protected $settings;

    /**
     * Create a new profile composer.
     *
     * @param  UserRepository  $users
     * @return void
     */
    public function __construct(Setting $settings)
    {
        // Dependencies automatically resolved by service container...
        $this->settings = $settings::find(1);
    }

    /**
     * Bind data to the view.
     *
     * @param  View  $view
     * @return void
     */
    public function compose(View $view)
    {
        $view->with('settings', $this->settings);
    }
}
