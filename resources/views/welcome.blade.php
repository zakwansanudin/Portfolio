<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Zakwan Sanudin · Full Stack Developer</title>
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link href="https://fonts.googleapis.com/css2?family=Bricolage+Grotesque:opsz,wdth,wght@12..96,75..100,200..800&family=Inter:wght@400;500;600&display=swap" rel="stylesheet" />

    <style>
        *,
        *::before,
        *::after {
            box-sizing: border-box;
            margin: 0;
            padding: 0;
        }

        :root {
            --page: #FAFAF8;
            --panel: #F2F1ED;
            --text: #111827;
            --muted: #6B7280;
            --border: #E4E2DC;
            --indigo: #3B4EFF;
            --indigo-light: #EEF0FF;
            --indigo-mid: #C7CDFF;
            --white: #FFFFFF;
        }

        html {
            scroll-behavior: smooth;
        }

        body {
            font-family: 'Inter', sans-serif;
            background: var(--page);
            color: var(--text);
            -webkit-font-smoothing: antialiased;
        }

        /* ── NAV ── */
        nav {
            position: fixed;
            top: 0;
            left: 0;
            right: 0;
            z-index: 100;
            display: flex;
            align-items: center;
            justify-content: space-between;
            padding: 1.1rem 3rem;
            background: rgba(250, 250, 248, 0.88);
            backdrop-filter: blur(16px);
            border-bottom: 1px solid var(--border);
        }

        .nav-brand {
            font-family: 'Bricolage Grotesque', sans-serif;
            font-weight: 700;
            font-size: 1.1rem;
            color: var(--text);
            text-decoration: none;
            letter-spacing: -0.02em;
        }

        .nav-brand span {
            color: var(--indigo);
        }

        .nav-links {
            display: flex;
            align-items: center;
            gap: 0.25rem;
            list-style: none;
        }

        .nav-links a {
            font-size: 0.875rem;
            color: var(--muted);
            text-decoration: none;
            padding: 0.4rem 0.9rem;
            border-radius: 100px;
            transition: all 0.18s;
            font-weight: 500;
        }

        .nav-links a:hover {
            color: var(--text);
            background: var(--panel);
        }

        .nav-hire {
            font-size: 0.875rem;
            font-weight: 600;
            color: var(--white);
            background: var(--indigo);
            padding: 0.5rem 1.3rem;
            border-radius: 100px;
            text-decoration: none;
            transition: opacity 0.18s, transform 0.18s;
        }

        .nav-hire:hover {
            opacity: 0.85;
            transform: translateY(-1px);
        }

        /* ── HERO ── */
        .hero {
            padding: 9rem 3rem 5rem;
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 4rem;
            align-items: center;
            border-bottom: 1px solid var(--border);
            max-width: 1200px;
            margin: 0 auto;
        }

        .hero-left {}

        .hero-badge {
            display: inline-flex;
            align-items: center;
            gap: 0.5rem;
            background: var(--indigo-light);
            color: var(--indigo);
            font-size: 0.78rem;
            font-weight: 600;
            padding: 0.35rem 0.9rem;
            border-radius: 100px;
            letter-spacing: 0.02em;
            margin-bottom: 1.8rem;
        }

        .hero-badge-dot {
            width: 6px;
            height: 6px;
            background: var(--indigo);
            border-radius: 50%;
        }

        .hero-name {
            font-family: 'Bricolage Grotesque', sans-serif;
            line-height: 1.0;
            letter-spacing: -0.04em;
        }

        .hero-name .line1 {
            font-size: clamp(3.6rem, 7vw, 6.5rem);
            font-weight: 800;
            display: block;
            color: var(--text);
        }

        .hero-name .line2 {
            font-size: clamp(3.6rem, 7vw, 6.5rem);
            font-weight: 300;
            display: block;
            color: var(--muted);
        }

        .hero-tagline {
            font-size: 1.05rem;
            color: var(--muted);
            line-height: 1.7;
            margin-top: 1.8rem;
            max-width: 400px;
        }

        .hero-actions {
            display: flex;
            gap: 1rem;
            flex-wrap: wrap;
            margin-top: 2.5rem;
        }

        .btn-primary {
            background: var(--indigo);
            color: white;
            font-size: 0.9rem;
            font-weight: 600;
            padding: 0.7rem 1.8rem;
            border-radius: 100px;
            text-decoration: none;
            transition: opacity 0.18s, transform 0.18s;
            display: inline-block;
            border: none;
            cursor: pointer;
        }

        .btn-primary:hover {
            opacity: 0.87;
            transform: translateY(-2px);
        }

        .btn-ghost {
            background: transparent;
            color: var(--text);
            font-size: 0.9rem;
            font-weight: 500;
            padding: 0.7rem 1.8rem;
            border-radius: 100px;
            text-decoration: none;
            border: 1.5px solid var(--border);
            transition: border-color 0.18s, background 0.18s;
            display: inline-block;
            cursor: pointer;
        }

        .btn-ghost:hover {
            border-color: var(--indigo);
            background: var(--indigo-light);
            color: var(--indigo);
        }

        /* hero right: profile + stat cards */
        .hero-right {
            display: flex;
            flex-direction: column;
            align-items: center;
            gap: 1.5rem;
        }

        .profile-wrap {
            position: relative;
            display: inline-block;
        }

        .profile-img {
            width: 220px;
            height: 220px;
            border-radius: 32px;
            object-fit: cover;
            display: block;
            box-shadow: 0 20px 60px rgba(59, 78, 255, 0.12);
            image-rendering: -webkit-optimize-contrast;
        }

        .profile-badge {
            position: absolute;
            bottom: -12px;
            right: -16px;
            background: white;
            border: 1px solid var(--border);
            border-radius: 14px;
            padding: 0.6rem 1rem;
            font-size: 0.78rem;
            font-weight: 600;
            color: var(--text);
            box-shadow: 0 4px 20px rgba(0, 0, 0, 0.07);
            white-space: nowrap;
        }

        .profile-badge span {
            color: var(--indigo);
        }

        .hero-stats {
            display: flex;
            gap: 1rem;
            width: 100%;
        }

        .stat-card {
            flex: 1;
            background: white;
            border: 1px solid var(--border);
            border-radius: 16px;
            padding: 1.1rem 1.2rem;
            text-align: center;
        }

        .stat-card .stat-num {
            font-family: 'Bricolage Grotesque', sans-serif;
            font-weight: 700;
            font-size: 1.6rem;
            color: var(--indigo);
            letter-spacing: -0.02em;
        }

        .stat-card .stat-label {
            font-size: 0.72rem;
            color: var(--muted);
            font-weight: 500;
            margin-top: 0.2rem;
        }

        /* ── SHARED SECTION WRAPPER ── */
        .section-wrap {
            max-width: 1200px;
            margin: 0 auto;
            padding: 5.5rem 3rem;
        }

        .section-panel {
            background: var(--panel);
        }

        .section-header {
            display: flex;
            align-items: baseline;
            gap: 1.2rem;
            margin-bottom: 3.5rem;
        }

        .section-eyebrow {
            font-family: 'Bricolage Grotesque', sans-serif;
            font-weight: 800;
            font-size: clamp(1.8rem, 3.5vw, 2.8rem);
            letter-spacing: -0.03em;
            color: var(--text);
        }

        .section-rule {
            flex: 1;
            height: 1.5px;
            background: var(--border);
            margin-bottom: 0.3rem;
        }

        /* ── ABOUT ── */
        .about-grid {
            display: grid;
            grid-template-columns: 1.2fr 1fr;
            gap: 4rem;
            align-items: start;
        }

        .about-body {
            font-size: 1.05rem;
            color: #374151;
            line-height: 1.8;
        }

        .about-body p+p {
            margin-top: 1rem;
        }

        .about-body strong {
            color: var(--indigo);
            font-weight: 600;
        }

        /* ── SKILLS (list style, no progress bar) ── */
        .skills-list {
            display: flex;
            flex-direction: column;
            gap: 1rem;
        }

        .skill-item {
            display: flex;
            align-items: center;
            justify-content: space-between;
            padding: 0.6rem 1rem 0.6rem 1.2rem;
            background: white;
            border: 1px solid var(--border);
            border-radius: 60px;
            transition: all 0.15s;
        }

        .skill-item:hover {
            border-color: var(--indigo-mid);
            box-shadow: 0 4px 12px rgba(59, 78, 255, 0.06);
            transform: translateX(4px);
        }

        .skill-name {
            font-size: 0.92rem;
            font-weight: 600;
            color: var(--text);
            letter-spacing: -0.01em;
        }

        .skill-level {
            font-size: 0.82rem;
            font-weight: 500;
            color: var(--indigo);
            background: var(--indigo-light);
            padding: 0.2rem 1rem;
            border-radius: 40px;
            line-height: 1.4;
        }

        /* ── PROJECTS ── */
        .projects-grid {
            display: grid;
            grid-template-columns: repeat(3, 1fr);
            gap: 1.5rem;
        }

        .projects-grid.all-projects {
            margin-top: 2.5rem;
            padding-top: 2.5rem;
            border-top: 1px solid var(--border);
        }

        .project-card {
            background: white;
            border: 1px solid var(--border);
            border-radius: 24px;
            padding: 2rem;
            text-decoration: none;
            color: inherit;
            display: flex;
            flex-direction: column;
            gap: 0;
            transition: all 0.22s;
            position: relative;
            overflow: hidden;
        }

        .project-card::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            height: 3px;
            background: linear-gradient(90deg, var(--indigo), var(--indigo-mid));
            transform: scaleX(0);
            transform-origin: left;
            transition: transform 0.25s;
        }

        .project-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 20px 50px rgba(59, 78, 255, 0.10);
            border-color: var(--indigo-mid);
        }

        .project-card:hover::before {
            transform: scaleX(1);
        }

        .project-card-icon {
            width: 48px;
            height: 48px;
            background: var(--indigo-light);
            border-radius: 14px;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 1.3rem;
            margin-bottom: 1.3rem;
        }

        .project-card-title {
            font-family: 'Bricolage Grotesque', sans-serif;
            font-weight: 700;
            font-size: 1.25rem;
            letter-spacing: -0.02em;
            color: var(--text);
            margin-bottom: 0.6rem;
        }

        .project-card-desc {
            font-size: 0.88rem;
            color: var(--muted);
            line-height: 1.65;
            flex: 1;
        }

        .project-card-tags {
            display: flex;
            gap: 0.5rem;
            flex-wrap: wrap;
            margin-top: 1.4rem;
        }

        .chip {
            font-size: 0.72rem;
            font-weight: 600;
            padding: 0.28rem 0.75rem;
            border-radius: 100px;
            background: var(--indigo-light);
            color: var(--indigo);
            letter-spacing: 0.01em;
        }

        .project-card-link {
            display: inline-flex;
            align-items: center;
            gap: 0.4rem;
            margin-top: 1.5rem;
            font-size: 0.83rem;
            font-weight: 600;
            color: var(--indigo);
            text-decoration: none;
        }

        .project-card-link .arrow {
            transition: transform 0.18s;
        }

        .project-card:hover .project-card-link .arrow {
            transform: translate(3px, -3px);
        }

        .show-all-btn-wrap {
            text-align: center;
            margin-top: 2.5rem;
        }

        .all-projects-container {
            display: none;
        }

        .all-projects-container.visible {
            display: block;
        }

        /* ── CONTACT ── */
        .contact-inner {
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 4rem;
            align-items: start;
        }

        .contact-intro {
            font-family: 'Bricolage Grotesque', sans-serif;
            font-size: clamp(1.6rem, 3vw, 2.4rem);
            font-weight: 700;
            line-height: 1.25;
            letter-spacing: -0.03em;
            color: var(--text);
        }

        .contact-intro em {
            font-style: normal;
            color: var(--indigo);
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

        .contact-cards {
            display: flex;
            flex-direction: column;
            gap: 1rem;
        }

        .contact-card {
            display: flex;
            align-items: center;
            gap: 1.2rem;
            background: white;
            border: 1px solid var(--border);
            border-radius: 16px;
            padding: 1.1rem 1.4rem;
            text-decoration: none;
            color: inherit;
            transition: all 0.18s;
        }

        .contact-card:hover {
            border-color: var(--indigo);
            box-shadow: 0 4px 20px rgba(59, 78, 255, 0.08);
        }

        .contact-card-icon {
            width: 42px;
            height: 42px;
            border-radius: 12px;
            background: var(--indigo-light);
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 1.1rem;
            color: var(--indigo);
            flex-shrink: 0;
        }

        .contact-card-body {
            flex: 1;
        }

        .contact-card-label {
            font-size: 0.7rem;
            font-weight: 600;
            color: var(--muted);
            text-transform: uppercase;
            letter-spacing: 0.08em;
        }

        .contact-card-value {
            font-size: 0.93rem;
            font-weight: 600;
            color: var(--text);
            margin-top: 0.1rem;
        }

        .contact-card-arrow {
            color: var(--muted);
            font-size: 1rem;
            transition: all 0.18s;
        }

        .contact-card:hover .contact-card-arrow {
            color: var(--indigo);
            transform: translate(2px, -2px);
        }

        /* ── FOOTER ── */
        footer {
            border-top: 1px solid var(--border);
            padding: 2rem 3rem;
            display: flex;
            align-items: center;
            justify-content: space-between;
            max-width: 1200px;
            margin: 0 auto;
            flex-wrap: wrap;
            gap: 1rem;
        }

        .footer-text {
            font-size: 0.82rem;
            color: var(--muted);
        }

        .footer-links {
            display: flex;
            gap: 1.5rem;
        }

        .footer-links a {
            font-size: 0.82rem;
            color: var(--muted);
            text-decoration: none;
            transition: color 0.18s;
        }

        .footer-links a:hover {
            color: var(--indigo);
        }

        /* ── RESPONSIVE ── */
        @media (max-width: 900px) {
            nav {
                padding: 1rem 1.5rem;
            }

            .nav-links {
                display: none;
            }

            .hero {
                grid-template-columns: 1fr;
                padding: 7.5rem 1.5rem 4rem;
                gap: 3rem;
            }

            .hero-right {
                align-items: flex-start;
            }

            .hero-stats {
                max-width: 320px;
            }

            .section-wrap {
                padding: 4rem 1.5rem;
            }

            .about-grid {
                grid-template-columns: 1fr;
                gap: 2.5rem;
            }

            .projects-grid {
                grid-template-columns: 1fr;
            }

            .contact-inner {
                grid-template-columns: 1fr;
                gap: 2.5rem;
            }

            footer {
                padding: 1.5rem;
            }
        }

        @media (max-width: 640px) {

            .hero-name .line1,
            .hero-name .line2 {
                font-size: 3rem;
            }

            .projects-grid {
                grid-template-columns: 1fr;
            }
        }

        @media (prefers-reduced-motion: reduce) {
            * {
                transition: none !important;
            }
        }
    </style>
</head>

<body>

    <!-- NAV -->
    <nav>
        <a class="nav-brand" href="#">Zakwan<span>.</span></a>
        <ul class="nav-links">
            <li><a href="#about">About</a></li>
            <li><a href="#projects">Projects</a></li>
            <li><a href="#contact">Contact</a></li>
        </ul>
        <a class="nav-hire" href="#contact">Let's work together</a>
    </nav>

    <!-- HERO -->
    <div style="border-bottom:1px solid var(--border);">
        <div class="hero">
            <div class="hero-left">
                <div class="hero-badge">
                    <div class="hero-badge-dot"></div>
                    Available for new projects
                </div>
                <h1 class="hero-name">
                    <span class="line1">Zakwan</span>
                    <span class="line2">Sanudin</span>
                </h1>
                <p class="hero-tagline">
                    Full Stack Developer specialising in Laravel and ASP.NET Core. I build applications that are fast, reliable, and genuinely pleasant to use.
                </p>
                <div class="hero-actions">
                    <a class="btn-primary" href="#projects">View my work</a>
                    <a class="btn-ghost" href="#contact">Get in touch</a>
                </div>
            </div>

            <div class="hero-right">
                <div class="profile-wrap">
                    <img src="{{ asset('img/profile.png') }}" alt="Zakwan Sanudin" class="profile-img" />
                    <div class="profile-badge">📍 Selangor, <span>MY</span></div>
                </div>
                <div class="hero-stats">
                    <div class="stat-card">
                        <div class="stat-num">3+</div>
                        <div class="stat-label">Years experience</div>
                    </div>
                    <div class="stat-card">
                        <div class="stat-num">10+</div>
                        <div class="stat-label">Projects shipped</div>
                    </div>
                    <div class="stat-card">
                        <div class="stat-num">2</div>
                        <div class="stat-label">Core frameworks</div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- ABOUT -->
    <section id="about">
        <div class="section-wrap">
            <div class="section-header">
                <h2 class="section-eyebrow">About me</h2>
                <div class="section-rule"></div>
            </div>
            <div class="about-grid">
                <div class="about-body">
                    <p>
                        I'm a full stack developer with a strong focus on <strong>Laravel</strong> and <strong>ASP.NET Core</strong>. My work sits at the intersection of clean backend architecture and practical, user-friendly interfaces — I care equally about what happens in the database and what the end user sees on screen.
                    </p>
                    <p>
                        I've built production systems for schools, community platforms, and learning applications used by real people every day. I take pride in writing code that's easy to maintain and scale, and in shipping products that just work.
                    </p>
                    <p>
                        Currently expanding into <strong>cloud-native development</strong> and microservices, and always looking for interesting problems to solve.
                    </p>
                </div>
                <!-- SKILLS – list style, no progress bars -->
                <div class="skills-list">
                    <div class="skill-item">
                        <span class="skill-name">Laravel</span>
                        <span class="skill-level">Expert</span>
                    </div>
                    <div class="skill-item">
                        <span class="skill-name">PHP</span>
                        <span class="skill-level">Advanced</span>
                    </div>
                    <div class="skill-item">
                        <span class="skill-name">MySQL</span>
                        <span class="skill-level">Advanced</span>
                    </div>
                    <div class="skill-item">
                        <span class="skill-name">ASP.NET Core</span>
                        <span class="skill-level">Proficient</span>
                    </div>
                    <div class="skill-item">
                        <span class="skill-name">JavaScript</span>
                        <span class="skill-level">Proficient</span>
                    </div>
                    <div class="skill-item">
                        <span class="skill-name">React</span>
                        <span class="skill-level">Intermediate</span>
                    </div>
                    <div class="skill-item">
                        <span class="skill-name">TailwindCSS</span>
                        <span class="skill-level">Advanced</span>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- PROJECTS -->
    <section id="projects" class="section-panel">
        <div class="section-wrap">
            <div class="section-header">
                <h2 class="section-eyebrow">Selected projects</h2>
                <div class="section-rule"></div>
            </div>

            <!-- Featured projects (always visible) -->
            <div class="projects-grid" id="featuredProjects">
                <div class="project-card">
                    <div class="project-card-icon">🏘️</div>
                    <div class="project-card-title">Kampung Online</div>
                    <p class="project-card-desc">
                        A digital community platform for the KampungOnline network — user management, announcement broadcasting, and real-time engagement tools for local communities.
                    </p>
                    <div class="project-card-tags">
                        <span class="chip">Laravel</span>
                        <span class="chip">Bootstrap</span>
                        <span class="chip">MySQL</span>
                    </div>
                    <a href="https://kampungonline.my" target="_blank" rel="noopener" class="project-card-link">
                        Visit site <span class="arrow">↗</span>
                    </a>
                </div>

                <div class="project-card">
                    <div class="project-card-icon">📊</div>
                    <div class="project-card-title">ePDK</div>
                    <p class="project-card-desc">
                        Student progress recording system for Program Didik Kasih, deployed across Selangor primary schools. Tracks academic development and generates progress reports.
                    </p>
                    <div class="project-card-tags">
                        <span class="chip">Laravel</span>
                        <span class="chip">TailwindCSS</span>
                        <span class="chip">MySQL</span>
                    </div>
                    <a href="https://epdk.eptrs.my/login" target="_blank" rel="noopener" class="project-card-link">
                        Visit site <span class="arrow">↗</span>
                    </a>
                </div>

                <div class="project-card">
                    <div class="project-card-icon">🎓</div>
                    <div class="project-card-title">E-Learning Platform</div>
                    <p class="project-card-desc">
                        An interactive learning platform featuring Quiz Arena for engaging assessments and a student dashboard with class timetables, learning resources, and academic management tools.
                    </p>
                    <div class="project-card-tags">
                        <span class="chip">Laravel</span>
                        <span class="chip">React</span>
                        <span class="chip">MySQL</span>
                    </div>
                    <a href="https://ppas-t3wq.onrender.com/" target="_blank" rel="noopener" class="project-card-link">
                        Visit site <span class="arrow">↗</span>
                    </a>
                </div>
            </div>

            <!-- Show all button -->
            <div class="show-all-btn-wrap">
                <button class="btn-primary" id="toggleAllProjects" style="font-size:0.95rem; padding:0.8rem 2.5rem;">
                    Show all projects
                </button>
            </div>

            <!-- All projects (hidden by default) -->
            <div class="all-projects-container" id="allProjectsContainer">
                <div class="projects-grid all-projects">

                    <!-- Project 4 -->
                    <div class="project-card">
                        <div class="project-card-icon">🏫</div>
                        <div class="project-card-title">HomeTutor CSR Program</div>
                        <p class="project-card-desc">
                            Developed a responsive landing page for the HomeTutor CSR Program, promoting educational initiatives for schools and providing information on program benefits, activities, and registration opportunities.
                        </p>
                        <div class="project-card-tags">
                            <span class="chip">HTML</span>
                            <span class="chip">CSS</span>
                            <span class="chip">JavaScript</span>
                        </div>
                        <a href="https://new.hometutor.com.my/csr/smkjugra" class="project-card-link">
                            Visit site <span class="arrow">↗</span>
                        </a>
                    </div>

                    <!-- Project 5 -->
                    <div class="project-card">
                        <div class="project-card-icon">📋</div>
                        <div class="project-card-title">Employee Management System</div>
                        <p class="project-card-desc">
                            A comprehensive employee management platform designed to streamline workforce administration, including employee records, attendance tracking, department management, payroll processing, and performance monitoring, built with ASP.NET Core MVC and SQL Server.
                        </p>
                        <div class="project-card-tags">
                            <span class="chip">ASP.NET Core</span>
                            <span class="chip">MSSQL</span>
                        </div>
                        <a href="#" class="project-card-link">
                            Comming Soon <span class="arrow">→</span>
                        </a>
                    </div>

                    <!-- Project 6 -->
                    <!-- <div class="project-card">
                        <div class="project-card-icon">🏥</div>
                        <div class="project-card-title">Clinic Management System</div>
                        <p class="project-card-desc">
                            A comprehensive clinic management system with patient records, appointment scheduling, prescription management, and billing features.
                        </p>
                        <div class="project-card-tags">
                            <span class="chip">Laravel</span>
                            <span class="chip">Livewire</span>
                            <span class="chip">MySQL</span>
                        </div>
                        <a href="#" class="project-card-link">
                            View details <span class="arrow">→</span>
                        </a>
                    </div> -->

                    <!-- Project 7 -->
                    <!-- <div class="project-card">
                        <div class="project-card-icon">📱</div>
                        <div class="project-card-title">Mobile App Backend</div>
                        <p class="project-card-desc">
                            Scalable backend for a mobile application with push notifications, user authentication, data synchronization, and analytics endpoints.
                        </p>
                        <div class="project-card-tags">
                            <span class="chip">ASP.NET Core</span>
                            <span class="chip">Firebase</span>
                            <span class="chip">MongoDB</span>
                        </div>
                        <a href="#" class="project-card-link">
                            View details <span class="arrow">→</span>
                        </a>
                    </div> -->

                    <!-- Project 8 -->
                    <!-- <div class="project-card">
                        <div class="project-card-icon">📰</div>
                        <div class="project-card-title">Content Management System</div>
                        <p class="project-card-desc">
                            A flexible CMS for news and blog websites with multi-user roles, SEO optimization, media management, and version control.
                        </p>
                        <div class="project-card-tags">
                            <span class="chip">Laravel</span>
                            <span class="chip">Vue.js</span>
                            <span class="chip">MySQL</span>
                        </div>
                        <a href="#" class="project-card-link">
                            View details <span class="arrow">→</span>
                        </a>
                    </div> -->

                    <!-- Project 9 -->
                    <!-- <div class="project-card">
                        <div class="project-card-icon">📈</div>
                        <div class="project-card-title">Analytics Dashboard</div>
                        <p class="project-card-desc">
                            Interactive dashboard for business analytics with real-time data visualization, custom reports, and KPI tracking using React and Chart.js.
                        </p>
                        <div class="project-card-tags">
                            <span class="chip">React</span>
                            <span class="chip">Chart.js</span>
                            <span class="chip">ASP.NET Core</span>
                        </div>
                        <a href="#" class="project-card-link">
                            View details <span class="arrow">→</span>
                        </a>
                    </div> -->

                </div>
            </div>
        </div>
    </section>

    <!-- CONTACT -->
    <section id="contact">
        <div class="section-wrap">
            <div class="section-header">
                <h2 class="section-eyebrow">Get in touch</h2>
                <div class="section-rule"></div>
            </div>
            <div class="contact-inner">
                <div>
                    <h3 class="contact-intro">
                        Have a project in mind?<br>
                        <em>I'd love to hear about it.</em>
                    </h3>
                    <p class="contact-blurb">
                        Whether you need a Laravel backend, a full-stack web app, or just want to talk through an idea — drop me a message and I'll get back to you within a day.
                    </p>
                    <div class="contact-cta-row">
                        <a class="btn-primary" href="mailto:zakwansanudin02@gmail.com">Send an email</a>
                        <a class="btn-ghost" href="docs/CV_ZAKWANSANUDIN.pdf" download>Download CV</a>
                    </div>
                </div>

                <div class="contact-cards">
                    <a class="contact-card" href="mailto:zakwansanudin02@gmail.com">
                        <div class="contact-card-icon">✉️</div>
                        <div class="contact-card-body">
                            <div class="contact-card-label">Email</div>
                            <div class="contact-card-value">zakwansanudin02@gmail.com</div>
                        </div>
                        <span class="contact-card-arrow">↗</span>
                    </a>
                    <a class="contact-card" href="tel:+601133035718">
                        <div class="contact-card-icon">📱</div>
                        <div class="contact-card-body">
                            <div class="contact-card-label">Phone</div>
                            <div class="contact-card-value">+60 11-3303 5718</div>
                        </div>
                        <span class="contact-card-arrow">↗</span>
                    </a>
                    <a class="contact-card" href="https://github.com/zakwansanudin" target="_blank" rel="noopener">
                        <div class="contact-card-icon">⌨️</div>
                        <div class="contact-card-body">
                            <div class="contact-card-label">GitHub</div>
                            <div class="contact-card-value">github.com/zakwansanudin</div>
                        </div>
                        <span class="contact-card-arrow">↗</span>
                    </a>
                    <a class="contact-card" href="https://www.linkedin.com/in/zakwan-sanudin" target="_blank" rel="noopener">
                        <div class="contact-card-icon">💼</div>
                        <div class="contact-card-body">
                            <div class="contact-card-label">LinkedIn</div>
                            <div class="contact-card-value">linkedin.com/in/zakwan-sanudin</div>
                        </div>
                        <span class="contact-card-arrow">↗</span>
                    </a>
                </div>
            </div>
        </div>
    </section>

    <!-- FOOTER -->
    <div style="border-top:1px solid var(--border);">
        <footer>
            <span class="footer-text">© <span id="yr"></span> Zakwan Sanudin. Built with care.</span>
            <div class="footer-links">
                <a href="#about">About</a>
                <a href="#projects">Projects</a>
                <a href="#contact">Contact</a>
            </div>
        </footer>
    </div>

    <script>
        document.getElementById('yr').textContent = new Date().getFullYear();

        // Toggle all projects
        const toggleBtn = document.getElementById('toggleAllProjects');
        const allProjectsContainer = document.getElementById('allProjectsContainer');
        let allVisible = false;

        toggleBtn.addEventListener('click', function() {
            allVisible = !allVisible;
            if (allVisible) {
                allProjectsContainer.classList.add('visible');
                this.textContent = 'Show fewer projects';
            } else {
                allProjectsContainer.classList.remove('visible');
                this.textContent = 'Show all projects';
                // Scroll back to the button
                this.scrollIntoView({
                    behavior: 'smooth',
                    block: 'center'
                });
            }
        });
    </script>
</body>

</html>