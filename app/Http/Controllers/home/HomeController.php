<?php

namespace App\Http\Controllers\home;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;

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
}
