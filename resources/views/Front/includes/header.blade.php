 <header id="header" class="header fancy">
    <!--=================================
     mega menu -->
    <div class="menu">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12">
                    <!-- menu start -->
                    <nav id="menu" class="mega-menu">
                        <!-- menu list items container -->
                        <section class="menu-list-items">
                            <!-- menu logo -->
                            <ul class="menu-logo">
                                <li>
                                    <a href="{{route('home')}}"><img src="{{ URL::asset('Front/images/logo.png') }}" alt="logo" /> </a>
                                </li>
                            </ul>
                            <!-- menu links -->
                            <?php
                                // echo Route::currentRouteName();
                            ?>
                            <div class="menu-bar">
                                <ul class="menu-links">
                                    <li class="{{ Route::is('home') ? 'active' : '' }}"><a href="{{route('home')}}">{{ trans('Home') }} </a></li>
                                    <li class="{{ Route::is(['product','brand_products']) ? 'active' : '' }}">
                                        <a href="javascript:void(0)"> {{ trans('Products') }}<i class="fa fa-angle-down fa-indicator"></i> </a>

                                        <ul class="drop-down-multilevel left-side">
                                            @foreach ($prapare_menu as $key => $item)
                                                    <li ><a href="{{ route('product', ['slug'=>strtolower(str_replace(" ", "-", $item))]) }}-by-chetan-overseas">{{ $item }}</a></li>
                                            @endforeach
                                        </ul>
                                    </li>
                                    <li class="{{ Route::is('about_us') ? 'active' : '' }}"><a href="{{ route('about_us') }}">About Us </a></li>
                                    <li class="{{ Route::is('contact_us') ? 'active' : '' }}"><a href="{{ route('contact_us') }}">Contact Us </a></li>
                                </ul>
                            </div>
                        </section>
                    </nav>
                </div>
            </div>
        </div>
    </div>
    <!-- menu end -->
</header>
