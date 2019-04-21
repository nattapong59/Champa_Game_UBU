<!DOCTYPE html>
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
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet" type="text/css">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <style media="screen">
    .center {
      text-align: center
    }
    </style>
</head>
<body>
    <div id="app">
        <nav class="navbar navbar-expand-md navbar-light navbar-laravel">
            <div class="container">
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->

                      <ul class="navbar-nav mr-2">
                        <li>
                          <a class="nav-link" href="{{ url('/') }}">หน้าแรก</a>
                        </li>
                      </ul>
                      <ul class="navbar-nav mr-2">
                        <li class="nav-item">
                          <a class="nav-link" href="{{ url('/ShowTable') }}">โปรแกรมการแข่งขัน</a>
                        </li>
                      </ul>
                      <ul class="navbar-nav mr-2">
                        <li class="nav-item">
                          <a class="nav-link" href="{{ url('/program') }}">ผลการแข่งขัน</a>
                        </li>
                      </ul>
                      <ul class="navbar-nav mr-2">
                        <li class="nav-item">
                          <a class="nav-link" href="{{ url('/players?type_sport=&branch=&branch=&category=') }}">รายชื่อนักกีฬา</a>
                        </li>
                    </ul>
                    @guest
                    @else
                        @if(Auth::user()->isAdmin())
                        <ul class="navbar-nav mr-2">
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" id="navbarDropdownMenuLink" data-toggle="dropdown"
                              aria-haspopup="true" aria-expanded="false">จัดการระบบ</a>
                            <div class="dropdown-menu dropdown-primary" aria-labelledby="navbarDropdownMenuLink">
                              <a class="dropdown-item" href="{{ url('/addfootball') }}">ตารางกีฬาฟุตบอล</a>
                              <a class="dropdown-item" href="{{ url('/addbasketball') }}">ตารางกีฬาบาสเกสบอล</a>
                              <a class="dropdown-item" href="{{ url('/addvolleyball') }}">ตารางกีฬาวอลเลย์บอล</a>
                              <a class="dropdown-item" href="{{ url('/addbadminton') }}">ตารางกีฬาเเบดมินตัน</a>
                              <a class="dropdown-item" href="{{ url('/addesport') }}">ตารางกีฬา e-sport</a>
                              <a class="dropdown-item" href="{{ url('/addfutsal') }}">ตารางกีฬาฟุตซอล</a>
                            </div>
                          </li>
                        </ul>
                        @else
                        <ul class="navbar-nav mr-2">
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" id="navbarDropdownMenuLink" data-toggle="dropdown"
                              aria-haspopup="true" aria-expanded="false">ลงสมัครแข่งขัน</a>
                            <div class="dropdown-menu dropdown-primary" aria-labelledby="navbarDropdownMenuLink">
                              <a class="dropdown-item" href="{{ url('/add-player?type=ฟุตบอล') }}">ลงสมัครแข่งขันกีฬาฟุตบอล</a>
                              <a class="dropdown-item" href="{{ url('/add-player?type=บาสเกสบอล') }}">ลงสมัครแข่งขันกีฬาบาสเกสบอล</a>
                              <a class="dropdown-item" href="{{ url('/add-player?type=วอลเลย์บอล') }}">ลงสมัครแข่งขันกีฬาวอลเลย์บอล</a>
                              <a class="dropdown-item" href="{{ url('/add-player?type=เเบดมินตัน') }}">ลงสมัครแข่งขันกีฬาเเบดมินตัน</a>
                              <a class="dropdown-item" href="{{ url('/add-player?type=e-sport') }}">ลงสมัครแข่งขันกีฬา e-sport</a>
                              <a class="dropdown-item" href="{{ url('/add-player?type=ฟุตซอล') }}">ลงสมัครแข่งขันกีฬาฟุตซอล</a>
                            </div>
                          </li>
                        </ul>
                        @endif
                    @endguest


                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ml-auto">
                        <!-- Authentication Links -->
                        @guest
                            @if (Route::has('register'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('register') }}">{{ __('สมัครสมาชิก') }}</a>
                                </li>
                            @endif
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('login') }}">{{ __('ลงชื่อเข้าใช้') }}</a>
                            </li>
                        @else
                            @if(Auth::user()->isAdmin())
                              <li class="nav-item">
                                  <a class="nav-link" href="{{ route('admin') }}" class="">Admin</a>
                              </li>
                              @endif

                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->first_name }} {{ Auth::user()->last_name }}<span class="caret"></span>
                                </a>

                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('ออกจากระบบ') }}
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

        <main class="py-4">
            @yield('content')
        </main>
    </div>
</body>
</html>
