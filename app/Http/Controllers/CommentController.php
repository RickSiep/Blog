<?php

namespace App\Http\Controllers;

use App\Blogs;
use Dotenv\Validator;
use Illuminate\Http\Request;
use App\Comment;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;

class CommentController extends Controller
{
//    Need to be logged in to comment
    public function __construct()
    {
        $this->middleware('auth');
    }

//    Add a comment
    public function addComment(Request $request,$blog_id)
    {
        $user = Auth::user();
        $blog = Blogs::find($blog_id);
        $comment = new Comment();
        $comment->name = $user->name;
        $comment->email = $user->email;
        $comment->comment = $request->comment;
        $blog->comments()->save($comment);

        Session::flash('succes', 'comment is toegevoegd');
        return redirect()->route('showPost', $blog);
    }
//    Delete a comment
    public function deleteComment($id){
        $comment = Comment::find($id);
        $comment->delete();
        return redirect()->route('showPost', $comment->blogs_id);
    }
//    Store function
    public function store(Request $request, $blog_id){
        $user = Auth::user();
        $comment = new Comment();
        $blog = Blogs::find($blog_id);
        $rules = array(
            'comment' => 'required'
        );
        $error = Validator::make($request->all(), $rules);
        if($error->fails()){
            return response()->json(['errors' => $error->errors()->all()]);
        }


        $comment->name = $user->name;
        $comment->email = $user->email;
        $comment->comment = $request->comment;
        $blog->comments()->save($comment);
        return response()->json(['succes' => 'Data added.']);
    }

}
