<?php
namespace Elementor;

if (!defined('ABSPATH')) 
    exit; // Exit if accessed directly


class landzai_contactus extends Widget_Base {

    public function get_name() {
        return 'landzai-contactus';
    }
 
    public function get_title() {
        return __('Contact Us', 'landzai');
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
                'default' => __( 'What Are The Reasons For Choosing Us?', 'landzai' ),
            ]
        );
        $this->add_control(
            'info',
            [
                'label' => __( 'Info', 'landzai' ),
                'type' => \Elementor\Controls_Manager::TEXTAREA,
                'default' => __( 'Lorem ipsum dolor sit amet, consetetur sadipscing elitr, 
                sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua.', 'landzai' ),
            ]
        );
        $this->add_control(
            'pera',
            [
                'label' => __( 'Pera', 'landzai' ),
                'type' => \Elementor\Controls_Manager::TEXTAREA,
                'default' => __( '<p class="sub-title w-100 mb-4">provident. Quidem voluptas eveniet quae consequuntur iusto aperiam porro vitae id iste ipsam, illum tempora a natus sapiente labore ab, expedita ratione. Quo, quod</p>
                            <p class="sub-title w-100 mb-4">provident. Quidem voluptas eveniet quae consequuntur iusto aperiam porro vitae id iste ipsam, illum tempora a natus sapiente labore.</p>
                            <p class="sub-title w-100">Lorem ipsum dolor sit amet consectetur adipisicing elit. Quae harum similique at possimus vel nesciunt autem amet voluptates sapiente cumque sit culpa voluptate modi.</p>', 'landzai' ),
            ]
        );
        $this->add_control(
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
            'form',
            [
                'label' => __( 'Form', 'landzai' ),
                'type' => \Elementor\Controls_Manager::TEXTAREA,
            ]
        );
        $this->add_control(
            'latitude',
            [
                'label' => __( 'Latitude', 'landzai' ),
                'type' => \Elementor\Controls_Manager::TEXT,
                'default' => __( '23.7947172', 'landzai' ),
            ]
        );
        $this->add_control(
            'longitude',
            [
                'label' => __( 'Longitude', 'landzai' ),
                'type' => \Elementor\Controls_Manager::TEXT,
                'default' => __( '90.3971412', 'landzai' ),
            ]
        );
        $this->add_control(
            'layout',
            [
                'label' => __( 'Layout', 'landzai' ),
                'type' => \Elementor\Controls_Manager::CHOOSE,
                'options' => [
                    'layout1' => [
                        'title' => __( 'One', 'landzai' ),
                        'icon' => 'eicon-form-horizontal',
                    ],
                    'layout2' => [
                        'title' => __( 'Two', 'landzai' ),
                        'icon' => 'eicon-post-slider',
                    ],
                    'layout3' => [
                        'title' => __( 'Three', 'landzai' ),
                        'icon' => 'eicon-post-slider',
                    ],
                ],
                'default' => 'layout1',
                'toggle' => true,
            ]
        );
        $repeater = new \Elementor\Repeater();
        $repeater->add_control(
            'heading',
            [
                'label' => __( 'Heading', 'landzai' ),
                'type' => \Elementor\Controls_Manager::TEXTAREA,
                'default' => __( 'Phone', 'landzai' ),
            ]
        );
        $repeater->add_control(
            'w_title',
            [
                'label' => __( 'Title', 'landzai' ),
                'type' => \Elementor\Controls_Manager::TEXTAREA,
                'default' => __( '125 Street West LN', 'landzai' ),
            ]
        );
        $repeater->add_control(
            's_title',
            [
                'label' => __( 'Sub Title', 'landzai' ),
                'type' => \Elementor\Controls_Manager::TEXTAREA,
                'default' => __( 'Las Vegas, NY 15236', 'landzai' ),
            ]
        );
        $repeater->add_control(
            'icon',
            [
                'label' => __( 'Icon', 'ahope' ),
                'type' => \Elementor\Controls_Manager::ICONS,
                'default' => [
                    'value' => 'fas fa-user',
                    'library' => 'solid',
                ],
            ]
        );
        $this->add_control(
            'work_list',
            [
                'label' => __( 'Work List', 'landzai' ),
                'type' => \Elementor\Controls_Manager::REPEATER,
                'fields' => $repeater->get_controls(),
                'default' => [
                    [
                        'w_title' => __( 'Las Vegas, NY 15236', 'landzai' ),
                    ],
                    [
                        'w_title' => __( 'Las Vegas, NY 15236', 'landzai' ),
                    ],
                    [
                        'w_title' => __( 'Las Vegas, NY 15236', 'landzai' ),
                    ],
                ],
                'title_field' => '{{{ w_title }}}',
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
Plugin::instance()->widgets_manager->register_widget_type( new landzai_contactus() );