@extends('layouts.admin')

@section('title')
    <title>Sửa slider</title>
@endsection
@section('css')
    <link rel="stylesheet" href="{{ asset('admins/slider/add/add.css') }}">
@endsection

@section('content')
    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        @include('partials.content-header', ['name' => 'slider', 'key' => 'Edit'])

        <!-- Main content -->
        <div class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-6">
                        <form action="{{ route('slider.update', ['id' => $slider->id]) }}" method="post" enctype="multipart/form-data">
                            @csrf
                            <div class="form-group">
                                <label>Tên slider</label>
                                <input class="form-control @error('name') is-invalid @enderror" name="name" value="{{ $slider->name }}" placeholder="Nhập tên slider">
                                @error('name')
                                    <div class="alert alert-danger">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label>Mô tả</label>
                                <textarea class="form-control @error('description') is-invalid @enderror" name="description" rows="4">{{ $slider->description }}</textarea>
                                @error('description')
                                    <div class="alert alert-danger">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label>Link hình ảnh</label>
                                <input type="url" class="form-control" name="image_link" placeholder="Nhập Link hình ảnh" value="{{ $slider->image_link }}">
                            </div>
                            <div class="col-md-4">
                                <div class="row">
                                    <img class="image_slider" src="{{ !empty($slider->image_path) ? config('app.base_image_url') . $slider->image_path : $slider->image_link }}">
                                </div>
                            </div>
                            <div class="form-group">
                                <label>Link liên kết</label>
                                <input type="url" class="form-control" name="url_link" placeholder="Nhập Link liên kết" value="{{ old('url_link') }}">
                            </div>
                            <div class="form-group">
                                <label>Ảnh</label>
                                <input type="file" class="form-control-file @error('image_path') is-invalid @enderror" name="image_path">
                                <div class="col-md-4">
                                    <div class="row">
                                        <img class="image_slider" src="/shopping/public{{ $slider->image_path }}" alt="{{ $slider->image_name }}">
                                    </div>
                                </div>
                                @error('image_path')
                                    <div class="alert alert-danger">{{ $message }}</div>
                                @enderror
                            </div>
                            <button type="submit" class="btn btn-primary">Submit</button>
                        </form>
                    </div>
                </div>
                <!-- /.row -->
            </div><!-- /.container-fluid -->
        </div>
        <!-- /.content -->
    </div>
    <!-- /.content-wrapper -->
@endsection
