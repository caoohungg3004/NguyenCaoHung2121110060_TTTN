@extends('layouts.site')
@section('title','Trang chủ')

@section('maincontent')



<x-slider-show />
    <div class="container">
        <h5 class="m-3">Ưu đãi của bạn</h5>
        <div class="row">
            <div class="col">
                <div class="card">
                    <div class="card-body">
                      <p class="text-main">Miễn phí giao hàng</p>
                      <p class="fs-8" >5 đơn đầu tiên từ 100.000đ, không áp dụng hàng to, nặng</p>
                    </div>
                  </div>
            </div>
            <div class="col">
                <div class="card">
                    <div class="card-body">
                        <p class="text-main">Khuyến mãi đến sốc</p>
                        <p class="fs-8" >Hàng ngàn sản phẩm có giá khuyến mãi cực sốc, giảm đến 50%</p>
                    </div>
                  </div>
            </div>
            <div class="col">
                <div class="card">
                    <div class="card-body">
                        <p class="text-main">Tặng 40.000đ</p>
                        <p class="fs-8" >Dành cho người thân và bạn bè sau khi mua online</p>
                    </div>
                  </div>
            </div>
            <div class="col">
                <div class="card">
                    <div class="card-body">
                        <p class="text-main">Khuyễn mãi đến 20%</p>
                        <p class="fs-8" >hàng ngàn sản phẩm có giá trị khuyến mãi cực sốc, giảm đến 20%</p>
                    </div>
                  </div>
            </div>

        </div>
    </div>
    {{-- slider --}}
    {{-- ưu đãi --}}
  </div>
  <div class="row clear-fix mt-5">


    @foreach ($list_category as $category)
        <x-product-home :cat="$category"/>
    @endforeach
  </div>

</div>


@endsection
