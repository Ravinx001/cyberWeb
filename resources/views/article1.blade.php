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
                            <div
                                class="col-lg-6 order-2 order-lg-1 d-flex flex-column justify-content-center">
                                <p class="fst-italic">
                                    A Comprehensive Overview of the Enterprise Information Security Policy (EISP)
                                    The Enterprise Information Security Policy (EISP) serves as a foundational document
                                    for organizations to establish and maintain a robust security posture. It provides a
                                    comprehensive framework that outlines policies, procedures, and standards to protect
                                    sensitive information assets.<br><br>

                                    A well-structured EISP typically encompasses several key components:<br><br>

                                    Access Control Policy: This component focuses on managing user access to systems and
                                    data. It establishes rules for assigning permissions based on job roles, enforcing
                                    strong password requirements, implementing multi-factor authentication, and
                                    conducting regular access reviews.<br><br>

                                    Data Classification and Protection Policy: This policy defines how data should be
                                    classified based on its sensitivity and value. It outlines procedures for data
                                    retention, disposal, and encryption to ensure its confidentiality, integrity, and
                                    availability.<br><br>

                                    Incident Response Plan: A well-defined incident response plan outlines steps to be
                                    taken in the event of a security breach. It covers incident identification,
                                    notification, containment, eradication, recovery, and post-incident review.<br><br>

                                    Acceptable Use Policy (AUP): The AUP establishes guidelines for employee behavior
                                    when using company resources. It defines prohibited activities, outlines employee
                                    responsibilities for security, and communicates the consequences of violating the
                                    policy.<br><br>

                                    Vendor and Third-Party Management Policy: This policy addresses the management of
                                    relationships with external vendors and third parties. It outlines due diligence
                                    processes for selecting vendors, contractual requirements, and ongoing monitoring of
                                    vendor performance.<br><br>

                                    By implementing and enforcing these policies, organizations can significantly reduce
                                    their risk of security breaches and protect their valuable information assets. A
                                    comprehensive EISP is a critical component of a robust security program.<br><br>

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
