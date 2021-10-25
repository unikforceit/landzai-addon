<?php
echo ' <!-- Business Strategy area start here  -->
    <section class="business-strategy-area section-top pb-90">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 offset-lg-2">
                    <div class="section-title-five mb-45 text-center ">
                         <h2 class="title">'.$settings['title'].'</h2>
                        <p class="sub-title">'.$settings['info'].'</p>
                    </div>
                </div>
            </div>
            <div class="strategy-list">';
            if ($settings['work_list']) {
                $index = 0;
                foreach ($settings['work_list'] as $work) {
                    $index++;
                    echo '<div class="single-strategy">
                    <div class="row">';
                    if ($index == 1) {
                        echo '<div class="col-lg-8 col-md-10">
                                <div class="row align-items-center">
                                    <div class="col-lg-6 col-md-6">
                                        <div class="strategy-img">
                                            ' . get_that_image($work['w_image']) . '
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-md-6">
                                        <div class="strategy-info">
                                            <h3>' . $work['w_title'] . '</h3>
                                            <p>' . $work['w_info'] . '</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            </div>
                        </div>';
                    }
                    elseif ($index == 2) {
                        if ($work['aro_image']['url']) {
                            echo '<div class="col-lg-4 col-md-2 d-none d-md-block">
                            <div class="big-arrow text-center">
                                ' . get_that_image($work['aro_image']) . '
                            </div>
                        </div>';
                        }
                        echo '<div class="col-lg-8 col-md-10">
                                <div class="row align-items-center">
                                    <div class="col-lg-6 col-md-6">
                                        <div class="strategy-img">
                                            ' . get_that_image($work['w_image']) . '
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-md-6">
                                        <div class="strategy-info">
                                            <h3>' . $work['w_title'] . '</h3>
                                            <p>' . $work['w_info'] . '</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                </div>';
                    }
                    elseif ($index == 3) {
                        echo '<div class="col-lg-8 col-md-10">
                                <div class="row align-items-center">
                                    <div class="col-lg-6 col-md-6">
                                        <div class="strategy-img">
                                            ' . get_that_image($work['w_image']) . '
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-md-6">
                                        <div class="strategy-info">
                                            <h3>' . $work['w_title'] . '</h3>
                                            <p>' . $work['w_info'] . '</p>
                                        </div>
                                    </div>
                                </div>
                            </div>';
                        if ($work['aro_image']['url']) {
                            echo '<div class="col-lg-4 col-md-2 d-none d-md-block">
                            <div class="big-arrow text-center">
                                ' . get_that_image($work['aro_image']) . '
                            </div>
                        </div>';
                        }
                        echo'</div>
                </div>';
                    }else {
                        if ($work['aro_image']['url']) {
                            echo '<div class="col-lg-4 col-md-2 d-none d-md-block">
                            <div class="big-arrow text-center">
                                ' . get_that_image($work['aro_image']) . '
                            </div>
                        </div>';
                        }
                        echo '<div class="col-lg-8 col-md-10">
                                <div class="row align-items-center">
                                    <div class="col-lg-6 col-md-6">
                                        <div class="strategy-img">
                                            ' . get_that_image($work['w_image']) . '
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-md-6">
                                        <div class="strategy-info">
                                            <h3>' . $work['w_title'] . '</h3>
                                            <p>' . $work['w_info'] . '</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                </div>';
                    }
                }
            }
            echo '</div>
        </div>
    </section>
    <!-- Business Strategy area end here  -->';