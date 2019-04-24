@extends('layouts.app')

@section('content')
  <div class="container">
        <div class="col-md-12">
              <div class="card-body">
                  <form class="" action="{{ url('/players') }}" method="get">
                    <div class="form-group row">
                        <table>
                          <tr>
                            <th>
                                  <label for="branch" class="col-md-0  col-form-label text-md-right">{{ __('กีฬา') }}</label>
                            </th>
                            <th>
                                <label for="branch" class="col-md-0  col-form-label text-md-right">{{ __('สาขา') }}</label>
                            </th>
                            <th>
                                <label for="branch" class="col-md-0  col-form-label text-md-right">{{ __('ประเภท') }}</label>
                            </th>
                            <th>
                            </th>
                          </tr>
                          <tr>
                            <th>
                                  <select id="type_sport" class="form-control{{ $errors->has('branch') ? ' is-invalid' : '' }} custom-select mr-sm-2"  name="type_sport" >
                                      <option selected value="">--</option>
                                      <option  value="ฟุตบอล"  >ฟุตบอล</option>
                                      <option  value="บาสเกสบอล"  >บาสเกสบอล</option>
                                      <option  value="วอลเลย์บอล"  >วอลเลย์บอล</option>
                                      <option  value="เเบดมินตัน"  >เเบดมินตัน</option>
                                      <option  value="e-sport"  >e-sport</option>
                                      <option  value="ฟุตซอล"  >ฟุตซอล</option>
                                </select>
                            </th>
                            <th>
                                  <select id="branch" class="form-control{{ $errors->has('branch') ? ' is-invalid' : '' }} custom-select mr-sm-2"  name="branch" >
                                      <option selected value="">--</option>
                                      <option  value="เคมี"  >เคมี</option>
                                      <option  value="เทคโนโลยียางและพอลิเมอร์"  >เทคโนโลยียางและพอลิเมอร์</option>
                                      <option  value="ฟิสิกส์"  >ฟิสิกส์</option>
                                      <option  value="คณิตศาสตร์"  >คณิตศาสตร์</option>
                                      <option  value="วิทยาการคอมพิวเตอร์"  >วิทยาการคอมพิวเตอร์</option>
                                      <option  value="เทคโนโลยีสารสนเทศ"  >เทคโนโลยีสารสนเทศ</option>
                                      <option  value="ชีววิทยา"  >ชีววิทยา</option>
                                      <option  value="วิทยาศาสตร์สิ่งแวดล้อม}"  >วิทยาศาสตร์สิ่งแวดล้อม</option>
                                      <option  value="อาชีวอนามัยและความปลอดภัย "  >อาชีวอนามัยและความปลอดภัย</option>
                                </select>

                                  @if ($errors->has('branch'))
                                      <span class="invalid-feedback" role="alert">
                                          <strong>{{ $errors->first('branch') }}</strong>
                                      </span>
                                  @endif
                            </th>
                            <th>
                              <select id="category" class="form-control{{ $errors->has('branch') ? ' is-invalid' : '' }} custom-select mr-sm-2"  name="category" >
                                  <option selected value="">--</option>
                                  <option value="M" >ชาย</option>
                                  <option value="W" >หญิง</option>
                            </select>
                              @if ($errors->has('branch'))
                                  <span class="invalid-feedback" role="alert">
                                      <strong>{{ $errors->first('branch') }}</strong>
                                  </span>
                              @endif
                            </th>
                            <th><button type="submit" class="btn btn-primary">{{ __('ยืนยัน') }}</button></th>
                          </tr>
                        </table>
                    </div>
                  </form>

              </div>
            </div>

<?php
  $branch = $_GET['branch'];
  $type_sport = $_GET['type_sport'];
  $category = $_GET['category'];
 ?>
 <div class="ec-fancy-title">
     <h2>{{ __('รายชื่อนักกีฬา'.$type_sport.' '.$branch.' '.$category) }}</h2>
 </div>
    <div class="row">
      <div class="col-md-12" >
        <div class="table-responsive">
          <table class="table table-bordered ">
            <thead class="thead-dark">
              <tr>
                <th>รหัสนักศึกษา</th>
                <th>ชื่อ-สกุล</th>
                <th>สาขา</th>
                <th>กีฬา</th>
                <th>ประเภท</th>
              </tr>
            </thead>
            <tbody>
              @csrf
              @foreach($post_players as $player)
            <tr>
              @if($type_sport=="" &&  $branch=="" && $category=="")
              <td>{{$player->std_id}}</td>
              <td>{{$player->first_name}} {{$player->last_name}}</td>
              <td>{{$player->branch}}</td>
              <td>{{$player->type_sport}}</td>
              <td>{{$player->category}}</td>

              @elseif($player->type_sport == $type_sport &&  $branch=="" && $category=="")
              <td>{{$player->std_id}}</td>
              <td>{{$player->first_name}} {{$player->last_name}}</td>
              <td>{{$player->branch}}</td>
              <td>{{$player->type_sport}}</td>
              <td>{{$player->category}}</td>

              @elseif($player->branch == $branch &&  $type_sport=="" && $category=="")
              <td>{{$player->std_id}}</td>
              <td>{{$player->first_name}} {{$player->last_name}}</td>
              <td>{{$player->branch}}</td>
              <td>{{$player->type_sport}}</td>
              <td>{{$player->category}}</td>

              @elseif($player->category == $category &&  $branch=="" && $type_sport=="")
              <td>{{$player->std_id}}</td>
              <td>{{$player->first_name}} {{$player->last_name}}</td>
              <td>{{$player->branch}}</td>
              <td>{{$player->type_sport}}</td>
              <td>{{$player->category}}</td>

              @elseif($player->type_sport == $type_sport && $player->branch == $branch && $category=="")
              <td>{{$player->std_id}}</td>
              <td>{{$player->first_name}} {{$player->last_name}}</td>
              <td>{{$player->branch}}</td>
              <td>{{$player->type_sport}}</td>
              <td>{{$player->category}}</td>

              @elseif($player->type_sport == $type_sport && $player->branch == $branch && $player->category == $category)
              <td>{{$player->std_id}}</td>
              <td>{{$player->first_name}} {{$player->last_name}}</td>
              <td>{{$player->branch}}</td>
              <td>{{$player->type_sport}}</td>
              <td>{{$player->category}}</td>
              @endif
            </tr>
            <tr>
              @endforeach
            </tbody>
          </table>
        </div>
      </div>
    </div>
  </div>

@endsection
