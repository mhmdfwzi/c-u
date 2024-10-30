<?php

use App\Http\Controllers\Backend\BlogsNewsController;
use App\Http\Controllers\Backend\ClientsController;
use App\Http\Controllers\Backend\DashboardController;
use App\Http\Controllers\Backend\GalleryController;
use App\Http\Controllers\Backend\ImageController;
use App\Http\Controllers\Backend\MetaDataController;
use App\Http\Controllers\Backend\OrderController;
use App\Http\Controllers\Backend\PageController;
use App\Http\Controllers\Backend\PortfolioController;
use App\Http\Controllers\Backend\RoleController;
use App\Http\Controllers\Backend\SeoController;
use App\Http\Controllers\Backend\ServiceProductController;
use App\Http\Controllers\Backend\TeamworkController;
use App\Http\Controllers\Backend\UserController;
use App\Http\Controllers\Backend\WebsiteInfoController;
use App\Http\Controllers\Frontend\HomeController;
use App\Http\Controllers\Frontend\OrderController as FrontendOrderController;
use App\Http\Controllers\Frontend\PageController as FrontendPageController;
use App\Http\Controllers\Frontend\PagesController;
use App\Models\Order;
use Illuminate\Support\Facades\Route;
use Mcamara\LaravelLocalization\Facades\LaravelLocalization;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/


Route::get('/', [HomeController::class,'index'])->name('home');
Route::get('/contact-us', function () {
    return view('frontend.pages.contact');
})->name('contact');


Route::get('/servicesProducts/{type}', [HomeController::class,'servicesProducts'])->name('servicesProducts');

Route::get('/serviceProductDetails/{id}', [HomeController::class,'serviceProductDetails'])->name('serviceProductDetails');

Route::get('/blogsNews/{type}', [HomeController::class,'blogsNews'])->name('blogsNews');

Route::get('/blogNewsDetails/{id}', [HomeController::class,'blogsNewsDetails'])->name('blogNewsDetails');


Route::get('/makeOrder/{id}', [FrontendOrderController::class,'createOrder'])->name('createOrder');

Route::post('/checkout', [FrontendOrderController::class,'checkout'])->name('checkout');

Route::get('/about', function () {
    return view('frontend.pages.about');
})->name('about');
Route::get('/{page:slug}', [FrontendPageController::class,'show'])->name('page.show');

Route::group(
    [
        'prefix' => LaravelLocalization::setLocale(),
        'as' => 'admin.',
        'middleware' => [  'auth:web'
        ,'localeSessionRedirect', 'localizationRedirect', 'localeViewPath'
        ]
    ],
    function () {

        Route::group([], function () {
            Route::get('/dashboard', [DashboardController::class,'index'])->name('dashboard');

        });

        Route::group([], function () {
            Route::get('seo', [SeoController::class,'index'])->name('seo.index');
            Route::get('seo/create/{id}/{type}', [SeoController::class,'create'])->name('seo.create');
            Route::post('seo/store', [SeoController::class,'store'])->name('seo.store');
            Route::get('seo/edit/{id}/{type}', [SeoController::class,'edit'])->name('seo.edit');
            Route::put('seo/update/{id}', [SeoController::class,'update'])->name('seo.update');
            Route::delete('seo/destroy/{id}', [SeoController::class,'destroy'])->name('seo.destroy');
        });
        Route::group([], function () {
            Route::get('metaData', [MetaDataController::class,'index'])->name('metaData.index');
            Route::get('metaData/create', [MetaDataController::class,'create'])->name('metaData.create');
            Route::post('metaData/store', [MetaDataController::class,'store'])->name('metaData.store');
            Route::get('metaData/edit/{id}', [MetaDataController::class,'edit'])->name('metaData.edit');
            Route::put('metaData/update/{id}', [MetaDataController::class,'update'])->name('metaData.update');
            Route::delete('metaData/destroy/{id}', [MetaDataController::class,'destroy'])->name('metaData.destroy');
        });

        Route::group([], function () {
            Route::get('websiteInfo', [WebsiteInfoController::class,'index'])->name('websiteInfo.index');
            Route::get('websiteInfo/create', [WebsiteInfoController::class,'create'])->name('websiteInfo.create');
            Route::post('websiteInfo/store', [WebsiteInfoController::class,'store'])->name('websiteInfo.store');
            Route::get('websiteInfo/edit/{id}', [WebsiteInfoController::class,'edit'])->name('websiteInfo.edit');
            Route::put('websiteInfo/update/{id}', [WebsiteInfoController::class,'update'])->name('websiteInfo.update');
            Route::delete('websiteInfo/destroy/{id}', [WebsiteInfoController::class,'destroy'])->name('websiteInfo.destroy');
        });

        Route::group([], function () {
            Route::get('gallery', [GalleryController::class,'index'])->name('gallery.index');
            Route::get('gallery/create', [GalleryController::class,'create'])->name('gallery.create');
            Route::post('gallery/store', [GalleryController::class,'store'])->name('gallery.store');
            Route::get('gallery/edit/{id}', [GalleryController::class,'edit'])->name('gallery.edit');
            Route::put('gallery/update/{id}', [GalleryController::class,'update'])->name('gallery.update');
            Route::delete('gallery/destroy/{id}', [GalleryController::class,'destroy'])->name('gallery.destroy');
        });

        Route::group([], function () {
            Route::get('images', [ImageController::class,'index'])->name('images.index');
            Route::get('images/create', [ImageController::class,'create'])->name('images.create');
            Route::post('images/store', [ImageController::class,'store'])->name('images.store');
            Route::get('images/edit/{id}', [ImageController::class,'edit'])->name('images.edit');
            Route::put('images/update/{id}', [ImageController::class,'update'])->name('images.update');
            Route::delete('images/destroy/{id}', [ImageController::class,'destroy'])->name('images.destroy');
        });

        Route::group(['middleware' => 'can:roles-show'], function () {
            Route::get('roles', [RoleController::class,'index'])->name('roles.index');
            Route::get('roles/create', [RoleController::class,'create'])->name('roles.create');
            Route::post('roles/store', [RoleController::class,'store'])->name('roles.store');
            Route::get('roles/edit/{id}', [RoleController::class,'edit'])->name('roles.edit');
            Route::put('roles/update/{id}', [RoleController::class,'update'])->name('roles.update');
            Route::delete('roles/destroy/{id}', [RoleController::class,'destroy'])->name('roles.destroy');
        });

        Route::group(['middleware' => 'can:users-show'], function () {
            Route::get('users', [UserController::class,'index'])->name('users.index');
            Route::get('users/create', [UserController::class,'create'])->name('users.create');
            Route::post('users/store', [UserController::class,'store'])->name('users.store');
            Route::get('users/edit/{id}', [UserController::class,'edit'])->name('users.edit');
            Route::put('users/update/{id}', [UserController::class,'update'])->name('users.update');
            Route::delete('users/destroy/{id}', [UserController::class,'destroy'])->name('users.destroy');
        });

        Route::group([], function () {
            Route::get('clients', [ClientsController::class,'index'])->name('clients.index');
            Route::get('clients/create', [ClientsController::class,'create'])->name('clients.create');
            Route::post('clients/store', [ClientsController::class,'store'])->name('clients.store');
            Route::get('clients/edit/{id}', [ClientsController::class,'edit'])->name('clients.edit');
            Route::put('clients/update/{id}', [ClientsController::class,'update'])->name('clients.update');
            Route::delete('clients/destroy/{id}', [ClientsController::class,'destroy'])->name('clients.destroy');
        });

        Route::group(['middleware' => 'can:orders-show'], function () {
            Route::get('orders', [OrderController::class,'index'])->name('orders.index');
            Route::get('orders/create', [OrderController::class,'create'])->name('orders.create');
            Route::post('orders/store', [OrderController::class,'store'])->name('orders.store');
            Route::get('orders/edit/{id}', [OrderController::class,'edit'])->name('orders.edit');
            Route::put('orders/update/{id}', [OrderController::class,'update'])->name('orders.update');
            Route::delete('orders/destroy/{id}', [OrderController::class,'destroy'])->name('orders.destroy');
        });

        Route::group([], function () {
            Route::get('services_products', [ServiceProductController::class,'index'])->name('servicesProducts.index');
            Route::get('services_products/create', [ServiceProductController::class,'create'])->name('servicesProducts.create');
            Route::post('services_products/store', [ServiceProductController::class,'store'])->name('servicesProducts.store');
            Route::get('services_products/edit/{id}', [ServiceProductController::class,'edit'])->name('servicesProducts.edit');
            Route::put('services_products/update/{id}', [ServiceProductController::class,'update'])->name('servicesProducts.update');
            Route::delete('services_products/destroy/{id}', [ServiceProductController::class,'destroy'])->name('servicesProducts.destroy');
            Route::post('services_products/add_image/{id}', [ServiceProductController::class,'addImage'])->name('servicesProducts.add_image');

        });

        Route::group([], function () {
            Route::get('blogs_news', [BlogsNewsController::class,'index'])->name('blogsNews.index');
            Route::get('blogs_news/create', [BlogsNewsController::class,'create'])->name('blogsNews.create');
            Route::post('blogs_news/store', [BlogsNewsController::class,'store'])->name('blogsNews.store');
            Route::get('blogs_news/edit/{id}', [BlogsNewsController::class,'edit'])->name('blogsNews.edit');
            Route::put('blogs_news/update/{id}', [BlogsNewsController::class,'update'])->name('blogsNews.update');
            Route::delete('blogs_news/destroy/{id}', [BlogsNewsController::class,'destroy'])->name('blogsNews.destroy');
        });

        Route::group([], function () {
            Route::get('portfolio', [PortfolioController::class,'index'])->name('portfolio.index');
            Route::get('portfolio/create', [PortfolioController::class,'create'])->name('portfolio.create');
            Route::post('portfolio/store', [PortfolioController::class,'store'])->name('portfolio.store');
            Route::get('portfolio/edit/{id}', [PortfolioController::class,'edit'])->name('portfolio.edit');
            Route::put('portfolio/update/{id}', [PortfolioController::class,'update'])->name('portfolio.update');
            Route::delete('portfolio/destroy/{id}', [PortfolioController::class,'destroy'])->name('portfolio.destroy');
        });

        Route::group([], function () {
            Route::get('teamwork', [TeamworkController::class,'index'])->name('teamwork.index');
            Route::get('teamwork/create', [TeamworkController::class,'create'])->name('teamwork.create');
            Route::post('teamwork/store', [TeamworkController::class,'store'])->name('teamwork.store');
            Route::get('teamwork/edit/{id}', [TeamworkController::class,'edit'])->name('teamwork.edit');
            Route::put('teamwork/update/{id}', [TeamworkController::class,'update'])->name('teamwork.update');
            Route::delete('teamwork/destroy/{id}', [TeamworkController::class,'destroy'])->name('teamwork.destroy');
        });

        Route::group([], function () {
            Route::get('pages', [PageController::class,'index'])->name('pages.index');
            Route::get('pages/create', [PageController::class,'create'])->name('pages.create');
            Route::post('pages/store', [PageController::class,'store'])->name('pages.store');
            Route::get('pages/edit/{id}', [PageController::class,'edit'])->name('pages.edit');
            Route::put('pages/update/{id}', [PageController::class,'update'])->name('pages.update');
            Route::delete('pages/destroy/{id}', [PageController::class,'destroy'])->name('pages.destroy');
        });

    }
);
