<!DOCTYPE html>
<html lang="en">

@include('Front.includes.head')

<div id="pre-loader">
    <img src="{{ URL::asset('Front/images/pre-loader/loader-12.svg') }}" alt="">
</div>

@include('Front.includes.header')

@yield('content')

@include('Front.includes.footer')

@yield('scripts')
