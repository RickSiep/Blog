@extends('layouts.app')

@section('style')
    <link href="{{ asset('css/home.css') }}" rel="stylesheet">
    @endsection

@section('content')
    <div class="main">
        <h1>Mijn blogs</h1>
    </div>
    <div class="bigWrapper">
        <div class="wrapper">
          @if(!$blogs == null)
                    @foreach ($blogs as $blog)
                        <div class="blogItem">
                                @foreach($blog->images as $image)
                                    <img src="{{asset('/photos/'.$image->filename)}}" alt="{{$image->filename}}" class="blogImage">
                                @endforeach
                                <div class="text">
                                    <a href="{{route('showPost',$blog)}}" id="wrapperLink"><h2>{{str_limit($blog->title, 5, '...')}}</h2></a><h3>{{$blog->created_at}}</h3>
                                </div>
                        </div>
                    @endforeach

        </div>
    </div>
    @endif
    <br>
    <div class="links">
    {{ $blogs->links() }}
    </div>
    {{--</div>--}}

@endsection
