@extends('layout')
@section('home')
class='nav-item '
@endsection
@section('about')
class='nav-item active'
@endsection
@section('service')
class='nav-item '
@endsection
@section('header')
<div>
    <div class="container">
      <div class="row align-items-center">
        <div class="col-md-6 py-5 wow fadeInLeft">
          <span class="subhead">About us</span>
          <h2 class="title-section">The number #1 Development Service Company</h2>
          <div class="divider"></div>

          <p>We've done a lot of work with companies, we do what they want so that they are happy with what we do.</p>
          <p>We are happy with the achievements we have achieved so far, but we will continue to improve your product to make it even better.</p>
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
              <a href="mailto:ivansetiawanvill@gmail.com?subject=I Will Order the API!" class="btn btn-pricing btn-block" class="btn btn-pricing btn-block">Order Now</a>
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
