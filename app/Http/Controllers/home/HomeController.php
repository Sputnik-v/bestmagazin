<?php

namespace App\Http\Controllers\home;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Arr;

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
}
