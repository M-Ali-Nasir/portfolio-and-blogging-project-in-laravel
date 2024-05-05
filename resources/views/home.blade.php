@extends('layouts.app')

@section('content')



<a href="https://wa.me/{{ $user->phone }}" class="whatsapp-float" target="_blank">
    <i class="fab fa-whatsapp"></i> <!-- Assuming you have FontAwesome for icons -->
</a>

<nav class="navbar fixed-top shadow-sm navbar-expand-lg  navbar-light py-3 py-lg-0 px-lg-5"
    style="background-color: rgb(203, 203, 203)">
    <a href="index.html" class="navbar-brand ml-lg-3">
        <h1 class="m-0 display-5 text-gray"><span class="text-danger">M. Ali </span>Nasir</h1>
    </a>
    <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse px-lg-3 text-white" id="navbarCollapse">
        <div class="navbar-nav m-auto py-0">
            <a href="#home" class="nav-item  nav-link active">Home</a>
            <a href="#about" class="nav-item  nav-link">About</a>
            <a href="#qualification" class="nav-item  nav-link">Quality</a>
            <a href="#skill" class="nav-item  nav-link">Skill</a>
            <a href="#service" class="nav-item  nav-link">Service</a>
            <a href="#portfolio" class="nav-item  nav-link">Portfolio</a>
            <a href="#testimonial" class="nav-item  nav-link">Review</a>
            <a href="{{ route('blogs') }}" class="nav-item  nav-link">Blogs</a>
            <a href="#contact" class="nav-item  nav-link">Contact</a>
        </div>
        <a href="{{ $setting->freelance_url }}" target="_blank" class="btn btn-outline-danger d-none d-lg-block">Hire
            Me</a>
    </div>
</nav>

<!-- Video Modal Start -->
<div class="modal fade" id="videoModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
    aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-body">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
                <!-- 16:9 aspect ratio -->
                <div class="embed-responsive embed-responsive-16by9">
                    <iframe class="embed-responsive-item" src="" id="video" allowscriptaccess="always"
                        allow="autoplay"></iframe>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Video Modal End -->


<!-- Header Start -->
<div class="container-fluid  mb-5 py-0" id="home"
    style="min-height: 100vh; background-color: black; background-size: cover;">


    {{-- <div class=" container col-lg-3 text-center py-3">


        <div class="d-flex justify-content-center mb-1 mynav">
            <a class="text-white nav-link active" href="#" id="scrollToHome">Home</a>
            <span class="px-1">|</span>
            <a class="text-white nav-link " href="#" id="scrollToAbout">About</a>
            <span class="px-1">|</span>
            <a class="text-white nav-link" href="#" id="scrollToQualification">Quality</a>
            <span class="px-1">|</span>
            <a class="text-white nav-link " href="#" id="scrollToSkill">Skill</a>
            <span class="px-1">|</span>
            <a class="text-white nav-link" href="#" id="scrollToService">Service</a>
            <span class="px-1 ">|</span>
            <a class="text-white nav-link" href="#" id="scrollToPortfolio">Portfolio</a>
            <span class="px-1">|</span>
            <a class="text-white nav-link" href="#" id="scrollToTestimonial">Review</a>
            <span class="px-1">|</span>
            <a class="text-white nav-link" href="#">Blogs</a>
            <span class="px-1">|</span>
            <a class="text-white nav-link" href="#" id="scrollToContact">Contact</a>
        </div>
    </div> --}}
    <div class="container-fluid shadow-lg  d-flex  align-items-center mb-5 py-2 px-2" id="home"
        style="min-height: 100vh; background-color: rgb(0, 0, 0); background-size: cover;">

        <div class="container" style="height: 90vh;">
            <div class="d-flex justify-content-center mb-2">
                <a class="btn btn-danger btn-social mr-2" target="_blank" href="{{ $setting->github_url }}"><i
                        class="fab fa-github"></i></a>
                <a class="btn btn-danger btn-social mr-2" target="_blank" href="{{ $setting->fb_url }}"><i
                        class="fab fa-facebook-f"></i></a>
                <a class="btn btn-danger btn-social mr-2" target="_blank" href="{{ $setting->linkedin_url }}"><i
                        class="fab fa-linkedin-in"></i></a>
            </div>
            <p class="m-0 text-white mycontact d-flex  justify-content-center"><a href="tel:{{ $user->phone }}"
                    class="text-light" target="_blank">{{ $user->phone }}</a> &nbsp; ||&nbsp; <a
                    href="mailto:{{ $user->email }}" class="text-light" target="_blank">{{ $user->email }}</a>
            </p>
            <div class="row align-items- mt-3 mb-0 heading-box" style="height: 80%;">
                <div class="col-lg-2 px-5 pl-lg-0 pb-0 pb-lg-0 ">
                    {{-- <img class="img-fluid w-100 rounded-circle shadow-sm" src="" alt=""> --}}

                    <div class=" justify-content-center mb-5 mynav px-5 mt-5">
                        <a class="text-primary nav-link active" href="#" id="scrollToHome">Home</a>
                        <a class="text-primary nav-link " href="#" id="scrollToAbout">About</a>
                        <a class="text-primary nav-link" href="#" id="scrollToQualification">Quality</a>
                        <a class="text-primary nav-link " href="#" id="scrollToSkill">Skill</a>
                        <a class="text-primary nav-link" href="#" id="scrollToService">Service</a>
                        <a class="text-primary nav-link" href="#" id="scrollToPortfolio">Portfolio</a>
                        <a class="text-primary nav-link" href="#" id="scrollToTestimonial">Review</a>
                        <a class="text-primary nav-link" href="{{ route('blogs') }}">Blogs</a>
                        <a class="text-primary nav-link" href="#" id="scrollToContact">Contact</a>
                    </div>


                </div>

                <div class="col-lg-1 px-5 pl-lg-0 pb-0 pb-lg-0 mynav">
                    <span class="px-3">|</span>
                    <span class="px-3">|</span>
                    <span class="px-3">|</span>
                    <span class="px-3">|</span>
                    <span class="px-3">|</span>
                    <span class="px-3">|</span>
                    <span class="px-3">|</span>
                    <span class="px-3">|</span>
                    <span class="px-3">|</span>
                    <span class="px-3">|</span>
                    <span class="px-3">|</span>
                    <span class="px-3">|</span>
                    <span class="px-3">|</span>
                    <span class="px-3">|</span>
                    <span class="px-3">|</span>
                    <span class="px-3">|</span>
                    <span class="px-3">|</span>
                    <span class="px-3">|</span>

                </div>


                <div class="col-lg-9 text-center text-lg-left pb-0 picbox"
                    style="height:100%; background-image: url('{{ asset("storage/$user->profile_pic") }}');
                    background-size: cover">
                    <h3 class="text-white font-weight-normal mb-3">I'm</h3>
                    <h1 class="display-3 text-uppercase mb-2" style="-webkit-text-stroke: 2px #c7181a; color: #de2500">
                        {{ $user->name }}</h1>
                    <h1 class="typed-text-output d-inline font-weight-lighter text-white"></h1>
                    <div class="typed-text d-none bt-5 job">{{ $user->job }}</div>
                    <div
                        class="d-flex align-items-center justify-content-center justify-content-lg-start pt-5 mt-5 cv-btn">
                        <a href="{{ $setting->cv_url }}" class="btn btn-outline-danger mr-5" target="_blank">Download CV</a>
                        <button type="button" class="btn-play" data-toggle="modal" data-src="{{$setting->video_url }}"
                            data-target="#videoModal">
                            <span></span>
                        </button>
                        <h5 class="font-weight-normal text-white m-0 ml-4 d-none d-sm-block">Play Video</h5>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Header End -->


<!-- About Start -->
<div class="container-fluid py-5" id="about">
    <div class="container">
        <div class="position-relative d-flex align-items-center justify-content-center">
            <h1 class="display-1 text-uppercase text-gray-dark" style="-webkit-text-stroke: 0px #dee2e6;">About</h1>
            <h1 class="position-absolute text-uppercase text-danger">About Me</h1>
        </div>
        <div class="row align-items-center">
            <div class="col-lg-5 pb-4 pb-lg-0">
                <img class="img-fluid rounded w-100" src="{{ asset("storage/$setting->about_photo") }}" alt="img">
            </div>
            <div class="col-lg-7 text-white">
                <h3 class="mb-4 text-white">{{ $setting->about_title }}</h3>
                <p style="text-align: justify ;">{{ $setting->about_description }}</p>
                <div class="row mb-3">
                    <div class="col-sm-6 py-2 text-white">
                        <h6 class="text-white">Name: <span>{{ $user->name }}</span></h6>
                    </div>
                    <div class="col-sm-6 py-2">
                        <h6 class="text-white">Birthday: <span ">{{ $user->birth_day }}</span></h6></div>
                        <div class=" col-sm-6 py-2">
                                <h6 class="text-white">Degree: <span ">{{ $user->degree }}</span></h6></div>
                        <div class=" col-sm-6 py-2">
                                        <h6 class="text-white">Experience: <span ">{{ $user->experience }} Years</span></h6></div>
                        <div class=" col-sm-6 py-2">
                                                <h6 class="text-white">Phone: <span ">{{ $user->phone }}</span></h6></div>
                        <div class=" col-sm-6 py-2">
                                                        <h6 class="text-white">Email: <span ">{{ $user->email }}</span></h6></div>
                        <div class=" col-sm-6 py-2">
                                                                <h6 class="text-white">Address: <span ">{{ $user->address }}</span></h6></div>
                        <div class=" col-sm-6 py-2">
                                                                        <h6 class="text-white">Freelance: <span ">Available</span></h6></div>
                    </div>
                    <a href=" {{ $setting->freelance_url }}" target="_blank" class="btn btn-outline-danger mr-4">Hire
                                                                                Me</a>
                                                                                {{-- <a href=""
                                                                                    class="btn btn-outline-danger">Learn
                                                                                    More</a> --}}
                    </div>
                </div>
            </div>
        </div>
        <!-- About End -->



        <!-- Qualification Start -->
        <div class="container-fluid py-5" id="qualification">
            <div class="container">
                <div class="position-relative d-flex align-items-center justify-content-center">
                    <h1 class="display-1 text-uppercase text-gray-dark" style="-webkit-text-stroke: 0px #dee2e6;">
                        Quality</h1>
                    <h1 class="position-absolute text-uppercase text-danger">Education & Expericence</h1>
                </div>
                <div class="row align-items-center">
                    <div class="col-lg-6">
                        <h3 class="mb-4 text-white">My Education</h3>
                        <div class="border-left border-danger pt-2 pl-4 ml-2 text-white">
                            @foreach ($educations as $education)
                            <div class="position-relative mb-4">
                                <i class="far fa-dot-circle text-danger position-absolute"
                                    style="top: 2px; left: -32px;"></i>
                                <h5 class="font-weight-bold mb-1 text-white">{{ $education->title }}</h5>
                                <p class="mb-2" style="text-align: justify ;"><strong>{{ $education->association
                                        }}</strong> | <small>{{ $education->from }} - {{ $education->to }}</small></p>
                                <p style="text-align: justify ;">{{ $education->description }} </p>
                            </div>
                            @endforeach
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <h3 class="mb-4 text-white">My Expericence</h3>
                        <div class="border-left border-danger pt-2 pl-4 ml-2 text-white">
                            @foreach ($experiences as $experience)
                            <div class="position-relative mb-4">
                                <i class="far fa-dot-circle text-danger position-absolute"
                                    style="top: 2px; left: -32px;"></i>
                                <h5 class="font-weight-bold mb-1 text-white">{{ $experience->title }}</h5>
                                <p class="mb-2"><strong>{{ $experience->association }}</strong> | <small>{{
                                        $experience->from }} - {{ $experience->to }}</small></p>
                                <p>{{ $experience->description }}</p>
                            </div>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Qualification End -->


        <!-- Skill Start -->
        <div class="container-fluid py-5" id="skill">
            <div class="container">
                <div class="position-relative d-flex align-items-center justify-content-center">
                    <h1 class="display-1 text-uppercase text-gray-dark" style="-webkit-text-stroke: 0px #dee2e6;">Skills
                    </h1>
                    <h1 class="position-absolute text-uppercase text-danger">My Skills</h1>
                </div>
                <div class="row align-items-center">
                    @foreach($skills->split($skills->count()/3) as $row)
                    <div class="col-md-6">
                        @foreach($row as $skill)
                        <div class="skill mb-4">
                            <div class="d-flex justify-content-between">
                                <h6 class="font-weight-bold text-white">{{ $skill->name }}</h6>
                                <h6 class="font-weight-bold text-white">{{$skill->percent}}%</h6>
                            </div>
                            <div class="progress">
                                <div class="progress-bar" role="progressbar" aria-valuenow="{{$skill->percent}}"
                                    aria-valuemin="0" aria-valuemax="100" style="background-color: {{$skill->color}}">
                                </div>
                            </div>
                        </div>
                        @endforeach
                    </div>
                    @endforeach
                </div>
            </div>
        </div>
        <!-- Skill End -->


        <!-- Services Start -->
        <div class="container-fluid pt-5" id="service">
            <div class="container">
                <div class="position-relative d-flex align-items-center justify-content-center">
                    <h1 class="display-1 text-uppercase text-gray-dark" style="-webkit-text-stroke: 0px #dee2e6;">
                        Service</h1>
                    <h1 class="position-absolute text-uppercase text-danger">My Services</h1>
                </div>
                <div class="row pb-3">
                    @foreach ($services as $service)
                    <div class="col-lg-4 col-md-6 text-center mb-5 ">
                        <div class="d-flex align-items-center justify-content-center mb-4 ">
                            <i class="{{ $service->icon }} service-icon bg-danger text-white mr-3"></i>
                            <h4 class="font-weight-bold m-0 text-white text-white">{{ $service->name }}</h4>
                        </div>
                        <p class="text-white" style="text-align: justify ;">{{ $service->description }}</p>
                    </div>
                    @endforeach
                </div>
            </div>
        </div>
        <!-- Services End -->


        <!-- Portfolio Start -->
        <div class="container-fluid pt-5 pb-3" id="portfolio">
            <div class="container">
                <div class="position-relative d-flex align-items-center justify-content-center">
                    <h1 class="display-1 text-uppercase text-gray-dark" style="-webkit-text-stroke: 0px #dee2e6;">
                        Portfolio</h1>
                    <h1 class="position-absolute text-uppercase text-danger">My Portfolio</h1>
                </div>
                <div class="row">
                    <div class="col-12 text-center mb-2">
                        <ul class="list-inline mb-4" id="portfolio-flters">
                            <li class="btn btn-sm btn-outline-danger m-1 active" data-filter="*">All</li>
                            @foreach ($categories as $category)
                            <li class="btn btn-sm btn-outline-danger m-1" data-filter=".{{$category->name}}">{{
                                $category->name }}</li>
                            @endforeach
                        </ul>
                    </div>
                </div>
                <div class="row portfolio-container">
                    @foreach ($portfolios as $portfolio)
                    <div class="col-lg-4 col-md-6 mb-4 portfolio-item {{$portfolio->category->name }}">
                        <a href="{{ route('project', ['id' => $portfolio->title]) }}">
                            <div class="position-relative overflow-hidden mb-2">
                                <img class="img-fluid rounded w-100" style="height:400px;" src="{{ asset("storage/$portfolio->image") }}" alt="">
                                <div class="portfolio-btn bg-danger d-flex align-items-center justify-content-center">
                                    {{-- <a href="{{ asset("storage/$portfolio->image") }}" data-lightbox="portfolio">
                                        <i class="fa fa-plus text-white" style="font-size: 50px;"></i>
                                    </a> --}}

                                    <i class="fa-solid fa-link text-white"
                                        style="margin-left:20px; font-size: 50px;"></i>

                                </div>
                            </div>
                        </a>
                    </div>
                    @endforeach
                </div>
            </div>
        </div>
        <!-- Portfolio End -->


        <!-- Testimonial Start -->
        <div class="container-fluid py-5" id="testimonial">
            <div class="container">
                <div class="position-relative d-flex align-items-center justify-content-center">
                    <h1 class="display-1 text-uppercase text-gray-dark" style="-webkit-text-stroke: 0px #dee2e6;">Review
                    </h1>
                    <h1 class="position-absolute text-uppercase text-danger">Clients Say</h1>
                </div>
                <div class="row justify-content-center">
                    <div class="col-lg-8">
                        <div class="owl-carousel testimonial-carousel">
                            @foreach ($reviewers as $review)
                            <div class="text-center">
                                <i class="fa fa-3x fa-quote-left text-danger mb-4"></i>
                                <h4 class="font-weight-light mb-4 text-white" style="text-align: justify ;">{{
                                    $review->description }}</h4>
                                <img class="img-fluid rounded-circle mx-auto mb-3" src="{{ asset("storage/$review->image") }}" style="width: 80px; height: 80px;">
                                <h5 class="font-weight-bold m-0" style="color:#bdbdbd;">{{ $review->name }} </h5>
                                <span>{{ $review->job }}</span>
                            </div>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Testimonial End -->

        <!-- Contact Start -->
        <div class="container-fluid py-5" id="contact">
            <div class="container">
                <div class="position-relative d-flex align-items-center justify-content-center">
                    <h1 class="display-1 text-uppercase text-gray-dark" style="-webkit-text-stroke: 0px #dee2e6;">
                        Contact</h1>
                    <h1 class="position-absolute text-uppercase text-danger">Contact Me</h1>
                </div>
                <div class="row justify-content-center">
                    <div class="col-lg-8">
                        <div class="contact-form text-center">
                            @if (Session::has('message'))
                            <div class="alert alert-success" role="alert">
                                {{ Session::get('message') }}
                            </div>
                            <br>
                            @endif
                            <form id="contactForm" method="POST" action="{{ route('contact') }}">
                                @csrf
                                <div class="form-row">
                                    <div class="control-group col-sm-6">
                                        <input type="text" class="form-control p-4" id="name" placeholder="Your Name"
                                            required name="name" value="{{old('name')}}"
                                            style="background-color: #191919; color:#dee2e6" />
                                        <p class="help-block text-danger"></p>
                                    </div>
                                    <div class="control-group col-sm-6">
                                        <input type="email" class="form-control p-4" id="email" placeholder="Your Email"
                                            value="{{old('email')}}" required name="email"
                                            style="background-color: #191919; color:#dee2e6" />
                                        <p class="help-block text-danger"></p>
                                    </div>
                                </div>
                                <div class="control-group">
                                    <input type="text" class="form-control p-4" id="subject" placeholder="Subject"
                                        value="{{old('subject_mail')}}" required name="subject_mail"
                                        style="background-color: #191919; color:#dee2e6" />
                                    <p class="help-block text-danger"></p>
                                </div>
                                <div class="control-group">
                                    <textarea class="form-control py-3 px-4" rows="5" id="message" placeholder="Message"
                                        name="content" required
                                        style="background-color: #191919; color:#dee2e6">{{old('content')}}</textarea>
                                    <p class="help-block text-danger"></p>
                                </div>
                                <div>
                                    <button class="btn btn-outline-danger" type="submit" id="sendMessageButton">Send
                                        Message</button>
                                </div>
                                @if ($errors->any())
                                <br>
                                <div class="alert alert-danger">
                                    <ul>
                                        @foreach ($errors->all() as $error)
                                        <li>{{ $error }}</li>
                                        @endforeach
                                    </ul>
                                </div>
                                @endif
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Contact End -->


        <!-- Scroll to Bottom -->
        <a href="#" id="scrollToabout">
            <i class="fa fa-2x fa-angle-down text-white scroll-to-bottom"></i>
        </a>



        @endsection