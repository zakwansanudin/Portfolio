<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Zakwan Portfolio</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

    <style>
        body {
            font-family: Arial, sans-serif;
        }

        .hero {
            background: linear-gradient(135deg, #0d6efd, #6610f2);
            color: white;
            padding: 100px 0;
        }

        .project-card {
            transition: 0.3s;
        }

        .project-card:hover {
            transform: translateY(-5px);
        }

        .section-title {
            margin-bottom: 40px;
            font-weight: bold;
        }

        footer {
            background: #212529;
            color: white;
            padding: 20px 0;
        }
    </style>
</head>
<body>

    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container">
            <a class="navbar-brand" href="#">Zakwan Portfolio</a>

            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbarNav">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="#about">About</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="#projects">Projects</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="#contact">Contact</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- Hero Section -->
    <section class="hero text-center">
        <div class="container">
            <h1 class="display-4 fw-bold">Hi, I'm Zakwan</h1>
            <p class="lead">
                Full Stack Developer | Laravel Developer | ASP.NET Learner
            </p>

            <a href="#projects" class="btn btn-light btn-lg mt-3">
                View My Projects
            </a>
        </div>
    </section>

    <!-- About -->
    <section id="about" class="py-5">
        <div class="container">
            <h2 class="section-title text-center">About Me</h2>

            <div class="row justify-content-center">
                <div class="col-md-8 text-center">
                    <p>
                        I am a passionate web developer specializing in
                        Laravel, PHP, MySQL, JavaScript, and modern web
                        technologies. I enjoy building scalable web
                        applications and solving real-world problems through
                        software development.
                    </p>
                </div>
            </div>
        </div>
    </section>

    <!-- Skills -->
    <section class="bg-light py-5">
        <div class="container">
            <h2 class="section-title text-center">Skills</h2>

            <div class="row text-center">
                <div class="col-md-3 mb-3">
                    <div class="card">
                        <div class="card-body">
                            <h5>Laravel</h5>
                        </div>
                    </div>
                </div>

                <div class="col-md-3 mb-3">
                    <div class="card">
                        <div class="card-body">
                            <h5>PHP</h5>
                        </div>
                    </div>
                </div>

                <div class="col-md-3 mb-3">
                    <div class="card">
                        <div class="card-body">
                            <h5>MySQL</h5>
                        </div>
                    </div>
                </div>

                <div class="col-md-3 mb-3">
                    <div class="card">
                        <div class="card-body">
                            <h5>JavaScript</h5>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Projects -->
    <section id="projects" class="py-5">
        <div class="container">
            <h2 class="section-title text-center">Projects</h2>

            <div class="row">

                <div class="col-md-4 mb-4">
                    <div class="card project-card h-100">
                        <div class="card-body">
                            <h5 class="card-title">
                                Student Management System
                            </h5>

                            <p class="card-text">
                                Laravel-based student management platform
                                with attendance tracking and reporting.
                            </p>

                            <a href="#" class="btn btn-primary">
                                View Project
                            </a>
                        </div>
                    </div>
                </div>

                <div class="col-md-4 mb-4">
                    <div class="card project-card h-100">
                        <div class="card-body">
                            <h5 class="card-title">
                                Inventory Management System
                            </h5>

                            <p class="card-text">
                                ASP.NET Core MVC inventory system with
                                authentication and reporting modules.
                            </p>

                            <a href="#" class="btn btn-primary">
                                View Project
                            </a>
                        </div>
                    </div>
                </div>

                <div class="col-md-4 mb-4">
                    <div class="card project-card h-100">
                        <div class="card-body">
                            <h5 class="card-title">
                                E-Learning Platform
                            </h5>

                            <p class="card-text">
                                Online learning platform with video courses,
                                assignments, and progress tracking.
                            </p>

                            <a href="#" class="btn btn-primary">
                                View Project
                            </a>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>

    <!-- Contact -->
    <section id="contact" class="bg-light py-5">
        <div class="container text-center">
            <h2 class="section-title">Contact Me</h2>

            <p>Email: zakwan@example.com</p>
            <p>Phone: +60 12-345 6789</p>

            <a href="#" class="btn btn-dark">
                Download Resume
            </a>
        </div>
    </section>

    <!-- Footer -->
    <footer class="text-center">
        <div class="container">
            <p class="mb-0">
                © {{ date('Y') }} Zakwan Portfolio. All Rights Reserved.
            </p>
        </div>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

</body>
</html>