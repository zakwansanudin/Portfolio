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
    }

    body {
      font-family: 'Inter', sans-serif;
      background: var(--bg);
      color: var(--ink);
      -webkit-font-smoothing: antialiased;
      background-image: linear-gradient(var(--border) 1px, transparent 1px),
        linear-gradient(90deg, var(--border) 1px, transparent 1px);
      background-size: 64px 64px;
      background-position: -1px -1px;
      background-attachment: fixed;
    }

    a {
      color: inherit;
      text-decoration: none;
    }

    :focus-visible {
      outline: 2px solid var(--blue);
      outline-offset: 3px;
      border-radius: 4px;
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

    .method.get {
      color: var(--blue);
      background: var(--blue-tint);
    }
    .method.post {
      color: var(--green);
      background: var(--green-tint);
    }

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
    .status-chip.ok {
      color: var(--green);
      background: var(--green-tint);
    }
    .status-chip.build {
      color: var(--amber);
      background: var(--amber-tint);
    }

    .route {
      font-family: 'JetBrains Mono', monospace;
      font-size: 0.85rem;
      font-weight: 500;
      color: var(--ink);
    }

    /* NAV */
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

    .nav-brand {
      font-family: 'Space Grotesk', sans-serif;
      font-weight: 700;
      font-size: 1.05rem;
      letter-spacing: -0.01em;
    }
    .nav-brand span {
      color: var(--blue);
    }

    .nav-routes {
      display: flex;
      align-items: center;
      gap: 0.4rem;
      list-style: none;
    }
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
    .nav-routes a:hover {
      color: var(--ink);
      background: var(--surface);
    }

    .nav-cta {
      font-size: 0.85rem;
      font-weight: 600;
      color: var(--surface);
      background: var(--ink);
      padding: 0.5rem 1.2rem;
      border-radius: 8px;
      transition: opacity 0.16s, transform 0.16s;
    }
    .nav-cta:hover {
      opacity: 0.85;
      transform: translateY(-1px);
    }

    /* HERO */
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
    .hero-name span {
      display: block;
      font-weight: 500;
      color: var(--muted);
    }

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
    .btn-primary:hover {
      opacity: 0.88;
      transform: translateY(-2px);
    }

    .btn-ghost {
      background: var(--surface);
      color: var(--ink);
      font-size: 0.9rem;
      font-weight: 600;
      padding: 0.75rem 1.7rem;
      border-radius: 8px;
      border: 1px solid var(--border);
      transition: border-color 0.16s, transform 0.16s;
      display: inline-block;
      cursor: pointer;
    }
    .btn-ghost:hover {
      border-color: var(--blue);
      transform: translateY(-2px);
    }

    /* response card */
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
    .rc-dot {
      width: 9px;
      height: 9px;
      border-radius: 50%;
    }
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
      background: #d0d5dd;
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

    /* sections */
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

    /* ABOUT */
    .about-grid {
      display: grid;
      grid-template-columns: 1.3fr 1fr;
      gap: 3.5rem;
      align-items: start;
    }
    .about-body {
      font-size: 1.03rem;
      color: #333A45;
      line-height: 1.8;
    }
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
      padding-left: 0.2rem;
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
    .field-list li:hover {
      border-color: var(--blue);
      transform: translateX(3px);
    }
    .field-name { font-size: 0.88rem; font-weight: 600; }
    .field-type {
      font-family: 'JetBrains Mono', monospace;
      font-size: 0.72rem;
      color: var(--muted);
    }

    /* PROJECTS */
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
      border-radius: 14px;
      padding: 1.5rem;
      display: flex;
      flex-direction: column;
      transition: all 0.2s;
      cursor: pointer;
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
    .endpoint-card-top .route {
      font-size: 0.78rem;
      color: var(--muted);
    }

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
    .endpoint-link.disabled {
      color: var(--muted);
      cursor: default;
    }

    .toggle-wrap {
      text-align: center;
      margin-top: 2.2rem;
    }
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
    .btn-toggle:hover {
      border-color: var(--blue);
      transform: translateY(-2px);
    }

    .all-projects-container {
      display: none;
    }
    .all-projects-container.visible {
      display: block;
    }

    /* CONTACT */
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
    .contact-intro em {
      font-style: normal;
      color: var(--blue);
    }
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
      padding-left: 0.2rem;
    }
    .header-row {
      display: flex;
      align-items: center;
      gap: 1rem;
      padding: 0.75rem 0.9rem;
      border-radius: 8px;
      transition: background 0.15s;
    }
    .header-row:hover {
      background: rgba(255, 255, 255, 0.06);
    }
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
    .header-arrow {
      margin-left: auto;
      color: #6C7686;
      font-size: 0.9rem;
    }

    /* FOOTER */
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
    .footer-text {
      font-family: 'JetBrains Mono', monospace;
      font-size: 0.8rem;
      color: var(--muted);
    }
    .footer-links {
      display: flex;
      gap: 0.4rem;
    }
    .footer-links a {
      font-family: 'JetBrains Mono', monospace;
      font-size: 0.8rem;
      color: var(--muted);
      padding: 0.3rem 0.7rem;
      border-radius: 6px;
      transition: all 0.15s;
    }
    .footer-links a:hover {
      color: var(--ink);
      background: var(--surface-2);
    }

    /* MODAL */
    .modal-overlay {
      position: fixed;
      inset: 0;
      background: rgba(0, 0, 0, 0.5);
      backdrop-filter: blur(6px);
      display: none;
      align-items: center;
      justify-content: center;
      z-index: 999;
      padding: 1.5rem;
    }
    .modal-overlay.active {
      display: flex;
    }
    .modal-box {
      background: var(--surface);
      max-width: 700px;
      width: 100%;
      border-radius: 24px;
      padding: 1.8rem 2rem 2rem;
      box-shadow: 0 40px 80px rgba(0, 0, 0, 0.25);
      position: relative;
      max-height: 90vh;
      overflow-y: auto;
    }
    .modal-close {
      position: absolute;
      top: 1rem;
      right: 1.4rem;
      font-size: 2rem;
      line-height: 1;
      cursor: pointer;
      color: var(--muted);
      transition: color 0.15s;
      background: none;
      border: none;
    }
    .modal-close:hover {
      color: var(--ink);
    }
    .modal-title {
      font-family: 'Space Grotesk', sans-serif;
      font-weight: 700;
      font-size: 1.6rem;
      margin-bottom: 0.25rem;
    }
    .modal-sub {
      color: var(--muted);
      margin-bottom: 1.5rem;
      font-size: 0.9rem;
    }
    .carousel {
      position: relative;
      border-radius: 14px;
      overflow: hidden;
      background: var(--bg);
      aspect-ratio: 16/9;
      display: flex;
      align-items: center;
      justify-content: center;
    }
    .carousel img {
      width: 100%;
      height: 100%;
      object-fit: cover;
      display: none;
    }
    .carousel img.active {
      display: block;
    }
    .carousel-btn {
      position: absolute;
      top: 50%;
      transform: translateY(-50%);
      background: rgba(255, 255, 255, 0.7);
      backdrop-filter: blur(4px);
      border: none;
      border-radius: 40px;
      width: 40px;
      height: 40px;
      font-size: 1.3rem;
      cursor: pointer;
      color: var(--ink);
      transition: background 0.15s;
      display: flex;
      align-items: center;
      justify-content: center;
      box-shadow: 0 4px 12px rgba(0,0,0,0.1);
    }
    .carousel-btn:hover {
      background: white;
    }
    .carousel-btn.prev {
      left: 12px;
    }
    .carousel-btn.next {
      right: 12px;
    }
    .carousel-dots {
      display: flex;
      justify-content: center;
      gap: 0.5rem;
      margin-top: 1rem;
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
      width: 24px;
    }
    .modal-visit-btn {
      display: inline-block;
      margin-top: 1.5rem;
      background: var(--blue);
      color: white;
      padding: 0.7rem 1.8rem;
      border-radius: 8px;
      font-weight: 600;
      border: none;
      cursor: pointer;
      transition: opacity 0.16s;
    }
    .modal-visit-btn:hover {
      opacity: 0.85;
    }

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
        <img src="img/profile.png" alt="Zakwan Sanudin" class="profile-img" />
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
    <div class="projects-grid" id="featuredProjects"></div>

    <div class="toggle-wrap">
      <button class="btn-toggle" id="toggleAllProjects">GET /projects?all=true</button>
    </div>
    <div class="all-projects-container" id="allProjectsContainer">
      <div class="projects-grid all-projects" id="allProjectsGrid"></div>
    </div>
  </div>
</section>

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
          <a class="btn-ghost" href="#">Download CV</a>
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

<!-- FOOTER -->
<div style="border-top:1px solid var(--border);">
  <footer>
    <span class="footer-text">// © <span id="yr"></span> Zakwan Sanudin — built with care</span>
    <div class="footer-links">
      <a href="#about">/about</a>
      <a href="#projects">/projects</a>
      <a href="#contact">/contact</a>
    </div>
  </footer>
</div>

<!-- MODAL -->
<div class="modal-overlay" id="projectModal">
  <div class="modal-box">
    <button class="modal-close" id="modalClose">&times;</button>
    <div class="modal-title" id="modalTitle">Project</div>
    <div class="modal-sub" id="modalSub">Screenshots</div>
    <div class="carousel" id="carousel">
      <button class="carousel-btn prev" id="carouselPrev">‹</button>
      <button class="carousel-btn next" id="carouselNext">›</button>
      <div id="carouselImages"></div>
    </div>
    <div class="carousel-dots" id="carouselDots"></div>
    <a class="modal-visit-btn" id="modalVisitBtn" href="#" target="_blank">Visit live site →</a>
  </div>
</div>

<script>
  (function(){
    document.getElementById('yr').textContent = new Date().getFullYear();

    // ----- project data (image arrays — use public images) -----
    const projects = [
      {
        id: 'kampung-online',
        title: 'Kampung Online',
        desc: 'A digital community platform for the KampungOnline network — user management, announcement broadcasting, and real-time engagement tools for local communities.',
        tags: ['Laravel','Bootstrap','MySQL'],
        url: 'https://kampungonline.my',
        images: ['img/kampung-online-1.png','img/kampung-online-2.png','img/kampung-online-3.png']
      },
      {
        id: 'epdk',
        title: 'ePDK',
        desc: 'Student progress recording system for Program Didik Kasih, deployed across Selangor primary schools. Tracks academic development and generates progress reports.',
        tags: ['Laravel','TailwindCSS','MySQL'],
        url: 'https://epdk.eptrs.my/login',
        images: ['img/epdk1.jpg','img/epdk2.jpg']
      },
      {
        id: 'elearning',
        title: 'E-Learning Platform',
        desc: 'An interactive learning platform featuring Quiz Arena for engaging assessments and a student dashboard with class timetables, learning resources, and academic management tools.',
        tags: ['Laravel','React','MySQL'],
        url: 'https://ppas-t3wq.onrender.com/',
        images: ['img/elearn1.jpg','img/elearn2.jpg','img/elearn3.jpg']
      },
      {
        id: 'hometutor-csr',
        title: 'HomeTutor CSR Program',
        desc: 'Developed a responsive landing page for the HomeTutor CSR Program, promoting educational initiatives for schools and providing information on program benefits, activities, and registration opportunities.',
        tags: ['HTML','CSS','JavaScript'],
        url: 'https://new.hometutor.com.my/csr/smkjugra',
        images: ['img/hometutor1.jpg','img/hometutor2.jpg']
      },
      {
        id: 'ems',
        title: 'Employee Management System',
        desc: 'A comprehensive employee management platform for workforce administration, including employee records, attendance tracking, department management, payroll processing, and performance monitoring, built with ASP.NET Core MVC and SQL Server.',
        tags: ['ASP.NET Core','MSSQL'],
        url: '#',
        images: ['img/ems1.jpg','img/ems2.jpg'],
        disabled: true
      }
    ];

    // featured: first 3
    const featured = projects.slice(0,3);
    const allProjects = projects;

    function renderProjectCard(p, index) {
      const disabled = p.disabled ? true : false;
      return `
        <div class="endpoint-card" data-project-index="${index}" data-disabled="${disabled}">
          <div class="endpoint-card-top">
            <span class="method get">GET</span>
            <span class="route">/projects/${p.id}</span>
            <span class="status-chip ${disabled ? 'build' : 'ok'}">${disabled ? 'building' : '200'}</span>
          </div>
          <h3 class="endpoint-title">${p.title}</h3>
          <p class="endpoint-desc">${p.desc}</p>
          <div class="tag-row">${p.tags.map(t => `<span class="tag">${t}</span>`).join('')}</div>
          <span class="endpoint-link ${disabled ? 'disabled' : ''}">${disabled ? 'Coming soon' : 'View details →'}</span>
        </div>
      `;
    }

    const featuredContainer = document.getElementById('featuredProjects');
    featuredContainer.innerHTML = featured.map((p,i) => renderProjectCard(p, i)).join('');

    const allContainer = document.getElementById('allProjectsGrid');
    allContainer.innerHTML = allProjects.map((p,i) => renderProjectCard(p, i)).join('');

    // ----- MODAL LOGIC -----
    const modal = document.getElementById('projectModal');
    const modalClose = document.getElementById('modalClose');
    const modalTitle = document.getElementById('modalTitle');
    const modalSub = document.getElementById('modalSub');
    const carouselImages = document.getElementById('carouselImages');
    const carouselDots = document.getElementById('carouselDots');
    const carouselPrev = document.getElementById('carouselPrev');
    const carouselNext = document.getElementById('carouselNext');
    const modalVisitBtn = document.getElementById('modalVisitBtn');

    let currentProjectIndex = 0;
    let currentImageIndex = 0;
    let currentImages = [];

    function openModal(projectIndex) {
      const p = allProjects[projectIndex];
      if (!p) return;
      currentProjectIndex = projectIndex;
      currentImages = p.images && p.images.length ? p.images : ['img/placeholder.jpg'];
      currentImageIndex = 0;

      modalTitle.textContent = p.title;
      modalSub.textContent = p.disabled ? '🚧 Under development' : 'Screenshots';
      modalVisitBtn.style.display = (p.disabled || p.url === '#') ? 'none' : 'inline-block';
      if (!p.disabled && p.url !== '#') {
        modalVisitBtn.href = p.url;
        modalVisitBtn.textContent = 'Visit live site →';
      } else {
        modalVisitBtn.href = '#';
        modalVisitBtn.textContent = 'Coming soon';
      }

      renderCarousel();
      modal.classList.add('active');
      document.body.style.overflow = 'hidden';
    }

    function renderCarousel() {
      carouselImages.innerHTML = '';
      carouselDots.innerHTML = '';
      if (!currentImages.length) {
        carouselImages.innerHTML = '<div style="padding:2rem;color:var(--muted);">No screenshots</div>';
        return;
      }
      currentImages.forEach((src, idx) => {
        const img = document.createElement('img');
        img.src = src;
        img.alt = `screenshot ${idx+1}`;
        if (idx === 0) img.classList.add('active');
        img.onerror = function() { this.src = 'img/placeholder.jpg'; };
        carouselImages.appendChild(img);

        const dot = document.createElement('span');
        if (idx === 0) dot.classList.add('active');
        dot.dataset.index = idx;
        dot.addEventListener('click', (e) => {
          const index = parseInt(e.target.dataset.index);
          setImage(index);
        });
        carouselDots.appendChild(dot);
      });
    }

    function setImage(index) {
      const imgs = carouselImages.querySelectorAll('img');
      const dots = carouselDots.querySelectorAll('span');
      if (index < 0) index = imgs.length - 1;
      if (index >= imgs.length) index = 0;
      imgs.forEach((img, i) => img.classList.toggle('active', i === index));
      dots.forEach((dot, i) => dot.classList.toggle('active', i === index));
      currentImageIndex = index;
    }

    function nextImage() { setImage(currentImageIndex + 1); }
    function prevImage() { setImage(currentImageIndex - 1); }

    function closeModal() {
      modal.classList.remove('active');
      document.body.style.overflow = '';
    }

    // event listeners
    modalClose.addEventListener('click', closeModal);
    modal.addEventListener('click', (e) => { if (e.target === modal) closeModal(); });
    document.addEventListener('keydown', (e) => {
      if (e.key === 'Escape') closeModal();
      if (e.key === 'ArrowRight' && modal.classList.contains('active')) nextImage();
      if (e.key === 'ArrowLeft' && modal.classList.contains('active')) prevImage();
    });
    carouselNext.addEventListener('click', (e) => { e.stopPropagation(); nextImage(); });
    carouselPrev.addEventListener('click', (e) => { e.stopPropagation(); prevImage(); });

    // attach click to all project cards (including dynamically)
    function attachCardListeners() {
      document.querySelectorAll('.endpoint-card').forEach(card => {
        const idx = card.dataset.projectIndex;
        if (idx !== undefined) {
          const disabled = card.dataset.disabled === 'true';
          card.addEventListener('click', (e) => {
            // ignore if click on link inside
            if (e.target.closest('.endpoint-link') && !disabled) {
              const p = allProjects[parseInt(idx)];
              if (p && p.url && p.url !== '#') window.open(p.url, '_blank');
              return;
            }
            if (!disabled) {
              openModal(parseInt(idx));
            }
          });
        }
      });
    }

    // initial attach
    attachCardListeners();

    // toggle all projects
    const toggleBtn = document.getElementById('toggleAllProjects');
    const allContainerWrap = document.getElementById('allProjectsContainer');
    let allVisible = false;
    toggleBtn.addEventListener('click', function() {
      allVisible = !allVisible;
      allContainerWrap.classList.toggle('visible', allVisible);
      this.textContent = allVisible ? 'GET /projects?all=false' : 'GET /projects?all=true';
      if (!allVisible) this.scrollIntoView({ behavior: 'smooth', block: 'center' });
      setTimeout(attachCardListeners, 50);
    });

    const observer = new MutationObserver(() => attachCardListeners());
    observer.observe(document.getElementById('projects'), { childList: true, subtree: true });
  })();
</script>

</body>
</html>