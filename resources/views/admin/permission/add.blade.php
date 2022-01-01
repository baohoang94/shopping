@extends('layouts.admin')

@section('title')
    <title>Tạo danh sách phân quyền</title>
@endsection

@section('content')
    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        @include('partials.content-header', ['name' => 'permission', 'key' => 'Add'])

        <!-- Main content -->
        <div class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-6">
                        <form action="{{ route('menus.store') }}" method="post">
                            @csrf
                            <div class="form-group">
                                <label>Chọn phân quyền cha</label>
                                <select class="form-control" name="parent_id">
                                    <option value="0">Chọn phân quyền cha</option>
                                    {{-- {!! $optionSelect !!} --}}
                                </select>
                            </div>
                            <div class="form-group">
                                <div class="row">
                                    <div class="col-md-3">
                                        <label>
                                            <input type="checkbox" name="list">
                                            Danh sách
                                        </label>
                                    </div>
                                    <div class="col-md-3">
                                        <label>
                                            <input type="checkbox" name="add">
                                            Thêm
                                        </label>
                                    </div>
                                    <div class="col-md-3">
                                        <label>
                                            <input type="checkbox" name="edit">
                                            Sửa
                                        </label>
                                    </div>
                                    <div class="col-md-3">
                                        <label>
                                            <input type="checkbox" name="delete">
                                            Xóa
                                        </label>
                                    </div>
                                </div>
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
