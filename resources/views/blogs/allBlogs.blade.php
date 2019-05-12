@extends('layouts.app')

@section('style')
    <link href="{{ asset('css/allBlogs.css') }}" rel="stylesheet">
@endsection

@section('content')
    <div id="test">
        <form action="{{ route('subscribe') }}">
            <button type="submit" class="btn btn-primary">Subscribe</button>
        </form>
    </div>
    <table class="table table-striped table-bordered">
        <tr>
            <th>ID</th>
            <th>Title</th>
            <th>Edit</th>
            <th>Delete (coming soon)</th>
        </tr>
    @foreach($blogs->reverse() as $blog)
            <tr>
                <td>{{$blog->id}}</td>
                <td>{{$blog->title}}</td>
                <td><a href="{{route ('showEdit',$blog)}}">edit</a></td>
                <td><a href="{{route ('deleteBlog',$blog)}}">delete</a></td>
            </tr>
    @endforeach
    </table>

    <div class="text-center">
        {!! $blogs->links(); !!}
    </div>
    @endsection