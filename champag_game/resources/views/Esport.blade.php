@extends('layouts.app')

@section('content')
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<style>

  body {font-family: Arial, Helvetica, sans-serif;}
  * {box-sizing: border-box;}

  /* Button used to open the contact form - fixed at the bottom of the page */
  .open-button {
    background-color: #555;
    color: white;
    padding: 16px 20px;
    border: none;
    cursor: pointer;
    opacity: 0.8;
    position: fixed;
    bottom: 23px;
    right: 28px;
    width: 280px;
  }

  /* The popup form - hidden by default */
  .form-popup {
    display: none;
    position: fixed;
    bottom: 0;
    right: 15px;
    border: 3px solid #f1f1f1;
    z-index: 9;
  }

  /* Add styles to the form container */
  .form-container {
    max-width: 300px;
    padding: 10px;
    background-color: white;
  }

  /* Full-width input fields */
  .form-container input[type=text], .form-container input[type=password] {
    width: 100%;
    padding: 15px;
    margin: 5px 0 22px 0;
    border: none;
    background: #f1f1f1;
  }

  /* When the inputs get focus, do something */
  .form-container input[type=text]:focus, .form-container input[type=password]:focus {
    background-color: #ddd;
    outline: none;
  }

  /* Set a style for the submit/login button */
  .form-container .btn {
    background-color: #4CAF50;
    color: white;
    padding: 16px 20px;
    border: none;
    cursor: pointer;
    width: 100%;
    margin-bottom:10px;
    opacity: 0.8;
  }

  /* Add a red background color to the cancel button */
  .form-container .cancel {
    background-color: red;
  }

  /* Add some hover effects to buttons */
  .form-container .btn:hover, .open-button:hover {
    opacity: 1;
  }
  </style>











<form class="container" action="/addesport" method="POST">
  @csrf
    <div class="row justify-content-md-center">
        <div class="col-md-auto">
            <label ><b>ตารางแข่งขันเกม e-sport</b></label>
          </div>
    </div>
    <table >
        <tr>
          <th><div class="col-auto my-1">วันที่ :: <input type="date" name="date"></div></th>
          <th><div class="col-auto my-1">เวลา :: <input type="time" name="time"></div></th>
          <th> <div class="col-auto my-1">
              <label class="mr-sm-2 sr-only" for="inlineFormCustomSelect">Preference</label>
              <select class="custom-select mr-sm-2" name="category" id="inlineFormCustomSelect">
                <option selected>..ประเภท..</option>
                <option value="M">ชาย</option>
                <option value="W">หญิง</option>
      
              </select>
            </div></th>
          <th> <div class="col-auto my-1">
              <label class="mr-sm-2 sr-only" for="inlineFormCustomSelect">Preference</label>
              <select class="custom-select mr-sm-2" name="line" id="inlineFormCustomSelect">
                <option selected>..สาย..</option>
                <option value="A">A</option>
                <option value="B">B</option>
      
              </select>
            </div></div></th>
          <th><div class="col-auto my-1">
              <label class="mr-sm-2 sr-only" for="inlineFormCustomSelect">Preference</label>
              <select class="custom-select mr-sm-2" name="around" id="inlineFormCustomSelect">
                <option selected>..รอบการแข่งขัน..</option>
                <option value="รอบแรก">รอบแรก</option>
                <option value="รอบสอง">รอบสอง</option>
                <option value="รอบรองชนะเริศ">รอบรองชนะเลิศ</option>
                <option value="รอบชิงชนะเริศ">รอบชิงชนะเลิศ</option>
              </select>
            </div></div></th>
        
        </tr>
      </table>
      <table style="width:50%" class="container">
        <tr>
          <th> <div class="col-auto my-1">
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
            </div></th>
            <th><span class="ec-fixture-vs"><small>vs</small></span></th>
            <th> <div class="col-auto my-1">
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
            </th>
        </tr>
      </table>
      <div class="col-auto my-1">
        <button type="submit" class="btn btn-primary">เพิ่มการแข่ง</button>
      </div>
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
          <?php $indexes=1?>
            @foreach($post_esport as $esport)
          <tr>


            <th><?= $indexes++ ?></th>
            <td>{{$esport->time}}</td>
            <td>{{$esport->date}}</td>
            <td>{{$esport->team}}</td>

            <td>VS</td>
            <td>{{$esport->pair}}</td>
            <td>{{$esport->category}}</td>
            <td>{{$esport->line}}</td>
            <td>{{$esport->around}}</td>
            <td>
                <a class="btn btn-success" href="addesport/{{$esport->id}}/edit" >แก้ไข</a>
            </td>
            <td>
                <form action="addesport/{{$esport->id}}" method="post">
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

  $(function(){
    $("#inlineFormCustomSelect").()

  });
  function openForm() {
    document.getElementById("myForm").style.display = "block";
  }

  function closeForm() {
    document.getElementById("myForm").style.display = "none";
  }
  </script>

@endsection
