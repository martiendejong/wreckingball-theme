<?php

/**
 * Title: Footer Default
 * Slug: saaslauncher/footer-default
 * Categories: footer
 * Block Types: core/template-part/footer
 * Post Types: wp_template
 * Inserter: true
 */
$saaslauncher_url = trailingslashit(get_template_directory_uri());
$saaslauncher_images = array(
    $saaslauncher_url . 'assets/images/saaslauncher.png',
    $saaslauncher_url . 'assets/images/icon_map.png',
    $saaslauncher_url . 'assets/images/icon_call.png',
    $saaslauncher_url . 'assets/images/icon_send.png',
    $saaslauncher_url . 'assets/images/icon_time.png',
);
?>
<!-- wp:group {"align":"full","className":"saaslauncher-footer","style":{"spacing":{"padding":{"top":"0px","right":"0","left":"0","bottom":"0px"},"margin":{"top":"0","bottom":"0"}},"border":{"width":"0px","style":"none"}},"backgroundColor":"dark-shade","layout":{"type":"constrained","contentSize":"100%"}} -->
<div class="wp-block-group alignfull saaslauncher-footer has-dark-shade-background-color has-background" style="border-style:none;border-width:0px;margin-top:0;margin-bottom:0;padding-top:0px;padding-right:0;padding-bottom:0px;padding-left:0"><!-- wp:group {"align":"full","style":{"spacing":{"padding":{"right":"var:preset|spacing|40","left":"var:preset|spacing|40","top":"80px","bottom":"80px"},"margin":{"top":"0","bottom":"0"}}},"layout":{"type":"constrained","contentSize":"1260px"}} -->
    <div class="wp-block-group alignfull" style="margin-top:0;margin-bottom:0;padding-top:80px;padding-right:var(--wp--preset--spacing--40);padding-bottom:80px;padding-left:var(--wp--preset--spacing--40)"><!-- wp:columns {"style":{"spacing":{"blockGap":{"left":"40px"},"margin":{"top":"0px"}}}} -->
        <div class="wp-block-columns" style="margin-top:0px"><!-- wp:column {"width":"40%","style":{"border":{"width":"0px","style":"none"}}} -->
            <div class="wp-block-column" style="border-style:none;border-width:0px;flex-basis:40%"><!-- wp:group {"layout":{"type":"constrained","contentSize":"380px","justifyContent":"left"}} -->
                <div class="wp-block-group"><!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|30"}},"layout":{"type":"flex","flexWrap":"nowrap"}} -->
                    <div class="wp-block-group"><!-- wp:image {"id":325,"width":"40px","height":"40px","scale":"cover","sizeSlug":"full","linkDestination":"none"} -->
                        <figure class="wp-block-image size-full is-resized"><img src="<?php echo esc_url($saaslauncher_images[0]) ?>" alt="" class="wp-image-325" style="object-fit:cover;width:40px;height:40px" /></figure>
                        <!-- /wp:image -->

                        <!-- wp:site-title {"level":3,"style":{"elements":{"link":{"color":{"text":"var:preset|color|light-color"},":hover":{"color":{"text":"var:preset|color|primary"}}}},"typography":{"fontSize":"28px","fontStyle":"normal","fontWeight":"500"}}} /-->
                    </div>
                    <!-- /wp:group -->

                    <!-- wp:paragraph {"style":{"elements":{"link":{"color":{"text":"var:preset|color|light-color"}}},"typography":{"lineHeight":"1.6"}},"textColor":"light-color"} -->
                    <p class="has-light-color-color has-text-color has-link-color" style="line-height:1.6"><?php esc_html_e('Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo.', 'saaslauncher') ?></p>
                    <!-- /wp:paragraph -->

                    <!-- wp:social-links {"iconColor":"light-color","iconColorValue":"#FFFFFE","className":"is-style-logos-only","style":{"spacing":{"blockGap":{"top":"0","left":"var:preset|spacing|40"},"margin":{"bottom":"0"}}}} -->
                    <ul class="wp-block-social-links has-icon-color is-style-logos-only" style="margin-bottom:0"><!-- wp:social-link {"url":"#","service":"instagram"} /-->

                        <!-- wp:social-link {"url":"#","service":"facebook"} /-->

                        <!-- wp:social-link {"url":"#","service":"linkedin"} /-->

                        <!-- wp:social-link {"url":"#","service":"vk"} /-->

                        <!-- wp:social-link {"url":"#","service":"x"} /-->

                        <!-- wp:social-link {"url":"#","service":"youtube"} /-->
                    </ul>
                    <!-- /wp:social-links -->
                </div>
                <!-- /wp:group -->
            </div>
            <!-- /wp:column -->

            <!-- wp:column {"className":"saaslauncher-footer-list"} -->
            <div class="wp-block-column saaslauncher-footer-list"><!-- wp:heading {"level":3,"style":{"typography":{"fontStyle":"normal","fontWeight":"600","textTransform":"none"},"elements":{"link":{"color":{"text":"var:preset|color|background"}}}},"textColor":"background","fontSize":"medium"} -->
                <h3 class="wp-block-heading has-background-color has-text-color has-link-color has-medium-font-size" style="font-style:normal;font-weight:600;text-transform:none"><?php esc_html_e('Compnay', 'saaslauncher') ?></h3>
                <!-- /wp:heading -->

                <!-- wp:list {"className":"is-style-hide-bullet-list-link-hover-style-white is-style-list-style-no-bullet","style":{"spacing":{"padding":{"top":"0","right":"0","bottom":"0","left":"0"}},"typography":{"lineHeight":"2.5","textTransform":"none"},"elements":{"link":{"color":{"text":"var:preset|color|light-color"},":hover":{"color":{"text":"var:preset|color|primary"}}}}},"fontSize":"normal"} -->
                <ul style="padding-top:0;padding-right:0;padding-bottom:0;padding-left:0;line-height:2.5;text-transform:none" class="wp-block-list is-style-hide-bullet-list-link-hover-style-white is-style-list-style-no-bullet has-link-color has-normal-font-size"><!-- wp:list-item -->
                    <li><a href="#"><?php esc_html_e('About Us', 'saaslauncher') ?></a></li>
                    <!-- /wp:list-item -->

                    <!-- wp:list-item -->
                    <li><a href="#"><?php esc_html_e('Policy', 'saaslauncher') ?></a></li>
                    <!-- /wp:list-item -->

                    <!-- wp:list-item -->
                    <li><a href="#"><?php esc_html_e('Terms and Conditions', 'saaslauncher') ?></a></li>
                    <!-- /wp:list-item -->

                    <!-- wp:list-item -->
                    <li><a href="#"><?php esc_html_e('Career', 'saaslauncher') ?></a></li>
                    <!-- /wp:list-item -->

                    <!-- wp:list-item -->
                    <li><a href="#"><?php esc_html_e('Blog', 'saaslauncher') ?></a></li>
                    <!-- /wp:list-item -->

                    <!-- wp:list-item -->
                    <li><a href="#"><?php esc_html_e('Contact Us', 'saaslauncher') ?></a></li>
                    <!-- /wp:list-item -->
                </ul>
                <!-- /wp:list -->
            </div>
            <!-- /wp:column -->

            <!-- wp:column {"className":"saaslauncher-footer-list"} -->
            <div class="wp-block-column saaslauncher-footer-list"><!-- wp:heading {"level":3,"style":{"typography":{"fontStyle":"normal","fontWeight":"600","textTransform":"none"},"elements":{"link":{"color":{"text":"var:preset|color|light-color"}}}},"textColor":"light-color","fontSize":"medium"} -->
                <h3 class="wp-block-heading has-light-color-color has-text-color has-link-color has-medium-font-size" style="font-style:normal;font-weight:600;text-transform:none"><?php esc_html_e('Services', 'saaslauncher') ?></h3>
                <!-- /wp:heading -->

                <!-- wp:list {"className":"is-style-hide-bullet-list-link-hover-style-white is-style-list-style-no-bullet","style":{"spacing":{"padding":{"top":"0","right":"0","bottom":"0","left":"0"}},"typography":{"lineHeight":"2.5","textTransform":"none"},"elements":{"link":{"color":{"text":"var:preset|color|light-color"},":hover":{"color":{"text":"var:preset|color|primary"}}}}},"fontSize":"normal"} -->
                <ul style="padding-top:0;padding-right:0;padding-bottom:0;padding-left:0;line-height:2.5;text-transform:none" class="wp-block-list is-style-hide-bullet-list-link-hover-style-white is-style-list-style-no-bullet has-link-color has-normal-font-size"><!-- wp:list-item -->
                    <li><a href="#"><?php esc_html_e('SaaS Application', 'saaslauncher') ?></a></li>
                    <!-- /wp:list-item -->

                    <!-- wp:list-item -->
                    <li><a href="#"><?php esc_html_e('CRM Integration', 'saaslauncher') ?></a></li>
                    <!-- /wp:list-item -->

                    <!-- wp:list-item -->
                    <li><a href="#"><?php esc_html_e('UI/UX Design', 'saaslauncher') ?></a></li>
                    <!-- /wp:list-item -->

                    <!-- wp:list-item -->
                    <li><a href="#"><?php esc_html_e('Business Strategy', 'saaslauncher') ?></a></li>
                    <!-- /wp:list-item -->

                    <!-- wp:list-item -->
                    <li><a href="#"><?php esc_html_e('Digital Marketing', 'saaslauncher') ?></a></li>
                    <!-- /wp:list-item -->

                    <!-- wp:list-item -->
                    <li><a href="#"><?php esc_html_e('Branding', 'saaslauncher') ?></a></li>
                    <!-- /wp:list-item -->
                </ul>
                <!-- /wp:list -->
            </div>
            <!-- /wp:column -->

            <!-- wp:column {"width":"18%","className":"saaslauncher-footer-list"} -->
            <div class="wp-block-column saaslauncher-footer-list" style="flex-basis:18%"><!-- wp:heading {"level":3,"style":{"typography":{"fontStyle":"normal","fontWeight":"600","textTransform":"none"},"elements":{"link":{"color":{"text":"var:preset|color|light-color"}}}},"textColor":"light-color","fontSize":"medium"} -->
                <h3 class="wp-block-heading has-light-color-color has-text-color has-link-color has-medium-font-size" style="font-style:normal;font-weight:600;text-transform:none"><?php esc_html_e('Contact Us', 'saaslauncher') ?></h3>
                <!-- /wp:heading -->

                <!-- wp:group {"className":"saaslauncher-footer-list","style":{"spacing":{"blockGap":"var:preset|spacing|40","margin":{"top":"28px","bottom":"0"},"padding":{"left":"0px","top":"0px"}}},"layout":{"type":"flex","orientation":"vertical"}} -->
                <div class="wp-block-group saaslauncher-footer-list" style="margin-top:28px;margin-bottom:0;padding-top:0px;padding-left:0px"><!-- wp:columns {"style":{"spacing":{"blockGap":{"left":"10px"}}}} -->
                    <div class="wp-block-columns"><!-- wp:column {"width":"20px"} -->
                        <div class="wp-block-column" style="flex-basis:20px"><!-- wp:image {"id":12198,"width":"20px","height":"16px","scale":"contain","sizeSlug":"full","linkDestination":"none","style":{"spacing":{"margin":{"top":"0","bottom":"0"}}}} -->
                            <figure class="wp-block-image size-full is-resized" style="margin-top:0;margin-bottom:0"><img src="<?php echo esc_url($saaslauncher_images[1]) ?>" alt="" class="wp-image-12198" style="object-fit:contain;width:20px;height:16px" /></figure>
                            <!-- /wp:image -->
                        </div>
                        <!-- /wp:column -->

                        <!-- wp:column {"width":""} -->
                        <div class="wp-block-column"><!-- wp:list {"className":"is-style-hide-bullet-list-link-hover-style-white is-style-list-style-no-bullet","style":{"spacing":{"padding":{"top":"0","right":"0","bottom":"0","left":"0"},"margin":{"top":"0","bottom":"0","left":"0","right":"0"}},"typography":{"lineHeight":"1.5","textTransform":"none"},"elements":{"link":{"color":{"text":"var:preset|color|light-color"},":hover":{"color":{"text":"var:preset|color|primary"}}}}},"fontSize":"normal"} -->
                            <ul style="margin-top:0;margin-right:0;margin-bottom:0;margin-left:0;padding-top:0;padding-right:0;padding-bottom:0;padding-left:0;line-height:1.5;text-transform:none" class="wp-block-list is-style-hide-bullet-list-link-hover-style-white is-style-list-style-no-bullet has-link-color has-normal-font-size"><!-- wp:list-item -->
                                <li><a href="#"><?php esc_html_e('14th Street, Caltech, New Jersey, Alabama', 'saaslauncher') ?></a></li>
                                <!-- /wp:list-item -->
                            </ul>
                            <!-- /wp:list -->
                        </div>
                        <!-- /wp:column -->
                    </div>
                    <!-- /wp:columns -->

                    <!-- wp:columns {"style":{"spacing":{"blockGap":{"left":"10px"}}}} -->
                    <div class="wp-block-columns"><!-- wp:column {"width":"20px"} -->
                        <div class="wp-block-column" style="flex-basis:20px"><!-- wp:image {"id":12205,"width":"20px","height":"16px","scale":"contain","sizeSlug":"full","linkDestination":"none","style":{"spacing":{"margin":{"top":"0","bottom":"0"}}}} -->
                            <figure class="wp-block-image size-full is-resized" style="margin-top:0;margin-bottom:0"><img src="<?php echo esc_url($saaslauncher_images[2]) ?>" alt="" class="wp-image-12205" style="object-fit:contain;width:20px;height:16px" /></figure>
                            <!-- /wp:image -->
                        </div>
                        <!-- /wp:column -->

                        <!-- wp:column {"width":""} -->
                        <div class="wp-block-column"><!-- wp:list {"className":"is-style-hide-bullet-list-link-hover-style-white is-style-list-style-no-bullet","style":{"spacing":{"padding":{"top":"0","right":"0","bottom":"0","left":"0"},"margin":{"top":"0","bottom":"0","left":"0","right":"0"}},"typography":{"lineHeight":"1.5","textTransform":"none"},"elements":{"link":{"color":{"text":"var:preset|color|light-color"},":hover":{"color":{"text":"var:preset|color|primary"}}}}},"fontSize":"normal"} -->
                            <ul style="margin-top:0;margin-right:0;margin-bottom:0;margin-left:0;padding-top:0;padding-right:0;padding-bottom:0;padding-left:0;line-height:1.5;text-transform:none" class="wp-block-list is-style-hide-bullet-list-link-hover-style-white is-style-list-style-no-bullet has-link-color has-normal-font-size"><!-- wp:list-item -->
                                <li><a href="#"><?php esc_html_e('+1 (000) 012-3456', 'saaslauncher') ?></a></li>
                                <!-- /wp:list-item -->
                            </ul>
                            <!-- /wp:list -->
                        </div>
                        <!-- /wp:column -->
                    </div>
                    <!-- /wp:columns -->

                    <!-- wp:columns {"style":{"spacing":{"blockGap":{"left":"10px"}}}} -->
                    <div class="wp-block-columns"><!-- wp:column {"width":"20px"} -->
                        <div class="wp-block-column" style="flex-basis:20px"><!-- wp:image {"id":12206,"width":"20px","height":"16px","scale":"contain","sizeSlug":"full","linkDestination":"none","style":{"spacing":{"margin":{"top":"0","bottom":"0"}}}} -->
                            <figure class="wp-block-image size-full is-resized" style="margin-top:0;margin-bottom:0"><img src="<?php echo esc_url($saaslauncher_images[3]) ?>" alt="" class="wp-image-12206" style="object-fit:contain;width:20px;height:16px" /></figure>
                            <!-- /wp:image -->
                        </div>
                        <!-- /wp:column -->

                        <!-- wp:column {"width":""} -->
                        <div class="wp-block-column"><!-- wp:list {"className":"is-style-hide-bullet-list-link-hover-style-white is-style-list-style-no-bullet","style":{"spacing":{"padding":{"top":"0","right":"0","bottom":"0","left":"0"},"margin":{"top":"0","bottom":"0","left":"0","right":"0"}},"typography":{"lineHeight":"1.5","textTransform":"none"},"elements":{"link":{"color":{"text":"var:preset|color|light-color"},":hover":{"color":{"text":"var:preset|color|primary"}}}}},"fontSize":"normal"} -->
                            <ul style="margin-top:0;margin-right:0;margin-bottom:0;margin-left:0;padding-top:0;padding-right:0;padding-bottom:0;padding-left:0;line-height:1.5;text-transform:none" class="wp-block-list is-style-hide-bullet-list-link-hover-style-white is-style-list-style-no-bullet has-link-color has-normal-font-size"><!-- wp:list-item -->
                                <li><a href="#"><?php esc_html_e('support@example.com', 'saaslauncher') ?></a></li>
                                <!-- /wp:list-item -->
                            </ul>
                            <!-- /wp:list -->
                        </div>
                        <!-- /wp:column -->
                    </div>
                    <!-- /wp:columns -->

                    <!-- wp:columns {"style":{"spacing":{"blockGap":{"left":"10px"}}}} -->
                    <div class="wp-block-columns"><!-- wp:column {"width":"20px"} -->
                        <div class="wp-block-column" style="flex-basis:20px"><!-- wp:image {"id":12208,"width":"20px","height":"16px","scale":"contain","sizeSlug":"full","linkDestination":"none","style":{"spacing":{"margin":{"top":"0","bottom":"0"}}}} -->
                            <figure class="wp-block-image size-full is-resized" style="margin-top:0;margin-bottom:0"><img src="<?php echo esc_url($saaslauncher_images[4]) ?>" alt="" class="wp-image-12208" style="object-fit:contain;width:20px;height:16px" /></figure>
                            <!-- /wp:image -->
                        </div>
                        <!-- /wp:column -->

                        <!-- wp:column {"width":""} -->
                        <div class="wp-block-column"><!-- wp:list {"className":"is-style-hide-bullet-list-link-hover-style-white is-style-list-style-no-bullet","style":{"spacing":{"padding":{"top":"0","right":"0","bottom":"0","left":"0"},"margin":{"top":"0","bottom":"0","left":"0","right":"0"}},"typography":{"lineHeight":"1.5","textTransform":"none"},"elements":{"link":{"color":{"text":"var:preset|color|light-color"},":hover":{"color":{"text":"var:preset|color|primary"}}}}},"fontSize":"normal"} -->
                            <ul style="margin-top:0;margin-right:0;margin-bottom:0;margin-left:0;padding-top:0;padding-right:0;padding-bottom:0;padding-left:0;line-height:1.5;text-transform:none" class="wp-block-list is-style-hide-bullet-list-link-hover-style-white is-style-list-style-no-bullet has-link-color has-normal-font-size"><!-- wp:list-item {"style":{"elements":{"link":{"color":{"text":"var:preset|color|light-color"}}}},"textColor":"light-color"} -->
                                <li class="has-light-color-color has-text-color has-link-color"><?php esc_html_e('Monday - Friday : 8:00 AM - 5:00 PM', 'saaslauncher') ?></li>
                                <!-- /wp:list-item -->
                            </ul>
                            <!-- /wp:list -->
                        </div>
                        <!-- /wp:column -->
                    </div>
                    <!-- /wp:columns -->
                </div>
                <!-- /wp:group -->
            </div>
            <!-- /wp:column -->
        </div>
        <!-- /wp:columns -->
    </div>
    <!-- /wp:group -->

    <!-- wp:group {"style":{"spacing":{"padding":{"right":"var:preset|spacing|40","left":"var:preset|spacing|40","top":"32px","bottom":"32px"},"margin":{"top":"0","bottom":"0"}},"border":{"top":{"color":"#ffffff12","width":"1px"},"right":[],"bottom":[],"left":[]}},"layout":{"type":"constrained","contentSize":"1180px"}} -->
    <div class="wp-block-group" style="border-top-color:#ffffff12;border-top-width:1px;margin-top:0;margin-bottom:0;padding-top:32px;padding-right:var(--wp--preset--spacing--40);padding-bottom:32px;padding-left:var(--wp--preset--spacing--40)"><!-- wp:paragraph {"align":"center","style":{"elements":{"link":{"color":{"text":"var:preset|color|light-color"}}},"typography":{"lineHeight":"1.5"}},"textColor":"light-color","fontSize":"normal"} -->
        <p class="has-text-align-center has-light-color-color has-text-color has-link-color has-normal-font-size" style="line-height:1.5"><?php esc_html_e('Proudly powered by WordPress | Theme: SaasLauncher by CozyThemes.', 'saaslauncher') ?></p>
        <!-- /wp:paragraph -->
    </div>
    <!-- /wp:group -->
</div>
<!-- /wp:group -->

<!-- wp:buttons {"style":{"spacing":{"margin":{"top":"0","bottom":"0"}}}} -->
<div class="wp-block-buttons" style="margin-top:0;margin-bottom:0"><!-- wp:button {"backgroundColor":"tertiary","textColor":"foregound-alt","className":"saaslauncher-scrollto-top is-style-button-hover-secondary-bgcolor","style":{"border":{"radius":"50%"}}} -->
    <div class="wp-block-button saaslauncher-scrollto-top is-style-button-hover-secondary-bgcolor"><a class="wp-block-button__link has-foregound-alt-color has-tertiary-background-color has-text-color has-background wp-element-button" style="border-radius:50%"><?php esc_html_e('Scroll to Top', 'saaslauncher') ?></a></div>
    <!-- /wp:button -->
</div>
<!-- /wp:buttons -->