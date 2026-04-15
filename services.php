<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Library Services – PUP Maragondon Digital Library</title>
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

<?php $activePage = 'services'; include 'includes/nav.php'; ?>

<section class="inner-hero">
  <div class="hero-overlay"></div>
  <div class="container inner-hero-content">
    <div class="breadcrumb">
      <a href="index.php">Home</a>
      <i class="fa-solid fa-chevron-right"></i>
      <span>Library Services</span>
    </div>
    <h1>Library Services</h1>
    <p>Comprehensive reader's services designed to support your academic journey at PUP Maragondon.</p>
  </div>
</section>

<!-- LIBRARY SERVICES OVERVIEW -->
<section style="background:var(--parchment);padding:60px 0 20px;">
  <div class="container">
    <div class="section-header reveal">
      <span class="section-label">Reader's Services</span>
      <h2 class="section-title">How We <span>Serve You</span></h2>
      <div class="section-divider"></div>
      <p class="section-sub" style="margin:16px auto 0;">Readers services are provided through the Circulation, Reference, Filipiniana and Periodicals sections.</p>
    </div>
  </div>
</section>

<!-- TABS: READER'S SERVICES -->
<section class="services-tabs" style="background:var(--parchment);">
  <div class="container reveal">
    <div class="tab-nav">
      <button class="tab-btn active" data-tab="tab-circulation" id="circulation">
        <i class="fa-solid fa-rotate"></i> Circulation
      </button>
      <button class="tab-btn" data-tab="tab-reference" id="reference">
        <i class="fa-solid fa-magnifying-glass-chart"></i> Reference
      </button>
      <button class="tab-btn" data-tab="tab-filipiniana" id="filipiniana">
        <i class="fa-solid fa-flag"></i> Filipiniana
      </button>
      <button class="tab-btn" data-tab="tab-periodical" id="periodical">
        <i class="fa-solid fa-newspaper"></i> Periodical
      </button>
    </div>

    <!-- CIRCULATION -->
    <div class="tab-panel active" id="tab-circulation">
      <div class="tab-panel-text">
        <h2>Circulation Section</h2>
        <!-- CONTENT UPDATED FROM PDF PAGE 4, 26 -->
        <p>This section is responsible for the checking out and checking in of the materials, management of collection and other related services to users. The following are the major functions of the Section: Circulation Desk Activities, renewals, hold & recalls, book reserves, notifying and searching items, and user assistance.</p>
        <ul class="service-detail-list">
          <li>
            <i class="fa-solid fa-arrow-right-from-bracket"></i>
            <div><h5>Book Lending</h5><p>Fiction books may be borrowed and taken out for a week. The books may be renewed for another week. University officials, faculty members, and academic and administrative personnel shall be restricted to a one-week loan period depending on the availability of copies.</p></div>
          </li>
          <li>
            <i class="fa-solid fa-arrow-right-to-bracket"></i>
            <div><h5>Book Return</h5><p>Borrowers are advised to drop items at the designated bin or book drops. If the borrowers want to return the borrowed materials directly to the counter, they are allowed to do so.</p></div>
          </li>
          <li>
            <i class="fa-solid fa-rotate"></i>
            <div><h5>Renewal</h5><p>Students and Faculty can renew borrowed books via the University Library email (library@pup.edu.ph) or message the Facebook Page of the library. There are allotted 3 copies with different titles for the renewal of the borrowed library materials per library user.</p></div>
          </li>
          <li>
            <i class="fa-solid fa-triangle-exclamation"></i>
            <div><h5>Overdue & Fines</h5><p>Library resources not returned on the due date shall be subject to fines until they are returned. A fine of fifty (php50.00) pesos per day except Sundays, holidays, and fortuitous events is charged for resources kept overdue.</p></div>
          </li>
        </ul>
      </div>
      <div class="tab-panel-visual">
        <img src="assets/images/circulation.jpg" alt="Circulation Section">
      </div>
    </div>

    <!-- REFERENCE -->
    <div class="tab-panel" id="tab-reference">
      <div class="tab-panel-text">
        <h2>Reference Section</h2>
        <!-- CONTENT UPDATED FROM PDF PAGE 4 -->
        <p>This Section is responsible for the checking out and checking in of the materials, management of collection and other related services to users. It also houses the general reference materials like atlas and maps, dictionaries, encyclopedias, bibliographies, research handbooks and guides, catalogs, and directories.</p>
        <ul class="service-detail-list">
          <li>
            <i class="fa-solid fa-person-chalkboard"></i>
            <div><h5>Research Assistance</h5><p>Librarians assist patrons in finding information, locating resources, and navigating databases. This includes providing answers to questions about the location of materials and services provided within the PUP Libraries.</p></div>
          </li>
          <li>
            <i class="fa-solid fa-database"></i>
            <div><h5>Database Navigation</h5><p>Guidance on using online databases such as Emerald Insight, ProQuest, and Gale.</p></div>
          </li>
          <li>
            <i class="fa-solid fa-book-open-reader"></i>
            <div><h5>Reader's Advisory</h5><p>Personalized recommendations and assistance to meet individual library needs and problems with the Librarian on desk.</p></div>
          </li>
        </ul>
      </div>
      <div class="tab-panel-visual">
        <img src="assets/images/reference.jpg" alt="Reference Section">
      </div>
    </div>

    <!-- FILIPINIANA -->
    <div class="tab-panel" id="tab-filipiniana">
      <div class="tab-panel-text">
        <h2>Filipiniana Section</h2>
        <!-- CONTENT UPDATED FROM PDF PAGE 4 -->
        <p>This Section organizes, and preserves all forms of Filipiniana collections regarding the Philippines and the peoples and culture of the Philippines regardless of author, imprint and language. It prepares guides to the various collections to facilitate easy access and retrieval.</p>
        <ul class="service-detail-list">
          <li>
            <i class="fa-solid fa-flag"></i>
            <div><h5>Philippine Literature</h5><p>Collection of Filipino literary works including novels, poetry, and short stories in Filipino and English.</p></div>
          </li>
          <li>
            <i class="fa-solid fa-landmark"></i>
            <div><h5>History & Culture</h5><p>Historical documents, cultural studies, and materials on Philippine heritage and traditions.</p></div>
          </li>
          <li>
            <i class="fa-solid fa-scroll"></i>
            <div><h5>Government Documents</h5><p>Official publications from Philippine government agencies and local government units.</p></div>
          </li>
        </ul>
      </div>
      <div class="tab-panel-visual">
        <img src="assets/images/filipiniana.jpg" alt="Filipiniana Section">
      </div>
    </div>

    <!-- PERIODICAL -->
    <div class="tab-panel" id="tab-periodical">
      <div class="tab-panel-text">
        <h2>Periodical Section</h2>
        <!-- CONTENT UPDATED FROM PDF PAGE 4 -->
        <p>This Section is responsible for all functions related to obtaining and making serials available in the library. These include: Indexing of newspapers/journals, claiming unreceived issues, binding and maintaining holdings records in the Library Catalog.</p>
        <ul class="service-detail-list">
          <li>
            <i class="fa-solid fa-newspaper"></i>
            <div><h5>Newspapers</h5><p>Current and back issues of major national and local newspapers available for reading in the library.</p></div>
          </li>
          <li>
            <i class="fa-solid fa-journal-whills"></i>
            <div><h5>Academic Journals</h5><p>Scholarly journals across multiple disciplines. Older issues may be available in bound volumes.</p></div>
          </li>
          <li>
            <i class="fa-solid fa-magazine"></i>
            <div><h5>Magazines</h5><p>General interest and specialized magazines covering current events, science, technology, and more.</p></div>
          </li>
        </ul>
      </div>
      <div class="tab-panel-visual">
        <img src="assets/images/periodical.jpg" alt="Periodical Section">
      </div>
    </div>
  </div>
</section>

<!-- HOURS WIDGET -->
<section style="background:var(--parchment);padding-bottom:100px;">
  <div class="container reveal">
    <div class="hours-widget">
      <h3><i class="fa-regular fa-clock" style="margin-right:12px;"></i>Library Hours</h3>
      <p>Visit us during regular working hours for in-person services. Please note our "No Noon Break" policy.</p>
      <div class="hours-status">
        <span class="status-dot" id="status-dot"></span>
        <span id="library-status">Checking status...</span>
      </div>
      <div class="hours-grid">
        <!-- CONTENT UPDATED FROM PDF PAGE 24 -->
        <div class="hours-row"><div class="day">Monday – Friday</div><div class="time">8:00 AM – 8:00 PM</div></div>
        <div class="hours-row"><div class="day">Saturday</div><div class="time">8:00 AM – 5:00 PM</div></div>
        <div class="hours-row"><div class="day">Sunday</div><div class="time">Closed</div></div>
        <div class="hours-row"><div class="day">Holidays</div><div class="time">Closed</div></div>
      </div>
    </div>
  </div>
</section>

<?php include 'includes/footer.php'; ?>
<script src="script.js"></script>
</body>
</html>