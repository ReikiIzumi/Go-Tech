@extends('layout')
@section('header')
    <div class="container">
      <div class="page-banner">
        <div class="row justify-content-center align-items-center h-100">
          <div class="col-md-6">
            <nav aria-label="Breadcrumb">
              <ul class="breadcrumb justify-content-center py-0 bg-transparent">
                <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                <li class="breadcrumb-item active">About</li>
              </ul>
            </nav>
            <h1 class="text-center">About Us</h1>
          </div>
        </div>
      </div>
    </div>
@endsection
@section('body')
  <div class="page-section">
    <div class="container">
      <div class="row align-items-center">
        <div class="col-lg-6 py-3">
          <h2 class="title-section">Technology Done Right</h2>
          <div class="divider"></div>

          <p>We are 3 student tyring to make RestfullAPI, Web, and Mobile Application for your bussines purposes</p>
          <p></p>
          <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Laborum nisi saepe eum ipsa. Tempore dolore itaque est blanditiis libero fugiat, ea nostrum nam at tempora quis, facilis officiis nemo mollitia.</p>
        </div>
        <div class="col-lg-6 py-3">
          <!--<div class="img-fluid py-3 text-center">
             <img src="{{asset('asset/img/about_frame.png')}}" alt=""> 
          </div> -->
        </div>
      </div>
    </div>
  </div>

  <div class="page-section">
    <div class="container">
      <div class="text-center">
        <div class="subhead">Pricing</div>
        <h2 class="title-section">Choose service for you need.</h2>
        <div class="divider mx-auto"></div>
      </div>
      <div class="row mt-5">
        <div class="col-lg-4 py-3">
          <div class="card-pricing marked">
            <div class="header">
              <div class="pricing-type">Web</div>
              <div class="price">
                <span class="dollar">Rp.</span>
                <h1>100<span class="suffix">.000</span></h1>
              </div>
              <h5>Per Web</h5>
            </div>
            <div class="body">
              <p>25 Analytics <span class="suffix">Campaign</span></p>
              <p>1,300 Change <span class="suffix">Keywords</span></p>
              <p>Social Media <span class="suffix">Reviews</span></p>
              <p>1 Free <span class="suffix">Optimization</span></p>
              <p>24/7 <span class="suffix">Support</span></p>
            </div>
            <div class="footer">
              <a href="#" class="btn btn-pricing btn-block">Buy</a>
            </div>
          </div>
        </div>

        <div class="col-lg-4 py-3">
          <div class="card-pricing marked">
            <div class="header">
              <div class="pricing-type">RestFull Api</div>
              <div class="price">
                <span class="dollar">Rp.</span>
                <h1>200<span class="suffix">.000</span></h1>
              </div>
              <h5>Per Api</h5>
            </div>
            <div class="body">
              <p>25 Analytics <span class="suffix">Campaign</span></p>
              <p>1,300 Change <span class="suffix">Keywords</span></p>
              <p>Social Media <span class="suffix">Reviews</span></p>
              <p>1 Free <span class="suffix">Optimization</span></p>
              <p>24/7 <span class="suffix">Support</span></p>
            </div>
            <div class="footer">
              <a href="#" class="btn btn-pricing btn-block">Buy</a>
            </div>
          </div>
        </div>

        <div class="col-lg-4 py-3">
          <div class="card-pricing marked ">
            <div class="header">
              <div class="pricing-type">Mobile Application</div>
              <div class="price">
                <span class="dollar">Rp.</span>
                <h1>300<span class="suffix">.000</span></h1>
              </div>
              <h5>Per Application</h5>
            </div>
            <div class="body">
              <p>25 Analytics <span class="suffix">Campaign</span></p>
              <p>1,300 Change <span class="suffix">Keywords</span></p>
              <p>Social Media <span class="suffix">Reviews</span></p>
              <p>1 Free <span class="suffix">Optimization</span></p>
              <p>24/7 <span class="suffix">Support</span></p>
            </div>
            <div class="footer">
              <a href="#" class="btn btn-pricing btn-block">Buy</a>
            </div>
          </div>
        </div>

      </div>
    </div> <!-- .container -->
  </div> <!-- .page-section -->
@endsection
