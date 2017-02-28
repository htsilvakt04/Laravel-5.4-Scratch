<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Post;
use App\Tag;
use App\Billing\Stripe;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        view()->composer("posts.partial.sidebar",function ($view) {
          $view->with("archives", Post::archives());
          $view->with("tags", Tag::has("posts")->get());
        });

    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->singleton(Stripe::class, function () {
          return new Stripe("123321123.56.78");
        });
    }
}
