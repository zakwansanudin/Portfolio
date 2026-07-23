<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8" />
<meta name="viewport" content="width=device-width, initial-scale=1.0" />
<title>Zakwan Sanudin · Full Stack Developer</title>
<link rel="preconnect" href="https://fonts.googleapis.com" />
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
<link href="https://fonts.googleapis.com/css2?family=IBM+Plex+Mono:wght@400;500;600;700&family=IBM+Plex+Sans:wght@400;500;600;700&display=swap" rel="stylesheet" />
<style>
  *,*::before,*::after{box-sizing:border-box;margin:0;padding:0;}

  :root{
    --bg:#0B0E14;
    --panel:#10141C;
    --panel-2:#161B25;
    --panel-3:#1C2230;
    --border:#252C3A;
    --border-soft:#1B212C;
    --text:#D7DCE5;
    --text-dim:#9AA3B2;
    --muted:#5B6474;
    --keyword:#C792EA;
    --string:#7FD88F;
    --func:#E5C07B;
    --type:#61AFEF;
    --const:#E39A5E;
    --danger:#E06C75;
    --radius:14px;
    --gutter-w:44px;
  }

  html{scroll-behavior:smooth;}
  body{
    font-family:'IBM Plex Sans',sans-serif;
    background:var(--bg);
    color:var(--text);
    -webkit-font-smoothing:antialiased;
  }
  a{color:inherit;text-decoration:none;}
  ::selection{background:rgba(97,175,239,0.28);}
  .mono{font-family:'IBM Plex Mono',monospace;}

  /* ---------- editor chrome ---------- */
  .win{
    background:var(--panel);
    border:1px solid var(--border);
    border-radius:var(--radius);
    overflow:hidden;
  }
  .win-bar{
    display:flex;
    align-items:center;
    gap:.9rem;
    padding:.7rem 1rem;
    background:var(--panel-2);
    border-bottom:1px solid var(--border);
  }
  .dots{display:flex;gap:.4rem;flex-shrink:0;}
  .dots span{width:10px;height:10px;border-radius:50%;}
  .dots .r{background:#E06C75;} .dots .y{background:#E5C07B;} .dots .g{background:#7FD88F;}
  .win-tabs{display:flex;gap:.15rem;overflow-x:auto;}
  .win-tab{
    font-family:'IBM Plex Mono',monospace;
    font-size:.76rem;
    color:var(--muted);
    padding:.35rem .8rem;
    border-radius:6px;
    white-space:nowrap;
    display:flex;align-items:center;gap:.4rem;
  }
  .win-tab.on{color:var(--text);background:var(--panel-3);}
  .win-tab .ext{color:var(--func);}
  .win-branch{
    margin-left:auto;
    font-family:'IBM Plex Mono',monospace;
    font-size:.72rem;
    color:var(--string);
    display:flex;align-items:center;gap:.35rem;
    flex-shrink:0;
    padding-left:1rem;
  }
  .win-branch::before{content:'⎇';}

  /* ---------- status bar bottom ---------- */
  .statusbar{
    background:#0A1B14;
    border-top:1px solid var(--border);
  }
  .statusbar-inner{
    max-width:1180px;margin:0 auto;
    display:flex;align-items:center;justify-content:space-between;
    padding:.5rem 3rem;
    font-family:'IBM Plex Mono',monospace;
    font-size:.72rem;
    color:var(--string);
    flex-wrap:wrap;gap:.5rem;
  }
  .statusbar-inner span{opacity:.85;}

  /* ---------- nav ---------- */
  nav{
    position:fixed;top:0;left:0;right:0;z-index:100;
    display:flex;align-items:center;justify-content:space-between;
    padding:.9rem 3rem;
    background:rgba(11,14,20,0.82);
    backdrop-filter:blur(14px);
    border-bottom:1px solid var(--border-soft);
  }
  .brand{font-family:'IBM Plex Mono',monospace;font-weight:600;font-size:1rem;color:var(--text);}
  .brand .dot{color:var(--func);}
  .nav-links{display:flex;gap:.2rem;list-style:none;}
  .nav-links a{
    font-family:'IBM Plex Mono',monospace;font-size:.8rem;color:var(--text-dim);
    padding:.4rem .85rem;border-radius:6px;display:flex;align-items:center;gap:.4rem;
    transition:.15s;
  }
  .nav-links a:hover{color:var(--text);background:var(--panel-3);}
  .nav-links .ext{color:var(--func);}
  .status-pill{
    font-family:'IBM Plex Mono',monospace;font-size:.76rem;font-weight:500;color:var(--string);
    background:rgba(127,216,143,0.1);border:1px solid rgba(127,216,143,0.3);
    padding:.4rem .9rem;border-radius:100px;display:inline-flex;align-items:center;gap:.45rem;
  }
  .status-pill::before{content:'';width:6px;height:6px;border-radius:50%;background:var(--string);box-shadow:0 0 8px var(--string);}

  /* ---------- hero ---------- */
  .hero{max-width:1180px;margin:0 auto;padding:7.5rem 3rem 4.5rem;}
  .hero-eyebrow{
    font-family:'IBM Plex Mono',monospace;font-size:.8rem;color:var(--muted);
    margin-bottom:.9rem;
  }
  .hero-eyebrow .k{color:var(--keyword);}
  .hero-grid{display:grid;grid-template-columns:1.15fr .85fr;gap:1.5rem;align-items:stretch;}

  .code-panel .win-bar .win-tab{cursor:default;}
  .code-body{display:flex;font-size:.86rem;line-height:1.85;}
  .gutter{
    width:var(--gutter-w);flex-shrink:0;padding:1.2rem 0;text-align:right;
    font-family:'IBM Plex Mono',monospace;color:#333B4A;font-size:.8rem;
    border-right:1px solid var(--border-soft);user-select:none;
  }
  .gutter div{padding-right:.9rem;}
  .code-lines{padding:1.2rem 1.3rem;font-family:'IBM Plex Mono',monospace;overflow-x:auto;flex:1;}
  .code-lines .ln{white-space:pre;}
  .c-kw{color:var(--keyword);}
  .c-fn{color:var(--func);}
  .c-str{color:var(--string);}
  .c-type{color:var(--type);}
  .c-const{color:var(--const);}
  .c-com{color:var(--muted);}
  .c-plain{color:var(--text);}
  .cursor-blink{display:inline-block;width:7px;height:1.05em;background:var(--type);vertical-align:text-bottom;animation:blink 1s step-end infinite;}
  @keyframes blink{50%{opacity:0;}}

  .term-panel{display:flex;flex-direction:column;}
  .term-body{padding:1.2rem 1.3rem;font-family:'IBM Plex Mono',monospace;font-size:.84rem;line-height:1.9;flex:1;}
  .term-body .prompt{color:var(--string);}
  .term-body .path{color:var(--type);}
  .term-kv{color:var(--text-dim);}
  .term-kv .k{color:var(--func);}
  .term-kv .v{color:var(--text);}
  .term-kv .v.hl{color:var(--string);}
  .hero-actions{display:flex;gap:.8rem;flex-wrap:wrap;padding:1rem 1.3rem 1.3rem;border-top:1px solid var(--border-soft);}
  .btn{
    font-family:'IBM Plex Mono',monospace;font-size:.82rem;font-weight:500;
    padding:.68rem 1.3rem;border-radius:8px;border:1px solid transparent;cursor:pointer;
    display:inline-flex;align-items:center;gap:.5rem;transition:.15s;
  }
  .btn-solid{background:var(--type);color:#0B0E14;}
  .btn-solid:hover{transform:translateY(-2px);box-shadow:0 8px 20px rgba(97,175,239,0.25);}
  .btn-line{background:transparent;color:var(--text);border-color:var(--border);}
  .btn-line:hover{border-color:var(--type);color:var(--type);transform:translateY(-2px);}

  /* ---------- section shells ---------- */
  section{max-width:1180px;margin:0 auto;padding:4.5rem 3rem;}
  .sec-tag{
    display:inline-flex;align-items:center;gap:.6rem;
    font-family:'IBM Plex Mono',monospace;font-size:.78rem;color:var(--muted);
    margin-bottom:1rem;
  }
  .sec-tag .file{color:var(--func);}
  .sec-title{font-family:'IBM Plex Sans',sans-serif;font-weight:700;font-size:clamp(1.5rem,2.6vw,2rem);letter-spacing:-.02em;margin-bottom:2.6rem;}

  /* ---------- about ---------- */
  .about-grid{display:grid;grid-template-columns:1.3fr 1fr;gap:2.5rem;align-items:start;}
  .about-body{font-size:1rem;color:var(--text-dim);line-height:1.85;}
  .about-body p+p{margin-top:1rem;}
  .about-body strong{color:var(--type);font-weight:600;}
  .stack-panel .win-bar{padding:.6rem .9rem;}
  .stack-list{padding:.9rem;display:flex;flex-direction:column;gap:.35rem;}
  .stack-row{
    display:flex;align-items:center;justify-content:space-between;
    font-family:'IBM Plex Mono',monospace;font-size:.82rem;
    padding:.55rem .8rem;border-radius:7px;background:var(--panel-2);
    border:1px solid var(--border-soft);transition:.15s;
  }
  .stack-row:hover{border-color:var(--type);transform:translateX(3px);}
  .stack-row .name{color:var(--text);}
  .stack-row .type{color:var(--muted);font-size:.72rem;}

  /* ---------- projects ---------- */
  .proj-json-open,.proj-json-close{font-family:'IBM Plex Mono',monospace;color:var(--muted);font-size:.85rem;}
  .projects-grid{display:grid;grid-template-columns:repeat(3,1fr);gap:1.2rem;margin-top:1rem;}
  .projects-grid.extra{margin-top:1.2rem;padding-top:1.5rem;border-top:1px dashed var(--border);}
  .pcard{
    background:var(--panel);border:1px solid var(--border);border-radius:var(--radius);
    padding:1.4rem;cursor:pointer;display:flex;flex-direction:column;transition:.2s;
    position:relative;
  }
  .pcard:hover{transform:translateY(-4px);border-color:var(--type);box-shadow:0 16px 36px rgba(0,0,0,0.35);}
  .pcard-top{display:flex;align-items:center;gap:.5rem;margin-bottom:1rem;flex-wrap:wrap;}
  .method{font-family:'IBM Plex Mono',monospace;font-size:.68rem;font-weight:700;padding:.16rem .5rem;border-radius:5px;letter-spacing:.02em;}
  .method.get{color:var(--type);background:rgba(97,175,239,0.12);}
  .method.post{color:var(--keyword);background:rgba(199,146,234,0.12);}
  .pcard-route{font-family:'IBM Plex Mono',monospace;font-size:.74rem;color:var(--muted);}
  .status-chip{font-family:'IBM Plex Mono',monospace;font-size:.68rem;font-weight:600;padding:.16rem .55rem;border-radius:100px;display:inline-flex;align-items:center;gap:.3rem;margin-left:auto;}
  .status-chip::before{content:'';width:5px;height:5px;border-radius:50%;background:currentColor;}
  .status-chip.ok{color:var(--string);background:rgba(127,216,143,0.1);}
  .status-chip.build{color:var(--const);background:rgba(227,154,94,0.12);}
  .pcard-title{font-family:'IBM Plex Sans',sans-serif;font-weight:700;font-size:1.08rem;letter-spacing:-.01em;margin-bottom:.5rem;}
  .pcard-desc{font-size:.85rem;color:var(--text-dim);line-height:1.65;flex:1;}
  .tag-row{display:flex;gap:.35rem;flex-wrap:wrap;margin-top:1.1rem;}
  .tag{font-family:'IBM Plex Mono',monospace;font-size:.66rem;padding:.22rem .55rem;border-radius:5px;background:var(--panel-3);color:var(--text-dim);}
  .pcard-foot{display:flex;align-items:center;justify-content:space-between;margin-top:1.2rem;}
  .pcard-gallery{font-size:.8rem;font-weight:600;color:var(--type);}
  .pcard-gallery.disabled{color:var(--muted);}
  .pcard-visit{
    font-family:'IBM Plex Mono',monospace;font-size:.72rem;color:var(--string);
    padding:.3rem .6rem;border-radius:6px;border:1px solid rgba(127,216,143,0.3);
    display:inline-flex;align-items:center;gap:.3rem;transition:.15s;
  }
  .pcard-visit:hover{background:rgba(127,216,143,0.1);}

  .toggle-wrap{text-align:center;margin-top:2.2rem;}
  .btn-toggle{
    font-family:'IBM Plex Mono',monospace;font-size:.82rem;color:var(--text);
    background:var(--panel);border:1px solid var(--border);
    padding:.65rem 1.4rem;border-radius:8px;cursor:pointer;transition:.15s;
  }
  .btn-toggle:hover{border-color:var(--type);color:var(--type);transform:translateY(-2px);}
  .extra-wrap{display:none;}
  .extra-wrap.visible{display:block;}

  /* ---------- modal ---------- */
  .modal-overlay{
    position:fixed;inset:0;background:rgba(4,6,10,0.82);backdrop-filter:blur(6px);
    z-index:999;display:none;align-items:center;justify-content:center;padding:1.5rem;
  }
  .modal-overlay.active{display:flex;animation:fadeIn .2s ease;}
  @keyframes fadeIn{from{opacity:0;}to{opacity:1;}}
  .modal-box{
    background:var(--panel);border:1px solid var(--border);border-radius:var(--radius);
    max-width:760px;width:100%;max-height:90vh;overflow:hidden;
    display:flex;flex-direction:column;box-shadow:0 40px 90px rgba(0,0,0,0.5);
    animation:slideUp .25s ease;
  }
  @keyframes slideUp{from{transform:translateY(24px);opacity:0;}to{transform:translateY(0);opacity:1;}}
  .modal-head{display:flex;align-items:center;gap:.8rem;padding:.85rem 1.1rem;border-bottom:1px solid var(--border);background:var(--panel-2);}
  .modal-head h3{font-family:'IBM Plex Mono',monospace;font-size:.88rem;color:var(--text);font-weight:600;}
  .modal-close{margin-left:auto;background:none;border:none;font-size:1.3rem;color:var(--muted);cursor:pointer;transition:.15s;line-height:1;}
  .modal-close:hover{color:var(--danger);transform:rotate(90deg);}
  .modal-body{padding:1.2rem;overflow-y:auto;}
  .carousel-container{position:relative;border-radius:10px;overflow:hidden;background:var(--panel-2);border:1px solid var(--border-soft);}
  .carousel-slide{display:flex;transition:transform .35s ease;}
  .carousel-slide img{width:100%;flex-shrink:0;object-fit:cover;aspect-ratio:16/10;max-height:420px;background:var(--panel-3);}
  .carousel-btn{
    position:absolute;top:50%;transform:translateY(-50%);
    background:rgba(11,14,20,0.65);backdrop-filter:blur(4px);border:1px solid var(--border);
    border-radius:40px;width:36px;height:36px;font-size:1.2rem;cursor:pointer;color:var(--text);
    display:flex;align-items:center;justify-content:center;transition:.15s;font-weight:300;
  }
  .carousel-btn:hover{background:var(--panel-3);color:var(--type);}
  .carousel-btn.prev{left:12px;} .carousel-btn.next{right:12px;}
  .carousel-dots{display:flex;justify-content:center;gap:.5rem;padding:.9rem 0 .2rem;}
  .carousel-dots span{width:8px;height:8px;border-radius:20px;background:var(--border);cursor:pointer;transition:.2s;}
  .carousel-dots span.active{background:var(--type);width:22px;}
  .modal-foot{display:flex;align-items:center;justify-content:space-between;padding:.9rem 1.2rem 1.1rem;flex-wrap:wrap;gap:.7rem;}
  .modal-desc{font-size:.82rem;color:var(--text-dim);max-width:60%;}
  .modal-visit{
    font-family:'IBM Plex Mono',monospace;font-size:.8rem;font-weight:600;color:#0B0E14;
    background:var(--string);padding:.55rem 1.1rem;border-radius:7px;display:inline-flex;align-items:center;gap:.4rem;
    transition:.15s;
  }
  .modal-visit:hover{opacity:.88;transform:translateY(-1px);}
  .modal-visit.none{background:transparent;color:var(--muted);border:1px solid var(--border);}

  /* ---------- contact ---------- */
  .contact-grid{display:grid;grid-template-columns:1fr 1fr;gap:2.5rem;align-items:start;}
  .contact-head{font-family:'IBM Plex Sans',sans-serif;font-weight:700;font-size:clamp(1.4rem,2.4vw,1.9rem);line-height:1.35;letter-spacing:-.02em;}
  .contact-head em{font-style:normal;color:var(--string);}
  .contact-blurb{font-size:.92rem;color:var(--text-dim);line-height:1.8;margin-top:1rem;max-width:440px;}
  .contact-actions{display:flex;gap:.75rem;flex-wrap:wrap;margin-top:1.8rem;}
  .term-contact .term-body{padding:1rem 1.2rem;}
  .term-line{display:flex;align-items:center;gap:.85rem;padding:.6rem .3rem;border-radius:7px;transition:.15s;}
  .term-line:hover{background:var(--panel-3);}
  .term-line .flag{color:var(--func);min-width:64px;font-size:.76rem;}
  .term-line .val{color:var(--text);font-size:.85rem;font-weight:500;}
  .term-line .go{margin-left:auto;color:var(--muted);}

  footer{padding:0;}
  .footer-inner{max-width:1180px;margin:0 auto;padding:2rem 3rem 2.5rem;display:flex;align-items:center;justify-content:space-between;flex-wrap:wrap;gap:1rem;}
  .footer-text{font-family:'IBM Plex Mono',monospace;font-size:.78rem;color:var(--muted);}
  .footer-links{display:flex;gap:.3rem;}
  .footer-links a{font-family:'IBM Plex Mono',monospace;font-size:.78rem;color:var(--muted);padding:.3rem .7rem;border-radius:6px;transition:.15s;}
  .footer-links a:hover{color:var(--text);background:var(--panel-3);}

  @media (max-width:900px){
    nav{padding:.9rem 1.4rem;}
    .nav-links{display:none;}
    .hero{padding:6.5rem 1.4rem 3rem;}
    .hero-grid{grid-template-columns:1fr;}
    section{padding:3.2rem 1.4rem;}
    .about-grid,.contact-grid{grid-template-columns:1fr;gap:1.8rem;}
    .projects-grid,.projects-grid.extra{grid-template-columns:1fr;}
    .statusbar-inner{padding:.5rem 1.4rem;}
    .footer-inner{padding:1.8rem 1.4rem;}
    .modal-desc{max-width:100%;}
  }
  @media (prefers-reduced-motion:reduce){*{animation:none !important;transition:none !important;}}
</style>
</head>
<body>

<nav>
  <a class="brand" href="#">zakwan<span class="dot">.</span>dev</a>
  <ul class="nav-links">
    <li><a href="#about"><span class="ext">01</span>about.md</a></li>
    <li><a href="#projects"><span class="ext">02</span>projects.json</a></li>
    <li><a href="#contact"><span class="ext">03</span>contact.sh</a></li>
  </ul>
  <span class="status-pill">available for work</span>
</nav>

<!-- HERO -->
<div class="hero">
  <div class="hero-eyebrow"><span class="k">require</span> 'zakwan/profile.php';</div>
  <div class="hero-grid">

    <div class="win code-panel">
      <div class="win-bar">
        <div class="dots"><span class="r"></span><span class="y"></span><span class="g"></span></div>
        <div class="win-tabs">
          <span class="win-tab on">Controller<span class="ext">.php</span></span>
        </div>
        <span class="win-branch">main</span>
      </div>
      <div class="code-body">
        <div class="gutter">
          <div>1</div><div>2</div><div>3</div><div>4</div><div>5</div><div>6</div><div>7</div><div>8</div><div>9</div>
        </div>
        <div class="code-lines">
<div class="ln"><span class="c-kw">class</span> <span class="c-type">ZakwanSanudin</span> <span class="c-kw">extends</span> <span class="c-type">Developer</span></div>
<div class="ln">{</div>
<div class="ln">&nbsp;&nbsp;<span class="c-kw">public function</span> <span class="c-fn">focus</span>()</div>
<div class="ln">&nbsp;&nbsp;{</div>
<div class="ln">&nbsp;&nbsp;&nbsp;&nbsp;<span class="c-kw">return</span> <span class="c-str">'Laravel &amp; full-stack apps'</span>;</div>
<div class="ln">&nbsp;&nbsp;&nbsp;&nbsp;<span class="c-com">// fast, reliable, pleasant to use</span></div>
<div class="ln">&nbsp;&nbsp;}</div>
<div class="ln">}</div>
<div class="ln"><span class="cursor-blink"></span></div>
        </div>
      </div>
    </div>

    <div class="win term-panel">
      <div class="win-bar">
        <div class="dots"><span class="r"></span><span class="y"></span><span class="g"></span></div>
        <div class="win-tabs"><span class="win-tab on">zsh</span></div>
      </div>
      <div class="term-body">
        <div><span class="prompt">$</span> php artisan <span class="path">whoami</span> --verbose</div>
        <div style="margin-top:.6rem;" class="term-kv"><span class="k">"role"</span>: <span class="v">"Full Stack Developer"</span></div>
        <div class="term-kv"><span class="k">"based_in"</span>: <span class="v">"Selangor, MY"</span></div>
        <div class="term-kv"><span class="k">"experience"</span>: <span class="v">"2 years"</span></div>
        <div class="term-kv"><span class="k">"primary_stack"</span>: <span class="v">"Laravel + MySQL"</span></div>
        <div class="term-kv"><span class="k">"status"</span>: <span class="v hl">"open to opportunities"</span></div>
      </div>
      <div class="hero-actions">
        <a class="btn btn-solid" href="#projects">View my work</a>
        <a class="btn btn-line" href="#contact">Get in touch</a>
      </div>
    </div>

  </div>
</div>

<!-- ABOUT -->
<section id="about">
  <div class="sec-tag"><span class="file">📄 about.md</span> — read only</div>
  <h2 class="sec-title">About me</h2>
  <div class="about-grid">
    <div class="about-body">
      <p>I'm a full stack developer with a strong focus on <strong>Laravel</strong>. My work sits at the intersection of clean backend architecture and practical, user-friendly interfaces — I care equally about what happens in the database and what the end user sees on screen.</p>
      <p>I've built production systems for schools, community platforms, and learning applications used by real people every day. I take pride in writing code that's easy to maintain and scale, and in shipping products that just work.</p>
      <p>Currently expanding into <strong>cloud-native development</strong> and microservices, and always looking for interesting problems to solve.</p>
    </div>
    <div class="win stack-panel">
      <div class="win-bar">
        <div class="dots"><span class="r"></span><span class="y"></span><span class="g"></span></div>
        <div class="win-tabs"><span class="win-tab on">stack<span class="ext">.json</span></span></div>
      </div>
      <div class="stack-list">
        <div class="stack-row"><span class="name">Laravel</span><span class="type">framework</span></div>
        <div class="stack-row"><span class="name">PHP</span><span class="type">language</span></div>
        <div class="stack-row"><span class="name">MySQL</span><span class="type">database</span></div>
        <div class="stack-row"><span class="name">ASP.NET Core</span><span class="type">framework</span></div>
        <div class="stack-row"><span class="name">JavaScript</span><span class="type">language</span></div>
        <div class="stack-row"><span class="name">React</span><span class="type">library</span></div>
        <div class="stack-row"><span class="name">TailwindCSS</span><span class="type">styling</span></div>
        <div class="stack-row"><span class="name">React Native</span><span class="type">mobile</span></div>
        <div class="stack-row"><span class="name">Flutter</span><span class="type">mobile</span></div>
      </div>
    </div>
  </div>
</section>

<!-- PROJECTS -->
<section id="projects">
  <div class="sec-tag"><span class="file">📄 projects.json</span> — <span class="proj-json-open">[</span> <span id="projCount">5</span> objects <span class="proj-json-close">]</span></div>
  <h2 class="sec-title">Selected projects</h2>

  <div class="projects-grid" id="featuredProjects">

    <div class="pcard"
         data-title="Kampung Online"
         data-desc="A digital community platform for the KampungOnline network — user management, announcement broadcasting, and real-time engagement tools for local communities."
         data-link=""
         data-images='["images/kampung-online-1.png","images/kampung-online-2.png","images/kampung-online-3.png"]'>
      <div class="pcard-top"><span class="method get">GET</span><span class="pcard-route">/projects/kampung-online</span><span class="status-chip ok">200</span></div>
      <h3 class="pcard-title">Kampung Online</h3>
      <p class="pcard-desc">A digital community platform for the KampungOnline network — user management, announcement broadcasting, and real-time engagement tools.</p>
      <div class="tag-row"><span class="tag">Laravel</span><span class="tag">Bootstrap</span><span class="tag">MySQL</span></div>
      <div class="pcard-foot"><span class="pcard-gallery">↗ View gallery</span></div>
    </div>

    <div class="pcard"
         data-title="ePDK"
         data-desc="Student progress recording system for Program Didik Kasih, deployed across Selangor primary schools. Tracks academic development and generates progress reports."
         data-link=""
         data-images='["images/epdk-1.jpg","images/epdk-2.jpg","images/epdk-3.jpg"]'>
      <div class="pcard-top"><span class="method get">GET</span><span class="pcard-route">/projects/epdk</span><span class="status-chip ok">200</span></div>
      <h3 class="pcard-title">ePDK</h3>
      <p class="pcard-desc">Student progress recording system for Program Didik Kasih, deployed across Selangor primary schools. Tracks academic development and generates reports.</p>
      <div class="tag-row"><span class="tag">Laravel</span><span class="tag">TailwindCSS</span><span class="tag">MySQL</span></div>
      <div class="pcard-foot"><span class="pcard-gallery">↗ View gallery</span></div>
    </div>

    <div class="pcard"
         data-title="E-Learning Platform"
         data-desc="An interactive learning platform featuring Quiz Arena for engaging assessments and a student dashboard with class timetables, learning resources, and academic management tools."
         data-link=""
         data-images='["images/e-learning-1.jpg","images/e-learning-2.jpg","images/e-learning-3.jpg"]'>
      <div class="pcard-top"><span class="method get">GET</span><span class="pcard-route">/projects/e-learning</span><span class="status-chip ok">200</span></div>
      <h3 class="pcard-title">E-Learning Platform</h3>
      <p class="pcard-desc">Interactive learning platform featuring Quiz Arena for assessments and a student dashboard with timetables and learning resources.</p>
      <div class="tag-row"><span class="tag">Laravel</span><span class="tag">React</span><span class="tag">MySQL</span></div>
      <div class="pcard-foot"><span class="pcard-gallery">↗ View gallery</span></div>
    </div>
  </div>

  <div class="toggle-wrap">
    <button class="btn-toggle" id="toggleAllProjects">GET /projects?all=true</button>
  </div>

  <div class="extra-wrap" id="allProjectsContainer">
    <div class="projects-grid extra">
      <div class="pcard"
           data-title="HomeTutor CSR Program"
           data-desc="Developed a responsive landing page for the HomeTutor CSR Program, promoting educational initiatives for schools and providing information on program benefits, activities, and registration."
           data-link=""
           data-images='["images/hometutor-1.jpg","images/hometutor-2.jpg"]'>
        <div class="pcard-top"><span class="method get">GET</span><span class="pcard-route">/projects/hometutor-csr</span><span class="status-chip ok">200</span></div>
        <h3 class="pcard-title">HomeTutor CSR Program</h3>
        <p class="pcard-desc">Responsive landing page for the HomeTutor CSR Program, promoting educational initiatives and registration opportunities for schools.</p>
        <div class="tag-row"><span class="tag">HTML</span><span class="tag">CSS</span><span class="tag">JavaScript</span></div>
        <div class="pcard-foot"><span class="pcard-gallery">↗ View gallery</span></div>
      </div>

      <div class="pcard"
           data-title="Employee Management System"
           data-desc="A comprehensive employee management platform for workforce administration, including employee records, attendance tracking, department management, payroll processing, and performance monitoring, built with ASP.NET Core MVC and SQL Server."
           data-link=""
           data-images='["images/ems-1.jpg","images/ems-2.jpg","images/ems-3.jpg"]'>
        <div class="pcard-top"><span class="method get">GET</span><span class="pcard-route">/projects/ems</span><span class="status-chip build">building</span></div>
        <h3 class="pcard-title">Employee Management System</h3>
        <p class="pcard-desc">Workforce administration platform — employee records, attendance, departments, payroll, and performance monitoring.</p>
        <div class="tag-row"><span class="tag">ASP.NET Core</span><span class="tag">MSSQL</span></div>
        <div class="pcard-foot"><span class="pcard-gallery disabled">Coming soon</span></div>
      </div>
    </div>
  </div>
</section>

<!-- MODAL -->
<div class="modal-overlay" id="projectModal">
  <div class="modal-box">
    <div class="modal-head">
      <span class="dots"><span class="r"></span><span class="y"></span><span class="g"></span></span>
      <h3 id="modalTitle" class="mono">project.gallery</h3>
      <button class="modal-close" id="modalClose" aria-label="Close">✕</button>
    </div>
    <div class="modal-body">
      <div class="carousel-container">
        <div class="carousel-slide" id="carouselSlide"></div>
        <button class="carousel-btn prev" id="carouselPrev" aria-label="Previous image">‹</button>
        <button class="carousel-btn next" id="carouselNext" aria-label="Next image">›</button>
      </div>
      <div class="carousel-dots" id="carouselDots"></div>
    </div>
    <div class="modal-foot">
      <p class="modal-desc" id="modalDesc"></p>
      <a class="modal-visit" id="modalVisit" href="#" target="_blank" rel="noopener">Visit live site ↗</a>
    </div>
  </div>
</div>

<!-- CONTACT -->
<section id="contact">
  <div class="sec-tag"><span class="method post">POST</span> /contact <span class="status-chip ok">202</span></div>
  <h2 class="sec-title" style="margin-bottom:0;"></h2>
  <div class="contact-grid" style="margin-top:2rem;">
    <div>
      <h3 class="contact-head">Have a project in mind?<br><em>I'd love to hear about it.</em></h3>
      <p class="contact-blurb">Whether you need a Laravel backend, a full-stack web app, or just want to talk through an idea — drop me a message and I'll get back to you within a day.</p>
      <div class="contact-actions">
        <a class="btn btn-solid" href="mailto:zakwansanudin02@gmail.com">Send an email</a>
        <a class="btn btn-line" href="docs/CV_ZAKWANSANUDIN.pdf" download>Download CV</a>
      </div>
    </div>
    <div class="win term-contact">
      <div class="win-bar">
        <div class="dots"><span class="r"></span><span class="y"></span><span class="g"></span></div>
        <div class="win-tabs"><span class="win-tab on">contact<span class="ext">.sh</span></span></div>
      </div>
      <div class="term-body">
        <a class="term-line" href="mailto:zakwansanudin02@gmail.com">
          <span class="flag mono">--email</span><span class="val mono">zakwansanudin02@gmail.com</span><span class="go">↗</span>
        </a>
        <a class="term-line" href="tel:+601133035718">
          <span class="flag mono">--phone</span><span class="val mono">+60 11-3303 5718</span><span class="go">↗</span>
        </a>
        <a class="term-line" href="https://github.com/zakwansanudin" target="_blank" rel="noopener">
          <span class="flag mono">--github</span><span class="val mono">github.com/zakwansanudin</span><span class="go">↗</span>
        </a>
        <a class="term-line" href="https://www.linkedin.com/in/zakwan-sanudin" target="_blank" rel="noopener">
          <span class="flag mono">--linkedin</span><span class="val mono">linkedin.com/in/zakwan-sanudin</span><span class="go">↗</span>
        </a>
      </div>
    </div>
  </div>
</section>

<div class="statusbar">
  <div class="statusbar-inner">
    <span>● main</span>
    <span id="stTime"></span>
    <span>UTF-8 · LF · PHP</span>
  </div>
</div>

<footer>
  <div class="footer-inner">
    <span class="footer-text">// © <span id="yr"></span> Zakwan Sanudin — built with care</span>
    <div class="footer-links"><a href="#about">about.md</a><a href="#projects">projects.json</a><a href="#contact">contact.sh</a></div>
  </div>
</footer>

<script>
(function(){
  document.getElementById('yr').textContent = new Date().getFullYear();
  var st = document.getElementById('stTime');
  if(st){ st.textContent = new Date().toLocaleDateString('en-GB', { day:'2-digit', month:'short', year:'numeric' }); }

  /* toggle extra projects */
  var toggleBtn = document.getElementById('toggleAllProjects');
  var extraWrap = document.getElementById('allProjectsContainer');
  var allVisible = false;
  toggleBtn.addEventListener('click', function(){
    allVisible = !allVisible;
    extraWrap.classList.toggle('visible', allVisible);
    this.textContent = allVisible ? 'GET /projects?all=false' : 'GET /projects?all=true';
    if(!allVisible) this.scrollIntoView({behavior:'smooth', block:'center'});
  });

  /* ---- modal carousel ---- */
  var modal = document.getElementById('projectModal');
  var modalTitle = document.getElementById('modalTitle');
  var modalDesc = document.getElementById('modalDesc');
  var modalVisit = document.getElementById('modalVisit');
  var slideEl = document.getElementById('carouselSlide');
  var dotsEl = document.getElementById('carouselDots');
  var closeBtn = document.getElementById('modalClose');
  var prevBtn = document.getElementById('carouselPrev');
  var nextBtn = document.getElementById('carouselNext');

  var currentImages = [];
  var currentIndex = 0;

  function placeholderSrc(label){
    var text = (label || 'image').replace(/[^a-z0-9\-\_\. ]/gi,'');
    var svg = "<svg xmlns='http://www.w3.org/2000/svg' width='800' height='500'>" +
      "<rect width='100%' height='100%' fill='%231C2230'/>" +
      "<text x='50%' y='50%' font-family='monospace' font-size='16' fill='%235B6474' text-anchor='middle'>" + text + "</text></svg>";
    return "data:image/svg+xml," + encodeURIComponent(svg).replace(/'/g, "%27");
  }

  function renderCarousel(images, title){
    currentImages = images;
    currentIndex = 0;
    modalTitle.textContent = title || 'project.gallery';
    slideEl.innerHTML = images.map(function(src){
      return '<img src="' + src + '" alt="' + title + '" onerror="this.onerror=null; this.src=\'' + placeholderSrc(src.split('/').pop()) + '\';" />';
    }).join('');
    dotsEl.innerHTML = images.map(function(_, i){
      return '<span class="' + (i===0?'active':'') + '" data-index="' + i + '"></span>';
    }).join('');
    updateSlide(0);
  }

  function updateSlide(index){
    if(!currentImages.length) return;
    var total = currentImages.length;
    var idx = ((index % total) + total) % total;
    currentIndex = idx;
    slideEl.style.transform = 'translateX(-' + (idx*100) + '%)';
    var dots = dotsEl.querySelectorAll('span');
    for(var i=0;i<dots.length;i++){ dots[i].classList.toggle('active', i===idx); }
  }

  function openModal(card){
    var images = JSON.parse(card.getAttribute('data-images') || '[]');
    var title = card.getAttribute('data-title') || 'Project';
    var desc = card.getAttribute('data-desc') || '';
    var link = (card.getAttribute('data-link') || '').trim();

    renderCarousel(images, title);
    modalDesc.textContent = desc;

    if(link){
      modalVisit.href = link;
      modalVisit.textContent = 'Visit live site ↗';
      modalVisit.classList.remove('none');
      modalVisit.style.pointerEvents = 'auto';
    } else {
      modalVisit.href = '#';
      modalVisit.textContent = 'No live deployment yet';
      modalVisit.classList.add('none');
      modalVisit.style.pointerEvents = 'none';
    }

    modal.classList.add('active');
    document.body.style.overflow = 'hidden';
  }

  function closeModal(){
    modal.classList.remove('active');
    document.body.style.overflow = '';
  }

  document.querySelectorAll('.pcard[data-images]').forEach(function(card){
    card.addEventListener('click', function(){ openModal(this); });
  });

  closeBtn.addEventListener('click', closeModal);
  modal.addEventListener('click', function(e){ if(e.target === this) closeModal(); });
  document.addEventListener('keydown', function(e){
    if(!modal.classList.contains('active')) return;
    if(e.key === 'Escape') closeModal();
    if(e.key === 'ArrowLeft'){ e.preventDefault(); updateSlide(currentIndex-1); }
    if(e.key === 'ArrowRight'){ e.preventDefault(); updateSlide(currentIndex+1); }
  });

  prevBtn.addEventListener('click', function(e){ e.stopPropagation(); updateSlide(currentIndex-1); });
  nextBtn.addEventListener('click', function(e){ e.stopPropagation(); updateSlide(currentIndex+1); });
  dotsEl.addEventListener('click', function(e){
    var dot = e.target.closest('span');
    if(!dot) return;
    var idx = parseInt(dot.getAttribute('data-index'), 10);
    if(!isNaN(idx)) updateSlide(idx);
  });
})();
</script>
</body>
</html>