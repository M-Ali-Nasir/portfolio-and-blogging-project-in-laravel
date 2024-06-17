<!-- /*
* Template Name: Strategy
* Template Author: Untree.co
* Tempalte URI: https://untree.co/
* License: https://creativecommons.org/licenses/by/3.0/
*/ -->
<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="author" content="Untree.co">
    <link rel="shortcut icon" href="{{ asset('assets/images/logo.png') }}">

    <meta name="description" content="" />
    <meta name="keywords" content="" />

    <link href="https://fonts.googleapis.com/css?family=Inter:300,400,500,600,700,900" rel="stylesheet">

    <link rel="stylesheet" href="{{ asset('assets/fonts/icomoon/style.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/jquery-ui.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/owl.carousel.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/owl.theme.default.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/jquery.fancybox.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/bootstrap-datepicker.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/fonts/flaticon/font/flaticon.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/aos.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">

    <title>Muhammad Ali Nasir</title>
</head>

<body data-spy="scroll" data-target=".site-navbar-target" data-offset="300">

    <div class="site-wrap">

        <div class="site-mobile-menu site-navbar-target">
            <div class="site-mobile-menu-header">
                <div class="site-mobile-menu-close mt-3">
                    <span class="icon-close2 js-menu-toggle"></span>
                </div>
            </div>
            <div class="site-mobile-menu-body"></div>
        </div>

        <div class="top-bar py-1" id="home-section">
            <div class="container">
                <div class="row">
                    <div class="col-md-6 text-center text-lg-right order-lg-2">
                        <ul class="social-media m-0 p-0">
                            <li><a href="{{ $setting->fb_url }}" class="p-2"><span class="icon-facebook"></span></a>
                            </li>
                            <li><a href="{{ $setting->github_url }}" class="p-2"><span class="icon-github"></span></a>
                            </li>
                            {{-- <li><a href="#" class="p-2"><span class="icon-instagram"></span></a></li> --}}
                            <li><a href="{{ $setting->linkedin_url }}" class="p-2"><span
                                        class="icon-linkedin"></span></a></li>
                        </ul>
                    </div>
                    <div class="col-md-6 text-center text-lg-left order-lg-1">
                        <p class="mb-0 d-inline-flex">
                            <span class="mr-3"><a href="tel:{{ $user->phone }}" class="d-flex align-items-center"><span
                                        class="icon-phone mr-2"></span><span>{{ $user->phone }}</span></a></span>
                            <span><a href="mailto:{{ $user->email }}" class="d-flex align-items-center"><span
                                        class="icon-envelope mr-2"></span><span>{{ $user->email }}</span></a></span>
                        </p>
                    </div>

                </div>
            </div>
        </div>

        <header class="site-navbar py-1 js-sticky-header site-navbar-target" role="banner">

            <div class="container">
                <div class="row align-items-center">

                    <div class="col-11 col-xl-2">
                        <div class="mb-0 site-logo"><a href="{{ route('home') }}" class="mb-0"><img
                                    src="{{ asset('assets/images/logo.png') }}" alt="logo" height="60" width="80"><span
                                    class="text-primary"></span> </a></div>
                    </div>
                    <div class="col-12 col-md-10 d-none d-xl-block">
                        <nav class="site-navigation position-relative text-right" role="navigation">

                            <ul class="site-menu main-menu js-clone-nav mr-auto d-none d-lg-block">
                                <li><a href="#home-section" class="nav-link">Home</a></li>
                                <li><a href="#work-section" class="nav-link">Work</a></li>
                                <li>
                                    <a href="#services-section" class="nav-link">Services</a>
                                </li>
                                <li>
                                    <a href="#about-section" class="nav-link">Who am I</a>
                                </li>
                                {{-- <li class="has-children">
                                    <a href="#about-section" class="nav-link">About</a>
                                    <ul class="dropdown">
                                        <li><a href="#about-section">Specialties</a></li>
                                        <li><a href="#team-section">Our Team</a></li>
                                    </ul>
                                </li> --}}
                                <li><a href="#blog-section" class="nav-link">Blog</a></li>
                                <li><a href="#contact-section" class="nav-link">Contact</a></li>
                            </ul>
                        </nav>
                    </div>


                    <div class="d-inline-block d-xl-none ml-md-0 mr-auto py-3" style="position: relative; top: 3px;"><a
                            href="#" class="site-menu-toggle js-menu-toggle text-black"><span
                                class="icon-menu h3"></span></a>

                    </div>

                </div>
            </div>

        </header>


        <div class="particlehead"></div>
        <!-- <div class="container"> -->
        <div class="site-blocks-cover">
            <div class="container">
                <div class="row align-items-center justify-content-center text-center">

                    <div class="col-md-12" data-aos="fade-up" data-aos-delay="400">

                        <div class="row justify-content-center mb-4">
                            <div class="col-md-10 text-center">
                                <div><img src="{{ asset('storage/'.$user->profile_pic) }}" alt="Image" class="img-fluid
                                    mb-3"
                                        style="width:250px; height:250px; border-radius:50%; border: 5px solid rgb(236, 236, 236);">
                                </div>
                                <h1 style="font-weight: 600;">Muhammad Ali Nasir</h1>
                                <p class="lead mb-5">WEB DEVELOPER | LARAVEL DEVELOPER | WEB DESIGNER <a
                                        href="{{ $setting->freelance_url }}" target="_blank">Hire
                                        me!</a></p>
                                <h1>I Love To Build <span class="typed-words"></span></h1>

                                <div><a href="{{ $setting->cv_url }}" class="btn btn-primary btn-md"
                                        target="_blank">Download CV</a></div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
        <!-- </div> -->


        {{-- <section class="site-section">
            <div class="container">
                <div class="row">
                    <div class="col" data-aos="fade-in" data-aos-delay="0">
                        <img src="images/clients-05.svg" alt="Image" class="img-fluid">
                    </div>
                    <div class="col" data-aos="fade-in" data-aos-delay="100">
                        <img src="images/clients-02.svg" alt="Image" class="img-fluid">
                    </div>
                    <div class="col" data-aos="fade-in" data-aos-delay="200">
                        <img src="images/clients-03.svg" alt="Image" class="img-fluid">
                    </div>
                    <div class="col" data-aos="fade-in" data-aos-delay="300">
                        <img src="images/clients-01.svg" alt="Image" class="img-fluid">
                    </div>
                    <div class="col" data-aos="fade-in" data-aos-delay="400">
                        <img src="images/clients-04.svg" alt="Image" class="img-fluid">
                    </div>
                </div>
            </div>
        </section> --}}



        <section class="site-section">
            <div class="container">
                <div class="row">
                    <div class="col-md-6 col-lg-4 mb-lg-0 mb-4">
                        <div class="box-with-humber bg-white p-5">
                            <span class="icon icon-format_paint mr-2 text-primary h3 mb-3 d-block"></span>
                            <h2 class="text-primary">Brand Strategy</h2>
                            <p class="mb-4">Unearthing your brand essence: We collaborate to define your core values and
                                target audience, shaping a powerful brand narrative.
                                Strategic roadmap: I create a customized strategy to achieve your brand
                                goals through targeted marketing and communication.</p>
                            <ul class="list-unstyled ul-check primary">
                                <li>Customer Experience</li>
                                <li>Product Management</li>
                                <li>Proof of Concept</li>
                            </ul>
                        </div>
                    </div>

                    <div class="col-md-6 col-lg-4 mb-lg-0 mb-4" data-jarallax-element="-50">
                        <div class="box-with-humber bg-white p-5">
                            <span class="icon icon-palette mr-2 text-primary h3 mb-3 d-block"></span>

                            <h2 class="text-primary">Visual Identity</h2>
                            <p class="mb-4">Crafting captivating visuals: I design logos, color palettes, and brand
                                elements that leave a lasting impression.
                                Building brand consistency: I ensure your visual language is cohesive across all
                                platforms, strengthening brand recognition.</p>
                            <ul class="list-unstyled ul-check primary">
                                <li>Web Design</li>
                                <li>Branding</li>
                                <li>Web &amp; App Development</li>
                            </ul>
                        </div>
                    </div>

                    <div class="col-md-6 col-lg-4 mb-lg-0 mb-4" data-jarallax-element="20">
                        <div class="box-with-humber bg-white p-5">
                            <span class="icon icon-laptop2 mr-2 text-primary h3 mb-3 d-block"></span>

                            <h2 class="text-primary">Web Development</h2>
                            <p class="mb-4">Building beautiful and functional websites: I translate your design vision
                                into a user-friendly website, optimizing for performance.
                                Crafting engaging user experiences: I create intuitive interfaces and interactive
                                features that keep visitors coming back.</p>
                            <ul class="list-unstyled ul-check primary">
                                <li>Web Apps</li>
                                <li>E-Commerce</li>
                                <li>Marketing</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="site-section">
            <div class="container">
                <div class="row align-items-center justify-content-around">
                    <div class="col-lg-5" data-jarallax-element="-50">
                        <h2 class="text-primary">Web Development</h2>
                        <p class="mb-4">Building beautiful and functional websites: I translate your design vision
                            into a user-friendly website, optimizing for performance.
                            Crafting engaging user experiences: I create intuitive interfaces and interactive
                            features that keep visitors coming back.</p>
                        <ul class="list-unstyled ul-check primary">
                            <li>Web Apps</li>
                            <li>E-Commerce</li>
                            <li>Marketing</li>
                        </ul>
                    </div>

                    <div class="col-lg-6" data-jarallax-element="50">
                        <img src="{{ asset('assets/images/img_2.png') }}" alt="Image" class="img-fluid">
                    </div>
                </div>
            </div>
        </section>

        <section class="site-section" id="work-section">
            <div class="container">
                <div class="row mb-5 justify-content-center">
                    <div class="col-md-8 text-center">
                        <h2 class="site-section-heading text-center">Our Works</h2>
                        <p class="lead">Crafting Brands & Websites: Visual Identity, Brand Strategy, & Web Development.
                        </p>
                    </div>
                </div>
                <div class="container-fluid">

                    <div class="row justify-content-center">
                        @if(isset($portfolios))
                        @foreach ($portfolios as $portfolio)
                        <div class="col-md-6 col-lg-4">
                            <a href="{{ asset('storage/'.$portfolio->image) }}" class="media-1" data-fancybox="gallery">
                                <img src="{{ asset('storage/'.$portfolio->image) }}" alt="Image" class="img-fluid">
                                <div class="media-1-content">
                                    <h2>{{ $portfolio->title }}</h2>
                                    <span class="category">Web Application</span>
                                </div>
                            </a>
                        </div>
                        @endforeach
                        @endif



                    </div>
                </div>
            </div>

        </section>

        <section class="section ft-feature-1">
            <div class="container">
                <div class="row align-items-stretch">
                    <div class="col-12 w-100 ft-feature-1-content">
                        <div class="row align-items-center">
                            <div class="col-lg-5" data-jarallax-element="50">

                                <img src="{{ asset('assets/images/img_13.jpg') }}" alt="Image"
                                    class="img-fluid mb-4 mb-lg-0">

                            </div>
                            <div class="col-lg-3 ml-auto" data-jarallax-element="-50">
                                <div class="mb-5">
                                    <h3 class="d-flex align-items-center"><span
                                            class="icon icon-beach_access mr-2"></span><span>Strategy</span></h3>
                                    <p><strong>Innovative Solutions Tailored for Success: </strong> Crafting strategic
                                        plans that
                                        align
                                        with business goals and user needs, ensuring every project is set for optimal
                                        success.</p>

                                </div>

                                <div>
                                    <h3 class="d-flex align-items-center"><span
                                            class="icon icon-build mr-2"></span><span>Web Development</span></h3>
                                    <p><strong>Robust and Scalable Solutions:</strong> Building high-performance
                                        websites using
                                        Laravel,
                                        ensuring robust functionality and seamless user experiences.</p>

                                </div>

                            </div>
                            <div class="col-lg-3">
                                <div class="mb-5">
                                    <h3 class="d-flex align-items-center"><span
                                            class="icon icon-format_paint mr-2"></span><span>Art Direction</span></h3>
                                    <p><strong>Crafting Visually Stunning Digital Experiences:</strong> Designing
                                        visually
                                        compelling and
                                        user-centric interfaces that elevate brand identity and engagement.</p>

                                </div>

                                <div>
                                    <h3 class="d-flex align-items-center"><span
                                            class="icon icon-question_answer mr-2"></span><span>Web Applications</span>
                                    </h3>
                                    <p><strong>Custom Applications for Modern Needs:</strong> Developing dynamic web
                                        applications
                                        with
                                        Laravel, tailored to meet unique business requirements and drive efficiency.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>


        <section class="site-section testimonial-wrap" id="testimonial-section">
            <div class="container mb-5">
                <div class="row justify-content-center">
                    <div class="col-md-8 text-center">
                        <h2 class="site-section-heading text-center">Testimonials</h2>
                    </div>
                </div>
            </div>
            <div class="slide-one-item home-slider owl-carousel">
                @if (isset($reviewers))
                @foreach ($reviewers as $review)
                <div>
                    <div class="testimonial">

                        <blockquote class="mb-5">
                            <p>&ldquo;{{ $review->description }}&rdquo;</p>
                        </blockquote>

                        <figure class="mb-4 d-block align-items-center justify-content-center">
                            <div><img src="{{ asset('storage/'.$review->image) }}" alt="Image" class="img-fluid
                                mb-3" style="width:100px; height:100px;"></div>
                            <p>{{ $review->name }}</p>
                        </figure>
                    </div>
                </div>

                @endforeach
                @endif


            </div>
        </section>

        <section class="site-section border-bottom" id="services-section">
            <div class="container">
                <div class="row justify-content-center mb-5">
                    <div class="col-md-8 text-center" data-aos="fade-up">
                        <h2 class="site-section-heading text-center">Our Services</h2>
                    </div>
                </div>
                <div class="row align-items-stretch">

                    @if (isset($services))
                    @foreach ($services as $service)
                    <div class="col-md-6 col-lg-4 mb-4 mb-lg-4" data-aos="fade-up">
                        <div class="unit-4 d-flex">
                            <div class="unit-4-icon mr-4"><span class="text-primary {{ $service->icon }}"></span></div>

                            <div>
                                <h3>{{ $service->name }}</h3>
                                <p>{{ $service->description}}</p>

                            </div>
                        </div>
                    </div>
                    @endforeach
                    @endif



                </div>
            </div>
        </section>

        <div class="site-section" id="about-section">
            <div class="container">
                <div class="row mb-5 py-5">

                    <div class="col-md-5 ml-auto mb-5 order-md-2" data-jarallax-element="50">
                        <img src="{{ asset('storage/'.$setting->about_photo) }}" alt="Image" class="img-fluid rounded">
                    </div>
                    <div class="col-md-6 order-md-1" data-jarallax-element="-50">

                        <div class="row">

                            <div class="col-12">
                                <div class="text-left pb-1">
                                    <h2 class="site-section-heading">About Me</h2>
                                    <h5>{{ $setting->about_title }}</h5>
                                </div>
                            </div>
                            <div class="row">

                                <div class="col-12 mb-4">
                                    <p class="lead">{{ $setting->about_description }}</p>
                                </div>

                                <div class="col-6">
                                    <h6 class="lead">Name: <span>{{ $user->name }}</span></h6>
                                </div>
                                <div class="col-sm-6 py-2">
                                    <h6 class="lead">Birthday:
                                        <span>{{ $user->birth_day }}</span>
                                    </h6>
                                </div>
                                <div class=" col-sm-6 py-2">
                                    <h6 class="lead">Degree: <span>{{ $user->degree }}</span>
                                    </h6>
                                </div>
                                <div class=" col-sm-6 py-2">
                                    <h6 class="lead">Experience:
                                        <span>{{ $user->experience }} Years</span>
                                    </h6>
                                </div>
                                <div class=" col-sm-6 py-2">
                                    <h6 class="lead">Phone: <span>{{ $user->phone }}</span>
                                    </h6>
                                </div>
                                <div class=" col-sm-6 py-2">
                                    <h6 class="lead">Email:
                                        <span>{{ $user->email }}</span>
                                    </h6>
                                </div>
                                <div class=" col-sm-6 py-2">
                                    <h6 class="lead">Address: <span>{{ $user->address }}</span>
                                    </h6>
                                </div>
                                <div class=" col-sm-6 py-2">
                                    <h6 class="lead">Freelance:
                                        <span>Available</span>
                                    </h6>
                                </div>
                            </div>
                            <a href=" {{ $setting->freelance_url }}" target="_blank" class="btn btn-primary btn-md">Hire
                                Me</a>
                        </div>
                    </div>

                </div>
            </div>

        </div>
    </div>
    </div>


    {{-- <div class="site-section border-bottom" id="team-section">
        <div class="container">
            <div class="row justify-content-center mb-5">
                <div class="col-md-7 text-center">
                    <h2 class="site-section-heading">Our Team</h2>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6 col-lg-4 mb-5 mb-lg-0" data-aos="fade" data-aos-delay="100">
                    <div class="person text-center bg-white p-4">
                        <img src="images/person_2.jpg" alt="Image" class="img-fluid rounded-circle mb-3">
                        <h3>John Rooster</h3>
                        <p class="position text-muted">Co-Founder, President</p>
                        <p class="mb-4">Lorem ipsum dolor sit amet consectetur adipisicing elit. Nisi at consequatur
                            unde molestiae quidem provident voluptatum deleniti quo iste error eos est praesentium
                            distinctio cupiditate tempore suscipit inventore deserunt tenetur.</p>
                        <ul class="ul-social-circle">
                            <li><a href="#"><span class="icon-facebook"></span></a></li>
                            <li><a href="#"><span class="icon-twitter"></span></a></li>
                            <li><a href="#"><span class="icon-linkedin"></span></a></li>
                            <li><a href="#"><span class="icon-instagram"></span></a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4 mb-5 mb-lg-0" data-aos="fade" data-aos-delay="200">
                    <div class="person text-center bg-white p-4">
                        <img src="images/person_3.jpg" alt="Image" class="img-fluid rounded-circle mb-3">
                        <h3>Tom Sharp</h3>
                        <p class="position text-muted">Co-Founder, COO</p>
                        <p class="mb-4">Lorem ipsum dolor sit amet consectetur adipisicing elit. Nisi at consequatur
                            unde molestiae quidem provident voluptatum deleniti quo iste error eos est praesentium
                            distinctio cupiditate tempore suscipit inventore deserunt tenetur.</p>
                        <ul class="ul-social-circle">
                            <li><a href="#"><span class="icon-facebook"></span></a></li>
                            <li><a href="#"><span class="icon-twitter"></span></a></li>
                            <li><a href="#"><span class="icon-linkedin"></span></a></li>
                            <li><a href="#"><span class="icon-instagram"></span></a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4 mb-5 mb-lg-0" data-aos="fade" data-aos-delay="300">
                    <div class="person text-center bg-white p-4">
                        <img src="images/person_4.jpg" alt="Image" class="img-fluid rounded-circle mb-3">
                        <h3>Winston Hodson</h3>
                        <p class="position text-muted">Marketing</p>
                        <p class="mb-4">Lorem ipsum dolor sit amet consectetur adipisicing elit. Nisi at consequatur
                            unde molestiae quidem provident voluptatum deleniti quo iste error eos est praesentium
                            distinctio cupiditate tempore suscipit inventore deserunt tenetur.</p>
                        <ul class="ul-social-circle">
                            <li><a href="#"><span class="icon-facebook"></span></a></li>
                            <li><a href="#"><span class="icon-twitter"></span></a></li>
                            <li><a href="#"><span class="icon-linkedin"></span></a></li>
                            <li><a href="#"><span class="icon-instagram"></span></a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div> --}}

    <section class="site-section" id="blog-section">
        <div class="container">
            <div class="row justify-content-center mb-5">
                <div class="col-md-8 text-center">
                    <h2 class="site-section-heading text-center">Blog</h2>
                </div>
            </div>
            <div class="row justify-content-center">

                @if ($blogs)
                @foreach ($blogs as $blog)
                <div class="col-md-6 col-lg-4 mb-4 mb-lg-4">
                    <div class="h-entry">
                        <img src="{{ asset('storage/'.$blog->image) }}" alt="Image" class="img-fluid">
                        <h2 class="font-size-regular text-truncate"><a href="#">{{ $blog->title }}</a>
                        </h2>
                        <div class="meta mb-4">
                            @foreach ($blogCategories as $cat)
                            @if ($cat->id == $blog->cat_id)
                            {{ $cat->name }}
                            @endif
                            @endforeach <span class="mx-2">&bullet;</span> {{ $blog->created_at->format('Y/m/d') }}
                            <span class="mx-2">&bullet;</span>
                        </div>
                        <p>{{ \App\Http\Controllers\Blogs\BlogController::shortText($blog->description, 150) }}</p>
                        <p><a href="{{ route('blogs.post',['id' => $blog->title]) }}">Continue Reading...</a></p>
                    </div>
                </div>
                @endforeach
                @endif



            </div>
        </div>
    </section>




    <section class="site-section" id="contact-section">
        <div class="container">
            <div class="row mb-5">
                <div class="col-12 text-center">
                    <h2 class="site-section-heading">Contact Us</h2>
                </div>
            </div>
            @if (Session::has('message'))
            <p class="text-success">{{ Session::get('message') }}</p>
            @endif
            <div class="row">
                <div class="col-md-12 mb-5">



                    <form class="p-5 bg-white" method="POST" action="{{ route('contact') }}">
                        @csrf
                        <h2 class="h4 mb-5">Contact Form</h2>

                        <div class="row form-group">
                            <div class="col-md-12">
                                <label class="text-black" for="fname">Name</label>
                                <input type="text" id="fname" class="form-control" name="name"
                                    value="{{ old('name') }}">
                            </div>

                        </div>

                        <div class="row form-group">

                            <div class="col-md-12">
                                <label class="text-black" for="email">Email</label>
                                <input type="email" id="email" class="form-control" name="email"
                                    value="{{ old('email') }}">
                            </div>
                        </div>

                        <div class="row form-group">

                            <div class="col-md-12">
                                <label class="text-black" for="subject">Subject</label>
                                <input type="subject" id="subject" class="form-control" name="subject_mail"
                                    value="{{ old('subject_mail') }}">
                            </div>
                        </div>

                        <div class="row form-group">
                            <div class="col-md-12">
                                <label class="text-black" for="message">Message</label>
                                <textarea name="content" id="message" cols="30" rows="7" class="form-control"
                                    placeholder="Write your notes or questions here...">{{ old('content') }}</textarea>
                            </div>
                        </div>

                        <div class="row form-group">
                            <div class="col-md-12">
                                <input type="submit" value="Send Message" class="btn btn-primary btn-md text-white">
                            </div>
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
    </section>


    <footer class="site-footer">
        <div class="container">
            <div class="row">
                <div class="col-md-9">
                    <div class="row">
                        <div class="col-md-5">
                            <h2 class="footer-heading mb-4">About Me</h2>
                            <p>{{ $setting->about_description }}</p>
                        </div>
                        <div class="col-md-3 ml-auto">
                            <h2 class="footer-heading mb-4">Features</h2>
                            <ul class="list-unstyled">
                                <li><a href="#about-section">About Me</a></li>
                                <li><a href="#services-section">Services</a></li>
                                <li><a href="#testimonial-section">Testimonials</a></li>
                                <li><a href="#contact-section">Contact Us</a></li>
                            </ul>

                        </div>
                        <div class="col-md-3">
                            <h2 class="footer-heading mb-4">Follow Me</h2>
                            <a href="{{ $setting->fb_url }}" class="pl-0 pr-3"><span class="icon-facebook"></span></a>
                            <a href="{{ $setting->github_url }}" class="pl-3 pr-3"><span class="icon-github"></span></a>
                            <a href="{{ $setting->linkedin_url }}" class="pl-3 pr-3"><span
                                    class="icon-linkedin"></span></a>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <h2 class="footer-heading mb-4">Subscribe Newsletter</h2>
                    <form method="POST" action="{{ route('blogs.subscribe')}}" class="subcription-form">
                        @csrf
                        <div class=" mb-3">
                            @if(session('success'))
                            <p style="color: green">{{ session('success') }}</p>
                            @endif
                            <input type="text" class="form-control border-secondary text-white bg-transparent mb-1"
                                placeholder="Enter Name" aria-label="Enter Name" aria-describedby="button-addon2"
                                name="name" required>
                            <input type="text" class="form-control border-secondary text-white bg-transparent mb-1"
                                placeholder="Enter Email" aria-label="Enter Email" aria-describedby="button-addon2"
                                name="email" required>
                            <div class="input-group-append mb-1">
                                <button class="btn btn-primary text-white" type="submit"
                                    id="button-addon2">Subscribe</button>
                            </div>
                            @error('email')
                            <p class="text-red-500">{{ $message }}</p>
                            @enderror
                        </div>
                    </form>
                </div>
            </div>
            <div class="row pt-5 mt-5 text-center">
                <div class="col-md-12">
                    <div class="border-top pt-5">
                        <p>Copyright &copy;<script>
                                document.write(new Date().getFullYear());
                            </script>. All Rights Reserved. &mdash; Muhammad ALi Nasir
                            <!-- License information: https://untree.co/license/ -->
                        </p>
                    </div>
                </div>

            </div>
        </div>
    </footer>

    </div> <!-- .site-wrap -->



    <script src="{{ asset('assets/js/jquery-3.3.1.min.js') }}"></script>
    <script src="{{ asset('assets/js/jquery-migrate-3.0.1.min.js') }}"></script>
    <script src="{{ asset('assets/js/jquery-ui.js') }}"></script>
    <script src="{{ asset('assets/js/popper.min.js') }}"></script>
    <script src="{{ asset('assets/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('assets/js/owl.carousel.min.js') }}"></script>
    <script src="{{ asset('assets/js/jquery.stellar.min.js') }}"></script>
    <script src="{{ asset('assets/js/jquery.countdown.min.js') }}"></script>
    <script src="{{ asset('assets/js/bootstrap-datepicker.min.js') }}"></script>
    <script src="{{ asset('assets/js/jquery.easing.1.3.js') }}"></script>
    <script src="{{ asset('assets/js/aos.js') }}"></script>
    <script src="{{ asset('assets/js/jquery.fancybox.min.js') }}"></script>
    <script src="{{ asset('assets/js/jarallax.min.js') }}"></script>
    <script src="{{ asset('assets/js/jarallax-element.min.js') }}"></script>
    <script src="{{ asset('assets/js/lozad.min.js') }}"></script>
    <script src="{{ asset('assets/js/modernizr.min.js') }}"></script>
    <script src="{{ asset('assets/js/three.min.js') }}"></script>
    <script src="{{ asset('assets/js/TweenMax.min.js') }}"></script>
    <script src="{{ asset('assets/js/OBJLoader.js') }}"></script>
    <script src="{{ asset('assets/js/ParticleHead.js') }}"></script>

    <script src="{{ asset('assets/js/jquery.sticky.js') }}"></script>


    <script src="{{ asset('assets/js/typed.js') }}"></script>
    <script>
        var typed = new Typed('.typed-words', {
        strings: ["Web Apps","E-Commerce","Web Designs"],
        typeSpeed: 80,
        backSpeed: 80,
        backDelay: 4000,
        startDelay: 1000,
        loop: true,
        showCursor: true
      });
    </script>

    <script src="{{ asset('assets/js/main.js') }}"></script>



</body>

</html>