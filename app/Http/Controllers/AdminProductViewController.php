<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\ProductView;

class AdminProductViewController extends Controller
{
    public function productView()
    {
        $productViews = ProductView::latest()->paginate(10);
        return view('admin.product.view', compact('productViews'));
    }
    
}
