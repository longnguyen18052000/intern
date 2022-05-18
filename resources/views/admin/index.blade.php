<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Admin</title>

    <!-- Google Font: Source Sans Pro -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="plugins/fontawesome-free/css/all.min.css">
    <!-- Ionicons -->
    <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
    <!-- Tempusdominus Bootstrap 4 -->
    <link rel="stylesheet" href="plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css">
    <!-- iCheck -->
    <link rel="stylesheet" href="plugins/icheck-bootstrap/icheck-bootstrap.min.css">
    <!-- JQVMap -->
    <link rel="stylesheet" href="plugins/jqvmap/jqvmap.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="dist/css/adminlte.min.css">
    <!-- overlayScrollbars -->
    <link rel="stylesheet" href="plugins/overlayScrollbars/css/OverlayScrollbars.min.css">
    <!-- Daterange picker -->
    <link rel="stylesheet" href="plugins/daterangepicker/daterangepicker.css">
    <!-- summernote -->
    <link rel="stylesheet" href="plugins/summernote/summernote-bs4.min.css">


    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">

    <link rel="stylesheet" href="<?php echo asset('assets/css/login.css') ?>" type="text/css">

    <script type="text/javascript" src="{{URL::asset('assets/bootstrap/js/bootstrap.js')}}"></script>
    <script type="text/javascript" src="{{URL::asset('assets/bootstrap/js/bootstrap.min.js')}}"></script>
</head>

<body class="hold-transition sidebar-mini layout-fixed">
    <div class="wrapper">

        <!-- Preloader -->

        <!-- Navbar -->
        <nav class="main-header navbar navbar-expand navbar-white navbar-light">
            <!-- Left navbar links -->
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
                </li>
                <li class="nav-item d-none d-sm-inline-block">
                    <a href="{{ route('home') }}" class="nav-link">Home</a>
                </li>
                <li class="nav-item d-none d-sm-inline-block">
                    <a href="{{ route('logout') }}" class="nav-link">Logout</a>
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
                                <input class="form-control form-control-navbar" type="search" placeholder="Search" aria-label="Search">
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
                                <img src="dist/img/user1-128x128.jpg" alt="User Avatar" class="img-size-50 mr-3 img-circle">
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
                                <img src="dist/img/user8-128x128.jpg" alt="User Avatar" class="img-size-50 img-circle mr-3">
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
                                <img src="dist/img/user3-128x128.jpg" alt="User Avatar" class="img-size-50 img-circle mr-3">
                                <div class="media-body">
                                    <h3 class="dropdown-item-title">
                                        Nora Silvester
                                        <span class="float-right text-sm text-warning"><i class="fas fa-star"></i></span>
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
                    <a class="nav-link" data-widget="control-sidebar" data-controlsidebar-slide="true" href="#" role="button">
                        <i class="fas fa-th-large"></i>
                    </a>
                </li>
            </ul>
        </nav>
        <!-- /.navbar -->

        <!-- Main Sidebar Container -->
        <aside class="main-sidebar sidebar-dark-primary elevation-4">

            <!-- Sidebar -->
            <div class="sidebar">
                <!-- Sidebar user panel (optional) -->
                <div class="user-panel mt-3 pb-3 mb-3 d-flex">
                    <div class="image">
                        <img src="dist/img/user2-160x160.jpg" class="img-circle elevation-2" alt="User Image">
                    </div>
                    <div class="info">
                        <a href="#" class="d-block">Handsome</a>
                    </div>
                </div>

                <!-- SidebarSearch Form -->
                <div class="form-inline">
                    <div class="input-group" data-widget="sidebar-search">
                        <input class="form-control form-control-sidebar" type="search" placeholder="Search" aria-label="Search">
                        <div class="input-group-append">
                            <button class="btn btn-sidebar">
                                <i class="fas fa-search fa-fw"></i>
                            </button>
                        </div>
                    </div>
                </div>

                <!-- Sidebar Menu -->
                <nav class="mt-2">
                    <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                        <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
                        <li class="nav-item">
                            <a href="#" class="nav-link">
                                <i class="nav-icon fas fa-copy"></i>
                                <p>
                                    Menu
                                    <i class="fas fa-angle-left right"></i>
                                </p>
                            </a>
                            <ul class="nav nav-treeview">
                                <li class="nav-item">
                                    <a href="" class="nav-link">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Thông tin khách hàng</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="" class="nav-link">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Danh mục</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="" class="nav-link">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Tin tức</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="{{ route('product') }}" class="nav-link">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Sản phẩm</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="" class="nav-link">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Đơn hàng</p>
                                    </a>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </nav>
                <!-- /.sidebar-menu -->
            </div>
            <!-- /.sidebar -->
        </aside>

        <!-- Content Wrapper. Contains page content -->
        <div style="margin-left: 100px;">
            <form class="d-flex align-item-center">
                <input class="w-25 border border-none outline-none" type="text" name="q" value="{{ $q }}" style="margin-right: 10px;">
                <button class="btn btn-info border border-0 p-2" style="margin-right: 10px;">Search</button>
                <a class="btn btn-success" onclick="document.getElementById('add').style.display='block'">Add</a>
            </form>

            <!-- add -->
            <div id="add" class="w3-modal resgiter">
                <div class="item mb-5">
                    <div class="row">
                        <div class="img col-4 d-flex justify-content-center align-items-center">
                            <img src="{{ asset('images/login-bg.png') }}" alt="logo" />
                        </div>
                        <div class="col-1"></div>
                        <div class="col-6 content mt-5 mb-5">
                            <h2><strong>Thêm tài khoản</strong></h2>
                            <span>Chú ý các nội dung có dấu * bạn cần phải nhập</span>

                            <form action="{{ route('admin.store') }}" method="POST" class="w-100">
                                @csrf

                                <div>
                                    <label><strong>Tài khoản</strong></label>
                                    <input type="text" name="name" placeholder="Họ tên *" value=" {{ old('name') }}" require>
                                    @if($errors->any())
                                    @foreach($errors->get('name') as $err)
                                    <div class="text text-danger text-center">{{ $err }}</div>
                                    @endforeach
                                    @endif
                                </div>

                                <div>
                                    <label><strong>Họ Tên</strong></label>
                                    <input type="text" name="username" placeholder="Họ tên *" value="{{ old('username') }}" require>
                                    @if($errors->any())
                                    @foreach($errors->get('username') as $err)
                                    <div class="text text-danger text-center">{{ $err }}</div>
                                    @endforeach
                                    @endif
                                </div>

                                <div>
                                    <label><strong>Mật khẩu</strong></label>
                                    <input type="password" name="password" placeholder="Mật khẩu *" require>
                                    @if($errors->any())
                                    @foreach($errors->get('password') as $err)
                                    <div class="text text-danger text-center">{{ $err }}</div>
                                    @endforeach
                                    @endif
                                </div>

                                <div>
                                    <label><strong>Email</strong></label>
                                    <input type="email" name="email" placeholder="Email *" value="{{ old('email') }}" require>
                                    @if($errors->any())
                                    @foreach($errors->get('email') as $err)
                                    <div class="text text-danger text-center">{{ $err }}</div>
                                    @endforeach
                                    @endif
                                </div>

                                <div class="row">
                                    <label class="col-3"><strong>Giới tính</strong></label>
                                    <div class="row col-8">
                                        <label class="d-flex align-items-center"><input class="col-6" type="radio" name="gender" value="1" require>Nam</label>
                                        <label class="d-flex align-items-center"><input class="col-6" type="radio" name="gender" value="0" require>Nữ</label>
                                        @if($errors->any())
                                        @foreach($errors->get('gender') as $err)
                                        <div class="text text-danger" style="margin-left:20px">{{ $err }}</div>
                                        @endforeach
                                        @endif
                                    </div>
                                </div>

                                <div>
                                    <label><strong>Ngày tháng năm sinh</strong></label>
                                    <input type="date" name="date_of_birth" placeholder="Ngày tháng năm sinh" value="{{ old('date_of_birth') }}" require>
                                    @if($errors->any())
                                    @foreach($errors->get('date_of_birth') as $err)
                                    <div class="text text-danger text-center">{{ $err }}</div>
                                    @endforeach
                                    @endif
                                </div>

                                <div>
                                    <label><strong>Điện thoại</strong></label>
                                    <input type="tel" name="phone" placeholder="Điện thoại *" value="{{ old('phone') }}" require>
                                    @if($errors->any())
                                    @foreach($errors->get('phone') as $err)
                                    <div class="text text-danger text-center">{{ $err }}</div>
                                    @endforeach
                                    @endif
                                </div>

                                <div>
                                    <label><strong>Địa chỉ</strong></label>
                                    <input type="text" name="address" placeholder="Địa chỉ *" value="{{ old('address') }}" require>
                                    @if($errors->any())
                                    @foreach($errors->get('address') as $err)
                                    <div class="text text-danger text-center">{{ $err }}</div>
                                    @endforeach
                                    @endif
                                </div>

                                <div>
                                    <label><strong>Tỉnh/Thành phố</strong></label>
                                    <input type="text" name="city" placeholder="Chọn tỉnh/Thành phố" value="{{ old('city') }}" require>
                                    @if($errors->any())
                                    @foreach($errors->get('city') as $err)
                                    <div class="text text-danger text-center">{{ $err }}</div>
                                    @endforeach
                                    @endif
                                </div>

                                <div>
                                    <label><strong>Quận/Huyện</strong></label>
                                    <input type="text" name="district" placeholder="Chọn Quận/Huyện *" value="{{ old('district') }}" require>
                                    @if($errors->any())
                                    @foreach($errors->get('district') as $err)
                                    <div class="text text-danger text-center">{{ $err }}</div>
                                    @endforeach
                                    @endif
                                </div>

                                <div class="mt-5 d-flex justify-content-center align-items-center">
                                    <button type="submit" class="btn">Save</button>
                                </div>
                            </form>
                        </div>
                        <div class="col-1">
                            <button class="w-100 border border-0 mt-3 bg-white" style="color:red" onclick="document.getElementById('add').style.display='none'"><strong>X</strong></button>
                        </div>
                    </div>
                </div>
            </div>

             <!-- edit -->
             <div id="edit" class="w3-modal resgiter">
                <div class="item mb-5">
                    <div class="row">
                        <div class="img col-4 d-flex justify-content-center align-items-center">
                            <img src="{{ asset('images/login-bg.png') }}" alt="logo" />
                        </div>
                        <div class="col-1"></div>
                        <div class="col-6 content mt-5 mb-5">
                            <h2><strong>Chỉnh sửa tài kho</strong></h2>
                            <span>Chú ý các nội dung có dấu * bạn cần phải nhập</span>

                            <form action="{{route ('register.action') }}" method="POST" class="w-100">
                                @csrf

                                <div>
                                    <label><strong>Tài khoản</strong></label>
                                    <input type="text" name="name" placeholder="Họ tên *" value=" {{ old('name') }}" require>
                                    @if($errors->any())
                                    @foreach($errors->get('name') as $err)
                                    <div class="text text-danger text-center">{{ $err }}</div>
                                    @endforeach
                                    @endif
                                </div>

                                <div>
                                    <label><strong>Họ Tên</strong></label>
                                    <input type="text" name="username" placeholder="Họ tên *" value="{{ old('username') }}" require>
                                    @if($errors->any())
                                    @foreach($errors->get('username') as $err)
                                    <div class="text text-danger text-center">{{ $err }}</div>
                                    @endforeach
                                    @endif
                                </div>

                                <div>
                                    <label><strong>Mật khẩu</strong></label>
                                    <input type="password" name="password" placeholder="Mật khẩu *" require>
                                    @if($errors->any())
                                    @foreach($errors->get('password') as $err)
                                    <div class="text text-danger text-center">{{ $err }}</div>
                                    @endforeach
                                    @endif
                                </div>

                                <div>
                                    <label><strong>Email</strong></label>
                                    <input type="email" name="email" placeholder="Email *" value="{{ old('email') }}" require>
                                    @if($errors->any())
                                    @foreach($errors->get('email') as $err)
                                    <div class="text text-danger text-center">{{ $err }}</div>
                                    @endforeach
                                    @endif
                                </div>

                                <div class="row">
                                    <label class="col-3"><strong>Giới tính</strong></label>
                                    <div class="row col-8">
                                        <label class="d-flex align-items-center"><input class="col-6" type="radio" name="gender" value="1" require>Nam</label>
                                        <label class="d-flex align-items-center"><input class="col-6" type="radio" name="gender" value="0" require>Nữ</label>
                                        @if($errors->any())
                                        @foreach($errors->get('gender') as $err)
                                        <div class="text text-danger" style="margin-left:20px">{{ $err }}</div>
                                        @endforeach
                                        @endif
                                    </div>
                                </div>

                                <div>
                                    <label><strong>Ngày tháng năm sinh</strong></label>
                                    <input type="date" name="date_of_birth" placeholder="Ngày tháng năm sinh" value="{{ old('date_of_birth') }}" require>
                                    @if($errors->any())
                                    @foreach($errors->get('date_of_birth') as $err)
                                    <div class="text text-danger text-center">{{ $err }}</div>
                                    @endforeach
                                    @endif
                                </div>

                                <div>
                                    <label><strong>Điện thoại</strong></label>
                                    <input type="tel" name="phone" placeholder="Điện thoại *" value="{{ old('phone') }}" require>
                                    @if($errors->any())
                                    @foreach($errors->get('phone') as $err)
                                    <div class="text text-danger text-center">{{ $err }}</div>
                                    @endforeach
                                    @endif
                                </div>

                                <div>
                                    <label><strong>Địa chỉ</strong></label>
                                    <input type="text" name="address" placeholder="Địa chỉ *" value="{{ old('address') }}" require>
                                    @if($errors->any())
                                    @foreach($errors->get('address') as $err)
                                    <div class="text text-danger text-center">{{ $err }}</div>
                                    @endforeach
                                    @endif
                                </div>

                                <div>
                                    <label><strong>Tỉnh/Thành phố</strong></label>
                                    <input type="text" name="city" placeholder="Chọn tỉnh/Thành phố" value="{{ old('city') }}" require>
                                    @if($errors->any())
                                    @foreach($errors->get('city') as $err)
                                    <div class="text text-danger text-center">{{ $err }}</div>
                                    @endforeach
                                    @endif
                                </div>

                                <div>
                                    <label><strong>Quận/Huyện</strong></label>
                                    <input type="text" name="district" placeholder="Chọn Quận/Huyện *" value="{{ old('district') }}" require>
                                    @if($errors->any())
                                    @foreach($errors->get('district') as $err)
                                    <div class="text text-danger text-center">{{ $err }}</div>
                                    @endforeach
                                    @endif
                                </div>

                                <div class="mt-5 d-flex justify-content-center align-items-center">
                                    <button type="submit" class="btn">Add</button>
                                </div>
                            </form>
                        </div>
                        <div class="col-1">
                            <button class="w-100 border border-0 mt-3 bg-white" style="color:red" onclick="document.getElementById('edit').style.display='none'"><strong>X</strong></button>
                        </div>
                    </div>
                </div>
            </div>

            <table class="table table-bodered table-hover table-striped">
                <thead>
                    <th>#</th>
                    <th>name</th>
                    <th>username</th>
                    <th>email</th>
                    <th>gender</th>
                    <th>date_of_birth</th>
                    <th>phone</th>
                    <th>address</th>
                    <th>city</th>
                    <th>district</th>
                    <th>action</th>
                </thead>
                <?php $no = 0 ?>
                @foreach($customers as $customer)
                <tfoot>
                    <tr>
                        <td> {{ $no++ }}</td>
                        <td> {{ $customer->name }} </td>
                        <td> {{ $customer->username }} </td>
                        <td> {{ $customer->email }} </td>
                        <td> {{ $customer->gender }} </td>
                        <td> {{ $customer->date_of_birth }} </td>
                        <td> {{ $customer->phone }} </td>
                        <td> {{ $customer->address }} </td>
                        <td> {{ $customer->city }} </td>
                        <td> {{ $customer->district }} </td>
                        <td class="row">
                            <a class="btn btn-success" style="margin-right:10px" onclick="document.getElementById('edit').style.display='block'">Edit</a>
                            <form action="{{ route('admin.destroy', $customer -> user_id) }}" onsubmit="return confirm('Delete?')">
                                @csrf
                                @method('DELETE')
                                <button class="btn btn-info">Delete</button>
                            </form>
                        </td>
                    </tr>
                </tfoot>
                @endforeach
            </table>
        </div>

        <!-- Control Sidebar -->
        <aside class="control-sidebar control-sidebar-dark">
            <!-- Control sidebar content goes here -->
        </aside>
        <!-- /.control-sidebar -->
    </div>
    <!-- ./wrapper -->

    <!-- jQuery -->
    <script src="plugins/jquery/jquery.min.js"></script>
    <!-- jQuery UI 1.11.4 -->
    <script src="plugins/jquery-ui/jquery-ui.min.js"></script>
    <!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
    <script>
        $.widget.bridge('uibutton', $.ui.button)
    </script>
    <!-- Bootstrap 4 -->
    <script src="plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
    <!-- ChartJS -->
    <script src="plugins/chart.js/Chart.min.js"></script>
    <!-- Sparkline -->
    <script src="plugins/sparklines/sparkline.js"></script>
    <!-- JQVMap -->
    <script src="plugins/jqvmap/jquery.vmap.min.js"></script>
    <script src="plugins/jqvmap/maps/jquery.vmap.usa.js"></script>
    <!-- jQuery Knob Chart -->
    <script src="plugins/jquery-knob/jquery.knob.min.js"></script>
    <!-- daterangepicker -->
    <script src="plugins/moment/moment.min.js"></script>
    <script src="plugins/daterangepicker/daterangepicker.js"></script>
    <!-- Tempusdominus Bootstrap 4 -->
    <script src="plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js"></script>
    <!-- Summernote -->
    <script src="plugins/summernote/summernote-bs4.min.js"></script>
    <!-- overlayScrollbars -->
    <script src="plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js"></script>
    <!-- AdminLTE App -->
    <script src="dist/js/adminlte.js"></script>
    <!-- AdminLTE for demo purposes -->
    <script src="dist/js/demo.js"></script>
    <!-- AdminLTE dashboard demo (This is only for demo purposes) -->
    <script src="dist/js/pages/dashboard.js"></script>
</body>

</html>
