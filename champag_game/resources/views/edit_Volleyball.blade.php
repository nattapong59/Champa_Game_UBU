@extends('layouts.app')

@section('content')
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<form class="container" action="/addvolleyball/{{$Volleyball->id}}" method="POST">
    @csrf
    @method('PUT')
    <div class="row justify-content-md-center">
        <div class="col-md-auto">
            <label ><b>แก้ไขตารางแข่งขันวอลเลย์บอล</b></label>
          </div>
    </div>
    <div class="form-row align-items-center">
        <div class="col-auto my-1">
            <input type="date" name="date" value="{{$Volleyball->date}}">
          </div>
      <div class="col-auto my-1">
          <input type="time" name="time" value="{{$Volleyball->time}}">
      </div>


      <div class="col-auto my-1">
        <label class="mr-sm-2 sr-only" for="inlineFormCustomSelect">Preference</label>
        <select class="custom-select mr-sm-2" name="category" id="inlineFormCustomSelect">
          <option selected>{{$Volleyball->category}}</option>
          <option value="ชาย">ชาย</option>
          <option value="หญิง">หญิง</option>

        </select>
      </div>
      <div class="col-auto my-1">
        <label class="mr-sm-2 sr-only" for="inlineFormCustomSelect">Preference</label>
        <select class="custom-select mr-sm-2" name="line" id="inlineFormCustomSelect">
          <option selected>{{$Volleyball->line}}</option>
          <option value="A">A</option>
          <option value="B">B</option>

        </select>
      </div>
      <div class="col-auto my-1">
          <label class="mr-sm-2 sr-only" for="inlineFormCustomSelect">Preference</label>
          <select class="custom-select mr-sm-2" name="around" id="inlineFormCustomSelect">
            <option selected>{{$Volleyball->around}}</option>
            <option value="รอบแรก">รอบแรก</option>
            <option value="รอบสอง">รอบสอง</option>
            <option value="รอบรองชนะเริศ">รอบรองชนะเริศ</option>
            <option value="รอบชิงชนะเริศ">รอบชิงชนะเริศ</option>
          </select>
        </div>

      <div class="col-auto my-1">
          <label class="mr-sm-2 sr-only"  for="inlineFormCustomSelect">Preference</label>
          <select class="custom-select mr-sm-2" name="team" id="inlineFormCustomSelect">
            <option selected>{{$Volleyball->team}}</option>
            <option value="Phy">Phy</option>
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
            <option selected >{{$Volleyball->pair}}</option>
            <option value="Phy">Phy</option>
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
        <br>
        <div class="form-row align-items-center">
            <div class="col-md-auto"> 
              <label><b><h4>ผล</h4></b></label>
            </div>
          <div class="col">
            <label>{{$Volleyball->team}}</label>
            <input type="text" value="{{$Volleyball->rvolleyballs1}}" name="rvolleyballs1" class="form-control">
         </div>
         <br>
         <div class="col">
           <label>{{$Volleyball->pair}}</label>
           <input type="text" value="{{$Volleyball->rvolleyballs2}}" name="rvolleyballs2" class="form-control" >
         </div>
         <br>
         <br>
      <div class="col-auto my-1">
        <br>
        <button type="submit" class="btn btn-primary">ตกลง</button>
      </div>
    </div>
  </form>

<script>
$(function(){
  
});
</script>
@endsection
