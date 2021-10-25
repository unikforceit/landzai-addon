<?php
    echo'<!-- service area three start here  -->
        <section class="service-three-area section">
            <div class="container">
                <div class="row">
                    <div class="col-lg-8 offset-lg-2">
                        <div class="section-title-five mb-45 text-center ">
                            <h2 class="title">'.$settings['title'].'</h2>
                            <p class="sub-title">'.$settings['info'].'</p>
                        </div>
                    </div>
                </div>
                <div class="row">';
                if ($wp_query->have_posts()) {
                    $index = 0;
                    while ($wp_query->have_posts()) {
                        $wp_query->the_post();
                        $index++;
                        if (ae_check_odd_even($index) == 'Even'){
                            $class = 'color-icon';
                        }else{
                            $class = '';
                        }
                        echo '<div class="col-lg-4 col-md-6">
                        <div class="single-service text-center">
                            <div class="service-icon '.$class.'">
                            <i class="'.landzai_service_meta('service_icon').'"></i>
                            </div>
                            <h3><a href="'.get_the_permalink().'">' . get_the_title() . '</a></h3>
                            <p>' . get_the_excerpt() . '</p>
                            <a class="explore-btn" '.get_that_link($settings['link']).'>'.$settings['button'].' <i class="fas fa-long-arrow-alt-right"></i></a>
                        </div>
                    </div>';
                    }
                    wp_reset_postdata();
                }
            echo '</div>
            </div>
        </section>
        <!-- service area three end here  -->';