<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>PUP Maragondon – Digital Library</title>
  <link rel="icon" type="image/png" href="assets/images/logo.png">
  <link rel="stylesheet" href="style.css">
  <link href="https://fonts.googleapis.com/css2?family=Cormorant+Garamond:ital,wght@0,400;0,600;0,700;1,400;1,600&family=DM+Sans:wght@300;400;500;600;700&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">
</head>
<body>

<!-- PAGE LOADER -->
<div class="page-transition" id="page-transition">
  <div class="loader-icon"><i class="fa-solid fa-book-open"></i></div>
  <p class="loader-text">Loading...</p>
</div>

<?php $activePage = 'home'; include 'includes/nav.php'; ?>

<!-- ══════════════════════════════════════════════
     HERO
════════════════════════════════════════════════ -->
<section class="hero">
  <div class="hero-overlay"></div>
  <div class="hero-bg-text">Library</div>

  <div class="container hero-content">
    <div class="hero-eyebrow stagger-1">
      <span>PUP Maragondon Campus</span>
    </div>
    <h1 class="stagger-2">Discover, <em>Learn,</em><br>and Innovate.</h1>
    <!-- CONTENT UPDATED FROM PDF PAGE 1 -->
    <p class="hero-sub stagger-3">Your gateway to PUP Maragondon's digital resources, theses, Filipiniana, and multimedia collections — available anytime, anywhere.</p>

    <div class="hero-search stagger-4">
      <form action="#" method="GET" style="display:contents;">
        <select name="category" class="search-cat">
          <option value="all">All</option>
          <option value="books">Books</option>
          <option value="theses">Theses</option>
          <option value="videos">Videos</option>
          <option value="filipiniana">Filipiniana</option>
        </select>
        <input type="text" id="search-input" name="query" placeholder="" required>
        <button type="submit" class="btn-search-hero"><i class="fa-solid fa-magnifying-glass"></i></button>
      </form>
    </div>

    <div class="hero-stats stagger-4">
      <!-- STATS VALUES ARE ILLUSTRATIVE AS EXACT NUMBERS AREN'T IN PDF -->
      <div class="hero-stat">
        <span class="num">8,500+</span>
        <span class="lbl">Books</span>
      </div>
      <div class="hero-stat">
        <span class="num">3,500+</span>
        <span class="lbl">Theses</span>
      </div>
      <div class="hero-stat">
        <span class="num">10+</span>
        <span class="lbl">Databases</span>
      </div>
      <div class="hero-stat">
        <span class="num">2023</span>
        <span class="lbl">Updated</span>
      </div>
    </div>
  </div>

  <!--<div class="scroll-down">
    <span>Scroll</span>
    <i class="fa-solid fa-chevron-down"></i>
  </div>-->
</section>

<!-- ══════════════════════════════════════════════
     QUICK ACCESS CARDS
════════════════════════════════════════════════ -->
<section class="quick-access reveal">
  <div class="container">
    <div class="quick-grid">
      <div class="q-card" onclick="location.href='holdings.php'">
        <div class="q-card-icon"><i class="fa-solid fa-book"></i></div>
        <h3>Digital Library</h3>
        <p>Access e-books, modules, and PDF resources anytime.</p>
      </div>
      <div class="q-card" onclick="location.href='holdings.php#theses'">
        <div class="q-card-icon"><i class="fa-solid fa-graduation-cap"></i></div>
        <h3>Theses & Research</h3>
        <p>Explore student dissertations and research archives.</p>
      </div>
      <div class="q-card" onclick="location.href='resources.php'">
        <div class="q-card-icon"><i class="fa-solid fa-database"></i></div>
        <h3>Online Databases</h3>
        <p>Access Emerald, Gale, ProQuest, and more.</p>
      </div>
      <div class="q-card" onclick="location.href='services.php'">
        <div class="q-card-icon"><i class="fa-solid fa-circle-question"></i></div>
        <h3>Library Services</h3>
        <p>Circulation, reference, reserve, and Filipiniana.</p>
      </div>
    </div>
  </div>
</section>

<!-- ══════════════════════════════════════════════
     STATS COUNTER SECTION
════════════════════════════════════════════════ -->
<section class="stats-section reveal">
  <div class="container">
    <div class="stats-grid">
      <div class="stat-item">
        <span class="stat-num" data-target="8500" data-suffix="+">0</span>
        <span class="stat-label">Book Titles</span>
      </div>
      <div class="stat-item">
        <span class="stat-num" data-target="3500" data-suffix="+">0</span>
        <span class="stat-label">Theses & Dissertations</span>
      </div>
      <div class="stat-item">
        <span class="stat-num" data-target="10" data-suffix="">0</span>
        <span class="stat-label">Online Databases</span>
      </div>
      <div class="stat-item">
        <span class="stat-num" data-target="1200" data-suffix="+">0</span>
        <span class="stat-label">Active Borrowers</span>
      </div>
    </div>
  </div>
</section>

<!-- ══════════════════════════════════════════════
     AVP / LIBRARY TOUR SECTION
════════════════════════════════════════════════ -->
<section class="avp-section">
  <div class="container">
    <div class="avp-inner">
      <div class="avp-text reveal-left">
        <span class="section-label">Virtual Tour</span>
        <h2>Explore the PUP Maragondon Library</h2>
        <p>Discover our wide range of digital collections, collaborative spaces, and advanced learning tools through our audio-visual presentation. See what makes our library one of the finest academic libraries in the region.</p>
        <ul class="avp-features">
          <li><i class="fa-solid fa-circle-check"></i> Modern Interactive Learning Spaces</li>
          <li><i class="fa-solid fa-circle-check"></i> Thousands of Open-Access E-Books</li>
          <li><i class="fa-solid fa-circle-check"></i> Dedicated Multimedia Viewing Rooms</li>
          <li><i class="fa-solid fa-circle-check"></i> Filipiniana & Special Collections</li>
        </ul>
        <button class="btn-gold" id="btn-watch-avp"><i class="fa-solid fa-play"></i> Watch Full Tour</button>
      </div>
      <div class="avp-visual reveal-right">
        <div class="avp-thumbnail" id="play-avp-thumb">
          <img src="https://images.unsplash.com/photo-1568667256549-094345857637?auto=format&fit=crop&w=800&q=80" alt="Library Tour Thumbnail">
          <div class="avp-play-overlay">
            <div class="play-ring"><i class="fa-solid fa-play"></i></div>
          </div>
        </div>
        <div class="avp-deco"></div>
      </div>
    </div>
  </div>
</section>

<!-- VIDEO MODAL -->
<div class="video-modal" id="video-modal">
  <div class="modal-content">
    <span class="close-modal" id="close-modal"><i class="fa-solid fa-xmark"></i></span>
    <div class="iframe-container">
      <iframe id="avp-iframe" src="" title="PUP Maragondon Library Tour" frameborder="0" allowfullscreen></iframe>
    </div>
  </div>
</div>

<!-- ══════════════════════════════════════════════
     NEW ARRIVALS
════════════════════════════════════════════════ -->
<section class="new-arrivals reveal">
  <div class="container">
    <div class="section-header">
      <span class="section-label">Fresh Resources</span>
      <h2 class="section-title">Recently <span>Added</span></h2>
      <div class="section-divider"></div>
      <p class="section-sub" style="margin:16px auto 0;">The latest books, theses, and multimedia added to our growing collection.</p>
    </div>
    <div class="arrivals-grid" id="arrivals-container">
      <!-- Skeleton loaders -->
      <?php for($i=0;$i<4;$i++): ?>
      <div class="arrival-card">
        <div class="arrival-img"><div class="skeleton skeleton-img"></div></div>
        <div class="arrival-body">
          <div class="skeleton skeleton-line" style="width:80%;height:18px;"></div>
          <div class="skeleton skeleton-line short" style="margin-top:8px;"></div>
          <div class="skeleton skeleton-line" style="width:50%;height:28px;margin-top:14px;"></div>
        </div>
      </div>
      <?php endfor; ?>
    </div>
  </div>
</section>

<!-- ══════════════════════════════════════════════
     TUTORIAL CTA
════════════════════════════════════════════════ -->
<section class="tutorial-cta reveal">
  <div class="container">
    <div class="cta-inner">
      <div class="cta-text">
        <h2>Need help navigating the portal?</h2>
        <p>Check out our step-by-step guides on how to access files, view educational videos, and maximize the PUP Maragondon digital library resources.</p>
        <div class="cta-buttons">
          <a href="programs.php" class="btn-gold"><span>View Programs</span> <i class="fa-solid fa-arrow-right"></i></a>
          <a href="guidelines.php" class="btn-outline" style="border-color:rgba(255,255,255,0.4);color:#fff;">Read Guidelines</a>
        </div>
      </div>
      <div class="cta-icons">
        <div class="cta-icon-ring"><i class="fa-solid fa-laptop"></i></div>
        <div class="cta-icon-ring"><i class="fa-solid fa-circle-play"></i></div>
        <div class="cta-icon-ring"><i class="fa-solid fa-book-open"></i></div>
      </div>
    </div>
  </div>
</section>

<!-- ══════════════════════════════════════════════
     FEATURED RESOURCE OF THE WEEK
════════════════════════════════════════════════ -->
<section style="padding:100px 0;background:var(--white);">
  <div class="container reveal">
    <div style="display:grid;grid-template-columns:1fr 1.2fr;gap:70px;align-items:center;">
      <div>
        <span class="section-label">Featured This Week</span>
        <h2 class="section-title" style="text-align:left;">Resource <span>Spotlight</span></h2>
        <div class="section-divider left"></div>
        <p style="margin-top:20px;color:var(--ink-light);line-height:1.9;font-size:0.95rem;">
          [Placeholder: This week's featured resource title and description. This could be a newly acquired book, a highlighted thesis, or a key online database worth exploring. Librarians can update this section regularly through the CMS panel.]
        </p>
        <div style="margin-top:28px;display:flex;gap:14px;flex-wrap:wrap;">
          <a href="#" class="btn-primary"><span>View Resource</span> <i class="fa-solid fa-arrow-right"></i></a>
          <a href="holdings.php" class="btn-outline">Browse All Holdings</a>
        </div>
      </div>
      <div style="background:var(--parchment);border-radius:var(--radius-lg);aspect-ratio:4/3;display:flex;flex-direction:column;align-items:center;justify-content:center;gap:14px;color:var(--maroon);border:2px dashed var(--border);">
        <i class="fa-solid fa-book-open" style="font-size:3rem;opacity:0.35;"></i>
        <span style="font-size:0.85rem;color:var(--ink-light);">Featured resource image placeholder</span>
      </div>
    </div>
  </div>
</section>

<?php include 'includes/footer.php'; ?>
<script src="script.js"></script>
</body>
</html>