<?php

/**
 * Title: Portfolio Gallery
 * Slug: saaslauncher/portfolio-gallery
 * Categories: saaslauncher-gallery
 */
$saaslauncher_url = trailingslashit(get_template_directory_uri());
$saaslauncher_images = array(
    $saaslauncher_url . 'assets/images/work_3.png',
    $saaslauncher_url . 'assets/images/work_4.png',
    $saaslauncher_url . 'assets/images/work_5.png',
    $saaslauncher_url . 'assets/images/work_6.png',
);
?>
<!-- wp:group {"align":"full","style":{"spacing":{"padding":{"right":"var:preset|spacing|40","left":"var:preset|spacing|40","top":"var:preset|spacing|80","bottom":"var:preset|spacing|80"},"margin":{"top":"0","bottom":"0"}}},"backgroundColor":"dark-shade","layout":{"type":"constrained","contentSize":"1180px"}} -->
<div class="wp-block-group alignfull has-dark-shade-background-color has-background" style="margin-top:0;margin-bottom:0;padding-top:var(--wp--preset--spacing--80);padding-right:var(--wp--preset--spacing--40);padding-bottom:var(--wp--preset--spacing--80);padding-left:var(--wp--preset--spacing--40)"><!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|40","margin":{"top":"0","bottom":"60px"}}},"layout":{"type":"constrained","justifyContent":"left","contentSize":"680px"}} -->
    <div class="wp-block-group" style="margin-top:0;margin-bottom:60px"><!-- wp:heading {"level":1,"style":{"elements":{"link":{"color":{"text":"var:preset|color|background"}}},"typography":{"fontStyle":"normal","fontWeight":"500"}},"textColor":"background","fontSize":"xxx-large"} -->
        <h1 class="wp-block-heading has-background-color has-text-color has-link-color has-xxx-large-font-size" style="font-style:normal;font-weight:500"><?php esc_html_e('Portfolio Gallery', 'saaslauncher') ?></h1>
        <!-- /wp:heading -->

        <!-- wp:paragraph {"style":{"elements":{"link":{"color":{"text":"var:preset|color|foreground-alt"}}}},"textColor":"foreground-alt"} -->
        <p class="has-foreground-alt-color has-text-color has-link-color"><?php esc_html_e('Lorem ipsum is placeholder text commonly used in the graphic, print, and publishing industries for previewing layouts and visual mockups.', 'saaslauncher') ?></p>
        <!-- /wp:paragraph -->
    </div>
    <!-- /wp:group -->

    <!-- wp:columns {"style":{"spacing":{"blockGap":{"left":"40px"},"margin":{"top":"40px"}}}} -->
    <div class="wp-block-columns" style="margin-top:40px"><!-- wp:column -->
        <div class="wp-block-column"><!-- wp:cover {"url":"<?php echo esc_url($saaslauncher_images[0]) ?>","id":8,"dimRatio":0,"customOverlayColor":"#a59f92","isUserOverlayColor":false,"contentPosition":"bottom left","isDark":false,"sizeSlug":"full","className":"is-style-saaslauncher-cover-hover-effect","style":{"spacing":{"padding":{"right":"28px","left":"28px","top":"24px","bottom":"24px"}}},"layout":{"type":"constrained"}} -->
            <div class="wp-block-cover is-light has-custom-content-position is-position-bottom-left is-style-saaslauncher-cover-hover-effect" style="padding-top:24px;padding-right:28px;padding-bottom:24px;padding-left:28px"><img class="wp-block-cover__image-background wp-image-8 size-full" alt="" src="<?php echo esc_url($saaslauncher_images[0]) ?>" data-object-fit="cover" /><span aria-hidden="true" class="wp-block-cover__background has-background-dim-0 has-background-dim" style="background-color:#a59f92"></span>
                <div class="wp-block-cover__inner-container"><!-- wp:heading {"textAlign":"center","level":3,"style":{"elements":{"link":{"color":{"text":"var:preset|color|background"}}},"typography":{"fontStyle":"normal","fontWeight":"500"}},"textColor":"background","fontSize":"large"} -->
                    <h3 class="wp-block-heading has-text-align-center has-background-color has-text-color has-link-color has-large-font-size" style="font-style:normal;font-weight:500"><?php esc_html_e('Branding Strategy', 'saaslauncher') ?></h3>
                    <!-- /wp:heading -->
                </div>
            </div>
            <!-- /wp:cover -->
        </div>
        <!-- /wp:column -->

        <!-- wp:column -->
        <div class="wp-block-column"><!-- wp:cover {"url":"<?php echo esc_url($saaslauncher_images[1]) ?>","id":9,"dimRatio":0,"customOverlayColor":"#bdbabb","isUserOverlayColor":false,"contentPosition":"bottom left","isDark":false,"sizeSlug":"full","className":"is-style-saaslauncher-cover-hover-effect","style":{"spacing":{"padding":{"right":"28px","left":"28px","top":"24px","bottom":"24px"}}},"layout":{"type":"constrained"}} -->
            <div class="wp-block-cover is-light has-custom-content-position is-position-bottom-left is-style-saaslauncher-cover-hover-effect" style="padding-top:24px;padding-right:28px;padding-bottom:24px;padding-left:28px"><img class="wp-block-cover__image-background wp-image-9 size-full" alt="" src="<?php echo esc_url($saaslauncher_images[1]) ?>" data-object-fit="cover" /><span aria-hidden="true" class="wp-block-cover__background has-background-dim-0 has-background-dim" style="background-color:#bdbabb"></span>
                <div class="wp-block-cover__inner-container"><!-- wp:heading {"textAlign":"center","level":3,"style":{"elements":{"link":{"color":{"text":"var:preset|color|background"}}},"typography":{"fontStyle":"normal","fontWeight":"500"}},"textColor":"background","fontSize":"large"} -->
                    <h3 class="wp-block-heading has-text-align-center has-background-color has-text-color has-link-color has-large-font-size" style="font-style:normal;font-weight:500"><?php esc_html_e('Color Concepts', 'saaslauncher') ?></h3>
                    <!-- /wp:heading -->
                </div>
            </div>
            <!-- /wp:cover -->
        </div>
        <!-- /wp:column -->
    </div>
    <!-- /wp:columns -->

    <!-- wp:columns {"style":{"spacing":{"blockGap":{"left":"40px"},"margin":{"top":"40px"}}}} -->
    <div class="wp-block-columns" style="margin-top:40px"><!-- wp:column -->
        <div class="wp-block-column"><!-- wp:cover {"url":"<?php echo esc_url($saaslauncher_images[2]) ?>","id":10,"dimRatio":0,"customOverlayColor":"#5a6270","isUserOverlayColor":false,"contentPosition":"bottom left","sizeSlug":"full","className":"is-style-saaslauncher-cover-hover-effect","style":{"spacing":{"padding":{"right":"28px","left":"28px","top":"24px","bottom":"24px"}}},"layout":{"type":"constrained"}} -->
            <div class="wp-block-cover has-custom-content-position is-position-bottom-left is-style-saaslauncher-cover-hover-effect" style="padding-top:24px;padding-right:28px;padding-bottom:24px;padding-left:28px"><img class="wp-block-cover__image-background wp-image-10 size-full" alt="" src="<?php echo esc_url($saaslauncher_images[2]) ?>" data-object-fit="cover" /><span aria-hidden="true" class="wp-block-cover__background has-background-dim-0 has-background-dim" style="background-color:#5a6270"></span>
                <div class="wp-block-cover__inner-container"><!-- wp:heading {"textAlign":"center","level":3,"style":{"elements":{"link":{"color":{"text":"var:preset|color|background"}}},"typography":{"fontStyle":"normal","fontWeight":"500"}},"textColor":"background","fontSize":"large"} -->
                    <h3 class="wp-block-heading has-text-align-center has-background-color has-text-color has-link-color has-large-font-size" style="font-style:normal;font-weight:500"><?php esc_html_e('CRM Integration', 'saaslauncher') ?></h3>
                    <!-- /wp:heading -->
                </div>
            </div>
            <!-- /wp:cover -->
        </div>
        <!-- /wp:column -->

        <!-- wp:column -->
        <div class="wp-block-column"><!-- wp:cover {"url":"<?php echo esc_url($saaslauncher_images[3]) ?>","id":11,"dimRatio":0,"customOverlayColor":"#d3c9cc","isUserOverlayColor":false,"contentPosition":"bottom left","isDark":false,"sizeSlug":"full","className":"is-style-saaslauncher-cover-hover-effect","style":{"spacing":{"padding":{"right":"28px","left":"28px","top":"24px","bottom":"24px"}}},"layout":{"type":"constrained"}} -->
            <div class="wp-block-cover is-light has-custom-content-position is-position-bottom-left is-style-saaslauncher-cover-hover-effect" style="padding-top:24px;padding-right:28px;padding-bottom:24px;padding-left:28px"><img class="wp-block-cover__image-background wp-image-11 size-full" alt="" src="<?php echo esc_url($saaslauncher_images[3]) ?>" data-object-fit="cover" /><span aria-hidden="true" class="wp-block-cover__background has-background-dim-0 has-background-dim" style="background-color:#d3c9cc"></span>
                <div class="wp-block-cover__inner-container"><!-- wp:heading {"textAlign":"center","level":3,"style":{"elements":{"link":{"color":{"text":"var:preset|color|background"}}},"typography":{"fontStyle":"normal","fontWeight":"500"}},"textColor":"background","fontSize":"large"} -->
                    <h3 class="wp-block-heading has-text-align-center has-background-color has-text-color has-link-color has-large-font-size" style="font-style:normal;font-weight:500"><?php esc_html_e('Marketing App', 'saaslauncher') ?></h3>
                    <!-- /wp:heading -->
                </div>
            </div>
            <!-- /wp:cover -->
        </div>
        <!-- /wp:column -->
    </div>
    <!-- /wp:columns -->
</div>
<!-- /wp:group -->