@extends('layouts.main')

@section('main')
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











<form class="container" action="/program" method="POST">
  @csrf
    <div class="row justify-content-md-center">
        <div class="col-md-auto">
            <label ><b>ตารางแข่งขันวอลเลย์บอล</b></label>
          </div>
    </div>
    <div class="form-row align-items-center">
      <div class="col-auto my-1">
        <label class="mr-sm-2 sr-only" for="inlineFormCustomSelect">Preference</label>
        <select class="custom-select mr-sm-2"  name="time" id="inlineFormCustomSelect">
          <option selected>..เวลา..</option>
          <option value="1">16.00</option>
          <option value="2">16.30</option>
          <option value="3">16.45</option>
          <option value="4">17.00</option>
          <option value="5">17.30</option>
          <option value="6">17.45</option>
          <option value="7">18.00</option>
          <option value="8">18.30</option>
          <option value="9">18.45</option>
          <option value="10">19.00</option>
          <option value="11">19.30</option>
          <option value="12">19.45</option>
          <option value="13">20.00</option>
        </select>
      </div>
     
      
      <div class="col-auto my-1">
        <label class="mr-sm-2 sr-only" for="inlineFormCustomSelect">Preference</label>
        <select class="custom-select mr-sm-2" name="category" id="inlineFormCustomSelect">
          <option selected>..ประเภท..</option>
          <option value="1">ชาย</option>
          <option value="2">หญิง</option>
          
        </select>
      </div>
      <div class="col-auto my-1">
        <label class="mr-sm-2 sr-only" for="inlineFormCustomSelect">Preference</label>
        <select class="custom-select mr-sm-2" name="line" id="inlineFormCustomSelect">
          <option selected>..สาย..</option>
          <option value="1">A</option>
          <option value="2">B</option>
          
        </select>
      </div>
      

      <div class="col-auto my-1">
          <label class="mr-sm-2 sr-only" name="team" for="inlineFormCustomSelect">Preference</label>
          <select class="custom-select mr-sm-2" id="inlineFormCustomSelect">
            <option selected>..ทีม1..</option>
            <option value="1">Phy</option>
            <option value="2">Chem</option>
            <option value="3">Bio</option>
            <option value="4">Rpt</option>
            <option value="5">Math</option>
            <option value="6">Com</option>
            <option value="7">It</option>
            <option value="8">Occ</option>
            <option value="9">Mico</option>
            <option value="10">Envi</option>
          </select>
        </div>
        <h4>VS</h4>
        <div class="col-auto my-1">
          <label class="mr-sm-2 sr-only" for="inlineFormCustomSelect">Preference</label>
          <select class="custom-select mr-sm-2" name="pair" id="inlineFormCustomSelect">
              <option selected >..ทีม2..</option>
              <option value="1">Phy</option>
              <option value="2">Chem</option>
              <option value="3">Bio</option>
              <option value="4">Rpt</option>
              <option value="5">Math</option>
              <option value="6">Com</option>
              <option value="7">It</option>
              <option value="8">Occ</option>
              <option value="9">Mico</option>
              <option value="10">Envi</option>
          </select>
        </div>
      <div class="col-auto my-1">
        <button type="submit" class="btn btn-primary">เพิ่มการแข่ง</button>
      </div>
    </div>
  </form>

<div class="row">
  <div class="col-md-12">
    <div class="table-responsive">
      <table class="table table-bordered ">
        <thead class="thead-dark">
          <tr>
            <th>ลำดับ</th>
            <th>เวลา</th>
            <th>ประเภทกีฬา</th>
            <th>ทีมที่1</th>
            <th>พบ</th>
            <th>ทีมที่2</th>
            <th>ประเภท</th>
            <th>สาย</th>
            <th>รอบ</th>
            <th>ผลการแข่งขัน</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <th>1</th>
            <td>18.00-18.45</td>
            <td>บาสเกสบอล</td>
            <td>Math</td>
            <td>VS</td>
            <td>COMSCI</td>
            <td>ชาย</td>
            <td>A</td>
            <td>รอบแรก</td>
            <td><div class="col-auto my-1">
                <button type="submit" onclick="openForm()" class="btn btn-primary">ผล</button>
                <div class="form-popup" id="myForm">
                  <form action="/action_page.php" class="form-container">
                    <h1>ผลหารแข่งขัน</h1>
                
                    <label><b>ผลหารแข่งขัน</b></label>
                    <div class="form-row">
                      <div class="col">
                        <input type="text" class="form-control" placeholder="First name">
                      </div>
                      <div class="col">
                        <input type="text" class="form-control" placeholder="Last name">
                      </div>
                    </div>
                
    
                    <button type="submit" class="btn">ตกลง</button>
                    <button type="button" class="btn cancel" onclick="closeForm()">กลับ</button>
                  </form>
                </div>
              </div></td>
          </tr>
          <tr>

          
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