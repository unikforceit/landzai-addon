<?php

namespace Elementor;

if (!defined('ABSPATH')) 
    exit; // Exit if accessed directly


class landzai_terms extends Widget_Base {

    public function get_name() {
        return 'landzai-terms';
    }
 
    public function get_title() {
        return __('Terms', 'landzai');
    }

    public function get_icon() {
        return 'eicon-form-horizontal';
    }

    public function get_categories() {
        return ['landzaielement-addons'];
    }

    protected function _register_controls() {

        $this->start_controls_section(
            'content_section',
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
                'default' => __( 'Got A Question?', 'landzai' ),
            ]
        );
        $this->add_control(
            'info',
            [
                'label' => __( 'Info', 'landzai' ),
                'type' => \Elementor\Controls_Manager::TEXTAREA,
                'default' => __( 'Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod
                 tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua.', 'landzai' ),
            ]
        );
        $repeater = new \Elementor\Repeater();
        $repeater->add_control(
            'f_title',
            [
                'label' => __( 'Title', 'landzai' ),
                'type' => \Elementor\Controls_Manager::TEXTAREA,
                'default' => __( 'Cookies Policy', 'landzai' ),
            ]
        );
        $repeater->add_control(
            'f_info',
            [
                'label' => __( 'Info', 'landzai' ),
                'type' => \Elementor\Controls_Manager::WYSIWYG,
                'default' => __( '<h3>Business Terms of Conditions:</h3>
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sit suspendisse at ante ultrices aliquam. Mauris, mollis a risus risus sagittis porttitor sit. Id volutpat sodales amet, venenatis hac scelerisque purus. Amet cras ultrices ipsum, purus. Tortor, cursus in mauris phasellus donec mauris accumsan. Pulvinar id eget nunc potenti arcu arcu sagittis fusce vel. Quisque pulvinar et lorem laoreet sodales at sit.</p>
                                <p>Cursus tellus sagittis, ultricies eget felis vestibulum dictum. Montes, interdum malesuada eget donec sapien pulvinar. Pulvinar eget ut dignissim eu, mauris id. Neque, suscipit nunc ut magna pellentesque natoque sit elementum sollicitudin. Pellentesque semper egestas ultricies non nullam. Turpis donec aliquet justo, facilisis. Venenatis id adipiscing dictum ultrices morbi posuere vestibulum odio nibh. Id aliquet elit quam sit dolor, pellentesque morbi leo, eget. </p>
                                <p>Et sollicitudin fames amet sed orci, molestie arcu diam consectetur. In ultricies nulla duis sed dolor, </p>', 'landzai' ),
            ]
        );
        $repeater->add_control(
            'f_features',
            [
                'label' => __( 'Features', 'landzai' ),
                'type' => \Elementor\Controls_Manager::WYSIWYG,
                'default' => __( '<li>Volutpat eu pharetra sed vulputate sit. Amet nunc vulputate quisque id est. </li>
                                    <li>Praesent consectetur imperdiet morbi in molestie pellentesque mauris risus. </li>
                                    <li>Tellus fermentum imperdiet sit felis et. </li>
                                    <li>Mollis integer enim fermentum bibendum laoreet orci neque. </li>
                                    <li>Velit pulvinar vel mattis viverra ut. Rhoncus et bibendum rutrum ultricies neque pellentesque.</li>
                                    <li>Rhoncus scelerisque urna, enim, tempus, amet, libero pellentesque. </li>
                                    <li>Donec tellus etiam in volutpat tortor.</li>
                                    <li>Morbi ipsum elementum justo nunc quisque ut nunc orci. </li>', 'landzai' ),
            ]
        );
        $this->add_control(
            'faq_list',
            [
                'label' => __( 'Terms List', 'landzai' ),
                'type' => \Elementor\Controls_Manager::REPEATER,
                'fields' => $repeater->get_controls(),
                'default' => [
                    [
                        'f_title' => __( 'Cookies Policy', 'landzai' ),
                    ],
                    [
                        'f_title' => __( 'Cookies Policy', 'landzai' ),
                    ],
                    [
                        'f_title' => __( 'Cookies Policy', 'landzai' ),
                    ],
                    [
                        'f_title' => __( 'Cookies Policy', 'landzai' ),
                    ],
                    [
                        'f_title' => __( 'Cookies Policy', 'landzai' ),
                    ],
                    [
                        'f_title' => __( 'Cookies Policy', 'landzai' ),
                    ],
                    [
                        'f_title' => __( 'Cookies Policy', 'landzai' ),
                    ],


                ],
                'title_field' => '{{{ f_title }}}',
            ]
        );
        $this->add_control(
            'layout',
            [
                'label' => __( 'Layout', 'landzai' ),
                'type' => \Elementor\Controls_Manager::CHOOSE,
                'options' => [
                    'layout1' => [
                        'title' => __( 'Layout 1', 'landzai' ),
                        'icon' => 'eicon-form-horizontal',
                    ],
                    'layout2' => [
                        'title' => __( 'Layout 2', 'landzai' ),
                        'icon' => 'eicon-post-slider',
                    ],
                    'layout3' => [
                        'title' => __( 'Layout 3', 'landzai' ),
                        'icon' => 'eicon-post-slider',
                    ],
                ],
                'default' => 'layout1',
                'toggle' => true,
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

        $settings = $this->get_settings();
        include dirname(__FILE__). '/' . $settings['layout']. '.php';
    }


}
Plugin::instance()->widgets_manager->register_widget_type( new landzai_terms() );