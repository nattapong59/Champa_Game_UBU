@extends('layouts.app')

@section('content')
<br>
<br>
<br>
<br>
<br>


<div class="container">
    <div class="row justify-content-center">
        <div class="">
            <div class="card">


                <div class="card-body"> 
                <div class="rounded mx-auto d-block">
                    <form method="POST" action="{{ route('login') }}"  >
                    
                        @csrf
                        <table class="container " style="width:40% " style="height=100%">
                            <tr>
                                <th>
                                <div class="login">
                        <div class="card-header">{{ __('Login') }}</div>
                        <div class="card-header">
                        <div class="form-group row">
                        
                        
                            
                                
                            <div class="email">  <label for="email" class="col-md-4  col-form-label container">{{ __('อีเมล') }}</label><input id="email" type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }} container" name="email" value="{{ old('email') }}" required autofocus> </div>
                                
                                @if ($errors->has('email'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            
                       

                                <div class="password">
                            <label for="password" class="col-md-4 col-form-label text-md-center">{{ __('รหัสผ่าน') }}</label>

                            
                                <input id="password" type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" required>

                                @if ($errors->has('password'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                            </div>
                        

                        <div class="form-group row">
                            <div class="col-md-4 offset-md-4">
                                <div class="form-check">
                                <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}> 
                                </div>  
                                 <label class="form-check-label" for="remember">{{ __('Remember Me') }}</label>
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-8 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Login') }}
                                </button>
                                
                                @if (Route::has('password.request'))
                                <a class="btn btn-link" href="{{ route('password.request') }}">
                                 {{ __('Forgot Your Password?') }}
                                </a>
                                    
                                @endif
                            </div>
                        </div>
                    
                    </div>
                        </div>
                        
                                </th>
                            </tr>
                        </table>
                        </form>
                        
                </div>
            </div>
        </div>
    </div>
</div>



@endsection
