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

        <!-- Features Section -->
        <section id="walkthrough" class="features section">

            <div class="container">

                <div class="tab-content" data-aos="fade-up" data-aos-delay="200">

                    <div class="tab-pane fade active show" id="features-tab-1">
                        <div class="row">
                            <div class="col-lg-6 order-2 order-lg-1 d-flex flex-column justify-content-center">
                                <p class="fst-italic">
                                    Issue-Specific Security Policies (ISSPs)
                                    ISSPs are specialized policies that address particular security concerns within an
                                    organization. They complement the overarching Enterprise Information Security Policy
                                    (EISP) by providing more detailed guidelines for specific areas.<br><br>

                                    1. Social Engineering Prevention Policy<br><br>

                                    The Social Engineering Prevention Policy outlines measures to protect against social
                                    engineering attacks. It emphasizes employee awareness training, phishing
                                    simulations, clear reporting procedures, and guidelines for handling sensitive
                                    information. By educating employees and establishing effective reporting mechanisms,
                                    organizations can reduce the risk of falling victim to social engineering
                                    scams.<br><br>

                                    2. Mobile Device Security Policy<br><br>

                                    The Mobile Device Security Policy addresses the security of mobile devices used
                                    within the organization. It requires encryption of sensitive data, enables remote
                                    wipe capabilities, restricts app downloads to approved stores, and establishes
                                    guidelines for Bring Your Own Device (BYOD) devices. These measures help protect
                                    against data loss, unauthorized access, and malware.<br><br>

                                    3. Cloud Security Policy<br><br>

                                    The Cloud Security Policy outlines guidelines for using cloud services. It
                                    emphasizes the importance of careful evaluation of cloud service providers,
                                    implementing strong encryption measures, limiting access to sensitive data, and
                                    having incident response procedures in place. By following these guidelines,
                                    organizations can ensure the security of their cloud-based information.<br><br>

                                    4. Supply Chain Security Policy<br><br>

                                    The Supply Chain Security Policy addresses the security of third-party vendors and
                                    suppliers. It requires regular security assessments of vendors, includes strong data
                                    security clauses in contracts, and establishes procedures for incident notification.
                                    By managing vendor risks and ensuring compliance with security standards,
                                    organizations can protect their data and mitigate potential threats.<br><br>

                                    5. Insider Threat Policy<br><br>

                                    The Insider Threat Policy focuses on identifying and mitigating risks posed by
                                    employees. It includes background checks, monitoring of privileged user activities,
                                    the use of insider threat detection tools, and procedures for investigating
                                    suspicious behavior. By addressing insider threats, organizations can protect their
                                    sensitive information and prevent unauthorized access.<br><br>

                                    By implementing these ISSPs, organizations can address specific security concerns
                                    and strengthen their overall security posture.<br><br>

                                </p>
                            </div>
                            <div class="col-lg-6 order-1 order-lg-2 text-center">
                                <img src="assets/img/working-1.jpg" alt="" class="img-fluid">
                            </div>
                        </div>
                    </div><!-- End tab content item -->

                </div>

            </div>

        </section><!-- /Features Section -->


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
