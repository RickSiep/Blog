<?php

namespace App\Http\Controllers;

use App\Blogs;
use App\Comment;
use App\Image;
use App\Mail\SubscribersMail;
use App\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\File;

use Illuminate\Http\Request;
use App\Mail;

class BlogController extends Controller
{
//    Check if admin
    public function __construct()
    {
        $this->middleware('is.admin');
    }
//    Index page
    public function allBlogs(){
        $blogs = Blogs::paginate(10);
        return view('blogs.allBlogs', ['blogs' => $blogs]);
    }
//    Blog page
    public function addBlog(){
        return view('blogs.addBlog');
    }
//    Add blog
    public function handleBlog(Blogs $blogs, Request $request){
//        Check which users are subscribed
        $user = User::all()->where('subscribed', '==', '1');
        $blogs->fill([
            'title' => $request['title'],
            'blog' => $request['blog']
        ]);

        $blogs->save();
//        Image save
            $photo = $request['photo'];
            $targetFolder = public_path('photos');
            $newFilename = str_random(12) . '.' . $photo->getClientOriginalExtension();
            $photo->move($targetFolder, $newFilename);


            $name = $photo->getClientOriginalName();
            $image = new Image();
            $image->filename = $newFilename;
            $image->name = $name;
            $blogs->images()->save($image);
//            Send subscriber mail
            foreach ($user as $subscribed){
                \Illuminate\Support\Facades\Mail::to($subscribed->email)->send(new SubscribersMail);
            }
        return view('blogs.addBlog');
    }
//Show edit page
    public function showEdit(Blogs $blogs, $id){
        $blog = Blogs::find($id);

        return view('auth.edit', ['blog' => $blog]);
    }
// Handle edit
    public function handleEdit(Request $request, $id){
        $blog = Blogs::find($id);
        $blog->fill([
           'title' => $request['title'],
           'blog' => $request['blog']
        ]);
        $blog->save();
        return view('home');
    }
// Delete blog and images
    public function deleteBlog($id){
        $blogs = Blogs::find($id);
        $targetFolder = public_path('photos');
        foreach($blogs->images as $image){
            $imagePath = $targetFolder . '/' . $image->filename;
            if(File::exists($imagePath)){
                File::delete($imagePath);
            }
            $image->delete();
        }
//       Delete the blog item
        $blogs->delete();
        return redirect()->route('allBlogs');
    }


}
