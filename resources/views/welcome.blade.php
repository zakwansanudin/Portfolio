<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Zakwan Sanudin · Full Stack Developer</title>
  <link rel="preconnect" href="https://fonts.googleapis.com" />
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
  <link href="https://fonts.googleapis.com/css2?family=DM+Sans:wght@400;500;600;700&family=Manrope:wght@500;600;700;800&display=swap" rel="stylesheet" />
  <style>
    *,*::before,*::after{box-sizing:border-box;margin:0;padding:0}
    :root{--bg:#faf9f6;--surface:#fff;--ink:#252923;--muted:#73766e;--border:#e8e6df;--accent:#53634b;--accent-soft:#edf0e9;--warm:#f2eee7}
    html{scroll-behavior:smooth;scroll-padding-top:82px}
    body{font-family:'DM Sans',sans-serif;background:var(--bg);color:var(--ink);-webkit-font-smoothing:antialiased;line-height:1.6}
    a{color:inherit;text-decoration:none}
    :focus-visible{outline:2px solid var(--accent);outline-offset:3px;border-radius:4px}
    nav{position:sticky;top:0;z-index:100;display:flex;align-items:center;justify-content:space-between;padding:1rem max(1.5rem,calc((100vw - 1080px)/2));background:rgba(250,249,246,.96);border-bottom:1px solid var(--border)}
    .nav-brand,.hero-name,.section-title,.endpoint-title,.contact-intro,.modal-title{font-family:'Manrope',sans-serif}
    .nav-brand{font-weight:800;font-size:1.08rem;letter-spacing:-.04em}.nav-brand span{color:var(--accent)}
    .nav-routes{display:flex;gap:2rem;list-style:none}.nav-routes a{font-size:.92rem;color:var(--muted);transition:color .2s}.nav-routes a:hover,.footer-links a:hover{color:var(--accent)}
    .nav-cta{padding:.68rem 1.05rem;background:var(--accent);color:white;font-size:.88rem;font-weight:600;border-radius:5px;transition:background .2s}.nav-cta:hover,.btn-primary:hover,.modal-visit-btn:hover{background:#3e4b38}
    .hero,.section-wrap,footer{max-width:1080px;margin:0 auto;padding-left:2rem;padding-right:2rem}
    .hero{min-height:560px;padding-top:6rem;padding-bottom:6rem;display:grid;grid-template-columns:1.15fr .85fr;gap:4rem;align-items:center}
    .eyebrow,.section-kicker{font-size:.82rem;font-weight:700;letter-spacing:.12em;text-transform:uppercase;color:var(--accent)}
    .hero-name{margin-top:1rem;font-size:clamp(3rem,6vw,5.15rem);line-height:1.04;letter-spacing:-.065em;font-weight:700}.hero-name span{display:block;color:var(--accent)}
    .hero-tagline{max-width:490px;margin-top:1.4rem;font-size:1.08rem;line-height:1.8;color:var(--muted)}
    .hero-actions,.contact-cta-row{display:flex;gap:.8rem;flex-wrap:wrap;margin-top:1.8rem}
    .btn-primary,.btn-ghost{display:inline-flex;align-items:center;justify-content:center;padding:.78rem 1.2rem;border-radius:5px;font-size:.9rem;font-weight:600;transition:background .2s,border-color .2s,color .2s}.btn-primary{background:var(--accent);color:white}.btn-ghost{border:1px solid #d6d5cd;background:transparent}.btn-ghost:hover{border-color:var(--accent);color:var(--accent)}
    .response-card{max-width:360px;justify-self:end}.profile-img{display:block;width:100%;aspect-ratio:4/5;object-fit:cover;border-radius:8px;background:var(--warm)}.response-card-body{margin-top:1rem}.kv-list{list-style:none;display:grid;grid-template-columns:1fr 1fr;gap:.85rem 1rem}.kv-list li{display:flex;flex-direction:column}.kv-list .k{font-size:.74rem;color:var(--muted)}.kv-list .v{font-weight:600;font-size:.9rem}.kv-list .v.accent{color:var(--accent)}
    .section-wrap{padding-top:5rem;padding-bottom:5rem}.section-panel{background:var(--surface);border-top:1px solid var(--border);border-bottom:1px solid var(--border)}.section-title{margin-top:.45rem;margin-bottom:2.4rem;font-size:clamp(1.8rem,3.5vw,2.45rem);letter-spacing:-.05em;line-height:1.2}
    .about-grid{display:grid;grid-template-columns:1.25fr .75fr;gap:4rem;align-items:start}.about-body{font-size:1rem;line-height:1.85;color:#55594f}.about-body p+p{margin-top:1rem}.about-body strong{color:var(--ink);font-weight:700}
    .fields-title{font-size:.84rem;font-weight:700;margin-bottom:.8rem}.field-list{list-style:none;display:flex;flex-wrap:wrap;gap:.5rem}.field-list li{padding:.45rem .72rem;background:var(--warm);border-radius:4px;font-size:.83rem}.field-type{display:none}
    .projects-grid{display:grid;grid-template-columns:repeat(3,minmax(0,1fr));gap:1rem}.projects-grid.all-projects{margin-top:1rem;padding-top:1rem;border-top:1px solid var(--border)}
    .endpoint-card{display:flex;flex-direction:column;min-height:238px;padding:1.35rem;background:var(--bg);border:1px solid var(--border);border-radius:6px;cursor:pointer;transition:border-color .2s,background .2s}.endpoint-card:hover{border-color:#b9c2b2;background:#fff}.endpoint-card-top{display:flex;align-items:center;gap:.4rem;margin-bottom:1.1rem;flex-wrap:wrap}.method,.status-chip{font-size:.72rem;font-weight:600;color:var(--accent)}.route{display:none}.status-chip{margin-left:auto;color:var(--muted)}.endpoint-title{font-weight:700;font-size:1.1rem;letter-spacing:-.025em;margin-bottom:.45rem}.endpoint-desc{font-size:.86rem;color:var(--muted);line-height:1.7;flex:1}.tag-row{display:flex;gap:.4rem;flex-wrap:wrap;margin-top:1rem}.tag{font-size:.72rem;color:#55594f;background:var(--warm);padding:.25rem .5rem;border-radius:3px}.endpoint-link{margin-top:1rem;font-size:.84rem;font-weight:700;color:var(--accent)}.endpoint-link.disabled{color:var(--muted)}
    .toggle-wrap{text-align:center;margin-top:1.8rem}.btn-toggle{padding:.65rem 1rem;border:1px solid var(--border);background:transparent;border-radius:4px;color:var(--ink);font:600 .86rem 'DM Sans',sans-serif;cursor:pointer}.btn-toggle:hover{border-color:var(--accent);color:var(--accent)}.all-projects-container{display:none}.all-projects-container.visible{display:block}
    .contact-inner{display:grid;grid-template-columns:1fr 1fr;gap:4rem;align-items:start}.contact-intro{font-size:clamp(1.8rem,3.5vw,2.55rem);font-weight:700;line-height:1.2;letter-spacing:-.05em}.contact-intro em{font-style:normal;color:var(--accent)}.contact-blurb{margin-top:1rem;font-size:.95rem;color:var(--muted);line-height:1.8}
    .headers-block{padding:.25rem 0}.headers-title{margin-bottom:.7rem;font-size:.84rem;font-weight:700}.header-row{display:flex;align-items:center;gap:1rem;padding:.85rem 0;border-bottom:1px solid var(--border)}.header-key{width:74px;flex-shrink:0;color:var(--muted);font-size:.84rem}.header-val{font-size:.88rem;font-weight:500;overflow-wrap:anywhere}.header-arrow{margin-left:auto;color:var(--accent)}
    footer{display:flex;justify-content:space-between;align-items:center;gap:1rem;padding-top:1.5rem;padding-bottom:1.5rem;border-top:1px solid var(--border)}.footer-text,.footer-links a{font-size:.82rem;color:var(--muted)}.footer-links{display:flex;gap:1.2rem}
    .modal-overlay{position:fixed;inset:0;background:rgba(30,32,28,.56);display:none;align-items:center;justify-content:center;z-index:999;padding:1rem}.modal-overlay.active{display:flex}.modal-box{background:var(--surface);max-width:700px;width:100%;border-radius:8px;padding:1.5rem;position:relative;max-height:90vh;overflow-y:auto}.modal-close{position:absolute;top:.7rem;right:1rem;font-size:1.8rem;cursor:pointer;color:var(--muted);background:none;border:none}.modal-title{font-size:1.5rem;font-weight:700;margin-bottom:.2rem}.modal-sub{color:var(--muted);margin-bottom:1rem;font-size:.9rem}.carousel{position:relative;border-radius:5px;overflow:hidden;background:var(--warm);aspect-ratio:16/9;display:flex;align-items:center;justify-content:center}.carousel img{width:100%;height:100%;object-fit:contain;display:none}.carousel img.active{display:block}.carousel-btn{position:absolute;top:50%;transform:translateY(-50%);background:rgba(255,255,255,.9);border:1px solid var(--border);border-radius:50%;width:38px;height:38px;font-size:1.25rem;cursor:pointer;color:var(--ink);display:flex;align-items:center;justify-content:center}.carousel-btn.prev{left:10px}.carousel-btn.next{right:10px}.carousel-dots{display:flex;justify-content:center;gap:.5rem;margin-top:.8rem}.carousel-dots span{width:8px;height:8px;border-radius:50%;background:var(--border);cursor:pointer}.carousel-dots span.active{background:var(--accent)}.modal-visit-btn{display:inline-block;margin-top:1rem;background:var(--accent);color:white;padding:.65rem 1rem;border-radius:4px;font-size:.88rem;font-weight:600}
    @media(max-width:800px){nav{padding:.85rem 1.2rem}.hero,.section-wrap,footer{padding-left:1.25rem;padding-right:1.25rem}.hero{min-height:auto;padding-top:4.5rem;padding-bottom:4rem;grid-template-columns:1fr;gap:2.5rem}.response-card{width:100%;max-width:300px;justify-self:start}.about-grid{grid-template-columns:1fr;gap:2rem}.projects-grid,.projects-grid.all-projects{grid-template-columns:repeat(2,minmax(0,1fr))}.contact-inner{grid-template-columns:1fr;gap:2rem}.section-wrap{padding-top:3.5rem;padding-bottom:3.5rem}}
    @media(max-width:540px){.nav-routes{gap:.8rem}.nav-routes a{font-size:.82rem}.nav-cta{padding:.55rem .7rem;font-size:.8rem}.projects-grid,.projects-grid.all-projects{grid-template-columns:1fr}.endpoint-card{min-height:0}.kv-list{grid-template-columns:1fr 1fr}footer{align-items:flex-start;flex-direction:column}.footer-links{gap:1rem}.header-row{gap:.5rem}.header-val{font-size:.82rem}}
    @media(prefers-reduced-motion:reduce){html{scroll-behavior:auto}*,*::before,*::after{transition:none!important}}
  </style>
</head>
<body>

<!-- NAV -->
<nav>
  <a class="nav-brand" href="#">Zakwan Sanudin<span>.</span></a>
  <ul class="nav-routes">
    <li><a href="#about">About</a></li>
    <li><a href="#projects">Projects</a></li>
    <li><a href="#contact">Contact</a></li>
  </ul>
  <a class="nav-cta" href="#contact">Let's work together</a>
</nav>

<!-- HERO -->
<div class="hero">
  <div class="hero-left">
    <p class="eyebrow">Full stack developer · Selangor, Malaysia</p>
    <h1 class="hero-name">Zakwan <span>Sanudin</span></h1>
    <p class="hero-tagline">Full stack developer specialising in Laravel. I build applications that are fast, reliable, and genuinely pleasant to use.</p>
    <div class="hero-actions">
      <a class="btn-primary" href="#projects">View my work</a>
      <a class="btn-ghost" href="#contact">Get in touch</a>
    </div>
  </div>
  <div class="hero-right">
    <div class="response-card">
      <div class="response-card-body">
        <img src="img/profile.png" alt="Zakwan Sanudin" class="profile-img" />
        <ul class="kv-list">
          <li><span class="k">Focus</span><span class="v">Web applications</span></li>
          <li><span class="k">Speciality</span><span class="v">Laravel</span></li>
          <li><span class="k">Experience</span><span class="v">2 years</span></li>
          <li><span class="k">Availability</span><span class="v accent">Open to work</span></li>
        </ul>
      </div>
    </div>
  </div>
</div>

<!-- ABOUT -->
<section id="about">
  <div class="section-wrap">
    <p class="section-kicker">A little about me</p>
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
    <p class="section-kicker">Things I’ve worked on</p>
    <h2 class="section-title">Selected projects</h2>
    <div class="projects-grid" id="featuredProjects"></div>

    <div class="toggle-wrap">
      <button class="btn-toggle" id="toggleAllProjects">Show all projects</button>
    </div>
    <div class="all-projects-container" id="allProjectsContainer">
      <div class="projects-grid all-projects" id="allProjectsGrid"></div>
    </div>
  </div>
</section>

<!-- CONTACT -->
<section id="contact">
  <div class="section-wrap">
    <p class="section-kicker" style="margin-bottom:1.2rem">Get in touch</p>
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
    <span class="footer-text">© <span id="yr"></span> Zakwan Sanudin</span>
    <div class="footer-links">
      <a href="#about">About</a>
      <a href="#projects">Projects</a>
      <a href="#contact">Contact</a>
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
        <article class="endpoint-card" data-project-index="${index}" data-disabled="${disabled}" tabindex="${disabled ? '-1' : '0'}" role="${disabled ? 'article' : 'button'}" aria-label="${disabled ? p.title : `View ${p.title} project details`}">
          <div class="endpoint-card-top">
            <span class="method">${p.tags[0]}</span>
            <span class="status-chip">${disabled ? 'In progress' : 'Selected work'}</span>
          </div>
          <h3 class="endpoint-title">${p.title}</h3>
          <p class="endpoint-desc">${p.desc}</p>
          <div class="tag-row">${p.tags.map(t => `<span class="tag">${t}</span>`).join('')}</div>
          <span class="endpoint-link ${disabled ? 'disabled' : ''}">${disabled ? 'In progress' : 'View project details →'}</span>
        </article>
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
      this.textContent = allVisible ? 'Show fewer projects' : 'Show all projects';
      if (!allVisible) this.scrollIntoView({ behavior: 'smooth', block: 'center' });
      setTimeout(attachCardListeners, 50);
    });

  })();
</script>

</body>
</html>
