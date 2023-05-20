<!DOCTYPE html>
<!--
This is a starter template page. Use this page to start your new project from
scratch. This page gets rid of all links and provides the needed markup only.
-->
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="x-ua-compatible" content="ie=edge">

    <title>Medicine|Dashboard</title>

    <!-- Font Awesome Icons -->
    <link rel="stylesheet" href="{{asset("assets/dashboard/plugins/fontawesome-free/all.min.css")}}">
    <!-- Theme style -->
    <link rel="stylesheet" href="{{asset("assets/dashboard/css/adminlte.min.css")}}">
    <!-- Google Font: Source Sans Pro -->
    <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
    <!-- Select2 -->
    <link href="{{asset("assets/dashboard/plugins/select2/css/select2.min.css")}}" rel="stylesheet" />

    <!-- DataTables -->
    <link rel="stylesheet" href="{{asset("assets/dashboard/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css")}}">
    <link rel="stylesheet" href="{{asset("assets/dashboard/plugins/datatables-responsive/css/responsive.bootstrap4.min.css")}}">
    <link rel="stylesheet" href="{{asset("assets/dashboard/plugins/datatables-buttons/css/buttons.bootstrap4.min.css")}}">

    <!--Toastr and Sweetalert -->
    <link rel="stylesheet" href="{{asset("assets/dashboard/plugins/sweetalert2/sweetalert2.min.css")}}">
    <link rel="stylesheet" href="{{asset("assets/dashboard/plugins/toastr/toastr.min.css")}}">

    @yield('styles')

</head>

<body class="hold-transition sidebar-mini dark-mode">
    <div class="wrapper">

        <!-- Navbar -->
        <nav class="main-header navbar navbar-expand navbar-dark">
            <!-- Left navbar links -->
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
                </li>
                <li class="nav-item d-none d-sm-inline-block">
                    <a href="/dashboard" class="nav-link">Home</a>
                </li>
                <li class="nav-item d-none d-sm-inline-block">
                    <a href="#" class="nav-link">Contact</a>
                </li>
                <li>
                    <form action="{{ route('dashboard.logout') }}" method="POST">
                        @csrf
                        <button type="submit" class="btn btn-default btn-flat"><i class="fa fa-sign-out"></i> Sign out</button>
                      </form>
                </li>
            </ul>

            <!-- Right navbar links -->
            <ul class="navbar-nav ml-auto">
                <!-- Navbar Search -->
                <li class="nav-item">
                    <a class="nav-link" data-widget="navbar-search" href="#" role="button">
                        <i class="fas fa-search"></i>
                    </a>
                    <div class="navbar-search-block">
                        <form class="form-inline">
                            <div class="input-group input-group-sm">
                                <input class="form-control form-control-navbar" type="search" placeholder="Search"
                                    aria-label="Search">
                                <div class="input-group-append">
                                    <button class="btn btn-navbar" type="submit">
                                        <i class="fas fa-search"></i>
                                    </button>
                                    <button class="btn btn-navbar" type="button" data-widget="navbar-search">
                                        <i class="fas fa-times"></i>
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                </li>

                <!-- Messages Dropdown Menu -->
                <li class="nav-item dropdown">
                    <a class="nav-link" data-toggle="dropdown" href="#">
                        <i class="far fa-comments"></i>
                        <span class="badge badge-danger navbar-badge">3</span>
                    </a>
                    <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
                        <a href="#" class="dropdown-item">
                            <!-- Message Start -->
                            <div class="media">
                                {{-- <img src="dist/img/user1-128x128.jpg" alt="User Avatar"
                                    class="img-size-50 mr-3 img-circle"> --}}
                                <div class="media-body">
                                    <h3 class="dropdown-item-title">
                                        Brad Diesel
                                        <span class="float-right text-sm text-danger"><i class="fas fa-star"></i></span>
                                    </h3>
                                    <p class="text-sm">Call me whenever you can...</p>
                                    <p class="text-sm text-muted"><i class="far fa-clock mr-1"></i> 4 Hours Ago</p>
                                </div>
                            </div>
                            <!-- Message End -->
                        </a>
                        <div class="dropdown-divider"></div>
                        <a href="#" class="dropdown-item">
                            <!-- Message Start -->
                            <div class="media">
                                {{-- <img src="dist/img/user8-128x128.jpg" alt="User Avatar"
                                    class="img-size-50 img-circle mr-3"> --}}
                                <div class="media-body">
                                    <h3 class="dropdown-item-title">
                                        John Pierce
                                        <span class="float-right text-sm text-muted"><i class="fas fa-star"></i></span>
                                    </h3>
                                    <p class="text-sm">I got your message bro</p>
                                    <p class="text-sm text-muted"><i class="far fa-clock mr-1"></i> 4 Hours Ago</p>
                                </div>
                            </div>
                            <!-- Message End -->
                        </a>
                        <div class="dropdown-divider"></div>
                        <a href="#" class="dropdown-item">
                            <!-- Message Start -->
                            <div class="media">
                                {{-- <img src="dist/img/user3-128x128.jpg" alt="User Avatar"
                                    class="img-size-50 img-circle mr-3"> --}}
                                <div class="media-body">
                                    <h3 class="dropdown-item-title">
                                        Nora Silvester
                                        <span class="float-right text-sm text-warning"><i
                                                class="fas fa-star"></i></span>
                                    </h3>
                                    <p class="text-sm">The subject goes here</p>
                                    <p class="text-sm text-muted"><i class="far fa-clock mr-1"></i> 4 Hours Ago</p>
                                </div>
                            </div>
                            <!-- Message End -->
                        </a>
                        <div class="dropdown-divider"></div>
                        <a href="#" class="dropdown-item dropdown-footer">See All Messages</a>
                    </div>
                </li>
                <!-- Notifications Dropdown Menu -->
                <li class="nav-item dropdown">
                    <a class="nav-link" data-toggle="dropdown" href="#">
                        <i class="far fa-bell"></i>
                        <span class="badge badge-warning navbar-badge">15</span>
                    </a>
                    <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
                        <span class="dropdown-item dropdown-header">15 Notifications</span>
                        <div class="dropdown-divider"></div>
                        <a href="#" class="dropdown-item">
                            <i class="fas fa-envelope mr-2"></i> 4 new messages
                            <span class="float-right text-muted text-sm">3 mins</span>
                        </a>
                        <div class="dropdown-divider"></div>
                        <a href="#" class="dropdown-item">
                            <i class="fas fa-users mr-2"></i> 8 friend requests
                            <span class="float-right text-muted text-sm">12 hours</span>
                        </a>
                        <div class="dropdown-divider"></div>
                        <a href="#" class="dropdown-item">
                            <i class="fas fa-file mr-2"></i> 3 new reports
                            <span class="float-right text-muted text-sm">2 days</span>
                        </a>
                        <div class="dropdown-divider"></div>
                        <a href="#" class="dropdown-item dropdown-footer">See All Notifications</a>
                    </div>
                </li>
                <li class="nav-item">
                    <a class="nav-link" data-widget="fullscreen" href="#" role="button">
                        <i class="fas fa-expand-arrows-alt"></i>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" data-widget="control-sidebar" data-slide="true" href="#" role="button">
                        <i class="fas fa-th-large"></i>
                    </a>
                </li>
            </ul>
        </nav>
        <!-- /.navbar -->

        <!-- Main Sidebar Container -->
        <aside class="main-sidebar sidebar-dark-primary elevation-4">
            <!-- Brand Logo -->
            <a href="#" class="brand-link">
                <img src="{{asset("assets/dashboard/img/AdminLTELogo.png")}}" alt="AdminLTE Logo"
                    class="brand-image img-circle elevation-3" style="opacity: .8">
                <span class="brand-text font-weight-light">Medicine</span>
            </a>

            <!-- Sidebar -->
            <div class="sidebar">
                <!-- Sidebar user panel (optional) -->
                <div class="user-panel mt-3 pb-3 mb-3 d-flex">
                    <div class="image">
                        <img src="{{asset("assets/dashboard/img/avatar4.png")}}" class="img-circle elevation-2"
                            alt="User Image">
                    </div>
                    <div class="info">
                        <a href="#" class="d-block">{{auth()->user()->name ?? ''}}</a>
                    </div>
                </div>

                <!-- Sidebar Menu -->
                <nav class="mt-2">
                    <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu"
                        data-accordion="false">
                        <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
                        <li class="nav-item">
                            <a href="{{url('dashboard/contacts')}}" class="nav-link">
                                <i class="nav-icon fas fa-address-book"></i>
                                <p>
                                    Contact Forms
                                </p>
                            </a>
                        </li>

                        <li class="nav-item">
                            <a href="{{url('dashboard/illnesses')}}" class="nav-link">
                                <i class="nav-icon fas fa-disease"></i>
                                <p>
                                    Illnesses
                                </p>
                            </a>
                        </li>


                        <li class="nav-item">
                            <a href="{{url('dashboard/medicineServices')}}" class="nav-link">
                                <i class="nav-icon fas fa-stethoscope"></i>
                                <p>
                                    Medicine Services </p>
                            </a>
                        </li>


                        <li class="nav-item">
                            <a href="{{url('dashboard/news')}}" class="nav-link">
                                <i class="nav-icon fas fa-newspaper"></i>
                                <p>
                                    News
                                </p>
                            </a>
                        </li>

                        <li class="nav-item">
                            <a href="{{url('dashboard/users')}}" class="nav-link">
                                <i class="nav-icon fas fa-user-graduate"></i>
                                <p>
                                    Users
                                </p>
                            </a>
                        </li>

                        @auth
                        @if (Auth::user()->super_admin == 1)
                        <li class="nav-item">
                            <a href="{{url('dashboard/admins')}}" class="nav-link">
                                <i class="nav-icon fas fa-user-cog"></i>
                                <p>
                                    Admins
                                </p>
                            </a>
                        </li>
                        @endif
                        @endauth
                    </ul>
                </nav>
                <!-- /.sidebar-menu -->
            </div>
            <!-- /.sidebar -->
        </aside>
        

        @yield('main')

        <!-- Control Sidebar -->
        <aside class="control-sidebar control-sidebar-dark">
            <!-- Control sidebar content goes here -->
            <div class="p-3">
            </div>
        </aside>
        <!-- /.control-sidebar -->

        <!-- Main Footer -->
        <footer class="main-footer">
            <!-- To the right -->
            <div class="float-right d-none d-sm-inline">
                Anything you want
            </div>
            <!-- Default to the left -->
            <strong>Copyright &copy; 2023 <a href="https://www.linkedin.com/in/3omarbadr/" target="_blank">Omar
                    Badr</a>.</strong> All rights reserved.
        </footer>
    </div>
    <!-- ./wrapper -->

    <!-- REQUIRED SCRIPTS -->

    <!-- jQuery -->
    <script src="{{asset("assets/dashboard/plugins/jquery/jquery.min.js")}}"></script>
    <!-- Bootstrap 4 -->
    <script src="{{asset("assets/dashboard/plugins/bootstrap/js/bootstrap.bundle.min.js")}}"></script>
    <!-- AdminLTE App -->
    <script src="{{asset("assets/dashboard/js/adminlte.js")}}"></script>

    <!-- Select2 -->
    <script src="{{asset("assets/dashboard/plugins/select2/js/select2.min.js")}}"></script>

    <!-- overlayScrollbars -->
    <script src="{{asset("assets/dashboard/plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js")}}"></script>

    <!-- jQuery Mapael -->
    <script src="{{asset("assets/dashboard/plugins/jquery-mousewheel/jquery.mousewheel.js")}}"></script>
    <script src="{{asset("assets/dashboard/plugins/raphael/raphael.min.js")}}"></script>
    <script src="{{asset("assets/dashboard/plugins/jquery-mapael/jquery.mapael.min.js")}}"></script>
    <script src="{{asset("assets/dashboard/plugins/jquery-mapael/usa_states.min.js")}}"></script>
    <!-- ChartJS -->
    <script src="{{asset("assets/dashboard/plugins/chart.js/Chart.min.js")}}"></script>

    <!-- DataTables  & Plugins -->
    <script src="{{asset("assets/dashboard/plugins/datatables/jquery.dataTables.min.js")}}"></script>
    <script src="{{asset("assets/dashboard/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js")}}"></script>
    <script src="{{asset("assets/dashboard/plugins/datatables-responsive/js/dataTables.responsive.min.js")}}"></script>
    <script src="{{asset("assets/dashboard/plugins/datatables-responsive/js/responsive.bootstrap4.min.js")}}"></script>
    <script src="{{asset("assets/dashboard/plugins/datatables-buttons/js/dataTables.buttons.min.js")}}"></script>
    <script src="{{asset("assets/dashboard/plugins/datatables-buttons/js/buttons.bootstrap4.min.js")}}"></script>
    <script src="{{asset("assets/dashboard/plugins/jszip/jszip.min.js")}}"></script>
    <script src="{{asset("assets/dashboard/plugins/pdfmake/pdfmake.min.js")}}"></script>
    <script src="{{asset("assets/dashboard/plugins/pdfmake/vfs_fonts.js")}}"></script>
    <script src="{{asset("assets/dashboard/plugins/datatables-buttons/js/buttons.html5.min.js")}}"></script>
    <script src="{{asset("assets/dashboard/plugins/datatables-buttons/js/buttons.print.min.js")}}"></script>

    <!--Toastr and Sweetalert -->
    <script src="{{asset("assets/dashboard/plugins/sweetalert2/sweetalert2.all.min.js")}}"></script>
    <script src="{{asset("assets/dashboard/plugins/toastr/toastr.min.js")}}"></script>

    <script>
        toastr.options.escapeHtml = true;
        toastr.options = {
            "closeButton": false,
            "debug": false,
            "newestOnTop": true,
            "progressBar": true,
            "positionClass": "toast-top-right",
            "preventDuplicates": true,
            "onclick": null,
            "showDuration": "300",
            "hideDuration": "300",
            "timeOut": "5000",
            "extendedTimeOut": "1000",
            "showEasing": "swing",
            "hideEasing": "linear",
            "showMethod": "fadeIn",
            "hideMethod": "fadeOut"
        }
        
        @if(Session::has('success'))
            toastr.success("{{Session::get('success')}}")
        @endif
    
        @if(Session::has('warning'))
            toastr.warning("{{Session::get('warning')}}")
        @endif
    
        @if(Session::has('info'))
            toastr.info("{{Session::get('info')}}")
        @endif
    
        @if(Session::has('error'))
            toastr.error("{{Session::get('error')}}")
        @endif
    
        @if ($errors->any())
            @foreach ($errors->all() as $error)
                toastr.error("{{$error}}")
            @endforeach
        @endif
    
    </script>

    {{-- <script>
        $(document).on("click", "#delete", function(e) {
            e.preventDefault();
            var link = $(this).attr("href");
            var form = $(this).closest("form"); // get the closest form element
            var actionUrl = form.attr("action"); // get the URL specified in the form's action attribute
            new swal({
                    title: "Are you sure you want to delete?",
                    text: "Once deleted, this will be permanently deleted!",
                    icon: "warning",
                    buttons: true,
                    buttons: ["Cancel", "Delete"],
                    dangerMode: true,
                    closeOnClickOutside: false, //prevent dialog from closing on outside click
                    cancelButtonColor: '#d33', //customize cancel button color
                })
                .then((willDelete) => {
                    if (willDelete) {
                        window.location.href = actionUrl;
                    } else {
                        new swal("Safe data!");
                    }
                });
        });
    </script> --}}

    @yield('scripts')

</body>

</html>