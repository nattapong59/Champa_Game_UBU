@extends('layouts.main')

@section('main')
<div class="py-5 text-center">
  <div class="container">
    <div class="">
      <section class="section">
            <div class="row no-gutters">
              <div class="col-sm-6 col-lg-4 col-xl-2"><a class="bloc-service bloc-service-important" href="regular-championships.html">
                  <div class="bloc-service-inner" style="min-height: 224px;">
                    <div class="wow fadeInUp" data-wow-delay="0.1s" style="visibility: visible; animation-delay: 0.1s; animation-name: fadeInUp;">
                      <img style="width:104px;height:128px;" src="https://image.flaticon.com/icons/svg/140/140389.svg " alt="">
                    </div>
                    <h5 class="bloc-service-title">ฟุตบอล</h5>
                  </div></a>
              </div>
              <div class="col-sm-6 col-lg-4 col-xl-2">
                <!-- Career Item--><a class="bloc-service bloc-service-important" href="extensive-golf-course.html">
                  <div class="bloc-service-inner" style="min-height: 225px;">
                    <div class="wow fadeInUp" data-wow-delay="0.15s" style="visibility: visible; animation-delay: 0.15s; animation-name: fadeInUp;">
                      <img style="width:104px;height:128px;" src="https://image.flaticon.com/icons/svg/140/140378.svg" alt="">
                    </div>
                    <h5 class="bloc-service-title">วอลเลย์บอล</h5>
                  </div></a>
              </div>
              <div class="col-sm-6 col-lg-4 col-xl-2">
                <!-- Career Item--><a class="bloc-service bloc-service-important" href="golf-cart-rentals.html">
                  <div class="bloc-service-inner" style="min-height: 225px;">
                    <div class="wow fadeInUp" data-wow-delay="0.25s" style="visibility: visible; animation-delay: 0.25s; animation-name: fadeInUp;">
                      <img style="width:104px;height:128px;" src="https://image.flaticon.com/icons/svg/911/911138.svg " alt="">
                      </div>
                    <h5 class="bloc-service-title">วอลเลย์บอล</h5>
                  </div></a>
              </div>
              <div class="col-sm-6 col-lg-4 col-xl-2">
                <!-- Career Item--><a class="bloc-service bloc-service-important" href="quality-equipment.html">
                  <div class="bloc-service-inner" style="min-height: 225px;">
                    <div class="wow fadeInUp" data-wow-delay="0.3s" style="visibility: visible; animation-delay: 0.3s; animation-name: fadeInUp;">
                      <img style="width:104px;height:128px;" src="https://image.flaticon.com/icons/svg/140/140349.svg" alt="">
                    </div>
                    <h5 class="bloc-service-title">เเบทมินตัน</h5>
                  </div></a>
              </div>
              <div class="col-sm-6 col-lg-4 col-xl-2">
                <!-- Career Item--><a class="bloc-service bloc-service-important" href="tee-time-online-reservation.html">
                  <div class="bloc-service-inner" style="min-height: 226px;">
                    <div class="wow fadeInUp" data-wow-delay="0.35s" style="visibility: visible; animation-delay: 0.35s; animation-name: fadeInUp;">
                      <img style="width:104px;height:128px;" src="https://image.flaticon.com/icons/svg/141/141070.svg" alt="">
                    </div>
                    <h5 class="bloc-service-title">e-sport</h5>
                  </div></a>
              </div>
              <div class="col-sm-6 col-lg-4 col-xl-2">
                <!-- Career Item--><a class="bloc-service bloc-service-important" href="tee-time-online-reservation.html">
                  <div class="bloc-service-inner" style="min-height: 226px;">
                    <div class="wow fadeInUp" data-wow-delay="0.35s" style="visibility: visible; animation-delay: 0.35s; animation-name: fadeInUp;">
                      <img style="width:104px;height:128px;" src="https://image.flaticon.com/icons/svg/186/186024.svg" alt="">
                    </div>
                    <h5 class="bloc-service-title">ฟุตซอล</h5>
                  </div></a>
              </div>
            </div>
          </section>

    </div>
      <label >ตารางแข่งขันวันนี้</label>
    <div class="row">
      <div class="col-md-12" >
        <div class="table-responsive">
          <table class="table table-bordered ">
            <thead class="thead-dark">
              <tr>
                <th>เวลา</th>
                <th>ประเภทกีฬา</th>
                <th>ทีมที่1</th>
                <th>พบ</th>
                <th>ทีมที่2</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <th>1</th>
                <td>ฟุตบอล</td>
                <td>Comsci</td>
                <td>VS</td>
                <td>Math</td>
              </tr>
              <tr>
                <th>2</th>
                <td>บาสเกสบอล</td>
                <td>Mico</td>
                <td>VS</td>
                <td>Bio</td>
              </tr>
              <tr>
                <th>3</th>
                <td>ฟุตบอล</td>
                <td>IT</td>
                <td>VS</td>
                <td>Physic</td>
              </tr>
              <tr>
                <th>4</th>
                <td>แบดมินตัน</td>
                <td>Comsci</td>
                <td>VS</td>
                <td>Physic</td>
              </tr>

            </tbody>
          </table>
        </div>
      </div>
    </div>
  </div>
</div>
@endsection
