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
                                <label><strong>Nhập lại mật khẩu</strong></label>
                                <input type="password" name="comfirm_password" placeholder="Nhập lại mật khẩu *" require>
                                @if($errors->any())
                                @foreach($errors->get('comfirm_password') as $err)
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
            <div class="container pb-4 pt-4 d-flex w-100 content">
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
            <div class="d-flex justify-content-center w-100" id="myNavContent">
                <div class="container nav-content">
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

    <!-- slide show -->
    <section class="next-slide">
        <div class="container mt-4 slideshow">
            <div class="slideshow-container">
                <!-- Full-width images with number and caption text -->
                <div class="mySlides">
                    <img class="w-100" src="{{asset('images/top-slider/macbook-air-m1-02.jpg')}}" alt="macbook-air-m1-02" />
                </div>

                <div class="mySlides">
                    <img class="w-100" src="{{asset('images/top-slider/banner-web.jpg')}}" alt="macbook-air-m1-02" />
                </div>

                <div class="mySlides">
                    <img class="w-100" src="{{asset('images/top-slider/he-toi-nokia-moi-1200x382.jpg')}}" alt="macbook-air-m1-02" />
                </div>

                <div class="mySlides">
                    <img class="w-100" src="{{asset('images/top-slider/note-10-pro-web.png')}}" alt="macbook-air-m1-02" />
                </div>

                <!-- Next and previous buttons -->
                <a class="prev text-decoration-none" onclick="plusSlides(-1)">&#10094;</a>
                <a class="next text-decoration-none" onclick="plusSlides(1)">&#10095;</a>

                <div class="icon">
                    <div class="item">
                        <a href="#" class="facebook"><i class="fa fa-facebook"></i></a>
                        <a href="#" class="youtobe"><i class="fa fa-youtube"></i></a>
                        <a href="#" class="instagram"><i class="fa fa-instagram"></i></a>
                        <a href="#" class="tiktok"><i class="fa-brands fa-tiktok"></i></a>
                    </div>
                </div>
            </div>
            <!-- The dots/circles -->
            <div class="d-flex justify-content-center align-items-center content-dot w-100 mt-3">
                <div class="dot border border-1">
                    <span>Macbook Air giá tốt</span>
                </div>
                <div class="dot border border-1">
                    <span>Mở bán Nokia C21</span>
                </div>
                <div class="dot border border-1">
                    <span>Tuần lễ Lennovo - Siêu sale bùng nổ</span>
                </div>
                <div class="dot border border-1">
                    <span>Tai nghe Apple AirPods - Giá sốc</span>
                </div>
            </div>
        </div>
    </section>
    <!-- end slide show -->

    <!-- galaxy a73 5d -->
    <section>
        <div class="container galaxy padding-content mt-5">
            <div class="quick-sales mt-4 mb-5 d-flex">
                <div class="item">
                    <a href="#">
                        <img src="{{asset('images/chuyen-trang-samsung2.png')}}" title="Chuyên trang Samsung" alt="chuyen-trang-samsung2" />
                    </a>
                </div>
                <div class="item">
                    <a href="#">
                        <img src="{{asset('images/sanphamhot-reno7.jpg')}}" title="Chuyên trang Samsung" alt="chuyen-trang-samsung2" />
                    </a>
                </div>
                <div class="item">
                    <a href="#">
                        <img src="{{asset('images/hotsale-samsung-a33-a53-5g-1200x628.jpg')}}" title="Chuyên trang Samsung" alt="chuyen-trang-samsung2" />
                    </a>
                </div>
                <div class="item">
                    <a href="#">
                        <img src="{{asset('images/apple.jpg')}}" title="Chuyên trang Samsung" alt="chuyen-trang-samsung2" />
                    </a>
                </div>
            </div>
        </div>
    </section>
    <!--end galaxy a73 5d -->

    <!-- flash sale online -->
    <section>
        <div class="container padding-content">
            <div class="flash-sale d-flex align-items-center">
                <div class="mb-3 text">
                    F<i class="fa-solid fa-bolt-lightning"></i>ASH SALE ONLINE
                </div>
                <div class="mb-3 hour">
                    <strong id="first-hour"></strong>
                    <strong id="last-hour"></strong>
                    <span>:</span>
                    <strong id="first-minutes"></strong>
                    <strong id="last-minutes"></strong>
                    <span>:</span>
                    <strong id="first-seconds"></strong>
                    <strong id="last-seconds"></strong>
                </div>
            </div>
        </div>
    </section>
    <!--end flash sale online -->

    <!-- Samsung Galaxy A52s -->
    <section>
        <div class="container padding-content">
            <a href="#">
                <img class="w-100" src="{{asset('images/Samsung Galaxy A52s.png')}}" title="Chuyên trang Samsung" alt="chuyen-trang-samsung2" />
            </a>
        </div>
    </section>
    <!--end Samsung Galaxy A52s -->

    <!-- khuyến mãi -->
    <section>
        <div class="container pb-5 sale">
            <div class="mt-3 mb-3 box-home-text">
                <div class="item">
                    <h4>
                        <a class="text-white text-decoration-none" href="#"> APPLE AUTHORISED RESELLER </a>
                    </h4>
                </div>
            </div>
            <div class="d-flex box-home">
                <div class="item pb-2 border border-1" id="item1">
                    <div class="img mt-1">
                        <img class="img_apple" src="{{asset('images/box-home/apple.png')}}" />
                        <img class="giasoc" src="{{asset('images/gia-soc.png')}}" />
                        <a href="#" class="d-flex justify-content-center align-items-center">
                            <img src="{{asset('images/box-home/image-removebg-preview-5.png')}}" />
                        </a>
                        <div class="flash">
                            <i class="fa-solid fa-bolt"></i>giảm 8,000,000 <u>đ</u>
                        </div>
                    </div>
                    <div class="text-center money mt-3">
                        <strong>Apple IPhone 11 - 128GB - chính hãng VN/A</strong>
                        <div>
                            <strong>13,190,000 <u>đ</u></strong>
                            <del>21,990,000 <u>đ</u></del>
                        </div>
                    </div>
                    <div class="note mt-4">
                        <label title="Giảm thêm 250.000đ khi thanh toán qua VNPAY (từ ngày 18/04 - 30/04 - số lượng có hạn)">
                            <span>KM</span>
                            Giảm thêm 250.000 <u>đ</u> khi thanh toán q...
                            <strong>VÀ 4 KM KHÁC</strong>
                        </label>
                    </div>
                    <div class="attention" id="attention1">
                        <div class="content">
                            <label>
                                <span>KM</span>
                                Giảm thêm 250.000 khi thanh toán qua VNPAY-số lượng có hạn
                            </label>
                            <label>
                                <span>KM</span>
                                Khuyến mại, thu cũ - lên đời iphone 13 Series
                            </label>
                            <label>
                                <span>KM</span>
                                Tặng sim data mobifone Hera 5G (2.5G/ngày) (chưa bao gồm tháng đầu tiên)- lưu ý chỉ mua trực tiếp tại
                                cửa hàng, không áp dụng shop SIS Hà Nội
                            </label>
                            <label>
                                <span>KM</span>
                                Mua kèm củ sạc nhanh Innostyle chính hãng với 290.000đ
                            </label>
                            <label>
                                <span>KM</span>
                                Tặng sim data Heraplus ưu đãi 6GB/ngày(chưa bao gồm tháng đầu tiên) áp dụng khi mua hàng online
                            </label>
                        </div>
                    </div>
                </div>
                <div class="item pb-2 border border-1" id="item2">
                    <div class="img mt-1">
                        <img class="img_apple" src="{{asset('images/box-home/apple.png')}}" />
                        <a href="#" class="d-flex justify-content-center align-items-center">
                            <img src="{{asset('images/box-home/image-removebg-preview.png')}}" />
                        </a>
                    </div>
                    <div class="text-center money mt-3">
                        <strong>Apple iPad Pro M1 12.9" -(2021)- Wifi 128GB - Chính hãng Apple
                            Việt Nam
                        </strong>
                        <div>
                            <strong>24,490,000 <u>đ</u></strong>
                        </div>
                    </div>
                    <div class="note mt-3">
                        <label title="Giảm thêm 250.000đ khi thanh toán qua VNPAY (từ ngày 18/04 - 30/04 - số lượng có hạn)">
                            <span>KM</span>
                            Tặng sim data mobifone hera 5G (2.5...
                            <strong>VÀ 4 KM KHÁC</strong>
                        </label>
                    </div>
                    <div class="attention" id="attention2">
                        <div class="content">
                            <label>
                                <span>KM</span>
                                Giảm thêm 250.000 khi thanh toán qua VNPAY-số lượng có hạn
                            </label>
                            <label>
                                <span>KM</span>
                                Khuyến mại, thu cũ - lên đời iphone 13 Series
                            </label>
                            <label>
                                <span>KM</span>
                                Tặng sim data mobifone Hera 5G (2.5G/ngày) (chưa bao gồm tháng đầu tiên)- lưu ý chỉ mua trực tiếp tại
                                cửa hàng, không áp dụng shop SIS Hà Nội
                            </label>
                            <label>
                                <span>KM</span>
                                Mua kèm củ sạc nhanh Innostyle chính hãng với 290.000đ
                            </label>
                            <label>
                                <span>KM</span>
                                Tặng sim data Heraplus ưu đãi 6GB/ngày(chưa bao gồm tháng đầu tiên) áp dụng khi mua hàng online
                            </label>
                        </div>
                    </div>
                </div>
                <div class="item item1 pb-2 border border-1" id="item3">
                    <div class="img mt-1">
                        <img class="img_apple" src="{{asset('images/box-home/apple.png')}}" />
                        <img class="giasoc" src="{{asset('images/gia-soc.png')}}" />
                        <a href="#" class="d-flex justify-content-center align-items-center">
                            <img src="{{asset('images/box-home/macmoi256.png')}}" />
                        </a>
                        <div class="flash">
                            <i class="fa-solid fa-bolt"></i>giảm 5,000,000 <u>đ</u>
                        </div>
                    </div>
                    <div class="text-center money mt-3">
                        <strong>Macbook Air 13" 2020 - M1 256GB - Chính hãng Apple Việt
                            Nam</strong>
                        <div>
                            <strong>22,990,000 <u>đ</u></strong>
                            <del>22,990,000 <u>đ</u></del>
                        </div>
                    </div>
                    <div class="note mt-4">
                        <label title="Giảm thêm 250.000đ khi thanh toán qua VNPAY (từ ngày 18/04 - 30/04 - số lượng có hạn)">
                            <span>KM</span>
                            Giảm 300,000<u>đ</u> khi thanh toán qua VN...
                            <strong>VÀ 2 KM KHÁC</strong>
                        </label>
                    </div>
                    <div class="attention" id="attention3">
                        <div class="content">
                            <label>
                                <span>KM</span>
                                Giảm thêm 250.000 khi thanh toán qua VNPAY-số lượng có hạn
                            </label>
                            <label>
                                <span>KM</span>
                                Khuyến mại, thu cũ - lên đời iphone 13 Series
                            </label>
                            <label>
                                <span>KM</span>
                                Tặng sim data mobifone Hera 5G (2.5G/ngày) (chưa bao gồm tháng đầu tiên)- lưu ý chỉ mua trực tiếp tại
                                cửa hàng, không áp dụng shop SIS Hà Nội
                            </label>
                            <label>
                                <span>KM</span>
                                Mua kèm củ sạc nhanh Innostyle chính hãng với 290.000đ
                            </label>
                            <label>
                                <span>KM</span>
                                Tặng sim data Heraplus ưu đãi 6GB/ngày(chưa bao gồm tháng đầu tiên) áp dụng khi mua hàng online
                            </label>
                        </div>
                    </div>
                </div>
                <div class="item item1 pb-2 border border-1" id="item4">
                    <div class="img mt-1">
                        <img class="img_apple" src="{{asset('images/box-home/apple.png')}}" />
                        <a href="#" class="d-flex justify-content-center align-items-center">
                            <img src="{{asset('images/box-home/image-removebg-preview-4.png')}}" />
                        </a>
                    </div>
                    <div class="text-center money mt-3">
                        <strong>Apple IPhone 13 Pro Max - Chính hãng VN/A</strong>
                        <div>
                            <strong>28,950,000 <u>đ</u></strong>
                        </div>
                    </div>
                    <div class="note mt-4">
                        <label title="Giảm thêm 250.000đ khi thanh toán qua VNPAY (từ ngày 18/04 - 30/04 - số lượng có hạn)">
                            <span>KM</span>
                            Giảm 300,000<u>đ</u> khi thanh toán qua VN...
                            <strong>VÀ 2 KM KHÁC</strong>
                        </label>
                    </div>
                    <div class="attention" id="attention4">
                        <div class="content">
                            <label>
                                <span>KM</span>
                                Giảm thêm 250.000 khi thanh toán qua VNPAY-số lượng có hạn
                            </label>
                            <label>
                                <span>KM</span>
                                Khuyến mại, thu cũ - lên đời iphone 13 Series
                            </label>
                            <label>
                                <span>KM</span>
                                Tặng sim data mobifone Hera 5G (2.5G/ngày) (chưa bao gồm tháng đầu tiên)- lưu ý chỉ mua trực tiếp tại
                                cửa hàng, không áp dụng shop SIS Hà Nội
                            </label>
                            <label>
                                <span>KM</span>
                                Mua kèm củ sạc nhanh Innostyle chính hãng với 290.000đ
                            </label>
                            <label>
                                <span>KM</span>
                                Tặng sim data Heraplus ưu đãi 6GB/ngày(chưa bao gồm tháng đầu tiên) áp dụng khi mua hàng online
                            </label>
                        </div>
                    </div>
                </div>
                <div class="item item1 pb-2 border border-1" id="item5">
                    <div>
                        <img class="img_apple" src="{{asset('images/box-home/apple.png')}}" />
                        <a href="#" class="d-flex justify-content-center align-items-center">
                            <img src="{{asset('images/box-home/image-removebg-preview-4.png')}}" />
                        </a>
                    </div>
                    <div class="text-center money mt-3">
                        <strong>Apple IPhone 13 Pro Max 256GB - Chính hãng VN/A</strong>
                        <div>
                            <strong>28,950,000 <u>đ</u></strong>
                        </div>
                    </div>
                    <div class="note mt-4">
                        <label title="Giảm thêm 250.000đ khi thanh toán qua VNPAY (từ ngày 18/04 - 30/04 - số lượng có hạn)">
                            <span>KM</span>
                            Giảm 300,000<u>đ</u> khi thanh toán qua VN...
                            <strong>VÀ 2 KM KHÁC</strong>
                        </label>
                    </div>
                    <div class="attention" id="attention5">
                        <div class="content">
                            <label>
                                <span>KM</span>
                                Giảm thêm 250.000 khi thanh toán qua VNPAY-số lượng có hạn
                            </label>
                            <label>
                                <span>KM</span>
                                Khuyến mại, thu cũ - lên đời iphone 13 Series
                            </label>
                            <label>
                                <span>KM</span>
                                Tặng sim data mobifone Hera 5G (2.5G/ngày) (chưa bao gồm tháng đầu tiên)- lưu ý chỉ mua trực tiếp tại
                                cửa hàng, không áp dụng shop SIS Hà Nội
                            </label>
                            <label>
                                <span>KM</span>
                                Mua kèm củ sạc nhanh Innostyle chính hãng với 290.000đ
                            </label>
                            <label>
                                <span>KM</span>
                                Tặng sim data Heraplus ưu đãi 6GB/ngày(chưa bao gồm tháng đầu tiên) áp dụng khi mua hàng online
                            </label>
                        </div>
                    </div>
                </div>
            </div>
            <div class="d-flex box-home mt-2">
                <div class="item pb-2 border border-1" id="item6">
                    <div class="img mt-1">
                        <img class="img_apple" src="{{asset('images/box-home/apple.png')}}" />
                        <img class="giasoc" src="{{asset('images/gia-soc.png')}}" />
                        <a href="#" class="d-flex justify-content-center align-items-center">
                            <img src="{{asset('images/box-home/image-removebg-preview-5.png')}}" />
                        </a>
                        <div class="flash">
                            <i class="fa-solid fa-bolt"></i>giảm 8,300,000 <u>đ</u>
                        </div>
                    </div>
                    <div class="text-center money mt-3">
                        <strong>Apple IPhone 11 - 64GB - chính hãng VN/A</strong>
                        <div>
                            <span><strong>11,690,000 <u>đ</u></strong></span>
                            <del>29,990,000 <u>đ</u></del>
                        </div>
                    </div>
                    <div class="note mt-4">
                        <label title="Giảm thêm 250.000đ khi thanh toán qua VNPAY (từ ngày 18/04 - 30/04 - số lượng có hạn)">
                            <span>KM</span>
                            Giảm thêm 250.000 <u>đ</u> khi thanh toán q...
                            <strong>VÀ 5 KM KHÁC</strong>
                        </label>
                    </div>
                    <div class="attention" id="attention6">
                        <div class="content">
                            <label>
                                <span>KM</span>
                                Giảm thêm 250.000 khi thanh toán qua VNPAY-số lượng có hạn
                            </label>
                            <label>
                                <span>KM</span>
                                Khuyến mại, thu cũ - lên đời iphone 13 Series
                            </label>
                            <label>
                                <span>KM</span>
                                Tặng sim data mobifone Hera 5G (2.5G/ngày) (chưa bao gồm tháng đầu tiên)- lưu ý chỉ mua trực tiếp tại
                                cửa hàng, không áp dụng shop SIS Hà Nội
                            </label>
                            <label>
                                <span>KM</span>
                                Mua kèm củ sạc nhanh Innostyle chính hãng với 290.000đ
                            </label>
                            <label>
                                <span>KM</span>
                                Tặng sim data Heraplus ưu đãi 6GB/ngày(chưa bao gồm tháng đầu tiên) áp dụng khi mua hàng online
                            </label>
                        </div>
                    </div>
                </div>
                <div class="item pb-2 border border-1" id="item7">
                    <div class="img mt-1">
                        <img class="img_apple" src="{{asset('images/box-home/apple.png')}}" />
                        <img class="giasoc" src="{{asset('images/gia-soc.png')}}" />
                        <a href="#" class="d-flex justify-content-center align-items-center">
                            <img src="{{asset('images/box-home/image-removebg-preview-2.png')}}" />
                        </a>
                    </div>
                    <div class="text-center money mt-3">
                        <strong>Apple IPhone 13 - chính hãng <br />
                            VN/A</strong>
                        <div>
                            <strong>19,900,000 <u>đ</u></strong>
                        </div>
                    </div>
                    <div class="note mt-4">
                        <label title="Giảm thêm 250.000đ khi thanh toán qua VNPAY (từ ngày 18/04 - 30/04 - số lượng có hạn)">
                            <span>KM</span>
                            Giảm thêm 300.000 <u>đ</u> khi thanh toán q...
                            <strong>VÀ 5 KM KHÁC</strong>
                        </label>
                    </div>
                    <div class="attention" id="attention7">
                        <div class="content">
                            <label>
                                <span>KM</span>
                                Giảm thêm 250.000 khi thanh toán qua VNPAY-số lượng có hạn
                            </label>
                            <label>
                                <span>KM</span>
                                Khuyến mại, thu cũ - lên đời iphone 13 Series
                            </label>
                            <label>
                                <span>KM</span>
                                Tặng sim data mobifone Hera 5G (2.5G/ngày) (chưa bao gồm tháng đầu tiên)- lưu ý chỉ mua trực tiếp tại
                                cửa hàng, không áp dụng shop SIS Hà Nội
                            </label>
                            <label>
                                <span>KM</span>
                                Mua kèm củ sạc nhanh Innostyle chính hãng với 290.000đ
                            </label>
                            <label>
                                <span>KM</span>
                                Tặng sim data Heraplus ưu đãi 6GB/ngày(chưa bao gồm tháng đầu tiên) áp dụng khi mua hàng online
                            </label>
                        </div>
                    </div>
                </div>
                <div class="item pb-2 border border-1" id="item8">
                    <div class="img mt-1">
                        <img class="img_apple" src="{{asset('images/box-home/apple.png')}}" />>
                        <a href="#" class="d-flex justify-content-center align-items-center">
                            <img src="{{asset('images/box-home/image-removebg-preview-3.png')}}" />
                        </a>
                        <div class="flash">
                            <i class="fa-solid fa-bolt"></i>giảm 3,740,000 <u>đ</u>
                        </div>
                    </div>
                    <div class="text-center money mt-3">
                        <strong>Apple IPhone 13 Pro - chính hãng <br />
                            VN/A</strong>
                        <div>
                            <strong>26,750,000 <u>đ</u></strong>
                            <del>30,490,000 <u>đ</u></del>
                        </div>
                    </div>
                    <div class="note mt-4">
                        <label title="Giảm thêm 250.000đ khi thanh toán qua VNPAY (từ ngày 18/04 - 30/04 - số lượng có hạn)">
                            <span>KM</span>
                            Giảm thêm 250.000 <u>đ</u> khi thanh toán q...
                            <strong>VÀ 5 KM KHÁC</strong>
                        </label>
                    </div>
                    <div class="attention" id="attention8">
                        <div class="content">
                            <label>
                                <span>KM</span>
                                Giảm thêm 250.000 khi thanh toán qua VNPAY-số lượng có hạn
                            </label>
                            <label>
                                <span>KM</span>
                                Khuyến mại, thu cũ - lên đời iphone 13 Series
                            </label>
                            <label>
                                <span>KM</span>
                                Tặng sim data mobifone Hera 5G (2.5G/ngày) (chưa bao gồm tháng đầu tiên)- lưu ý chỉ mua trực tiếp tại
                                cửa hàng, không áp dụng shop SIS Hà Nội
                            </label>
                            <label>
                                <span>KM</span>
                                Mua kèm củ sạc nhanh Innostyle chính hãng với 290.000đ
                            </label>
                            <label>
                                <span>KM</span>
                                Tặng sim data Heraplus ưu đãi 6GB/ngày(chưa bao gồm tháng đầu tiên) áp dụng khi mua hàng online
                            </label>
                        </div>
                    </div>
                </div>
                <div class="item pb-2 border border-1" id="item9">
                    <div class="img mt-1">
                        <img class="img_apple" src="{{asset('images/box-home/apple.png')}}" />
                        <img class="giasoc" src="{{asset('images/gia-soc.png')}}" />
                        <a href="#" class="d-flex justify-content-center align-items-center">
                            <img src="{{asset('images/box-home/Tai nghe Apple AirPods Pro.png')}}" />
                        </a>
                        </a>
                        <div class="flash">
                            <i class="fa-solid fa-bolt"></i>giảm 8,300,000 <u>đ</u>
                        </div>
                    </div>
                    <div class="text-center money mt-3">
                        <strong>Apple AirPods Pro - chính hãng Apple (MLWK3ZP/A,
                            magsafe)</strong>
                        <div>
                            <span><strong>4,590,000 <u>đ</u></strong></span>
                            <del>7,990,000 <u>đ</u></del>
                        </div>
                    </div>
                    <div class="note mt-4">
                        <label title="Giảm thêm 250.000đ khi thanh toán qua VNPAY (từ ngày 18/04 - 30/04 - số lượng có hạn)">
                            <span>KM</span>
                            Thanh toán qua VNPAY - giảm 50.000... <u>đ</u>
                        </label>
                    </div>
                    <div class="attention" id="attention9">
                        <div class="content">
                            <label>
                                <span>KM</span>
                                Giảm thêm 250.000 khi thanh toán qua VNPAY-số lượng có hạn
                            </label>
                            <label>
                                <span>KM</span>
                                Khuyến mại, thu cũ - lên đời iphone 13 Series
                            </label>
                            <label>
                                <span>KM</span>
                                Tặng sim data mobifone Hera 5G (2.5G/ngày) (chưa bao gồm tháng đầu tiên)- lưu ý chỉ mua trực tiếp tại
                                cửa hàng, không áp dụng shop SIS Hà Nội
                            </label>
                            <label>
                                <span>KM</span>
                                Mua kèm củ sạc nhanh Innostyle chính hãng với 290.000đ
                            </label>
                            <label>
                                <span>KM</span>
                                Tặng sim data Heraplus ưu đãi 6GB/ngày(chưa bao gồm tháng đầu tiên) áp dụng khi mua hàng online
                            </label>
                        </div>
                    </div>
                </div>
                <div class="item pb-2 border border-1" id="item10">
                    <div class="img mt-1">
                        <img class="img_apple" src="{{asset('images/box-home/apple.png')}}" />
                        <a href="#" class="d-flex justify-content-center align-items-center">
                            <img src="{{asset('images/box-home/image-removebg-preview-28.png')}}" />
                        </a>
                    </div>
                    <div class="text-center money mt-3">
                        <strong>Apple Watch Series 7 GPS, 41 mm - Viền nhôm dây cao su - chính
                            hãng VN/A</strong>
                        <div>
                            <strong>9,590,000 <u>đ</u></strong>
                        </div>
                    </div>
                    <div class="note mt-3">
                        <label title="Giảm thêm 250.000đ khi thanh toán qua VNPAY (từ ngày 18/04 - 30/04 - số lượng có hạn)">
                            <span>KM</span>
                            Thanh toán qua VNPAY - giảm 50.000... <u>đ</u>
                        </label>
                    </div>
                    <div class="attention" id="attention10">
                        <div class="content">
                            <label>
                                <span>KM</span>
                                Giảm thêm 250.000 khi thanh toán qua VNPAY-số lượng có hạn
                            </label>
                            <label>
                                <span>KM</span>
                                Khuyến mại, thu cũ - lên đời iphone 13 Series
                            </label>
                            <label>
                                <span>KM</span>
                                Tặng sim data mobifone Hera 5G (2.5G/ngày) (chưa bao gồm tháng đầu tiên)- lưu ý chỉ mua trực tiếp tại
                                cửa hàng, không áp dụng shop SIS Hà Nội
                            </label>
                            <label>
                                <span>KM</span>
                                Mua kèm củ sạc nhanh Innostyle chính hãng với 290.000đ
                            </label>
                            <label>
                                <span>KM</span>
                                Tặng sim data Heraplus ưu đãi 6GB/ngày(chưa bao gồm tháng đầu tiên) áp dụng khi mua hàng online
                            </label>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- end khuyến mãi -->

    <!-- hotsale -->
    <section>
        <div class="container padding-content mb-3">
            <img class="w-100" src="{{asset('images/hotsale-samsung-a33-a53-5g-1200x200.jpg')}}" />
        </div>
    </section>
    <!--end hotsale -->

    <!-- có thể bạn thích -->
    <section>
        <div class="container padding-content mb-4">
            <div class="mt-3 mb-3 box-home-like">
                <div class="item">
                    <h4>
                        <a class="text-black text-decoration-none" href="#"> CÓ THỂ BẠN THÍCH </a>
                    </h4>
                </div>
            </div>
            <div class="like d-flex">
                <div class="item border border-1">
                    <div class="d-flex justify-content-center">
                        <img src="{{asset('images/like/image-removebg-preview-11.png')}}" />
                    </div>
                    <div class="mt-3 mb-3 text-center money">
                        <strong>Apple IPhone 13 - chính <br />
                            hãng VN/A</strong>
                        <div>
                            <strong>19,000,000 <u>đ</u></strong>
                        </div>
                    </div>
                </div>
                <div class="item border border-1">
                    <div class="d-flex justify-content-center">
                        <img src="{{asset('images/like/image-removebg-preview-2.png')}}" />
                    </div>
                    <div class="mt-3 mb-3 text-center money">
                        <strong>Apple Watch Series 6 GPS, <br />
                            40mm Aluminum case wi...</strong>
                        <div>
                            <strong>8,490,000 <u>đ</u></strong><del>12,990,000 <u>đ</u></del>
                        </div>
                    </div>
                </div>
                <div class="item border border-1">
                    <div class="d-flex justify-content-center">
                        <img src="{{asset('images/like/den-f.png')}}" />
                    </div>
                    <div class="mt-3 mb-3 text-center money">
                        <strong>Samsung galaxy Z fold 3 5G <br />
                            - 256 GB - Chính hãng</strong>
                        <div>
                            <strong>36,190,000 <u>đ</u></strong><del>41,990,000 <u>đ</u></del>
                        </div>
                    </div>
                </div>
                <div class="item border border-1">
                    <div class="d-flex justify-content-center">
                        <img src="{{asset('images/like/11t-3.png')}}" />
                    </div>
                    <div class="mt-3 mb-3 text-center money">
                        <strong>Xiaomi 11T 5G -<br />
                            8GB/128GB - Chính hãng...</strong>
                        <div>
                            <strong>9,290,000 <u>đ</u></strong><del>10,990,000 <u>đ</u></del>
                        </div>
                    </div>
                </div>
                <div class="item border border-1">
                    <div class="mt-3 mb-3 text-center money">
                        <img src="{{asset('images/like/image-removebg-preview-7.png')}}" />
                    </div>
                    <div class="mb-3 text-center money">
                        <strong>POCO M4 Pro 5G <br />
                            4GB/64GB - Chính hãng</strong>
                        <div>
                            <strong>4,490,000 <u>đ</u></strong><del>5,490,000 <u>đ</u></del>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--end có thể bạn thích -->

    <!-- Điện thoại nổi bật -->
    <section>
        <div class="container padding-content mb-5 phone">
            <div class="mt-3 mb-3 box-home-text">
                <div class="item">
                    <h4>
                        <a class="text-white text-decoration-none" href="#"> ĐIỆN THOẠI NỔI BẬT</a>
                    </h4>
                </div>
            </div>
            <div class="d-flex mt-3 phone_context">
                <div class="item border border-1" id="telephone1">
                    <div class="img d-flex flex-column justify-content-center mt-4">
                        <div class="d-flex justify-content-center">
                            <img src="{{asset('images/phone_noibat/image-removebg-preview-3.png')}}" />
                        </div>
                        <div class="sale d-flex flex-column justify-content-center align-items-center">
                            <span class="text-white">Hot sale giá sốc</span>
                            <span>Giá chỉ còn 5.990.00đ</span>
                            <span>Giảm tới 300K qua VNPAY</span>
                        </div>
                    </div>
                    <div class="text-center money mt-3">
                        <strong>Xiaomi Redmi Note 10 Pro <br />
                            8GB/128GB - Chính hãng</strong>
                        <div>
                            <strong>5,990,000 <u>đ</u></strong>
                            <del>7,490,000 <u>đ</u></del>
                        </div>
                    </div>
                    <div class="note mt-2 mb-3">
                        <label title="Giảm thêm 250.000đ khi thanh toán qua VNPAY (từ ngày 18/04 - 30/04 - số lượng có hạn)">
                            <span>KM</span>
                            Trúng thưởng lên tới 100 triệu đồng...<strong>VÀ 4 KM KHÁC</strong>
                        </label>
                    </div>
                    <div class="attention" id="phone1">
                        <div class="content">
                            <label>
                                <span>KM</span>
                                Giảm thêm 250.000 khi thanh toán qua VNPAY-số lượng có hạn
                            </label>
                            <label>
                                <span>KM</span>
                                Khuyến mại, thu cũ - lên đời iphone 13 Series
                            </label>
                            <label>
                                <span>KM</span>
                                Tặng sim data mobifone Hera 5G (2.5G/ngày) (chưa bao gồm tháng đầu tiên)- lưu ý chỉ mua trực tiếp tại
                                cửa hàng, không áp dụng shop SIS Hà Nội
                            </label>
                            <label>
                                <span>KM</span>
                                Mua kèm củ sạc nhanh Innostyle chính hãng với 290.000đ
                            </label>
                            <label>
                                <span>KM</span>
                                Tặng sim data Heraplus ưu đãi 6GB/ngày(chưa bao gồm tháng đầu tiên) áp dụng khi mua hàng online
                            </label>
                        </div>
                    </div>
                </div>
                <div class="item border border-1" id="telephone2">
                    <div class="img mt-4 d-flex justify-content-center flex-column align-items-center">
                        <img src="{{asset('images/phone_noibat/k16yellowzhengmianfront.png')}}" />
                        <div class="flash">
                            <i class="fa-solid fa-bolt"></i>giảm 1,000,000 <u>đ</u>
                        </div>
                    </div>
                    <div class="text-center money mt-3">
                        <strong>POCO M4 Pro 5G 4GB/64GB<br />
                            - Chính hãng</strong>
                        <div>
                            <strong>4,490,000 <u>đ</u></strong>
                            <del>5,490,000 <u>đ</u></del>
                        </div>
                    </div>
                    <div class="note mt-2 mb-3">
                        <label title="Giảm thêm 250.000đ khi thanh toán qua VNPAY (từ ngày 18/04 - 30/04 - số lượng có hạn)">
                            <span>KM</span>
                            Trúng thưởng lên tới 100 triệu đồng...<strong>VÀ 4 KM KHÁC</strong>
                        </label>
                    </div>
                    <div class="attention" id="phone2">
                        <div class="content">
                            <label>
                                <span>KM</span>
                                Giảm thêm 250.000 khi thanh toán qua VNPAY-số lượng có hạn
                            </label>
                            <label>
                                <span>KM</span>
                                Khuyến mại, thu cũ - lên đời iphone 13 Series
                            </label>
                            <label>
                                <span>KM</span>
                                Tặng sim data mobifone Hera 5G (2.5G/ngày) (chưa bao gồm tháng đầu tiên)- lưu ý chỉ mua trực tiếp tại
                                cửa hàng, không áp dụng shop SIS Hà Nội
                            </label>
                            <label>
                                <span>KM</span>
                                Mua kèm củ sạc nhanh Innostyle chính hãng với 290.000đ
                            </label>
                            <label>
                                <span>KM</span>
                                Tặng sim data Heraplus ưu đãi 6GB/ngày(chưa bao gồm tháng đầu tiên) áp dụng khi mua hàng online
                            </label>
                        </div>
                    </div>
                </div>
                <div class="item border border-1" id="telephone3">
                    <div class="img mt-4 d-flex flex-column align-items-center justify-content-center">
                        <img class="giasoc" src="{{asset('images/gia-soc.png')}}" />
                        <img src="{{asset('images/phone_noibat/image-removebg-preview-19.png')}}" />
                        <div class="sale d-flex flex-column justify-content-center align-items-center">
                            <span class="text-white">Hotsale giá sốc từ 25/04-03/05</span>
                            <span>Giá chỉ còn 7.490.00đ</span>
                        </div>
                    </div>
                    <div class="text-center money mt-3">
                        <strong>Xiaomi 11 Lite 5G NE 6GB/128GB<br />
                            - Chính hãng DGW</strong>
                        <div>
                            <strong>7,490,000 <u>đ</u></strong>
                            <del>8,990,000 <u>đ</u></del>
                        </div>
                    </div>
                    <div class="note mt-2 mb-3">
                        <label title="Giảm thêm 250.000đ khi thanh toán qua VNPAY (từ ngày 18/04 - 30/04 - số lượng có hạn)">
                            <span>KM</span>
                            Trúng thưởng lên tới 100 triệu đồng...<strong>VÀ 4 KM KHÁC</strong>
                        </label>
                    </div>
                    <div class="attention" id="phone3">
                        <div class="content">
                            <label>
                                <span>KM</span>
                                Giảm thêm 250.000 khi thanh toán qua VNPAY-số lượng có hạn
                            </label>
                            <label>
                                <span>KM</span>
                                Khuyến mại, thu cũ - lên đời iphone 13 Series
                            </label>
                            <label>
                                <span>KM</span>
                                Tặng sim data mobifone Hera 5G (2.5G/ngày) (chưa bao gồm tháng đầu tiên)- lưu ý chỉ mua trực tiếp tại
                                cửa hàng, không áp dụng shop SIS Hà Nội
                            </label>
                            <label>
                                <span>KM</span>
                                Mua kèm củ sạc nhanh Innostyle chính hãng với 290.000đ
                            </label>
                            <label>
                                <span>KM</span>
                                Tặng sim data Heraplus ưu đãi 6GB/ngày(chưa bao gồm tháng đầu tiên) áp dụng khi mua hàng online
                            </label>
                        </div>
                    </div>
                </div>
                <div class="item border border-1" id="telephone4">
                    <div class="img mt-4 d-flex justify-content-center flex-column align-items-center">
                        <img src="{{asset('images/phone_noibat/image-removebg-preview-8_637829491635899746.png')}}" />
                        <div class="flash">
                            <i class="fa-solid fa-bolt"></i>giảm 1,000,000 <u>đ</u>
                        </div>
                    </div>
                    <div class="text-center money mt-3">
                        <strong>Tecno Spark 8C 4GB/64GB - Chính <br />
                            hãng</strong>
                        <div>
                            <strong>2,590,000 <u>đ</u></strong>
                            <del>3,590,000 <u>đ</u></del>
                        </div>
                    </div>
                    <div class="note mt-2 mb-3">
                        <label title="Giảm thêm 250.000đ khi thanh toán qua VNPAY (từ ngày 18/04 - 30/04 - số lượng có hạn)">
                            <span>KM</span>
                            Tặng 2 sim data mobifone Hera 5G (2.5...<strong>VÀ 4 KM KHÁC</strong>
                        </label>
                    </div>
                    <div class="attention" id="phone4">
                        <div class="content">
                            <label>
                                <span>KM</span>
                                Giảm thêm 250.000 khi thanh toán qua VNPAY-số lượng có hạn
                            </label>
                            <label>
                                <span>KM</span>
                                Khuyến mại, thu cũ - lên đời iphone 13 Series
                            </label>
                            <label>
                                <span>KM</span>
                                Tặng sim data mobifone Hera 5G (2.5G/ngày) (chưa bao gồm tháng đầu tiên)- lưu ý chỉ mua trực tiếp tại
                                cửa hàng, không áp dụng shop SIS Hà Nội
                            </label>
                            <label>
                                <span>KM</span>
                                Mua kèm củ sạc nhanh Innostyle chính hãng với 290.000đ
                            </label>
                            <label>
                                <span>KM</span>
                                Tặng sim data Heraplus ưu đãi 6GB/ngày(chưa bao gồm tháng đầu tiên) áp dụng khi mua hàng online
                            </label>
                        </div>
                    </div>
                </div>
                <div class="item border border-1" id="telephone5">
                    <div class="img d-flex flex-column justify-content-center mt-4">
                        <div class="d-flex justify-content-center">
                            <img src="{{asset('images/phone_noibat/image-removebg-preview-7.png')}}" />
                        </div>
                        <div class="sale d-flex flex-column justify-content-center align-items-center">
                            <span class="text-white">Hotsale giá sốc từ 28-30/04</span>
                            <span>Giá cuối chỉ còn 7.990.00đ</span>
                        </div>
                    </div>
                    <div class="text-center money mt-3">
                        <strong>OPPO ren 7 - Chính hãng</strong>
                        <div>
                            <strong>7,990,000 <u>đ</u></strong>
                        </div>
                    </div>
                    <div class="note mt-4 mb-3">
                        <label title="Giảm thêm 250.000đ khi thanh toán qua VNPAY (từ ngày 18/04 - 30/04 - số lượng có hạn)">
                            <span>KM</span>
                            Trúng thưởng lên tới 100 triệu đồng...<strong>VÀ 4 KM KHÁC</strong>
                        </label>
                    </div>
                    <div class="attention" id="phone5">
                        <div class="content">
                            <label>
                                <span>KM</span>
                                Giảm thêm 250.000 khi thanh toán qua VNPAY-số lượng có hạn
                            </label>
                            <label>
                                <span>KM</span>
                                Khuyến mại, thu cũ - lên đời iphone 13 Series
                            </label>
                            <label>
                                <span>KM</span>
                                Tặng sim data mobifone Hera 5G (2.5G/ngày) (chưa bao gồm tháng đầu tiên)- lưu ý chỉ mua trực tiếp tại
                                cửa hàng, không áp dụng shop SIS Hà Nội
                            </label>
                            <label>
                                <span>KM</span>
                                Mua kèm củ sạc nhanh Innostyle chính hãng với 290.000đ
                            </label>
                            <label>
                                <span>KM</span>
                                Tặng sim data Heraplus ưu đãi 6GB/ngày(chưa bao gồm tháng đầu tiên) áp dụng khi mua hàng online
                            </label>
                        </div>
                    </div>
                </div>
            </div>

            <div class="d-flex mt-3 phone_context">
                <div class="item border border-1" id="telephone6">
                    <div class="img d-flex flex-column justify-content-center mt-4">
                        <div class="d-flex justify-content-center">
                            <img src="{{asset('images/phone_noibat/redmi-10c-9.png')}}" />
                        </div>
                        <div class="sale text-center">
                            <span class="text-white text-center">Hotsale giá sốc từ 29/4-3/5 chi tiết liên <br />
                                hệ 1900.1091</span>
                            <span>Giảm tới 300K <br />
                                qua VNPAY</span>
                        </div>
                    </div>
                    <div class="text-center money mt-3">
                        <strong>Xiaomi Redmi 10C 4GB/128GB<br />Chính hãng</strong>
                        <div>
                            <strong>3,890,000 <u>đ</u></strong>
                            <del>3,890,000 <u>đ</u></del>
                        </div>
                    </div>
                    <div class="note mt-2 mb-3">
                        <label title="Giảm thêm 250.000đ khi thanh toán qua VNPAY (từ ngày 18/04 - 30/04 - số lượng có hạn)">
                            <span>KM</span>
                            Tặng phiếu mua hàng 400.000đ <strong>VÀ 4 KM KHÁC</strong>
                        </label>
                    </div>
                    <div class="attention" id="phone6">
                        <div class="content">
                            <label>
                                <span>KM</span>
                                Giảm thêm 250.000 khi thanh toán qua VNPAY-số lượng có hạn
                            </label>
                            <label>
                                <span>KM</span>
                                Khuyến mại, thu cũ - lên đời iphone 13 Series
                            </label>
                            <label>
                                <span>KM</span>
                                Tặng sim data mobifone Hera 5G (2.5G/ngày) (chưa bao gồm tháng đầu tiên)- lưu ý chỉ mua trực tiếp tại
                                cửa hàng, không áp dụng shop SIS Hà Nội
                            </label>
                            <label>
                                <span>KM</span>
                                Mua kèm củ sạc nhanh Innostyle chính hãng với 290.000đ
                            </label>
                            <label>
                                <span>KM</span>
                                Tặng sim data Heraplus ưu đãi 6GB/ngày(chưa bao gồm tháng đầu tiên) áp dụng khi mua hàng online
                            </label>
                        </div>
                    </div>
                </div>
                <div class="item border border-1" id="telephone7">
                    <div class="img d-flex flex-column justify-content-center mt-4">
                        <div class="d-flex justify-content-center">
                            <img src="{{asset('images/phone_noibat/image-removebg-preview-14.png')}}" />
                        </div>
                        <div class="sale d-flex flex-column justify-content-center align-items-center">
                            <span class="text-white">Hotsale giá sốc từ 29/04-04/05</span>
                            <span>Giá chỉ còn 8.590.00đ</span>
                        </div>
                    </div>
                    <div class="text-center money mt-3">
                        <strong>Samsung galaxy A53 - Chính hãng</strong>
                        <div>
                            <strong>9,090,000 <u>đ</u></strong>
                            <del>7,490,000 <u>đ</u></del>
                        </div>
                    </div>
                    <div class="note mt-4 mb-3">
                        <label title="Giảm thêm 250.000đ khi thanh toán qua VNPAY (từ ngày 18/04 - 30/04 - số lượng có hạn)">
                            <span>KM</span>
                            Tặng 2 sim data mobifone Hera 5G (2.5...<strong>VÀ 4 KM KHÁC</strong>
                        </label>
                    </div>
                    <div class="attention" id="phone7">
                        <div class="content">
                            <label>
                                <span>KM</span>
                                Giảm thêm 250.000 khi thanh toán qua VNPAY-số lượng có hạn
                            </label>
                            <label>
                                <span>KM</span>
                                Khuyến mại, thu cũ - lên đời iphone 13 Series
                            </label>
                            <label>
                                <span>KM</span>
                                Tặng sim data mobifone Hera 5G (2.5G/ngày) (chưa bao gồm tháng đầu tiên)- lưu ý chỉ mua trực tiếp tại
                                cửa hàng, không áp dụng shop SIS Hà Nội
                            </label>
                            <label>
                                <span>KM</span>
                                Mua kèm củ sạc nhanh Innostyle chính hãng với 290.000đ
                            </label>
                            <label>
                                <span>KM</span>
                                Tặng sim data Heraplus ưu đãi 6GB/ngày(chưa bao gồm tháng đầu tiên) áp dụng khi mua hàng online
                            </label>
                        </div>
                    </div>
                </div>
                <div class="item border border-1" id="telephone8">
                    <div class="img d-flex flex-column justify-content-center mt-4">
                        <div class="d-flex justify-content-center">
                            <img src="{{asset('images/phone_noibat/a23.png')}}" />
                        </div>
                        <div class="sale d-flex flex-column justify-content-center align-items-center">
                            <span class="text-white">Hotsale giá sốc từ 29/04-04/05</span>
                            <span>Giá chỉ còn 4.990.00đ</span>
                        </div>
                    </div>
                    <div class="text-center money mt-3">
                        <strong>Samsung Galaxy A23 8GB/128GB - <br />
                            Chính hãng</strong>
                        <div>
                            <strong>5,190,000 <u>đ</u></strong>
                        </div>
                    </div>
                    <div class="note mt-2 mb-3">
                        <label title="Giảm thêm 250.000đ khi thanh toán qua VNPAY (từ ngày 18/04 - 30/04 - số lượng có hạn)">
                            <span>KM</span>
                            Trúng thưởng lên tới 100 triệu đồng...<strong>VÀ 4 KM KHÁC</strong>
                        </label>
                    </div>
                    <div class="attention" id="phone8">
                        <div class="content">
                            <label>
                                <span>KM</span>
                                Giảm thêm 250.000 khi thanh toán qua VNPAY-số lượng có hạn
                            </label>
                            <label>
                                <span>KM</span>
                                Khuyến mại, thu cũ - lên đời iphone 13 Series
                            </label>
                            <label>
                                <span>KM</span>
                                Tặng sim data mobifone Hera 5G (2.5G/ngày) (chưa bao gồm tháng đầu tiên)- lưu ý chỉ mua trực tiếp tại
                                cửa hàng, không áp dụng shop SIS Hà Nội
                            </label>
                            <label>
                                <span>KM</span>
                                Mua kèm củ sạc nhanh Innostyle chính hãng với 290.000đ
                            </label>
                            <label>
                                <span>KM</span>
                                Tặng sim data Heraplus ưu đãi 6GB/ngày(chưa bao gồm tháng đầu tiên) áp dụng khi mua hàng online
                            </label>
                        </div>
                    </div>
                </div>
                <div class="item border border-1" id="telephone9">
                    <div class="img d-flex flex-column justify-content-center mt-4">
                        <div class="d-flex justify-content-center">
                            <img src="{{asset('images/phone_noibat/7z.png')}}" />
                        </div>
                        <div class="sale d-flex flex-column justify-content-center align-items-center">
                            <span class="text-white">Hotsale giá sốc từ 28-30/04</span>
                            <span>Chỉ còn 8.590.00đ</span>
                            <span>Khi mua kèm gói cước MBF</span>
                        </div>
                    </div>
                    <div class="text-center money mt-3">
                        <strong>OPPO Reno7 Z 5G - Chính hãng</strong>
                        <div>
                            <strong>5,990,000 <u>đ</u></strong>
                            <del>7,490,000 <u>đ</u></del>
                        </div>
                    </div>
                    <div class="note mt-4 mb-3">
                        <label title="Giảm thêm 250.000đ khi thanh toán qua VNPAY (từ ngày 18/04 - 30/04 - số lượng có hạn)">
                            <span>KM</span>
                            Giảm 20% (Trên giá NY) tai nghe blu...<strong>VÀ 6 KM KHÁC</strong>
                        </label>
                    </div>
                    <div class="attention" id="phone9">
                        <div class="content">
                            <label>
                                <span>KM</span>
                                Giảm thêm 250.000 khi thanh toán qua VNPAY-số lượng có hạn
                            </label>
                            <label>
                                <span>KM</span>
                                Khuyến mại, thu cũ - lên đời iphone 13 Series
                            </label>
                            <label>
                                <span>KM</span>
                                Tặng sim data mobifone Hera 5G (2.5G/ngày) (chưa bao gồm tháng đầu tiên)- lưu ý chỉ mua trực tiếp tại
                                cửa hàng, không áp dụng shop SIS Hà Nội
                            </label>
                            <label>
                                <span>KM</span>
                                Mua kèm củ sạc nhanh Innostyle chính hãng với 290.000đ
                            </label>
                            <label>
                                <span>KM</span>
                                Tặng sim data Heraplus ưu đãi 6GB/ngày(chưa bao gồm tháng đầu tiên) áp dụng khi mua hàng online
                            </label>
                        </div>
                    </div>
                </div>
                <div class="item border border-1" id="telephone10">
                    <div class="img d-flex flex-column justify-content-center mt-4">
                        <div class="d-flex justify-content-center">
                            <img src="{{asset('images/phone_noibat/image-removebg-preview-3.png')}}" />
                        </div>
                        <div class="sale d-flex flex-column justify-content-center align-items-center">
                            <span class="text-white">Hotsale giá sốc 29/04-04/05</span>
                            <span>Giá chỉ còn 4.050.00đ</span>
                        </div>
                    </div>
                    <div class="text-center money mt-3">
                        <strong>Samsung Galaxy A13 8GB/128GB - <br />
                            Chính hãng</strong>
                        <div>
                            <strong>4,250,000 <u>đ</u></strong>
                            <del>4,690,000 <u>đ</u></del>
                        </div>
                    </div>
                    <div class="note mt-2 mb-3">
                        <label title="Giảm thêm 250.000đ khi thanh toán qua VNPAY (từ ngày 18/04 - 30/04 - số lượng có hạn)">
                            <span>KM</span>
                            Tặng 2 sim data mobifone Hera 5G (2.5...<strong>VÀ 4 KM KHÁC</strong>
                        </label>
                    </div>
                    <div class="attention" id="phone10">
                        <div class="content">
                            <label>
                                <span>KM</span>
                                Giảm thêm 250.000 khi thanh toán qua VNPAY-số lượng có hạn
                            </label>
                            <label>
                                <span>KM</span>
                                Khuyến mại, thu cũ - lên đời iphone 13 Series
                            </label>
                            <label>
                                <span>KM</span>
                                Tặng sim data mobifone Hera 5G (2.5G/ngày) (chưa bao gồm tháng đầu tiên)- lưu ý chỉ mua trực tiếp tại
                                cửa hàng, không áp dụng shop SIS Hà Nội
                            </label>
                            <label>
                                <span>KM</span>
                                Mua kèm củ sạc nhanh Innostyle chính hãng với 290.000đ
                            </label>
                            <label>
                                <span>KM</span>
                                Tặng sim data Heraplus ưu đãi 6GB/ngày(chưa bao gồm tháng đầu tiên) áp dụng khi mua hàng online
                            </label>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--end Điện thoại nổi bật -->

    <!-- đồng hồ thông minh -->
    <section>
        <div class="container mb-5">
            <div class="mt-3 mb-3 box-home-text">
                <div class="item">
                    <h4>
                        <a class="text-white text-decoration-none" href="#"> ĐỒNG HỒ THÔNG MINH </a>
                    </h4>
                </div>
            </div>
            <div class="mt-3 border border-1 watch_context swiper mySwiper">
                <div class="content d-flex swiper-wrapper">
                    <div class="item_watch swiper-slide">
                        <div class="img d-flex flex-column justify-content-center mt-4">
                            <div class="d-flex justify-content-center">
                                <img src="{{asset('images/watch/watch-4-40mm-10.png')}}" />
                            </div>
                        </div>
                        <div class="text-center money mt-3">
                            <strong>Samsung Galaxy watch 4 40mm LTE<br />- (R865) - Chính
                                hãng</strong>
                            <div>
                                <strong>4,990,000 <u>đ</u></strong>
                                <del>6,990,000 <u>đ</u></del>
                            </div>
                        </div>
                        <div class="note mt-2 mb-3">
                            <label title="Giảm thêm 250.000đ khi thanh toán qua VNPAY (từ ngày 18/04 - 30/04 - số lượng có hạn)">
                                <span>KM</span>
                                Giảm 15% trên giá NY khi mua Watch...<strong>VÀ 2 KM KHÁC</strong>
                            </label>
                        </div>
                    </div>
                    <div class="item_watch swiper-slide">
                        <div class="img d-flex flex-column justify-content-center mt-4">
                            <div class="d-flex justify-content-center">
                                <img src="{{asset('images/watch/r850.png')}}" />
                            </div>
                        </div>
                        <div class="text-center money mt-3">
                            <strong>Samsung Galaxy watch 3 41mm LTE<br />- (R850) - Chính
                                hãng</strong>
                            <div>
                                <strong>5,890,000 <u>đ</u></strong>
                                <del>7,490,000 <u>đ</u></del>
                            </div>
                        </div>
                        <div class="note mt-2 mb-3">
                            <label title="Giảm thêm 250.000đ khi thanh toán qua VNPAY (từ ngày 18/04 - 30/04 - số lượng có hạn)">
                                <span>KM</span>
                                Thanh toán qua VNPAY Giảm 50.000đ
                            </label>
                        </div>
                    </div>
                    <div class="item_watch swiper-slide">
                        <div class="img d-flex flex-column justify-content-center mt-4">
                            <div class="d-flex justify-content-center">
                                <img src="{{asset('images/watch//Garmin Vivoactive 4.png')}}" />
                            </div>
                        </div>
                        <div class="text-center money mt-3">
                            <strong>Samsung Galaxy watch 3 45mm<br />- (R840) - Chính
                                hãng</strong>
                            <div>
                                <strong>5,590,000 <u>đ</u></strong>
                                <del>7,490,000 <u>đ</u></del>
                            </div>
                        </div>
                        <div class="note mt-2 mb-3">
                            <label title="Giảm thêm 250.000đ khi thanh toán qua VNPAY (từ ngày 18/04 - 30/04 - số lượng có hạn)">
                                <span>KM</span>
                                Thanh toán qua VNPAY Giảm 50.000đ
                            </label>
                        </div>
                    </div>
                    <div class="item_watch swiper-slide">
                        <div class="img d-flex flex-column justify-content-center mt-4">
                            <div class="d-flex justify-content-center">
                                <img src="{{asset('images/watch/venu-sq.png')}}" />
                            </div>
                        </div>
                        <div class="text-center money mt-3">
                            <strong>Samsung Galaxy watch 3 45mm<br />- (R840) - Chính
                                hãng</strong>
                            <div>
                                <strong>5,590,000 <u>đ</u></strong>
                                <del>7,490,000 <u>đ</u></del>
                            </div>
                        </div>
                        <div class="note mt-2 mb-3">
                            <label title="Giảm thêm 250.000đ khi thanh toán qua VNPAY (từ ngày 18/04 - 30/04 - số lượng có hạn)">
                                <span>KM</span>
                                Thanh toán qua VNPAY Giảm 50.000đ
                            </label>
                        </div>
                    </div>
                    <div class="item_watch swiper-slide">
                        <div class="img d-flex flex-column justify-content-center mt-4">
                            <div class="d-flex justify-content-center">
                                <img src="{{asset('images/watch/r840-222.png')}}" />
                            </div>
                        </div>
                        <div class="text-center money mt-3">
                            <strong>Samsung Galaxy watch 3 45mm<br />- (R840) - Chính
                                hãng</strong>
                            <div>
                                <strong>5,590,000 <u>đ</u></strong>
                                <del>7,490,000 <u>đ</u></del>
                            </div>
                        </div>
                        <div class="note mt-2 mb-3">
                            <label title="Giảm thêm 250.000đ khi thanh toán qua VNPAY (từ ngày 18/04 - 30/04 - số lượng có hạn)">
                                <span>KM</span>
                                Thanh toán qua VNPAY Giảm 50.000đ
                            </label>
                        </div>
                    </div>
                    <div class="item_watch swiper-slide">
                        <div class="img d-flex flex-column justify-content-center mt-4">
                            <div class="d-flex justify-content-center">
                                <img src="{{asset('images/watch/watch-4-40mm-10.png')}}" />
                            </div>
                        </div>
                        <div class="text-center money mt-3">
                            <strong>Samsung Galaxy watch 4 40mm LTE<br />- (R865) - Chính
                                hãng</strong>
                            <div>
                                <strong>4,990,000 <u>đ</u></strong>
                                <del>6,990,000 <u>đ</u></del>
                            </div>
                        </div>
                        <div class="note mt-2 mb-3">
                            <label title="Giảm thêm 250.000đ khi thanh toán qua VNPAY (từ ngày 18/04 - 30/04 - số lượng có hạn)">
                                <span>KM</span>
                                Giảm 15% trên giá NY khi mua Watch...<strong>VÀ 2 KM KHÁC</strong>
                            </label>
                        </div>
                    </div>
                    <div class="item_watch swiper-slide">
                        <div class="img d-flex flex-column justify-content-center mt-4">
                            <div class="d-flex justify-content-center">
                                <img src="{{asset('images/watch/r850.png')}}" />
                            </div>
                        </div>
                        <div class="text-center money mt-3">
                            <strong>Samsung Galaxy watch 3 41mm LTE<br />- (R850) - Chính
                                hãng</strong>
                            <div>
                                <strong>5,890,000 <u>đ</u></strong>
                                <del>7,490,000 <u>đ</u></del>
                            </div>
                        </div>
                        <div class="note mt-2 mb-3">
                            <label title="Giảm thêm 250.000đ khi thanh toán qua VNPAY (từ ngày 18/04 - 30/04 - số lượng có hạn)">
                                <span>KM</span>
                                Thanh toán qua VNPAY Giảm 50.000đ
                            </label>
                        </div>
                    </div>
                    <div class="item_watch swiper-slide">
                        <div class="img d-flex flex-column justify-content-center mt-4">
                            <div class="d-flex justify-content-center">
                                <img src="{{asset('images/watch//Garmin Vivoactive 4.png')}}" />
                            </div>
                        </div>
                        <div class="text-center money mt-3">
                            <strong>Samsung Galaxy watch 3 45mm<br />- (R840) - Chính
                                hãng</strong>
                            <div>
                                <strong>5,590,000 <u>đ</u></strong>
                                <del>7,490,000 <u>đ</u></del>
                            </div>
                        </div>
                        <div class="note mt-2 mb-3">
                            <label title="Giảm thêm 250.000đ khi thanh toán qua VNPAY (từ ngày 18/04 - 30/04 - số lượng có hạn)">
                                <span>KM</span>
                                Thanh toán qua VNPAY Giảm 50.000đ
                            </label>
                        </div>
                    </div>
                    <div class="item_watch swiper-slide">
                        <div class="img d-flex flex-column justify-content-center mt-4">
                            <div class="d-flex justify-content-center">
                                <img src="{{asset('images/watch/venu-sq.png')}}" />
                            </div>
                        </div>
                        <div class="text-center money mt-3">
                            <strong>Samsung Galaxy watch 3 45mm<br />- (R840) - Chính
                                hãng</strong>
                            <div>
                                <strong>5,590,000 <u>đ</u></strong>
                                <del>7,490,000 <u>đ</u></del>
                            </div>
                        </div>
                        <div class="note mt-2 mb-3">
                            <label title="Giảm thêm 250.000đ khi thanh toán qua VNPAY (từ ngày 18/04 - 30/04 - số lượng có hạn)">
                                <span>KM</span>
                                Thanh toán qua VNPAY Giảm 50.000đ
                            </label>
                        </div>
                    </div>
                    <div class="item_watch swiper-slide">
                        <div class="img d-flex flex-column justify-content-center mt-4">
                            <div class="d-flex justify-content-center">
                                <img src="{{asset('images/watch/r840-222.png')}}" />
                            </div>
                        </div>
                        <div class="text-center money mt-3">
                            <strong>Samsung Galaxy watch 3 45mm<br />- (R840) - Chính
                                hãng</strong>
                            <div>
                                <strong>5,590,000 <u>đ</u></strong>
                                <del>7,490,000 <u>đ</u></del>
                            </div>
                        </div>
                        <div class="note mt-2 mb-3">
                            <label title="Giảm thêm 250.000đ khi thanh toán qua VNPAY (từ ngày 18/04 - 30/04 - số lượng có hạn)">
                                <span>KM</span>
                                Thanh toán qua VNPAY Giảm 50.000đ
                            </label>
                        </div>
                    </div>
                    <div class="item_watch swiper-slide">
                        <div class="img d-flex flex-column justify-content-center mt-4">
                            <div class="d-flex justify-content-center">
                                <img src="{{asset('images/watch/watch-4-40mm-10.png')}}" />
                            </div>
                        </div>
                        <div class="text-center money mt-3">
                            <strong>Samsung Galaxy watch 4 40mm LTE<br />- (R865) - Chính
                                hãng</strong>
                            <div>
                                <strong>4,990,000 <u>đ</u></strong>
                                <del>6,990,000 <u>đ</u></del>
                            </div>
                        </div>
                        <div class="note mt-2 mb-3">
                            <label title="Giảm thêm 250.000đ khi thanh toán qua VNPAY (từ ngày 18/04 - 30/04 - số lượng có hạn)">
                                <span>KM</span>
                                Giảm 15% trên giá NY khi mua Watch...<strong>VÀ 2 KM KHÁC</strong>
                            </label>
                        </div>
                    </div>
                    <div class="item_watch swiper-slide">
                        <div class="img d-flex flex-column justify-content-center mt-4">
                            <div class="d-flex justify-content-center">
                                <img src="{{asset('images/watch/r850.png')}}" />
                            </div>
                        </div>
                        <div class="text-center money mt-3">
                            <strong>Samsung Galaxy watch 3 41mm LTE<br />- (R850) - Chính
                                hãng</strong>
                            <div>
                                <strong>5,890,000 <u>đ</u></strong>
                                <del>7,490,000 <u>đ</u></del>
                            </div>
                        </div>
                        <div class="note mt-2 mb-3">
                            <label title="Giảm thêm 250.000đ khi thanh toán qua VNPAY (từ ngày 18/04 - 30/04 - số lượng có hạn)">
                                <span>KM</span>
                                Thanh toán qua VNPAY Giảm 50.000đ
                            </label>
                        </div>
                    </div>
                    <div class="item_watch swiper-slide">
                        <div class="img d-flex flex-column justify-content-center mt-4">
                            <div class="d-flex justify-content-center">
                                <img src="{{asset('images/watch//Garmin Vivoactive 4.png')}}" />
                            </div>
                        </div>
                        <div class="text-center money mt-3">
                            <strong>Samsung Galaxy watch 3 45mm<br />- (R840) - Chính
                                hãng</strong>
                            <div>
                                <strong>5,590,000 <u>đ</u></strong>
                                <del>7,490,000 <u>đ</u></del>
                            </div>
                        </div>
                        <div class="note mt-2 mb-3">
                            <label title="Giảm thêm 250.000đ khi thanh toán qua VNPAY (từ ngày 18/04 - 30/04 - số lượng có hạn)">
                                <span>KM</span>
                                Thanh toán qua VNPAY Giảm 50.000đ
                            </label>
                        </div>
                    </div>
                    <div class="item_watch swiper-slide">
                        <div class="img d-flex flex-column justify-content-center mt-4">
                            <div class="d-flex justify-content-center">
                                <img src="{{asset('images/watch/venu-sq.png')}}" />
                            </div>
                        </div>
                        <div class="text-center money mt-3">
                            <strong>Samsung Galaxy watch 3 45mm<br />- (R840) - Chính
                                hãng</strong>
                            <div>
                                <strong>5,590,000 <u>đ</u></strong>
                                <del>7,490,000 <u>đ</u></del>
                            </div>
                        </div>
                        <div class="note mt-2 mb-3">
                            <label title="Giảm thêm 250.000đ khi thanh toán qua VNPAY (từ ngày 18/04 - 30/04 - số lượng có hạn)">
                                <span>KM</span>
                                Thanh toán qua VNPAY Giảm 50.000đ
                            </label>
                        </div>
                    </div>
                    <div class="item_watch swiper-slide">
                        <div class="img d-flex flex-column justify-content-center mt-4">
                            <div class="d-flex justify-content-center">
                                <img src="{{asset('images/watch/r840-222.png')}}" />
                            </div>
                        </div>
                        <div class="text-center money mt-3">
                            <strong>Samsung Galaxy watch 3 45mm<br />- (R840) - Chính
                                hãng</strong>
                            <div>
                                <strong>5,590,000 <u>đ</u></strong>
                                <del>7,490,000 <u>đ</u></del>
                            </div>
                        </div>
                        <div class="note mt-2 mb-3">
                            <label title="Giảm thêm 250.000đ khi thanh toán qua VNPAY (từ ngày 18/04 - 30/04 - số lượng có hạn)">
                                <span>KM</span>
                                Thanh toán qua VNPAY Giảm 50.000đ
                            </label>
                        </div>
                    </div>
                </div>
                <!-- <button class="left border border-1 swiper-button-next" onclick="left(-1)"></button> -->
                <!-- <button class="right border border-1 swiper-button-prev" onclick="right(1)"></button> -->
                <!-- <i class="fa-solid fa-circle-arrow-left"></i>
        <i class="fa-solid fa-circle-arrow-right"></i> -->
                <i class="swiper-button-next left"></i>
                <i class="swiper-button-prev right"></i>
            </div>
        </div>
    </section>
    <!--end đồng hồ thông minh -->

    <!-- phụ kiện -->
    <section>
        <div class="container padding-content mb-5">
            <div class="mt-3 mb-3 box-home-text">
                <div class="item">
                    <h4>
                        <a class="text-white text-decoration-none" href="#"> PHỤ KIỆN </a>
                    </h4>
                </div>
            </div>
            <div class="mt-3 accessory">
                <ul class="d-flex">
                    <li>
                        <a href="">
                            <span><img src="{{asset('images/phukien/icon-moi-2.png')}}" /></span>
                            <label>Thẻ nhớ - USB</label>
                        </a>
                    </li>
                    <li>
                        <a href="">
                            <span><img src="{{asset('images/phukien/icon-moi-15.png')}}" /></span>
                            <label>Tai nghe</label>
                        </a>
                    </li>
                    <li>
                        <a href="">
                            <span><img src="{{asset('images/phukien/icon-moi-10.png')}}" /></span>
                            <label>Sạc dự phòng</label>
                        </a>
                    </li>
                    <li>
                        <a href="">
                            <span><img src="{{asset('images/phukien/icon-moi-1.png')}}" /></span>
                            <label>Quạt mini</label>
                        </a>
                    </li>
                    <li>
                        <a href="">
                            <span><img src="{{asset('images/phukien/icon-moi-14.png')}}" /></span>
                            <label>Loa</label>
                        </a>
                    </li>
                    <li>
                        <a href="">
                            <span><img src="{{asset('images/phukien/icon-xanh-2.png')}}" /></span>
                            <label>Dây đeo đồng hồ, Airtag</label>
                        </a>
                    </li>
                    <li>
                        <a href="">
                            <span><img src="{{asset('images/phukien/icon-moi-9.png')}}" /></span>
                            <label>Củ sạc, dây cáp</label>
                        </a>
                    </li>
                    <li>
                        <a href="">
                            <span><img src="{{asset('images/phukien/icon-moi-12.png')}}" /></span>
                            <label>Camera an ninh</label>
                        </a>
                    </li>
                    <li>
                        <a href="">
                            <span><img src="{{asset('images/phukien/icon-moi-11.png')}}" /></span>
                            <label>Thiết bị mạng</label>
                        </a>
                    </li>
                    <li>
                        <a href="">
                            <span><img src="{{asset('images/phukien/icon-moi-3.png')}}" /></span>
                            <label>Apple</label>
                        </a>
                    </li>
                </ul>
                <ul class="d-flex">
                    <li>
                        <a href="">
                            <span><img src="{{asset('images/phukien/icon-moi-2.png')}}" /></span>
                            <label>Thẻ nhớ - USB</label>
                        </a>
                    </li>
                    <li>
                        <a href="">
                            <span><img src="{{asset('images/phukien/icon-moi-15.png')}}" /></span>
                            <label>Tai nghe</label>
                        </a>
                    </li>
                    <li>
                        <a href="">
                            <span><img src="{{asset('images/phukien/icon-moi-10.png')}}" /></span>
                            <label>Sạc dự phòng</label>
                        </a>
                    </li>
                    <li>
                        <a href="">
                            <span><img src="{{asset('images/phukien/icon-moi-1.png')}}" /></span>
                            <label>Quạt mini</label>
                        </a>
                    </li>
                    <li>
                        <a href="">
                            <span><img src="{{asset('images/phukien/icon-moi-14.png')}}" /></span>
                            <label>Loa</label>
                        </a>
                    </li>
                    <li>
                        <a href="">
                            <span><img src="{{asset('images/phukien/icon-xanh-2.png')}}" /></span>
                            <label>Dây đeo đồng hồ, Airtag</label>
                        </a>
                    </li>
                    <li>
                        <a href="">
                            <span><img src="{{asset('images/phukien/icon-moi-9.png')}}" /></span>
                            <label>Củ sạc, dây cáp</label>
                        </a>
                    </li>
                    <li>
                        <a href="">
                            <span><img src="{{asset('images/phukien/icon-moi-12.png')}}" /></span>
                            <label>Camera an ninh</label>
                        </a>
                    </li>
                    <li>
                        <a href="">
                            <span><img src="{{asset('images/phukien/icon-moi-11.png')}}" /></span>
                            <label>Thiết bị mạng</label>
                        </a>
                    </li>
                    <li>
                        <a href="">
                            <span><img src="{{asset('images/phukien/icon-moi-3.png')}}" /></span>
                            <label>Apple</label>
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </section>
    <!--end phụ kiện -->

    <!-- Tin công nghệ -->
    <section>
        <div class="container new mb-5">
            <div class="mt-3 mb-3 box-home-text">
                <div class="item">
                    <h4>
                        <a class="text-white text-decoration-none" href="#"> TIN CÔNG NGHỆ </a>
                    </h4>
                </div>
            </div>
            <div class="technology">
                <div class="d-flex">
                    <div class="border border-1 item">
                        <div class="d-flex">
                            <img class="w-25" src="{{asset('images/phukien/iPhone-11-218x150.jpg')}}" />
                            <strong>Tính năng nào được người dùng quan <br />
                                tâm nhất trên smartphone</strong>
                        </div>
                    </div>
                    <div class="border border-1 item">
                        <div class="d-flex">
                            <img class="w-25" src="{{asset('images/phukien/nay-da-xuat-hien-iphone-13-made-in-brazil-2-218x150.jpg')}}" />
                            <strong>Nay đã xuất hiện Iphone 13 "made in <br />
                                Brazil"</strong>
                        </div>
                    </div>
                    <div class="border border-1 item">
                        <div class="d-flex">
                            <img class="w-25" src="{{asset('images/phukien/Untitled-design-9-218x150.jpg')}}" />
                            <strong>CEO google "lỡ miệng" tiết lộ về Pixel 6a</strong>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--end Tin công nghệ -->

    <!-- core value -->
    <section>
        <div class="container padding-content corevalue mb-5">
            <div class="content mb-5 d-flex">
                <div class="d-flex item justify-content-center">
                    <span><i class="fa-solid fa-circle-check"></i></span>
                    <div class="text">
                        <span>Sản phẩm</span>
                        <strong>CHÍNH HÃNG</strong>
                    </div>
                </div>
                <div class="d-flex item justify-content-center">
                    <span><i class="fa-solid fa-dolly"></i></span>
                    <div class="text">
                        <span>Miễn phí vận chuyển</span>
                        <strong>TOÀN QUỐC</strong>
                    </div>
                </div>
                <div class="d-flex item justify-content-center">
                    <span><i class="fa-solid fa-headphones"></i></span>
                    <div class="text">
                        <span>Hotline</span>
                        <strong>1900.2091</strong>
                    </div>
                </div>
                <div class="d-flex item justify-content-center">
                    <span><i class="fa-solid fa-arrow-rotate-right"></i></span>
                    <div class="text">
                        <span>Thủ tục đổi trả</span>
                        <strong>DỄ DÀNG</strong>
                    </div>
                </div>
            </div>
            <div class="content d-flex align-items-center justify-content-center text-center">
                <img src="{{asset('images/phukien/sub-logo.png')}}" />
                <div class="text">
                    <strong>Đăng ký nhận tin</strong>
                    <span class="d-block">Đăng ký để nhận những chương trình khuyến mại hot nhất của Hoàng
                        Hà Mobile</span>
                </div>
                <div class="input-content w-25">
                    <input type="text" placeholder="Nhập E-mail của bạn" />
                    <button><i class="fa fa-telegram"></i></button>
                </div>
            </div>
        </div>
    </section>
    <!--end core value -->

    <!-- Thông tin, địa chỉ -->
    <footer>
        <div class="padding-content container ">
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

    <!-- Initialize Swiper -->
    <script>
        var swiper = new Swiper(".mySwiper", {
            slidesPerView: 5,
            spaceBetween: 10,
            slidesPerGroup: 1,
            loop: true,
            loopFillGroupWithBlank: true,
            pagination: {
                el: ".swiper-pagination",
                clickable: true
            },
            navigation: {
                nextEl: ".swiper-button-next",
                prevEl: ".swiper-button-prev"
            }
        });
    </script>
</body>

</html>
