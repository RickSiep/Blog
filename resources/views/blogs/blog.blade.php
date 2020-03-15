@extends('layouts.app')

@section('script')
    <script src="{{ asset('js/blog.js') }}"></script>
@endsection

@section('style')
    <link href="{{ asset('css/blog.css') }}" rel="stylesheet">
@endsection

@section('content')
    <div class="wrapper">
    <div class="main">
        @foreach($blog->images as $image)
            <img src="{{asset('/photos/'.$image->filename)}}" alt="{{$image->filename}}" class="blogImage">
        @endforeach
        <h1>{{$blog->title}}</h1>
        <p class="createdAt">Gepost op: {{ $blog->created_at->format('d M Y') }}</p>
        <div class="text">
            {!! $blog->blog !!}
        </div>
    </div>

        <div class="d-flex flex-row justify-content-between py-5">
            @if($previous !== null)
                <a href="{{route('showPost',$previous)}}" class="nextPrevButtons">Previous blog</a>
            @endif

            @if($next !== null)
                <a href="{{route('showPost',$next)}}" class="nextPrevButtons">Next blog</a>
            @endif
        </div>


    {{-- Form with route to add comment --}}

        {{--{{ route('addComment',$blog) }}--}}

    <div id="Form">
    <form action="" id="commentForm" method="POST">

        @csrf
        <div class="textAreaDiv">
            <h2><label for="comment">Comment</label></h2>
            <textarea name="comment" rows="5" cols="100" placeholder="Voeg een comment toe!" class="textArea"></textarea>
            @if($errors->has('comment'))
                <strong>{{$errors->first('comment')}}</strong>
            @endif
        </div>
        <br>
        <button type="submit" class="btn btn-primary" id="submit_button" value="SubmitCommment">Save</button>
    </form>
    </div>

        @foreach($blog->comments->reverse() as $comment)
            <div class="comments">
                <h5>{{$comment->name}}</h5>
                <h5>{{$comment->email}}</h5>
                <h2>{{$comment->comment}}</h2>
                @if(Auth::user())
                    @if(Auth::user()->is_admin == 1 || Auth::user()->email == $comment->email)
                        <a href="{{ route('deleteComment',$comment->id)}}">Delete</a>
                    @endif
                    @endif
            </div>
            @endforeach
    </div>
@endsection
