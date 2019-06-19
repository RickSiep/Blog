<?php

namespace App\Http\Controllers;
use App\Blogs;

class HomeController extends Controller
{

//    Index page
    public function index()
    {
        $blogs = Blogs::latest()->paginate(4);
        // code



        return view('home', ['blogs' => $blogs]);
    }
//   D
    public function showPost($id){
//        Get the id and showing all the info from the clothing with that id
        $blog = Blogs::find($id);
        return view('blogs.blog', ['blog' => $blog]);
    }

    // Author function
    Public function author(){
        return view('author');
    }

}
