<style>

    .post-block-wrapper.dark {
        border-color: #ffffff;
    }

    .post-block-wrapper.dark .head {
        border-color: #ffffff;
    }


</style>

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
                                    <div class="post post-dark life-style-post col">
                                        <div class="post-wrap">

                                            <!-- Image -->
                                            @if ($Topic->photo_file != null)
                                                <a class="image" href="#"><img src="/uploads/topics/{{ $Topic->photo_file }}" alt="{{ $Topic->$link_title_var}}" style="width:370px; height:267px"></a>
                                            @else
                                                <a class="image" href="#"><img src="/frontEnd/hashnews/img/post/post-83.jpg" alt="{{ $Topic->$link_title_var}}"></a>
                                            @endif
                                            <!-- Content -->
                                            <div class="content">

                                                <!-- Title -->
                                                <h5 class="title"><a href="#">{{ $Topic->$link_title_var}}</a></h5>

                                                <!-- Meta -->
                                                <div class="meta fix">
                                                    <a href="#" class="meta-item author"><i class="fa fa-user"></i> {{ $Topic->user->name }}</a>
                                                    <span class="meta-item date"><i class="fa fa-clock-o"></i>{{ \Carbon\Carbon::parse($Topic->date)->format('d/m/Y') }}</span>
                                                </div>

                                            </div>

                                        </div>
                                    </div><!-- Post End -->

                                @endforeach
                                
                                
                                
                                
                                
                            </div>
                            
                        </div><!-- Post Block Body End -->
                        
                    </div><!-- Post Block Wrapper End -->
                    
                </div>
                
            </div><!-- Feature Post Row End -->
            
        </div>
    </div>