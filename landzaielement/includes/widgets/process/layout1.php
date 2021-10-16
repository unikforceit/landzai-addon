<?php
echo '<!-- requirement-process area start here  -->
        <section class="requirement-process section">
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
                if ($settings['work_list']) {
                    foreach ($settings['work_list'] as $work) {
                        echo '<div class="col-lg-3 col-md-6 col-sm-6">';
                        if ($work['aro_image']['url']) {
                            echo '<div class="top-arrow">
                                    '.get_that_image($work['aro_image']).'
                           </div>';
                        }
                        echo '<div class="single-requirement text-center">
                            <div class="requirement-icon">'.get_that_image($work['w_image']).'</div>
                            <h3>'.$work['w_title'].'</h3>
                        </div>';
                        if ($work['aro_image2']['url']) {
                            echo '<div class="bottom-arrow">
                                    '.get_that_image($work['aro_image2']).'
                           </div>';
                        }
                        echo '
                    </div>';
                    }
                }
                echo '</div>
            </div>
        </section>
        <!-- requirement-process area end here  -->';