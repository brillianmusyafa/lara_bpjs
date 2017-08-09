<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
        <style type="text/css">
        .logo_top img {
            height: 85px;
            padding: 10px 10px 10px 0px;
        }
        .navbar-default {
            background-color: #0b8e31;
            border-color: #d3e0e9;
        }
        .navbar-default .navbar-nav>li>a, .navbar-default .navbar-text {
            color: #fff;
        }
        .navbar-default .navbar-collapse, .navbar-default .navbar-form {
            border-color: #d3e0e9;
            background: #0b8e31;
        }
    </style>
</head>
<body>
    <div id="app">
    <div class="logo_top">
            <div class="container">
                <img src="{{asset('logo.png')}}" class="img-responsive" alt="Image">
            </div>
        </div>
        <nav class="navbar navbar-default navbar-static-top">
            <div class="container">
                <div class="navbar-header">

                    <!-- Collapsed Hamburger -->
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#app-navbar-collapse">
                        <span class="sr-only">Toggle Navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>

                    <!-- Branding Image -->
                   <!--  <a class="navbar-brand" href="{{ url('/') }}">
                        {{ config('app.name', 'Laravel') }}
                    </a> -->
                </div>

                <div class="collapse navbar-collapse" id="app-navbar-collapse">
                    <!-- Left Side Of Navbar -->
                    <ul class="nav navbar-nav">
                       @if(Auth::user()->role_id == 1)
                       <li><a href="{{ route('admin.daftar') }}">Lihat Data Nasabah</a></li>
                       <li><a href="{{ route('admin.laporan') }}">Lihat Laporan Keuangan</a></li>
                       @else
                       <li><a href="{{ url('atasan/daftar') }}">Lihat Daftar Baru</a></li>
                       <li><a href="{{ url('atasan/laporan') }}">Lihat Laporan Keuangan</a></li>
                       @endif


                   </ul>

                   <!-- Right Side Of Navbar -->
                   <ul class="nav navbar-nav navbar-right">
                    <!-- Authentication Links -->
                    <li>
                        <a href="{{ route('logout') }}"
                        onclick="event.preventDefault();
                        document.getElementById('logout-form').submit();">
                        Logout
                    </a>

                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                        {{ csrf_field() }}
                    </form>
                </li>
            </ul>
        </div>
    </div>
</nav>

@yield('content')
</div>

<!-- Scripts -->
<script src="{{ asset('js/app.js') }}"></script>
@stack('js')
</body>
</html>
