<?php

/**
 * Title: Team Section
 * Slug: saaslauncher/team-section
 * Categories: saaslauncher-team
 */
$saaslauncher_url = trailingslashit(get_template_directory_uri());
$saaslauncher_images = array(
    $saaslauncher_url . 'assets/images/team_1.jpg',
    $saaslauncher_url . 'assets/images/team_2.jpg',
    $saaslauncher_url . 'assets/images/team_3.jpg'
);
?>
<!-- wp:group {"align":"full","metadata":{"categories":["saaslauncher"],"patternName":"saaslauncher/team-section","name":"Team Section"},"style":{"spacing":{"padding":{"top":"7rem","bottom":"7rem","left":"var:preset|spacing|40","right":"var:preset|spacing|40"},"margin":{"top":"0","bottom":"0"}}},"backgroundColor":"black-color","layout":{"type":"constrained","contentSize":"1180px"}} -->
<div class="wp-block-group alignfull has-black-color-background-color has-background" style="margin-top:0;margin-bottom:0;padding-top:7rem;padding-right:var(--wp--preset--spacing--40);padding-bottom:7rem;padding-left:var(--wp--preset--spacing--40)"><!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|40"}},"layout":{"type":"constrained","contentSize":"640px","justifyContent":"left"}} -->
    <div class="wp-block-group"><!-- wp:heading {"textAlign":"left","level":1,"style":{"typography":{"fontStyle":"normal","fontWeight":"800"},"spacing":{"margin":{"top":"0","bottom":"0"}},"elements":{"link":{"color":{"text":"var:preset|color|light-color"}}}},"textColor":"light-color","fontSize":"xx-large"} -->
        <h1 class="wp-block-heading has-text-align-left has-light-color-color has-text-color has-link-color has-xx-large-font-size" style="margin-top:0;margin-bottom:0;font-style:normal;font-weight:800"><?php esc_html_e('Meet Our Team', 'saaslauncher') ?></h1>
        <!-- /wp:heading -->

        <!-- wp:paragraph {"align":"left","style":{"elements":{"link":{"color":{"text":"var:preset|color|foreground-alt"}}}},"textColor":"foreground-alt"} -->
        <p class="has-text-align-left has-foreground-alt-color has-text-color has-link-color"><?php esc_html_e('Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.', 'saaslauncher') ?></p>
        <!-- /wp:paragraph -->
    </div>
    <!-- /wp:group -->

    <!-- wp:columns {"style":{"spacing":{"blockGap":{"left":"40px"},"margin":{"top":"48px"}}}} -->
    <div class="wp-block-columns" style="margin-top:48px"><!-- wp:column -->
        <div class="wp-block-column"><!-- wp:cover {"url":"<?php echo esc_url($saaslauncher_images[0]) ?>","id":6089,"dimRatio":80,"isUserOverlayColor":true,"minHeight":480,"gradient":"gradient-fourteen","contentPosition":"bottom center","className":"is-style-saaslauncher-cover-hover-effect","style":{"spacing":{"padding":{"top":"28px","bottom":"28px","left":"28px","right":"28px"}},"border":{"radius":"20px"}},"layout":{"type":"constrained"}} -->
            <div class="wp-block-cover has-custom-content-position is-position-bottom-center is-style-saaslauncher-cover-hover-effect" style="border-radius:20px;padding-top:28px;padding-right:28px;padding-bottom:28px;padding-left:28px;min-height:480px"><span aria-hidden="true" class="wp-block-cover__background has-background-dim-80 has-background-dim wp-block-cover__gradient-background has-background-gradient has-gradient-fourteen-gradient-background"></span><img class="wp-block-cover__image-background wp-image-6089" alt="" src="<?php echo esc_url($saaslauncher_images[0]) ?>" data-object-fit="cover" />
                <div class="wp-block-cover__inner-container"><!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|30"}},"layout":{"type":"flex","orientation":"vertical","justifyContent":"center"}} -->
                    <div class="wp-block-group"><!-- wp:heading {"level":3,"style":{"typography":{"fontStyle":"normal","fontWeight":"600"},"elements":{"link":{"color":{"text":"var:preset|color|light-color"}}}},"textColor":"light-color","fontSize":"big"} -->
                        <h3 class="wp-block-heading has-light-color-color has-text-color has-link-color has-big-font-size" style="font-style:normal;font-weight:600"><?php esc_html_e('John Doe', 'saaslauncher') ?></h3>
                        <!-- /wp:heading -->

                        <!-- wp:paragraph {"style":{"elements":{"link":{"color":{"text":"var:preset|color|foreground-alt"}}}},"textColor":"foreground-alt","fontSize":"small"} -->
                        <p class="has-foreground-alt-color has-text-color has-link-color has-small-font-size"><?php esc_html_e('Founder - Doe Industries', 'saaslauncher') ?></p>
                        <!-- /wp:paragraph -->

                        <!-- wp:social-links {"iconColor":"light-color","iconColorValue":"#FFFFFE","className":"is-style-logos-only","style":{"spacing":{"blockGap":{"left":"var:preset|spacing|40"}}}} -->
                        <ul class="wp-block-social-links has-icon-color is-style-logos-only"><!-- wp:social-link {"url":"#","service":"x"} /-->

                            <!-- wp:social-link {"url":"#","service":"dribbble"} /-->

                            <!-- wp:social-link {"url":"#","service":"whatsapp"} /-->
                        </ul>
                        <!-- /wp:social-links -->
                    </div>
                    <!-- /wp:group -->
                </div>
            </div>
            <!-- /wp:cover -->
        </div>
        <!-- /wp:column -->

        <!-- wp:column -->
        <div class="wp-block-column"><!-- wp:cover {"url":"<?php echo esc_url($saaslauncher_images[1]) ?>","id":6090,"dimRatio":80,"isUserOverlayColor":true,"minHeight":480,"gradient":"gradient-fourteen","contentPosition":"bottom center","className":"is-style-saaslauncher-cover-hover-effect","style":{"spacing":{"padding":{"top":"28px","bottom":"28px","left":"28px","right":"28px"}},"border":{"radius":"20px"}},"layout":{"type":"constrained"}} -->
            <div class="wp-block-cover has-custom-content-position is-position-bottom-center is-style-saaslauncher-cover-hover-effect" style="border-radius:20px;padding-top:28px;padding-right:28px;padding-bottom:28px;padding-left:28px;min-height:480px"><span aria-hidden="true" class="wp-block-cover__background has-background-dim-80 has-background-dim wp-block-cover__gradient-background has-background-gradient has-gradient-fourteen-gradient-background"></span><img class="wp-block-cover__image-background wp-image-6090" alt="" src="<?php echo esc_url($saaslauncher_images[1]) ?>" data-object-fit="cover" />
                <div class="wp-block-cover__inner-container"><!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|30"}},"layout":{"type":"flex","orientation":"vertical","justifyContent":"center"}} -->
                    <div class="wp-block-group"><!-- wp:heading {"level":3,"style":{"typography":{"fontStyle":"normal","fontWeight":"600"},"elements":{"link":{"color":{"text":"var:preset|color|light-color"}}}},"textColor":"light-color","fontSize":"big"} -->
                        <h3 class="wp-block-heading has-light-color-color has-text-color has-link-color has-big-font-size" style="font-style:normal;font-weight:600"><?php esc_html_e('Liya Potmen', 'saaslauncher') ?></h3>
                        <!-- /wp:heading -->

                        <!-- wp:paragraph {"style":{"elements":{"link":{"color":{"text":"var:preset|color|foreground-alt"}}}},"textColor":"foreground-alt","fontSize":"small"} -->
                        <p class="has-foreground-alt-color has-text-color has-link-color has-small-font-size"><?php esc_html_e('Founder - Doe Industries', 'saaslauncher') ?></p>
                        <!-- /wp:paragraph -->

                        <!-- wp:social-links {"iconColor":"light-color","iconColorValue":"#FFFFFE","className":"is-style-logos-only","style":{"spacing":{"blockGap":{"left":"var:preset|spacing|40"}}}} -->
                        <ul class="wp-block-social-links has-icon-color is-style-logos-only"><!-- wp:social-link {"url":"#","service":"x"} /-->

                            <!-- wp:social-link {"url":"#","service":"dribbble"} /-->

                            <!-- wp:social-link {"url":"#","service":"whatsapp"} /-->
                        </ul>
                        <!-- /wp:social-links -->
                    </div>
                    <!-- /wp:group -->
                </div>
            </div>
            <!-- /wp:cover -->
        </div>
        <!-- /wp:column -->

        <!-- wp:column -->
        <div class="wp-block-column"><!-- wp:cover {"url":"<?php echo esc_url($saaslauncher_images[2]) ?>","id":6091,"dimRatio":80,"isUserOverlayColor":true,"minHeight":480,"gradient":"gradient-fourteen","contentPosition":"bottom center","className":"is-style-saaslauncher-cover-hover-effect","style":{"spacing":{"padding":{"top":"28px","bottom":"28px","left":"28px","right":"28px"}},"border":{"radius":"20px"}},"layout":{"type":"constrained"}} -->
            <div class="wp-block-cover has-custom-content-position is-position-bottom-center is-style-saaslauncher-cover-hover-effect" style="border-radius:20px;padding-top:28px;padding-right:28px;padding-bottom:28px;padding-left:28px;min-height:480px"><span aria-hidden="true" class="wp-block-cover__background has-background-dim-80 has-background-dim wp-block-cover__gradient-background has-background-gradient has-gradient-fourteen-gradient-background"></span><img class="wp-block-cover__image-background wp-image-6091" alt="" src="<?php echo esc_url($saaslauncher_images[2]) ?>" data-object-fit="cover" />
                <div class="wp-block-cover__inner-container"><!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|30"}},"layout":{"type":"flex","orientation":"vertical","justifyContent":"center"}} -->
                    <div class="wp-block-group"><!-- wp:heading {"level":3,"style":{"typography":{"fontStyle":"normal","fontWeight":"600"},"elements":{"link":{"color":{"text":"var:preset|color|light-color"}}}},"textColor":"light-color","fontSize":"big"} -->
                        <h3 class="wp-block-heading has-light-color-color has-text-color has-link-color has-big-font-size" style="font-style:normal;font-weight:600"><?php esc_html_e('Matt Brandson', 'saaslauncher') ?></h3>
                        <!-- /wp:heading -->

                        <!-- wp:paragraph {"style":{"elements":{"link":{"color":{"text":"var:preset|color|foreground-alt"}}}},"textColor":"foreground-alt","fontSize":"small"} -->
                        <p class="has-foreground-alt-color has-text-color has-link-color has-small-font-size"><?php esc_html_e('Founder - Doe Industries', 'saaslauncher') ?></p>
                        <!-- /wp:paragraph -->

                        <!-- wp:social-links {"iconColor":"light-color","iconColorValue":"#FFFFFE","className":"is-style-logos-only","style":{"spacing":{"blockGap":{"left":"var:preset|spacing|40"}}}} -->
                        <ul class="wp-block-social-links has-icon-color is-style-logos-only"><!-- wp:social-link {"url":"#","service":"x"} /-->

                            <!-- wp:social-link {"url":"#","service":"dribbble"} /-->

                            <!-- wp:social-link {"url":"#","service":"whatsapp"} /-->
                        </ul>
                        <!-- /wp:social-links -->
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