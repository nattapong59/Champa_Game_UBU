@extends('layouts.app')

@section('content')



<div class="ec-mainbanner">
    <div class="flexslider">

    <div class="flex-viewport" style="overflow: hidden; position: relative;">
      <ul class="slides" style="width: 800%; transition-duration: 0s; transform: translate3d(-2334px, 0px, 0px);">
          <li class="clone" aria-hidden="true" style="width: 1167px; float: left; display: block;">
                <img src="https://www.img.in.th/images/9eac147753a0ecaa0863748ef0bc6a32.jpg" alt="" draggable="false">
                <span class="ec-transparent-color"></span>
                <div class="ec-caption">
                    <div class="container">
                        <div class="caption-inner-wrap">
                            <time class="ec-bgcolor" style="font-size:20px">ระหว่างวันที่ 22 ก.พ. - 2 มี.ค.</time>
                            <div class="clearfix"></div>
                            <h1>จำปาเกมส์ ครั้งที่ 14</h1>
                            <p style="font-size:18px">คณะวิทยาศาสตร์ มหาวิทยาลัยอุบลราชธาณี จัดแข่งขันกีฬาเชื่อมความสัมพันธ์ จำปาเกมส์ ครั้งที่ 14 CHAMPA GAMES faculty of science ระหว่างวันที่ 22 ก.พ. - 2 มี.ค.</p>
                            <a href="#" style="font-size:20px" class="ec-bgcolor">รายละเอียดเพิ่มเติม</a>
                        </div>
                        <div class="ec-caption-image"><img src="https://www.img.in.th/images/4e1b01db5bf9a418212bbf4ff076d11a.png" alt="" draggable="false"> </div>
                    </div>
                </div>
            </li>
            <li class="clone" aria-hidden="true" style="width: 1167px; float: left; display: block;">
                  <img src="https://www.img.in.th/images/f713011a67b8082f00d88b42b042c4bd.jpg" alt="" draggable="false">
                  <span class="ec-transparent-color"></span>
                  <div class="ec-caption">
                      <div class="container">
                          <div class="caption-inner-wrap">
                              <time class="ec-bgcolor" style="font-size:20px">ระหว่างวันที่ 22 ก.พ. - 2 มี.ค.</time>
                              <div class="clearfix"></div>
                              <h1>จำปาเกมส์ ครั้งที่ 14</h1>
                              <p style="font-size:18px">คณะวิทยาศาสตร์ มหาวิทยาลัยอุบลราชธาณี จัดแข่งขันกีฬาเชื่อมความสัมพันธ์ จำปาเกมส์ ครั้งที่ 14 CHAMPA GAMES faculty of science ระหว่างวันที่ 22 ก.พ. - 2 มี.ค.</p>
                              <a href="#" style="font-size:20px" class="ec-bgcolor">รายละเอียดเพิ่มเติม</a>
                          </div>
                          <div class="ec-caption-image"><img src="https://www.img.in.th/images/4e1b01db5bf9a418212bbf4ff076d11a.png" alt="" draggable="false"> </div>
                      </div>
                  </div>
              </li>
          </ul>
          
          
        </div><ol class="flex-control-nav flex-control-paging"><li><a class="">1</a></li><li><a class="flex-active">2</a></li></ol><ul class="flex-direction-nav"><li class="flex-nav-prev"><a class="flex-prev" href="#"><em class="fa fa-angle-left"></em></a></li><li class="flex-nav-next"><a class="flex-next" href="#"><em class="fa fa-angle-right"></em></a></li></ul></div>

<<<<<<< HEAD
=======


</div>
<div >
<div class="ec-newsticker" style="background-color: #000; " >
<div class="container">
<span class="ec-color" ><small style = "font-size: 20px;">คณะวิทยาศาสตร์</small></span>
                                <ul id="ec-news"><li><a href="#" style = "font-size: 20px;" >ยินดีต้อนรับเข้าสู่การแข่งขันกีฬาจำปาเกมส์ครั้งที่14 ระหว่างวันที่ 22 ก.พ.- 2 มี.ค.</a></li></ul>
                        </div>
                                       
                            </div>
                </div>


<br>
>>>>>>> 6b84824e1c5ecef0f970a9d5ef557be8b12ce4ac
<div class="ec-main-content">
    <div class="ec-main-section ec-promofull">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <div class="ec-fancy-title">
                        <h2>ตารางการแข่งฟุตบอล</h2>
                    </div>
                    <div class="ec-fixture-list">
                        <ul>
                            @foreach($post_football as $football)
                            <li>

                                <div class="ec-cell"><span>{{$football->date}}</span></div>
                                <div class="ec-cell"><span>
                                    <p class="ec-fixture-flag">{{$football->team}}</p>
                                    <span class="ec-fixture-vs"><small>vs</small></span>
                                    <p class="ec-fixture-flag ec-next-flag">{{$football->pair}}</p>
                                </div>


                           </li>

                            @endforeach
                        </ul>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="ec-fancy-title">
                        <h2>ตารางแข่งขันแบดมินตัน</h2>
                    </div>
                    <div class="ec-fixture-list">
                        <ul> @foreach($post_Badminton as $Badminton)
                            <li>

                                <div class="ec-cell"><span>{{$Badminton->date}}</span></div>
                                <div class="ec-cell"><span>
                                    <p class="ec-fixture-flag">{{$Badminton->team}}</p>
                                    <span class="ec-fixture-vs"><small>vs</small></span>
                                    <p class="ec-fixture-flag ec-next-flag">{{$Badminton->pair}}</p>
                                </div>
                            </li>

                            @endforeach
                        </ul>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="ec-fancy-title">
                        <h2>ตารางแข่งขันบาสเกสบอล</h2>
                    </div>
                    <div class="ec-fixture-list">
                        <ul> @foreach($post_Basketball as $Basketball)
                            <li>

                                <div class="ec-cell"><span>{{$Basketball->date}}</span></div>
                                <div class="ec-cell"><span>
                                    <p class="ec-fixture-flag">{{$Basketball->team}}</p>
                                    <span class="ec-fixture-vs"><small>vs</small></span>
                                    <p class="ec-fixture-flag ec-next-flag">{{$Basketball->pair}}</p>
                                </div>
                            </li>

                            @endforeach
                        </ul>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="ec-fancy-title">
                        <h2>ตารางแข่งขันฟุตซอล</h2>
                    </div>
                    <div class="ec-fixture-list">
                        <ul>@foreach($post_Futsal as $Futsal)
                            <li>

                                <div class="ec-cell"><span>{{$Futsal->date}}</span></div>
                                <div class="ec-cell"><span>
                                    <p class="ec-fixture-flag">{{$Futsal->team}}</p>
                                    <span class="ec-fixture-vs"><small>vs</small></span>
                                    <p class="ec-fixture-flag ec-next-flag">{{$Futsal->pair}}</p>
                                </div>
                            </li>

                            @endforeach
                        </ul>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="ec-fancy-title">
                        <h2>ตารางแข่งขันเE-SPORT</h2>
                    </div>
                    <div class="ec-fixture-list">
                        <ul>@foreach($post_esport as $esport)
                            <li>

                                <div class="ec-cell"><span>{{$esport->date}}</span></div>
                                <div class="ec-cell"><span>
                                    <p class="ec-fixture-flag">{{$esport->team}}</p>
                                    <span class="ec-fixture-vs"><small>vs</small></span>
                                    <p class="ec-fixture-flag ec-next-flag">{{$esport->pair}}</p>
                                </div>
                            </li>

                            @endforeach
                        </ul>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="ec-fancy-title">
                        <h2>ตารางแข่งขันวอลเลย์บอล</h2>
                    </div>
                    <div class="ec-fixture-list">
                        <ul>@foreach($post_Volleyball as $Volleyball)
                            <li>

                                <div class="ec-cell"><span>{{$Volleyball->date}}</span></div>
                                <div class="ec-cell"><span>
                                    <p class="ec-fixture-flag ">{{$Volleyball->team}}</p>
                                    <span class="ec-fixture-vs"><small>vs</small></span>
                                    <p class="ec-fixture-flag ec-next-flag">{{$Volleyball->pair}}</p>

                                </div>
                            </li>

                            @endforeach
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


@endsection
