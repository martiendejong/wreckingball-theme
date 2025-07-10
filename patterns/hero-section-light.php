<?php

/**
 * Title: Hero Section Light
 * Slug: saaslauncher/hero-section-light
 * Categories: saaslauncher-hero
 */
$saaslauncher_url = trailingslashit(get_template_directory_uri());
$saaslauncher_images = array(
    $saaslauncher_url . 'assets/images/light_hero_bg.png',
    $saaslauncher_url . 'assets/images/users_face.png',
    $saaslauncher_url . 'assets/images/dashboard_light.png',
);
?>
<!-- wp:group {"align":"full","style":{"spacing":{"blockGap":"0","margin":{"top":"0","bottom":"0"},"padding":{"right":"0","left":"0","top":"0","bottom":"0"}}},"backgroundColor":"background","layout":{"type":"constrained","contentSize":"100%"}} -->
<div class="wp-block-group alignfull has-background-background-color has-background" style="margin-top:0;margin-bottom:0;padding-top:0;padding-right:0;padding-bottom:0;padding-left:0"><!-- wp:cover {"url":"<?php echo esc_url($saaslauncher_images[0]) ?>","id":11610,"dimRatio":0,"customOverlayColor":"#0ec87d","isUserOverlayColor":false,"minHeight":640,"isDark":false,"style":{"spacing":{"padding":{"top":"var:preset|spacing|40","bottom":"var:preset|spacing|70","left":"var:preset|spacing|40","right":"var:preset|spacing|40"},"margin":{"top":"28px"}}},"layout":{"type":"constrained","contentSize":"1180px"}} -->
    <div class="wp-block-cover is-light" style="margin-top:28px;padding-top:var(--wp--preset--spacing--40);padding-right:var(--wp--preset--spacing--40);padding-bottom:var(--wp--preset--spacing--70);padding-left:var(--wp--preset--spacing--40);min-height:640px"><span aria-hidden="true" class="wp-block-cover__background has-background-dim-0 has-background-dim" style="background-color:#0ec87d"></span><img class="wp-block-cover__image-background wp-image-11610" alt="" src="<?php echo esc_url($saaslauncher_images[0]) ?>" data-object-fit="cover" />
        <div class="wp-block-cover__inner-container"><!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|40","margin":{"top":"20px","bottom":"0"}}},"layout":{"type":"constrained","contentSize":"860px"}} -->
            <div class="wp-block-group" style="margin-top:20px;margin-bottom:0"><!-- wp:heading {"textAlign":"center","level":1,"className":"saaslauncher-big-title","style":{"typography":{"fontStyle":"normal","fontWeight":"700","fontSize":"68px","lineHeight":"1.3"},"elements":{"link":{"color":{"text":"var:preset|color|heading-color"}}}},"textColor":"heading-color"} -->
                <h1 class="wp-block-heading has-text-align-center saaslauncher-big-title has-heading-color-color has-text-color has-link-color" style="font-size:68px;font-style:normal;font-weight:700;line-height:1.3"><?php esc_html_e('Launch Faster,', 'saaslauncher') ?> <mark style="background-color:rgba(0, 0, 0, 0)" class="has-inline-color has-primary-color"><?php esc_html_e('Scale Smarter - Transform', 'saaslauncher') ?></mark> <?php esc_html_e('Your Website!', 'saaslauncher') ?></h1>
                <!-- /wp:heading -->

                <!-- wp:paragraph {"align":"center","style":{"elements":{"link":{"color":{"text":"var:preset|color|heading-color"}}},"typography":{"lineHeight":"1.5"}},"textColor":"heading-color","fontSize":"medium"} -->
                <p class="has-text-align-center has-heading-color-color has-text-color has-link-color has-medium-font-size" style="line-height:1.5"><?php esc_html_e('Get your website up and running quickly with powerful, scalable SaaS solutions designed to boost performance and drive business growth effortlessly.', 'saaslauncher') ?></p>
                <!-- /wp:paragraph -->
            </div>
            <!-- /wp:group -->

            <!-- wp:buttons {"className":"is-style-button-zoom-on-hover","style":{"spacing":{"margin":{"top":"32px"}}},"layout":{"type":"flex","justifyContent":"center"}} -->
            <div class="wp-block-buttons is-style-button-zoom-on-hover" style="margin-top:32px"><!-- wp:button {"backgroundColor":"primary","className":"is-style-button-hover-secondary-bgcolor","style":{"border":{"radius":"12px"},"spacing":{"padding":{"left":"34px","right":"34px","top":"20px","bottom":"20px"}}},"fontSize":"medium"} -->
                <div class="wp-block-button has-custom-font-size is-style-button-hover-secondary-bgcolor has-medium-font-size"><a class="wp-block-button__link has-primary-background-color has-background wp-element-button" style="border-radius:12px;padding-top:20px;padding-right:34px;padding-bottom:20px;padding-left:34px"><?php esc_html_e('Start Your Free Trial', 'saaslauncher') ?></a></div>
                <!-- /wp:button -->

                <!-- wp:button {"textColor":"primary","className":"is-style-button-hover-secondary-bgcolor","style":{"border":{"radius":"12px"},"spacing":{"padding":{"left":"34px","right":"34px","top":"20px","bottom":"20px"}},"color":{"background":"#0ec97f26"},"elements":{"link":{"color":{"text":"var:preset|color|primary"}}}},"fontSize":"medium"} -->
                <div class="wp-block-button has-custom-font-size is-style-button-hover-secondary-bgcolor has-medium-font-size"><a class="wp-block-button__link has-primary-color has-text-color has-background has-link-color wp-element-button" style="border-radius:12px;background-color:#0ec97f26;padding-top:20px;padding-right:34px;padding-bottom:20px;padding-left:34px"><?php esc_html_e('Schedule Demo', 'saaslauncher') ?></a></div>
                <!-- /wp:button -->
            </div>
            <!-- /wp:buttons -->

            <!-- wp:group {"style":{"spacing":{"margin":{"top":"40px","bottom":"44px"}}},"layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"center"}} -->
            <div class="wp-block-group" style="margin-top:40px;margin-bottom:44px"><!-- wp:image {"id":11631,"width":"142px","height":"45px","scale":"contain","sizeSlug":"full","linkDestination":"none"} -->
                <figure class="wp-block-image size-full is-resized"><img src="<?php echo esc_url($saaslauncher_images[1]) ?>" alt="" class="wp-image-11631" style="object-fit:contain;width:142px;height:45px" /></figure>
                <!-- /wp:image -->

                <!-- wp:paragraph -->
                <p><?php esc_html_e('Join 20,000+ Happy Users –', 'saaslauncher') ?> <em><?php esc_html_e('Start Building Today!', 'saaslauncher') ?></em></p>
                <!-- /wp:paragraph -->
            </div>
            <!-- /wp:group -->

            <!-- wp:group {"className":"is-style-default","style":{"border":{"radius":"30px","width":"0px","style":"none"},"spacing":{"padding":{"right":"0","left":"0","top":"0","bottom":"0"},"margin":{"top":"0","bottom":"0"}}},"layout":{"type":"constrained","contentSize":"100%"}} -->
            <div class="wp-block-group is-style-default" style="border-style:none;border-width:0px;border-radius:30px;margin-top:0;margin-bottom:0;padding-top:0;padding-right:0;padding-bottom:0;padding-left:0"><!-- wp:image {"id":11612,"sizeSlug":"large","linkDestination":"none","align":"full","className":"is-style-saaslauncher-image-hover-zoom"} -->
                <figure class="wp-block-image alignfull size-large is-style-saaslauncher-image-hover-zoom"><img src="<?php echo esc_url($saaslauncher_images[2]) ?>" alt="" class="wp-image-11612" /></figure>
                <!-- /wp:image -->
            </div>
            <!-- /wp:group -->
        </div>
    </div>
    <!-- /wp:cover -->
</div>
<!-- /wp:group -->