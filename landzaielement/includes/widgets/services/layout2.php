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
                    while ($wp_query->have_posts()) {
                        $wp_query->the_post();
                        echo '<div class="col-lg-4 col-md-6">
                        <div class="single-service text-center">
                            <div class="service-icon">';
                        if (has_post_thumbnail()) {
                            the_post_thumbnail('full');
                        }
                        echo '</div>
                            <h3><a href="'.get_the_permalink().'">' . get_the_title() . '</a></h3>
                            <p>' . get_the_excerpt() . '</p>
                            <a class="explore-btn" href="#!">Explore <i class="fas fa-long-arrow-alt-right"></i></a>
                        </div>
                    </div>';
                    }
                    wp_reset_postdata();
                }
            echo '</div>
            </div>
        </section>
        <!-- service area three end here  -->';