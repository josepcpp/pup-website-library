<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Linkages – PUP Maragondon Digital Library</title>
  <link rel="icon" type="image/png" href="assets/images/logo.png">
  <link rel="stylesheet" href="style.css">
  <link href="https://fonts.googleapis.com/css2?family=Cormorant+Garamond:ital,wght@0,400;0,600;0,700;1,400;1,600&family=DM+Sans:wght@300;400;500;600;700&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">
</head>
<body>

<div class="page-transition" id="page-transition">
  <div class="loader-icon"><i class="fa-solid fa-book-open"></i></div>
  <p class="loader-text">Loading...</p>
</div>

<?php $activePage = 'linkages'; include 'includes/nav.php'; ?>

<section class="inner-hero">
  <div class="hero-overlay"></div>
  <div class="container inner-hero-content">
    <div class="breadcrumb">
      <a href="index.php">Home</a>
      <i class="fa-solid fa-chevron-right"></i>
      <span>Linkages</span>
    </div>
    <h1>Linkages</h1>
    <p>Our partnerships with institutions that expand access to knowledge for the PUP Maragondon community.</p>
  </div>
</section>

<section style="background:var(--parchment);padding:80px 0 20px;">
  <div class="container">
    <div class="section-header reveal">
      <span class="section-label">Partnerships</span>
      <h2 class="section-title">Our <span>Institutional Linkages</span></h2>
      <div class="section-divider"></div>
      <!-- CONTENT UPDATED FROM PDF PAGE 2 -->
      <p class="section-sub" style="margin:16px auto 0;">The PUP University Library promotes collaboration with local and international community agencies and organizations to foster cooperation, making efficient and effective use of library resources.</p>
    </div>
  </div>
</section>

<section style="background:var(--parchment);padding-bottom:100px;">
  <div class="container">
    <div class="linkages-grid reveal">
      <?php
      // CONTENT UPDATED FROM PDF PAGE 2
      $linkages = [
        ['fa-university','PUP University Library','The central hub coordinating various divisions and unit libraries to provide comprehensive services across the entire university system.'],
        ['fa-network-wired','Local & International Agencies','Collaborating with community organizations to foster cooperation and maximize the impact of library resources.'],
        ['fa-globe','Branch and Campus Libraries','Coordinated support and management for various satellite libraries including NCR, Region III, Region IV-A, Region IV-B, and Region V.'],
        ['fa-handshake','Academic Community','Strengthening ties with faculty, students, and administrative personnel to support diverse research and curricular needs.'],
      ];
      foreach($linkages as $l): ?>
      <div class="linkage-card">
        <div class="linkage-logo-wrap"><i class="fa-solid <?=$l[0]?>"></i></div>
        <h3><?=$l[1]?></h3>
        <p><?=$l[2]?></p>
      </div>
      <?php endforeach; ?>
    </div>

    <!-- MOU Banner -->
    <div style="background:var(--white);border-radius:var(--radius-lg);padding:50px 48px;margin-top:20px;border:1px solid var(--border);text-align:center;" class="reveal">
      <i class="fa-solid fa-file-signature" style="font-size:2.5rem;color:var(--maroon);margin-bottom:16px;"></i>
      <h3 style="font-size:1.8rem;margin-bottom:12px;">Memoranda of Agreement</h3>
      <!-- CONTENT UPDATED FROM PDF PAGE 27, 39 -->
      <p style="color:var(--ink-light);max-width:560px;margin:0 auto 28px;font-size:0.93rem;line-height:1.9;">Formal collaborations and coordination with various campus branches and community agencies allow the library to expand its reach and service capabilities effectively.</p>
      <a href="#" class="btn-primary" style="display:inline-flex;"><span>View Agreements</span> <i class="fa-solid fa-file-pdf"></i></a>
    </div>
  </div>
</section>

<section class="survey-banner reveal">
  <div class="container">
    <h2>Want to Partner With Us?</h2>
    <!-- CONTENT UPDATED FROM PDF PAGE 2 -->
    <p>The PUP University Library is committed to fostering cooperation with local and international agencies/organizations to make efficient and effective use of library resources.</p>
    <a href="mailto:library@pup.edu.ph" class="btn-primary">Contact the Library <i class="fa-solid fa-envelope"></i></a>
  </div>
</section>

<?php include 'includes/footer.php'; ?>
<script src="script.js"></script>
</body>
</html>