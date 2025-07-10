<?php

/**
 * Title: Features Grid
 * Slug: saaslauncher/features-grid
 * Categories: saaslauncher-service
 */
$saaslauncher_url = trailingslashit(get_template_directory_uri());
$saaslauncher_images = array(
    $saaslauncher_url . 'assets/images/featured_1.jpg',
    $saaslauncher_url . 'assets/images/featured_2.jpg',
    $saaslauncher_url . 'assets/images/featured_3.jpg',
    $saaslauncher_url . 'assets/images/featured_4.jpg',
    $saaslauncher_url . 'assets/images/featured_5.jpg',
);
?>
<!-- wp:group {"align":"full","style":{"spacing":{"padding":{"top":"6rem","bottom":"6rem","left":"var:preset|spacing|40","right":"var:preset|spacing|40"},"margin":{"top":"0","bottom":"0"}},"color":{"background":"#f9f9f9"}},"layout":{"type":"constrained","contentSize":"1260px"}} -->
<div class="wp-block-group alignfull has-background" style="background-color:#f9f9f9;margin-top:0;margin-bottom:0;padding-top:6rem;padding-right:var(--wp--preset--spacing--40);padding-bottom:6rem;padding-left:var(--wp--preset--spacing--40)"><!-- wp:group {"style":{"spacing":{"margin":{"top":"0","bottom":"64px"}}},"layout":{"type":"constrained","contentSize":"760px"}} -->
    <div class="wp-block-group" style="margin-top:0;margin-bottom:64px"><!-- wp:group {"layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"center"}} -->
        <div class="wp-block-group"><!-- wp:group {"style":{"color":{"background":"#ddf3ea"},"spacing":{"padding":{"top":"7px","bottom":"7px","left":"16px","right":"16px"}},"border":{"radius":"60px"}},"layout":{"type":"constrained"}} -->
            <div class="wp-block-group has-background" style="border-radius:60px;background-color:#ddf3ea;padding-top:7px;padding-right:16px;padding-bottom:7px;padding-left:16px"><!-- wp:paragraph {"style":{"elements":{"link":{"color":{"text":"var:preset|color|primary"}}},"typography":{"fontStyle":"normal","fontWeight":"400","textTransform":"uppercase"}},"textColor":"primary","fontSize":"small"} -->
                <p class="has-primary-color has-text-color has-link-color has-small-font-size" style="font-style:normal;font-weight:400;text-transform:uppercase"><?php esc_html_e('Features &amp; Benefits', 'saaslauncher') ?></p>
                <!-- /wp:paragraph -->
            </div>
            <!-- /wp:group -->
        </div>
        <!-- /wp:group -->

        <!-- wp:heading {"textAlign":"center","level":1,"style":{"typography":{"lineHeight":"1.3"}},"fontSize":"xx-large"} -->
        <h1 class="wp-block-heading has-text-align-center has-xx-large-font-size" style="line-height:1.3"><?php esc_html_e('Explore the Features That Simplify Your Business!', 'saaslauncher') ?></h1>
        <!-- /wp:heading -->

        <!-- wp:paragraph {"align":"center","style":{"elements":{"link":{"color":{"text":"var:preset|color|heading-color"}}}},"textColor":"heading-color","fontSize":"medium"} -->
        <p class="has-text-align-center has-heading-color-color has-text-color has-link-color has-medium-font-size"><?php esc_html_e('Discover how our powerful features streamline your operations, enhance productivity, and make managing your business easier than ever before.', 'saaslauncher') ?></p>
        <!-- /wp:paragraph -->
    </div>
    <!-- /wp:group -->

    <!-- wp:columns {"style":{"spacing":{"blockGap":{"top":"24px","left":"24px"}}}} -->
    <div class="wp-block-columns"><!-- wp:column {"className":"is-style-default"} -->
        <div class="wp-block-column is-style-default"><!-- wp:cover {"url":"<?php echo esc_url($saaslauncher_images[0]) ?>","id":11676,"dimRatio":0,"customOverlayColor":"#fafbfb","isUserOverlayColor":false,"contentPosition":"top left","isDark":false,"className":"is-style-saaslauncher-cover-hover-effect-with-shadow","style":{"spacing":{"padding":{"top":"32px","bottom":"32px","left":"32px","right":"32px"}},"border":{"radius":"20px","color":"#e9e9e9","width":"1px"}},"layout":{"type":"constrained"}} -->
            <div class="wp-block-cover is-light has-custom-content-position is-position-top-left is-style-saaslauncher-cover-hover-effect-with-shadow has-border-color" style="border-color:#e9e9e9;border-width:1px;border-radius:20px;padding-top:32px;padding-right:32px;padding-bottom:32px;padding-left:32px"><span aria-hidden="true" class="wp-block-cover__background has-background-dim-0 has-background-dim" style="background-color:#fafbfb"></span><img class="wp-block-cover__image-background wp-image-11676" alt="" src="<?php echo esc_url($saaslauncher_images[0]) ?>" data-object-fit="cover" />
                <div class="wp-block-cover__inner-container"><!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|30","margin":{"top":"0","bottom":"0"}}},"layout":{"type":"constrained","contentSize":"320px","justifyContent":"left"}} -->
                    <div class="wp-block-group" style="margin-top:0;margin-bottom:0"><!-- wp:heading {"textAlign":"left","level":3,"style":{"typography":{"fontStyle":"normal","fontWeight":"600"}},"fontSize":"big"} -->
                        <h3 class="wp-block-heading has-text-align-left has-big-font-size" style="font-style:normal;font-weight:600"><?php esc_html_e('Lead &amp; Opportunity Management', 'saaslauncher') ?></h3>
                        <!-- /wp:heading -->

                        <!-- wp:paragraph -->
                        <p><?php esc_html_e('Lorem Ipsum is simply text of the printing and typesetting industry.', 'saaslauncher') ?></p>
                        <!-- /wp:paragraph -->

                        <!-- wp:buttons {"className":"is-style-button-zoom-on-hover","style":{"spacing":{"margin":{"top":"32px"}}},"layout":{"type":"flex"}} -->
                        <div class="wp-block-buttons is-style-button-zoom-on-hover" style="margin-top:32px"><!-- wp:button {"textColor":"primary","className":"is-style-button-hover-secondary-bgcolor","style":{"border":{"radius":"12px"},"spacing":{"padding":{"left":"24px","right":"24px","top":"14px","bottom":"14px"}},"color":{"background":"#0ec97f26"},"elements":{"link":{"color":{"text":"var:preset|color|primary"}}}},"fontSize":"normal"} -->
                            <div class="wp-block-button has-custom-font-size is-style-button-hover-secondary-bgcolor has-normal-font-size"><a class="wp-block-button__link has-primary-color has-text-color has-background has-link-color wp-element-button" style="border-radius:12px;background-color:#0ec97f26;padding-top:14px;padding-right:24px;padding-bottom:14px;padding-left:24px"><?php esc_html_e('Learn More', 'saaslauncher') ?></a></div>
                            <!-- /wp:button -->
                        </div>
                        <!-- /wp:buttons -->
                    </div>
                    <!-- /wp:group -->
                </div>
            </div>
            <!-- /wp:cover -->
        </div>
        <!-- /wp:column -->

        <!-- wp:column {"className":"is-style-default"} -->
        <div class="wp-block-column is-style-default"><!-- wp:cover {"url":"<?php echo esc_url($saaslauncher_images[1]) ?>","id":11690,"dimRatio":0,"customOverlayColor":"#f8fdfc","isUserOverlayColor":false,"contentPosition":"top left","isDark":false,"className":"is-style-saaslauncher-cover-hover-effect-with-shadow","style":{"spacing":{"padding":{"top":"32px","bottom":"32px","left":"32px","right":"32px"}},"border":{"radius":"20px","color":"#e9e9e9","width":"1px"}},"layout":{"type":"constrained"}} -->
            <div class="wp-block-cover is-light has-custom-content-position is-position-top-left is-style-saaslauncher-cover-hover-effect-with-shadow has-border-color" style="border-color:#e9e9e9;border-width:1px;border-radius:20px;padding-top:32px;padding-right:32px;padding-bottom:32px;padding-left:32px"><span aria-hidden="true" class="wp-block-cover__background has-background-dim-0 has-background-dim" style="background-color:#f8fdfc"></span><img class="wp-block-cover__image-background wp-image-11690" alt="" src="<?php echo esc_url($saaslauncher_images[1]) ?>" data-object-fit="cover" />
                <div class="wp-block-cover__inner-container"><!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|30","margin":{"top":"0","bottom":"0"}}},"layout":{"type":"constrained","contentSize":"320px","justifyContent":"left"}} -->
                    <div class="wp-block-group" style="margin-top:0;margin-bottom:0"><!-- wp:heading {"textAlign":"left","level":3,"style":{"typography":{"fontStyle":"normal","fontWeight":"600"}},"fontSize":"big"} -->
                        <h3 class="wp-block-heading has-text-align-left has-big-font-size" style="font-style:normal;font-weight:600"><?php esc_html_e('Advanced Analytics &amp; Reporting', 'saaslauncher') ?></h3>
                        <!-- /wp:heading -->

                        <!-- wp:paragraph -->
                        <p><?php esc_html_e('Lorem Ipsum is simply text of the printing and typesetting industry.', 'saaslauncher') ?></p>
                        <!-- /wp:paragraph -->

                        <!-- wp:buttons {"className":"is-style-button-zoom-on-hover","style":{"spacing":{"margin":{"top":"32px"}}},"layout":{"type":"flex"}} -->
                        <div class="wp-block-buttons is-style-button-zoom-on-hover" style="margin-top:32px"><!-- wp:button {"textColor":"primary","className":"is-style-button-hover-secondary-bgcolor","style":{"border":{"radius":"12px"},"spacing":{"padding":{"left":"24px","right":"24px","top":"14px","bottom":"14px"}},"color":{"background":"#0ec97f26"},"elements":{"link":{"color":{"text":"var:preset|color|primary"}}}},"fontSize":"normal"} -->
                            <div class="wp-block-button has-custom-font-size is-style-button-hover-secondary-bgcolor has-normal-font-size"><a class="wp-block-button__link has-primary-color has-text-color has-background has-link-color wp-element-button" style="border-radius:12px;background-color:#0ec97f26;padding-top:14px;padding-right:24px;padding-bottom:14px;padding-left:24px"><?php esc_html_e('Learn More', 'saaslauncher') ?></a></div>
                            <!-- /wp:button -->
                        </div>
                        <!-- /wp:buttons -->
                    </div>
                    <!-- /wp:group -->
                </div>
            </div>
            <!-- /wp:cover -->
        </div>
        <!-- /wp:column -->
    </div>
    <!-- /wp:columns -->

    <!-- wp:columns {"style":{"spacing":{"blockGap":{"top":"24px","left":"24px"},"margin":{"top":"24px","bottom":"0"}}}} -->
    <div class="wp-block-columns" style="margin-top:24px;margin-bottom:0"><!-- wp:column -->
        <div class="wp-block-column"><!-- wp:cover {"url":"<?php echo esc_url($saaslauncher_images[2]) ?>","id":11689,"dimRatio":0,"customOverlayColor":"#fcfefd","isUserOverlayColor":false,"contentPosition":"top left","isDark":false,"className":"is-style-saaslauncher-cover-hover-effect-with-shadow","style":{"spacing":{"padding":{"top":"32px","bottom":"32px","left":"32px","right":"32px"}},"border":{"radius":"20px","color":"#e9e9e9","width":"1px"}},"layout":{"type":"constrained"}} -->
            <div class="wp-block-cover is-light has-custom-content-position is-position-top-left is-style-saaslauncher-cover-hover-effect-with-shadow has-border-color" style="border-color:#e9e9e9;border-width:1px;border-radius:20px;padding-top:32px;padding-right:32px;padding-bottom:32px;padding-left:32px"><span aria-hidden="true" class="wp-block-cover__background has-background-dim-0 has-background-dim" style="background-color:#fcfefd"></span><img class="wp-block-cover__image-background wp-image-11689" alt="" src="<?php echo esc_url($saaslauncher_images[2]) ?>" data-object-fit="cover" />
                <div class="wp-block-cover__inner-container"><!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|30","margin":{"top":"0","bottom":"0"}}},"layout":{"type":"constrained","contentSize":"320px","justifyContent":"left"}} -->
                    <div class="wp-block-group" style="margin-top:0;margin-bottom:0"><!-- wp:heading {"textAlign":"left","level":3,"style":{"typography":{"fontStyle":"normal","fontWeight":"600"}},"fontSize":"big"} -->
                        <h3 class="wp-block-heading has-text-align-left has-big-font-size" style="font-style:normal;font-weight:600"><?php esc_html_e('Scalable and Flexible Architecture', 'saaslauncher') ?></h3>
                        <!-- /wp:heading -->

                        <!-- wp:paragraph -->
                        <p><?php esc_html_e('Lorem Ipsum is simply text of the printing and typesetting industry.', 'saaslauncher') ?></p>
                        <!-- /wp:paragraph -->

                        <!-- wp:buttons {"className":"is-style-button-zoom-on-hover","style":{"spacing":{"margin":{"top":"32px"}}},"layout":{"type":"flex"}} -->
                        <div class="wp-block-buttons is-style-button-zoom-on-hover" style="margin-top:32px"><!-- wp:button {"textColor":"primary","className":"is-style-button-hover-secondary-bgcolor","style":{"border":{"radius":"12px"},"spacing":{"padding":{"left":"24px","right":"24px","top":"14px","bottom":"14px"}},"color":{"background":"#0ec97f26"},"elements":{"link":{"color":{"text":"var:preset|color|primary"}}}},"fontSize":"normal"} -->
                            <div class="wp-block-button has-custom-font-size is-style-button-hover-secondary-bgcolor has-normal-font-size"><a class="wp-block-button__link has-primary-color has-text-color has-background has-link-color wp-element-button" style="border-radius:12px;background-color:#0ec97f26;padding-top:14px;padding-right:24px;padding-bottom:14px;padding-left:24px"><?php esc_html_e('Learn More', 'saaslauncher') ?></a></div>
                            <!-- /wp:button -->
                        </div>
                        <!-- /wp:buttons -->
                    </div>
                    <!-- /wp:group -->
                </div>
            </div>
            <!-- /wp:cover -->
        </div>
        <!-- /wp:column -->

        <!-- wp:column -->
        <div class="wp-block-column"><!-- wp:cover {"url":"<?php echo esc_url($saaslauncher_images[3]) ?>","id":11694,"dimRatio":0,"customOverlayColor":"#fcfcfb","isUserOverlayColor":false,"contentPosition":"top left","isDark":false,"className":"is-style-saaslauncher-cover-hover-effect-with-shadow","style":{"spacing":{"padding":{"top":"32px","bottom":"32px","left":"32px","right":"32px"}},"border":{"color":"#e9e9e9","width":"1px","radius":"20px"}},"layout":{"type":"constrained"}} -->
            <div class="wp-block-cover is-light has-custom-content-position is-position-top-left is-style-saaslauncher-cover-hover-effect-with-shadow has-border-color" style="border-color:#e9e9e9;border-width:1px;border-radius:20px;padding-top:32px;padding-right:32px;padding-bottom:32px;padding-left:32px"><span aria-hidden="true" class="wp-block-cover__background has-background-dim-0 has-background-dim" style="background-color:#fcfcfb"></span><img class="wp-block-cover__image-background wp-image-11694" alt="" src="<?php echo esc_url($saaslauncher_images[3]) ?>" data-object-fit="cover" />
                <div class="wp-block-cover__inner-container"><!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|30","margin":{"top":"0","bottom":"0"}}},"layout":{"type":"constrained","contentSize":"320px","justifyContent":"left"}} -->
                    <div class="wp-block-group" style="margin-top:0;margin-bottom:0"><!-- wp:heading {"textAlign":"left","level":3,"style":{"typography":{"fontStyle":"normal","fontWeight":"600"}},"fontSize":"big"} -->
                        <h3 class="wp-block-heading has-text-align-left has-big-font-size" style="font-style:normal;font-weight:600"><?php esc_html_e('Automated Workflows', 'saaslauncher') ?></h3>
                        <!-- /wp:heading -->

                        <!-- wp:paragraph -->
                        <p><?php esc_html_e('Lorem Ipsum is simply text of the printing and typesetting industry.', 'saaslauncher') ?></p>
                        <!-- /wp:paragraph -->

                        <!-- wp:buttons {"className":"is-style-button-zoom-on-hover","style":{"spacing":{"margin":{"top":"32px"}}},"layout":{"type":"flex"}} -->
                        <div class="wp-block-buttons is-style-button-zoom-on-hover" style="margin-top:32px"><!-- wp:button {"textColor":"primary","className":"is-style-button-hover-secondary-bgcolor","style":{"border":{"radius":"12px"},"spacing":{"padding":{"left":"24px","right":"24px","top":"14px","bottom":"14px"}},"color":{"background":"#0ec97f26"},"elements":{"link":{"color":{"text":"var:preset|color|primary"}}}},"fontSize":"normal"} -->
                            <div class="wp-block-button has-custom-font-size is-style-button-hover-secondary-bgcolor has-normal-font-size"><a class="wp-block-button__link has-primary-color has-text-color has-background has-link-color wp-element-button" style="border-radius:12px;background-color:#0ec97f26;padding-top:14px;padding-right:24px;padding-bottom:14px;padding-left:24px"><?php esc_html_e('Learn More', 'saaslauncher') ?></a></div>
                            <!-- /wp:button -->
                        </div>
                        <!-- /wp:buttons -->
                    </div>
                    <!-- /wp:group -->
                </div>
            </div>
            <!-- /wp:cover -->
        </div>
        <!-- /wp:column -->

        <!-- wp:column -->
        <div class="wp-block-column"><!-- wp:cover {"url":"<?php echo esc_url($saaslauncher_images[4]) ?>","id":11697,"dimRatio":0,"customOverlayColor":"#fefefb","isUserOverlayColor":false,"contentPosition":"top left","isDark":false,"className":"is-style-saaslauncher-cover-hover-effect-with-shadow","style":{"spacing":{"padding":{"top":"32px","bottom":"32px","left":"32px","right":"32px"}},"border":{"radius":"20px","color":"#e9e9e9","width":"1px"}},"layout":{"type":"constrained"}} -->
            <div class="wp-block-cover is-light has-custom-content-position is-position-top-left is-style-saaslauncher-cover-hover-effect-with-shadow has-border-color" style="border-color:#e9e9e9;border-width:1px;border-radius:20px;padding-top:32px;padding-right:32px;padding-bottom:32px;padding-left:32px"><span aria-hidden="true" class="wp-block-cover__background has-background-dim-0 has-background-dim" style="background-color:#fefefb"></span><img class="wp-block-cover__image-background wp-image-11697" alt="" src="<?php echo esc_url($saaslauncher_images[4]) ?>" data-object-fit="cover" />
                <div class="wp-block-cover__inner-container"><!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|30","margin":{"top":"0","bottom":"0"}}},"layout":{"type":"constrained","contentSize":"320px","justifyContent":"left"}} -->
                    <div class="wp-block-group" style="margin-top:0;margin-bottom:0"><!-- wp:heading {"textAlign":"left","level":3,"style":{"typography":{"fontStyle":"normal","fontWeight":"600"}},"fontSize":"big"} -->
                        <h3 class="wp-block-heading has-text-align-left has-big-font-size" style="font-style:normal;font-weight:600"><?php esc_html_e('AI-Powered Insights &amp; Recommendations', 'saaslauncher') ?></h3>
                        <!-- /wp:heading -->

                        <!-- wp:paragraph -->
                        <p><?php esc_html_e('Lorem Ipsum is simply text of the printing and typesetting industry.', 'saaslauncher') ?></p>
                        <!-- /wp:paragraph -->

                        <!-- wp:buttons {"className":"is-style-button-zoom-on-hover","style":{"spacing":{"margin":{"top":"32px"}}},"layout":{"type":"flex"}} -->
                        <div class="wp-block-buttons is-style-button-zoom-on-hover" style="margin-top:32px"><!-- wp:button {"textColor":"primary","className":"is-style-button-hover-secondary-bgcolor","style":{"border":{"radius":"12px"},"spacing":{"padding":{"left":"24px","right":"24px","top":"14px","bottom":"14px"}},"color":{"background":"#0ec97f26"},"elements":{"link":{"color":{"text":"var:preset|color|primary"}}}},"fontSize":"normal"} -->
                            <div class="wp-block-button has-custom-font-size is-style-button-hover-secondary-bgcolor has-normal-font-size"><a class="wp-block-button__link has-primary-color has-text-color has-background has-link-color wp-element-button" style="border-radius:12px;background-color:#0ec97f26;padding-top:14px;padding-right:24px;padding-bottom:14px;padding-left:24px"><?php esc_html_e('Learn More', 'saaslauncher') ?></a></div>
                            <!-- /wp:button -->
                        </div>
                        <!-- /wp:buttons -->
                    </div>
                    <!-- /wp:group -->
                </div>
            </div>
            <!-- /wp:cover -->
        </div>
        <!-- /wp:column -->
    </div>
    <!-- /wp:columns -->
</div>
<!-- /wp:group -->