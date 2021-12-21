@extends('layouts.admin')

@section('title')
    <title>Sửa sản phẩm</title>
@endsection

@section('css')
  <link href="{{ asset('vendors/select2/select2.min.css') }}" rel="stylesheet" />
  <link href="{{ asset('admins/product/add/add.css') }}" rel="stylesheet" />
@endsection

@section('content')
<!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
  @include('partials.content-header', ['name' => 'product', 'key' => 'Add'])
    <form action="{{ route('product.store') }}" method="post" enctype="multipart/form-data">
      <!-- Main content -->
      <div class="content">
        <div class="container-fluid">
          <div class="row">
            <div class="col-md-6">
              @csrf
              <div class="form-group">
                <label>Tên sản phẩm</label>
                <input class="form-control" name="name" value="{{ $product->name }}" placeholder="Nhập tên sản phẩm">
              </div>
              <div class="form-group">
                <label>Giá sản phẩm</label>
                <input class="form-control" name="price" value="{{ $product->price }}" placeholder="Nhập giá sản phẩm">
              </div>
              <div class="form-group">
                <label>Ảnh đại diện</label>
                <input type="file" class="form-control-file" name="feature_image_path" placeholder="Nhập ảnh sản phẩm">
                <div class="col-md-4 feature_image_container">
                    <div class="row">
                        <img class="feature_image" src="/shopping/public{{ $product->feature_image_path }}" alt="">
                    </div>
                </div>
              </div>
              <div class="form-group">
                <label>Ảnh chi tiết</label>
                <input multiple type="file" class="form-control-file" name="image_path[]" placeholder="Nhập ảnh sản phẩm">
                <div class="col-md-12 container_image_detail">
                    <div class="row">
                        @foreach ($product->productImages as $productImageItem)
                        <div class="col-md-3">
                            <img class="image_detail_product" src="/shopping/public{{ $productImageItem->image_path }}" alt="">
                        </div>
                        @endforeach
                    </div>
                </div>
              </div>
              <div class="form-group">
                <label>Chọn danh mục</label>
                <select class="form-control select2_init" name="category_id">
                  <option value="0">Chọn danh mục</option>
                  {!! $htmlOption !!}
                </select>
              </div>
              <div class="form-group">
                <label>Chọn tag cho sản phẩm</label>
                <select name="tags[]" class="form-control tags_select_choose" multiple>
                    @foreach ($product->tags as $tagItem)
                        <option selected value="{{ $tagItem->id }}">{{ $tagItem->name }}</option>
                    @endforeach
                </select>
              </div>            
            </div>
            <div class="col-md-12">
              <div class="form-group">
                <label>Nhập nội dung</label>
                <textarea name="contents" class="form-control tinymce_editor_init" rows="8">{{ $product->content }}</textarea>
              </div>
            </div>
            <div class="col-md-12">
              <div class="form-group">
                <button type="submit" class="btn btn-primary">Submit</button>
              </div>
            </div>
          </div>
          <!-- /.row -->
        </div><!-- /.container-fluid -->
      </div>
      <!-- /.content -->
    </form>
  </div>
  <!-- /.content-wrapper -->
@endsection

@section('js')
  <script src="{{ asset('vendors/select2/select2.min.js') }}"></script>
  <script src="https://cdn.tiny.cloud/1/27cr4naem6bn54b3int4ij7mxvafppvyrlegajif9r1n43to/tinymce/5/tinymce.min.js" referrerpolicy="origin"></script>
  <script src="{{ asset('admins/product/add/add.js') }}"></script>
@endsection
