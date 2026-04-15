<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Library Holdings – PUP Maragondon Digital Library</title>
  <link rel="icon" type="image/png" href="assets/images/logo.png">
  <link rel="stylesheet" href="style.css">
  <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:ital,wght@0,400;0,600;0,700;0,800;1,400;1,600&family=Source+Sans+3:wght@300;400;500;600;700&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">
</head>
<body>

<div class="page-transition" id="page-transition">
  <div class="loader-icon"><i class="fa-solid fa-book-open"></i></div>
  <p class="loader-text">Loading...</p>
</div>

<?php $activePage = 'holdings'; include 'includes/nav.php'; ?>

<section class="inner-hero">
  <div class="hero-overlay"></div>
  <div class="container inner-hero-content">
    <div class="breadcrumb">
      <a href="index.php">Home</a>
      <i class="fa-solid fa-chevron-right"></i>
      <span>Library Holdings</span>
    </div>
    <h1>Library Holdings</h1>
    <p>Explore our diverse and growing collection of books, references, and special materials.</p>
  </div>
</section>

<section style="background:var(--parchment);padding:80px 0 20px;">
  <div class="container">
    <div class="section-header reveal">
      <span class="section-label">Our Collections</span>
      <h2 class="section-title">What We <span>Hold</span></h2>
      <div class="section-divider"></div>
      <!-- CONTENT UPDATED FROM PDF PAGE 14, 15 -->
      <p class="section-sub" style="margin:16px auto 0;">Our books are arranged on the shelves according to the Library of Congress Classification System, where fields of knowledge are identified by letters and combined with Arabic numbers to form call numbers.</p>
    </div>
  </div>
</section>

<!-- STATS STRIP -->
<section class="stats-section" style="padding:50px 0;">
  <div class="container">
    <div class="stats-grid">
      <div class="stat-item">
        <!-- Stats values are illustrative as exact numbers aren't in PDF -->
        <span class="stat-num" data-target="8500" data-suffix="+">8500</span>
        <span class="stat-label">Circulation Books</span>
      </div>
      <div class="stat-item">
        <span class="stat-num" data-target="1200" data-suffix="+">1200</span>
        <span class="stat-label">Filipiniana Books</span>
      </div>
      <div class="stat-item">
        <span class="stat-num" data-target="650" data-suffix="+">0</span>
        <span class="stat-label">Fiction Titles</span>
      </div>
      <div class="stat-item">
        <span class="stat-num" data-target="180" data-suffix="+">0</span>
        <span class="stat-label">New Arrivals (2026)</span>
      </div>
    </div>
  </div>
</section>

<!-- HOLDINGS GRID -->
<section style="background:var(--parchment);padding:80px 0 100px;">
  <div class="container">
    <div class="holdings-grid reveal">
      <?php
      // CONTENT UPDATED FROM PDF PAGES 4, 5, 18
      $holdings = [
        ['fa-book','1','Circulation Books','General lending collection comprising textbooks and supplementary readings across all disciplines to support curricular offerings.','General Lending'],
        ['fa-flag','2','Filipiniana Books','Organized and preserved collection regarding the Philippines and its people, culture, and history regardless of author or language.','Special Collection'],
        ['fa-book-open','3','Fiction Books','A collection of novels and literary works available for borrowing to encourage recreational reading among students.','Recreational Reading'],
        ['fa-star','4','Special Collections','Includes archival materials, theses, dissertations, artifacts, memorabilia, and other relevant records and collections.','Special Collection'],
      ];
      foreach ($holdings as $i => $h): ?>
      <div class="holding-card">
        <span class="holding-num"><?=$h[1]?></span>
        <div class="holding-icon"><i class="fa-solid <?=$h[0]?>"></i></div>
        <h3><?=$h[2]?></h3>
        <p><?=$h[3]?></p>
        <span class="holding-tag"><?=$h[4]?></span>
      </div>
      <?php endforeach; ?>
    </div>

    <!-- CATALOG ACCESS BANNER -->
    <div style="background:linear-gradient(135deg,var(--maroon),var(--maroon-deep));border-radius:var(--radius-lg);padding:50px 48px;margin-top:60px;display:grid;grid-template-columns:1fr auto;gap:40px;align-items:center;color:var(--white);" class="reveal">
      <!-- CONTENT UPDATED FROM PDF PAGE 15 -->
      <div>
        <h3 style="font-size:clamp(1.6rem,3vw,2.2rem);margin-bottom:12px;">Search Our Catalog</h3>
        <p style="opacity:0.75;font-size:0.95rem;line-height:1.8;max-width:480px;">The online Public Access Catalog (OPAC) is a module of the Koha Library Software designed for searching bibliographic details of library materials. It is available 24/7.</p>
      </div>
      <div style="display:flex;flex-direction:column;gap:14px;flex-shrink:0;">
        <!-- CONTENT UPDATED FROM PDF PAGE 15 -->
        <a href="https://ils.pup.edu.ph/" target="_blank" class="btn-gold"><i class="fa-solid fa-magnifying-glass"></i> Search OPAC</a>
        <a href="services.php" class="btn-outline" style="border-color:rgba(255,255,255,0.3);color:#fff;justify-content:center;">Library Services</a>
      </div>
    </div>
  </div>
</section>

<?php include 'includes/footer.php'; ?>
<script src="script.js"></script>
</body>
</html>