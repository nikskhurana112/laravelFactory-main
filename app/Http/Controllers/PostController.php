<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;

class PostController extends Controller
{

    public function add(Request $req)
    {
        return view("post.add");
    }

    public function create(Request $req)
    {
         $data = $req->all();
         $user = Auth::user();
         $data['user_id'] = $user->id;
         $data['author'] = $user->name;

         if($req->image != null){
            $data['img_path'] = $req->image->store("post",['disk' => 'public']);
         }

         $post = Post::create($data);
         session()->flash('success','Post create successfully');
         return redirect()->back();
         
    }

    public function list()
    {
        $posts = Post::latest()->paginate(10);
        //  return response()->json(['posts' => $posts]);
        return view("post.list");
    }
    public function delete(Request $req)
    {
        Post::where('id','=',$req->id)->delete();
        return redirect()->back();
        // Post::whereId($req->id)->delete();
        // Post::where(['id' => $req->id])->delete();
        // $post = Post::find($req->id);
        // $post->delete();
    }

    public function edit(Request $req)
    {
        $post = Post::find($req->id);
        return view("post.edit")->withPost($post);
    }

    public function update(Request $req)
    {
        // $post = Post::whereId($req->id)->update([
        //     "title" => $req->title ,
        //     "description" => $req->description ,
        //     "author" => $req->author ,
        // ]);
        $post = Post::find($req->id);
        $post->title = $req->title;
        $post->description = $req->description;
        $post->author = $req->author;
        $post->save();
        // $post->update($req->all());
        return redirect()->route("post.list");
        
    }

    public function posts(Request $req){
        // $user = User::find($req->id);
        // $list = Post::where(["user_id" => $user->id])->get();
        $val = Validator::make($req->all(), ["id" => "required|exists:users,id"]);

        if($val->fails() == true){
            return response()->json(["errors" => true, "list" => $val->errors()->all()]);
        }
        // $user = User::find($req->id);
        // $list = Post::whereUserId($user->id)->get();
        // $list = Post::where("user_id" => $user->id)->get();
         $user = User::with(["posts"])->find($req->id);
        // dd($user);
        return response()->json(["user" => $user]);
    }
}
