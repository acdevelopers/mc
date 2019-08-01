<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    @hasSection("meta_description")
    <meta name="description" content="@yield("meta_description")">
    @endif

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>
        @hasSection('page_title')@yield('page_title') - @endif
            Merited Crown International School, Ouagadougou, Burkina Faso
    </title>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">

    <style>
        .parallax {
            /* The image used */
            background-image: url({{ asset('img/wallpapper/blackboard.jpg') }});

            /* Set a specific height */
            height: 500px;

            /* Create the parallax scrolling effect */
            background-attachment: fixed;
            background-position: center;
            background-repeat: no-repeat;
            background-size: cover;
        }
    </style>
</head>
<body class="parallax bg-white">
    <div id="app">
        <header>
            <div class="collapse show" id="navbarHeader">
                <div class="container">
                    <div class="row">
                        <div class="col-sm-8 col-md-7 py-4 mt-auto">
                            <h1 class="text-white">Merited Crown International School</h1>
                            <h3 class="text-muted text-right">@lang("...Limitless Learning")</h3>
                        </div>
                        <div class="col-sm-4 offset-md-1 py-4">
                            <div class="d-flex justify-content-end">
                                <img src="{{ asset('img/logos/cogito-ergo-sum-240x186.png') }}" alt="Merited Crown International School Logo">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </header>

        <!-- Navigation Bar -->
        <nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm sticky-top border-0 rounded-0">
            <div class="container">
                <a class="navbar-brand" href="{{ url('/') }}">
                    {{ config('app.name', 'Laravel') }}
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
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('login') }}">
                                {{ __('Admissions') }} <span class="badge badge-info">{{ date('Y') }}</span> </a>
                        </li>

                        <!-- Authentication Links -->
                        @guest
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                            </li>
                            @if (Route::has('register'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                                </li>
                            @endif
                        @else
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

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                        @endguest
                    </ul>
                </div>
            </div>
        </nav>

        @hasSection('page_title')
            <div class="container-fluid bg-white p-4">
                <div class="container">
                    <div class="row">
                        <div class="col">
                            <h2>@yield("page_title") <small class="small">Subtitle</small></h2>
                            <hr />
                        </div>
                    </div>
                </div>
            </div>
        @endif

        <section class="bg-white py-4">
            @yield('layout')
        </section>

        <!-- Features -->
        <section class="pt-4 pt-md-5 pb-md-5 text-white">
            <div class="container">
                <div class="row">
                    <feature-component-vue title="Contact">
                        <strong>Address:</strong>
                        <p>113 Rue Ex 7/23, Samandin, Ouagadougou, Burkina Faso.</p>
                        <strong>Telephone:</strong>
                        <ul class="list-unstyled">
                            <li>French Director: 01000436</li>
                            <li>English Director: 01000435</li>
                            <li>Reception: 01000431</li>
                        </ul>
                    </feature-component-vue>

                    <feature-component-vue title="Partners">
                        <div class="row">
                            <div class="col-md-6 col-sm-6 pb-1">
                                <img style="width: 160px; height: auto" src="{{ asset('img/placeholders/partners-placeholder-350x350.png') }}" alt="..." class="img-thumbnail">
                            </div>

                            <div class="col-md-6 col-sm-6 pb-1">
                                <img style="width: 160px; height: auto" src="{{ asset('img/placeholders/partners-placeholder-350x350.png') }}" alt="..." class="img-thumbnail">
                            </div>

                            <div class="col-md-6 col-sm-6 pb-1">
                                <img style="width: 160px; height: auto" src="{{ asset('img/placeholders/partners-placeholder-350x350.png') }}" alt="..." class="img-thumbnail">
                            </div>

                            <div class="col-md-6 col-sm-6 pb-1">
                                <img style="width: 160px; height: auto" src="{{ asset('img/placeholders/partners-placeholder-350x350.png') }}" alt="..." class="img-thumbnail">
                            </div>
                        </div>
                    </feature-component-vue>

                    <feature-component-vue title="Reminder">
                        <p>
                            @lang("Would you like us to notify you during our next enrollment? Please leave you'r number with us.")
                        </p>
                        <form>
                            <div class="form-group">
                                <label for="telephone-number">Telephone Number</label>
                                <input type="text" class="form-control" name="telephone-number">
                            </div>

                            <button class="btn btn-success btn-block btn-sm">@lang("Submit")</button>
                        </form>
                    </feature-component-vue>

                    <feature-component-vue title="Newsletter">
                        <p>
                            @lang("Subscribe to our newsletter to stay updated about school events and activities.")
                        </p>
                        <form>
                            <div class="form-group">
                                <label for="telephone-number">Email</label>
                                <input type="email" class="form-control" name="telephone-number">
                            </div>

                            <button class="btn btn-success btn-block btn-sm">@lang("Submit")</button>
                        </form>
                    </feature-component-vue>
                </div>
            </div>
        </section>

        <!-- Footer 1, 2, 3 -->
        <section class="bg-white pt-4 pt-md-5 pb-4">
            <div class="container my-md-2">
                <div class="row">
                    <div class="col-12 col-md">
                        <img src="{{ asset('img/logos/cogito-ergo-sum-180x139.png') }}" alt="Merited Crown International School Logo">
                        <small class="d-block mb-3 text-muted">© 2015-{{ date('Y') }}</small>
                    </div>
                    <div class="col-6 col-md">
                        <h5>Features</h5>
                        <ul class="list-unstyled text-small">
                            <li><a class="text-muted" href="#">Cool stuff</a></li>
                            <li><a class="text-muted" href="#">Random feature</a></li>
                            <li><a class="text-muted" href="#">Team feature</a></li>
                            <li><a class="text-muted" href="#">Stuff for developers</a></li>
                            <li><a class="text-muted" href="#">Another one</a></li>
                            <li><a class="text-muted" href="#">Last time</a></li>
                        </ul>
                    </div>
                    <div class="col-6 col-md">
                        <h5>Resources</h5>
                        <ul class="list-unstyled text-small">
                            <li><a class="text-muted" href="#">Resource</a></li>
                            <li><a class="text-muted" href="#">Resource name</a></li>
                            <li><a class="text-muted" href="#">Another resource</a></li>
                            <li><a class="text-muted" href="#">Final resource</a></li>
                        </ul>
                    </div>
                    <div class="col-6 col-md">
                        <h5>About</h5>
                        <ul class="list-unstyled text-small">
                            <li><a class="text-muted" href="#">Team</a></li>
                            <li><a class="text-muted" href="#">Locations</a></li>
                            <li><a class="text-muted" href="#">Privacy</a></li>
                            <li><a class="text-muted" href="#">Terms</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </section>

        <!-- Footer 5 -->
        <footer class="navbar navbar-expand navbar-dark mt-auto border-0">
            <div class="container">
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav mr-auto">
                        <li class="nav-item">
                            <a class="nav-link" href="#">{{ __('Privacy') }}</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">{{ __('Terms') }}</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">{{ __('Contact') }}</a>
                        </li>
                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ml-auto">
                        <!-- Social Links -->

                    </ul>
                </div>
            </div>
        </footer>
    </div>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}"></script>
</body>
</html>
