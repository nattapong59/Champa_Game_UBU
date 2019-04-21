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
                            <p style="font-size:18px">คณะวทยาศาสตร์ มหาวิทยาลัยอุบลราชธาณี จัดแข่งขันกีฬาเชื่อมความสัมพันธ์ จำปาเกมส์ ครั้งที่ 14 CHAMPA GAMES faculty of science  ระหว่างวันที่ 22 ก.พ. - 2 มี.ค.</p>
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
                              <p style="font-size:18px">จคณะวทยาศาสตร์ มหาวิทยาลัยอุบลราชธาณี จัดแข่งขันกีฬาเชื่อมความสัมพันธ์ จำปาเกมส์ ครั้งที่ 14 CHAMPA GAMES faculty of science  ระหว่างวันที่ 22 ก.พ. - 2 มี.ค.</p>
                              <a href="#" style="font-size:20px" class="ec-bgcolor">รายละเอียดเพิ่มเติม</a>
                          </div>
                          <div class="ec-caption-image"><img src="https://www.img.in.th/images/4e1b01db5bf9a418212bbf4ff076d11a.png" alt="" draggable="false"> </div>
                      </div>
                  </div>
              </li>
          </ul>
        </div><ol class="flex-control-nav flex-control-paging"><li><a class="">1</a></li><li><a class="flex-active">2</a></li></ol><ul class="flex-direction-nav"><li class="flex-nav-prev"><a class="flex-prev" href="#"><em class="fa fa-angle-left"></em></a></li><li class="flex-nav-next"><a class="flex-next" href="#"><em class="fa fa-angle-right"></em></a></li></ul></div>
</div>
<div class="py-5 text-center">
  <div class="container">
<<<<<<< HEAD

<form class="container" action="/addvolleyball" method="POST">
  @csrf
<div class="row justify-content-md-center">
        <div class="col-md-auto">
            <label ><b>ตารางแข่งขันวอลเลย์บอล</b></label>
          </div>
    </div>
    <br>

    <div class="row">
  <div class="col-md-12">
    <div class="table-responsive">
      <table class="table table-bordered container">
        <thead class="thead-dark">
          <tr>
            <th>ลำดับ</th>
            <th>วันที่</th>
            <th>เวลา</th>
            <th>ทีม</th>
            <th>พบ</th>
            <th>ทีม</th>
            <th>ประเภท</th>
            <th>สาย</th>
            <th>รอบ</th>
            <th>ผล</th>
          </tr>
        </thead>
        <tbody>
            <?php $indexvlb=1;?>
            @foreach($post_Volleyball as $Volleyball)

          <tr>


            <th><?=$indexvlb++?></th>
            <td>{{$Volleyball->time}}</td>
            <td>{{$Volleyball->date}}</td>
            <td>{{$Volleyball->team}}</td>
            <td>VS</td>
            <td>{{$Volleyball->pair}}</td>
            <td>{{$Volleyball->category}}</td>
            <td>{{$Volleyball->line}}</td>
            <td>{{$Volleyball->around}}</td>
            <td>{{$Volleyball->rvolleyballs1}} : {{$Volleyball->rvolleyballs2}}</td>
          </tr>
          <tr>

              @endforeach
        </tbody>
      </table>
    </div>
  </div>
</div>
</form>

<br>

    <form class="container" action="/addesport" method="POST">
  @csrf
<div class="row justify-content-md-center">
        <div class="col-md-auto">
            <label ><b>ตารางแข่งขันเกม E-SPORT</b></label>
          </div>
    </div>
    <br>

    <div class="row">
  <div class="col-md-12">
    <div class="table-responsive">
      <table class="table table-bordered container">
        <thead class="thead-dark">
          <tr>
              <th>ลำดับ</th>
              <th>วันที่</th>
              <th>เวลา</th>
              <th>ทีม</th>
              <th>พบ</th>
              <th>ทีม</th>
              <th>ประเภท</th>
              <th>สาย</th>
              <th>รอบ</th>
              <th>ผล</th>
          </tr>
        </thead>
        <tbody>
          <?php $indexesp=1?>
        @foreach($post_esport as $esport)
          <tr>


            <th><?=$indexesp++?></th>
            <td>{{$esport->time}}</td>
            <td>{{$esport->date}}</td>
            <td>{{$esport->team}}</td>
            <td>VS</td>
            <td>{{$esport->pair}}</td>
            <td>{{$esport->category}}</td>
            <td>{{$esport->line}}</td>
            <td>{{$esport->around}}</td>
            <td>{{$esport->resports1}} : {{$esport->resports2}}</td>
          </tr>
          <tr>

              @endforeach
        </tbody>
      </table>
=======
    <div class="bd-example">
    <div id="carouselExampleCaptions" class="carousel slide" data-ride="carousel">
      <ol class="carousel-indicators">
        <li data-target="#carouselExampleCaptions" data-slide-to="0" class="active"></li>
        <li data-target="#carouselExampleCaptions" data-slide-to="1"></li>
        <li data-target="#carouselExampleCaptions" data-slide-to="2"></li>
      </ol>
      <div class="carousel-inner" style="height:350px;">
        <div class="carousel-item active">
          <img src="image/champa_game.jpg" class="d-block w-100" >
          <div class="carousel-caption d-none d-md-block">

          </div>
        </div>
        <div class="carousel-item">
          <img src="image/All.jpg" class="d-block w-100" >
          <div class="carousel-caption d-none d-md-block">

          </div>
        </div>
      </div>
    </div>
    <a class="carousel-control-prev" href="#carouselExampleCaptions" role="button" data-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="carousel-control-next" href="#carouselExampleCaptions" role="button" data-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="sr-only">Next</span>
    </a>
  </div>
</div>
<br>
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
    <!--// Main Section \\-->
    <!--// Main Section \\-->
    
>>>>>>> 183346b8e5d87a8a797d7beea5da99a8d8bcab51
    </div>
</div>


<<<<<<< HEAD
              @endforeach
        </tbody>
      </table>
    </div>
  </div>
</div>
</form>

<br>



<form class="container" action="/addfutsal" method="POST">

<div class="row justify-content-md-center">
        <div class="col-md-auto">
            <label ><b>ตารางแข่งขันฟุตซอล</b></label>
          </div>
    </div>
    <br>

    <div class="row">
  <div class="col-md-12">
    <div class="table-responsive">
      <table class="table table-bordered container">
        <thead class="thead-dark">
          <tr>
              <th>ลำดับ</th>
              <th>วันที่</th>
              <th>เวลา</th>
              <th>ทีม</th>
              <th>พบ</th>
              <th>ทีม</th>
              <th>ประเภท</th>
              <th>สาย</th>
              <th>รอบ</th>
              <th>ผล</th>
          </tr>
        </thead>
        <tbody>
          <?php $indexfts=1?>
        @foreach($post_Futsal as $Futsal)
          <tr>


            <th><?=$indexfts++?></th>
            <td>{{$Futsal->time}}</td>
            <td>{{$Futsal->date}}</td>
            <td>{{$Futsal->team}}</td>
            <td>VS</td>
            <td>{{$Futsal->pair}}</td>
            <td>{{$Futsal->category}}</td>
            <td>{{$Futsal->line}}</td>
            <td>{{$Futsal->around}}</td>
            <td>{{$Futsal->rfutsals1}} : {{$Futsal->rfutsals2}}</td>

          </tr>
          <tr>

              @endforeach
        </tbody>
      </table>
    </div>
  </div>
</div>
</form>
<br>


<form class="container" action="/addbasketball" method="POST">

<div class="row justify-content-md-center">
        <div class="col-md-auto">
            <label ><b>ตารางแข่งขันบาสเกสบอล</b></label>
          </div>
    </div>
    <br>

    <div class="row">
  <div class="col-md-12">
    <div class="table-responsive">
      <table class="table table-bordered container">
        <thead class="thead-dark">
          <tr>
              <th>ลำดับ</th>
              <th>วันที่</th>
              <th>เวลา</th>
              <th>ทีม</th>
              <th>พบ</th>
              <th>ทีม</th>
              <th>ประเภท</th>
              <th>สาย</th>
              <th>รอบ</th>
              <th>ผล</th>
          </tr>
        </thead>
        <tbody>
          <?php $indexbkb=1?>
        @foreach($post_Basketball as $Basketball)
          <tr>


            <th><?=$indexbkb++?></th>
            <td>{{$Basketball->time}}</td>
            <td>{{$Basketball->date}}</td>
            <td>{{$Basketball->team}}</td>
            <td>VS</td>
            <td>{{$Basketball->pair}}</td>
            <td>{{$Basketball->category}}</td>
            <td>{{$Basketball->line}}</td>
            <td>{{$Basketball->around}}</td>
            <td>{{$Basketball->rbasketballs1}} : {{$Basketball->rbasketballs2}}</td>

          </tr>
          <tr>

              @endforeach
        </tbody>
      </table>
    </div>
  </div>
</div>
</form>
<br>


<form class="container" action="/addbadminton" method="POST">

<div class="row justify-content-md-center">
        <div class="col-md-auto">
            <label ><b>ตารางแข่งขันแบดมินตัน</b></label>
          </div>
    </div>
    <br>

    <div class="row">
  <div class="col-md-12">
    <div class="table-responsive">
      <table class="table table-bordered container">
        <thead class="thead-dark">
          <tr>
              <th>ลำดับ</th>
              <th>วันที่</th>
              <th>เวลา</th>
              <th>ทีม</th>
              <th>พบ</th>
              <th>ทีม</th>
              <th>ประเภท</th>
              <th>สาย</th>
              <th>รอบ</th>
              <th>ผล</th>
          </tr>
        </thead>
        <tbody>
          <?php $indexbnt=1?>
        @foreach($post_Badminton as $Badminton)
          <tr>


            <th><?=$indexbnt++?></th>
            <td>{{$Badminton->time}}</td>
            <td>{{$Badminton->date}}</td>
            <td>{{$Badminton->team}}</td>
            <td>VS</td>
            <td>{{$Badminton->pair}}</td>
            <td>{{$Badminton->category}}</td>
            <td>{{$Badminton->line}}</td>
            <td>{{$Badminton->around}}</td>
            <td>{{$Badminton->rbadmintons1}} : {{$Badminton->rbadmintons2}}</td>

          </tr>

              @endforeach
        </tbody>
      </table>
    </div>
  </div>
</div>
</form>
  </div>
</div>

=======
>>>>>>> 183346b8e5d87a8a797d7beea5da99a8d8bcab51
@endsection
