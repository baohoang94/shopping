@extends('layouts.admin')

@section('title')
    <title>Danh sách bài viết</title>
@endsection
@section('css')

@endsection
@section('js')
    <script src="{{ asset('vendors/sweetAlert2/sweetalert2@11.js') }}"></script>
    <script src="{{ asset('admins/main.js') }}"></script>
@endsection
@section('content')
    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        @include('partials.content-header', ['name' => 'blog', 'key' => 'List'])

        <!-- Main content -->
        <div class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-12">
                        <a href="{{ route('blogs.create') }}" class="btn btn-success float-right m-2">Add</a>
                    </div>
                    <div class="col-md-12">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th scope="col">#</th>
                                    <th scope="col">Tên bài viết</th>
                                    <th scope="col">Nội dung mở đầu bài viết</th>
                                    <th scope="col">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($blogs as $blog)
                                    <tr>
                                        <th scope="row">{{ $blog->id }}</th>
                                        <td>{{ $blog->title }}</td>
                                        <td>{{ $blog->description }}</td>
                                        <td>
                                            <a href="{{ route('blogs.edit', ['id' => $blog->id]) }}"
                                                class="btn btn-default">Edit</a>
                                            <a href="" data-url="{{ route('blogs.delete', ['id' => $blog->id]) }}" class="btn btn-danger action_delete">Delete</a>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                    <div class="col-md-12">
                        {{ $blogs->links() }}
                    </div>
                </div>
                <!-- /.row -->
            </div><!-- /.container-fluid -->
        </div>
        <!-- /.content -->
    </div>
    <!-- /.content-wrapper -->
@endsection
