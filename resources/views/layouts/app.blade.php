<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Muhammad ALi Nasir</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="Free HTML Templates" name="keywords">
    <meta content="Free HTML Templates" name="description">
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <!-- Favicon -->
    <link href="{{ asset('import/assets/favicon.png') }}" rel="icon">

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
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.2/font/bootstrap-icons.css" rel="stylesheet">
    <style>
        /* Custom CSS for WhatsApp button */
        .whatsapp-float {
            position: fixed;
            width: 40px;
            height: 40px;
            bottom: 40px;
            padding: 3px;
            left: 40px;
            background-color: #25d366;
            color: #fff;
            border-radius: 50px;
            text-align: center;
            font-size: 24px;
            box-shadow: 0px 0px 5px 5px #0d3c03;
            z-index: 1000;
            /* Ensure the button is above other content */
            animation: vibrate 0.5s infinite alternate;
        }
    
        .whatsapp-float:hover {
            background-color: #17a04a;
            color: #fff;
            width: 45px;
            padding: 5px;
            height: 45px;
            text-decoration: none;
            animation-play-state: paused;
        }
    
        @keyframes vibrate {
            0% {
                transform: translateY(-2px);
            }
    
            100% {
                transform: translateY(2px);
            }
        }
    </style>

</head>

<body data-spy="scroll" data-target=".navbar" data-offset="51">
    <!-- Navbar Start -->
    
    <!-- Navbar End -->

    @yield('content')

     <!-- Footer Start -->
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
                <a class="text-white" id="scrollToAbout" href="{{ route('home') }}">Home</a>
                <span class="px-3">|</span>
                <a class="text-white" href="{{ route('blogs') }}">My Blogs</a>
                <span class="px-3">|</span>
                <a class="text-white" id="scrollToContact" href="#">Contact</a>
            </div>
            <p class="m-0">&copy; <span class="text-white font-weight-bold" >{{ date('Y') }}</span>. All Rights Reserved. Designed by <a class="text-white font-weight-bold" href="{{ route('home') }}">Muhammad Ali Nasir</a>
            </p>
        </div>
    </div>
    <!-- Footer End -->

   
        

    <!-- Back to Top -->
    <a href="#" class="btn   px-0 back-to-top border border-danger"><i class="text-danger fa fa-angle-double-up"></i></a>

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script>
    $(document).ready(function() {
        $('html, body').animate({
            scrollTop: $('.vh-100').offset().top
        }, 1000); // Adjust the duration as needed
    });
</script>

       <!-- JavaScript Libraries -->
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

       <script>
        document.addEventListener('DOMContentLoaded', function() {
            var aboutButton = document.getElementById('scrollToAbout');
            var aboutbutton = document.getElementById('scrollToabout');
            var QualificationButton = document.getElementById('scrollToQualification');
            var skillButton = document.getElementById('scrollToSkill');
            var serviceButton = document.getElementById('scrollToService');
            var portfolioButton = document.getElementById('scrollToPortfolio');
            var testimonialButton = document.getElementById('scrollToTestimonial');
            var contactButton = document.getElementById('scrollToContact');
            var homeButton = document.getElementById('scrollToHome');
            var about = document.getElementById('about');
            var qualification = document.getElementById('qualification');
            var skill = document.getElementById('skill');
            var service = document.getElementById('service');
            var portfolio = document.getElementById('portfolio');
            var testimonial = document.getElementById('testimonial');
            var contact = document.getElementById('contact');
            var home = document.getElementById('home');


            aboutbutton.addEventListener('click', function(event) {
                // Scroll to the top of Section 2
                event.preventDefault();
                about.scrollIntoView({ behavior: 'smooth' });
            });
            aboutButton.addEventListener('click', function(event) {
                // Scroll to the top of Section 2
                event.preventDefault();
                about.scrollIntoView({ behavior: 'smooth' });
            });
            skillButton.addEventListener('click', function(event) {
                // Scroll to the top of Section 2
                event.preventDefault();
                skill.scrollIntoView({ behavior: 'smooth' });
            });
            serviceButton.addEventListener('click', function(event) {
                // Scroll to the top of Section 2
                event.preventDefault();
                service.scrollIntoView({ behavior: 'smooth' });
            });
            portfolioButton.addEventListener('click', function(event) {
                // Scroll to the top of Section 2
                event.preventDefault();
                portfolio.scrollIntoView({ behavior: 'smooth' });
            });
            QualificationButton.addEventListener('click', function(event) {
                // Scroll to the top of Section 2
                event.preventDefault();
                qualification.scrollIntoView({ behavior: 'smooth' });
            });
            testimonialButton.addEventListener('click', function(event) {
                // Scroll to the top of Section 2
                event.preventDefault();
                testimonial.scrollIntoView({ behavior: 'smooth' });
            });
            contactButton.addEventListener('click', function(event) {
                // Scroll to the top of Section 2
                event.preventDefault();
                contact.scrollIntoView({ behavior: 'smooth' });
            });
            homeButton.addEventListener('click', function(event) {
                // Scroll to the top of Section 2
                event.preventDefault();
                home.scrollIntoView({ behavior: 'smooth' });
            });
        });
       </script>
   </body>

   </html>
