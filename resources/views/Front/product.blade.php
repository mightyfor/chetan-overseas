@extends('Front.layout.app')
@section('title',($getProductInfo->product_name ?? '').' By Chetan Overseas')
@section('content')

<section class="page-title bg-overlay-black-60 parallax" data-jarallax='{"speed": 0.6}' style="background-image: url({{ URL::asset('Front/images/aboutus.jpg') }});">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="page-title-name">
                    <h1>About {{($getProductInfo->product_name ?? 'Prouct')}}</h1>
                </div>
                <ul class="page-breadcrumb">
                    <li><a href="{{route('home')}}"><i class="fa fa-home"></i> Home</a> <i class="fa fa-angle-double-right"></i></li>
                    <li><span>About</span> </li>
                </ul>
            </div>
        </div>
    </div>
</section>
<section class="white-bg page-section-ptb">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 text-center">
                <div class="isotope-filters text-left">
                    {{-- <button data-filter="" class="active">All</button> --}}

                    @foreach ($getUniqueProductBrands as $brand)
                    {{-- <button data-filter=".{{$brand}}">{{$brand}}</button> --}}
                    <a href="{{route('brand_products',['slug'=>$slug,'brand_name'=>strtolower(str_replace(' ','-',$brand))])}}" class="btn btn-default">{{$brand}}</a>
                    @endforeach
                </div>
                <div class="isotope columns-4 popup-gallery">
                    @foreach ($getProductData as $singleProduct)
                        <div class="grid-item {{$singleProduct['product_make']}}">
                            <div class="portfolio-item">
                                <img src="{{ url('products/'.$singleProduct['productimg'])  }}" alt=""  style="height: 250px;width:250px">
                                <div class="portfolio-overlay pl-2 d-flex align-item" >
                                    <div>
                                        <h5 class="text-white"> <a href="javascript:void(0)"> {{$singleProduct['product_name']}}</a> </h5>
                                        <span class="text-white"> <a href="javascript:void(0)"> {{ $singleProduct['product_make'] }} </a> | <a href="javascript:void(0)"> {{$singleProduct['product'].'-'.$singleProduct['product_number']}} </a></span>
                                    </div>
                                    <div style="padding: 0px 25px">
                                        <span class="text-left"><a class="" style="font-size:18px"><i class="fa fa-envelope"></i> </a></span>
                                    </div>
                                </div>
                                <a class="popup portfolio-img" href="{{ url('products/'.$singleProduct['productimg'])  }}"><i class="fa fa-arrows-alt"></i></a>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</section>

@endsection
