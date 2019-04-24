@extends('layouts.app')

@section('content')
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<br>
<br>

  @csrf

  <form class="container" action="/porgram" method="POST">
    @csrf
    @method('PUT')
    <div class="col-md">
      <div class="ec-fancy-title">
          <h2>โปรแกรมการแข่งขันฟุตบอล</h2>
      </div>
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
                  @foreach($post_football as $football)
                  <tr>


                    <th>{{$football->id}}</th>
                    <td>{{$football->date}}</td>
                    <td>{{$football->time}}</td>
                    <td>{{$football->team}}</td>

                    <td>VS</td>
                    <td>{{$football->pair}}</td>
                    <td>{{$football->category}}</td>
                    <td>{{$football->line}}</td>
                    <td>{{$football->around}}</td>
                    <td>
                    {{$football->rfootballs1}} : {{$football->rfootballs2}}
                      <a class="btn btn-success" href="addfootball/{{$football->id}}/edit" >สรุปผล</a>
                    </td>
                </tr>
                <tr>
                    @endforeach
              </tbody>
            </table>
          </div>
        </div>
      </div>
    </div>
  </form>
  <br>
  <br>

  <form class="container" action="/porgram" method="POST">
      @csrf
      @method('PUT')
      <div class="col-md">
        <div class="ec-fancy-title">
            <h2>โปรแกรมการแข่งขันบาสเกสบอล</h2>
        </div>
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
                    @foreach($post_Basketball as $Basketball)
        <tr>


          <th>{{$Basketball->id}}</th>
          <td>{{$Basketball->date}}</td>
          <td>{{$Basketball->time}}</td>
          <td>{{$Basketball->team}}</td>
          <td>VS</td>
          <td>{{$Basketball->pair}}</td>
          <td>{{$Basketball->category}}</td>
          <td>{{$Basketball->line}}</td>
          <td>{{$Basketball->around}}</td>
          <td>
              {{$Basketball->rbasketballs1}} : {{$Basketball->rbasketballs2}}
              <a class="btn btn-success" href="addfootball/{{$Basketball->id}}/edit" >สรุปผล</a>
          </td>
                  </tr>
                  <tr>
                      @endforeach
                </tbody>
              </table>
            </div>
          </div>
        </div>
      </div>
  </form>

  <br>
  <br>

  <form class="container" action="/porgram" method="POST">
    <div class="col-md">
      <div class="ec-fancy-title">
          <h2>โปรแกรมการแข่งขันวอลเลย์บอล</h2>
      </div>
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
                @foreach($post_Volleyball as $Volleyball)
              <tr>
                <th>{{$Volleyball->id}}</th>
                <td>{{$Volleyball->date}}</td>
                <td>{{$Volleyball->time}}</td>
                <td>{{$Volleyball->team}}</td>
                <td>VS</td>
                <td>{{$Volleyball->pair}}</td>
                <td>{{$Volleyball->category}}</td>
                <td>{{$Volleyball->line}}</td>
                <td>{{$Volleyball->around}}</td>
                <td>{{$Volleyball->rvolleyballs1}} : {{$Volleyball->rvolleyballs2}}
                  <a class="btn btn-success" href="addvolleyball/{{$Volleyball->id}}/edit" >สรุปผล</a>
                  </div>
                      </div>
                </td>
              </tr>

                  @endforeach
            </tbody>
          </table>
        </div>
      </div>
    </div>
  </div>
  </form>
  <br>
  <br>

  <form class="container" action="/porgram" method="POST">
        @csrf
        @method('PUT')
        <div class="col-md">
          <div class="ec-fancy-title">
              <h2>โปรแกรมการแข่งขันแบดมินตัน</h2>
          </div>
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
                        @foreach($post_Badminton as $Badminton)
                        <tr>


                          <th>{{$Badminton->id}}</th>
                          <td>{{$Badminton->date}}</td>
                          <td>{{$Badminton->time}}</td>
                          <td>{{$Badminton->team}}</td>
                          <td>VS</td>
                          <td>{{$Badminton->pair}}</td>
                          <td>{{$Badminton->category}}</td>
                          <td>{{$Badminton->line}}</td>
                          <td>{{$Badminton->around}}</td>
                        <td>
                            {{$Badminton->rbadmintons1}} : {{$Badminton->rbadmintons2}}
                            <a class="btn btn-success" href="addfootball/{{$Badminton->id}}/edit" >สรุปผล</a>
                        </td>
                      </tr>
                      <tr>
                          @endforeach
                    </tbody>
                  </table>
                </div>
              </div>
            </div>
          </div>
  </form>
  <br>
  <br>

  <form class="container" action="/porgram" method="POST">
    @csrf
    @method('PUT')
    <div class="col-md">
      <div class="ec-fancy-title">
          <h2>โปรแกรมการแข่งขัน E-sport</h2>
      </div>
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
                @foreach($post_esport as $esport)
              <tr>
                  <th>{{$esport->id}}</th>
                  <td>{{$esport->date}}</td>
                  <td>{{$esport->time}}</td>
                  <td>{{$esport->team}}</td>
                  <td>VS</td>
                  <td>{{$esport->pair}}</td>
                  <td>{{$esport->category}}</td>
                  <td>{{$esport->line}}</td>
                  <td>{{$esport->around}}</td>
                  <td>{{$esport->resports1}} : {{$esport->resports2}}
                    <a class="btn btn-success" href="addesport/{{$esport->id}}/edit" >สรุปผล</a>
                  </td>
              </tr>
              <tr>
                  @endforeach
            </tbody>
          </table>
        </div>
      </div>
    </div>
  </div>
  </form>
  <br>
  <br>

  <form class="container" action="/porgram" method="POST">
    @csrf
    @method('PUT')
    <div class="col-md">
      <div class="ec-fancy-title">
          <h2>โปรแกรมการแข่งขันฟุตซอล</h2>
      </div>
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
                  @foreach($post_Futsal as $Futsal)
                  <tr>


                    <th>{{$Futsal->id}}</th>
                    <td>{{$Futsal->date}}</td>
                    <td>{{$Futsal->time}}</td>
                    <td>{{$Futsal->team}}</td>

                    <td>VS</td>
                    <td>{{$Futsal->pair}}</td>
                    <td>{{$Futsal->category}}</td>
                    <td>{{$Futsal->line}}</td>
                    <td>{{$Futsal->around}}</td>
                    <td>
                        {{$Futsal->rfutsals1}} : {{$Futsal->rfutsals2}}
                        <a class="btn btn-success" href="addfootball/{{$Futsal->id}}/edit" >สรุปผล</a>
                    </td>
                </tr>
                <tr>
                    @endforeach
              </tbody>
            </table>
          </div>
        </div>
      </div>
    </div>
  </form>
  <br>
  <br>





<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>


@endsection
