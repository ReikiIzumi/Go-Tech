@extends('layout')
@section('home')
class='nav-item active'
@endsection
@section('about')
class='nav-item '
@endsection
@section('service')
class='nav-item '
@endsection
@section('header')

<div class="container">
    <div class="page-banner home-banner">
        <div class="row align-items-center flex-wrap-reverse h-100">
            <div class="col-md-6 py-5 wow fadeInLeft">
                <h1 class="mb-4">Let's Make Your Dream Become True!</h1>
                <p class="text-lg text-grey mb-5">We create a technology cycle for your company where you just use the product</p>
                <a href="#price" class="btn btn-primary btn-split">Order Now <div class="fab"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-cart3" viewBox="0 0 16 16">
                    <path d="M0 1.5A.5.5 0 0 1 .5 1H2a.5.5 0 0 1 .485.379L2.89 3H14.5a.5.5 0 0 1 .49.598l-1 5a.5.5 0 0 1-.465.401l-9.397.472L4.415 11H13a.5.5 0 0 1 0 1H4a.5.5 0 0 1-.491-.408L2.01 3.607 1.61 2H.5a.5.5 0 0 1-.5-.5zM3.102 4l.84 4.479 9.144-.459L13.89 4H3.102zM5 12a2 2 0 1 0 0 4 2 2 0 0 0 0-4zm7 0a2 2 0 1 0 0 4 2 2 0 0 0 0-4zm-7 1a1 1 0 1 1 0 2 1 1 0 0 1 0-2zm7 0a1 1 0 1 1 0 2 1 1 0 0 1 0-2z"/>
                  </svg></div></a>
            </div>
            <div class="col-md-6 py-5 wow zoomIn">
                <div class="img-fluid text-center">
                    <img src="{{asset('asset/img/banner_image_1.svg')}}" alt="">
                </div>
            </div>
        </div>
        <a href="#about" class="btn-scroll" data-role="smoothscroll"><span class="mai-arrow-down"></span></a>
    </div>
</div>
@endsection
  @section('body')

  <div class="page-section">
    <div class="container">
      <div class="row">
        <div class="col-lg-4">
          <div class="card-service wow fadeInUp">
            <div class="header">
              <img src="{{asset('asset/img/services/service-1.svg')}}" alt="">

            </div>
            <div class="body">
              <h5 class="text-secondary">RestFull API</h5>
              <p>We help you making api with standart undustry and easy to use</p>
              <a href="service" class="btn btn-primary">Read More</a>
            </div>
          </div>
        </div>
        <div class="col-lg-4">
          <div class="card-service wow fadeInUp">
            <div class="header">
              <img src="{{asset('asset/img/services/service-2.svg')}}" alt="">
              {{-- <img src="../assets/img/services/service-2.svg" alt=""> --}}
            </div>
            <div class="body">
              <h5 class="text-secondary">Web Development</h5>
              <p>We create professional website for your company</p>
              <a href="service" class="btn btn-primary">Read More</a>
            </div>
          </div>
        </div>
        <div class="col-lg-4">
          <div class="card-service wow fadeInUp">
            <div class="header">
              <img src="{{asset('asset/img/services/service-3.svg')}}" alt="">
              {{-- <img src="../assets (img/services/service-3.svg" alt=""> --}}
            </div>
            <div class="body">
              <h5 class="text-secondary">Mobile Development</h5>
              <p>We build mobile app with great design and fast as possible</p>
              <a href="service" class="btn btn-primary">Read More</a>
            </div>
          </div>
        </div>
      </div>
    </div> <!-- .container -->
  </div> <!-- .page-section -->

  <div class="page-section bg-light">
    <div class="container">
      <div class="row align-items-center">
        <div class="col-lg-6 py-3 wow fadeInUp">
          <span class="subhead">About us</span>
          <h2 class="title-section">The number #1 Development Service Company</h2>
          <div class="divider"></div>

          <p>We've done a lot of work with companies, we do what they want so that they are happy with what we do.</p>
          <p>We are happy with the achievements we have achieved so far, but we will continue to improve your product to make it even better.</p>
          <a href="about" class="btn btn-primary mt-3">Read More</a>
        </div>
        <div class="col-lg-6 py-3 wow fadeInRight">
          <div class="img-fluid py-3 text-center">
            <img src="{{asset('asset/img/about_frame.png')}}" alt="">
            {{-- <img src="../assets/img/about_frame.png" alt=""> --}}
          </div>
        </div>
      </div>
    </div> <!-- .container -->
  </div> <!-- .page-section -->

  <div class="page-section banner-seo-check">
    <div class="container">
      <div class="text-center wow fadeInUp">
        <h2 class="mb-4">Happy Client</h2>
        <div class="divider2 mx-auto"></div>
      </div>
      <div class="row mt-5">
        <div class="col-lg-4 py-3 wow zoomIn">
          <div class="card-pricing">
            <img src="asset/img/client/1.svg"  alt="" style="height:50px;">
          </div>
        </div>

        <div class="col-lg-4 py-3 wow zoomIn">
          <div class="card-pricing">
            <img src="asset/img/client/2.svg"  alt="" style="height:50px;">
          </div>
        </div>

        <div class="col-lg-4 py-3 wow zoomIn">
          <div class="card-pricing">
            <img src="asset/img/client/3.svg"  alt="" style="height:50px;">
          </div>
        </div>

        <div class="col-lg-4 py-3 wow zoomIn">
            <div class="card-pricing">
              <img src="asset/img/client/4.svg"  alt="" style="height:50px;">
            </div>
          </div>

          <div class="col-lg-4 py-3 wow zoomIn">
            <div class="card-pricing">
              <img src="asset/img/client/5.svg"  alt="" style="height:50px;">
            </div>
          </div>

          <div class="col-lg-4 py-3 wow zoomIn">
            <div class="card-pricing">
              <img src="asset/img/client/6.svg"  alt="" style="height:50px;">
            </div>
          </div>

      </div>
    </div> <!-- .container -->
  </div> <!-- .page-section -->



  <div class="page-section" id="price">
    <div class="container">
      <div class="text-center wow fadeInUp">
        <div class="subhead">Pricing</div>
        <h2 class="title-section">Choose service for you need</h2>
        <div class="divider mx-auto"></div>
      </div>
      <div class="row mt-5">
        <div class="col-lg-4 py-3 wow zoomIn">
          <div class="card-pricing">
            <div class="header">
              <div class="pricing-type">API</div>
              <div class="price">
                <span class="dollar">Rp</span>
                <h1>99<span class="suffix">.000</span></h1>
              </div>
              <h5>Per API</h5>
            </div>
            <div class="body">
              <p>25 Analytics <span class="suffix">Campaign</span></p>
              <p>1,300 Change <span class="suffix">Keywords</span></p>
              <p>Social Media <span class="suffix">Reviews</span></p>
              <p>1 Free <span class="suffix">Optimization</span></p>
              <p>24/7 <span class="suffix">Support</span></p>
            </div>
            <div class="footer">
              <a href="mailto:ivansetiawanvill@gmail.com?subject=I Will Order the API!" class="btn btn-pricing btn-block">Order Now</a>
            </div>
          </div>
        </div>

        <div class="col-lg-4 py-3 wow zoomIn">
          <div class="card-pricing marked">
            <div class="header">
              <div class="pricing-type">WEBSITE</div>
              <div class="price">
                <span class="dollar">Rp</span>
                <h1>199<span class="suffix">.000</span></h1>
              </div>
              <h5>Per WEB</h5>
            </div>
            <div class="body">
              <p>25 Analytics <span class="suffix">Campaign</span></p>
              <p>1,300 Change <span class="suffix">Keywords</span></p>
              <p>Social Media <span class="suffix">Reviews</span></p>
              <p>1 Free <span class="suffix">Optimization</span></p>
              <p>24/7 <span class="suffix">Support</span></p>
            </div>
            <div class="footer">
              <a href="mailto:ivansetiawanvill@gmail.com?subject=I Will Order the Website!" class="btn btn-pricing btn-block">Order Now</a>
            </div>
          </div>
        </div>

        <div class="col-lg-4 py-3 wow zoomIn">
          <div class="card-pricing">
            <div class="header">
              <div class="pricing-type">Mobile APP</div>
              <div class="price">
                <span class="dollar">Rp</span>
                <h1>299<span class="suffix">.000</span></h1>
              </div>
              <h5>Per MOBILE APP</h5>
            </div>
            <div class="body">
              <p>25 Analytics <span class="suffix">Campaign</span></p>
              <p>1,300 Change <span class="suffix">Keywords</span></p>
              <p>Social Media <span class="suffix">Reviews</span></p>
              <p>1 Free <span class="suffix">Optimization</span></p>
              <p>24/7 <span class="suffix">Support</span></p>
            </div>
            <div class="footer">
              <a href="mailto:ivansetiawanvill@gmail.com?subject=I Will Order the Mobile App!" class="btn btn-pricing btn-block">Order Now</a>
            </div>
          </div>
        </div>

      </div>
    </div> <!-- .container -->
  </div> <!-- .page-section -->
@endsection
