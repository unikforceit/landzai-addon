<?php
    echo ' <!-- contact area start here  -->
        <section class="contact-area-v3 section">
            <div class="container">
                <div class="row">
                    <div class="col-lg-8 offset-lg-2">
                        <div class="section-title-five mb-45 text-center ">
                              <h2 class="title">'.$settings['title'].'</h2>
                            <p class="sub-title">'.$settings['info'].'</p>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-8 offset-lg-2">
                        <div class="contact-area-top">
                            <ul class="box-lst">';

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
                        </div>
                    </div>
                </div>
                <div class="contact-form-wrap" data-background="'.$settings['image']['url'].'">
                    <div class="row no-gutters">
                        <div class="col-lg-5 offset-lg-7">
                            <div class="contact-form">
                                <h2 class="contact-title">Send us a message</h2>
                                 '.do_shortcode($settings['form']).'
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- contact area end here  -->';