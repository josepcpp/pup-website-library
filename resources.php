<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Online Resources – PUP Maragondon Digital Library</title>
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

<?php $activePage = 'resources'; include 'includes/nav.php'; ?>

<section class="inner-hero">
  <div class="hero-overlay"></div>
  <div class="container inner-hero-content">
    <div class="breadcrumb">
      <a href="index.php">Home</a>
      <i class="fa-solid fa-chevron-right"></i>
      <span>Online Resources</span>
    </div>
    <h1>Online Resources</h1>
    <p>Access world-class academic databases and e-resources available to the PUP Maragondon community.</p>
  </div>
</section>

<section class="resources-hero-section">
  <div class="container">
    <div class="section-header reveal">
      <span class="section-label">Digital Access</span>
      <h2 class="section-title">Our <span>E-Resource Partners</span></h2>
      <div class="section-divider"></div>
      <!-- CONTENT UPDATED FROM PDF PAGE 18, 19 -->
      <p class="section-sub" style="margin:16px auto 0;">The PUP University Library provides subscription access to various online databases to support the informational needs of the academic community. These resources can be accessed on and/or off campus depending on the specific subscription.</p>
    </div>
  </div>
</section>

<section class="resources-cards-section">
  <div class="container">
    <div class="resources-grid-v2">
      <?php
      $resources = [
        [
          'name'   => 'ProQuest e-book Central',
          'tag'    => 'E-Books',
          'icon'   => 'fa-book',
          'color'  => '#6A1B9A',
          'desc'   => 'A major subscription service providing access to a vast collection of electronic books for academic research.',
          'access' => 'On-Campus Access',
          'url'    => '#',
        ],
        [
          'name'   => 'iG Library',
          'tag'    => 'Digital Library',
          'icon'   => 'fa-building-columns',
          'color'  => '#B71C1C',
          'desc'   => 'An online library resource providing digital collections for academic study.',
          'access' => 'On-Campus Access',
          'url'    => '#',
        ],
        [
          'name'   => 'Knovel',
          'tag'    => 'Technical/Science',
          'icon'   => 'fa-microchip',
          'color'  => '#2E7D32',
          'desc'   => 'Specialized technical resource providing engineering and science-related information.',
          'access' => 'On-Campus Access',
          'url'    => '#',
        ],
        [
          'name'   => 'Gale Databases',
          'tag'    => 'Multidisciplinary',
          'icon'   => 'fa-globe',
          'color'  => '#00796B',
          'desc'   => 'A comprehensive resource covering academic subjects including social sciences, humanities, sciences, and current events.',
          'access' => 'On-Campus Access',
          'url'    => '#',
        ],
        [
          'name'   => 'Emerald Insight',
          'tag'    => 'Business/Management',
          'icon'   => 'fa-gem',
          'color'  => '#FF8F00',
          'desc'   => 'Provides access to leading research journals in management, business, and social sciences.',
          'access' => 'On-Campus Access',
          'url'    => '#',
        ],
      ];
      foreach ($resources as $idx => $r):
        $isRemote = $r['access'] === 'Remote Access';
      ?>
      <div class="rc-card" style="--rc-color:<?=$r['color']?>;--rc-delay:<?=$idx*0.1?>s;">

        <!-- Animated header stripe -->
        <div class="rc-header">
          <div class="rc-header-bg"></div>
          <div class="rc-icon-wrap">
            <i class="fa-solid <?=$r['icon']?>"></i>
          </div>
          <span class="rc-access-badge <?= $isRemote ? 'remote' : 'campus' ?>">
            <i class="fa-solid <?= $isRemote ? 'fa-wifi' : 'fa-building' ?>"></i>
            <?=$r['access']?>
          </span>
        </div>

        <!-- Card body -->
        <div class="rc-body">
          <span class="rc-tag"><?=$r['tag']?></span>
          <h3 class="rc-name"><?=$r['name']?></h3>
          <p class="rc-desc"><?=$r['desc']?></p>

          <!-- QR Frame — swap <img> src when ready -->
          <div class="rc-qr-frame">
            <div class="rc-qr-corner tl"></div>
            <div class="rc-qr-corner tr"></div>
            <div class="rc-qr-corner bl"></div>
            <div class="rc-qr-corner br"></div>
            <div class="rc-qr-inner">
              <i class="fa-solid fa-qrcode"></i>
              <span>Scan to Access</span>
              <!-- Replace the icon above with: <img src="assets/images/qr-<?=$idx+1?>.png" alt="QR Code"> -->
            </div>
          </div>

          <a href="<?=$r['url']?>" target="_blank" class="rc-btn">
            <span>Access Database</span>
            <i class="fa-solid fa-arrow-up-right-from-square"></i>
            <div class="rc-btn-shine"></div>
          </a>
        </div>

      </div>
      <?php endforeach; ?>
    </div>

    <!-- Access Instructions -->
    <div style="background:var(--white);border-radius:var(--radius-lg);padding:48px 40px;margin-top:60px;border:1px solid var(--border);" class="reveal">
      <div style="display:grid;grid-template-columns:1fr 1fr;gap:60px;align-items:center;">
        <div>
          <span class="section-label" style="margin-bottom:16px;">Access Guide</span>
          <h2 class="section-title" style="text-align:left;font-size:2rem;">How to Access<br><span>These Databases</span></h2>
          <div class="section-divider left"></div>
          <ul style="margin-top:28px;display:flex;flex-direction:column;gap:16px;">
            <?php
            // CONTENT UPDATED FROM PDF PAGE 5, 18
            $steps = [
              ['fa-wifi','On-Campus Access','Connect to the PUP network and access databases via the library terminals or your own device.'],
              ['fa-home','Remote Access','Electronic resources can be accessed on and/or off campus as per the specific subscription settings.'],
              ['fa-id-card','Credentials','Use your official student or faculty credentials for authentication when prompted.'],
              ['fa-headset','Need Help?','Visit the library reference desk or contact the library administration for assistance with database access.'],
            ];
            foreach($steps as $step): ?>
            <li style="display:flex;gap:14px;align-items:flex-start;">
              <span style="width:38px;height:38px;border-radius:10px;background:rgba(123,29,29,0.08);display:flex;align-items:center;justify-content:center;flex-shrink:0;color:var(--maroon);">
                <i class="fa-solid <?=$step[0]?>"></i>
              </span>
              <div>
                <strong style="display:block;font-size:0.9rem;margin-bottom:4px;"><?=$step[1]?></strong>
                <span style="font-size:0.85rem;color:var(--ink-light);"><?=$step[2]?></span>
              </div>
            </li>
            <?php endforeach; ?>
          </ul>
        </div>
        <div style="background:var(--parchment);border-radius:var(--radius-lg);padding:40px;text-align:center;">
          <i class="fa-solid fa-lock-open" style="font-size:3rem;color:var(--maroon);margin-bottom:16px;"></i>
          <h4 style="font-size:1.4rem;margin-bottom:12px;">Library Access Policy</h4>
          <!-- CONTENT UPDATED FROM PDF PAGE 38 -->
          <p style="color:var(--ink-light);font-size:0.88rem;line-height:1.9;">Electronic resources are intended to meet the informational needs of the academic community and support institutional missions. Access is provided in accordance with library collection development policies and usage guidelines.</p>
          <a href="guidelines.php" class="btn-outline" style="margin-top:24px;display:inline-flex;">Read Full Guidelines</a>
        </div>
      </div>
    </div>
  </div>
</section>

<?php include 'includes/footer.php'; ?>
<script src="script.js"></script>
</body>
</html>