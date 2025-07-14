<?php
/**
 * Title: Wreckingball AI Hero Banner
 * Slug: wreckingball-ai/banner-hero
 * Categories: wreckingball-hero
 */
$wbai_url = trailingslashit(get_template_directory_uri());
$wbai_images = array(
    $wbai_url . 'assets/images/black2.png', // Use the new hero image
);
?>
<!-- wp:group {"align":"full","style":{"spacing":{"blockGap":"0","margin":{"top":"0","bottom":"0"},"padding":{"right":"0","left":"0","top":"0","bottom":"0"}},"color":{"background":"#141414"}},"layout":{"type":"constrained","contentSize":"1180px"}} -->
<div class="wp-block-group alignfull" style="background: linear-gradient(120deg, #9B30FF 0%, #00FFF7 100%); margin-top:0;margin-bottom:0;padding-top:0;padding-right:0;padding-bottom:0;padding-left:0;">
  <div style="background:rgba(20,20,20,0.98);border-radius:0 0 32px 32px;box-shadow:0 0 64px #9B30FF44,0 0 32px #00FFF744;padding:70px 0 70px 0;max-width:950px;margin:0 0 0 70px;">  <!-- slightly increased max-width, padding, and left margin -->
    <div style="display:flex;align-items:center;justify-content:center;gap:100px;max-width:900px;margin:0 auto;padding:0 18px;"> <!-- slightly increased gap and padding -->
      <!-- Left side: Hero Image -->
      <div style="flex:0 0 260px;display:flex;justify-content:center;align-items:center;"> <!-- slightly larger image -->
        <div style="background:radial-gradient(circle at 50% 50%, #00FFF7 0%, #191919 80%);border-radius:32px;box-shadow:0 0 36px #00FFF7,0 0 18px #9B30FF,0 0 18px #00FFF7;display:flex;align-items:center;justify-content:center;width:260px;height:260px;">
          <img src="<?php echo esc_url($wbai_images[0]) ?>" alt="Wreckingball AI Hero" style="width:220px;height:220px;object-fit:cover;border-radius:20px;box-shadow:0 0 14px #00FFF7,0 0 7px #9B30FF;" />
        </div>
      </div>
      
      <!-- Right side: Text Content (Centered) -->
      <div style="flex:1;display:flex;flex-direction:column;align-items:center;justify-content:center;min-width:0;max-width:400px;"> <!-- slightly increased max-width -->
        <h1 style="font-family:'Orbitron','Montserrat',Arial,sans-serif;font-size:2rem;font-weight:900;color:#fff;text-align:center;text-shadow:0 0 14px #9B30FF,0 0 6px #00FFF7;letter-spacing:1.3px;line-height:1.1;max-width:340px;margin:0 0 20px 0;">
          Smash Through<br>Bottlenecks with <span style="color:#00FFF7;text-shadow:0 0 8px #00FFF7;">AI</span>.<br>Work Smarter.
        </h1>
        <div style="font-size:1.2rem;font-weight:700;color:#ffe942;text-shadow:0 0 5px #ffe942;margin-bottom:16px;text-align:center;width:100%;">No Limits.</div>
        <p style="font-family:'Montserrat',Arial,sans-serif;font-size:1.15rem;color:#eaecef;text-align:center;max-width:320px;margin:0 0 28px 0;line-height:1.4;">
          Wreckingball AI is your digital wrecking ball: break free from old business, automate everything, and accelerate with seamless, bold AI integration.
        </p>
        <div style="display:flex;gap:10px;flex-wrap:nowrap;align-items:center;justify-content:center;width:100%;margin-top:8px;"> <!-- center buttons under text, smaller size -->
          <a href="#demo" style="background:linear-gradient(90deg,#9B30FF 0%,#00FFF7 100%);color:#141414;font-family:'Orbitron',Arial,sans-serif;font-size:0.95rem;font-weight:700;padding:8px 18px;border-radius:22px;box-shadow:0 0 8px #9B30FF88,0 0 4px #00FFF788;text-decoration:none;transition:all 0.2s;display:inline-block;white-space:nowrap;">See Wreckingball AI in Action</a>
          <!-- <a href="#contact" style="background:linear-gradient(90deg,#00FFF7 0%,#9B30FF 100%);color:#fff;font-family:'Montserrat',Arial,sans-serif;font-size:0.95rem;font-weight:700;padding:8px 18px;border-radius:22px;box-shadow:0 0 8px #00FFF788,0 0 4px #9B30FF88;text-decoration:none;transition:all 0.2s;display:inline-block;white-space:nowrap;">Book a Demo</a> -->
        </div>
      </div>
    </div>
  </div>
  <!-- Neon gradient divider -->
  <div class="section-break" style="background:linear-gradient(90deg,#9B30FF 0%,#00FFF7 100%);height:6px;margin:48px auto 0 auto;border-radius:6px;max-width:600px;"></div>
</div>
<!-- /wp:group -->