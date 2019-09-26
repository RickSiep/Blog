@extends('layouts.app')

@section('style')
    <link href="{{ asset('css/home.css') }}" rel="stylesheet">
    @endsection

@section('content')
    <div class="slide-wrapper">
        <div class="slide-content">
            <h3>Site.nu blogs</h3>
            <a href="#blogs"><i class="fas fa-arrow-down"></i></a>
        </div>
    </div>

    <div class="about-me-wrapper" id="about-me">


        <div class="about-right-column">
            <img src="{{asset('images/ik.jpg')}}" alt="ik" class="my-image">
        </div>

        <div class="about-left-column">
            <h1>Rick Siepelinga</h1>
            <br>
            <h2>Over de schrijfer</h2>
            <br>
            <h3>Mijn naam is Rick Siepelinga, ik ben nu een tweedejaars developer op het Mediacollege Amsterdam.
                Persoonlijk hou ik veel van backend developen, deze hele blog site is ook gemaakt via Laravel, een backend framework waar ik erg van hou.
                Ik loop nu stage bij WeConnect Students, een leuk bedrijf waar veel met laravel heb mogen werken, en op het moment werk ik veel met WordPress.</h3>
            <br>
            <h3>Als je meer over mij zou willen leren kun je altijd naar mijn <a href="http://24585.hosts1.ma-cloud.nl/bewijzenmap/periode2.1/onepage/" target="_blank">Portfolio</a>
                gaan.</h3>
        </div>



    </div>


    <div class="blog-items-wrapper">
        <div class="blog-inner-wrapper" id="blogs">
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
