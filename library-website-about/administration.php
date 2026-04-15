<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Administration – PUP Maragondon Digital Library</title>
  <link rel="icon" type="image/png" href="assets/images/logo.png">
  <link rel="stylesheet" href="style.css">
  <link href="https://fonts.googleapis.com/css2?family=Cormorant+Garamond:ital,wght@0,400;0,600;0,700;1,400;1,600&family=DM+Sans:wght@300;400;500;600;700&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">
  <style>
    /* Org chart connector lines */
    .org-tree { text-align: center; }
    .org-row { display: flex; justify-content: center; gap: 24px; position: relative; margin-top: 50px; }
    .org-row::before {
      content: ''; position: absolute;
      top: -25px; left: 50%; width: 2px; height: 25px;
      background: var(--border); transform: translateX(-50%);
    }
    .org-row:first-child::before { display: none; }
    .org-row.multi::after {
      content: ''; position: absolute;
      top: -25px; left: 15%; right: 15%; height: 2px;
      background: var(--border);
    }
    .org-node-wrap { display: flex; flex-direction: column; align-items: center; }
    .org-node-wrap .connector {
      width: 2px; height: 25px; background: var(--border);
    }
  </style>
</head>
<body>

<div class="page-transition" id="page-transition">
  <div class="loader-icon"><i class="fa-solid fa-book-open"></i></div>
  <p class="loader-text">Loading...</p>
</div>

<?php $activePage = 'administration'; include 'includes/nav.php'; ?>

<section class="inner-hero">
  <div class="hero-overlay"></div>
  <div class="container inner-hero-content">
    <div class="breadcrumb">
      <a href="index.php">Home</a>
      <i class="fa-solid fa-chevron-right"></i>
      <span>Administration</span>
    </div>
    <h1>Administration</h1>
    <p>Meet the people behind the PUP Maragondon Library and learn about our organizational structure.</p>
  </div>
</section>

<!-- ══════════════════════════════════════════════
     ORGANIZATIONAL CHART
════════════════════════════════════════════════ -->
<section class="org-chart" style="background:var(--parchment);">
  <div class="container">
    <div class="section-header reveal">
      <span class="section-label">Structure</span>
      <h2 class="section-title">Organizational <span>Chart</span></h2>
      <div class="section-divider"></div>
      <!-- CONTENT UPDATED FROM PDF PAGE 11, 12 -->
      <p class="section-sub" style="margin:16px auto 0;">The Office of the University Library Director oversees the total operations and administration of the PUP Libraries. Directly under the Office are four main divisions: Users Services, Technical Services, Library Information Technology Services, and Library Network Services.</p>
    </div>

    <div class="org-chart-wrap reveal">
      <div class="org-tree">
        <!-- Level 1: University Director -->
        <div class="org-row">
          <div class="org-node-wrap">
            <div class="org-node head" style="min-width:220px;">
              <div class="node-name">University Library Director</div>
              <div class="node-title">Director</div>
            </div>
          </div>
        </div>

        <!-- Level 2: The Four Divisions -->
        <div class="org-row multi" style="gap:16px;">
          <?php
          $sections = [
            ['Users Services','Users Services\nChief'],
            ['Technical Services','Technical Services\nChief'],
            ['Library IT Services','Library Info Tech\nServices Chief'],
            ['Library Network Services','Library Network\nServices Chief'],
          ];
          foreach($sections as $s): ?>
          <div class="org-node-wrap">
            <div class="connector"></div>
            <div class="org-node" style="min-width:140px;">
              <div class="node-name"><?=nl2br($s[1])?></div>
              <div class="node-title">Division Chief</div>
            </div>
          </div>
          <?php endforeach; ?>
        </div>

        <!-- Level 3: Section/Unit Examples -->
        <div class="org-row" style="gap:16px;">
          <?php 
          // Using representative sections from the PDF
          $subsections = [
            ['Circulation\nSection','Users Services'],
            ['Filipiniana\nSection','Users Services'],
            ['Collection Dev','Technical Services'],
            ['Cataloguing','Technical Services'],
          ];
          foreach($subsections as $ss): ?>
          <div class="org-node-wrap">
            <div class="connector"></div>
            <div class="org-node" style="min-width:130px;">
              <div class="node-name"><?=nl2br($ss[0])?></div>
              <div class="node-title"><?=$ss[1]?></div>
            </div>
          </div>
          <?php endforeach; ?>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- ══════════════════════════════════════════════
     LIBRARY PERSONNEL
════════════════════════════════════════════════ -->
<section style="background:var(--parchment);padding:20px 0 100px;">
  <div class="container">
    <div class="section-header reveal">
      <span class="section-label">Meet the Team</span>
      <h2 class="section-title">Library <span>Personnel</span></h2>
      <div class="section-divider"></div>
      <p class="section-sub" style="margin:16px auto 0;">The dedicated professionals who make the PUP Maragondon Library a center of academic excellence.</p>
    </div>

    <div class="personnel-grid reveal">
      <?php
      // CONTENT UPDATED FROM PDF PAGE 20, 21, 22
      $personnel = [
        ['fa-user','[Name]','University Librarian','library@pup.edu.ph','[Ext.]'],
      ];
      foreach($personnel as $p): ?>
      <div class="personnel-card">
        <div class="photo-placeholder"><i class="fa-solid <?=$p[0]?>"></i></div>
        <h3 class="personnel-name"><?=$p[1]?></h3>
        <span class="personnel-role"><?=$p[2]?></span>
        <div class="personnel-contact">
          <span><i class="fa-solid fa-envelope"></i><?=$p[3]?></span>
          <span><i class="fa-solid fa-phone"></i><?=$p[4]?></span>
        </div>
      </div>
      <?php endforeach; ?>
    </div>

    <!-- Contact CTA -->
    <div style="background:var(--white);border-radius:var(--radius-lg);padding:50px 40px;margin-top:60px;text-align:center;border:1px solid var(--border);" class="reveal">
      <h3 style="font-size:1.8rem;margin-bottom:12px;">Get in Touch</h3>
      <!-- CONTENT UPDATED FROM PDF PAGE 63 -->
      <p style="color:var(--ink-light);font-size:0.93rem;line-height:1.8;max-width:500px;margin:0 auto 28px;">For inquiries regarding services, collections, or research assistance, please contact us via email or our official social media channels.</p>
      <div style="display:flex;gap:16px;justify-content:center;flex-wrap:wrap;">
        <a href="mailto:library@pup.edu.ph" class="btn-primary">
          <span>Email the Library</span> <i class="fa-solid fa-envelope"></i>
        </a>
        <a href="survey.php" class="btn-outline">Take Library Survey</a>
      </div>
    </div>
  </div>
</section>

<?php include 'includes/footer.php'; ?>
<script src="script.js"></script>
</body>
</html>