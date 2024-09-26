<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <title>CySec</title>
    <meta name="description" content="">
    <meta name="keywords" content="">

    <!-- FAVICON -->
    <link rel="icon" href="{{ asset('images/logo.webp') }}">

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com" rel="preconnect">
    <link href="https://fonts.gstatic.com" rel="preconnect" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Nunito+Sans:ital,wght@0,200;0,300;0,400;0,600;0,700;0,800;0,900;1,200;1,300;1,400;1,600;1,700;1,800;1,900&display=swap"
        rel="stylesheet">

    <!-- Vendor CSS Files -->
    <link href="{{ asset('assets/vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/vendor/bootstrap-icons/bootstrap-icons.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/vendor/aos/aos.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/vendor/glightbox/css/glightbox.min.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/vendor/swiper/swiper-bundle.min.css') }}" rel="stylesheet">

    <!-- Main CSS File -->
    <link href="{{ asset('assets/css/main.css') }}" rel="stylesheet">

    <!-- =======================================================
  * Template Name: Scaffold
  * Template URL: https://bootstrapmade.com/scaffold-bootstrap-metro-style-template/
  * Updated: Aug 07 2024 with Bootstrap v5.3.3
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body class="index-page">

    @include('layouts.home-header')

    <main class="main">

        <!-- Hero Section -->
        <section id="hero" class="hero section">

            <div class="container">
                <div class="row gy-4">
                    <div class="col-lg-7 order-2 order-lg-1 d-flex flex-column justify-content-center">
                        <h1 class="mb-2">Welcome to</h1>
                        <h3>Perfectus Cyber Security Awareness Program</h3><br>
                        <div class="d-flex">
                            <a href="#quiz" class="btn-get-started">Get Started</a>
                        </div>
                    </div>
                    <div class="col-lg-5 order-1 order-lg-2 hero-img">
                        <img src="assets/img/hero-img.png" class="img-fluid" alt="">
                    </div>
                </div>
            </div>

        </section><!-- /Hero Section -->

        <!-- Call To Action Section -->
        <section id="quiz" class="call-to-action section light-background">

            <img src="assets/img/cta-bg.jpg" alt="">

            <div class="container">

                <div class="row" data-aos="zoom-in" data-aos-delay="100">
                    <div class="col-xl-9 text-center text-xl-start">
                        <h3>Go Through the Quiz</h3>
                        <p>Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla
                            pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt
                            mollit anim id est laborum.</p>
                    </div>
                    <div class="col-xl-3 cta-btn-container text-center">
                        @auth
                            <a class="cta-btn align-middle" href="{{ route($quizRoute) }}">{{ $text }}</a>
                        @else
                            <button style="border: none;" type="button" class="cta-btn align-middle" data-bs-toggle="modal"
                                data-bs-target="#postadModal">
                                Go To Quiz
                            </button>
                        @endauth
                    </div>
                </div>

            </div>

        </section><!-- /Call To Action Section -->

        <!-- Features Section -->
        <section id="walkthrough" class="features section">

            <div class="container">

                <ul class="nav nav-tabs row  g-2 d-flex" data-aos="fade-up" data-aos-delay="100">

                    <li class="nav-item col-3">
                        <a class="nav-link active show" data-bs-toggle="tab" data-bs-target="#features-tab-1">
                            <h4>Choose a Strong Base Phrase</h4>
                        </a>
                    </li><!-- End tab nav item -->

                    <li class="nav-item col-3">
                        <a class="nav-link" data-bs-toggle="tab" data-bs-target="#features-tab-2">
                            <h4>Add Symbols and Numbers</h4>
                        </a><!-- End tab nav item -->

                    </li>
                    <li class="nav-item col-3">
                        <a class="nav-link" data-bs-toggle="tab" data-bs-target="#features-tab-3">
                            <h4>Capitalize Letters</h4>
                        </a>
                    </li><!-- End tab nav item -->

                    <li class="nav-item col-3">
                        <a class="nav-link" data-bs-toggle="tab" data-bs-target="#features-tab-4">
                            <h4>Use a Password Manager</h4>
                        </a>
                    </li><!-- End tab nav item -->

                </ul>

                <div class="tab-content" data-aos="fade-up" data-aos-delay="200">

                    <div class="tab-pane fade active show" id="features-tab-1">
                        <div class="row">
                            <div
                                class="col-lg-6 order-2 order-lg-1 mt-3 mt-lg-0 d-flex flex-column justify-content-center">
                                <p class="fst-italic">
                                    Start with a base phrase that is meaningful to you but difficult for others to
                                    guess. Avoid using common phrases, names, birthdays, or pet names. The more random
                                    and complex the base phrase, the harder it will be to crack. For example, instead of
                                    "password123," you could use "TheQuickBrownFoxJumpsOverTheLazyDog1234."
                                </p>
                            </div>
                            <div class="col-lg-6 order-1 order-lg-2 text-center">
                                <img src="assets/img/working-1.jpg" alt="" class="img-fluid">
                            </div>
                        </div>
                    </div><!-- End tab content item -->

                    <div class="tab-pane fade" id="features-tab-2">
                        <div class="row">
                            <div
                                class="col-lg-6 order-2 order-lg-1 mt-3 mt-lg-0 d-flex flex-column justify-content-center">
                                <p class="fst-italic">
                                    Insert symbols and numbers throughout the base phrase to make it even more secure.
                                    Use a variety of special characters like @, #, $, %, &, *, and ^. This will
                                    significantly increase the complexity of your password and make it much harder to
                                    brute force. For instance, you could modify the previous example to
                                    "T#heQui$ckBr0wnF0xJumpsOv3rTh3LazyD0g1234."
                                </p>
                            </div>
                            <div class="col-lg-6 order-1 order-lg-2 text-center">
                                <img src="assets/img/working-2.jpg" alt="" class="img-fluid">
                            </div>
                        </div>
                    </div><!-- End tab content item -->

                    <div class="tab-pane fade" id="features-tab-3">
                        <div class="row">
                            <div
                                class="col-lg-6 order-2 order-lg-1 mt-3 mt-lg-0 d-flex flex-column justify-content-center">
                                <p class="fst-italic">
                                    Capitalize some of the letters in your password. This adds another layer of
                                    complexity and makes it harder for attackers to guess the correct combination of
                                    uppercase and lowercase letters. For example, you could capitalize the first letter
                                    of each word in the base phrase: "T#he Qui$ck Br0wn F0x Jumps Ov3r Th3 Lazy
                                    D0g1234."
                                </p>
                            </div>
                            <div class="col-lg-6 order-1 order-lg-2 text-center">
                                <img src="assets/img/working-3.jpg" alt="" class="img-fluid">
                            </div>
                        </div>
                    </div><!-- End tab content item -->

                    <div class="tab-pane fade" id="features-tab-4">
                        <div class="row">
                            <div
                                class="col-lg-6 order-2 order-lg-1 mt-3 mt-lg-0 d-flex flex-column justify-content-center">
                                <p class="fst-italic">
                                    A password manager is a secure tool that can help you generate, store, and manage
                                    strong passwords. It uses encryption to protect your passwords, making it much safer
                                    than storing them in a plain text file or your browser. Password managers also allow
                                    you to use different passwords for each website or service, which is a crucial
                                    security best practice.
                                </p>
                            </div>
                            <div class="col-lg-6 order-1 order-lg-2 text-center">
                                <img src="assets/img/working-4.jpg" alt="" class="img-fluid">
                            </div>
                        </div>
                    </div><!-- End tab content item -->

                </div>

            </div>

        </section><!-- /Features Section -->

        <!-- About Section -->
        <section id="about" class="about section">

            <div class="container pb-3" data-aos="fade-up">
                <div class="row gx-0">

                    <div class="col-lg-6 d-flex align-items-center" data-aos="zoom-out" data-aos-delay="200">
                        <img src="assets/img/about.jpg" class="img-fluid" alt="">
                    </div>

                    <div class="col-lg-6 d-flex flex-column justify-content-center" data-aos="fade-up"
                        data-aos-delay="200">
                        <div class="content">
                            <h3>A Comprehensive Overview of the Enterprise Information Security Policy (EISP)</h3>
                            <p>
                                The EISP outlines policies for securing information assets. It covers access control,
                                data protection, incident response, acceptable use, and vendor management. By following
                                these guidelines, organizations can reduce the risk of security breaches and protect
                                sensitive data.
                            </p>
                            <div class="text-center text-lg-start">
                                <a href="{{ route('article1') }}"
                                    class="btn-read-more d-inline-flex align-items-center justify-content-center align-self-center">
                                    <span>Read More</span>
                                    <i class="bi bi-arrow-right"></i>
                                </a>
                            </div>
                        </div>
                    </div>

                </div>
            </div>

            <div class="container py-3" data-aos="fade-up">
                <div class="row gx-0">

                    <div class="col-lg-6 d-flex align-items-center" data-aos="zoom-out" data-aos-delay="200">
                        <img src="assets/img/about.jpg" class="img-fluid" alt="">
                    </div>

                    <div class="col-lg-6 d-flex flex-column justify-content-center" data-aos="fade-up"
                        data-aos-delay="200">
                        <div class="content">
                            <h3>Issue-Specific Security Policies (ISSPs)</h3>
                            <h2></h2>
                            <p>
                                The ISSPs address specific security concerns. They complement the EISP by providing
                                detailed guidelines for social engineering, mobile device security, cloud security,
                                supply chain security, and insider threats. By following these policies, organizations
                                can strengthen their security posture and protect sensitive information.
                            </p>
                            <div class="text-center text-lg-start">
                                <a href="{{ route('article2') }}"
                                    class="btn-read-more d-inline-flex align-items-center justify-content-center align-self-center">
                                    <span>Read More</span>
                                    <i class="bi bi-arrow-right"></i>
                                </a>
                            </div>
                        </div>
                    </div>

                </div>
            </div>

            <div class="container pt-3" data-aos="fade-up">
                <div class="row gx-0">

                    <div class="col-lg-6 d-flex align-items-center" data-aos="zoom-out" data-aos-delay="200">
                        <img src="assets/img/about.jpg" class="img-fluid" alt="">
                    </div>

                    <div class="col-lg-6 d-flex flex-column justify-content-center" data-aos="fade-up"
                        data-aos-delay="200">
                        <div class="content">
                            <h3>System-Specific Security Policy (SysSP)</h3>
                            <p>
                                The SysSP covers specific system configurations, including password requirements, BYOD
                                guidelines, WFH policies, and AI tool usage. It ensures secure setups for devices,
                                remote work, and AI integration, protecting data and preventing unauthorized access.
                            </p>
                            <div class="text-center text-lg-start">
                                <a href="{{ route('article3') }}"
                                    class="btn-read-more d-inline-flex align-items-center justify-content-center align-self-center">
                                    <span>Read More</span>
                                    <i class="bi bi-arrow-right"></i>
                                </a>
                            </div>
                        </div>
                    </div>

                </div>
            </div>

        </section><!-- /About Section -->

        <!-- Comments Section -->
        <section id="comments" class="testimonials section">

            <!-- Section Title -->
            <div class="container section-title" data-aos="fade-up">
                <h2>Comments</h2>
            </div><!-- End Section Title -->

            <div class="container" data-aos="fade-up" data-aos-delay="100">

                <div class="swiper init-swiper" data-speed="600" data-delay="5000"
                    data-breakpoints="{ &quot;320&quot;: { &quot;slidesPerView&quot;: 1, &quot;spaceBetween&quot;: 40 }, &quot;1200&quot;: { &quot;slidesPerView&quot;: 3, &quot;spaceBetween&quot;: 40 } }">
                    <script type="application/json" class="swiper-config">
            {
              "loop": true,
              "speed": 600,
              "autoplay": {
                "delay": 5000
              },
              "slidesPerView": "auto",
              "pagination": {
                "el": ".swiper-pagination",
                "type": "bullets",
                "clickable": true
              },
              "breakpoints": {
                "320": {
                  "slidesPerView": 1,
                  "spaceBetween": 40
                },
                "1200": {
                  "slidesPerView": 3,
                  "spaceBetween": 20
                }
              }
            }
          </script>
                    <div class="swiper-wrapper">

                        <div class="swiper-slide">
                            <div class="testimonial-item" "="">
            <p>
              <i class=" bi bi-quote quote-icon-left"></i>
                <span>" I love how easy it is to navigate this website. The information is well-organized and easy to
                                understand, even for someone who isn't very tech-savvy."</span>
                                <i class="bi bi-quote quote-icon-right"></i>
                                </p>
                                <img src="assets/img/testimonials/testimonials-1.jpg" class="testimonial-img"
                                    alt="">
                                <h3>Saul Goodman</h3>
                                <h4>Ceo &amp; Founder</h4>
                            </div>
                        </div><!-- End testimonial item -->

                        <div class="swiper-slide">
                            <div class="testimonial-item">
                                <p>
                                    <i class="bi bi-quote quote-icon-left"></i>
                                    <span>"The website is full of helpful resources, from articles and videos to quizzes
                                        and interactive tools. It's a great way to learn about cybersecurity in a fun
                                        and engaging way."</span>
                                    <i class="bi bi-quote quote-icon-right"></i>
                                </p>
                                <img src="assets/img/testimonials/testimonials-2.jpg" class="testimonial-img"
                                    alt="">
                                <h3>Sara Wilsson</h3>
                                <h4>Designer</h4>
                            </div>
                        </div><!-- End testimonial item -->

                        <div class="swiper-slide">
                            <div class="testimonial-item">
                                <p>
                                    <i class="bi bi-quote quote-icon-left"></i>
                                    <span>"I appreciate the variety of topics covered on this website. It's not just
                                        about protecting your personal information, but also about staying safe online
                                        in general."
                                    </span>
                                    <i class="bi bi-quote quote-icon-right"></i>
                                </p>
                                <img src="assets/img/testimonials/testimonials-3.jpg" class="testimonial-img"
                                    alt="">
                                <h3>Jena Karlis</h3>
                                <h4>Store Owner</h4>
                            </div>
                        </div><!-- End testimonial item -->

                        <div class="swiper-slide">
                            <div class="testimonial-item">
                                <p>
                                    <i class="bi bi-quote quote-icon-left"></i>
                                    <span>"The website is always up-to-date with the latest cybersecurity threats and
                                        trends. It's a valuable resource for staying informed and protected."</span>
                                    <i class="bi bi-quote quote-icon-right"></i>
                                </p>
                                <img src="assets/img/testimonials/testimonials-4.jpg" class="testimonial-img"
                                    alt="">
                                <h3>Matt Brandon</h3>
                                <h4>Freelancer</h4>
                            </div>
                        </div><!-- End testimonial item -->

                        <div class="swiper-slide">
                            <div class="testimonial-item">
                                <p>
                                    <i class="bi bi-quote quote-icon-left"></i>
                                    <span>"I've learned so much from this website. It's helped me to become more aware
                                        of the risks and take steps to protect myself and my loved ones online."</span>
                                    <i class="bi bi-quote quote-icon-right"></i>
                                </p>
                                <img src="assets/img/testimonials/testimonials-5.jpg" class="testimonial-img"
                                    alt="">
                                <h3>John Larson</h3>
                                <h4>Entrepreneur</h4>
                            </div>
                        </div><!-- End testimonial item -->

                    </div>
                    <div class="swiper-pagination"></div>
                </div>

            </div>

        </section>
        <!-- /Comments Section -->


        <!-- Faq Section -->
        <section id="faq" class="faq section light-background">

            <!-- Section Title -->
            <div class="container section-title" data-aos="fade-up">
                <h2>Frequently Asked Questions</h2>
            </div><!-- End Section Title -->

            <div class="container">

                <div class="row justify-content-center">

                    <div class="col-lg-8">

                        <div class="faq-container">

                            <div class="faq-item faq-active" data-aos="fade-up" data-aos-delay="200">
                                <i class="faq-icon bi bi-question-circle"></i>
                                <h3> How can I protect my personal information online?</h3>
                                <div class="faq-content">
                                    <p>To protect your personal information online, use strong passwords, avoid clicking
                                        on suspicious links, be cautious about sharing personal details, and keep your
                                        software up-to-date.</p>
                                </div>
                                <i class="faq-toggle bi bi-chevron-right"></i>
                            </div><!-- End Faq item-->

                            <div class="faq-item" data-aos="fade-up" data-aos-delay="300">
                                <i class="faq-icon bi bi-question-circle"></i>
                                <h3>What is a phishing scam, and how can I avoid it?</h3>
                                <div class="faq-content">
                                    <p>A phishing scam is an attempt to trick you into providing personal information by
                                        posing as a legitimate source. To avoid phishing scams, be wary of unsolicited
                                        emails, never click on links in suspicious emails, and verify the sender's
                                        identity before replying.</p>
                                </div>
                                <i class="faq-toggle bi bi-chevron-right"></i>
                            </div><!-- End Faq item-->

                            <div class="faq-item" data-aos="fade-up" data-aos-delay="400">
                                <i class="faq-icon bi bi-question-circle"></i>
                                <h3>What is the best way to protect my devices from malware?</h3>
                                <div class="faq-content">
                                    <p>To protect your devices from malware, use reputable antivirus software, be
                                        cautious about downloading files from unknown sources, avoid clicking on
                                        suspicious links, and keep your operating system and software up-to-date.</p>
                                </div>
                                <i class="faq-toggle bi bi-chevron-right"></i>
                            </div><!-- End Faq item-->

                            <div class="faq-item" data-aos="fade-up" data-aos-delay="500">
                                <i class="faq-icon bi bi-question-circle"></i>
                                <h3>How can I protect my children from online dangers?</h3>
                                <div class="faq-content">
                                    <p>To protect your children from online dangers, talk to them about online safety,
                                        set parental controls on their devices, monitor their online activity, and teach
                                        them to be cautious about sharing personal information.</p>
                                </div>
                                <i class="faq-toggle bi bi-chevron-right"></i>
                            </div><!-- End Faq item-->

                            <div class="faq-item" data-aos="fade-up" data-aos-delay="600">
                                <i class="faq-icon bi bi-question-circle"></i>
                                <h3>What should I do if I think I've been a victim of a cybercrime?</h3>
                                <div class="faq-content">
                                    <p>If you think you've been a victim of a cybercrime, report it to the relevant
                                        authorities, change your passwords, and take steps to protect your personal
                                        information. You may also want to contact your bank or credit card company to
                                        report any unauthorized activity.</p>
                                </div>
                                <i class="faq-toggle bi bi-chevron-right"></i>
                            </div><!-- End Faq item-->

                        </div>

                    </div>

                </div>

            </div>

        </section><!-- /Faq Section -->

        <!-- Contact Section -->
        <section id="contact" class="contact section">

            <!-- Section Title -->
            <div class="container section-title" data-aos="fade-up">
                <h2>Contact Us</h2>
            </div><!-- End Section Title -->

            <div class="container" data-aos="fade-up" data-aos-delay="100">

                <div class="row gy-4">

                    <div class="col-12">

                        <div class="row gy-4">
                            <div class="col-md-6">
                                <div class="info-item" data-aos="fade" data-aos-delay="200">
                                    <i class="bi bi-geo-alt"></i>
                                    <h3>Address</h3>
                                    <p>47/1, Jawatte Road,</p>
                                    <p>Colombo 05,</p>
                                    <p>Sri Lanka</p>
                                </div>
                            </div><!-- End Info Item -->

                            <div class="col-md-6">
                                <div class="info-item" data-aos="fade" data-aos-delay="300">
                                    <i class="bi bi-telephone"></i>
                                    <h3>Call Us</h3>
                                    <p>+9477-073-5604</p><br><br>
                                </div>
                            </div><!-- End Info Item -->

                            <div class="col-md-6">
                                <div class="info-item" data-aos="fade" data-aos-delay="400">
                                    <i class="bi bi-envelope"></i>
                                    <h3>Email Us</h3>
                                    <p>info@perfectustec.com</p><br>
                                </div>
                            </div><!-- End Info Item -->

                            <div class="col-md-6">
                                <div class="info-item" data-aos="fade" data-aos-delay="500">
                                    <i class="bi bi-clock"></i>
                                    <h3>Open Hours</h3>
                                    <p>Monday - Friday</p>
                                    <p>9:00AM - 05:00PM</p>
                                </div>
                            </div><!-- End Info Item -->

                        </div>

                    </div>

                </div>

            </div>

        </section><!-- /Contact Section -->

    </main>

    @include('layouts.home-footer')

    @include('layouts.modals')

    <!-- Scroll Top -->
    <a href="#" id="scroll-top" class="scroll-top d-flex align-items-center justify-content-center"><i
            class="bi bi-arrow-up-short"></i></a>

    <!-- Preloader -->
    <div id="preloader"></div>

    <!-- Vendor JS Files -->
    <script src="{{ asset('assets/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('assets/vendor/php-email-form/validate.js') }}"></script>
    <script src="{{ asset('assets/vendor/aos/aos.js') }}"></script>
    <script src="{{ asset('assets/vendor/glightbox/js/glightbox.min.js') }}"></script>
    <script src="{{ asset('assets/vendor/imagesloaded/imagesloaded.pkgd.min.js') }}"></script>
    <script src="{{ asset('assets/vendor/isotope-layout/isotope.pkgd.min.js') }}"></script>
    <script src="{{ asset('assets/vendor/swiper/swiper-bundle.min.js') }}"></script>

    <!-- Main JS File -->
    <script src="{{ asset('assets/js/main.js') }}"></script>

</body>

</html>
