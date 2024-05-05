@extends('blogs.layouts.mainLayout')

@section('blog-content')


    

@include('blogs.layouts.header')



    <main id="main">


  
    
  <!-- Inner -->
  <div class="carousel-inner py-4">
    <!-- Single item -->
    <div class="carousel-item active">
      <div class="container">
      <center>
        <h2 class="section-title"><span>{{ $title }}</span></h2>
        <p style="color: #bdbdbd"> Total Blog Categories :
           
            {{ count($postCategories) }}
            
          </p>
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
  <!-- Inner -->


    </main>


@endsection
