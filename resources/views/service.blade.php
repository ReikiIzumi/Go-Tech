@extends('layout')
@section('home')
class='nav-item '
@endsection
@section('about')
class='nav-item '
@endsection
@section('servis')
class='nav-item active'
@endsection
@section('header')
    <div class="container">
      <div class="page-banner">
        <div class="row justify-content-center align-items-center h-100">
          <div class="#">
            <div class="wow zoomIn">
                <div class="img-fluid text-center">
                    <img src="{{asset('asset/img/services/background.svg')}}" alt="">
                </div>
            </div>
          </div>
        </div>
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
            </div>
          </div>
        </div>
      </div>
    </div> <!-- .container -->
  </div> <!-- .page-section -->

    <div class="page-section bg-light" id="price">
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

      </div>
    </div> <!-- .container -->
  </div> <!-- .page-section -->
@endsection
