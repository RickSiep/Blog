@extends('layouts.app')

@section('style')
    <link href="{{ asset('css/blog.css') }}" rel="stylesheet">
@endsection

@section('script')
    <script src="https://cloud.tinymce.com/5/tinymce.min.js"></script>
    <script>tinymce.init({
            selector:'textarea',

        });
    </script>

@endsection

@section('content')

    <form action="{{route('handleEdit',$blog)}}" method="post" enctype="multipart/form-data">

        @csrf
        @method('PUT')
        <div class="form-group">
            <label for="title">{{$blog->title}}</label>
            <input type="text" name="title" value="{{$blog->title}}" placeholder="Enter Title"class="form-control">
            @if($errors->has('title'))
                <strong>{{$errors->first('title')}}</strong>
            @endif
        </div>

        <div class="form-group">
            <label for="blog">Blog</label>
            {!! $blog->blog !!}
            <textarea name="blog" rows="10" cols="30" value="" class="form-control"></textarea>
            @if($errors->has('blog'))
                <strong>{{$errors->first('blog')}}</strong>
            @endif
        </div>

        <div class="form-group">
            <label for="period">Period</label>
            <select name="period">
                @if($blog->period == 1)
                    <option value="1" selected="selected">1</option>
                    <option value="2">2</option>
                    @else
                        <option value="1">1</option>
                        <option value="2" selected="selected">2</option>
                        @endif
            </select>
            @if($errors->has('period'))
                <strong>{{$errors->first('period')}}</strong>
            @endif
        </div>


        @foreach($blog->images as $image)
            <div class="images">
                <img src="{{asset('/photos/'.$image->filename)}}" alt="{{$image->filename}}" class="blogImage">
            </div>
            @endforeach

        <button type="submit" class="btn btn-primary">Save</button>
    </form>

    {{-- Form with route to add comment --}}

    @foreach($blog->comments->reverse() as $comment)
        <div class="comments">
            <h3>{{$comment->name}}</h3>
            <h3>{{$comment->email}}</h3>
            <h3>{{$comment->comment}}</h3>
        </div>
    @endforeach

@endsection
