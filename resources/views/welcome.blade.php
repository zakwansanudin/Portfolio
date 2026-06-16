<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Zakwan Sanudin · Full Stack Developer</title>
  <link rel="preconnect" href="https://fonts.googleapis.com" />
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
  <link href="https://fonts.googleapis.com/css2?family=Space+Grotesk:wght@300;400;500;600;700&family=DM+Mono:ital,wght@0,400;0,500;1,400&display=swap" rel="stylesheet" />
  <style>
    *, *::before, *::after { box-sizing: border-box; margin: 0; padding: 0; }

    :root {
      --bg:      #F9F7F2;
      --surface: #FFFFFF;
      --card:    #FFFFFF;
      --border:  #E8E4DE;
      --muted:   #8C867B;
      --text:    #1F1C18;
      --dim:     #5E5A52;
      --lime:    #3B8C3E;
      --lime-light: #E5F5E6;
      --lime-dk: #2D6E30;
      --shadow:  0 12px 30px -8px rgba(0,0,0,0.06);
    }

    html { scroll-behavior: smooth; }

    body {
      font-family: 'Space Grotesk', sans-serif;
      background: var(--bg);
      color: var(--text);
      -webkit-font-smoothing: antialiased;
    }

    /* ── NAV ── */
    nav {
      position: fixed; top: 0; left: 0; right: 0; z-index: 100;
      display: flex; align-items: center; justify-content: space-between;
      padding: 1.25rem 2.5rem;
      background: rgba(249,247,242,0.85);
      backdrop-filter: blur(16px);
      border-bottom: 1px solid var(--border);
    }

    .nav-brand {
      font-family: 'DM Mono', monospace;
      font-size: 0.9rem;
      color: var(--lime);
      letter-spacing: 0.05em;
      text-decoration: none;
      font-weight: 500;
    }

    .nav-links {
      display: flex; gap: 2rem; list-style: none;
    }
    .nav-links a {
      font-family: 'DM Mono', monospace;
      font-size: 0.75rem;
      color: var(--dim);
      text-decoration: none;
      letter-spacing: 0.08em;
      text-transform: uppercase;
      transition: color 0.2s;
    }
    .nav-links a:hover { color: var(--text); }

    .nav-cta {
      font-family: 'DM Mono', monospace;
      font-size: 0.75rem;
      color: white;
      background: var(--text);
      padding: 0.45rem 1.2rem;
      border-radius: 30px;
      text-decoration: none;
      font-weight: 500;
      letter-spacing: 0.05em;
      transition: background 0.2s, transform 0.1s;
    }
    .nav-cta:hover { background: #2f2a24; transform: scale(0.97); }

    /* ── HERO ── */
    .hero {
      min-height: 100vh;
      display: flex; flex-direction: column; justify-content: flex-end;
      padding: 8rem 2.5rem 4rem;
      border-bottom: 1px solid var(--border);
      position: relative;
      background: var(--bg);
    }

    .hero-eyebrow {
      font-family: 'DM Mono', monospace;
      font-size: 0.78rem;
      color: var(--lime);
      letter-spacing: 0.12em;
      text-transform: uppercase;
      margin-bottom: 1.8rem;
    }

    .hero-name {
      font-size: clamp(4rem, 13vw, 12rem);
      font-weight: 700;
      line-height: 0.9;
      letter-spacing: -0.03em;
      color: var(--text);
    }

    .hero-name .cursor {
      display: inline-block;
      width: 0.06em;
      height: 0.9em;
      background: var(--lime);
      margin-left: 0.05em;
      vertical-align: middle;
      animation: blink 1s step-end infinite;
    }
    @keyframes blink { 50% { opacity: 0; } }

    .hero-sub-row {
      display: flex;
      align-items: flex-end;
      justify-content: space-between;
      gap: 2rem;
      margin-top: 3rem;
      flex-wrap: wrap;
    }

    .hero-desc {
      max-width: 440px;
      font-size: 1.05rem;
      color: var(--dim);
      line-height: 1.7;
      font-weight: 400;
    }

    .hero-stack {
      display: flex; gap: 0.5rem; flex-wrap: wrap; justify-content: flex-end;
    }

    .tag {
      font-family: 'DM Mono', monospace;
      font-size: 0.7rem;
      letter-spacing: 0.06em;
      color: var(--dim);
      background: var(--surface);
      border: 1px solid var(--border);
      padding: 0.3rem 0.9rem;
      border-radius: 30px;
      transition: all 0.2s;
      box-shadow: 0 2px 4px rgba(0,0,0,0.02);
    }
    .tag:hover { color: var(--lime); border-color: var(--lime); background: var(--lime-light); }

    /* subtle dot grid */
    .hero::before {
      content: '';
      position: absolute; inset: 0; pointer-events: none;
      background-image: radial-gradient(var(--border) 1px, transparent 1px);
      background-size: 32px 32px;
      opacity: 0.5;
    }

    /* ── SECTION BASE ── */
    section { padding: 6rem 2.5rem; border-bottom: 1px solid var(--border); background: var(--bg); }

    .section-label {
      font-family: 'DM Mono', monospace;
      font-size: 0.72rem;
      letter-spacing: 0.14em;
      color: var(--muted);
      text-transform: uppercase;
      margin-bottom: 3.5rem;
      display: flex; align-items: center; gap: 1rem;
    }
    .section-label::after {
      content: '';
      flex: 1;
      height: 1px;
      background: var(--border);
    }

    /* ── ABOUT ── */
    .about-grid {
      display: grid;
      grid-template-columns: 1fr 1fr;
      gap: 5rem;
      align-items: start;
    }

    .about-headline {
      font-size: clamp(2rem, 4vw, 3.2rem);
      font-weight: 600;
      line-height: 1.2;
      letter-spacing: -0.02em;
    }

    .about-headline em {
      font-style: normal;
      color: var(--lime);
      background: var(--lime-light);
      padding: 0 0.15em;
    }

    .about-body {
      color: var(--dim);
      font-size: 1rem;
      line-height: 1.8;
      margin-top: 1.5rem;
    }

    .skills-grid {
      display: grid;
      grid-template-columns: 1fr 1fr;
      gap: 1px;
      background: var(--border);
      border: 1px solid var(--border);
      border-radius: 12px;
      overflow: hidden;
      box-shadow: var(--shadow);
    }

    .skill-cell {
      background: var(--surface);
      padding: 1.5rem 1.5rem 1.8rem;
      display: flex; flex-direction: column; gap: 0.3rem;
      transition: background 0.2s;
    }
    .skill-cell:hover { background: #FCFBF9; }

    .skill-cell-label {
      font-family: 'DM Mono', monospace;
      font-size: 0.62rem;
      letter-spacing: 0.1em;
      color: var(--lime);
      text-transform: uppercase;
    }

    .skill-cell-name {
      font-size: 1.05rem;
      font-weight: 600;
      color: var(--text);
    }

    .skill-bar {
      height: 3px;
      background: var(--border);
      border-radius: 4px;
      margin-top: 0.6rem;
      overflow: hidden;
    }
    .skill-bar-fill {
      height: 100%;
      background: var(--lime);
      border-radius: 4px;
    }

    /* ── PROJECTS ── */
    .projects-list { display: flex; flex-direction: column; gap: 0; }

    .project-row {
      display: grid;
      grid-template-columns: 3.5rem 1fr auto;
      gap: 2rem;
      align-items: start;
      padding: 2.5rem 0;
      border-bottom: 1px solid var(--border);
      text-decoration: none;
      color: inherit;
      transition: background 0.2s;
      cursor: pointer;
      border-radius: 12px;
      padding-left: 1.2rem;
      padding-right: 1.2rem;
      margin: 0 -1.2rem;
    }
    .project-row:last-child { border-bottom: none; }

    .project-row:hover { background: var(--surface); box-shadow: var(--shadow); }
    .project-row:hover .project-num { color: var(--lime); }
    .project-row:hover .project-arrow { transform: translate(4px, -4px); color: var(--lime); }
    .project-row:hover .project-title { color: var(--lime); }

    .project-num {
      font-family: 'DM Mono', monospace;
      font-size: 0.78rem;
      color: var(--muted);
      padding-top: 0.35rem;
      transition: color 0.2s;
    }

    .project-title {
      font-size: 1.6rem;
      font-weight: 600;
      letter-spacing: -0.02em;
      transition: color 0.2s;
      line-height: 1.2;
    }

    .project-desc {
      color: var(--dim);
      font-size: 0.9rem;
      line-height: 1.6;
      margin-top: 0.5rem;
      max-width: 520px;
    }

    .project-tags {
      display: flex; gap: 0.5rem; flex-wrap: wrap; margin-top: 1rem;
    }

    .project-arrow {
      font-size: 1.4rem;
      color: var(--muted);
      transition: all 0.2s;
      padding-top: 0.2rem;
    }

    /* ── CONTACT ── */
    .contact-split {
      display: grid;
      grid-template-columns: 1fr 1fr;
      gap: 5rem;
      align-items: center;
    }

    .contact-headline {
      font-size: clamp(2.4rem, 5vw, 4rem);
      font-weight: 700;
      line-height: 1.1;
      letter-spacing: -0.03em;
    }

    .contact-headline .lime { color: var(--lime); background: var(--lime-light); padding: 0 0.1em; }

    .contact-links { display: flex; flex-direction: column; gap: 1rem; }

    .contact-link {
      display: flex; align-items: center; justify-content: space-between;
      padding: 1.2rem 1.8rem;
      background: var(--surface);
      border: 1px solid var(--border);
      border-radius: 14px;
      text-decoration: none;
      color: var(--text);
      transition: all 0.2s;
      box-shadow: 0 2px 6px rgba(0,0,0,0.02);
    }
    .contact-link:hover {
      border-color: var(--lime);
      background: #FCFBF9;
      box-shadow: var(--shadow);
      transform: translateY(-2px);
    }
    .contact-link:hover .link-arrow { color: var(--lime); transform: translate(3px,-3px); }

    .link-left { display: flex; flex-direction: column; gap: 0.2rem; }
    .link-platform {
      font-family: 'DM Mono', monospace;
      font-size: 0.65rem;
      letter-spacing: 0.1em;
      color: var(--lime);
      text-transform: uppercase;
    }
    .link-value { font-size: 1rem; font-weight: 500; }

    .link-arrow {
      font-size: 1.1rem;
      color: var(--muted);
      transition: all 0.2s;
    }

    /* ── FOOTER ── */
    footer {
      padding: 2rem 2.5rem;
      display: flex; align-items: center; justify-content: space-between;
      flex-wrap: wrap; gap: 1rem;
      background: var(--bg);
      border-top: 1px solid var(--border);
    }

    .footer-copy {
      font-family: 'DM Mono', monospace;
      font-size: 0.72rem;
      color: var(--muted);
      letter-spacing: 0.05em;
    }

    .footer-back {
      font-family: 'DM Mono', monospace;
      font-size: 0.72rem;
      color: var(--muted);
      text-decoration: none;
      letter-spacing: 0.08em;
      text-transform: uppercase;
      transition: color 0.2s;
    }
    .footer-back:hover { color: var(--lime); }

    /* ── MOBILE ── */
    @media (max-width: 768px) {
      nav { padding: 1rem 1.25rem; }
      .nav-links { display: none; }

      .hero { padding: 7rem 1.25rem 3rem; }
      .hero-sub-row { flex-direction: column; }
      .hero-stack { justify-content: flex-start; }

      section { padding: 4rem 1.25rem; }

      .about-grid { grid-template-columns: 1fr; gap: 3rem; }
      .skills-grid { grid-template-columns: 1fr; }

      .project-row { grid-template-columns: 2.5rem 1fr; padding: 1.8rem 0.8rem; margin: 0; }
      .project-arrow { display: none; }

      .contact-split { grid-template-columns: 1fr; gap: 3rem; }

      footer { padding: 1.5rem 1.25rem; }
    }

    @media (prefers-reduced-motion: reduce) {
      .hero-name .cursor { animation: none; }
    }
  </style>
</head>
<body>

<!-- NAV -->
<nav>
  <a class="nav-brand" href="#">ZS.dev</a>
  <ul class="nav-links">
    <li><a href="#about">About</a></li>
    <li><a href="#projects">Work</a></li>
    <li><a href="#contact">Contact</a></li>
  </ul>
  <a class="nav-cta" href="#contact">Hire me</a>
</nav>

<!-- HERO -->
<section class="hero" id="home">
  <div class="hero-eyebrow">// Full Stack Developer · Malaysia</div>
  <h1 class="hero-name">Zakwan<br>Sanudin<span class="cursor"></span></h1>
  <div class="hero-sub-row">
    <p class="hero-desc">
      I build robust, scalable web applications — from database architecture to polished interfaces. Laravel, ASP.NET Core, and everything in between.
    </p>
    <div class="hero-stack">
      <span class="tag">Laravel</span>
      <span class="tag">ASP.NET Core</span>
      <span class="tag">PHP</span>
      <span class="tag">JavaScript</span>
      <span class="tag">MySQL</span>
      <span class="tag">React</span>
    </div>
  </div>
</section>

<!-- ABOUT -->
<section id="about">
  <div class="section-label">01 · About</div>
  <div class="about-grid">
    <div>
      <h2 class="about-headline">
        I turn<br>complex problems<br>into <em>elegant code.</em>
      </h2>
      <p class="about-body">
        Passionate about full-stack development with a strong focus on clean architecture and developer experience. I specialise in Laravel and ASP.NET Core for backend systems, and build responsive, human-centered interfaces on the frontend.<br><br>
        Currently exploring cloud-native patterns and microservices architecture. I believe that great software is invisible — it just works, reliably and fast.
      </p>
    </div>
    <div class="skills-grid">
      <div class="skill-cell">
        <span class="skill-cell-label">Backend</span>
        <span class="skill-cell-name">Laravel</span>
        <div class="skill-bar"><div class="skill-bar-fill" style="width:92%"></div></div>
      </div>
      <div class="skill-cell">
        <span class="skill-cell-label">Backend</span>
        <span class="skill-cell-name">ASP.NET Core</span>
        <div class="skill-bar"><div class="skill-bar-fill" style="width:80%"></div></div>
      </div>
      <div class="skill-cell">
        <span class="skill-cell-label">Language</span>
        <span class="skill-cell-name">PHP</span>
        <div class="skill-bar"><div class="skill-bar-fill" style="width:90%"></div></div>
      </div>
      <div class="skill-cell">
        <span class="skill-cell-label">Language</span>
        <span class="skill-cell-name">JavaScript</span>
        <div class="skill-bar"><div class="skill-bar-fill" style="width:75%"></div></div>
      </div>
      <div class="skill-cell">
        <span class="skill-cell-label">Database</span>
        <span class="skill-cell-name">MySQL</span>
        <div class="skill-bar"><div class="skill-bar-fill" style="width:85%"></div></div>
      </div>
      <div class="skill-cell">
        <span class="skill-cell-label">Frontend</span>
        <span class="skill-cell-name">React · Tailwind</span>
        <div class="skill-bar"><div class="skill-bar-fill" style="width:70%"></div></div>
      </div>
    </div>
  </div>
</section>

<!-- PROJECTS -->
<section id="projects">
  <div class="section-label">02 · Selected Work</div>
  <div class="projects-list">

    <a class="project-row" href="https://kampungonline.my" target="_blank" rel="noopener">
      <span class="project-num">01</span>
      <div class="project-info">
        <div class="project-title">Kampung Online</div>
        <p class="project-desc">
          A digital community platform with user management, announcement broadcasting, and real-time engagement features for the KampungOnline network.
        </p>
        <div class="project-tags">
          <span class="tag">Laravel</span>
          <span class="tag">Bootstrap</span>
          <span class="tag">MySQL</span>
        </div>
      </div>
      <span class="project-arrow">↗</span>
    </a>

    <a class="project-row" href="https://epdk.eptrs.my/login" target="_blank" rel="noopener">
      <span class="project-num">02</span>
      <div class="project-info">
        <div class="project-title">ePDK</div>
        <p class="project-desc">
          Student progress recording system for Program Didik Kasih, deployed across Selangor primary schools to track academic development and generate performance reports.
        </p>
        <div class="project-tags">
          <span class="tag">Laravel</span>
          <span class="tag">TailwindCSS</span>
          <span class="tag">MySQL</span>
        </div>
      </div>
      <span class="project-arrow">↗</span>
    </a>

    <a class="project-row" href="#" target="_blank" rel="noopener">
      <span class="project-num">03</span>
      <div class="project-info">
        <div class="project-title">E-Learning Platform</div>
        <p class="project-desc">
          Full-featured LMS with video courses, interactive quizzes, progress tracking, and instructor dashboards — built on a Laravel backend with a React frontend.
        </p>
        <div class="project-tags">
          <span class="tag">Laravel</span>
          <span class="tag">React</span>
          <span class="tag">MySQL</span>
        </div>
      </div>
      <span class="project-arrow">↗</span>
    </a>

  </div>
</section>

<!-- CONTACT -->
<section id="contact">
  <div class="section-label">03 · Contact</div>
  <div class="contact-split">
    <div>
      <h2 class="contact-headline">
        Got a<br>project?<br><span class="lime">Let's talk.</span>
      </h2>
    </div>
    <div class="contact-links">
      <a class="contact-link" href="mailto:zakwansanudin02@gmail.com">
        <div class="link-left">
          <span class="link-platform">Email</span>
          <span class="link-value">zakwansanudin02@gmail.com</span>
        </div>
        <span class="link-arrow">↗</span>
      </a>
      <a class="contact-link" href="tel:+601133035718">
        <div class="link-left">
          <span class="link-platform">Phone</span>
          <span class="link-value">+60 11-3303 5718</span>
        </div>
        <span class="link-arrow">↗</span>
      </a>
      <a class="contact-link" href="https://github.com/zakwansanudin" target="_blank" rel="noopener">
        <div class="link-left">
          <span class="link-platform">GitHub</span>
          <span class="link-value">github.com/zakwansanudin</span>
        </div>
        <span class="link-arrow">↗</span>
      </a>
      <a class="contact-link" href="https://www.linkedin.com/in/zakwan-sanudin" target="_blank" rel="noopener">
        <div class="link-left">
          <span class="link-platform">LinkedIn</span>
          <span class="link-value">linkedin.com/in/zakwan-sanudin</span>
        </div>
        <span class="link-arrow">↗</span>
      </a>
      <a class="contact-link" href="#">
        <div class="link-left">
          <span class="link-platform">Resume</span>
          <span class="link-value">Download CV (.pdf)</span>
        </div>
        <span class="link-arrow">↓</span>
      </a>
    </div>
  </div>
</section>

<!-- FOOTER -->
<footer>
  <span class="footer-copy">© <span id="yr"></span> Zakwan Sanudin</span>
  <a class="footer-back" href="#home">Back to top ↑</a>
</footer>

<script>
  document.getElementById('yr').textContent = new Date().getFullYear();
</script>
</body>
</html>