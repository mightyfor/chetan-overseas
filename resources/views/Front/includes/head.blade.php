<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="keywords" content="@yield('meta_keywords')" />
    <meta name="description" content="@yield('meta_description')" />
    <meta name="author" content="@yield('meta_author')" />
    <meta name="title" content="@yield('meta_title')" />

    <script type='text/javascript' src='https://platform-api.sharethis.com/js/sharethis.js#property=66a3c8171b25520019f22e8f&product=sop' async='async'></script>

    <title>{{  config('app.name', 'Laravel') }} | @yield('title')</title>

    <!-- Favicon -->
    <link rel="shortcut icon" href="{{ URL::asset('images/favicon.ico') }}" />

    <!-- font -->
    <link  rel="stylesheet" href="https://fonts.googleapis.com/css?family=Montserrat:300,300i,400,500,500i,600,700,800,900|Poppins:200,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900">

    <!-- Plugins -->
    <link rel="stylesheet" type="text/css" href="{{ URL::asset('Front/css/plugins-css.css')}}" />

    <!-- revoluation -->
    <link rel="stylesheet" type="text/css" href="{{ URL::asset('Front/revolution/css/settings.css')}}" media="screen" />

    <!-- Typography -->
    <link rel="stylesheet" type="text/css" href="{{ URL::asset('Front/css/typography.css')}}" />

    <!-- Shortcodes -->
    <link rel="stylesheet" type="text/css" href="{{ URL::asset('Front/css/shortcodes/shortcodes.css')}}" />

    <!-- Style -->
    <link rel="stylesheet" type="text/css" href="{{ URL::asset('Front/css/style.css')}}" />

    <!-- interior-design -->
    <link rel="stylesheet" type="text/css" href="{{ URL::asset('Front/css/interior-design.css')}}" />

    <!-- Responsive -->
    <link rel="stylesheet" type="text/css" href="{{ URL::asset('Front/css/responsive.css')}}" />

    <!-- Style customizer -->
    <link rel="stylesheet" type="text/css" href="{{ URL::asset('Front/css/skins/skin-blue.css')}}" data-style="styles"/>

</head>
