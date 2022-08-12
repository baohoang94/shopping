<?php

namespace App\Http\Controllers;

use App\Blog;
use App\Traits\DeleteModelTrait;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;

class AdminBlogController extends Controller
{
    use DeleteModelTrait;
    
    private $blog;
    
    public function __construct(Blog $blog)
    {
        $this->blog = $blog;
    }
    public function index()
    {
        $blogs = $this->blog->latest()->paginate(5);
        return view('admin.blog.index', compact('blogs'));
    }
    public function create()
    {
        return view('admin.blog.add');
    }
    public function store(Request $request)
    {
        try {
            DB::beginTransaction();
            $dataBlogCreate = [
                'title' => $request->title,
                'description' => $request->description,
                'content' => $request->contents,
                'user_id' => auth()->id(),
                'image_link' => $request->image_link,
                'status' => 0,
                'source' => $request->source,
            ];
            $this->blog->create($dataBlogCreate);            
            DB::commit();
            return redirect()->route('blogs.index');
        } catch (\Exception $exception) {
            DB::rollBack();
            $errorMessage = 'Mesage: ' . $exception->getMessage() . '. Line: ' . $exception->getLine();
            Log::error($errorMessage);
            echo $errorMessage;
        }
    }
    public function edit($id)
    {
        $blog = $this->blog->find($id);
        return view('admin.blog.edit', compact('blog'));
    }
    public function update(Request $request, $id)
    {
        try {
            DB::beginTransaction();
            $dataBlogUpdate = [
                'title' => $request->title,
                'description' => $request->description,
                'content' => $request->contents,
                'user_edit_id' => auth()->id(),
                'image_link' => $request->image_link,
                'status' => 0,
                'source' => $request->source,
            ];
            $this->blog->find($id)->update($dataBlogUpdate);
            DB::commit();
            return redirect()->route('blogs.index');
        } catch (\Exception $exception) {
            DB::rollBack();
            $errorMessage = 'Mesage: ' . $exception->getMessage() . '. Line: ' . $exception->getLine();
            Log::error($errorMessage);
            echo $errorMessage;
        }
    }
    public function delete($id)
    {
        return $this->deleteModelTrait($id, $this->blog);
    }
}
