@extends('layouts.app')

@section('content')
<?php
  $type = $_GET['type'];

 ?>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <h5 class="card-header center">{{ __('ลงทะเบียนแข่งขันกีฬา'.$type) }}</h5>

                <div class="card-body">
                    <form method="POST" action="/players">
                        @csrf
                        <input type="hidden" name ="type_sport" value="{{ __($type) }}" >

                        <div class="form-group row">
                            <label for="branch" class="col-md-4 col-form-label text-md-right">{{ __('สาขา') }}</label>

                            <div class="col-md-6">
                                <select id="branch" class="form-control{{ $errors->has('branch') ? ' is-invalid' : '' }}"  name="branch" class="form-control">
                                    <option selected>--</option>
                                    <option  value="เคมี"  >เคมี</option>
                                    <option  value="เทคโนโลยียางและพอลิเมอร์"  >เทคโนโลยียางและพอลิเมอร์</option>
                                    <option  value="'ฟิสิกส์"  >ฟิสิกส์</option>
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
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="branch" class="col-md-4 col-form-label text-md-right">{{ __('สาขา') }}</label>

                            <div class="col-md-6">
                                <select class="form-control{{ $errors->has('year') ? ' is-invalid' : '' }}" id="category"  name="category" class="form-control">
                                    <option selected value="M">ชาย</option>
                                    <option value="W">หญิง</option>
                                  </select>
                                @if ($errors->has('year'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('year') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="id" class="col-md-4 col-form-label text-md-right">{{ __('รหัสนักศึกษา') }}</label>
                            <div class="col-md-6">
                                <input type="text" class="form-control{{ $errors->has('id') ? ' is-invalid' : '' }}" name="std_id" required autofocus>

                                @if ($errors->has('id'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('id') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="first_name" class="col-md-4 col-form-label text-md-right">{{ __('ชื่อ') }}</label>

                            <div class="col-md-6">
                                <input id="first_name" type="text" class="form-control{{ $errors->has('first_name') ? ' is-invalid' : '' }}" name="first_name" value="{{ old('first_name') }}" required autofocus>

                                @if ($errors->has('first_name'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('first_name') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="last_name" class="col-md-4 col-form-label text-md-right">{{ __('นามสกุล') }}</label>

                            <div class="col-md-6">
                                <input id="last_name" type="text" class="form-control{{ $errors->has('last_name') ? ' is-invalid' : '' }}" name="last_name" value="{{ old('last_name') }}" required autofocus>

                                @if ($errors->has('last_name'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('last_name') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('ยืนยัน') }}
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
