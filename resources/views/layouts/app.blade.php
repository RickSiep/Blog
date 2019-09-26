<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>Blog Rick Siepelinga, Mediadeveloper 2de jaar</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>
    @section('scripts')

        @show
    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.13/css/all.css" integrity="sha384-DNOHZ68U8hZfKXOrtjWvjxusGo9WQnrNx2sqG0tfsghAvtVlRW3tvkXWZh58N9jp" crossorigin="anonymous">
    <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet">

    <!-- Styles -->


    @section('style')

        @show

    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body>
    <div id="app">
        <nav class="navbar navbar-expand-md navbar-light navbar-laravel">
            <div class="container">
                <a class="navbar-brand" href="{{ url('/') }}">
                    Rick Siepelinga Stage Blogs
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav mr-auto">

                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ml-auto">
                        <!-- Authentication Links -->
                        @guest
                            <li class="nav-item">
                                <a title="login" class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                            </li>
                            @if (Route::has('register'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                                </li>
                            @endif
                        <li class="nav-item">
                            <a class="nav-link" href="{{route('author')}}">{{ __('Over mij') }}</a>
                        </li>
                            {{--<li class="nav-item dropdown">--}}
                                {{--<a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>--}}
                                    {{--Yes hello<span class="caret">yes</span>--}}
                                {{--</a>--}}
                                {{--<div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">--}}
                                    {{--<a class="dropdown-item" href="{{ route('logout') }}"--}}
                                       {{--onclick="event.preventDefault();--}}
                                                     {{--document.getElementById('logout-form').submit();">--}}
                                        {{--<p>Yo</p>--}}
                                    {{--</a>--}}
                                {{--</div>--}}
                            {{--</li>--}}
                        @else
                                {{--<li class="nav-item dropdown">--}}
                                    {{--<a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>--}}
                                        {{--<span class="caret">Laatste 4 blogs</span>--}}
                                    {{--</a>--}}
                                    {{--<div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">--}}
                                        {{--@foreach($blogs as $blog)--}}
                                        {{--<a class="dropdown-item" href="{{route('showPost',$blog->id)}}">--}}
                                            {{--<p>{{$blog->title}}</p>--}}
                                        {{--</a>--}}
                                            {{--@endforeach--}}
                                    {{--</div>--}}
                                {{--</li>--}}

                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }} <span class="caret"></span>
                                </a>

                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>
                                    @if(Auth::user()->is_admin == 1)
                                        @if(Route::currentRouteName() != 'addBlog')
                                            <a class="dropdown-item" href="{{ route('addBlog') }}">
                                                {{ __('Add Blog post') }}
                                            </a>
                                        @else <a class="dropdown-item" href="{{ route('home') }}">
                                            {{ __('Home') }}
                                        </a>
                                        @endif
                                            @if(Route::currentRouteName() != 'allBlogs')
                                            <a class="dropdown-item" href="{{ route('allBlogs') }}">
                                                {{ __('All Blogs') }}
                                            </a>
                                        @else <a class="dropdown-item" href="{{ route('home') }}">
                                            {{ __('Home') }}
                                        </a>
                                        @endif
                                        @endif



                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>
                                </div>

                                <li class="nav-item">
                                    <a class="nav-link" href="{{route('author')}}">{{ __('Over mij') }}</a>
                                </li>
                            </li>
                                @if(Auth::user())
                                    @if(Auth::user()->subscribed == 0)
                                        <form action="{{ route('subscribe') }}" method="POST">
                                            @csrf
                                            <button type="submit" class="subButton">Subscribe</button>
                                        </form>
                                    @else
                                        <form action="{{ route('unsubscribe') }}" method="POST">
                                            @csrf
                                            <button type="submit" class="subButton">Unsubscribe</button>
                                        </form>
                                    @endif
                                @endif
                        @endguest
                    </ul>
                </div>
            </div>
        </nav>

        <main>
            @yield('content')
        </main>
        @section('script')

        @show
    </div>
</body>
</html>
