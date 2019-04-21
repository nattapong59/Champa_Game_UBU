<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>EyeSports</title>
    <!-- Css Files -->
    <link href="{{ asset('css/bootstrap.css') }}" rel="stylesheet">
    <link href="{{ asset('css/font-awesome.css') }}" rel="stylesheet">
    <link href="{{ asset('css/style.css') }}" rel="stylesheet">
    <link href="{{ asset('css/owl.carousel.css') }}" rel="stylesheet">
    <link href="{{ asset('css/color.css') }}" rel="stylesheet">
    <link href="{{ asset('css/dl-menu.css') }}" rel="stylesheet">
    <link href="{{ asset('css/flexslider.css') }}" rel="stylesheet">
    <link href="{{ asset('css/prettyphoto.css') }}" rel="stylesheet">

    <link href="" rel="stylesheet">
    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>

<body class="">
    <!--// Main Wrapper \\-->
    <div class="ec-main-wrapper">
        <!--// Main Header \\-->
        <header id="ec-header">
            <!--// Main Header \\-->
            <div class="ec-main-navsection">
                <div class="container">
                    <a href="{{ url('/') }}" class="ec-logo"><img style="height: 60px" src="https://www.img.in.th/images/f82f7e3b5cf3630d679016375c2a9c56.png" alt=""><img style="height: 60px" src="https://www.img.in.th/images/2dacd1935a52aac23ee1e5b2ea2e2c38.png" alt=""></a>
                    <div class="ec-section">
                        <nav class="ec-navigation">
                            <ul>
                                <li class="active"><a href="{{ url('/') }}" >หน้าแรก</a></li>
                                <li><a href="{{ url('/ShowTable') }}" >โปรแกรมการแข่งขัน</a>
                                <li><a href="{{ url('/players?type_sport=&branch=&branch=&category=') }}" >รายชื่อนักกีฬา</a></li>
                              @guest
                              @else
                                @if(Auth::user()->isAdmin())
                                <li><a href="#">จัดการระบบ</a>
                                          <ul class="as-dropdown">
                                              <li><a href="{{ url('/addfootball') }}">ตารางกีฬาฟุตบอล</a></li>
                                              <li><a href="{{ url('/addfootball') }}" >ตารางกีฬาบาสเกสบอล</a></li>
                                              <li><a href="{{ url('/addvolleyball') }}">ตารางกีฬาวอลเลย์บอล</a></li>
                                              <li><a href="{{ url('/addbadminton') }}">ตารางกีฬาเเบดมินตัน</a></li>
                                              <li><a href="{{ url('/addesport') }}">ตารางกีฬา e-sport</a></li>
                                              <li><a href="{{ url('/addfutsal') }}">ตารางกีฬาฟุตซอล</a></li>
                                          </ul>
                                  </li>
                                  @else
                                  <li><a href="#">ลงทะเบียนเเข่งขัน</a>
                                            <ul class="as-dropdown">
                                                <li><a href="{{ url('/add-player?type=ฟุตบอล') }}">ลงสมัครแข่งขันกีฬาฟุตบอล</a></li>
                                                <li><a href="{{ url('/add-player?type=บาสเกสบอล') }}" >ลงสมัครแข่งขันกีฬาบาสเกสบอล</a></li>
                                                <li><a href="{{ url('/add-player?type=วอลเลย์บอล') }}">ลงสมัครแข่งขันกีฬาวอลเลย์บอล</a></li>
                                                <li><a href="{{ url('/add-player?type=เเบดมินตัน') }}">ลงสมัครแข่งขันกีฬาเเบดมินตัน</a></li>
                                                <li><a href="{{ url('/add-player?type=e-sport') }}">ลงสมัครแข่งขันกีฬา e-sport</a></li>
                                                <li><a href="{{ url('/add-player?type=ฟุตซอล') }}">ลงสมัครแข่งขันกีฬาฟุตซอล</a></li>
                                            </ul>
                                  </li>
                                  @endif
                                @endguest
                            </ul>
                        </nav>
                    </div>


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


                    <div class="ec-right-section">
                        <nav class="ec-navigation">
                          <ul>
                          @guest
                              @if (Route::has('register'))
                                  <li>
                                    <a href="{{ route('register') }}">{{ __('สมัครสมาชิก') }}</a>
                                  </li>
                              @endif
                              <li>
                                  <a  href="{{ route('login') }}">{{ __('ลงชื่อเข้าใช้') }}</a>
                              </li>
                          @else
                          @if(Auth::user()->isAdmin())
                          <li>
                              <a>
                                  Admin {{ Auth::user()->first_name }}<span class="caret"></span>
                              </a>

                                <ul class="as-dropdown">
                                  <li>
                                  <a href="{{ route('logout') }}"
                                     onclick="event.preventDefault();
                                                   document.getElementById('logout-form').submit();">
                                      {{ __('ออกจากระบบ') }}
                                  </a>
                                </li>
                                </ul>

                                  <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                      @csrf
                                  </form>
                              </div>
                          </li>
                          @else
                          <li>
                              <a>
                                  {{ Auth::user()->first_name }} {{ Auth::user()->last_name }}<span class="caret"></span>
                              </a>

                                <ul class="as-dropdown">
                                  <li>
                                  <a href="{{ route('logout') }}"
                                     onclick="event.preventDefault();
                                                   document.getElementById('logout-form').submit();">
                                      {{ __('ออกจากระบบ') }}
                                  </a>
                                </li>
                                </ul>

                                  <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                      @csrf
                                  </form>
                              </div>
                          </li>
                          @endif
                          @endguest
                        </nav>
                    </div>
                </div>
            </div>
            <!--// Main Header \\-->
        </header>

        <main class="ec-mainbanner">
            @yield('content')
        </main>
    </div>
</body>
</html>
