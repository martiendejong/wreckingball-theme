<?php

/**
 * Title: Contact Us
 * Slug: saaslauncher/contact-page
 * Categories: saaslauncher-pages
 */
$saaslauncher_url = trailingslashit(get_template_directory_uri());
$saaslauncher_images = array(
    $saaslauncher_url . 'assets/images/google-map.jpg',
);
?>
<!-- wp:group {"align":"full","style":{"spacing":{"padding":{"top":"0","bottom":"0","left":"0","right":"0"},"margin":{"top":"0","bottom":"0"}}},"gradient":"gradient-six","layout":{"type":"constrained","contentSize":"100%"}} -->
<div class="wp-block-group alignfull has-gradient-six-gradient-background has-background" style="margin-top:0;margin-bottom:0;padding-top:0;padding-right:0;padding-bottom:0;padding-left:0"><!-- wp:group {"style":{"spacing":{"padding":{"top":"var:preset|spacing|40"}}},"layout":{"type":"constrained","contentSize":"1180px"}} -->
    <div class="wp-block-group" style="padding-top:var(--wp--preset--spacing--40)"><!-- wp:image {"id":10027,"sizeSlug":"large","linkDestination":"none","align":"wide"} -->
        <figure class="wp-block-image alignwide size-large"><img src="<?php echo esc_url($saaslauncher_images[0]) ?>" alt="" class="wp-image-10027" /></figure>
        <!-- /wp:image -->
    </div>
    <!-- /wp:group -->

    <!-- wp:group {"metadata":{"categories":["saaslauncher"],"patternName":"saaslauncher/contact-with-form","name":"Contact with Form"},"style":{"spacing":{"padding":{"top":"var:preset|spacing|80","bottom":"var:preset|spacing|80","right":"var:preset|spacing|40","left":"var:preset|spacing|40"},"margin":{"top":"0","bottom":"0"}}},"layout":{"type":"constrained","contentSize":"1180px"}} -->
    <div class="wp-block-group" style="margin-top:0;margin-bottom:0;padding-top:var(--wp--preset--spacing--80);padding-right:var(--wp--preset--spacing--40);padding-bottom:var(--wp--preset--spacing--80);padding-left:var(--wp--preset--spacing--40)"><!-- wp:group {"style":{"spacing":{"margin":{"bottom":"60px"}}},"layout":{"type":"constrained","contentSize":"1180px"}} -->
        <div class="wp-block-group" style="margin-bottom:60px"><!-- wp:group {"layout":{"type":"constrained","contentSize":"740px","justifyContent":"left"}} -->
            <div class="wp-block-group"><!-- wp:heading {"level":1,"style":{"typography":{"fontStyle":"normal","fontWeight":"800"},"elements":{"link":{"color":{"text":"var:preset|color|light-color"}}}},"textColor":"light-color"} -->
                <h1 class="wp-block-heading has-light-color-color has-text-color has-link-color" style="font-style:normal;font-weight:800"><?php esc_html_e('Keep in Touch', 'saaslauncher') ?></h1>
                <!-- /wp:heading -->

                <!-- wp:paragraph {"style":{"typography":{"lineHeight":1.7,"fontSize":"18px"},"elements":{"link":{"color":{"text":"var:preset|color|foreground-alt"}}}},"textColor":"foreground-alt"} -->
                <p class="has-foreground-alt-color has-text-color has-link-color" style="font-size:18px;line-height:1.7"><?php esc_html_e('Lorem ipsum is placeholder text commonly used in the graphic, print, and publishing industries for previewing layouts and visual mockups.', 'saaslauncher') ?></p>
                <!-- /wp:paragraph -->
            </div>
            <!-- /wp:group -->

            <!-- wp:columns {"verticalAlignment":"top","style":{"spacing":{"blockGap":{"top":"var:preset|spacing|80","left":"100px"}}}} -->
            <div class="wp-block-columns are-vertically-aligned-top"><!-- wp:column {"verticalAlignment":"top"} -->
                <div class="wp-block-column is-vertically-aligned-top"><!-- wp:group {"style":{"spacing":{"margin":{"top":"30px"},"blockGap":"var:preset|spacing|20"}},"layout":{"type":"flex","orientation":"vertical"}} -->
                    <div class="wp-block-group" style="margin-top:30px"><!-- wp:heading {"level":4,"style":{"elements":{"link":{"color":{"text":"var:preset|color|light-color"}}}},"textColor":"light-color"} -->
                        <h4 class="wp-block-heading has-light-color-color has-text-color has-link-color"><?php esc_html_e('Address:', 'saaslauncher') ?></h4>
                        <!-- /wp:heading -->

                        <!-- wp:paragraph {"style":{"typography":{"fontStyle":"normal","fontWeight":"500","lineHeight":1.6,"fontSize":"18px"}},"textColor":"sub-heading-color"} -->
                        <p class="has-sub-heading-color-color has-text-color" style="font-size:18px;font-style:normal;font-weight:500;line-height:1.6"><a href="#"><?php esc_html_e('2824 Fleming Street, Montgomery', 'saaslauncher') ?></a></p>
                        <!-- /wp:paragraph -->
                    </div>
                    <!-- /wp:group -->

                    <!-- wp:group {"style":{"spacing":{"margin":{"top":"24px"},"blockGap":"var:preset|spacing|20"}},"layout":{"type":"flex","orientation":"vertical"}} -->
                    <div class="wp-block-group" style="margin-top:24px"><!-- wp:heading {"level":4,"style":{"elements":{"link":{"color":{"text":"var:preset|color|light-color"}}}},"textColor":"light-color"} -->
                        <h4 class="wp-block-heading has-light-color-color has-text-color has-link-color"><?php esc_html_e('Phone:', 'saaslauncher') ?></h4>
                        <!-- /wp:heading -->

                        <!-- wp:paragraph {"style":{"typography":{"fontStyle":"normal","fontWeight":"500","lineHeight":1.6,"fontSize":"18px"}},"textColor":"sub-heading-color"} -->
                        <p class="has-sub-heading-color-color has-text-color" style="font-size:18px;font-style:normal;font-weight:500;line-height:1.6"><a href="#"><?php esc_html_e('+1 (012) 345-6789', 'saaslauncher') ?></a></p>
                        <!-- /wp:paragraph -->
                    </div>
                    <!-- /wp:group -->

                    <!-- wp:group {"style":{"spacing":{"margin":{"top":"24px"},"blockGap":"var:preset|spacing|20"}},"layout":{"type":"flex","orientation":"vertical"}} -->
                    <div class="wp-block-group" style="margin-top:24px"><!-- wp:heading {"level":4,"style":{"elements":{"link":{"color":{"text":"var:preset|color|light-color"}}}},"textColor":"light-color"} -->
                        <h4 class="wp-block-heading has-light-color-color has-text-color has-link-color"><?php esc_html_e('Email:', 'saaslauncher') ?></h4>
                        <!-- /wp:heading -->

                        <!-- wp:paragraph {"style":{"typography":{"fontStyle":"normal","fontWeight":"500","lineHeight":1.6,"fontSize":"18px"}},"textColor":"sub-heading-color"} -->
                        <p class="has-sub-heading-color-color has-text-color" style="font-size:18px;font-style:normal;font-weight:500;line-height:1.6"><a href="#"><?php esc_html_e('email@example.com', 'saaslauncher') ?></a></p>
                        <!-- /wp:paragraph -->
                    </div>
                    <!-- /wp:group -->

                    <!-- wp:social-links {"style":{"spacing":{"blockGap":{"left":"var:preset|spacing|40"},"margin":{"top":"40px"}}},"layout":{"type":"flex","justifyContent":"left"}} -->
                    <ul class="wp-block-social-links" style="margin-top:40px"><!-- wp:social-link {"url":"#","service":"facebook"} /-->

                        <!-- wp:social-link {"url":"#","service":"linkedin"} /-->

                        <!-- wp:social-link {"url":"#","service":"x"} /-->

                        <!-- wp:social-link {"url":"#","service":"youtube"} /-->

                        <!-- wp:social-link {"url":"#","service":"vk"} /-->

                        <!-- wp:social-link {"url":"#","service":"telegram"} /-->
                    </ul>
                    <!-- /wp:social-links -->
                </div>
                <!-- /wp:column -->

                <!-- wp:column {"verticalAlignment":"top","width":"60%"} -->
                <div class="wp-block-column is-vertically-aligned-top" style="flex-basis:60%"><!-- wp:heading {"level":4,"style":{"elements":{"link":{"color":{"text":"var:preset|color|foreground-alt"}}}},"textColor":"foreground-alt"} -->
                    <h4 class="wp-block-heading has-foreground-alt-color has-text-color has-link-color"><?php esc_html_e('Please insert the contact form shortcode here to display the form.', 'saaslauncher') ?></h4>
                    <!-- /wp:heading -->
                </div>
                <!-- /wp:column -->
            </div>
            <!-- /wp:columns -->
        </div>
        <!-- /wp:group -->
    </div>
    <!-- /wp:group -->
</div>
<!-- /wp:group -->