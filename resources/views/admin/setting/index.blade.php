@extends('layouts.admin')

@section('title')
    <title>Trang chủ</title>
@endsection

@section('content')
<!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    @include('partials.content-header', ['name' => 'settings', 'key' => 'List'])

    <!-- Main content -->
    <div class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-md-12">
              <a href="" class="btn btn-success float-right m-2">Add</a>
          </div>
          <div class="col-md-12">
            <table class="table">
                <thead>
                  <tr>
                    <th scope="col">#</th>
                    <th scope="col">Config key</th>
                    <th scope="col">Config value</th>
                    <th scope="col">Action</th>
                  </tr>
                </thead>
                <tbody>
                  {{-- @foreach($menus as $menu) --}}
                  <tr>
                    <th scope="row">1</th>
                    <td>config key</td>
                    <td>config value</td>
                    <td>
                      <a href="" class="btn btn-default">Edit</a>
                      <a href="" class="btn btn-danger">Delete</a>
                    </td>
                  </tr>
                  {{-- @endforeach --}}
                </tbody>
              </table>
          </div>
          <div class="col-md-12">
            {{-- {{ $menus->links() }} --}}
          </div>
        </div>
        <!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
@endsection
