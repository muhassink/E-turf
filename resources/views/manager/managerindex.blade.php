@extends('manager.managerheader')
@section('manager')
<div class="col-sm-9">
  <div class="main-panel">
    <div class="content-wrapper">
      <div class="row">
        <div class="col-sm-3 mb-4 mb-xl-0">
          <h4 class="font-weight-bold text-dark">Hi, welcome back!</h4>
          <p class="font-weight-normal mb-2 text-muted">2022</p>
        </div>
      </div>
      <div class="row">
        <div class="col-sm-12 flex-column d-flex grid-margin stretch-card">
          <div class="row ">
            <div class="col-sm-6 grid-margin stretch-card">
              <a href="/viewturfmanager">
                <div class="card bg-light">
                  <div class="card-body">
                    <h1 class="h1">View Turf <i class="pl-6 h1 far fa-calendar-check"></i>
                      <!-- <img src="/img/svg/ballsvg.png" alt="" width="100px" class="p-2" height="100px"> -->
                    </h1>
                    <p>click here to view turf</p>
                  </div>
              </a>
            </div>
          </div>
          <div class="col-sm-6 grid-margin stretch-card">
            <a href="/viewusersmanager">
              <div class="card bg-light">
                <div class="card-body">
                  <h1 class="fs-2">View Users <i class="pl-6 h1 fas fa-user"></i></h1>
                  <p>click here to view managers</p>
                </div>
            </a>
          </div>
        </div>
        <!-- <div class="col-sm-6 grid-margin stretch-card">
            <a href="/viewusers">
            <div class="card bg-light">
              <div class="card-body">
                <h1 class="fs-1">View Users <i class="pl-6 h1 fas fa-user"></i></h1>
                <p>click here to view users</p>
              </div>
              </a>
            </div>
          </div> -->
        <!-- <div class="col-sm-6 grid-margin stretch-card">
            <a href="/viewbooking">
            <div class="card bg-light">
              <div class="card-body">
                <h1 class="fs-1">View Bookings <i class="pl-6 h1 far fa-calendar-check"></i></h1>
                <p class="fs-1">click here to view bookings</p>
              </div>
              </a> -->
      </div>
    </div>
  </div>
</div>
@endsection