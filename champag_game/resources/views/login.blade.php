@extends('layouts.main')

@section('main')
    
<div class="py-5">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <form action="" method="get">
          <div class="form-group"> <label>LOGIN</label></div>
          <div class="form-group" > <label>Email address</label> <input type="email" class="form-control" placeholder="กรุณากรอก email"></div>
            <div class="form-group"> <label>Password</label> <input type="password" class="form-control" placeholder="กรุณากรอก Password"> </div> 
            <button type="submit" class="btn btn-primary">Submit</button>
            </form>

        
          
        </div>
      </div>
    </div>
  </div>







<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

@endsection