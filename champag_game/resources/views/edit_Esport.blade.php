@extends('layouts.app')

@section('content')
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

<form class="container" action="/addesport/{{$esport->id}}" method="POST">
    @csrf
    @method('PUT')
    <div class="row justify-content-md-center">
        <div class="col-md-auto">
            <label ><b>แก้ไขตารางแข่งขันเกม e-sport</b></label>
          </div>
    </div>
    <div class="form-row align-items-center">
        <div class="col-auto my-1">
            <input type="date" name="date" value="{{$esport->date}}">
          </div>
      <div class="col-auto my-1">
          <input type="time" name="time" value="{{$esport->time}}">
      </div>


      <div class="col-auto my-1">
        <label class="mr-sm-2 sr-only" for="inlineFormCustomSelect">Preference</label>
        <select class="custom-select mr-sm-2" name="category" id="inlineFormCustomSelect">
          <option selected>{{$esport->category}}</option>
          <option value="ชาย">ชาย</option>
          <option value="หญิง">หญิง</option>

        </select>
      </div>
      <div class="col-auto my-1">
        <label class="mr-sm-2 sr-only" for="inlineFormCustomSelect">Preference</label>
        <select class="custom-select mr-sm-2" name="line" id="inlineFormCustomSelect">
          <option selected>{{$esport->line}}</option>
          <option value="A">A</option>
          <option value="B">B</option>

        </select>
      </div>
      <div class="col-auto my-1">
          <label class="mr-sm-2 sr-only" for="inlineFormCustomSelect">Preference</label>
          <select class="custom-select mr-sm-2" name="around" id="inlineFormCustomSelect">
            <option selected>{{$esport->around}}</option>
            <option value="รอบแรก">รอบแรก</option>
            <option value="รอบสอง">รอบสอง</option>
            <option value="รอบรองชนะเริศ">รอบรองชนะเริศ</option>
            <option value="รอบชิงชนะเริศ">รอบชิงชนะเริศ</option>
          </select>
        </div>

      <div class="col-auto my-1">
          <label class="mr-sm-2 sr-only"  for="inlineFormCustomSelect">Preference</label>
          <select class="custom-select mr-sm-2" name="team" id="inlineFormCustomSelect">
            <option selected>{{$esport->team}}</option>
            <option value="">Phy</option>
            <option value="Chem">Chem</option>
            <option value="Bio">Bio</option>
            <option value="Rpt">Rpt</option>
            <option value="Math">Math</option>
            <option value="Com">Com</option>
            <option value="It">It</option>
            <option value="Occ">Occ</option>
            <option value="Mico">Mico</option>
            <option value="Envi">Envi</option>
          </select>
        </div>
        <h4>VS</h4>
        <div class="col-auto my-1">
          <label class="mr-sm-2 sr-only" for="inlineFormCustomSelect">Preference</label>
          <select class="custom-select mr-sm-2" name="pair" id="inlineFormCustomSelect">
            <option selected >{{$esport->pair}}</option>
            <option value="">Phy</option>
            <option value="Chem">Chem</option>
            <option value="Bio">Bio</option>
            <option value="Rpt">Rpt</option>
            <option value="Math">Math</option>
            <option value="Com">Com</option>
            <option value="It">It</option>
            <option value="Occ">Occ</option>
            <option value="Mico">Mico</option>
            <option value="Envi">Envi</option>
          </select>
        </div>
        <div class="form-row align-items-center">
            <div class="col-md-auto"> 
              <label><b><h4>ผล</h4></b></label>
            </div>
          <div class="col">
            <label>{{$esport->team}}</label>
            <input type="text" value="{{$esport->resports1}}" name="resports1" class="form-control">
         </div>
         <br>
         <div class="col">
           <label>{{$esport->pair}}</label>
           <input type="text" value="{{$esport->resports2}}" name="resports2" class="form-control" >
         </div>
      <div class="col-auto my-1">
        <button type="submit" class="btn btn-primary">ตกลง</button>
      </div>
    </div>
  </form>



<script>


  function openForm() {
    document.getElementById("myForm").style.display = "block";
  }

  function closeForm() {
    document.getElementById("myForm").style.display = "none";
  }
  </script>

@endsection
