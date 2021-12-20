@extends('layouts.admin')

@section('title')
    <title>Danh sách sản phẩm</title>
@endsection
@section('css')
    <link rel="stylesheet" href="{{ asset('admins/product/index/list.css') }}">
@endsection
@section('js')
@endsection

@section('content')
<!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    @include('partials.content-header', ['name' => 'category', 'key' => 'List'])

    <!-- Main content -->
    <div class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-md-12">
              <a href="{{ route('product.create') }}" class="btn btn-success float-right m-2">Add</a>
          </div>
          <div class="col-md-12">
            <table class="table">
                <thead>
                  <tr>
                    <th scope="col">#</th>
                    <th scope="col">Tên sản phẩm</th>
                    <th scope="col">Giá</th>
                    <th scope="col">Hình ảnh</th>
                    <th scope="col">Danh mục</th>
                    <th scope="col">Action</th>
                  </tr>
                </thead>
                <tbody>
                  @foreach($products as $productItem)
                  <tr>
                    <th scope="row">{{ $productItem->id }}</th>
                    <td>{{ $productItem->name }}</td>
                    <td>{{ $productItem->price }}</td>
                    <td>
                        <img class="product_image_150_100" src="/shopping/public{{ $productItem->feature_image_path }}" alt="">
                    </td>
                    <td>{{ $productItem->category->name }}</td>
                    <td>
                      <a href="" class="btn btn-default">Edit</a>
                      <a href="" class="btn btn-danger">Delete</a>
                    </td>
                  </tr>
                  @endforeach
                </tbody>
              </table>
          </div>
          <div class="col-md-12">
            {{ $products->links() }}
          </div>
        </div>
        <!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
@endsection
