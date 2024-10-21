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
                    <a href="#portfolio" class="nav-item nav-link">Portfolio</a>
                    <a href="#contact" class="nav-item nav-link">Contact</a>
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
                            <a class="btn" href="#contact">Contact Me</a>
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


    <!-- Banner Start -->
    {{-- <div class="banner wow zoomIn" data-wow-delay="0.1s">
            <div class="container">
                <div class="section-header text-center">
                    <p>Reasonable Price</p>
                    <h2>Get A <span>Special</span> Price</h2>
                </div>
                <div class="container banner-text">
                    <p>
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus nec pretium mi. Curabitur facilisis ornare velit non vulputate. Aliquam metus tortor, auctor id gravida condimentum, viverra quis sem. Curabitur non nisl nec nisi scelerisque maximus.
                    </p>
                    <a class="btn">Pricing Plan</a>
                </div>
            </div>
        </div> --}}
    <!-- Banner End -->


    <!-- Portfolio Start -->
    <div class="portfolio" id="portfolio">
        <div class="container">
            <div class="section-header text-center wow zoomIn" data-wow-delay="0.1s">
                <p>My Portfolio</p>
                <h2>My Excellent Portfolio</h2>
            </div>
            <div class="row">
                <div class="col-12">
                    <ul id="portfolio-filter">
                        <li data-filter="*" class="filter-active">All</li>
                        <li data-filter=".filter-1">Web Design</li>
                        <li data-filter=".filter-2">Mobile Apps</li>
                        <li data-filter=".filter-3">Game Dev</li>
                    </ul>
                </div>
            </div>
            <div class="row portfolio-container">
                <div class="col-lg-4 col-md-6 col-sm-12 portfolio-item filter-1 wow fadeInUp" data-wow-delay="0.0s">
                    <div class="portfolio-wrap">
                        <div class="portfolio-img">
                            <img src="{{ asset('img/portfolio-1.jpg') }}" alt="Image">
                        </div>
                        <div class="portfolio-text">
                            <h3>eCommerce Website</h3>
                            <a class="btn" href="{{ asset('img/portfolio-1.jpg') }}"
                                data-lightbox="portfolio">+</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-12 portfolio-item filter-2 wow fadeInUp" data-wow-delay="0.2s">
                    <div class="portfolio-wrap">
                        <div class="portfolio-img">
                            <img src="{{ asset('img/portfolio-2.jpg') }}" alt="Image">
                        </div>
                        <div class="portfolio-text">
                            <h3>Product Landing Page</h3>
                            <a class="btn" href="{{ asset('img/portfolio-2.jpg') }}"
                                data-lightbox="portfolio">+</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-12 portfolio-item filter-3 wow fadeInUp" data-wow-delay="0.4s">
                    <div class="portfolio-wrap">
                        <div class="portfolio-img">
                            <img src="{{ asset('img/portfolio-3.jpg') }}" alt="Image">
                        </div>
                        <div class="portfolio-text">
                            <h3>JavaScript quiz game</h3>
                            <a class="btn" href="{{ asset('img/portfolio-3.jpg') }}"
                                data-lightbox="portfolio">+</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-12 portfolio-item filter-1 wow fadeInUp" data-wow-delay="0.6s">
                    <div class="portfolio-wrap">
                        <div class="portfolio-img">
                            <img src="{{ asset('img/portfolio-4.jpg') }}" alt="Image">
                        </div>
                        <div class="portfolio-text">
                            <h3>JavaScript drawing</h3>
                            <a class="btn" href="{{ asset('img/portfolio-4.jpg') }}"
                                data-lightbox="portfolio">+</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-12 portfolio-item filter-2 wow fadeInUp" data-wow-delay="0.8s">
                    <div class="portfolio-wrap">
                        <div class="portfolio-img">
                            <img src="{{ asset('img/portfolio-5.jpg') }}" alt="Image">
                        </div>
                        <div class="portfolio-text">
                            <h3>Social Mobile Apps</h3>
                            <a class="btn" href="{{ asset('img/portfolio-5.jpg') }}"
                                data-lightbox="portfolio">+</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-12 portfolio-item filter-3 wow fadeInUp" data-wow-delay="1s">
                    <div class="portfolio-wrap">
                        <div class="portfolio-img">
                            <img src="{{ asset('img/portfolio-6.jpg') }}" alt="Image">
                        </div>
                        <div class="portfolio-text">
                            <h3>Company Website</h3>
                            <a class="btn" href="{{ asset('img/portfolio-6.jpg') }}"
                                data-lightbox="portfolio">+</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Portfolio End -->


    <!-- Banner Start -->
    {{-- <div class="banner wow zoomIn" data-wow-delay="0.1s">
            <div class="container">
                <div class="section-header text-center">
                    <p>Awesome Discount</p>
                    <h2>Get <span>30%</span> Discount</h2>
                </div>
                <div class="container banner-text">
                    <p>
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus nec pretium mi. Curabitur facilisis ornare velit non vulputate. Aliquam metus tortor, auctor id gravida condimentum, viverra quis sem. Curabitur non nisl nec nisi scelerisque maximus.
                    </p>
                    <a class="btn">Order Now</a>
                </div>
            </div>
        </div> --}}
    <!-- Banner End -->


    <!-- Price Start -->
    {{-- <div class="price" id="price">
            <div class="container">
                <div class="section-header text-center wow zoomIn" data-wow-delay="0.1s">
                    <p>Pricing Plan</p>
                    <h2>Affordable Price</h2>
                </div>
                <div class="row">
                    <div class="col-md-4 wow fadeInUp" data-wow-delay="0.5s">
                        <div class="price-item">
                            <div class="price-header">
                                <div class="price-title">
                                    <h2>Basic</h2>
                                </div>
                                <div class="price-prices">
                                    <h2><small>$</small>49<span>/ mo</span></h2>
                                </div>
                            </div>
                            <div class="price-body">
                                <div class="price-description">
                                    <ul>
                                        <li>Bootstrap 4</li>
                                        <li>Font Awesome 5</li>
                                        <li>Responsive Design</li>
                                        <li>Browser Compatibility</li>
                                        <li>Easy To Use</li>
                                    </ul>
                                </div>
                            </div>
                            <div class="price-footer">
                                <div class="price-action">
                                    <a class="btn" href="">Order Now</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 wow fadeInUp" data-wow-delay="0.0s">
                        <div class="price-item featured-item">
                            <div class="price-header">
                                <div class="price-title">
                                    <h2>Standard</h2>
                                </div>
                                <div class="price-prices">
                                    <h2><small>$</small>99<span>/ mo</span></h2>
                                </div>
                            </div>
                            <div class="price-body">
                                <div class="price-description">
                                    <ul>
                                        <li>Bootstrap 4</li>
                                        <li>Font Awesome 5</li>
                                        <li>Responsive Design</li>
                                        <li>Browser Compatibility</li>
                                        <li>Easy To Use</li>
                                    </ul>
                                </div>
                            </div>
                            <div class="price-footer">
                                <div class="price-action">
                                    <a class="btn" href="">Order Now</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 wow fadeInUp" data-wow-delay="0.5s">
                        <div class="price-item">
                            <div class="price-header">
                                <div class="price-title">
                                    <h2>Premium</h2>
                                </div>
                                <div class="price-prices">
                                    <h2><small>$</small>149<span>/ mo</span></h2>
                                </div>
                            </div>
                            <div class="price-body">
                                <div class="price-description">
                                    <ul>
                                        <li>Bootstrap 4</li>
                                        <li>Font Awesome 5</li>
                                        <li>Responsive Design</li>
                                        <li>Browser Compatibility</li>
                                        <li>Easy To Use</li>
                                    </ul>
                                </div>
                            </div>
                            <div class="price-footer">
                                <div class="price-action">
                                    <a class="btn" href="">Order Now</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div> --}}
    <!-- Price End -->


    <!-- Testimonial Start -->
    {{-- <div class="testimonial wow fadeInUp" data-wow-delay="0.1s" id="review">
            <div class="container">
                <div class="testimonial-icon">
                    <i class="fa fa-quote-left"></i>
                </div>
                <div class="owl-carousel testimonials-carousel">
                    <div class="testimonial-item">
                        <div class="testimonial-img">
                            <img src="{{ asset('img/testimonial-1.jpg') }}" alt="Image">
                        </div>
                        <div class="testimonial-text">
                            <p>
                                Lorem ipsum dolor sit amet consec adipis elit. Etiam accums lacus eget velit tincid, quis suscip justo dictum. Lorem ipsum dolor sit amet consec adipis elit.
                            </p>
                            <h3>Customer Name</h3>
                            <h4>Profession</h4>
                        </div>
                    </div>
                    <div class="testimonial-item">
                        <div class="testimonial-img">
                            <img src="{{ asset('img/testimonial-2.jpg') }}" alt="Image">
                        </div>
                        <div class="testimonial-text">
                            <p>
                                Lorem ipsum dolor sit amet consec adipis elit. Etiam accums lacus eget velit tincid, quis suscip justo dictum. Lorem ipsum dolor sit amet consec adipis elit.
                            </p>
                            <h3>Customer Name</h3>
                            <h4>Profession</h4>
                        </div>
                    </div>
                    <div class="testimonial-item">
                        <div class="testimonial-img">
                            <img src="{{ asset('img/testimonial-3.jpg') }}" alt="Image">
                        </div>
                        <div class="testimonial-text">
                            <p>
                                Lorem ipsum dolor sit amet consec adipis elit. Etiam accums lacus eget velit tincid, quis suscip justo dictum. Lorem ipsum dolor sit amet consec adipis elit.
                            </p>
                            <h3>Customer Name</h3>
                            <h4>Profession</h4>
                        </div>
                    </div>
                </div>
            </div>
        </div> --}}
    <!-- Testimonial End -->


    <!-- Team Start -->
    {{-- <div class="team" id="team">
            <div class="container">
                <div class="section-header text-center wow zoomIn" data-wow-delay="0.1s">
                    <p>My Team</p>
                    <h2>Expert Team Members</h2>
                </div>
                <div class="row">
                    <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.0s">
                        <div class="team-item">
                            <div class="team-img">
                                <img src="{{ asset('img/team-1.jpg') }}" alt="Image">
                            </div>
                            <div class="team-text">
                                <h2>Mollie Ross</h2>
                                <h4>Web Designer</h4>
                                <p>
                                    Lorem ipsum dolor sit amet consec adipis elit. Etiam accum lacus
                                </p>
                                <div class="team-social">
                                    <a class="btn" href=""><i class="fab fa-twitter"></i></a>
                                    <a class="btn" href=""><i class="fab fa-facebook-f"></i></a>
                                    <a class="btn" href=""><i class="fab fa-linkedin-in"></i></a>
                                    <a class="btn" href=""><i class="fab fa-instagram"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.2s">
                        <div class="team-item">
                            <div class="team-img">
                                <img src="{{ asset('img/team-2.jpg') }}" alt="Image">
                            </div>
                            <div class="team-text">
                                <h2>Dylan Adams</h2>
                                <h4>Web Developer</h4>
                                <p>
                                    Lorem ipsum dolor sit amet consec adipis elit. Etiam accum lacus
                                </p>
                                <div class="team-social">
                                    <a class="btn" href=""><i class="fab fa-twitter"></i></a>
                                    <a class="btn" href=""><i class="fab fa-facebook-f"></i></a>
                                    <a class="btn" href=""><i class="fab fa-linkedin-in"></i></a>
                                    <a class="btn" href=""><i class="fab fa-instagram"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.4s">
                        <div class="team-item">
                            <div class="team-img">
                                <img src="{{ asset('img/team-3.jpg') }}" alt="Image">
                            </div>
                            <div class="team-text">
                                <h2>Jennifer Page</h2>
                                <h4>Apps Designer</h4>
                                <p>
                                    Lorem ipsum dolor sit amet consec adipis elit. Etiam accum lacus
                                </p>
                                <div class="team-social">
                                    <a class="btn" href=""><i class="fab fa-twitter"></i></a>
                                    <a class="btn" href=""><i class="fab fa-facebook-f"></i></a>
                                    <a class="btn" href=""><i class="fab fa-linkedin-in"></i></a>
                                    <a class="btn" href=""><i class="fab fa-instagram"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.6s">
                        <div class="team-item">
                            <div class="team-img">
                                <img src="{{ asset('img/team-4.jpg') }}" alt="Image">
                            </div>
                            <div class="team-text">
                                <h2>Josh Dunn</h2>
                                <h4>Apps Developer</h4>
                                <p>
                                    Lorem ipsum dolor sit amet consec adipis elit. Etiam accum lacus
                                </p>
                                <div class="team-social">
                                    <a class="btn" href=""><i class="fab fa-twitter"></i></a>
                                    <a class="btn" href=""><i class="fab fa-facebook-f"></i></a>
                                    <a class="btn" href=""><i class="fab fa-linkedin-in"></i></a>
                                    <a class="btn" href=""><i class="fab fa-instagram"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div> --}}
    <!-- Team End -->


    <!-- Contact Start -->
    <div class="contact wow fadeInUp" data-wow-delay="0.1s" id="contact">
        <div class="container-fluid">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-md-4"></div>
                    <div class="col-md-8">
                        <div class="contact-form">
                            <div id="success"></div>
                            <form name="sentMessage" id="contactForm" novalidate="novalidate">
                                <div class="control-group">
                                    <input type="text" class="form-control" id="name"
                                        placeholder="Your Name" required="required"
                                        data-validation-required-message="Please enter your name" />
                                    <p class="help-block"></p>
                                </div>
                                <div class="control-group">
                                    <input type="email" class="form-control" id="email"
                                        placeholder="Your Email" required="required"
                                        data-validation-required-message="Please enter your email" />
                                    <p class="help-block"></p>
                                </div>
                                <div class="control-group">
                                    <input type="text" class="form-control" id="subject" placeholder="Subject"
                                        required="required"
                                        data-validation-required-message="Please enter a subject" />
                                    <p class="help-block"></p>
                                </div>
                                <div class="control-group">
                                    <textarea class="form-control" id="message" placeholder="Message" required="required"
                                        data-validation-required-message="Please enter your message"></textarea>
                                    <p class="help-block"></p>
                                </div>
                                <div>
                                    <button class="btn" type="submit" id="sendMessageButton">Send
                                        Message</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Contact End -->


    <!-- Blog Start -->
    {{-- <div class="blog" id="blog">
            <div class="container">
                <div class="section-header text-center wow zoomIn" data-wow-delay="0.1s">
                    <p>From Blog</p>
                    <h2>Latest Articles</h2>
                </div>
                <div class="row">
                    <div class="col-lg-6">
                        <div class="blog-item wow fadeInUp" data-wow-delay="0.1s">
                            <div class="blog-img">
                                <img src="{{ asset('img/blog-1.jpg') }}" alt="Blog">
                            </div>
                            <div class="blog-text">
                                <h2>Lorem ipsum dolor sit amet</h2>
                                <div class="blog-meta">
                                    <p><i class="far fa-user"></i>Admin</p>
                                    <p><i class="far fa-list-alt"></i>Web Design</p>
                                    <p><i class="far fa-calendar-alt"></i>01-Jan-2045</p>
                                    <p><i class="far fa-comments"></i>5</p>
                                </div>
                                <p>
                                    Lorem ipsum dolor sit amet elit. Nullam commodo mattis mi. Nullam eu erat lectus. Proin viverra risus vitae luctus. Proin ut ante, vitae sapien. Fusce sem ac erat rhoncus, ornare mattis nisl massa et eros vitae pulvin
                                </p>
                                <a class="btn" href="">Read More <i class="fa fa-angle-right"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="blog-item wow fadeInUp" data-wow-delay="0.3s">
                            <div class="blog-img">
                                <img src="{{ asset('img/blog-2.jpg') }}" alt="Blog">
                            </div>
                            <div class="blog-text">
                                <h2>Lorem ipsum dolor sit amet</h2>
                                <div class="blog-meta">
                                    <p><i class="far fa-user"></i>Admin</p>
                                    <p><i class="far fa-list-alt"></i>Apps Design</p>
                                    <p><i class="far fa-calendar-alt"></i>01-Jan-2045</p>
                                    <p><i class="far fa-comments"></i>10</p>
                                </div>
                                <p>
                                    Lorem ipsum dolor sit amet elit. Nullam commodo mattis mi. Nullam eu erat lectus. Proin viverra risus vitae luctus. Proin ut ante, vitae sapien. Fusce sem ac erat rhoncus, ornare mattis nisl massa et eros vitae pulvin
                                </p>
                                <a class="btn" href="">Read More <i class="fa fa-angle-right"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div> --}}
    <!-- Blog End -->


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
                        <a href=""><i class="fab fa-instagram"></i></a>
                        <a href=""><i class="fab fa-linkedin-in"></i></a>
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
