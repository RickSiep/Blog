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
        <h1>{{$blog->title}}</h1>
        <h2>{{$blog->created_at}}</h2>
        @foreach($blog->images as $image)
            <img src="{{asset('/photos/'.$image->filename)}}" alt="{{$image->filename}}" class="blogImage">
        @endforeach
        <div class="text">
            {!! $blog->blog !!}
        </div>
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
    <script type="text/javascript">
        $(document).ready(function() {
            $('#commentForm').on('submit', function (event) {
                event.preventDefault();
                if ($('#action').val() == 'submit') {
                    $.ajax({
                        url: "{{ route('store',$blog) }}",
                        method: "POST",
                        data: new FormData(this),
                        contentType: false,
                        cache: false,
                        processData: false,
                        dataType: "json",
                        succes: function (data) {
                            var html = '';
                            if (data.errors) {
                                html = '<div class="alert alert-danger">';
                                for (var count = 0; count < data.errors.length; count++) {
                                    html += '<p>' + data.errors[count] + '</p>';
                                }
                                html += '</div>';
                            }
                            if (data.succes) {
                                html = '<div class="alert alert-succes">' + data.succes + '</div>';
                                $('#commentForm')[0].reset();
                                $('#comments').DataTable().ajax.reload();
                            }
                            $('#form_result').html(html);
                        }
                    });
                }
            });
        });
    </script>
@endsection