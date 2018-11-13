<meta charset="utf-8">
<meta http-equiv="x-ua-compatible" content="ie=edge">

<title>{{$PageTitle}} {{($PageTitle !="")? "|":""}} {{ Helper::GeneralSiteSettings("site_title_" . trans('backLang.boxCode')) }}</title>
<meta name="description" content="{{$PageDescription}}"/>
<meta name="keywords" content="{{$PageKeywords}}"/>
<meta name="author" content="{{ URL::to('') }}"/>

<meta name="viewport" content="width=device-width, initial-scale=1">
<!-- Favicon -->
<link rel="shortcut icon" type="image/x-icon" href="frontEnd/hashnews/img/favicon.ico">

<!-- CSS
============================================ -->
<!-- Bootstrap CSS -->
<link rel="stylesheet" href="/hashnews/css/bootstrap.min.css">
<!-- Icon Font CSS -->
<link rel="stylesheet" href="/hashnews/css/font-awesome.min.css">
<!-- Plugins CSS -->
<link rel="stylesheet" href="/hashnews/css/plugins.css">
<!-- rypp -->
<link rel="stylesheet" href="frontEnd/hashnews/css/rypp.css">
<!-- Style CSS -->
<link rel="stylesheet" href="/hashnews/style.css">
<!-- Modernizer JS -->
<script src="/hashnews/js/vendor/modernizr-2.8.3.min.js"></script>


{{-- Google Tags and google analytics --}}
@if($WebmasterSettings->google_tags_status && $WebmasterSettings->google_tags_id !="")
    <!-- Google Tag Manager -->
    <script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
            new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
            j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
            'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
        })(window,document,'script','dataLayer','{!! $WebmasterSettings->google_tags_id !!}');</script>
    <!-- End Google Tag Manager -->
@endif