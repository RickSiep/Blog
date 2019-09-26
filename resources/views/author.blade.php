@extends('layouts.app')

@section('style')
    <link href="{{ asset('css/home.css') }}" rel="stylesheet">
@endsection

@section('content')
    <div class="slide-wrapper">
        <div class="slide-content">
            <h3>Author</h3>
            <a href="#about-me"><i class="fas fa-arrow-down"></i></a>
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
            <h3>Als je meer over mij zou willen leren kun je altijd naar mijn portfolio
                gaan.</h3>
            <br>
            <a href="http://24585.hosts1.ma-cloud.nl/bewijzenmap/periode2.1/onepage/" class="portfolio-button" target="_blank">Portfolio</a>
        </div>

    </div>
@endsection