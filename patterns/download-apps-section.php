<?php

/**
 * Title: Download Apps Section
 * Slug: saaslauncher/download-apps-section
 * Categories: saaslauncher,saaslauncher-about
 */
$saaslauncher_url = trailingslashit(get_template_directory_uri());
$saaslauncher_images = array(
    $saaslauncher_url . 'assets/images/mobile_apps.png',
    $saaslauncher_url . 'assets/images/circle_bg.png',
    $saaslauncher_url . 'assets/images/app_ios.png',
    $saaslauncher_url . 'assets/images/app_android.png',
);
?>
<!-- wp:group {"align":"full","style":{"spacing":{"padding":{"top":"var:preset|spacing|60","bottom":"var:preset|spacing|60","left":"var:preset|spacing|40","right":"var:preset|spacing|40"},"margin":{"top":"0","bottom":"0"}}},"backgroundColor":"black-color","layout":{"type":"constrained","contentSize":"1260px"}} -->
<div class="wp-block-group alignfull has-black-color-background-color has-background" style="margin-top:0;margin-bottom:0;padding-top:var(--wp--preset--spacing--60);padding-right:var(--wp--preset--spacing--40);padding-bottom:var(--wp--preset--spacing--60);padding-left:var(--wp--preset--spacing--40)"><!-- wp:group {"style":{"spacing":{"padding":{"top":"40px","bottom":"0px","left":"90px","right":"40px"}},"border":{"radius":"20px"},"background":{"backgroundImage":{"url":"<?php echo esc_url($saaslauncher_images[1]) ?>","id":12074,"source":"file","title":"circle_bg-2"},"backgroundSize":"contain","backgroundRepeat":"no-repeat","backgroundPosition":"100% 100%"}},"backgroundColor":"dark-shade","layout":{"type":"constrained","contentSize":"100%"}} -->
    <div class="wp-block-group has-dark-shade-background-color has-background" style="border-radius:20px;padding-top:40px;padding-right:40px;padding-bottom:0px;padding-left:90px"><!-- wp:columns {"verticalAlignment":"center","style":{"spacing":{"padding":{"top":"0px","bottom":"0px","left":"0px","right":"0px"},"margin":{"top":"0","bottom":"0"}},"border":{"radius":"20px"}}} -->
        <div class="wp-block-columns are-vertically-aligned-center" style="border-radius:20px;margin-top:0;margin-bottom:0;padding-top:0px;padding-right:0px;padding-bottom:0px;padding-left:0px"><!-- wp:column {"verticalAlignment":"center"} -->
            <div class="wp-block-column is-vertically-aligned-center"><!-- wp:group {"style":{"spacing":{"padding":{"top":"0","bottom":"40px","left":"0","right":"0"},"margin":{"top":"0","bottom":"0"},"blockGap":"var:preset|spacing|40"},"position":{"type":""}},"layout":{"type":"constrained","contentSize":"540px","justifyContent":"left"}} -->
                <div class="wp-block-group" style="margin-top:0;margin-bottom:0;padding-top:0;padding-right:0;padding-bottom:40px;padding-left:0"><!-- wp:group {"style":{"spacing":{"margin":{"top":"0","bottom":"0"}}},"layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"left"}} -->
                    <div class="wp-block-group" style="margin-top:0;margin-bottom:0"><!-- wp:group {"className":"is-style-default","style":{"spacing":{"padding":{"top":"8px","bottom":"8px","left":"24px","right":"24px"}},"border":{"radius":"60px","width":"1px"}},"borderColor":"border-color","layout":{"type":"constrained"}} -->
                        <div class="wp-block-group is-style-default has-border-color has-border-color-border-color" style="border-width:1px;border-radius:60px;padding-top:8px;padding-right:24px;padding-bottom:8px;padding-left:24px"><!-- wp:heading {"level":5,"style":{"elements":{"link":{"color":{"text":"var:preset|color|light-color"}}},"typography":{"textTransform":"uppercase"}},"textColor":"light-color","fontSize":"small"} -->
                            <h5 class="wp-block-heading has-light-color-color has-text-color has-link-color has-small-font-size" style="text-transform:uppercase"><?php esc_html_e('Available on App Store', 'saaslauncher') ?></h5>
                            <!-- /wp:heading -->
                        </div>
                        <!-- /wp:group -->
                    </div>
                    <!-- /wp:group -->

                    <!-- wp:heading {"textAlign":"left","level":1,"style":{"elements":{"link":{"color":{"text":"var:preset|color|light-color"}}},"typography":{"fontStyle":"normal","fontWeight":"700","lineHeight":"1.3"}},"textColor":"light-color","fontSize":"xx-large"} -->
                    <h1 class="wp-block-heading has-text-align-left has-light-color-color has-text-color has-link-color has-xx-large-font-size" style="font-style:normal;font-weight:700;line-height:1.3"><?php esc_html_e('Your Business, Always at Your Fingertips', 'saaslauncher') ?></h1>
                    <!-- /wp:heading -->

                    <!-- wp:paragraph {"align":"left","style":{"elements":{"link":{"color":{"text":"var:preset|color|foreground-alt"}}}},"textColor":"foreground-alt","fontSize":"normal"} -->
                    <p class="has-text-align-left has-foreground-alt-color has-text-color has-link-color has-normal-font-size"><?php esc_html_e('Lorem ipsum is placeholder text commonly used in the graphic, print, and publishing industries for previewing layouts and visual mockups.', 'saaslauncher') ?></p>
                    <!-- /wp:paragraph -->

                    <!-- wp:group {"style":{"spacing":{"margin":{"top":"40px"},"blockGap":"var:preset|spacing|30"}},"layout":{"type":"flex","flexWrap":"nowrap"}} -->
                    <div class="wp-block-group" style="margin-top:40px"><!-- wp:image {"lightbox":{"enabled":false},"id":12085,"width":"138px","height":"44px","scale":"contain","sizeSlug":"full","linkDestination":"custom","className":"is-style-saaslauncher-image-hover-zoom"} -->
                        <figure class="wp-block-image size-full is-resized is-style-saaslauncher-image-hover-zoom"><a href="#"><img src="<?php echo esc_url($saaslauncher_images[2]) ?>" alt="" class="wp-image-12085" style="object-fit:contain;width:138px;height:44px" /></a></figure>
                        <!-- /wp:image -->

                        <!-- wp:image {"lightbox":{"enabled":false},"id":12086,"width":"152px","height":"44px","scale":"contain","sizeSlug":"full","linkDestination":"custom","className":"is-style-saaslauncher-image-hover-zoom"} -->
                        <figure class="wp-block-image size-full is-resized is-style-saaslauncher-image-hover-zoom"><a href="#"><img src="<?php echo esc_url($saaslauncher_images[3]) ?>" alt="" class="wp-image-12086" style="object-fit:contain;width:152px;height:44px" /></a></figure>
                        <!-- /wp:image -->
                    </div>
                    <!-- /wp:group -->
                </div>
                <!-- /wp:group -->
            </div>
            <!-- /wp:column -->

            <!-- wp:column {"verticalAlignment":"center"} -->
            <div class="wp-block-column is-vertically-aligned-center"><!-- wp:image {"id":12073,"sizeSlug":"full","linkDestination":"none"} -->
                <figure class="wp-block-image size-full"><img src="<?php echo esc_url($saaslauncher_images[0]) ?>" alt="" class="wp-image-12073" /></figure>
                <!-- /wp:image -->
            </div>
            <!-- /wp:column -->
        </div>
        <!-- /wp:columns -->
    </div>
    <!-- /wp:group -->
</div>
<!-- /wp:group -->