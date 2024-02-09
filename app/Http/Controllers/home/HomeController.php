<?php

namespace App\Http\Controllers\home;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use Illuminate\View\View;

class HomeController extends Controller
{
    public function index()
    {

        $categories = Category::query()->get()->toArray();

        $goods = Product::query()->get()->toArray();

        if(!empty($categories) && !empty($goods))
        {
            return view('user.home', compact('categories', 'goods'));
        }


    }

    public function show (Request $request, string $id)
    {

        $product = Product::find($id)->toArray();

        $categoryProduct = Category::find($product['category_id'])->toArray();


        $categories = Category::query()->get()->toArray();

        if(!empty($product) && !empty($categories))
        {
            return view('user.goods', compact('product', 'categories', 'categoryProduct'));
        }
        else
        {
            $message = 'message';
            return view('user.goods', compact('message'));
        }

    }

    public function showForCategory()
    {
        if(Route::currentRouteName() == "televisions") {
            $goods = Product::query()->where('category_id', '1')->get()->toArray();
            $categories = Category::query()->get()->toArray();
            return view('user.home', compact('goods', 'categories'));
        }
        if(Route::currentRouteName() == "boiling") {
            $goods = Product::query()->where('category_id', '2')->get()->toArray();
            $categories = Category::query()->get()->toArray();
            return view('user.home', compact('goods', 'categories'));
        }
        if(Route::currentRouteName() == "phones") {
            $goods = Product::query()->where('category_id', '3')->get()->toArray();
            $categories = Category::query()->get()->toArray();
            return view('user.home', compact('goods', 'categories'));
        }
        if(Route::currentRouteName() == "vacuums") {
            $goods = Product::query()->where('category_id', '4')->get()->toArray();
            $categories = Category::query()->get()->toArray();
            return view('user.home', compact('goods', 'categories'));
        }
        if(Route::currentRouteName() == "refrigerators") {
            $goods = Product::query()->where('category_id', '5')->get()->toArray();
            $categories = Category::query()->get()->toArray();
            return view('user.home', compact('goods', 'categories'));
        }
        if(Route::currentRouteName() == "photographs") {
            $goods = Product::query()->where('category_id', '6')->get()->toArray();
            $categories = Category::query()->get()->toArray();
            return view('user.home', compact('goods', 'categories'));
        }
        if(Route::currentRouteName() == "headphones") {
            $goods = Product::query()->where('category_id', '7')->get()->toArray();
            $categories = Category::query()->get()->toArray();
            return view('user.home', compact('goods', 'categories'));
        }

    }
}
