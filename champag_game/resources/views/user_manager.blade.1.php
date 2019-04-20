@extends('layouts.app')

@section('content')
  <div class="container-fluid">
  <div class="row">
    <div class="col-sm-12 main">
      <h1 class="page-header"  >Dashboard</h1>
      <div class="table-responsive">
        <table id="myTable" class="table table-striped">
          <thead>
            <tr>
              <th> </th>
              <th>รหัสนักศึกษา</th>
              <th>ชื่อ</th>
              <th>นามสกุล</th>
              <th></th>
              <th>Header</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <td><input type="checkbox"/></td>
              <td>1</td>
              <td>Lorem</td>
              <td>ipsum</td>
              <td>dolor</td>
              <td><a href="#" >delete</a></td>
            </tr>
            <tr>
              <td><input type="checkbox"/></td>
              <td>2</td>
              <td>amet</td>
              <td>consectetur</td>
              <td>adipiscing</td>
              <td><a href="#" >delete</a></td>
            </tr>
            <tr>
              <td><input type="checkbox"/></td>
              <td>3</td>
              <td>Integer</td>
              <td>nec</td>
              <td>odio</td>
              <td><a href="#" >delete</a></td>
            </tr>
            <tr>
              <td><input type="checkbox"/></td>
              <td>4</td>
              <td>dapibus</td>
              <td>diam</td>
              <td>Sed</td>
              <td><a href="#" >delete</a></td>
            </tr>
            <tr>
              <td><input type="checkbox"/></td>
              <td>5</td>
              <td>Nulla</td>
              <td>quis</td>
              <td>sem</td>
              <td><a href="#" >delete</a></td>
            </tr>
            <tr>
              <td><input type="checkbox"/></td>
              <td>6</td>
              <td>nibh</td>
              <td>elementum</td>
              <td>imperdiet</td>
              <td><a href="#" >delete</a></td>
            </tr>
            <tr>
              <td><input type="checkbox"/></td>
              <td>7</td>
              <td>sagittis</td>
              <td>ipsum</td>
              <td>Praesent</td>
              <td><a href="#" >delete</a></td>
            </tr>
            <tr>
              <td><input type="checkbox"/></td>
              <td>8</td>
              <td>Fusce</td>
              <td>nec</td>
              <td>tellus</td>
              <td><a href="#" >delete</a></td>
            </tr>
            <tr>
              <td><input type="checkbox"/></td>
              <td>9</td>
              <td>augue</td>
              <td>semper</td>
              <td>porta</td>
              <td><a href="#" >delete</a></td>
            </tr>
            <tr>
              <td><input type="checkbox"/></td>
              <td>10</td>
              <td>massa</td>
              <td>Vestibulum</td>
              <td>lacinia</td>
              <td><a href="#" >delete</a></td>
            </tr>
          </tbody>
        </table>
      </div>
      <button onclick="deleteRows()">Delete rows</button>
    </div>
  </div>
  </div>
  <script>
  // Write your JavaScript here..
  var myTable = document.getElementById('myTable');
  var tbody = myTable.children[1];

  for (var i = 0; i < tbody.children.length; i++) {
    tbody.children[i].children[5].firstChild.addEventListener("click", function() {deleteRow(this)});
  }
  var t = document.getElementsByTagName('input');
  function deleteRows() {
    for (var i = tbody.children.length; i >0; i--) {
      if (t[i-1].checked == true) {
        tbody.removeChild(tbody.children[i-1]);
      }
    }
  }
  function deleteRow(r) {
    var i = r.parentNode.parentNode.rowIndex;
    tbody.removeChild(tbody.children[i-1]);
  }
  </script>

@endsection
