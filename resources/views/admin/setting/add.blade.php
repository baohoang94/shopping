@extends('layouts.admin')

@section('title')
    <title>Add Settings</title>
@endsection

@section('content')
    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        @include('partials.content-header', ['name' => 'settings', 'key' => 'Add'])

        <!-- Main content -->
        <div class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-6">
                        <form action="" method="post">
                            @csrf
                            <div class="form-group">
                                <label>Config key</label>
                                <input type="text" class="form-control" name="config_key" placeholder="Nhập config key">
                            </div>

                            <div class="form-group">
                                <label>Config value</label>
                                @if (request()->type === 'Text')
                                    <input type="text" class="form-control" name="config_value"
                                        placeholder="Nhập config value">
                                @elseif (request()->type === 'Textarea')
                                    <textarea type="text" class="form-control" name="config_value"
                                        placeholder="Nhập config value"></textarea>
                                @endif
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
