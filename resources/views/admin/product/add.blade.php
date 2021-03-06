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
        {{-- <div class="col-md-12">
            @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif
        </div> --}}
        <div class="d-none appendElement">
            <input type="url" class="form-control" name="image_link[]" placeholder="Nhập đường dẫn ảnh" value="">
        </div>
        <form action="{{ route('product.store') }}" method="post" enctype="multipart/form-data">
            <!-- Main content -->
            <div class="content">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-md-6">
                            @csrf
                            <div class="form-group">
                                <label>Tên sản phẩm</label>
                                <input class="form-control @error('name') is-invalid @enderror" name="name" placeholder="Nhập tên sản phẩm" value="{{ old('name') }}">
                                @error('name')
                                    <div class="alert alert-danger">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label>Giá sản phẩm</label>
                                <input class="form-control @error('price') is-invalid @enderror" name="price" placeholder="Nhập giá sản phẩm" value="{{ old('price') }}">
                                @error('price')
                                    <div class="alert alert-danger">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label>Link sản phẩm</label>
                                <input type="url" class="form-control" name="url_link" placeholder="Nhập Link sản phẩm" value="{{ old('url_link') }}">
                            </div>
                            <div class="form-group">
                                <label>Ảnh đại diện</label>
                                <input type="file" class="form-control-file" name="feature_image_path"
                                    placeholder="Nhập ảnh sản phẩm">
                            </div>
                            <div class="form-group">
                                <label>Ảnh chi tiết</label>
                                <input multiple type="file" class="form-control-file" name="image_path[]"
                                    placeholder="Nhập ảnh sản phẩm">
                            </div>
                            <div class="form-group">
                                <label>Ảnh theo link</label>
                                <input type="url" class="form-control" name="feature_image_link" placeholder="Nhập Ảnh theo link" value="{{ old('feature_image_link') }}">
                            </div>
                            <div class="form-group image_link">
                                <label>Ảnh chi tiết theo link</label>
                                @if (!empty(old('image_link')))
                                    @foreach (old('image_link') as $image_link_item)
                                        <input type="url" class="form-control" name="image_link[]" placeholder="Nhập đường dẫn ảnh" value="{{ $image_link_item }}">
                                    @endforeach
                                @else
                                    <input type="url" class="form-control" name="image_link[]" placeholder="Nhập đường dẫn ảnh" value="">
                                @endif
                            </div>
                            <div class="btn btn-primary" onclick="$('.image_link').append($('.appendElement').html())">Thêm</div>
                            <div class="form-group">
                                <label>Chọn danh mục</label>
                                <select class="form-control select2_init @error('category_id') is-invalid @enderror" name="category_id">
                                    <option value="">Chọn danh mục</option>
                                    {!! $htmlOption !!}
                                </select>
                                @error('category_id')
                                    <div class="alert alert-danger">{{ $message }}</div>
                                @enderror
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
                                <textarea name="contents"
                                    class="form-control tinymce_editor_init @error('contents') is-invalid @enderror" rows="8">{{ old('contents') }}</textarea>
                                @error('contents')
                                    <div class="alert alert-danger">{{ $message }}</div>
                                @enderror
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
    <script src="https://cdn.tiny.cloud/1/27cr4naem6bn54b3int4ij7mxvafppvyrlegajif9r1n43to/tinymce/5/tinymce.min.js"
        referrerpolicy="origin"></script>
    <script src="{{ asset('admins/product/add/add.js') }}"></script>
@endsection
