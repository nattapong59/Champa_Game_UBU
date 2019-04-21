@extends('layouts.app')

@section('content')

    
  @csrf
  <?php 
  $football = $_GET['football'];
  $Bazz = $_GET['Bazz'];
  $Vallee = $_GET['Vallee'];
  $Bat = $_GET['Bat'];
  $e = $_GET['esport'];
  $Futzo = $_GET['Futzo'];
  ?>
<div class="row justify-content-md-center">
        <div class="col-md-auto">
            <label ><b>{{$football.$Bazz.$Vallee.$Bat.$e.$Futzo}}</b></label>
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
            {{-- @foreach($post_Volleyball as $Volleyball)
          <tr>


            <th>{{$Volleyball->id}}</th>
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

              @endforeach --}}
        </tbody>
      </table>
    </div>
  </div>
</div>


<br>
<br>
   

<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

@endsection
