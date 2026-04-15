<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>About – PUP Maragondon Digital Library</title>
  <link rel="icon" type="image/png" href="assets/images/logo.png">
  <link rel="stylesheet" href="style.css">
  <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:ital,wght@0,400;0,600;0,700;0,800;1,400;1,600&family=Source+Sans+3:wght@300;400;500;600;700&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">
  <style>
    /* ══════════════════════════════════════════
       ABOUT PAGE — LOCAL STYLES
       ══════════════════════════════════════════ */

    /* ── VGMO SECTION ── */
    .about-vgmo-section { background:var(--light-grey); padding:90px 0 80px; }
    .about-vgmo-intro   { text-align:center; margin-bottom:52px; }

    .vgmo-cards-grid {
      display: grid;
      grid-template-columns: repeat(2,1fr);
      gap: 22px;
    }

    .vgmo-card-v2 {
      background: var(--white);
      border-radius: var(--radius-lg);
      box-shadow: var(--shadow-card);
      border: 1px solid var(--border-light);
      overflow: hidden;
      display: flex;
      flex-direction: column;
      transition: transform 0.35s cubic-bezier(0.4,0,0.2,1),
                  box-shadow 0.35s ease, border-color 0.35s ease;
      animation: cardFadeIn 0.65s cubic-bezier(0.4,0,0.2,1) both;
    }
    .vgmo-card-v2:nth-child(1){animation-delay:0.05s;}
    .vgmo-card-v2:nth-child(2){animation-delay:0.15s;}
    .vgmo-card-v2:nth-child(3){animation-delay:0.25s;}
    .vgmo-card-v2:nth-child(4){animation-delay:0.35s;}
    @keyframes cardFadeIn {
      from{opacity:0;transform:translateY(28px);}
      to  {opacity:1;transform:translateY(0);}
    }
    .vgmo-card-v2:hover {
      transform: translateY(-7px);
      box-shadow: 0 20px 50px rgba(128,0,0,0.12);
      border-color: rgba(128,0,0,0.18);
    }

    .vgmo-card-stripe { height:4px; background:linear-gradient(90deg,var(--maroon),var(--gold)); flex-shrink:0; }

    .vgmo-card-body { padding:30px 30px 32px; flex:1; display:flex; flex-direction:column; }

    .vgmo-card-head { display:flex; align-items:center; gap:14px; margin-bottom:18px; }
    .vgmo-icon-circle {
      width:46px; height:46px; border-radius:12px;
      background:rgba(128,0,0,0.07);
      display:flex; align-items:center; justify-content:center;
      font-size:1.15rem; color:var(--maroon); flex-shrink:0;
      transition:background 0.3s, color 0.3s;
    }
    .vgmo-card-v2:hover .vgmo-icon-circle { background:var(--maroon); color:var(--gold); }

    .vgmo-card-label {
      display:block; font-size:0.62rem; font-weight:700;
      letter-spacing:2.5px; text-transform:uppercase;
      color:var(--maroon); opacity:0.65; margin-bottom:3px;
    }
    .vgmo-card-title {
      font-family:"Playfair Display",serif;
      font-size:1.22rem; font-weight:700; color:var(--text-dark); line-height:1.2;
    }
    .vgmo-card-text { font-size:0.87rem; color:var(--ink-light); line-height:1.85; flex:1; }

    .vgmo-card-list { display:flex; flex-direction:column; gap:10px; margin-top:4px; }
    .vgmo-card-list li {
      display:flex; align-items:flex-start; gap:10px;
      font-size:0.85rem; color:var(--ink-mid); line-height:1.65;
    }
    .vgmo-card-list li::before {
      content:""; width:6px; height:6px; border-radius:50%;
      background:var(--gold-dark); flex-shrink:0; margin-top:7px;
    }

    /* ══════════════════════════════════════════
       LIBRARY HOURS
       ══════════════════════════════════════════ */
    .about-hours-section { background:var(--white); padding:80px 0; }

    .hours-layout {
      display:grid; grid-template-columns:1fr 1.35fr;
      gap:54px; align-items:center;
    }

    .hours-live-status {
      display:inline-flex; align-items:center; gap:9px;
      background:var(--light-grey); border:1px solid var(--border-light);
      padding:7px 16px; border-radius:30px; margin-bottom:22px;
      font-size:0.79rem; font-weight:600; color:var(--ink-mid);
    }
    .hours-live-dot {
      width:9px; height:9px; border-radius:50%;
      background:#22c55e; flex-shrink:0;
      animation:livePulse 1.8s ease-in-out infinite;
    }
    .hours-live-dot.closed-dot { background:#ef4444; animation:none; }
    @keyframes livePulse {
      0%,100%{opacity:1;transform:scale(1);}
      50%    {opacity:0.5;transform:scale(0.82);}
    }

    .hours-info-side h2 {
      font-family:"Playfair Display",serif;
      font-size:clamp(1.75rem,2.8vw,2.4rem);
      font-weight:700; color:var(--text-dark); line-height:1.2; margin-bottom:13px;
    }
    .hours-info-side p { font-size:0.9rem; color:var(--ink-light); line-height:1.8; margin-bottom:26px; }

    .hours-note {
      display:flex; align-items:flex-start; gap:11px;
      background:rgba(255,183,27,0.07);
      border:1px solid rgba(255,183,27,0.22);
      border-radius:var(--radius); padding:13px 15px;
      font-size:0.81rem; color:var(--ink-mid); line-height:1.65;
    }
    .hours-note i { color:var(--gold-dark); font-size:0.88rem; margin-top:2px; flex-shrink:0; }

    /* Schedule card */
    .hours-schedule-card {
      background:linear-gradient(145deg,var(--maroon-deep) 0%,var(--maroon) 100%);
      border-radius:var(--radius-lg); padding:36px 34px;
      box-shadow:0 20px 56px rgba(128,0,0,0.2);
      position:relative; overflow:hidden;
    }
    .hours-schedule-card::before {
      content:""; position:absolute; top:-56px; right:-56px;
      width:190px; height:190px; border-radius:50%;
      border:38px solid rgba(255,183,27,0.06); pointer-events:none;
    }
    .hours-schedule-card::after {
      content:""; position:absolute; bottom:-36px; left:-36px;
      width:120px; height:120px; border-radius:50%;
      background:rgba(255,183,27,0.04); pointer-events:none;
    }

    .hours-card-title {
      display:flex; align-items:center; gap:10px;
      font-family:"Playfair Display",serif; font-size:1.15rem;
      font-weight:700; color:var(--gold-light); margin-bottom:24px;
      position:relative; z-index:1;
    }

    .hours-rows { display:flex; flex-direction:column; gap:9px; position:relative; z-index:1; }

    .hours-row-v2 {
      display:flex; align-items:center; justify-content:space-between;
      background:rgba(255,255,255,0.07); border:1px solid rgba(255,255,255,0.08);
      border-radius:9px; padding:12px 17px;
      transition:background 0.25s, border-color 0.25s;
    }
    .hours-row-v2:hover { background:rgba(255,255,255,0.12); border-color:rgba(255,183,27,0.22); }
    .hours-row-v2.is-today { background:rgba(255,183,27,0.11); border-color:rgba(255,183,27,0.32); }

    .hours-day-name {
      font-size:0.84rem; font-weight:600;
      color:rgba(255,255,255,0.78);
      display:flex; align-items:center; gap:8px;
    }
    .today-badge {
      font-size:0.54rem; font-weight:700; letter-spacing:1px;
      text-transform:uppercase; background:var(--gold);
      color:var(--maroon-deep); padding:2px 7px; border-radius:10px;
    }
    .hours-time-badge {
      font-size:0.8rem; font-weight:700; padding:4px 12px; border-radius:18px;
    }
    .hours-time-badge.open-time  { background:rgba(34,197,94,0.15); color:#4ade80; }
    .hours-time-badge.closed-time{ background:rgba(255,255,255,0.07); color:rgba(255,255,255,0.35); }

    /* ══════════════════════════════════════════
       HISTORY TIMELINE
       ══════════════════════════════════════════ */
    .about-history-section { background:var(--light-grey); padding:90px 0 100px; }

    .timeline-wrapper { position:relative; margin-top:62px; }

    .timeline-line {
      position:absolute; left:50%; top:0; bottom:0;
      width:2px; background:var(--border-light);
      transform:translateX(-50%);
    }
    .timeline-line-fill {
      position:absolute; left:50%; top:0;
      width:2px; height:0%;
      background:linear-gradient(to bottom,var(--maroon),var(--gold));
      transform:translateX(-50%);
      transition:height 1.8s cubic-bezier(0.4,0,0.2,1);
    }
    .timeline-line-fill.grown { height:100%; }

    .tl-event {
      display:grid; grid-template-columns:1fr 56px 1fr;
      margin-bottom:44px; align-items:start;
      opacity:0; transform:translateY(22px);
      transition:opacity 0.55s ease, transform 0.55s ease;
    }
    .tl-event.visible { opacity:1; transform:translateY(0); }
    .tl-event:last-child { margin-bottom:0; }

    .tl-left  { display:flex; justify-content:flex-end;  padding-right:30px; }
    .tl-right { display:flex; justify-content:flex-start; padding-left:30px; }

    .tl-center { display:flex; flex-direction:column; align-items:center; padding-top:20px; }
    .tl-dot {
      width:17px; height:17px; border-radius:50%;
      background:var(--white); border:3px solid var(--maroon);
      box-shadow:0 0 0 4px rgba(128,0,0,0.09);
      transition:background 0.3s, box-shadow 0.3s, transform 0.3s;
      cursor:pointer; flex-shrink:0; position:relative; z-index:2;
    }
    .tl-event:hover .tl-dot,
    .tl-event.active .tl-dot {
      background:var(--maroon);
      box-shadow:0 0 0 6px rgba(128,0,0,0.14),0 0 14px rgba(128,0,0,0.28);
      transform:scale(1.2);
    }

    .tl-year-pill {
      margin-top:7px; background:var(--maroon); color:var(--white);
      font-size:0.58rem; font-weight:700; letter-spacing:0.8px;
      padding:3px 8px; border-radius:9px; opacity:0;
      transition:opacity 0.3s; white-space:nowrap;
    }
    .tl-event:hover .tl-year-pill,
    .tl-event.active .tl-year-pill { opacity:1; }

    .tl-card {
      background:var(--white); border-radius:var(--radius-lg);
      padding:24px 26px; box-shadow:var(--shadow-card);
      border:1px solid var(--border-light);
      max-width:370px; width:100%; cursor:pointer;
      transition:transform 0.32s cubic-bezier(0.4,0,0.2,1),
                  box-shadow 0.32s ease, border-color 0.32s ease;
      position:relative; overflow:hidden;
    }
    .tl-card::after {
      content:""; position:absolute; bottom:0; left:0; right:0;
      height:3px; background:linear-gradient(90deg,var(--maroon),var(--gold));
      transform:scaleX(0); transform-origin:left; transition:transform 0.35s ease;
    }
    .tl-event:hover .tl-card,
    .tl-event.active .tl-card {
      transform:translateY(-5px);
      box-shadow:0 16px 44px rgba(128,0,0,0.11);
      border-color:rgba(128,0,0,0.14);
    }
    .tl-event:hover .tl-card::after,
    .tl-event.active .tl-card::after { transform:scaleX(1); }

    .tl-year {
      font-family:"Playfair Display",serif; font-size:2rem;
      font-weight:800; color:var(--maroon); line-height:1; margin-bottom:9px; display:block;
    }
    .tl-title {
      display:block; font-family:"Playfair Display",serif;
      font-size:0.92rem; font-weight:700;
      color:var(--text-dark); margin-bottom:7px;
    }
    .tl-card p { font-size:0.83rem; color:var(--ink-light); line-height:1.75; margin:0; }

    /* Expandable detail */
    .tl-detail {
      max-height:0; overflow:hidden;
      transition:max-height 0.4s cubic-bezier(0.4,0,0.2,1), padding 0.4s ease;
      padding:0 26px;
    }
    .tl-event.active .tl-detail { max-height:180px; padding:13px 26px 18px; }
    .tl-detail-inner {
      border-top:1px solid var(--border-light); padding-top:12px;
      font-size:0.81rem; color:var(--ink-light); line-height:1.75;
    }

    .tl-hint {
      text-align:center; margin-top:42px;
      font-size:0.78rem; color:var(--ink-light); letter-spacing:0.4px;
    }
    .tl-hint i { margin-right:5px; color:var(--gold-dark); }

    /* ── RESPONSIVE ── */
    @media(max-width:960px){
      .vgmo-cards-grid  { grid-template-columns:1fr; }
      .hours-layout     { grid-template-columns:1fr; gap:34px; }
    }
    @media(max-width:720px){
      .timeline-line,.timeline-line-fill { left:22px; }
      .tl-event {
        grid-template-columns:44px 1fr;
        margin-bottom:28px;
      }
      .tl-center { padding-top:16px; }
      .tl-left  { grid-column:2; justify-content:flex-start; padding-right:0; padding-left:18px; }
      .tl-right { grid-column:2; padding-left:18px; }
      .tl-empty { display:none; }
      .tl-card  { max-width:100%; }
      .tl-event.active .tl-detail { max-height:240px; }
    }
    @media(max-width:500px){
      .hours-schedule-card { padding:26px 20px; }
      .vgmo-card-body      { padding:22px 20px 24px; }
    }
  </style>
</head>
<body>

<div class="page-transition" id="page-transition">
  <div class="loader-icon"><i class="fa-solid fa-book-open"></i></div>
  <p class="loader-text">Loading...</p>
</div>

<?php $activePage = 'about'; include 'includes/nav.php'; ?>

<!-- INNER HERO -->
<section class="inner-hero">
  <div class="hero-overlay"></div>
  <div class="container inner-hero-content">
    <div class="breadcrumb">
      <a href="index.php">Home</a>
      <i class="fa-solid fa-chevron-right"></i>
      <span>About</span>
    </div>
    <h1>About the Library</h1>
    <p>Learn our story, vision, and the values that guide our service to the PUP community.</p>
  </div>
</section>

<!-- ══════════════════════════════════════════════
     VGMO
════════════════════════════════════════════════ -->
<section class="about-vgmo-section">
  <div class="container">

    <div class="about-vgmo-intro">
      <span class="section-label">Who We Are</span>
      <h2 class="section-title">Vision, Goals, Mission <span>&amp; Objectives</span></h2>
      <div class="section-divider"></div>
    </div>

    <div class="vgmo-cards-grid">

      <!-- MISSION -->
      <div class="vgmo-card-v2">
        <div class="vgmo-card-stripe"></div>
        <div class="vgmo-card-body">
          <div class="vgmo-card-head">
            <div class="vgmo-icon-circle"><i class="fa-solid fa-bullseye"></i></div>
            <div>
              <span class="vgmo-card-label">Our Purpose</span>
              <div class="vgmo-card-title">Mission Statement</div>
            </div>
          </div>
          <!-- CONTENT UPDATED FROM PDF PAGE 1 -->
          <p class="vgmo-card-text">Guided by the PUP philosophy, the PUP University Library is committed to provide a user-centered approach in all aspects of its programs and services. The library herewith outlined goals and corresponding strategies that would satisfy the needs of its clienteles in both physical and online environments and to mold them to become lifelong learners and more responsible citizens.</p>
        </div>
      </div>

      <!-- VISION -->
      <div class="vgmo-card-v2">
        <div class="vgmo-card-stripe" style="background:linear-gradient(90deg,var(--gold-dark),var(--gold));"></div>
        <div class="vgmo-card-body">
          <div class="vgmo-card-head">
            <div class="vgmo-icon-circle"><i class="fa-regular fa-eye"></i></div>
            <div>
              <span class="vgmo-card-label">Looking Forward</span>
              <div class="vgmo-card-title">Our Vision</div>
            </div>
          </div>
          <!-- Placeholder kept as Vision was not explicitly stated as a single sentence in provided pages -->
          <p class="vgmo-card-text">[Placeholder: The vision statement of the PUP University Library articulates its aspirations for the future.]</p>
        </div>
      </div>

      <!-- GOALS -->
      <div class="vgmo-card-v2">
        <div class="vgmo-card-stripe" style="background:linear-gradient(90deg,var(--maroon-light),var(--maroon));"></div>
        <div class="vgmo-card-body">
          <div class="vgmo-card-head">
            <div class="vgmo-icon-circle"><i class="fa-solid fa-flag"></i></div>
            <div>
              <span class="vgmo-card-label">Strategic Direction</span>
              <div class="vgmo-card-title">Our Goals</div>
            </div>
          </div>
          <!-- CONTENT UPDATED FROM PDF PAGE 1 -->
          <ul class="vgmo-card-list">
            <li>Satisfy the needs of its clienteles in both physical and online environments.</li>
            <li>Mold learners to become lifelong learners and more responsible citizens.</li>
            <li>Provide a user-centered approach in all aspects of its programs and services.</li>
            <li>Implement outlined goals and corresponding strategies.</li>
          </ul>
        </div>
      </div>

      <!-- OBJECTIVES -->
      <div class="vgmo-card-v2">
        <div class="vgmo-card-stripe" style="background:linear-gradient(90deg,var(--gold),var(--gold-dark));"></div>
        <div class="vgmo-card-body">
          <div class="vgmo-card-head">
            <div class="vgmo-icon-circle"><i class="fa-solid fa-list-check"></i></div>
            <div>
              <span class="vgmo-card-label">Core Commitments</span>
              <div class="vgmo-card-title">Objectives</div>
            </div>
          </div>
          <!-- CONTENT UPDATED FROM PDF PAGE 1 -->
          <ul class="vgmo-card-list">
            <li>Serve the needs of our clienteles as its gateway to the global information society.</li>
            <li>Provide customer-oriented assistance in selecting, locating and using resources.</li>
            <li>Develop and increase as needed a quality staff in the service and operations of the library.</li>
            <li>Promote collaboration with local and international community agencies/organizations.</li>
            <li>Maintain, conserve, and preserve the physical feature of the library holdings.</li>
          </ul>
        </div>
      </div>

    </div><!-- .vgmo-cards-grid -->
  </div>
</section>

<!-- ══════════════════════════════════════════════
     LIBRARY HOURS
════════════════════════════════════════════════ -->
<section class="about-hours-section">
  <div class="container">
    <div class="hours-layout reveal">

      <!-- LEFT -->
      <div class="hours-info-side">
        <div class="hours-live-status">
          <span class="hours-live-dot" id="hours-dot"></span>
          <span id="hours-status-text">Checking status…</span>
        </div>
        <h2>Library<br><span style="color:var(--maroon);">Operating Hours</span></h2>
        <p>The PUP University Library is open to students, faculty, and staff. Please note our "No Noon Break" policy.</p>
        <!-- CONTENT UPDATED FROM PDF PAGE 24 -->
        <div class="hours-note">
          <i class="fa-solid fa-triangle-exclamation"></i>
          <span>The University Library observes a <strong>NO NOON BREAK</strong> policy.</span>
        </div>
      </div>

      <!-- RIGHT: Schedule Card -->
      <div class="hours-schedule-card">
        <div class="hours-card-title">
          <i class="fa-regular fa-clock"></i>
          Weekly Schedule
        </div>
        <?php
          $today    = (int)date('N'); // 1=Mon…7=Sun
          // CONTENT UPDATED FROM PDF PAGE 24
          $schedule = [
            ['label'=>'Monday',    'n'=>1, 'time'=>'8:00 AM – 8:00 PM', 'open'=>true],
            ['label'=>'Tuesday',   'n'=>2, 'time'=>'8:00 AM – 8:00 PM', 'open'=>true],
            ['label'=>'Wednesday', 'n'=>3, 'time'=>'8:00 AM – 8:00 PM', 'open'=>true],
            ['label'=>'Thursday',  'n'=>4, 'time'=>'8:00 AM – 8:00 PM', 'open'=>true],
            ['label'=>'Friday',    'n'=>5, 'time'=>'8:00 AM – 8:00 PM', 'open'=>true],
            ['label'=>'Saturday',  'n'=>6, 'time'=>'8:00 AM – 5:00 PM', 'open'=>true],
            ['label'=>'Sunday',    'n'=>7, 'time'=>'Closed',            'open'=>false],
          ];
        ?>
        <div class="hours-rows">
          <?php foreach($schedule as $row):
            $isToday = ($row['n'] === $today);
          ?>
          <div class="hours-row-v2<?=$isToday?' is-today':''?>">
            <span class="hours-day-name">
              <?=$row['label']?>
              <?php if($isToday):?><span class="today-badge">Today</span><?php endif;?>
            </span>
            <span class="hours-time-badge <?=$row['open']?'open-time':'closed-time'?>">
              <?=$row['time']?>
            </span>
          </div>
          <?php endforeach;?>
        </div>
      </div>

    </div>
  </div>
</section>

<!-- ══════════════════════════════════════════════
     HISTORY — INTERACTIVE TIMELINE
════════════════════════════════════════════════ -->
<section class="about-history-section">
  <div class="container">

    <div class="section-header">
      <span class="section-label">Our Story</span>
      <h2 class="section-title">Library <span>History</span></h2>
      <div class="section-divider"></div>
      <p class="section-sub" style="margin:16px auto 0;">[Placeholder: A brief paragraph describing the history of the PUP University Library.]</p>
    </div>

    <div class="timeline-wrapper">
      <div class="timeline-line"></div>
      <div class="timeline-line-fill" id="timeline-fill"></div>

      <?php
      // Placeholder events kept as specific historical dates/milestones were not in the PDF.
      $events = [
        [
          'year'   => '19XX',
          'title'  => 'Founding',
          'desc'   => 'The foundation of the PUP University Library service.',
          'detail' => 'Details about the inception of the library services.',
        ],
        [
          'year'   => '20XX',
          'title'  => 'Expansion',
          'desc'   => 'Expansion of collections and facilities.',
          'detail' => 'Details regarding the growth of library resources.',
        ],
        [
          'year'   => '2023',
          'title'  => 'Modern Operations',
          'desc'   => 'Implementation of the current Manual of Operations.',
          'detail' => 'Current operational standards and professionalized management.',
        ],
      ];

      foreach($events as $i => $ev):
        $cardLeft = ($i % 2 === 0); // even index = card on LEFT
      ?>
      <div class="tl-event" id="tl-<?=$i?>" onclick="toggleTimeline(<?=$i?>)">

        <?php if($cardLeft): ?>
          <div class="tl-left">
            <div class="tl-card">
              <span class="tl-year"><?=$ev['year']?></span>
              <span class="tl-title"><?=$ev['title']?></span>
              <p><?=$ev['desc']?></p>
              <div class="tl-detail">
                <div class="tl-detail-inner"><?=$ev['detail']?></div>
              </div>
            </div>
          </div>
          <div class="tl-center">
            <div class="tl-dot"></div>
            <div class="tl-year-pill"><?=$ev['year']?></div>
          </div>
          <div class="tl-empty"></div>

        <?php else: ?>
          <div class="tl-empty"></div>
          <div class="tl-center">
            <div class="tl-dot"></div>
            <div class="tl-year-pill"><?=$ev['year']?></div>
          </div>
          <div class="tl-right">
            <div class="tl-card">
              <span class="tl-year"><?=$ev['year']?></span>
              <span class="tl-title"><?=$ev['title']?></span>
              <p><?=$ev['desc']?></p>
              <div class="tl-detail">
                <div class="tl-detail-inner"><?=$ev['detail']?></div>
              </div>
            </div>
          </div>
        <?php endif; ?>

      </div>
      <?php endforeach; ?>

    </div><!-- .timeline-wrapper -->

    <p class="tl-hint">
      <i class="fa-regular fa-hand-pointer"></i>
      Click any milestone card to expand its full story
    </p>

  </div>
</section>

<?php include 'includes/footer.php'; ?>
<script src="script.js"></script>
<script>
/* ═══════════════════════════════════════
   ABOUT PAGE — LOCAL SCRIPT
   ═══════════════════════════════════════ */

/* Live hours status */
(function() {
  const dot  = document.getElementById('hours-dot');
  const text = document.getElementById('hours-status-text');
  if (!dot || !text) return;
  const now   = new Date();
  const day   = now.getDay();    // 0=Sun
  const hour  = now.getHours();
  // Adjusted to match PDF Schedule: Mon-Fri (8am-8pm), Sat (8am-5pm)
  let isOpen = false;
  if (day >= 1 && day <= 5) {
    if (hour >= 8 && hour < 20) isOpen = true;
  } else if (day === 6) {
    if (hour >= 8 && hour < 17) isOpen = true;
  }
  text.textContent = isOpen ? 'Library is Currently Open' : 'Library is Currently Closed';
  if (!isOpen) dot.classList.add('closed-dot');
})();

/* Timeline — toggle expand */
function toggleTimeline(idx) {
  const el = document.getElementById('tl-' + idx);
  const wasActive = el.classList.contains('active');
  document.querySelectorAll('.tl-event').forEach(e => e.classList.remove('active'));
  if (!wasActive) el.classList.add('active');
}

/* Timeline — scroll reveal + line grow */
(function() {
  const events   = document.querySelectorAll('.tl-event');
  const fillLine = document.getElementById('timeline-fill');
  const section  = document.querySelector('.about-history-section');

  /* Grow the timeline line */
  if (section && fillLine) {
    new IntersectionObserver(entries => {
      if (entries[0].isIntersecting) {
        fillLine.classList.add('grown');
      }
    }, { threshold: 0.12 }).observe(section);
  }

  /* Stagger each event card */
  if (events.length) {
    const obs = new IntersectionObserver((entries, observer) => {
      entries.forEach(entry => {
        if (entry.isIntersecting) {
          entry.target.classList.add('visible');
          observer.unobserve(entry.target);
        }
      });
    }, { threshold: 0.15, rootMargin: '0px 0px -30px 0px' });

    events.forEach((ev, i) => {
      ev.style.transitionDelay = (i * 0.07) + 's';
      obs.observe(ev);
    });
  }
})();
</script>
</body>
</html>