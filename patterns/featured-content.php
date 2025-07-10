<?php

/**
 * Title: Featured Content
 * Slug: saaslauncher/featured-content
 * Categories: saaslauncher-about
 */
$saaslauncher_url = trailingslashit(get_template_directory_uri());
$saaslauncher_images = array(
    $saaslauncher_url . 'assets/images/about_3.jpg',
    $saaslauncher_url . 'assets/images/about_5.jpg',
    $saaslauncher_url . 'assets/images/about_2.jpg',
);
?>
<!-- wp:group {"align":"full","style":{"spacing":{"padding":{"top":"0","bottom":"0","left":"0","right":"0"},"margin":{"top":"0","bottom":"0"}}},"layout":{"type":"constrained","contentSize":"100%"}} -->
<div class="wp-block-group alignfull" style="margin-top:0;margin-bottom:0;padding-top:0;padding-right:0;padding-bottom:0;padding-left:0"><!-- wp:group {"style":{"spacing":{"padding":{"top":"7rem","bottom":"4rem","left":"var:preset|spacing|40","right":"var:preset|spacing|40"},"margin":{"top":"0","bottom":"0"}}},"gradient":"gradient-three","layout":{"type":"constrained","contentSize":"1040px"}} -->
    <div class="wp-block-group has-gradient-three-gradient-background has-background" style="margin-top:0;margin-bottom:0;padding-top:7rem;padding-right:var(--wp--preset--spacing--40);padding-bottom:4rem;padding-left:var(--wp--preset--spacing--40)"><!-- wp:group {"style":{"spacing":{"margin":{"bottom":"84px"}}},"layout":{"type":"constrained","contentSize":"760px"}} -->
        <div class="wp-block-group" style="margin-bottom:84px"><!-- wp:group {"layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"center"}} -->
            <div class="wp-block-group"><!-- wp:group {"className":"is-style-saaslauncher-gradient-border","style":{"spacing":{"padding":{"top":"3px","bottom":"3px","left":"12px","right":"12px"}},"border":{"radius":"60px","width":"1px"}},"backgroundColor":"dark-shade","layout":{"type":"constrained"}} -->
                <div class="wp-block-group is-style-saaslauncher-gradient-border has-dark-shade-background-color has-background" style="border-width:1px;border-radius:60px;padding-top:3px;padding-right:12px;padding-bottom:3px;padding-left:12px"><!-- wp:heading {"level":5,"style":{"elements":{"link":{"color":{"text":"var:preset|color|light-color"}}}},"textColor":"light-color","fontSize":"small"} -->
                    <h5 class="wp-block-heading has-light-color-color has-text-color has-link-color has-small-font-size"><?php esc_html_e('Featured Sections', 'saaslauncher') ?></h5>
                    <!-- /wp:heading -->
                </div>
                <!-- /wp:group -->
            </div>
            <!-- /wp:group -->

            <!-- wp:heading {"textAlign":"center","level":1,"style":{"elements":{"link":{"color":{"text":"var:preset|color|light-color"}}},"typography":{"fontStyle":"normal","fontWeight":"500","lineHeight":"1.4"}},"textColor":"light-color","fontSize":"xxx-large"} -->
            <h1 class="wp-block-heading has-text-align-center has-light-color-color has-text-color has-link-color has-xxx-large-font-size" style="font-style:normal;font-weight:500;line-height:1.4"><?php esc_html_e('We Don’t Just Offer Software — We Offer Solutions', 'saaslauncher') ?></h1>
            <!-- /wp:heading -->

            <!-- wp:paragraph {"align":"center","style":{"elements":{"link":{"color":{"text":"var:preset|color|foreground-alt"}}}},"textColor":"foreground-alt"} -->
            <p class="has-text-align-center has-foreground-alt-color has-text-color has-link-color"><?php esc_html_e('Lorem ipsum is placeholder text commonly used in the graphic, print, and publishing industries for previewing layouts and visual mockups.', 'saaslauncher') ?></p>
            <!-- /wp:paragraph -->
        </div>
        <!-- /wp:group -->

        <!-- wp:columns {"verticalAlignment":"center","style":{"spacing":{"blockGap":{"top":"var:preset|spacing|40","left":"84px"}}}} -->
        <div class="wp-block-columns are-vertically-aligned-center"><!-- wp:column {"verticalAlignment":"center","width":"50%"} -->
            <div class="wp-block-column is-vertically-aligned-center" style="flex-basis:50%"><!-- wp:cover {"url":"<?php echo esc_url($saaslauncher_images[0]) ?>","id":47,"dimRatio":0,"customOverlayColor":"#9fa1ae","isUserOverlayColor":true,"minHeight":510,"isDark":false,"sizeSlug":"full","style":{"border":{"radius":"20px"}},"layout":{"type":"constrained"}} -->
                <div class="wp-block-cover is-light" style="border-radius:20px;min-height:510px"><img class="wp-block-cover__image-background wp-image-47 size-full" alt="" src="<?php echo esc_url($saaslauncher_images[0]) ?>" data-object-fit="cover" /><span aria-hidden="true" class="wp-block-cover__background has-background-dim-0 has-background-dim" style="background-color:#9fa1ae"></span>
                    <div class="wp-block-cover__inner-container"><!-- wp:paragraph {"align":"center","placeholder":"Write title…","fontSize":"large"} -->
                        <p class="has-text-align-center has-large-font-size"></p>
                        <!-- /wp:paragraph -->
                    </div>
                </div>
                <!-- /wp:cover -->
            </div>
            <!-- /wp:column -->

            <!-- wp:column {"verticalAlignment":"center","width":""} -->
            <div class="wp-block-column is-vertically-aligned-center"><!-- wp:group {"style":{"spacing":{"padding":{"top":"var:preset|spacing|40","bottom":"var:preset|spacing|40","left":"var:preset|spacing|40","right":"var:preset|spacing|40"},"blockGap":"var:preset|spacing|40"}},"layout":{"type":"constrained","contentSize":"","justifyContent":"right"}} -->
                <div class="wp-block-group" style="padding-top:var(--wp--preset--spacing--40);padding-right:var(--wp--preset--spacing--40);padding-bottom:var(--wp--preset--spacing--40);padding-left:var(--wp--preset--spacing--40)"><!-- wp:group {"style":{"spacing":{"margin":{"bottom":"24px"}}},"layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"left"}} -->
                    <div class="wp-block-group" style="margin-bottom:24px"><!-- wp:group {"className":"is-style-saaslauncher-gradient-border","style":{"spacing":{"padding":{"top":"3px","bottom":"3px","left":"12px","right":"12px"}},"border":{"radius":"60px","width":"1px"}},"backgroundColor":"dark-shade","layout":{"type":"constrained"}} -->
                        <div class="wp-block-group is-style-saaslauncher-gradient-border has-dark-shade-background-color has-background" style="border-width:1px;border-radius:60px;padding-top:3px;padding-right:12px;padding-bottom:3px;padding-left:12px"><!-- wp:heading {"level":5,"style":{"elements":{"link":{"color":{"text":"var:preset|color|light-color"}}}},"textColor":"light-color","fontSize":"small"} -->
                            <h5 class="wp-block-heading has-light-color-color has-text-color has-link-color has-small-font-size"><?php esc_html_e('Analytics &amp; Reporting', 'saaslauncher') ?></h5>
                            <!-- /wp:heading -->
                        </div>
                        <!-- /wp:group -->
                    </div>
                    <!-- /wp:group -->

                    <!-- wp:heading {"level":3,"style":{"elements":{"link":{"color":{"text":"var:preset|color|light-color"}}},"typography":{"lineHeight":"1.4","fontStyle":"normal","fontWeight":"500"}},"textColor":"light-color","fontSize":"xx-large"} -->
                    <h3 class="wp-block-heading has-light-color-color has-text-color has-link-color has-xx-large-font-size" style="font-style:normal;font-weight:500;line-height:1.4"><?php esc_html_e('Intelligent Insights at Your Fingertips', 'saaslauncher') ?></h3>
                    <!-- /wp:heading -->

                    <!-- wp:paragraph {"style":{"elements":{"link":{"color":{"text":"var:preset|color|light-color"}}},"spacing":{"margin":{"bottom":"28px"}}},"textColor":"light-color"} -->
                    <p class="has-light-color-color has-text-color has-link-color" style="margin-bottom:28px"><?php esc_html_e('Lorem ipsum is placeholder text commonly used in the graphic, print, and publishing industries for previewing layouts and visual mockups.', 'saaslauncher') ?></p>
                    <!-- /wp:paragraph -->

                    <!-- wp:buttons {"className":"is-style-button-transofom-on-hover","style":{"spacing":{"margin":{"top":"32px"}}}} -->
                    <div class="wp-block-buttons is-style-button-transofom-on-hover" style="margin-top:32px"><!-- wp:button {"gradient":"gradient-thirteen","className":"is-style-button-with-uparrow-icon","style":{"border":{"radius":"70px"}},"fontSize":"normal"} -->
                        <div class="wp-block-button is-style-button-with-uparrow-icon"><a class="wp-block-button__link has-gradient-thirteen-gradient-background has-background has-normal-font-size has-custom-font-size wp-element-button" style="border-radius:70px"><?php esc_html_e('Learn More', 'saaslauncher') ?></a></div>
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

    <!-- wp:group {"style":{"spacing":{"padding":{"top":"3rem","bottom":"4rem","left":"var:preset|spacing|40","right":"var:preset|spacing|40"},"margin":{"top":"0","bottom":"0"}}},"backgroundColor":"dark-shade","layout":{"type":"constrained","contentSize":"1040px"}} -->
    <div class="wp-block-group has-dark-shade-background-color has-background" style="margin-top:0;margin-bottom:0;padding-top:3rem;padding-right:var(--wp--preset--spacing--40);padding-bottom:4rem;padding-left:var(--wp--preset--spacing--40)"><!-- wp:columns {"verticalAlignment":"center","style":{"spacing":{"blockGap":{"top":"var:preset|spacing|40","left":"84px"}}}} -->
        <div class="wp-block-columns are-vertically-aligned-center"><!-- wp:column {"verticalAlignment":"center","width":"","style":{"spacing":{"padding":{"right":"0","left":"0","top":"var:preset|spacing|50","bottom":"var:preset|spacing|50"}}}} -->
            <div class="wp-block-column is-vertically-aligned-center" style="padding-top:var(--wp--preset--spacing--50);padding-right:0;padding-bottom:var(--wp--preset--spacing--50);padding-left:0"><!-- wp:group {"style":{"spacing":{"padding":{"top":"var:preset|spacing|40","bottom":"var:preset|spacing|40","left":"var:preset|spacing|40","right":"var:preset|spacing|40"},"blockGap":"var:preset|spacing|40"}},"layout":{"type":"constrained","contentSize":"","justifyContent":"left"}} -->
                <div class="wp-block-group" style="padding-top:var(--wp--preset--spacing--40);padding-right:var(--wp--preset--spacing--40);padding-bottom:var(--wp--preset--spacing--40);padding-left:var(--wp--preset--spacing--40)"><!-- wp:group {"style":{"spacing":{"margin":{"bottom":"24px"}}},"layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"left"}} -->
                    <div class="wp-block-group" style="margin-bottom:24px"><!-- wp:group {"className":"is-style-saaslauncher-gradient-border","style":{"spacing":{"padding":{"top":"3px","bottom":"3px","left":"12px","right":"12px"}},"border":{"radius":"60px","width":"1px"}},"backgroundColor":"dark-shade","layout":{"type":"constrained"}} -->
                        <div class="wp-block-group is-style-saaslauncher-gradient-border has-dark-shade-background-color has-background" style="border-width:1px;border-radius:60px;padding-top:3px;padding-right:12px;padding-bottom:3px;padding-left:12px"><!-- wp:heading {"level":5,"style":{"elements":{"link":{"color":{"text":"var:preset|color|light-color"}}}},"textColor":"light-color","fontSize":"small"} -->
                            <h5 class="wp-block-heading has-light-color-color has-text-color has-link-color has-small-font-size"><?php esc_html_e('Growth &amp; Scaling', 'saaslauncher') ?></h5>
                            <!-- /wp:heading -->
                        </div>
                        <!-- /wp:group -->
                    </div>
                    <!-- /wp:group -->

                    <!-- wp:heading {"level":3,"style":{"elements":{"link":{"color":{"text":"var:preset|color|light-color"}}},"typography":{"lineHeight":"1.4","fontStyle":"normal","fontWeight":"500"}},"textColor":"light-color","fontSize":"xx-large"} -->
                    <h3 class="wp-block-heading has-light-color-color has-text-color has-link-color has-xx-large-font-size" style="font-style:normal;font-weight:500;line-height:1.4"><?php esc_html_e('Unmatched Flexibility and Scalability', 'saaslauncher') ?></h3>
                    <!-- /wp:heading -->

                    <!-- wp:paragraph {"style":{"elements":{"link":{"color":{"text":"var:preset|color|light-color"}}},"spacing":{"margin":{"bottom":"28px"}}},"textColor":"light-color"} -->
                    <p class="has-light-color-color has-text-color has-link-color" style="margin-bottom:28px"><?php esc_html_e('Lorem ipsum is placeholder text commonly used in the graphic, print, and publishing industries for previewing layouts and visual mockups.', 'saaslauncher') ?></p>
                    <!-- /wp:paragraph -->

                    <!-- wp:buttons {"className":"is-style-button-transofom-on-hover","style":{"spacing":{"margin":{"top":"32px"}}}} -->
                    <div class="wp-block-buttons is-style-button-transofom-on-hover" style="margin-top:32px"><!-- wp:button {"gradient":"gradient-thirteen","className":"is-style-button-with-uparrow-icon","style":{"border":{"radius":"70px"}},"fontSize":"normal"} -->
                        <div class="wp-block-button is-style-button-with-uparrow-icon"><a class="wp-block-button__link has-gradient-thirteen-gradient-background has-background has-normal-font-size has-custom-font-size wp-element-button" style="border-radius:70px"><?php esc_html_e('Learn More', 'saaslauncher') ?></a></div>
                        <!-- /wp:button -->
                    </div>
                    <!-- /wp:buttons -->
                </div>
                <!-- /wp:group -->
            </div>
            <!-- /wp:column -->

            <!-- wp:column {"verticalAlignment":"center","width":"50%"} -->
            <div class="wp-block-column is-vertically-aligned-center" style="flex-basis:50%"><!-- wp:cover {"url":"<?php echo esc_url($saaslauncher_images[1]) ?>","id":1046,"dimRatio":0,"customOverlayColor":"#7455b0","isUserOverlayColor":true,"minHeight":510,"isDark":false,"sizeSlug":"full","style":{"border":{"radius":"20px"}},"layout":{"type":"constrained"}} -->
                <div class="wp-block-cover is-light" style="border-radius:20px;min-height:510px"><img class="wp-block-cover__image-background wp-image-1046 size-full" alt="" src="<?php echo esc_url($saaslauncher_images[1]) ?>" data-object-fit="cover" /><span aria-hidden="true" class="wp-block-cover__background has-background-dim-0 has-background-dim" style="background-color:#7455b0"></span>
                    <div class="wp-block-cover__inner-container"><!-- wp:paragraph {"align":"center","placeholder":"Write title…","fontSize":"large"} -->
                        <p class="has-text-align-center has-large-font-size"></p>
                        <!-- /wp:paragraph -->
                    </div>
                </div>
                <!-- /wp:cover -->
            </div>
            <!-- /wp:column -->
        </div>
        <!-- /wp:columns -->
    </div>
    <!-- /wp:group -->

    <!-- wp:group {"style":{"spacing":{"padding":{"top":"3rem","bottom":"7rem","left":"var:preset|spacing|40","right":"var:preset|spacing|40"},"margin":{"top":"0","bottom":"0"}}},"gradient":"gradient-ten","layout":{"type":"constrained","contentSize":"1040px"}} -->
    <div class="wp-block-group has-gradient-ten-gradient-background has-background" style="margin-top:0;margin-bottom:0;padding-top:3rem;padding-right:var(--wp--preset--spacing--40);padding-bottom:7rem;padding-left:var(--wp--preset--spacing--40)"><!-- wp:columns {"verticalAlignment":"center","style":{"spacing":{"blockGap":{"top":"var:preset|spacing|40","left":"84px"}}}} -->
        <div class="wp-block-columns are-vertically-aligned-center"><!-- wp:column {"verticalAlignment":"center","width":"50%"} -->
            <div class="wp-block-column is-vertically-aligned-center" style="flex-basis:50%"><!-- wp:cover {"url":"<?php echo esc_url($saaslauncher_images[2]) ?>","id":20,"dimRatio":0,"customOverlayColor":"#7455b0","isUserOverlayColor":true,"minHeight":510,"isDark":false,"sizeSlug":"full","style":{"border":{"radius":"20px"}},"layout":{"type":"constrained"}} -->
                <div class="wp-block-cover is-light" style="border-radius:20px;min-height:510px"><img class="wp-block-cover__image-background wp-image-20 size-full" alt="" src="<?php echo esc_url($saaslauncher_images[2]) ?>" data-object-fit="cover" /><span aria-hidden="true" class="wp-block-cover__background has-background-dim-0 has-background-dim" style="background-color:#7455b0"></span>
                    <div class="wp-block-cover__inner-container"><!-- wp:paragraph {"align":"center","placeholder":"Write title…","fontSize":"large"} -->
                        <p class="has-text-align-center has-large-font-size"></p>
                        <!-- /wp:paragraph -->
                    </div>
                </div>
                <!-- /wp:cover -->
            </div>
            <!-- /wp:column -->

            <!-- wp:column {"verticalAlignment":"center","width":"","style":{"spacing":{"padding":{"right":"0","left":"0","top":"var:preset|spacing|50","bottom":"var:preset|spacing|50"}}}} -->
            <div class="wp-block-column is-vertically-aligned-center" style="padding-top:var(--wp--preset--spacing--50);padding-right:0;padding-bottom:var(--wp--preset--spacing--50);padding-left:0"><!-- wp:group {"style":{"spacing":{"padding":{"top":"var:preset|spacing|40","bottom":"var:preset|spacing|40","left":"var:preset|spacing|40","right":"var:preset|spacing|40"},"blockGap":"var:preset|spacing|40"}},"layout":{"type":"constrained","contentSize":"","justifyContent":"left"}} -->
                <div class="wp-block-group" style="padding-top:var(--wp--preset--spacing--40);padding-right:var(--wp--preset--spacing--40);padding-bottom:var(--wp--preset--spacing--40);padding-left:var(--wp--preset--spacing--40)"><!-- wp:group {"style":{"spacing":{"margin":{"bottom":"24px"}}},"layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"left"}} -->
                    <div class="wp-block-group" style="margin-bottom:24px"><!-- wp:group {"className":"is-style-saaslauncher-gradient-border","style":{"spacing":{"padding":{"top":"3px","bottom":"3px","left":"12px","right":"12px"}},"border":{"radius":"60px","width":"1px"}},"backgroundColor":"dark-shade","layout":{"type":"constrained"}} -->
                        <div class="wp-block-group is-style-saaslauncher-gradient-border has-dark-shade-background-color has-background" style="border-width:1px;border-radius:60px;padding-top:3px;padding-right:12px;padding-bottom:3px;padding-left:12px"><!-- wp:heading {"level":5,"style":{"elements":{"link":{"color":{"text":"var:preset|color|light-color"}}}},"textColor":"light-color","fontSize":"small"} -->
                            <h5 class="wp-block-heading has-light-color-color has-text-color has-link-color has-small-font-size"><?php esc_html_e('AI Automation', 'saaslauncher') ?></h5>
                            <!-- /wp:heading -->
                        </div>
                        <!-- /wp:group -->
                    </div>
                    <!-- /wp:group -->

                    <!-- wp:heading {"level":3,"style":{"elements":{"link":{"color":{"text":"var:preset|color|light-color"}}},"typography":{"lineHeight":"1.3","fontStyle":"normal","fontWeight":"500"}},"textColor":"light-color","fontSize":"xx-large"} -->
                    <h3 class="wp-block-heading has-light-color-color has-text-color has-link-color has-xx-large-font-size" style="font-style:normal;font-weight:500;line-height:1.3"><?php esc_html_e('Transform Your Workflow with AI Automation', 'saaslauncher') ?></h3>
                    <!-- /wp:heading -->

                    <!-- wp:paragraph {"style":{"elements":{"link":{"color":{"text":"var:preset|color|light-color"}}},"spacing":{"margin":{"bottom":"28px"}}},"textColor":"light-color"} -->
                    <p class="has-light-color-color has-text-color has-link-color" style="margin-bottom:28px"><?php esc_html_e('Lorem ipsum is placeholder text commonly used in the graphic, print, and publishing industries for previewing layouts and visual mockups.', 'saaslauncher') ?></p>
                    <!-- /wp:paragraph -->

                    <!-- wp:buttons {"className":"is-style-button-transofom-on-hover","style":{"spacing":{"margin":{"top":"32px"}}}} -->
                    <div class="wp-block-buttons is-style-button-transofom-on-hover" style="margin-top:32px"><!-- wp:button {"gradient":"gradient-thirteen","className":"is-style-button-with-uparrow-icon","style":{"border":{"radius":"70px"}},"fontSize":"normal"} -->
                        <div class="wp-block-button is-style-button-with-uparrow-icon"><a class="wp-block-button__link has-gradient-thirteen-gradient-background has-background has-normal-font-size has-custom-font-size wp-element-button" style="border-radius:70px"><?php esc_html_e('Learn More', 'saaslauncher') ?></a></div>
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
</div>
<!-- /wp:group -->