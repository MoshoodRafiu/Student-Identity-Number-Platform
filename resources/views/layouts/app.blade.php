<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <script src="https://code.jquery.com/jquery-3.6.0.slim.min.js"
        integrity="sha256-u7e5khyithlIdTpu22PHhENmPcRdFiHRjhAuHcs05RI=" crossorigin="anonymous"></script>
</head>

<body class="body-background">
    <div id="app">
        <nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm">
            <div class="container">
                <a class="navbar-brand" href="{{ url('/home') }}">
                    {{ config('app.name', 'Laravel') }}
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                    aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav me-auto">

                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ms-auto">
                        <!-- Authentication Links -->
                        @guest
                            @if (Route::has('login'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                                </li>
                            @endif

                            @if (Route::has('register'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                                </li>
                            @endif
                        @else
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button"
                                    data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }}
                                </a>

                                <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault();
                                                             document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST"
                                        class="d-none">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                        @endguest
                    </ul>
                </div>
            </div>
        </nav>


        <!--begin::Container-->
        <main class="container-fluid py-4" id="kt_content_container">
            <!-- begin::Alerts -->
            @if (session('error'))
                <div class="d-flex align-items-center bg-danger rounded p-3 mb-3">
                    <span class="svg-icon svg-icon-success me-3">
                        <i class="fas fa-exclamation-circle text-light" style="width: 18px"></i>
                    </span>
                    <div class="flex-grow-1 me-2">
                        <span class="fw-bolder text-light text-hover-primary fs-6">{{ session('error') }}</span>
                    </div>
                </div>
            @elseif(session('success'))
                <div class="d-flex align-items-center bg-success rounded p-3 mb-3">
                    <span class="svg-icon svg-icon-success me-3">
                        <i class="fas fa-check-circle text-light" style="width: 18px"></i>
                    </span>
                    <div class="flex-grow-1 me-2">
                        <span class="fw-bolder text-light text-hover-primary fs-6">{{ session('success') }}</span>
                    </div>
                </div>
            @elseif(session('info'))
                <div class="d-flex align-items-center bg-warning rounded p-3 mb-3">
                    <span class="svg-icon svg-icon-success me-3">
                        <i class="fas fa-exclamation-triangle text-light" style="width: 18px"></i>
                    </span>
                    <div class="flex-grow-1 me-2">
                        <span class="fw-bolder text-light text-hover-primary fs-6">{{ session('info') }}</span>
                    </div>
                </div>
            @endif
            <!-- end::Alerts -->
            @yield('content')
        </main>
        <!--end::Container-->
    </div>
    @yield('scripts')

</body>

</html>
