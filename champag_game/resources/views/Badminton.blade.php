@extends('layouts.app')

@section('content')
<form class="container" action="/addbadminton" method="POST">
  @csrf
    <div class="row justify-content-md-center">
        <div class="col-md-auto">
            <label ><b>ตารางแข่งขันแบดมินตัน</b></label>
          </div>
    </div>
    <div class="form-row align-items-center">
        <div class="col-auto my-1">
            <input type="date" name="date">
          </div>
      <div class="col-auto my-1">
          <input type="time" name="time">
      </div>


      <div class="col-auto my-1">
        <label class="mr-sm-2 sr-only" for="inlineFormCustomSelect">Preference</label>
        <select class="custom-select mr-sm-2" name="category" id="inlineFormCustomSelect">
          <option selected>..ประเภท..</option>
          <option value="M">ชาย</option>
          <option value="W">หญิง</option>

        </select>
      </div>
      <div class="col-auto my-1">
        <label class="mr-sm-2 sr-only" for="inlineFormCustomSelect">Preference</label>
        <select class="custom-select mr-sm-2" name="line" id="inlineFormCustomSelect">
          <option selected>..สาย..</option>
          <option value="A">A</option>
          <option value="B">B</option>

        </select>
      </div>
      <div class="col-auto my-1">
          <label class="mr-sm-2 sr-only" for="inlineFormCustomSelect">Preference</label>
          <select class="custom-select mr-sm-2" name="around" id="inlineFormCustomSelect">
            <option selected>..รอบการแข่งขัน..</option>
            <option value="รอบแรก">รอบแรก</option>
            <option value="รอบสอง">รอบสอง</option>
            <option value="รอบรองชนะเริศ">รอบรองชนะเลิศ</option>
            <option value="รอบชิงชนะเริศ">รอบชิงชนะเลิศ</option>
          </select>
        </div>

      <div class="col-auto my-1">
          <label class="mr-sm-2 sr-only"  for="inlineFormCustomSelect">Preference</label>
          <select class="custom-select mr-sm-2" name="team" id="team">
            <option selected>..ทีม1..</option>
            <?php
            $team = array("Phy","Chem","Bio","Rpt","Math","Com","It","Occ","Mico","Envi");
              for ($i=0; $i < sizeof($team); $i++) { 
                echo "<option value='$team[$i]'>$team[$i]</option>";
              }
              
            ?>
          </select>
        </div>
        <h4>VS</h4>
        <div class="col-auto my-1">
          <label class="mr-sm-2 sr-only" for="inlineFormCustomSelect">Preference</label>
          <select class="custom-select mr-sm-2" name="pair" id="pair">
            <option selected >..ทีม2..</option>
            <?php
              for ($i=0; $i < sizeof($team); $i++) { 
                echo "<option value='$team[$i]'>$team[$i]</option>";
              }
            ?>
          </select>
        </div>
      <div class="col-auto my-1">
        <button type="submit" class="btn btn-primary">เพิ่มการแข่ง</button>
      </div>
      <script>
      
      </script>
    </div>
  </form>
  <br>
  <br>

<div class="row">
  <div class="col-md-12">
    <div class="table-responsive">
      <table class="table table-bordered container">
        <thead class="thead-dark">

          <tr>
            <th>ลำดับ</th>
            <th>วันที่</th>
            <th>เวลา</th>

            <th>ทีมที่1</th>
            <th>พบ</th>
            <th>ทีมที่2</th>
            <th>ประเภท</th>
            <th>สาย</th>
            <th>รอบ</th>

          </tr>
        </thead>
        <tbody>
          <?php $index=1?>
            @foreach($post_Badminton as $Badminton)
          <tr>


            <th>{<?=$index++?></th>
            <td>{{$Badminton->time}}</td>
            <td>{{$Badminton->date}}</td>
            <td>{{$Badminton->team}}</td>

            <td>VS</td>
            <td>{{$Badminton->pair}}</td>
            <td>{{$Badminton->category}}</td>
            <td>{{$Badminton->line}}</td>
            <td>{{$Badminton->around}}</td>
            <td>
                <a class="btn btn-success" href="addbadminton/{{$Badminton->id}}/edit" >แก้ไข</a>
            </td>
            <td>
                <form action="addbadminton/{{$Badminton->id}}" method="post">
                  @csrf
                  @method('DELETE')
                  <button class="btn btn-danger" type="submit">ลบ</button>
                </form>

            </td>
          </tr>
          <tr>

              @endforeach
        </tbody>
      </table>

    </div>
  </div>
</div>

<script>

  function openForm() {
    document.getElementById("myForm").style.display = "block";
  }

  function closeForm() {
    document.getElementById("myForm").style.display = "none";
  }
  </script>

@endsection
