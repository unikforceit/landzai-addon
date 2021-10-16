<?php
    echo'<!-- call to actio area start here  -->
        <section class="callto-action-area mt-120">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="callto-action-wrap">
                            <h2>'.$settings['title'].'</h2>
                            <span class="section-divider"></span>
                            <ul class="btn-lsit">
                                <li>
                                    <a '.get_that_link($settings['link1']).' class="callto-btn watch-btn popup-video" data-autoplay="true" data-vbtype="video">'.$settings['button1'].'</a>
                                </li>
                                <li>
                                    <a '.get_that_link($settings['link2']).' class="callto-btn demo-btn popup-video" data-autoplay="true" data-vbtype="video">'.$settings['button2'].'</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- call to actio area end here  -->';