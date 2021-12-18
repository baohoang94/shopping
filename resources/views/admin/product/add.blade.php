@extends('layouts.admin')

@section('title')
    <title>thêm sản phẩm</title>
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
                <input class="form-control" name="name" placeholder="Nhập tên sản phẩm">
              </div>
              <div class="form-group">
                <label>Giá sản phẩm</label>
                <input class="form-control" name="price" placeholder="Nhập giá sản phẩm">
              </div>
              <div class="form-group">
                <label>Ảnh đại diện</label>
                <input type="file" class="form-control-file" name="feature_image_path" placeholder="Nhập ảnh sản phẩm">
              </div>
              <div class="form-group">
                <label>Ảnh chi tiết</label>
                <input multiple type="file" class="form-control-file" name="image_path[]" placeholder="Nhập ảnh sản phẩm">
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
                </select>
              </div>            
            </div>
            <div class="col-md-12">
              <div class="form-group">
                <label>Nhập nội dung</label>
                <textarea name="contents" class="form-control tinymce_editor_init" rows="8"></textarea>
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
