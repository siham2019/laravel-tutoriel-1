<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;
use App\Comment;
use  App\Http\Requests\PostReq;
use Illuminate\Support\Facades\Validator;
class PostController extends Controller
{
    
    public function showComments()
    {
        $comments=Comment::with("post","user")->get();
        foreach ($comments as $comment) {
            echo "<hr/>";
           echo "<p>".$comment->post->description."</p>";
           echo "<b>".$comment->user->name."</b>";
           echo "<small>".$comment->text."</small>";

        }
    }



    public function showPost()
    {
        $posts=Post::all();
        return View("post",["posts"=>$posts]);
    }
    
    public function deletePost($id)
    {
        $posts=Post::find($id);
        $posts->delete();

        return back()->with("success","post deleted!!!");
    }
    
    public function updatePost($id,Request $data)
     {
          $posts=Post::find($id);
          $posts->title=$data->title;
          $posts->description=$data->description;
          $posts->save();

        return redirect()->route("postss")->with("success","post updated!!!");
     }

     public function editPost($id)
    {
        $posts=Post::find($id);
        return View("editPost",["post"=>$posts]);
    }

    public function addPost()
    {
        return view("addPost");
    }

    public function storePost(Request $data)
    {

    /*     $validatedData = $data->validate([
            'title' => 'required|max:25',
            'description' => 'required|max:255',
        ]); */

     /*    $validatedData = $data->validate([
            'title' => ['required', 'max:255'],
            'description' => ['required'],
        ]); */

       /*  
        PostReq $data
       $validated = $data->validated(); 
          
        */

        $validator = Validator::make($data->all(), [
            'title' => 'required|max:255',
            'description' => 'required',
        ],[
            'title.required' => 'khra mkharkhar',
            'description.required' => 'zbal mzablal',  
        ]);

        if ($validator->fails()) {
            return back()
                        ->withErrors($validator)
                        ->withInput($data->all());
        }

        $post=new Post;
        $post->title=$data->title;
        $post->description=$data->description;
        $post->save();
        return redirect("/")->with("success","post added");
    }
}
