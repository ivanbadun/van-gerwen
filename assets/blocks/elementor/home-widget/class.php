<?php
namespace elementorWidget;

use Elementor\Controls_Manager;
use Elementor\Widget_Base;

class HomeWidget extends Widget_Base {

    public function get_name() { return 'home_widget'; }
    public function get_title() { return __('Home Hero Custom', 'fwp'); }
    public function get_icon() { return 'eicon-image-bold'; }
    public function get_categories() { return ['general']; }

    protected function render() {
        $settings = $this->get_settings_for_display();
        $post_id = get_the_ID();

        $args = [
            'title'          => get_the_title($post_id),
            'excerpt'        => get_the_excerpt($post_id),
            'image'          => get_the_post_thumbnail_url($post_id, 'full_hd'),
        ];

        include( __DIR__ . '/template.php' );
    }
}
