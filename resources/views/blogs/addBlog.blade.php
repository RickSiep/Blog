@extends('layouts.app')

@section('script')
  <script src="https://cloud.tinymce.com/5/tinymce.min.js"></script>
  <script>tinymce.init({
          selector:'textarea',

      });</script>
  @endsection

@section('content')
  <div class="container">
    <h1>Add blog</h1>





    <form action="{{ route('handle.blog') }}" method="POST" enctype="multipart/form-data">

      @csrf
      @method('PUT')
      <div class="form-group">
        <label for="title">Title</label>
        <input type="text" name="title" placeholder="Enter Title" class="form-control" value="{{old('title')}}">
        @if($errors->has('title'))
          <strong>{{$errors->first('title')}}</strong>
        @endif
      </div>

      <div class="form-group">
        <label for="blog">Blog</label>
        <textarea name="blog" rows="10" cols="30" class="form-control">
            {{old('blog')}}
        </textarea>
        @if($errors->has('blog'))
          <strong>{{$errors->first('blog')}}</strong>
        @endif
      </div>

        <div class="form-group">
            <label for="blog">Period</label>
            <select name="period">
                <option value="1">1</option>
                <option value="2">2</option>
            </select>
        </div>

      <div class="form-group">

        <label for="">Featured image</label>

        <input type="file" name="photo" value="photo" accept="image/*"/>

      </div>

      <button type="submit" class="btn btn-primary">Save</button>
    </form>
  </div>
@endsection

