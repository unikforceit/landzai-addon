<?php
echo '<!-- work area start here  -->
        <section class="work-area section" id="about" >
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="section-title text-center">
                            <h2 class="title">'.$settings['title'].'</h2>
                            <p class="sub-title">'.$settings['info'].'</p>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-5 align-self-center">
                        <div class="work-img">
                            '.get_that_image($settings['image']).'
                        </div>
                    </div>
                    <div class="col-lg-6 offset-lg-1 ">
                        <div class="work-lsit work-slide">';

if ($settings['work_list']) {
    foreach ($settings['work_list'] as $work) {
        echo '<div class="single-work">
                                <h3>'.$work['w_title'].'</h3>
                                <p>'.$work['w_info'].'</p>
                            </div>';
    }
}
echo '</div>
                    </div>
                </div>
            </div>
        </section>
        <!-- work area end here  -->';