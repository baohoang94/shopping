<?php

namespace App\Http\Controllers;

use App\Category;
use App\Product;
use App\Slider;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $sliders = Slider::latest()->get();
        $categorys = Category::where('parent_id', '>', 0)->take(6)->get();
        $categoryLimit = Category::where('parent_id', 0)->take(3)->get();
        $products = Product::latest()->take(3)->get();
        $productRecommend = Product::latest('views_count', 'desc')->take(12)->get();
        return view('home.home', compact('sliders', 'categorys', 'products', 'productRecommend', 'categoryLimit'));
    }
    public function detail($id)
    {
        $product = Product::find($id);
        $categorys = Category::where('parent_id', '>', 0)->take(6)->get();
        $categoryLimit = Category::where('parent_id', 0)->take(3)->get();
        $product->update(['views_count' => $product->views_count + 1]);
        return view('product.detail', compact('product', 'categorys', 'categoryLimit'));
    }
}
