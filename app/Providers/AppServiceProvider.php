<?php

namespace App\Providers;

use App\Models\ContactUs;
use App\Models\Logo;
use App\Models\SocialIcon;
use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\View;


class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        View::composer('*', function ($view) {
            $view->with('logo', Logo::where('id',1)->first());
            $view->with('social_icon', SocialIcon::get());
            $view->with('contact_us', ContactUs::where('id',1)->first());
        });
    }
}
