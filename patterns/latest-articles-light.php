<?php

/**
 * Title: Latest News and Articles Light
 * Slug: saaslauncher/latest-articles-light
 * Categories: saaslauncher-post
 */
?>
<!-- wp:group {"align":"full","metadata":{"categories":["saaslauncher"],"patternName":"saaslauncher/latest-articles-light","name":"Latest News and Articles"},"style":{"spacing":{"padding":{"top":"6rem","bottom":"7rem","left":"var:preset|spacing|40","right":"var:preset|spacing|40"},"margin":{"top":"0","bottom":"0"}},"color":{"background":"#f9f9f9"}},"layout":{"type":"constrained","contentSize":"1180px"}} -->
<div class="wp-block-group alignfull has-background" style="background-color:#f9f9f9;margin-top:0;margin-bottom:0;padding-top:6rem;padding-right:var(--wp--preset--spacing--40);padding-bottom:7rem;padding-left:var(--wp--preset--spacing--40)"><!-- wp:group {"style":{"spacing":{"margin":{"bottom":"48px"}}},"layout":{"type":"flex","flexWrap":"wrap","justifyContent":"space-between","verticalAlignment":"bottom"}} -->
    <div class="wp-block-group" style="margin-bottom:48px"><!-- wp:group {"style":{"spacing":{"margin":{"top":"0","bottom":"0px"},"blockGap":"var:preset|spacing|40"}},"layout":{"type":"constrained","contentSize":"740px","justifyContent":"left"}} -->
        <div class="wp-block-group" style="margin-top:0;margin-bottom:0px"><!-- wp:heading {"textAlign":"left","level":1,"style":{"typography":{"fontStyle":"normal","fontWeight":"700"},"elements":{"link":{"color":{"text":"var:preset|color|heading-color"}}},"spacing":{"margin":{"top":"0","bottom":"20px"}}},"textColor":"heading-color","fontSize":"xx-large"} -->
            <h1 class="wp-block-heading has-text-align-left has-heading-color-color has-text-color has-link-color has-xx-large-font-size" style="margin-top:0;margin-bottom:20px;font-style:normal;font-weight:700"><?php esc_html_e('Latest News &amp; Articles', 'saaslauncher') ?></h1>
            <!-- /wp:heading -->

            <!-- wp:paragraph {"align":"left","style":{"elements":{"link":{"color":{"text":"var:preset|color|heading-color"}}},"spacing":{"margin":{"top":"0","bottom":"0"}}},"textColor":"heading-color","fontSize":"medium"} -->
            <p class="has-text-align-left has-heading-color-color has-text-color has-link-color has-medium-font-size" style="margin-top:0;margin-bottom:0"><?php esc_html_e('Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.', 'saaslauncher') ?></p>
            <!-- /wp:paragraph -->
        </div>
        <!-- /wp:group -->

        <!-- wp:buttons {"className":"is-style-button-zoom-on-hover","style":{"spacing":{"margin":{"top":"0px"},"blockGap":{"top":"var:preset|spacing|40","left":"var:preset|spacing|40"}}},"layout":{"type":"flex","justifyContent":"left"}} -->
        <div class="wp-block-buttons is-style-button-zoom-on-hover" style="margin-top:0px"><!-- wp:button {"backgroundColor":"primary","className":"is-style-button-hover-secondary-bgcolor","style":{"border":{"radius":"12px"},"spacing":{"padding":{"left":"28px","right":"28px","top":"16px","bottom":"16px"}}},"fontSize":"medium"} -->
            <div class="wp-block-button has-custom-font-size is-style-button-hover-secondary-bgcolor has-medium-font-size"><a class="wp-block-button__link has-primary-background-color has-background wp-element-button" style="border-radius:12px;padding-top:16px;padding-right:28px;padding-bottom:16px;padding-left:28px"><?php esc_html_e('More Articles', 'saaslauncher') ?></a></div>
            <!-- /wp:button -->
        </div>
        <!-- /wp:buttons -->
    </div>
    <!-- /wp:group -->

    <!-- wp:query {"queryId":22,"query":{"perPage":3,"pages":0,"offset":0,"postType":"post","order":"desc","orderBy":"date","author":"","search":"","exclude":[],"sticky":"","inherit":false}} -->
    <div class="wp-block-query"><!-- wp:post-template {"style":{"spacing":{"blockGap":"24px"}},"layout":{"type":"grid","columnCount":3}} -->
        <!-- wp:group {"className":"is-style-default","style":{"spacing":{"padding":{"top":"0px","bottom":"0px","left":"0px","right":"0px"}},"border":{"color":"#e9e9e9","width":"1px","radius":"12px"}},"backgroundColor":"background","layout":{"type":"constrained"}} -->
        <div class="wp-block-group is-style-default has-border-color has-background-background-color has-background" style="border-color:#e9e9e9;border-width:1px;border-radius:12px;padding-top:0px;padding-right:0px;padding-bottom:0px;padding-left:0px"><!-- wp:cover {"useFeaturedImage":true,"dimRatio":0,"customOverlayColor":"#2b342e","isUserOverlayColor":true,"minHeight":280,"contentPosition":"bottom left","isDark":false,"style":{"border":{"radius":{"topLeft":"12px","topRight":"12px","bottomLeft":"0px","bottomRight":"0px"},"left":{"width":"0px","style":"none"},"top":[],"right":[],"bottom":[]},"spacing":{"margin":{"bottom":"0px"}}},"layout":{"type":"constrained"}} -->
            <div class="wp-block-cover is-light has-custom-content-position is-position-bottom-left" style="border-top-left-radius:12px;border-top-right-radius:12px;border-bottom-left-radius:0px;border-bottom-right-radius:0px;border-left-style:none;border-left-width:0px;margin-bottom:0px;min-height:280px"><span aria-hidden="true" class="wp-block-cover__background has-background-dim-0 has-background-dim" style="background-color:#2b342e"></span>
                <div class="wp-block-cover__inner-container"><!-- wp:paragraph {"align":"center","placeholder":"Write title…","fontSize":"large"} -->
                    <p class="has-text-align-center has-large-font-size"></p>
                    <!-- /wp:paragraph -->
                </div>
            </div>
            <!-- /wp:cover -->

            <!-- wp:group {"style":{"spacing":{"margin":{"top":"0px","bottom":"0"},"padding":{"top":"28px","bottom":"28px","left":"28px","right":"28px"},"blockGap":"var:preset|spacing|40"}},"layout":{"type":"constrained"}} -->
            <div class="wp-block-group" style="margin-top:0px;margin-bottom:0;padding-top:28px;padding-right:28px;padding-bottom:28px;padding-left:28px"><!-- wp:group {"style":{"spacing":{"margin":{"top":"0","bottom":"12px"}}},"layout":{"type":"flex","flexWrap":"nowrap"}} -->
                <div class="wp-block-group" style="margin-top:0;margin-bottom:12px"><!-- wp:post-terms {"term":"category","className":"is-style-default","style":{"typography":{"textTransform":"uppercase","fontStyle":"normal","fontWeight":"500"}},"fontSize":"x-small"} /--></div>
                <!-- /wp:group -->

                <!-- wp:post-title {"level":3,"isLink":true,"style":{"typography":{"fontStyle":"normal","fontWeight":"600","fontSize":"24px","lineHeight":"1.3"},"elements":{"link":{"color":{"text":"var:preset|color|heading-color"},":hover":{"color":{"text":"var:preset|color|secondary"}}}},"spacing":{"margin":{"top":"3px"}}}} /-->

                <!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|40","margin":{"top":"16px"}},"elements":{"link":{"color":{"text":"var:preset|color|meta-color"}}}},"textColor":"meta-color","layout":{"type":"flex","flexWrap":"wrap"}} -->
                <div class="wp-block-group has-meta-color-color has-text-color has-link-color" style="margin-top:16px"><!-- wp:post-author-name {"className":"is-style-author-name-with-icon","style":{"typography":{"textTransform":"capitalize"},"elements":{"link":{"color":{"text":"var:preset|color|meta-color"}}}},"textColor":"meta-color"} /-->

                    <!-- wp:post-date {"className":"is-style-post-date-with-icon","style":{"elements":{"link":{"color":{"text":"var:preset|color|meta-color"}}}},"textColor":"meta-color"} /-->
                </div>
                <!-- /wp:group -->

                <!-- wp:post-excerpt {"excerptLength":16,"style":{"elements":{"link":{"color":{"text":"var:preset|color|foreground"}}}},"textColor":"foreground"} /-->
            </div>
            <!-- /wp:group -->
        </div>
        <!-- /wp:group -->
        <!-- /wp:post-template -->
    </div>
    <!-- /wp:query -->
</div>
<!-- /wp:group -->