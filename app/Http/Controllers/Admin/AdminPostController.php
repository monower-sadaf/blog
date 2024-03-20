<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Post;
use Illuminate\Support\Facades\Storage;

class AdminPostController extends Controller
{
    public function index(){
        return view('pages.admin.posts.index');
    }

    public function create(){
        return view('pages.admin.posts.create');
    }

    public function store(Request $request){
        $originName = $request->file('image')->getClientOriginalName();
        $fileName = pathinfo($originName, PATHINFO_FILENAME);
        $extension = $request->file('image')->getClientOriginalExtension();
        $fileName = $fileName . '_' . time() . '.' . $extension;
        Storage::disk('local')->put('public/images/' . $fileName, file_get_contents($request->file('image')->getRealPath()));

        Post::create([
            'title' => $request->title,
            'description' => $request->description,
            'image_path' => $fileName,
            'category_id' => $request->category_id,
            'status'=> $request->status
        ]);
        
        return redirect()->route('admin.posts.index');
        /* $request->validate([
            'title' => 'required',
            'content' => 'required',
        ]);

        if($request){
            $post = new Post();
            $post->title = $request->title;
            $post->content = $request->content;
            $post->save();

            Post::create($request->all());

            return route('admin.posts.index');
            return request()->all();
        }else{
            return redirect()->back();
        } */

    }

    public function ck_upload(Request $request){
        if($request->hasFile('upload')) {
            $originName = $request->file('upload')->getClientOriginalName();
            $fileName = pathinfo($originName, PATHINFO_FILENAME);
            $extension = $request->file('upload')->getClientOriginalExtension();
            $fileName = $fileName.'_'.time().'.'.$extension;
            $request->file('upload')->move(public_path('images'), $fileName);
            $url = asset('images/'.$fileName);

            return response()->json([
                'fileName' => $fileName,
                'uploaded' => 1,
                'url' => $url
            ]);

        }
    }
}
