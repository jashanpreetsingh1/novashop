<?php
/**
 * Title: Today's Deals
 * Slug: novashop/deals-section
 * Categories: novashop
 * Description: 3 deal cards with progress bars. Use on Home and Shop pages.
 */
?>

<!-- wp:html -->
<section class="ns-section ns-section-bg-dark">
  <div class="ns-container">

    <div class="ns-section-header">
      <h2>⚡ Today's Deals</h2>
      <a href="/shop" class="ns-see-all">All Deals →</a>
    </div>

    <div class="ns-deals-grid">

      <div class="ns-deal-card">
        <img src="https://images.unsplash.com/photo-1505740420928-5e560c06d30e?w=400&q=80" alt="Headphones" loading="lazy" />
        <div class="ns-deal-body">
          <span class="ns-deal-badge">🔥 LIMITED TIME</span>
          <h3>Noise-Cancelling Headphones</h3>
          <div class="ns-deal-prices">
            <span class="ns-deal-price-new">$49</span>
            <span class="ns-deal-price-old">$129</span>
          </div>
          <div class="ns-deal-progress">
            <div class="ns-deal-progress-bar" style="width:72%"></div>
          </div>
          <div class="ns-deal-claimed">72% claimed — only 28 left!</div>
          <a href="/shop" class="ns-deal-btn">Grab This Deal</a>
        </div>
      </div>

      <div class="ns-deal-card">
        <img src="https://images.unsplash.com/photo-1558618666-fcd25c85cd64?w=400&q=80" alt="USB Hub" loading="lazy" />
        <div class="ns-deal-body">
          <span class="ns-deal-badge">⏰ DEAL OF THE DAY</span>
          <h3>7-in-1 USB-C Hub Adapter</h3>
          <div class="ns-deal-prices">
            <span class="ns-deal-price-new">$15</span>
            <span class="ns-deal-price-old">$39</span>
          </div>
          <div class="ns-deal-progress">
            <div class="ns-deal-progress-bar" style="width:55%"></div>
          </div>
          <div class="ns-deal-claimed">55% claimed — hurry up!</div>
          <a href="/shop" class="ns-deal-btn">Grab This Deal</a>
        </div>
      </div>

      <div class="ns-deal-card">
        <img src="https://images.unsplash.com/photo-1592890288564-76628a30a657?w=400&q=80" alt="Webcam" loading="lazy" />
        <div class="ns-deal-body">
          <span class="ns-deal-badge">🎯 STUDENT PICK</span>
          <h3>1080p HD Webcam with Mic</h3>
          <div class="ns-deal-prices">
            <span class="ns-deal-price-new">$35</span>
            <span class="ns-deal-price-old">$75</span>
          </div>
          <div class="ns-deal-progress">
            <div class="ns-deal-progress-bar" style="width:40%"></div>
          </div>
          <div class="ns-deal-claimed">40% claimed — still available!</div>
          <a href="/shop" class="ns-deal-btn">Grab This Deal</a>
        </div>
      </div>

    </div>
  </div>
</section>
<!-- /wp:html -->