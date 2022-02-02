<?php

namespace App\Providers;

use Illuminate\Foundation\Support\Providers\AuthServiceProvider as ServiceProvider;
use Illuminate\Support\Facades\Gate;

class AuthServiceProvider extends ServiceProvider
{
    /**
     * The policy mappings for the application.
     *
     * @var array
     */
    protected $policies = [
        // 'App\Models\Model' => 'App\Policies\ModelPolicy',
        'App\Models\Brand' => 'App\Policies\BrandPolicy',
        'App\Models\Category' => 'App\Policies\CategoryPolicy',
        'App\Models\Contact_form' => 'App\Policies\ContactFormPolicy',
        'App\Models\home_about' => 'App\Policies\HomeAboutPolicy',
        'App\Models\Contact' => 'App\Policies\ContactPolicy',
        'App\Models\multipic' => 'App\Policies\MultipicPolicy',
        'App\Models\Slider' => 'App\Policies\SliderPolicy',
    ];

    /**
     * Register any authentication / authorization services.
     *
     * @return void
     */
    public function boot()
    {
        $this->registerPolicies();

        //
    }
}
