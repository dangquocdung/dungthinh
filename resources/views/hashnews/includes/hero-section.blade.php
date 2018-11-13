<style>

    @media screen and (max-width: 720px) {
        .img-fluid {
            
            height: 100% !important;
            
        }
    }
</style>

<div class="hero-section section pt-30 pb-30 fix">
    <div class="container">
        <div class="row">
            <div class="col">
                <div class="row row-1">

                    @foreach($HotTopics as $key=>$Topic)

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
                    
                        <div class="col-lg-6 col-md-6 col-12">

                            <!-- Overlay Post Start -->
                            <div class="post post-overlay gradient-overlay hero-post">
                                <div class="post-wrap">

                                    <!-- Image -->
                                    
                                    <div class="image">
                                        @if ($Topic->photo_file != null)
                                            <img class="img-fluid" src="/uploads/topics/{{ $Topic->photo_file }}" alt="{{ $Topic->$link_title_var}}" style="width:584px; height:400px">
                                        @else
                                            <img src="/frontEnd/hashnews/img/post/post-81.jpg" alt="{{ $Topic->$link_title_var}}">
                                        @endif
                                    
                                    </div>

                                    <!-- Category -->
                                    <a href="#" class="category fashion">{{ trans('backLang.'.$Topic->webmasterSection->name) }}</a>

                                    <!-- Content -->
                                    <div class="content">

                                        <!-- Title -->
                                        <h4 class="title"><a href="#">{{ $Topic->$link_title_var }}</a></h4>

                                        <!-- Meta -->
                                        <div class="meta fix">
                                            <span class="meta-item date"><i class="fa fa-clock-o"></i>{{ \Carbon\Carbon::parse($Topic->date)->format('d/m/Y')}}</span>
                                        </div>

                                    </div>

                                </div>
                            </div><!-- Overlay Post End -->
                                
                        </div>

                    @endforeach

                    

                </div>
            </div>
        </div>
    </div>
</div>