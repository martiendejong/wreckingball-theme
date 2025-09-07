<?php

/**
 * Title: Wreckingball AI Header
 * Slug: saaslauncher/header-default
 * Categories: header
 * Keywords: header, nav, links, button
 * Block Types: core/template-part/header
 * Post Types: wp_template
 * Inserter: true
 */
?>
<!-- wp:group {"align":"full","className":"wbai-header","style":{"spacing":{"blockGap":"0","margin":{"top":"0","bottom":"0"},"padding":{"right":"0","left":"0","top":"0","bottom":"0"}},"color":{"background":"rgba(0,0,0,0.95)"}},"layout":{"type":"constrained","contentSize":"100%"}} -->
<div class="wp-block-group alignfull wbai-header" style="background:rgba(0,0,0,0.95);margin-top:0;margin-bottom:0;padding-top:0;padding-right:0;padding-bottom:0;padding-left:0;backdrop-filter:blur(10px);position:fixed;top:0;left:0;right:0;z-index:1000;border-bottom:1px solid rgba(0,207,255,0.2);">
  
  <!-- wp:group {"className":"wbai-header-content","style":{"spacing":{"padding":{"top":"15px","right":"40px","bottom":"15px","left":"40px"}}},"layout":{"type":"constrained","contentSize":"1200px"}} -->
  <div class="wp-block-group wbai-header-content" style="padding-top:15px;padding-right:40px;padding-bottom:15px;padding-left:40px;">
    
    <!-- wp:group {"style":{"spacing":{"blockGap":"0"},"layout":{"type":"flex","flexWrap":"wrap","justifyContent":"space-between","verticalAlignment":"center"}}} -->
    <div class="wp-block-group" style="display:flex;align-items:center;justify-content:space-between;gap:0;">
      
      <!-- Logo and Brand -->
      <!-- wp:group {"style":{"spacing":{"blockGap":"15px"},"layout":{"type":"flex","flexWrap":"nowrap","verticalAlignment":"center"}}} -->
      <div class="wp-block-group" style="display:flex;align-items:center;gap:15px;">
        <!-- wp:site-logo {"width":45,"shouldSyncIcon":false,"style":{"color":{"duotone":"unset"}}} /-->
        <!-- wp:site-title {"style":{"typography":{"fontStyle":"normal","fontWeight":"700","textTransform":"none","letterSpacing":"0px","fontSize":"24px","lineHeight":"1"},"elements":{"link":{"color":{"text":"#00CFFF"},":hover":{"color":{"text":"#FF0066"}}}},"spacing":{"margin":{"top":"0px"}}}} /-->
      </div>
      <!-- /wp:group -->

      <!-- Navigation Menu -->
      <!-- wp:group {"className":"wbai-navigation","style":{"spacing":{"blockGap":"40px"},"layout":{"type":"flex","flexWrap":"nowrap","verticalAlignment":"center"}}} -->
      <div class="wp-block-group wbai-navigation" style="display:flex;align-items:center;gap:40px;">
        
        <!-- wp:group {"style":{"spacing":{"blockGap":"30px"},"layout":{"type":"flex","flexWrap":"nowrap","verticalAlignment":"center"}}} -->
        <div class="wp-block-group" style="display:flex;align-items:center;gap:30px;">
          <a href="#home" class="wbai-nav-link" style="color:#ffffff;text-decoration:none;font-family:'Inter','Montserrat',Arial,sans-serif;font-size:16px;font-weight:500;transition:all 0.3s ease;position:relative;">Home</a>
          <a href="#about" class="wbai-nav-link" style="color:#ffffff;text-decoration:none;font-family:'Inter','Montserrat',Arial,sans-serif;font-size:16px;font-weight:500;transition:all 0.3s ease;position:relative;">About</a>
          <a href="#services" class="wbai-nav-link" style="color:#ffffff;text-decoration:none;font-family:'Inter','Montserrat',Arial,sans-serif;font-size:16px;font-weight:500;transition:all 0.3s ease;position:relative;">Services</a>
          <a href="#portfolio" class="wbai-nav-link" style="color:#ffffff;text-decoration:none;font-family:'Inter','Montserrat',Arial,sans-serif;font-size:16px;font-weight:500;transition:all 0.3s ease;position:relative;">Portfolio</a>
          <a href="#contact" class="wbai-nav-link" style="color:#ffffff;text-decoration:none;font-family:'Inter','Montserrat',Arial,sans-serif;font-size:16px;font-weight:500;transition:all 0.3s ease;position:relative;">Contact</a>
        </div>
        <!-- /wp:group -->

        <!-- CTA Button -->
        <!-- wp:group {"style":{"spacing":{"blockGap":"0"},"layout":{"type":"flex","flexWrap":"nowrap","verticalAlignment":"center"}}} -->
        <div class="wp-block-group" style="display:flex;align-items:center;gap:0;">
          <a href="#demo" class="wbai-cta-btn" style="background:linear-gradient(90deg, #00CFFF 0%, #FF0066 100%);color:#000000;text-decoration:none;font-family:'Inter','Montserrat',Arial,sans-serif;font-size:14px;font-weight:700;padding:12px 24px;border-radius:25px;transition:all 0.3s ease;box-shadow:0 0 20px rgba(0,207,255,0.3);">GET STARTED</a>
        </div>
        <!-- /wp:group -->

      </div>
      <!-- /wp:group -->

    </div>
    <!-- /wp:group -->

  </div>
  <!-- /wp:group -->

</div>
<!-- /wp:group -->