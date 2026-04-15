<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Library Survey – PUP Maragondon Digital Library</title>
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

<?php $activePage = 'survey'; include 'includes/nav.php'; ?>

<section class="inner-hero" style="min-height:45vh;">
  <div class="hero-overlay"></div>
  <div class="container inner-hero-content">
    <div class="breadcrumb">
      <a href="index.php">Home</a>
      <i class="fa-solid fa-chevron-right"></i>
      <span>Library Survey</span>
    </div>
    <h1>Library Survey</h1>
    <p>Your feedback helps us improve our services for the entire PUP Maragondon community.</p>
  </div>
</section>

<section style="background:var(--parchment);padding:100px 0;">
  <div class="container">
    <div style="max-width:760px;margin:0 auto;text-align:center;" class="reveal">
      <span class="section-label">We Value Your Opinion</span>
      <h2 class="section-title" style="margin-bottom:14px;">Help Us <span>Serve Better</span></h2>
      <div class="section-divider"></div>
      <!-- CONTENT UPDATED FROM PDF PAGE 51 -->
      <p style="color:var(--ink-light);font-size:0.95rem;line-height:1.9;margin:20px auto 40px;max-width:560px;">The library is committed to the continuous development and improvement of our services. Your input is crucial in helping us meet the changing needs of the academic community.</p>

      <!-- Survey embed or link card -->
      <div style="background:var(--white);border-radius:var(--radius-lg);padding:60px 40px;box-shadow:var(--shadow-card);border:1px solid var(--border);">
        <div style="width:80px;height:80px;background:rgba(123,29,29,0.07);border-radius:50%;display:flex;align-items:center;justify-content:center;margin:0 auto 24px;font-size:2rem;color:var(--maroon);">
          <i class="fa-solid fa-clipboard-list"></i>
        </div>
        <h3 style="font-size:1.8rem;margin-bottom:14px;">Library Satisfaction Survey</h3>
        <p style="color:var(--ink-light);font-size:0.92rem;line-height:1.8;margin-bottom:8px;"><i class="fa-regular fa-clock" style="color:var(--maroon);margin-right:8px;"></i> Estimated time: 5–10 minutes</p>
        <p style="color:var(--ink-light);font-size:0.92rem;line-height:1.8;margin-bottom:32px;"><i class="fa-solid fa-shield-halved" style="color:var(--maroon);margin-right:8px;"></i> Your responses are confidential and anonymous</p>

        <!-- Replace href with your actual Google Form or survey link -->
        <a href="https://forms.gle/WhrehnZKDAaK1Nux6" target="_blank" class="btn-primary" style="display:inline-flex;font-size:1rem;padding:15px 40px;">
          <span>Take the Survey</span> <i class="fa-solid fa-arrow-up-right-from-square"></i>
        </a>
        <p style="margin-top:20px;font-size:0.8rem;color:var(--ink-light);">Opens in a new tab · Powered by Google Forms</p>
      </div>

      <!-- What we ask -->
      <div style="margin-top:60px;text-align:left;">
        <h4 style="font-family:'Cormorant Garamond',serif;font-size:1.6rem;margin-bottom:24px;text-align:center;color:var(--ink);">What We Ask About</h4>
        <div style="display:grid;grid-template-columns:1fr 1fr;gap:16px;">
          <?php
          $topics = [
            ['fa-star','Overall Satisfaction','Rate your overall experience with PUP Maragondon Library services.'],
            ['fa-book','Collection Quality','How satisfied are you with the range and relevance of available materials?'],
            ['fa-people-group','Staff & Service','Evaluate the helpfulness and professionalism of library personnel.'],
            ['fa-laptop','Digital Resources','Feedback on the usability and availability of online databases.'],
            ['fa-building','Facilities','Rate the library facilities, study spaces, and equipment.'],
            ['fa-lightbulb','Suggestions','Share your ideas for how we can improve our services.'],
          ];
          foreach($topics as $t): ?>
          <div style="background:var(--parchment);border-radius:var(--radius);padding:20px;display:flex;gap:14px;align-items:flex-start;border:1px solid var(--border);">
            <div style="width:38px;height:38px;background:rgba(123,29,29,0.08);border-radius:10px;display:flex;align-items:center;justify-content:center;flex-shrink:0;color:var(--maroon);">
              <i class="fa-solid <?=$t[0]?>"></i>
            </div>
            <div>
              <strong style="display:block;font-size:0.88rem;margin-bottom:4px;"><?=$t[1]?></strong>
              <span style="font-size:0.82rem;color:var(--ink-light);"><?=$t[2]?></span>
            </div>
          </div>
          <?php endforeach; ?>
        </div>
      </div>
    </div>
  </div>
</section>

<?php include 'includes/footer.php'; ?>
<script src="script.js"></script>
</body>
</html>