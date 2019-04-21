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
    
    </div>
</div>


@endsection
