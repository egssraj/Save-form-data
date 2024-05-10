<!DOCTYPE html>
<html lang="en">

<head>
   <meta charset="utf-8">
   <meta content="width=device-width, initial-scale=1.0" name="viewport">
   <title>NOBE Global Solutions</title>
   <meta content="" name="description">
   <meta content="" name="keywords">

   <link rel="preconnect" href="https://fonts.googleapis.com">
   <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>

   <!-- Vendor CSS Files -->
   <link href="{{asset('assets/img/favicon.png')}}" rel="icon">
   <link href="{{asset('assets/img/apple-touch-icon.png')}}" rel="apple-touch-icon">
   <link href="{{asset('assets/vendor/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">
   <link href="{{asset('assets/vendor/bootstrap-icons/bootstrap-icons.css')}}" rel="stylesheet">
   <link href="{{asset('assets/vendor/fontawesome-free/css/all.min.css')}}" rel="stylesheet">
   <link href="{{asset('assets/vendor/glightbox/css/glightbox.min.css')}}" rel="stylesheet">
   <link href="{{asset('assets/vendor/swiper/swiper-bundle.min.css')}}" rel="stylesheet">
   <link href="{{asset('assets/vendor/aos/aos.css')}}" rel="stylesheet">
   <link href="{{asset('assets/css/main.css')}}" rel="stylesheet">
  

   @section('js')
   @show
</head>
<style>
    .header_modal .model-btn {
    display: inline-block;
    padding: 10px 25px;
    border-radius: 50px;
    margin-top: 10px;
    transition: 0.5s all;
    font-family: "DM Sans", sans-serif;
}

.header_modal .model-base-btn {
    color: #fff;
    background-color: #334f6f;
    border: 1px solid #fff0;
}

.header_modal .model-base-btn:hover {
    background-color: white;
    color: black;
    border: 1px solid #334f6f;    
}

.header_modal .model-close-btn {
    color: #000000;
    background-color: transparent;
    border: 1px solid #ff0a0a;
}

.header_modal .model-close-btn:hover {
    background-color: #ff0a0a;
    color: rgb(255, 255, 255);
    border: 1px solid #fff0;
}

.header_modal .modal-header {
    border: none;
}

.modal.header_modal {
    box-shadow: 0 3px 20px -2px rgba(6, 7, 9, 0.15) !important;
    font-family: "DM Sans", sans-serif !important;
}


.header_modal .form-control:focus {
    box-shadow: none !important;
    outline: none;
}
</style>
<body>
   <!-- ======= Header ======= -->
   <header id="header" class="header d-flex align-items-center fixed-top">
      <div class="container-fluid px-5 d-flex align-items-center justify-content-between b-header">
         <a href="/" class="logo d-flex align-items-center">
            <!--   <video autoplay muted loop id="logofooter" width="100">-->
            <!--  <source src="assets/img/logo-1-v.mp4" type="video/mp4">-->
            <!--</video>-->
            <!--<img src="{{ asset('uploads/' . $parent[0]['logo']) }}" alt="">-->
            <img src="https://nobeglobalsolutions.com/assets/img/nobe-global-logo.png" alt="">
         </a>
         <i class="mobile-nav-toggle mobile-nav-show bi bi-list"></i>
         <i class="mobile-nav-toggle mobile-nav-hide d-none bi bi-x"></i>
         <nav id="navbar" class="navbar">
            <ul>
               <li><a href="/" class="active">Home</a></li>
               <li><a href="/about">About</a></li>
               <li><a href="https://www.nobeglobalsolutions.com/Our-Mission-Statement">Mission Statement</a></li>
               <li><a href="https://www.nobeglobalsolutions.com/portfolio">IT Services</a></li>
               <li><a href="/service">Corporate Consulting</a></li>
               <li class="dropdown">
                   <a href="/">Partner</a>
               <ul class="dropdown-nav">
					<li><a href="javascript:void(0)">Veterans</a></li>
					<li><a href="javascript:void(0)">Latin American Initiative</a></li>
					<li><a href="javascript:void(0)">Autism & Mental Health</a></li>
						<li><a href="javascript:void(0)">Nonprofits</a></li>
					<li><a href="javascript:void(0)">Associations</a></li>
					<li><a href="javascript:void(0)">Woman-Owned Organizations </a></li>
					<li><a href="javascript:void(0)">International Partners</a></li>
						<li><a href="javascript:void(0)">Healthcare Organizations</a></li>
							<li><a href="javascript:void(0)">Financial Institutions </a></li>
								<li><a href="javascript:void(0)">Faith-based Organizations  </a></li>
								<li><a href="javascript:void(0)">Modeling & Fashion</a></li>
								<li><a href="javascript:void(0)">Creative Arts & Entertainment  </a></li>
								<li><a href="javascript:void(0)">Travel & Tourism  </a></li>
								<li><a href="javascript:void(0)">Retired Professional Athletes</a></li>
				</ul>
               </li>
               <li><a href="/pricing">Join Now</a></li>
               <li><a href="/contact">Contact</a></li>
               <li>
                   
                  <div class="btnbox">
                     <a href="/intake-form" >Intake Form<span><i class="fa-solid fa-arrow-right-long"></i></span></a>
                     
                      <!--<a href="javascript:void(0)" data-bs-toggle="modal" data-bs-target="#exampleModal">Intake Form<span><i class="fa-solid fa-arrow-right-long"></i></span></a>-->
                  </div>
                  
               </li>
            </ul>
         </nav>
         <!-- .navbar -->
      </div>
   </header>
   @yield('content')
   <!-- End #main -->
   <section class="footer-top-box">
      <div class="container-fluid">
         <div class="row">
            <div class="col-12">
               <div class="footer-top">
                  <ul>
                     <!--<li><a href="/About-Metaratus">About Metaratus™ </a></li>-->
                     <!--<li><a href="/NOBE-Metaratus">NOBE & Metaratus™ </a></li>-->
                     <li><a href="/Community-Involvement">Community Involvement </a></li>
                     <li><a href="/Our-Mission-Statement">Our Mission Statement </a></li>
                  </ul>
                  <ul>
                     <li><a href="tel:{{$parent['0']['phone']}}"><span><i class="fa-solid fa-phone"></i></span>{{$parent['0']['phone']}}</a></li>
                     <li><a href="mailto:{{$parent['0']['email']}}"><span><i class="fa-solid fa-envelope"></i></span> {{$parent['0']['email']}}</a></li>
                  </ul>
               </div>
            </div>
         </div>
      </div>
   </section>
   <footer id="footer" class="footer">
      <div class="container-fluid pt-3">
         <div class="row gy-4">
            <div class="col-xxl-3 col-xl-4 col-lg-12 col-md-12 footer-info ">
               <a href="/" class="logo d-flex align-items-center">
                  <span>
                     <img src="{{ asset('uploads/' . $parent[0]['logo']) }}" alt="">
                     <!--<video autoplay muted loop id="logofooter" width="250">-->
                     <!--  <source src="assets/img/logo-1-v.mp4" type="video/mp4">-->
                     <!--</video>-->

                  </span>
               </a>
               <p>Make your idea into reality with NOBE</p>
               <div class="subscribe">
                  <form action="{{ route('newletter') }}" method="post">
                     @csrf
                     <div class="email">
                        <input type="email" name="email" class="form-control" placeholder="Your E-Mail" required name="email">
                        <button type="submit"> Send <span><i class="fa-solid fa-arrow-up"></i></span></button>
                     </div>
                     @if (session('success'))
    <div class="alert alert-success">
        {{ session('success') }}
    </div>
@endif
                  </form>
               </div>
            </div>
            <div class="col-xxl-7 col-xl-8 col-lg-12 col-md-12   offset-2">
               <div class="row">
                  <div class="col-xxl-12 col-xl-12 pb-3">
                     <h3>NOBE Global Solutions brings a modern global-centric approach to your business growth. </h3>
                  </div>
               </div>
               <div class="row  gy-4">
                  <div class="col-xl-4 col-lg-6 col-md-6 col-12 pt-4 footer-links">
                     <h4>Contact Us</h4>
                     <ul>
                        <li><a href="tel:{{$parent['0']['phone']}}"> {{$parent['0']['phone']}}</a></li>
                        <li><a href="mailto:{{$parent['0']['email']}}"> {{$parent['0']['email']}}</a></li>
                     </ul>
                  </div>
                  
                  <div class="col-xl-4 col-lg-6 col-md-6 col-12 pt-4 footer-contact ">
                       
    @if($parent['1']['address'] != "")
        <h4>Our Address:</h4>
        <p>{!! $parent['1']['address'] !!}</p>
    @endif
                    


                  </div>
                  <div class="col-xl-4 col-lg-6 col-md-6 col-12 pt-4 footer-links">
                     <h4>Our Social:</h4>
                     <div class="social-links d-flex mt-2">
                        <a href="{{$parent['0']['twitter']}}" class="twitter"><i class="bi bi-twitter"></i></a>
                        <a href="{{$parent['0']['facebook']}}" class="facebook"><i class="bi bi-facebook"></i></a>
                        <a href="{{$parent['0']['instagram']}}" class="instagram"><i class="bi bi-instagram"></i></a>
                        <a href="{{$parent['0']['linkdin']}}" class="linkedin"><i class="bi bi-linkedin"></i></a>
                     </div>
                  </div>
               </div>
               <div class="row  gy-4">
                  <div class="col-md-4 col-12 pt-4 footer-links">
                     <div class="last-link">
                        <a href="/terms-and-conditions">Terms and conditions</a>
                     </div>
                  </div>
                  <div class="col-md-4 col-12 pt-4 footer-contact ">
                     <div class="last-link">
                        <a href="/privacy-policy">Privacy policy</a>
                     </div>
                  </div>
                  <div class="col-md-4 col-12 pt-4 footer-links">
                     <div class="last-link">
                        <a href="https://metaratus.com/" target="_blank"> © 2023 Designed By Metaratus<sup>TM</sup></a>
                     </div>
                  </div>


               </div>
            </div>
         </div>
      </div>
      <div class="disclaimer">
         <h5>Disclaimer</h5>
         {!!$parent['3']['body']!!}
         <!--<p><b> NO Securities Offering : </b> content provided on this website is for informational purposes only and should not-->
         <!--   be construed as an offer, solicitation, or recommendation to buy or sell any securities. This website is not-->
         <!--   intended to be a substitute for specific individualized tax, legal, or investment planning advice. NOBE-->
         <!--   Global Solutions expressly disclaims any responsibility or liability for any actions taken or not taken-->
         <!--   based on the information provided on this website</p>-->
         <!--<p>-->
         <!--   <b> No Broker-Dealer and Advisory Capacity:</b> NOBE Global Solutions is not a broker-dealer, registered investment advisor, investment-->
         <!--   company, or securities firm. Furthermore, NOBE Global Solutions is not acting in the capacity of a broker-dealer or any similar function.-->
         <!--</p>-->
         <!--<p>-->
         <!--   <b>NO Tax and Legal Advice: </b>-->
         <!--   NOBE Global Solutions does not offer tax or legal advice. Clients are strongly encouraged not to rely on NOBE Global-->
         <!--   Solutions for any tax or legal guidance. It is imperative that clients seek out their own tax and legal counsel for-->
         <!--   assistance on important business decisions.-->
         <!--</p>-->
         <!--<p>-->
         <!--   By accessing and using this website, you acknowledge that you have read, understood, and accepted the terms of this disclaimer. We urge all visitors to consult with their financial, legal, and tax professionals before making any investment decisions.-->
         <!--</p>-->
      </div>




<!----modal -------->

<!-- Modal -->



 <!--<div class="modal fade header_modal" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">-->
 <!--       <div class="modal-dialog">-->
 <!--         <div class="modal-content">-->
 <!--           <div class="modal-header">-->
 <!--             <h1 class="modal-title fs-5" id="exampleModalLabel">Intake Login</h1>-->
 <!--             <button type="button" class="btn-close model-btn" data-bs-dismiss="modal" aria-label="Close"></button>-->
 <!--           </div>-->
 <!--           <div class="modal-body">-->
 <!--            <form action="{{ route('intakelogin') }}" method="POST">-->
 <!--               <label for="email">Email</label>-->
 <!--                <input id="email" type="email" name="email" class="form-control mt-1" placeholder="Enter your register email id">-->
 <!--                <button type="submit" class="btn model-btn model-base-btn mt-3" name="submit">Submit</button>-->
 <!--            </form>-->
             
 <!--           </div>-->
            
 <!--         </div>-->
 <!--       </div>-->
 <!--     </div>-->
   </footer>
   <!-- End Footer -->

   <a href="#" class="scroll-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>
   <div id="preloader"></div>
   <!-- Vendor JS Files -->
   <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.0/jquery.min.js"></script>

   <script src="{{asset('assets/vendor/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
   <script src="{{asset('assets/vendor/purecounter/purecounter_vanilla.js')}}"></script>
   <script src="{{asset('assets/vendor/glightbox/js/glightbox.min.js')}}"></script>
   <script src="{{asset('assets/vendor/swiper/swiper-bundle.min.js')}}"></script>
   <script src="{{asset('assets/vendor/aos/aos.js')}}"></script>
   <script src="{{asset('assets/vendor/php-email-form/validate.js')}}"></script>
   <script src="{{asset('assets/js/main.js')}}"></script>
   <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
   
  @if(session('error1'))
    <script>
        Swal.fire({
            position: "center",
            icon: "error",
            title: "Error",
            text: "{{ session('error1') }}",
            showConfirmButton: true
        });
    </script>
@endif


</body>

</html>