@extends('layouts.site')
@section('title','Thông tin liên hệ')

@section('maincontent')

<section class="maincontent my-5">
    <div class="container">
        <div class="row clear-fix mt-5 ms-1">
            <div><img class="img-fluid" src="{{asset('img/logo.png')}}" alt=""></div>

        </div>
        <div class="col-6 bg-eeeeee product-detail">
            <div class="row">
              <div class="col-md-12">
                <h4 class="mt-5">KING cyber</h4>
                <h5 class="mt-5">Điện thoại : 0328737487(Nguyễn Cao Hùng)</h5>
                

                <div class="product-contact">
                  <span>Gọi đặt mua: <a class="textdecor-none orangepv" href="#">19006750</a> (Miễn phí)</span>
                  <p>Mở cửa 8-21h cả Thứ 7, Chủ Nhật</p>
                </div>
              </div>
            </div>
          </div>
        </div>
    </div>
</section>

@endsection
