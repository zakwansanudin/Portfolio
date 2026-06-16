<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Zakwan · revamped</title>
    <!-- Bootstrap 5 + Icons -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css" />
    <!-- Google Font (Inter) -->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link href="https://fonts.googleapis.com/css2?family=Inter:opsz,wght@14..32,400;14..32,600;14..32,700;14..32,800&display=swap" rel="stylesheet" />
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: 'Inter', -apple-system, BlinkMacSystemFont, sans-serif;
            background: #f8fafc;
            color: #0b1a33;
            scroll-behavior: smooth;
        }

        /* ---------- glass navbar ---------- */
        .navbar-glass {
            background: rgba(11, 26, 51, 0.8);
            backdrop-filter: blur(14px) saturate(180%);
            -webkit-backdrop-filter: blur(14px) saturate(180%);
            border-bottom: 1px solid rgba(255, 255, 255, 0.06);
            box-shadow: 0 8px 32px rgba(0, 0, 0, 0.25);
            transition: background 0.2s;
        }

        .navbar-glass .navbar-brand {
            font-weight: 700;
            letter-spacing: -0.3px;
            color: white;
            font-size: 1.5rem;
        }

        .navbar-glass .navbar-brand i {
            color: #7c8dff;
            margin-right: 8px;
        }

        .navbar-glass .nav-link {
            color: rgba(255, 255, 255, 0.75);
            font-weight: 500;
            padding: 0.5rem 1rem;
            border-radius: 40px;
            transition: 0.2s;
        }

        .navbar-glass .nav-link:hover,
        .navbar-glass .nav-link.active {
            color: white;
            background: rgba(255, 255, 255, 0.08);
        }

        /* ---------- hero ---------- */
        .hero {
            position: relative;
            background: linear-gradient(145deg, #0b1a33 0%, #1a2f4f 50%, #2c3f66 100%);
            color: white;
            padding: 140px 0 110px;
            overflow: hidden;
            border-bottom: 1px solid rgba(255, 255, 255, 0.05);
        }

        .hero::after {
            content: '';
            position: absolute;
            inset: 0;
            background: radial-gradient(circle at 70% 30%, rgba(120, 140, 255, 0.12), transparent 60%),
                radial-gradient(circle at 30% 80%, rgba(0, 200, 255, 0.06), transparent 50%);
            pointer-events: none;
        }

        .hero-content {
            position: relative;
            z-index: 2;
        }

        .hero h1 {
            font-weight: 800;
            font-size: 4rem;
            letter-spacing: -1px;
            line-height: 1.1;
        }

        .hero h1 span {
            background: linear-gradient(135deg, #b6c8ff, #7c8dff);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            background-clip: text;
        }

        .hero .lead {
            font-size: 1.4rem;
            font-weight: 400;
            color: rgba(255, 255, 255, 0.8);
            max-width: 600px;
            margin: 0 auto;
        }

        .hero .badge-pill {
            background: rgba(255, 255, 255, 0.08);
            backdrop-filter: blur(4px);
            border: 1px solid rgba(255, 255, 255, 0.06);
        }

        .hero .btn-hero {
            background: white;
            color: #0b1a33;
            font-weight: 600;
            padding: 0.8rem 2.6rem;
            border-radius: 60px;
            box-shadow: 0 12px 30px rgba(0, 0, 0, 0.25);
            transition: 0.25s;
            border: none;
        }

        .hero .btn-hero:hover {
            transform: translateY(-3px);
            background: #f0f4ff;
            box-shadow: 0 20px 40px rgba(0, 20, 80, 0.4);
            color: #0b1a33;
        }

        /* ---------- section titles ---------- */
        .section-title {
            font-weight: 700;
            font-size: 2.4rem;
            letter-spacing: -0.5px;
            position: relative;
            display: inline-block;
        }

        .section-title::after {
            content: '';
            position: absolute;
            left: 50%;
            bottom: -12px;
            transform: translateX(-50%);
            width: 64px;
            height: 4px;
            background: linear-gradient(90deg, #7c8dff, #b6c8ff);
            border-radius: 4px;
        }

        .section-sub {
            color: #4a5a7a;
            font-weight: 400;
        }

        /* ---------- profile image (round) ---------- */
        .profile-img {
            width: 160px;
            height: 160px;
            object-fit: cover;
            border-radius: 50%;
            border: 4px solid white;
            box-shadow: 0 12px 30px rgba(0, 0, 0, 0.15);
            transition: 0.3s;
        }

        .profile-img:hover {
            transform: scale(1.02);
            box-shadow: 0 20px 40px rgba(0, 0, 0, 0.2);
        }

        .profile-img-lg {
            width: 200px;
            height: 200px;
        }

        /* ---------- cards ---------- */
        .card-modern {
            background: white;
            border: none;
            border-radius: 28px;
            box-shadow: 0 8px 30px rgba(0, 0, 0, 0.04);
            transition: all 0.25s ease;
            padding: 1.8rem 1.8rem 2.2rem;
            height: 100%;
            border: 1px solid rgba(0, 0, 0, 0.02);
        }

        .card-modern:hover {
            transform: translateY(-8px);
            box-shadow: 0 20px 50px rgba(20, 40, 100, 0.10);
            border-color: rgba(124, 141, 255, 0.20);
        }

        .card-modern .card-icon {
            font-size: 2.6rem;
            color: #2c3f66;
            margin-bottom: 1rem;
            display: inline-block;
        }

        .card-modern h5 {
            font-weight: 700;
            font-size: 1.3rem;
            letter-spacing: -0.3px;
        }

        .card-modern p {
            color: #3d4e6b;
            font-size: 0.95rem;
            line-height: 1.6;
        }

        .btn-outline-primary-custom {
            border: 1.5px solid #7c8dff;
            color: #2c3f66;
            border-radius: 60px;
            padding: 0.4rem 1.6rem;
            font-weight: 600;
            transition: 0.2s;
            background: transparent;
        }

        .btn-outline-primary-custom:hover {
            background: #7c8dff;
            color: white;
            border-color: #7c8dff;
        }

        /* ---------- skill pills ---------- */
        .skill-pill {
            background: white;
            border-radius: 60px;
            padding: 0.6rem 1.8rem;
            font-weight: 600;
            color: #0b1a33;
            border: 1px solid rgba(0, 0, 0, 0.04);
            box-shadow: 0 4px 12px rgba(0, 0, 0, 0.02);
            transition: 0.2s;
            display: inline-block;
        }

        .skill-pill:hover {
            border-color: #7c8dff;
            background: #f5f8ff;
            transform: scale(1.02);
        }

        .skill-pill i {
            color: #7c8dff;
            margin-right: 8px;
        }

        /* ---------- about with image ---------- */
        .about-card {
            background: white;
            border-radius: 40px;
            padding: 2.8rem 2.5rem;
            box-shadow: 0 12px 40px rgba(0, 0, 0, 0.02);
            border: 1px solid rgba(0, 0, 0, 0.02);
        }

        /* ---------- contact ---------- */
        .contact-box {
            background: white;
            border-radius: 48px;
            padding: 3.2rem 2.5rem;
            box-shadow: 0 12px 40px rgba(0, 0, 0, 0.02);
            border: 1px solid rgba(0, 0, 0, 0.02);
        }

        .contact-box .contact-item {
            font-size: 1.1rem;
            padding: 0.5rem 0;
            color: #1a2f4f;
        }

        .contact-box .contact-item i {
            color: #7c8dff;
            width: 2rem;
        }

        .btn-dark-custom {
            background: #0b1a33;
            border-radius: 60px;
            padding: 0.7rem 2.8rem;
            font-weight: 600;
            color: white;
            border: none;
            transition: 0.2s;
        }

        .btn-dark-custom:hover {
            background: #1f3452;
            transform: translateY(-2px);
            box-shadow: 0 12px 28px rgba(11, 26, 51, 0.2);
            color: white;
        }

        /* ---------- footer ---------- */
        .footer-dark {
            background: #0a1428;
            color: rgba(255, 255, 255, 0.6);
            border-top: 1px solid rgba(255, 255, 255, 0.03);
        }

        .footer-dark a {
            color: rgba(255, 255, 255, 0.5);
            transition: 0.2s;
        }

        .footer-dark a:hover {
            color: white;
        }

        /* ---------- responsive ---------- */
        @media (max-width: 768px) {
            .hero h1 {
                font-size: 2.8rem;
            }

            .hero {
                padding: 100px 0 70px;
            }

            .profile-img-lg {
                width: 140px;
                height: 140px;
            }

            .about-card {
                padding: 1.8rem 1.2rem;
            }

            .contact-box {
                padding: 2rem 1.2rem;
            }
        }
    </style>
</head>

<body>

    <!-- ====== NAVBAR ====== -->
    <nav class="navbar navbar-expand-lg navbar-glass fixed-top">
        <div class="container">
            <a class="navbar-brand" href="#">
                <i class="bi bi-code-square"></i> Zakwan
            </a>
            <button class="navbar-toggler border-0" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
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

    <!-- ====== HERO ====== -->
    <section class="hero" id="home">
        <div class="container hero-content text-center">
            <div class="mb-4">
                <span class="badge badge-pill text-white px-4 py-2 rounded-pill fw-normal">
                    <i class="bi bi-stars me-1"></i> full-stack · laravel · asp.net
                </span>
            </div>
            <h1 class="mb-4">Hi, I'm <span>Zakwan</span></h1>
            <p class="lead mx-auto">
                Full Stack Developer · Laravel · ASP.NET Core · PHP · JavaScript
            </p>
            <div class="mt-5 d-flex flex-wrap justify-content-center gap-3">
                <a href="#projects" class="btn btn-hero">
                    <i class="bi bi-grid-3x3-gap-fill me-2"></i> Explore projects
                </a>
                <a href="#contact" class="btn btn-outline-light rounded-pill px-4 py-2 border-2" style="border-color: rgba(255,255,255,0.3);">
                    <i class="bi bi-envelope me-2"></i> Let's talk
                </a>
            </div>
        </div>
    </section>

    <!-- ====== ABOUT with PROFILE IMAGE ====== -->
    <section id="about" class="py-5">
        <div class="container py-4">
            <div class="text-center mb-5">
                <h2 class="section-title">About Me</h2>
                <p class="text-muted mt-4 section-sub" style="max-width: 620px; margin: 0 auto;">
                    Crafting robust, human-centered applications with clean code and modern architecture.
                </p>
            </div>

            <div class="row justify-content-center">
                <div class="col-lg-10">
                    <div class="about-card">
                        <div class="row align-items-center g-4">
                            <!-- profile image column -->
                            <div class="col-md-4 text-center">
                                <img src="https://ui-avatars.com/api/?name=Zakwan+Sanudin&size=200&background=7c8dff&color=fff&bold=true&font-size=0.5" alt="Zakwan profile" class="profile-img profile-img-lg" />
                                <div class="mt-3">
                                    <span class="badge bg-light text-dark px-3 py-2 rounded-pill">
                                        <i class="bi bi-camera me-1"></i> #buildwithpassion
                                    </span>
                                </div>
                            </div>
                            <!-- text column -->
                            <div class="col-md-8">
                                <p style="font-size: 1.1rem; line-height: 1.7; color: #1f3452;">
                                    I'm a passionate developer with a focus on <strong>Laravel</strong>, <strong>PHP</strong>, and
                                    <strong>ASP.NET Core</strong>. I love turning complex problems into elegant,
                                    scalable solutions. Currently exploring cloud-native development and
                                    microservices.
                                </p>
                                <div class="d-flex flex-wrap gap-2 mt-3">
                                    <span class="skill-pill"><i class="bi bi-laptop"></i> Laravel</span>
                                    <span class="skill-pill"><i class="bi bi-code-slash"></i> PHP</span>
                                    <span class="skill-pill"><i class="bi bi-database"></i> MySQL</span>
                                    <span class="skill-pill"><i class="bi bi-braces"></i> JavaScript</span>
                                    <span class="skill-pill"><i class="bi bi-window"></i> ASP.NET</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- ====== SKILLS MINI (optional) ====== -->
    <section class="py-4" style="background: #f1f5fc;">
        <div class="container">
            <div class="row text-center align-items-center g-3">
                <div class="col-md-3 col-6"><span class="skill-pill w-100"><i class="bi bi-layers"></i> Laravel</span></div>
                <div class="col-md-3 col-6"><span class="skill-pill w-100"><i class="bi bi-filetype-php"></i> PHP</span></div>
                <div class="col-md-3 col-6"><span class="skill-pill w-100"><i class="bi bi-database-fill"></i> MySQL</span></div>
                <div class="col-md-3 col-6"><span class="skill-pill w-100"><i class="bi bi-bootstrap-fill"></i> Bootstrap</span></div>
            </div>
        </div>
    </section>

    <!-- ====== PROJECTS ====== -->
    <section id="projects" class="py-5">
        <div class="container py-3">
            <div class="text-center mb-5">
                <h2 class="section-title">Projects</h2>
                <p class="text-muted mt-3 section-sub">Real-world solutions · built with passion</p>
            </div>

            <div class="row g-4">

                <div class="col-md-4">
                    <div class="card-modern">
                        <div class="card-icon"><i class="bi bi-people-fill"></i></div>
                        <h5>Kampung Online</h5>
                        <p class="card-text">A digital community platform for KampungOnline with user management, updates, and real-time engagement features.</p>
                        <div class="d-flex gap-2 flex-wrap mt-3">
                            <span class="badge bg-light text-dark rounded-pill px-3 py-2 fw-normal">Laravel</span>
                            <span class="badge bg-light text-dark rounded-pill px-3 py-2 fw-normal">Bootstrap</span>
                            <span class="badge bg-light text-dark rounded-pill px-3 py-2 fw-normal">MySQL</span>
                        </div>
                        <div class="mt-4">
                            <a href="https://kampungonline.my" class="btn-outline-primary-custom btn">View <i class="bi bi-arrow-right ms-1"></i></a>
                        </div>
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="card-modern">
                        <div class="card-icon"><i class="bi bi-box-seam-fill"></i></div>
                        <h5>ePDK</h5>
                        <p class="card-text">A student progress recording system for Program Didik Kasih (EPDK), used in Selangor primary schools to monitor academic development and performance tracking.</p>
                        <div class="d-flex gap-2 flex-wrap mt-3">
                            <span class="badge bg-light text-dark rounded-pill px-3 py-2 fw-normal">Laravel</span>
                            <span class="badge bg-light text-dark rounded-pill px-3 py-2 fw-normal">TailwindCSS</span>
                            <span class="badge bg-light text-dark rounded-pill px-3 py-2 fw-normal">MySQL</span>
                        </div>
                        <div class="mt-4">
                            <a href="https://epdk.eptrs.my/login" class="btn-outline-primary-custom btn">View <i class="bi bi-arrow-right ms-1"></i></a>
                        </div>
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="card-modern">
                        <div class="card-icon"><i class="bi bi-play-circle-fill"></i></div>
                        <h5>E‑Learning Platform</h5>
                        <p class="card-text">Video courses, quizzes, progress tracking — built with Laravel & React.js.</p>
                        <div class="d-flex gap-2 flex-wrap mt-3">
                            <span class="badge bg-light text-dark rounded-pill px-3 py-2 fw-normal">Laravel</span>
                            <span class="badge bg-light text-dark rounded-pill px-3 py-2 fw-normal">React</span>
                        </div>
                        <div class="mt-4">
                            <a href="#" class="btn-outline-primary-custom btn">View <i class="bi bi-arrow-right ms-1"></i></a>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>

    <!-- ====== CONTACT ====== -->
    <section id="contact" class="py-5" style="background: #f1f5fc;">
        <div class="container py-3">
            <div class="text-center mb-5">
                <h2 class="section-title">Contact</h2>
                <p class="text-muted mt-3 section-sub">Let's build something great together</p>
            </div>
            <div class="row justify-content-center">
                <div class="col-lg-8">
                    <div class="contact-box text-center">
                        <div class="d-flex flex-column flex-md-row justify-content-center align-items-center gap-4">
                            <div class="contact-item"><i class="bi bi-envelope-fill"></i> zakwansanudin02@gmail.com</div>
                            <div class="contact-item"><i class="bi bi-telephone-fill"></i> +60 11-3303 5718</div>
                        </div>
                        <div class="mt-4 d-flex flex-wrap justify-content-center gap-3">
                            <a href="#" class="btn btn-dark-custom"><i class="bi bi-download me-2"></i>Download Resume</a>
                            <a href="https://github.com/zakwansanudin" class="btn btn-outline-secondary rounded-pill px-4" style="border-color: #cdd9ed;"><i class="bi bi-github"></i> GitHub</a>
                            <a href="https://www.linkedin.com/in/zakwan-sanudin" class="btn btn-outline-secondary rounded-pill px-4" style="border-color: #cdd9ed;"><i class="bi bi-linkedin"></i> LinkedIn</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- ====== FOOTER ====== -->
    <footer class="footer-dark py-4">
        <div class="container text-center">
            <p class="mb-0 small">
                <i class="bi bi-c-circle me-1"></i> <span id="year"></span> Zakwan · crafted with <i class="bi bi-heart-fill text-danger" style="font-size: 0.8rem;"></i>
            </p>
            <div class="mt-2 d-flex justify-content-center gap-3 small">
                <a href="#home" class="text-decoration-none">Home</a>
                <a href="#projects" class="text-decoration-none">Projects</a>
                <a href="#contact" class="text-decoration-none">Contact</a>
            </div>
        </div>
    </footer>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js">
    </script>
    <script>
        document.getElementById('year').textContent = new Date().getFullYear();
    </script>
</body>

</html>