@extends('blogs.layouts.mainLayout')

@section('blog-content')


    

@include('blogs.layouts.header')


    <main id="main" style="margin-bottom:50px;">


                <div class="carousel-inner py-4">
    <!-- Single item -->
    <div class="carousel-item active">
      <div class="container">

      <center>
        <h2 class="section-title"><span>{{ $title }}</span></h2>
        <p style="color: #bdbdbd"> Total Blogs:
           
            {{ count($allBlogs  ) }}
            
          </p>
        </center>

        
        <div class="row">

        
        @if(!empty($allBlogs))
                @foreach($allBlogs as $blog)
        <center>
            <div class="col-lg-4" >
            <div class="card" 
                style="margin: 10px 0 10px 0; box-shadow: 0 0 5px rgba(255, 100, 100, 0.5);
                    transition: box-shadow 0.3s ease;
            >
                <span class = "img">
              <img
                src="{{ asset("storage/$blog->image") }}"
                class="card-img-top "
                alt="Image"
                style="height:200px"
              /></span>
              <div class="card-body">
                <h5 class="card-title" style="color:#e7e7e7">{{ $blog->title }}</h5>
                <p class="card-text">
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
