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
    </div>
  </div>
</div>
</form>

<br>


<form class="container" action="/addfootball" method="POST">

<div class="row justify-content-md-center">
        <div class="col-md-auto">
            <label ><b>ตารางแข่งขันฟุตบอล</b></label>
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
          <?php $indexfbl=1 ?>
        @foreach($post_football as $football)
          <tr>


            <th><?=$indexfbl++?></th>
            <td>{{$football->time}}</td>
            <td>{{$football->date}}</td>
            <td>{{$football->team}}</td>
             <td>VS</td>
            <td>{{$football->pair}}</td>
            <td>{{$football->category}}</td>
            <td>{{$football->line}}</td>
            <td>{{$football->around}}</td>
            <td> {{$football->rfootballs1}} : {{$football->rfootballs2}}</td>

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

@endsection
