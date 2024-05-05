@extends('blogs.layouts.mainLayout')

@section('blog-content')


    

@include('blogs.layouts.header')


    <main id="main" style="margin-bottom:50px;">


                <div class="carousel-inner py-4">
    <!-- Single item -->
    <div class="carousel-item active">
      <div class="container">

      <center>
        <h2 class="section-title"><span>Search results</span></h2>
        <p style="color: #bdbdbd"> Total Results:
           
            {{ count($allBlogs) }}
            
          </p>
        </center>

        <center>
          <p style="color: #bdbdbd; font-size: 30px; margin-top:20px;">Blogs</p>
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
        <hr>

        <center>
          <p style="color: #bdbdbd; font-size: 30px; margin-top:20px;"> Categories</p>
          </center>

        <div class="row">

        
            @if(!empty($postCategories))
            @foreach($postCategories as $category)
            <center>
              <div class="col-lg-4" style="margin-bottom: 10px;" >
                <div class="card" style="box-shadow: 0 0 5px rgba(255, 100, 100, 0.5);
                                          transition: box-shadow 0.3s ease;
                                          padding:5px 0;">
                    <span class = "img">
                  <img
                    src="{{ asset("storage/$category->image") }}"
                    class="card-img-top "
                    alt="Image"
                    style="height:200px"
                  /></span>
                  <div class="card-body">
                    <h5 class="card-title" style="color: #f4f4f4">{{ $category->name }}</h5>
                    <p class="card-text" style="color: #bdbdbd">
                      
                    </p>
                    <a href="{{ route('blogs.category', ['title' => $category->id]) }}" class="btn btn-primary">Show Posts</a>
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
