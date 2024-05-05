

<header id="header">
	
	

	<nav class="navbar navbar-default navbar-sticky">
		<div class="container-fluid">
			<a class="navbar-brand" href="{{ route('blogs') }}">
				<img src="{{ asset('assets/images/blogLogos/logo-no-background.png') }}" width="30" height="30" alt="">
			  </a>
			
			<div class="navbar-header">
				<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1"> <span class="sr-only">Toggle navigation</span> <span class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span> </button>
			</div>
			
			<div class="navbar-collapse collapse">
				
				<ul class="nav navbar-nav">
					<li class="{{ Request::routeIs('blogs') ? 'active' : '' }}"><a href="{{ route('blogs') }}">Home</a></li>
					<li class="{{ Request::routeIs('blogs.featuredBlogs') ? 'active' : '' }}"><a href="{{ route('blogs.featuredBlogs')}}">Featured blogs</a></li>
					<li class="{{ Request::routeIs('blogs.allBlogs') ? 'active' : '' }}"><a href="{{ route('blogs.allBlogs')}}">All Blogs</a></li>
					<li class="{{ Request::routeIs(['blogs.categories','blogs.latestBlogs','blogs.popularCategories']) ? 'active' : '' }}" class="dropdown">
						<a href="#" class="dropdown-toggle" data-toggle="dropdown">More Pages <b class="caret"></b></a>
						<ul class="dropdown-menu">
							<li class="{{ Request::routeIs('blogs.latestBlogs') ? 'active' : '' }}"><a href="{{ route('blogs.latestBlogs')}}">Latest Blogs</a></li>
							<li class="{{ Request::routeIs('blogs.popularCategories') ? 'active' : '' }}"><a href="{{ route('blogs.popularCategories')}}">Popular Categories</a></li>
							<li class="{{ Request::routeIs('blogs.categories') ? 'active' : '' }}"><a href="{{ route('blogs.categories')}}">All Categories</a></li>
						</ul>
					</li>
					
					<li>
						<div class="nav-search" style="text-align: center;">
							<form method="GET" action="{{ route('blogs.search') }}">
								@csrf
								<input type="text" style="border:1px; border-radius:2px;" value="{{ old('searchKey')}}" name="searchKey"/>
								<button type="submit" style="border:1px; border-radius:2px;"><i class="fa fa-search" ></i></button>
							</form>
						</div>	
						
					</li>
				</ul>
				
				
			</div><!--/.nav-collapse -->	
			</div>
	</nav>
</header>