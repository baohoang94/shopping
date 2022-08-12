@extends('layouts.admin')

@section('title')
    <title>thêm bài viết</title>
@endsection

@section('css')
    <link href="{{ asset('vendors/select2/select2.min.css') }}" rel="stylesheet" />
    <link href="{{ asset('admins/product/add/add.css') }}" rel="stylesheet" />
@endsection

@section('content')
    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        @include('partials.content-header', ['name' => 'blog', 'key' => 'Add'])
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
        <form action="{{ route('blogs.store') }}" method="post">
            <!-- Main content -->
            <div class="content">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-md-6">
                            @csrf
                            <div class="form-group">
                                <label>Tên bài viết</label>
                                <input class="form-control @error('title') is-invalid @enderror" name="title" placeholder="Nhập tên bài viết" value="{{ old('title') }}">
                                @error('title')
                                    <div class="alert alert-danger">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label>Mô tả bài viết</label>
                                <textarea class="form-control @error('description') is-invalid @enderror" name="description" placeholder="Nhập đoạn mở đầu ngắn của bài viết" value="{{ old('description') }}"></textarea>
                                @error('description')
                                    <div class="alert alert-danger">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label>Link ảnh đại diện</label>
                                <input type="url" class="form-control" name="image_link" placeholder="Nhập link ảnh đại diện" value="{{ old('image_link') }}">
                            </div>
                            <div class="form-group">
                                <label>Nguồn</label>
                                <input type="text" class="form-control" name="source" placeholder="Nguồn bài viết" value="{{ old('source') }}">
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="form-group">
                                <label>Nhập nội dung bài viết</label>
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
