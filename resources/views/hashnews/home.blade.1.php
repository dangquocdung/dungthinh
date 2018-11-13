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
<html class="no-js" lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Hashnews - Modern Magazine & Newspaper HTML Template</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Favicon -->
    <link rel="shortcut icon" type="image/x-icon" href="frontEnd/hashnews/img/favicon.ico">
    
    <!-- CSS
	============================================ -->
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="frontEnd/hashnews/css/bootstrap.min.css">
    <!-- Icon Font CSS -->
    <link rel="stylesheet" href="frontEnd/hashnews/css/font-awesome.min.css">
    <!-- Plugins CSS -->
    <link rel="stylesheet" href="frontEnd/hashnews/css/plugins.css">
    <!-- rypp -->
    <link rel="stylesheet" href="frontEnd/hashnews/css/rypp.css">
    <!-- Style CSS -->
    <link rel="stylesheet" href="frontEnd/hashnews/style.css">
    <!-- Modernizer JS -->
    <script src="/frontEnd/hashnews/js/vendor/modernizr-2.8.3.min.js"></script>
</head>

<body>

<!-- Main Wrapper -->
<div id="main-wrapper">
    
    <!-- Header Top Start -->
    <div class="header-top section">
        <div class="container">
            <div class="row">
               
                <!-- Header Top Links Start -->
                <div class="header-top-links col-md-9 col-6">
                    
                    <!-- Header Links -->
                    <ul class="header-links">
                        <li class="disabled block d-none d-md-block">
                            <a href="#"><i class="fa fa-clock-o"></i> 
                            {{--  Sunday, March 25, 2017  --}}
                            {{ Carbon\Carbon::now() }}
                        
                            </a>
                        </li>
                        <li class="d-none d-md-block"><a href="#"><i class="fa fa-mixcloud"></i> <span class="weather-degrees">20 <span class="unit">c</span> </span> <span class="weather-location">- Hà Tĩnh</span></a></li>
                        <li><a href="#"><i class="fa fa-user-circle-o"></i>Đăng kí</a></li>
                        <li><a href="contact-us.html"><i class="fa fa-headphones"></i>Liên hệ</a></li>
                        {{--  <li><a href="blog.html">Blog</a></li>  --}}
                    </ul>
                    
                </div><!-- Header Top Links End -->
                
                <!-- Header Top Social Start -->
                <div class="header-top-social col-md-3 col-6">
                    
                    <!-- Header Social -->
                    <div class="header-social">
                        <a href="#"><i class="fa fa-facebook"></i></a>
                        <a href="#"><i class="fa fa-twitter"></i></a>
                        <a href="#"><i class="fa fa-google-plus"></i></a>
                        <a href="#"><i class="fa fa-pinterest-p"></i></a>
                        <a href="#"><i class="fa fa-youtube-play"></i></a>
                        <a href="#"><i class="fa fa-vimeo"></i></a>
                    </div>
                    
                </div><!-- Header Top Social End -->
                
            </div>
        </div>
    </div><!-- Header Top End -->
    
    <!-- Header Start -->
    <div class="header-section section">
        <div class="container">
            <div class="row align-items-center">
               
                <!-- Header Logo -->
                <div class="header-logo col-md-4 d-none d-md-block">
                    <a href="index.html" class="logo"><img src="/frontEnd/hashnews/img/logo.png" alt="Logo"></a>
                </div>
                
                <!-- Header Banner -->
                <div class="header-banner col-md-8 col-12">
                    <div class="banner"><a href="#"><img src="/frontEnd/hashnews/img/banner/header-banner-1.png" alt="Header Banner"></a></div>
                </div>
                
            </div>
        </div>
    </div><!-- Header End -->
    
    <!-- Menu Section Start -->
    @include('hashnews.includes.menu')
    <!-- Menu Section End -->
    
    <!-- Breaking News Section Start -->

    @include('hashnews.includes.breaking-news')
    
    <!-- Breaking News Section End -->

    
    <!-- Hero Section Start -->
    
    @include('hashnews.includes.hero-section')
    
    <!-- Hero Section End -->
    
    <!-- Popular Section Start -->
    @include('hashnews.includes.popular-section')
    
    <!-- Popular Section End -->
    
    <!-- Post Section Start -->
    <div class="post-section section mt-50">
        <div class="container">
            
            <!-- Feature Post Row Start -->

            @include('hashnews.includes.feature-post')

            
            
            <!-- Feature Post Row End -->
            
            
            <!-- Education & Madical Post Row Start -->
            <div class="row">
                
                <div class="col-lg-4 col-md-6 col-12 mb-50">
                    
                    <!-- Post Block Wrapper Start -->
                    <div class="post-block-wrapper">
                        
                        <!-- Post Block Head Start -->
                        <div class="head education-head">
                            
                            <!-- Title -->
                            <h4 class="title">Education News</h4>
                            
                        </div><!-- Post Block Head End -->
                        
                        <!-- Post Block Body Start -->
                        <div class="body">
                            
                            <!-- Sidebar Post Slider Start -->
                            <div class="four-row-post-carousel row-post-carousel post-block-carousel education-post-carousel">

                                <!-- Small Post Start -->
                                <div class="post post-small post-list education-post">
                                    <div class="post-wrap">

                                        <!-- Image -->
                                        <a class="image" href="post-details.html"><img src="/frontEnd/hashnews/img/post/post-27.jpg" alt="post"></a>

                                        <!-- Content -->
                                        <div class="content">

                                            <!-- Title -->
                                            <h5 class="title"><a href="post-details.html">Who Else Wants To Be Successful With education.</a></h5>

                                            <!-- Meta -->
                                            <div class="meta fix">
                                                <span class="meta-item date"><i class="fa fa-clock-o"></i>10 March 2017</span>
                                            </div>

                                        </div>

                                    </div>
                                </div><!-- Small Post End -->

                                <!-- Small Post Start -->
                                <div class="post post-small post-list education-post">
                                    <div class="post-wrap">

                                        <!-- Image -->
                                        <a class="image" href="post-details.html"><img src="/frontEnd/hashnews/img/post/post-28.jpg" alt="post"></a>

                                        <!-- Content -->
                                        <div class="content">

                                            <!-- Title -->
                                            <h5 class="title"><a href="post-details.html">The Biggest Contribution Of Education To Humanity.</a></h5>

                                            <!-- Meta -->
                                            <div class="meta fix">
                                                <span class="meta-item date"><i class="fa fa-clock-o"></i>10 March 2017</span>
                                            </div>

                                        </div>

                                    </div>
                                </div><!-- Small Post End -->

                                <!-- Small Post Start -->
                                <div class="post post-small post-list education-post">
                                    <div class="post-wrap">

                                        <!-- Image -->
                                        <a class="image" href="post-details.html"><img src="/frontEnd/hashnews/img/post/post-29.jpg" alt="post"></a>

                                        <!-- Content -->
                                        <div class="content">

                                            <!-- Title -->
                                            <h5 class="title"><a href="post-details.html">7 Outrageous Ideas For Your Graphic Class.</a></h5>

                                            <!-- Meta -->
                                            <div class="meta fix">
                                                <span class="meta-item date"><i class="fa fa-clock-o"></i>10 March 2017</span>
                                            </div>

                                        </div>

                                    </div>
                                </div><!-- Small Post End -->

                                <!-- Small Post Start -->
                                <div class="post post-small post-list education-post">
                                    <div class="post-wrap">

                                        <!-- Image -->
                                        <a class="image" href="post-details.html"><img src="/frontEnd/hashnews/img/post/post-30.jpg" alt="post"></a>

                                        <!-- Content -->
                                        <div class="content">

                                            <!-- Title -->
                                            <h5 class="title"><a href="post-details.html">Everything You Need To Know About Education.</a></h5>

                                            <!-- Meta -->
                                            <div class="meta fix">
                                                <span class="meta-item date"><i class="fa fa-clock-o"></i>10 March 2017</span>
                                            </div>

                                        </div>

                                    </div>
                                </div><!-- Small Post End -->

                                <!-- Small Post Start -->
                                <div class="post post-small post-list education-post">
                                    <div class="post-wrap">

                                        <!-- Image -->
                                        <a class="image" href="post-details.html"><img src="/frontEnd/hashnews/img/post/post-27.jpg" alt="post"></a>

                                        <!-- Content -->
                                        <div class="content">

                                            <!-- Title -->
                                            <h5 class="title"><a href="post-details.html">Who Else Wants To Be Successful With education.</a></h5>

                                            <!-- Meta -->
                                            <div class="meta fix">
                                                <span class="meta-item date"><i class="fa fa-clock-o"></i>10 March 2017</span>
                                            </div>

                                        </div>

                                    </div>
                                </div><!-- Small Post End -->

                                <!-- Small Post Start -->
                                <div class="post post-small post-list education-post">
                                    <div class="post-wrap">

                                        <!-- Image -->
                                        <a class="image" href="post-details.html"><img src="/frontEnd/hashnews/img/post/post-28.jpg" alt="post"></a>

                                        <!-- Content -->
                                        <div class="content">

                                            <!-- Title -->
                                            <h5 class="title"><a href="post-details.html">The Biggest Contribution Of Education To Humanity.</a></h5>

                                            <!-- Meta -->
                                            <div class="meta fix">
                                                <span class="meta-item date"><i class="fa fa-clock-o"></i>10 March 2017</span>
                                            </div>

                                        </div>

                                    </div>
                                </div><!-- Small Post End -->

                                <!-- Small Post Start -->
                                <div class="post post-small post-list education-post">
                                    <div class="post-wrap">

                                        <!-- Image -->
                                        <a class="image" href="post-details.html"><img src="/frontEnd/hashnews/img/post/post-29.jpg" alt="post"></a>

                                        <!-- Content -->
                                        <div class="content">

                                            <!-- Title -->
                                            <h5 class="title"><a href="post-details.html">7 Outrageous Ideas For Your Graphic Class.</a></h5>

                                            <!-- Meta -->
                                            <div class="meta fix">
                                                <span class="meta-item date"><i class="fa fa-clock-o"></i>10 March 2017</span>
                                            </div>

                                        </div>

                                    </div>
                                </div><!-- Small Post End -->

                                <!-- Small Post Start -->
                                <div class="post post-small post-list education-post">
                                    <div class="post-wrap">

                                        <!-- Image -->
                                        <a class="image" href="post-details.html"><img src="/frontEnd/hashnews/img/post/post-30.jpg" alt="post"></a>

                                        <!-- Content -->
                                        <div class="content">

                                            <!-- Title -->
                                            <h5 class="title"><a href="post-details.html">Everything You Need To Know About Education.</a></h5>

                                            <!-- Meta -->
                                            <div class="meta fix">
                                                <span class="meta-item date"><i class="fa fa-clock-o"></i>10 March 2017</span>
                                            </div>

                                        </div>

                                    </div>
                                </div><!-- Small Post End -->

                            </div><!-- Sidebar Post Slider End -->
                        
                        </div><!-- Post Block Body End -->
                        
                    </div><!-- Post Block Wrapper End -->
                    
                </div>
                
                <div class="col-lg-4 col-md-6 col-12 mb-50">
                    
                    <!-- Post Block Wrapper Start -->
                    <div class="post-block-wrapper">
                        
                        <!-- Post Block Head Start -->
                        <div class="head madical-head">
                            
                            <!-- Title -->
                            <h4 class="title">Madical News</h4>
                            
                        </div><!-- Post Block Head End -->
                        
                        <!-- Post Block Body Start -->
                        <div class="body">
                            
                            <!-- Sidebar Post Slider Start -->
                            <div class="two-row-post-carousel row-post-carousel post-block-carousel madical-post-carousel">
                                       
                                <!-- Post Start -->
                                <div class="post madical-post">
                                    <div class="post-wrap">

                                        <!-- Image -->
                                        <a class="image" href="post-details.html"><img src="/frontEnd/hashnews/img/post/post-31.jpg" alt="post"></a>

                                        <!-- Content -->
                                        <div class="content">

                                            <!-- Title -->
                                            <h4 class="title"><a href="post-details.html">If lose your extra calorie !! join Friensd Madical.</a></h4>

                                        </div>
                                    
                                    </div>
                                </div><!-- Post End -->
                                
                                <!-- Post Start -->
                                <div class="post madical-post">
                                    <div class="post-wrap">

                                        <!-- Image -->
                                        <a href="https://www.youtube.com/watch?v=yv04rtsRL3I" class="image video-popup">
                                            <img src="/frontEnd/hashnews/img/post/post-32.jpg" alt="post">
                                            <!-- Video Button -->
                                            <span class="video-btn"><i class="fa fa-play"></i></span>
                                        </a>
                                        
                                    </div>
                                </div><!-- Post End -->
                                
                                <!-- Post Start -->
                                <div class="post madical-post">
                                    <div class="post-wrap">

                                        <!-- Image -->
                                        <a href="https://www.youtube.com/watch?v=yv04rtsRL3I" class="image video-popup">
                                            <img src="/frontEnd/hashnews/img/post/post-32.jpg" alt="post">
                                            <!-- Video Button -->
                                            <span class="video-btn"><i class="fa fa-play"></i></span>
                                        </a>
                                        
                                    </div>
                                </div><!-- Post End -->
                                       
                                <!-- Post Start -->
                                <div class="post madical-post">
                                    <div class="post-wrap">

                                        <!-- Image -->
                                        <a class="image" href="post-details.html"><img src="/frontEnd/hashnews/img/post/post-31.jpg" alt="post"></a>

                                        <!-- Content -->
                                        <div class="content">

                                            <!-- Title -->
                                            <h4 class="title"><a href="post-details.html">If lose your extra calorie !! join Friensd Madical.</a></h4>

                                        </div>
                                    
                                    </div>
                                </div><!-- Post End -->

                            </div><!-- Sidebar Post Slider End -->
                        
                        </div><!-- Post Block Body End -->
                        
                    </div><!-- Post Block Wrapper End -->
                    
                </div>
                
                <!-- Sidebar Start -->
                <div class="col-lg-4 col-md-6 col-12 mb-50">
                    
                    <!-- Single Sidebar -->
                    <div class="single-sidebar">
                        
                        <!-- Sidebar Block Wrapper -->
                        <div class="sidebar-block-wrapper">
                        
                            <!-- Sidebar Block Head Start -->
                            <div class="head education-head">

                                <!-- Tab List -->
                                <div class="sidebar-tab-list education-sidebar-tab-list nav">
                                    <a class="active" data-toggle="tab" href="#latest-news">Latest News</a>
                                    <a data-toggle="tab" href="#popular-news">Popular News</a>
                                </div>

                            </div><!-- Sidebar Block Head End -->
                            
                            <!-- Sidebar Block Body Start -->
                            <div class="body">
                            
                                <div class="tab-content">
                                    <div class="tab-pane fade show active" id="latest-news">

                                        <!-- Small Post Start -->
                                        <div class="post post-small post-list education-post post-separator-border">
                                            <div class="post-wrap">

                                                <!-- Image -->
                                                <a class="image" href="post-details.html"><img src="/frontEnd/hashnews/img/post/post-33.jpg" alt="post"></a>

                                                <!-- Content -->
                                                <div class="content">

                                                    <!-- Title -->
                                                    <h5 class="title"><a href="post-details.html">Hynpodia helps female travelers find health..</a></h5>

                                                    <!-- Meta -->
                                                    <div class="meta fix">
                                                        <span class="meta-item date"><i class="fa fa-clock-o"></i>10 March 2017</span>
                                                    </div>

                                                </div>
                                                
                                            </div>
                                        </div><!-- Small Post End -->

                                        <!-- Small Post Start -->
                                        <div class="post post-small post-list education-post post-separator-border">
                                            <div class="post-wrap">

                                                <!-- Image -->
                                                <a class="image" href="post-details.html"><img src="/frontEnd/hashnews/img/post/post-34.jpg" alt="post"></a>

                                                <!-- Content -->
                                                <div class="content">

                                                    <!-- Title -->
                                                    <h5 class="title"><a href="post-details.html">How do you solve the IOS page problem.</a></h5>

                                                    <!-- Meta -->
                                                    <div class="meta fix">
                                                        <span class="meta-item date"><i class="fa fa-clock-o"></i>10 March 2017</span>
                                                    </div>

                                                </div>
                                                
                                            </div>
                                        </div><!-- Small Post End -->

                                        <!-- Small Post Start -->
                                        <div class="post post-small post-list education-post post-separator-border">
                                            <div class="post-wrap">

                                                <!-- Image -->
                                                <a class="image" href="post-details.html"><img src="/frontEnd/hashnews/img/post/post-35.jpg" alt="post"></a>

                                                <!-- Content -->
                                                <div class="content">

                                                    <!-- Title -->
                                                    <h5 class="title"><a href="post-details.html">Home is not a place . . . . . . it’s a feeling.</a></h5>

                                                    <!-- Meta -->
                                                    <div class="meta fix">
                                                        <span class="meta-item date"><i class="fa fa-clock-o"></i>10 March 2017</span>
                                                    </div>

                                                </div>
                                                
                                            </div>
                                        </div><!-- Small Post End -->

                                        <!-- Small Post Start -->
                                        <div class="post post-small post-list education-post post-separator-border">
                                            <div class="post-wrap">

                                                <!-- Image -->
                                                <a class="image" href="post-details.html"><img src="/frontEnd/hashnews/img/post/post-36.jpg" alt="post"></a>

                                                <!-- Content -->
                                                <div class="content">

                                                    <!-- Title -->
                                                    <h5 class="title"><a href="post-details.html">How do you solve the local political page problem.</a></h5>

                                                    <!-- Meta -->
                                                    <div class="meta fix">
                                                        <span class="meta-item date"><i class="fa fa-clock-o"></i>10 March 2017</span>
                                                    </div>

                                                </div>
                                                
                                            </div>
                                        </div><!-- Small Post End -->
                                   
                                    </div>
                                    <div class="tab-pane fade" id="popular-news">

                                        <!-- Small Post Start -->
                                        <div class="post post-small post-list education-post post-separator-border">
                                            <div class="post-wrap">

                                                <!-- Image -->
                                                <a class="image" href="post-details.html"><img src="/frontEnd/hashnews/img/post/post-35.jpg" alt="post"></a>

                                                <!-- Content -->
                                                <div class="content">

                                                    <!-- Title -->
                                                    <h5 class="title"><a href="post-details.html">Home is not a place . . . . . . it’s a feeling.</a></h5>

                                                    <!-- Meta -->
                                                    <div class="meta fix">
                                                        <span class="meta-item date"><i class="fa fa-clock-o"></i>10 March 2017</span>
                                                    </div>

                                                </div>
                                                
                                            </div>
                                        </div><!-- Small Post End -->

                                        <!-- Small Post Start -->
                                        <div class="post post-small post-list education-post post-separator-border">
                                            <div class="post-wrap">

                                                <!-- Image -->
                                                <a class="image" href="post-details.html"><img src="/frontEnd/hashnews/img/post/post-36.jpg" alt="post"></a>

                                                <!-- Content -->
                                                <div class="content">

                                                    <!-- Title -->
                                                    <h5 class="title"><a href="post-details.html">How do you solve the local political page problem.</a></h5>

                                                    <!-- Meta -->
                                                    <div class="meta fix">
                                                        <span class="meta-item date"><i class="fa fa-clock-o"></i>10 March 2017</span>
                                                    </div>

                                                </div>
                                                
                                            </div>
                                        </div><!-- Small Post End -->

                                        <!-- Small Post Start -->
                                        <div class="post post-small post-list education-post post-separator-border">
                                            <div class="post-wrap">

                                                <!-- Image -->
                                                <a class="image" href="post-details.html"><img src="/frontEnd/hashnews/img/post/post-33.jpg" alt="post"></a>

                                                <!-- Content -->
                                                <div class="content">

                                                    <!-- Title -->
                                                    <h5 class="title"><a href="post-details.html">Hynpodia helps female travelers find health..</a></h5>

                                                    <!-- Meta -->
                                                    <div class="meta fix">
                                                        <span class="meta-item date"><i class="fa fa-clock-o"></i>10 March 2017</span>
                                                    </div>

                                                </div>
                                                
                                            </div>
                                        </div><!-- Small Post End -->

                                        <!-- Small Post Start -->
                                        <div class="post post-small post-list education-post post-separator-border">
                                            <div class="post-wrap">

                                                <!-- Image -->
                                                <a class="image" href="post-details.html"><img src="/frontEnd/hashnews/img/post/post-34.jpg" alt="post"></a>

                                                <!-- Content -->
                                                <div class="content">

                                                    <!-- Title -->
                                                    <h5 class="title"><a href="post-details.html">How do you solve the IOS page problem.</a></h5>

                                                    <!-- Meta -->
                                                    <div class="meta fix">
                                                        <span class="meta-item date"><i class="fa fa-clock-o"></i>10 March 2017</span>
                                                    </div>

                                                </div>
                                                
                                            </div>
                                        </div><!-- Small Post End -->
                                   
                                    </div>
                                </div>
                                
                            </div><!-- Sidebar Block Body End -->

                        </div>
                        
                    </div>
                    
                </div><!-- Sidebar End -->
                
            </div><!-- Education & Madical Post Row End -->
            
            <!-- Sports Post Row Start -->
            <div class="row mb-50">
                
                <div class="col-12">
                    
                    <!-- Post Block Wrapper Start -->
                    <div class="post-block-wrapper">
                        
                        <!-- Post Block Head Start -->
                        <div class="head sports-head">
                            
                            <!-- Title -->
                            <h4 class="title">Sports News</h4>
                            
                            <!-- Tab List Start -->
                            <ul class="post-block-tab-list sports-post-tab-list nav d-none d-md-block">
                                <li><a class="active" data-toggle="tab" href="#sports-cat-1">Fashion</a></li>
                                <li><a data-toggle="tab" href="#sports-cat-2">Health</a></li>
                                <li><a data-toggle="tab" href="#sports-cat-1">Beauty</a></li>
                                <li><a data-toggle="tab" href="#sports-cat-2">Sports</a></li>
                                <li><a class="dropdown-toggle" data-toggle="dropdown" href="#">More</a>
                                   
                                    <!-- Dropdown -->
                                    <ul class="dropdown-menu">
                                        <li><a data-toggle="tab" href="#sports-cat-1">Technology</a></li>
                                        <li><a data-toggle="tab" href="#sports-cat-2">Food</a></li>
                                    </ul>
                                    
                                </li>
                            </ul><!-- Tab List End -->
                            
                            <!-- Tab List Start -->
                            <ul class="post-block-tab-list sports-post-tab-list nav d-sm-block d-md-none">
                                <li><a class="dropdown-toggle" data-toggle="dropdown" href="#">Category</a>
                                   
                                    <!-- Dropdown -->
                                    <ul class="dropdown-menu">
                                        <li><a class="active" data-toggle="tab" href="#sports-cat-1">Fashion</a></li>
                                        <li><a data-toggle="tab" href="#sports-cat-2">Health</a></li>
                                        <li><a data-toggle="tab" href="#sports-cat-1">Beauty</a></li>
                                        <li><a data-toggle="tab" href="#sports-cat-2">Sports</a></li>
                                        <li><a data-toggle="tab" href="#sports-cat-1">Technology</a></li>
                                        <li><a data-toggle="tab" href="#sports-cat-2">Food</a></li>
                                    </ul>
                                    
                                </li>
                            </ul><!-- Tab List End -->
                            
                        </div><!-- Post Block Head End -->
                        
                        <!-- Post Block Body Start -->
                        <div class="body pb-0">
                            
                            <!-- Tab Content Start-->
                            <div class="tab-content">
                               
                                <!-- Tab Pane Start-->
                                <div class="tab-pane fade show active" id="sports-cat-1">
                                   
                                    <div class="row">

                                        <!-- Overlay Post Wrapper Start -->
                                        <div class="col-lg-8 col-12">

                                            <div class="row">

                                                <!-- Overlay Post Start -->
                                                <div class="post post-overlay post-large sports-post col-12 mb-20">
                                                    <div class="post-wrap">

                                                        <!-- Image -->
                                                        <div class="image"><img src="/frontEnd/hashnews/img/post/post-37.jpg" alt="post"></div>

                                                        <!-- Content -->
                                                        <div class="content">

                                                            <!-- Title -->
                                                            <h2 class="title"><a href="post-details.html">Mohammedan 05 - Arambagh 04</a></h2>

                                                            <!-- Meta -->
                                                            <div class="meta fix">
                                                                <a href="#" class="meta-item author"><i class="fa fa-user"></i> Sathi Bhuiyan</a>
                                                                <span class="meta-item date"><i class="fa fa-clock-o"></i>10 March 2017</span>
                                                            </div>
                                                        </div>

                                                    </div>
                                                </div><!-- Overlay Post End -->
                                                
                                                <!-- Overlay Post Start -->
                                                <div class="post post-overlay sports-post col-md-6 mb-20">
                                                    <div class="post-wrap">

                                                        <!-- Image -->
                                                        <div class="image"><img src="/frontEnd/hashnews/img/post/post-38.jpg" alt="post"></div>

                                                        <!-- Content -->
                                                        <div class="content">

                                                            <!-- Title -->
                                                            <h4 class="title"><a href="post-details.html">Sreekail 2 - 3 Comilla.</a></h4>

                                                            <!-- Meta -->
                                                            <div class="meta fix">
                                                                <span class="meta-item date"><i class="fa fa-clock-o"></i>10 March 2017</span>
                                                            </div>
                                                        </div>
                                                        
                                                    </div>
                                                </div><!-- Overlay Post End -->
                                                
                                                <!-- Overlay Post Start -->
                                                <div class="post post-overlay sports-post col-md-6 mb-20">
                                                    <div class="post-wrap">

                                                        <!-- Image -->
                                                        <a href="https://www.youtube.com/watch?v=S50yhCPOyQw" class="image video-popup">
                                                            <img src="/frontEnd/hashnews/img/post/post-39.jpg" alt="post">
                                                            <!-- Video Popup -->
                                                            <span class="video-btn"><i class="fa fa-play"></i></span>
                                                        </a>

                                                    </div>
                                                </div><!-- Overlay Post End -->
                                                
                                            </div>

                                        </div><!-- Overlay Post Wrapper End -->

                                        <!-- Post Wrapper Start -->
                                        <div class="col-lg-4 col-12">
                                           <div class="row">
                                               
                                               <div class="col-lg-12 col-md-6 col-12 mb-20">
                                                   
                                                    <!-- Small Post Start -->
                                                    <div class="post post-small post-list sports-post post-separator-border">
                                                        <div class="post-wrap">

                                                            <!-- Image -->
                                                            <a class="image" href="post-details.html"><img src="/frontEnd/hashnews/img/post/post-40.jpg" alt="post"></a>

                                                            <!-- Content -->
                                                            <div class="content">

                                                                <!-- Title -->
                                                                <h5 class="title"><a href="post-details.html">Hynpodia helps female travelers find health.</a></h5>

                                                                <!-- Meta -->
                                                                <div class="meta fix">
                                                                    <span class="meta-item date"><i class="fa fa-clock-o"></i>10 March 2017</span>
                                                                </div>

                                                            </div>

                                                        </div>
                                                    </div><!-- Small Post End -->

                                                    <!-- Small Post Start -->
                                                    <div class="post post-small post-list sports-post post-separator-border">
                                                        <div class="post-wrap">

                                                            <!-- Image -->
                                                            <a class="image" href="post-details.html"><img src="/frontEnd/hashnews/img/post/post-41.jpg" alt="post"></a>

                                                            <!-- Content -->
                                                            <div class="content">

                                                                <!-- Title -->
                                                                <h5 class="title"><a href="post-details.html">Australia announced squad for Bangladesh tour.</a></h5>

                                                                <!-- Meta -->
                                                                <div class="meta fix">
                                                                    <span class="meta-item date"><i class="fa fa-clock-o"></i>10 March 2017</span>
                                                                </div>

                                                            </div>

                                                        </div>
                                                    </div><!-- Small Post End -->
                                                
                                                </div>

                                               <div class="col-lg-12 col-md-6 col-12 mb-20">
                                                   
                                                    <!-- Post Start -->
                                                    <div class="post sports-post">
                                                        <div class="post-wrap">

                                                            <!-- Image -->
                                                            <a class="image" href="post-details.html"><img src="/frontEnd/hashnews/img/post/post-42.jpg" alt="post"></a>

                                                            <!-- Content -->
                                                            <div class="content">

                                                                <!-- Title -->
                                                                <h4 class="title"><a href="post-details.html">Winning T20 Farewell To Safari.</a></h4>

                                                                <!-- Meta -->
                                                                <div class="meta fix">
                                                                    <a href="#" class="meta-item date"><i class="fa fa-user"></i> Sathi Bhuiyan</a>
                                                                    <span class="meta-item date"><i class="fa fa-clock-o"></i>10 March 2017</span>
                                                                </div>

                                                                <!-- Description s-->
                                                                <p>Lorem ipsum dolor sit amet, consectet adipiscing elits. Proin nec purus lectus. Aenean sodales quis eros is quis eleifend. </p>

                                                            </div>
                                                        </div>
                                                    </div><!-- Post End -->
                                                    
                                               </div>
                                            
                                            </div>
                                        </div><!-- Post Wrapper End -->

                                    </div>
                                    
                                </div><!-- Tab Pane End-->
                               
                                <!-- Tab Pane Start-->
                                <div class="tab-pane fade" id="sports-cat-2">
                                   
                                    <div class="row">

                                        <!-- Overlay Post Wrapper Start -->
                                        <div class="col-lg-8 col-12">

                                            <div class="row">

                                                <!-- Overlay Post Start -->
                                                <div class="post post-overlay post-large sports-post col-12 mb-20">
                                                    <div class="post-wrap">

                                                        <!-- Image -->
                                                        <div class="image"><img src="/frontEnd/hashnews/img/post/post-37.jpg" alt="post"></div>

                                                        <!-- Content -->
                                                        <div class="content">

                                                            <!-- Title -->
                                                            <h2 class="title"><a href="post-details.html">Mohammedan 05 - Arambagh 04</a></h2>

                                                            <!-- Meta -->
                                                            <div class="meta fix">
                                                                <a href="#" class="meta-item author"><i class="fa fa-user"></i> Sathi Bhuiyan</a>
                                                                <span class="meta-item date"><i class="fa fa-clock-o"></i>10 March 2017</span>
                                                            </div>
                                                        </div>

                                                    </div>
                                                </div><!-- Overlay Post End -->
                                                
                                                <!-- Overlay Post Start -->
                                                <div class="post post-overlay sports-post col-md-6 mb-20">
                                                    <div class="post-wrap">

                                                        <!-- Image -->
                                                        <div class="image"><img src="/frontEnd/hashnews/img/post/post-38.jpg" alt="post"></div>

                                                        <!-- Content -->
                                                        <div class="content">

                                                            <!-- Title -->
                                                            <h4 class="title"><a href="post-details.html">Sreekail 2 - 3 Comilla.</a></h4>

                                                            <!-- Meta -->
                                                            <div class="meta fix">
                                                                <span class="meta-item date"><i class="fa fa-clock-o"></i>10 March 2017</span>
                                                            </div>
                                                        </div>
                                                        
                                                    </div>
                                                </div><!-- Overlay Post End -->
                                                
                                                <!-- Overlay Post Start -->
                                                <div class="post post-overlay sports-post col-md-6 mb-20">
                                                    <div class="post-wrap">

                                                        <!-- Image -->
                                                        <a href="https://www.youtube.com/watch?v=S50yhCPOyQw" class="image video-popup">
                                                            <img src="/frontEnd/hashnews/img/post/post-39.jpg" alt="post">
                                                            <!-- Video Popup -->
                                                            <span class="video-btn"><i class="fa fa-play"></i></span>
                                                        </a>

                                                    </div>
                                                </div><!-- Overlay Post End -->
                                                
                                            </div>

                                        </div><!-- Overlay Post Wrapper End -->

                                        <!-- Post Wrapper Start -->
                                        <div class="col-lg-4 col-12">
                                           <div class="row">

                                               <div class="col-lg-12 col-md-6 col-12 mb-20">
                                                   
                                                    <!-- Post Start -->
                                                    <div class="post sports-post">
                                                        <div class="post-wrap">

                                                            <!-- Image -->
                                                            <a class="image" href="post-details.html"><img src="/frontEnd/hashnews/img/post/post-42.jpg" alt="post"></a>

                                                            <!-- Content -->
                                                            <div class="content">

                                                                <!-- Title -->
                                                                <h4 class="title"><a href="post-details.html">Winning T20 Farewell To Safari.</a></h4>

                                                                <!-- Meta -->
                                                                <div class="meta fix">
                                                                    <a href="#" class="meta-item date"><i class="fa fa-user"></i> Sathi Bhuiyan</a>
                                                                    <span class="meta-item date"><i class="fa fa-clock-o"></i>10 March 2017</span>
                                                                </div>

                                                                <!-- Description s-->
                                                                <p>Lorem ipsum dolor sit amet, consectet adipiscing elits. Proin nec purus lectus. Aenean sodales quis eros is quis eleifend. </p>

                                                            </div>
                                                        </div>
                                                    </div><!-- Post End -->
                                                    
                                               </div>
                                               
                                               <div class="col-lg-12 col-md-6 col-12 mb-20">
                                                   
                                                    <!-- Small Post Start -->
                                                    <div class="post post-small post-list sports-post post-separator-border">
                                                        <div class="post-wrap">

                                                            <!-- Image -->
                                                            <a class="image" href="post-details.html"><img src="/frontEnd/hashnews/img/post/post-40.jpg" alt="post"></a>

                                                            <!-- Content -->
                                                            <div class="content">

                                                                <!-- Title -->
                                                                <h5 class="title"><a href="post-details.html">Hynpodia helps female travelers find health.</a></h5>

                                                                <!-- Meta -->
                                                                <div class="meta fix">
                                                                    <span class="meta-item date"><i class="fa fa-clock-o"></i>10 March 2017</span>
                                                                </div>

                                                            </div>

                                                        </div>
                                                    </div><!-- Small Post End -->

                                                    <!-- Small Post Start -->
                                                    <div class="post post-small post-list sports-post post-separator-border">
                                                        <div class="post-wrap">

                                                            <!-- Image -->
                                                            <a class="image" href="post-details.html"><img src="/frontEnd/hashnews/img/post/post-41.jpg" alt="post"></a>

                                                            <!-- Content -->
                                                            <div class="content">

                                                                <!-- Title -->
                                                                <h5 class="title"><a href="post-details.html">Australia announced squad for Bangladesh tour.</a></h5>

                                                                <!-- Meta -->
                                                                <div class="meta fix">
                                                                    <span class="meta-item date"><i class="fa fa-clock-o"></i>10 March 2017</span>
                                                                </div>

                                                            </div>

                                                        </div>
                                                    </div><!-- Small Post End -->
                                                
                                                </div>
                                            
                                            </div>
                                        </div><!-- Post Wrapper End -->

                                    </div>
                                    
                                </div><!-- Tab Pane End-->
                                
                            </div><!-- Tab Content End-->
                            
                        </div><!-- Post Block Body End -->
                        
                    </div><!-- Post Block Wrapper End -->
                    
                </div>
                
            </div><!-- Sports Post Row End -->
            
            <!-- Banner Row Start -->
            <div class="row mb-50">
                
                <div class="col-12">
                    
                    <a href="#" class="post-middle-banner"><img src="http://www.quangninhcdc.vn/images/advertise/035_2222018_153748.bmp" alt="Banner"></a>
                    
                </div>
                
            </div><!-- Banner Row End -->
            
            <!-- Youtube Video Row Start -->

            
            <!-- Youtube Video Banner Row End -->
            
            <!-- Technology, Fashion & Other Post Row Start -->
            <div class="row">
                
                <div class="col-lg-4 col-md-6 col-12 mb-50">
                    
                    <!-- Post Block Wrapper Start -->
                    <div class="post-block-wrapper">
                        
                        <!-- Post Block Head Start -->
                        <div class="head gadgets-head">
                            
                            <!-- Title -->
                            <h4 class="title">Technology</h4>
                            
                        </div><!-- Post Block Head End -->
                        
                        <!-- Post Block Body Start -->
                        <div class="body">
                            
                            <!-- Sidebar Post Slider Start -->
                            <div class="sidebar-post-carousel post-block-carousel gadgets-post-carousel">

                                <!-- Post Start -->
                                <div class="post gadgets-post">
                                    <div class="post-wrap">

                                        <!-- Image -->
                                        <a class="image" href="post-details.html"><img src="/frontEnd/hashnews/img/post/post-43.jpg" alt="post"></a>

                                        <!-- Content -->
                                        <div class="content">

                                            <!-- Title -->
                                            <h4 class="title"><a href="post-details.html">Sony Reveals The Xperia Z4, Its Latest Flagship Smartphone.</a></h4>

                                        </div>

                                    </div>
                                </div><!-- Post End -->

                                <!-- Post Start -->
                                <div class="post gadgets-post">
                                    <div class="post-wrap">

                                        <!-- Image -->
                                        <a class="image" href="post-details.html"><img src="/frontEnd/hashnews/img/post/post-43.jpg" alt="post"></a>

                                        <!-- Content -->
                                        <div class="content">

                                            <!-- Title -->
                                            <h4 class="title"><a href="post-details.html">Sony Reveals The Xperia Z4, Its Latest Flagship Smartphone.</a></h4>

                                        </div>

                                    </div>
                                </div><!-- Post End -->

                            </div><!-- Sidebar Post Slider End -->
                        
                        </div><!-- Post Block Body End -->
                        
                    </div><!-- Post Block Wrapper End -->
                    
                </div>
                
                <div class="col-lg-4 col-md-6 col-12 mb-50">
                    
                    <!-- Post Block Wrapper Start -->
                    <div class="post-block-wrapper">
                        
                        <!-- Post Block Head Start -->
                        <div class="head fashion-head">
                            
                            <!-- Title -->
                            <h4 class="title">fashion</h4>
                            
                        </div><!-- Post Block Head End -->
                        
                        <!-- Post Block Body Start -->
                        <div class="body">
                            
                            <!-- Sidebar Post Slider Start -->
                            <div class="sidebar-post-carousel post-block-carousel fashion-post-carousel">

                                <!-- Post Start -->
                                <div class="post fashion-post">
                                    <div class="post-wrap">

                                        <!-- Image -->
                                        <a class="image" href="post-details.html"><img src="/frontEnd/hashnews/img/post/post-44.jpg" alt="post"></a>

                                        <!-- Content -->
                                        <div class="content">

                                            <!-- Title -->
                                            <h4 class="title"><a href="post-details.html">The scientific method of finding love on the beauty.</a></h4>

                                        </div>

                                    </div>
                                </div><!-- Post End -->

                                <!-- Post Start -->
                                <div class="post fashion-post">
                                    <div class="post-wrap">

                                        <!-- Image -->
                                        <a class="image" href="post-details.html"><img src="/frontEnd/hashnews/img/post/post-44.jpg" alt="post"></a>

                                        <!-- Content -->
                                        <div class="content">

                                            <!-- Title -->
                                            <h4 class="title"><a href="post-details.html">The scientific method of finding love on the beauty.</a></h4>

                                        </div>

                                    </div>
                                </div><!-- Post End -->

                            </div><!-- Sidebar Post Slider End -->
                        
                        </div><!-- Post Block Body End -->
                        
                    </div><!-- Post Block Wrapper End -->
                    
                </div>
                
                <div class="col-lg-4 col-md-6 col-12 mb-50">
                    
                    <!-- Post Block Wrapper Start -->
                    <div class="post-block-wrapper">
                        
                        <!-- Post Block Head Start -->
                        <div class="head">
                            
                            <!-- Title -->
                            <h4 class="title">Other News</h4>
                            
                        </div><!-- Post Block Head End -->
                        
                        <!-- Post Block Body Start -->
                        <div class="body">
                            
                            <!-- Sidebar Post Slider Start -->
                            <div class="sidebar-post-carousel post-block-carousel">

                                <!-- Post Start -->
                                <div class="post">
                                    <div class="post-wrap">

                                        <!-- Image -->
                                        <a class="image" href="post-details.html"><img src="/frontEnd/hashnews/img/post/post-45.jpg" alt="post"></a>

                                        <!-- Content -->
                                        <div class="content">

                                            <!-- Title -->
                                            <h4 class="title"><a href="post-details.html">Tell me how to Achive your goal by creating a design.</a></h4>

                                        </div>

                                    </div>
                                </div><!-- Post End -->

                                <!-- Post Start -->
                                <div class="post">
                                    <div class="post-wrap">

                                        <!-- Image -->
                                        <a class="image" href="post-details.html"><img src="/frontEnd/hashnews/img/post/post-45.jpg" alt="post"></a>

                                        <!-- Content -->
                                        <div class="content">

                                            <!-- Title -->
                                            <h4 class="title"><a href="post-details.html">Tell me how to Achive your goal by creating a design.</a></h4>

                                        </div>

                                    </div>
                                </div><!-- Post End -->

                            </div><!-- Sidebar Post Slider End -->
                        
                        </div><!-- Post Block Body End -->
                        
                    </div><!-- Post Block Wrapper End -->
                    
                </div>
                
            </div><!-- Technology, Fashion & Other Post Row End -->
            
        </div>
    </div><!-- Post Section End -->
    
    <!-- Instagram Section Start -->
    
    <!-- Instagram Section End -->
    
    <!-- Footer Top Section Start -->
    <div class="footer-top-section section bg-dark">
        <div class="container-fluid">
            <div class="row">
                
                <!-- Footer Widget Start -->
                <div class="footer-widget col-xl-3 col-md-6 col-12 mb-60">
                    
                    <!-- Title -->
                    <h4 class="widget-title">About Us</h4>
                    
                    <div class="content fix">
                        <p>Lorem ipsum dolor sit amet, consectet adipiscing Se velit ex, dictum at nunc  placerat consequatS quam. ornaremi condiment PhasellusI  cursii placerat quam et, mattis nibh Suspendislacinias.</p>
                        
                        <!-- Footer Contact -->
                        <ol class="footer-contact">
                            <li><i class="fa fa-home"></i>House No 08, Din Bari, Dhaka, Bangladesh</li>
                            <li><i class="fa fa-envelope-open"></i>Username@gmail.com</li>
                            <li><i class="fa fa-headphones"></i>(+660 256 24857) , (+660 256 24857)</li>
                        </ol>
                        
                        <!-- Footer Social -->
                        <div class="footer-social">
                            <a href="#" class="facebook"><i class="fa fa-facebook"></i></a>
                            <a href="#" class="twitter"><i class="fa fa-twitter"></i></a>
                            <a href="#" class="dribbble"><i class="fa fa-dribbble"></i></a>
                            <a href="#" class="google-plus"><i class="fa fa-google-plus"></i></a>
                        </div>
                        
                    </div>
                    
                </div><!-- Footer Widget End -->
                
                <!-- Footer Widget Start -->
                <div class="footer-widget col-xl-3 col-md-6 col-12 mb-60">
                    
                    <!-- Title -->
                    <h4 class="widget-title">popular News</h4>
                    
                    <!-- Footer Widget Post Start -->
                    <div class="footer-widget-post">
                        <div class="post-wrap">
                            
                            <!-- Image -->
                            <a href="post-details.html" class="image"><img src="/frontEnd/hashnews/img/post/post-33.jpg" alt="Post"></a>
                            
                            <!-- Content -->
                            <div class="content">

                                <!-- Title -->
                                <h5 class="title"><a href="post-details.html">Hynpodia helps male travelers find healths.</a></h5>

                                <!-- Meta -->
                                <div class="meta fix">
                                    <span class="meta-item date"><i class="fa fa-clock-o"></i>10 March 2017</span>
                                </div>

                            </div>
                            
                        </div>
                    </div><!-- Footer Widget Post ENd -->
                    
                    <!-- Footer Widget Post Start -->
                    <div class="footer-widget-post">
                        <div class="post-wrap">
                            
                            <!-- Image -->
                            <a href="post-details.html" class="image"><img src="/frontEnd/hashnews/img/post/post-34.jpg" alt="Post"></a>
                            
                            <!-- Content -->
                            <div class="content">

                                <!-- Title -->
                                <h5 class="title"><a href="post-details.html">How do you solve the IOS page problem.</a></h5>

                                <!-- Meta -->
                                <div class="meta fix">
                                    <span class="meta-item date"><i class="fa fa-clock-o"></i>10 March 2017</span>
                                </div>

                            </div>
                            
                        </div>
                    </div><!-- Footer Widget Post End -->
                    
                    <!-- Footer Widget Post Start -->
                    <div class="footer-widget-post">
                        <div class="post-wrap">
                            
                            <!-- Image -->
                            <a href="post-details.html" class="image"><img src="/frontEnd/hashnews/img/post/post-35.jpg" alt="Post"></a>
                            
                            <!-- Content -->
                            <div class="content">

                                <!-- Title -->
                                <h5 class="title"><a href="post-details.html">Home is not a place . . . . . .  . it’s a feeling.</a></h5>

                                <!-- Meta -->
                                <div class="meta fix">
                                    <span class="meta-item date"><i class="fa fa-clock-o"></i>10 March 2017</span>
                                </div>

                            </div>
                            
                        </div>
                    </div><!-- Footer Widget Post End -->
                    
                </div><!-- Footer Widget End -->
                
                <!-- Footer Widget Start -->
                <div class="footer-widget col-xl-3 col-md-6 col-12 mb-60">
                    
                    <h4 class="widget-title">Twitter Feed</h4>
                    
                    <!-- Single Tweet Start -->
                    <div class="single-tweet">
                       
                        <!-- Image -->
                        <a href="#" class="image"><img src="/frontEnd/hashnews/img/tweets/1.png" alt="Author Image"></a>
                        <!-- Content -->
                        <div class="content fix">
                            <!-- Head -->
                            <div class="head"><h5><a href="#">Hashtech</a></h5><span>5 Minute Ago</span></div>
                            <!-- Tags -->
                            <div class="tags">
                                <a href="#">#UI</a>
                                <a href="#">#UX</a>
                                <a href="#">#Lorem</a>
                            </div>
                            <!-- Links -->
                            <div class="links"><a href="#">@https://themeforest.net/item/moto-multipurpose-landing-page-template/20342375?s_rank=1</a></div>
                            <!-- Meta -->
                            <ul class="meta">
                                <li><a href="#"><i class="fa fa-heart"></i> 865</a></li>
                                <li><a href="#"><i class="fa fa-comments"></i> 653</a></li>
                                <li><a href="#"><i class="fa fa-reply"></i></a></li>
                            </ul>
                        </div>
                        
                    </div><!-- Single Tweet End -->
                    
                    <!-- Single Tweet Start -->
                    <div class="single-tweet">
                       
                        <!-- Image -->
                        <a href="#" class="image"><img src="/frontEnd/hashnews/img/tweets/1.png" alt="Author Image"></a>
                        <!-- Content -->
                        <div class="content fix">
                            <!-- Head -->
                            <div class="head"><h5><a href="#">Hashtech</a></h5><span>5 Minute Ago</span></div>
                            <!-- Tags -->
                            <div class="tags">
                                <a href="#">#UI</a>
                                <a href="#">#UX</a>
                                <a href="#">#Lorem</a>
                            </div>
                            <!-- Links -->
                            <div class="links"><a href="#">@https://themeforest.net/item/moto-multipurpose-landing-page-template/20342375?s_rank=1</a></div>
                            <!-- Meta -->
                            <ul class="meta">
                                <li><a href="#"><i class="fa fa-heart"></i> 865</a></li>
                                <li><a href="#"><i class="fa fa-comments"></i> 653</a></li>
                                <li><a href="#"><i class="fa fa-reply"></i></a></li>
                            </ul>
                        </div>
                        
                    </div><!-- Single Tweet End -->
                    
                </div><!-- Footer Widget End -->
                
                <!-- Footer Widget Start -->
                <div class="footer-widget col-xl-3 col-md-6 col-12 mb-60">
                    
                    <!-- Title -->
                    <h4 class="widget-title">Top News</h4>
                    
                    <!-- Footer Widget Post Start -->
                    <div class="footer-widget-post">
                        <div class="post-wrap">
                            
                            <!-- Image -->
                            <a href="post-details.html" class="image"><img src="/frontEnd/hashnews/img/post/post-14.jpg" alt="Post"></a>
                            
                            <!-- Content -->
                            <div class="content">

                                <!-- Title -->
                                <h5 class="title"><a href="post-details.html">Australia announced squad for Bangladesh tour.</a></h5>

                                <!-- Meta -->
                                <div class="meta fix">
                                    <span class="meta-item date"><i class="fa fa-clock-o"></i>10 March 2017</span>
                                </div>

                            </div>
                            
                        </div>
                    </div><!-- Footer Widget Post ENd -->
                    
                    <!-- Footer Widget Post Start -->
                    <div class="footer-widget-post">
                        <div class="post-wrap">
                            
                            <!-- Image -->
                            <a href="post-details.html" class="image"><img src="/frontEnd/hashnews/img/post/post-23.jpg" alt="Post"></a>
                            
                            <!-- Content -->
                            <div class="content">

                                <!-- Title -->
                                <h5 class="title"><a href="post-details.html">Fish Fry With green vegetables.</a></h5>

                                <!-- Meta -->
                                <div class="meta fix">
                                    <span class="meta-item date"><i class="fa fa-clock-o"></i>10 March 2017</span>
                                </div>

                            </div>
                            
                        </div>
                    </div><!-- Footer Widget Post End -->
                    
                    <!-- Footer Widget Post Start -->
                    <div class="footer-widget-post">
                        <div class="post-wrap">
                            
                            <!-- Image -->
                            <a href="post-details.html" class="image"><img src="/frontEnd/hashnews/img/post/post-40.jpg" alt="Post"></a>
                            
                            <!-- Content -->
                            <div class="content">

                                <!-- Title -->
                                <h5 class="title"><a href="post-details.html">Hynpodia helps male travelers find healths.</a></h5>

                                <!-- Meta -->
                                <div class="meta fix">
                                    <span class="meta-item date"><i class="fa fa-clock-o"></i>10 March 2017</span>
                                </div>

                            </div>
                            
                        </div>
                    </div><!-- Footer Widget Post End -->
                    
                </div><!-- Footer Widget End -->
                
            </div>
        </div>
    </div><!-- Footer Top Section End -->
    
    <!-- Footer Bottom Section Start -->
    <div class="footer-bottom-section section bg-dark">
        <div class="container">
            <div class="row">
                
                <!-- Copyright Start -->
                <div class="copyright text-center col">
                    <p>Copyright © 2017 <a href="https://hastech.company/">Hastech</a>. All Rights Reserved.</p>
                </div><!-- Copyright End -->
                
            </div>
        </div>
    </div><!-- Footer Bottom Section End -->
    
    
</div>


    <!-- JS
    ============================================ -->

    <!-- jQuery JS -->
    <script src="/frontEnd/hashnews/js/vendor/jquery-1.12.0.min.js"></script>
    <!-- Popper JS -->
    <script src="/frontEnd/hashnews/js/popper.min.js"></script>
    <!-- Bootstrap JS -->
    <script src="/frontEnd/hashnews/js/bootstrap.min.js"></script>
    <!-- Plugins JS -->
    <script src="/frontEnd/hashnews/js/plugins.js"></script>
    <!-- rypp JS -->
    <script src="/frontEnd/hashnews/js/rypp.js"></script>
    <script src="/frontEnd/hashnews/js/ytp-playlist.js"></script>
    <!-- Ajax Mail JS -->
    <script src="/frontEnd/hashnews/js/ajax-mail.js"></script>
    <!-- Main JS -->
    <script src="/frontEnd/hashnews/js/main.js"></script>

</body>

</html>