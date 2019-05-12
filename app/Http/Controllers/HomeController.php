<?php

namespace App\Http\Controllers;
use App\Blogs;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */


    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $blogs = Blogs::latest()->paginate(4);
        // code



        return view('home', ['blogs' => $blogs]);
    }

    public function showPost($id){
//        Get the id and showing all the info from the clothing with that id
        $blog = Blogs::find($id);
//        dd($kleding->images);
        return view('blogs.blog', ['blog' => $blog]);
    }

    // Author function
    Public function author(){
        return view('author');
    }

}
