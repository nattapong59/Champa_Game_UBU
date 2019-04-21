
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
    <link href="{{ asset('css/responsive.css') }}" rel="stylesheet">


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
                    <a href="#" class="ec-logo"><img style="height: 60px" src="https://www.img.in.th/images/f82f7e3b5cf3630d679016375c2a9c56.png" alt=""><img style="height: 60px" src="https://www.img.in.th/images/2dacd1935a52aac23ee1e5b2ea2e2c38.png" alt=""></a>
                    <div class="ec-section">
                        <nav class="ec-navigation">
                            <ul>
                                <li class="active"><a href="{{ url('/') }}" >หน้าแรก</a></li>
                                <li><a href="{{ url('/ShowTable') }}" >โปรแกรมการแข่งขัน</a>
                                <li><a href="{{ url('/') }}" >ผลการแข่งขัน</a>
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
                            <li >
                                <a  href="{{ route('admin') }}" class="">Admin</a>
                            </li>
                            @endif
                            <li class="nav-item dropdown">
                                <a>
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
                        </nav>
                    </div>
                </div>
            </div>
            <!--// Main Header \\-->
        </header>
        <!--// Main Header \\-->
        <!--// Main Banner \\-->
        <div class="ec-mainbanner">
            <div class="flexslider">

            <div class="flex-viewport" style="overflow: hidden; position: relative;">
              <ul class="slides" style="width: 800%; transition-duration: 0s; transform: translate3d(-2334px, 0px, 0px);">
                  <li class="clone" aria-hidden="true" style="width: 1167px; float: left; display: block;">
                        <img src="https://autobinck.com/wp-content/uploads/2016/05/autopoint-international-1920x700.jpg" alt="" draggable="false">
                        <span class="ec-transparent-color"></span>
                        <div class="ec-caption">
                            <div class="container">
                                <div class="caption-inner-wrap">
                                    <time class="ec-bgcolor" datetime="2008-02-14 20:00">From the March 7, 2014</time>
                                    <div class="clearfix"></div>
                                    <h1>Welcome to eyesports</h1>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed id justo a arcu viverra placerat in eget dolor. In hac habitasse platea dictumst. Etiam porta diam sed lacus pharetra, elementum molestie metus fermentum.</p>
                                    <a href="#" class="ec-bgcolor">Read More</a>
                                </div>
                                <div class="ec-caption-image"> <img src="https://autobinck.com/wp-content/uploads/2016/05/autopoint-international-1920x700.jpg" alt="" draggable="false"> </div>
                            </div>
                        </div>
                    </li>
                    <li style="width: 1167px; float: left; display: block;" class="">
                        <img src="https://autobinck.com/wp-content/uploads/2016/05/autopoint-international-1920x700.jpg" alt="" draggable="false">
                        <span class="ec-transparent-color"></span>
                        <div class="ec-caption">
                            <div class="container">
                                <div class="caption-inner-wrap">
                                    <time class="ec-bgcolor" datetime="2008-02-14 20:00">From the March 7, 2014</time>
                                    <div class="clearfix"></div>
                                    <h1>Welcome to eyesports</h1>
                                    <p >Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed id justo a arcu viverra placerat in eget dolor. In hac habitasse platea dictumst. Etiam porta diam sed lacus pharetra, elementum molestie metus fermentum.</p>
                                    <a href="#" class="ec-bgcolor">Read More</a>
                                </div>
                                <div class="ec-caption-image"> <img src="https://autobinck.com/wp-content/uploads/2016/05/autopoint-international-1920x700.jpg" alt="" draggable="false"> </div>
                            </div>
                        </div>
                    </li>
                    <li style="width: 1167px; float: left; display: block;" class="flex-active-slide">
                        <img src="https://autobinck.com/wp-content/uploads/2016/05/autopoint-international-1920x700.jpg" alt="" draggable="false">
                        <span class="ec-transparent-color"></span>
                        <div class="ec-caption">
                            <div class="container">
                                <div class="caption-inner-wrap">
                                    <time class="ec-bgcolor" datetime="2008-02-14 20:00">From the March 7, 2014</time>
                                    <div class="clearfix"></div>
                                    <h1>Welcome to eyesports</h1>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed id justo a arcu viverra placerat in eget dolor. In hac habitasse platea dictumst. Etiam porta diam sed lacus pharetra, elementum molestie metus fermentum.</p>
                                    <a href="#" class="ec-bgcolor">Read More</a>
                                </div>
                                <div class="ec-caption-image"> <img src="https://autobinck.com/wp-content/uploads/2016/05/autopoint-international-1920x700.jpg" alt="" draggable="false"> </div>
                            </div>
                        </div>
                    </li>
                    <li style="width: 1167px; float: left; display: block;" class="clone" aria-hidden="true">
                        <img src="https://autobinck.com/wp-content/uploads/2016/05/autopoint-international-1920x700.jpg" alt="" draggable="false">
                        <span class="ec-transparent-color"></span>
                        <div class="ec-caption">
                            <div class="container">
                                <div class="caption-inner-wrap">
                                    <time class="ec-bgcolor" datetime="2008-02-14 20:00">From the March 7, 2014</time>
                                    <div class="clearfix"></div>
                                    <h1>Welcome to eyesports</h1>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed id justo a arcu viverra placerat in eget dolor. In hac habitasse platea dictumst. Etiam porta diam sed lacus pharetra, elementum molestie metus fermentum.</p>
                                    <a href="#" class="ec-bgcolor">Read More</a>
                                </div>
                                <div class="ec-caption-image"> <img src="https://autobinck.com/wp-content/uploads/2016/05/autopoint-international-1920x700.jpg" alt="" draggable="false"> </div>
                            </div>
                        </div>
                    </li>
                  </ul>
                </div><ol class="flex-control-nav flex-control-paging"><li><a class="">1</a></li><li><a class="flex-active">2</a></li></ol><ul class="flex-direction-nav"><li class="flex-nav-prev"><a class="flex-prev" href="#"><em class="fa fa-angle-left"></em></a></li><li class="flex-nav-next"><a class="flex-next" href="#"><em class="fa fa-angle-right"></em></a></li></ul></div>
        </div>
        <!--// Main Banner \\-->
        <!--// Main Content \\-->
        <div class="ec-main-content">
            <!--// Main Section \\-->
            <!--// Main Section \\-->
            <div class="ec-main-section ec-promofull">
                <div class="container">
                    <div class="row">
                        <!--// Match Fixture \\-->
                        <div class="col-md-6">
                            <div class="ec-fancy-title">
                                <h2>Match Fixture</h2>
                            </div>
                            <div class="ec-fixture-list">
                                <ul>
                                    <li>
                                        <div class="ec-cell"><span>03 Sep. Friday</span></div>
                                        <div class="ec-cell">
                                            <a href="#" class="ec-fixture-flag"><img src="extra-images/fixer-flag-1.png" alt=""> Arsenal</a>
                                            <span class="ec-fixture-vs"><small>vs</small></span>
                                            <a href="#" class="ec-fixture-flag ec-next-flag"><img src="extra-images/fixer-flag-2.png" alt=""> Premier</a>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="ec-cell"><span>03 Sep. Friday</span></div>
                                        <div class="ec-cell">
                                            <a href="#" class="ec-fixture-flag"><img src="extra-images/fixer-flag-3.png" alt=""> Liver Pool</a>
                                            <span class="ec-fixture-vs"><small>vs</small></span>
                                            <a href="#" class="ec-fixture-flag ec-next-flag"><img src="extra-images/fixer-flag-4.png" alt=""> South United</a>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="ec-cell"><span>03 Sep. Sunday</span></div>
                                        <div class="ec-cell">
                                            <a href="#" class="ec-fixture-flag"><img src="extra-images/fixer-flag-5.png" alt=""> 1.FCK</a>
                                            <span class="ec-fixture-vs"><small>vs</small></span>
                                            <a href="#" class="ec-fixture-flag ec-next-flag"><img src="extra-images/fixer-flag-6.png" alt=""> Chelsea</a>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="ec-cell"><span>03 Sep. Friday</span></div>
                                        <div class="ec-cell">
                                            <a href="#" class="ec-fixture-flag"><img src="extra-images/fixer-flag-7.png" alt=""> Real Madrid</a>
                                            <span class="ec-fixture-vs"><small>vs</small></span>
                                            <a href="#" class="ec-fixture-flag ec-next-flag"><img src="extra-images/fixer-flag-8.png" alt=""> Arsenal</a>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <!--// TablePoint \\-->
                        <div class="col-md-6">
                            <div class="ec-fancy-title">
                                <h2>Table Points</h2>
                            </div>
                            <div class="ec-table-point">
                                <ul class="ec-table-head">
                                    <li>
                                        <div class="ec-cell">S.#</div>
                                        <div class="ec-cell">Team</div>
                                        <div class="ec-cell">P</div>
                                        <div class="ec-cell">W</div>
                                        <div class="ec-cell">D</div>
                                        <div class="ec-cell">L</div>
                                    </li>
                                </ul>
                                <ul class="ec-table-list">
                                    <li>
                                        <div class="ec-cell">1</div>
                                        <div class="ec-cell">Arsenal</div>
                                        <div class="ec-cell">20</div>
                                        <div class="ec-cell">28</div>
                                        <div class="ec-cell">5</div>
                                        <div class="ec-cell">5</div>
                                    </li>
                                    <li>
                                        <div class="ec-cell">2</div>
                                        <div class="ec-cell">1.FCK</div>
                                        <div class="ec-cell">30</div>
                                        <div class="ec-cell">23</div>
                                        <div class="ec-cell">9</div>
                                        <div class="ec-cell">6</div>
                                    </li>
                                    <li>
                                        <div class="ec-cell">3</div>
                                        <div class="ec-cell">Liver Pool</div>
                                        <div class="ec-cell">10</div>
                                        <div class="ec-cell">22</div>
                                        <div class="ec-cell">10</div>
                                        <div class="ec-cell">8</div>
                                    </li>
                                    <li>
                                        <div class="ec-cell">4</div>
                                        <div class="ec-cell">Real Madrid</div>
                                        <div class="ec-cell">5</div>
                                        <div class="ec-cell">21</div>
                                        <div class="ec-cell">14</div>
                                        <div class="ec-cell">10</div>
                                    </li>
                                    <li>
                                        <div class="ec-cell">5</div>
                                        <div class="ec-cell">Premier League</div>
                                        <div class="ec-cell">14</div>
                                        <div class="ec-cell">10</div>
                                        <div class="ec-cell">9</div>
                                        <div class="ec-cell">8</div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <!--// TablePoint \\-->
                        <!--// Partner \\-->
                        <!--// Partner \\-->
                    </div>
                </div>
            </div>
            <!--// Main Section \\-->
            <!--// Main Section \\-->
            <div class="ec-main-section">
                <div class="container">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="ec-fancy-title">
                                <h2>Next Match</h2>
                            </div>
                            <div class="ec-nextmatch owl-carousel owl-theme owl-loaded">


                            <div class="owl-stage-outer"><div class="owl-stage" style="transform: translate3d(0px, 0px, 0px); transition: all 0s ease 0s; width: 906px;"><div class="owl-item active" style="width: 453px; margin-right: 0px;"><div class="item">
                                    <ul class="ec-team-matches">
                                        <li>
                                            <a href="#"><img src="extra-images/next-match-1.png" alt=""> <span>Arsenal</span></a>
                                        </li>
                                        <li><small>Thurseday</small>
                                            <time class="ec-color" datetime="2008-02-14 20:00">28 October</time> <small>15:00pm</small></li>
                                        <li>
                                            <a href="#"><img src="extra-images/next-match-2.png" alt=""> <span>Premier League</span></a>
                                        </li>
                                    </ul>
                                    <div id="ec-Countdown" class="ec-match-countdown is-countdown"><span class="countdown-row countdown-show4"><span class="countdown-section"><span class="countdown-amount">279</span><span class="countdown-period">Days</span></span><span class="countdown-section"><span class="countdown-amount">11</span><span class="countdown-period">Hours</span></span><span class="countdown-section"><span class="countdown-amount">28</span><span class="countdown-period">Minutes</span></span><span class="countdown-section"><span class="countdown-amount">12</span><span class="countdown-period">Seconds</span></span></span></div>
                                    <a href="#" class="ec-ticket-button">Less Than 600 Tickets Left For Villa</a>
                                </div></div><div class="owl-item" style="width: 453px; margin-right: 0px;"><div class="item">
                                    <ul class="ec-team-matches">
                                        <li>
                                            <a href="#"><img src="extra-images/next-match-1.png" alt=""> <span>Arsenal</span></a>
                                        </li>
                                        <li><small>Thurseday</small>
                                            <time class="ec-color" datetime="2008-02-14 20:00">22 October</time> <small>15:00pm</small></li>
                                        <li>
                                            <a href="#"><img src="extra-images/next-match-2.png" alt=""> <span>Premier League</span></a>
                                        </li>
                                    </ul>
                                    <div id="ec-Countdowntwo" class="ec-match-countdown is-countdown"><span class="countdown-row countdown-show4"><span class="countdown-section"><span class="countdown-amount">279</span><span class="countdown-period">Days</span></span><span class="countdown-section"><span class="countdown-amount">11</span><span class="countdown-period">Hours</span></span><span class="countdown-section"><span class="countdown-amount">28</span><span class="countdown-period">Minutes</span></span><span class="countdown-section"><span class="countdown-amount">12</span><span class="countdown-period">Seconds</span></span></span></div>
                                    <a href="#" class="ec-ticket-button">Less Than 600 Tickets Left For Villa</a>
                                </div></div></div></div><div class="owl-controls"><div class="owl-nav"><div class="owl-prev" style=""><i class="fa fa-angle-left"></i></div><div class="owl-next" style=""><i class="fa fa-angle-right"></i></div></div><div class="owl-dots" style=""><div class="owl-dot active"><span></span></div><div class="owl-dot"><span></span></div></div></div></div>
                        </div>
                        <div class="col-md-6">
                            <div class="ec-fancy-title">
                                <h2>Latest Result</h2>
                                <span>On Live</span>
                            </div>
                            <div class="ec-latest-result-wrap">
                                <div class="ec-latest-result">
                                    <ul>
                                        <li>
                                            <span>Corner FC</span>
                                            <img src="extra-images/latest-result-1.png" alt="">
                                            <span>Win</span>
                                        </li>
                                        <li>
                                            <div class="ec-result-time">
                                                <div class="ec-time-wrap">
                                                    3:1
                                                    <small>14 October 2016 21:00 (FT)</small>
                                                </div>
                                            </div>
                                        </li>
                                        <li>
                                            <span>LiMax</span>
                                            <img src="extra-images/latest-result-2.png" alt="">
                                            <span>Loss</span>
                                        </li>
                                    </ul>
                                </div>
                                <div class="ec-skillst">
                                    <div class="skillbar" data-percent="40%">
                                        <div class="count-bar" style="width: 40%;">
                                            <div class="count"><span>40%</span></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--// Main Content \\-->
        <footer id="ec-footer">
            <!--// Twitter \\-->
            <div class="ec-twitter">
                <div class="container">
                    <div class="row">
                        <div class="col-md-2 twiiter-icon">
                            <i class="fa fa-twitter"></i>
                            <span>2 hours ago</span>
                        </div>
                        <div class="col-md-10">
                            <div class="ec-twitter-slider owl-carousel owl-theme owl-loaded">


                            <div class="owl-stage-outer"><div class="owl-stage" style="transform: translate3d(-1516px, 0px, 0px); transition: all 0s ease 0s; width: 4548px;"><div class="owl-item cloned" style="width: 758px; margin-right: 0px;"><div class="item">
                                    <p><a href="#">@alexwhite</a> Singolo is a free PSD template of a flat, single page website created by <a href="#">@PsdChat #freebie #psd http://bit.ly/19XM8Lj</a></p>
                                </div></div><div class="owl-item cloned" style="width: 758px; margin-right: 0px;"><div class="item">
                                    <p><a href="#">@alexwhite</a> Singolo is a free PSD template of a flat, single page website created by <a href="#">@PsdChat #freebie #psd http://bit.ly/19XM8Lj</a></p>
                                </div></div><div class="owl-item active" style="width: 758px; margin-right: 0px;"><div class="item">
                                    <p><a href="#">@alexwhite</a> Singolo is a free PSD template of a flat, single page website created by <a href="#">@PsdChat #freebie #psd http://bit.ly/19XM8Lj</a></p>
                                </div></div><div class="owl-item" style="width: 758px; margin-right: 0px;"><div class="item">
                                    <p><a href="#">@alexwhite</a> Singolo is a free PSD template of a flat, single page website created by <a href="#">@PsdChat #freebie #psd http://bit.ly/19XM8Lj</a></p>
                                </div></div><div class="owl-item cloned" style="width: 758px; margin-right: 0px;"><div class="item">
                                    <p><a href="#">@alexwhite</a> Singolo is a free PSD template of a flat, single page website created by <a href="#">@PsdChat #freebie #psd http://bit.ly/19XM8Lj</a></p>
                                </div></div><div class="owl-item cloned" style="width: 758px; margin-right: 0px;"><div class="item">
                                    <p><a href="#">@alexwhite</a> Singolo is a free PSD template of a flat, single page website created by <a href="#">@PsdChat #freebie #psd http://bit.ly/19XM8Lj</a></p>
                                </div></div></div></div><div class="owl-controls"><div class="owl-nav"><div class="owl-prev" style=""><i class="fa fa-angle-left"></i></div><div class="owl-next" style=""><i class="fa fa-angle-right"></i></div></div><div class="owl-dots" style=""><div class="owl-dot active"><span></span></div><div class="owl-dot"><span></span></div></div></div></div>
                        </div>
                    </div>
                </div>
            </div>
            <!--// Twitter \\-->
            <!--// Footer Widget \\-->
            <div class="ec-footer-widget">
                <div class="container">
                    <div class="row">
                        <aside class="widget col-md-4 ec-recentnews_widget">
                            <div class="ec-section-heading">
                                <h2>Recently News</h2></div>
                            <ul>
                                <li>
                                    <figure>
                                        <a href="#"><img src="extra-images/recent-widget-1.jpg" alt=""></a>
                                    </figure>
                                    <section>
                                        <h6><a href="#">United, Palace Aim To Rebound From Setbacks</a></h6>
                                        <span><i class="fa fa-clock-o"></i> 2 days ago</span>
                                    </section>
                                </li>
                                <li>
                                    <figure>
                                        <a href="#"><img src="extra-images/recent-widget-2.jpg" alt=""></a>
                                    </figure>
                                    <section>
                                        <h6><a href="#">The summer of 2014 all about.</a></h6>
                                        <span><i class="fa fa-clock-o"></i> 2 days ago</span>
                                    </section>
                                </li>
                                <li>
                                    <figure>
                                        <a href="#"><img src="extra-images/recent-widget-3.jpg" alt=""></a>
                                    </figure>
                                    <section>
                                        <h6><a href="#">Sevilla finished fifth and just out of the.</a></h6>
                                        <span><i class="fa fa-clock-o"></i> 2 days ago</span>
                                    </section>
                                </li>
                            </ul>
                        </aside>
                        <aside class="widget col-md-4 widget_categories">
                            <div class="ec-section-heading">
                                <h2>CATEGORY</h2></div>
                            <ul>
                                <li><a href="#">Boxing</a> 03</li>
                                <li><a href="#">Championship</a> 05</li>
                                <li><a href="#">Cycling</a> 03</li>
                                <li><a href="#">Football</a> 19</li>
                                <li><a href="#">NFL</a> 02</li>
                                <li><a href="#">Golf</a> 11</li>
                                <li><a href="#">Premier League</a> 12</li>
                            </ul>
                        </aside>
                        <aside class="widget col-md-4 widget_text_info">
                            <div class="ec-section-heading">
                                <h2>Contact</h2></div>
                            <ul>
                                <li>
                                    <i class="fa fa-map-marker"></i>
                                    <span>177  Desoto Health Care 7805 Southcrest Parkway  Southaven, MS (Mississippi) 38671</span>
                                </li>
                                <li>
                                    <i class="fa fa-phone"></i>
                                    <span>(907) 904-6163  (660) 567-1244</span>
                                </li>
                            </ul>
                            <div class="ec-newslatter">
                                <h6>Join the Newsletter</h6>
                                <span>Sign up for our personalized daily newsletter</span>
                                <form>
                                    <input type="text" value="Enter email address" onblur="if(this.value == '') { this.value ='Enter email address'; }" onfocus="if(this.value =='Enter email address') { this.value = ''; }">
                                    <input type="submit" value="Sign up" class="ec-bgcolor">
                                </form>
                            </div>
                        </aside>
                    </div>
                </div>
            </div>
            <!--// Footer Widget \\-->
            <!--// CopyRight Section \\-->
            <div class="ec-bottom-section">
                <div class="container">
                    <div class="row">
                        <div class="col-md-5">
                            <a href="#" class="ec-footer-logo"><img src="images/footer-logo.png" alt=""></a>
                            <div class="ec-copyright">
                                <p>© copyright 2016 eyecix all rights reserved</p>
                            </div>
                        </div>
                        <div class="col-md-7">
                            <div class="ec-right-section">
                                <a href="index.html" class="backtop-btn">Back to top <i class="fa fa-caret-up"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!--// CopyRight Section \\-->
        </footer>
    </div>
    <!--// Main Wrapper \\-->
    <!-- ModalLogin Box -->
    <div class="modal fade" id="ModalLogin" tabindex="-1" role="dialog">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-body">
                    <div class="ec-modallogin-form ec-login-popup">
                        <span class="ec-color">Login to Your Account</span>
                        <form>
                            <ul>
                                <li>
                                    <input type="text" value="Your Username" onblur="if(this.value == '') { this.value ='Your Username'; }" onfocus="if(this.value =='Your Username') { this.value = ''; }"> </li>
                                <li>
                                    <input type="password" value="password" onblur="if(this.value == '') { this.value ='password'; }" onfocus="if(this.value =='password') { this.value = ''; }"> </li>
                                <li> <a href="#" class="ec-forgot-btn">Forgot Password?</a> </li>
                                <li>
                                    <input type="submit" value="Sign In"> </li>
                            </ul>
                        </form>
                        <span class="ec-color">or try our socials</span>
                        <ul class="ec-login-social-media">
                            <li><a href="#"><i class="fa fa-facebook"></i> Facebook</a></li>
                            <li class="ec-twitter-color"><a href="#"><i class="fa fa-twitter"></i> twitter</a></li>
                            <li class="ec-googleplus-color"><a href="#"><i class="fa fa-google-plus-square"></i> Google+</a></li>
                        </ul>
                        <p>Not a member yet? <a href="#">Sign-up Now!</a></p>
                    </div>
                    <div class="ec-modallogin-form ec-register-popup">
                        <span class="ec-color">create Your Account today</span>
                        <form>
                            <ul>
                                <li>
                                    <input type="text" value="Your Username" onblur="if(this.value == '') { this.value ='Your Username'; }" onfocus="if(this.value =='Your Username') { this.value = ''; }"> </li>
                                <li>
                                    <input type="text" value="Your E-mail" onblur="if(this.value == '') { this.value ='Your E-mail'; }" onfocus="if(this.value =='Your E-mail') { this.value = ''; }"> </li>
                                <li>
                                    <input type="password" value="password" onblur="if(this.value == '') { this.value ='password'; }" onfocus="if(this.value =='password') { this.value = ''; }"> </li>
                                <li>
                                    <input type="text" value="Confirm Password" onblur="if(this.value == '') { this.value ='Confirm Password'; }" onfocus="if(this.value =='Confirm Password') { this.value = ''; }"> </li>
                                <li>
                                    <input type="submit" value="Create Account"> </li>
                            </ul>
                        </form>
                        <span class="ec-color">or signup with your socials:</span>
                        <ul class="ec-login-social-media">
                            <li><a href="#"><i class="fa fa-facebook"></i> Facebook</a></li>
                            <li class="ec-twitter-color"><a href="#"><i class="fa fa-twitter"></i> twitter</a></li>
                            <li class="ec-googleplus-color"><a href="#"><i class="fa fa-google-plus-square"></i> Google+</a></li>
                        </ul>
                        <p>Already a member? <a href="#">Sign-in Here!</a></p>
                    </div>
                </div>
            </div>
            <div class="clearfix"></div>
        </div>
    </div>
    <!--// Main Wrapper \\-->
    <!-- jQuery (necessary for JavaScript plugins) -->
    <script src="{{ asset('js/jquery.js') }}"></script>
    <script src="{{ asset('js/modernizr.js') }}"></script>
    <script src="{{ asset('js/bootstrap.js') }}"></script>
    <script src="{{ asset('js/jquery.dlmenu.js') }}"></script>
    <script src="{{ asset('js/flexslider-min.js') }}"></script>
    <script src="{{ asset('js/jquery.prettyphoto.js') }}"></script>
    <script src="{{ asset('js/waypoints-min.js') }}"></script>
    <script src="{{ asset('js/owl.carousel.min.js') }}"></script>
    <script src="{{ asset('js/jquery.countdown.min.js') }}"></script>
    <script src="{{ asset('js/fitvideo.js') }}"></script>
    <script src="{{ asset('js/newsticker.js') }}"></script>
    <script src="{{ asset('js/skills.js') }}"></script>
    <script src="{{ asset('js/functions.js') }}"></script>
    <script>
    var options = {
        newsList: "#ec-news",
        startDelay: 10,
        placeHolder1: ""
    }
    jQuery().newsTicker(options);
    </script>



</body>
</html>
