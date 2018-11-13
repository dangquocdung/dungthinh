<?php
    $category_title_var = "title_" . trans('backLang.boxCode');
    $slug_var = "seo_url_slug_" . trans('backLang.boxCode');
    $slug_var2 = "seo_url_slug_" . trans('backLang.boxCodeOther');
?>
<?php
    $link_title_var = "title_" . trans('backLang.boxCode');
    $summary_var = "summary_" . trans('backLang.boxCode');
    $details_var = "details_" . trans('backLang.boxCode');
    $details_var2 = "details_" . trans('backLang.boxCodeOther');
    $title_var = "title_" . trans('backLang.boxCode');
    $title_var2 = "title_" . trans('backLang.boxCodeOther');
    
?>

<!doctype html>
<html lang="{{ trans('backLang.code') }}" dir="ltr">

<head>

    @include('hashnews.includes.head')
    
</head>

<body>

<!-- Main Wrapper -->
<div id="main-wrapper">
    
    <!-- Header Top Start -->
    
    <!-- Header Top End -->
    
    <!-- Breaking News Section Start -->
    @include('hashnews.includes.breaking-news')
    <!-- Breaking News Section End -->
    
    <!-- Header Start -->
    <div class="header-section section">
        <div class="container">
            <div class="row align-items-center">
               
                <!-- Header Logo -->
                <div class="header-logo col-md-5 d-none d-md-block">
                    <a href="#" class="logo"><img src="/frontEnd/hashnews/img/logo.png" alt="Logo"></a>
                </div>
                
                <!-- Header Banner -->
                {{--  <div class="header-banner col-md-7 col-12">
                    <div class="banner"><a href="#"><img src="/frontEnd/hashnews/img/banner/header-banner-3.jpg" alt="Header Banner"></a></div>
                </div>  --}}
                
            </div>
        </div>
    </div><!-- Header End -->
    
    <!-- Menu Section Start -->
    @include('hashnews.includes.menu')
    <!-- Menu Section End -->
    
    <!-- Hero Section Start -->
    @include('hashnews.includes.sport-news')
    
    <!-- Hero Section End -->
    
    <!-- Recent Section Start -->
    @include('hashnews.includes.thoi-su')
    <!-- Popular Section End -->
    
    <!-- Post Section Start -->

    @include('hashnews.includes.feature-post')

    <!-- Post Section End -->

    <!-- Footer Top Section Start -->
        @include('hashnews.includes.footer')
    <!-- Footer Top Section End -->
    
    <!-- Footer Bottom Section Start -->
    <div class="footer-bottom-section section bg-dark">
        <div class="container">
            <div class="row">
                
                <!-- Copyright Start -->
                <div class="copyright text-center col">
                    <p>Copyright © 2018 <a href="http://www.dungthinh.com/">DUNGTHINH SOFTWARE</a>. All Rights Reserved.</p>
                </div><!-- Copyright End -->
                
            </div>
        </div>
    </div><!-- Footer Bottom Section End -->
    
</div>

@include('hashnews.includes.foot')

</body>

</html>