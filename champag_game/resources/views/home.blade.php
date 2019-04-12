@extends('layouts.main')

@section('main')
<div id="carouselExampleSlidesOnly" class="carousel slide" data-ride="carousel">
<div class="carousel-inner">
<div class="carousel-item active">
  <img class="d-block w-100" src="{{ url('/') }}/storage/champa_game.jpg">
</div>
</div>
</div>
<div class="py-5 text-center">
  <div class="container">
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
