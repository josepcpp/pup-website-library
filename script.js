/* ==========================================================================
   PUP MARAGONDON DIGITAL LIBRARY — MASTER SCRIPT
   Effects: Parallax · Spotlight · 3D Tilt · Typewriter · Particles
            Progress Bars · Marquee · Magnetic Buttons · Stagger · Waves
   ========================================================================== */

document.addEventListener("DOMContentLoaded", function () {
  // ──────────────────────────────────────────────────────────────────────────
  // 1. READING PROGRESS BAR
  // ──────────────────────────────────────────────────────────────────────────
  const progressBar = document.createElement("div");
  progressBar.className = "reading-progress";
  document.body.prepend(progressBar);

  window.addEventListener(
    "scroll",
    () => {
      const scrollTop = window.scrollY;
      const docH = document.documentElement.scrollHeight - window.innerHeight;
      progressBar.style.width =
        docH > 0 ? (scrollTop / docH) * 100 + "%" : "0%";
    },
    { passive: true },
  );

  // ──────────────────────────────────────────────────────────────────────────
  // 2. PAGE TRANSITION LOADER
  // ──────────────────────────────────────────────────────────────────────────
  const pageTransition = document.getElementById("page-transition");
  if (pageTransition) {
    // Inject loading bar
    if (!pageTransition.querySelector(".loader-bar")) {
      const bar = document.createElement("div");
      bar.className = "loader-bar";
      bar.innerHTML = '<div class="loader-bar-fill"></div>';
      pageTransition.appendChild(bar);
    }

    window.addEventListener("pageshow", () =>
      pageTransition.classList.add("fade-out"),
    );

    document.querySelectorAll("a").forEach((link) => {
      link.addEventListener("click", function (e) {
        const href = this.href;
        if (
          href &&
          href.includes(window.location.host) &&
          !href.includes("#") &&
          this.target !== "_blank" &&
          !this.classList.contains("no-transition")
        ) {
          e.preventDefault();
          pageTransition.classList.remove("fade-out");
          setTimeout(() => {
            window.location.href = href;
          }, 500);
        }
      });
    });
  }

  // ──────────────────────────────────────────────────────────────────────────
  // 3. STICKY HEADER
  // ──────────────────────────────────────────────────────────────────────────
  const header = document.getElementById("main-header");
  if (header) {
    window.addEventListener(
      "scroll",
      () => {
        header.classList.toggle("sticky", window.scrollY > 60);
      },
      { passive: true },
    );
  }

  // ──────────────────────────────────────────────────────────────────────────
  // 4. MOBILE DRAWER
  // ──────────────────────────────────────────────────────────────────────────
  const hamburger = document.querySelector(".hamburger");
  const drawer = document.getElementById("mobile-drawer");
  const drawerOverlay = document.getElementById("drawer-overlay");
  const drawerClose = document.querySelector(".drawer-close");

  const openDrawer = () => {
    drawer?.classList.add("open");
    drawerOverlay?.classList.add("open");
    document.body.style.overflow = "hidden";
  };
  const closeDrawer = () => {
    drawer?.classList.remove("open");
    drawerOverlay?.classList.remove("open");
    document.body.style.overflow = "";
  };

  hamburger?.addEventListener("click", openDrawer);
  drawerClose?.addEventListener("click", closeDrawer);
  drawerOverlay?.addEventListener("click", closeDrawer);

  document.querySelectorAll(".drawer-toggle").forEach((toggle) => {
    toggle.addEventListener("click", function (e) {
      e.preventDefault();
      const sub = this.nextElementSibling;
      sub?.classList.toggle("show");
      const icon = this.querySelector(".toggle-icon");
      if (icon)
        icon.style.transform = sub?.classList.contains("show")
          ? "rotate(180deg)"
          : "";
    });
  });

  // ──────────────────────────────────────────────────────────────────────────
  // 5. SCROLL REVEAL (Intersection Observer)
  // ──────────────────────────────────────────────────────────────────────────
  const revealEls = document.querySelectorAll(
    ".reveal, .reveal-left, .reveal-right",
  );
  if (revealEls.length) {
    const revealObs = new IntersectionObserver(
      (entries, obs) => {
        entries.forEach((entry) => {
          if (entry.isIntersecting) {
            entry.target.classList.add("active");
            obs.unobserve(entry.target);
          }
        });
      },
      { threshold: 0.1, rootMargin: "0px 0px -40px 0px" },
    );
    revealEls.forEach((el) => revealObs.observe(el));
  }

  // ──────────────────────────────────────────────────────────────────────────
  // 6. STAGGERED CARD ENTRANCE
  // ──────────────────────────────────────────────────────────────────────────
  const staggerContainers = document.querySelectorAll(
    ".quick-grid, .arrivals-grid, .resources-grid, .resources-grid-v2, .linkages-grid, .holdings-grid, .stats-grid",
  );
  staggerContainers.forEach((container) => {
    const children = container.querySelectorAll(":scope > *");
    children.forEach((child) => child.classList.add("stagger-card", "reveal"));

    const obs = new IntersectionObserver(
      (entries, observer) => {
        entries.forEach((entry) => {
          if (entry.isIntersecting) {
            const cards = entry.target.querySelectorAll(".stagger-card");
            cards.forEach((card, i) => {
              setTimeout(() => card.classList.add("active"), i * 100);
            });
            observer.unobserve(entry.target);
          }
        });
      },
      { threshold: 0.08 },
    );
    obs.observe(container);
  });

  // ──────────────────────────────────────────────────────────────────────────
  // 7. COUNTER ANIMATION
  // ──────────────────────────────────────────────────────────────────────────
  function animateCounter(el, target, suffix = "") {
    let current = 0;
    const duration = 1600;
    const start = performance.now();
    const step = (now) => {
      const elapsed = now - start;
      const progress = Math.min(elapsed / duration, 1);
      const eased = 1 - Math.pow(1 - progress, 3); // ease out cubic
      current = Math.floor(eased * target);
      el.textContent = current.toLocaleString() + suffix;
      if (progress < 1) requestAnimationFrame(step);
    };
    requestAnimationFrame(step);
  }

  const statsSection = document.querySelector(".stats-section");
  if (statsSection) {
    let counted = false;
    new IntersectionObserver(
      (entries) => {
        if (entries[0].isIntersecting && !counted) {
          counted = true;
          document.querySelectorAll(".stat-num[data-target]").forEach((el) => {
            animateCounter(
              el,
              parseInt(el.dataset.target, 10),
              el.dataset.suffix || "",
            );
          });
        }
      },
      { threshold: 0.35 },
    ).observe(statsSection);
  }

  // ──────────────────────────────────────────────────────────────────────────
  // 8. ANIMATED PROGRESS BARS
  // ──────────────────────────────────────────────────────────────────────────
  const progressSection = document.querySelector(".progress-stats");
  if (progressSection) {
    const obs = new IntersectionObserver(
      (entries) => {
        if (entries[0].isIntersecting) {
          document
            .querySelectorAll(".progress-fill[data-target-width]")
            .forEach((fill) => {
              fill.style.setProperty(
                "--target-width",
                fill.dataset.targetWidth,
              );
              setTimeout(() => fill.classList.add("animate"), 200);
            });
          obs.disconnect();
        }
      },
      { threshold: 0.25 },
    );
    obs.observe(progressSection);
  }

  // ──────────────────────────────────────────────────────────────────────────
  // 9. TYPEWRITER — Hero Heading
  // ──────────────────────────────────────────────────────────────────────────
  const heroH1 = document.querySelector(".hero h1");
  if (heroH1) {
    const originalText = heroH1.innerHTML;
    // Only run on homepage
    const plainText = heroH1.textContent.trim();
    heroH1.innerHTML = "";
    const cursor = document.createElement("span");
    cursor.className = "typewriter-cursor";
    heroH1.appendChild(cursor);

    let charIndex = 0;
    const textNode = document.createTextNode("");
    heroH1.insertBefore(textNode, cursor);

    // Reconstruct with em tag preserved — simple char-by-char
    const rawChars = plainText.split("");

    function typeNextChar() {
      if (charIndex < rawChars.length) {
        textNode.textContent += rawChars[charIndex];
        charIndex++;
        setTimeout(typeNextChar, charIndex < 8 ? 60 : 55);
      } else {
        // Remove cursor after done, add em styling back
        setTimeout(() => {
          heroH1.innerHTML = originalText;
        }, 800);
      }
    }
    setTimeout(typeNextChar, 600);
  }

  // ──────────────────────────────────────────────────────────────────────────
  // 10. SEARCH TYPEWRITER PLACEHOLDER
  // ──────────────────────────────────────────────────────────────────────────
  const searchInput = document.getElementById("search-input");
  if (searchInput) {
    const phrases = [
      "Search for e-books...",
      "Search for theses & dissertations...",
      "Search for video tutorials...",
      "Search for Filipiniana collections...",
      "Search for campus modules...",
    ];
    let pi = 0,
      ci = 0,
      deleting = false;
    function type() {
      const cur = phrases[pi];
      searchInput.setAttribute(
        "placeholder",
        deleting ? cur.substring(0, ci - 1) : cur.substring(0, ci + 1),
      );
      deleting ? ci-- : ci++;
      let speed = deleting ? 42 : 90;
      if (!deleting && ci === cur.length) {
        speed = 2200;
        deleting = true;
      } else if (deleting && ci === 0) {
        deleting = false;
        pi = (pi + 1) % phrases.length;
        speed = 420;
      }
      setTimeout(type, speed);
    }
    setTimeout(type, 1000);
  }

  // ──────────────────────────────────────────────────────────────────────────
  // 11. FLOATING PARTICLES — Hero Canvas
  // ──────────────────────────────────────────────────────────────────────────
  const hero = document.querySelector(".hero");
  if (hero) {
    let canvas = document.getElementById("particles-canvas");
    if (!canvas) {
      canvas = document.createElement("canvas");
      canvas.id = "particles-canvas";
      canvas.style.cssText =
        "position:absolute;inset:0;z-index:3;pointer-events:none;";
      hero.appendChild(canvas);
    }
    const ctx = canvas.getContext("2d");

    function resizeCanvas() {
      canvas.width = hero.offsetWidth;
      canvas.height = hero.offsetHeight;
    }
    resizeCanvas();
    window.addEventListener("resize", resizeCanvas, { passive: true });

    const SYMBOLS = ["✦", "◆", "▪", "●", "✧", "◇"];
    const particles = Array.from({ length: 38 }, () => ({
      x: Math.random() * canvas.width,
      y: Math.random() * canvas.height,
      size: Math.random() * 3 + 1,
      symbol: SYMBOLS[Math.floor(Math.random() * SYMBOLS.length)],
      speed: Math.random() * 0.4 + 0.15,
      drift: (Math.random() - 0.5) * 0.3,
      opacity: Math.random() * 0.18 + 0.04,
      twinkleSpeed: Math.random() * 0.02 + 0.006,
      twinklePhase: Math.random() * Math.PI * 2,
    }));

    let animFrame;
    function drawParticles() {
      ctx.clearRect(0, 0, canvas.width, canvas.height);
      const t = Date.now() * 0.001;
      particles.forEach((p) => {
        const twinkle = Math.sin(t * p.twinkleSpeed * 60 + p.twinklePhase);
        const alpha = p.opacity + twinkle * 0.04;
        ctx.globalAlpha = Math.max(0.02, alpha);
        ctx.fillStyle =
          Math.random() > 0.95 ? "#ffb71b" : "rgba(255,255,255,0.8)";
        ctx.font = `${p.size * 6}px serif`;
        ctx.fillText(p.symbol, p.x, p.y);

        p.y -= p.speed;
        p.x += p.drift;
        if (p.y < -20) {
          p.y = canvas.height + 10;
          p.x = Math.random() * canvas.width;
        }
        if (p.x < -20) p.x = canvas.width + 10;
        if (p.x > canvas.width + 20) p.x = -10;
      });
      ctx.globalAlpha = 1;
      animFrame = requestAnimationFrame(drawParticles);
    }

    // Only animate when hero is visible
    const heroObs = new IntersectionObserver((entries) => {
      if (entries[0].isIntersecting) {
        if (!animFrame) drawParticles();
      } else {
        cancelAnimationFrame(animFrame);
        animFrame = null;
      }
    });
    heroObs.observe(hero);
    drawParticles();
  }

  // ──────────────────────────────────────────────────────────────────────────
  // 12. CURSOR SPOTLIGHT — Hero
  // ──────────────────────────────────────────────────────────────────────────
  const heroSection = document.querySelector(".hero");
  if (heroSection) {
    let spotlight = heroSection.querySelector(".cursor-spotlight");
    if (!spotlight) {
      spotlight = document.createElement("div");
      spotlight.className = "cursor-spotlight";
      heroSection.appendChild(spotlight);
    }
    let mouseX = -999,
      mouseY = -999;
    let spotX = -999,
      spotY = -999;
    let rafSpot;

    heroSection.addEventListener("mousemove", (e) => {
      const rect = heroSection.getBoundingClientRect();
      mouseX = e.clientX - rect.left;
      mouseY = e.clientY - rect.top;
      spotlight.style.opacity = "1";
    });
    heroSection.addEventListener("mouseleave", () => {
      spotlight.style.opacity = "0";
    });

    function animateSpotlight() {
      // Smooth follow
      spotX += (mouseX - spotX) * 0.1;
      spotY += (mouseY - spotY) * 0.1;
      spotlight.style.left = spotX + "px";
      spotlight.style.top = spotY + "px";
      rafSpot = requestAnimationFrame(animateSpotlight);
    }
    animateSpotlight();
  }

  // ──────────────────────────────────────────────────────────────────────────
  // 13. PARALLAX HERO BACKGROUND
  // ──────────────────────────────────────────────────────────────────────────
  const heroEl = document.querySelector(".hero");
  if (heroEl) {
    window.addEventListener(
      "scroll",
      () => {
        const scrolled = window.scrollY;
        const rate = scrolled * 0.35;
        heroEl.style.backgroundPositionY = `calc(50% + ${rate}px)`;
      },
      { passive: true },
    );
  }

  // ──────────────────────────────────────────────────────────────────────────
  // 14. PARALLAX — Inner hero pages
  // ──────────────────────────────────────────────────────────────────────────
  const innerHero = document.querySelector(".inner-hero");
  if (innerHero) {
    window.addEventListener(
      "scroll",
      () => {
        innerHero.style.backgroundPositionY = `calc(50% + ${window.scrollY * 0.3}px)`;
      },
      { passive: true },
    );
  }

  // ──────────────────────────────────────────────────────────────────────────
  // 15. 3D TILT CARDS
  // ──────────────────────────────────────────────────────────────────────────
  function initTiltCards(selector, strength = 12) {
    document.querySelectorAll(selector).forEach((card) => {
      card.addEventListener("mousemove", (e) => {
        const rect = card.getBoundingClientRect();
        const cx = rect.left + rect.width / 2;
        const cy = rect.top + rect.height / 2;
        const dx = (e.clientX - cx) / (rect.width / 2);
        const dy = (e.clientY - cy) / (rect.height / 2);
        card.style.transform = `perspective(700px) rotateY(${dx * strength}deg) rotateX(${-dy * strength}deg) translateZ(8px)`;
      });
      card.addEventListener("mouseleave", () => {
        card.style.transform =
          "perspective(700px) rotateY(0deg) rotateX(0deg) translateZ(0px)";
        card.style.transition = "transform 0.5s ease";
        setTimeout(() => (card.style.transition = ""), 500);
      });
      card.addEventListener("mouseenter", () => {
        card.style.transition = "box-shadow 0.3s ease";
      });
    });
  }
  initTiltCards(".q-card", 10);
  initTiltCards(".vgmo-card", 6);
  initTiltCards(".resource-card", 7);

  // ──────────────────────────────────────────────────────────────────────────
  // 16. MAGNETIC BUTTONS
  // ──────────────────────────────────────────────────────────────────────────
  function initMagneticBtns(selector) {
    document.querySelectorAll(selector).forEach((btn) => {
      btn.addEventListener("mousemove", (e) => {
        const rect = btn.getBoundingClientRect();
        const cx = rect.left + rect.width / 2;
        const cy = rect.top + rect.height / 2;
        const dx = (e.clientX - cx) * 0.25;
        const dy = (e.clientY - cy) * 0.25;
        btn.style.transform = `translate(${dx}px, ${dy}px)`;
      });
      btn.addEventListener("mouseleave", () => {
        btn.style.transform = "translate(0,0)";
        btn.style.transition = "transform 0.4s cubic-bezier(0.34,1.56,0.64,1)";
        setTimeout(() => (btn.style.transition = ""), 400);
      });
    });
  }
  initMagneticBtns(".btn-gold, .btn-primary, .btn-login");

  // ──────────────────────────────────────────────────────────────────────────
  // 17. SKELETON → REAL CONTENT
  // ──────────────────────────────────────────────────────────────────────────
  const arrivalsContainer = document.getElementById("arrivals-container");
  if (arrivalsContainer) {
    const arrivals = [
      {
        type: "E-Book",
        title: "Fundamentals of Information Technology",
        date: "Apr 2, 2026",
        img: "https://images.unsplash.com/photo-1544947950-fa07a98d237f?auto=format&fit=crop&w=400&q=80",
      },
      {
        type: "Video",
        title: "Campus Orientation 2026",
        date: "Mar 28, 2026",
        img: "https://images.unsplash.com/photo-1522204523234-8729aa6e3d5f?auto=format&fit=crop&w=400&q=80",
      },
      {
        type: "Thesis",
        title: "System Architecture in Cloud Environments",
        date: "Mar 20, 2026",
        img: "https://images.unsplash.com/photo-1589829085413-56de8ae18c73?auto=format&fit=crop&w=400&q=80",
      },
      {
        type: "Module",
        title: "Web Development for Beginners",
        date: "Mar 15, 2026",
        img: "https://images.unsplash.com/photo-1555099962-4199c345e5dd?auto=format&fit=crop&w=400&q=80",
      },
    ];

    setTimeout(() => {
      arrivalsContainer.innerHTML = "";
      arrivals.forEach((item, idx) => {
        const card = document.createElement("div");
        card.className = "arrival-card reveal stagger-card";
        card.innerHTML = `
          <div class="arrival-img">
            <img src="${item.img}" alt="${item.title}" loading="lazy">
            <span class="arrival-badge">${item.type}</span>
          </div>
          <div class="arrival-body">
            <h4>${item.title}</h4>
            <p class="date"><i class="fa-regular fa-calendar"></i> ${item.date}</p>
            <button class="btn-ghost">View Details <i class="fa-solid fa-arrow-right"></i></button>
          </div>`;
        arrivalsContainer.appendChild(card);
        setTimeout(() => card.classList.add("active"), 100 + idx * 100);
      });
      // Re-apply tilt on new cards
      setTimeout(() => initTiltCards(".arrival-card", 7), 400);
    }, 1800);
  }

  // ──────────────────────────────────────────────────────────────────────────
  // 18. AVP VIDEO MODAL
  // ──────────────────────────────────────────────────────────────────────────
  const playThumb = document.getElementById("play-avp-thumb");
  const playBtn = document.getElementById("btn-watch-avp");
  const videoModal = document.getElementById("video-modal");
  const closeModalBtn = document.getElementById("close-modal");
  const avpIframe = document.getElementById("avp-iframe");
  const YT_LINK = "https://www.youtube.com/embed/ScMzIvxBSi4?autoplay=1";

  const openModal = () => {
    videoModal?.classList.add("show");
    avpIframe?.setAttribute("src", YT_LINK);
  };
  const closeModal = () => {
    videoModal?.classList.remove("show");
    avpIframe?.setAttribute("src", "");
  };

  playThumb?.addEventListener("click", openModal);
  playBtn?.addEventListener("click", openModal);
  closeModalBtn?.addEventListener("click", closeModal);
  videoModal?.addEventListener("click", (e) => {
    if (e.target === videoModal) closeModal();
  });
  document.addEventListener("keydown", (e) => {
    if (e.key === "Escape") closeModal();
  });

  // ──────────────────────────────────────────────────────────────────────────
  // 19. ACCORDION
  // ──────────────────────────────────────────────────────────────────────────
  document.querySelectorAll(".accordion-header").forEach((hdr) => {
    hdr.addEventListener("click", function () {
      const item = this.closest(".accordion-item");
      const isOpen = item.classList.contains("open");
      document
        .querySelectorAll(".accordion-item")
        .forEach((i) => i.classList.remove("open"));
      if (!isOpen) item.classList.add("open");
    });
  });

  // ──────────────────────────────────────────────────────────────────────────
  // 20. SERVICE TABS
  // ──────────────────────────────────────────────────────────────────────────
  document.querySelectorAll(".tab-btn").forEach((btn) => {
    btn.addEventListener("click", function () {
      const target = this.dataset.tab;
      document
        .querySelectorAll(".tab-btn")
        .forEach((b) => b.classList.remove("active"));
      document
        .querySelectorAll(".tab-panel")
        .forEach((p) => p.classList.remove("active"));
      this.classList.add("active");
      document.getElementById(target)?.classList.add("active");
    });
  });

  // ──────────────────────────────────────────────────────────────────────────
  // 21. LIBRARY HOURS STATUS
  // ──────────────────────────────────────────────────────────────────────────
  const statusEl = document.getElementById("library-status");
  const statusDot = document.getElementById("status-dot");
  if (statusEl) {
    const now = new Date();
    const day = now.getDay();
    const hour = now.getHours();
    const isOpen = day >= 1 && day <= 5 && hour >= 8 && hour < 17;
    statusEl.textContent = isOpen
      ? "Library is Currently Open"
      : "Library is Currently Closed";
    if (!isOpen) statusDot?.classList.add("closed");
  }

  // ──────────────────────────────────────────────────────────────────────────
  // 22. BACK TO TOP
  // ──────────────────────────────────────────────────────────────────────────
  const backToTop = document.getElementById("back-to-top");
  if (backToTop) {
    window.addEventListener(
      "scroll",
      () => {
        backToTop.classList.toggle("show", window.scrollY > 400);
      },
      { passive: true },
    );
    backToTop.addEventListener("click", () =>
      window.scrollTo({ top: 0, behavior: "smooth" }),
    );
  }

  // ──────────────────────────────────────────────────────────────────────────
  // 24. INJECT PROGRESS BARS SECTION (homepage only)
  // ──────────────────────────────────────────────────────────────────────────
  const avpSection = document.querySelector(".avp-section");
  if (avpSection && !document.querySelector(".progress-stats")) {
    const progressHTML = `
    <section class="progress-stats reveal">
      <div class="container">
        <div class="section-header">
          <span class="section-label">By The Numbers</span>
          <h2 class="section-title">Library <span>Collection</span> Overview</h2>
          <div class="section-divider"></div>
        </div>
        <div class="progress-grid">
          <div class="progress-item">
            <div class="progress-header">
              <span class="progress-label">Physical Books</span>
              <span class="progress-value">92%</span>
            </div>
            <div class="progress-track"><div class="progress-fill" data-target-width="92%"></div></div>
          </div>
          <div class="progress-item">
            <div class="progress-header">
              <span class="progress-label">Digital Resources</span>
              <span class="progress-value">78%</span>
            </div>
            <div class="progress-track"><div class="progress-fill" data-target-width="78%"></div></div>
          </div>
          <div class="progress-item">
            <div class="progress-header">
              <span class="progress-label">Theses & Dissertations</span>
              <span class="progress-value">65%</span>
            </div>
            <div class="progress-track"><div class="progress-fill" data-target-width="65%"></div></div>
          </div>
          <div class="progress-item">
            <div class="progress-header">
              <span class="progress-label">Filipiniana Collection</span>
              <span class="progress-value">48%</span>
            </div>
            <div class="progress-track"><div class="progress-fill" data-target-width="48%"></div></div>
          </div>
          <div class="progress-item">
            <div class="progress-header">
              <span class="progress-label">Online Databases</span>
              <span class="progress-value">100%</span>
            </div>
            <div class="progress-track"><div class="progress-fill" data-target-width="100%"></div></div>
          </div>
          <div class="progress-item">
            <div class="progress-header">
              <span class="progress-label">Multimedia Materials</span>
              <span class="progress-value">55%</span>
            </div>
            <div class="progress-track"><div class="progress-fill" data-target-width="55%"></div></div>
          </div>
        </div>
      </div>
    </section>`;
    avpSection.insertAdjacentHTML("afterend", progressHTML);

    // Now observe progress section
    const progressSection = document.querySelector(".progress-stats");
    if (progressSection) {
      const revealObs2 = new IntersectionObserver(
        (entries, obs) => {
          if (entries[0].isIntersecting) {
            progressSection.classList.add("active");
            obs.disconnect();
          }
        },
        { threshold: 0.1 },
      );
      revealObs2.observe(progressSection);

      const barObs = new IntersectionObserver(
        (entries) => {
          if (entries[0].isIntersecting) {
            document
              .querySelectorAll(".progress-fill[data-target-width]")
              .forEach((fill) => {
                fill.style.setProperty(
                  "--target-width",
                  fill.dataset.targetWidth,
                );
                setTimeout(() => fill.classList.add("animate"), 300);
              });
            barObs.disconnect();
          }
        },
        { threshold: 0.25 },
      );
      barObs.observe(progressSection);
    }
  }

  // ──────────────────────────────────────────────────────────────────────────
  // 25. SMOOTH WAVE SECTION TRANSITIONS (inject SVG waves)
  // ──────────────────────────────────────────────────────────────────────────
  function injectWave(targetEl, fillColor, position = "top") {
    const svgPath =
      position === "top"
        ? `<svg viewBox="0 0 1440 60" preserveAspectRatio="none" xmlns="http://www.w3.org/2000/svg"><path d="M0,30 C360,60 1080,0 1440,30 L1440,0 L0,0 Z" fill="${fillColor}"/></svg>`
        : `<svg viewBox="0 0 1440 60" preserveAspectRatio="none" xmlns="http://www.w3.org/2000/svg"><path d="M0,30 C360,0 1080,60 1440,30 L1440,60 L0,60 Z" fill="${fillColor}"/></svg>`;
    const div = document.createElement("div");
    div.className = "wave-divider";
    div.innerHTML = svgPath;
    if (position === "top") {
      targetEl.prepend(div);
    } else {
      targetEl.append(div);
    }
  }

  // Add waves to key section transitions
  const statsSection2 = document.querySelector(".stats-section");
  if (statsSection2) {
    // Wave at top of stats (from parchment above)
    injectWave(statsSection2, "#f5f6fa", "top");
  }

  const ctaSection = document.querySelector(".tutorial-cta");
  if (ctaSection) {
    injectWave(ctaSection, "#f5f6fa", "top");
    injectWave(ctaSection, "#f5f6fa", "bottom");
  }

  // ──────────────────────────────────────────────────────────────────────────
  // 26. SMOOTH HOVER on nav items (underline slide)
  // ──────────────────────────────────────────────────────────────────────────
  // Already handled in CSS

  // ──────────────────────────────────────────────────────────────────────────
  // 27. HOVER IMAGE REVEAL on arrival cards (cursor follow preview)
  // ──────────────────────────────────────────────────────────────────────────
  // Lightweight: card images scale on hover (handled in CSS)

  // ──────────────────────────────────────────────────────────────────────────
  // 28. INJECT MARQUEE on inner pages (non-homepage)
  // ──────────────────────────────────────────────────────────────────────────
  const innerHeroEl = document.querySelector(".inner-hero");
  if (innerHeroEl) {
    innerHeroEl.insertAdjacentHTML("afterend", buildMarquee());
  }
}); // end DOMContentLoaded
