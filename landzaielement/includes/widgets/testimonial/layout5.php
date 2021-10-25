<?php
    echo ' <!-- testimonial two area start here  -->
        <section class="testimonial-five-area  section ">
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
                    <div class="col-lg-12">
                        <div class="testimonial-slide-five">';

                        if ($settings['testi_list']) {
                            foreach ($settings['testi_list'] as $testi) {
                                echo '<div class="sigle-testimonial text-center">
                                        <div class="quote-iocn">
                                            <i class="fas fa-quote-left"></i>
                                        </div>
                                        <div class="clint-image">
                                        '.get_that_image($testi['thumb']).'
                                        </div>
                                        <p>
                                        '.$settings['info'].'
                                        </p>
                                        <div class="clinmg-info">
                                            <h4><a '.get_that_link($testi['t_link']).'>'.$testi['t_title'].'</a></h4>
                                            <span>'.$testi['t_subtitle'].'</span>
                                        </div>
                                    </div>';
                            }
                        }
                        echo '</div>
                    </div>
                </div>
            </div>
        </section>
        <!-- testimonial two area end here  -->';