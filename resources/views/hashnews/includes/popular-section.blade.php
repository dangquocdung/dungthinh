<div class="popular-section section pt-50 pb-50">
        <div class="container">
            <div class="row">
                <div class="col">
                    
                    <!-- Popular Post Slider Start -->
                    <div class="popular-post-slider">
                            
                        
                        @foreach($TopicsMostViewed as $key=>$Topic)

                                        <?php
                                            if ($Topic->$title_var != "") {
                                                $title = $Topic->$title_var;
                                            } else {
                                                $title = $Topic->$title_var2;
                                            }
                                            if ($Topic->$details_var != "") {
                                                $details = $details_var;
                                            } else {
                                                $details = $details_var2;
                                            }
                                            $section = "";
                                            try {
                                                if ($Topic->section->$title_var != "") {
                                                    $section = $Topic->section->$title_var;
                                                } else {
                                                    $section = $Topic->section->$title_var2;
                                                }
                                            } catch (Exception $e) {
                                                $section = "";
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


                                        <div class="post post-small post-list post-dark popular-post">
                                            <div class="post-wrap">
                
                                                <!-- Image -->
                                                <a class="image" href="{{ $topic_link_url }}"><img src="/frontEnd/hashnews/img/post/post-7.jpg" alt="{{ $Topic->$link_title_var}}"></a>
                
                                                <!-- Content -->
                                                <div class="content fix">
                
                                                    <!-- Title -->
                                                    <h5 class="title"><a href="{{ $topic_link_url }}">{{ $Topic->$link_title_var}}</a></h5>
                
                                                    <!-- Description -->
                                                    <p>{{ str_limit(strip_tags($Topic->$details_var), $limit = 60, $end = '..') }}</p>
                
                                                    <!-- Read More -->
                                                    <a href="{{ $topic_link_url }}" class="read-more">chi tiết..</a>
                
                                                </div>
                                                
                                            </div>
                                        </div>
                                        
                                        
                                        <!-- Post Start -->
                                    @endforeach
                        

                       
                        
                    </div><!-- Popular Post Slider End -->
                    
                </div>
            </div>
        </div>
    </div>