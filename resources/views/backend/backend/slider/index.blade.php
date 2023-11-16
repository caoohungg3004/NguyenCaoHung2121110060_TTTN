@extends('layouts.admin')
@section('title','trang quan tri')
@section('content')
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <section class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1>slider</h1>
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
          <a href="{{ route('slider.create') }}" class="btn bg-success"><i class="fa-solid fa-plus"></i> Thêm </a>

        </div>
      </div>
      <div class="card-body">
        <table class="table table-bordered">
          <thead>
              <tr>
                  <th>#</th>
                  <th>Hình ảnh</th>
                  <th>Tên Slider</th>
                  <th>link</th>
                  <th>Chức năng</th>
                  <th>ID</th>

              </tr>
          </thead>
          <tbody>
              @foreach ($list_slider as $slider)
              <td>
                  <input type="checkbox" name="" id="">
              </td>
              <td>{{$slider->image}}</td>
              <td>{{$slider->name}}</td>
              <td>{{$slider->link}}</td>
              <td>

                  <a href="{{route('slider.show',['slider'=>1])}}" class="btn btn-sm btn-success"><i class="fa fa-eye"></i></a>
                  <a href="{{route('slider.edit',['slider'=>1])}}" class="btn btn-sm btn-primary"><i class="fa-regular fa-pen-to-square"></i></a>
                  <a href="{{route('slider.destroy',['slider'=>1])}}" class="btn btn-sm btn-danger" ><i class="fa fa-trash" aria-hidden="true"></i></a>
                @if ($slider->status==1)
                <a href="{{route('slider.edit',['slider'=>1])}}" class="btn btn-sm btn-primary">
                    <i class="fas fa-toggle-on"></i>
                </a>

                @else
                <a href="{{route('slider.edit',['slider'=>1])}}" class="btn btn-sm btn-primary">
                    <i class="fas fa-toggle-off"></i>
                </a>
                @endif

              </td>
              <td>{{$slider->id}}</td>
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
