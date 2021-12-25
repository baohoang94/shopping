@extends('layouts.admin')

@section('title')
    <title>Danh sach slider</title>
@endsection
@section('css')
    <link rel="stylesheet" href="{{ asset('admins/slider/index/list.css') }}">
@endsection

@section('content')
<!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    @include('partials.content-header', ['name' => 'slider', 'key' => 'List'])

    <!-- Main content -->
    <div class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-md-12">
              <a href="{{ route('slider.create') }}" class="btn btn-success float-right m-2">Add</a>
          </div>
          <div class="col-md-12">
            <table class="table">
                <thead>
                  <tr>
                    <th scope="col">#</th>
                    <th scope="col">Tên slider</th>
                    <th scope="col">Description</th>
                    <th scope="col">Ảnh</th>
                    <th scope="col">Action</th>
                  </tr>
                </thead>
                <tbody>
                  @foreach($sliders as $slider)
                  <tr>
                    <th scope="row">1</th>
                    <td>{{ $slider->name }}</td>
                    <td>{{ $slider->description }}</td>
                    <td>
                        <img class="image_slider_150_100" src="/shopping/public{{ $slider->image_path }}" alt="{{ $slider->image_name }}">
                    </td>
                    <td>
                      <a href="{{ route('slider.edit', ['id' => $slider->id]) }}" class="btn btn-default">Edit</a>
                      <a href="" class="btn btn-danger">Delete</a>
                    </td>
                  </tr>
                  @endforeach
                </tbody>
              </table>
          </div>
          <div class="col-md-12">
            {{ $sliders->links() }}
          </div>
        </div>
        <!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
@endsection
