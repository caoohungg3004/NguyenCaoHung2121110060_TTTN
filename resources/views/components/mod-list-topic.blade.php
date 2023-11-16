<div class="row clear-fix mt-5 ms-1">
    @foreach ($mod_list_topic as $list_topic)
    <div class="col-2">
        <div><img class="img-fluid" src="{{asset('img/product/'.$list_topic->image)}}" alt="{{$product->image}}"></div>
      </div>
    @endforeach

    <div class="col-9 bg-eeeeee product-detail">
        <p>{{$list_topic->detail}}</p>
    </div>

        {{-- slider --}}
        {{-- ưu đãi --}}




