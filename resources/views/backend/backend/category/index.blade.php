@extends('layouts.admin')
@section('title','trang quan tri')
@section('content')
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <section class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1>category</h1>
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
          <a href="{{ route('category.create') }}" class="btn bg-success"><i class="fa-solid fa-plus"></i> Thêm </a>

        </div>
      </div>
      <div class="card-body">
        <table class="table table-bordered">
          <thead>
              <tr>
                  <th style="width:20px" class="text-center">#</th>
                  <th>Tên danh mục</th>
                  <th>Slug</th>
                  <th style="width:200px" class="text-center">Ngày đăng</th>
                  <th style="width:200px" class="text-center">Chức năng</th>
                  <th style="width:20px" class="text-center">ID</th>


              </tr>
          </thead>
          <tbody>
              @foreach ($list_category as $category)
              <tr>
              <td>
                  <input type="checkbox" name="" id="">
              </td>
              <td>{{$category->name}}</td>
              <td>{{$category->slug}}</td>
              <td>{{$category->created_at}}</td>
              <td>

                <a href="{{route('category.show',['category'=>1])}}" class="btn btn-sm btn-success"><i class="fa fa-eye"></i></a>
                <a href="{{route('category.edit',['category'=>1])}}" class="btn btn-sm btn-primary"><i class="fa-regular fa-pen-to-square"></i></a>
                <a href="{{route('category.destroy',['category'=>1])}}" class="btn btn-sm btn-danger" ><i class="fa fa-trash" aria-hidden="true"></i></a>
                @if ($category->status==1)
                <a href="{{route('category.edit',['category'=>1])}}" class="btn btn-sm btn-primary">
                    <i class="fas fa-toggle-on"></i>
                </a>

                @else
                <a href="{{route('category.edit',['category'=>1])}}" class="btn btn-sm btn-primary">
                    <i class="fas fa-toggle-off"></i>
                </a>
                @endif

              </td>
              <td>{{$category->id}}</td>
            </tr>
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
