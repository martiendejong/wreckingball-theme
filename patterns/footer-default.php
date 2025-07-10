<?php
/**
 * Title: Wreckingball AI Footer
 * Slug: wreckingball-ai/footer-default
 * Categories: footer
 * Block Types: core/template-part/footer
 * Post Types: wp_template
 * Inserter: true
 */
$wbai_url = trailingslashit(get_template_directory_uri());
$wbai_images = array(
    $wbai_url . 'assets/images/logo_main.png', // Wreckingball AI logo
    $wbai_url . 'assets/images/icon_map.png',
    $wbai_url . 'assets/images/icon_call.png',
    $wbai_url . 'assets/images/icon_send.png',
    $wbai_url . 'assets/images/icon_time.png',
);
?>
<!-- wp:group {"align":"full","className":"wbai-footer","style":{"spacing":{"padding":{"top":"0px","right":"0","left":"0","bottom":"0px"},"margin":{"top":"0","bottom":"0"}},"border":{"width":"0px","style":"none"}},"backgroundColor":"black-color","layout":{"type":"constrained","contentSize":"100%"}} -->
<div class="wp-block-group alignfull wbai-footer has-black-color-background-color has-background" style="border-style:none;border-width:0px;margin-top:0;margin-bottom:0;padding-top:0px;padding-right:0;padding-bottom:0px;padding-left:0">
  <!-- wp:group {"align":"full","style":{"spacing":{"padding":{"right":"var:preset|spacing|40","left":"var:preset|spacing|40","top":"80px","bottom":"80px"},"margin":{"top":"0","bottom":"0"}}},"layout":{"type":"constrained","contentSize":"1260px"}} -->
  <div class="wp-block-group alignfull" style="margin-top:0;margin-bottom:0;padding-top:80px;padding-right:var(--wp--preset--spacing--40);padding-bottom:80px;padding-left:var(--wp--preset--spacing--40)">
    <!-- wp:columns {"style":{"spacing":{"blockGap":{"left":"40px"},"margin":{"top":"0px"}}}} -->
    <div class="wp-block-columns" style="margin-top:0px">
      <!-- wp:column {"width":"40%","style":{"border":{"width":"0px","style":"none"}}} -->
      <div class="wp-block-column" style="border-style:none;border-width:0px;flex-basis:40%">
        <!-- wp:group {"layout":{"type":"constrained","contentSize":"380px","justifyContent":"left"}} -->
        <div class="wp-block-group">
          <!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|30"}},"layout":{"type":"flex","flexWrap":"nowrap"}} -->
          <div class="wp-block-group">
            <!-- wp:image {"id":325,"width":"40px","height":"40px","scale":"cover","sizeSlug":"full","linkDestination":"none","className":"wbai-logo"} -->
            <figure class="wp-block-image size-full is-resized wbai-logo">
              <img src="<?php echo esc_url($wbai_images[0]) ?>" alt="Wreckingball AI" class="wp-image-325" style="object-fit:cover;width:40px;height:40px" />
            </figure>
            <!-- /wp:image -->
            <!-- wp:site-title {"level":3,"style":{"elements":{"link":{"color":{"text":"var:preset|color|light-color"},":hover":{"color":{"text":"var:preset|color|primary"}}}},"typography":{"fontSize":"28px","fontStyle":"normal","fontWeight":"500","fontFamily":"Orbitron"}}} /-->
          </div>
          <!-- /wp:group -->
          <!-- wp:paragraph {"style":{"elements":{"link":{"color":{"text":"var:preset|color|light-color"}}},"typography":{"lineHeight":"1.6","fontFamily":"Montserrat"}},"textColor":"light-color"} -->
          <p class="has-light-color-color has-text-color has-link-color" style="line-height:1.6;font-family:Montserrat"><?php esc_html_e('Wreckingball AI is your digital wrecking ball: break free from old business, automate everything, and accelerate with seamless, bold AI integration. No limits.', 'wreckingball-ai') ?></p>
          <!-- /wp:paragraph -->
          <!-- wp:social-links {"iconColor":"light-color","iconColorValue":"#FFFFFE","className":"is-style-logos-only","style":{"spacing":{"blockGap":{"top":"0","left":"var:preset|spacing|40"},"margin":{"bottom":"0"}}}} -->
          <ul class="wp-block-social-links has-icon-color is-style-logos-only" style="margin-bottom:0">
            <!-- wp:social-link {"url":"#","service":"linkedin"} /-->
            <!-- wp:social-link {"url":"#","service":"x"} /-->
            <!-- wp:social-link {"url":"#","service":"youtube"} /-->
          </ul>
          <!-- /wp:social-links -->
        </div>
        <!-- /wp:group -->
      </div>
      <!-- /wp:column -->
      <!-- wp:column {"className":"wbai-footer-list"} -->
      <div class="wp-block-column wbai-footer-list">
        <!-- wp:heading {"level":3,"style":{"typography":{"fontStyle":"normal","fontWeight":"600","textTransform":"none","fontFamily":"Orbitron"},"elements":{"link":{"color":{"text":"var:preset|color|primary"}}}},"textColor":"primary","fontSize":"medium"} -->
        <h3 class="wp-block-heading has-primary-color has-text-color has-link-color has-medium-font-size" style="font-style:normal;font-weight:600;text-transform:none;font-family:Orbitron"><?php esc_html_e('Company', 'wreckingball-ai') ?></h3>
        <!-- /wp:heading -->
        <!-- wp:list {"className":"is-style-hide-bullet-list-link-hover-style-white is-style-list-style-no-bullet","style":{"spacing":{"padding":{"top":"0","right":"0","bottom":"0","left":"0"}},"typography":{"lineHeight":"2.5","textTransform":"none","fontFamily":"Montserrat"},"elements":{"link":{"color":{"text":"var:preset|color|light-color"},":hover":{"color":{"text":"var:preset|color|accent-color"}}}}},"fontSize":"normal"} -->
        <ul style="padding-top:0;padding-right:0;padding-bottom:0;padding-left:0;line-height:2.5;text-transform:none;font-family:Montserrat" class="wp-block-list is-style-hide-bullet-list-link-hover-style-white is-style-list-style-no-bullet has-link-color has-normal-font-size">
          <!-- wp:list-item -->
          <li><a href="#"><?php esc_html_e('About Wreckingball AI', 'wreckingball-ai') ?></a></li>
          <!-- /wp:list-item -->
          <!-- wp:list-item -->
          <li><a href="#"><?php esc_html_e('AI Solutions', 'wreckingball-ai') ?></a></li>
          <!-- /wp:list-item -->
          <!-- wp:list-item -->
          <li><a href="#"><?php esc_html_e('Case Studies', 'wreckingball-ai') ?></a></li>
          <!-- /wp:list-item -->
          <!-- wp:list-item -->
          <li><a href="#"><?php esc_html_e('Careers', 'wreckingball-ai') ?></a></li>
          <!-- /wp:list-item -->
          <!-- wp:list-item -->
          <li><a href="#"><?php esc_html_e('Blog', 'wreckingball-ai') ?></a></li>
          <!-- /wp:list-item -->
          <!-- wp:list-item -->
          <li><a href="#"><?php esc_html_e('Contact Us', 'wreckingball-ai') ?></a></li>
          <!-- /wp:list-item -->
        </ul>
        <!-- /wp:list -->
      </div>
      <!-- /wp:column -->
      <!-- wp:column {"className":"wbai-footer-list"} -->
      <div class="wp-block-column wbai-footer-list">
        <!-- wp:heading {"level":3,"style":{"typography":{"fontStyle":"normal","fontWeight":"600","textTransform":"none","fontFamily":"Orbitron"},"elements":{"link":{"color":{"text":"var:preset|color|primary"}}}},"textColor":"primary","fontSize":"medium"} -->
        <h3 class="wp-block-heading has-primary-color has-text-color has-link-color has-medium-font-size" style="font-style:normal;font-weight:600;text-transform:none;font-family:Orbitron"><?php esc_html_e('AI Services', 'wreckingball-ai') ?></h3>
        <!-- /wp:heading -->
        <!-- wp:list {"className":"is-style-hide-bullet-list-link-hover-style-white is-style-list-style-no-bullet","style":{"spacing":{"padding":{"top":"0","right":"0","bottom":"0","left":"0"}},"typography":{"lineHeight":"2.5","textTransform":"none","fontFamily":"Montserrat"},"elements":{"link":{"color":{"text":"var:preset|color|light-color"},":hover":{"color":{"text":"var:preset|color|accent-color"}}}}},"fontSize":"normal"} -->
        <ul style="padding-top:0;padding-right:0;padding-bottom:0;padding-left:0;line-height:2.5;text-transform:none;font-family:Montserrat" class="wp-block-list is-style-hide-bullet-list-link-hover-style-white is-style-list-style-no-bullet has-link-color has-normal-font-size">
          <!-- wp:list-item -->
          <li><a href="#"><?php esc_html_e('AI Integration', 'wreckingball-ai') ?></a></li>
          <!-- /wp:list-item -->
          <!-- wp:list-item -->
          <li><a href="#"><?php esc_html_e('Process Automation', 'wreckingball-ai') ?></a></li>
          <!-- /wp:list-item -->
          <!-- wp:list-item -->
          <li><a href="#"><?php esc_html_e('Digital Transformation', 'wreckingball-ai') ?></a></li>
          <!-- /wp:list-item -->
          <!-- wp:list-item -->
          <li><a href="#"><?php esc_html_e('AI Consulting', 'wreckingball-ai') ?></a></li>
          <!-- /wp:list-item -->
          <!-- wp:list-item -->
          <li><a href="#"><?php esc_html_e('Custom AI Solutions', 'wreckingball-ai') ?></a></li>
          <!-- /wp:list-item -->
          <!-- wp:list-item -->
          <li><a href="#"><?php esc_html_e('AI Training', 'wreckingball-ai') ?></a></li>
          <!-- /wp:list-item -->
        </ul>
        <!-- /wp:list -->
      </div>
      <!-- /wp:column -->
      <!-- wp:column {"width":"18%","className":"wbai-footer-list"} -->
      <div class="wp-block-column wbai-footer-list" style="flex-basis:18%">
        <!-- wp:heading {"level":3,"style":{"typography":{"fontStyle":"normal","fontWeight":"600","textTransform":"none","fontFamily":"Orbitron"},"elements":{"link":{"color":{"text":"var:preset|color|primary"}}}},"textColor":"primary","fontSize":"medium"} -->
        <h3 class="wp-block-heading has-primary-color has-text-color has-link-color has-medium-font-size" style="font-style:normal;font-weight:600;text-transform:none;font-family:Orbitron"><?php esc_html_e('Contact Us', 'wreckingball-ai') ?></h3>
        <!-- /wp:heading -->
        <!-- wp:group {"className":"wbai-footer-list","style":{"spacing":{"blockGap":"var:preset|spacing|40","margin":{"top":"28px","bottom":"0"},"padding":{"left":"0px","top":"0px"}}},"layout":{"type":"flex","orientation":"vertical"}} -->
        <div class="wp-block-group wbai-footer-list" style="margin-top:28px;margin-bottom:0;padding-top:0px;padding-left:0px">
          <!-- wp:columns {"style":{"spacing":{"blockGap":{"left":"10px"}}}} -->
          <div class="wp-block-columns">
            <!-- wp:column {"width":"20px"} -->
            <div class="wp-block-column" style="flex-basis:20px">
              <!-- wp:image {"id":12198,"width":"20px","height":"16px","scale":"contain","sizeSlug":"full","linkDestination":"none","style":{"spacing":{"margin":{"top":"0","bottom":"0"}}}} -->
              <figure class="wp-block-image size-full is-resized" style="margin-top:0;margin-bottom:0">
                <img src="<?php echo esc_url($wbai_images[1]) ?>" alt="" class="wp-image-12198" style="object-fit:contain;width:20px;height:16px" />
              </figure>
              <!-- /wp:image -->
            </div>
            <!-- /wp:column -->
            <!-- wp:column {"width":""} -->
            <div class="wp-block-column">
              <!-- wp:list {"className":"is-style-hide-bullet-list-link-hover-style-white is-style-list-style-no-bullet","style":{"spacing":{"padding":{"top":"0","right":"0","bottom":"0","left":"0"},"margin":{"top":"0","bottom":"0","left":"0","right":"0"}},"typography":{"lineHeight":"1.5","textTransform":"none","fontFamily":"Montserrat"},"elements":{"link":{"color":{"text":"var:preset|color|light-color"},":hover":{"color":{"text":"var:preset|color|accent-color"}}}}},"fontSize":"normal"} -->
              <ul style="margin-top:0;margin-right:0;margin-bottom:0;margin-left:0;padding-top:0;padding-right:0;padding-bottom:0;padding-left:0;line-height:1.5;text-transform:none;font-family:Montserrat" class="wp-block-list is-style-hide-bullet-list-link-hover-style-white is-style-list-style-no-bullet has-link-color has-normal-font-size">
                <!-- wp:list-item -->
                <li><a href="#"><?php esc_html_e('Amsterdam, Netherlands', 'wreckingball-ai') ?></a></li>
                <!-- /wp:list-item -->
              </ul>
              <!-- /wp:list -->
            </div>
            <!-- /wp:column -->
          </div>
          <!-- /wp:columns -->
          <!-- wp:columns {"style":{"spacing":{"blockGap":{"left":"10px"}}}} -->
          <div class="wp-block-columns">
            <!-- wp:column {"width":"20px"} -->
            <div class="wp-block-column" style="flex-basis:20px">
              <!-- wp:image {"id":12205,"width":"20px","height":"16px","scale":"contain","sizeSlug":"full","linkDestination":"none","style":{"spacing":{"margin":{"top":"0","bottom":"0"}}}} -->
              <figure class="wp-block-image size-full is-resized" style="margin-top:0;margin-bottom:0">
                <img src="<?php echo esc_url($wbai_images[2]) ?>" alt="" class="wp-image-12205" style="object-fit:contain;width:20px;height:16px" />
              </figure>
              <!-- /wp:image -->
            </div>
            <!-- /wp:column -->
            <!-- wp:column {"width":""} -->
            <div class="wp-block-column">
              <!-- wp:list {"className":"is-style-hide-bullet-list-link-hover-style-white is-style-list-style-no-bullet","style":{"spacing":{"padding":{"top":"0","right":"0","bottom":"0","left":"0"},"margin":{"top":"0","bottom":"0","left":"0","right":"0"}},"typography":{"lineHeight":"1.5","textTransform":"none","fontFamily":"Montserrat"},"elements":{"link":{"color":{"text":"var:preset|color|light-color"},":hover":{"color":{"text":"var:preset|color|accent-color"}}}}},"fontSize":"normal"} -->
              <ul style="margin-top:0;margin-right:0;margin-bottom:0;margin-left:0;padding-top:0;padding-right:0;padding-bottom:0;padding-left:0;line-height:1.5;text-transform:none;font-family:Montserrat" class="wp-block-list is-style-hide-bullet-list-link-hover-style-white is-style-list-style-no-bullet has-link-color has-normal-font-size">
                <!-- wp:list-item -->
                <li><a href="#"><?php esc_html_e('+31 (0) 20 123 4567', 'wreckingball-ai') ?></a></li>
                <!-- /wp:list-item -->
              </ul>
              <!-- /wp:list -->
            </div>
            <!-- /wp:column -->
          </div>
          <!-- /wp:columns -->
          <!-- wp:columns {"style":{"spacing":{"blockGap":{"left":"10px"}}}} -->
          <div class="wp-block-columns">
            <!-- wp:column {"width":"20px"} -->
            <div class="wp-block-column" style="flex-basis:20px">
              <!-- wp:image {"id":12206,"width":"20px","height":"16px","scale":"contain","sizeSlug":"full","linkDestination":"none","style":{"spacing":{"margin":{"top":"0","bottom":"0"}}}} -->
              <figure class="wp-block-image size-full is-resized" style="margin-top:0;margin-bottom:0">
                <img src="<?php echo esc_url($wbai_images[3]) ?>" alt="" class="wp-image-12206" style="object-fit:contain;width:20px;height:16px" />
              </figure>
              <!-- /wp:image -->
            </div>
            <!-- /wp:column -->
            <!-- wp:column {"width":""} -->
            <div class="wp-block-column">
              <!-- wp:list {"className":"is-style-hide-bullet-list-link-hover-style-white is-style-list-style-no-bullet","style":{"spacing":{"padding":{"top":"0","right":"0","bottom":"0","left":"0"},"margin":{"top":"0","bottom":"0","left":"0","right":"0"}},"typography":{"lineHeight":"1.5","textTransform":"none","fontFamily":"Montserrat"},"elements":{"link":{"color":{"text":"var:preset|color|light-color"},":hover":{"color":{"text":"var:preset|color|accent-color"}}}}},"fontSize":"normal"} -->
              <ul style="margin-top:0;margin-right:0;margin-bottom:0;margin-left:0;padding-top:0;padding-right:0;padding-bottom:0;padding-left:0;line-height:1.5;text-transform:none;font-family:Montserrat" class="wp-block-list is-style-hide-bullet-list-link-hover-style-white is-style-list-style-no-bullet has-link-color has-normal-font-size">
                <!-- wp:list-item -->
                <li><a href="#"><?php esc_html_e('hello@wreckingball.ai', 'wreckingball-ai') ?></a></li>
                <!-- /wp:list-item -->
              </ul>
              <!-- /wp:list -->
            </div>
            <!-- /wp:column -->
          </div>
          <!-- /wp:columns -->
          <!-- wp:columns {"style":{"spacing":{"blockGap":{"left":"10px"}}}} -->
          <div class="wp-block-columns">
            <!-- wp:column {"width":"20px"} -->
            <div class="wp-block-column" style="flex-basis:20px">
              <!-- wp:image {"id":12208,"width":"20px","height":"16px","scale":"contain","sizeSlug":"full","linkDestination":"none","style":{"spacing":{"margin":{"top":"0","bottom":"0"}}}} -->
              <figure class="wp-block-image size-full is-resized" style="margin-top:0;margin-bottom:0">
                <img src="<?php echo esc_url($wbai_images[4]) ?>" alt="" class="wp-image-12208" style="object-fit:contain;width:20px;height:16px" />
              </figure>
              <!-- /wp:image -->
            </div>
            <!-- /wp:column -->
            <!-- wp:column {"width":""} -->
            <div class="wp-block-column">
              <!-- wp:list {"className":"is-style-hide-bullet-list-link-hover-style-white is-style-list-style-no-bullet","style":{"spacing":{"padding":{"top":"0","right":"0","bottom":"0","left":"0"},"margin":{"top":"0","bottom":"0","left":"0","right":"0"}},"typography":{"lineHeight":"1.5","textTransform":"none","fontFamily":"Montserrat"},"elements":{"link":{"color":{"text":"var:preset|color|light-color"}}}},"fontSize":"normal"} -->
              <ul style="margin-top:0;margin-right:0;margin-bottom:0;margin-left:0;padding-top:0;padding-right:0;padding-bottom:0;padding-left:0;line-height:1.5;text-transform:none;font-family:Montserrat" class="wp-block-list is-style-hide-bullet-list-link-hover-style-white is-style-list-style-no-bullet has-link-color has-normal-font-size">
                <!-- wp:list-item {"style":{"elements":{"link":{"color":{"text":"var:preset|color|light-color"}}}},"textColor":"light-color"} -->
                <li class="has-light-color-color has-text-color has-link-color"><?php esc_html_e('Monday - Friday : 9:00 AM - 6:00 PM', 'wreckingball-ai') ?></li>
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
  <div class="wp-block-group" style="border-top-color:#ffffff12;border-top-width:1px;margin-top:0;margin-bottom:0;padding-top:32px;padding-right:var(--wp--preset--spacing--40);padding-bottom:32px;padding-left:var(--wp--preset--spacing--40)">
    <!-- wp:paragraph {"align":"center","style":{"elements":{"link":{"color":{"text":"var:preset|color|light-color"}}},"typography":{"lineHeight":"1.5","fontFamily":"Montserrat"}},"textColor":"light-color","fontSize":"normal"} -->
    <p class="has-text-align-center has-light-color-color has-text-color has-link-color has-normal-font-size" style="line-height:1.5;font-family:Montserrat"><?php esc_html_e('Proudly powered by WordPress | Theme: Wreckingball AI by Wreckingball AI.', 'wreckingball-ai') ?></p>
    <!-- /wp:paragraph -->
  </div>
  <!-- /wp:group -->
  <!-- wp:group {"style":{"spacing":{"padding":{"right":"var:preset|spacing|40","left":"var:preset|spacing|40","top":"32px","bottom":"32px"},"margin":{"top":"0","bottom":"0"}}},"layout":{"type":"constrained","contentSize":"1180px"}} -->
  <div class="wp-block-group" style="margin-top:0;margin-bottom:0;padding-top:32px;padding-right:var(--wp--preset--spacing--40);padding-bottom:32px;padding-left:var(--wp--preset--spacing--40)">
    <!-- wp:buttons {"style":{"spacing":{"margin":{"top":"0","bottom":"0"}}},"layout":{"type":"flex","justifyContent":"center"}} -->
    <div class="wp-block-buttons" style="margin-top:0;margin-bottom:0">
      <!-- wp:button {"backgroundColor":"primary","textColor":"light-color","className":"wbai-cta-btn","style":{"border":{"radius":"32px"},"spacing":{"padding":{"left":"48px","right":"48px","top":"20px","bottom":"20px"}},"typography":{"fontFamily":"Orbitron","fontWeight":"700"}}} -->
      <div class="wp-block-button wbai-cta-btn">
        <a class="wp-block-button__link has-light-color-color has-primary-background-color has-text-color has-background wp-element-button" style="border-radius:32px;padding-top:20px;padding-right:48px;padding-bottom:20px;padding-left:48px;font-family:Orbitron;font-weight:700"><?php esc_html_e('Ready to smash bottlenecks? Book a demo', 'wreckingball-ai') ?></a>
      </div>
      <!-- /wp:button -->
    </div>
    <!-- /wp:buttons -->
  </div>
  <!-- /wp:group -->
</div>
<!-- /wp:group -->
<!-- wp:buttons {"style":{"spacing":{"margin":{"top":"0","bottom":"0"}}}} -->
<div class="wp-block-buttons" style="margin-top:0;margin-bottom:0">
  <!-- wp:button {"backgroundColor":"accent-color","textColor":"black-color","className":"saaslauncher-scrollto-top is-style-button-hover-secondary-bgcolor","style":{"border":{"radius":"50%"}}} -->
  <div class="wp-block-button saaslauncher-scrollto-top is-style-button-hover-secondary-bgcolor">
    <a class="wp-block-button__link has-black-color-color has-accent-color-background-color has-text-color has-background wp-element-button" style="border-radius:50%"><?php esc_html_e('Scroll to Top', 'wreckingball-ai') ?></a>
  </div>
  <!-- /wp:button -->
</div>
<!-- /wp:buttons -->