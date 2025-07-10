<?php

/**
 * Title: Header for Archive
 * Slug: saaslauncher/header-archive
 * Categories:header
 */
$saaslauncher_url = trailingslashit(get_template_directory_uri());
$saaslauncher_images = array(
    $saaslauncher_url . 'assets/images/banner_bg.jpg',
);
?>
<!-- wp:cover {"align":"full","isUserOverlayColor":true,"minHeight":200,"gradient":"gradient-one","className":"is-style-saaslauncher-cover-unset-overflow","style":{"spacing":{"padding":{"top":"0","bottom":"0","left":"0","right":"0"},"margin":{"top":"0","bottom":"0"}}},"layout":{"type":"constrained","contentSize":"100%"}} -->
<div class="wp-block-cover alignfull is-style-saaslauncher-cover-unset-overflow" style="margin-top:0;margin-bottom:0;padding-top:0;padding-right:0;padding-bottom:0;padding-left:0;min-height:200px"><span aria-hidden="true" class="wp-block-cover__background has-background-dim-100 has-background-dim has-background-gradient has-gradient-one-gradient-background"></span>
    <div class="wp-block-cover__inner-container"><!-- wp:group {"className":"saaslauncher-header","style":{"spacing":{"padding":{"top":"22px","right":"var:preset|spacing|40","bottom":"22px","left":"var:preset|spacing|40"}},"border":{"bottom":{"width":"0px","style":"none"}}},"layout":{"type":"constrained","contentSize":"1180px"}} -->
        <div class="wp-block-group saaslauncher-header" style="border-bottom-style:none;border-bottom-width:0px;padding-top:22px;padding-right:var(--wp--preset--spacing--40);padding-bottom:22px;padding-left:var(--wp--preset--spacing--40)"><!-- wp:group {"layout":{"type":"flex","flexWrap":"wrap","justifyContent":"space-between"}} -->
            <div class="wp-block-group"><!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|30"}},"layout":{"type":"flex","flexWrap":"nowrap"}} -->
                <div class="wp-block-group"><!-- wp:site-logo {"width":40,"shouldSyncIcon":false} /-->

                    <!-- wp:site-title {"style":{"typography":{"fontStyle":"normal","fontWeight":"600","textTransform":"none","letterSpacing":"0px","fontSize":"28px","lineHeight":"1"},"elements":{"link":{"color":{"text":"var:preset|color|light-color"},":hover":{"color":{"text":"var:preset|color|secondary"}}}},"spacing":{"margin":{"top":"0px"}}}} /-->
                </div>
                <!-- /wp:group -->

                <!-- wp:navigation {"textColor":"light-color","overlayBackgroundColor":"secondary-bg","overlayTextColor":"heading-color","className":"saaslauncher-navigation","style":{"typography":{"textTransform":"none","fontStyle":"normal","fontWeight":"500","lineHeight":"2"},"spacing":{"blockGap":"24px"}},"fontSize":"normal","layout":{"type":"flex","justifyContent":"center"}} /-->

                <!-- wp:buttons {"className":"is-style-button-zoom-on-hover"} -->
                <div class="wp-block-buttons is-style-button-zoom-on-hover"><!-- wp:button {"gradient":"gradient-twelve","style":{"border":{"radius":"60px"},"spacing":{"padding":{"left":"40px","right":"40px","top":"16px","bottom":"16px"}},"typography":{"fontSize":"18px"}}} -->
                    <div class="wp-block-button has-custom-font-size" style="font-size:18px"><a class="wp-block-button__link has-gradient-twelve-gradient-background has-background wp-element-button" style="border-radius:60px;padding-top:16px;padding-right:40px;padding-bottom:16px;padding-left:40px"><?php esc_html_e('Get Started', 'saaslauncher') ?></a></div>
                    <!-- /wp:button -->
                </div>
                <!-- /wp:buttons -->
            </div>
            <!-- /wp:group -->
        </div>
        <!-- /wp:group -->

        <!-- wp:cover {"dimRatio":0,"minHeight":240,"isDark":false,"style":{"spacing":{"padding":{"top":"40px","bottom":"40px","left":"var:preset|spacing|40","right":"var:preset|spacing|40"},"margin":{"top":"0","bottom":"0"}}},"layout":{"type":"constrained","contentSize":"980px"}} -->
        <div class="wp-block-cover is-light" style="margin-top:0;margin-bottom:0;padding-top:40px;padding-right:var(--wp--preset--spacing--40);padding-bottom:40px;padding-left:var(--wp--preset--spacing--40);min-height:240px"><span aria-hidden="true" class="wp-block-cover__background has-background-dim-0 has-background-dim"></span>
            <div class="wp-block-cover__inner-container"><!-- wp:group {"layout":{"type":"constrained","contentSize":"980px"}} -->
                <div class="wp-block-group"><!-- wp:query-title {"type":"archive","textAlign":"center","showPrefix":false,"style":{"elements":{"link":{"color":{"text":"var:preset|color|light-color"}}}},"textColor":"light-color","fontSize":"xx-large"} /--></div>
                <!-- /wp:group -->
            </div>
        </div>
        <!-- /wp:cover -->
    </div>
</div>
<!-- /wp:cover -->