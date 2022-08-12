@extends('layouts.master')
@section('title')
    <title>Thời trang nam, phối đồ nam</title>
@endsection
@section('css')
    <link href="{{ asset('homes/home.css') }}" rel="stylesheet">
@endsection
@section('js')
    <script src="{{ asset('homes/home.js') }}"></script>
@endsection
@section('content')
    <section>
		<div class="container">
			<div class="row">
				@include('components.sidebar')
				<div class="col-sm-9">
					<div class="blog-post-area">
						<h2 class="title text-center">Bài viết mới</h2>
                        @foreach ($blogs as $blog)
						<div class="single-blog-post">
							<h3>{{ $blog->title }}</h3>
							{{-- <div class="post-meta">
								<ul>
									<li><i class="fa fa-user"></i> Mac Doe</li>
									<li><i class="fa fa-clock-o"></i> 1:33 pm</li>
									<li><i class="fa fa-calendar"></i> DEC 5, 2013</li>
								</ul>
								<span>
										<i class="fa fa-star"></i>
										<i class="fa fa-star"></i>
										<i class="fa fa-star"></i>
										<i class="fa fa-star"></i>
										<i class="fa fa-star-half-o"></i>
								</span>
							</div> --}}
							<a href="">
								<img src="{{ $blog->image_link }}" alt="">
							</a>
							<p>
								{{ $blog->description }}
							</p>
							<a  class="btn btn-primary" href="{{ route('blog.detail', ['id' => $blog->id]) }}">Xem thêm</a>
						</div>
						@endforeach
						<div class="pagination-area">
							{{ $blogs->links() }}
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
@endsection
