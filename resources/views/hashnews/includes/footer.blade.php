<div class="footer-top-section section bg-dark">
    <div class="container-fluid">
        <div class="row">
            
            <!-- Footer Widget Start -->
            <div class="footer-widget col-xl-4 col-md-6 col-12 mb-60">
                
                <!-- Title -->
                <h4 class="widget-title">Chúng tôi</h4>
                
                <div class="content fix">
                    <p>Đài Phát thanh & Truyền hình tỉnh Hà Tĩnh
                    <br>Tổng biên tập: Ông Nguyễn Viết Trường - GĐ Đài PT&TH tỉnh Hà Tĩnh
                    <br>Giấy phép hoạt động số: 254/GP-TTĐT. Cục Phát thanh, Truyền hình và Thông tin điện tử cấp ngày 02/8/2017</p>
                    <!-- Footer Contact -->
                    <ol class="footer-contact">
                        <li><i class="fa fa-home"></i>22 đường Phan Đình Phùng, Thành phố Hà Tĩnh</li>
                        <li><i class="fa fa-envelope-open"></i>ads@hatinhtv.vn</li>
                        <li><i class="fa fa-headphones"></i>(02393) 850083</li>
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
            <div class="footer-widget col-xl-4 col-md-6 col-12 mb-60">
                
                <!-- Title -->
                <h4 class="widget-title">Đọc nhiều</h4>

                @foreach($TopicsMostViewed as $key=>$Topic)

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
                
                    <!-- Footer Widget Post Start -->
                    <div class="footer-widget-post">
                        <div class="post-wrap">
                            
                            <!-- Image -->
                            @if ($Topic->photo_file != null)
                                <img class="image" src="/uploads/topics/{{ $Topic->photo_file }}" alt="{{ $Topic->$link_title_var}}" style="width:124px; height:94px">
                            @else
                                <img class="image" src="/frontEnd/hashnews/img/post/post-33.jpg" alt="{{ $Topic->$link_title_var}}">
                            @endif
                            
                            <!-- Content -->
                            <div class="content">

                                <!-- Title -->
                                <h5 class="title"><a href="post-details.html">{{ $Topic->$link_title_var }}</a></h5>

                                <!-- Meta -->
                                <div class="meta fix">
                                    <span class="meta-item date"><i class="fa fa-clock-o"></i>{{ \Carbon\Carbon::parse($Topic->date)->format('d/m/Y')}}</span>
                                </div>

                            </div>
                            
                        </div>
                    </div><!-- Footer Widget Post ENd -->

                @endforeach
                
                
            </div><!-- Footer Widget End -->
            
            <!-- Footer Widget Start -->
            <div class="footer-widget col-xl-4 col-md-6 col-12 mb-60">
                
                <!-- Title -->
                <h4 class="widget-title">Nổi bật</h4>
                
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
                
                    <!-- Footer Widget Post Start -->
                    <div class="footer-widget-post">
                        <div class="post-wrap">
                            
                            <!-- Image -->
                            @if ($Topic->photo_file != null)
                                <img class="image" src="/uploads/topics/{{ $Topic->photo_file }}" alt="{{ $Topic->$link_title_var}}" style="width:124px; height:94px">
                            @else
                                <img class="image" src="/frontEnd/hashnews/img/post/post-33.jpg" alt="{{ $Topic->$link_title_var}}">
                            @endif
                            
                            <!-- Content -->
                            <div class="content">

                                <!-- Title -->
                                <h5 class="title"><a href="post-details.html">{{ $Topic->$link_title_var }}</a></h5>

                                <!-- Meta -->
                                <div class="meta fix">
                                    <span class="meta-item date"><i class="fa fa-clock-o"></i>{{ \Carbon\Carbon::parse($Topic->date)->format('d/m/Y')}}</span>
                                </div>

                            </div>
                            
                        </div>
                    </div><!-- Footer Widget Post ENd -->

                @endforeach
                
                
            </div><!-- Footer Widget End -->
            
        </div>
    </div>
</div>