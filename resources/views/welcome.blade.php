<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Zakwan Sanudin · Full Stack Developer</title>
  <link rel="preconnect" href="https://fonts.googleapis.com" />
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
  <link href="https://fonts.googleapis.com/css2?family=Space+Grotesk:wght@500;600;700&family=Inter:wght@400;500;600;700&family=JetBrains+Mono:wght@400;500;600&display=swap" rel="stylesheet" />

  <style>
    *,
    *::before,
    *::after {
      box-sizing: border-box;
      margin: 0;
      padding: 0;
    }

    :root {
      --bg: #F5F6F8;
      --surface: #FFFFFF;
      --surface-2: #ECEFF3;
      --ink: #12151C;
      --muted: #67707E;
      --border: #DFE3E9;
      --blue: #2F5EFF;
      --blue-tint: #EAEFFF;
      --green: #0E9F5C;
      --green-tint: #E4F7ED;
      --amber: #B5720C;
      --amber-tint: #FBF0DC;
      --radius: 18px;
    }

    body {
      font-family: 'Inter', sans-serif;
      background: var(--bg);
      color: var(--ink);
      -webkit-font-smoothing: antialiased;
      background-image:
        linear-gradient(var(--border) 1px, transparent 1px),
        linear-gradient(90deg, var(--border) 1px, transparent 1px);
      background-size: 64px 64px;
      background-position: -1px -1px;
      background-attachment: fixed;
    }

    a {
      color: inherit;
      text-decoration: none;
    }

    .mono {
      font-family: 'JetBrains Mono', monospace;
    }

    .method {
      font-family: 'JetBrains Mono', monospace;
      font-size: 0.72rem;
      font-weight: 600;
      padding: 0.18rem 0.55rem;
      border-radius: 5px;
      letter-spacing: 0.02em;
    }
    .method.get { color: var(--blue); background: var(--blue-tint); }
    .method.post { color: var(--green); background: var(--green-tint); }

    .status-chip {
      font-family: 'JetBrains Mono', monospace;
      font-size: 0.72rem;
      font-weight: 600;
      padding: 0.18rem 0.6rem;
      border-radius: 100px;
      letter-spacing: 0.02em;
      display: inline-flex;
      align-items: center;
      gap: 0.35rem;
    }
    .status-chip::before {
      content: '';
      width: 6px;
      height: 6px;
      border-radius: 50%;
      background: currentColor;
    }
    .status-chip.ok { color: var(--green); background: var(--green-tint); }
    .status-chip.build { color: var(--amber); background: var(--amber-tint); }

    .route {
      font-family: 'JetBrains Mono', monospace;
      font-size: 0.85rem;
      font-weight: 500;
      color: var(--ink);
    }

    /* ----- NAV ----- */
    nav {
      position: fixed;
      top: 0;
      left: 0;
      right: 0;
      z-index: 100;
      display: flex;
      align-items: center;
      justify-content: space-between;
      padding: 0.9rem 3rem;
      background: rgba(245, 246, 248, 0.86);
      backdrop-filter: blur(14px);
      border-bottom: 1px solid var(--border);
    }
    .nav-brand { font-family: 'Space Grotesk', sans-serif; font-weight: 700; font-size: 1.05rem; }
    .nav-brand span { color: var(--blue); }
    .nav-routes { display: flex; gap: 0.4rem; list-style: none; }
    .nav-routes a {
      display: inline-flex;
      align-items: center;
      gap: 0.5rem;
      font-family: 'JetBrains Mono', monospace;
      font-size: 0.8rem;
      color: var(--muted);
      padding: 0.4rem 0.8rem;
      border-radius: 8px;
      transition: all 0.16s;
    }
    .nav-routes a:hover { color: var(--ink); background: var(--surface); }
    .nav-cta {
      font-size: 0.85rem;
      font-weight: 600;
      color: var(--surface);
      background: var(--ink);
      padding: 0.5rem 1.2rem;
      border-radius: 8px;
      transition: opacity 0.16s, transform 0.16s;
    }
    .nav-cta:hover { opacity: 0.85; transform: translateY(-1px); }

    /* ----- HERO ----- */
    .hero {
      padding: 8.5rem 3rem 5rem;
      display: grid;
      grid-template-columns: 1fr 1fr;
      gap: 4rem;
      align-items: center;
      max-width: 1200px;
      margin: 0 auto;
    }
    .req-line {
      display: inline-flex;
      align-items: center;
      gap: 0.7rem;
      font-family: 'JetBrains Mono', monospace;
      font-size: 0.82rem;
      color: var(--muted);
      background: var(--surface);
      border: 1px solid var(--border);
      padding: 0.4rem 0.8rem;
      border-radius: 8px;
      margin-bottom: 1.8rem;
    }
    .hero-name {
      font-family: 'Space Grotesk', sans-serif;
      line-height: 1.0;
      letter-spacing: -0.03em;
      font-size: clamp(3rem, 6vw, 5rem);
      font-weight: 700;
    }
    .hero-name span { display: block; font-weight: 500; color: var(--muted); }
    .hero-tagline {
      font-size: 1.05rem;
      color: var(--muted);
      line-height: 1.7;
      margin-top: 1.6rem;
      max-width: 420px;
    }
    .hero-actions {
      display: flex;
      gap: 0.9rem;
      flex-wrap: wrap;
      margin-top: 2.3rem;
    }
    .btn-primary {
      background: var(--blue);
      color: white;
      font-size: 0.9rem;
      font-weight: 600;
      padding: 0.75rem 1.7rem;
      border-radius: 8px;
      transition: opacity 0.16s, transform 0.16s;
      display: inline-block;
      border: none;
      cursor: pointer;
    }
    .btn-primary:hover { opacity: 0.88; transform: translateY(-2px); }
    .btn-ghost {
      background: var(--surface);
      color: var(--ink);
      font-size: 0.9rem;
      font-weight: 600;
      padding: 0.75rem 1.7rem;
      border-radius: 8px;
      border: 1px solid var(--border);
      transition: border-color 0.16s, transform 0.16s;
      cursor: pointer;
    }
    .btn-ghost:hover { border-color: var(--blue); transform: translateY(-2px); }

    .response-card {
      background: var(--surface);
      border: 1px solid var(--border);
      border-radius: 16px;
      overflow: hidden;
      box-shadow: 0 24px 60px rgba(18, 21, 28, 0.07);
    }
    .response-card-head {
      display: flex;
      align-items: center;
      gap: 0.9rem;
      padding: 0.85rem 1.2rem;
      border-bottom: 1px solid var(--border);
      background: var(--surface-2);
    }
    .rc-dot { width: 9px; height: 9px; border-radius: 50%; }
    .rc-dot.r { background: #E5594F; }
    .rc-dot.y { background: #E5AA3B; }
    .rc-dot.g { background: #3BAE5D; }
    .response-card-title {
      font-family: 'JetBrains Mono', monospace;
      font-size: 0.78rem;
      color: var(--muted);
      margin-left: 0.3rem;
    }
    .response-card-body {
      display: flex;
      gap: 1.4rem;
      padding: 1.5rem;
    }
    .profile-img {
      width: 108px;
      height: 108px;
      border-radius: 12px;
      object-fit: cover;
      flex-shrink: 0;
      border: 1px solid var(--border);
    }
    .kv-list {
      list-style: none;
      font-family: 'JetBrains Mono', monospace;
      font-size: 0.82rem;
      line-height: 1.95;
      flex: 1;
      min-width: 0;
    }
    .kv-list .k { color: var(--blue); }
    .kv-list .v { color: var(--ink); font-weight: 500; }
    .kv-list .v.accent { color: var(--green); }

    /* ----- SHARED ----- */
    .section-wrap {
      max-width: 1200px;
      margin: 0 auto;
      padding: 5rem 3rem;
    }
    .section-panel {
      background: var(--surface);
      border-top: 1px solid var(--border);
      border-bottom: 1px solid var(--border);
    }
    .endpoint-header {
      display: flex;
      align-items: center;
      gap: 0.9rem;
      margin-bottom: 1.4rem;
    }
    .section-title {
      font-family: 'Space Grotesk', sans-serif;
      font-weight: 700;
      font-size: clamp(1.6rem, 3vw, 2.2rem);
      letter-spacing: -0.02em;
      margin-top: 0.9rem;
      margin-bottom: 3rem;
    }

    /* ----- ABOUT ----- */
    .about-grid {
      display: grid;
      grid-template-columns: 1.3fr 1fr;
      gap: 3.5rem;
      align-items: start;
    }
    .about-body { font-size: 1.03rem; color: #333A45; line-height: 1.8; }
    .about-body p+p { margin-top: 1rem; }
    .about-body strong { color: var(--blue); font-weight: 600; }
    .fields-card {
      background: var(--bg);
      border: 1px solid var(--border);
      border-radius: 14px;
      padding: 1.3rem;
    }
    .fields-title {
      font-family: 'JetBrains Mono', monospace;
      font-size: 0.78rem;
      color: var(--muted);
      margin-bottom: 0.9rem;
    }
    .field-list {
      list-style: none;
      display: flex;
      flex-direction: column;
      gap: 0.4rem;
    }
    .field-list li {
      display: flex;
      align-items: center;
      justify-content: space-between;
      background: var(--surface);
      border: 1px solid var(--border);
      border-radius: 8px;
      padding: 0.55rem 0.9rem;
      transition: border-color 0.15s, transform 0.15s;
    }
    .field-list li:hover { border-color: var(--blue); transform: translateX(3px); }
    .field-name { font-size: 0.88rem; font-weight: 600; }
    .field-type { font-family: 'JetBrains Mono', monospace; font-size: 0.72rem; color: var(--muted); }

    /* ----- PROJECTS (cards + modal) ----- */
    .projects-grid {
      display: grid;
      grid-template-columns: repeat(3, 1fr);
      gap: 1.4rem;
    }
    .projects-grid.all-projects {
      margin-top: 1.4rem;
      padding-top: 1.9rem;
      border-top: 1px solid var(--border);
    }
    .endpoint-card {
      background: var(--surface);
      border: 1px solid var(--border);
      border-radius: var(--radius);
      padding: 1.5rem;
      cursor: pointer;
      display: flex;
      flex-direction: column;
      transition: all 0.2s;
    }
    .endpoint-card:hover {
      transform: translateY(-4px);
      box-shadow: 0 18px 40px rgba(18, 21, 28, 0.08);
      border-color: var(--blue);
    }
    .endpoint-card-top {
      display: flex;
      align-items: center;
      gap: 0.5rem;
      margin-bottom: 1.1rem;
      flex-wrap: wrap;
    }
    .endpoint-card-top .route { font-size: 0.78rem; color: var(--muted); }
    .endpoint-title {
      font-family: 'Space Grotesk', sans-serif;
      font-weight: 700;
      font-size: 1.15rem;
      letter-spacing: -0.01em;
      margin-bottom: 0.55rem;
    }
    .endpoint-desc {
      font-size: 0.87rem;
      color: var(--muted);
      line-height: 1.65;
      flex: 1;
    }
    .tag-row {
      display: flex;
      gap: 0.4rem;
      flex-wrap: wrap;
      margin-top: 1.2rem;
    }
    .tag {
      font-family: 'JetBrains Mono', monospace;
      font-size: 0.68rem;
      font-weight: 500;
      padding: 0.25rem 0.6rem;
      border-radius: 6px;
      background: var(--surface-2);
      color: var(--ink);
    }
    .endpoint-link {
      display: inline-flex;
      align-items: center;
      gap: 0.35rem;
      margin-top: 1.3rem;
      font-size: 0.83rem;
      font-weight: 600;
      color: var(--blue);
    }
    .endpoint-link.disabled { color: var(--muted); }

    .toggle-wrap { text-align: center; margin-top: 2.2rem; }
    .btn-toggle {
      font-family: 'JetBrains Mono', monospace;
      font-size: 0.85rem;
      font-weight: 500;
      color: var(--ink);
      background: var(--surface);
      border: 1px solid var(--border);
      padding: 0.7rem 1.6rem;
      border-radius: 8px;
      cursor: pointer;
      transition: border-color 0.16s, transform 0.16s;
    }
    .btn-toggle:hover { border-color: var(--blue); transform: translateY(-2px); }
    .all-projects-container { display: none; }
    .all-projects-container.visible { display: block; }

    /* ----- MODAL (carousel) ----- */
    .modal-overlay {
      position: fixed;
      inset: 0;
      background: rgba(0,0,0,0.7);
      backdrop-filter: blur(6px);
      z-index: 999;
      display: none;
      align-items: center;
      justify-content: center;
      padding: 1.5rem;
      animation: fadeIn 0.25s ease;
    }
    .modal-overlay.active { display: flex; }
    .modal-box {
      background: var(--surface);
      border-radius: var(--radius);
      max-width: 750px;
      width: 100%;
      max-height: 90vh;
      box-shadow: 0 40px 80px rgba(0,0,0,0.3);
      display: flex;
      flex-direction: column;
      overflow: hidden;
      animation: slideUp 0.3s ease;
    }
    .modal-header {
      display: flex;
      justify-content: space-between;
      align-items: center;
      padding: 1.2rem 1.5rem;
      border-bottom: 1px solid var(--border);
    }
    .modal-header h3 {
      font-family: 'Space Grotesk', sans-serif;
      font-weight: 700;
      font-size: 1.2rem;
    }
    .modal-close {
      background: none;
      border: none;
      font-size: 1.6rem;
      line-height: 1;
      cursor: pointer;
      color: var(--muted);
      transition: 0.15s;
      padding: 0 0.3rem;
    }
    .modal-close:hover { color: var(--ink); transform: rotate(90deg); }
    .modal-body {
      padding: 1.5rem;
      overflow-y: auto;
      flex: 1;
    }
    .carousel-container {
      position: relative;
      border-radius: 12px;
      overflow: hidden;
      background: var(--bg);
    }
    .carousel-slide {
      display: flex;
      transition: transform 0.35s ease;
    }
    .carousel-slide img {
      width: 100%;
      flex-shrink: 0;
      object-fit: cover;
      max-height: 420px;
      aspect-ratio: 16/9;
      background: #eaeef2;
    }
    .carousel-btn {
      position: absolute;
      top: 50%;
      transform: translateY(-50%);
      background: rgba(255,255,255,0.7);
      backdrop-filter: blur(4px);
      border: none;
      border-radius: 40px;
      width: 38px;
      height: 38px;
      font-size: 1.3rem;
      cursor: pointer;
      color: var(--ink);
      box-shadow: 0 4px 12px rgba(0,0,0,0.1);
      transition: 0.15s;
      display: flex;
      align-items: center;
      justify-content: center;
      font-weight: 300;
    }
    .carousel-btn:hover { background: white; }
    .carousel-btn.prev { left: 12px; }
    .carousel-btn.next { right: 12px; }
    .carousel-dots {
      display: flex;
      justify-content: center;
      gap: 0.6rem;
      padding: 1rem 0 0.3rem;
    }
    .carousel-dots span {
      width: 10px;
      height: 10px;
      border-radius: 20px;
      background: var(--border);
      cursor: pointer;
      transition: 0.2s;
    }
    .carousel-dots span.active {
      background: var(--blue);
      width: 26px;
    }

    @keyframes fadeIn { from { opacity: 0; } to { opacity: 1; } }
    @keyframes slideUp { from { transform: translateY(30px); opacity: 0; } to { transform: translateY(0); opacity: 1; } }

    /* ----- CONTACT ----- */
    .contact-inner {
      display: grid;
      grid-template-columns: 1fr 1fr;
      gap: 3.5rem;
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
      line-height: 1.75;
      margin-top: 1rem;
    }
    .contact-cta-row {
      display: flex;
      gap: 0.75rem;
      flex-wrap: wrap;
      margin-top: 2rem;
    }
    .headers-block {
      background: var(--ink);
      border-radius: 14px;
      padding: 1.4rem;
    }
    .headers-title {
      font-family: 'JetBrains Mono', monospace;
      font-size: 0.75rem;
      color: #8892A0;
      margin-bottom: 1rem;
    }
    .header-row {
      display: flex;
      align-items: center;
      gap: 1rem;
      padding: 0.75rem 0.9rem;
      border-radius: 8px;
      transition: background 0.15s;
    }
    .header-row:hover { background: rgba(255,255,255,0.06); }
    .header-key {
      font-family: 'JetBrains Mono', monospace;
      font-size: 0.75rem;
      color: #6C7686;
      min-width: 92px;
    }
    .header-val {
      font-family: 'JetBrains Mono', monospace;
      font-size: 0.85rem;
      color: #F2F3F5;
      font-weight: 500;
    }
    .header-arrow { margin-left: auto; color: #6C7686; font-size: 0.9rem; }

    footer {
      padding: 1.8rem 3rem;
      display: flex;
      align-items: center;
      justify-content: space-between;
      max-width: 1200px;
      margin: 0 auto;
      flex-wrap: wrap;
      gap: 1rem;
    }
    .footer-text { font-family: 'JetBrains Mono', monospace; font-size: 0.8rem; color: var(--muted); }
    .footer-links { display: flex; gap: 0.4rem; }
    .footer-links a {
      font-family: 'JetBrains Mono', monospace;
      font-size: 0.8rem;
      color: var(--muted);
      padding: 0.3rem 0.7rem;
      border-radius: 6px;
      transition: all 0.15s;
    }
    .footer-links a:hover { color: var(--ink); background: var(--surface-2); }

    @media (max-width: 900px) {
      nav { padding: 0.9rem 1.5rem; }
      .nav-routes { display: none; }
      .hero { grid-template-columns: 1fr; padding: 7rem 1.5rem 3.5rem; gap: 2.5rem; }
      .response-card-body { flex-direction: column; }
      .section-wrap { padding: 3.5rem 1.5rem; }
      .about-grid { grid-template-columns: 1fr; gap: 2.2rem; }
      .projects-grid, .projects-grid.all-projects { grid-template-columns: 1fr; }
      .contact-inner { grid-template-columns: 1fr; gap: 2.2rem; }
      footer { padding: 1.5rem; }
      .modal-box { max-width: 100%; margin: 0.5rem; }
    }
    @media (prefers-reduced-motion: reduce) { * { transition: none !important; } }
  </style>
</head>
<body>

<!-- NAV -->
<nav>
  <a class="nav-brand" href="#">zakwan<span>.</span>dev</a>
  <ul class="nav-routes">
    <li><a href="#about"><span class="method get">GET</span>/about</a></li>
    <li><a href="#projects"><span class="method get">GET</span>/projects</a></li>
    <li><a href="#contact"><span class="method post">POST</span>/contact</a></li>
  </ul>
  <a class="nav-cta" href="#contact">Let's work together</a>
</nav>

<!-- HERO -->
<div class="hero">
  <div class="hero-left">
    <div class="req-line">
      <span class="method get">GET</span> /zakwan HTTP/1.1
      <span class="status-chip ok">200 OK</span>
    </div>
    <h1 class="hero-name">Zakwan <span>Sanudin</span></h1>
    <p class="hero-tagline">Full stack developer specialising in Laravel. I build applications that are fast, reliable, and genuinely pleasant to use.</p>
    <div class="hero-actions">
      <a class="btn-primary" href="#projects">View my work</a>
      <a class="btn-ghost" href="#contact">Get in touch</a>
    </div>
  </div>
  <div class="hero-right">
    <div class="response-card">
      <div class="response-card-head">
        <span class="rc-dot r"></span><span class="rc-dot y"></span><span class="rc-dot g"></span>
        <span class="response-card-title">response · 200 OK</span>
      </div>
      <div class="response-card-body">
        <img src="data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='108' height='108' viewBox='0 0 100 100'%3E%3Crect width='100' height='100' fill='%23dfe3e9'/%3E%3Ctext x='14' y='60' font-family='Inter' font-weight='600' font-size='36' fill='%2367707e'%3EZK%3C/text%3E%3C/svg%3E" alt="Zakwan" class="profile-img" />
        <ul class="kv-list">
          <li><span class="k">"role"</span>: <span class="v">"Full Stack Developer"</span></li>
          <li><span class="k">"location"</span>: <span class="v">"Selangor, MY"</span></li>
          <li><span class="k">"status"</span>: <span class="v accent">"available"</span></li>
          <li><span class="k">"experience"</span>: <span class="v">"2 years"</span></li>
          <li><span class="k">"frameworks"</span>: <span class="v">2</span></li>
        </ul>
      </div>
    </div>
  </div>
</div>

<!-- ABOUT -->
<section id="about">
  <div class="section-wrap">
    <div class="endpoint-header"><span class="method get">GET</span><span class="route">/about</span><span class="status-chip ok">200 OK</span></div>
    <h2 class="section-title">About me</h2>
    <div class="about-grid">
      <div class="about-body">
        <p>I'm a full stack developer with a strong focus on <strong>Laravel</strong>. My work sits at the intersection of clean backend architecture and practical, user-friendly interfaces — I care equally about what happens in the database and what the end user sees on screen.</p>
        <p>I've built production systems for schools, community platforms, and learning applications used by real people every day. I take pride in writing code that's easy to maintain and scale, and in shipping products that just work.</p>
        <p>Currently expanding into <strong>cloud-native development</strong> and microservices, and always looking for interesting problems to solve.</p>
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
    <div class="endpoint-header"><span class="method get">GET</span><span class="route">/projects</span><span class="status-chip ok">200 OK</span></div>
    <h2 class="section-title">Selected projects</h2>
    <div class="projects-grid" id="featuredProjects">
      <!-- Each card has data-images (array) and data-title -->
      <div class="endpoint-card" data-title="Kampung Online" data-images='["img/kampung1.jpg","img/kampung2.jpg","img/kampung3.jpg"]'>
        <div class="endpoint-card-top"><span class="method get">GET</span><span class="route">/projects/kampung-online</span><span class="status-chip ok">200</span></div>
        <h3 class="endpoint-title">Kampung Online</h3>
        <p class="endpoint-desc">A digital community platform for the KampungOnline network — user management, announcement broadcasting, and real-time engagement tools for local communities.</p>
        <div class="tag-row"><span class="tag">Laravel</span><span class="tag">Bootstrap</span><span class="tag">MySQL</span></div>
        <span class="endpoint-link">↗ View gallery</span>
      </div>

      <div class="endpoint-card" data-title="ePDK" data-images='["img/epdk1.jpg","img/epdk2.jpg","img/epdk3.jpg"]'>
        <div class="endpoint-card-top"><span class="method get">GET</span><span class="route">/projects/epdk</span><span class="status-chip ok">200</span></div>
        <h3 class="endpoint-title">ePDK</h3>
        <p class="endpoint-desc">Student progress recording system for Program Didik Kasih, deployed across Selangor primary schools. Tracks academic development and generates progress reports.</p>
        <div class="tag-row"><span class="tag">Laravel</span><span class="tag">TailwindCSS</span><span class="tag">MySQL</span></div>
        <span class="endpoint-link">↗ View gallery</span>
      </div>

      <div class="endpoint-card" data-title="E-Learning Platform" data-images='["img/elearn1.jpg","img/elearn2.jpg","img/elearn3.jpg"]'>
        <div class="endpoint-card-top"><span class="method get">GET</span><span class="route">/projects/e-learning</span><span class="status-chip ok">200</span></div>
        <h3 class="endpoint-title">E-Learning Platform</h3>
        <p class="endpoint-desc">An interactive learning platform featuring Quiz Arena for engaging assessments and a student dashboard with class timetables, learning resources, and academic management tools.</p>
        <div class="tag-row"><span class="tag">Laravel</span><span class="tag">React</span><span class="tag">MySQL</span></div>
        <span class="endpoint-link">↗ View gallery</span>
      </div>
    </div>

    <div class="toggle-wrap">
      <button class="btn-toggle" id="toggleAllProjects">GET /projects?all=true</button>
    </div>

    <div class="all-projects-container" id="allProjectsContainer">
      <div class="projects-grid all-projects">
        <div class="endpoint-card" data-title="HomeTutor CSR Program" data-images='["img/hometutor1.jpg","img/hometutor2.jpg"]'>
          <div class="endpoint-card-top"><span class="method get">GET</span><span class="route">/projects/hometutor-csr</span><span class="status-chip ok">200</span></div>
          <h3 class="endpoint-title">HomeTutor CSR Program</h3>
          <p class="endpoint-desc">Developed a responsive landing page for the HomeTutor CSR Program, promoting educational initiatives for schools and providing information on program benefits, activities, and registration opportunities.</p>
          <div class="tag-row"><span class="tag">HTML</span><span class="tag">CSS</span><span class="tag">JavaScript</span></div>
          <span class="endpoint-link">↗ View gallery</span>
        </div>

        <div class="endpoint-card" data-title="Employee Management System" data-images='["img/ems1.jpg","img/ems2.jpg","img/ems3.jpg"]'>
          <div class="endpoint-card-top"><span class="method get">GET</span><span class="route">/projects/ems</span><span class="status-chip build">building</span></div>
          <h3 class="endpoint-title">Employee Management System</h3>
          <p class="endpoint-desc">A comprehensive employee management platform for workforce administration, including employee records, attendance tracking, department management, payroll processing, and performance monitoring, built with ASP.NET Core MVC and SQL Server.</p>
          <div class="tag-row"><span class="tag">ASP.NET Core</span><span class="tag">MSSQL</span></div>
          <span class="endpoint-link disabled">Coming soon</span>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- MODAL (carousel) -->
<div class="modal-overlay" id="projectModal">
  <div class="modal-box">
    <div class="modal-header">
      <h3 id="modalTitle">Project</h3>
      <button class="modal-close" id="modalClose">✕</button>
    </div>
    <div class="modal-body">
      <div class="carousel-container">
        <div class="carousel-slide" id="carouselSlide"></div>
        <button class="carousel-btn prev" id="carouselPrev">‹</button>
        <button class="carousel-btn next" id="carouselNext">›</button>
      </div>
      <div class="carousel-dots" id="carouselDots"></div>
    </div>
  </div>
</div>

<!-- CONTACT -->
<section id="contact">
  <div class="section-wrap">
    <div class="endpoint-header"><span class="method post">POST</span><span class="route">/contact</span><span class="status-chip ok">202 Accepted</span></div>
    <div class="contact-inner">
      <div>
        <h3 class="contact-intro">Have a project in mind?<br><em>I'd love to hear about it.</em></h3>
        <p class="contact-blurb">Whether you need a Laravel backend, a full-stack web app, or just want to talk through an idea — drop me a message and I'll get back to you within a day.</p>
        <div class="contact-cta-row">
          <a class="btn-primary" href="mailto:zakwansanudin02@gmail.com">Send an email</a>
          <a class="btn-ghost" href="docs/CV_ZAKWANSANUDIN.pdf" download>Download CV</a>
        </div>
      </div>
      <div class="headers-block">
        <div class="headers-title">// request headers</div>
        <a class="header-row" href="mailto:zakwansanudin02@gmail.com"><span class="header-key">Email</span><span class="header-val">zakwansanudin02@gmail.com</span><span class="header-arrow">↗</span></a>
        <a class="header-row" href="tel:+601133035718"><span class="header-key">Phone</span><span class="header-val">+60 11-3303 5718</span><span class="header-arrow">↗</span></a>
        <a class="header-row" href="https://github.com/zakwansanudin" target="_blank"><span class="header-key">GitHub</span><span class="header-val">github.com/zakwansanudin</span><span class="header-arrow">↗</span></a>
        <a class="header-row" href="https://www.linkedin.com/in/zakwan-sanudin" target="_blank"><span class="header-key">LinkedIn</span><span class="header-val">linkedin.com/in/zakwan-sanudin</span><span class="header-arrow">↗</span></a>
      </div>
    </div>
  </div>
</section>

<footer>
  <span class="footer-text">// © <span id="yr"></span> Zakwan Sanudin — built with care</span>
  <div class="footer-links"><a href="#about">/about</a><a href="#projects">/projects</a><a href="#contact">/contact</a></div>
</footer>

<script>
  (function() {
    document.getElementById('yr').textContent = new Date().getFullYear();

    // --- toggle all projects ---
    const toggleBtn = document.getElementById('toggleAllProjects');
    const allContainer = document.getElementById('allProjectsContainer');
    let allVisible = false;
    toggleBtn.addEventListener('click', function() {
      allVisible = !allVisible;
      allContainer.classList.toggle('visible', allVisible);
      this.textContent = allVisible ? 'GET /projects?all=false' : 'GET /projects?all=true';
      if (!allVisible) this.scrollIntoView({ behavior: 'smooth', block: 'center' });
    });

    // --- MODAL CAROUSEL ---
    const modal = document.getElementById('projectModal');
    const modalTitle = document.getElementById('modalTitle');
    const slideContainer = document.getElementById('carouselSlide');
    const dotsContainer = document.getElementById('carouselDots');
    const closeBtn = document.getElementById('modalClose');
    const prevBtn = document.getElementById('carouselPrev');
    const nextBtn = document.getElementById('carouselNext');

    let currentImages = [];
    let currentIndex = 0;

    function renderCarousel(images, title) {
      currentImages = images;
      currentIndex = 0;
      modalTitle.textContent = title || 'Project';
      slideContainer.innerHTML = images.map(src => `<img src="${src}" alt="${title}" />`).join('');
      dotsContainer.innerHTML = images.map((_, i) => `<span class="${i===0?'active':''}" data-index="${i}"></span>`).join('');
      updateSlide(0);
    }

    function updateSlide(index) {
      if (!currentImages.length) return;
      const total = currentImages.length;
      const idx = ((index % total) + total) % total;
      currentIndex = idx;
      slideContainer.style.transform = `translateX(-${idx * 100}%)`;
      document.querySelectorAll('#carouselDots span').forEach((dot, i) => {
        dot.classList.toggle('active', i === idx);
      });
    }

    function openModal(images, title) {
      renderCarousel(images, title);
      modal.classList.add('active');
      document.body.style.overflow = 'hidden';
    }

    function closeModal() {
      modal.classList.remove('active');
      document.body.style.overflow = '';
    }

    // event listeners for cards
    document.querySelectorAll('.endpoint-card[data-images]').forEach(card => {
      card.addEventListener('click', function(e) {
        // ignore if click on link inside (to keep external links)
        if (e.target.closest('.endpoint-link')) return;
        const images = this.getAttribute('data-images').split(',');
        const title = this.getAttribute('data-title') || 'Project';
        openModal(images, title);
      });
    });

    // external link handling (keep original behavior for links)
    document.querySelectorAll('.endpoint-card .endpoint-link').forEach(link => {
      link.addEventListener('click', function(e) {
        e.stopPropagation();
        if (!this.classList.contains('disabled')) {
          // if it has href, follow it (for the "Visit site" links)
          const href = this.getAttribute('href');
          if (href && href !== '#') window.open(href, '_blank');
        }
      });
    });

    // modal controls
    closeBtn.addEventListener('click', closeModal);
    modal.addEventListener('click', function(e) { if (e.target === this) closeModal(); });
    document.addEventListener('keydown', function(e) {
      if (!modal.classList.contains('active')) return;
      if (e.key === 'Escape') closeModal();
      if (e.key === 'ArrowLeft') { e.preventDefault(); updateSlide(currentIndex - 1); }
      if (e.key === 'ArrowRight') { e.preventDefault(); updateSlide(currentIndex + 1); }
    });

    prevBtn.addEventListener('click', function(e) { e.stopPropagation(); updateSlide(currentIndex - 1); });
    nextBtn.addEventListener('click', function(e) { e.stopPropagation(); updateSlide(currentIndex + 1); });

    dotsContainer.addEventListener('click', function(e) {
      const dot = e.target.closest('span');
      if (!dot) return;
      const idx = parseInt(dot.getAttribute('data-index'), 10);
      if (!isNaN(idx)) updateSlide(idx);
    });

    // close on escape
    window.addEventListener('keydown', function(e) {
      if (e.key === 'Escape' && modal.classList.contains('active')) closeModal();
    });

    // fallback images: generate placeholder if images missing
    // we also handle if image fails to load — but we keep placeholder svg as fallback in img tag
  })();
</script>

<!-- small fallback: if images not found, show placeholder -->
</body>
</html>