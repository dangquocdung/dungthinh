<style>

    .lich-phat-song ul{height:380px}
    .lich-phat-song ul{overflow:hidden; overflow-y:scroll;}
    
    .calendar-item {
        display: -webkit-box;
        display: -webkit-flex;
        display: -moz-flex;
        display: -ms-flexbox;
        display: flex;
        align-items: center;
        justify-content: center;
        font-size: 0.8125rem;
        padding-bottom: 10px;
        margin-bottom: 10px;
        border-bottom: 1px solid #ebebeb;
        height: 42px;
    }
    .calendar-item .time {
        font-size: 0.8125rem;
        color: #316fbc;
        width: 50px;
        font-weight: 700;
        border-right: 1px solid #d1d1d1;
        padding: 3px 0;
    }
    
    .calendar-item .name {
        width: calc(100% - 50px);
        padding-left: 10px;
        font-weight: 500;
        display: -webkit-box;
        -webkit-line-clamp: 2;
        -webkit-box-orient: vertical;
        overflow: hidden;
    }
</style>
<div class="post-section section mt-50">
        <div class="container">
            
            <!-- Feature Post Row Start -->
            @if (!empty($FeatureMenuLinks))

                @foreach($FeatureMenuLinks as $FeatureMenuLink)

                    @if (in_array($FeatureMenuLink->cat_id,[17]))
                        <div class="row">
                                    
                            <div class="col-lg-8 col-12 mb-50">
                                
                                <!-- Post Block Wrapper Start -->
                                <div class="post-block-wrapper">
                                    
                                    <!-- Post Block Head Start -->
                                    <div class="head feature-head">
                                        
                                        <!-- Title -->
                                        <h4 class="title">{{ $FeatureMenuLink->title_vi }}</h4>
                                        
                                        @if(count($FeatureMenuLink->webmasterSection->sections) >0)
                                        
                                            <!-- Tab List Start -->
                                            <ul class="post-block-tab-list feature-post-tab-list nav d-none d-md-block">
                                                
                                                    @foreach($FeatureMenuLink->webmasterSection->sections as $key=>$Section)

                                                        <li><a @if ($key==0) class="active" @endif data-toggle="tab" href="#feature-cat-{{ $Section->id }}">{{ $Section->title_vi }}</a></li>

                                                    @endforeach

                                                </li>
                                            </ul><!-- Tab List End -->
                                        
                                            <!-- Tab List Start -->
                                            <ul class="post-block-tab-list feature-post-tab-list nav d-sm-block d-md-none">
                                                <li><a class="dropdown-toggle" data-toggle="dropdown" href="#">Category</a>
                                                
                                                    <!-- Dropdown -->
                                                    <ul class="dropdown-menu">
                                                        
                                                            @foreach($FeatureMenuLink->webmasterSection->sections as $key=>$Section)
                        
                                                                <li><a @if ($key==0) class="active" @endif data-toggle="tab" href="#feature-cat-{ $Section->id }}"{>{{ $Section->title_vi }}</a></li>
                        
                                                            @endforeach
                        
                                                    </ul>
                                                    
                                                </li>
                                            </ul><!-- Tab List End -->

                                        @endif
                                        
                                    </div><!-- Post Block Head End -->
                                    
                                    <!-- Post Block Body Start -->
                                    <div class="body pb-0">

                                            @if(count($FeatureMenuLink->webmasterSection->sections) >0)
                                        
                                            <!-- Tab Content Start-->
                                            <div class="tab-content">
                                                @foreach($FeatureMenuLink->webmasterSection->sections as $key=>$MnuCategory)
                                                <!-- Tab Pane Start-->
                                                <div 

                                                    @if ($key==0)

                                                        class="tab-pane fade show active" 
                                                    @else

                                                        class="tab-pane fade"

                                                    @endif
                                                    
                                                    id="feature-cat-{{ $MnuCategory->id }}">
                                                
                                                    <div class="row">
                
                                                        <!-- Post Wrapper Start -->
                                                        <div class="col-md-6 col-12 mb-20">
                
                                                            <!-- Post Start -->
                                                            <div class="post feature-post post-separator-border">
                                                                <div class="post-wrap">
                
                                                                    <!-- Image -->
                                                                    <a class="image" href="post-details.html"><img src="/frontEnd/hashnews/img/post/post-11.jpg" alt="post"></a>
                
                                                                    <!-- Content -->
                                                                    <div class="content">
                
                                                                        <!-- Title -->
                                                                        <h4 class="title"><a href="post-details.html"> 1 Fashion is about some thing that comes from with in you.</a></h4>
                
                                                                        <!-- Meta -->
                                                                        <div class="meta fix">
                                                                            <a href="#" class="meta-item author"><i class="fa fa-user"></i>Sathi Bhuiyan</a>
                                                                            <span class="meta-item date"><i class="fa fa-clock-o"></i>10 March 2017</span>
                                                                            <a href="#" class="meta-item comment"><i class="fa fa-comments"></i>(34)</a>
                                                                        </div>
                
                                                                        <!-- Description -->
                                                                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elits. Proin nec purus lectus. Aenean sodales quis eros is quis eleifend. Vestibulum condimentum.</p>
                
                                                                    </div>
                                                                    
                                                                </div>
                                                            </div><!-- Post End -->
                
                                                        </div><!-- Post Wrapper End -->
                
                                                        <!-- Small Post Wrapper Start -->
                                                        <div class="col-md-6 col-12 mb-20">
                
                                                            <!-- Post Small Start -->
                                                            <div class="post post-small post-list feature-post post-separator-border">
                                                                <div class="post-wrap">
                
                                                                    <!-- Image -->
                                                                    <a class="image" href="post-details.html"><img src="/frontEnd/hashnews/img/post/post-13.jpg" alt="post"></a>
                
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
                
                                                            <!-- Post Small Start -->
                                                            <div class="post post-small post-list feature-post post-separator-border">
                                                                <div class="post-wrap">
                
                                                                    <!-- Image -->
                                                                    <a class="image" href="post-details.html"><img src="/frontEnd/hashnews/img/post/post-14.jpg" alt="post"></a>
                
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
                                                            </div><!-- Post Small End -->
                
                                                            <!-- Post Small Start -->
                                                            <div class="post post-small post-list feature-post post-separator-border">
                                                                <div class="post-wrap">
                
                                                                    <!-- Image -->
                                                                    <a class="image" href="post-details.html"><img src="/frontEnd/hashnews/img/post/post-15.jpg" alt="post"></a>
                
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
                                                            </div><!-- Post Small End -->
                
                                                        </div><!-- Small Post Wrapper End -->
                
                                                    </div>
                                                    
                                                </div><!-- Tab Pane End-->

                                                @endforeach
                                            
                                            </div><!-- Tab Content End-->

                                            @endif
                                        
                                    </div><!-- Post Block Body End -->
                                    
                                </div><!-- Post Block Wrapper End -->
                                
                            </div>
                            
                            <!-- Sidebar Start -->
                            <div class="col-lg-4 col-12 mb-50">
                                <!-- Single Sidebar -->
                                <div class="single-sidebar">
                                    
                                    <!-- Sidebar Block Wrapper -->
                                    <div class="sidebar-block-wrapper">
                                    
                                        <!-- Sidebar Block Head Start -->
                                        <div class="head education-head">
            
                                            <!-- Tab List -->
                                            <div class="sidebar-tab-list education-sidebar-tab-list nav">
                                                <a class="active" data-toggle="tab" href="#lich-truyen-hinh">Lịch truyền hình</a>
                                                <a data-toggle="tab" href="#lich-phat-thanh">Lịch phát thanh</a>
                                            </div>
            
                                        </div><!-- Sidebar Block Head End -->
                                        
                                        <!-- Sidebar Block Body Start -->
                                        <div class="body">
                                        
                                            <div class="tab-content">
                                                <div class="tab-pane fade show active" id="lich-truyen-hinh">
            
                                                    <!-- Small Post Start -->
                                                    <div class="post post-small post-list education-post post-separator-border lich-phat-song">

                                                        <ul>
                                                            
                                                            <li class="calendar-item" style="position: relative; top: 0px; left: 0px;">
                                                                    <div class="time">00:10</div>
                                                                    <div class="name">Chiếu phim: PTVN: Mộng thùy dương</div>
                                                            </li>
                                                            <li class="calendar-item" style="position: relative; top: 0px; left: 0px;">
                                                                    <div class="time">00:10</div>
                                                                    <div class="name">Chiếu phim: PTVN: Mộng thùy dương</div>
                                                            </li>
                                                            <li class="calendar-item" style="position: relative; top: 0px; left: 0px;">
                                                                    <div class="time">00:10</div>
                                                                    <div class="name">Chiếu phim: PTVN: Mộng thùy dương</div>
                                                            </li>

                                                            <li class="calendar-item" style="position: relative; top: 0px; left: 0px;">
                                                                <div class="time">00:10</div>
                                                                <div class="name">Chiếu phim: PTVN: Mộng thùy dương</div>
                                                            </li>

                                                            <li class="calendar-item" style="position: relative; top: 0px; left: 0px;">
                                                                    <div class="time">00:10</div>
                                                                    <div class="name">Chiếu phim: PTVN: Mộng thùy dương</div>
                                                            </li>
                                                            <li class="calendar-item" style="position: relative; top: 0px; left: 0px;">
                                                                    <div class="time">00:10</div>
                                                                    <div class="name">Chiếu phim: PTVN: Mộng thùy dương</div>
                                                            </li>
                                                            <li class="calendar-item" style="position: relative; top: 0px; left: 0px;">
                                                                    <div class="time">00:10</div>
                                                                    <div class="name">Chiếu phim: PTVN: Mộng thùy dương</div>
                                                            </li>

                                                            <li class="calendar-item" style="position: relative; top: 0px; left: 0px;">
                                                                <div class="time">00:10</div>
                                                                <div class="name">Chiếu phim: PTVN: Mộng thùy dương</div>
                                                            </li>

                                                            <li class="calendar-item" style="position: relative; top: 0px; left: 0px;">
                                                                    <div class="time">00:10</div>
                                                                    <div class="name">Chiếu phim: PTVN: Mộng thùy dương</div>
                                                            </li>
                                                            <li class="calendar-item" style="position: relative; top: 0px; left: 0px;">
                                                                    <div class="time">00:10</div>
                                                                    <div class="name">Chiếu phim: PTVN: Mộng thùy dương</div>
                                                            </li>
                                                            <li class="calendar-item" style="position: relative; top: 0px; left: 0px;">
                                                                    <div class="time">00:10</div>
                                                                    <div class="name">Chiếu phim: PTVN: Mộng thùy dương</div>
                                                            </li>
                                                        
                                                        </ul>
                                                    </div><!-- Small Post End -->

                                                    
                                                    
                                                </div>
                                                <div class="tab-pane fade" id="lich-phat-thanh">
                                                    <!-- Small Post Start -->
                                                    <div class="post post-small post-list education-post post-separator-border lich-phat-song">
                                                        

                                                            <ul>
                                                            
                                                                    <li class="calendar-item" style="position: relative; top: 0px; left: 0px;">
                                                                        <div class="time">00:10</div>
                                                                        <div class="name">Chiếu phim: PTVN: Mộng thùy dương</div>
                                                                    </li>
                                                                    <li class="calendar-item" style="position: relative; top: 0px; left: 0px;">
                                                                            <div class="time">00:10</div>
                                                                            <div class="name">Chiếu phim: PTVN: Mộng thùy dương</div>
                                                                    </li>
                                                                    <li class="calendar-item" style="position: relative; top: 0px; left: 0px;">
                                                                            <div class="time">00:10</div>
                                                                            <div class="name">Chiếu phim: PTVN: Mộng thùy dương</div>
                                                                    </li>
                                                                    <li class="calendar-item" style="position: relative; top: 0px; left: 0px;">
                                                                            <div class="time">00:10</div>
                                                                            <div class="name">Chiếu phim: PTVN: Mộng thùy dương</div>
                                                                    </li>
    
                                                                    <li class="calendar-item" style="position: relative; top: 0px; left: 0px;">
                                                                        <div class="time">00:10</div>
                                                                        <div class="name">Chiếu phim: PTVN: Mộng thùy dương</div>
                                                                    </li>
                                                                    <li class="calendar-item" style="position: relative; top: 0px; left: 0px;">
                                                                            <div class="time">00:10</div>
                                                                            <div class="name">Chiếu phim: PTVN: Mộng thùy dương</div>
                                                                    </li>
                                                                    <li class="calendar-item" style="position: relative; top: 0px; left: 0px;">
                                                                            <div class="time">00:10</div>
                                                                            <div class="name">Chiếu phim: PTVN: Mộng thùy dương</div>
                                                                    </li>
                                                                    <li class="calendar-item" style="position: relative; top: 0px; left: 0px;">
                                                                            <div class="time">00:10</div>
                                                                            <div class="name">Chiếu phim: PTVN: Mộng thùy dương</div>
                                                                    </li>
                                                                
                                                                </ul>


                                                    </div><!-- Small Post End -->
            
                                                    
                                                
                                                </div>
                                            </div>
                                            
                                        </div><!-- Sidebar Block Body End -->
            
                                    </div>
                                    
                                </div>
                                
                            </div><!-- Sidebar End -->

                            <!-- Single Sidebar -->
                        </div>
                    @endif

                @endforeach

            @endif

            <!-- Youtube Video Row Start -->
            <div class="row">
                
                <!-- Video Play List Start-->
                <div class="col-lg-8 col-12 mb-50">

                    <div class="RYPP r16-9" data-playlist="PLh_HV-iv7X8P15yz2M7Qr_TXhAA4zEqfv">
                        <div class="RYPP-video">
                            <div class="RYPP-video-player">
                            <!-- Will be replaced -->
                            </div>
                        </div>
                        <div class="RYPP-playlist">
                            <div class="RYPP-items customScroll"></div>
                        </div>
                    </div>
                    
                </div><!-- Video Play List End-->
                
                <!-- Sidebar Start -->
                <div class="col-lg-4 col-12 mb-50">
                    <div class="row">
                    
                        <!-- Single Sidebar -->
                        <div class="single-sidebar col-lg-12 col-md-6 col-12">

                            <!-- Sidebar Block Wrapper -->
                            <div class="sidebar-block-wrapper">

                                <!-- Sidebar Block Head Start -->
                                <div class="head video-head">

                                    <!-- Title -->
                                    <h4 class="title">Chuyên đề</h4>

                                </div><!-- Sidebar Block Head End -->

                                <!-- Sidebar Block Body Start -->
                                <div class="body">

                                    <ul class="sidebar-category video-category">

                                        @if (!empty($FeatureMenuLinks))

                                            @foreach($FeatureMenuLinks as $FeatureMenuLink)
                            
                                                @if (in_array($FeatureMenuLink->cat_id,[18,19]))

                                                    @if(count($FeatureMenuLink->webmasterSection->sections) >0)
                                        
                                                        @foreach($FeatureMenuLink->webmasterSection->sections as $key=>$Section)

                                                            <li><a href="#">{{ $Section->title_vi }}</a></li>

                                                        @endforeach

                                                    @endif
                                                @endif
                                            @endforeach

                                        @endif
                                    </ul>

                                </div><!-- Sidebar Block Body End -->

                            </div>

                        </div>
                    
                    </div>
                </div><!-- Sidebar End -->
                
            </div><!-- Youtube Video Banner Row End -->


            <!-- Feature Post Row Start -->
            @if (!empty($FeatureMenuLinks))

                @foreach($FeatureMenuLinks as $FeatureMenuLink)

                    @if (in_array($FeatureMenuLink->cat_id,[11,20]))
                        <div class="row">
                                    
                            <div class="col-lg-8 col-12 mb-50">
                                
                                <!-- Post Block Wrapper Start -->
                                <div class="post-block-wrapper">
                                    
                                    <!-- Post Block Head Start -->
                                    <div class="head feature-head">
                                        
                                        <!-- Title -->
                                        <h4 class="title">{{ $FeatureMenuLink->title_vi }}</h4>
                                        
                                        @if(count($FeatureMenuLink->webmasterSection->sections) >0)
                                        
                                            <!-- Tab List Start -->
                                            <ul class="post-block-tab-list feature-post-tab-list nav d-none d-md-block">
                                                
                                                    @foreach($FeatureMenuLink->webmasterSection->sections as $key=>$Section)

                                                        <li><a @if ($key==0) class="active" @endif data-toggle="tab" href="#feature-cat-{{ $Section->id }}">{{ $Section->title_vi }}</a></li>

                                                    @endforeach

                                                </li>
                                            </ul><!-- Tab List End -->
                                        
                                            <!-- Tab List Start -->
                                            <ul class="post-block-tab-list feature-post-tab-list nav d-sm-block d-md-none">
                                                <li><a class="dropdown-toggle" data-toggle="dropdown" href="#">Category</a>
                                                
                                                    <!-- Dropdown -->
                                                    <ul class="dropdown-menu">
                                                        
                                                            @foreach($FeatureMenuLink->webmasterSection->sections as $key=>$Section)
                        
                                                                <li><a @if ($key==0) class="active" @endif data-toggle="tab" href="#feature-cat-{ $Section->id }}"{>{{ $Section->title_vi }}</a></li>
                        
                                                            @endforeach
                        
                                                    </ul>
                                                    
                                                </li>
                                            </ul><!-- Tab List End -->

                                        @endif
                                        
                                    </div><!-- Post Block Head End -->
                                    
                                    <!-- Post Block Body Start -->
                                    <div class="body pb-0">

                                            @if(count($FeatureMenuLink->webmasterSection->sections) >0)
                                        
                                            <!-- Tab Content Start-->
                                            <div class="tab-content">
                                                @foreach($FeatureMenuLink->webmasterSection->sections as $key=>$MnuCategory)
                                                <!-- Tab Pane Start-->
                                                <div 

                                                    @if ($key==0)

                                                        class="tab-pane fade show active" 
                                                    @else

                                                        class="tab-pane fade"

                                                    @endif
                                                    
                                                    id="feature-cat-{{ $MnuCategory->id }}">
                                                
                                                    <div class="row">
                
                                                        <!-- Post Wrapper Start -->
                                                        <div class="col-md-6 col-12 mb-20">
                
                                                            <!-- Post Start -->
                                                            <div class="post feature-post post-separator-border">
                                                                <div class="post-wrap">
                
                                                                    <!-- Image -->
                                                                    <a class="image" href="post-details.html"><img src="/frontEnd/hashnews/img/post/post-11.jpg" alt="post"></a>
                
                                                                    <!-- Content -->
                                                                    <div class="content">
                
                                                                        <!-- Title -->
                                                                        <h4 class="title"><a href="post-details.html"> 1 Fashion is about some thing that comes from with in you.</a></h4>
                
                                                                        <!-- Meta -->
                                                                        <div class="meta fix">
                                                                            <a href="#" class="meta-item author"><i class="fa fa-user"></i>Sathi Bhuiyan</a>
                                                                            <span class="meta-item date"><i class="fa fa-clock-o"></i>10 March 2017</span>
                                                                            <a href="#" class="meta-item comment"><i class="fa fa-comments"></i>(34)</a>
                                                                        </div>
                
                                                                        <!-- Description -->
                                                                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elits. Proin nec purus lectus. Aenean sodales quis eros is quis eleifend. Vestibulum condimentum.</p>
                
                                                                    </div>
                                                                    
                                                                </div>
                                                            </div><!-- Post End -->
                
                                                        </div><!-- Post Wrapper End -->
                
                                                        <!-- Small Post Wrapper Start -->
                                                        <div class="col-md-6 col-12 mb-20">
                
                                                            <!-- Post Small Start -->
                                                            <div class="post post-small post-list feature-post post-separator-border">
                                                                <div class="post-wrap">
                
                                                                    <!-- Image -->
                                                                    <a class="image" href="post-details.html"><img src="/frontEnd/hashnews/img/post/post-13.jpg" alt="post"></a>
                
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
                
                                                            <!-- Post Small Start -->
                                                            <div class="post post-small post-list feature-post post-separator-border">
                                                                <div class="post-wrap">
                
                                                                    <!-- Image -->
                                                                    <a class="image" href="post-details.html"><img src="/frontEnd/hashnews/img/post/post-14.jpg" alt="post"></a>
                
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
                                                            </div><!-- Post Small End -->
                
                                                            <!-- Post Small Start -->
                                                            <div class="post post-small post-list feature-post post-separator-border">
                                                                <div class="post-wrap">
                
                                                                    <!-- Image -->
                                                                    <a class="image" href="post-details.html"><img src="/frontEnd/hashnews/img/post/post-15.jpg" alt="post"></a>
                
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
                                                            </div><!-- Post Small End -->
                
                                                        </div><!-- Small Post Wrapper End -->
                
                                                    </div>
                                                    
                                                </div><!-- Tab Pane End-->

                                                @endforeach
                                            
                                            </div><!-- Tab Content End-->

                                            @endif
                                        
                                    </div><!-- Post Block Body End -->
                                    
                                </div><!-- Post Block Wrapper End -->
                                
                            </div>
                            
                            <!-- Sidebar Start -->
                            
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
                                            <div class="three-row-post-carousel row-post-carousel post-block-carousel education-post-carousel">
                
                                                <!-- Small Post Start -->
                                                <div class="post post-small post-list education-post">
                                                    <div class="post-wrap">
                
                                                        <!-- Image -->
                                                        <a class="image" href="post-details.html"><img src="frontEnd/hashnews/img/post/post-27.jpg" alt="post"></a>
                
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
                                                        <a class="image" href="post-details.html"><img src="frontEnd/hashnews/img/post/post-28.jpg" alt="post"></a>
                
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
                                                        <a class="image" href="post-details.html"><img src="frontEnd/hashnews/img/post/post-29.jpg" alt="post"></a>
                
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
                                                        <a class="image" href="post-details.html"><img src="frontEnd/hashnews/img/post/post-30.jpg" alt="post"></a>
                
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
                                                        <a class="image" href="post-details.html"><img src="frontEnd/hashnews/img/post/post-27.jpg" alt="post"></a>
                
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
                                                        <a class="image" href="post-details.html"><img src="frontEnd/hashnews/img/post/post-28.jpg" alt="post"></a>
                
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
                                                        <a class="image" href="post-details.html"><img src="frontEnd/hashnews/img/post/post-29.jpg" alt="post"></a>
                
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
                                                        <a class="image" href="post-details.html"><img src="frontEnd/hashnews/img/post/post-30.jpg" alt="post"></a>
                
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
                            
                            <!-- Sidebar End -->
                            

                            <!-- Single Sidebar -->
                        </div>
                    @endif

                @endforeach

            @endif

        </div>

    </div>
