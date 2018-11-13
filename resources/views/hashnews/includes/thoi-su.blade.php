<div class="recent-section section bg-dark pt-50 pb-50">
        <div class="container">
            
            <!-- Feature Post Row Start -->
            <div class="row">
                
                <div class="col-12">
                    
                    <!-- Post Block Wrapper Start -->
                    <div class="post-block-wrapper dark">
                        
                        <!-- Post Block Head Start -->
                        <div class="head life-style-head">
                            
                            <!-- Title -->
                            <h4 class="title">Tin mới nhất</h4>
                            
                        </div><!-- Post Block Head End -->
                        
                        <!-- Post Block Body Start -->
                        <div class="body">
                            
                            <div class="three-column-post-carousel column-post-carousel post-block-carousel dark life-style-post-carousel row">

                                @foreach($LatestNews as $key=>$Topic)

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

                                    <!-- Overlay Post Start -->
                                    <div class="post post-overlay sports-post col-6 mb-20">
                                        <div class="post-wrap">

                                            <!-- Image -->
                                            @if ($Topic->photo_file != null)
                                                <div class="image"><img src="/uploads/thumbs/{{ $Topic->photo_file }}" alt="{{ $Topic->$link_title_var}}" style="width:100%; height:256px"></div>
                                            @else
                                                <div class="image"><img src="hashnews/img/post/post-38.jpg" alt="{{ $Topic->$link_title_var}}"></div>
                                            @endif

                                            <!-- Content -->
                                            <div class="content">

                                                <!-- Title -->
                                                <h4 class="title"><a href="post-details.html">{{ $Topic->$link_title_var}}</a></h4>

                                                <!-- Meta -->
                                                <div class="meta fix">
                                                    <a href="#" class="meta-item author"><i class="fa fa-user"></i> {{ $Topic->user->name }}</a>
                                                    <span class="meta-item date"><i class="fa fa-clock-o"></i>{{ \Carbon\Carbon::parse($Topic->date)->format('d/m/Y') }}</span>
                                                </div>
                                            </div>
                                            
                                        </div>
                                    </div><!-- Overlay Post End -->
                                    <!-- Post End -->

                                @endforeach
                                
                            </div>
                            
                        </div><!-- Post Block Body End -->
                        
                    </div><!-- Post Block Wrapper End -->
                    
                </div>
                
            </div><!-- Feature Post Row End -->
            
        </div>
    </div>