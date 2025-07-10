<?php

/**
 * Title: Services List Light
 * Slug: saaslauncher/services-list-light
 * Categories: saaslauncher-service
 */
$saaslauncher_url = trailingslashit(get_template_directory_uri());
$saaslauncher_images = array(
    $saaslauncher_url . 'assets/images/round_arrow.png',
);
?>
<!-- wp:group {"align":"full","style":{"spacing":{"padding":{"right":"var:preset|spacing|40","left":"var:preset|spacing|40","top":"var:preset|spacing|80","bottom":"var:preset|spacing|80"}}},"backgroundColor":"light-color","layout":{"type":"constrained","contentSize":"1260px"}} -->
<div class="wp-block-group alignfull has-light-color-background-color has-background" style="padding-top:var(--wp--preset--spacing--80);padding-right:var(--wp--preset--spacing--40);padding-bottom:var(--wp--preset--spacing--80);padding-left:var(--wp--preset--spacing--40)"><!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|40","margin":{"bottom":"64px"}}},"layout":{"type":"constrained","contentSize":"640px","justifyContent":"left"}} -->
    <div class="wp-block-group" style="margin-bottom:64px"><!-- wp:group {"layout":{"type":"flex","flexWrap":"nowrap"}} -->
        <div class="wp-block-group"><!-- wp:group {"style":{"spacing":{"padding":{"top":"5px","bottom":"5px","left":"10px","right":"10px"}},"border":{"radius":"50px","color":"#d9d9d9","width":"1px"}},"layout":{"type":"constrained"}} -->
            <div class="wp-block-group has-border-color" style="border-color:#d9d9d9;border-width:1px;border-radius:50px;padding-top:5px;padding-right:10px;padding-bottom:5px;padding-left:10px"><!-- wp:paragraph {"style":{"typography":{"textTransform":"uppercase"}},"fontSize":"small"} -->
                <p class="has-small-font-size" style="text-transform:uppercase"><?php esc_html_e('What we Offer', 'saaslauncher') ?></p>
                <!-- /wp:paragraph -->
            </div>
            <!-- /wp:group -->
        </div>
        <!-- /wp:group -->

        <!-- wp:heading {"level":1,"style":{"typography":{"lineHeight":"1.3"}}} -->
        <h1 class="wp-block-heading" style="line-height:1.3"><?php esc_html_e('What Services We Provide.', 'saaslauncher') ?></h1>
        <!-- /wp:heading -->
    </div>
    <!-- /wp:group -->

    <!-- wp:columns {"verticalAlignment":"center","style":{"spacing":{"blockGap":{"left":"64px"},"margin":{"top":"40px","bottom":"0"},"padding":{"bottom":"40px"}},"border":{"bottom":{"color":"#e4e4e4","width":"1px"},"top":{},"right":{},"left":{}}}} -->
    <div class="wp-block-columns are-vertically-aligned-center" style="border-bottom-color:#e4e4e4;border-bottom-width:1px;margin-top:40px;margin-bottom:0;padding-bottom:40px"><!-- wp:column {"verticalAlignment":"center","width":"60px"} -->
        <div class="wp-block-column is-vertically-aligned-center" style="flex-basis:60px"><!-- wp:heading {"style":{"typography":{"fontSize":"28px"}}} -->
            <h2 class="wp-block-heading" style="font-size:28px"><?php esc_html_e('01', 'saaslauncher') ?></h2>
            <!-- /wp:heading -->
        </div>
        <!-- /wp:column -->

        <!-- wp:column {"verticalAlignment":"center","width":"30%"} -->
        <div class="wp-block-column is-vertically-aligned-center" style="flex-basis:30%"><!-- wp:heading {"style":{"spacing":{"margin":{"top":"0","bottom":"0"}}}} -->
            <h2 class="wp-block-heading" style="margin-top:0;margin-bottom:0"><?php esc_html_e('Branding', 'saaslauncher') ?></h2>
            <!-- /wp:heading -->
        </div>
        <!-- /wp:column -->

        <!-- wp:column {"verticalAlignment":"center"} -->
        <div class="wp-block-column is-vertically-aligned-center"><!-- wp:paragraph {"fontSize":"medium"} -->
            <p class="has-medium-font-size"><?php esc_html_e('Lorem ipsum dolor sit amet consectetur. Vel aliquam feugiat proin tincidunt feugiat viverra. Commodo etiam', 'saaslauncher') ?></p>
            <!-- /wp:paragraph -->
        </div>
        <!-- /wp:column -->

        <!-- wp:column {"verticalAlignment":"center","width":"60px"} -->
        <div class="wp-block-column is-vertically-aligned-center" style="flex-basis:60px"><!-- wp:image {"lightbox":{"enabled":false},"id":13021,"width":"60px","height":"60px","scale":"contain","sizeSlug":"full","linkDestination":"custom","className":"is-style-saaslauncher-image-hover-zoom","style":{"spacing":{"margin":{"top":"0","bottom":"0"}}}} -->
            <figure class="wp-block-image size-full is-resized is-style-saaslauncher-image-hover-zoom" style="margin-top:0;margin-bottom:0"><a href="#"><img src="<?php echo esc_url($saaslauncher_images[0]) ?>" alt="" class="wp-image-13021" style="object-fit:contain;width:60px;height:60px" /></a></figure>
            <!-- /wp:image -->
        </div>
        <!-- /wp:column -->
    </div>
    <!-- /wp:columns -->

    <!-- wp:columns {"verticalAlignment":"center","style":{"spacing":{"blockGap":{"left":"64px"},"margin":{"top":"40px","bottom":"0"},"padding":{"bottom":"40px"}},"border":{"bottom":{"color":"#e4e4e4","width":"1px"},"top":{},"right":{},"left":{}}}} -->
    <div class="wp-block-columns are-vertically-aligned-center" style="border-bottom-color:#e4e4e4;border-bottom-width:1px;margin-top:40px;margin-bottom:0;padding-bottom:40px"><!-- wp:column {"verticalAlignment":"center","width":"60px"} -->
        <div class="wp-block-column is-vertically-aligned-center" style="flex-basis:60px"><!-- wp:heading {"style":{"typography":{"fontSize":"28px"}}} -->
            <h2 class="wp-block-heading" style="font-size:28px"><?php esc_html_e('02', 'saaslauncher') ?></h2>
            <!-- /wp:heading -->
        </div>
        <!-- /wp:column -->

        <!-- wp:column {"verticalAlignment":"center","width":"30%"} -->
        <div class="wp-block-column is-vertically-aligned-center" style="flex-basis:30%"><!-- wp:heading {"style":{"spacing":{"margin":{"top":"0","bottom":"0"}}}} -->
            <h2 class="wp-block-heading" style="margin-top:0;margin-bottom:0"><?php esc_html_e('Digital Marketing', 'saaslauncher') ?></h2>
            <!-- /wp:heading -->
        </div>
        <!-- /wp:column -->

        <!-- wp:column {"verticalAlignment":"center"} -->
        <div class="wp-block-column is-vertically-aligned-center"><!-- wp:paragraph {"fontSize":"medium"} -->
            <p class="has-medium-font-size"><?php esc_html_e('Lorem ipsum dolor sit amet consectetur. Vel aliquam feugiat proin tincidunt feugiat viverra. Commodo etiam', 'saaslauncher') ?></p>
            <!-- /wp:paragraph -->
        </div>
        <!-- /wp:column -->

        <!-- wp:column {"verticalAlignment":"center","width":"60px"} -->
        <div class="wp-block-column is-vertically-aligned-center" style="flex-basis:60px"><!-- wp:image {"lightbox":{"enabled":false},"id":13021,"width":"60px","height":"60px","scale":"contain","sizeSlug":"full","linkDestination":"custom","className":"is-style-saaslauncher-image-hover-zoom","style":{"spacing":{"margin":{"top":"0","bottom":"0"}}}} -->
            <figure class="wp-block-image size-full is-resized is-style-saaslauncher-image-hover-zoom" style="margin-top:0;margin-bottom:0"><a href="#"><img src="<?php echo esc_url($saaslauncher_images[0]) ?>" alt="" class="wp-image-13021" style="object-fit:contain;width:60px;height:60px" /></a></figure>
            <!-- /wp:image -->
        </div>
        <!-- /wp:column -->
    </div>
    <!-- /wp:columns -->

    <!-- wp:columns {"verticalAlignment":"center","style":{"spacing":{"blockGap":{"left":"64px"},"margin":{"top":"40px","bottom":"0"},"padding":{"bottom":"40px"}},"border":{"bottom":{"color":"#e4e4e4","width":"1px"},"top":{},"right":{},"left":{}}}} -->
    <div class="wp-block-columns are-vertically-aligned-center" style="border-bottom-color:#e4e4e4;border-bottom-width:1px;margin-top:40px;margin-bottom:0;padding-bottom:40px"><!-- wp:column {"verticalAlignment":"center","width":"60px"} -->
        <div class="wp-block-column is-vertically-aligned-center" style="flex-basis:60px"><!-- wp:heading {"style":{"typography":{"fontSize":"28px"}}} -->
            <h2 class="wp-block-heading" style="font-size:28px"><?php esc_html_e('03', 'saaslauncher') ?></h2>
            <!-- /wp:heading -->
        </div>
        <!-- /wp:column -->

        <!-- wp:column {"verticalAlignment":"center","width":"30%"} -->
        <div class="wp-block-column is-vertically-aligned-center" style="flex-basis:30%"><!-- wp:heading {"style":{"spacing":{"margin":{"top":"0","bottom":"0"}}}} -->
            <h2 class="wp-block-heading" style="margin-top:0;margin-bottom:0"><?php esc_html_e('Motion Graphics', 'saaslauncher') ?></h2>
            <!-- /wp:heading -->
        </div>
        <!-- /wp:column -->

        <!-- wp:column {"verticalAlignment":"center"} -->
        <div class="wp-block-column is-vertically-aligned-center"><!-- wp:paragraph {"fontSize":"medium"} -->
            <p class="has-medium-font-size"><?php esc_html_e('Lorem ipsum dolor sit amet consectetur. Vel aliquam feugiat proin tincidunt feugiat viverra. Commodo etiam', 'saaslauncher') ?></p>
            <!-- /wp:paragraph -->
        </div>
        <!-- /wp:column -->

        <!-- wp:column {"verticalAlignment":"center","width":"60px"} -->
        <div class="wp-block-column is-vertically-aligned-center" style="flex-basis:60px"><!-- wp:image {"lightbox":{"enabled":false},"id":13021,"width":"60px","height":"60px","scale":"contain","sizeSlug":"full","linkDestination":"custom","className":"is-style-saaslauncher-image-hover-zoom","style":{"spacing":{"margin":{"top":"0","bottom":"0"}}}} -->
            <figure class="wp-block-image size-full is-resized is-style-saaslauncher-image-hover-zoom" style="margin-top:0;margin-bottom:0"><a href="#"><img src="<?php echo esc_url($saaslauncher_images[0]) ?>" alt="" class="wp-image-13021" style="object-fit:contain;width:60px;height:60px" /></a></figure>
            <!-- /wp:image -->
        </div>
        <!-- /wp:column -->
    </div>
    <!-- /wp:columns -->

    <!-- wp:columns {"verticalAlignment":"center","style":{"spacing":{"blockGap":{"left":"64px"},"margin":{"top":"40px","bottom":"0"},"padding":{"bottom":"40px"}},"border":{"bottom":{"color":"#e4e4e4","width":"1px"},"top":{},"right":{},"left":{}}}} -->
    <div class="wp-block-columns are-vertically-aligned-center" style="border-bottom-color:#e4e4e4;border-bottom-width:1px;margin-top:40px;margin-bottom:0;padding-bottom:40px"><!-- wp:column {"verticalAlignment":"center","width":"60px"} -->
        <div class="wp-block-column is-vertically-aligned-center" style="flex-basis:60px"><!-- wp:heading {"style":{"typography":{"fontSize":"28px"}}} -->
            <h2 class="wp-block-heading" style="font-size:28px"><?php esc_html_e('04', 'saaslauncher') ?></h2>
            <!-- /wp:heading -->
        </div>
        <!-- /wp:column -->

        <!-- wp:column {"verticalAlignment":"center","width":"30%"} -->
        <div class="wp-block-column is-vertically-aligned-center" style="flex-basis:30%"><!-- wp:heading {"style":{"spacing":{"margin":{"top":"0","bottom":"0"}}}} -->
            <h2 class="wp-block-heading" style="margin-top:0;margin-bottom:0"><?php esc_html_e('UI/UX', 'saaslauncher') ?></h2>
            <!-- /wp:heading -->
        </div>
        <!-- /wp:column -->

        <!-- wp:column {"verticalAlignment":"center"} -->
        <div class="wp-block-column is-vertically-aligned-center"><!-- wp:paragraph {"fontSize":"medium"} -->
            <p class="has-medium-font-size"><?php esc_html_e('Lorem ipsum dolor sit amet consectetur. Vel aliquam feugiat proin tincidunt feugiat viverra. Commodo etiam', 'saaslauncher') ?></p>
            <!-- /wp:paragraph -->
        </div>
        <!-- /wp:column -->

        <!-- wp:column {"verticalAlignment":"center","width":"60px"} -->
        <div class="wp-block-column is-vertically-aligned-center" style="flex-basis:60px"><!-- wp:image {"lightbox":{"enabled":false},"id":13021,"width":"60px","height":"60px","scale":"contain","sizeSlug":"full","linkDestination":"custom","className":"is-style-saaslauncher-image-hover-zoom","style":{"spacing":{"margin":{"top":"0","bottom":"0"}}}} -->
            <figure class="wp-block-image size-full is-resized is-style-saaslauncher-image-hover-zoom" style="margin-top:0;margin-bottom:0"><a href="#"><img src="<?php echo esc_url($saaslauncher_images[0]) ?>" alt="" class="wp-image-13021" style="object-fit:contain;width:60px;height:60px" /></a></figure>
            <!-- /wp:image -->
        </div>
        <!-- /wp:column -->
    </div>
    <!-- /wp:columns -->
</div>
<!-- /wp:group -->