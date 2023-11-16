<div class="mod_listcategory mb-5">
    <ul class="list-group listcategory textdecor-none">
        <li class="list-group-item bg-success   textdecor-none" aria-current="true"><h5>  DANH MỤC SẢN PHẨM</h5></li>
        @foreach ($mod_list_category as $mod_row_listcat)
            <li class="list-group-item">
                <a class="orangea textdecor-none" href="{{route('site.slug',['slug'=>$mod_row_listcat->slug])}}">{{$mod_row_listcat->name}}</a>
            </li>
        @endforeach
    </ul>
</div>
