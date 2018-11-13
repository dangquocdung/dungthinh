<?php

    $title_var = "title_" . trans('backLang.boxCode');

    $details_var = "details_" . trans('backLang.boxCode');
    
    $slug_var = "seo_url_slug_" . trans('backLang.boxCode');
    
?>

@if (!empty($MarqueeTopics))
    <div class="breaking-news-section section">
        <div class="container">
            <div class="row">
                <div class="col-12">
                   
                    <!-- Breaking News Wrapper Start -->
                    <div class="breaking-news-wrapper">

                        <!-- Breaking News Title -->
                        <h5 class="breaking-news-title float-left">Tin mới</h5>

                        <!-- Breaking Newsticker Start -->
                        <ul class="breaking-news-ticker float-left">
                                @foreach($MarqueeTopics as $key=>$Topic)

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

                                <li>
                                
                                    <a href="#" target="_blank" style="text-decoration: none">{{ $Topic->$title_var }}</a>

                                </li>
                    
                                @endforeach
                            
                        </ul><!-- Breaking Newsticker Start -->

                        <!-- Breaking News Nav -->
                        <div class="breaking-news-nav">
                            <button class="news-ticker-prev"><i class="fa fa-angle-left"></i></button>
                            <button class="news-ticker-next"><i class="fa fa-angle-right"></i></button>
                        </div>
                        
                    </div><!-- Breaking News Wrapper End -->
                    
                </div>
            </div>
        </div>
    </div>
    @endif