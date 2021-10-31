<?php
    echo ' <!-- contact-area-v2 start here  -->
        <div class="contact-top-v2 section-top pb-90">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6">
                        <div class="section-title-five ">
                            <h2 class="title">Contact Info</h2>
                            '.$settings['pera'].'
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="contact-info-wrap">
                            <ul class="contact-box-list">';

                if ($settings['work_list']) {
                    foreach ($settings['work_list'] as $work) {
                        echo '<li>
                                    <i class="'.$work['icon']['value'].'"></i>
                                    <h4>'.$work['heading'].'</h4>
                                    <span>'.$work['w_title'].'</span>
                                    <span>'.$work['s_title'].'</span>
                                </li>';
                                    }
                                }
                            echo '
                            </ul>
                            <ul class="contact-box-list">';
                        if ($settings['work_list']) {
                            foreach ($settings['work_list'] as $work) {
                                echo '<li>
                                        <i class="'.$work['icon']['value'].'"></i>
                                        <h4>'.$work['heading'].'</h4>
                                       <span>'.$work['w_title'].'</span>
                                        <span>'.$work['s_title'].'</span>
                                    </li>';
                            }
                        }
                        echo '</ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <section class="contact-area-v2 section-bottom"   
        data-latitude="'.$settings['latitude'].'" data-longitude="'.$settings['longitude'].'">
            <div class="container">
                <div class="contact-wrap">
                    <div class="contact-wrap-inner">
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="section-title-five mb-45 ">
                                    <h2 class="title">'.$settings['title'].'</h2>
                                    <p class="sub-title w-100">'.$settings['info'].'</p>
                                </div>
                                <div class="map-area">
                                    <div id="gmap" class="google-map"></div>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="contact-form">
                                    <h2 class="contact-title">Send us a message</h2>
                                     '.do_shortcode($settings['form']).'
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- contact-area-v2 end here  -->';