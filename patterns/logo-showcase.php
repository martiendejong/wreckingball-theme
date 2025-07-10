<?php

/**
 * Title: Logos Showcase
 * Slug: saaslauncher/logo-showcase
 * Categories: saaslauncher-logos
 */
$saaslauncher_url = trailingslashit(get_template_directory_uri());
$saaslauncher_images = array(
    $saaslauncher_url . 'assets/images/logo_101.png',
    $saaslauncher_url . 'assets/images/logo_102.png',
    $saaslauncher_url . 'assets/images/logo_103.png',
    $saaslauncher_url . 'assets/images/logo_104.png',
    $saaslauncher_url . 'assets/images/logo_105.png',
    $saaslauncher_url . 'assets/images/logo_106.png',
    $saaslauncher_url . 'assets/images/logo_107.png'
);
?>
<!-- wp:group {"metadata":{"categories":["saaslauncher"],"patternName":"saaslauncher/logo-showcase","name":"Logos Showcase"},"align":"full","style":{"spacing":{"padding":{"top":"var:preset|spacing|70","bottom":"5rem","left":"var:preset|spacing|40","right":"var:preset|spacing|40"},"margin":{"top":"0","bottom":"0"}},"border":{"bottom":{"color":"var:preset|color|border-color","width":"1px"},"top":[],"right":[],"left":[]}},"backgroundColor":"black-color","layout":{"type":"constrained","contentSize":"1180px"}} -->
<div class="wp-block-group alignfull has-black-color-background-color has-background" style="border-bottom-color:var(--wp--preset--color--border-color);border-bottom-width:1px;margin-top:0;margin-bottom:0;padding-top:var(--wp--preset--spacing--70);padding-right:var(--wp--preset--spacing--40);padding-bottom:5rem;padding-left:var(--wp--preset--spacing--40)"><!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|40"}},"layout":{"type":"constrained","contentSize":"640px"}} -->
    <div class="wp-block-group"><!-- wp:heading {"textAlign":"center","level":1,"style":{"typography":{"fontStyle":"normal","fontWeight":"400","lineHeight":"1.7"},"spacing":{"margin":{"top":"0","bottom":"0"}},"elements":{"link":{"color":{"text":"var:preset|color|light-color"}}}},"textColor":"light-color","fontSize":"medium"} -->
        <h1 class="wp-block-heading has-text-align-center has-light-color-color has-text-color has-link-color has-medium-font-size" style="margin-top:0;margin-bottom:0;font-style:normal;font-weight:400;line-height:1.7"><?php esc_html_e('Recognized and Trusted by Top Companies', 'saaslauncher') ?></h1>
        <!-- /wp:heading -->
    </div>
    <!-- /wp:group -->

    <!-- wp:group {"style":{"spacing":{"margin":{"top":"60px","bottom":"0"},"padding":{"bottom":"0px"}},"border":{"bottom":{"width":"0px","style":"none"},"top":[],"right":[],"left":[]}},"layout":{"type":"constrained","contentSize":"100%"}} -->
    <div class="wp-block-group" style="border-bottom-style:none;border-bottom-width:0px;margin-top:60px;margin-bottom:0;padding-bottom:0px"><!-- wp:gallery {"columns":7,"imageCrop":false,"linkTo":"none","className":"saaslauncher-brands is-style-enable-grayscale-mode-on-image","style":{"spacing":{"margin":{"top":"0px"},"blockGap":{"left":"74px"}}}} -->
        <figure class="wp-block-gallery has-nested-images columns-7 saaslauncher-brands is-style-enable-grayscale-mode-on-image" style="margin-top:0px"><!-- wp:image {"id":335,"sizeSlug":"large","linkDestination":"none","align":"center"} -->
            <figure class="wp-block-image aligncenter size-large"><img src="<?php echo esc_url($saaslauncher_images[0]) ?>" alt="" class="wp-image-335" /></figure>
            <!-- /wp:image -->

            <!-- wp:image {"id":338,"sizeSlug":"large","linkDestination":"none","align":"center"} -->
            <figure class="wp-block-image aligncenter size-large"><img src="<?php echo esc_url($saaslauncher_images[1]) ?>" alt="" class="wp-image-338" /></figure>
            <!-- /wp:image -->

            <!-- wp:image {"id":337,"sizeSlug":"large","linkDestination":"none","align":"center"} -->
            <figure class="wp-block-image aligncenter size-large"><img src="<?php echo esc_url($saaslauncher_images[2]) ?>" alt="" class="wp-image-337" /></figure>
            <!-- /wp:image -->

            <!-- wp:image {"id":340,"sizeSlug":"large","linkDestination":"none","align":"center"} -->
            <figure class="wp-block-image aligncenter size-large"><img src="<?php echo esc_url($saaslauncher_images[3]) ?>" alt="" class="wp-image-340" /></figure>
            <!-- /wp:image -->

            <!-- wp:image {"id":336,"sizeSlug":"large","linkDestination":"none","align":"center"} -->
            <figure class="wp-block-image aligncenter size-large"><img src="<?php echo esc_url($saaslauncher_images[4]) ?>" alt="" class="wp-image-336" /></figure>
            <!-- /wp:image -->

            <!-- wp:image {"id":339,"sizeSlug":"large","linkDestination":"none","align":"center"} -->
            <figure class="wp-block-image aligncenter size-large"><img src="<?php echo esc_url($saaslauncher_images[5]) ?>" alt="" class="wp-image-339" /></figure>
            <!-- /wp:image -->

            <!-- wp:image {"id":341,"sizeSlug":"large","linkDestination":"none","align":"center"} -->
            <figure class="wp-block-image aligncenter size-large"><img src="<?php echo esc_url($saaslauncher_images[6]) ?>" alt="" class="wp-image-341" /></figure>
            <!-- /wp:image -->
        </figure>
        <!-- /wp:gallery -->
    </div>
    <!-- /wp:group -->
</div>
<!-- /wp:group -->