<?php

/**
 * Title: 404 Template
 * Slug: saaslauncher/template-404
 * Categories: saaslauncher
 */
?>
<!-- wp:group {"align":"full","tagName":"main","style":{"spacing":{"padding":{"top":"0","bottom":"0","left":"0","right":"0"},"margin":{"top":"0","bottom":"0"}}},"gradient":"center-top-gradient","layout":{"type":"constrained","contentSize":"100%"}} -->
<main class="wp-block-group alignfull has-center-top-gradient-gradient-background has-background" style="margin-top:0;margin-bottom:0;padding-top:0;padding-right:0;padding-bottom:0;padding-left:0"><!-- wp:group {"style":{"spacing":{"padding":{"top":"var:preset|spacing|80","bottom":"5rem"},"blockGap":"var:preset|spacing|50","margin":{"top":"0","bottom":"0"}}},"layout":{"type":"constrained","contentSize":"1180px"}} -->
    <div class="wp-block-group" style="margin-top:0;margin-bottom:0;padding-top:var(--wp--preset--spacing--80);padding-bottom:5rem"><!-- wp:heading {"textAlign":"center","level":1,"style":{"typography":{"fontSize":"150px","fontStyle":"normal","fontWeight":"600","lineHeight":"1.1"}},"textColor":"primary"} -->
        <h1 class="wp-block-heading has-text-align-center has-primary-color has-text-color" style="font-size:150px;font-style:normal;font-weight:600;line-height:1.1"><?php esc_html_e('404', 'saaslauncher') ?></h1>
        <!-- /wp:heading -->

        <!-- wp:heading {"textAlign":"center","level":4,"style":{"typography":{"fontStyle":"normal","fontWeight":"300","textTransform":"uppercase","letterSpacing":"4px"},"elements":{"link":{"color":{"text":"var:preset|color|light-color"}}}},"textColor":"light-color","fontSize":"medium"} -->
        <h4 class="wp-block-heading has-text-align-center has-light-color-color has-text-color has-link-color has-medium-font-size" style="font-style:normal;font-weight:300;letter-spacing:4px;text-transform:uppercase"><?php esc_html_e('OOPS! Page Not Found!', 'saaslauncher') ?></h4>
        <!-- /wp:heading -->
    </div>
    <!-- /wp:group -->

    <!-- wp:group {"style":{"spacing":{"padding":{"top":"var:preset|spacing|80","bottom":"var:preset|spacing|80","right":"var:preset|spacing|40","left":"var:preset|spacing|40"}}},"layout":{"type":"constrained","contentSize":"1180px"}} -->
    <div class="wp-block-group" style="padding-top:var(--wp--preset--spacing--80);padding-right:var(--wp--preset--spacing--40);padding-bottom:var(--wp--preset--spacing--80);padding-left:var(--wp--preset--spacing--40)"><!-- wp:columns -->
        <div class="wp-block-columns"><!-- wp:column -->
            <div class="wp-block-column"><!-- wp:heading {"style":{"typography":{"fontStyle":"normal","fontWeight":"500"},"elements":{"link":{"color":{"text":"var:preset|color|light-color"}}}},"textColor":"light-color"} -->
                <h2 class="wp-block-heading has-light-color-color has-text-color has-link-color" style="font-style:normal;font-weight:500"><?php esc_html_e('Helpful Link', 'saaslauncher') ?></h2>
                <!-- /wp:heading -->

                <!-- wp:paragraph {"style":{"typography":{"lineHeight":"1.5"},"elements":{"link":{"color":{"text":"var:preset|color|foreground-alt"}}}},"textColor":"foreground-alt"} -->
                <p class="has-foreground-alt-color has-text-color has-link-color" style="line-height:1.5"><?php esc_html_e('Something went wrong! We couldn’t find the page you were looking for. But don’t worry, we’ve got some other Links that might be helpful:', 'saaslauncher') ?></p>
                <!-- /wp:paragraph -->
            </div>
            <!-- /wp:column -->
        </div>
        <!-- /wp:columns -->

        <!-- wp:columns {"style":{"spacing":{"margin":{"top":"60px"}}}} -->
        <div class="wp-block-columns" style="margin-top:60px"><!-- wp:column -->
            <div class="wp-block-column"><!-- wp:heading {"level":4,"style":{"typography":{"fontStyle":"normal","fontWeight":"500"},"spacing":{"margin":{"bottom":"var:preset|spacing|50"}},"elements":{"link":{"color":{"text":"var:preset|color|light-color"}}}},"textColor":"light-color"} -->
                <h4 class="wp-block-heading has-light-color-color has-text-color has-link-color" style="margin-bottom:var(--wp--preset--spacing--50);font-style:normal;font-weight:500"><?php esc_html_e('Pages', 'saaslauncher') ?></h4>
                <!-- /wp:heading -->

                <!-- wp:page-list {"className":"is-style-saaslauncher-page-list-bullet-hide-style is-style-saaslauncher-page-list-bullet-hide-style","style":{"typography":{"lineHeight":"2"}}} /-->
            </div>
            <!-- /wp:column -->

            <!-- wp:column -->
            <div class="wp-block-column"><!-- wp:heading {"level":4,"style":{"typography":{"fontStyle":"normal","fontWeight":"500"},"spacing":{"margin":{"bottom":"var:preset|spacing|50"}},"elements":{"link":{"color":{"text":"var:preset|color|light-color"}}}},"textColor":"light-color"} -->
                <h4 class="wp-block-heading has-light-color-color has-text-color has-link-color" style="margin-bottom:var(--wp--preset--spacing--50);font-style:normal;font-weight:500"><?php esc_html_e('Categories', 'saaslauncher') ?></h4>
                <!-- /wp:heading -->

                <!-- wp:categories {"className":"is-style-saaslauncher-categories-bullet-hide-style is-style-saaslauncher-categories-bullet-hide-style","style":{"typography":{"lineHeight":"2"}}} /-->
            </div>
            <!-- /wp:column -->

            <!-- wp:column -->
            <div class="wp-block-column"><!-- wp:heading {"level":4,"style":{"typography":{"fontStyle":"normal","fontWeight":"500"},"spacing":{"margin":{"bottom":"var:preset|spacing|50"}},"elements":{"link":{"color":{"text":"var:preset|color|light-color"}}}},"textColor":"light-color"} -->
                <h4 class="wp-block-heading has-light-color-color has-text-color has-link-color" style="margin-bottom:var(--wp--preset--spacing--50);font-style:normal;font-weight:500"><?php esc_html_e('Posts', 'saaslauncher') ?></h4>
                <!-- /wp:heading -->

                <!-- wp:query {"queryId":22,"query":{"perPage":"20","pages":0,"offset":0,"postType":"post","order":"desc","orderBy":"date","author":"","search":"","exclude":[],"sticky":"","inherit":false}} -->
                <div class="wp-block-query"><!-- wp:post-template {"layout":{"type":"default"}} -->
                    <!-- wp:post-title {"level":5,"isLink":true,"style":{"spacing":{"padding":{"top":"0","right":"0","bottom":"0","left":"0"},"margin":{"top":"0","right":"0","bottom":"0","left":"0"}}}} /-->
                    <!-- /wp:post-template -->
                </div>
                <!-- /wp:query -->
            </div>
            <!-- /wp:column -->
        </div>
        <!-- /wp:columns -->
    </div>
    <!-- /wp:group -->
</main>
<!-- /wp:group -->