<?php

namespace App\Http\Controllers;

use App\Blog;
use App\Category;
use Illuminate\Http\Request;

class BlogController extends Controller
{
    public function index()
    {
        $blogs = Blog::latest()->paginate(3);
        $categorys = Category::where('parent_id', '>', 0)->take(6)->get();
        $categoryLimit = Category::where('parent_id', 0)->take(3)->get();
        return view('blog.index', compact('categorys', 'categoryLimit', 'blogs'));
    }
    public function detail($id)
    {
        $blog = Blog::find($id);
        $categorys = Category::where('parent_id', '>', 0)->take(6)->get();
        $categoryLimit = Category::where('parent_id', 0)->take(3)->get();
        return view('blog.detail', compact('categorys', 'categoryLimit', 'blog'));
    }
}
