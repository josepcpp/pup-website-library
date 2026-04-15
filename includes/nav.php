<?php
// includes/nav.php
if (!isset($activePage)) $activePage = '';
?>
<!-- ANNOUNCE TICKER -->
<!--<div class="announce-bar">
  <div class="ticker-track">
    <span><i class="fa-solid fa-bell"></i> Library Orientation for New Students — May 5, 2026</span>
    <span><i class="fa-solid fa-book"></i> National Book Week Celebration — November 2026</span>
    <span><i class="fa-solid fa-clock"></i> Library Hours: Mon–Fri, 8:00 AM – 5:00 PM</span>
    <span><i class="fa-solid fa-star"></i> New Arrivals: Check our latest digital collections!</span>
    <span><i class="fa-solid fa-bell"></i> Library Orientation for New Students — May 5, 2026</span>
    <span><i class="fa-solid fa-book"></i> National Book Week Celebration — November 2026</span>
    <span><i class="fa-solid fa-clock"></i> Library Hours: Mon–Fri, 8:00 AM – 5:00 PM</span>
    <span><i class="fa-solid fa-star"></i> New Arrivals: Check our latest digital collections!</span>
  </div>
</div>-->

<!-- MAIN HEADER -->
<header id="main-header">
  <div class="header-container">

    <!-- LOGO -->
    <a href="index.php" class="logo no-transition">
      <img src="assets/images/logo.png" alt="PUP Logo" class="logo-img">
      <div class="logo-text-wrap">
        <span>PUP Maragondon Library</span>
        <span class="logo-sub">Polytechnic University of the Philippines</span>
      </div>
    </a>

    <!-- DESKTOP NAV -->
    <nav>
      <ul class="nav-links">
        <li>
          <a href="index.php" class="<?= $activePage==='home' ? 'active' : '' ?>">
            Home
          </a>
        </li>
        <li>
          <a href="about.php" class="<?= $activePage==='about' ? 'active' : '' ?>">
            About
          </a>
        </li>
        <li class="has-dropdown">
          <a href="services.php" class="<?= $activePage==='services' ? 'active' : '' ?>">
            Services
          </a>
          <ul class="dropdown-menu">
            <li><a href="services.php#circulation"><i class="fa-solid fa-rotate"></i> Circulation</a></li>
            <li><a href="services.php#reserve"><i class="fa-solid fa-bookmark"></i> Reserve</a></li>
            <li><a href="services.php#reference"><i class="fa-solid fa-magnifying-glass"></i> Reference</a></li>
            <li><a href="services.php#filipiniana"><i class="fa-solid fa-flag"></i> Filipiniana</a></li>
            <li><a href="services.php#periodical"><i class="fa-solid fa-newspaper"></i> Periodical</a></li>
          </ul>
        </li>
        <li class="has-dropdown">
          <a href="resources.php" class="<?= $activePage==='resources' ? 'active' : '' ?>">
            Resources
          </a>
          <ul class="dropdown-menu">
            <li><a href="resources.php"><i class="fa-solid fa-database"></i> Online Resources</a></li>
            <li><a href="holdings.php"><i class="fa-solid fa-books"></i> Library Holdings</a></li>
          </ul>
        </li>
        <li>
          <a href="guidelines.php" class="<?= $activePage==='guidelines' ? 'active' : '' ?>">
            Guidelines
          </a>
        </li>
        <li>
          <a href="programs.php" class="<?= $activePage==='programs' ? 'active' : '' ?>">
            Programs
          </a>
        </li>
        <li class="has-dropdown">
          <a href="#" class="<?= in_array($activePage, ['linkages','survey','administration']) ? 'active' : '' ?>">
            More
          </a>
          <ul class="dropdown-menu">
            <li><a href="linkages.php"><i class="fa-solid fa-link"></i> Linkages</a></li>
            <li><a href="survey.php"><i class="fa-solid fa-clipboard-list"></i> Library Survey</a></li>
            <li><a href="administration.php"><i class="fa-solid fa-users"></i> Administration</a></li>
          </ul>
        </li>
      </ul>
      <button class="hamburger" aria-label="Open Menu">
        <i class="fa-solid fa-bars"></i>
      </button>
    </nav>

  </div>
</header>

<!-- MOBILE DRAWER -->
<div class="mobile-drawer" id="mobile-drawer">
  <button class="drawer-close" aria-label="Close Menu">
    <i class="fa-solid fa-xmark"></i>
  </button>

  <!-- Drawer logo -->
  <div style="display:flex;align-items:center;gap:10px;margin-bottom:28px;padding-bottom:20px;border-bottom:1px solid rgba(255,255,255,0.07);">
    <img src="assets/images/logo.png" alt="PUP Logo" style="height:34px;width:auto;">
    <div>
      <div style="color:#fff;font-family:'Playfair Display',serif;font-size:0.92rem;font-weight:600;line-height:1.2;">PUP Maragondon</div>
      <div style="color:rgba(255,255,255,0.42);font-size:0.62rem;letter-spacing:1px;text-transform:uppercase;">Digital Library</div>
    </div>
  </div>

  <nav class="drawer-nav">
    <a href="index.php"          class="<?= $activePage==='home'           ? 'active' : '' ?>"><span>Home</span></a>
    <a href="about.php"          class="<?= $activePage==='about'          ? 'active' : '' ?>"><span>About</span></a>
    <a href="services.php"       class="<?= $activePage==='services'       ? 'active' : '' ?>"><span>Services</span></a>
    <a href="resources.php"      class="<?= $activePage==='resources'      ? 'active' : '' ?>"><span>Online Resources</span></a>
    <a href="holdings.php"       class="<?= $activePage==='holdings'       ? 'active' : '' ?>"><span>Library Holdings</span></a>
    <a href="guidelines.php"     class="<?= $activePage==='guidelines'     ? 'active' : '' ?>"><span>Guidelines</span></a>
    <a href="programs.php"       class="<?= $activePage==='programs'       ? 'active' : '' ?>"><span>Programs &amp; Events</span></a>
    <a href="linkages.php"       class="<?= $activePage==='linkages'       ? 'active' : '' ?>"><span>Linkages</span></a>
    <a href="survey.php"         class="<?= $activePage==='survey'         ? 'active' : '' ?>"><span>Library Survey</span></a>
    <a href="administration.php" class="<?= $activePage==='administration' ? 'active' : '' ?>"><span>Administration</span></a>
  </nav>
</div>
<div class="drawer-overlay" id="drawer-overlay"></div>