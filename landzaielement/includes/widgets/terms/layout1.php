<?php
    echo '<!-- primary-tabs-area start here  -->
        <div class="primary-tabs-area section">
            <div class="container">
                <div class="row">
                    <div class="col-md-4">
                      <div class="tab-menu nav flex-column nav-pills" id="v-pills-tab" role="tablist" aria-orientation="vertical">';

                if ($settings['faq_list']) {
                    $index = 0;
                    foreach ($settings['faq_list'] as $faq) {
                        $index++;
                        if ($index == 1){
                            $active = 'active';
                            $active3 = 'true';
                        } else {
                            $active = '';
                            $active3 = '';
                        }
                        echo '<a class="nav-link '.$active.'" 
                                id="v-pills-'.$faq['_id'].'-tab" data-toggle="pill" 
                                href="#v-pills-'.$faq['_id'].'" role="tab" 
                                aria-controls="v-pills-'.$faq['_id'].'" aria-selected="'.$active3.'">'.$faq['f_title'].'</a>';
                }
            }
                    echo '</div>
                    </div>
                    <div class="col-md-8">
                      <div class="tab-content" id="v-pills-tabContent">';

                if ($settings['faq_list']) {
                    $index2 = 0;
                    foreach ($settings['faq_list'] as $faq) {
                        $index2++;
                        if ($index2 == 1){
                            $active2 = 'show active';
                        } else {
                            $active2 = '';
                        }
                        echo '<div class="tab-pane fade '.$active2.'" id="v-pills-'.$faq['_id'].'" role="tabpanel" aria-labelledby="v-pills-'.$faq['_id'].'-tab">
                            <div class="content-wrap">
                                '.$faq['f_info'].'
                                <ul class="feature-list">
                                     '.$faq['f_features'].'
                                </ul>
                            </div>
                        </div>';
                }
            }
                    echo ' </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- primary-tabs-area start here  -->';