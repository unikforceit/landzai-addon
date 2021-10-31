<?php
    echo '<!-- pricing two ara start here  -->
        <div class="pricing-area-two section section-bg">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="section-title-two text-center">
                            <h2 class="title">'.$settings['stitle'].'</h2>
                            <span class="section-divider"></span>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6">
                      <div class="price-table-nav nav flex-column nav-pills" id="v-pills-tab" role="tablist" aria-orientation="vertical">';
                    $index = 0;
                    if ($settings['price_list']) {

                        foreach ($settings['price_list'] as $monthly) {
                            $index++;
                            if ($index == 1){
                                $active = 'active';
                                $arial = 'true';
                            }else{
                                $active = '';
                                $arial = 'false';
                            }
                            echo '<a class="nav-link d-flex align-items-center justify-content-between '.$active.'" id="v-pills-'.$monthly['_id'].'-tab" data-toggle="pill" href="#v-pills-'.$monthly['_id'].'" role="tab" aria-controls="v-pills-'.$monthly['_id'].'" aria-selected="'.$arial.'">
                            <div class="plan-name">
                                <div class="media">
                                   <div class="check-icon align-self-center mr-3">
                                    <i class="fas fa-check"></i>
                                   </div>
                                    <div class="media-body">
                                      <h4 class="mt-0"> ' . $monthly['title'] . '</h4>
                                      <span>' . $monthly['sub'] . '</span>
                                    </div>
                                </div>
                            </div>
                            <div class="amount">
                                <h2>' . $monthly['price'] . '</h2>
                            </div>
                        </a>';

                            }
                        }
                        echo '</div>
                    </div>
                    <div class="col-md-6">
                      <div class="tab-content" id="v-pills-tabContent">';
                    $index2 = 0;
                    if ($settings['price_list']) {

                        foreach ($settings['price_list'] as $monthly) {
                            $index2++;
                            if ($index2 == 1){
                                $active2 = 'show active';
                            }else{
                                $active2 = '';
                            }

                    echo '<div class="tab-pane fade '.$active2.'" id="v-pills-'.$monthly['_id'].'" role="tabpanel" aria-labelledby="v-pills-'.$monthly['_id'].'-tab">
                           <div class="price-info-box">
                               <div class="price-top">
                                   <h2>' . $monthly['title'] . '</h2>
                                   <span>' . $monthly['sub'] . '</span>
                                   <div class="check-icon">
                                        <i class="fas fa-check"></i>
                                   </div>
                               </div>
                               <div class="price-body">
                                   <ul>';
                                       landzai_list_control($monthly['features'], '');
                                    echo '</ul>
                                   <a class="primary-btn-two" ' . get_that_link($monthly['link']) . '>' . $monthly['button'] . '</a>
                               </div>
                           </div>
                        </div>';

                            }
                        }
                        echo '</div>
                    </div>
                  </div>
            </div>
        </div>
        <!-- pricing two ara end here  -->';