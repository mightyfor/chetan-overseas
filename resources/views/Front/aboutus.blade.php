@extends('Front.layout.app')
@section('title','About Chetan Overseas')
@section('content')


<!--=================================
page-title-->

<section class="page-title bg-overlay-black-60 parallax" data-jarallax='{"speed": 0.6}' style="background-image: url({{ URL::asset('Front/images/aboutus.jpg') }});">
    <div class="container">
      <div class="row">
        <div class="col-lg-12">
        <div class="page-title-name">
            <h1>About Chetan Overseas</h1>
          </div>
            <ul class="page-breadcrumb">
              <li><a href="{{route('home')}}"><i class="fa fa-home"></i> Home</a> <i class="fa fa-angle-double-right"></i></li>
              <li><span>About</span> </li>
         </ul>
       </div>
       </div>
    </div>
  </section>

  <!--=================================
  page-title -->



<!--=================================
Why Choose-->

<section class="page-section-ptb gray-bg">
<div class="container">
    <div class="row">
    <div class="col-12">
        <div class="section-title text-center">
        <h2> Why Choose </h2>
        </div>
    </div>
    </div>
    <div class="row">
    <div class="col-lg-4 col-sm-6 mb-30">
        <div class="feature-text left-icon square theme-icon">
            <div class="feature-icon">
            <span class="ti-layers-alt"></span>
            </div>
            <div class="feature-info">
            <h5>Over 15 Years of Excellence</h5>
            <p class="text-justify">Over 15 years of expertise in delivering high-quality marine engine spares with unmatched reliability.</p>
            </div>
        </div>
    </div>
    <div class="col-lg-4 col-sm-6 mb-30">
        <div class="feature-text left-icon square theme-icon">
            <div class="feature-icon">
            <span class="ti-medall"></span>
            </div>
            <div class="feature-info">
            <h5>On-Time Delivery, Every Time</h5>
            <p class="text-justify">Guaranteed on-time delivery with zero delays, ensuring your marine engine spares arrive as promised.</p>
            </div>
        </div>
    </div>
    <div class="col-lg-4 col-sm-6 mb-30">
        <div class="feature-text left-icon square theme-icon">
            <div class="feature-icon">
            <span class="ti-pencil-alt"></span>
            </div>
            <div class="feature-info">
            <h5>Uncompromising Quality and Testing</h5>
            <p class="text-justify">Top-tier quality and rigorous testing ensure every marine engine spare meets the highest standards.</p>
            </div>
        </div>
    </div>
    <div class="col-lg-4 col-sm-6 sm-mb-30">
        <div class="feature-text left-icon square theme-icon">
            <div class="feature-icon">
            <span class="ti-paint-roller"></span>
            </div>
            <div class="feature-info">
            <h5>Advanced Warehousing Solutions</h5>
            <p class="text-justify">State-of-the-art warehouse for secure, organized storage of marine engine spares, ready for dispatch.</p>
            </div>
        </div>
    </div>
    <div class="col-lg-4 col-sm-6 sm-mb-30">
        <div class="feature-text left-icon square theme-icon">
            <div class="feature-icon">
            <span class="ti-hand-open"></span>
            </div>
            <div class="feature-info">
            <h5>Global Reach</h5>
            <p class="text-justify">Successfully exporting premium marine engine spares to 9 countries with reliable global logistics.</p>
            </div>
        </div>
    </div>
    <div class="col-lg-4 col-sm-6">
        <div class="feature-text left-icon square theme-icon">
            <div class="feature-icon">
            <span class="ti-mouse"></span>
            </div>
            <div class="feature-info">
            <h5>Cost-Effective Solutions</h5>
            <p class="text-justify">Competitive pricing without compromising quality, ensuring value in every marine engine spare.</p>
            </div>
        </div>
    </div>
    </div>
</div>
<div class="container">
    <div class="row mt-70">
        <div class="col-lg-12 col-md-12">
            <h4 class="mb-50 text-center">Brands we deals in </h4>
        </div>
        <div class="col-lg-12 col-md-12">
        <div class="clients-list">
            <div class="owl-carousel" data-nav-dots="true" data-items="5" data-md-items="4" data-sm-items="3" data-xs-items="2" data-xx-items="2">
                @foreach ($getallactivebrands as $single)
                    <div class="item">
                        <img class="img-fluid " src="{{ URL::asset('Front/images/brands/'.$single.'.jpg')}}" alt="" height="100" width="100">
                    </div>
                @endforeach
            </div>
        </div>
        </div>
    </div>
</div>
<div class="container">
    <div class="row mt-70">
        <div class="col-lg-12 col-md-12">
            <h4 class="mb-50 text-center">Exported Countires </h4>
        </div>
        <div class="col-lg-12 col-md-12">
        <div class="clients-list">
            <div class="owl-carousel" data-nav-dots="true" data-items="5" data-md-items="4" data-sm-items="3" data-xs-items="2" data-xx-items="2">
                <div class="item">
                    <p class="text-center font-bold">Indonesia</p>
                    <img class="img-fluid " src="{{ URL::asset('Front/images/country/indonesia.jpg')}}" alt="" height="100" width="100">
                </div>
                <div class="item">
                    <p class="text-center font-bold">Italy</p>
                    <img class="img-fluid " src="{{ URL::asset('Front/images/country/italy.jpg')}}" alt="" height="100" width="100">
                </div>
                <div class="item">
                    <p class="text-center font-bold">Netherland</p>
                    <img class="img-fluid " src="{{ URL::asset('Front/images/country/netherlands.jpg')}}" alt="" height="100" width="100">
                </div>
                <div class="item">
                    <p class="text-center font-bold">Poland</p>
                    <img class="img-fluid " src="{{ URL::asset('Front/images/country/poland.jpg')}}" alt="" height="100" width="100">
                </div>
                <div class="item">
                    <p class="text-center font-bold">Singapore</p>
                    <img class="img-fluid " src="{{ URL::asset('Front/images/country/singapore.jpg')}}" alt="" height="100" width="100">
                </div>
                <div class="item">
                    <p class="text-center font-bold">Srilanka</p>
                    <img class="img-fluid " src="{{ URL::asset('Front/images/country/srilanka.jpg')}}" alt="" height="100" width="100">
                </div>
                <div class="item">
                    <p class="text-center font-bold">Sweden</p>
                    <img class="img-fluid " src="{{ URL::asset('Front/images/country/sweden.jpg')}}" alt="" height="100" width="100">
                </div>
                <div class="item">
                    <p class="text-center font-bold">UAE</p>
                    <img class="img-fluid " src="{{ URL::asset('Front/images/country/uae.jpg')}}" alt="" height="100" width="100">
                </div>
                <div class="item">
                    <p class="text-center font-bold">Vietnam</p>
                    <img class="img-fluid " src="{{ URL::asset('Front/images/country/vietnam.jpg')}}" alt="" height="100" width="100">
                </div>
            </div>
        </div>
        </div>
    </div>
</div>
</section>

<!--=================================
Why Choose-->
@endsection
