<?php

namespace Elementor;

if (!defined('ABSPATH')) 
    exit; // Exit if accessed directly


class address_slider extends Widget_Base {

    public function get_name() {
        return 'address-slider';
    }
 
    public function get_title() {
        return __('Address Slider', 'landzai');
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
        $repeater = new \Elementor\Repeater();
        $repeater->add_control(
            'title',
            [
                'label' => __( 'Title', 'landzai' ),
                'type' => \Elementor\Controls_Manager::TEXTAREA,
                'default' => __( 'England', 'landzai' ),
            ]
        );
        $repeater->add_control(
            'location',
            [
                'label' => __( 'Location', 'landzai' ),
                'type' => \Elementor\Controls_Manager::TEXTAREA,
                'default' => __( '49488 Avenida Obregon,<br/> La Quinta, CA 92253', 'landzai' ),
            ]
        );
        $repeater->add_control(
            'icon1',
            [
                'label' => __( 'Icon 1', 'landzai' ),
                'type' => \Elementor\Controls_Manager::ICONS,
                'default' => [
                    'value' => 'fas fa-star',
                    'library' => 'solid',
                ],
            ]
        );
        $repeater->add_control(
            'phone',
            [
                'label' => __( 'Phone', 'landzai' ),
                'type' => \Elementor\Controls_Manager::TEXTAREA,
                'default' => __( '+1-(281)-813 926<br/> +1-(281)-813 612', 'landzai' ),
            ]
        );
        $repeater->add_control(
            'icon2',
            [
                'label' => __( 'Icon 2', 'landzai' ),
                'type' => \Elementor\Controls_Manager::ICONS,
                'default' => [
                    'value' => 'fas fa-star',
                    'library' => 'solid',
                ],
            ]
        );
        $repeater->add_control(
            'mail',
            [
                'label' => __( 'Mail', 'landzai' ),
                'type' => \Elementor\Controls_Manager::TEXTAREA,
                'default' => __( 'support@landzai.com', 'landzai' ),
            ]
        );
        $repeater->add_control(
            'icon3',
            [
                'label' => __( 'Icon 3', 'landzai' ),
                'type' => \Elementor\Controls_Manager::ICONS,
                'default' => [
                    'value' => 'fas fa-star',
                    'library' => 'solid',
                ],
            ]
        );
        $this->add_control(
            'feature_list',
            [
                'label' => __( 'Features List', 'landzai' ),
                'type' => \Elementor\Controls_Manager::REPEATER,
                'fields' => $repeater->get_controls(),
                'default' => [
                    [
                        'title' => __( 'England', 'landzai' ),
                    ],
                    [
                        'title' => __( 'England', 'landzai' ),
                    ],
                    [
                        'title' => __( 'England', 'landzai' ),
                    ],
                    [
                        'title' => __( 'England', 'landzai' ),
                    ],
                    [
                        'title' => __( 'England', 'landzai' ),
                    ],
                ],
                'title_field' => '{{{ title }}}',
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
        $option = [
            'item' => $settings['slider_number'],
        ];
        ?>
        <section class="our-address bg-style1" data-landzai='<?php echo wp_json_encode($option)?>'>
         <?php echo '<div class="address-carousel owl-carousel position-r">';
            if ($settings['feature_list']) {
                foreach ($settings['feature_list'] as $feature) {
                    echo '<div class="address-item">
                <h2>'.$feature['title'].'</h2>
                <ul class="contact-info">
                    <li>';\Elementor\Icons_Manager::render_icon( $feature['icon1'], [ 'aria-hidden' => 'true' ] );echo' '.$feature['location'].'</li>
                    <li>';\Elementor\Icons_Manager::render_icon( $feature['icon2'], [ 'aria-hidden' => 'true' ] );echo' '.$feature['phone'].'</li>
                    <li>';\Elementor\Icons_Manager::render_icon( $feature['icon3'], [ 'aria-hidden' => 'true' ] );echo' '.$feature['mail'].'</li>
                </ul>
            </div>';
                }
            }
        echo '</div>            
        </section>
';
    }


}
Plugin::instance()->widgets_manager->register_widget_type( new address_slider() );