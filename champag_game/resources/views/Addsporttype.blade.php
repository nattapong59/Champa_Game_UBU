@extends('layouts.main')


@section('main')

<div class="py-5">
    <div class="container">
        <div class="row">
            <div class="col-md-12" >

        <form action="" method="get">
        <div class="form-group"> <label>ชนิดกีฬา</label>
        
        <div class="input-group">
              <input type="text" class="form-control" id="inlineFormInputGroup" placeholder="ค้นหา">
              <div class="input-group-append"><button class="btn btn-primary" type="button"><i class="fa fa-search"></i></button></div>
            </div>

        


        <label >ตารางกีฬา</label>
      <div class="row">
        <div class="col-md-12" >
          <div class="table-responsive">
            <table class="table table-bordered ">
              <thead class="thead-dark">
                <tr>
                  <th>ลำดับ</th>
                  <th>สาขา</th>
                  <th>สาย</th>  
                </tr>
              </thead>
              <tbody>
                <tr>
                  <th>1</th>
                  <td>Comsci</td>
                  <td>A</td> 
                </tr>
                <tr>
                  <th>2</th>
                  <td>Mico</td>
                  <td>B</td>
                </tr>
                <tr>
                  <th>3</th>
                  <td>IT</td>
                  <td>A</td>
                </tr>
              </tbody>
            </table>
          </div>
        </div>
      </div>
      <button type="submit" class="btn btn-primary">เพิ่มชนิดกีฬา</button>  <button type="submit" class="btn btn-primary">ลบชนิดกีฬา</button>
      </form>
</div>
    </div>
        </div>
            </div>





<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>


@endsection