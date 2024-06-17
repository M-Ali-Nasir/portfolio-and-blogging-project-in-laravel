@extends('blogs.layouts.mainLayout')

@section('blog-content')


@include('blogs.layouts.header')


<main id="main">

	<div class="container">

		<div class="row section topspace">
			<div class="col-md-12">
				<p class="lead text-center text-muted">Let me tell you something my friend. hope is a dangerous thing. hope can
					drive a man insane. you <a href="about.html">measure</a> yourself by the people who measure themselves by you.
					it only took me <a href="sidebar-right.html">six days</a>. </p>
			</div>
		</div> <!-- / section -->

		<div class="row section featured topspace">
			<h2 class="section-title"><span>Hot Topics</span></h2>
			<div class="row justify-content-center">

				@if (!empty($popularBlogs))
				@foreach($popularBlogs as $p_blog)
				<div class="col-sm-6 col-md-3">
					<span class="img">
						<img src="{{ asset('storage/'.$p_blog->image) }}" alt="image">
					</span>
					<h4 class="text-center blog-title" id="latestBlogLimitedTitle">{{
						\App\Http\Controllers\Blogs\BlogController::shortText($p_blog->title, 25)}}</h4>
					<p class="description" id="latestBlogLimitedText">{{
						\App\Http\Controllers\Blogs\BlogController::shortText($p_blog->description, 100)}}</p>
					<p class="text-center"><a href="{{ route('blogs.post',['id' => $p_blog->title]) }}"
							class="btn btn-action">Read more</a></p>
				</div>
				@endforeach
				@else
				<h3 class="text-center">No Posts Available</h3>
				@endif

			</div>
		</div> <!-- / section -->



		<div class="row section featured topspace">
			<h2 class="section-title"><span>Latest Posts</span></h2>
			<div class="row">

				@if (!empty($latestBlogs))
				@foreach($latestBlogs as $blog)
				<div class="col-sm-6 col-md-3">
					<span class="img">
						<img src="{{ asset('storage/'.$blog->image) }}" alt="image">
					</span>
					<h4 class="text-center blog-title" id="latestBlogLimitedTitle">{{
						\App\Http\Controllers\Blogs\BlogController::shortText($blog->title, 25)}}</h4>
					<p class="description" id="latestBlogLimitedText">{{
						\App\Http\Controllers\Blogs\BlogController::shortText($blog->description, 100)}}</p>
					<p class="text-center"><a href="{{ route('blogs.post',['id' => $blog->title]) }}" class="btn btn-action">Read
							more</a></p>
				</div>
				@endforeach
				@else
				<h3 class="text-center">No Posts Available</h3>
				@endif

			</div>
		</div> <!-- / section -->

		<div class="row section recentworks topspace">

			<h2 class="section-title"><span>Blog Categories</span></h2>

			<div class="thumbnails recentworks row">
				@if (!empty($postCategories))
				@foreach($postCategories as $category)
				<div class="col-xs-12 col-sm-6 col-md-4 col-lg-4">
					<a class="thumbnail" href="{{ route('blogs.category', ['title' => $category->id]) }}">
						<span class="img">
							<img src="{{ asset('storage/'.$category->image) }}" alt="image">
							<span class="cover"><span class="more">See details &rarr;</span></span>
						</span>
						<span class="title">{{ $category->name}}</span>
					</a>
					<h4></h4>
					<p></p>
				</div>

				@endforeach




				@else
				<h3 class="text-center">No Posts Available</h3>
				@endif


			</div>
			<p class="text-center"><a href="{{ route('blogs.categories')}}" class="btn btn-action">All Categories</a></p>

		</div> <!-- /section -->

		<div class="row section topspace">
			<div class="panel" style="background-color: #202020; color:aliceblue;">
				<div class="panel-body">
					<div class="col-lg-12">
						<form class="subscribe-form" method="POST" action="{{ route('blogs.subscribe')}}">
							@csrf
							<div class="subscribe-container">
								<h2>Subscribe</h2>
								<p>Stay in the loop with the latest insights! Subscribe to our newsletter and
									receive timely notifications whenever a new blog post is published.
									Enter your name and email address below and join our community to stay informed and inspired.</p>
								@if(session('success'))
								<p style="color: green">{{ session('success') }}</p>
								@endif
							</div>




							<div class="subscribe-container">
								<input class="subscribe-input" type="text" placeholder="Name" name="name" required>
								<input class="subscribe-input" type="text" placeholder="Email address" name="email" required>
								@error('email')
								<p class="text-red-500">{{ $message }}</p>
								@enderror
							</div>

							<div class="col-lg-4 text-right">

							</div>
							<div class="subscribe-container">
								<input class="btn btn-primary btn-lg" type="submit" value="Subscribe">
							</div>
							<div class="col-lg-4 text-right">

							</div>
						</form>
					</div>
					<div class="col-lg-4 text-right">

					</div>
				</div>
			</div>
		</div> <!-- /section -->

		<div class="row section clients topspace">
			<h2 class="section-title"><span>Clients</span></h2>
			<div class="col-lg-12">
				<p>

				</p>
			</div>
		</div> <!-- /section -->

	</div> <!-- /container -->

</main>





@endsection