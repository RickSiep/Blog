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
    public function __construct()
    {
        $this->middleware('auth');
    }

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
    public function deleteComment($id){
        $comment = Comment::find($id);
        $comment->delete();
        return redirect()->route('showPost', $comment->blogs_id);
    }
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

//        $form_data = array(
//            'name' => $user->name,
//            'email' => $user->email,
//            'comment' => $request->comment,
//        );
        $comment->name = $user->name;
        $comment->email = $user->email;
        $comment->comment = $request->comment;
        $blog->comments()->save($comment);
        return response()->json(['succes' => 'Data added.']);
    }

}
