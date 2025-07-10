<?php

/**
 * Title: Logos Showcase Dark
 * Slug: saaslauncher/logo-showcase-dark
 * Categories: saaslauncher-logos
 */
$saaslauncher_url = trailingslashit(get_template_directory_uri());
$saaslauncher_images = array(
    $saaslauncher_url . 'assets/images/logo_1.png',
    $saaslauncher_url . 'assets/images/logo_2.png',
    $saaslauncher_url . 'assets/images/logo_3.png',
    $saaslauncher_url . 'assets/images/logo_4.png',
    $saaslauncher_url . 'assets/images/logo_5.png',
    $saaslauncher_url . 'assets/images/logo_6.png',
    $saaslauncher_url . 'assets/images/logo_7.png'
);
?>
<!-- wp:group {"align":"full","metadata":{"categories":["saaslauncher"],"patternName":"saaslauncher/logo-showcase","name":"Logos Showcase"},"style":{"spacing":{"padding":{"top":"var:preset|spacing|80","bottom":"var:preset|spacing|50","left":"var:preset|spacing|40","right":"var:preset|spacing|40"},"margin":{"top":"0","bottom":"0"}},"border":{"bottom":{"width":"0px","style":"none"}}},"backgroundColor":"black-color","layout":{"type":"constrained","contentSize":"1360px"}} -->
<div class="wp-block-group alignfull has-black-color-background-color has-background" style="border-bottom-style:none;border-bottom-width:0px;margin-top:0;margin-bottom:0;padding-top:var(--wp--preset--spacing--80);padding-right:var(--wp--preset--spacing--40);padding-bottom:var(--wp--preset--spacing--50);padding-left:var(--wp--preset--spacing--40)"><!-- wp:gallery {"columns":7,"imageCrop":false,"linkTo":"none","className":"saaslauncher-brands is-style-enable-grayscale-mode-on-image","style":{"spacing":{"margin":{"top":"0px","left":"0","right":"0"},"blockGap":{"top":"0","left":"var:preset|spacing|50"}}}} -->
    <figure class="wp-block-gallery has-nested-images columns-7 saaslauncher-brands is-style-enable-grayscale-mode-on-image" style="margin-top:0px;margin-right:0;margin-left:0"><!-- wp:image {"id":12215,"sizeSlug":"large","linkDestination":"none"} -->
        <figure class="wp-block-image size-large"><img src="<?php echo esc_url($saaslauncher_images[0]) ?>" alt="" class="wp-image-12215" /></figure>
        <!-- /wp:image -->

        <!-- wp:image {"id":12229,"sizeSlug":"full","linkDestination":"none"} -->
        <figure class="wp-block-image size-full"><img src="<?php echo esc_url($saaslauncher_images[1]) ?>" alt="" class="wp-image-12229" /></figure>
        <!-- /wp:image -->

        <!-- wp:image {"id":12230,"sizeSlug":"full","linkDestination":"none"} -->
        <figure class="wp-block-image size-full"><img src="<?php echo esc_url($saaslauncher_images[2]) ?>" alt="" class="wp-image-12230" /></figure>
        <!-- /wp:image -->

        <!-- wp:image {"id":12231,"sizeSlug":"full","linkDestination":"none"} -->
        <figure class="wp-block-image size-full"><img src="<?php echo esc_url($saaslauncher_images[3]) ?>" alt="" class="wp-image-12231" /></figure>
        <!-- /wp:image -->

        <!-- wp:image {"id":12217,"sizeSlug":"large","linkDestination":"none"} -->
        <figure class="wp-block-image size-large"><img src="<?php echo esc_url($saaslauncher_images[4]) ?>" alt="" class="wp-image-12217" /></figure>
        <!-- /wp:image -->

        <!-- wp:image {"id":12214,"sizeSlug":"large","linkDestination":"none"} -->
        <figure class="wp-block-image size-large"><img src="<?php echo esc_url($saaslauncher_images[5]) ?>" alt="" class="wp-image-12214" /></figure>
        <!-- /wp:image -->

        <!-- wp:image {"id":12220,"sizeSlug":"large","linkDestination":"none"} -->
        <figure class="wp-block-image size-large"><img src="<?php echo esc_url($saaslauncher_images[6]) ?>" alt="" class="wp-image-12220" /></figure>
        <!-- /wp:image -->
    </figure>
    <!-- /wp:gallery -->
</div>
<!-- /wp:group -->