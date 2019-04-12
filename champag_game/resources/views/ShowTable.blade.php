@extends('layouts.main')


@section('main')
    
    <label>ตารางแข่งขันวันนี้</label>

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
                  <td>3:2</td>
                </tr>
                <tr>
                  <th>2</th>
                  <<td>18.00-18.45</td>
                  <td>ฟุตบอล</td>
                  <td>Math</td>
                  <td>VS</td>
                  <td>IT</td>
                  <td>ชาย</td>
                  <td>A</td>
                  <td>รอบแรก</td>
                  <td>0:2</td>
                </tr>
                <tr>
                  <th>3</th>
                  <td>18.00-18.45</td>
                  <td>บาสเกสบอล</td>
                  <td>IT</td>
                  <td>VS</td>
                  <td>COMSCI</td>
                  <td>หญิง</td>
                  <td>A</td>
                  <td>รอบแรก</td>
                  <td>20:22</td>
                </tr>
                <tr>
                  <th>4</th>
                  <td>18.00-18.45</td>
                  <td>แบดมินตัน</td>
                  <td>Math</td>
                  <td>VS</td>
                  <td>COMSCI</td>
                  <td>ชาย</td>
                  <td>B</td>
                  <td>รอบแรก</td>
                  <td>21:18</td>
                </tr>
                
              </tbody>
            </table>
          </div>
        </div>
      </div>



<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

@endsection