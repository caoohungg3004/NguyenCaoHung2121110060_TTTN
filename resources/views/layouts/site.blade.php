<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')</title>
    <link rel="stylesheet" href="{{asset('fontawesome/css/all.min.css')}}">
    <link rel="stylesheet" href="{{asset('bootstrap/css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('css/layout.css')}}">
    <link rel="stylesheet" href="{{asset('css/main.css')}}">



    @yield('header')
</head>
<body>
    <section class="topbar">
        <div class="container-fluid bg-info">
            <div id="carouselExampleSlidesOnly" class="carousel slide" data-bs-ride="carousel">
                <div class="carousel-inner">
                  <div class="carousel-item active">
                    <div class="mx-auto p-1" style="width: 200px;">
                        <div class="text-light fst-italic fs-6 ">Khuyến mãi khủng</div>
                    </div>
                  </div>
                  <div class="carousel-item">
                    <div class="mx-auto p-1" style="width: 200px;">
                        <div class="text-light fst-italic fs-6 ">Free ship đơn trên 500k</div>
                    </div>
                  </div>
                  <div class="carousel-item">
                    <div class="mx-auto p-1" style="width: 200px;">
                        <div class="text-light fst-italic fs-6 ">SALE hot chờ lương về</div>
                    </div>
                  </div>
                </div>

            </div>
        </div>

    </section>
    <section class="header">
        <div class="container-fluid bg-main text-white">
            <div class="container">
                <div class="row m-auto" >
                    <div class="col-md-2">
                        <div class="dropdown">
                            <button class="btn btn-main dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                              MENU
                            </button>
                            <ul class="dropdown-menu">
                              <li><button class="dropdown-item" type="button">Action</button></li>
                              <li><button class="dropdown-item" type="button">Another action</button></li>
                              <li><button class="dropdown-item" type="button">Something else here</button></li>
                            </ul>
                          </div>
                    </div>
                    {{-- <div class="col-md-2"><img src="{{asset('img/logo.png')}}" style="width :75px" class="m-auto" alt="logo" srcset=""></div> --}}
                    <div class="col-md-2"><div class="fs-2 me-4">KING CyBer </div></div>
                    <div class="col-md-5">
                        <form class="d-flex mt-2" role="search">
                            <input class="form-control me-1" type="search" placeholder="Search" aria-label="Search">
                            <button class="btn btn-outline-success" type="submit">Search</button>
                          </form>


                    </div>
                    <div class="col-md-3">
                        <div class="row">
                            <div class="col-md-6">
                                <i class="fa-solid fa-user fs-4 mt-2 mx-4" ></i>
                                <h6>Tài Khoản</h6>

                            </div>
                            <div class="col-md-6">
                                <i class="fa-solid fa-cart-shopping fs-4 mt-2 mx-4"></i>

                                <h6>Giỏ hàng</h6>
                            </div>

                        </div>
                    </div>

                </div>
            </div>
        </div>

    </section>
    {{-- điều hướng trang --}}
    <x-main-menu/>
    <section class="maincontent">
        @yield('maincontent')

    </section>
    <section class="footer">
        <div class="container-fluid bg-main">
            <div class="row">
                <div class="col text-white">
                    <h4> KING CyBer</h4>
                    <h5></h5>
                    

                </div>
                <div class="col text-white">
                    <h5>Địa chỉ: Tăng Nhơn Phú B</h5>
                    <h5>Điện thoại: Lê Đức Phú</h5>
                    <h5>Email: phuducle0809@gmail.com</h5>
                </div>
                <div class="col text-white">
                    <h4>Hỗ trợ khách hàng</h4>
                    <ul class="footer">
                        <li>
                            <a href="">Tìm kiếm</a>
                        </li>
                        <li>
                            <a href="">Giới thiệu</a>
                        </li>
                        <li>
                            <a href="">Chính sách đổi trả</a>
                        </li>
                        <li>
                            <a href="">Chính sách bảo mật</a>
                        </li>
                        <li>
                            <a href="">Điều khoản dịch vụ</a>
                        </li>
                        <li>
                            <a href="">Liên hệ</a>
                        </li>
                    </ul>
                </div>
                <div class="col text-white">
                    <h4>Chăm sóc khách hàng</h4>
                    Hotline: 0328737487 / 0972841323.


                    Nền tảng FaceBook: Lê Đức Phú

                    Instagram: ldps_89

                    
                    
                   
                </div>


            </div>
        </div>

    </section>
    <section class="copyright">

        <div class="container text-center">Copyright © 2023 KING CyBer. Powered by Haravan</div>

    </section>
    <script src="{{asset('bootstrap/js/bootstrap.bundle.min.js')}}"></script>
    <script src={{asset('plugins/jquery/jquery.min.js')}} ></script>
    @yield('footer')
</body>
</html>
