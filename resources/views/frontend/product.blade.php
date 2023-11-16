@extends('layouts.site')
@section('title','Trang chủ')

@section('maincontent')

<section class="maincontent my-5">
    <div class="container">
        <div class="row">
            <div class="col-md-3">
                <x-mod-list-category />
                <x-mod-list-brand />
            </div>
            <div class="col-md-9">
                <div class="mx-5 ">
                    <div class="danhmuc" ><span class="fs-5 fw-4 ">TẤT CẢ SẢN PHẨM</span></div>
                </div>

                <div class="row mb-2 mt-5">
                            <div class="container" >
                            <ul class="products">
                            @foreach ($list_product as $product)
                                <li>
                                    <div class="product-item">
                                        <div class="product-top">
                                            <a href="{{$product->slug}}" class="product thump">
                                                <img src="{{asset('img/product/'.$product->image)}}" alt="spnb">
                                            </a>
                                            <a href="" class="buy-now">MUA NGAY</a>
                                        </div>
                                        <div class="product-info">
                                            <a href="" class="product-cat">{{$product->category_id}}</a>
                                            <a href="" class="product-name">{{$product->name}}</a>
                                            <div class="product-price"><del>{{$product->price}}</del></div>
                                            <div class="product-price">{{$product->price_sale}}</div>


                                            <div class="">
                                        <a href="" class="btn btn-sm "><i class="fa-solid fa-cart-shopping orangea"></i></a>
                                    </div>
                                        </div>

                                    </div>
                                </li>


                            @endforeach
                            </ul>
                            </div>

                </div>

                    {{ $list_product->render('frontend.name') }}






        </div>
    </div>
</section>

@endsection
