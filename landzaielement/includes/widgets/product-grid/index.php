<?php

namespace Elementor;

if (!defined('ABSPATH')) 
    exit; // Exit if accessed directly


class landzai_woo_grid extends Widget_Base {

    public function get_name() {
        return 'landzai-woo-grid';
    }
 
    public function get_title() {
        return __('Woo Grid', 'landzai');
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
                'default' => __( 'Choose Your Smart Watch Model', 'landzai' ),
            ]
        );
        $repeater = new \Elementor\Repeater();
        $repeater->add_control(
            'ptitle',
            [
                'label' => __( 'Title', 'landzai' ),
                'type' => \Elementor\Controls_Manager::TEXTAREA,
                'default' => __( 'Smart Watch', 'landzai' ),
            ]
        );
        $repeater->add_control(
            'price',
            [
                'label' => __( 'Price', 'landzai' ),
                'type' => \Elementor\Controls_Manager::TEXT,
                'default' => __( '$399', 'landzai' ),
            ]
        );
        $repeater->add_control(
            'image',
            [
                'label' => __( 'Choose Image', 'landzai' ),
                'type' => \Elementor\Controls_Manager::MEDIA,
                'default' => [
                    'url' => \Elementor\Utils::get_placeholder_image_src(),
                ],
            ]
        );
        $this->add_control(
            'product_list',
            [
                'label' => __( 'Product List', 'landzai' ),
                'type' => \Elementor\Controls_Manager::REPEATER,
                'fields' => $repeater->get_controls(),
                'default' => [
                    [
                        'ptitle' => __( 'Smart Watch', 'landzai' ),
                    ],
                    [
                        'ptitle' => __( 'Smart Watch', 'landzai' ),
                    ],
                    [
                        'ptitle' => __( 'Smart Watch', 'landzai' ),
                    ],


                ],
                'title_field' => '{{{ ptitle }}}',
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

        echo'<!-- product area start here  -->
        <section class="product-area section-top pb-90">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6 offset-lg-3">
                        <div class="section-title-three mb-37 text-center ">
                            <h2 class="title">'.$settings['title'].'</h2>
                        </div>
                    </div>
                </div>
                <div class="product-list">
                    <div class="row">';
        if ($settings['product_list']) {
            foreach ($settings['product_list'] as $product) {
                            echo '<div class="col-lg-4 col-md-6">
                            <div class="single-product-home3 text-center">
                                <div class="product-thumbnail">
                                    <a href="'.get_the_permalink().'">
                                    '.get_that_image($product['image']).'
                                    </a>
                                </div>
                                <div class="product-info">
                                    <h3 class="product-name"><a href="#">' . $product['ptitle'] . '</a></h3>
                                    <h2 class="poduct-price">'.$product['price'].'</h2>
                                    <a class="primary-btn-three active" href="#">Order Now</a>
                                </div>
                            </div>
                        </div>';
                    }
                }
                echo '</div>
                </div>
            </div>
        </section>
        <!-- product area end here  -->';
    }


}
Plugin::instance()->widgets_manager->register_widget_type( new landzai_woo_grid() );