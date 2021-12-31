@extends('layouts.admin')

@section('title')
    <title>Thêm vai trò</title>
@endsection
@section('css')
    <link rel="stylesheet" href="{{ asset('admins/role/add/add.css') }}">
@endsection
@section('js')
    <script src="{{ asset('admins/role/add/add.js') }}"></script>
@endsection

@section('content')
    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        @include('partials.content-header', ['name' => 'role', 'key' => 'Add'])

        <!-- Main content -->
        <div class="content">
            <div class="container-fluid">
                <div class="row">
                    <form action="{{ route('slider.store') }}" method="post" enctype="multipart/form-data"
                        style="width:100%">
                        <div class="col-md-12">
                            @csrf
                            <div class="form-group">
                                <label>Tên vai trò</label>
                                <input class="form-control" name="name" value="{{ old('name') }}"
                                    placeholder="Nhập tên vai trò">
                            </div>
                            <div class="form-group">
                                <label>Mô tả vai trò</label>
                                <textarea class="form-control" name="display_name"
                                    rows="4">{{ old('display_name') }}</textarea>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="row">
                                @foreach ($permissionsParent as $permissionsParentItem)
                                    <div class="card border-primary mb-3 col-md-12">
                                        <div class="card-header">
                                            <label for="">
                                                <input type="checkbox" name="" class="checkbox_wrapper">
                                            </label>
                                            Module {{ $permissionsParentItem->name }}
                                        </div>
                                        <div class="row">
                                            @foreach ($permissionsParentItem->permissionsChildrent as $permissionsChildrentItem)
                                                <div class="card-body text-primary col-md-3">
                                                    <h5 class="card-title">
                                                        <label for="">
                                                            <input type="checkbox" class="checkbox_childrent"
                                                                name="permission_id[]"
                                                                value="{{ $permissionsChildrentItem->id }}">
                                                        </label>
                                                        {{ $permissionsChildrentItem->name }}
                                                    </h5>
                                                </div>
                                            @endforeach
                                        </div>
                                    </div>
                                @endforeach
                            </div>
                        </div>
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </form>
                </div>
                <!-- /.row -->
            </div><!-- /.container-fluid -->
        </div>
        <!-- /.content -->
    </div>
    <!-- /.content-wrapper -->
@endsection
