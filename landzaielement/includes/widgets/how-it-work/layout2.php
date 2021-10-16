<?php
echo'<!-- work area two start here  -->
        <section class="work-area-two section">
            <div class="container">
                <div class="row">
                    <div class="col-lg-8 offset-lg-2">
                        <div class="section-title-five mb-45 text-center ">
                            <h2 class="title">'.$settings['title'].'</h2>
                            <p class="sub-title">'.$settings['info'].'</p>
                        </div>
                    </div>
                </div>
                <div class="row align-items-center">
                    <div class="col-lg-6 col-md-5">
                        <div class="work-image">
                            '.get_that_image($settings['image']).'
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-7">
                        <div class="work-list">
                            <div class="row">';

if ($settings['work_list']) {
    foreach ($settings['work_list'] as $work) {
        echo '<div class="col-lg-6 col-md-6 col-sm-6">
                                    <div class="sigle-work">
                                        <span class="work-icon"><i class="fas fa-check"></i></span>
                                        <h3>'.$work['w_title'].'</h3>
                                        <p>'.$work['w_info'].'</p>
                                    </div>
                                </div>';
    }
}
echo '</div>
                        </div>
                    </div>
                </div>
            </div>
        </section>  
        <!-- work area two end here  -->';