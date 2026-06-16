<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Zakwan · Full Stack Developer</title>
  <link rel="preconnect" href="https://fonts.googleapis.com" />
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
  <link href="https://fonts.googleapis.com/css2?family=DM+Sans:opsz,wght@9..40,400;9..40,500;9..40,600;9..40,700&family=DM+Mono:wght@400;500&display=swap" rel="stylesheet" />
  <style>
    * { margin: 0; padding: 0; box-sizing: border-box; }

    :root {
      --bg:        #F5F3F0;
      --white:     #FFFFFF;
      --card:      #FFFFFF;
      --border:    #E8E2DA;
      --text:      #1C1814;
      --muted:     #7A736A;
      --accent:    #E35F3A;
      --accent-light: #F5E3DD;
      --shadow:    0 8px 30px rgba(0,0,0,0.06);
      --radius:    20px;
    }

    body {
      font-family: 'DM Sans', sans-serif;
      background: var(--bg);
      color: var(--text);
      display: flex;
      min-height: 100vh;
    }

    /* ─── SIDEBAR ─── */
    .sidebar {
      width: 280px;
      min-height: 100vh;
      background: var(--white);
      padding: 3rem 2rem 2.5rem;
      border-right: 1px solid var(--border);
      position: sticky;
      top: 0;
      height: 100vh;
      display: flex;
      flex-direction: column;
      justify-content: space-between;
      flex-shrink: 0;
    }

    .sidebar-brand {
      font-size: 1.4rem;
      font-weight: 700;
      letter-spacing: -0.03em;
    }
    .sidebar-brand span { color: var(--accent); }

    .sidebar-bio {
      font-size: 0.92rem;
      color: var(--muted);
      line-height: 1.6;
      margin: 1.2rem 0 2.5rem;
    }

    .sidebar-nav {
      display: flex;
      flex-direction: column;
      gap: 0.6rem;
    }
    .sidebar-nav a {
      font-weight: 500;
      color: var(--muted);
      text-decoration: none;
      padding: 0.6rem 1rem;
      border-radius: 12px;
      transition: 0.2s;
      font-size: 0.95rem;
    }
    .sidebar-nav a:hover,
    .sidebar-nav a.active {
      background: var(--accent-light);
      color: var(--accent);
    }

    .sidebar-social {
      display: flex;
      gap: 1.2rem;
      margin-top: 2rem;
    }
    .sidebar-social a {
      color: var(--muted);
      font-size: 1.3rem;
      transition: 0.2s;
    }
    .sidebar-social a:hover { color: var(--accent); }

    .sidebar-footer {
      font-size: 0.75rem;
      color: var(--muted);
      border-top: 1px solid var(--border);
      padding-top: 1.5rem;
      margin-top: 1rem;
    }

    /* ─── MAIN ─── */
    .main {
      flex: 1;
      padding: 3rem 3.5rem 3rem;
      overflow-y: auto;
    }

    /* ─── HERO (inside main) ─── */
    .hero-mini {
      padding: 2rem 0 3.5rem;
      border-bottom: 1px solid var(--border);
    }

    .hero-mini .badge {
      display: inline-block;
      background: var(--accent-light);
      color: var(--accent);
      font-size: 0.7rem;
      font-weight: 600;
      letter-spacing: 0.08em;
      text-transform: uppercase;
      padding: 0.3rem 1rem;
      border-radius: 30px;
      margin-bottom: 1.2rem;
    }

    .hero-mini h1 {
      font-size: clamp(2.8rem, 7vw, 4.8rem);
      font-weight: 700;
      line-height: 1.05;
      letter-spacing: -0.03em;
    }
    .hero-mini h1 .highlight { color: var(--accent); }

    .hero-mini p {
      font-size: 1.1rem;
      color: var(--muted);
      max-width: 500px;
      margin-top: 1rem;
      line-height: 1.6;
    }

    .hero-mini .tag-group {
      display: flex;
      flex-wrap: wrap;
      gap: 0.6rem;
      margin-top: 1.8rem;
    }
    .hero-mini .tag-group span {
      background: var(--white);
      border: 1px solid var(--border);
      padding: 0.3rem 1rem;
      border-radius: 30px;
      font-size: 0.78rem;
      font-weight: 500;
      color: var(--muted);
    }

    /* ─── SECTION TITLES ─── */
    .section-title {
      font-size: 1.6rem;
      font-weight: 600;
      letter-spacing: -0.02em;
      margin: 3.5rem 0 2rem;
      display: flex;
      align-items: center;
      gap: 0.8rem;
    }
    .section-title .num {
      font-family: 'DM Mono', monospace;
      font-size: 0.8rem;
      color: var(--accent);
      background: var(--accent-light);
      padding: 0.1rem 0.6rem;
      border-radius: 30px;
    }

    /* ─── ABOUT CARD ─── */
    .about-card {
      background: var(--white);
      padding: 2.5rem 2.8rem;
      border-radius: var(--radius);
      box-shadow: var(--shadow);
      border: 1px solid var(--border);
    }
    .about-card p {
      font-size: 1rem;
      line-height: 1.8;
      color: var(--muted);
      max-width: 700px;
    }
    .about-card .skill-list {
      display: flex;
      flex-wrap: wrap;
      gap: 0.5rem;
      margin-top: 1.5rem;
    }
    .about-card .skill-list span {
      background: var(--bg);
      padding: 0.4rem 1.2rem;
      border-radius: 30px;
      font-weight: 500;
      font-size: 0.85rem;
    }

    /* ─── PROJECT GRID ─── */
    .project-grid {
      display: grid;
      grid-template-columns: repeat(auto-fill, minmax(300px, 1fr));
      gap: 2rem;
      margin-top: 1.5rem;
    }

    .project-card {
      background: var(--white);
      border-radius: var(--radius);
      padding: 2rem 1.8rem 2rem;
      border: 1px solid var(--border);
      box-shadow: var(--shadow);
      transition: 0.25s;
      text-decoration: none;
      color: inherit;
      display: block;
    }
    .project-card:hover {
      transform: translateY(-6px);
      border-color: var(--accent);
      box-shadow: 0 16px 40px rgba(227, 95, 58, 0.08);
    }

    .project-card .emoji {
      font-size: 2.2rem;
      margin-bottom: 0.8rem;
      display: block;
    }
    .project-card h3 {
      font-size: 1.3rem;
      font-weight: 600;
      letter-spacing: -0.02em;
    }
    .project-card p {
      color: var(--muted);
      font-size: 0.9rem;
      line-height: 1.6;
      margin: 0.6rem 0 1.2rem;
    }
    .project-card .tags {
      display: flex;
      flex-wrap: wrap;
      gap: 0.4rem;
    }
    .project-card .tags span {
      font-size: 0.65rem;
      font-weight: 500;
      text-transform: uppercase;
      letter-spacing: 0.06em;
      background: var(--bg);
      padding: 0.2rem 0.8rem;
      border-radius: 30px;
      color: var(--muted);
    }

    .project-card .link-arrow {
      display: inline-block;
      margin-top: 1.2rem;
      font-weight: 600;
      color: var(--accent);
      transition: 0.2s;
    }
    .project-card:hover .link-arrow { transform: translateX(4px); }

    /* ─── CONTACT ─── */
    .contact-grid {
      display: grid;
      grid-template-columns: 1fr 1fr;
      gap: 2rem;
      margin-top: 1.5rem;
    }

    .contact-item {
      background: var(--white);
      padding: 1.6rem 2rem;
      border-radius: var(--radius);
      border: 1px solid var(--border);
      display: flex;
      align-items: center;
      gap: 1.2rem;
      text-decoration: none;
      color: var(--text);
      transition: 0.2s;
      box-shadow: var(--shadow);
    }
    .contact-item:hover {
      border-color: var(--accent);
      transform: translateY(-3px);
    }
    .contact-item .icon {
      font-size: 1.6rem;
      color: var(--accent);
      width: 2.4rem;
      text-align: center;
    }
    .contact-item .info { display: flex; flex-direction: column; }
    .contact-item .label {
      font-size: 0.65rem;
      text-transform: uppercase;
      letter-spacing: 0.08em;
      color: var(--muted);
    }
    .contact-item .value {
      font-weight: 500;
      font-size: 0.95rem;
    }

    /* ─── RESPONSIVE ─── */
    @media (max-width: 900px) {
      body { flex-direction: column; }
      .sidebar {
        width: 100%;
        min-height: auto;
        height: auto;
        position: relative;
        border-right: none;
        border-bottom: 1px solid var(--border);
        padding: 1.5rem 2rem;
        flex-direction: row;
        flex-wrap: wrap;
        align-items: center;
        gap: 1rem;
      }
      .sidebar-brand { font-size: 1.2rem; }
      .sidebar-bio { display: none; }
      .sidebar-nav {
        flex-direction: row;
        flex-wrap: wrap;
        gap: 0.3rem;
      }
      .sidebar-nav a { padding: 0.4rem 0.8rem; font-size: 0.85rem; }
      .sidebar-social { margin-top: 0; }
      .sidebar-footer { display: none; }
      .main { padding: 1.5rem 1.5rem 2rem; }
      .hero-mini { padding: 1rem 0 2rem; }
      .about-card { padding: 1.8rem; }
      .contact-grid { grid-template-columns: 1fr; }
    }

    @media (max-width: 550px) {
      .project-grid { grid-template-columns: 1fr; }
      .hero-mini h1 { font-size: 2.4rem; }
      .sidebar { padding: 1rem 1.2rem; }
      .sidebar-nav a { font-size: 0.75rem; padding: 0.3rem 0.6rem; }
    }
  </style>
</head>
<body>

<!-- ===== SIDEBAR ===== -->
<aside class="sidebar">
  <div>
    <div class="sidebar-brand">Zak<span>wan</span></div>
    <p class="sidebar-bio">Full Stack Developer · Malaysia<br>Laravel · ASP.NET Core · PHP</p>
    <nav class="sidebar-nav">
      <a href="#about" class="active">About</a>
      <a href="#projects">Projects</a>
      <a href="#contact">Contact</a>
    </nav>
  </div>

  <div>
    <div class="sidebar-social">
      <a href="https://github.com/zakwansanudin" target="_blank" aria-label="GitHub">🐙</a>
      <a href="https://www.linkedin.com/in/zakwan-sanudin" target="_blank" aria-label="LinkedIn">🔗</a>
      <a href="mailto:zakwansanudin02@gmail.com" aria-label="Email">✉️</a>
    </div>
    <div class="sidebar-footer">© 2026 · ZS</div>
  </div>
</aside>

<!-- ===== MAIN ===== -->
<main class="main">

  <!-- HERO -->
  <section class="hero-mini">
    <div class="badge">✦ available for freelance</div>
    <h1>Hi, I'm <span class="highlight">Zakwan</span></h1>
    <p>Full-stack developer crafting robust web apps with Laravel, ASP.NET Core, and a dash of creativity.</p>
    <div class="tag-group">
      <span>Laravel</span>
      <span>ASP.NET Core</span>
      <span>PHP</span>
      <span>JavaScript</span>
      <span>MySQL</span>
    </div>
  </section>

  <!-- ABOUT -->
  <section id="about">
    <div class="section-title"><span class="num">01</span> About</div>
    <div class="about-card">
      <p>
        I'm a passionate developer who loves turning complex problems into clean, maintainable code.
        With a strong focus on Laravel and ASP.NET Core, I build backend systems that are both powerful and developer‑friendly.
        On the frontend, I create interfaces that feel intuitive and human.
      </p>
      <p style="margin-top:1rem;">
        Currently diving deeper into cloud-native architecture and microservices. I believe the best software is the one that quietly does its job — fast, reliable, and scalable.
      </p>
      <div class="skill-list">
        <span>Laravel</span>
        <span>PHP</span>
        <span>ASP.NET Core</span>
        <span>MySQL</span>
        <span>React</span>
        <span>Tailwind</span>
        <span>Docker</span>
      </div>
    </div>
  </section>

  <!-- PROJECTS -->
  <section id="projects">
    <div class="section-title"><span class="num">02</span> Projects</div>

    <div class="project-grid">

      <a class="project-card" href="https://kampungonline.my" target="_blank" rel="noopener">
        <span class="emoji">🏡</span>
        <h3>Kampung Online</h3>
        <p>Digital community platform with user management, announcements, and real‑time engagement for KampungOnline.</p>
        <div class="tags">
          <span>Laravel</span>
          <span>Bootstrap</span>
          <span>MySQL</span>
        </div>
        <span class="link-arrow">View project →</span>
      </a>

      <a class="project-card" href="https://epdk.eptrs.my/login" target="_blank" rel="noopener">
        <span class="emoji">📚</span>
        <h3>ePDK</h3>
        <p>Student progress recording system for Program Didik Kasih, deployed in Selangor primary schools.</p>
        <div class="tags">
          <span>Laravel</span>
          <span>Tailwind</span>
          <span>MySQL</span>
        </div>
        <span class="link-arrow">View project →</span>
      </a>

      <a class="project-card" href="#" target="_blank" rel="noopener">
        <span class="emoji">🎓</span>
        <h3>E‑Learning Platform</h3>
        <p>Full LMS with video courses, quizzes, progress tracking — Laravel backend + React frontend.</p>
        <div class="tags">
          <span>Laravel</span>
          <span>React</span>
          <span>MySQL</span>
        </div>
        <span class="link-arrow">View project →</span>
      </a>

    </div>
  </section>

  <!-- CONTACT -->
  <section id="contact">
    <div class="section-title"><span class="num">03</span> Contact</div>

    <div class="contact-grid">
      <a class="contact-item" href="mailto:zakwansanudin02@gmail.com">
        <span class="icon">✉️</span>
        <div class="info">
          <span class="label">Email</span>
          <span class="value">zakwansanudin02@gmail.com</span>
        </div>
      </a>

      <a class="contact-item" href="tel:+601133035718">
        <span class="icon">📞</span>
        <div class="info">
          <span class="label">Phone</span>
          <span class="value">+60 11-3303 5718</span>
        </div>
      </a>

      <a class="contact-item" href="https://github.com/zakwansanudin" target="_blank" rel="noopener">
        <span class="icon">🐙</span>
        <div class="info">
          <span class="label">GitHub</span>
          <span class="value">github.com/zakwansanudin</span>
        </div>
      </a>

      <a class="contact-item" href="https://www.linkedin.com/in/zakwan-sanudin" target="_blank" rel="noopener">
        <span class="icon">🔗</span>
        <div class="info">
          <span class="label">LinkedIn</span>
          <span class="value">linkedin.com/in/zakwan-sanudin</span>
        </div>
      </a>

      <a class="contact-item" href="#" style="grid-column: 1 / -1; justify-content: center; gap: 0.8rem;">
        <span class="icon">📄</span>
        <div class="info">
          <span class="label">Resume</span>
          <span class="value">Download CV (PDF) ↓</span>
        </div>
      </a>
    </div>
  </section>

</main>

</body>
</html>