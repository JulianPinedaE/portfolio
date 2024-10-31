<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>DevFolio - Developer Portfolio Template</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="Free Website Template" name="keywords">
    <meta content="Free Website Template" name="description">

    <!-- Favicon -->
    <link href="{{ asset('img/favicon.ico"') }} rel="icon">

    <!-- Google Font -->
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300;400;500;600;700&display=swap"
        rel="stylesheet">

    <!-- CSS Libraries -->
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="{{ asset('lib/animate/animate.min.css') }}" rel="stylesheet">
    <link href="{{ asset('lib/owlcarousel/assets/owl.carousel.min.css') }}" rel="stylesheet">
    <link href="{{ asset('lib/lightbox/css/lightbox.min.css') }}" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="{{ asset('css/style.css') }}" rel="stylesheet">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
</head>

<body data-spy="scroll" data-target=".navbar" data-offset="51">
    <!-- Nav Bar Start -->
    <div class="navbar navbar-expand-lg bg-light navbar-light">
        <div class="container-fluid">
            <a href="home.blade.php" class="navbar-brand">DevFolio</a>
            <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse justify-content-between" id="navbarCollapse">
                <div class="navbar-nav ml-auto">
                    <a href="#home" class="nav-item nav-link active">Home</a>
                    <a href="#about" class="nav-item nav-link">About</a>
                    <a href="#service" class="nav-item nav-link">Service</a>
                    <a href="#experience" class="nav-item nav-link">Experience</a>
                </div>
            </div>
        </div>
    </div>
    <!-- Nav Bar End -->


    <!-- Hero Start -->
    <div class="hero" id="home">
        <div class="container-fluid">
            <div class="row align-items-center">
                <div class="col-sm-12 col-md-6">
                    <div class="hero-content">
                        <div class="hero-text">
                            <p>I'm</p>
                            <h1>Julian Pineda</h1>
                            <h2></h2>
                            <div class="typed-text">Project Manager, Software Architect, Full Stack Developer,
                                Videogames Designer, Videogames Developer</div>
                        </div>
                        <div class="hero-btn">
                            <a class="btn" href="https://www.linkedin.com/in/julian-pineda-escobar-a87aa553/">Contact Me</a>
                        </div>
                    </div>
                </div>
                <div class="col-sm-12 col-md-6 d-none d-md-block">
                    <div class="hero-image">
                        <img src="{{ asset('img/hero.png') }}" alt="Hero Image">
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Hero End -->


    <!-- About Start -->
    <div class="about wow fadeInUp" data-wow-delay="0.1s" id="about">
        <div class="container-fluid">
            <div class="row align-items-center">
                <div class="col-lg-6">
                    <div class="about-img">
                        <img src="{{ asset('img/about.jpg') }}" alt="Image">
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="about-content">
                        <div class="section-header text-left">
                            <p>Learn About Me</p>
                            <h2>+5 Years Experience</h2>
                        </div>
                        <div class="about-text">
                            <p>
                                I am a bioengineer with a master's degree in engineering, with a strong background in
                                developing interactive technologies and video games. I have 6 years of experience in
                                full-stack web development and have led teams as a software architect on complex
                                projects, with a strong emphasis on cross-disciplinary collaboration, project
                                management, and delivering scalable products.
                            </p>
                        </div>
                        <div class="skills">
                            <div class="skill-name">
                                <p>Full Stack Developer</p>
                                <p>90%</p>
                            </div>
                            <div class="progress">
                                <div class="progress-bar" role="progressbar" aria-valuenow="90" aria-valuemin="0"
                                    aria-valuemax="100"></div>
                            </div>
                            <div class="skill-name">
                                <p>Project Manager</p>
                                <p>95%</p>
                            </div>
                            <div class="progress">
                                <div class="progress-bar" role="progressbar" aria-valuenow="95" aria-valuemin="0"
                                    aria-valuemax="100"></div>
                            </div>
                            <div class="skill-name">
                                <p>Videogames Developer</p>
                                <p>90%</p>
                            </div>
                            <div class="progress">
                                <div class="progress-bar" role="progressbar" aria-valuenow="90" aria-valuemin="0"
                                    aria-valuemax="100"></div>
                            </div>
                            <div class="skill-name">
                                <p>Software Architect</p>
                                <p>85%</p>
                            </div>
                            <div class="progress">
                                <div class="progress-bar" role="progressbar" aria-valuenow="85" aria-valuemin="0"
                                    aria-valuemax="100"></div>
                            </div>
                        </div>
                        <a class="btn" href="#experience">Learn More</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- About End -->


    <!-- Service Start -->
    <div class="service" id="service">
        <div class="container">
            <div class="section-header text-center wow zoomIn" data-wow-delay="0.1s">
                <p>What I do</p>
                <h2>Awesome Quality Interactive Technologies</h2>
            </div>
            <div class="row">
                <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.0s">
                    <div class="service-item">
                        <div class="service-icon">
                            <i class="fa fa-tasks"></i>
                        </div>
                        <div class="service-text">
                            <h3>Project Manager</h3>
                            <p>
                                Managing technological projects, coordinating teams and resources to ensure timely
                                deliveries, with a focus on web development, video games, gamification, and IoT.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.2s">
                    <div class="service-item">
                        <div class="service-icon">
                            <i class="fa fa-sitemap"></i>
                        </div>
                        <div class="service-text">
                            <h3>Software Architect</h3>
                            <p>
                                Designing robust and scalable architectures for complex applications, ensuring the best
                                technological strategy for each project.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.4s">
                    <div class="service-item">
                        <div class="service-icon">
                            <i class="fa fa-laptop-code"></i>
                        </div>
                        <div class="service-text">
                            <h3>Full Stack Developer</h3>
                            <p>
                                Full development of web applications from frontend to backend, using modern technologies
                                to provide efficient solutions tailored to the client's needs.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.6s">
                    <div class="service-item">
                        <div class="service-icon">
                            <i class="fa fa-gamepad"></i>
                        </div>
                        <div class="service-text">
                            <h3>Videogames Developer</h3>
                            <p>
                                Designing and developing innovative video games, using engines like <b>Unity</b> and
                                <b>Roblox</b>, combining immersive gameplay with gamification elements.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Service End -->


    <!-- Experience Start -->
    <div class="experience" id="experience">
        <div class="container">
            <header class="section-header text-center wow zoomIn" data-wow-delay="0.1s">
                <p>My Resume</p>
                <h2>Working Experience</h2>
            </header>
            <div class="timeline">
                <div class="timeline-item left wow slideInLeft" data-wow-delay="0.1s">
                    <div class="timeline-text">
                        <div class="timeline-date">2023 - Present</div>
                        <h2>Game Developer</h2>
                        <h4>Independent Game Developer</h4>
                        <p>
                            Developing immersive and innovative experiences on Roblox, with a focus on mini-games featuring unique mechanics. Expertise in game design, scripting and 3D modeling allows me to create engaging content that captivates players and enhances their experience.
                        </p>
                        <a href="https://www.roblox.com/games/15995588647/Olympus-Odyssey" target="_blank">
                            <button class="btn btn-primary">Play</button>
                        </a>
                    </div>
                </div>
                <div class="timeline-item right wow slideInRight" data-wow-delay="0.1s">
                    <div class="timeline-text">
                        <div class="timeline-date">2019 - Present</div>
                        <h2>Full Stack Developer</h2>
                        <h4>Alcaldía de Medellín</h4>
                        <p>
                            Led the development and automation of web solutions for citizen services at the Medellín City Hall, improving accessibility and efficiency in public processes. Involved in all stages from project management and software architecture to UX design and full stack development. Technologies used include Laravel PHP, JavaScript, React, Alfresco, PostgreSQL and Git.
                        </p>
                    </div>
                </div>
                <div class="timeline-item left wow slideInLeft" data-wow-delay="0.1s">
                    <div class="timeline-text">
                        <div class="timeline-date">2019 - 2022</div>
                        <h2>Virtual Reality Game Developer</h2>
                        <h4>Universidad de Antioquía</h4>
                        <p>
                            Designed and developed an innovative virtual reality game aimed at rehabilitation using bicycles, integrating engaging gameplay to facilitate physical recovery. In this project, I took on multiple roles, including game designer, scripter, 3D modeler, UX designer, full stack developer, engineer, project manager and researcher. I utilized various technologies such as Blender, Unity3D (C#), HTC VIVE, Arduino (C), Raspberry PI, Node-RED, JavaScript, HTML5, SQLite, PSoC, Python and Git to create an effective and immersive rehabilitation experience.
                        </p>
                        <a href="https://www.youtube.com/watch?v=49tSDCCW3Eo&ab_channel=JulianGamificator" target="_blank">
                            <button class="btn btn-primary">Watch Project Video</button>
                        </a>
                        <p>
                            <a href="https://scienti.minciencias.gov.co/cvlac/visualizador/generarCurriculoCv.do?cod_rh=0000139282" target="_blank">View Research Paper</a>
                        </p>
                    </div>
                </div>
                <div class="timeline-item right wow slideInRight" data-wow-delay="0.1s">
                    <div class="timeline-text">
                        <div class="timeline-date">2020</div>
                        <h2>Game Developer</h2>
                        <h4>Independent Game Developer</h4>
                        <p>
                            Developed an educational game focused on raising awareness about the care of petroglyphs in the city of Támesis, Antioquia. In this freelance project, I served as the game designer, scripter, UX designer, and 2D animator. Leveraging technologies such as Unity3D (C#), Illustrator and Git, I created an engaging and informative experience that promotes the preservation of cultural heritage.
                        </p>
                        <a href="https://juego-petroglifos.github.io/juego/" target="_blank">
                            <button class="btn btn-primary">Play</button>
                        </a>
                    </div>
                </div>
                <div class="timeline-item left wow slideInLeft" data-wow-delay="0.1s">
                    <div class="timeline-text">
                        <div class="timeline-date">2017-2018</div>
                        <h2>Game Developer</h2>
                        <h4>Mahavir Kmina</h4>
                        <p>
                            Developed games designed to serve as a functional complement for the rehabilitation of patients with lower limb amputation. In this role, I took on various responsibilities, including game designer, scripter, 3D modeler, UX designer, full stack developer, engineer, project manager and researcher. Utilizing a diverse range of technologies such as Blender, Unity3D (C#), JavaScript, HTML5, SQLite, PHP, Matlab and Git, I created interactive and therapeutic experiences tailored to enhance recovery for users.
                        </p>
                        <a href="https://www.youtube.com/watch?v=S34PJpJKfhw&ab_channel=JulianGamificator" target="_blank">
                            <button class="btn btn-primary">Watch Project Video</button>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Job Experience End -->

    <!-- Footer Start -->
    <div class="footer wow fadeIn" data-wow-delay="0.3s">
        <div class="container-fluid">
            <div class="container">
                <div class="footer-info">
                    <h2>Julian Pineda, Gamificator</h2>
                    {{-- <h3>123 Street, New York, USA</h3>
                        <div class="footer-menu">
                            <p>+012 345 67890</p>
                            <p>info@example.com</p>
                        </div> --}}
                    <div class="footer-social">
                        {{-- <a href=""><i class="fab fa-twitter"></i></a>
                            <a href=""><i class="fab fa-facebook-f"></i></a> --}}
                        {{-- <a href=""><i class="fab fa-youtube"></i></a> --}}
                        {{-- <a href=""><i class="fab fa-instagram"></i></a> --}}
                        <a href="https://www.linkedin.com/in/julian-pineda-escobar-a87aa553/"><i class="fab fa-linkedin-in"></i></a>
                    </div>
                </div>
            </div>
            <div class="container copyright">
                <p>&copy; <a href="#">Gamificator</a>, All Right Reserved</a></p>
                <p hidden>&copy; <a href="#">Your Site Name</a>, All Right Reserved | Designed By <a
                        href="https://htmlcodex.com">HTML Codex</a></p>
            </div>
        </div>
    </div>
    <!-- Footer End -->


    <!-- Back to top button -->
    <a href="#" class="btn back-to-top"><i class="fa fa-chevron-up"></i></a>


    <!-- Pre Loader -->
    <div id="loader" class="show">
        <div class="loader"></div>
    </div>


    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js"></script>
    <script src="{{ asset('lib/easing/easing.min.js') }}"></script>
    <script src="{{ asset('lib/wow/wow.min.js') }}"></script>
    <script src="{{ asset('lib/waypoints/waypoints.min.js') }}"></script>
    <script src="{{ asset('lib/typed/typed.min.js') }}"></script>
    <script src="{{ asset('lib/owlcarousel/owl.carousel.min.js') }}"></script>
    <script src="{{ asset('lib/isotope/isotope.pkgd.min.js') }}"></script>
    <script src="{{ asset('lib/lightbox/js/lightbox.min.js') }}"></script>

    <!-- Contact Javascript File -->
    <script src="{{ asset('mail/jqBootstrapValidation.min.js') }}"></script>
    <script src="{{ asset('mail/contact.js') }}"></script>

    <!-- Template Javascript -->
    <script src="{{ asset('js/main.js') }}"></script>
</body>

</html>
