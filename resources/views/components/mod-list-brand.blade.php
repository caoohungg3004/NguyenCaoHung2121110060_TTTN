<div class="mod_listbrand mb-3">
    <ul class="list-group listbrand textdecor-none">
        <li class="list-group-item bg-success   textdecor-none" aria-current="true">
            <h5>  THƯƠNG HIỆU</h5>
        </li>
        @foreach ($mod_list_brand as $mod_row_listbrand)
            <li class="list-group-item">
                <a class="orangea textdecor-none" href="{{route('site.slug',['slug'=>$mod_row_listbrand->slug])}}">{{$mod_row_listbrand->name}}</a>
            </li>
        @endforeach
    </ul>
</div>
