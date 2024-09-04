@extends('Front.layout.app')
@section('title',($getProductInfo->product_name ?? '').' '.(strtoupper($brand_name).' Products' ?? '').' By Chetan Overseas')
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
                    <a class=" btn  {{ (strtolower(str_replace(['/', ' '],'-',$brand)) == $brand_name) ? 'btn-primary' : '' }}" href="{{route('brand_products',['slug'=>$slug,'brand_name'=>strtolower(str_replace(' ','-',$brand))])}}" class="btn btn-default">{{$brand}}</a>
                    @endforeach
                </div>
                <div class="isotope-filters text-left">
                    @foreach ($getUniqueProductBNumbers as $number)
                        @if($number != '')
                            <button data-filter=".{{ strtolower(str_replace(['/', ' '],'-',$number)) }}">{{$number}}</button>
                        @endif
                    @endforeach
                </div>
                <div class="isotope columns-4 popup-gallery">
                    @if (count($getProductData) > 0)
                        @foreach ($getProductData as $singleProduct)
                            @php
                                $message = "Hello Hirenbhai Please share quotation for ".$getProductInfo->product_name." for ". Str::replaceFirst('&', ' And ', $singleProduct['product_make']) .' '.$singleProduct['product'].' '.$singleProduct['product_number'];
                            @endphp
                            <div class="grid-item {{ strtolower(str_replace(['/', ' '],'-',$singleProduct['product_number'])) }}">
                                <div class="portfolio-item">
                                    <img src="{{ url('products/'.$singleProduct['productimg'])  }}" alt=""  style="height: 250px;width:250px">
                                    <div class="portfolio-overlay pl-2 d-flex align-item" >
                                        <div>
                                            <h5 class="text-white"> <a href="javascript:void(0)"> {{$singleProduct['product_name']}}</a> </h5>
                                            <span class="text-white"> <a href="javascript:void(0)"> {{ $singleProduct['product_make'] }} </a> | <a href="javascript:void(0)"> {{$singleProduct['product'].'-'.$singleProduct['product_number']}} </a></span>
                                        </div>
                                        <div style="padding: 0px 25px">
                                            <span class="text-left"><a class="" href="https://api.whatsapp.com/send?phone=919824202828&text={{htmlentities($message)}}" target="_blank" style="font-size:18px"><i class="fa fa-envelope"></i> </a></span>
                                        </div>
                                    </div>
                                    <a class="popup portfolio-img" href="{{ url('products/'.$singleProduct['productimg'])  }}"><i class="fa fa-arrows-alt"></i></a>
                                </div>
                            </div>
                        @endforeach
                    @else
                        <div> <p class="text-center">No Products Found</p> </div>
                    @endif
                </div>
            </div>
        </div>
    </div>
</section>

@endsection
