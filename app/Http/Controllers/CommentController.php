<?php

namespace App\Http\Controllers;

use App\Comment;
use Illuminate\Http\Request;

class CommentController extends Controller
{
    protected $comment;
    public function __construct(Comment $comment)
    {
        $this->comment = $comment;
    }
    public function store(Request $request)
    {
        if (auth()->check() && !empty($request->content)) {
            $this->comment->create([
                'user_id' => auth()->id(),
                'product_id' => $request->product_id,
                'content' => $request->content,
                'rating' => $request->rating,
            ]);
        }
        return redirect()->route('detail', ['id' => $request->product_id]);
    }
}
