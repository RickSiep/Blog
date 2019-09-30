@extends('layouts.app')

@section('style')
    <link href="{{ asset('css/home.css') }}" rel="stylesheet">
    @endsection

@section('content')
                @if (app('request')->input('period') == '1')

                <div class="slide-wrapper sitenu-background">
                    <div class="slide-black-overlay">
                    </div>
                        <div class="slide-content">
                            <h3>Site.nu blogs</h3>
                            <a href="#blogs"><i class="fas fa-arrow-down"></i></a>
                        </div>
                </div>

                @elseif(app('request')->input('period') == '2')

                    <div class="slide-wrapper justbetter-background">
                        <div class="slide-black-overlay">
                        </div>
                        <div class="slide-content">
                            <h3>JustBetter blogs</h3>
                            <a href="#blogs"><i class="fas fa-arrow-down"></i></a>
                        </div>
                    </div>

                @else

                    <div class="slide-wrapper mediacollege-background">
                        <div class="slide-black-overlay">
                        </div>
                        <div class="slide-content">
                            <h3>Alle blogs</h3>
                            <a href="#blogs"><i class="fas fa-arrow-down"></i></a>
                        </div>
                    </div>

                @endif




    <div class="about-me-wrapper" id="about-me">


        <div class="about-right-column">
            <img src="{{asset('images/ik.jpg')}}" alt="ik" class="my-image">
        </div>

        <div class="about-left-column">
            <h1>Rick Siepelinga</h1>
            <br>
            <h2>Over de schrijfer</h2>
            <br>
            <h3>Mijn naam is Rick Siepelinga, ik ben nu een derdejaars developer op het Mediacollege Amsterdam.
                Persoonlijk hou ik veel van backend developen, deze hele blog site is ook gemaakt via Laravel, een backend framework waar ik erg van hou.
                Ik loop nu stage bij JustBetter, een bedrijf gevestigd in Alkmaar dat veel met Magento, Laravel en WordPress werkt.</h3>
            <br>
            <h3>Als je meer over mij zou willen leren kun je altijd naar mijn <a href="http://24585.hosts1.ma-cloud.nl/bewijzenmap/periode2.1/onepage/" target="_blank">Portfolio</a>
                gaan.</h3>
        </div>



    </div>


    <form action="{{route('showPeriod')}}" method="get">
        <div class="d-flex justify-content-around">
        <h2>Selecteer de periode van de blogs</h2>
            <select name="period" onchange="this.form.submit()">
                @if (app('request')->input('period') == '1')
                    <option value="All">All</option>

                    <option value="1" selected="selected">1</option>

                    <option value="2">2</option>
               @elseif(app('request')->input('period') == '2')
                    <option value="All">All</option>

                    <option value="1">1</option>

                    <option value="2" selected="selected">2</option>
                    @else
                    <option value="All" selected="selected">All</option>

                    <option value="1">1</option>

                    <option value="2">2</option>
                    @endif
            </select>
        </div>

    </form>

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
