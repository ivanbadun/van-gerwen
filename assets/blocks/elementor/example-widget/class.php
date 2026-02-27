<?php
namespace elementorWidget;

use Elementor\Controls_Manager;
use Elementor\Widget_Base;

class ExampleWidget extends Widget_Base {

    public function get_name() { return 'power_hero_widget'; }
    public function get_title() { return __('Power Hero Widget', 'fwp'); }
    public function get_icon() { return 'eicon- grows'; }
    public function get_categories() { return ['general']; }

    protected function _register_controls() {
        // Секция Текста
        $this->start_controls_section('section_content', [
            'label' => __('Контент', 'fwp'),
        ]);

        $this->add_control('title', [
            'label' => __('Header', 'fwp'),
            'type' => Controls_Manager::TEXT,
            'default' => '',
        ]);

        $this->add_control('subtitle', [
            'label' => __('Heading 2', 'fwp'),
            'type' => Controls_Manager::TEXTAREA,
            'default' => '',
        ]);

        $this->add_control('main_image', [
            'label' => __('Main photo', 'fwp'),
            'type' => Controls_Manager::MEDIA,
            'default' => [
                'url' => \Elementor\Utils::get_placeholder_image_src(),
            ],
        ]);

        $this->end_controls_section();

        // Секция Кнопок
        $this->start_controls_section('section_buttons', [
            'label' => __('Buttons', 'fwp'),
        ]);

        $this->add_control('btn_red_text', [
            'label' => __('Red Button Text', 'fwp'),
            'type' => Controls_Manager::TEXT,
        ]);

        $this->add_control('btn_red_link', [
            'label' => __('Red Button Link', 'fwp'),
            'type' => Controls_Manager::URL,
        ]);

        $this->add_control('btn_gray_text', [
            'label' => __('Gray Button Text', 'fwp'),
            'type' => Controls_Manager::TEXT,
            'default' => 'Leer ons kennen',
        ]);

        $this->add_control('btn_gray_link', [
            'label' => __('Gray Button Link', 'fwp'),
            'type' => Controls_Manager::URL,
        ]);

        $this->end_controls_section();

        // Секция Бейджа (Коллеги)
        $this->start_controls_section('section_badge', [
            'label' => __('Badge Collegas', 'fwp'),
        ]);

        $this->add_control('badge_number', [
            'label' => __('Number', 'fwp'),
            'type' => Controls_Manager::TEXT,
        ]);

        $this->add_control('badge_text', [
            'label' => __('Text under number', 'fwp'),
            'type' => Controls_Manager::TEXT,
        ]);

        $this->add_control('avatars', [
            'label' => __('Avatars', 'fwp'),
            'type' => Controls_Manager::GALLERY,
            'default' => [],
        ]);

        $this->end_controls_section();
    }

    protected function render() {
        $settings = $this->get_settings_for_display();
        include( __DIR__ . '/template.php' );
    }
}
