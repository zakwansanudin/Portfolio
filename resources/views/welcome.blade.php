<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Zakwan Sanudin · API-first dev</title>
  <link rel="preconnect" href="https://fonts.googleapis.com" />
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
  <link href="https://fonts.googleapis.com/css2?family=Space+Grotesk:wght@500;600;700&family=Inter:opsz,wght@14..32,400;14..32,500;14..32,600;14..32,700&family=JetBrains+Mono:ital,wght@0,400;0,500;0,600;1,400&display=swap" rel="stylesheet" />
  <style>
    * {
      margin: 0;
      padding: 0;
      box-sizing: border-box;
    }

    :root {
      --bg: #0B0D12;
      --surface: #14181F;
      --surface-2: #1E2530;
      --border: #2A3342;
      --ink: #ECEEF2;
      --muted: #8D99AE;
      --blue: #5F7FFF;
      --blue-tint: #1E2A4A;
      --green: #3DD68C;
      --green-tint: #1B3D33;
      --amber: #F5B85B;
      --amber-tint: #3D311D;
      --radius: 20px;
      --shadow: 0 20px 40px rgba(0,0,0,0.6);
    }

    body {
      font-family: 'Inter', sans-serif;
      background: var(--bg);
      color: var(--ink);
      -webkit-font-smoothing: antialiased;
      background-image: 
        radial-gradient(circle at 15% 20%, rgba(95, 127, 255, 0.04) 0%, transparent 40%),
        radial-gradient(circle at 85% 80%, rgba(61, 214, 140, 0.03) 0%, transparent 50%);
      min-height: 100vh;
    }

    a { color: inherit; text-decoration: none; }
    .mono { font-family: 'JetBrains Mono', monospace; }

    /* method + status chips */
    .method {
      font-family: 'JetBrains Mono', monospace;
      font-size: 0.7rem;
      font-weight: 600;
      padding: 0.15rem 0.6rem;
      border-radius: 100px;
      letter-spacing: 0.02em;
      background: var(--surface-2);
      color: var(--muted);
    }
    .method.get { background: var(--blue-tint); color: var(--blue); }
    .method.post { background: var(--green-tint); color: var(--green); }

    .status-chip {
      font-family: 'JetBrains Mono', monospace;
      font-size: 0.7rem;
      font-weight: 600;
      padding: 0.15rem 0.7rem;
      border-radius: 100px;
      display: inline-flex;
      align-items: center;
      gap: 0.3rem;
      background: var(--surface-2);
      color: var(--muted);
    }
    .status-chip.ok { background: var(--green-tint); color: var(--green); }
    .status-chip.build { background: var(--amber-tint); color: var(--amber); }
    .status-chip::before {
      content: '';
      width: 6px;
      height: 6px;
      border-radius: 50%;
      background: currentColor;
    }

    .route {
      font-family: 'JetBrains Mono', monospace;
      font-size: 0.8rem;
      color: var(--muted);
    }

    /* ── NAV ── */
    nav {
      position: sticky;
      top: 0;
      z-index: 100;
      display: flex;
      align-items: center;
      justify-content: space-between;
      padding: 0.8rem 2.5rem;
      background: rgba(11, 13, 18, 0.8);
      backdrop-filter: blur(12px);
      border-bottom: 1px solid var(--border);
    }
    .nav-brand {
      font-family: 'Space Grotesk', sans-serif;
      font-weight: 700;
      font-size: 1.1rem;
      letter-spacing: -0.02em;
    }
    .nav-brand span { color: var(--blue); }
    .nav-routes {
      display: flex;
      gap: 0.2rem;
      list-style: none;
    }
    .nav-routes a {
      display: flex;
      align-items: center;
      gap: 0.4rem;
      font-family: 'JetBrains Mono', monospace;
      font-size: 0.75rem;
      color: var(--muted);
      padding: 0.35rem 0.9rem;
      border-radius: 100px;
      transition: 0.15s;
      border: 1px solid transparent;
    }
    .nav-routes a:hover {
      color: var(--ink);
      background: var(--surface);
      border-color: var(--border);
    }
    .nav-cta {
      font-size: 0.8rem;
      font-weight: 600;
      background: var(--blue);
      color: white;
      padding: 0.45rem 1.3rem;
      border-radius: 100px;
      transition: 0.15s;
      border: none;
      cursor: pointer;
    }
    .nav-cta:hover { opacity: 0.85; transform: scale(0.97); }

    /* ── HERO ── */
    .hero {
      padding: 6rem 2.5rem 4rem;
      display: grid;
      grid-template-columns: 1.2fr 1fr;
      gap: 3.5rem;
      max-width: 1240px;
      margin: 0 auto;
      align-items: center;
    }
    .req-line {
      display: inline-flex;
      align-items: center;
      gap: 0.6rem;
      font-family: 'JetBrains Mono', monospace;
      font-size: 0.75rem;
      background: var(--surface);
      border: 1px solid var(--border);
      padding: 0.3rem 0.9rem;
      border-radius: 100px;
      color: var(--muted);
      margin-bottom: 1.6rem;
    }
    .hero-name {
      font-family: 'Space Grotesk', sans-serif;
      line-height: 1;
      letter-spacing: -0.03em;
      font-size: clamp(2.8rem, 6vw, 4.6rem);
      font-weight: 700;
    }
    .hero-name span {
      display: block;
      font-weight: 500;
      color: var(--muted);
    }
    .hero-tagline {
      font-size: 1rem;
      color: var(--muted);
      line-height: 1.7;
      margin-top: 1.4rem;
      max-width: 440px;
    }
    .hero-actions {
      display: flex;
      gap: 0.8rem;
      flex-wrap: wrap;
      margin-top: 2rem;
    }
    .btn-primary {
      background: var(--blue);
      color: white;
      font-weight: 600;
      font-size: 0.9rem;
      padding: 0.7rem 1.8rem;
      border-radius: 100px;
      transition: 0.15s;
      border: none;
      cursor: pointer;
    }
    .btn-primary:hover { opacity: 0.8; transform: translateY(-2px); }
    .btn-ghost {
      background: var(--surface);
      color: var(--ink);
      font-weight: 600;
      font-size: 0.9rem;
      padding: 0.7rem 1.8rem;
      border-radius: 100px;
      border: 1px solid var(--border);
      transition: 0.15s;
      cursor: pointer;
    }
    .btn-ghost:hover { border-color: var(--blue); transform: translateY(-2px); }

    /* response card */
    .response-card {
      background: var(--surface);
      border: 1px solid var(--border);
      border-radius: var(--radius);
      overflow: hidden;
      box-shadow: var(--shadow);
      transition: 0.2s;
    }
    .response-card:hover { border-color: var(--blue); }
    .response-card-head {
      display: flex;
      align-items: center;
      gap: 0.7rem;
      padding: 0.7rem 1.2rem;
      border-bottom: 1px solid var(--border);
      background: var(--surface-2);
    }
    .rc-dot {
      width: 10px;
      height: 10px;
      border-radius: 50%;
    }
    .rc-dot.r { background: #FF5F5F; }
    .rc-dot.y { background: var(--amber); }
    .rc-dot.g { background: var(--green); }
    .response-card-title {
      font-family: 'JetBrains Mono', monospace;
      font-size: 0.7rem;
      color: var(--muted);
      margin-left: 0.2rem;
    }
    .response-card-body {
      display: flex;
      gap: 1.4rem;
      padding: 1.4rem;
    }
    .profile-img {
      width: 100px;
      height: 100px;
      border-radius: 12px;
      object-fit: cover;
      border: 2px solid var(--border);
      flex-shrink: 0;
    }
    .kv-list {
      list-style: none;
      font-family: 'JetBrains Mono', monospace;
      font-size: 0.78rem;
      line-height: 2;
      flex: 1;
      min-width: 0;
    }
    .kv-list .k { color: var(--blue); }
    .kv-list .v { color: var(--ink); font-weight: 500; }
    .kv-list .v.accent { color: var(--green); }

    /* shared section */
    .section-wrap {
      max-width: 1240px;
      margin: 0 auto;
      padding: 4rem 2.5rem;
    }
    .section-panel {
      background: var(--surface);
      border-top: 1px solid var(--border);
      border-bottom: 1px solid var(--border);
    }
    .endpoint-header {
      display: flex;
      align-items: center;
      gap: 0.7rem;
      margin-bottom: 1rem;
    }
    .section-title {
      font-family: 'Space Grotesk', sans-serif;
      font-weight: 700;
      font-size: clamp(1.6rem, 3vw, 2.2rem);
      letter-spacing: -0.02em;
      margin-top: 0.5rem;
      margin-bottom: 2.5rem;
    }

    /* ABOUT */
    .about-grid {
      display: grid;
      grid-template-columns: 1.3fr 1fr;
      gap: 3rem;
      align-items: start;
    }
    .about-body {
      font-size: 1rem;
      color: #C5CEDB;
      line-height: 1.8;
    }
    .about-body p+p { margin-top: 1rem; }
    .about-body strong { color: var(--blue); font-weight: 600; }

    .fields-card {
      background: var(--bg);
      border: 1px solid var(--border);
      border-radius: 16px;
      padding: 1.3rem 1.2rem;
    }
    .fields-title {
      font-family: 'JetBrains Mono', monospace;
      font-size: 0.7rem;
      color: var(--muted);
      margin-bottom: 0.9rem;
    }
    .field-list {
      list-style: none;
      display: flex;
      flex-direction: column;
      gap: 0.35rem;
    }
    .field-list li {
      display: flex;
      align-items: center;
      justify-content: space-between;
      background: var(--surface);
      border: 1px solid var(--border);
      border-radius: 10px;
      padding: 0.5rem 0.9rem;
      transition: 0.15s;
    }
    .field-list li:hover { border-color: var(--blue); transform: translateX(4px); }
    .field-name { font-size: 0.85rem; font-weight: 600; }
    .field-type {
      font-family: 'JetBrains Mono', monospace;
      font-size: 0.65rem;
      color: var(--muted);
    }

    /* PROJECTS */
    .projects-grid {
      display: grid;
      grid-template-columns: repeat(3, 1fr);
      gap: 1.2rem;
    }
    .projects-grid.all-projects {
      margin-top: 1.5rem;
      padding-top: 1.8rem;
      border-top: 1px solid var(--border);
    }
    .endpoint-card {
      background: var(--bg);
      border: 1px solid var(--border);
      border-radius: 16px;
      padding: 1.4rem;
      transition: 0.2s;
      display: flex;
      flex-direction: column;
    }
    .endpoint-card:hover {
      transform: translateY(-6px);
      border-color: var(--blue);
      box-shadow: 0 16px 40px rgba(0,0,0,0.4);
    }
    .endpoint-card-top {
      display: flex;
      align-items: center;
      gap: 0.4rem;
      flex-wrap: wrap;
      margin-bottom: 0.9rem;
    }
    .endpoint-card-top .route { font-size: 0.7rem; }
    .endpoint-title {
      font-family: 'Space Grotesk', sans-serif;
      font-weight: 700;
      font-size: 1.1rem;
      letter-spacing: -0.01em;
      margin-bottom: 0.4rem;
    }
    .endpoint-desc {
      font-size: 0.85rem;
      color: var(--muted);
      line-height: 1.6;
      flex: 1;
    }
    .tag-row {
      display: flex;
      gap: 0.3rem;
      flex-wrap: wrap;
      margin-top: 1rem;
    }
    .tag {
      font-family: 'JetBrains Mono', monospace;
      font-size: 0.6rem;
      font-weight: 500;
      padding: 0.2rem 0.6rem;
      border-radius: 100px;
      background: var(--surface-2);
      color: var(--muted);
    }
    .endpoint-link {
      display: inline-flex;
      align-items: center;
      gap: 0.3rem;
      margin-top: 1.2rem;
      font-size: 0.8rem;
      font-weight: 600;
      color: var(--blue);
    }
    .endpoint-link.disabled { color: var(--muted); pointer-events: none; }

    .toggle-wrap {
      text-align: center;
      margin-top: 2rem;
    }
    .btn-toggle {
      font-family: 'JetBrains Mono', monospace;
      font-size: 0.8rem;
      font-weight: 500;
      color: var(--ink);
      background: var(--surface-2);
      border: 1px solid var(--border);
      padding: 0.6rem 1.6rem;
      border-radius: 100px;
      cursor: pointer;
      transition: 0.15s;
    }
    .btn-toggle:hover { border-color: var(--blue); transform: translateY(-2px); }
    .all-projects-container { display: none; }
    .all-projects-container.visible { display: block; }

    /* CONTACT */
    .contact-inner {
      display: grid;
      grid-template-columns: 1fr 1fr;
      gap: 3rem;
      align-items: start;
    }
    .contact-intro {
      font-family: 'Space Grotesk', sans-serif;
      font-size: clamp(1.5rem, 2.6vw, 2.1rem);
      font-weight: 700;
      line-height: 1.3;
      letter-spacing: -0.02em;
    }
    .contact-intro em { font-style: normal; color: var(--blue); }
    .contact-blurb {
      font-size: 0.95rem;
      color: var(--muted);
      line-height: 1.7;
      margin-top: 0.8rem;
    }
    .contact-cta-row {
      display: flex;
      gap: 0.7rem;
      flex-wrap: wrap;
      margin-top: 1.8rem;
    }

    .headers-block {
      background: var(--surface-2);
      border-radius: 16px;
      padding: 1.3rem 1.2rem;
      border: 1px solid var(--border);
    }
    .headers-title {
      font-family: 'JetBrains Mono', monospace;
      font-size: 0.7rem;
      color: var(--muted);
      margin-bottom: 0.8rem;
    }
    .header-row {
      display: flex;
      align-items: center;
      gap: 0.8rem;
      padding: 0.6rem 0.6rem;
      border-radius: 10px;
      transition: 0.1s;
      border-bottom: 1px solid var(--border);
    }
    .header-row:last-child { border-bottom: none; }
    .header-row:hover { background: rgba(255,255,255,0.03); }
    .header-key {
      font-family: 'JetBrains Mono', monospace;
      font-size: 0.7rem;
      color: var(--muted);
      min-width: 70px;
    }
    .header-val {
      font-family: 'JetBrains Mono', monospace;
      font-size: 0.8rem;
      color: var(--ink);
      font-weight: 500;
    }
    .header-arrow { margin-left: auto; color: var(--muted); }

    /* FOOTER */
    footer {
      padding: 1.6rem 2.5rem;
      display: flex;
      align-items: center;
      justify-content: space-between;
      max-width: 1240px;
      margin: 0 auto;
      flex-wrap: wrap;
      gap: 0.8rem;
      border-top: 1px solid var(--border);
    }
    .footer-text {
      font-family: 'JetBrains Mono', monospace;
      font-size: 0.75rem;
      color: var(--muted);
    }
    .footer-links {
      display: flex;
      gap: 0.3rem;
    }
    .footer-links a {
      font-family: 'JetBrains Mono', monospace;
      font-size: 0.75rem;
      color: var(--muted);
      padding: 0.2rem 0.7rem;
      border-radius: 100px;
      transition: 0.15s;
    }
    .footer-links a:hover { color: var(--ink); background: var(--surface-2); }

    @media (max-width: 900px) {
      nav { padding: 0.8rem 1.2rem; flex-wrap: wrap; }
      .nav-routes { display: none; }
      .hero { grid-template-columns: 1fr; padding: 5rem 1.2rem 2.5rem; gap: 2rem; }
      .response-card-body { flex-direction: column; align-items: center; }
      .section-wrap { padding: 2.5rem 1.2rem; }
      .about-grid { grid-template-columns: 1fr; gap: 1.8rem; }
      .projects-grid, .projects-grid.all-projects { grid-template-columns: 1fr; }
      .contact-inner { grid-template-columns: 1fr; gap: 1.8rem; }
      footer { padding: 1.2rem; flex-direction: column; align-items: center; }
    }
    @media (prefers-reduced-motion: reduce) { * { transition: none !important; } }
  </style>
</head>
<body>

<nav>
  <a class="nav-brand" href="#">zakwan<span>.</span>dev</a>
  <ul class="nav-routes">
    <li><a href="#about"><span class="method get">GET</span>/about</a></li>
    <li><a href="#projects"><span class="method get">GET</span>/projects</a></li>
    <li><a href="#contact"><span class="method post">POST</span>/contact</a></li>
  </ul>
  <a class="nav-cta" href="#contact">Let’s build</a>
</nav>

<!-- HERO -->
<div class="hero">
  <div class="hero-left">
    <div class="req-line">
      <span class="method get">GET</span> /zakwan HTTP/1.1
      <span class="status-chip ok">200 OK</span>
    </div>
    <h1 class="hero-name">
      Zakwan
      <span>Sanudin</span>
    </h1>
    <p class="hero-tagline">
      Full stack developer · Laravel &amp; ASP.NET Core. I craft fast, reliable apps that people actually enjoy using.
    </p>
    <div class="hero-actions">
      <a class="btn-primary" href="#projects">See work</a>
      <a class="btn-ghost" href="#contact">Say hello</a>
    </div>
  </div>
  <div class="hero-right">
    <div class="response-card">
      <div class="response-card-head">
        <span class="rc-dot r"></span><span class="rc-dot y"></span><span class="rc-dot g"></span>
        <span class="response-card-title">response · 200 OK</span>
      </div>
      <div class="response-card-body">
        <img src="data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='100' height='100' viewBox='0 0 100 100'%3E%3Crect width='100' height='100' fill='%231E2530' rx='12'/%3E%3Ccircle cx='50' cy='38' r='24' fill='%235F7FFF' opacity='0.4'/%3E%3Ccircle cx='50' cy='38' r='14' fill='%235F7FFF' opacity='0.7'/%3E%3Cpath d='M28 78 Q50 58 72 78' stroke='%235F7FFF' stroke-width='4' fill='none' opacity='0.5'/%3E%3C/svg%3E" alt="Zakwan" class="profile-img" />
        <ul class="kv-list">
          <li><span class="k">"role"</span>: <span class="v">"Full Stack Developer"</span></li>
          <li><span class="k">"location"</span>: <span class="v">"Selangor, MY"</span></li>
          <li><span class="k">"status"</span>: <span class="v accent">"available"</span></li>
          <li><span class="k">"experience"</span>: <span class="v">"3+ years"</span></li>
          <li><span class="k">"shipped"</span>: <span class="v">"10+ projects"</span></li>
          <li><span class="k">"frameworks"</span>: <span class="v">2</span></li>
        </ul>
      </div>
    </div>
  </div>
</div>

<!-- ABOUT -->
<section id="about">
  <div class="section-wrap">
    <div class="endpoint-header">
      <span class="method get">GET</span><span class="route">/about</span><span class="status-chip ok">200 OK</span>
    </div>
    <h2 class="section-title">About me</h2>
    <div class="about-grid">
      <div class="about-body">
        <p>
          I’m a full stack developer with a strong focus on <strong>Laravel</strong> and <strong>ASP.NET Core</strong>. I work at the intersection of clean backend architecture and thoughtful, user-friendly interfaces — I care deeply about what happens in the database and what the user sees on screen.
        </p>
        <p>
          I’ve built production systems for schools, community platforms, and learning applications used by real people daily. I take pride in maintainable, scalable code and shipping products that just work.
        </p>
        <p>
          Currently exploring <strong>cloud-native development</strong> and microservices, always looking for interesting problems to solve.
        </p>
      </div>
      <div class="fields-card">
        <div class="fields-title">// stack</div>
        <ul class="field-list">
          <li><span class="field-name">Laravel</span><span class="field-type">framework</span></li>
          <li><span class="field-name">PHP</span><span class="field-type">language</span></li>
          <li><span class="field-name">MySQL</span><span class="field-type">database</span></li>
          <li><span class="field-name">ASP.NET Core</span><span class="field-type">framework</span></li>
          <li><span class="field-name">JavaScript</span><span class="field-type">language</span></li>
          <li><span class="field-name">React</span><span class="field-type">library</span></li>
          <li><span class="field-name">TailwindCSS</span><span class="field-type">styling</span></li>
          <li><span class="field-name">React Native</span><span class="field-type">mobile</span></li>
          <li><span class="field-name">Flutter</span><span class="field-type">mobile</span></li>
        </ul>
      </div>
    </div>
  </div>
</section>

<!-- PROJECTS -->
<section id="projects" class="section-panel">
  <div class="section-wrap">
    <div class="endpoint-header">
      <span class="method get">GET</span><span class="route">/projects</span><span class="status-chip ok">200 OK</span>
    </div>
    <h2 class="section-title">Selected projects</h2>
    <div class="projects-grid" id="featuredProjects">
      <a class="endpoint-card" href="https://kampungonline.my" target="_blank">
        <div class="endpoint-card-top">
          <span class="method get">GET</span><span class="route">/projects/kampung-online</span><span class="status-chip ok">200</span>
        </div>
        <h3 class="endpoint-title">Kampung Online</h3>
        <p class="endpoint-desc">Digital community platform for KampungOnline — user management, announcements, and real‑time engagement tools.</p>
        <div class="tag-row"><span class="tag">Laravel</span><span class="tag">Bootstrap</span><span class="tag">MySQL</span></div>
        <span class="endpoint-link">Visit site ↗</span>
      </a>
      <a class="endpoint-card" href="https://epdk.eptrs.my/login" target="_blank">
        <div class="endpoint-card-top">
          <span class="method get">GET</span><span class="route">/projects/epdk</span><span class="status-chip ok">200</span>
        </div>
        <h3 class="endpoint-title">ePDK</h3>
        <p class="endpoint-desc">Student progress recording for Program Didik Kasih, deployed across Selangor primary schools.</p>
        <div class="tag-row"><span class="tag">Laravel</span><span class="tag">TailwindCSS</span><span class="tag">MySQL</span></div>
        <span class="endpoint-link">Visit site ↗</span>
      </a>
      <a class="endpoint-card" href="https://ppas-t3wq.onrender.com/" target="_blank">
        <div class="endpoint-card-top">
          <span class="method get">GET</span><span class="route">/projects/e-learning</span><span class="status-chip ok">200</span>
        </div>
        <h3 class="endpoint-title">E‑Learning Platform</h3>
        <p class="endpoint-desc">Interactive learning with Quiz Arena, student dashboard, timetable, and academic management tools.</p>
        <div class="tag-row"><span class="tag">Laravel</span><span class="tag">React</span><span class="tag">MySQL</span></div>
        <span class="endpoint-link">Visit site ↗</span>
      </a>
    </div>

    <div class="toggle-wrap">
      <button class="btn-toggle" id="toggleAllProjects">GET /projects?all=true</button>
    </div>

    <div class="all-projects-container" id="allProjectsContainer">
      <div class="projects-grid all-projects">
        <a class="endpoint-card" href="https://new.hometutor.com.my/csr/smkjugra" target="_blank">
          <div class="endpoint-card-top">
            <span class="method get">GET</span><span class="route">/projects/hometutor-csr</span><span class="status-chip ok">200</span>
          </div>
          <h3 class="endpoint-title">HomeTutor CSR Program</h3>
          <p class="endpoint-desc">Responsive landing page promoting educational initiatives for schools and registration opportunities.</p>
          <div class="tag-row"><span class="tag">HTML</span><span class="tag">CSS</span><span class="tag">JavaScript</span></div>
          <span class="endpoint-link">Visit site ↗</span>
        </a>
        <div class="endpoint-card">
          <div class="endpoint-card-top">
            <span class="method get">GET</span><span class="route">/projects/ems</span><span class="status-chip build">building</span>
          </div>
          <h3 class="endpoint-title">Employee Management System</h3>
          <p class="endpoint-desc">Comprehensive workforce admin — records, attendance, payroll, performance, built with ASP.NET Core MVC &amp; SQL Server.</p>
          <div class="tag-row"><span class="tag">ASP.NET Core</span><span class="tag">MSSQL</span></div>
          <span class="endpoint-link disabled">Coming soon</span>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- CONTACT -->
<section id="contact">
  <div class="section-wrap">
    <div class="endpoint-header">
      <span class="method post">POST</span><span class="route">/contact</span><span class="status-chip ok">202 Accepted</span>
    </div>
    <div class="contact-inner">
      <div>
        <h3 class="contact-intro">
          Have a project in mind?<br>
          <em>I’d love to hear about it.</em>
        </h3>
        <p class="contact-blurb">
          Need a Laravel backend, a full‑stack web app, or just want to talk through an idea? Drop me a message — I reply within a day.
        </p>
        <div class="contact-cta-row">
          <a class="btn-primary" href="mailto:zakwansanudin02@gmail.com">Send email</a>
          <a class="btn-ghost" href="#" download>Download CV</a>
        </div>
      </div>
      <div class="headers-block">
        <div class="headers-title">// request headers</div>
        <a class="header-row" href="mailto:zakwansanudin02@gmail.com">
          <span class="header-key">Email</span><span class="header-val">zakwansanudin02@gmail.com</span><span class="header-arrow">↗</span>
        </a>
        <a class="header-row" href="tel:+601133035718">
          <span class="header-key">Phone</span><span class="header-val">+60 11-3303 5718</span><span class="header-arrow">↗</span>
        </a>
        <a class="header-row" href="https://github.com/zakwansanudin" target="_blank">
          <span class="header-key">GitHub</span><span class="header-val">github.com/zakwansanudin</span><span class="header-arrow">↗</span>
        </a>
        <a class="header-row" href="https://www.linkedin.com/in/zakwan-sanudin" target="_blank">
          <span class="header-key">LinkedIn</span><span class="header-val">linkedin.com/in/zakwan-sanudin</span><span class="header-arrow">↗</span>
        </a>
      </div>
    </div>
  </div>
</section>

<footer>
  <span class="footer-text">// © <span id="yr"></span> Zakwan Sanudin — built with care</span>
  <div class="footer-links">
    <a href="#about">/about</a>
    <a href="#projects">/projects</a>
    <a href="#contact">/contact</a>
  </div>
</footer>

<script>
  document.getElementById('yr').textContent = new Date().getFullYear();
  const toggleBtn = document.getElementById('toggleAllProjects');
  const container = document.getElementById('allProjectsContainer');
  let visible = false;
  toggleBtn.addEventListener('click', function() {
    visible = !visible;
    container.classList.toggle('visible', visible);
    this.textContent = visible ? 'GET /projects?all=false' : 'GET /projects?all=true';
    if (!visible) this.scrollIntoView({ behavior: 'smooth', block: 'center' });
  });
</script>
</body>
</html>