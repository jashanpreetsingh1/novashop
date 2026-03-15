<?php
/**
 * Title: Blog Page
 * Slug: novashop/blog-page
 * Categories: novashop
 * Description: Main blog page header. Use on Blog page.
 */
?>

<!-- wp:html -->

<!-- BLOG HERO -->
<section style="background:linear-gradient(135deg,#1a2744,#131921);padding:60px 0;text-align:center;">
  <div class="ns-container">
    <span class="ns-hero-badge">📝 NovaShop Blog</span>
    <h1 style="color:#fff;font-size:2.5rem;font-weight:800;margin:16px auto 16px;max-width:700px;">
      Tech Tips & Deals for <span style="color:#ff9900;">Students</span>
    </h1>
    <p style="color:#ccc;font-size:17px;max-width:520px;margin:0 auto;">
      Gadget guides, study tips, budget hacks and more — written for students by students.
    </p>

    <!-- CATEGORY PILLS -->
    <div style="display:flex;gap:10px;justify-content:center;flex-wrap:wrap;margin-top:28px;">
      <a href="/blog" style="background:#ff9900;color:#131921;padding:6px 18px;border-radius:20px;text-decoration:none;font-size:13px;font-weight:700;">All Posts</a>
      <a href="/blog" style="background:transparent;color:#fff;padding:6px 18px;border-radius:20px;text-decoration:none;font-size:13px;font-weight:600;border:1px solid #fff;">Productivity</a>
      <a href="/blog" style="background:transparent;color:#fff;padding:6px 18px;border-radius:20px;text-decoration:none;font-size:13px;font-weight:600;border:1px solid #fff;">Budget</a>
      <a href="/blog" style="background:transparent;color:#fff;padding:6px 18px;border-radius:20px;text-decoration:none;font-size:13px;font-weight:600;border:1px solid #fff;">Setup</a>
      <a href="/blog" style="background:transparent;color:#fff;padding:6px 18px;border-radius:20px;text-decoration:none;font-size:13px;font-weight:600;border:1px solid #fff;">Reviews</a>
    </div>
  </div>
</section>

<!-- POSTS WILL SHOW HERE AUTOMATICALLY -->
<section style="background:#f0f2f2;padding:50px 0;">
  <div class="ns-container">

    <div style="display:grid;grid-template-columns:repeat(3,1fr);gap:24px;">

      <!-- POST CARD 1 -->
      <a href="/blog" style="background:#fff;border:1px solid #d5d9d9;border-radius:8px;overflow:hidden;text-decoration:none;color:#0f1111;display:block;box-shadow:0 2px 8px rgba(0,0,0,0.08);transition:all 0.2s ease;">
        <img src="https://images.unsplash.com/photo-1484807352052-23338990c6c6?w=400&q=80" alt="Study Gadgets" style="width:100%;height:200px;object-fit:cover;display:block;" />
        <div style="padding:16px;">
          <span style="display:inline-block;background:#e8f0fe;color:#232f3e;font-size:11px;font-weight:700;padding:2px 8px;border-radius:10px;margin-bottom:8px;text-transform:uppercase;">🎓 Productivity</span>
          <h3 style="font-size:16px;font-weight:700;margin-bottom:8px;line-height:1.4;">10 Best Study Gadgets for Students in 2026</h3>
          <p style="font-size:13px;color:#565959;margin-bottom:12px;line-height:1.6;">Level up your study sessions with these must-have tools that boost focus and save time.</p>
          <div style="font-size:12px;color:#888;display:flex;gap:12px;">
            <span>📅 Mar 8, 2026</span>
            <span>⏱ 5 min read</span>
          </div>
        </div>
      </a>

      <!-- POST CARD 2 -->
      <a href="/blog" style="background:#fff;border:1px solid #d5d9d9;border-radius:8px;overflow:hidden;text-decoration:none;color:#0f1111;display:block;box-shadow:0 2px 8px rgba(0,0,0,0.08);transition:all 0.2s ease;">
        <img src="https://images.unsplash.com/photo-1498049794561-7780e7231661?w=400&q=80" alt="Budget Tech" style="width:100%;height:200px;object-fit:cover;display:block;" />
        <div style="padding:16px;">
          <span style="display:inline-block;background:#e8f0fe;color:#232f3e;font-size:11px;font-weight:700;padding:2px 8px;border-radius:10px;margin-bottom:8px;text-transform:uppercase;">💸 Budget</span>
          <h3 style="font-size:16px;font-weight:700;margin-bottom:8px;line-height:1.4;">Best Tech Gadgets Under $50 — Student Edition</h3>
          <p style="font-size:13px;color:#565959;margin-bottom:12px;line-height:1.6;">You don't need to break the bank. These affordable picks are packed with value.</p>
          <div style="font-size:12px;color:#888;display:flex;gap:12px;">
            <span>📅 Mar 5, 2026</span>
            <span>⏱ 4 min read</span>
          </div>
        </div>
      </a>

      <!-- POST CARD 3 -->
      <a href="/blog" style="background:#fff;border:1px solid #d5d9d9;border-radius:8px;overflow:hidden;text-decoration:none;color:#0f1111;display:block;box-shadow:0 2px 8px rgba(0,0,0,0.08);transition:all 0.2s ease;">
        <img src="https://images.unsplash.com/photo-1593642632559-0c6d3fc62b89?w=400&q=80" alt="Desk Setup" style="width:100%;height:200px;object-fit:cover;display:block;" />
        <div style="padding:16px;">
          <span style="display:inline-block;background:#e8f0fe;color:#232f3e;font-size:11px;font-weight:700;padding:2px 8px;border-radius:10px;margin-bottom:8px;text-transform:uppercase;">🖥️ Setup</span>
          <h3 style="font-size:16px;font-weight:700;margin-bottom:8px;line-height:1.4;">Build the Perfect Student Desk Setup on a Budget</h3>
          <p style="font-size:13px;color:#565959;margin-bottom:12px;line-height:1.6;">A clean workspace can transform how you study. Here's how to build yours cheap.</p>
          <div style="font-size:12px;color:#888;display:flex;gap:12px;">
            <span>📅 Mar 1, 2026</span>
            <span>⏱ 6 min read</span>
          </div>
        </div>
      </a>

    </div>
  </div>
</section>

<!-- /wp:html -->