<?php

namespace App\Providers;

use App\Models\Page;
use App\Models\ServiceProduct;
use App\Models\WebsiteInfo;
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


        $pages = Page::where('active', 1)->get();
        $services = ServiceProduct::where('type', 'service')
            ->take(4)
            ->get();
        $products = ServiceProduct::where('type', 'product')
            ->take(4)
            ->get();
        $website_info = WebsiteInfo::pluck('value', 'key');

        view()->share([
            'pages' => $pages,
            'services' => $services,
            'products' => $products,
            'website_info' => $website_info
        ]);
    }
}
