<?php
/**
 * Title: Wreckingball AI Hero Banner
 * Slug: wreckingball-ai/banner-hero
 * Categories: wreckingball-hero
 */
$wbai_url = trailingslashit(get_template_directory_uri());
$wbai_images = array(
    $wbai_url . 'assets/images/hero_wreckingball.png', // Main hero image
);
?>
<!-- wp:group {"align":"full","style":{"spacing":{"blockGap":"0","margin":{"top":"0","bottom":"0"},"padding":{"right":"0","left":"0","top":"0","bottom":"0"}},"color":{"background":"#141414"}},"layout":{"type":"constrained","contentSize":"1180px"}} -->
<div class="wp-block-group alignfull" style="background: linear-gradient(120deg, #9B30FF 0%, #00FFF7 100%); margin-top:0;margin-bottom:0;padding-top:0;padding-right:0;padding-bottom:0;padding-left:0;">
  <div style="background:rgba(20,20,20,0.98);border-radius:32px;box-shadow:0 0 64px #9B30FF44,0 0 32px #00FFF744;padding:64px 0 48px 0;max-width:1180px;margin:0 auto;">
    <div style="display:flex;flex-direction:column;align-items:center;justify-content:center;">
      <h1 style="font-family:'Orbitron','Montserrat',Arial,sans-serif;font-size:4rem;font-weight:900;color:#fff;text-align:center;text-shadow:0 0 24px #9B30FF,0 0 8px #00FFF7;letter-spacing:2px;line-height:1.1;max-width:900px;">
        Smash Through Bottlenecks with <span style="color:#00FFF7;text-shadow:0 0 16px #00FFF7;">AI</span>.<br>Work Smarter.<br><span style="font-size:2rem;font-weight:400;color:#ffe942;text-shadow:0 0 8px #ffe942;">No Limits.</span>
      </h1>
      <p style="font-family:'Montserrat',Arial,sans-serif;font-size:1.5rem;color:#eaecef;text-align:center;max-width:700px;margin:32px 0 0 0;line-height:1.5;">
        Wreckingball AI is your digital wrecking ball: break free from old business, automate everything, and accelerate with seamless, bold AI integration.
      </p>
      <div style="display:flex;gap:24px;margin-top:48px;flex-wrap:wrap;justify-content:center;">
        <a href="#demo" style="background:linear-gradient(90deg,#9B30FF 0%,#00FFF7 100%);color:#141414;font-family:'Orbitron',Arial,sans-serif;font-size:1.25rem;font-weight:700;padding:20px 48px;border-radius:32px;box-shadow:0 0 16px #9B30FF88,0 0 8px #00FFF788;text-decoration:none;transition:all 0.2s;display:inline-block;">See Wreckingball AI in Action</a>
        <a href="#contact" style="background:linear-gradient(90deg,#00FFF7 0%,#9B30FF 100%);color:#fff;font-family:'Montserrat',Arial,sans-serif;font-size:1.25rem;font-weight:700;padding:20px 48px;border-radius:32px;box-shadow:0 0 16px #00FFF788,0 0 8px #9B30FF88;text-decoration:none;transition:all 0.2s;display:inline-block;">Book a Demo</a>
      </div>
      <div style="margin-top:64px;max-width:520px;width:100%;display:flex;justify-content:center;">
        <!-- Main hero image with glow -->
        <img src="<?php echo esc_url($wbai_images[0]) ?>" alt="Wreckingball AI Hero" style="width:100%;max-width:420px;border-radius:32px;box-shadow:0 0 64px #9B30FF,0 0 32px #00FFF7,0 0 8px #ffe942;filter:drop-shadow(0 0 32px #00FFF7) drop-shadow(0 0 16px #9B30FF);background:#191919;" />
      </div>
    </div>
  </div>
  <!-- Neon gradient divider -->
  <div class="section-break" style="background:linear-gradient(90deg,#9B30FF 0%,#00FFF7 100%);height:6px;margin:48px auto 0 auto;border-radius:6px;max-width:600px;"></div>
</div>
<!-- /wp:group -->