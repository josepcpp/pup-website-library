<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Programs & Events – PUP Maragondon Digital Library</title>
  <link rel="icon" type="image/png" href="assets/images/logo.png">
  <link rel="stylesheet" href="style.css">
  <link href="https://fonts.googleapis.com/css2?family=Cormorant+Garamond:ital,wght@0,400;0,600;0,700;1,400;1,600&family=DM+Sans:wght@300;400;500;600;700&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">
  <style>
    /* Lightbox styles */
    .lightbox-overlay {
      position:fixed;inset:0;background:rgba(0,0,0,0.93);z-index:9990;
      display:flex;align-items:center;justify-content:center;
      opacity:0;visibility:hidden;transition:opacity 0.3s,visibility 0.3s;
    }
    .lightbox-overlay.show{opacity:1;visibility:visible;}
    .lightbox-img{max-width:90vw;max-height:85vh;border-radius:8px;object-fit:contain;}
    .lightbox-close{position:absolute;top:20px;right:24px;color:#fff;font-size:2rem;cursor:pointer;background:rgba(255,255,255,0.1);border:none;width:44px;height:44px;border-radius:50%;display:flex;align-items:center;justify-content:center;}
    .collage-item{cursor:pointer;}
  </style>
</head>
<body>

<div class="page-transition" id="page-transition">
  <div class="loader-icon"><i class="fa-solid fa-book-open"></i></div>
  <p class="loader-text">Loading...</p>
</div>

<?php $activePage = 'programs'; include 'includes/nav.php'; ?>

<section class="inner-hero">
  <div class="hero-overlay"></div>
  <div class="container inner-hero-content">
    <div class="breadcrumb">
      <a href="index.php">Home</a>
      <i class="fa-solid fa-chevron-right"></i>
      <span>Programs & Events</span>
    </div>
    <h1>Programs, Events<br>&amp; Activities</h1>
    <p>Engaging initiatives that connect students, faculty, and the community to the world of knowledge.</p>
  </div>
</section>

<section class="programs-section" style="background:var(--parchment);">
  <div class="container">

    <!-- ══════════════════════════
         1. LIBRARY ORIENTATION
    ══════════════════════════ -->
    <div class="program-block reveal">
      <div class="program-block-header">
        <span class="section-label">Annual Program</span>
        <h2>Library Orientation</h2>
        <!-- CONTENT UPDATED FROM PDF PAGE 3 -->
        <p>Library instruction/orientation for new students is given at the start of each school year. Library tours and lectures about library organization and its services are examples of the instructional/orientation programs of the library.</p>
      </div>

      <!-- COLLAGE GRID (replace placeholders with actual images) -->
      <div class="collage-grid">
        <div class="collage-item" data-img="">
          <div class="collage-placeholder">
            <i class="fa-solid fa-image"></i>
            <span>Orientation Photo 1<br><small>Replace with actual image</small></span>
          </div>
        </div>
        <div class="collage-item" data-img="">
          <div class="collage-placeholder">
            <i class="fa-solid fa-image"></i>
            <span>Orientation Photo 2</span>
          </div>
        </div>
        <div class="collage-item" data-img="">
          <div class="collage-placeholder">
            <i class="fa-solid fa-image"></i>
            <span>Orientation Photo 3</span>
          </div>
        </div>
        <div class="collage-item" data-img="">
          <div class="collage-placeholder">
            <i class="fa-solid fa-image"></i>
            <span>Orientation Photo 4</span>
          </div>
        </div>
        <div class="collage-item" data-img="">
          <div class="collage-placeholder">
            <i class="fa-solid fa-image"></i>
            <span>Orientation Photo 5</span>
          </div>
        </div>
      </div>

      <!-- Orientation details -->
      <div class="program-info-grid" style="margin-top:40px;">
        <div class="program-info-card">
          <div class="icon"><i class="fa-solid fa-calendar-check"></i></div>
          <h4>When is it Held?</h4>
          <!-- CONTENT UPDATED FROM PDF PAGE 3 -->
          <p>Library orientation for new students is conducted at the start of each school year. Specific schedules are provided by the library and academic departments.</p>
        </div>
        <div class="program-info-card">
          <div class="icon"><i class="fa-solid fa-users"></i></div>
          <h4>Who Should Attend?</h4>
          <!-- CONTENT UPDATED FROM PDF PAGE 3 -->
          <p>New students, including incoming freshmen and transferees, are the primary participants in these orientation programs.</p>
        </div>
        <div class="program-info-card">
          <div class="icon"><i class="fa-solid fa-map"></i></div>
          <h4>What's Covered?</h4>
          <!-- CONTENT UPDATED FROM PDF PAGE 3 -->
          <p>Topics include library tours, lectures on library organization, and an introduction to the various services available to support your studies.</p>
        </div>
        <div class="program-info-card">
          <div class="icon"><i class="fa-solid fa-envelope"></i></div>
          <h4>Schedule Your Orientation</h4>
          <p>Departments may coordinate with the library to schedule group orientations. Contact the librarian at library@pup.edu.ph or visit the library for scheduling.</p>
        </div>
      </div>
    </div>

    <hr style="border:none;border-top:1px solid var(--border);margin:80px 0;">

    <!-- ══════════════════════════
         2. LIBRARY INSTRUCTIONS
    ══════════════════════════ -->
    <div class="program-block reveal">
      <div class="program-block-header">
        <span class="section-label">Ongoing</span>
        <h2>Library Instructions</h2>
        <!-- CONTENT UPDATED FROM PDF PAGE 3, 13 -->
        <p>The library provides continuous instruction and orientation programs to equip students and faculty with the skills needed to effectively use library resources, navigate databases, and engage in research.</p>
      </div>

      <div style="display:grid;grid-template-columns:1fr 1fr;gap:40px;align-items:start;">
        <div>
          <div class="img-placeholder">
            <i class="fa-solid fa-image"></i>
            <span>Library Instruction Session Photo</span>
          </div>
          <div class="img-placeholder">
            <i class="fa-solid fa-image"></i>
            <span>Database Training Photo</span>
          </div>
        </div>
        <div>
          <h3 style="font-size:1.8rem;margin-bottom:20px;color:var(--ink);">Building Research Skills</h3>
          <!-- CONTENT UPDATED FROM PDF PAGE 13 -->
          <p style="color:var(--ink-light);font-size:0.93rem;line-height:1.9;margin-bottom:20px;">Our instruction programs are designed to help users navigate the complex information landscape. We offer guidance on using the OPAC, accessing electronic databases, and understanding bibliographic control and information literacy.</p>
          <p style="color:var(--ink-light);font-size:0.93rem;line-height:1.9;margin-bottom:28px;">Faculty members are encouraged to collaborate with the library to request customized instruction sessions for their specific subject areas and student groups.</p>
          <ul style="display:flex;flex-direction:column;gap:12px;">
            <?php $items = ['Library Tours & Organization','Navigating the OPAC','Database Searching & Literacy','Bibliographic Control & Research','Academic Integrity & Referencing']; foreach($items as $it): ?>
            <li style="display:flex;align-items:flex-start;gap:12px;font-size:0.9rem;color:var(--ink-mid);">
              <i class="fa-solid fa-circle-check" style="color:var(--maroon);margin-top:3px;"></i><?=$it?>
            </li>
            <?php endforeach; ?>
          </ul>
          <a href="mailto:library@pup.edu.ph" class="btn-primary" style="margin-top:28px;display:inline-flex;">
            <span>Request a Session</span> <i class="fa-solid fa-paper-plane"></i>
          </a>
        </div>
      </div>
    </div>

    <hr style="border:none;border-top:1px solid var(--border);margin:80px 0;">

    <!-- ══════════════════════════
         3. NATIONAL BOOK WEEK
    ══════════════════════════ -->
    <div class="program-block reveal">
      <div class="program-block-header">
        <span class="section-label">Annual Celebration</span>
        <h2>National Book Week Celebration</h2>
        <p>[Placeholder: The National Book Week Celebration is a special annual event held in November to promote literacy, reading, and a deep appreciation for books and Philippine literature among the PUP community.]</p>
      </div>

      <div style="background:var(--white);border-radius:var(--radius-lg);padding:48px 40px;border:1px solid var(--border);">
        <div style="display:grid;grid-template-columns:1.2fr 1fr;gap:50px;align-items:center;">
          <div>
            <div style="display:flex;align-items:center;gap:16px;margin-bottom:24px;">
              <div style="width:56px;height:56px;background:rgba(123,29,29,0.08);border-radius:14px;display:flex;align-items:center;justify-content:center;font-size:1.5rem;color:var(--maroon);">
                <i class="fa-solid fa-book-open"></i>
              </div>
              <div>
                <span style="font-size:0.75rem;text-transform:uppercase;letter-spacing:2px;color:var(--ink-light);font-weight:700;">November Celebration</span>
                <h4 style="font-size:1.3rem;color:var(--ink);">National Book Week</h4>
              </div>
            </div>
            <p style="color:var(--ink-light);font-size:0.93rem;line-height:1.9;margin-bottom:20px;">The library celebrates National Book Week to foster a culture of reading and literary appreciation. The celebration typically involves various engaging activities designed to spark interest in reading and literature.</p>
            <p style="color:var(--ink-light);font-size:0.93rem;line-height:1.9;margin-bottom:28px;">Stay tuned to our official announcements and social media pages for the upcoming year's theme, schedule, and special activities during this month-long celebration.</p>
            <div style="display:flex;gap:14px;flex-wrap:wrap;">
              <a href="#" class="btn-primary"><span>View Schedule</span> <i class="fa-solid fa-calendar"></i></a>
              <a href="survey.php" class="btn-outline">Give Feedback</a>
            </div>
          </div>
          <div>
            <div class="img-placeholder" style="margin-bottom:16px;">
              <i class="fa-solid fa-image"></i>
              <span>Book Week Activity Photo 1</span>
            </div>
            <div class="img-placeholder">
              <i class="fa-solid fa-image"></i>
              <span>Book Week Activity Photo 2</span>
            </div>
          </div>
        </div>
      </div>

      <!-- Past highlights collage -->
      <div style="margin-top:36px;">
        <h4 style="font-size:1.3rem;color:var(--ink-mid);margin-bottom:20px;font-family:'DM Sans',sans-serif;">Past Celebrations</h4>
        <div class="collage-grid">
          <?php for($i=1;$i<=5;$i++): ?>
          <div class="collage-item" data-img="">
            <div class="collage-placeholder">
              <i class="fa-solid fa-image"></i>
              <span>Book Week <?=2026-$i?></span>
            </div>
          </div>
          <?php endfor; ?>
        </div>
      </div>
    </div>

  </div>
</section>

<!-- LIGHTBOX -->
<div class="lightbox-overlay" id="lightbox">
  <button class="lightbox-close" id="lightbox-close"><i class="fa-solid fa-xmark"></i></button>
  <img class="lightbox-img" src="" alt="Gallery image" id="lightbox-img">
</div>

<?php include 'includes/footer.php'; ?>

<script src="script.js"></script>
<script>
  // Collage lightbox
  document.querySelectorAll('.collage-item').forEach(item => {
    item.addEventListener('click', function() {
      const src = this.dataset.img;
      if (!src) return;
      document.getElementById('lightbox-img').src = src;
      document.getElementById('lightbox').classList.add('show');
    });
  });
  document.getElementById('lightbox-close')?.addEventListener('click', () => {
    document.getElementById('lightbox').classList.remove('show');
    document.getElementById('lightbox-img').src = '';
  });
  document.getElementById('lightbox')?.addEventListener('click', function(e) {
    if (e.target === this) {
      document.getElementById('lightbox').classList.remove('show');
      document.getElementById('lightbox-img').src = '';
    }
  });
</script>
</body>
</html>