@extends('layouts.app')

@section('content')
<div class="py-5 text-center">
  <div class="container">
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
      <div class="carousel-item">
        <img src="image/sport.jpg" class="d-block w-100" >
        <div class="carousel-caption d-none d-md-block">
          
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
      <label >ตารางแข่งขันวันนี้</label>
    <div class="row">
      <div class="col-md-12" >
        <div class="table-responsive">
          <table class="table table-bordered ">
            <thead class="thead-dark">
              <tr>
                <th>เวลา</th>
                <th>ประเภทกีฬา</th>
                <th>ทีมที่1</th>
                <th>พบ</th>
                <th>ทีมที่2</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <th>1</th>
                <td>ฟุตบอล</td>
                <td>Comsci</td>
                <td>VS</td>
                <td>Math</td>
              </tr>
              <tr>
                <th>2</th>
                <td>บาสเกสบอล</td>
                <td>Mico</td>
                <td>VS</td>
                <td>Bio</td>
              </tr>
              <tr>
                <th>3</th>
                <td>ฟุตบอล</td>
                <td>IT</td>
                <td>VS</td>
                <td>Physic</td>
              </tr>
              <tr>
                <th>4</th>
                <td>แบดมินตัน</td>
                <td>Comsci</td>
                <td>VS</td>
                <td>Physic</td>
              </tr>

            </tbody>
          </table>
        </div>
      </div>
    </div>
  </div>
</div>
@endsection
