<?php

/**
 * Title: Services Grid 2
 * Slug: saaslauncher/services-grid-2
 * Categories: saaslauncher-service
 */
$saaslauncher_url = trailingslashit(get_template_directory_uri());
$saaslauncher_images = array(
    $saaslauncher_url . 'assets/images/work_1.png',
    $saaslauncher_url . 'assets/images/work_2.png',
    $saaslauncher_url . 'assets/images/work_3.png',
    $saaslauncher_url . 'assets/images/work_4.png',
    $saaslauncher_url . 'assets/images/work_5.png',
    $saaslauncher_url . 'assets/images/work_6.png',
);
?>
<!-- wp:group {"align":"full","metadata":{"categories":["saaslauncher"],"patternName":"saaslauncher/services-grid-2","name":"Service Section with big Image"},"style":{"spacing":{"padding":{"top":"7rem","bottom":"7rem","left":"var:preset|spacing|40","right":"var:preset|spacing|40"},"margin":{"top":"0","bottom":"0"}}},"backgroundColor":"black-color","layout":{"type":"constrained","contentSize":"1180px"}} -->
<div class="wp-block-group alignfull has-black-color-background-color has-background" style="margin-top:0;margin-bottom:0;padding-top:7rem;padding-right:var(--wp--preset--spacing--40);padding-bottom:7rem;padding-left:var(--wp--preset--spacing--40)"><!-- wp:group {"style":{"spacing":{"margin":{"bottom":"64px"}}},"layout":{"type":"constrained","contentSize":"740px"}} -->
    <div class="wp-block-group" style="margin-bottom:64px"><!-- wp:group {"layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"center"}} -->
        <div class="wp-block-group"><!-- wp:group {"className":"is-style-default","style":{"spacing":{"padding":{"top":"8px","bottom":"8px","left":"24px","right":"24px"}},"border":{"radius":"60px","width":"1px"}},"borderColor":"border-color","layout":{"type":"constrained"}} -->
            <div class="wp-block-group is-style-default has-border-color has-border-color-border-color" style="border-width:1px;border-radius:60px;padding-top:8px;padding-right:24px;padding-bottom:8px;padding-left:24px"><!-- wp:heading {"level":5,"style":{"elements":{"link":{"color":{"text":"var:preset|color|light-color"}}},"typography":{"textTransform":"uppercase"}},"textColor":"light-color","fontSize":"small"} -->
                <h5 class="wp-block-heading has-light-color-color has-text-color has-link-color has-small-font-size" style="text-transform:uppercase"><?php esc_html_e('Our Services', 'saaslauncher') ?></h5>
                <!-- /wp:heading -->
            </div>
            <!-- /wp:group -->
        </div>
        <!-- /wp:group -->

        <!-- wp:heading {"textAlign":"center","level":1,"style":{"elements":{"link":{"color":{"text":"var:preset|color|light-color"}}},"typography":{"fontStyle":"normal","fontWeight":"600","lineHeight":"1.2"}},"textColor":"light-color"} -->
        <h1 class="wp-block-heading has-text-align-center has-light-color-color has-text-color has-link-color" style="font-style:normal;font-weight:600;line-height:1.2"><?php esc_html_e('End-to-End Solutions to Empower Your Business', 'saaslauncher') ?></h1>
        <!-- /wp:heading -->

        <!-- wp:paragraph {"align":"center","style":{"elements":{"link":{"color":{"text":"var:preset|color|foreground-alt"}}}},"textColor":"foreground-alt"} -->
        <p class="has-text-align-center has-foreground-alt-color has-text-color has-link-color"><?php esc_html_e('Lorem ipsum is placeholder text commonly used in the graphic, print, and publishing industries for previewing layouts and visual mockups.', 'saaslauncher') ?></p>
        <!-- /wp:paragraph -->
    </div>
    <!-- /wp:group -->

    <!-- wp:columns {"verticalAlignment":"top","style":{"spacing":{"blockGap":{"top":"var:preset|spacing|40","left":"28px"}}}} -->
    <div class="wp-block-columns are-vertically-aligned-top"><!-- wp:column {"verticalAlignment":"top","width":"50%","style":{"border":{"width":"1px"}},"borderColor":"border-color"} -->
        <div class="wp-block-column is-vertically-aligned-top has-border-color has-border-color-border-color" style="border-width:1px;flex-basis:50%"><!-- wp:cover {"url":"<?php echo esc_url($saaslauncher_images[0]) ?>","id":8714,"dimRatio":0,"customOverlayColor":"#9fa1ae","isUserOverlayColor":true,"minHeight":280,"contentPosition":"bottom left","isDark":false,"layout":{"type":"constrained"}} -->
            <div class="wp-block-cover is-light has-custom-content-position is-position-bottom-left" style="min-height:280px"><span aria-hidden="true" class="wp-block-cover__background has-background-dim-0 has-background-dim" style="background-color:#9fa1ae"></span><img class="wp-block-cover__image-background wp-image-8714" alt="" src="<?php echo esc_url($saaslauncher_images[0]) ?>" data-object-fit="cover" />
                <div class="wp-block-cover__inner-container"><!-- wp:paragraph {"align":"center","placeholder":"Write title…","fontSize":"large"} -->
                    <p class="has-text-align-center has-large-font-size"></p>
                    <!-- /wp:paragraph -->
                </div>
            </div>
            <!-- /wp:cover -->

            <!-- wp:group {"style":{"spacing":{"padding":{"top":"28px","bottom":"28px","left":"28px","right":"28px"},"blockGap":"var:preset|spacing|40","margin":{"top":"0px"}}},"layout":{"type":"constrained","contentSize":"100%","justifyContent":"right"}} -->
            <div class="wp-block-group" style="margin-top:0px;padding-top:28px;padding-right:28px;padding-bottom:28px;padding-left:28px"><!-- wp:heading {"textAlign":"center","level":4,"style":{"elements":{"link":{"color":{"text":"var:preset|color|light-color"}}},"typography":{"lineHeight":"1.3"}},"textColor":"light-color","fontSize":"big"} -->
                <h4 class="wp-block-heading has-text-align-center has-light-color-color has-text-color has-link-color has-big-font-size" style="line-height:1.3"><?php esc_html_e('Branding', 'saaslauncher') ?></h4>
                <!-- /wp:heading -->

                <!-- wp:paragraph {"align":"center","style":{"elements":{"link":{"color":{"text":"var:preset|color|foreground-alt"}}},"spacing":{"margin":{"bottom":"10px"}}},"textColor":"foreground-alt"} -->
                <p class="has-text-align-center has-foreground-alt-color has-text-color has-link-color" style="margin-bottom:10px"><?php esc_html_e('Lorem ipsum is placeholder text commonly used in the graphic, print, and publishing industries for previewing layouts and visual mockups.', 'saaslauncher') ?></p>
                <!-- /wp:paragraph -->

                <!-- wp:buttons {"style":{"spacing":{"margin":{"top":"0","bottom":"0"}}},"layout":{"type":"flex","justifyContent":"center"}} -->
                <div class="wp-block-buttons" style="margin-top:0;margin-bottom:0"><!-- wp:button {"backgroundColor":"transparent","textColor":"light-color","className":"is-style-button-hover-secondary-color","style":{"border":{"radius":"0px","bottom":{"width":"1px"}},"elements":{"link":{"color":{"text":"var:preset|color|light-color"}}},"spacing":{"padding":{"left":"0","right":"0","top":"var:preset|spacing|30","bottom":"var:preset|spacing|30"}}},"fontSize":"normal"} -->
                    <div class="wp-block-button has-custom-font-size is-style-button-hover-secondary-color has-normal-font-size"><a class="wp-block-button__link has-light-color-color has-transparent-background-color has-text-color has-background has-link-color wp-element-button" style="border-radius:0px;border-bottom-width:1px;padding-top:var(--wp--preset--spacing--30);padding-right:0;padding-bottom:var(--wp--preset--spacing--30);padding-left:0"><?php esc_html_e('Explore More', 'saaslauncher') ?></a></div>
                    <!-- /wp:button -->
                </div>
                <!-- /wp:buttons -->
            </div>
            <!-- /wp:group -->
        </div>
        <!-- /wp:column -->

        <!-- wp:column {"verticalAlignment":"top","width":"50%","style":{"border":{"width":"1px"}},"borderColor":"border-color"} -->
        <div class="wp-block-column is-vertically-aligned-top has-border-color has-border-color-border-color" style="border-width:1px;flex-basis:50%"><!-- wp:cover {"url":"<?php echo esc_url($saaslauncher_images[1]) ?>","id":8714,"dimRatio":0,"customOverlayColor":"#9fa1ae","isUserOverlayColor":true,"minHeight":280,"contentPosition":"bottom left","isDark":false,"layout":{"type":"constrained"}} -->
            <div class="wp-block-cover is-light has-custom-content-position is-position-bottom-left" style="min-height:280px"><span aria-hidden="true" class="wp-block-cover__background has-background-dim-0 has-background-dim" style="background-color:#9fa1ae"></span><img class="wp-block-cover__image-background wp-image-8714" alt="" src="<?php echo esc_url($saaslauncher_images[1]) ?>" data-object-fit="cover" />
                <div class="wp-block-cover__inner-container"><!-- wp:paragraph {"align":"center","placeholder":"Write title…","fontSize":"large"} -->
                    <p class="has-text-align-center has-large-font-size"></p>
                    <!-- /wp:paragraph -->
                </div>
            </div>
            <!-- /wp:cover -->

            <!-- wp:group {"style":{"spacing":{"padding":{"top":"28px","bottom":"28px","left":"28px","right":"28px"},"blockGap":"var:preset|spacing|40","margin":{"top":"0px"}}},"layout":{"type":"constrained","contentSize":"100%","justifyContent":"right"}} -->
            <div class="wp-block-group" style="margin-top:0px;padding-top:28px;padding-right:28px;padding-bottom:28px;padding-left:28px"><!-- wp:heading {"textAlign":"center","level":4,"style":{"elements":{"link":{"color":{"text":"var:preset|color|light-color"}}},"typography":{"lineHeight":"1.3"}},"textColor":"light-color","fontSize":"big"} -->
                <h4 class="wp-block-heading has-text-align-center has-light-color-color has-text-color has-link-color has-big-font-size" style="line-height:1.3"><?php esc_html_e('Digital Marketing', 'saaslauncher') ?></h4>
                <!-- /wp:heading -->

                <!-- wp:paragraph {"align":"center","style":{"elements":{"link":{"color":{"text":"var:preset|color|foreground-alt"}}},"spacing":{"margin":{"bottom":"10px"}}},"textColor":"foreground-alt"} -->
                <p class="has-text-align-center has-foreground-alt-color has-text-color has-link-color" style="margin-bottom:10px"><?php esc_html_e('Lorem ipsum is placeholder text commonly used in the graphic, print, and publishing industries for previewing layouts and visual mockups.', 'saaslauncher') ?></p>
                <!-- /wp:paragraph -->

                <!-- wp:buttons {"style":{"spacing":{"margin":{"top":"0","bottom":"0"}}},"layout":{"type":"flex","justifyContent":"center"}} -->
                <div class="wp-block-buttons" style="margin-top:0;margin-bottom:0"><!-- wp:button {"backgroundColor":"transparent","textColor":"light-color","className":"is-style-button-hover-secondary-color","style":{"border":{"radius":"0px","bottom":{"width":"1px"}},"elements":{"link":{"color":{"text":"var:preset|color|light-color"}}},"spacing":{"padding":{"left":"0","right":"0","top":"var:preset|spacing|30","bottom":"var:preset|spacing|30"}}},"fontSize":"normal"} -->
                    <div class="wp-block-button has-custom-font-size is-style-button-hover-secondary-color has-normal-font-size"><a class="wp-block-button__link has-light-color-color has-transparent-background-color has-text-color has-background has-link-color wp-element-button" style="border-radius:0px;border-bottom-width:1px;padding-top:var(--wp--preset--spacing--30);padding-right:0;padding-bottom:var(--wp--preset--spacing--30);padding-left:0"><?php esc_html_e('Explore More', 'saaslauncher') ?></a></div>
                    <!-- /wp:button -->
                </div>
                <!-- /wp:buttons -->
            </div>
            <!-- /wp:group -->
        </div>
        <!-- /wp:column -->

        <!-- wp:column {"verticalAlignment":"top","width":"50%","style":{"border":{"width":"1px"}},"borderColor":"border-color"} -->
        <div class="wp-block-column is-vertically-aligned-top has-border-color has-border-color-border-color" style="border-width:1px;flex-basis:50%"><!-- wp:cover {"url":"<?php echo esc_url($saaslauncher_images[2]) ?>","id":8714,"dimRatio":0,"customOverlayColor":"#9fa1ae","isUserOverlayColor":true,"minHeight":280,"contentPosition":"bottom left","isDark":false,"layout":{"type":"constrained"}} -->
            <div class="wp-block-cover is-light has-custom-content-position is-position-bottom-left" style="min-height:280px"><span aria-hidden="true" class="wp-block-cover__background has-background-dim-0 has-background-dim" style="background-color:#9fa1ae"></span><img class="wp-block-cover__image-background wp-image-8714" alt="" src="<?php echo esc_url($saaslauncher_images[2]) ?>" data-object-fit="cover" />
                <div class="wp-block-cover__inner-container"><!-- wp:paragraph {"align":"center","placeholder":"Write title…","fontSize":"large"} -->
                    <p class="has-text-align-center has-large-font-size"></p>
                    <!-- /wp:paragraph -->
                </div>
            </div>
            <!-- /wp:cover -->

            <!-- wp:group {"style":{"spacing":{"padding":{"top":"28px","bottom":"28px","left":"28px","right":"28px"},"blockGap":"var:preset|spacing|40","margin":{"top":"0px"}}},"layout":{"type":"constrained","contentSize":"100%","justifyContent":"right"}} -->
            <div class="wp-block-group" style="margin-top:0px;padding-top:28px;padding-right:28px;padding-bottom:28px;padding-left:28px"><!-- wp:heading {"textAlign":"center","level":4,"style":{"elements":{"link":{"color":{"text":"var:preset|color|light-color"}}},"typography":{"lineHeight":"1.3"}},"textColor":"light-color","fontSize":"big"} -->
                <h4 class="wp-block-heading has-text-align-center has-light-color-color has-text-color has-link-color has-big-font-size" style="line-height:1.3"><?php esc_html_e('Startup Ideas', 'saaslauncher') ?></h4>
                <!-- /wp:heading -->

                <!-- wp:paragraph {"align":"center","style":{"elements":{"link":{"color":{"text":"var:preset|color|foreground-alt"}}},"spacing":{"margin":{"bottom":"10px"}}},"textColor":"foreground-alt"} -->
                <p class="has-text-align-center has-foreground-alt-color has-text-color has-link-color" style="margin-bottom:10px"><?php esc_html_e('Lorem ipsum is placeholder text commonly used in the graphic, print, and publishing industries for previewing layouts and visual mockups.', 'saaslauncher') ?></p>
                <!-- /wp:paragraph -->

                <!-- wp:buttons {"style":{"spacing":{"margin":{"top":"0","bottom":"0"}}},"layout":{"type":"flex","justifyContent":"center"}} -->
                <div class="wp-block-buttons" style="margin-top:0;margin-bottom:0"><!-- wp:button {"backgroundColor":"transparent","textColor":"light-color","className":"is-style-button-hover-secondary-color","style":{"border":{"radius":"0px","bottom":{"width":"1px"}},"elements":{"link":{"color":{"text":"var:preset|color|light-color"}}},"spacing":{"padding":{"left":"0","right":"0","top":"var:preset|spacing|30","bottom":"var:preset|spacing|30"}}},"fontSize":"normal"} -->
                    <div class="wp-block-button has-custom-font-size is-style-button-hover-secondary-color has-normal-font-size"><a class="wp-block-button__link has-light-color-color has-transparent-background-color has-text-color has-background has-link-color wp-element-button" style="border-radius:0px;border-bottom-width:1px;padding-top:var(--wp--preset--spacing--30);padding-right:0;padding-bottom:var(--wp--preset--spacing--30);padding-left:0"><?php esc_html_e('Explore More', 'saaslauncher') ?></a></div>
                    <!-- /wp:button -->
                </div>
                <!-- /wp:buttons -->
            </div>
            <!-- /wp:group -->
        </div>
        <!-- /wp:column -->
    </div>
    <!-- /wp:columns -->

    <!-- wp:columns {"verticalAlignment":"top","style":{"spacing":{"blockGap":{"top":"var:preset|spacing|40","left":"28px"},"margin":{"top":"28px"}}}} -->
    <div class="wp-block-columns are-vertically-aligned-top" style="margin-top:28px"><!-- wp:column {"verticalAlignment":"top","width":"50%","style":{"border":{"width":"1px"}},"borderColor":"border-color"} -->
        <div class="wp-block-column is-vertically-aligned-top has-border-color has-border-color-border-color" style="border-width:1px;flex-basis:50%"><!-- wp:cover {"url":"<?php echo esc_url($saaslauncher_images[3]) ?>","id":8714,"dimRatio":0,"customOverlayColor":"#9fa1ae","isUserOverlayColor":true,"minHeight":280,"contentPosition":"bottom left","isDark":false,"layout":{"type":"constrained"}} -->
            <div class="wp-block-cover is-light has-custom-content-position is-position-bottom-left" style="min-height:280px"><span aria-hidden="true" class="wp-block-cover__background has-background-dim-0 has-background-dim" style="background-color:#9fa1ae"></span><img class="wp-block-cover__image-background wp-image-8714" alt="" src="<?php echo esc_url($saaslauncher_images[3]) ?>" data-object-fit="cover" />
                <div class="wp-block-cover__inner-container"><!-- wp:paragraph {"align":"center","placeholder":"Write title…","fontSize":"large"} -->
                    <p class="has-text-align-center has-large-font-size"></p>
                    <!-- /wp:paragraph -->
                </div>
            </div>
            <!-- /wp:cover -->

            <!-- wp:group {"style":{"spacing":{"padding":{"top":"28px","bottom":"28px","left":"28px","right":"28px"},"blockGap":"var:preset|spacing|40","margin":{"top":"0px"}}},"layout":{"type":"constrained","contentSize":"100%","justifyContent":"right"}} -->
            <div class="wp-block-group" style="margin-top:0px;padding-top:28px;padding-right:28px;padding-bottom:28px;padding-left:28px"><!-- wp:heading {"textAlign":"center","level":4,"style":{"elements":{"link":{"color":{"text":"var:preset|color|light-color"}}},"typography":{"lineHeight":"1.3"}},"textColor":"light-color","fontSize":"big"} -->
                <h4 class="wp-block-heading has-text-align-center has-light-color-color has-text-color has-link-color has-big-font-size" style="line-height:1.3"><?php esc_html_e('Social Media Marketing', 'saaslauncher') ?></h4>
                <!-- /wp:heading -->

                <!-- wp:paragraph {"align":"center","style":{"elements":{"link":{"color":{"text":"var:preset|color|foreground-alt"}}},"spacing":{"margin":{"bottom":"10px"}}},"textColor":"foreground-alt"} -->
                <p class="has-text-align-center has-foreground-alt-color has-text-color has-link-color" style="margin-bottom:10px"><?php esc_html_e('Lorem ipsum is placeholder text commonly used in the graphic, print, and publishing industries for previewing layouts and visual mockups.', 'saaslauncher') ?></p>
                <!-- /wp:paragraph -->

                <!-- wp:buttons {"style":{"spacing":{"margin":{"top":"0","bottom":"0"}}},"layout":{"type":"flex","justifyContent":"center"}} -->
                <div class="wp-block-buttons" style="margin-top:0;margin-bottom:0"><!-- wp:button {"backgroundColor":"transparent","textColor":"light-color","className":"is-style-button-hover-secondary-color","style":{"border":{"radius":"0px","bottom":{"width":"1px"}},"elements":{"link":{"color":{"text":"var:preset|color|light-color"}}},"spacing":{"padding":{"left":"0","right":"0","top":"var:preset|spacing|30","bottom":"var:preset|spacing|30"}}},"fontSize":"normal"} -->
                    <div class="wp-block-button has-custom-font-size is-style-button-hover-secondary-color has-normal-font-size"><a class="wp-block-button__link has-light-color-color has-transparent-background-color has-text-color has-background has-link-color wp-element-button" style="border-radius:0px;border-bottom-width:1px;padding-top:var(--wp--preset--spacing--30);padding-right:0;padding-bottom:var(--wp--preset--spacing--30);padding-left:0"><?php esc_html_e('Explore More', 'saaslauncher') ?></a></div>
                    <!-- /wp:button -->
                </div>
                <!-- /wp:buttons -->
            </div>
            <!-- /wp:group -->
        </div>
        <!-- /wp:column -->

        <!-- wp:column {"verticalAlignment":"top","width":"50%","style":{"border":{"width":"1px"}},"borderColor":"border-color"} -->
        <div class="wp-block-column is-vertically-aligned-top has-border-color has-border-color-border-color" style="border-width:1px;flex-basis:50%"><!-- wp:cover {"url":"<?php echo esc_url($saaslauncher_images[4]) ?>","id":8714,"dimRatio":0,"customOverlayColor":"#9fa1ae","isUserOverlayColor":true,"minHeight":280,"contentPosition":"bottom left","isDark":false,"layout":{"type":"constrained"}} -->
            <div class="wp-block-cover is-light has-custom-content-position is-position-bottom-left" style="min-height:280px"><span aria-hidden="true" class="wp-block-cover__background has-background-dim-0 has-background-dim" style="background-color:#9fa1ae"></span><img class="wp-block-cover__image-background wp-image-8714" alt="" src="<?php echo esc_url($saaslauncher_images[4]) ?>" data-object-fit="cover" />
                <div class="wp-block-cover__inner-container"><!-- wp:paragraph {"align":"center","placeholder":"Write title…","fontSize":"large"} -->
                    <p class="has-text-align-center has-large-font-size"></p>
                    <!-- /wp:paragraph -->
                </div>
            </div>
            <!-- /wp:cover -->

            <!-- wp:group {"style":{"spacing":{"padding":{"top":"28px","bottom":"28px","left":"28px","right":"28px"},"blockGap":"var:preset|spacing|40","margin":{"top":"0px"}}},"layout":{"type":"constrained","contentSize":"100%","justifyContent":"right"}} -->
            <div class="wp-block-group" style="margin-top:0px;padding-top:28px;padding-right:28px;padding-bottom:28px;padding-left:28px"><!-- wp:heading {"textAlign":"center","level":4,"style":{"elements":{"link":{"color":{"text":"var:preset|color|light-color"}}},"typography":{"lineHeight":"1.3"}},"textColor":"light-color","fontSize":"big"} -->
                <h4 class="wp-block-heading has-text-align-center has-light-color-color has-text-color has-link-color has-big-font-size" style="line-height:1.3"><?php esc_html_e('Content Writing', 'saaslauncher') ?></h4>
                <!-- /wp:heading -->

                <!-- wp:paragraph {"align":"center","style":{"elements":{"link":{"color":{"text":"var:preset|color|foreground-alt"}}},"spacing":{"margin":{"bottom":"10px"}}},"textColor":"foreground-alt"} -->
                <p class="has-text-align-center has-foreground-alt-color has-text-color has-link-color" style="margin-bottom:10px"><?php esc_html_e('Lorem ipsum is placeholder text commonly used in the graphic, print, and publishing industries for previewing layouts and visual mockups.', 'saaslauncher') ?></p>
                <!-- /wp:paragraph -->

                <!-- wp:buttons {"style":{"spacing":{"margin":{"top":"0","bottom":"0"}}},"layout":{"type":"flex","justifyContent":"center"}} -->
                <div class="wp-block-buttons" style="margin-top:0;margin-bottom:0"><!-- wp:button {"backgroundColor":"transparent","textColor":"light-color","className":"is-style-button-hover-secondary-color","style":{"border":{"radius":"0px","bottom":{"width":"1px"}},"elements":{"link":{"color":{"text":"var:preset|color|light-color"}}},"spacing":{"padding":{"left":"0","right":"0","top":"var:preset|spacing|30","bottom":"var:preset|spacing|30"}}},"fontSize":"normal"} -->
                    <div class="wp-block-button has-custom-font-size is-style-button-hover-secondary-color has-normal-font-size"><a class="wp-block-button__link has-light-color-color has-transparent-background-color has-text-color has-background has-link-color wp-element-button" style="border-radius:0px;border-bottom-width:1px;padding-top:var(--wp--preset--spacing--30);padding-right:0;padding-bottom:var(--wp--preset--spacing--30);padding-left:0"><?php esc_html_e('Explore More', 'saaslauncher') ?></a></div>
                    <!-- /wp:button -->
                </div>
                <!-- /wp:buttons -->
            </div>
            <!-- /wp:group -->
        </div>
        <!-- /wp:column -->

        <!-- wp:column {"verticalAlignment":"top","width":"50%","style":{"border":{"width":"1px"}},"borderColor":"border-color"} -->
        <div class="wp-block-column is-vertically-aligned-top has-border-color has-border-color-border-color" style="border-width:1px;flex-basis:50%"><!-- wp:cover {"url":"<?php echo esc_url($saaslauncher_images[5]) ?>","id":8714,"dimRatio":0,"customOverlayColor":"#9fa1ae","isUserOverlayColor":true,"minHeight":280,"contentPosition":"bottom left","isDark":false,"layout":{"type":"constrained"}} -->
            <div class="wp-block-cover is-light has-custom-content-position is-position-bottom-left" style="min-height:280px"><span aria-hidden="true" class="wp-block-cover__background has-background-dim-0 has-background-dim" style="background-color:#9fa1ae"></span><img class="wp-block-cover__image-background wp-image-8714" alt="" src="<?php echo esc_url($saaslauncher_images[5]) ?>" data-object-fit="cover" />
                <div class="wp-block-cover__inner-container"><!-- wp:paragraph {"align":"center","placeholder":"Write title…","fontSize":"large"} -->
                    <p class="has-text-align-center has-large-font-size"></p>
                    <!-- /wp:paragraph -->
                </div>
            </div>
            <!-- /wp:cover -->

            <!-- wp:group {"style":{"spacing":{"padding":{"top":"28px","bottom":"28px","left":"28px","right":"28px"},"blockGap":"var:preset|spacing|40","margin":{"top":"0px"}}},"layout":{"type":"constrained","contentSize":"100%","justifyContent":"right"}} -->
            <div class="wp-block-group" style="margin-top:0px;padding-top:28px;padding-right:28px;padding-bottom:28px;padding-left:28px"><!-- wp:heading {"textAlign":"center","level":4,"style":{"elements":{"link":{"color":{"text":"var:preset|color|light-color"}}},"typography":{"lineHeight":"1.3"}},"textColor":"light-color","fontSize":"big"} -->
                <h4 class="wp-block-heading has-text-align-center has-light-color-color has-text-color has-link-color has-big-font-size" style="line-height:1.3"><?php esc_html_e('Business Strategy', 'saaslauncher') ?></h4>
                <!-- /wp:heading -->

                <!-- wp:paragraph {"align":"center","style":{"elements":{"link":{"color":{"text":"var:preset|color|foreground-alt"}}},"spacing":{"margin":{"bottom":"10px"}}},"textColor":"foreground-alt"} -->
                <p class="has-text-align-center has-foreground-alt-color has-text-color has-link-color" style="margin-bottom:10px"><?php esc_html_e('Lorem ipsum is placeholder text commonly used in the graphic, print, and publishing industries for previewing layouts and visual mockups.', 'saaslauncher') ?></p>
                <!-- /wp:paragraph -->

                <!-- wp:buttons {"style":{"spacing":{"margin":{"top":"0","bottom":"0"}}},"layout":{"type":"flex","justifyContent":"center"}} -->
                <div class="wp-block-buttons" style="margin-top:0;margin-bottom:0"><!-- wp:button {"backgroundColor":"transparent","textColor":"light-color","className":"is-style-button-hover-secondary-color","style":{"border":{"radius":"0px","bottom":{"width":"1px"}},"elements":{"link":{"color":{"text":"var:preset|color|light-color"}}},"spacing":{"padding":{"left":"0","right":"0","top":"var:preset|spacing|30","bottom":"var:preset|spacing|30"}}},"fontSize":"normal"} -->
                    <div class="wp-block-button has-custom-font-size is-style-button-hover-secondary-color has-normal-font-size"><a class="wp-block-button__link has-light-color-color has-transparent-background-color has-text-color has-background has-link-color wp-element-button" style="border-radius:0px;border-bottom-width:1px;padding-top:var(--wp--preset--spacing--30);padding-right:0;padding-bottom:var(--wp--preset--spacing--30);padding-left:0"><?php esc_html_e('Explore More', 'saaslauncher') ?></a></div>
                    <!-- /wp:button -->
                </div>
                <!-- /wp:buttons -->
            </div>
            <!-- /wp:group -->
        </div>
        <!-- /wp:column -->
    </div>
    <!-- /wp:columns -->
</div>
<!-- /wp:group -->