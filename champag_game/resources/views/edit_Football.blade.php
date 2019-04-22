@extends('layouts.app')

@section('content')
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<form class="container" action="/addfootball/{{$football->id}}" method="POST">
    @csrf
    @method('PUT')
    <div class="row justify-content-md-center">
        <div class="col-md-auto">
            <label ><b>แก้ไขตารางแข่งขันฟุตบอล</b></label>
          </div>
    </div>
    <table style="width:60%" class="container">
        <tr>
          <th><div class="col-auto my-1">วันที่ :: <input type="date" name="date" value="{{$football->date}}"></div></div></th>
          <th><div class="col-auto my-1">เวลา :: <input type="time" name="time" value="{{$football->time}}"></div></th>
          <th><div class="col-auto my-1">
            <label class="mr-sm-2 sr-only" for="inlineFormCustomSelect">Preference</label>
            <select class="custom-select mr-sm-2" name="category" id="inlineFormCustomSelect">
              <option selected>{{$football->category}}</option>
              <option value="ชาย">ชาย</option>
              <option value="หญิง">หญิง</option>
            </select>
          </div></th>
          <th>
            <div class="col-auto my-1">
              <label class="mr-sm-2 sr-only" for="inlineFormCustomSelect">Preference</label>
              <select class="custom-select mr-sm-2" name="line" id="inlineFormCustomSelect">
                <option selected>{{$football->line}}</option>
                <option value="A">A</option>
                <option value="B">B</option>
              </select>
          </th>
          <th>
            <div class="col-auto my-1">
              <label class="mr-sm-2 sr-only" for="inlineFormCustomSelect">Preference</label>
              <select class="custom-select mr-sm-2" name="around" id="inlineFormCustomSelect">
                <option selected>{{$football->around}}</option>
                <option value="รอบแรก">รอบแรก</option>
                <option value="รอบสอง">รอบสอง</option>
                <option value="รอบรองชนะเริศ">รอบรองชนะเริศ</option>
                <option value="รอบชิงชนะเริศ">รอบชิงชนะเริศ</option>
              </select>
            </div>
          </th>
        </tr>
      </table>
      <table style="width:50%" class="container">
        <tr>
          <th><div class="col-auto my-1">
            <label class="mr-sm-2 sr-only"  for="inlineFormCustomSelect">Preference</label>
            <select class="custom-select mr-sm-2" name="team" id="inlineFormCustomSelect">
              <option selected>{{$football->team}}</option>
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
          </div></th>
          <th><span class="ec-fixture-vs"><small>vs</small></span></th>
          <th>
            <div class="col-auto my-1">
              <label class="mr-sm-2 sr-only" for="inlineFormCustomSelect">Preference</label>
              <select class="custom-select mr-sm-2" name="pair" id="inlineFormCustomSelect">
                <option selected >{{$football->pair}}</option>
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
          </th>
        </tr>
      </table>
      <br>
      <table style="width:50%" class="container">
        <tr>
          <th><div class="col">
              <label>{{$football->team}}</label>
              <input type="text" value="{{$football->rfootballs1}}" name="rfootballs1" class="form-control">
           </div></th>
           <th><label><b><h4>ผล</h4></b></label></span></th>
           <th>
              <div class="col">
                  <label>{{$football->pair}}</label>
                  <input type="text" value="{{$football->rfootballs2}}" name="rfootballs2" class="form-control" >
                </div>
           </th>
           <th><br><br><br>
              <div class="col-auto my-1">
                  <button type="submit" class="btn btn-primary">ตกลง</button>
                </div>
           </th>
        </tr>
      </table>
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
