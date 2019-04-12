@extends('layouts.main')


@section('main')
<div class="py-5">
    <div class="container">
      <div class="row">
        <div class="col-md-6" >

        <form action="addbasketball" method="get">
        <div class="form-group"> <label>กรอกข้อมูล</label></div>
        <div class="form-group"> <label>ชื่อ</label> <input type="first_name" class="form-control" placeholder="กรุณากรอก ชื่อ"></div>
        <div class="form-group"> <label>นามสกุล</label> <input type="last_name" class="form-control" placeholder="กรุณากรอก นามสกุล"></div>
        <div class="form-group"> <label>รหัสนักศึกษา</label> <input type="user_id" class="form-control" placeholder="กรุณากรอก รหัสนักศึกษา"></div>

        <select class="custom-select">
       <option selected>ชั้นปี</option>
      <option value="1">ชั้นปีที่1</option>
      <option value="2">ชั้นปีที่2</option>
        <option value="3">ชั้นปีที่3</option>
        <option value="4">ชั้นปีที่4</option>
        </select><br>

        <div class="form-group"> </div>
        <select class="custom-select">
       <option selected>สาขา</option>
        <option value="1">ฟิสิกส์ PHY</option>
        <option value="2">เคมี CHEM</option>
        <option value="3">ชีวะ BIO</option>
        <option value="4">การยาง RPT</option>
        <option value="5">คณิตศาสตร์ MATH</option>
        <option value="6">วิทยากรคอมพิวเตอร์ COM</option>
        <option value="7">เทคโนโลยีสารสนเทศ IT</option>
        <option value="8">ความปลอดภัย OCC</option>
        <option value="9">จุลชีวะ MICO</option>
        <option value="10">สิ่งแวดล้อม ENVI</option>
        
        </select>
       

        <div class="form-group"> <label>หมายเลขโทรศัพท์</label> <input type="phonenumber" class="form-control" placeholder="กรุณากรอก หมายเลขโทรศัพท์">  </div>

        <div class="form-group"> <label>Email address</label> <input type="email" class="form-control" placeholder="กรุณากรอก email">  </div>
        <div class="form-group"> <label>Password</label> <input type="Password" class="form-control" placeholder="กรุณากรอก Password">  </div>

             <button type="submit" class="btn btn-primary">ตกลง</button>
        </form>

        </div>
      </div>
    </div>
  </div>

  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>


@endsection