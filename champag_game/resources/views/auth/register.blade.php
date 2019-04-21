@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Register') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('register') }}">
                        @csrf

                        <div class="form-group row">
                            <label for="id" class="col-md-4 col-form-label text-md-right">{{ __('รหัสนักศึกษา') }}</label>
                            <div class="col-md-6">
                                <input id="id" type="text" class="form-control{{ $errors->has('id') ? ' is-invalid' : '' }}" name="id" value="{{ old('id') }}" required autofocus>

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

                        <div class="form-group row">
                            <label for="branch" class="col-md-4 col-form-label text-md-right">{{ __('สาขา') }}</label>

                            <div class="col-md-4">
                                <select id="branch" class="form-control{{ $errors->has('branch') ? ' is-invalid' : '' }}"  name="branch" class="form-control">
                                    <option selected>--</option>
                                    <option  value="เคมี"  >เคมี</option>
                                    <option  value="เทคโนโลยียางและพอลิเมอร์"  >เทคโนโลยียางและพอลิเมอร์</option>
                                    <option  value="'ฟิสิกส์"  >ฟิสิกส์</option>
                                    <option  value="คณิตศาสตร์"  >คณิตศาสตร์</option>
                                    <option  value="วิทยาการคอมพิวเตอร"  >วิทยาการคอมพิวเตอร์</option>
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

                            <div class="col-md-2">
                            <select class="form-control{{ $errors->has('year') ? ' is-invalid' : '' }}"  name="year" class="form-control">
                                <option selected>--</option>
                                <option value="1"  >1</option>
                                <option value="2"  >2</option>
                                <option value="3"  >3</option>
                                <option value="4"  >4</option>
                          </select>
                                @if ($errors->has('year'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('year') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('อีเมล') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" required>

                                @if ($errors->has('email'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('รหัสผ่าน') }}</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" required>

                                @if ($errors->has('password'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password-confirm" class="col-md-4 col-form-label text-md-right">{{ __('ยืนยันรหัสผ่าน') }}</label>

                            <div class="col-md-6">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required>
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Register') }}
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
