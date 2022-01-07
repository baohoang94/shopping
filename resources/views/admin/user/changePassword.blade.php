@extends('layouts.admin')

@section('title')
    <title>Đổi mật khẩu</title>
@endsection
@section('css')
    <link href="{{ asset('vendors/select2/select2.min.css') }}" rel="stylesheet" />
    <link href="{{ asset('admins/user/add/add.css') }}" rel="stylesheet" />
@endsection
@section('js')
    <script src="{{ asset('vendors/select2/select2.min.js') }}"></script>
    <script src="{{ asset('admins/user/add/add.js') }}"></script>
@endsection
@section('content')
    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        @include('partials.content-header', ['name' => 'user', 'key' => 'ChangePassword'])

        <!-- Main content -->
        <div class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-6">
                        <form action="{{ route('users.updatePassword') }}" method="post" enctype="multipart/form-data">
                            @csrf
                            @if (!empty($messge))
                            <div class="alert alert-danger" role="alert">
                                {{ $messge }}
                            </div>
                            @endif
                            <div class="form-group">
                                <label>Tên</label>
                                <input disabled class="form-control" name="name" value="{{ auth()->user()->name }}" placeholder="Nhập tên">
                            </div>
                            <div class="form-group">
                                <label>Mật khẩu cũ</label>
                                <input type="password" class="form-control" name="old_password" value="" placeholder="Nhập mật khẩu cũ">
                            </div>
                            <div class="form-group">
                                <label>Mật khẩu mới</label>
                                <input type="password" class="form-control" name="new_password" value="" placeholder="Nhập mật khẩu mới">
                            </div>
                            <div class="form-group">
                                <label>Xác nhận mật khẩu mới</label>
                                <input type="password" class="form-control" name="confirm_new_password" value="" placeholder="Nhập lại mật khẩu mới">
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
