{{-- <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <!-- Favicon -->
    <link href="{{ asset('import/assets/img/favicon.ico') }}" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500;700;900&display=swap" rel="stylesheet">

    <!-- Font Awesome -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="{{ asset('import/assets/lib/owlcarousel/assets/owl.carousel.min.css') }}" rel="stylesheet">
    <link href="{{ asset('import/assets/lib/lightbox/css/lightbox.min.css') }}" rel="stylesheet">

    <!-- Customized Bootstrap Stylesheet -->
    <link href="{{ asset('import/assets/css/style.css') }}" rel="stylesheet">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>


</head>
<body>
  
    <nav class="navbar navbar-light bg-light">
        <div class="container-fluid">
          <div class="d-flex">
            <a class="navbar-brand" href="{{ route('home') }}">Home</a>
            <span class="navbar-brand">/</span>
            <a class="navbar-brand" href="{{ route('project', ['id' => $project->title]) }}">{{$project->title}}</a>
          </div>
          <div class="d-flex">
            <a class="navbar-brand btn-sm btn-success" href="{{ $project->sourceCode_url }}" target="_blank">Source Code</a>
            <a class="navbar-brand btn-sm btn-danger" href="{{ $project->project_url }}" target="_blank">Live Preview</a>
          </div>
        </div>
      </nav> --}}
      <style>
        /* Hide scrollbar for Chrome, Safari, and Opera */
        .scrollable {
            overflow-y: scroll;
            scrollbar-width: none; /* Firefox */
        }
    
        /* Hide scrollbar for IE, Edge, and Firefox */
        .scrollable::-webkit-scrollbar {
            display: none;
        }
    </style>
      
     

      @extends('layouts.app')
      @section('content')

      

      

      <div class="container py-2">
        <div>
          <a href="{{ route('home') }}" class="mr-3 text-decoration-none text-white"><i class="bi-house mr-1"></i>Home</a>
          <a href="{{ $project->sourceCode_url }}" class="mr-3 text-decoration-none text-white"><i class="bi-code me-1"></i>Source Code</a>
          <a href="{{ $project->project_url }}" class="mr-3 text-decoration-none text-white"><i class="bi-eye me-1"></i>Demo</a>
        </div>
        
        <div class="card border-0 my-2 py-2">
          
          <div class="card-body">
            
            <h5 class="card-title">Project Name: &nbsp; <u>{{$project->title}}</u></h5>
            <hr>
            <p class="card-text" style="text-align: justify ;">{{$project->decription}}</p>
            <hr>
            <p class="card-text"><small class="text-muted">Last updated on {{$project->updated_at->format('d-m-Y')}} at {{$project->updated_at->format('g:i A')}}</small></p>
          </div>

          <div class=" top-0 start-50 translate-middle-x text-center">
            <h3 class="text-dark">Project Image</h3>
            <p>(Scroll Image)</p>
        </div>

          <div class="container-fuild mx-auto scrollable" style="height:500px; width:50%; overflow-y:auto;">
            
            <img src="{{ asset("storage/$project->image") }}" class="card-img-bottom img-fluid mx-auto" alt="..." >
            
        </div>
        </div>

      </div>








      <!-- Portfolio Start -->
      @if ($portfolios)
        
      <div class="container-fluid pt-5 pb-3" id="portfolio">
        <div class="container">
            <div class="position-relative d-flex align-items-center justify-content-center">
                <h1 class="display-1 text-uppercase text-gray-dark" style="-webkit-text-stroke: 0px #dee2e6;">More</h1>
                <h1 class="position-absolute text-uppercase text-danger">Similar Projects</h1>
            </div>
            {{-- <div class="row">
                <div class="col-12 text-center mb-2">
                    <ul class="list-inline mb-4" id="portfolio-flters">
                        <li class="btn btn-sm btn-outline-danger m-1 active"  data-filter="*">All</li>
                        @foreach ($categories as $category)
                        <li class="btn btn-sm btn-outline-danger m-1" data-filter=".{{$category->name}}">{{ $category->name }}</li>
                        @endforeach
                    </ul>
                </div>
            </div> --}}
            <div class="row portfolio-container">
                @foreach ($portfolios as $portfolio)
                <div class="col-lg-4 col-md-6 mb-4 portfolio-item {{$portfolio->category->name }}">
                    <a href="{{ route('project', ['id' => $portfolio->title]) }}" >
                    <div class="position-relative overflow-hidden mb-2">
                        <img class="img-fluid rounded w-100" style="height:400px;" src="{{ asset("storage/$portfolio->image") }}" alt="">
                        <div class="portfolio-btn bg-danger d-flex align-items-center justify-content-center">
                            {{-- <a href="{{ asset("storage/$portfolio->image") }}" data-lightbox="portfolio">
                                <i class="fa fa-plus text-white" style="font-size: 50px;"></i>
                            </a> --}}
                            
                                <i class="fa-solid fa-link text-white" style="margin-left:20px; font-size: 50px;"></i>
                           
                        </div>
                    </div>
                </a>
                </div>    
                @endforeach
            </div>
        </div>
    </div>

      @endif
    
  <!-- Portfolio End -->



      @endsection


      <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script>
$(document).ready(function() {
    $(".scroll-to-home").click(function(event) {
        event.preventDefault(); // Prevent default anchor behavior

        var target = $(this).attr("href"); // Get the target element's ID
        $('html, body').animate({
            scrollTop: $(target).offset().top // Scroll to the target element
        }, 1000); // Adjust the duration as needed
    });
});
</script>

{{-- 


      <div class="container-fluid text-white mt-5 py-5 px-sm-3 px-md-5" style="background-color: #191919; background-size: cover; ">
        <div class="container text-center py-5">
            <div class="d-flex justify-content-center mb-4">
                <a class="btn btn-light btn-social mr-2" target="_blank" href="{{ $setting->github_url }}"><i class="fab fa-github"></i></a>
                <a class="btn btn-light btn-social mr-2" target="_blank" href="{{ $setting->fb_url }}"><i class="fab fa-facebook-f"></i></a>
                <a class="btn btn-light btn-social mr-2" target="_blank" href="{{ $setting->linkedin_url }}"><i class="fab fa-linkedin-in"></i></a>
            </div>
            <div class="d-flex justify-content-center mb-3">
                <a class="text-white" id="scrollToPortfolio" href="#">Portfolio</a>
                <span class="px-3">|</span>
                <a class="text-white" id="scrollToAbout" href="#">About</a>
                <span class="px-3">|</span>
                <a class="text-white" href="{{ route('blogs') }}">My Blogs</a>
                <span class="px-3">|</span>
                <a class="text-white" id="scrollToContact" href="#">Contact</a>
            </div>
            <p class="m-0">&copy; <span class="text-white font-weight-bold" >{{ date('Y') }}</span>. All Rights Reserved. Designed by <a class="text-white font-weight-bold" href="{{ route('home') }}">Muhammad Ali Nasir</a>
            </p>
        </div>
    </div>


    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js"></script>
    <script src="{{ asset('import/assets/lib/typed/typed.min.js') }}"></script>
    <script src="{{ asset('import/assets/lib/easing/easing.min.js') }}"></script>
    <script src="{{ asset('import/assets/lib/waypoints/waypoints.min.js') }}"></script>
    <script src="{{ asset('import/assets/lib/owlcarousel/owl.carousel.min.js') }}"></script>
    <script src="{{ asset('import/assets/lib/isotope/isotope.pkgd.min.js') }}"></script>
    <script src="{{ asset('import/assets/lib/lightbox/js/lightbox.min.js') }}"></script>

    <!-- Contact Javascript File -->
    <script src="{{ asset('mail/jqBootstrapValidation.min.js') }}"></script>
    <script src="{{ asset('import/assets/mail/contact.js') }}"></script>

    <!-- Template Javascript -->
    <script src="{{ asset('import/assets/js/main.js') }}"></script>

      
    
</body>
</html> --}}