<?php
echo '<!-- contact area start here  -->
        <section class="contact-area section-bottom"  
        data-latitude="'.$settings['latitude'].'" data-longitude="'.$settings['longitude'].'" >
            <div class="container">
                <div class="row">
                    <div class="col-lg-8 offset-lg-2">
                        <div class="contact-area-top">
                            <ul class="box-lst">';

                if ($settings['work_list']) {
                    foreach ($settings['work_list'] as $work) {
                        echo '<li class="single-box">
                                    <i class="'.$work['icon']['value'].'"></i>
                                    <span>'.$work['w_title'].'</span>
                                    <span>'.$work['s_title'].'</span>
                                </li>';
                                        }
                                    }
                    echo '</ul>
                       </div>
                        <div class="section-title-five mb-45 text-center ">
                         <h2 class="title">'.$settings['title'].'</h2>
                            <p class="sub-title">'.$settings['info'].'</p>
                        </div>
                        <div class="contact-area-bottom">
                            <div class="map-area">
                                <div id="gmap" class="google-map"></div>
                            </div>
                            <div class="contact-form">
                                '.do_shortcode($settings['form']).'
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- contact area end here  -->';