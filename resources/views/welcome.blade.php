<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Zakwan · dark modern</title>
  <!-- Bootstrap 5 + Icons -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" />
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css" />
  <!-- Google Font: Inter & Space Grotesk -->
  <link rel="preconnect" href="https://fonts.googleapis.com" />
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
  <link href="https://fonts.googleapis.com/css2?family=Inter:opsz,wght@14..32,400;14..32,600;14..32,700&family=Space+Grotesk:wght@400;500;600;700&display=swap" rel="stylesheet" />
  <style>
    * { margin: 0; padding: 0; box-sizing: border-box; }

    body {
      font-family: 'Inter', sans-serif;
      background: #0b0f1a;
      color: #eef2fb;
      scroll-behavior: smooth;
    }

    /* ---------- glass navbar (dark) ---------- */
    .navbar-glass-dark {
      background: rgba(11, 15, 26, 0.75);
      backdrop-filter: blur(16px) saturate(200%);
      -webkit-backdrop-filter: blur(16px) saturate(200%);
      border-bottom: 1px solid rgba(255, 255, 255, 0.04);
      box-shadow: 0 12px 40px rgba(0, 0, 0, 0.6);
    }

    .navbar-glass-dark .navbar-brand {
      font-family: 'Space Grotesk', sans-serif;
      font-weight: 700;
      letter-spacing: -0.5px;
      color: white;
      font-size: 1.6rem;
    }

    .navbar-glass-dark .navbar-brand i {
      color: #a78bfa;
      margin-right: 10px;
    }

    .navbar-glass-dark .nav-link {
      color: rgba(255, 255, 255, 0.6);
      font-weight: 500;
      padding: 0.5rem 1.2rem;
      border-radius: 100px;
      transition: 0.2s;
      font-size: 0.95rem;
    }

    .navbar-glass-dark .nav-link:hover,
    .navbar-glass-dark .nav-link.active {
      color: white;
      background: rgba(167, 139, 250, 0.15);
    }

    /* ---------- hero (dark + gradient) ---------- */
    .hero-dark {
      position: relative;
      background: radial-gradient(circle at 30% 20%, #1a1f35, #080b14 85%);
      color: white;
      padding: 160px 0 130px;
      overflow: hidden;
      border-bottom: 1px solid rgba(255, 255, 255, 0.02);
    }

    .hero-dark::before {
      content: '';
      position: absolute;
      inset: 0;
      background: radial-gradient(circle at 80% 60%, rgba(167, 139, 250, 0.08), transparent 50%),
                  radial-gradient(circle at 20% 80%, rgba(96, 165, 250, 0.05), transparent 45%);
      pointer-events: none;
    }

    .hero-content {
      position: relative;
      z-index: 3;
    }

    .hero-dark h1 {
      font-family: 'Space Grotesk', sans-serif;
      font-weight: 700;
      font-size: 4.2rem;
      letter-spacing: -1.5px;
      line-height: 1.1;
    }

    .hero-dark h1 .highlight {
      background: linear-gradient(135deg, #a78bfa, #7c8dff, #60a5fa);
      -webkit-background-clip: text;
      -webkit-text-fill-color: transparent;
      background-clip: text;
    }

    .hero-dark .lead {
      font-size: 1.3rem;
      font-weight: 400;
      color: rgba(255, 255, 255, 0.7);
      max-width: 600px;
      margin: 0 auto;
    }

    .hero-dark .badge-soft {
      background: rgba(167, 139, 250, 0.12);
      backdrop-filter: blur(4px);
      border: 1px solid rgba(167, 139, 250, 0.15);
      color: #d4c9ff;
      padding: 0.5rem 1.8rem;
      border-radius: 60px;
      font-weight: 500;
      letter-spacing: 0.3px;
    }

    .btn-glow {
      background: linear-gradient(135deg, #a78bfa, #7c8dff);
      color: white;
      font-weight: 600;
      padding: 0.8rem 2.8rem;
      border-radius: 60px;
      border: none;
      box-shadow: 0 8px 28px rgba(167, 139, 250, 0.25);
      transition: 0.25s;
    }

    .btn-glow:hover {
      transform: translateY(-4px) scale(1.02);
      box-shadow: 0 18px 40px rgba(167, 139, 250, 0.4);
      background: linear-gradient(135deg, #b79cff, #8a9aff);
      color: white;
    }

    .btn-outline-light-custom {
      border: 1.5px solid rgba(255, 255, 255, 0.15);
      color: rgba(255, 255, 255, 0.8);
      border-radius: 60px;
      padding: 0.7rem 2rem;
      font-weight: 500;
      transition: 0.2s;
      background: transparent;
    }

    .btn-outline-light-custom:hover {
      background: rgba(255, 255, 255, 0.04);
      border-color: rgba(255, 255, 255, 0.3);
      color: white;
    }

    /* ---------- section titles (dark) ---------- */
    .section-title-dark {
      font-family: 'Space Grotesk', sans-serif;
      font-weight: 700;
      font-size: 2.6rem;
      letter-spacing: -0.5px;
      color: white;
      position: relative;
      display: inline-block;
    }

    .section-title-dark::after {
      content: '';
      position: absolute;
      left: 50%;
      bottom: -12px;
      transform: translateX(-50%);
      width: 60px;
      height: 4px;
      background: linear-gradient(90deg, #a78bfa, #60a5fa);
      border-radius: 4px;
    }

    .section-sub-dark {
      color: #9aa4c2;
      font-weight: 400;
      font-size: 1.1rem;
    }

    /* ---------- cards (dark glass) ---------- */
    .card-dark-glass {
      background: rgba(255, 255, 255, 0.02);
      backdrop-filter: blur(4px);
      border: 1px solid rgba(255, 255, 255, 0.04);
      border-radius: 32px;
      padding: 2rem 1.8rem 2.2rem;
      height: 100%;
      transition: all 0.3s ease;
      box-shadow: 0 10px 30px -10px rgba(0, 0, 0, 0.5);
    }

    .card-dark-glass:hover {
      transform: translateY(-10px);
      border-color: rgba(167, 139, 250, 0.2);
      background: rgba(255, 255, 255, 0.04);
      box-shadow: 0 20px 50px -10px rgba(0, 0, 0, 0.7);
    }

    .card-dark-glass .card-icon {
      font-size: 2.8rem;
      color: #a78bfa;
      margin-bottom: 1.2rem;
      display: inline-block;
    }

    .card-dark-glass h5 {
      font-family: 'Space Grotesk', sans-serif;
      font-weight: 600;
      font-size: 1.4rem;
      color: white;
      letter-spacing: -0.3px;
    }

    .card-dark-glass p {
      color: #b9c2dd;
      font-size: 0.95rem;
      line-height: 1.7;
    }

    .badge-soft-tech {
      background: rgba(167, 139, 250, 0.08);
      color: #cdc4f0;
      border: 1px solid rgba(167, 139, 250, 0.08);
      border-radius: 60px;
      padding: 0.4rem 1.2rem;
      font-weight: 500;
      font-size: 0.75rem;
      letter-spacing: 0.3px;
    }

    .btn-outline-purple {
      border: 1.5px solid rgba(167, 139, 250, 0.3);
      color: #d4c9ff;
      border-radius: 60px;
      padding: 0.3rem 1.8rem;
      font-weight: 600;
      transition: 0.2s;
      background: transparent;
    }

    .btn-outline-purple:hover {
      background: #a78bfa;
      border-color: #a78bfa;
      color: #0b0f1a;
    }

    /* ---------- about card (dark) ---------- */
    .about-card-dark {
      background: rgba(255, 255, 255, 0.02);
      border-radius: 48px;
      padding: 2.8rem 2.5rem;
      border: 1px solid rgba(255, 255, 255, 0.03);
      backdrop-filter: blur(4px);
      box-shadow: 0 12px 40px rgba(0, 0, 0, 0.3);
    }

    .about-card-dark p {
      color: #c8d0e8;
      font-size: 1.1rem;
      line-height: 1.8;
    }

    /* profile img dark border */
    .profile-img-dark {
      width: 180px;
      height: 180px;
      object-fit: cover;
      border-radius: 50%;
      border: 3px solid rgba(167, 139, 250, 0.3);
      box-shadow: 0 12px 40px rgba(0, 0, 0, 0.5);
      transition: 0.3s;
    }

    .profile-img-dark:hover {
      transform: scale(1.02);
      border-color: #a78bfa;
    }

    /* skill pills (dark) */
    .skill-pill-dark {
      background: rgba(255, 255, 255, 0.03);
      border-radius: 60px;
      padding: 0.5rem 1.6rem;
      font-weight: 600;
      color: #e0e6ff;
      border: 1px solid rgba(255, 255, 255, 0.04);
      transition: 0.2s;
      display: inline-block;
      backdrop-filter: blur(2px);
    }

    .skill-pill-dark:hover {
      border-color: #a78bfa;
      background: rgba(167, 139, 250, 0.06);
      transform: scale(1.02);
    }

    .skill-pill-dark i {
      color: #a78bfa;
      margin-right: 8px;
    }

    /* ---------- contact (dark) ---------- */
    .contact-box-dark {
      background: rgba(255, 255, 255, 0.02);
      border-radius: 48px;
      padding: 3.2rem 2.5rem;
      border: 1px solid rgba(255, 255, 255, 0.03);
      backdrop-filter: blur(4px);
    }

    .contact-box-dark .contact-item {
      font-size: 1.1rem;
      color: #d4dbf5;
      padding: 0.4rem 0;
    }

    .contact-box-dark .contact-item i {
      color: #a78bfa;
      width: 2.2rem;
    }

    .btn-dark-glow {
      background: rgba(167, 139, 250, 0.08);
      border: 1px solid rgba(167, 139, 250, 0.15);
      border-radius: 60px;
      padding: 0.7rem 2.6rem;
      font-weight: 600;
      color: white;
      transition: 0.2s;
    }

    .btn-dark-glow:hover {
      background: #a78bfa;
      color: #0b0f1a;
      border-color: #a78bfa;
      transform: translateY(-2px);
      box-shadow: 0 12px 30px rgba(167, 139, 250, 0.2);
    }

    .btn-outline-secondary-dark {
      border: 1px solid rgba(255, 255, 255, 0.06);
      color: #b9c2dd;
      border-radius: 60px;
      padding: 0.6rem 1.8rem;
      transition: 0.2s;
      background: transparent;
    }

    .btn-outline-secondary-dark:hover {
      background: rgba(255, 255, 255, 0.03);
      color: white;
      border-color: rgba(255, 255, 255, 0.15);
    }

    /* ---------- footer dark ---------- */
    .footer-dark-deep {
      background: #060910;
      color: rgba(255, 255, 255, 0.3);
      border-top: 1px solid rgba(255, 255, 255, 0.02);
    }

    .footer-dark-deep a {
      color: rgba(255, 255, 255, 0.25);
      transition: 0.2s;
      text-decoration: none;
    }

    .footer-dark-deep a:hover {
      color: #a78bfa;
    }

    /* ---------- responsive ---------- */
    @media (max-width: 768px) {
      .hero-dark h1 { font-size: 2.8rem; }
      .hero-dark { padding: 120px 0 70px; }
      .profile-img-dark { width: 140px; height: 140px; }
      .about-card-dark { padding: 1.8rem 1.2rem; }
      .contact-box-dark { padding: 2rem 1.2rem; }
    }
  </style>
</head>
<body>

<!-- ====== NAVBAR ====== -->
<nav class="navbar navbar-expand-lg navbar-glass-dark fixed-top">
  <div class="container">
    <a class="navbar-brand" href="#">
      <i class="bi bi-code-square"></i> Zakwan
    </a>
    <button class="navbar-toggler border-0" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" 
            aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon" style="filter: invert(1);"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav ms-auto gap-1">
        <li class="nav-item"><a class="nav-link active" href="#about">About</a></li>
        <li class="nav-item"><a class="nav-link" href="#projects">Projects</a></li>
        <li class="nav-item"><a class="nav-link" href="#contact">Contact</a></li>
      </ul>
    </div>
  </div>
</nav>

<!-- ====== HERO (dark) ====== -->
<section class="hero-dark" id="home">
  <div class="container hero-content text-center">
    <div class="mb-4">
      <span class="badge-soft">
        <i class="bi bi-stars me-1"></i> full‑stack · laravel · asp.net
      </span>
    </div>
    <h1 class="mb-3">Hi, I'm <span class="highlight">Zakwan</span></h1>
    <p class="lead mx-auto">
      Full Stack Developer · Laravel · ASP.NET Core · PHP · JavaScript
    </p>
    <div class="mt-5 d-flex flex-wrap justify-content-center gap-3">
      <a href="#projects" class="btn btn-glow">
        <i class="bi bi-grid-3x3-gap-fill me-2"></i> Explore projects
      </a>
      <a href="#contact" class="btn btn-outline-light-custom">
        <i class="bi bi-envelope me-2"></i> Let's talk
      </a>
    </div>
  </div>
</section>

<!-- ====== ABOUT (dark) ====== -->
<section id="about" class="py-5" style="background: #0b0f1a;">
  <div class="container py-4">
    <div class="text-center mb-5">
      <h2 class="section-title-dark">About Me</h2>
      <p class="section-sub-dark mt-4" style="max-width: 620px; margin: 0 auto;">
        Crafting robust, human-centered applications with clean code and modern architecture.
      </p>
    </div>

    <div class="row justify-content-center">
      <div class="col-lg-10">
        <div class="about-card-dark">
          <div class="row align-items-center g-4">
            <div class="col-md-4 text-center">
              <img src="https://ui-avatars.com/api/?name=Zakwan+Sanudin&size=200&background=7c8dff&color=fff&bold=true&font-size=0.5" 
                   alt="Zakwan" class="profile-img-dark" />
              <div class="mt-3">
                <span class="badge bg-light text-dark px-3 py-2 rounded-pill" style="background: rgba(167,139,250,0.1) !important; border: 1px solid rgba(167,139,250,0.1); color: #d4c9ff;">
                  <i class="bi bi-camera me-1"></i> #buildwithpassion
                </span>
              </div>
            </div>
            <div class="col-md-8">
              <p>
                I'm a passionate developer with a focus on <strong style="color: #c4b5fd;">Laravel</strong>, <strong style="color: #c4b5fd;">PHP</strong>, and
                <strong style="color: #c4b5fd;">ASP.NET Core</strong>. I love turning complex problems into elegant,
                scalable solutions. Currently exploring cloud-native development and
                microservices.
              </p>
              <div class="d-flex flex-wrap gap-2 mt-3">
                <span class="skill-pill-dark"><i class="bi bi-laptop"></i> Laravel</span>
                <span class="skill-pill-dark"><i class="bi bi-code-slash"></i> PHP</span>
                <span class="skill-pill-dark"><i class="bi bi-database"></i> MySQL</span>
                <span class="skill-pill-dark"><i class="bi bi-braces"></i> JavaScript</span>
                <span class="skill-pill-dark"><i class="bi bi-window"></i> ASP.NET</span>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- ====== SKILLS MINI (dark) ====== -->
<section style="background: #0f1422; border-top: 1px solid rgba(255,255,255,0.02); border-bottom: 1px solid rgba(255,255,255,0.02);">
  <div class="container py-4">
    <div class="row text-center align-items-center g-3">
      <div class="col-md-3 col-6"><span class="skill-pill-dark w-100"><i class="bi bi-layers"></i> Laravel</span></div>
      <div class="col-md-3 col-6"><span class="skill-pill-dark w-100"><i class="bi bi-filetype-php"></i> PHP</span></div>
      <div class="col-md-3 col-6"><span class="skill-pill-dark w-100"><i class="bi bi-database-fill"></i> MySQL</span></div>
      <div class="col-md-3 col-6"><span class="skill-pill-dark w-100"><i class="bi bi-bootstrap-fill"></i> Bootstrap</span></div>
    </div>
  </div>
</section>

<!-- ====== PROJECTS (dark) ====== -->
<section id="projects" class="py-5" style="background: #0b0f1a;">
  <div class="container py-3">
    <div class="text-center mb-5">
      <h2 class="section-title-dark">Projects</h2>
      <p class="section-sub-dark mt-3">Real‑world solutions · built with passion</p>
    </div>

    <div class="row g-4">
      <div class="col-md-4">
        <div class="card-dark-glass">
          <div class="card-icon"><i class="bi bi-people-fill"></i></div>
          <h5>Kampung Online</h5>
          <p>A digital community platform with user management, updates, and real‑time engagement.</p>
          <div class="d-flex gap-2 flex-wrap mt-3">
            <span class="badge-soft-tech">Laravel</span>
            <span class="badge-soft-tech">Bootstrap</span>
            <span class="badge-soft-tech">MySQL</span>
          </div>
          <div class="mt-4">
            <a href="https://kampungonline.my" class="btn-outline-purple btn">View <i class="bi bi-arrow-right ms-1"></i></a>
          </div>
        </div>
      </div>

      <div class="col-md-4">
        <div class="card-dark-glass">
          <div class="card-icon"><i class="bi bi-box-seam-fill"></i></div>
          <h5>ePDK</h5>
          <p>Student progress recording for Program Didik Kasih (EPDK), used in Selangor primary schools.</p>
          <div class="d-flex gap-2 flex-wrap mt-3">
            <span class="badge-soft-tech">Laravel</span>
            <span class="badge-soft-tech">Tailwind</span>
            <span class="badge-soft-tech">MySQL</span>
          </div>
          <div class="mt-4">
            <a href="https://epdk.eptrs.my/login" class="btn-outline-purple btn">View <i class="bi bi-arrow-right ms-1"></i></a>
          </div>
        </div>
      </div>

      <div class="col-md-4">
        <div class="card-dark-glass">
          <div class="card-icon"><i class="bi bi-play-circle-fill"></i></div>
          <h5>E‑Learning Platform</h5>
          <p>Video courses, quizzes, progress tracking — built with Laravel & React.js.</p>
          <div class="d-flex gap-2 flex-wrap mt-3">
            <span class="badge-soft-tech">Laravel</span>
            <span class="badge-soft-tech">React</span>
          </div>
          <div class="mt-4">
            <a href="#" class="btn-outline-purple btn">View <i class="bi bi-arrow-right ms-1"></i></a>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- ====== CONTACT (dark) ====== -->
<section id="contact" class="py-5" style="background: #0f1422;">
  <div class="container py-3">
    <div class="text-center mb-5">
      <h2 class="section-title-dark">Contact</h2>
      <p class="section-sub-dark mt-3">Let's build something great together</p>
    </div>
    <div class="row justify-content-center">
      <div class="col-lg-8">
        <div class="contact-box-dark text-center">
          <div class="d-flex flex-column flex-md-row justify-content-center align-items-center gap-4">
            <div class="contact-item"><i class="bi bi-envelope-fill"></i> zakwansanudin02@gmail.com</div>
            <div class="contact-item"><i class="bi bi-telephone-fill"></i> +60 11-3303 5718</div>
          </div>
          <div class="mt-4 d-flex flex-wrap justify-content-center gap-3">
            <a href="#" class="btn btn-dark-glow"><i class="bi bi-download me-2"></i>Download Resume</a>
            <a href="https://github.com/zakwansanudin" class="btn btn-outline-secondary-dark"><i class="bi bi-github"></i> GitHub</a>
            <a href="https://www.linkedin.com/in/zakwan-sanudin" class="btn btn-outline-secondary-dark"><i class="bi bi-linkedin"></i> LinkedIn</a>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- ====== FOOTER ====== -->
<footer class="footer-dark-deep py-4">
  <div class="container text-center">
    <p class="mb-0 small">
      <i class="bi bi-c-circle me-1"></i> <span id="year"></span> Zakwan · crafted with <i class="bi bi-heart-fill text-danger" style="font-size: 0.8rem;"></i>
    </p>
    <div class="mt-2 d-flex justify-content-center gap-3 small">
      <a href="#home">Home</a>
      <a href="#projects">Projects</a>
      <a href="#contact">Contact</a>
    </div>
  </div>
</footer>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
<script> document.getElementById('year').textContent = new Date().getFullYear(); </script>
</body>
</html>