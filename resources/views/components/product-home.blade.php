<div class="headline">
    <h3>{{$category->name}}</h3>
    <a href="{{route('site.slug',['slug'=>$category->slug])}}">Xem tất cả</a>
  </div>
  <div class="row mb-2 mt-5">
    <div class="container" >
        <ul class="products">
            @foreach ($list_product as $product)

            <li>
                <div class="product-item">
                    <div class=" product-top">
                        <div class="card" style="width:100%">
                            <a href="{{route('site.slug',['slug'=>$product->slug])}}" class="product thump">
                                <img src="{{asset('img/product/'.$product->image)}}" alt="" >
                            </a>
                            <a href="" class="buy-now">MUA NGAY</a>
                            </div>
                            <div class="product-info">

                            <a href="" class="product-cat">{{$product->category_id}}</a>
                            <a href="{{route('site.slug',['slug'=>$product->slug])}}" class="product-name">{{$product->name}}</a>
                            <div class="product-price"><del>{{$product->price}}</del></div>
                            <div class="product-price">{{$product->price_sale}}</div>
                            </div>
                        </div>

                </div>
            </li>
            @endforeach
        </ul>
    </div>
  </div>
