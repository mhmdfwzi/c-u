<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\BlogNews;
use App\Models\Clients;
use App\Models\Gallery;
use App\Models\Image;
use App\Models\ServiceProduct;
use App\Models\Teamwork;
use App\Models\WebsiteInfo;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    //
    public function index()
    {
        $teamwork = Teamwork::all();
        $gallery = Gallery::all();
        $services = ServiceProduct::where('type', 'service')->where('main_page', 1)->get();
        $products = ServiceProduct::where('type', 'product')->where('main_page', 1)->get();
        $clients = Clients::all();
        $images = Image::where('type', 'about_image')->get();
        $blogs = BlogNews::where('type', 'blog')->orderBy('id', 'DESC')->take(4)->get();


        return view('frontend.pages.home', compact('blogs', 'teamwork', 'gallery', 'services', 'products', 'clients', 'images'));
    }

    public function servicesProducts($type)
    {
        $servicesProducts = ServiceProduct::where("type", $type)->get();
        return view('frontend.pages.serviceProducts', compact('servicesProducts', 'type'));
    }

    public function serviceProductDetails($id)
    {
        $serviceProduct = ServiceProduct::findOrFail($id);
        $popularServiceProduct = ServiceProduct::where("type", $serviceProduct->type)
        ->where('id', '!=', $id)  // Exclude the current product by ID
        ->take(5)->get();

        return view('frontend.pages.serviceProductsDetails', compact('serviceProduct', 'popularServiceProduct'));
    }


    public function blogsNews($type)
    {
        $blogsNews = BlogNews::where("type", $type)->get();
        return view('frontend.pages.blogsNews', compact('blogsNews', 'type'));
    }

    public function blogsNewsDetails($id)
    {
        $blogNews = BlogNews::findOrFail($id);
        $popularBlogNews = BlogNews::where("type", $blogNews->type)
        ->where('id', '!=', $id)  // Exclude the current product by ID
        ->take(5)->get();

        return view('frontend.pages.blogsNewsDetails', compact('blogNews', 'popularBlogNews'));
    }




}