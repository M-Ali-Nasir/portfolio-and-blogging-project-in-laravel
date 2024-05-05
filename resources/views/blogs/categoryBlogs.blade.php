@extends('blogs.layouts.mainLayout')

@section('blog-content')


    

@include('blogs.layouts.header')


    <!-- <header id="header">
        <div id="head" class="parallax" parallax-speed="1">
            <h1 id="logo" class="text-center">
                <img class="img-circle" src="{{ asset("storage/$user->profile_pic") }}" alt="">
                <span class="title">{{ $user->name }}'s Blog</span>
                <span class="tagline">A creative man is motivated by the desire to achieve, not by the desire to beat
                    others.</span>
            </h1>
        </div>

        <nav class="navbar navbar-default navbar-sticky">
            <div class="container-fluid">

                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse"
                        data-target="#bs-example-navbar-collapse-1"> <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span>
                    </button>
                </div>

                <div class="navbar-collapse collapse">

                    <ul class="nav navbar-nav">
                        <li><a href="{{ route('blogs') }}">Home</a></li>
                        <li><a href="about.html">About</a></li>
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">More Pages <b
                                    class="caret"></b></a>
                            <ul class="dropdown-menu">
                                <li><a href="sidebar-left.html">Left Sidebar</a></li>
                                <li><a href="sidebar-right.html">Right Sidebar</a></li>
                                <li><a href="#">Blog Post</a></li>
                            </ul>
                        </li>
                        <li class="active"><a href="#">Blog</a></li>
                    </ul>

                </div>
            </div>
        </nav>
    </header> -->

    <main id="main">


                <div class="carousel-inner py-4">
    <!-- Single item -->
    <div class="carousel-item active">
      <div class="container">
        <center>
        <h2 class="section-title"><span>{{$category->name}}</span></h2>
        
        <p style="color: #bdbdbd"> Total Posts in this category:
           
            {{ count($blogPosts) }}
            
          </p>
        </center>
        <div class="row">

        
        @if(!empty($blogPosts))
                @foreach($blogPosts as $blog)
        <center>
          <div class="col-lg-4" style="margin-bottom: 10px" >
            <div class="card" >
                <span class = "img">
              <img
                src="{{ asset("storage/$blog->image") }}"
                class="card-img-top "
                alt="Image"
                style="height:200px"
              /></span>
              <div class="card-body">
                <h5 class="card-title" style="color: #f4f4f4">{{ $blog->title }}</h5>
                <p class="card-text" style="color: #bdbdbd">
                {{ \App\Http\Controllers\Blogs\BlogController::shortText($blog->description, 80) }}
                </p>
                <a href="{{ route('blogs.post',['id' => $blog->title]) }}" class="btn btn-primary">Read More</a>
              </div>
            </div>
          </div>
</center>

          @endforeach
          @endif

        </div>
      </div>
    </div>

  </div>



              
                

             

    </main>


@endsection
