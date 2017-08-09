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


    <style type="text/css" href="{{asset('datepicker/css/bootstrap-datepicker3.standalone.min.css')}}"></style>
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
                    <!-- <a class="navbar-brand" href="{{ url('/') }}" style="padding: 0px">
                        <img src="{{asset('logo_kecil.png')}}" style="width: 50px" class="img-responsive" alt="Image">
                    </a> -->
                </div>

                <div class="collapse navbar-collapse" id="app-navbar-collapse">
                    <!-- Left Side Of Navbar -->
                    <ul class="nav navbar-nav">
                       <li><a href="{{ route('p.program') }}">Program</a></li>
                       <li><a href="{{ route('p.iuran') }}">Iuran</a></li>
                       <li><a href="{{ route('p.persyaratan') }}">Persyaratan</a></li>
                       @if(Auth::user() && Auth::user()->role_id==2)
                       <li><a href="{{ route('p.pendaftaran') }}">{{(Auth::user()->Pendaftaran==null)?"Pendaftaran":"Profil"}}</a></li>
                       <li><a href="{{ route('p.pembentukan') }}">Pembentukan</a></li>
                       @endif
                   </ul>

                   <!-- Right Side Of Navbar -->
                   <ul class="nav navbar-nav navbar-right">
                    <!-- Authentication Links -->
                    @if (Auth::guest())
                    <li><a href="{{ route('login') }}">Login</a></li>
                    <li><a href="{{ route('register') }}">Register</a></li>
                    @else
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                            {{ Auth::user()->name }} <span class="caret"></span>
                        </a>

                        <ul class="dropdown-menu" role="menu">
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
                </li>
                @endif
            </ul>
        </div>
    </div>
</nav>

@yield('content')
</div>

<!-- Scripts -->
<script src="{{ asset('js/app.js') }}"></script>
<!-- <script type="text/javascript" src="{{asset('bower_components/jquery/jquery.min.js')}}"></script> -->
<script type="text/javascript" src="{{asset('datepicker/js/bootstrap-datepicker.min.js')}}"></script>
<script type="text/javascript">
    $('.datepicker').datepicker({
        autoclose:true
        });

</script>

@stack('js')
</body>
</html>
