<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Manager</title>
    <!-- base:css -->
    <link rel="stylesheet" href="/admin/vendors/mdi/css/materialdesignicons.min.css">
    <link rel="stylesheet" href="/admin/vendors/feather/feather.css">
    <link rel="stylesheet" href="/admin/vendors/base/vendor.bundle.base.css">
    <!-- endinject -->
    <!-- plugin css for this page -->
    <link rel="stylesheet" href="/admin/vendors/flag-icon-css/css/flag-icon.min.css" />
    <link rel="stylesheet" href="/admin/vendors/font-awesome/css/font-awesome.min.css">
    <link rel="stylesheet" href="/admin/vendors/jquery-bar-rating/fontawesome-stars-o.css">
    <link rel="stylesheet" href="/admin/vendors/jquery-bar-rating/fontawesome-stars.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" integrity="sha512-9usAa10IRO0HhonpyAIVpjrylPvoDwiPUiKdWk5t3PyolY1cOd4DSE0Ga+ri4AuTroPR5aQvXU9xC6qOPnzFeg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
    <!-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.2/css/all.min.css" integrity="sha512-1sCRPdkRXhBV2PBLUdRb4tMg1w2YPf37qatUFeS7zlBy7jJI8Lf4VHwWfZZfpXtYSLy85pkm9GaYVYMfw5BC1A==" crossorigin="anonymous" referrerpolicy="no-referrer" /> -->
    <!-- End plugin css for this page -->
    <!-- inject:css -->
    <link rel="stylesheet" href="/admin/css/style.css">
    <!-- endinject -->
    <link rel="shortcut icon" href="/admin/images/favicon.png" />
</head>

<body>
    <div class="">
        <div class="">
            <!-- partial:partials/_navbar.html -->
            <nav class="navbar col-lg-12 col-12 p-0 fixed-top d-flex ">
                <div class="text-center navbar-brand-wrapper d-flex align-items-center justify-content-center">
                    <a class="navbar-brand brand-logo" href="/index.html">e-turf</a>
                    <a class="navbar-brand brand-logo-mini" href="/index.html"><img src="/images/logo-mini.svg" alt="logo" /></a>
                </div>
                <div class="navbar-menu-wrapper d-flex align-items-center justify-content-end">
                    <button class="navbar-toggler navbar-toggler align-self-center" type="button" data-toggle="minimize">
                        <span class="icon-menu"></span>
                    </button>
                    <button class="navbar-toggler navbar-toggler-right d-lg-none align-self-center" type="button" data-toggle="offcanvas">
                        <span class="icon-menu"></span>
                    </button>
                </div>
            </nav>
            <!-- partial -->
            <div class="">
                <div class="row">
                    <div class="col-sm-3">
                        <!-- partial:partials/_sidebar.html -->
                        <nav class="sidebar sidebar-offcanvas" id="sidebar">
                            <div class="user-profile">
                                <div class="user-image">
                                    <img src="/img/turf5.jpg">
                                </div>
                                <div class="user-name">
                                    Manager
                                </div>
                                @foreach($managername as $value)
                                <h4>{{$value->name}}</h4>
                                @endforeach
                                <br></br>
                                <ul class="nav">
                                    <li class="nav-item">
                                        <a class="nav-link" href="/managerindex">
                                            <i class="icon-box menu-icon"></i>
                                            <span class="menu-title">Dash Board</span>
                                        </a>
                                    </li>
                                    <ul class="nav">
                                        <li class="nav-item">
                                            <a class="nav-link" href="/editprofilemanager">
                                                <i class="icon-bell menu-icon"></i>
                                                <span class="menu-title">Profile</span>
                                            </a>
                                        </li>
                                        <ul class="nav">
                                            <li class="nav-item">
                                                <a class="nav-link" href="/viewbookingsmanager">
                                                    <i class="icon-archive menu-icon"></i>
                                                    <span class="menu-title">View Bookings</span>
                                                </a>
                                            <li class="nav-item">
                                                <a class="nav-link" href="/viewpaymentmanager">
                                                    <i class="icon-bell menu-icon"></i>
                                                    <span class="menu-title">View payment</span>
                                                </a>
                                            </li>

                                            <ul class="nav">
                                                <li class="nav-item">
                                                    <a class="nav-link" href="/indexpage">
                                                        <i class="icon-book menu-icon"></i>
                                                        <span class="menu-title">LogOut</span>
                                                    </a>
                                                </li>
                                            </ul>
                                        </ul>
                                    </ul>
                                </ul>
                                </ul>
                            </div>
                        </nav>
                    </div>
                    @yield('manager')
                </div>
            </div>



            <!-- content-wrapper ends -->
            <!-- partial:partials/_footer.html -->
            <footer class="footer">
                <div class="d-sm-flex justify-content-center justify-content-sm-between">
                    <span class="text-muted d-block text-center text-sm-left d-sm-inline-block">Copyright © e-turf.com 2022</span>
                </div>
                <span class="text-muted d-block text-center text-sm-left d-sm-inline-block mt-2">Distributed By: <a href="/indexpage" target="">e-turf</a></span>
            </footer>

            <!-- partial -->
        </div>
        <!-- main-panel ends -->
    </div>
    <!-- page-body-wrapper ends -->
    </div>
    <!-- container-scroller -->

    <!-- base:js -->
    <script src="/admin/vendors/base/vendor.bundle.base.js"></script>
    <!-- endinject -->
    <!-- Plugin js for this page-->
    <!-- End plugin js for this page-->
    <!-- inject:js -->
    <script src="/js/off-canvas.js"></script>
    <script src="/js/hoverable-collapse.js"></script>
    <script src="/js/template.js"></script>
    <!-- endinject -->
    <!-- plugin js for this page -->
    <script src="/admin/vendors/chart.js/Chart.min.js"></script>
    <script src="/admin/vendors/jquery-bar-rating/jquery.barrating.min.js"></script>
    <!-- End plugin js for this page -->
    <!-- Custom js for this page-->
    <script src="/admin/js/dashboard.js"></script>
    <!-- End custom js for this page-->
</body>
</html>