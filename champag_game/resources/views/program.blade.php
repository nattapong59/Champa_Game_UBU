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


<br>
<br>
<form class="container" action="/addvolleyball" method="POST">
  @csrf
  <div class="row justify-content-md-center">
      <div class="col-md-auto">
          <label ><b>ตารางแข่งขันวอลเลย์บอล</b></label>
        </div>
  </div>
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
                <th>ผล</th>
              </tr>
            </thead>
            <tbody>
                @foreach($post_Volleyball as $Volleyball)
              <tr>
                <th>{{$Volleyball->id}}</th>
                <td>{{$Volleyball->time}}</td>
                <td>{{$Volleyball->date}}</td>
                <td>{{$Volleyball->team}}</td>
                <td>VS</td>
                <td>{{$Volleyball->pair}}</td>
                <td>{{$Volleyball->category}}</td>
                <td>{{$Volleyball->line}}</td>
                <td>{{$Volleyball->around}}</td>
                <td>
                    <button type="button" class="btn btn-success" onclick="openForm()">สรุปผล</button>
                    <div class="form-popup" id="myForm">
                        <form action="" class="form-container">
                          <h1>ผลการแข่ง</h1>
                          <div class="col">
                              <input type="text" class="form-control" placeholder="ทีม1">
                            </div>
                            <br>
                            <div class="col">
                              <input type="text" class="form-control" placeholder="ทีม2">
                            </div>
                          <button type="submit" class="btn">บันทึก</button>
                          <button type="submit" class="btn">แก้ไข</button>
                          <button type="button" class="btn cancel" onclick="closeForm()">กลับ</button>
                        </form>
                  </div></td>
              </tr>
              <tr>
                  @endforeach
            </tbody>
          </table>
        </div>
      </div>
    </div>
  </form>
  <br>
  <br>

  <form class="container" action="/addesport" method="POST">
  @csrf
  <div class="row justify-content-md-center">
      <div class="col-md-auto">
          <label ><b>ตารางแข่งขันเกม e-sport</b></label>
        </div>
  </div>
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
                <th>ผล</th>
              </tr>
            </thead>
            <tbody>
                @foreach($post_esport as $esport)
              <tr>
                  <th>{{$esport->id}}</th>
                  <td>{{$esport->time}}</td>
                  <td>{{$esport->date}}</td>
                  <td>{{$esport->team}}</td>
                  <td>VS</td>
                  <td>{{$esport->pair}}</td>
                  <td>{{$esport->category}}</td>
                  <td>{{$esport->line}}</td>
                  <td>{{$esport->around}}</td>
                <td>
                    <button type="button" class="btn btn-success" onclick="openForm()">สรุปผล</button>
                    <div class="form-popup" id="myForm">
                        <form action="" class="form-container">
                          <h1>ผลการแข่ง</h1>
                          <div class="col">
                              <input type="text" class="form-control" placeholder="ทีม1">
                            </div>
                            <br>
                            <div class="col">
                              <input type="text" class="form-control" placeholder="ทีม2">
                            </div>
                          <button type="submit" class="btn">บันทึก</button>
                          <button type="submit" class="btn">แก้ไข</button>
                          <button type="button" class="btn cancel" onclick="closeForm()">กลับ</button>
                        </form>
                  </div></td>
              </tr>
              <tr>
                  @endforeach
            </tbody>
          </table>
        </div>
      </div>
    </div>
  </form>
  <br>
  <br>
  <form class="container" action="/addfootball" method="POST">
    @csrf
    <div class="row justify-content-md-center">
        <div class="col-md-auto">
            <label ><b>ตารางแข่งขันฟุตบอล</b></label>
          </div>
    </div>
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
                  <th>ผล</th>
                </tr>
              </thead>
              <tbody>
                  @foreach($post_football as $football)
                  <tr>


                    <th>{{$football->id}}</th>
                    <td>{{$football->time}}</td>
                    <td>{{$football->date}}</td>
                    <td>{{$football->team}}</td>

                    <td>VS</td>
                    <td>{{$football->pair}}</td>
                    <td>{{$football->category}}</td>
                    <td>{{$football->line}}</td>
                    <td>{{$football->around}}</td>
                  <td>
                      <button type="button" class="btn btn-success" onclick="openForm()">สรุปผล</button>
                      <div class="form-popup" id="myForm">
                          <form action="" class="form-container">
                            <h1>ผลการแข่ง</h1>
                            <div class="col">
                                <input type="text" class="form-control" placeholder="ทีม1">
                              </div>
                              <br>
                              <div class="col">
                                <input type="text" class="form-control" placeholder="ทีม2">
                              </div>
                            <button type="submit" class="btn">บันทึก</button>
                            <button type="submit" class="btn">แก้ไข</button>
                            <button type="button" class="btn cancel" onclick="closeForm()">กลับ</button>
                          </form>
                    </div></td>
                </tr>
                <tr>
                    @endforeach
              </tbody>
            </table>
          </div>
        </div>
      </div>
    </form>
    <br>
    <br>
    <form class="container" action="/addfutsal" method="POST">
      @csrf
      <div class="row justify-content-md-center">
          <div class="col-md-auto">
              <label ><b>ตารางแข่งขันฟุตซอล</b></label>
            </div>
      </div>
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
                    <th>ผล</th>
                  </tr>
                </thead>
                <tbody>
                    @foreach($post_Futsal as $Futsal)
                    <tr>


                      <th>{{$Futsal->id}}</th>
                      <td>{{$Futsal->time}}</td>
                      <td>{{$Futsal->date}}</td>
                      <td>{{$Futsal->team}}</td>

                      <td>VS</td>
                      <td>{{$Futsal->pair}}</td>
                      <td>{{$Futsal->category}}</td>
                      <td>{{$Futsal->line}}</td>
                      <td>{{$Futsal->around}}</td>
                    <td>
                        <button type="button" class="btn btn-success" onclick="openForm()">สรุปผล</button>
                        <div class="form-popup" id="myForm">
                            <form action="" class="form-container">
                              <h1>ผลการแข่ง</h1>
                              <div class="col">
                                  <input type="text" class="form-control" placeholder="ทีม1">
                                </div>
                                <br>
                                <div class="col">
                                  <input type="text" class="form-control" placeholder="ทีม2">
                                </div>
                              <button type="submit" class="btn">บันทึก</button>
                              <button type="submit" class="btn">แก้ไข</button>
                              <button type="button" class="btn cancel" onclick="closeForm()">กลับ</button>
                            </form>
                      </div></td>
                  </tr>
                  <tr>
                      @endforeach
                </tbody>
              </table>
            </div>
          </div>
        </div>
      </form>
      <br>
      <br>
      <form class="container" action="addbasketball" method="POST">
        @csrf
        <div class="row justify-content-md-center">
            <div class="col-md-auto">
                <label ><b>ตารางแข่งขันบาสเกสบอล</b></label>
              </div>
        </div>
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
                      <th>ผล</th>
                    </tr>
                  </thead>
                  <tbody>
                      @foreach($post_Basketball as $Basketball)
          <tr>


            <th>{{$Basketball->id}}</th>
            <td>{{$Basketball->time}}</td>
            <td>{{$Basketball->date}}</td>
            <td>{{$Basketball->team}}</td>

            <td>VS</td>
            <td>{{$Basketball->pair}}</td>
            <td>{{$Basketball->category}}</td>
            <td>{{$Basketball->line}}</td>
            <td>{{$Basketball->around}}</td>
                      <td>
                          <button type="button" class="btn btn-success" onclick="openForm()">สรุปผล</button>
                          <div class="form-popup" id="myForm">
                              <form action="" class="form-container">
                                <h1>ผลการแข่ง</h1>
                                <div class="col">
                                    <input type="text" class="form-control" placeholder="ทีม1">
                                  </div>
                                  <br>
                                  <div class="col">
                                    <input type="text" class="form-control" placeholder="ทีม2">
                                  </div>
                                <button type="submit" class="btn">บันทึก</button>
                                <button type="submit" class="btn">แก้ไข</button>
                                <button type="button" class="btn cancel" onclick="closeForm()">กลับ</button>
                              </form>
                        </div></td>
                    </tr>
                    <tr>
                        @endforeach
                  </tbody>
                </table>
              </div>
            </div>
          </div>
        </form>
        <br>
        <br>
        <form class="container" action="/addbadminton" method="POST">
            @csrf
            <div class="row justify-content-md-center">
                <div class="col-md-auto">
                    <label ><b>ตารางแข่งขันแบดมินตัน</b></label>
                  </div>
            </div>
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
                          <th>ผล</th>
                        </tr>
                      </thead>
                      <tbody>
                          @foreach($post_Badminton as $Badminton)
                          <tr>


                            <th>{{$Badminton->id}}</th>
                            <td>{{$Badminton->time}}</td>
                            <td>{{$Badminton->date}}</td>
                            <td>{{$Badminton->team}}</td>

                            <td>VS</td>
                            <td>{{$Badminton->pair}}</td>
                            <td>{{$Badminton->category}}</td>
                            <td>{{$Badminton->line}}</td>
                            <td>{{$Badminton->around}}</td>
                          <td>
                              <button type="button" class="btn btn-success" onclick="openForm()">สรุปผล</button>
                              <div class="form-popup" id="myForm">
                                  <form action="" class="form-container">
                                    <h1>ผลการแข่ง</h1>
                                    <div class="col">
                                        <input type="text" class="form-control" placeholder="ทีม1">
                                      </div>
                                      <br>
                                      <div class="col">
                                        <input type="text" class="form-control" placeholder="ทีม2">
                                      </div>
                                    <button type="submit" class="btn">บันทึก</button>
                                    <button type="submit" class="btn">แก้ไข</button>
                                    <button type="button" class="btn cancel" onclick="closeForm()">กลับ</button>
                                  </form>
                              </div>
                            </td>
                        </tr>
                        <tr>
                            @endforeach
                      </tbody>
                    </table>
                  </div>
                </div>
              </div>
            </form>
            <br>
            <br>



<script>

  function openForm() {
    document.getElementById("myForm").style.display = "block";
  }

  function closeForm() {
    document.getElementById("myForm").style.display = "none";
  }
  </script>

@endsection
