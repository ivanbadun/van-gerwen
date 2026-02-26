<?php
/** @var array $args */
$title = $args['title'];
?>

<section class="hero-wrapper">
    <div class="hero-bg-shape"></div>

    <div class="container">
        <div class="hero-content">
            <nav class="breadcrumbs">
                <?php
                if ( function_exists('yoast_breadcrumb') ) {
                    yoast_breadcrumb( '<p id="breadcrumbs">','</p>' );
                } else (function_exists('rank_math_the_breadcrumbs')) {
                    rank_math_the_breadcrumbs()
                }
                ?>
            </nav>

            <h1><?php echo $title; ?></h1>
            <p><?php echo esc_html($args['excerpt']); ?></p>
        </div>

        <div class="hero-image-box">
            <?php if ($args['image']): ?>
                <img src="<?php echo esc_url($args['image']); ?>" alt="Hero Image">
            <?php endif; ?>
        </div>
    </div>
</section>
