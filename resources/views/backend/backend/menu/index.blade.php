@extends('layouts.admin')
@section('title','trang quan tri')
@section('content')
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <section class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1>menu</h1>
        </div>
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="#">Home</a></li>
            <li class="breadcrumb-item active">Blank Page</li>
          </ol>

        </div>
      </div>
    </div><!-- /.container-fluid -->
  </section>
  <!-- Main content -->
  <section class="content">

    <!-- Default box -->
    <div class="card">
      <div class="card-header">
        <h3 class="card-title">Title</h3>

        <div class="card-tools">
          <a href="{{ route('menu.create') }}" class="btn bg-success"><i class="fa-solid fa-plus"></i> Thêm </a>

        </div>
      </div>
      <div class="card-body">
        <table class="table table-bordered">
          <thead>
              <tr>
                  <th>#</th>
                  <th>Hình ảnh</th>
                  <th>Tên sản phẩm</th>
                  <th>slug sản phẩm</th>
                  <th>Chức năng</th>
                  <th>ID</th>

              </tr>
          </thead>
          <tbody>
              @foreach ($list_menu as $menu)
              <td>
                  <input type="checkbox" name="" id="">
              </td>
              <td>{{$menu->image}}</td>
              <td>{{$menu->name}}</td>
              <td>{{$menu->slug}}</td>
              <td>
                  <a href="{{route('menu.create')}}" class="btn btn-sm btn success">Thêm</a>
                  <a href="{{route('menu.show',['menu'=>1])}}" class="btn btn-sm btn success">xem</a>
                  <a href="{{route('menu.edit',['menu'=>1])}}" class="btn btn-sm btn primary">sửa</a>
                  <form action="{{route('menu.destroy',['menu'=>1])}}" method="POST">
                  @method('DELETE')
                  <button type="submit" class="btn btn-sm btn danger"><i class="fa fa-trash" aria-hidden="true"></i></button>
                  </form>

              </td>
              <td>{{$menu->id}}</td>
              @endforeach

          </tbody>
        </table>
      </div>
      <!-- /.card-body -->
      <div class="card-footer">
        Footer
      </div>
      <!-- /.card-footer-->
    </div>
    <!-- /.card -->

  </section>
  <!-- /.content -->
</div>

@endsection
