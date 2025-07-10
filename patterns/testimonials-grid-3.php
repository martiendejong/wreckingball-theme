<?php

/**
 * Title: Testimonials Grid 3
 * Slug: saaslauncher/testimonials-grid-3
 * Categories: saaslauncher-testimonial
 */
$saaslauncher_url = trailingslashit(get_template_directory_uri());
$saaslauncher_images = array(
    $saaslauncher_url . 'assets/images/rating_star.png',
    $saaslauncher_url . 'assets/images/team_2.jpg',
    $saaslauncher_url . 'assets/images/testimonial_1.jpg',
    $saaslauncher_url . 'assets/images/testimonial_3.jpg',
    $saaslauncher_url . 'assets/images/team_23.jpg',
);
?>
<!-- wp:group {"metadata":{"categories":["saaslauncher"],"patternName":"saaslauncher/testimonial-section","name":"Testimonial Section"},"align":"full","style":{"spacing":{"padding":{"top":"7rem","bottom":"4rem","left":"var:preset|spacing|40","right":"var:preset|spacing|40"},"margin":{"top":"0px","bottom":"0px"}}},"backgroundColor":"dark-shade","layout":{"type":"constrained","contentSize":"1180px"}} -->
<div class="wp-block-group alignfull has-dark-shade-background-color has-background" style="margin-top:0px;margin-bottom:0px;padding-top:7rem;padding-right:var(--wp--preset--spacing--40);padding-bottom:4rem;padding-left:var(--wp--preset--spacing--40)"><!-- wp:group {"style":{"spacing":{"margin":{"bottom":"60px"}}},"layout":{"type":"constrained","contentSize":"760px","justifyContent":"center"}} -->
    <div class="wp-block-group" style="margin-bottom:60px"><!-- wp:group {"layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"center"}} -->
        <div class="wp-block-group"><!-- wp:group {"className":"is-style-saaslauncher-gradient-border","style":{"spacing":{"padding":{"top":"3px","bottom":"3px","left":"12px","right":"12px"}},"border":{"radius":"60px","width":"1px"}},"backgroundColor":"dark-shade","layout":{"type":"constrained"}} -->
            <div class="wp-block-group is-style-saaslauncher-gradient-border has-dark-shade-background-color has-background" style="border-width:1px;border-radius:60px;padding-top:3px;padding-right:12px;padding-bottom:3px;padding-left:12px"><!-- wp:heading {"level":5,"style":{"elements":{"link":{"color":{"text":"var:preset|color|light-color"}}}},"textColor":"light-color","fontSize":"small"} -->
                <h5 class="wp-block-heading has-light-color-color has-text-color has-link-color has-small-font-size"><?php esc_html_e('Testimonials &amp; Reviews', 'saaslauncher') ?></h5>
                <!-- /wp:heading -->
            </div>
            <!-- /wp:group -->
        </div>
        <!-- /wp:group -->

        <!-- wp:heading {"textAlign":"center","level":1,"style":{"elements":{"link":{"color":{"text":"var:preset|color|light-color"}}},"typography":{"lineHeight":"1.3","fontStyle":"normal","fontWeight":"500"}},"textColor":"light-color","fontSize":"xxx-large"} -->
        <h1 class="wp-block-heading has-text-align-center has-light-color-color has-text-color has-link-color has-xxx-large-font-size" style="font-style:normal;font-weight:500;line-height:1.3"><?php esc_html_e('Hear From Our Happy Clients: Their Stories', 'saaslauncher') ?></h1>
        <!-- /wp:heading -->

        <!-- wp:paragraph {"align":"center","style":{"elements":{"link":{"color":{"text":"var:preset|color|foreground-alt"}}}},"textColor":"foreground-alt"} -->
        <p class="has-text-align-center has-foreground-alt-color has-text-color has-link-color"><?php esc_html_e('Lorem ipsum is placeholder text commonly used in the graphic, print, and publishing industries for previewing layouts and visual mockups.', 'saaslauncher') ?></p>
        <!-- /wp:paragraph -->
    </div>
    <!-- /wp:group -->

    <!-- wp:columns {"style":{"spacing":{"margin":{"top":"0px"},"blockGap":{"left":"28px"}}}} -->
    <div class="wp-block-columns" style="margin-top:0px"><!-- wp:column -->
        <div class="wp-block-column"><!-- wp:group {"className":"saaslauncher-hover-box","style":{"border":{"radius":"12px","width":"1px"},"spacing":{"padding":{"top":"40px","bottom":"40px","left":"40px","right":"40px"},"margin":{"top":"0","bottom":"0"},"blockGap":"var:preset|spacing|50"}},"borderColor":"border-color","layout":{"type":"constrained"}} -->
            <div class="wp-block-group saaslauncher-hover-box has-border-color has-border-color-border-color" style="border-width:1px;border-radius:12px;margin-top:0;margin-bottom:0;padding-top:40px;padding-right:40px;padding-bottom:40px;padding-left:40px"><!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|30"}},"layout":{"type":"flex","flexWrap":"nowrap"}} -->
                <div class="wp-block-group"><!-- wp:image {"id":2415,"width":"auto","height":"60px","aspectRatio":"1","scale":"cover","sizeSlug":"full","linkDestination":"none","style":{"border":{"radius":"50px"}}} -->
                    <figure class="wp-block-image size-full is-resized has-custom-border"><img src="<?php echo esc_url($saaslauncher_images[1]) ?>" alt="" class="wp-image-2415" style="border-radius:50px;aspect-ratio:1;object-fit:cover;width:auto;height:60px" /></figure>
                    <!-- /wp:image -->

                    <!-- wp:group {"style":{"spacing":{"blockGap":"0"}},"layout":{"type":"flex","orientation":"vertical"}} -->
                    <div class="wp-block-group"><!-- wp:heading {"level":5,"style":{"typography":{"fontStyle":"normal","fontWeight":"500"},"elements":{"link":{"color":{"text":"var:preset|color|background"}}}},"textColor":"background","fontSize":"medium"} -->
                        <h5 class="wp-block-heading has-background-color has-text-color has-link-color has-medium-font-size" style="font-style:normal;font-weight:500"><?php esc_html_e('Liana Potmen', 'saaslauncher') ?></h5>
                        <!-- /wp:heading -->

                        <!-- wp:paragraph {"style":{"elements":{"link":{"color":{"text":"var:preset|color|foreground-alt"}}}},"textColor":"foreground-alt","fontSize":"small"} -->
                        <p class="has-foreground-alt-color has-text-color has-link-color has-small-font-size"><?php esc_html_e('Founder - Potmen Technology', 'saaslauncher') ?></p>
                        <!-- /wp:paragraph -->
                    </div>
                    <!-- /wp:group -->
                </div>
                <!-- /wp:group -->

                <!-- wp:image {"id":1070,"width":"100px","height":"20px","scale":"contain","sizeSlug":"full","linkDestination":"none","style":{"spacing":{"margin":{"right":"0","left":"0","top":"16px","bottom":"0"}}}} -->
                <figure class="wp-block-image size-full is-resized" style="margin-top:16px;margin-right:0;margin-bottom:0;margin-left:0"><img src="<?php echo esc_url($saaslauncher_images[0]) ?>" alt="" class="wp-image-1070" style="object-fit:contain;width:100px;height:20px" /></figure>
                <!-- /wp:image -->

                <!-- wp:paragraph {"style":{"elements":{"link":{"color":{"text":"var:preset|color|foreground-alt"}}},"typography":{"fontSize":"18px"}},"textColor":"foreground-alt"} -->
                <p class="has-foreground-alt-color has-text-color has-link-color" style="font-size:18px"><?php esc_html_e('We switched to this SaaS a few months ago, and the difference has been huge. Our team works faster, collaboration is smoother, and having everything in one place has saved us time, reduced confusion, and helped us hit deadlines more consistently.', 'saaslauncher') ?></p>
                <!-- /wp:paragraph -->
            </div>
            <!-- /wp:group -->
        </div>
        <!-- /wp:column -->

        <!-- wp:column -->
        <div class="wp-block-column"><!-- wp:group {"className":"saaslauncher-hover-box","style":{"border":{"radius":"12px","width":"1px"},"spacing":{"padding":{"top":"40px","bottom":"40px","left":"40px","right":"40px"},"margin":{"top":"0","bottom":"0"},"blockGap":"var:preset|spacing|50"}},"borderColor":"border-color","layout":{"type":"constrained"}} -->
            <div class="wp-block-group saaslauncher-hover-box has-border-color has-border-color-border-color" style="border-width:1px;border-radius:12px;margin-top:0;margin-bottom:0;padding-top:40px;padding-right:40px;padding-bottom:40px;padding-left:40px"><!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|30"}},"layout":{"type":"flex","flexWrap":"nowrap"}} -->
                <div class="wp-block-group"><!-- wp:image {"id":2415,"width":"auto","height":"60px","aspectRatio":"1","scale":"cover","sizeSlug":"full","linkDestination":"none","style":{"border":{"radius":"50px"}}} -->
                    <figure class="wp-block-image size-full is-resized has-custom-border"><img src="<?php echo esc_url($saaslauncher_images[2]) ?>" alt="" class="wp-image-2415" style="border-radius:50px;aspect-ratio:1;object-fit:cover;width:auto;height:60px" /></figure>
                    <!-- /wp:image -->

                    <!-- wp:group {"style":{"spacing":{"blockGap":"0"}},"layout":{"type":"flex","orientation":"vertical"}} -->
                    <div class="wp-block-group"><!-- wp:heading {"level":5,"style":{"typography":{"fontStyle":"normal","fontWeight":"500"},"elements":{"link":{"color":{"text":"var:preset|color|background"}}}},"textColor":"background","fontSize":"medium"} -->
                        <h5 class="wp-block-heading has-background-color has-text-color has-link-color has-medium-font-size" style="font-style:normal;font-weight:500"><?php esc_html_e('Robert Mathew', 'saaslauncher') ?></h5>
                        <!-- /wp:heading -->

                        <!-- wp:paragraph {"style":{"elements":{"link":{"color":{"text":"var:preset|color|foreground-alt"}}}},"textColor":"foreground-alt","fontSize":"small"} -->
                        <p class="has-foreground-alt-color has-text-color has-link-color has-small-font-size"><?php esc_html_e('CEO - RM Growth', 'saaslauncher') ?></p>
                        <!-- /wp:paragraph -->
                    </div>
                    <!-- /wp:group -->
                </div>
                <!-- /wp:group -->

                <!-- wp:image {"id":1070,"width":"100px","height":"20px","scale":"contain","sizeSlug":"full","linkDestination":"none","style":{"spacing":{"margin":{"right":"0","left":"0","top":"16px","bottom":"0"}}}} -->
                <figure class="wp-block-image size-full is-resized" style="margin-top:16px;margin-right:0;margin-bottom:0;margin-left:0"><img src="<?php echo esc_url($saaslauncher_images[0]) ?>" alt="" class="wp-image-1070" style="object-fit:contain;width:100px;height:20px" /></figure>
                <!-- /wp:image -->

                <!-- wp:paragraph {"style":{"elements":{"link":{"color":{"text":"var:preset|color|foreground-alt"}}},"typography":{"fontSize":"18px"}},"textColor":"foreground-alt"} -->
                <p class="has-foreground-alt-color has-text-color has-link-color" style="font-size:18px"><?php esc_html_e('The features are great, but the support team truly sets this SaaS apart. From onboarding to daily use, their quick responses and helpful guidance made the whole experience smooth and stress-free. It feels like we have a real partner, not just a service.', 'saaslauncher') ?></p>
                <!-- /wp:paragraph -->
            </div>
            <!-- /wp:group -->
        </div>
        <!-- /wp:column -->
    </div>
    <!-- /wp:columns -->

    <!-- wp:columns {"style":{"spacing":{"margin":{"top":"28px"},"blockGap":{"left":"28px"}}}} -->
    <div class="wp-block-columns" style="margin-top:28px"><!-- wp:column -->
        <div class="wp-block-column"><!-- wp:group {"className":"saaslauncher-hover-box","style":{"border":{"radius":"12px","width":"1px"},"spacing":{"padding":{"top":"40px","bottom":"40px","left":"40px","right":"40px"},"margin":{"top":"0","bottom":"0"},"blockGap":"var:preset|spacing|50"}},"borderColor":"border-color","layout":{"type":"constrained"}} -->
            <div class="wp-block-group saaslauncher-hover-box has-border-color has-border-color-border-color" style="border-width:1px;border-radius:12px;margin-top:0;margin-bottom:0;padding-top:40px;padding-right:40px;padding-bottom:40px;padding-left:40px"><!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|30"}},"layout":{"type":"flex","flexWrap":"nowrap"}} -->
                <div class="wp-block-group"><!-- wp:image {"id":2415,"width":"auto","height":"60px","aspectRatio":"1","scale":"cover","sizeSlug":"full","linkDestination":"none","style":{"border":{"radius":"50px"}}} -->
                    <figure class="wp-block-image size-full is-resized has-custom-border"><img src="<?php echo esc_url($saaslauncher_images[3]) ?>" alt="" class="wp-image-2415" style="border-radius:50px;aspect-ratio:1;object-fit:cover;width:auto;height:60px" /></figure>
                    <!-- /wp:image -->

                    <!-- wp:group {"style":{"spacing":{"blockGap":"0"}},"layout":{"type":"flex","orientation":"vertical"}} -->
                    <div class="wp-block-group"><!-- wp:heading {"level":5,"style":{"typography":{"fontStyle":"normal","fontWeight":"500"},"elements":{"link":{"color":{"text":"var:preset|color|background"}}}},"textColor":"background","fontSize":"medium"} -->
                        <h5 class="wp-block-heading has-background-color has-text-color has-link-color has-medium-font-size" style="font-style:normal;font-weight:500"><?php esc_html_e('Peter Brandson', 'saaslauncher') ?></h5>
                        <!-- /wp:heading -->

                        <!-- wp:paragraph {"style":{"elements":{"link":{"color":{"text":"var:preset|color|foreground-alt"}}}},"textColor":"foreground-alt","fontSize":"small"} -->
                        <p class="has-foreground-alt-color has-text-color has-link-color has-small-font-size"><?php esc_html_e('Owner - Brandson Industry', 'saaslauncher') ?></p>
                        <!-- /wp:paragraph -->
                    </div>
                    <!-- /wp:group -->
                </div>
                <!-- /wp:group -->

                <!-- wp:image {"id":1070,"width":"100px","height":"20px","scale":"contain","sizeSlug":"full","linkDestination":"none","style":{"spacing":{"margin":{"right":"0","left":"0","top":"16px","bottom":"0"}}}} -->
                <figure class="wp-block-image size-full is-resized" style="margin-top:16px;margin-right:0;margin-bottom:0;margin-left:0"><img src="<?php echo esc_url($saaslauncher_images[0]) ?>" alt="" class="wp-image-1070" style="object-fit:contain;width:100px;height:20px" /></figure>
                <!-- /wp:image -->

                <!-- wp:paragraph {"style":{"elements":{"link":{"color":{"text":"var:preset|color|foreground-alt"}}},"typography":{"fontSize":"18px"}},"textColor":"foreground-alt"} -->
                <p class="has-foreground-alt-color has-text-color has-link-color" style="font-size:18px"><?php esc_html_e('The interface is clean and easy to use, even for non-tech team members. Automations work flawlessly, and we’ve eliminated hours of repetitive tasks. Our projects now move forward without bottlenecks, and our entire workflow feels lighter and faster.', 'saaslauncher') ?></p>
                <!-- /wp:paragraph -->
            </div>
            <!-- /wp:group -->
        </div>
        <!-- /wp:column -->

        <!-- wp:column -->
        <div class="wp-block-column"><!-- wp:group {"className":"saaslauncher-hover-box","style":{"border":{"radius":"12px","width":"1px"},"spacing":{"padding":{"top":"40px","bottom":"40px","left":"40px","right":"40px"},"margin":{"top":"0","bottom":"0"},"blockGap":"var:preset|spacing|50"}},"borderColor":"border-color","layout":{"type":"constrained"}} -->
            <div class="wp-block-group saaslauncher-hover-box has-border-color has-border-color-border-color" style="border-width:1px;border-radius:12px;margin-top:0;margin-bottom:0;padding-top:40px;padding-right:40px;padding-bottom:40px;padding-left:40px"><!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|30"}},"layout":{"type":"flex","flexWrap":"nowrap"}} -->
                <div class="wp-block-group"><!-- wp:image {"id":2415,"width":"auto","height":"60px","aspectRatio":"1","scale":"cover","sizeSlug":"full","linkDestination":"none","style":{"border":{"radius":"50px"}}} -->
                    <figure class="wp-block-image size-full is-resized has-custom-border"><img src="<?php echo esc_url($saaslauncher_images[4]) ?>" alt="" class="wp-image-2415" style="border-radius:50px;aspect-ratio:1;object-fit:cover;width:auto;height:60px" /></figure>
                    <!-- /wp:image -->

                    <!-- wp:group {"style":{"spacing":{"blockGap":"0"}},"layout":{"type":"flex","orientation":"vertical"}} -->
                    <div class="wp-block-group"><!-- wp:heading {"level":5,"style":{"typography":{"fontStyle":"normal","fontWeight":"500"},"elements":{"link":{"color":{"text":"var:preset|color|background"}}}},"textColor":"background","fontSize":"medium"} -->
                        <h5 class="wp-block-heading has-background-color has-text-color has-link-color has-medium-font-size" style="font-style:normal;font-weight:500"><?php esc_html_e('Aliana Lorel', 'saaslauncher') ?></h5>
                        <!-- /wp:heading -->

                        <!-- wp:paragraph {"style":{"elements":{"link":{"color":{"text":"var:preset|color|foreground-alt"}}}},"textColor":"foreground-alt","fontSize":"small"} -->
                        <p class="has-foreground-alt-color has-text-color has-link-color has-small-font-size"><?php esc_html_e('Founder - Lorel Technology', 'saaslauncher') ?></p>
                        <!-- /wp:paragraph -->
                    </div>
                    <!-- /wp:group -->
                </div>
                <!-- /wp:group -->

                <!-- wp:image {"id":1070,"width":"100px","height":"20px","scale":"contain","sizeSlug":"full","linkDestination":"none","style":{"spacing":{"margin":{"right":"0","left":"0","top":"16px","bottom":"0"}}}} -->
                <figure class="wp-block-image size-full is-resized" style="margin-top:16px;margin-right:0;margin-bottom:0;margin-left:0"><img src="<?php echo esc_url($saaslauncher_images[0]) ?>" alt="" class="wp-image-1070" style="object-fit:contain;width:100px;height:20px" /></figure>
                <!-- /wp:image -->

                <!-- wp:paragraph {"style":{"elements":{"link":{"color":{"text":"var:preset|color|foreground-alt"}}},"typography":{"fontSize":"18px"}},"textColor":"foreground-alt"} -->
                <p class="has-foreground-alt-color has-text-color has-link-color" style="font-size:18px"><?php esc_html_e('We needed something reliable, fast, and able to grow with us—this SaaS checked every box. It’s intuitive, powerful, and fits teams of any size. We streamlined our operations and finally feel confident scaling without worrying about our systems.', 'saaslauncher') ?></p>
                <!-- /wp:paragraph -->
            </div>
            <!-- /wp:group -->
        </div>
        <!-- /wp:column -->
    </div>
    <!-- /wp:columns -->

    <!-- wp:buttons {"className":"is-style-button-zoom-on-hover","style":{"spacing":{"margin":{"top":"64px"}}},"layout":{"type":"flex","justifyContent":"center"}} -->
    <div class="wp-block-buttons is-style-button-zoom-on-hover" style="margin-top:64px"><!-- wp:button {"gradient":"gradient-twelve","className":"is-style-button-with-uparrow-icon","style":{"border":{"radius":"60px"},"spacing":{"padding":{"left":"32px","right":"32px","top":"20px","bottom":"20px"}}},"fontSize":"medium"} -->
        <div class="wp-block-button is-style-button-with-uparrow-icon"><a class="wp-block-button__link has-gradient-twelve-gradient-background has-background has-medium-font-size has-custom-font-size wp-element-button" style="border-radius:60px;padding-top:20px;padding-right:32px;padding-bottom:20px;padding-left:32px"><?php esc_html_e('View All Reviews', 'saaslauncher') ?></a></div>
        <!-- /wp:button -->
    </div>
    <!-- /wp:buttons -->
</div>
<!-- /wp:group -->