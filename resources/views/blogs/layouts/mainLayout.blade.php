<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="description" content="">
	<meta name="author" content="Sergey Pozhilov (GetTemplate.com)">

	<title>Mani-Blogs</title>

	<link rel="shortcut icon" href="{{ asset('assets/images/logo.png') }}">

	<!-- Bootstrap -->
	<link href="http://netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap.no-icons.min.css" rel="stylesheet">
	<!-- Icons -->
	<link href="http://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css" rel="stylesheet">
	<!-- Fonts -->
	<link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Alice|Open+Sans:400,300,700">
	<!-- Custom styles -->
	<link rel="stylesheet" href="{{ asset('assets/css/styles_old.css') }}">



	<!--[if lt IE 9]> <script src="assets/js/html5shiv.js"></script> <![endif]-->
</head>

<body class="home">








	@yield('blog-content')






	<!-- php code to shorten the length of text -->

	@php

	@endphp


	<footer id="footer" style="margin-top: 10px;">
		<div class="container">
			<div class="row">
				<div class="col-md-3 widget">
					<h3 class="widget-title" style="text-align: center;">Contact</h3>
					<div class="widget-body" style="text-align: center;">
						<p>{{ $user->phone }}<br>
							<a href="mailto:$user->email">{{ $user->email }}</a><br>
							<br>
							{{ $user->address }}
						</p>
					</div>
				</div>

				<div class="col-md-3 widget">
					<h3 class="widget-title" style="text-align: center;">Follow me</h3>
					<div class="widget-body" style="text-align: center;">
						<p class="follow-me-icons" style="justify-item:center;">
							<a href="https://x.com/man171m?t=J_Ll-12D9vW0U1fwCTQE4w&s=09" target="_blank"
								style="display:inline-block;"><i class="fa fa-twitter fa-2"></i></a>
							<a href="https://www.facebook.com/profile.php?id=100008378625344&mibextid=ZbWKwL" target="_blank"
								style="display:inline-block;"><i class="fa fa-facebook fa-2"></i></a>
							<a href="https://www.instagram.com/man171m?igsh=N2lpZzZ4YnM0cGxh" style="display:inline-block;"
								target="_blank"><i class="fa fa-instagram fa-2"></i></a>
							<a href="https://www.linkedin.com/in/muhammad-ali-nasir-64a114177?utm_source=share&utm_campaign=share_via&utm_content=profile&utm_medium=android_app"
								target="_blank" style="display:inline-block;"><i class="fa fa-linkedin fa-2"></i></a>
						</p>
					</div>
				</div>

				<div class="col-md-3 widget">
					<h3 class="widget-title" style="text-align: center;">Vision for Blogs</h3>
					<div class="widget-body" style="text-align: justify;">
						<p>Explore a diverse array of captivating blogs on our site, covering an array of categories that cater to
							every interest.
							Our mission is to provide insightful and engaging content, fostering knowledge and discussion across a
							spectrum of topics. With a vision to inspire,
							inform, and connect, our blogs aim to create a community of curious minds seeking meaningful insights and
							perspectives.</p>
					</div>
				</div>

				<div class="col-md-3 widget">
					<h3 class="widget-title" style="text-align: center;">Navigate To</h3>
					<div class="widget-body" style="text-align: center;">
						<p>
						<ul class="footer-nav">
							<li><a href="{{ Route('home') }}">My Portfolio</a></li>
							<li><a href="{{ Route('blogs.categories') }}">Blog Categories</a></li>
							<li><a href="{{ Route('blogs.latestBlogs') }}">Latest Blogs</a></li>
							<li><a href="{{ Route('blogs.featuredBlogs') }}">Hot Topics</a></li>

						</ul>

						</p>
					</div>
				</div>

			</div> <!-- /row of widgets -->
			<p class="text-center text-muted" style="margin-top: 20px;">&copy; {{ date('Y') }} Mani-Blogs </p>
		</div>
	</footer>




	<!-- JavaScript libs are placed at the end of the document so the pages load faster -->
	<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
	<script src="http://netdna.bootstrapcdn.com/bootstrap/3.0.0/js/bootstrap.min.js"></script>
	<script src="{{ asset('assets/js/template.js') }}"></script>
</body>

</html>