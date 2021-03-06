<?php

namespace App\Http\Controllers;

use App\Blogs;
use Illuminate\Http\Request;

class HomeController extends Controller
{

//    Index page
    public function index()
    {
        $blogs = Blogs::latest()->paginate(6);
        // code

        return view('home', ['blogs' => $blogs]);
    }

    public function showPeriod(Request $request)
    {
        if ($request->period == 'All') {
            $blogs = Blogs::latest()->paginate(6);
        } else {
            $blogs = Blogs::where('period', '=', $request->period)->latest()->paginate(15);
        }
        return view('home', ['blogs' => $blogs,]);
    }
//   D
    public function showPost($id)
    {
//        Get the id and showing all the info from the clothing with that id
        $blog = Blogs::find($id);

        $previous = Blogs::where('id', '<', $blog->id)->max('id');

        $next = Blogs::where('id', '>', $blog->id)->first();

        return view('blogs.blog', ['blog' => $blog])->with('previous', $previous)->with('next', $next);
    }

    // Author function
    public function author()
    {
        return view('author');
    }

    public function pap()
    {
        return view('pap');
    }

}
