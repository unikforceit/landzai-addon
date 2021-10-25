<?php

namespace Elementor;

if (!defined('ABSPATH')) 
    exit; // Exit if accessed directly


class landzai_project extends Widget_Base {

    public function get_name() {
        return 'landzai-project';
    }
 
    public function get_title() {
        return __('Project Filter', 'landzai');
    }

    public function get_icon() {
        return 'eicon-form-horizontal';
    }

    public function get_categories() {
        return ['landzaielement-addons'];
    }

    protected function _register_controls() {

        $this->start_controls_section(
            'product_feature_section',
            [
                'label' => __( 'Content', 'landzai' ),
                'tab' => \Elementor\Controls_Manager::TAB_CONTENT,
            ]
        );
        $this->add_control(
            'title',
            [
                'label' => __( 'Title', 'landzai' ),
                'type' => \Elementor\Controls_Manager::TEXTAREA,
                'default' => __( 'Compleate <span class="color-two">Projects</span> By Our Team', 'landzai' ),
            ]
        );
        $this->add_control(
            'stitle',
            [
                'label' => __( 'Sub Title', 'landzai' ),
                'type' => \Elementor\Controls_Manager::TEXTAREA,
                'default' => __( 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Amet,, lacus  non massa id amet tincidunt. Lacus ut integer blandit diam.', 'landzai' ),
            ]
        );
        $this->add_control(
            'cat_query',
            [
                'label' => __('Category', 'landzai'),
                'type' => Controls_Manager::SELECT2,
                'options' => ae_drop_cat('project_cat'),
                'multiple' => true,
                'label_block' => true,
            ]
        );
        $this->add_control(
            'show_cat',
            [
                'label' => esc_html__('Show Category', 'landzai'),
                'type' => \Elementor\Controls_Manager::NUMBER,
                'default' => esc_html__('5', 'landzai'),
            ]
        );
        $this->add_control(
            'posts_per_page',
            [
                'label' => __('Posts Per Page', 'landzai'),
                'type' => Controls_Manager::NUMBER,
                'default' => 6,
            ]
        );
        $this->end_controls_section();
        
        $this->start_controls_section(
            'section_settings',
            [
                'label' => __( 'General', 'landzai' ),
                'tab' => Controls_Manager::TAB_STYLE,
            ]
        );
        $this->add_control(
            'slider_number',
            [
                'label' => __('Slider Number', 'landzai'),
                'type' => Controls_Manager::NUMBER,
                'default' => 2,
            ]
        );
        $this->add_control(
            'post_title_color',
            [
                'label' => __( 'Title Color', 'landzai' ),
                'type' => \Elementor\Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .why-chooseus .single-item .inner-box .image-box .caption' => 'color: {{VALUE}}',
                ],
            ]
        );
        $this->add_control(
            'post_titlea_color',
            [
                'label' => __( 'Title Active Color', 'landzai' ),
                'type' => \Elementor\Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .why-chooseus .single-item .inner-box .image-box .overlay-box h4' => 'color: {{VALUE}}; border-color: {{VALUE}}',
                ],
            ]
        );
        $this->add_group_control(
            \Elementor\Group_Control_Typography::get_type(),
            [
                'name' => 'ttih',
                'label' => __( 'Title Typography', 'landzai' ),
                'selector' => '{{WRAPPER}} .why-chooseus .single-item .inner-box .image-box .caption',
            ]
        );
        $this->add_control(
            'hh_c',
            [
                'label' => __( 'Content Color', 'landzai' ),
                'type' => \Elementor\Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .why-chooseus .single-item .inner-box .overlay-box p' => 'color: {{VALUE}}',
                ],
            ]
        );
        $this->add_group_control(
            \Elementor\Group_Control_Typography::get_type(),
            [
                'name' => 'ttihaa',
                'label' => __( 'Content Typography', 'landzai' ),
                'selector' => '{{WRAPPER}} .why-chooseus .single-item .inner-box .overlay-box p',
            ]
        );
        $this->add_control(
            'hh_caa',
            [
                'label' => __( 'Button Color', 'landzai' ),
                'type' => \Elementor\Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .why-chooseus .single-item .inner-box .image-box .overlay-box .read-more' => 'color: {{VALUE}}',
                ],
            ]
        );
        $this->add_group_control(
            \Elementor\Group_Control_Typography::get_type(),
            [
                'name' => 'ttihaaccc',
                'label' => __( 'Button Typography', 'landzai' ),
                'selector' => '{{WRAPPER}} .why-chooseus .single-item .inner-box .image-box .overlay-box .read-more',
            ]
        );
        $this->add_control(
            'icon_cb',
            [
                'label' => __( 'Overlay BG', 'landzai' ),
                'type' => \Elementor\Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .why-chooseus .single-item .inner-box .image-box .overlay-box, 
                    {{WRAPPER}} .why-chooseus .single-item .inner-box .image-box .caption' => 'background-color: {{VALUE}}',
                ],
            ]
        );
        $this->end_controls_section();

    }
        
    protected function render(){

        $settings = $this->get_settings_for_display();

            $tax_args = array(
                'taxonomy' => 'project_cat',
                'number' => $settings['show_cat'],
                'include' => $settings['cat_query'],
                'hide_empty' => false,
            );
            $the_query = new \WP_Query(array(
                'post_type' => 'project',
                'posts_per_page' => $settings['posts_per_page'],
                'tax_query' => array(
                    array(
                        'taxonomy' => 'project_cat',
                        'field' => 'term_id',
                        'terms' => $settings['cat_query'],
                    )
                )
            ));
            $categories = get_terms($tax_args);
            echo ' <!-- portfolio area start here  -->
        <section class="portfolio-area section-top pb-90 ">
            <div class="container">
                <div class="row">
                    <div class="col-lg-8 offset-lg-2">
                        <div class="section-title-four mb-45 text-center ">
                             <h2 class="title">'.$settings['title'].'</h2>
                            <p class="sub-title">'.$settings['stitle'].'</p>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-12">
                        <div class="filtering-menu-area">
                            <ul class="filtering-button">
                                <li class="active" data-filter="*">All Work</li>';
                                foreach ($categories as $category) {
                                    echo '<li data-filter=".' . $category->slug . '">' . $category->name . '</li>';
                                }
                            echo '</ul>
                        </div>
                    </div>
                </div>
                <div class="row grid fix">';
                if ($the_query->have_posts()) {
                    while ($the_query->have_posts()) {
                        $the_query->the_post();
                        $project_id = get_the_ID();
                        $post_categories = get_the_terms( $project_id, 'project_cat' );
                        foreach ($post_categories as $cats){
                            $cat[] = $cats->slug;
                        }
                        $filter = implode(' ', $cat);
                            echo '<div class="grid-item col-lg-4 col-md-6 '.$filter.'">
                        <div class="single-portfolio">
                            <a href="#" class="single-image">
                                ' . get_the_post_thumbnail() . '
                            </a>
                            <div class="portfolio-content">
                                <h3><a href="#">' . get_the_title() . '</a></h3>
                                <p>' . get_the_excerpt() . '</p>
                                <a class="explore-btn" href="#">Explore <i class="fas fa-long-arrow-alt-right"></i></a>
                            </div>
                        </div>
                    </div>';
                    }
                    wp_reset_postdata();
                }
                echo '</div>
            </div>
        </section>
        <!-- portfolio area end here  -->';
    }


}
Plugin::instance()->widgets_manager->register_widget_type( new landzai_project() );