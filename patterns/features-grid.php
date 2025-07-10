<?php
/**
 * Title: Wreckingball AI Features Grid
 * Slug: wreckingball-ai/features-grid
 * Categories: wreckingball-service
 */
$wbai_url = trailingslashit(get_template_directory_uri());
$wbai_images = array(
    $wbai_url . 'assets/images/ai_integration.jpg', // AI Integration image
    $wbai_url . 'assets/images/process_optimization.jpg', // Process optimization
    $wbai_url . 'assets/images/digital_transformation.jpg', // Digital transformation
    $wbai_url . 'assets/images/custom_ai.jpg', // Custom AI solutions
    $wbai_url . 'assets/images/ai_training.jpg', // AI training
);
?>
<!-- wp:group {"align":"full","style":{"spacing":{"padding":{"top":"6rem","bottom":"6rem","left":"var:preset|spacing|40","right":"var:preset|spacing|40"},"margin":{"top":"0","bottom":"0"}},"color":{"background":"#141414"}},"layout":{"type":"constrained","contentSize":"1260px"}} -->
<div class="wp-block-group alignfull has-background" style="background-color:#141414;margin-top:0;margin-bottom:0;padding-top:6rem;padding-right:var(--wp--preset--spacing--40);padding-bottom:6rem;padding-left:var(--wp--preset--spacing--40)">
  <!-- wp:group {"style":{"spacing":{"margin":{"top":"0","bottom":"64px"}}},"layout":{"type":"constrained","contentSize":"760px"}} -->
  <div class="wp-block-group" style="margin-top:0;margin-bottom:64px">
    <!-- wp:group {"layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"center"}} -->
    <div class="wp-block-group">
      <!-- wp:group {"style":{"color":{"background":"#9B30FF20"},"spacing":{"padding":{"top":"7px","bottom":"7px","left":"16px","right":"16px"}},"border":{"radius":"60px","width":"1px","color":"#9B30FF"}},"layout":{"type":"constrained"}} -->
      <div class="wp-block-group has-background has-border-color" style="border-radius:60px;border-color:#9B30FF;border-width:1px;background-color:#9B30FF20;padding-top:7px;padding-right:16px;padding-bottom:7px;padding-left:16px">
        <!-- wp:paragraph {"style":{"elements":{"link":{"color":{"text":"var:preset|color|primary"}}},"typography":{"fontStyle":"normal","fontWeight":"400","textTransform":"uppercase","fontFamily":"Orbitron"}},"textColor":"primary","fontSize":"small"} -->
        <p class="has-primary-color has-text-color has-link-color has-small-font-size" style="font-style:normal;font-weight:400;text-transform:uppercase;font-family:Orbitron"><?php esc_html_e('AI Solutions', 'wreckingball-ai') ?></p>
        <!-- /wp:paragraph -->
      </div>
      <!-- /wp:group -->
    </div>
    <!-- /wp:group -->
    <!-- wp:heading {"textAlign":"center","level":1,"style":{"typography":{"lineHeight":"1.3","fontFamily":"Orbitron","fontWeight":"700"},"elements":{"link":{"color":{"text":"var:preset|color|light-color"}}}},"textColor":"light-color","fontSize":"xx-large"} -->
    <h1 class="wp-block-heading has-text-align-center has-light-color-color has-text-color has-link-color has-xx-large-font-size" style="line-height:1.3;font-family:Orbitron;font-weight:700"><?php esc_html_e('Smash Through Bottlenecks with AI Solutions', 'wreckingball-ai') ?></h1>
    <!-- /wp:heading -->
    <!-- wp:paragraph {"align":"center","style":{"elements":{"link":{"color":{"text":"var:preset|color|foreground-alt"}}},"typography":{"fontFamily":"Montserrat"}},"textColor":"foreground-alt","fontSize":"medium"} -->
    <p class="has-text-align-center has-foreground-alt-color has-text-color has-link-color has-medium-font-size" style="font-family:Montserrat"><?php esc_html_e('Discover how our AI solutions break through traditional barriers, automate complex processes, and accelerate your business transformation with cutting-edge technology.', 'wreckingball-ai') ?></p>
    <!-- /wp:paragraph -->
  </div>
  <!-- /wp:group -->
  <!-- wp:columns {"style":{"spacing":{"blockGap":{"top":"24px","left":"24px"}}}} -->
  <div class="wp-block-columns">
    <!-- wp:column {"className":"is-style-default"} -->
    <div class="wp-block-column is-style-default">
      <!-- wp:cover {"url":"<?php echo esc_url($wbai_images[0]) ?>","id":11676,"dimRatio":0,"customOverlayColor":"#141414","isUserOverlayColor":false,"contentPosition":"top left","isDark":false,"className":"is-style-saaslauncher-cover-hover-effect-with-shadow wbai-feature-card","style":{"spacing":{"padding":{"top":"32px","bottom":"32px","left":"32px","right":"32px"}},"border":{"radius":"20px","color":"#9B30FF","width":"1px"}},"layout":{"type":"constrained"}} -->
      <div class="wp-block-cover is-light has-custom-content-position is-position-top-left is-style-saaslauncher-cover-hover-effect-with-shadow wbai-feature-card has-border-color" style="border-color:#9B30FF;border-width:1px;border-radius:20px;padding-top:32px;padding-right:32px;padding-bottom:32px;padding-left:32px">
        <span aria-hidden="true" class="wp-block-cover__background has-background-dim-0 has-background-dim" style="background-color:#141414"></span>
        <img class="wp-block-cover__image-background wp-image-11676" alt="AI Integration" src="<?php echo esc_url($wbai_images[0]) ?>" data-object-fit="cover" />
        <div class="wp-block-cover__inner-container">
          <!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|30","margin":{"top":"0","bottom":"0"}}},"layout":{"type":"constrained","contentSize":"320px","justifyContent":"left"}} -->
          <div class="wp-block-group" style="margin-top:0;margin-bottom:0">
            <!-- wp:heading {"textAlign":"left","level":3,"style":{"typography":{"fontStyle":"normal","fontWeight":"600","fontFamily":"Orbitron"},"elements":{"link":{"color":{"text":"var:preset|color|light-color"}}}},"textColor":"light-color","fontSize":"big"} -->
            <h3 class="wp-block-heading has-text-align-left has-light-color-color has-text-color has-link-color has-big-font-size" style="font-style:normal;font-weight:600;font-family:Orbitron"><?php esc_html_e('AI Integration & Automation', 'wreckingball-ai') ?></h3>
            <!-- /wp:heading -->
            <!-- wp:paragraph {"style":{"typography":{"fontFamily":"Montserrat"}},"textColor":"foreground-alt"} -->
            <p class="has-foreground-alt-color has-text-color" style="font-family:Montserrat"><?php esc_html_e('Seamlessly integrate AI into your existing workflows and automate repetitive tasks with intelligent solutions.', 'wreckingball-ai') ?></p>
            <!-- /wp:paragraph -->
            <!-- wp:buttons {"className":"is-style-button-zoom-on-hover","style":{"spacing":{"margin":{"top":"32px"}}},"layout":{"type":"flex"}} -->
            <div class="wp-block-buttons is-style-button-zoom-on-hover" style="margin-top:32px">
              <!-- wp:button {"textColor":"primary","className":"is-style-button-hover-secondary-bgcolor wbai-feature-btn","style":{"border":{"radius":"12px"},"spacing":{"padding":{"left":"24px","right":"24px","top":"14px","bottom":"14px"}},"color":{"background":"#9B30FF20"},"elements":{"link":{"color":{"text":"var:preset|color|primary"}}},"typography":{"fontFamily":"Orbitron","fontWeight":"700"}},"fontSize":"normal"} -->
              <div class="wp-block-button has-custom-font-size is-style-button-hover-secondary-bgcolor wbai-feature-btn has-normal-font-size">
                <a class="wp-block-button__link has-primary-color has-text-color has-background has-link-color wp-element-button" style="border-radius:12px;background-color:#9B30FF20;padding-top:14px;padding-right:24px;padding-bottom:14px;padding-left:24px;font-family:Orbitron;font-weight:700"><?php esc_html_e('Explore Solution', 'wreckingball-ai') ?></a>
              </div>
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
    <div class="wp-block-column is-style-default">
      <!-- wp:cover {"url":"<?php echo esc_url($wbai_images[1]) ?>","id":11690,"dimRatio":0,"customOverlayColor":"#141414","isUserOverlayColor":false,"contentPosition":"top left","isDark":false,"className":"is-style-saaslauncher-cover-hover-effect-with-shadow wbai-feature-card","style":{"spacing":{"padding":{"top":"32px","bottom":"32px","left":"32px","right":"32px"}},"border":{"radius":"20px","color":"#00FFF7","width":"1px"}},"layout":{"type":"constrained"}} -->
      <div class="wp-block-cover is-light has-custom-content-position is-position-top-left is-style-saaslauncher-cover-hover-effect-with-shadow wbai-feature-card has-border-color" style="border-color:#00FFF7;border-width:1px;border-radius:20px;padding-top:32px;padding-right:32px;padding-bottom:32px;padding-left:32px">
        <span aria-hidden="true" class="wp-block-cover__background has-background-dim-0 has-background-dim" style="background-color:#141414"></span>
        <img class="wp-block-cover__image-background wp-image-11690" alt="Process Optimization" src="<?php echo esc_url($wbai_images[1]) ?>" data-object-fit="cover" />
        <div class="wp-block-cover__inner-container">
          <!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|30","margin":{"top":"0","bottom":"0"}}},"layout":{"type":"constrained","contentSize":"320px","justifyContent":"left"}} -->
          <div class="wp-block-group" style="margin-top:0;margin-bottom:0">
            <!-- wp:heading {"textAlign":"left","level":3,"style":{"typography":{"fontStyle":"normal","fontWeight":"600","fontFamily":"Orbitron"},"elements":{"link":{"color":{"text":"var:preset|color|light-color"}}}},"textColor":"light-color","fontSize":"big"} -->
            <h3 class="wp-block-heading has-text-align-left has-light-color-color has-text-color has-link-color has-big-font-size" style="font-style:normal;font-weight:600;font-family:Orbitron"><?php esc_html_e('Process Optimization & Workflows', 'wreckingball-ai') ?></h3>
            <!-- /wp:heading -->
            <!-- wp:paragraph {"style":{"typography":{"fontFamily":"Montserrat"}},"textColor":"foreground-alt"} -->
            <p class="has-foreground-alt-color has-text-color" style="font-family:Montserrat"><?php esc_html_e('Optimize your business processes with AI-driven workflows that eliminate bottlenecks and boost efficiency.', 'wreckingball-ai') ?></p>
            <!-- /wp:paragraph -->
            <!-- wp:buttons {"className":"is-style-button-zoom-on-hover","style":{"spacing":{"margin":{"top":"32px"}}},"layout":{"type":"flex"}} -->
            <div class="wp-block-buttons is-style-button-zoom-on-hover" style="margin-top:32px">
              <!-- wp:button {"textColor":"accent-color","className":"is-style-button-hover-secondary-bgcolor wbai-feature-btn","style":{"border":{"radius":"12px"},"spacing":{"padding":{"left":"24px","right":"24px","top":"14px","bottom":"14px"}},"color":{"background":"#00FFF720"},"elements":{"link":{"color":{"text":"var:preset|color|accent-color"}}},"typography":{"fontFamily":"Orbitron","fontWeight":"700"}},"fontSize":"normal"} -->
              <div class="wp-block-button has-custom-font-size is-style-button-hover-secondary-bgcolor wbai-feature-btn has-normal-font-size">
                <a class="wp-block-button__link has-accent-color-color has-text-color has-background has-link-color wp-element-button" style="border-radius:12px;background-color:#00FFF720;padding-top:14px;padding-right:24px;padding-bottom:14px;padding-left:24px;font-family:Orbitron;font-weight:700"><?php esc_html_e('Explore Solution', 'wreckingball-ai') ?></a>
              </div>
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
  <div class="wp-block-columns" style="margin-top:24px;margin-bottom:0">
    <!-- wp:column -->
    <div class="wp-block-column">
      <!-- wp:cover {"url":"<?php echo esc_url($wbai_images[2]) ?>","id":11689,"dimRatio":0,"customOverlayColor":"#141414","isUserOverlayColor":false,"contentPosition":"top left","isDark":false,"className":"is-style-saaslauncher-cover-hover-effect-with-shadow wbai-feature-card","style":{"spacing":{"padding":{"top":"32px","bottom":"32px","left":"32px","right":"32px"}},"border":{"radius":"20px","color":"#9B30FF","width":"1px"}},"layout":{"type":"constrained"}} -->
      <div class="wp-block-cover is-light has-custom-content-position is-position-top-left is-style-saaslauncher-cover-hover-effect-with-shadow wbai-feature-card has-border-color" style="border-color:#9B30FF;border-width:1px;border-radius:20px;padding-top:32px;padding-right:32px;padding-bottom:32px;padding-left:32px">
        <span aria-hidden="true" class="wp-block-cover__background has-background-dim-0 has-background-dim" style="background-color:#141414"></span>
        <img class="wp-block-cover__image-background wp-image-11689" alt="Digital Transformation" src="<?php echo esc_url($wbai_images[2]) ?>" data-object-fit="cover" />
        <div class="wp-block-cover__inner-container">
          <!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|30","margin":{"top":"0","bottom":"0"}}},"layout":{"type":"constrained","contentSize":"320px","justifyContent":"left"}} -->
          <div class="wp-block-group" style="margin-top:0;margin-bottom:0">
            <!-- wp:heading {"textAlign":"left","level":3,"style":{"typography":{"fontStyle":"normal","fontWeight":"600","fontFamily":"Orbitron"},"elements":{"link":{"color":{"text":"var:preset|color|light-color"}}}},"textColor":"light-color","fontSize":"big"} -->
            <h3 class="wp-block-heading has-text-align-left has-light-color-color has-text-color has-link-color has-big-font-size" style="font-style:normal;font-weight:600;font-family:Orbitron"><?php esc_html_e('Digital Transformation Consulting', 'wreckingball-ai') ?></h3>
            <!-- /wp:heading -->
            <!-- wp:paragraph {"style":{"typography":{"fontFamily":"Montserrat"}},"textColor":"foreground-alt"} -->
            <p class="has-foreground-alt-color has-text-color" style="font-family:Montserrat"><?php esc_html_e('Transform your business with strategic AI consulting that breaks through traditional limitations.', 'wreckingball-ai') ?></p>
            <!-- /wp:paragraph -->
            <!-- wp:buttons {"className":"is-style-button-zoom-on-hover","style":{"spacing":{"margin":{"top":"32px"}}},"layout":{"type":"flex"}} -->
            <div class="wp-block-buttons is-style-button-zoom-on-hover" style="margin-top:32px">
              <!-- wp:button {"textColor":"primary","className":"is-style-button-hover-secondary-bgcolor wbai-feature-btn","style":{"border":{"radius":"12px"},"spacing":{"padding":{"left":"24px","right":"24px","top":"14px","bottom":"14px"}},"color":{"background":"#9B30FF20"},"elements":{"link":{"color":{"text":"var:preset|color|primary"}}},"typography":{"fontFamily":"Orbitron","fontWeight":"700"}},"fontSize":"normal"} -->
              <div class="wp-block-button has-custom-font-size is-style-button-hover-secondary-bgcolor wbai-feature-btn has-normal-font-size">
                <a class="wp-block-button__link has-primary-color has-text-color has-background has-link-color wp-element-button" style="border-radius:12px;background-color:#9B30FF20;padding-top:14px;padding-right:24px;padding-bottom:14px;padding-left:24px;font-family:Orbitron;font-weight:700"><?php esc_html_e('Explore Solution', 'wreckingball-ai') ?></a>
              </div>
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
    <div class="wp-block-column">
      <!-- wp:cover {"url":"<?php echo esc_url($wbai_images[3]) ?>","id":11694,"dimRatio":0,"customOverlayColor":"#141414","isUserOverlayColor":false,"contentPosition":"top left","isDark":false,"className":"is-style-saaslauncher-cover-hover-effect-with-shadow wbai-feature-card","style":{"spacing":{"padding":{"top":"32px","bottom":"32px","left":"32px","right":"32px"}},"border":{"color":"#00FFF7","width":"1px","radius":"20px"}},"layout":{"type":"constrained"}} -->
      <div class="wp-block-cover is-light has-custom-content-position is-position-top-left is-style-saaslauncher-cover-hover-effect-with-shadow wbai-feature-card has-border-color" style="border-color:#00FFF7;border-width:1px;border-radius:20px;padding-top:32px;padding-right:32px;padding-bottom:32px;padding-left:32px">
        <span aria-hidden="true" class="wp-block-cover__background has-background-dim-0 has-background-dim" style="background-color:#141414"></span>
        <img class="wp-block-cover__image-background wp-image-11694" alt="Custom AI Solutions" src="<?php echo esc_url($wbai_images[3]) ?>" data-object-fit="cover" />
        <div class="wp-block-cover__inner-container">
          <!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|30","margin":{"top":"0","bottom":"0"}}},"layout":{"type":"constrained","contentSize":"320px","justifyContent":"left"}} -->
          <div class="wp-block-group" style="margin-top:0;margin-bottom:0">
            <!-- wp:heading {"textAlign":"left","level":3,"style":{"typography":{"fontStyle":"normal","fontWeight":"600","fontFamily":"Orbitron"},"elements":{"link":{"color":{"text":"var:preset|color|light-color"}}}},"textColor":"light-color","fontSize":"big"} -->
            <h3 class="wp-block-heading has-text-align-left has-light-color-color has-text-color has-link-color has-big-font-size" style="font-style:normal;font-weight:600;font-family:Orbitron"><?php esc_html_e('Custom AI Solutions Development', 'wreckingball-ai') ?></h3>
            <!-- /wp:heading -->
            <!-- wp:paragraph {"style":{"typography":{"fontFamily":"Montserrat"}},"textColor":"foreground-alt"} -->
            <p class="has-foreground-alt-color has-text-color" style="font-family:Montserrat"><?php esc_html_e('Build custom AI solutions tailored to your specific business needs and challenges.', 'wreckingball-ai') ?></p>
            <!-- /wp:paragraph -->
            <!-- wp:buttons {"className":"is-style-button-zoom-on-hover","style":{"spacing":{"margin":{"top":"32px"}}},"layout":{"type":"flex"}} -->
            <div class="wp-block-buttons is-style-button-zoom-on-hover" style="margin-top:32px">
              <!-- wp:button {"textColor":"accent-color","className":"is-style-button-hover-secondary-bgcolor wbai-feature-btn","style":{"border":{"radius":"12px"},"spacing":{"padding":{"left":"24px","right":"24px","top":"14px","bottom":"14px"}},"color":{"background":"#00FFF720"},"elements":{"link":{"color":{"text":"var:preset|color|accent-color"}}},"typography":{"fontFamily":"Orbitron","fontWeight":"700"}},"fontSize":"normal"} -->
              <div class="wp-block-button has-custom-font-size is-style-button-hover-secondary-bgcolor wbai-feature-btn has-normal-font-size">
                <a class="wp-block-button__link has-accent-color-color has-text-color has-background has-link-color wp-element-button" style="border-radius:12px;background-color:#00FFF720;padding-top:14px;padding-right:24px;padding-bottom:14px;padding-left:24px;font-family:Orbitron;font-weight:700"><?php esc_html_e('Explore Solution', 'wreckingball-ai') ?></a>
              </div>
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
    <div class="wp-block-column">
      <!-- wp:cover {"url":"<?php echo esc_url($wbai_images[4]) ?>","id":11697,"dimRatio":0,"customOverlayColor":"#141414","isUserOverlayColor":false,"contentPosition":"top left","isDark":false,"className":"is-style-saaslauncher-cover-hover-effect-with-shadow wbai-feature-card","style":{"spacing":{"padding":{"top":"32px","bottom":"32px","left":"32px","right":"32px"}},"border":{"radius":"20px","color":"#9B30FF","width":"1px"}},"layout":{"type":"constrained"}} -->
      <div class="wp-block-cover is-light has-custom-content-position is-position-top-left is-style-saaslauncher-cover-hover-effect-with-shadow wbai-feature-card has-border-color" style="border-color:#9B30FF;border-width:1px;border-radius:20px;padding-top:32px;padding-right:32px;padding-bottom:32px;padding-left:32px">
        <span aria-hidden="true" class="wp-block-cover__background has-background-dim-0 has-background-dim" style="background-color:#141414"></span>
        <img class="wp-block-cover__image-background wp-image-11697" alt="AI Training" src="<?php echo esc_url($wbai_images[4]) ?>" data-object-fit="cover" />
        <div class="wp-block-cover__inner-container">
          <!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|30","margin":{"top":"0","bottom":"0"}}},"layout":{"type":"constrained","contentSize":"320px","justifyContent":"left"}} -->
          <div class="wp-block-group" style="margin-top:0;margin-bottom:0">
            <!-- wp:heading {"textAlign":"left","level":3,"style":{"typography":{"fontStyle":"normal","fontWeight":"600","fontFamily":"Orbitron"},"elements":{"link":{"color":{"text":"var:preset|color|light-color"}}}},"textColor":"light-color","fontSize":"big"} -->
            <h3 class="wp-block-heading has-text-align-left has-light-color-color has-text-color has-link-color has-big-font-size" style="font-style:normal;font-weight:600;font-family:Orbitron"><?php esc_html_e('AI Training & Implementation', 'wreckingball-ai') ?></h3>
            <!-- /wp:heading -->
            <!-- wp:paragraph {"style":{"typography":{"fontFamily":"Montserrat"}},"textColor":"foreground-alt"} -->
            <p class="has-foreground-alt-color has-text-color" style="font-family:Montserrat"><?php esc_html_e('Train your team and implement AI solutions with expert guidance and ongoing support.', 'wreckingball-ai') ?></p>
            <!-- /wp:paragraph -->
            <!-- wp:buttons {"className":"is-style-button-zoom-on-hover","style":{"spacing":{"margin":{"top":"32px"}}},"layout":{"type":"flex"}} -->
            <div class="wp-block-buttons is-style-button-zoom-on-hover" style="margin-top:32px">
              <!-- wp:button {"textColor":"primary","className":"is-style-button-hover-secondary-bgcolor wbai-feature-btn","style":{"border":{"radius":"12px"},"spacing":{"padding":{"left":"24px","right":"24px","top":"14px","bottom":"14px"}},"color":{"background":"#9B30FF20"},"elements":{"link":{"color":{"text":"var:preset|color|primary"}}},"typography":{"fontFamily":"Orbitron","fontWeight":"700"}},"fontSize":"normal"} -->
              <div class="wp-block-button has-custom-font-size is-style-button-hover-secondary-bgcolor wbai-feature-btn has-normal-font-size">
                <a class="wp-block-button__link has-primary-color has-text-color has-background has-link-color wp-element-button" style="border-radius:12px;background-color:#9B30FF20;padding-top:14px;padding-right:24px;padding-bottom:14px;padding-left:24px;font-family:Orbitron;font-weight:700"><?php esc_html_e('Explore Solution', 'wreckingball-ai') ?></a>
              </div>
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