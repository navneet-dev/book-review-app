<?php

namespace App\Providers;

use Illuminate\Cache\RateLimiting\Limit;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\RateLimiter;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        //
        // Define a limiter for 
        RateLimiter::for('reviews', function (Request $request) {
            // Allows 2 requests per minute based on IP address
            return Limit::perHour(3)->by($request->ip())->response(function (Request $request, array $headers) {
                return response('You can store only 2 review per hour!', 429);
            });
        });
    }
}
