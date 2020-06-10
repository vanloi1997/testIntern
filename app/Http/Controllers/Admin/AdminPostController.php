<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Requests\AdminRequestPost;
use App\Models\Posts;
use App\Models\Categories;
use Illuminate\Support\Str;
use Carbon\Carbon;

class AdminPostController extends Controller
{
    //
    public function index(){
        $posts = Posts::paginate(10);
        $viewData = [
            'posts' => $posts
        ];
        return view('admin.post.index' , $viewData);
    }
    public function create(){
        $category = Categories::get();

        return view('admin.post.create',compact('category'));
    }
    public function store(AdminRequestPost $request){
        $data = $request->except('_token','image');
        $data['slug'] = Str::slug($request->title);
        $data['created_at'] = Carbon::now();
        if($request->image){
            $image = upload_image('image');
            if($image['code'] == 1){
                $data['image'] = $image['name'];
            }
        }
        $result = Posts::insertGetId($data);

        return redirect()->back();
    }
}
