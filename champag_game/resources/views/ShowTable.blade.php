@extends('layouts.app')

@section('content')


<form class="container" action="/addvolleyball" method="POST">
  @csrf
<div class="ec-main-section ec-promofull">

    <div class="col-md">
      <div class="ec-fancy-title">
          <h2>โปรแกรมการแข่งขันวอลเลย์บอล</h2>
      </div>
      <div class="ec-fixture-list ec-matches-list">
          <ul>
              <li>
                  <div class="ec-cell"><span>03 Sep. Friday 1:00pm</span></div>
                  <div class="ec-cell">
                      <a href="#" class="ec-fixture-flag"><img src="extra-images/fixer-flag-1.png" alt=""> Arsenal</a>
                      <span class="ec-fixture-vs"><small>vs</small></span>
                      <a href="#" class="ec-fixture-flag ec-next-flag"><img src="extra-images/fixer-flag-2.png" alt=""> Premier League</a>
                  </div>
                    <div class="ec-cell"><span>03 Sep.pm</span></div>
                    <div class="ec-cell"><span>03 Sep.</span></div>
              </li>
          </ul>
      </div>
  </div>


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
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

@endsection
