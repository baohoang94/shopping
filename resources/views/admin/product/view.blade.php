@extends('layouts.admin')

@section('title')
    <title>Danh sách sản phẩm</title>
@endsection
@section('css')
    <link rel="stylesheet" href="{{ asset('admins/product/index/list.css') }}">
@endsection
@section('js')
<script src="{{ asset('vendors/sweetAlert2/sweetalert2@11.js') }}"></script>
<script src="{{ asset('admins/main.js') }}"></script>
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
            <table class="table">
                <thead>
                  <tr>
                    <th scope="col">#</th>
                    <th scope="col">Tên sản phẩm</th>
                    <th scope="col">Giá</th>
                    <th scope="col">Hình ảnh</th>
                    <th scope="col">Danh mục</th>
                    <th scope="col">Người tạo</th>
                    <th scope="col">Người xem</th>
                    <th scope="col">Thời gian xem</th>
                    <th scope="col">Action</th>
                  </tr>
                </thead>
                <tbody>
                  @foreach($productViews as $productViewItem)
                  <tr>
                    <th scope="row">{{ $productViewItem->id }}</th>
                    <td>{{ $productViewItem->product->name }}</td>
                    <td>{{ number_format((int)$productViewItem->product->price) }}</td>
                    <td>
                        <img class="product_image_150_100" src="{{ !empty($productViewItem->product->feature_image_path) ? '/shopping/public' . $productViewItem->product->feature_image_path : $productViewItem->product->feature_image_link }}" alt="">
                    </td>
                    {{-- tranh bi loi khi ko co ten danh muc --}}
                    <td>{{ optional($productViewItem->product->category)->name }}</td>
                    <td>{{ optional($productViewItem->product->user)->name }}</td>
                    <td>{{ optional($productViewItem->user)->name }}</td>
                    <td>{{ $productViewItem->created_at }}</td>
                  </tr>
                  @endforeach
                </tbody>
              </table>
          </div>
          <div class="col-md-12">
            {{ $productViews->links() }}
          </div>
        </div>
        <!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
@endsection
