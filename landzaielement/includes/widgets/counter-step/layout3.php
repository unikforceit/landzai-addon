<?php
    echo'<!-- counter area start here  -->
        <section class="counter-area ">
            <div class="container">
                <div class="counter-list d-flex justify-content-between align-items-center">';
                if ($settings['counter_list']) {
                    foreach ($settings['counter_list'] as $counter) {
                        echo '<div class="single-counter text-center">
                        <h2><span>'.$counter['counter_pre'].'</span><span class="counter">'.$counter['counter_number'].'</span><span>'.$counter['counter_suff'].'</span></h2>
                        <p>'.$counter['counter_title'].'</p>
                    </div>';
                    }
                }
                echo '</div>
            </div>
        </section>
        <!-- counter area end here  -->';