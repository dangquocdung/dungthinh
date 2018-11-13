
@if (!empty($FeatureMenuLinks))

@foreach($FeatureMenuLinks as $FeatureMenuLink)

    @if ($FeatureMenuLink->cat_id == 11)
        <div class="row">
                    
            <div class="col-lg-8 col-12 mb-50">
                
                <!-- Post Block Wrapper Start -->
                <div class="post-block-wrapper">
                    
                    <!-- Post Block Head Start -->
                    <div class="head feature-head">
                        
                        <!-- Title -->
                        <h4 class="title">{{ $FeatureMenuLink->title_vi }}</h4>
                        
                        <!-- Tab List Start -->
                        <ul class="post-block-tab-list feature-post-tab-list nav d-none d-md-block">
                            @if(count($FeatureMenuLink->webmasterSection->sections) >0)

                                @foreach($FeatureMenuLink->webmasterSection->sections as $key=>$Section)

                                    <li><a @if ($key==0) class="active" @endif data-toggle="tab" href="#feature-cat-{{ $Section->id }}">{{ $Section->title_vi }}</a></li>

                                @endforeach

                            @endif
                            </li>
                        </ul><!-- Tab List End -->
                        
                        <!-- Tab List Start -->
                        <ul class="post-block-tab-list feature-post-tab-list nav d-sm-block d-md-none">
                            <li><a class="dropdown-toggle" data-toggle="dropdown" href="#">Category</a>
                            
                                <!-- Dropdown -->
                                <ul class="dropdown-menu">
                                    @if(count($FeatureMenuLink->webmasterSection->sections) >0)

                                        @foreach($FeatureMenuLink->webmasterSection->sections as $key=>$Section)
    
                                            <li><a @if ($key==0) class="active" @endif data-toggle="tab" href="#feature-cat-{ $Section->id }}"{>{{ $Section->title_vi }}</a></li>
    
                                        @endforeach
    
                                    @endif
                                </ul>
                                
                            </li>
                        </ul><!-- Tab List End -->
                        
                    </div><!-- Post Block Head End -->
                    
                    <!-- Post Block Body Start -->
                    <div class="body pb-0">
                        
                        <!-- Tab Content Start-->

                        

                            

                                

                            

                                    <div class="tab-content">

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


                                    
                                                <!-- Tab Pane Start-->

                                                

                                                    <div class="tab-pane fade" @if ($key==0) class="show active" @endif id="feature-cat-{{ $MnuCategory->id }}">

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

                                                    
                                                    
                                                        <div class="row">

                                                            @foreach($tins as $topicId)
                                                            
                                                                <?php
                
                                                                    $tin = $topicId;
                
                                                                    $section = "";
                                                                    try {
                                                                        if ($tin->section->$title_var != "") {
                                                                            $section = $tin->section->$title_var;
                                                                        } else {
                                                                            $section = $tin->section->$title_var2;
                                                                        }
                                                                    } catch (Exception $e) {
                                                                        $section = "";
                                                                    }
                                                                    
                                                                    if ($tin->$slug_var != "" && Helper::GeneralWebmasterSettings("links_status")) {
                                                                        if (trans('backLang.code') != env('DEFAULT_LANGUAGE')) {
                                                                            $topic_link_url = url(trans('backLang.code') . "/" . $tin->$slug_var);
                                                                        } else {
                                                                            $topic_link_url = url($tin->$slug_var);
                                                                        }
                                                                    } else {
                                                                        if (trans('backLang.code') != env('DEFAULT_LANGUAGE')) {
                                                                            $topic_link_url = route('FrontendTopicByLang', ["lang" => trans('backLang.code'), "section" => $tin->webmasterSection->name, "id" => $tin->id]);
                                                                        } else {
                                                                            $topic_link_url = route('FrontendTopic', ["section" => $tin->webmasterSection->name, "id" => $tin->id]);
                                                                        }
                                                                    }
                                                                ?>

                                                                @if (($tin->status == 1) && ($i == 0))

                                                                    @php $i++; @endphp

                                                                    <!-- Post Wrapper Start -->
                                                                    <div class="col-md-6 col-12 mb-20">

                                                                        <!-- Post Start -->
                                                                            

                                                                            <div class="post feature-post post-separator-border">
                                                                                <div class="post-wrap">

                                                                                    

                                                                                    <!-- Image -->
                                                                                    <a class="image" href="$topic_link_url"><img src="/uploads/topics/{{ $tin->photo_file }}" alt="post"></a>

                                                                                    <!-- Content -->
                                                                                    <div class="content">

                                                                                        <!-- Title -->
                                                                                        <h4 class="title"><a href="$topic_link_url">{{ $tin->$link_title_var }} </a></h4>

                                                                                        <!-- Meta -->
                                                                                        <div class="meta fix">
                                                                                            <a href="#" class="meta-item author"><i class="fa fa-user"></i>Sathi Bhuiyan</a>
                                                                                            <span class="meta-item date"><i class="fa fa-clock-o"></i>10 March 2017</span>
                                                                                            <a href="#" class="meta-item comment"><i class="fa fa-comments"></i>(34)</a>
                                                                                        </div>

                                                                                        <!-- Description -->
                                                                                        <p>{{ str_limit(strip_tags($tin->$details_var), $limit = 120, $end = '..') }}</p>

                                                                                    </div>
                                                                                    
                                                                                </div>
                                                                            </div>
                                                                            
                                                                    
                                                                            <!-- Post End -->

                                                                    </div><!-- Post Wrapper End -->

                                                                @elseif ($tin->status == 1)

                                                                    <!-- Small Post Wrapper Start -->
                                                                    <div class="col-md-6 col-12 mb-20">

                                                                        <!-- Post Small Start -->
                                                                        <div class="post post-small post-list feature-post post-separator-border">
                                                                            <div class="post-wrap">

                                                                                <!-- Image -->
                                                                                <a class="image" href="post-details.html"><img src="img/post/post-13.jpg" alt="post"></a>

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
                                                                        </div><!-- Post Small End -->

                                                                        

                                                                    </div><!-- Small Post Wrapper End -->

                                                                @endif

                                                            @endforeach

                                                        </div>

                                                        
                                                        
                                                    </div>

                                                <!-- Tab Pane End-->

                                            @endforeach

                                        @endif
                                    </div>
                        
                                    
                                

                            

                        <!-- Tab Content End-->
                        
                    </div><!-- Post Block Body End -->
                    
                </div><!-- Post Block Wrapper End -->
                
            </div>
            
            <!-- Sidebar Start -->
            <div class="col-lg-4 col-12 mb-50">
                <div class="row">
                
                    <!-- Single Sidebar -->
                    <div class="single-sidebar col-lg-12 col-md-6 col-12">

                        <!-- Sidebar Block Wrapper -->
                        <div class="sidebar-block-wrapper">

                            <!-- Sidebar Block Head Start -->
                            <div class="head feature-head">

                                <!-- Title -->
                                <h4 class="title">Follow Us</h4>

                            </div><!-- Sidebar Block Head End -->

                            <!-- Sidebar Block Body Start -->
                            <div class="body">

                                <div class="sidebar-social-follow">
                                    <div>
                                        <a href="#" class="facebook">
                                            <i class="fa fa-facebook"></i>
                                            <h3>40,583</h3>
                                            <span>Fans</span>
                                        </a>
                                    </div>
                                    <div>
                                        <a href="#" class="google-plus">
                                            <i class="fa fa-google-plus"></i>
                                            <h3>36,857</h3>
                                            <span>Followers</span>
                                        </a>
                                    </div>
                                    <div>
                                        <a href="#" class="twitter">
                                            <i class="fa fa-twitter"></i>
                                            <h3>50,883</h3>
                                            <span>Followers</span>
                                        </a>
                                    </div>
                                    <div>
                                        <a href="#" class="dribbble">
                                            <i class="fa fa-dribbble"></i>
                                            <h3>4,743</h3>
                                            <span>Followers</span>
                                        </a>
                                    </div>
                                </div>

                            </div><!-- Sidebar Block Body End -->

                        </div>

                    </div>

                    <!-- Single Sidebar -->
                    <div class="single-sidebar col-lg-12 col-md-6 col-12">

                        <!-- Sidebar Banner -->
                        <a href="#" class="sidebar-banner"><img src="img/banner/sidebar-banner-1.jpg" alt="Sidebar Banner"></a>

                    </div>
                    
                </div>
            </div><!-- Sidebar End -->
            
        </div>
    @endif

@endforeach

@endif
