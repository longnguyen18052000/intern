<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />

    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Hoàng hà mobi.com</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">

    <link rel="stylesheet" href="../../bootstrap/css/bootstrap.min.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" />
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css" />

    <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
    <script src="https://kit.fontawesome.com/c93a607241.js" crossorigin="anonymous"></script>

    <link rel="stylesheet" href="<?php echo asset('assets/css/index.css') ?>" type="text/css">
    <link rel="stylesheet" href="<?php echo asset('assets/css/login.css') ?>" type="text/css">
    <link rel="stylesheet" href="<?php echo asset('assets/css/wed_responsive.css') ?>" type="text/css">

    <link rel="stylesheet" href="<?php echo asset('assets/bootstrap/css/bootstrap.css') ?>" type="text/css">
    <link rel="stylesheet" href="<?php echo asset('assets/bootstrap/css/bootstrap.min.css') ?>" type="text/css">

    <script type="text/javascript" src="{{URL::asset('assets/bootstrap/js/bootstrap.js')}}"></script>
    <script type="text/javascript" src="{{URL::asset('assets/bootstrap/js/bootstrap.min.js')}}"></script>

    <style>
        body {
            background-color: #F4F4F4;
        }
    </style>
</head>

<body>
    <header>
        <div class="add">
            <img src="{{asset('images//bubble_00.dcaf1b50.svg')}}" alt="logo" />
        </div>
        <!-- top-navigation -->
        <div class="top-navigation">
            <div class="container d-flex top_header">
                <span><a href="#">Bản mobile</a></span>
                <span><a href="#">Giới thiệu</a></span>
                <span><a href="#">Sản phẩm đã xem</a></span>
                <span><a href="#">Trung tâm bảo hành</a></span>
                <span><a href="#">Hệ thống 99 siêuu thị</a></span>
                <span><a href="#">Tuyển dụng</a></span>
                <span><a href="#">Tra cứu đơn hàng</a></span>
                <span><a href="#" onclick="document.getElementById('login').style.display='block'">Đăng nhập</a></span>
            </div>
        </div>
        <!-- end top-navigation -->

        <!-- login -->
        <div id="login" class="login w3-modal">
            <div class="box-login bg-white">
                <div class="row">

                    <div class="img col-4 d-flex justify-content-center align-items-center">
                        <img src="{{ asset('images/login-bg.png') }}" alt="logo" />
                    </div>

                    <div class="col-1"></div>

                    <div class="content col-6">
                        <h1><strong>Đăng nhập</strong></h1>
                        <div class="mt-4 d-flex icon w-100">
                            <div class="facebook w-50">
                                <span><i class="fa fa-facebook"></i></span>
                                <span><strong>Tiếp tục với facebook</strong></span>
                            </div>
                            <div class="google w-50">
                                <span><i class="fa fa-google"></i></span>
                                <span><strong>Tiếp tục với google</strong></span>
                            </div>
                        </div>
                        <div class="mt-4 d-flex justify-content-between underline">
                            <span class="foot"></span>
                            <span>Hoặc</span>
                            <span class="foot"></span>
                        </div>

                        @if($errors->any())
                        @foreach($errors->all() as $err)
                        <p class="text text-danger">{{ $err }}</p>
                        @endforeach
                        @endif

                        <form action="{{ route('login.action') }}" method="POST" class="mt-4 login-form">
                            @csrf
                            <div>
                                <label><strong>Tài khoản</strong></label>
                                <input type="text" class="enter" name="name">
                            </div>

                            <div>
                                <label class="mt-3"><strong>Mật khẩu</strong></label>
                                <input type="password" class="enter" name="password">
                            </div>

                            <div class="d-flex">
                                <input type="checkbox" class="mt-3 check" name="checkbox">
                                <h6 class="mt-3">Nhớ đăng nhập</h6>
                            </div>

                            <div class="mt-3 click d-flex justify-content-between">
                                <button type="submit" class="btn btn-login">ĐĂNG NHẬP</button>
                                <a class="btn-register" id="btn-register" onclick="document.getElementById('resgiter').style.display='block',
                                    document.getElementById('login').style.display='none'">ĐĂNG KÝ</a>
                            </div>

                        </form>
                        <p class="mt-3 d-flex justify-content-end"><strong>Quên mật khẩu?</strong></p>
                    </div>

                    <div class="col-1">
                        <button class="w-100 border border-0 mt-3 bg-white" style="color:red" onclick="document.getElementById('login').style.display='none'"><strong>X</strong></span>
                    </div>

                </div>
            </div>
        </div>
        <!-- end login -->

        <!-- register -->
        <div id="resgiter" class="w3-modal resgiter">
            <div class="item mb-5">
                <div class="row">
                    <div class="img col-4 d-flex justify-content-center align-items-center">
                        <img src="{{ asset('images/login-bg.png') }}" alt="logo" />
                    </div>
                    <div class="col-1"></div>
                    <div class="col-6 content mt-5 mb-5">
                        <h2><strong>Đăng ký tài khoản</strong></h2>
                        <span>Chú ý các nội dung có dấu * bạn cần phải nhập</span>

                        @if($errors->any())
                        @foreach($errors->all() as $err)
                        <p class="text text-danger">{{ $err }}</p>
                        @endforeach
                        @endif

                        <form action="{{route ('register.action') }}" method="POST" class="w-100">
                            @csrf

                            <div>
                                <label><strong>Tài khoản</strong></label>
                                <input type="text" name="name" placeholder="Họ tên *" value=" {{ old('name') }}" require>
                            </div>

                            <div>
                                <label><strong>Họ Tên</strong></label>
                                <input type="text" name="username" placeholder="Họ tên *" value="{{ old('username') }}" require>
                            </div>

                            <div>
                                <label><strong>Mật khẩu</strong></label>
                                <input type="password" name="password" placeholder="Mật khẩu *" require>
                            </div>

                            <div>
                                <label><strong>Nhập lại mật khẩu</strong></label>
                                <input type="password" name="comfirm_password" placeholder="Nhập lại mật khẩu *" require>
                            </div>

                            <div>
                                <label><strong>Email</strong></label>
                                <input type="email" name="email" placeholder="Email *" value="{{ old('email') }}" require>
                            </div>

                            <div class="row">
                                <label class="col-3"><strong>Giới tính</strong></label>
                                <div class="row col-8">
                                    <label class="d-flex align-items-center"><input class="col-6" type="radio" name="gender" value="1" require>Nam</label>
                                    <label class="d-flex align-items-center"><input class="col-6" type="radio" name="gender" value="0" require>Nữ</label>
                                </div>
                            </div>

                            <div>
                                <label><strong>Ngày tháng năm sinh</strong></label>
                                <input type="text" name="date_of_birth" placeholder="Ngày tháng năm sinh" value="{{ old('date_of_birth') }}" require>
                            </div>

                            <div>
                                <label><strong>Điện thoại</strong></label>
                                <input type="tel" name="phone" placeholder="Điện thoại *" value="{{ old('phone') }}" require>
                            </div>

                            <div>
                                <label><strong>Địa chỉ</strong></label>
                                <input type="text" name="address" placeholder="Địa chỉ *" value="{{ old('address') }}" require>
                            </div>

                            <div>
                                <label><strong>Tỉnh/Thành phố</strong></label>
                                <input type="text" name="city" placeholder="Chọn tỉnh/Thành phố" value="{{ old('city') }}" require>
                            </div>

                            <div>
                                <label><strong>Quận/Huyện</strong></label>
                                <input type="text" name="district" placeholder="Chọn Quận/Huyện *" value="{{ old('district') }}" require>
                            </div>

                            <div class="mt-5 d-flex justify-content-center align-items-center">
                                <button type="submit" class="btn">Đăng ký tài khoản</button>
                            </div>
                        </form>
                    </div>
                    <div class="col-1">
                        <button class="w-100 border border-0 mt-3 bg-white" style="color:red" onclick="document.getElementById('resgiter').style.display='none'"><strong>X</strong></button>
                    </div>
                </div>
            </div>
        </div>
        <!-- end register -->

        <!-- logo and search box -->
        <div class="heading">
            <div class="container pb-4 pt-4 d-flex w-100 content" style="padding-right: 45px ;padding-left: 35px;">
                <div class="logo">
                    <img src="{{asset('images/logo-text.png')}}" alt="logo" />
                </div>
                <div class="d-flex align-items-center box_search">
                    <div class="w-100">
                        <form action="#" class="w-100 bg-white" method="post">
                            <input class="w-75" type="text" id="kwd" name="kwd" placeholder="Hôm nay bạn cần tìm gì?" />
                            <button type="submit" class="search">
                                <i class="fa fa-search"></i>
                            </button>
                        </form>
                    </div>
                </div>
                <div class="d-flex align-items-center text-white check">
                    <div class="check_order">
                        <a href="#" class="d-flex align-items-center text-decoration-none">
                            <i class="fa fa-truck text-white"></i>
                            <span>Kiểm tra đơn hàng</span>
                        </a>
                    </div>
                    <div class="cart">
                        <a href="#" class="d-flex justify-content-center align-items-center text-decoration-none">
                            <i class="fa fa-cart-arrow-down"></i>
                            <i class="fa fa-caret-left icon"></i>
                            <div class="text-white d-flex justify-content-center align-items-center">
                                0
                            </div>
                        </a>
                    </div>
                </div>
            </div>
        </div>
        <!-- logo and search box -->

        <!--header nav hover -->
        <nav>
            <div class="d-flex justify-content-center w-100">
                <div class="container nav-content" style="padding-right: 45px ;padding-left: 35px;">
                    <div class="content d-flex">
                        <a href="#" id="hover_phone">
                            <span><i class="fa-solid fa-mobile-screen"></i></span>
                            <span>ĐIỆN THOẠI</span>
                            <label></label>
                        </a>
                        <a href="#" id="hover_watch">
                            <span><i class="fa-solid fa-clock"></i></span>
                            <span>ĐỒNG HỒ</span>
                            <label></label>
                        </a>
                        <a href="#" id="hover_laptop">
                            <span><i class="fa-solid fa-laptop"></i></span>
                            <span>LAPTOP</span>
                            <label></label>
                        </a>
                        <a href="#" id="hover_tablet">
                            <span><i class="fa-solid fa-tablet"></i></span>
                            <span>TABLET</span>
                            <label></label>
                        </a>
                        <a href="#" id="hover_headPhone">
                            <span><i class="fa-solid fa-headphones"></i></span>
                            <span>ÂM THANH</span>
                            <label></label>
                        </a>
                        <a href="#" id="hover_smartHome">
                            <span><i class="fa-solid fa-house"></i></span>
                            <span>SMART HOME</span>
                            <label></label>
                        </a>
                        <a href="#" id="hover_accessory">
                            <span><i class="fa-solid fa-charging-station"></i></span>
                            <span>PHỤ KIỆN</span>
                            <label></label>
                        </a>
                        <a href="#" id="hover_playGame">
                            <span><i class="fa-solid fa-gamepad"></i></span>
                            <span>ĐỒ CHƠI CÔNG NGHỆ</span>
                            <label></label>
                        </a>
                        <a href="#" id="hover_mayTroi">
                            <span><i class="fa-solid fa-phone"></i></span>
                            <span>MÁY TRÔI</span>
                            <label></label>
                        </a>
                        <a href="#" id="hover_repair">
                            <span><i class="fa-solid fa-screwdriver-wrench"></i></span>
                            <span>SỬA CHỮA</span>
                            <label></label>
                        </a>
                        <a href="#" id="hover_sim">
                            <span><i class="fa-solid fa-sim-card"></i></span>
                            <span>SIM THẺ</span>
                            <label></label>
                        </a>
                        <a href="#">
                            <span><i class="fa-solid fa-newspaper"></i></span>
                            <span>TIN TỨC</span>
                            <label></label>
                        </a>
                        <a href="#" id="hover_flashSale">
                            <span><i class="fa-solid fa-bolt-lightning"></i></span>
                            <span>FLASH SALE</span>
                            <label></label>
                        </a>
                    </div>
                    <!-- hover phone -->
                    <div class="border border-1 hover_phone" id="hover_phone_id">
                        <div class="d-flex p-4">
                            <div class="hover_table">
                                <table class="w-100">
                                    <thead>
                                        <th>HÃNG SẢN XUẤT</th>
                                        <th></th>
                                        <th></th>
                                        <th>MỨC GIÁ</th>
                                        <th>QUAN TÂM NHẤT</th>
                                    </thead>

                                    <tfoot>
                                        <tr>
                                            <td>Iphone</td>
                                            <td>XOR</td>
                                            <td>Samsung</td>
                                            <td>Trên 100 triệu</td>
                                            <td>Hôm nay</td>
                                        </tr>
                                        <tr>
                                            <td>Xiaomi</td>
                                            <td>Reamle</td>
                                            <td>Nokia</td>
                                            <td>Dưới 100 triệu</td>
                                            <td>Tuần này</td>
                                        </tr>
                                        <tr>
                                            <td>OPPO</td>
                                            <td>Blackberry</td>
                                            <td>Vivo</td>
                                            <td>Từ 2 đến 3 triệu</td>
                                            <td>Tháng này</td>
                                        </tr>
                                        <tr>
                                            <td>Energizer</td>
                                            <td>Masstel</td>
                                            <td>Philips</td>
                                            <td>Từ 3 đến 4 triệu</td>
                                            <td>Tháng này</td>
                                        </tr>
                                        <tr>
                                            <td>Itel</td>
                                            <td>Bphone</td>
                                            <td>TECNO</td>
                                            <td>Từ 6 đến 8 triệu</td>
                                            <td>Năm nay</td>
                                        </tr>
                                        <tr>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td>Từ 15 đến 20 triệu</td>
                                            <td></td>
                                        </tr>
                                        <tr>
                                            <td><b>ĐIỆN THOẠI CAO CẤP</b></td>
                                            <td></td>
                                            <td></td>
                                            <td>Từ 20 đến 100 triệu</td>
                                            <td></td>
                                        </tr>
                                    </tfoot>
                                </table>
                            </div>
                            <div class="hover_img">
                                <img src="{{asset('images/GALAY A73 5G.png')}}" alt="logo" />
                            </div>
                        </div>
                    </div>
                    <!-- hover watch -->
                    <div class="border border-1 hover_phone" id="hover_watch_id">
                        <div class="p-4">
                            <table>
                                <thead>
                                    <th>ĐỒNG HỒ</th>
                                    <th></th>
                                    <th></th>
                                    <th></th>
                                </thead>
                                <tfoot>
                                    <tr>
                                        <td>Apple Watch</td>
                                        <td>Samsung</td>
                                        <td>Xiaomin</td>
                                        <td>Gramin</td>
                                    </tr>
                                    <tr>
                                        <td>Tic Watch</td>
                                        <td>Amazfic</td>
                                        <td>Đồng hồ trẻ em</td>
                                        <td>Huawei</td>
                                    </tr>
                                    <tr>
                                        <td>Masstel</td>
                                        <td>OPPO</td>
                                        <td>realme</td>
                                        <td>SoundPEATS</td>
                                    </tr>
                                    <tr>
                                        <td>Top Đồng hồ thông minh</td>
                                        <td>Top vòng đeo tay</td>
                                        <td>fitbit</td>
                                        <td></td>
                                    </tr>
                                </tfoot>
                            </table>
                        </div>
                    </div>
                    <!-- hover laptop -->
                    <div class="border border-1 hover_phone" id="hover_laptop_id">
                        <div class="row p-4">
                            <div class="col-4">
                                <table>
                                    <thead class="w-100">
                                        <th class="w-25">HÃNG SẢN XUẤT</th>
                                        <th class="w-25"></th>
                                        <th class="w-25"></th>
                                    </thead>
                                    <tfoot>
                                        <tr>
                                            <td>Mac</td>
                                            <td>Asus</td>
                                            <td>Dell</td>
                                        </tr>
                                        <tr>
                                            <td>GIGABYTE</td>
                                            <td>HP</td>
                                            <td>Huawei</td>
                                        </tr>
                                        <tr>
                                            <td>Lennovo</td>
                                            <td>Microsoft</td>
                                            <td>MSI</td>
                                        </tr>
                                    </tfoot>
                                </table>
                            </div>

                            <div class="col-8">
                                <table class="w-100">
                                    <thead class="w-100">
                                        <th class="w-50">PHÂN LOẠI SẢN PHẨM</th>
                                        <th class="w-50">MỨC GIÁ</th>
                                    </thead>
                                    <tfoot>
                                        <tr>
                                            <td>Cao cấp - Sang trọng</td>
                                            <td>Trên 20 triệu</td>
                                        </tr>
                                        <tr>
                                            <td>Đồ họa - Kĩ thuật</td>
                                            <td>Từ 12 đến 15 triệu</td>
                                        </tr>
                                        <tr>
                                            <td>Học tập - Văn phòng</td>
                                            <td>Từ 15 đến 20 triệu</td>
                                        </tr>
                                        <tr>
                                            <td>Laptop Gaming</td>
                                            <td></td>
                                        </tr>
                                        <tr>
                                            <td>Mỏng nhẹ</td>
                                            <td></td>
                                        </tr>
                                    </tfoot>
                                </table>
                            </div>
                        </div>
                    </div>
                    <!-- hover tablet -->
                    <div class="border border-1 hover_phone" id="hover_tablet_id">
                        <div class="p-3">
                            <table class="w-75">
                                <thead>
                                    <th class="w-25 pb-2">Hãng sản xuất</th>
                                    <th class="w-25"></th>
                                    <th class="w-25"></th>
                                </thead>
                                <tfoot>
                                    <tr>
                                        <td>Lennovo</td>
                                        <td>Microsoft</td>
                                        <td>Nokia</td>
                                    </tr>
                                    <tr>
                                        <td>Ipad</td>
                                        <td>Sámung</td>
                                        <td>Xiaomi</td>
                                    </tr>
                                    <tr>
                                        <td>Huawei</td>
                                        <td></td>
                                        <td></td>
                                    </tr>
                                </tfoot>
                            </table>
                        </div>
                    </div>
                    <!-- hover headPhone -->
                    <div class="border border-1 hover_phone" id="hover_headPhone_id">
                        <div class="w-75 p-3">
                            <table class="w-100">
                                <thead>
                                    <th>LOA</th>
                                    <th></th>
                                    <th>TAI NGHE</th>
                                    <th></th>
                                    <th></th>
                                </thead>
                                <tfoot>
                                    <tr>
                                        <td>Energizer</td>
                                        <td>Huawei</td>
                                        <td>Sony</td>
                                        <td>JBL</td>
                                        <td>Soundpeats</td>
                                    </tr>
                                    <tr>
                                        <td>LG</td>
                                        <td>Loa mic cầm tay</td>
                                        <td>Akg</td>
                                        <td>Apple AirPods</td>
                                        <td>Beats</td>
                                    </tr>
                                    <tr>
                                        <td>Marshall</td>
                                        <td>MONSTER</td>
                                        <td>Energizer</td>
                                        <td>Laylou</td>
                                        <td>Sony</td>
                                    </tr>
                                    <tr>
                                        <td>SoundPEATS</td>
                                        <td>Teakin</td>
                                        <td>iWalk</td>
                                        <td>LG</td>
                                        <td>MONSTER</td>
                                    </tr>
                                    <tr>
                                        <td>JBL</td>
                                        <td>Harman Kardon</td>
                                        <td>Motorola</td>
                                        <td>Nokia</td>
                                        <td>OPPO</td>
                                    </tr>
                                    <tr>
                                        <td>Samsung</td>
                                        <td>Sony</td>
                                        <td>PHILIPS</td>
                                        <td>Pioneer</td>
                                        <td>Pisen</td>
                                    </tr>
                                    <tr>
                                        <td>Apple</td>
                                        <td>Divoom</td>
                                        <td>Plantronios</td>
                                        <td>realme</td>
                                        <td>Samsung</td>
                                    </tr>
                                    <tr>
                                        <td>Anker</td>
                                        <td></td>
                                        <td>Sennheiser</td>
                                        <td>Xiaomi</td>
                                        <td></td>
                                    </tr>
                                </tfoot>
                            </table>
                        </div>
                    </div>
                    <!-- hover smartHome -->
                    <div class="border border-1 hover_phone" id="hover_smartHome_id">
                        <div class="p-3">
                            <p><strong>GIA DỤNG THÔNG MINH</strong></p>
                            <p>Máy lọc không khí</p>
                            <p>Robot hút bụi</p>
                            <p>Phụ kiện gia dụng</p>
                            <p>FPT Play box</p>
                            <p>Cân thông minh</p>
                            <p>DTH/Tivi box K+</p>
                            <p>Khuyến mại đồ gia dụng Xiaomi</p>
                            <p>Máy chiếu, ổ cắm điện</p>
                            <p>Thiết vị định vị thông minh</p>
                            <p>Camera thông minh</p>
                        </div>
                    </div>
                    <!-- phụ kiện -->
                    <div class="border border-1 hover_phone" id="hover_accessory_id">
                        <div class="row p-3">
                            <div class="col-3">
                                <p><strong>XẢ TỒN PHỤ KIỆN - GIÁ SỐC</strong></p>
                                <p><strong>PHỤ KIỆN APPLE</strong></p>
                                <p><strong>PHỤ KIỆN MÁY TÍNH</strong></p>
                                <p><strong>SẠC DỰ PHÒNG</strong></p>
                                <p><strong>CỦ SẠC, MÁY TÍNH</strong></p>
                                <p><strong>GÓI BẢO HÀNH VIPCARE</strong></p>
                            </div>
                            <div class="col-2">
                                <p><strong>ROBOT HÚT BỤI</strong></p>
                                <p><strong>MÁY LỌC KHÔNG KHÍ</strong></p>
                                <p><strong>TAY CẦM CHỐNG RUNG</strong></p>
                                <p><strong>CAMERA HÀNH TRÌNH</strong></p>
                            </div>
                            <div class="col-2">
                                <p><strong>TÚI XÁCH</strong></p>
                                <p><strong>LOA</strong></p>
                                <p><strong>BÚT CẢM ỨNG</strong></p>
                                <p><strong>TAI NGHE</strong></p>
                                <p><strong>PHỤ KIỆN HỌC SINH</strong></p>
                            </div>
                            <div class="col-2">
                                <p><strong>DÂY ĐEO ĐỒNG HỒ</strong></p>
                                <p><strong>MIẾNG DÁN MÀN HÌNH</strong></p>
                                <p><strong>CAMERA AN NINH</strong></p>
                                <p><strong>THIẾT BỊ MẠNG</strong></p>
                            </div>
                            <div class="col-3">
                                <p><strong>THẺ NHỚ - USB</strong></p>
                                <p><strong>BAO DA - ỐP LƯNG</strong></p>
                                <p><strong>THAY PIN, MÀN HÌNH CHÍNH HÃNG</strong></p>
                                <p>Màn hình Iphone</p>
                                <p>pin Iphone</p>
                            </div>
                        </div>
                    </div>
                    <!-- Đồ chơi công nghệ -->
                    <div class="border border-1 hover_phone" id="hover_playGame_id">
                        <div class="p-3">
                            <table>
                                <thead>
                                    <th class="pb-3">ĐỒ CHƠI CÔNG NGHỆ</th>
                                </thead>
                                <tfoot>
                                    <tr>
                                        <td class="p-1">Quạt để bàn</td>
                                    </tr>
                                    <tr>
                                        <td class="p-1">Dây đo nhịp tim</td>
                                    </tr>
                                    <tr>
                                        <td class="p-1">Tay cầm chống rung</td>
                                    </tr>
                                    <tr>
                                        <td class="p-1">Camera hành trình</td>
                                    </tr>
                                </tfoot>
                            </table>
                        </div>
                    </div>
                    <!-- máy trôi -->
                    <div class="border border-1 hover_phone" id="hover_mayTroi_id">
                        <div class="p-3">
                            <table class="w-100">
                                <thead>
                                    <th class="w-25 pb-3">HÀNG CŨ GIÁ RẺ</th>
                                    <th class="w-25"></th>
                                    <th class="w-25"></th>
                                </thead>
                                <tfoot>
                                    <tr>
                                        <td>Điện thoại thông minh</td>
                                        <td>Đồng hồ thông minh</td>
                                        <td>Máy tính bảng</td>
                                    </tr>
                                    <tr>
                                        <td>Laptop</td>
                                        <td>Loa</td>
                                        <td>Tai nghe</td>
                                    </tr>
                                    <tr>
                                        <td>Camera</td>
                                        <td>Củ sạc</td>
                                        <td>Dây cáp</td>
                                    </tr>
                                    <tr>
                                        <td>Máy lọc không khí</td>
                                        <td>Phụ kiện</td>
                                        <td>Sạc dự phòng</td>
                                    </tr>
                                    <tr>
                                        <td>Tay cầm chống rung</td>
                                        <td></td>
                                        <td></td>
                                    </tr>
                                </tfoot>
                            </table>
                        </div>
                    </div>
                    <!-- sửa chữa -->
                    <div class="border border-1 hover_phone" id="hover_repair_id">
                        <div class="p-3">
                            <div>
                                <table class="w-100">
                                    <thead>
                                        <th class="pb-3">ANDROID</th>
                                        <th></th>
                                        <th>IPHONE</th>
                                        <th></th>
                                        <th>APPLE IPHONE</th>
                                    </thead>
                                    <tfoot>
                                        <tr>
                                            <td>Pin</td>
                                            <td>Camera</td>
                                            <td>Camera trước</td>
                                            <td>Loa trong - Loa ngoài</td>
                                            <td>Pin</td>
                                        </tr>
                                        <tr>
                                            <td>Màn hình</td>
                                            <td>Vỏ và mặt lưng</td>
                                            <td>Vỏ - kính lưng</td>
                                            <td>Camera sau</td>
                                            <td>Cảm ứng</td>
                                        </tr>
                                        <tr>
                                            <td></td>
                                            <td></td>
                                            <td>Màn hình</td>
                                            <td>Các loại cáp</td>
                                            <td>Màn hình</td>
                                        </tr>
                                    </tfoot>
                                </table>
                            </div>
                        </div>
                    </div>
                    <!-- sim thẻ -->
                    <div class="border border-1 hover_phone" id="hover_sim_id">
                        <div class="p-3">
                            <p><strong>Sản phẩm hót</strong></p>
                        </div>
                    </div>
                    <!-- tin tức -->
                    <div></div>
                    <!-- Ưu đãi hót -->
                    <div class="border border-1 hover_phone" id="hover_flashSale_id">
                        <div class="p-3">
                            <p><strong>ƯU ĐÃI HÓT</strong></p>
                            <p>Khuyến mãi apple</p>
                            <p>Khuyến mãi đồng hồ</p>
                            <p>Khuyến mãi JBL, Harman Kardon</p>
                            <p>Khuyễn mãi laptop</p>
                            <p>Khuyến mãi LG</p>
                            <p>Khuyến mãi phụ kiện</p>
                            <p>Khuyến mãi Sony</p>
                            <p>Khuyến mại thiết bị đeo Xiaomi</p>
                            <p>Sản phẩm độc quyền</p>
                            <p>Sản phẩm mới apple</p>
                            <p>Top 5 tai nghe Bluetooth</p>
                            <p>Khuyến mãi Samsung</p>
                        </div>
                    </div>
                </div>
            </div>
        </nav>
        <!--end header nav hover -->
    </header>

    <!-- login -->
    <div id="login" class="login mt-5 mb-5">
        <div class="box-login bg-white">
            <div class="row">

                <div class="img col-4 d-flex justify-content-center align-items-center">
                    <img src="{{ asset('images/login-bg.png') }}" alt="logo" />
                </div>

                <div class="col-1"></div>

                <div class="content col-6">
                    <h1><strong>Đăng nhập</strong></h1>
                    <div class="mt-4 d-flex icon w-100">
                        <div class="facebook w-50">
                            <span><i class="fa fa-facebook"></i></span>
                            <span><strong>Tiếp tục với facebook</strong></span>
                        </div>
                        <div class="google w-50">
                            <span><i class="fa fa-google"></i></span>
                            <span><strong>Tiếp tục với google</strong></span>
                        </div>
                    </div>
                    <div class="mt-4 d-flex justify-content-between underline">
                        <span class="foot"></span>
                        <span>Hoặc</span>
                        <span class="foot"></span>
                    </div>

                    <form action="{{ route('login.action') }}" method="POST" class="mt-4 login-form">
                        @csrf
                        <div>
                            <label><strong>Tài khoản</strong></label>
                            <input type="text" class="enter" name="name">
                            @if($errors->any())
                                @foreach($errors->get('name') as $err)
                                    <div class="text text-danger">{{ $err }}</div>
                                @endforeach
                            @endif
                        </div>

                        <div>
                            <label class="mt-3"><strong>Mật khẩu</strong></label>
                            <input type="password" class="enter" name="password">
                            @if($errors->any())
                                @foreach($errors->get('password') as $err)
                                    <div class="text text-danger">{{ $err }}</div>
                                @endforeach
                            @endif
                        </div>

                        <div class="d-flex">
                            <input type="checkbox" class="mt-3 check" name="checkbox">
                            <h6 class="mt-3">Nhớ đăng nhập</h6>
                        </div>

                        <div class="mt-3 click d-flex justify-content-between">
                            <button type="submit" class="btn btn-login">ĐĂNG NHẬP</button>
                            <a class="btn-register" id="btn-register" href="{{ route('register') }}">ĐĂNG KÝ</a>
                        </div>
                    </form>
                    <p class="mt-3 d-flex justify-content-end"><strong>Quên mật khẩu?</strong></p>
                </div>

                <div class="col-1"></div>
            </div>
        </div>
    </div>
    <!-- end login -->

    <footer>
        <div class="container" style="padding-right: 45px ;padding-left: 35px;">
            <div class="end-content">
                <div class="content">
                    <div class="item d-flex">
                        <div class="item-content nowhite">
                            <h6>Hỗ trợ - Dịch vụ</h6>
                            <span>Mua hàng trả góp</span>
                            <span>Hướng dẫn đặt hàng và thanh toán</span>
                            <span>Chính sách bảo hành</span>
                            <span>Câu hỏi thường gặp</span>
                            <span>Tra cứu đơn hàng</span>
                            <span>Chính sách baoe mật</span>
                            <span>Chính sách hủy giao dịch, đổi trả</span>
                            <span>Chính sách giải quyết khiếu nại</span>
                            <span>Điều khoản mua bán hàng hóa</span>
                            <span>Phạm vi, điều khoản gói bảo hành mở rộng</span>
                        </div>
                        <div class="item-content nowhite">
                            <h6>Thông tin liên hệ</h6>
                            <span>Bán hàng online</span>
                            <span>Chăm sóc khách hàng</span>
                            <span>Hỗ trợ kỹ thuật</span>
                            <span>Hỗ trợ bảo hành và sửa chữa</span>
                            <span>Liên hệ khối văn phòng</span>
                        </div>
                        <div class="item-content nowhite">
                            <h6>Hệ thống 100 siêu thị trên toàn quốc</h6>
                            <span>Danh sách 100 siêu thị trên toàn quốc</span>
                        </div>
                        <div class="item-content">
                            <div class="item-phone">
                                <h6>Tổng đài</h6>
                                <span class="phone">1900.2091</span>
                            </div>
                        </div>
                        <div class="item-content">
                            <h6>Thanh toán miễn phí</h6>
                            <div>
                                <img src="{{asset('images/footer/logo-visa.png')}}" />
                                <img src="{{asset('images/footer/logo-master.png')}}" />
                                <img src="{{asset('images/footer/logo-jcb.png')}}" />
                                <img src="{{asset('images/footer/logo-samsungpay.png')}}" />
                                <img class="mt-2" src="{{asset('images/footer/logo-atm.png')}}" />
                                <img class="mt-2" src="{{asset('images/footer/logo-vnpay.png')}}" />
                            </div>
                        </div>
                        <div class="item-content">
                            <h6>Hình thức vận chuyển</h6>
                            <div>
                                <img src="{{asset('images/footer/nhattin.jpg')}}" />
                                <img src="{{asset('images/footer/vnpost.jpg')}}" />
                                <img class="mt-4" src="{{asset('images/footer/logo-bct.png')}}" />
                            </div>
                        </div>
                    </div>
                </div>
                <div class="info">
                    <span>© 2020. CÔNG TY CỔ PHẦN XÂY DỰNG VÀ ĐẦU TƯ THƯƠNG MẠI HOÀNG HÀ.
                        MST: 0106713191. (Đăng ký lần đầu: Ngày 15 tháng 12 năm 2014, Đăng
                        ký thay đổi ngày 29/12/2020)</span>
                    <span><strong>GP số 426/GP-TTĐT do sở TTTT Hà Nội cấp ngày 22/01/2021</strong></span>
                    <span>Địa chỉ: 26 Phù Đổng Thiên Vương, P. Phạm Đình Hổ, Q. Hai Bà Trưng,
                        Hà Nội. Điện thoại: 1900.2091. Chịu trách nhiệm nội dung: Hoàng Ngọc
                        Chiến.</span>
                    <span>Designed by: <strong>Kent Lee</strong> @kentlee.design</span>
                </div>
            </div>
        </div>
    </footer>
    <!--end Thông tin, địa chỉ -->

    <script type="text/javascript" src="{{URL::asset('assets/js/top_slide.js')}}"></script>
    <script type="text/javascript" src="{{URL::asset('assets/js/hover_phone.js')}}"></script>
    <script type="text/javascript" src="{{URL::asset('assets/js/flashSale_hour.js')}}"></script>
    <script type="text/javascript" src="{{URL::asset('assets/js/hover.js')}}"></script>
    <script type="text/javascript" src="{{URL::asset('assets/js/top_slide.js')}}"></script>
    <script type="text/javascript" src="{{URL::asset('assets/js/phone.js')}}"></script>

</body>

</html>
