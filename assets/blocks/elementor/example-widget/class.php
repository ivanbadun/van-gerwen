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
            'label' => __('Заголовок', 'fwp'),
            'type' => Controls_Manager::TEXT,
            'default' => 'Make your power visible',
        ]);

        $this->add_control('subtitle', [
            'label' => __('Подзаголовок', 'fwp'),
            'type' => Controls_Manager::TEXTAREA,
            'description' => __('Используйте тег span для выделения красным', 'fwp'),
            'default' => 'Zet <span class="highlight">jouw kracht</span> aan het werk',
        ]);

        $this->add_control('main_image', [
            'label' => __('Главное фото сотрудника', 'fwp'),
            'type' => Controls_Manager::MEDIA,
            'default' => [
                'url' => \Elementor\Utils::get_placeholder_image_src(),
            ],
        ]);

        $this->end_controls_section();

        // Секция Кнопок
        $this->start_controls_section('section_buttons', [
            'label' => __('Кнопки', 'fwp'),
        ]);

        $this->add_control('btn_red_text', [
            'label' => __('Текст красной кнопки', 'fwp'),
            'type' => Controls_Manager::TEXT,
            'default' => 'Bekijk vacatures',
        ]);

        $this->add_control('btn_red_link', [
            'label' => __('Ссылка красной кнопки', 'fwp'),
            'type' => Controls_Manager::URL,
        ]);

        $this->add_control('btn_gray_text', [
            'label' => __('Текст серой кнопки', 'fwp'),
            'type' => Controls_Manager::TEXT,
            'default' => 'Leer ons kennen',
        ]);

        $this->add_control('btn_gray_link', [
            'label' => __('Ссылка серой кнопки', 'fwp'),
            'type' => Controls_Manager::URL,
        ]);

        $this->end_controls_section();

        // Секция Бейджа (Коллеги)
        $this->start_controls_section('section_badge', [
            'label' => __('Бейдж с коллегами', 'fwp'),
        ]);

        $this->add_control('badge_number', [
            'label' => __('Цифра', 'fwp'),
            'type' => Controls_Manager::TEXT,
            'default' => '30+',
        ]);

        $this->add_control('badge_text', [
            'label' => __('Текст под цифрой', 'fwp'),
            'type' => Controls_Manager::TEXT,
            'default' => 'Leuke collega\'s!',
        ]);

        $this->add_control('avatars', [
            'label' => __('Аватарки (выберите 3)', 'fwp'),
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
