<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <meta http-equiv="X-UA-Compatible" content="ie=edge">

  <meta name="copyright" content="MACode ID, https://macodeid.com/">

  <title>GoTech Software House</title>

  <link href="{{ asset('asset/css/maicons.css')}}" rel="stylesheet">
  <link href="{{ asset('asset/css/bootstrap.css')}}" rel="stylesheet">
  <link href="{{ asset('asset/vendor/animate/animate.css')}}" rel="stylesheet">
  <link href="{{ asset('asset/css/theme.css')}}" rel="stylesheet">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

</head>
<body>

  <!-- Back to top button -->
  <div class="back-to-top"></div>

  <header>
    <nav class="navbar navbar-expand-lg navbar-light bg-white sticky" data-offset="300">
      <div class="container">
        <a href="#" class="navbar-brand">Go<span class="text-primary">Tech.</span></a>

        <button class="navbar-toggler" data-toggle="collapse" data-target="#navbarContent" aria-controls="navbarContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>

        <div class="navbar-collapse collapsed" id="navbarContent">
          <ul class="navbar-nav ml-auto">
            <li @yield('home')>
              <a class="nav-link" href="{{url('/')}}">Home</a>
            </li>
            <li @yield('about')>
              <a class="nav-link" href="{{url('/about')}}">About</a>
            </li>
            <li @yield('servis')>
              <a class="nav-link" href="{{url('/service')}}">Services</a>
            </li>
            {{-- nav-item active --}}
            <li class="nav-item" >
              <a class="btn btn-primary ml-lg-2" href="#price">Order Now</a>
            </li>
          </ul>
        </div>

      </div>
    </nav>
@yield('header')
    {{-- <div class="container">
      <div class="page-banner">
        <div class="row justify-content-center align-items-center h-100">
          <div class="col-md-6">
            <nav aria-label="Breadcrumb">
              <ul class="breadcrumb justify-content-center py-0 bg-transparent">
                <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                <li class="breadcrumb-item active">Services</li>
              </ul>
            </nav>
            <h1 class="text-center">Our Services</h1>
          </div>
        </div>
      </div>
    </div> --}}
  </header>
@yield('body')
  {{-- <div class="page-section">
    <div class="container">
      <div class="row">
        <div class="col-lg-4">
          <div class="card-service">
            <div class="header">
              <img src="{{asset('asset/img/services/service-1.svg')}}" alt="">
            </div>
            <div class="body">
              <h5 class="text-secondary">SEO Consultancy</h5>
              <p>We help you define your SEO objective & develop a realistic strategy with you</p>
              <a href="service.html" class="btn btn-primary">Read More</a>
            </div>
          </div>
        </div>
        <div class="col-lg-4">
          <div class="card-service">
            <div class="header">
              <img src="{{asset('asset/img/services/service-2.svg')}}" alt="">
            </div>
            <div class="body">
              <h5 class="text-secondary">Content Marketing</h5>
              <p>We help you define your SEO objective & develop a realistic strategy with you</p>
              <a href="service.html" class="btn btn-primary">Read More</a>
            </div>
          </div>
        </div>
        <div class="col-lg-4">
          <div class="card-service">
            <div class="header">
              <img src="{{asset('asset/img/services/service-3.svg')}}" alt="">
            </div>
            <div class="body">
              <h5 class="text-secondary">Keyword Research</h5>
              <p>We help you define your SEO objective & develop a realistic strategy with you</p>
              <a href="service.html" class="btn btn-primary">Read More</a>
            </div>
          </div>
        </div>
      </div>
    </div> <!-- .container -->
  </div> <!-- .page-section -->
  <div class="page-section bg-light">
    <div class="container">
      <div class="text-center">
        <div class="subhead">Our services</div>
        <h2 class="title-section">How SEO Team Can Help</h2>
        <div class="divider mx-auto"></div>
        <div class="row">
          <div class="col-sm-6 col-lg-4 col-xl-3 py-3">
            <div class="features">
              <div class="header mb-3">
                <span class="mai-business"></span>
              </div>
              <h5>OnSite SEO</h5>
              <p>We analyse your website's structure, internal architecture & other key</p>
            </div>
          </div>
          <div class="col-sm-6 col-lg-4 col-xl-3 py-3">
            <div class="features">
              <div class="header mb-3">
                <span class="mai-business"></span>
              </div>
              <h5>OnSite SEO</h5>
              <p>We analyse your website's structure, internal architecture & other key</p>
            </div>
          </div>
          <div class="col-sm-6 col-lg-4 col-xl-3 py-3">
            <div class="features">
              <div class="header mb-3">
                <span class="mai-business"></span>
              </div>
              <h5>OnSite SEO</h5>
              <p>We analyse your website's structure, internal architecture & other key</p>
            </div>
          </div>
          <div class="col-sm-6 col-lg-4 col-xl-3 py-3">
            <div class="features">
              <div class="header mb-3">
                <span class="mai-business"></span>
              </div>
              <h5>OnSite SEO</h5>
              <p>We analyse your website's structure, internal architecture & other key</p>
            </div>
          </div>
          <div class="col-sm-6 col-lg-4 col-xl-3 py-3">
            <div class="features">
              <div class="header mb-3">
                <span class="mai-business"></span>
              </div>
              <h5>OnSite SEO</h5>
              <p>We analyse your website's structure, internal architecture & other key</p>
            </div>
          </div>
          <div class="col-sm-6 col-lg-4 col-xl-3 py-3">
            <div class="features">
              <div class="header mb-3">
                <span class="mai-business"></span>
              </div>
              <h5>OnSite SEO</h5>
              <p>We analyse your website's structure, internal architecture & other key</p>
            </div>
          </div>
          <div class="col-sm-6 col-lg-4 col-xl-3 py-3">
            <div class="features">
              <div class="header mb-3">
                <span class="mai-business"></span>
              </div>
              <h5>OnSite SEO</h5>
              <p>We analyse your website's structure, internal architecture & other key</p>
            </div>
          </div>
          <div class="col-sm-6 col-lg-4 col-xl-3 py-3">
            <div class="features">
              <div class="header mb-3">
                <span class="mai-business"></span>
              </div>
              <h5>OnSite SEO</h5>
              <p>We analyse your website's structure, internal architecture & other key</p>
            </div>
          </div>
        </div>
      </div>
    </div> <!-- .container -->
  </div> <!-- .page-section --> --}}

  <footer class="page-footer bg-image" style="background-image: url(../asset/img/world_pattern.svg);">
    <div class="container">
      <div class="row mb-5">
        <div class="col-lg-3 py-3">
          <h3>GoTech.</h3>
          <p>Let's Make Your Dream Become True</p>
          <!--<div class="social-media-button">
            <a href="#"><span class="mai-logo-facebook-f"></span></a>
            <a href="#"><span class="mai-logo-twitter"></span></a>
            <a href="#"><span class="mai-logo-google-plus-g"></span></a>
            <a href="#"><span class="mai-logo-instagram"></span></a>
            <a href="#"><span class="mai-logo-youtube"></span></a>
          </div>-->
        </div>
        <div class="col-lg-3 py-3">
          <h5>Company</h5>
          <ul class="footer-menu">
            <li><a href="{{url('/service')}}">About Us</a></li>
            <!--<li><a href="#">Career</a></li>
            <li><a href="#">Advertise</a></li>-->
            {{-- <li><a href="#">Terms of Service</a></li>
            <li><a href="#">Help & Support</a></li> --}}
          </ul>
        </div>
        <div class="col-lg-3 py-3">
          <h5>Contact Us</h5>
          <a href="mailto:ivansetiawanvill@gmail.com" class="footer-link">Contact Us</a>
          <p>203 Fake St. Mountain View, San Francisco, California, USA</p>
          <!--<p>203 Fake St. Mountain View, San Francisco, California, USA</p>
          <a href="#" class="footer-link">+00 1122 3344 5566</a>
          <a href="#" class="footer-link">seogram@temporary.com</a>-->
        </div>
        <!--<div class="col-lg-3 py-3">
          <h5>Newsletter</h5>
          <p>Get updates, news or events on your mail.</p>
          <form action="#">
            <input type="text" class="form-control" placeholder="Enter your email..">
            <button type="submit" class="btn btn-success btn-block mt-2">Subscribe</button>
          </form>
        </div>
      </div>-->

      <p class="text-center" id="copyright">Copyright &copy; 2020. This template design and develop by <a href="https://macodeid.com/" target="_blank">MACode ID</a></p>
    </div>
  </footer>

<script src="{{asset('asset/js/jquery-3.5.1.min.js')}}"></script>
<script src="{{asset('asset/js/google-maps.js')}}"></script>
<script src="{{asset('asset/vendor/wow/wow.min.js')}}"></script>
<script src="{{asset('asset/js/theme.js')}}"></script>
<script src="{{asset('asset/js/bootstrap.bundle.min.js')}}"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
{{-- <script src="../assets/js/jquery-3.5.1.min.js"></script>
<script src="../assets/js/bootstrap.bundle.min.js"></script>
<script src="../assets/js/google-maps.js"></script>
<script src="../assets/vendor/wow/wow.min.js"></script>
<script src="../assets/js/theme.js"></script> --}}

</body>
</html>
