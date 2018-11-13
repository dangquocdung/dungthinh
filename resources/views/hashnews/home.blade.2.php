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
                <div class="header-banner col-md-7 col-12">
                    <div class="banner"><a href="#"><img src="/frontEnd/hashnews/img/banner/header-banner-3.jpg" alt="Header Banner"></a></div>
                </div>
                
            </div>
        </div>
    </div><!-- Header End -->
    
    <!-- Menu Section Start -->
    @include('hashnews.includes.menu')
    <!-- Menu Section End -->
    
    <!-- Hero Section Start -->
    {{--  @include('hashnews.includes.hero-section')  --}}
    
    <!-- Hero Section End -->
    
    <!-- Recent Section Start -->
    {{--  @include('hashnews.includes.recent-news')  --}}
    <!-- Popular Section End -->
    
    <!-- Post Section Start -->
    <div class="post-section section mt-50">
        <div class="container">
            
            <!-- Y tế Hà Tĩnh Start -->
            <div class="row">

                @if (!empty($FeatureMenuLinks))

                    @foreach($FeatureMenuLinks as $FeatureMenuLink)
                
                        @if ($FeatureMenuLink->cat_id == 17)

                            @if(count($FeatureMenuLink->webmasterSection->sections) >0)
                            
                                @foreach($FeatureMenuLink->webmasterSection->sections as $key=>$MnuCategory)

                                    <?php
                                        if ($MnuCategory->$slug_var != "" && Helper::GeneralWebmasterSettings("links_status")) {
                                            if (trans('backLang.code') != env('DEFAULT_LANGUAGE')) {
                                                $Category_link_url = url(trans('backLang.code')."/" .$MnuCategory->$slug_var);
                                            }else{
                                                $Category_link_url = url($MnuCategory->$slug_var);
                                            }
                                        } else {
                                            if (trans('backLang.code') != env('DEFAULT_LANGUAGE')) {
                                                $Category_link_url = route('FrontendTopicsByCatWithLang', ["lang"=>trans('backLang.code'),"section" => $MainMenuLink->webmasterSection->name, "cat" => $MnuCategory->id]);
                                            }else{
                                                $Category_link_url = route('FrontendTopicsByCat', ["section" => $MainMenuLink->webmasterSection->name, "cat" => $MnuCategory->id]);
                                            }
                                        }
                                    ?>
                
                                    <div class="col-lg-4 col-md-6 col-12 mb-50">
                                        
                                        <!-- Post Block Wrapper Start -->
                                        <div class="post-block-wrapper">
                                            
                                            <!-- Post Block Head Start -->
                                            <div class="head education-head">
                                                
                                                <!-- Title -->
                                                <h4 class="title">{{ $MnuCategory->title_vi }}</h4>
                                                
                                            </div><!-- Post Block Head End -->

                                            @php
                                                            
                                                $topicIds = $MnuCategory->selectedCategories->sortbyDesc('topic_date')->take(50);

                                                $i = 0;

                                                $tins= array();

                                                if (!empty($topicIds)){

                                                    foreach($topicIds as $topicId){

                                                        if ( $topicId->topic->status == '1' ){

                                                            $tins[] = $topicId->topic;

                                                        }

                                                        if (count($tins) > 4){
                                                            break;
                                                        }
                                                    }

                                                }

                                            @endphp
                                            
                                            <!-- Post Block Body Start -->
                                            <div class="body">
                                                
                                                <!-- Sidebar Post Slider Start -->
                                                <div class="sidebar-post-carousel post-block-carousel education-post-carousel">

                                                    @foreach($tins as $Topic)

                                                        <?php
                                                            if ($Topic->$title_var != "") {
                                                                $title = $Topic->$title_var;
                                                            } else {
                                                                $title = $Topic->$title_var2;
                                                            }
                                                            
                                                            if ($Topic->$slug_var != "" && Helper::GeneralWebmasterSettings("links_status")) {
                                                                if (trans('backLang.code') != env('DEFAULT_LANGUAGE')) {
                                                                    $topic_link_url = url(trans('backLang.code') . "/" . $Topic->$slug_var);
                                                                } else {
                                                                    $topic_link_url = url($Topic->$slug_var);
                                                                }
                                                            } else {
                                                                if (trans('backLang.code') != env('DEFAULT_LANGUAGE')) {
                                                                    $topic_link_url = route('FrontendTopicByLang', ["lang" => trans('backLang.code'), "section" => $Topic->webmasterSection->name, "id" => $Topic->id]);
                                                                } else {
                                                                    $topic_link_url = route('FrontendTopic', ["section" => $Topic->webmasterSection->name, "id" => $Topic->id]);
                                                                }
                                                            }
                                                        ?>

                                                        <!-- Post Start -->
                                                        <div class="post education-post">
                                                            <div class="post-wrap">

                                                                <!-- Image -->

                                                                @if ($Topic->photo_file != null)
                                                                    <a class="image" href="#"><img src="/uploads/topics/{{ $Topic->photo_file }}" alt="{{ $Topic->$link_title_var}}" style="width:328px; height:241px"></a>
                                                                @else
                                                                    <a class="image" href="#"><img src="/frontEnd/hashnews/img/post/post-87.jpg" alt="{{ $Topic->$link_title_var}}"></a>
                                                                @endif
                                                                
                                                                <!-- Content -->
                                                                <div class="content">
                
                                                                    <!-- Title -->
                                                                    <h4 class="title"><a href="#"> {{ $Topic->title_vi }} </a></h4>

                                                                    <!-- Meta -->
                                                                    <div class="meta fix">
                                                                        <a href="#" class="meta-item author"><i class="fa fa-user"></i> {{ $Topic->user->name }}</a>
                                                                        <span class="meta-item date"><i class="fa fa-clock-o"></i>{{ \Carbon\Carbon::parse($Topic->date)->format('d/m/Y') }}</span>
                                                                    </div>

                                                                    <p>{{ str_limit(strip_tags($Topic->$summary_var), $limit = 70, $end = '..') }}</p>
                
                                                                    <!-- Read More -->
                                                                    <a href="#" class="read-more">chi tiết..</a>
                                                                   
                                                                </div>

                                                            </div>
                                                        </div><!-- Post End -->

                                                    @endforeach

                                                </div><!-- Sidebar Post Slider End -->
                                            
                                            </div><!-- Post Block Body End -->
                                            
                                        </div><!-- Post Block Wrapper End -->
                                        
                                    </div>

                                @endforeach
                            @endif
                        @endif
                    @endforeach
                @endif
                
            </div><!-- Y tế Hà Tĩnh End -->
            
            <!-- Dịch vụ Y tế Start -->
            <div class="row ">

                @if (!empty($FeatureMenuLinks))

                    @foreach($FeatureMenuLinks as $FeatureMenuLink)
                
                        @if ($FeatureMenuLink->cat_id == 21)
                
                            <div class="col-12 mb-50">
                                
                                <!-- Post Block Wrapper Start -->
                                <div class="post-block-wrapper dark bg-dark">
                                    
                                    <!-- Post Block Head Start -->
                                    <div class="head sports-head">
                                        
                                        <!-- Title -->
                                        <h4 class="title">{{ $FeatureMenuLink->title_vi }}</h4>

                                    </div><!-- Post Block Head End -->
                                    
                                    <!-- Post Block Body Start -->
                                    <div class="body pb-0">
                                        <div class="row">

                                                    <div class="post post-dark col-lg-8 col-12 mb-20">

                                                            @foreach ($FeatureMenuLink->webmasterSection->topics as $key=>$Topic)

                                                            <?php
                                                                if ($Topic->$title_var != "") {
                                                                    $title = $Topic->$title_var;
                                                                } else {
                                                                    $title = $Topic->$title_var2;
                                                                }
                                                                
                                                                if ($Topic->$slug_var != "" && Helper::GeneralWebmasterSettings("links_status")) {
                                                                    if (trans('backLang.code') != env('DEFAULT_LANGUAGE')) {
                                                                        $topic_link_url = url(trans('backLang.code') . "/" . $Topic->$slug_var);
                                                                    } else {
                                                                        $topic_link_url = url($Topic->$slug_var);
                                                                    }
                                                                } else {
                                                                    if (trans('backLang.code') != env('DEFAULT_LANGUAGE')) {
                                                                        $topic_link_url = route('FrontendTopicByLang', ["lang" => trans('backLang.code'), "section" => $Topic->webmasterSection->name, "id" => $Topic->id]);
                                                                    } else {
                                                                        $topic_link_url = route('FrontendTopic', ["section" => $Topic->webmasterSection->name, "id" => $Topic->id]);
                                                                    }
                                                                }
                                                            ?>

                                                                @if ($key == 0)
                                                                    <div class="post-wrap">

                                                                            <!-- Image -->

                                                                            @if ($Topic->photo_file != null)
                                                                                <a class="image" href="#"><img class="img-fluid" src="/uploads/topics/{{ $Topic->photo_file }}" alt="{{ $Topic->$link_title_var}}"></a>
                                                                            @else
                                                                                <a class="image" href="#"><img src="/frontEnd/hashnews/img/post/post-90.jpg" alt="{{ $Topic->$link_title_var}}"></a>
                                                                            @endif

                                                                            <!-- Content -->
                                                                            <div class="content">

                                                                                <!-- Title -->
                                                                                <h4 class="title"><a href="#">{{ $Topic->$title_var}}</a></h4>

                                                                                <!-- Meta -->
                                                                                <div class="meta fix">
                                                                                    <a href="#" class="meta-item author"><i class="fa fa-user"></i> {{ $Topic->user->name }}</a>
                                                                                    <span class="meta-item date"><i class="fa fa-clock-o"></i>{{ $Topic->date }}</span>
                                                                                </div>

                                                                                <!-- Description -->
                                                                                <p>{{ str_limit(strip_tags($Topic->$summary_var), $limit = 60, $end = '..') }}</p>
                                            
                                                                                <!-- Read More -->
                                                                                <a href="#" class="read-more">chi tiết..</a>    

                                                                            </div>

                                                                    </div>

                                                                @endif

                                                            @endforeach
                                                    </div>

                                                    <div class="col-lg-4 col-12 mb-20">
                                                        <div class="row">

                                                            @foreach ($FeatureMenuLink->webmasterSection->topics as $key=>$Topic)

                                                                @if ($key < 4 && $key > 0)

                                                                <div class="post post-small post-list post-dark post-separator-border col-lg-12 col-md-6 col-12">
                                                                    <div class="post-wrap">

                                                                            <!-- Image -->
                                                                            @if ($Topic->photo_file != null)
                                                                                <a class="image" href="{{ url($Topic->$slug_var) }}"><img src="/uploads/topics/{{ $Topic->photo_file }}" alt="{{ $Topic->$link_title_var}}"></a>
                                                                            @else
                                                                                <a class="image" href="{{ url($Topic->$slug_var) }}"><img src="/frontEnd/hashnews/img/post/post-91.jpg" alt="{{ $Topic->$link_title_var}}"></a>
                                                                            @endif

                                                                            <!-- Content -->
                                                                            <div class="content">

                                                                                <!-- Title -->
                                                                                <h4 class="title"><a href="#">{{ $Topic->title_vi}}</a></h4>

                                                                                <!-- Meta -->
                                                                                <div class="meta fix">
                                                                                    <span class="meta-item date"><i class="fa fa-clock-o"></i>{{ $Topic->date }}</span>
                                                                                </div>

                                                                            </div>

                                                                    </div>
                                                                </div>

                                                                @endif
                                                            
                                                            @endforeach
                                                            
                                                        </div>
                                                    </div>

                                        </div>
                                    </div><!-- Post Block Body End -->
                                    
                                </div><!-- Post Block Wrapper End -->
                                
                            </div>
                        
                        @endif
                    @endforeach
                @endif
                
            </div><!-- Dịch vụ Y tế End -->
            
            <!-- Tin tức Start -->
            <div class="row">

                @if (!empty($FeatureMenuLinks))

                    @foreach($FeatureMenuLinks as $FeatureMenuLink)
                
                        @if ($FeatureMenuLink->cat_id == 11)

                            @if(count($FeatureMenuLink->webmasterSection->sections) >0)
                            
                                @foreach($FeatureMenuLink->webmasterSection->sections as $key=>$MnuCategory)
                
                                    <div class="col-lg-4 col-md-6 col-12 mb-50">
                                        
                                        <!-- Post Block Wrapper Start -->
                                        <div class="post-block-wrapper">
                                            
                                            <!-- Post Block Head Start -->
                                            <div class="head feature-head">
                                                
                                                <!-- Title -->
                                                <h4 class="title">{{ $MnuCategory->title_vi }}</h4>
                                                
                                            </div><!-- Post Block Head End -->

                                            @php
                                                            
                                                $topicIds = $MnuCategory->selectedCategories->sortbyDesc('topic_date')->take(50);

                                                $i = 0;

                                                $tins= array();

                                                if (!empty($topicIds)){

                                                    foreach($topicIds as $topicId){

                                                        if ( $topicId->topic->status == '1' ){

                                                            $tins[] = $topicId->topic;

                                                        }

                                                        if (count($tins) > 3){
                                                            break;
                                                        }
                                                    }

                                                }

                                            @endphp
                                            
                                            <!-- Post Block Body Start -->
                                            <div class="body">
                                                
                                                <!-- Sidebar Post Slider Start -->
                                                <div class="four-row-post-carousel row-post-carousel post-block-carousel feature-post-carousel">

                                                    @foreach($tins as $Topic)

                                                        <!-- Post Small Start -->
                                                        <div class="post post-small post-list feature-post post-separator-border">
                                                            <div class="post-wrap">

                                                                <!-- Image -->

                                                                @if ($Topic->photo_file != null)
                                                                    <a class="image" href="#"><img src="/uploads/topics/{{ $Topic->photo_file }}" alt="{{ $Topic->$link_title_var}}" style="width:124px; height:94px"></a>
                                                                @else
                                                                    <a class="image" href="post-details.html"><img src="/frontEnd/hashnews/img/post/post-13.jpg" alt="post"></a>
                                                                @endif

                                                                <!-- Content -->
                                                                <div class="content">

                                                                    <!-- Title -->
                                                                    <h5 class="title"><a href="post-details.html">{{ $Topic->title_vi }}</a></h5>

                                                                    <!-- Meta -->
                                                                    <div class="meta fix">
                                                                        <span class="meta-item date"><i class="fa fa-clock-o"></i>{{ \Carbon\Carbon::parse($Topic->date)->format('d/m/Y') }}</span>
                                                                    </div>

                                                                </div>

                                                            </div>
                                                        </div><!-- Post Small End -->

                                                    @endforeach

                                                </div><!-- Sidebar Post Slider End -->
                                            
                                            </div><!-- Post Block Body End -->
                                            
                                        </div><!-- Post Block Wrapper End -->
                                        
                                    </div>

                                @endforeach
                            @endif
                        @endif
                    @endforeach
                @endif
                                    
                <!-- Sidebar Start -->
                <div class="col-lg-4 col-12 mb-50">
                    <div class="row">

                        <!-- Single Sidebar -->
                        <div class="single-sidebar col-lg-12 col-md-6 col-12">

                            <!-- Sidebar Banner -->
                            <a href="#" class="sidebar-banner"><img src="/frontEnd/hashnews/img/banner/sidebar-banner-2.jpg" alt="Sidebar Banner"></a>

                        </div>

                        
                        
                    </div>
                </div><!-- Sidebar End -->
                
            </div><!-- Tin tức End -->
            
            <!-- Banner Row Start -->
            <div class="row mb-50">
                
                <div class="col-12">
                    
                    <a href="#" class="post-middle-banner"><img src="/frontEnd/hashnews/img/banner/post-middle-1.jpg" alt="Banner"></a>
                    
                </div>
                
            </div><!-- Banner Row End -->
            
            <!-- Video clip Start -->
            <div class="row mb-20">
                
                <div class="col-md-6 col-12 mb-30">

                    <!-- Overlay Post Start -->
                    <div class="post post-overlay gradient-overlay-2">
                        <div class="post-wrap">

                            <!-- Image -->
                            <a href="https://www.youtube.com/watch?v=MTGG4_rEGn4" class="image video-popup">
                                <img src="/uploads/topics/15417540802212.png" alt="post">
                                <span class="video-btn"><i class="fa fa-play"></i></span>
                            </a>

                        </div>
                    </div><!-- Overlay Post End -->

                </div>

                <div class="col-md-6 col-12 mb-30">

                    <!-- Overlay Post Start -->
                    <div class="post post-overlay gradient-overlay-5">
                        <div class="post-wrap">

                            <!-- Image -->
                            <a href="https://www.youtube.com/watch?v=_YHo1pxXWfg" class="image video-popup">
                                <img src="/uploads/topics/15417540802212.png" alt="post">
                                <span class="video-btn"><i class="fa fa-play"></i></span>
                            </a>

                        </div>
                    </div><!-- Overlay Post End -->

                </div>
                
            </div><!-- Sports Post Row End -->

            <!-- Sức khỏe cộng đồng Start -->
            <div class="row">

                @if (!empty($FeatureMenuLinks))

                    @foreach($FeatureMenuLinks as $FeatureMenuLink)
                
                        @if ($FeatureMenuLink->cat_id == 19)

                            @if(count($FeatureMenuLink->webmasterSection->sections) >0)
                            
                                @foreach($FeatureMenuLink->webmasterSection->sections as $key=>$MnuCategory)

                                    <?php
                                        if ($MnuCategory->$slug_var != "" && Helper::GeneralWebmasterSettings("links_status")) {
                                            if (trans('backLang.code') != env('DEFAULT_LANGUAGE')) {
                                                $Category_link_url = url(trans('backLang.code')."/" .$MnuCategory->$slug_var);
                                            }else{
                                                $Category_link_url = url($MnuCategory->$slug_var);
                                            }
                                        } else {
                                            if (trans('backLang.code') != env('DEFAULT_LANGUAGE')) {
                                                $Category_link_url = route('FrontendTopicsByCatWithLang', ["lang"=>trans('backLang.code'),"section" => $MainMenuLink->webmasterSection->name, "cat" => $MnuCategory->id]);
                                            }else{
                                                $Category_link_url = route('FrontendTopicsByCat', ["section" => $MainMenuLink->webmasterSection->name, "cat" => $MnuCategory->id]);
                                            }
                                        }
                                    ?>
                
                                    <div class="col-lg-4 col-md-6 col-12 mb-50">
                                        
                                        <!-- Post Block Wrapper Start -->
                                        <div class="post-block-wrapper">
                                            
                                            <!-- Post Block Head Start -->
                                            <div class="head education-head">
                                                
                                                <!-- Title -->
                                                <h4 class="title">{{ $MnuCategory->title_vi }}</h4>
                                                
                                            </div><!-- Post Block Head End -->

                                            @php
                                                            
                                                $topicIds = $MnuCategory->selectedCategories->sortbyDesc('topic_date')->take(50);

                                                $i = 0;

                                                $tins= array();

                                                if (!empty($topicIds)){

                                                    foreach($topicIds as $topicId){

                                                        if ( $topicId->topic->status == '1' ){

                                                            $tins[] = $topicId->topic;

                                                        }

                                                        if (count($tins) > 4){
                                                            break;
                                                        }
                                                    }

                                                }

                                            @endphp
                                            
                                            <!-- Post Block Body Start -->
                                            <div class="body">
                                                
                                                <!-- Sidebar Post Slider Start -->
                                                <div class="sidebar-post-carousel post-block-carousel education-post-carousel">

                                                    @foreach($tins as $Topic)

                                                        <?php
                                                            if ($Topic->$title_var != "") {
                                                                $title = $Topic->$title_var;
                                                            } else {
                                                                $title = $Topic->$title_var2;
                                                            }
                                                            
                                                            if ($Topic->$slug_var != "" && Helper::GeneralWebmasterSettings("links_status")) {
                                                                if (trans('backLang.code') != env('DEFAULT_LANGUAGE')) {
                                                                    $topic_link_url = url(trans('backLang.code') . "/" . $Topic->$slug_var);
                                                                } else {
                                                                    $topic_link_url = url($Topic->$slug_var);
                                                                }
                                                            } else {
                                                                if (trans('backLang.code') != env('DEFAULT_LANGUAGE')) {
                                                                    $topic_link_url = route('FrontendTopicByLang', ["lang" => trans('backLang.code'), "section" => $Topic->webmasterSection->name, "id" => $Topic->id]);
                                                                } else {
                                                                    $topic_link_url = route('FrontendTopic', ["section" => $Topic->webmasterSection->name, "id" => $Topic->id]);
                                                                }
                                                            }
                                                        ?>

                                                        <!-- Post Start -->
                                                        <div class="post education-post">
                                                            <div class="post-wrap">

                                                                <!-- Image -->

                                                                @if ($Topic->photo_file != null)
                                                                    <a class="image" href="#"><img src="/uploads/topics/{{ $Topic->photo_file }}" alt="{{ $Topic->$link_title_var}}" style="width:328px; height:241px"></a>
                                                                @else
                                                                    <a class="image" href="#"><img src="/frontEnd/hashnews/img/post/post-87.jpg" alt="{{ $Topic->$link_title_var}}"></a>
                                                                @endif
                                                                
                                                                <!-- Content -->
                                                                <div class="content">
                
                                                                    <!-- Title -->
                                                                    <h4 class="title"><a href="#"> {{ $Topic->title_vi }} </a></h4>

                                                                    <!-- Meta -->
                                                                    <div class="meta fix">
                                                                        <a href="#" class="meta-item author"><i class="fa fa-user"></i> {{ $Topic->user->name }}</a>
                                                                        <span class="meta-item date"><i class="fa fa-clock-o"></i>{{ \Carbon\Carbon::parse($Topic->date)->format('d/m/Y') }}</span>
                                                                    </div>

                                                                    <p>{{ str_limit(strip_tags($Topic->$summary_var), $limit = 70, $end = '..') }}</p>
                
                                                                    <!-- Read More -->
                                                                    <a href="#" class="read-more">chi tiết..</a>
                                                                   
                                                                </div>

                                                            </div>
                                                        </div><!-- Post End -->

                                                    @endforeach

                                                </div><!-- Sidebar Post Slider End -->
                                            
                                            </div><!-- Post Block Body End -->
                                            
                                        </div><!-- Post Block Wrapper End -->
                                        
                                    </div>

                                @endforeach
                            @endif
                        @endif
                    @endforeach
                @endif
                
            </div><!-- Y tế Hà Tĩnh End -->
            
            
            
        </div>
    </div><!-- Post Section End -->
   
    
    <!-- Footer Top Section Start -->
        @include('hashnews.includes.footer')
    <!-- Footer Top Section End -->
    
    <!-- Footer Bottom Section Start -->
    <div class="footer-bottom-section section bg-dark">
        <div class="container">
            <div class="row">
                
                <!-- Copyright Start -->
                <div class="copyright text-center col">
                    <p>Copyright © 2017 <a href="http://ttcntt.hatinh.gov.vn/">HATINH ITC</a>. All Rights Reserved.</p>
                </div><!-- Copyright End -->
                
            </div>
        </div>
    </div><!-- Footer Bottom Section End -->
    
</div>

@include('hashnews.includes.foot')

</body>

</html>