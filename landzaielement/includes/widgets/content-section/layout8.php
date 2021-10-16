<?php
echo'<!-- exceptional area start here  -->
        <section class="exceptional-area section">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-6 col-md-6 order-md-0 order-1">
                        <div class="exceptional-info">
                            <h2>'.$settings['title'].'</h2>
                            <p>'.$settings['info'].'</p>
                            <ul class="feature-lsit">';
if ($settings['content_list5']) {
    foreach ($settings['content_list5'] as $list5) {
        echo '<li>'.$list5['title5'].'</li>';
    }
}
echo'</ul>
                            <a '.get_that_link($settings['link']).' class="primary-btn-five">'.$settings['button'].'</a>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6 order-md-1 order-0">
                        <div class="exceptional-img">
                            '.get_that_image($settings['image']).'
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- exceptional area end here  -->';