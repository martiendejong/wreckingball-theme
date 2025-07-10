<?php

/**
 * Title: Testimonials Card Layout
 * Slug: saaslauncher/testimonials-card-layout
 * Categories: saaslauncher-testimonial
 */
$saaslauncher_url = trailingslashit(get_template_directory_uri());
$saaslauncher_images = array(
    $saaslauncher_url . 'assets/images/rating_star.png',
    $saaslauncher_url . 'assets/images/testimonial_1.jpg',
    $saaslauncher_url . 'assets/images/team_2.jpg',
);
?>
<!-- wp:group {"metadata":{"categories":["saaslauncher-testimonial"],"patternName":"saaslauncher/testimonials-card-layout","name":"Testimonials Card Layout"},"align":"full","style":{"spacing":{"padding":{"right":"var:preset|spacing|40","left":"var:preset|spacing|40","top":"var:preset|spacing|80","bottom":"var:preset|spacing|80"},"margin":{"top":"0","bottom":"0"}},"border":{"top":{"style":"none","width":"0px"},"right":[],"bottom":[],"left":[]}},"backgroundColor":"black-color","layout":{"type":"constrained","contentSize":"1180px"}} -->
<div class="wp-block-group alignfull has-black-color-background-color has-background" style="border-top-style:none;border-top-width:0px;margin-top:0;margin-bottom:0;padding-top:var(--wp--preset--spacing--80);padding-right:var(--wp--preset--spacing--40);padding-bottom:var(--wp--preset--spacing--80);padding-left:var(--wp--preset--spacing--40)"><!-- wp:columns {"verticalAlignment":"center","style":{"spacing":{"blockGap":{"left":"84px"}}}} -->
    <div class="wp-block-columns are-vertically-aligned-center"><!-- wp:column {"verticalAlignment":"center","width":"46%"} -->
        <div class="wp-block-column is-vertically-aligned-center" style="flex-basis:46%"><!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|40","margin":{"top":"0","bottom":"40px"}}},"layout":{"type":"constrained","contentSize":"860px"}} -->
            <div class="wp-block-group" style="margin-top:0;margin-bottom:40px"><!-- wp:group {"layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"left"}} -->
                <div class="wp-block-group"><!-- wp:group {"className":"is-style-saaslauncher-gradient-border","style":{"spacing":{"padding":{"top":"3px","bottom":"3px","left":"8px","right":"8px"}},"border":{"radius":"60px","width":"1px"}},"backgroundColor":"dark-shade","borderColor":"border-color","layout":{"type":"constrained"}} -->
                    <div class="wp-block-group is-style-saaslauncher-gradient-border has-border-color has-border-color-border-color has-dark-shade-background-color has-background" style="border-width:1px;border-radius:60px;padding-top:3px;padding-right:8px;padding-bottom:3px;padding-left:8px"><!-- wp:heading {"textAlign":"center","level":5,"style":{"typography":{"textTransform":"none"},"elements":{"link":{"color":{"text":"var:preset|color|light-color"}}}},"textColor":"light-color","fontSize":"small"} -->
                        <h5 class="wp-block-heading has-text-align-center has-light-color-color has-text-color has-link-color has-small-font-size" style="text-transform:none"><?php esc_html_e('Testimonials', 'saaslauncher') ?></h5>
                        <!-- /wp:heading -->
                    </div>
                    <!-- /wp:group -->
                </div>
                <!-- /wp:group -->

                <!-- wp:heading {"textAlign":"left","level":1,"style":{"typography":{"fontSize":"44px","lineHeight":"1.3","fontStyle":"normal","fontWeight":"500"},"elements":{"link":{"color":{"text":"var:preset|color|light-color"}}}},"textColor":"light-color"} -->
                <h1 class="wp-block-heading has-text-align-left has-light-color-color has-text-color has-link-color" style="font-size:44px;font-style:normal;font-weight:500;line-height:1.3"><?php esc_html_e('Effortlessly craft a blazing-fast website with the new WordPress Site Editor—coding-free!', 'saaslauncher') ?></h1>
                <!-- /wp:heading -->
            </div>
            <!-- /wp:group -->

            <!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|30","margin":{"top":"10px","bottom":"0"},"padding":{"top":"24px"}},"border":{"top":{"color":"var:preset|color|border-color","width":"1px"},"right":[],"bottom":[],"left":[]}},"layout":{"type":"constrained"}} -->
            <div class="wp-block-group" style="border-top-color:var(--wp--preset--color--border-color);border-top-width:1px;margin-top:10px;margin-bottom:0;padding-top:24px"><!-- wp:image {"id":12146,"width":"128px","height":"24px","scale":"contain","sizeSlug":"full","linkDestination":"none"} -->
                <figure class="wp-block-image size-full is-resized"><img src="<?php echo esc_url($saaslauncher_images[0]) ?>" alt="" class="wp-image-12146" style="object-fit:contain;width:128px;height:24px" /></figure>
                <!-- /wp:image -->

                <!-- wp:heading {"level":4,"style":{"elements":{"link":{"color":{"text":"var:preset|color|light-color"}}}},"textColor":"light-color","fontSize":"big"} -->
                <h4 class="wp-block-heading has-light-color-color has-text-color has-link-color has-big-font-size"><?php esc_html_e('Easy Customizable', 'saaslauncher') ?></h4>
                <!-- /wp:heading -->

                <!-- wp:paragraph {"style":{"elements":{"link":{"color":{"text":"var:preset|color|foreground-alt"}}}},"textColor":"foreground-alt"} -->
                <p class="has-foreground-alt-color has-text-color has-link-color"><?php esc_html_e('Lorem ipsum dolor sit amet, vet elit at consectetur adipiscing elit. liqua vel cur magna at enisus', 'saaslauncher') ?></p>
                <!-- /wp:paragraph -->
            </div>
            <!-- /wp:group -->
        </div>
        <!-- /wp:column -->

        <!-- wp:column {"verticalAlignment":"center"} -->
        <div class="wp-block-column is-vertically-aligned-center"><!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|30","padding":{"top":"28px","bottom":"28px","left":"28px","right":"28px"},"margin":{"top":"0px","bottom":"0"}},"border":{"radius":"12px"}},"backgroundColor":"dark-shade","layout":{"type":"constrained"}} -->
            <div class="wp-block-group has-dark-shade-background-color has-background" style="border-radius:12px;margin-top:0px;margin-bottom:0;padding-top:28px;padding-right:28px;padding-bottom:28px;padding-left:28px"><!-- wp:paragraph {"style":{"elements":{"link":{"color":{"text":"var:preset|color|foreground-alt"}}}},"textColor":"foreground-alt","fontSize":"medium"} -->
                <p class="has-foreground-alt-color has-text-color has-link-color has-medium-font-size"><?php esc_html_e('Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam', 'saaslauncher') ?></p>
                <!-- /wp:paragraph -->

                <!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|40","margin":{"top":"28px"}}},"layout":{"type":"flex","flexWrap":"nowrap"}} -->
                <div class="wp-block-group" style="margin-top:28px"><!-- wp:image {"id":6090,"width":"80px","height":"80px","scale":"cover","sizeSlug":"full","linkDestination":"none","style":{"border":{"radius":"80px"}}} -->
                    <figure class="wp-block-image size-full is-resized has-custom-border"><img src="<?php echo esc_url($saaslauncher_images[1]) ?>" alt="" class="wp-image-6090" style="border-radius:80px;object-fit:cover;width:80px;height:80px" /></figure>
                    <!-- /wp:image -->

                    <!-- wp:group {"style":{"spacing":{"blockGap":"0"}},"layout":{"type":"flex","orientation":"vertical"}} -->
                    <div class="wp-block-group"><!-- wp:heading {"level":3,"style":{"typography":{"fontStyle":"normal","fontWeight":"500"},"elements":{"link":{"color":{"text":"var:preset|color|light-color"}}}},"textColor":"light-color","fontSize":"medium"} -->
                        <h3 class="wp-block-heading has-light-color-color has-text-color has-link-color has-medium-font-size" style="font-style:normal;font-weight:500"><strong><?php esc_html_e('Mat Robert', 'saaslauncher') ?></strong></h3>
                        <!-- /wp:heading -->

                        <!-- wp:paragraph {"style":{"elements":{"link":{"color":{"text":"var:preset|color|foreground-alt"}}}},"textColor":"foreground-alt","fontSize":"small"} -->
                        <p class="has-foreground-alt-color has-text-color has-link-color has-small-font-size"><?php esc_html_e('Founder - Mat Industries', 'saaslauncher') ?></p>
                        <!-- /wp:paragraph -->
                    </div>
                    <!-- /wp:group -->
                </div>
                <!-- /wp:group -->
            </div>
            <!-- /wp:group -->

            <!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|30","padding":{"top":"28px","bottom":"28px","left":"28px","right":"28px"},"margin":{"top":"28px","bottom":"0"}},"border":{"radius":"12px"}},"backgroundColor":"dark-shade","layout":{"type":"constrained"}} -->
            <div class="wp-block-group has-dark-shade-background-color has-background" style="border-radius:12px;margin-top:28px;margin-bottom:0;padding-top:28px;padding-right:28px;padding-bottom:28px;padding-left:28px"><!-- wp:paragraph {"style":{"elements":{"link":{"color":{"text":"var:preset|color|foreground-alt"}}}},"textColor":"foreground-alt","fontSize":"medium"} -->
                <p class="has-foreground-alt-color has-text-color has-link-color has-medium-font-size"><?php esc_html_e('Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam', 'saaslauncher') ?></p>
                <!-- /wp:paragraph -->

                <!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|40","margin":{"top":"28px"}}},"layout":{"type":"flex","flexWrap":"nowrap"}} -->
                <div class="wp-block-group" style="margin-top:28px"><!-- wp:image {"id":6090,"width":"80px","height":"80px","scale":"cover","sizeSlug":"full","linkDestination":"none","style":{"border":{"radius":"80px"}}} -->
                    <figure class="wp-block-image size-full is-resized has-custom-border"><img src="<?php echo esc_url($saaslauncher_images[2]) ?>" alt="" class="wp-image-6090" style="border-radius:80px;object-fit:cover;width:80px;height:80px" /></figure>
                    <!-- /wp:image -->

                    <!-- wp:group {"style":{"spacing":{"blockGap":"0"}},"layout":{"type":"flex","orientation":"vertical"}} -->
                    <div class="wp-block-group"><!-- wp:heading {"level":3,"style":{"typography":{"fontStyle":"normal","fontWeight":"500"},"elements":{"link":{"color":{"text":"var:preset|color|light-color"}}}},"textColor":"light-color","fontSize":"medium"} -->
                        <h3 class="wp-block-heading has-light-color-color has-text-color has-link-color has-medium-font-size" style="font-style:normal;font-weight:500"><strong><?php esc_html_e('Melina Potmen', 'saaslauncher') ?></strong></h3>
                        <!-- /wp:heading -->

                        <!-- wp:paragraph {"style":{"elements":{"link":{"color":{"text":"var:preset|color|foreground-alt"}}}},"textColor":"foreground-alt","fontSize":"small"} -->
                        <p class="has-foreground-alt-color has-text-color has-link-color has-small-font-size"><?php esc_html_e('Founder - Potmen Industries', 'saaslauncher') ?></p>
                        <!-- /wp:paragraph -->
                    </div>
                    <!-- /wp:group -->
                </div>
                <!-- /wp:group -->
            </div>
            <!-- /wp:group -->
        </div>
        <!-- /wp:column -->
    </div>
    <!-- /wp:columns -->
</div>
<!-- /wp:group -->