@extends('layouts.admin')

@section('title')
    <title>Edit Settings</title>
@endsection

@section('content')
    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        @include('partials.content-header', ['name' => 'settings', 'key' => 'Edit'])

        <!-- Main content -->
        <div class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-6">
                        <form action="{{ route('settings.update', ['id' => $setting->id]) }}?type={{ $setting->type }}" method="post">
                            @csrf
                            <div class="form-group">
                                <label>Config key</label>
                                <input type="text" value="{{ $setting->config_key }}" class="form-control @error('config_key') is-invalid @enderror" name="config_key" placeholder="Nhập config key">
                                @error('config_key')
                                    <div class="alert alert-danger">{{ $message }}</div>
                                @enderror
                            </div>

                            <div class="form-group">
                                <label>Config value</label>
                                @if (request()->type === 'Text')
                                    <input type="text" value="{{ $setting->config_value }}" class="form-control @error('config_value') is-invalid @enderror" name="config_value"
                                        placeholder="Nhập config value">
                                @elseif (request()->type === 'Textarea')
                                    <textarea type="text" class="form-control @error('config_value') is-invalid @enderror" name="config_value"
                                        placeholder="Nhập config value">{{ $setting->config_value }}</textarea>
                                @endif
                                @error('config_value')
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
