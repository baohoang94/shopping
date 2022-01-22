<?php

namespace App\Http\Controllers;

use App\Category;
use App\Comment;
use App\Product;
use App\ProductView;
use App\Slider;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $sliders = Slider::latest()->take(3)->get();
        $categorys = Category::where('parent_id', '>', 0)->take(6)->get();
        $categoryLimit = Category::where('parent_id', 0)->take(3)->get();
        $products = Product::latest()->take(3)->get();
        $productRecommend = Product::latest('views_count', 'desc')->take(12)->get();
        return view('home.home', compact('sliders', 'categorys', 'products', 'productRecommend', 'categoryLimit'));
    }
    public function detail($id)
    {
        // dd(request()->ip());
        $product = Product::find($id);
        $categorys = Category::where('parent_id', '>', 0)->take(6)->get();
        $categoryLimit = Category::where('parent_id', 0)->take(3)->get();
        $comments = Comment::where('product_id', $product->id)->get();
        $product->update(['views_count' => $product->views_count + 1]);
        try {
            ProductView::create([
                'user_id' => optional(auth()->user())->id,
                'product_id' => $product->id,
                'ip_address' => request()->ip()
            ]);
        } catch (\Throwable $th) {
            ProductView::create([
                'user_id' => optional(auth()->user())->id,
                'product_id' => $product->id,
                'ip_address' => ''
            ]);
        }
        return view('product.detail', compact('product', 'categorys', 'categoryLimit', 'comments'));
    }
    public function addToCart($id)
    {
        // session()->forget('cart');
        // session()->forget('cart');
        // print_r(session()->get('cart'));
        // dd('end');
        $product = Product::find($id);
        $cart = session()->get('cart');
        // print_r($cart);
        if (isset($cart[$id])) {
            $cart[$id]['quantity'] += 1;
        } else {
            $cart[$id] = [
                'name' => $product->name,
                'price' => $product->price,
                'image' => !empty($product->feature_image_path) ? config('app.base_image_url') . $product->feature_image_path : $product->feature_image_link,
                'quantity' => 1,
            ];
        }
        session()->put('cart', $cart);
        return response()->json([
            'code' => 200,
            'message' => 'Thêm giảo hàng thành công',
        ], 200);
    }
    public function showCart()
    {
        $categoryLimit = Category::where('parent_id', 0)->take(3)->get();
        $cart = session()->get('cart');
        // $collection = collect($cart);
        // $a = $collection->sum(function ($product) {
        //     return $product['quantity'];
        // });
        // echo $a;
        // exit;
        return view('product.showCart', compact('categoryLimit', 'cart'));
    }
    public function updateCart(Request $request)
    {
        $cart = session()->get('cart');
        if ($request->id && $request->quantity) {
            $cart[$request->id]['quantity'] = $request->quantity;
            session()->put('cart', $cart);
            $cartComponent = view('product.components.cart_component', compact('cart'))->render();
            return response()->json([
                'code' => 200,
                'cartComponent' => $cartComponent,
            ], 200);
        }
    }
    public function deleteCart(Request $request, $id)
    {
        $cart = session()->get('cart');
        if ($id) {
            unset($cart[$id]);
            session()->put('cart', $cart);
            $cartComponent = view('product.components.cart_component', compact('cart'))->render();
            return response()->json([
                'code' => 200,
                'cartComponent' => $cartComponent,
            ], 200);
        }
    }
}
