<?php

/**
 * Title: Header Default
 * Slug: saaslauncher/header-default
 * Categories: header
 * Keywords: header, nav, links, button
 * Block Types: core/template-part/header
 * Post Types: wp_template
 * Inserter: true
 */
?>
<!-- wp:group {"align":"full","metadata":{"categories":["header"],"patternName":"saaslauncher/header-default","name":"Header Default"},"style":{"spacing":{"blockGap":"0","margin":{"top":"0","bottom":"0"},"padding":{"right":"0","left":"0","top":"0","bottom":"0"}}},"backgroundColor":"black-color","layout":{"type":"constrained","contentSize":"100%"}} -->
<div class="wp-block-group alignfull has-black-color-background-color has-background" style="margin-top:0;margin-bottom:0;padding-top:0;padding-right:0;padding-bottom:0;padding-left:0"><!-- wp:group {"className":"saaslauncher-header is-style-saaslauncher-sticky-navigation","style":{"spacing":{"padding":{"top":"20px","right":"var:preset|spacing|40","bottom":"20px","left":"var:preset|spacing|40"}},"border":{"bottom":{"width":"0px","style":"none"}}},"layout":{"type":"constrained","contentSize":"1260px"}} -->
    <div class="wp-block-group saaslauncher-header is-style-saaslauncher-sticky-navigation" style="border-bottom-style:none;border-bottom-width:0px;padding-top:20px;padding-right:var(--wp--preset--spacing--40);padding-bottom:20px;padding-left:var(--wp--preset--spacing--40)"><!-- wp:group {"className":"is-style-saaslauncher-boxshadow","style":{"spacing":{"margin":{"top":"0","bottom":"0"}},"border":{"radius":"100px"}},"layout":{"type":"flex","flexWrap":"wrap","justifyContent":"space-between"}} -->
        <div class="wp-block-group is-style-saaslauncher-boxshadow" style="border-radius:100px;margin-top:0;margin-bottom:0"><!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|30"}},"layout":{"type":"flex","flexWrap":"nowrap"}} -->
            <div class="wp-block-group"><!-- wp:site-logo {"width":40,"shouldSyncIcon":false,"style":{"color":{"duotone":"unset"}}} /-->

                <!-- wp:site-title {"style":{"typography":{"fontStyle":"normal","fontWeight":"500","textTransform":"none","letterSpacing":"0px","fontSize":"28px","lineHeight":"1"},"elements":{"link":{"color":{"text":"var:preset|color|light-color"},":hover":{"color":{"text":"var:preset|color|secondary"}}}},"spacing":{"margin":{"top":"0px"}}}} /-->
            </div>
            <!-- /wp:group -->

            <!-- wp:navigation {"textColor":"background","overlayBackgroundColor":"secondary-bg","overlayTextColor":"heading-color","metadata":{"ignoredHookedBlocks":["woocommerce/customer-account","woocommerce/mini-cart"]},"className":"saaslauncher-navigation","style":{"typography":{"textTransform":"none","fontStyle":"normal","fontWeight":"500","lineHeight":"2"},"spacing":{"blockGap":"24px"}},"fontSize":"normal","layout":{"type":"flex","justifyContent":"center"}} /-->

            <!-- wp:buttons {"className":"is-style-button-zoom-on-hover","style":{"spacing":{"blockGap":{"left":"var:preset|spacing|40"}}}} -->
            <div class="wp-block-buttons is-style-button-zoom-on-hover"><!-- wp:button {"gradient":"gradient-twelve","className":"is-style-button-hover-light-bgcolor","style":{"border":{"radius":"100px"},"spacing":{"padding":{"left":"24px","right":"24px","top":"16px","bottom":"16px"}},"typography":{"fontSize":"16px"}}} -->
                <div class="wp-block-button is-style-button-hover-light-bgcolor"><a class="wp-block-button__link has-gradient-twelve-gradient-background has-background has-custom-font-size wp-element-button" style="border-radius:100px;padding-top:16px;padding-right:24px;padding-bottom:16px;padding-left:24px;font-size:16px"><?php esc_html_e('Signup Today', 'saaslauncher') ?></a></div>
                <!-- /wp:button -->
            </div>
            <!-- /wp:buttons -->
        </div>
        <!-- /wp:group -->
    </div>
    <!-- /wp:group -->
</div>
<!-- /wp:group -->