<div class="container">
    <div class="container">
<nav class="navbar navbar-expand-lg bg-body-white ">
    <div class="container-fluid">
      <a class="navbar-brand" href="#">Giới Thiệu</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
            @foreach ($menus as $menu)
                <x-main-sub-menu :menu="$menu"/>
            @endforeach

        </ul>

      </div>
    </div>
  </nav>
</div>
</div>
