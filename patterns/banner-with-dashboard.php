<?php
/**
 * Title: Wreckingball AI Hero Banner
 * Slug: wreckingball-ai/banner-hero
 * Categories: wreckingball-hero
 */
?>
<!-- wp:group {"align":"full","style":{"spacing":{"blockGap":"0","margin":{"top":"0","bottom":"0"},"padding":{"right":"0","left":"0","top":"0","bottom":"0"}},"color":{"background":"#000000"}},"layout":{"type":"constrained","contentSize":"100%"}} -->
<div class="wp-block-group alignfull wbai-hero-section" style="background: #000000; margin-top:0;margin-bottom:0;padding-top:0;padding-right:0;padding-bottom:0;padding-left:0;position:relative;overflow:hidden;">
  
  <!-- Background Effects -->
  <div class="wbai-bg-effects" style="position:absolute;top:0;left:0;width:100%;height:100%;pointer-events:none;z-index:1;">
    <!-- Blue light streaks -->
    <div style="position:absolute;top:20%;left:10%;width:300px;height:200px;background:radial-gradient(ellipse, rgba(0,207,255,0.3) 0%, transparent 70%);filter:blur(40px);"></div>
    <div style="position:absolute;bottom:30%;right:20%;width:250px;height:150px;background:radial-gradient(ellipse, rgba(0,207,255,0.2) 0%, transparent 70%);filter:blur(30px);"></div>
    
    <!-- Pink light streaks -->
    <div style="position:absolute;top:10%;right:15%;width:400px;height:300px;background:radial-gradient(ellipse, rgba(255,0,102,0.4) 0%, transparent 70%);filter:blur(50px);"></div>
    <div style="position:absolute;bottom:20%;left:5%;width:200px;height:100px;background:radial-gradient(ellipse, rgba(255,0,102,0.3) 0%, transparent 70%);filter:blur(35px);"></div>
  </div>

  <!-- Main Content Container -->
  <div style="position:relative;z-index:2;padding:80px 0;max-width:1200px;margin:0 auto;">
    <div style="display:flex;align-items:center;justify-content:space-between;gap:60px;padding:0 40px;">
      
      <!-- Left Side: Wrecking Ball Image -->
      <div class="wbai-wrecking-ball" style="flex:0 0 400px;display:flex;justify-content:center;align-items:center;position:relative;">
        <div style="position:relative;width:350px;height:350px;display:flex;justify-content:center;align-items:center;">
          <!-- Wrecking Ball Image -->
          <img src="<?php echo get_template_directory_uri(); ?>/assets/images/hero_wreckingball.png" 
               alt="Wreckingball AI" 
               class="wbai-ball"
               style="width:300px;height:auto;filter:drop-shadow(0 0 30px rgba(0,207,255,0.6));transition:all 0.3s ease;"
               onmouseover="this.style.transform='scale(1.05)'; this.style.filter='drop-shadow(0 0 40px rgba(0,207,255,0.8))'"
               onmouseout="this.style.transform='scale(1)'; this.style.filter='drop-shadow(0 0 30px rgba(0,207,255,0.6))'">
        </div>
      </div>
      
      <!-- Right Side: Text Content -->
      <div class="wbai-hero-content" style="flex:1;display:flex;flex-direction:column;justify-content:center;max-width:500px;">
        <h1 style="font-family:'Inter','Montserrat',Arial,sans-serif;font-size:3.5rem;font-weight:900;color:#00CFFF;text-align:left;text-shadow:0 0 20px rgba(0,207,255,0.8);letter-spacing:-0.02em;line-height:1.1;margin:0 0 30px 0;">
          SMASH THROUGH<br>AI BOTTLENECKS
        </h1>
        
        <p style="font-family:'Inter','Montserrat',Arial,sans-serif;font-size:1.3rem;color:#ffffff;text-align:left;line-height:1.5;margin:0 0 40px 0;font-weight:400;">
          Wreckingball.ai is your digital force—precision-engineered to break down barriers and automate everything.
        </p>
        
        <div style="display:flex;gap:20px;flex-wrap:wrap;align-items:center;">
          <a href="#contact" class="wbai-btn-primary" style="background:#00CFFF;color:#000000;font-family:'Inter','Montserrat',Arial,sans-serif;font-size:1.1rem;font-weight:700;padding:16px 32px;border-radius:8px;text-decoration:none;transition:all 0.3s ease;display:inline-block;box-shadow:0 0 20px rgba(0,207,255,0.4);">
            CONTACT US
          </a>
          <a href="#quote" class="wbai-btn-secondary" style="background:transparent;color:#ffffff;font-family:'Inter','Montserrat',Arial,sans-serif;font-size:1.1rem;font-weight:700;padding:16px 32px;border:2px solid #00CFFF;border-radius:8px;text-decoration:none;transition:all 0.3s ease;display:inline-block;box-shadow:0 0 20px rgba(0,207,255,0.2);">
            GET A QUOTATION
          </a>
          <a href="<?php echo esc_url( home_url('/team/') ); ?>" class="wbai-btn-secondary" style="background:transparent;color:#ffffff;font-family:'Inter','Montserrat',Arial,sans-serif;font-size:1.1rem;font-weight:700;padding:16px 32px;border:2px solid #00CFFF;border-radius:8px;text-decoration:none;transition:all 0.3s ease;display:inline-block;box-shadow:0 0 20px rgba(0,207,255,0.2);">
            MEET THE TEAM
          </a>
        </div>
      </div>
    </div>
  </div>
</div>
<!-- /wp:group -->