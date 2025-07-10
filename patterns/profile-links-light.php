<?php

/**
 * Title: Profile Links Card White
 * Slug: saaslauncher/profile-links-light
 * Categories: saaslauncher,saaslauncher-about
 */
$saaslauncher_url = trailingslashit(get_template_directory_uri());
$saaslauncher_images = array(
    $saaslauncher_url . 'assets/images/team_21.jpg',
);
?>
<!-- wp:group {"align":"full","metadata":{"categories":["saaslauncher"],"patternName":"saaslauncher/profile-links-card","name":"Profile Links Card"},"style":{"spacing":{"padding":{"top":"var:preset|spacing|80","bottom":"var:preset|spacing|80","left":"var:preset|spacing|40","right":"var:preset|spacing|40"},"margin":{"top":"0","bottom":"0"},"blockGap":"var:preset|spacing|40"}},"backgroundColor":"background","layout":{"type":"constrained","contentSize":"620px"}} -->
<div class="wp-block-group alignfull has-background-background-color has-background" style="margin-top:0;margin-bottom:0;padding-top:var(--wp--preset--spacing--80);padding-right:var(--wp--preset--spacing--40);padding-bottom:var(--wp--preset--spacing--80);padding-left:var(--wp--preset--spacing--40)"><!-- wp:image {"id":6090,"width":"130px","height":"130px","scale":"cover","sizeSlug":"full","linkDestination":"none","align":"center","style":{"border":{"radius":"100px"}}} -->
    <figure class="wp-block-image aligncenter size-full is-resized has-custom-border"><img src="<?php echo esc_url($saaslauncher_images[0]) ?>" alt="" class="wp-image-6090" style="border-radius:100px;object-fit:cover;width:130px;height:130px" /></figure>
    <!-- /wp:image -->

    <!-- wp:heading {"textAlign":"center","level":4,"style":{"elements":{"link":{"color":{"text":"var:preset|color|heading-color"}}},"spacing":{"margin":{"top":"40px"}}},"textColor":"heading-color"} -->
    <h4 class="wp-block-heading has-text-align-center has-heading-color-color has-text-color has-link-color" style="margin-top:40px"><?php esc_html_e('Rozita Brandson', 'saaslauncher') ?></h4>
    <!-- /wp:heading -->

    <!-- wp:paragraph {"align":"center","style":{"elements":{"link":{"color":{"text":"var:preset|color|foreground"}}}},"textColor":"foreground"} -->
    <p class="has-text-align-center has-foreground-color has-text-color has-link-color"><?php esc_html_e('Lorem ipsum is placeholder text commonly used in the graphic, print, and publishing industries for previewing layouts and visual mockups.', 'saaslauncher') ?></p>
    <!-- /wp:paragraph -->

    <!-- wp:buttons {"style":{"spacing":{"blockGap":"var:preset|spacing|30","margin":{"top":"40px"}}}} -->
    <div class="wp-block-buttons" style="margin-top:40px"><!-- wp:button {"width":100,"className":"is-style-button-hover-secondary-bgcolor","style":{"border":{"radius":"0px"},"spacing":{"padding":{"top":"var:preset|spacing|40","bottom":"var:preset|spacing|40"}}},"fontSize":"normal"} -->
        <div class="wp-block-button has-custom-width wp-block-button__width-100 has-custom-font-size is-style-button-hover-secondary-bgcolor has-normal-font-size"><a class="wp-block-button__link wp-element-button" href="#" style="border-radius:0px;padding-top:var(--wp--preset--spacing--40);padding-bottom:var(--wp--preset--spacing--40)"><?php esc_html_e('Visit My Website', 'saaslauncher') ?></a></div>
        <!-- /wp:button -->

        <!-- wp:button {"width":100,"className":"is-style-button-hover-secondary-bgcolor","style":{"border":{"radius":"0px"},"spacing":{"padding":{"top":"var:preset|spacing|40","bottom":"var:preset|spacing|40"}}},"fontSize":"normal"} -->
        <div class="wp-block-button has-custom-width wp-block-button__width-100 has-custom-font-size is-style-button-hover-secondary-bgcolor has-normal-font-size"><a class="wp-block-button__link wp-element-button" href="#" style="border-radius:0px;padding-top:var(--wp--preset--spacing--40);padding-bottom:var(--wp--preset--spacing--40)"><?php esc_html_e('Download My CV', 'saaslauncher') ?></a></div>
        <!-- /wp:button -->

        <!-- wp:button {"width":100,"className":"is-style-button-hover-secondary-bgcolor","style":{"border":{"radius":"0px"},"spacing":{"padding":{"top":"var:preset|spacing|40","bottom":"var:preset|spacing|40"}}},"fontSize":"normal"} -->
        <div class="wp-block-button has-custom-width wp-block-button__width-100 has-custom-font-size is-style-button-hover-secondary-bgcolor has-normal-font-size"><a class="wp-block-button__link wp-element-button" href="#" style="border-radius:0px;padding-top:var(--wp--preset--spacing--40);padding-bottom:var(--wp--preset--spacing--40)"><?php esc_html_e('Explore My Portfolios', 'saaslauncher') ?></a></div>
        <!-- /wp:button -->

        <!-- wp:button {"backgroundColor":"background","textColor":"primary","width":100,"className":"is-style-button-with-gradient-border","style":{"border":{"radius":"0px","width":"1px"},"spacing":{"padding":{"top":"var:preset|spacing|40","bottom":"var:preset|spacing|40"}},"elements":{"link":{"color":{"text":"var:preset|color|primary"}}}},"fontSize":"normal"} -->
        <div class="wp-block-button has-custom-width wp-block-button__width-100 has-custom-font-size is-style-button-with-gradient-border has-normal-font-size"><a class="wp-block-button__link has-primary-color has-background-background-color has-text-color has-background has-link-color wp-element-button" href="#" style="border-width:1px;border-radius:0px;padding-top:var(--wp--preset--spacing--40);padding-bottom:var(--wp--preset--spacing--40)"><?php esc_html_e('Visit My Courses', 'saaslauncher') ?></a></div>
        <!-- /wp:button -->

        <!-- wp:button {"backgroundColor":"background","textColor":"primary","width":100,"className":"is-style-button-with-gradient-border","style":{"border":{"radius":"0px","width":"1px"},"spacing":{"padding":{"top":"var:preset|spacing|40","bottom":"var:preset|spacing|40"}},"elements":{"link":{"color":{"text":"var:preset|color|primary"}}}},"fontSize":"normal"} -->
        <div class="wp-block-button has-custom-width wp-block-button__width-100 has-custom-font-size is-style-button-with-gradient-border has-normal-font-size"><a class="wp-block-button__link has-primary-color has-background-background-color has-text-color has-background has-link-color wp-element-button" href="#" style="border-width:1px;border-radius:0px;padding-top:var(--wp--preset--spacing--40);padding-bottom:var(--wp--preset--spacing--40)"><?php esc_html_e('Support and Donation Link', 'saaslauncher') ?></a></div>
        <!-- /wp:button -->
    </div>
    <!-- /wp:buttons -->

    <!-- wp:social-links {"iconColor":"dark-shade","iconColorValue":"#0A0A0A","iconBackgroundColor":"light-color","iconBackgroundColorValue":"#FFFFFE","style":{"spacing":{"margin":{"top":"44px"}}},"layout":{"type":"flex","justifyContent":"center"}} -->
    <ul class="wp-block-social-links has-icon-color has-icon-background-color" style="margin-top:44px"><!-- wp:social-link {"url":"#","service":"facebook"} /-->

        <!-- wp:social-link {"url":"#","service":"x"} /-->

        <!-- wp:social-link {"url":"#","service":"linkedin"} /-->

        <!-- wp:social-link {"url":"#","service":"youtube"} /-->

        <!-- wp:social-link {"url":"#","service":"dribbble"} /-->
    </ul>
    <!-- /wp:social-links -->
</div>
<!-- /wp:group -->