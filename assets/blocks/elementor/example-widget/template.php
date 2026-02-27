<?php
/**
 * @var array $settings
 */
?>

<section class="hero-section">
    <div class="zz-index">
        <div class="hero-header">
            <h1><?php echo esc_html($settings['title']); ?></h1>
            <h2><?php echo wp_kses_post($settings['subtitle']); ?></h2>
        </div>

        <div class="button-group">
            <?php if (!empty($settings['btn_red_text'])): ?>
                <a href="<?php echo esc_url($settings['btn_red_link']['url']); ?>" class="btn btn-red">
                    <?php echo esc_html($settings['btn_red_text']); ?>
                </a>
            <?php endif; ?>

            <?php if (!empty($settings['btn_gray_text'])): ?>
                <a href="<?php echo esc_url($settings['btn_gray_link']['url']); ?>" class="btn btn-gray">
                    <?php echo esc_html($settings['btn_gray_text']); ?>
                </a>
            <?php endif; ?>
        </div>
    </div>

    <div class="visual-container">
        <div class="circle-bg"></div>

        <?php if (!empty($settings['main_image']['url'])): ?>
            <img src="<?php echo esc_url($settings['main_image']['url']); ?>" alt="Employee" class="hero-image">
        <?php endif; ?>

        <div class="colleagues-badge">
            <div class="avatars">
                <?php
                if (!empty($settings['avatars'])) {
                    foreach ( array_slice($settings['avatars'], 0, 3) as $image ) {
                        echo '<img src="' . esc_url($image['url']) . '" alt="Colleague">';
                    }
                }
                ?>
            </div>
            <div class="badge-text">
                <strong><?php echo esc_html($settings['badge_number']); ?></strong>
                <span><?php echo esc_html($settings['badge_text']); ?></span>
            </div>
        </div>
    </div>
</section>
