@extends('layouts.site')
@section('title','Trang chủ')

@section('maincontent')

<section class="maincontent my-5">
    <div class="container">
        <div class="title-item mt-5 " style="background-image: url(https://img.myloview.com/posters/vector-illustration-breaking-news-background-world-global-tv-news-banner-template-400-195142330.jpg); ">
          <h3 class="fw-5">Tài khoản</h3>
          <div class="user-login ">
            <a class="me-2" href="index.php">Trang chủ</a>
            <i class="fa-solid fa-angle-right me-2"></i>
            <p class="orangepv d-inline-block">Tất cả bài viết</p>
          </div>
        </div>
        <div class="row">
          <div class="col-md-3 mt-5">
          <?php require_once('views/frontend/mod_list_topic.php'); ?>
          </div>
          <div class="col-md-9">
            <div class="row clear-fix mb-5 mt-5 tips">
          <?php foreach ($list_post as $post) : ?>
            <div class="col-4 post_user_ ">
              <a href="index.php?option=post&id=<?= $post->slug; ?>"><img class="img-fluid mt-2" src="public/image/post/<?= $post->image; ?>" alt="<?= $post->image; ?>"></a>
              <p class="fw-4"><?= $post->created_at; ?><br> <span class="fw-2">Đăng bởi: </span><?= $post->created_by; ?></p>
              <div class="text-center post-user mb-5"><a class="textdecor-none blackpv meo" href="index.php?option=post&id=<?= $post->slug; ?>"><?= $post->title; ?></a>
              </div>
            </div>
          <?php endforeach; ?>
        </div></div>
        </div>

        <div class="phantrang_post blackpv">
            {{ $list_post->render('frontend.name') }};
        </div>
      </div>

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
