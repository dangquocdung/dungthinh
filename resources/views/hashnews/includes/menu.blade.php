<?php

    $category_title_var = "title_" . trans('backLang.boxCode');

    $slug_var = "seo_url_slug_" . trans('backLang.boxCode');

?>

<style>

        .menu-tab-list li.active a {
            color: #00c8fa;
        }

</style>


<div class="menu-section section bg-dark">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="menu-section-wrap">

                        <!-- Main Menu Start -->
                        <div class="main-menu float-left d-none d-md-block">
                            <nav>
                                <ul>
                                    <?php
                                        $link_title_var = "title_" . trans('backLang.boxCode');
                                    ?>
                                    @foreach($HeaderMenuLinks as $HeaderMenuLink)
                                
                                        <?php
                                            if ($HeaderMenuLink->webmasterSection[$slug_var] != "" && Helper::GeneralWebmasterSettings("links_status")) {
                                                if (trans('backLang.code') != env('DEFAULT_LANGUAGE')) {
                                                    $mmnnuu_link = url(trans('backLang.code')."/" .$HeaderMenuLink->webmasterSection[$slug_var]);
                                                }else{
                                                    $mmnnuu_link = url($HeaderMenuLink->webmasterSection[$slug_var]);
                                                }
                                            }else{
                                                if (trans('backLang.code') != env('DEFAULT_LANGUAGE')) {
                                                    $mmnnuu_link =url(trans('backLang.code')."/" .$HeaderMenuLink->webmasterSection['name']);
                                                }else{
                                                    $mmnnuu_link =url($HeaderMenuLink->webmasterSection['name']);
                                                }
                                            }
                                        ?>

                                        @if($HeaderMenuLink->type==3)

                                            @if (in_array($HeaderMenuLink->cat_id,[17,18,19,20]))
                                                <li class="has-dropdown"><a href="#">{{ $HeaderMenuLink->$link_title_var }}</a>
                                        
                                                    <!-- Mega Menu Start -->
                                                    <div class="mega-menu">
                                                    
                                                        <!-- Menu Tab List Start -->
                                                        <ul class="menu-tab-list nav">
                                                            <li class="active">
                                                                <a data-toggle="tab" href="#menu-tab-one">Tất cả</a>
                                                            </li>

                                                            @foreach($HeaderMenuLink->webmasterSection->sections as $key=>$MnuCategory)
                                                                <li><a data-toggle="tab" href="#menu-tab-{{ $MnuCategory->id }}">{{$MnuCategory->$category_title_var}}</a></li>
                                                            @endforeach


                                                        </ul><!-- Menu Tab List End -->
                                                        
                                                        <!-- Menu Tab Content Start -->
                                                        <div class="tab-content menu-tab-content fix">
                                                        
                                                            <!-- Menu Tab Pane Start -->
                                                            <div class="tab-pane fade show active" id="menu-tab-one">
                                                                <div class="row">

                                                                    @foreach ($HeaderMenuLink->webmasterSection->topics as $key=>$Topic)

                                                                    @if ($key < 8)
            
                                                                    <!-- Post Start -->
                                                                    <div class="post post-small col-lg-3 col-md-4 mb-30">
                                                                        <div class="post-wrap">
                                                                            <a href="#" class="image">

                                                                                @if ($Topic->photo_file != null)
                                                                                    <img src="/uploads/thumbs/{{ $Topic->photo_file }}" alt="{{ $Topic->$link_title_var}}" style="width:218px; height:160px">
                                                                                @else
                                                                                    <img src="frontEnd/hashnews/img/post/post-136.jpg" alt="{{ $Topic->$link_title_var }}">
                                                                                @endif
                                                                                
                                                                            </a>

                                                                            <div class="content">

                                                                                <h5 class="title"><a href="post-details.html">{{ $Topic->title_vi }}</a></h5>

                                                                            </div>
                                                                        </div>
                                                                    </div><!-- Post End -->

                                                                    @endif

                                                                    @endforeach
                                                                    
            
                                                                </div>
                                                            </div><!-- Menu Tab Pane End -->
                                                            
                                                            
                                                        </div><!-- Menu Tab Content End -->
                                                
                                                    </div><!-- Mega Menu End -->
                                                    
                                                </li>
                                            @else

                                                <li class="has-dropdown">
                                                    <a href="{{ (trim($HeaderMenuLink->link) !="") ? $HeaderMenuLink->link:$mmnnuu_link }}">{{ $HeaderMenuLink->$link_title_var }}</a>
                                                
                                                    
                                                    @if(count($HeaderMenuLink->webmasterSection->sections) >0)
                                                        {{--categories drop down--}}
                                                        <ul class="sub-menu">
                                                            @foreach($HeaderMenuLink->webmasterSection->sections as $key=>$MnuCategory)
                                                                @if($MnuCategory->father_id ==0)
                                                                    <li @if ($key==0) class="active" @endif>
                                                                        <?php
                                                                        if ($MnuCategory->$slug_var != "" && Helper::GeneralWebmasterSettings("links_status")) {
                                                                            if (trans('backLang.code') != env('DEFAULT_LANGUAGE')) {
                                                                                $Category_link_url = url(trans('backLang.code')."/" .$MnuCategory->$slug_var);
                                                                            }else{
                                                                                $Category_link_url = url($MnuCategory->$slug_var);
                                                                            }
                                                                        } else {
                                                                            if (trans('backLang.code') != env('DEFAULT_LANGUAGE')) {
                                                                                $Category_link_url = route('FrontendTopicsByCatWithLang', ["lang"=>trans('backLang.code'),"section" => $HeaderMenuLink->webmasterSection->name, "cat" => $MnuCategory->id]);
                                                                            }else{
                                                                                $Category_link_url = route('FrontendTopicsByCat', ["section" => $HeaderMenuLink->webmasterSection->name, "cat" => $MnuCategory->id]);
                                                                            }
                                                                        }
                                                                        ?>

                                                                        <a href="#">
                                                                            @if($MnuCategory->icon !="")
                                                                                <i class="fa {{$MnuCategory->icon}}"></i> &nbsp;
                                                                            @endif
                                                                            {{$MnuCategory->$category_title_var}}</a>
                                                                    </li>
                                                                @endif
                                                            @endforeach
                                                        </ul>
                                                    @elseif(count($HeaderMenuLink->webmasterSection->topics) >0)
                                                        {{--topics drop down--}}
                                                        <ul class="sub-menu">
                                                            @foreach($HeaderMenuLink->webmasterSection->topics as $key=>$MnuTopic)
                                                                @if($MnuTopic->expire_date =='' || ($MnuTopic->expire_date !='' && $MnuTopic->expire_date >= date("Y-m-d")))
                                                                    <li @if ($key==0) class="active" @endif>
                                                                        <?php
                                                                            if ($MnuTopic->$slug_var != "" && Helper::GeneralWebmasterSettings("links_status")) {
                                                                                if (trans('backLang.code') != env('DEFAULT_LANGUAGE')) {
                                                                                    $topic_link_url = url(trans('backLang.code')."/" .$MnuTopic->$slug_var);
                                                                                }else{
                                                                                    $topic_link_url = url($MnuTopic->$slug_var);
                                                                                }
                                                                                } else {
                                                                                if (trans('backLang.code') != env('DEFAULT_LANGUAGE')) {
                                                                                $topic_link_url = route('FrontendTopicByLang', ["lang"=>trans('backLang.code'),"section" => $HeaderMenuLink->webmasterSection->name, "id" => $MnuTopic->id]);
                                                                                }else{
                                                                                $topic_link_url = route('FrontendTopic', ["section" => $HeaderMenuLink->webmasterSection->name, "id" => $MnuTopic->id]);
                                                                                }
                                                                            }
                                                                        ?>
                                                                        <a href="#">
                                                                            @if($MnuTopic->icon !="")
                                                                                <i class="fa {{$MnuTopic->icon}}"></i> &nbsp;
                                                                            @endif
                                                                            {{$MnuTopic->$category_title_var}}</a>
                                                                    </li>
                                                                @endif
                                                            @endforeach
                                                        </ul>
                                                    @endif


                                                </li>
                                            @endif

                                        @else

                                            <li>
                                                <a href="{{ (trim($HeaderMenuLink->link) !="") ? $HeaderMenuLink->link:$mmnnuu_link }}">{{ $HeaderMenuLink->$link_title_var }}</a>
                                            </li>
                                        @endif


                                    
                                    @endforeach

                                    

                                </ul>
                            </nav>
                        </div>
                        <!-- Main Menu Start -->

                        <div class="mobile-logo d-none d-block d-md-none"><a href="index.html"><img src="/frontEnd/hashnews/img/logo-white.png" alt="Logo"></a></div>

                        <!-- Header Search -->
                        <div class="header-search float-right">

                            <!-- Search Toggle -->
                            <button class="header-search-toggle"><i class="fa fa-search"></i></button>

                            <!-- Header Search Form -->
                            <div class="header-search-form">
                                <form action="#">
                                    <input type="text" placeholder="Tìm kiếm...">
                                </form>
                            </div>

                        </div>
                        
                        <!-- Mobile Menu Wrap -->
                        <div class="mobile-menu-wrap d-none">
                            <nav>
                                <ul>

                                        @foreach($HeaderMenuLinks as $HeaderMenuLink)
                                
                                            <?php
                                                if ($HeaderMenuLink->webmasterSection[$slug_var] != "" && Helper::GeneralWebmasterSettings("links_status")) {
                                                    if (trans('backLang.code') != env('DEFAULT_LANGUAGE')) {
                                                        $mmnnuu_link = url(trans('backLang.code')."/" .$HeaderMenuLink->webmasterSection[$slug_var]);
                                                    }else{
                                                        $mmnnuu_link = url($HeaderMenuLink->webmasterSection[$slug_var]);
                                                    }
                                                }else{
                                                    if (trans('backLang.code') != env('DEFAULT_LANGUAGE')) {
                                                        $mmnnuu_link =url(trans('backLang.code')."/" .$HeaderMenuLink->webmasterSection['name']);
                                                    }else{
                                                        $mmnnuu_link =url($HeaderMenuLink->webmasterSection['name']);
                                                    }
                                                }
                                            ?>

                                            @if($HeaderMenuLink->type==3)

                                                <li class="active has-dropdown"><a href="#">{{ $HeaderMenuLink->$link_title_var }}</a>

                                                    @if(count($HeaderMenuLink->webmasterSection->sections) >0)
                                                    
                                                        <!-- Submenu Start -->
                                                        <ul class="sub-menu">
                                                            @foreach($HeaderMenuLink->webmasterSection->sections as $key=>$MnuCategory)
                                                                @if($MnuCategory->father_id ==0)
                                                                    <li @if ($key==0) class="active" @endif>
                                                                        <a href="#">{{$MnuCategory->$category_title_var}}</a>
                                                                    </li>
                                                                @endif
                                                            @endforeach
                                                                
                                                                    
                                                        </ul><!-- Submenu End -->
                                                    @elseif(count($HeaderMenuLink->webmasterSection->topics) >0)
                                                        {{--topics drop down--}}
                                                        <ul class="sub-menu">
                                                            @foreach($HeaderMenuLink->webmasterSection->topics as $key=>$MnuTopic)
                                                                @if($MnuTopic->expire_date =='' || ($MnuTopic->expire_date !='' && $MnuTopic->expire_date >= date("Y-m-d")))

                                                                    <li @if ($key==0) class="active" @endif>
                                                                        <a href="#">
                                                                            @if($MnuTopic->icon !="")
                                                                                <i class="fa {{$MnuTopic->icon}}"></i> &nbsp;
                                                                            @endif
                                                                            {{$MnuTopic->$category_title_var}}</a>
                                                                    </li>

                                                                @endif
                                                            @endforeach
                                                        </ul>

                                                    @endif
                                                    
                                                </li>

                                            @else

                                                <li>
                                                    <a href="#">{{ $HeaderMenuLink->$link_title_var }}</a>
                                                </li>
                                            @endif


                                    
                                        @endforeach
                                    

                                </ul>
                            </nav>
                        </div>
                        
                        <!-- Mobile Menu -->
                        <div class="mobile-menu"></div>

                    </div>
                </div>
            </div>
        </div>
    </div>