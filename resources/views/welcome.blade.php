<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="author" content="website author name">
    <meta name="description" content="website description">
    <meta name="keywords" content="website keyword">
    <title>DevRiazul</title>
    <!-- Favicon -->
    <link rel="shortcut icon" type="image/png" href="{{ asset('assets/images/globe.png') }}">
    <!-- Fontawesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta2/css/all.min.css">
    <!-- Icons -->
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/icons/icons.css') }}">
    <!-- Css Files -->
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/bootstrap-grid.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/default.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/spacing.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/jquery.barfiller.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/jquery.rprogessbar.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/swiper-bundle.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/style.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/responsive.css') }}">
</head>

<body onload="load()">

    <!--
		====================
		Start Preloader
		====================
		-->

    <div class="preloader">
        <img src="assets/images/preloader.gif" alt="preloader-img">
    </div>

    <!--
		====================
		End Preloader
		====================
		-->

    <!--
		========================================
		Start Header Section
		========================================
		-->
    <header class="header background-color-f8 background-color-2" id="header">
        <nav class="py-20 nav">
            <div class="container">
                <div class="nav-wrapper d-flex justify-content-between uppercase positoion-relative align-items-center position-relative">
                    <!-- LOGO -->
                    <div class="nav-logo">
                        <a href="#" class="font-weight-800 font-size-28 text-uppercase text-color-3 position-relative">DevRiazul</a>
                    </div>
                    <!-- MAIN MENU -->
                    <div class="nav-menu">
                        <ul>
                            <li class="d-inline-block"><a href="#header" class="hvr-underline-from-center font-weight-500 font-size-16 capitalize  text-color-3">Home</a></li>
                            <li class="d-inline-block"><a href="#about-us" class="hvr-underline-from-center font-weight-500 font-size-16 capitalize  text-color-3">About</a></li>
                            <li class="d-inline-block"><a href="#skill" class="hvr-underline-from-center font-weight-500 font-size-16 capitalize  text-color-3">Skill</a></li>
                            <li class="d-inline-block"><a href="#service" class="hvr-underline-from-center font-weight-500 font-size-16 capitalize  text-color-3">Service</a></li>
                            <li class="d-inline-block"><a href="#portfolio" class="hvr-underline-from-center font-weight-500 font-size-16 capitalize  text-color-3">Portfolio</a></li>
                            <li class="d-inline-block"><a href="#testimonial" class="hvr-underline-from-center font-weight-500 font-size-16 capitalize text-color-3">Testimonial</a></li>
                            <li class="d-inline-block"><a href="#contact" class="hvr-underline-from-center font-weight-500 font-size-16 capitalize  text-color-3">Contact</a></li>
                        </ul>
                    </div>
                    <!-- MOBILE MENU -->
                    <div class="mobile-menu">
                        <div class="hamburger-menu">
                            <div class="line line-1"></div>
                            <div class="line line-2"></div>
                            <div class="line line-3"></div>
                        </div>
                        <div class="nav-list">
                            <ul>
                                <li><a href="#header" onclick="myFunction()" class="hvr-underline-from-center">Home</a></li>
                                <li><a href="#about-us" onclick="myFunction()" class="hvr-underline-from-center">About</a></li>
                                <li><a href="#skill" onclick="myFunction()" class="hvr-underline-from-center">Skill</a></li>
                                <li><a href="#service" onclick="myFunction()" class="hvr-underline-from-center">Service</a></li>
                                <li><a href="#portfolio" onclick="myFunction()" class="hvr-underline-from-center">Portfolio</a></li>
                                <li><a href="#testimonial" onclick="myFunction()" class="hvr-underline-from-center">Testimonial</a></li>
                                <li><a href="#contact" onclick="myFunction()" class="hvr-underline-from-center">Contact</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </nav>
        <!-- Banner -->
        <div class="banner">
            <div class="container">
                <div class="row">
                    <div class="col-md-7 align-self-center">
                        <div class="banner-desc text-center text-md-start">
                            <span class="font-weight-400 font-size-18 text-color-3">Hello I'm</span>
                            <h1 class="font-size-60 font-weight-700 text-color-3 uppercase">Md Riazul Islam</h1>
                            <span class="profession font-size-20 text-color-4 font-weight-600 me-05">I'm a</span><span class="font-size-20 text-color-4 font-weight-600 element"></span>
                            <p class="font-size-16 mb-50 font-weight-400 text-color-3">My work is always simple, fresh, and pixel-perfect. I work flexibly with clients to fulfill their website needs. This enables my clients to improve their business. </p>
                            <a href="#portfolio" class="uppercase primary-btn font-weight-600 font-size-16 text-color-1 background-color-4 hvr-shutter-in-horizontal">Portfolio</a>
                        </div>
                    </div>
                    <div class="col-md-5">
                        <div class="banner-img">
                            <img src="assets/images/banner-img.png" class="img-fluid w-100" alt="banner-img">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <!--
		========================================
		End Header Section
		========================================
		-->

    <main>

        <!--
			========================================
			Start About us Section
			========================================
			-->
        <section class="about py-100 pt-md-60 pb-md-70 background-color-1" id="about-us">
            <div class="container">
                <div class="row about-row">
                    <div class="col-md-6 col-lg-5 d-none d-md-block align-self-center align-self-xl-start">
                        <div class="about-img position-relative">
                            <div class="top-left background-color-4"></div>
                            <div class="left-top background-color-4"></div>
                            <div class="bottom-right background-color-4"></div>
                            <div class="right-bottom background-color-4"></div>
                            <img src="assets/images/mourshad.jpg" alt="about-img" class="img-fluid w-100">
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-7 align-self-center">
                        <div class="about-desc text-center text-md-start">
                            <span class="font-size-18 font-weight-500 text-color-4">My Intro</span>
                            <h2 class="font-size-35 font-weight-600 text-color-3">About Me</h2>
                            <p class="font-weight-400 text-color-3">I'm a freelancer front-end developer with 2 years of experience. My work is very passionate and dedicated to me. I have acquired enough skills for you to accomplish your work perfectly. I really enjoy my work to learning something
                                new.
                            </p>
                            <div class="d-flex justify-content-between flex-column flex-xl-row mt-25">
                                <div class="name-phone-email">
                                    <ul>
                                        <li class="d-inline-block"><i class="fas fa-user text-color-4"></i></li>
                                        <li class="d-inline-block font-weight-600 font-size-16 text-color-3">Name</li>
                                        <li class="d-inline-block">:</li>
                                        <li class="d-inline-block font-weight-400 font-size-16 text-color-3">Md Riazul Islam</li>
                                    </ul>
                                    <ul>
                                        <li class="d-inline-block"><i class="fas fa-phone text-color-4"></i></li>
                                        <li class="d-inline-block font-weight-600 font-size-16 text-color-3">Phone</li>
                                        <li class="d-inline-block">:</li>
                                        <li class="d-inline-block font-weight-400 font-size-16 text-color-3"> +8801722754100</li>
                                    </ul>
                                    <ul>
                                        <li class="d-inline-block"><i class="far fa-envelope text-color-4"></i></li>
                                        <li class="d-inline-block font-weight-600 font-size-16 text-color-3">Email</li>
                                        <li class="d-inline-block">:</li>
                                        <li class="d-inline-block font-weight-400 font-size-16 text-color-3">engr.riazul@gmail.com</li>
                                    </ul>
                                </div>
                                <div class="nationality-address-freeelance d-none d-lg-block">
                                    <ul>
                                        <li class="d-inline-block"><i class="fas fa-flag text-color-4"></i></li>
                                        <li class="d-inline-block font-weight-600 font-size-16 text-color-3">Nationality</li>
                                        <li class="d-inline-block">:</li>
                                        <li class="d-inline-block font-weight-400 font-size-16 text-color-3">Bangladeshi</li>
                                    </ul>
                                    <ul>
                                        <li class="d-inline-block"><i class="fas fa-location-arrow text-color-4"></i></li>
                                        <li class="d-inline-block font-weight-600 font-size-16 text-color-3">Address</li>
                                        <li class="d-inline-block">:</li>
                                        <li class="d-inline-block font-weight-400 font-size-16 text-color-3">Dhaka, Bnagladesh</li>
                                    </ul>
                                    <ul>
                                        <li class="d-inline-block"><i class="fas fa-handshake text-color-4"></i></li>
                                        <li class="d-inline-block font-weight-600 font-size-16 text-color-3"> Freelance</li>
                                        <li class="d-inline-block">:</li>
                                        <li class="d-inline-block font-weight-400 font-size-16 text-color-3">Available (6pm to 12am)</li>
                                    </ul>
                                </div>
                            </div>
                            <a href="{{ asset('assets/cv/mourshad.pdf') }}" target="_blank" class="uppercase font-weight-600 font-size-16 text-color-1 background-color-4 primary-btn hvr-shutter-in-horizontal">Download Cv</a>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-5 align-self-center align-self-xl-start d-md-none">
                        <div class="about-img position-relative">
                            <div class="top-left background-color-4"></div>
                            <div class="left-top background-color-4"></div>
                            <div class="bottom-right background-color-4"></div>
                            <div class="right-bottom background-color-4"></div>
                            <img src="assets/images/mourshad.jpg" alt="about-img" class="img-fluid w-100">
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--
			========================================
			End About us Section
			========================================
			-->

        <!--
			========================================
			Start Skill Section
			========================================
			-->
        <section class="skill pt-90 pb-75 background-color-2 pt-md-60 pb-md-45" id="skill">
            <div class="container">
                <div class="section-title text-center skill-title">
                    <h2 class="position-relative">My Skill</h2>
                    <p class="mx-0">With 2 years of experience, I have a thorough understanding of HTML, CSS, JAVASCRIPT, JQUERY, BOOTSTRAP, and SASS.Having skills in web design, I can design any type of website.</p>
                </div>
                <div class="row mt-55 skill-row">
                    <div class="col-md-4">
                        <div class="single-progressbar">
                            <h4 class="title text-color-3">HTML, CSS, Bootstrap</h4>
                            <div class="html"></div>
                        </div>
                        <div class="single-progressbar">
                            <h4 class="title text-color-3">JQuery, Tailwind CSS</h4>
                            <div class="css"></div>
                        </div>
                        <div class="single-progressbar">
                            <h4 class="title text-color-3">Sass</h4>
                            <div class="javascript"></div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="single-progressbar">
                            <h4 class="title text-color-3">Wordpress</h4>
                            <div class="jquery"></div>
                        </div>
                        <div class="single-progressbar">
                            <h4 class="title text-color-3">Git, GitHub</h4>
                            <div class="bootstrap"></div>
                        </div>
                        <div class="single-progressbar">
                            <h4 class="title text-color-3">Firebase</h4>
                            <div class="sass"></div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="single-progressbar">
                            <h4 class="title text-color-3">React</h4>
                            <div class="sass"></div>
                        </div>
                        <div class="single-progressbar">
                            <h4 class="title text-color-3">Php, Laravel</h4>
                            <div class="bootstrap"></div>
                        </div>
                        <div class="single-progressbar">
                            <h4 class="title text-color-3">Mongo DB, MySQL</h4>
                            <div class="jquery"></div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--
			========================================
			End Skill Section
			========================================
			-->

        <!--
			========================================
			Start Service Section
			========================================
			-->
        <section class="service pt-90 pb-100 background-color-1 pt-md-60 pb-md-40" id="service">
            <div class="container">
                <div class="section-title text-center service-title">
                    <h2 class="position-relative">My Services</h2>
                    <p class="mx-0">I provide the following services with quality guaranteed. Client satisfaction is my first priority. If you work with me you will get what you expect.</p>
                </div>
                <div class="row mt-60 service-row">
                    <div class="col-xl-4 col-lg-6">
                        <div class="service-box text-center background-color-2">
                            <span class="text-center text-color-4 circle font-size-40"><i class="fas fa-laptop-code font-size"></i></span>
                            <h3 class="font-size-22 text-color-3 font-weight-600">Psd to Html</h3>
                            <p class="font-size-16 text-color-3 font-weight-400">Conversion from PSD/XD/Figma to Pixel Perfect Design,Device Responsive, jQuery Plugin Effects,Clean Hand-Written Code with W3C Validation, Cross-Browser Compatibility.</p>
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-6">
                        <div class="service-box text-center background-color-2">
                            <span class="text-center text-color-4 circle font-size-40"><i class="fas fa-envelope font-size"></i></span>
                            <h3 class="font-size-22 text-color-3 font-weight-600">Email Template</h3>
                            <p class="font-size-16 text-color-3 font-weight-400">I will design an editable email template, cross-browser supportable with 100% responsive design. I will also design an eye-catching email template for you. </p>
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-6 mx-0">
                        <div class="service-box text-center background-color-2">
                            <span class="text-center text-color-4 circle font-size-40"><i class="fas fa-bug font-size"></i></span>
                            <h3 class="font-size-22 text-color-3 font-weight-600">Bug Fixing</h3>
                            <p class="font-size-16 text-color-3 font-weight-400">I fix website issues and bugs. It is common for every website to have problems and bugs. I am capable of fixing any website issue. </p>
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-6">
                        <div class="service-box text-center background-color-2">
                            <span class="text-center text-color-4 circle font-size-40"><i class="fas fa-laptop-code font-size"></i></span>
                            <h3 class="font-size-22 text-color-3 font-weight-600">Psd to Html</h3>
                            <p class="font-size-16 text-color-3 font-weight-400">Conversion from PSD/XD/Figma to Pixel Perfect Design,Device Responsive, jQuery Plugin Effects,Clean Hand-Written Code with W3C Validation, Cross-Browser Compatibility.</p>
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-6">
                        <div class="service-box text-center background-color-2">
                            <span class="text-center text-color-4 circle font-size-40"><i class="fas fa-envelope font-size"></i></span>
                            <h3 class="font-size-22 text-color-3 font-weight-600">Email Template</h3>
                            <p class="font-size-16 text-color-3 font-weight-400">I will design an editable email template, cross-browser supportable with 100% responsive design. I will also design an eye-catching email template for you. </p>
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-6 mx-0">
                        <div class="service-box text-center background-color-2">
                            <span class="text-center text-color-4 circle font-size-40"><i class="fas fa-bug font-size"></i></span>
                            <h3 class="font-size-22 text-color-3 font-weight-600">Bug Fixing</h3>
                            <p class="font-size-16 text-color-3 font-weight-400">I fix website issues and bugs. It is common for every website to have problems and bugs. I am capable of fixing any website issue. </p>
                        </div>
                    </div>
                </div>
            </div>

        </section>
        <!--
			========================================
			End Service Section
			========================================
			-->

        <!--
			========================================
			Start Portfolio Section
			========================================
			-->
        <section class="portfolio background-color-2 pt-90 pb-70 pt-md-60 pb-md-40" id="portfolio">
            <div class="container">
                <div class="section-title text-center portfolio-title">
                    <h2 class="position-relative">My Portfolio</h2>
                    <p class="mx-0">Here are some of my latest works. I have worked with several clients both locally and internationally. My latest projects will give you an idea of my work quality.</p>
                </div>
                <div class="row mt-60 portfolio-row">
                    <div class="col-lg-4 col-md-6">
                        <div class="portfolio-item">
                            <a href="https://mdmourshad.github.io/Medis/" target="_blank" class="portfolio-img position-relative">
                                <img src="assets/images/medis.png" alt="portfolio-img" class="img-fluid w-100 portfolio-img-1">
                            </a>
                            <div class="portfolio-desc background-color-1 text-center transition-3s-ease">
                                <h3 class="font-size-22 text-color-3 font-weight-600 transition-3s-ease">Psd to Html</h3>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <div class="portfolio-item">
                            <a href="https://mdmourshad.github.io/Environment/" target="_blank" class="portfolio-img position-relative">
                                <img src="assets/images/environment.png" alt="portfolio-img" class="img-fluid w-100 portfolio-img-1">
                            </a>
                            <div class="portfolio-desc background-color-1 text-center transition-3s-ease">
                                <h3 class="font-size-22 text-color-3 font-weight-600 transition-3s-ease">Psd to Html</h3>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <div class="portfolio-item">
                            <a href="https://mdmourshad.github.io/MotiveZone/" target="_blank" class="portfolio-img position-relative">
                                <img src="assets/images/motive-zone.png" alt="portfolio-img" class="img-fluid w-100 portfolio-img-1">
                            </a>
                            <div class="portfolio-desc background-color-1 text-center transition-3s-ease">
                                <h3 class="font-size-22 text-color-3 font-weight-600 transition-3s-ease">Xd to Html</h3>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <div class="portfolio-item">
                            <a href="https://mdmourshad.github.io/Applab/" target="_blank" class="portfolio-img position-relative">
                                <img src="assets/images/applab.png" alt="portfolio-img" class="img-fluid w-100 portfolio-img-1">
                            </a>
                            <div class="portfolio-desc background-color-1 text-center transition-3s-ease">
                                <h3 class="font-size-22 text-color-3 font-weight-600 transition-3s-ease">Psd to Html</h3>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <div class="portfolio-item">
                            <a href="https://mdmourshad.github.io/Architect/" target="_blank" class="portfolio-img position-relative">
                                <img src="assets/images/architect.png" alt="portfolio-img" class="img-fluid w-100 portfolio-img-1">
                            </a>
                            <div class="portfolio-desc background-color-1 text-center transition-3s-ease">
                                <h3 class="font-size-22 text-color-3 font-weight-600 transition-3s-ease">Psd to Html</h3>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <div class="portfolio-item">
                            <a href="https://mdmourshad.github.io/AXIT/" target="_blank" class="portfolio-img position-relative">
                                <img src="assets/images/axit.png" alt="portfolio-img" class="img-fluid w-100 portfolio-img-1">
                            </a>
                            <div class="portfolio-desc background-color-1 text-center transition-3s-ease">
                                <h3 class="font-size-22 text-color-3 font-weight-600 transition-3s-ease">Psd to Html</h3>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <div class="portfolio-item">
                            <a href="https://mdmourshad.github.io/Lms-Edu/" target="_blank" class="portfolio-img position-relative">
                                <img src="assets/images/lms-edu.png" alt="portfolio-img" class="img-fluid w-100 portfolio-img-1">
                            </a>
                            <div class="portfolio-desc background-color-1 text-center transition-3s-ease">
                                <h3 class="font-size-22 text-color-3 font-weight-600 transition-3s-ease">Psd to Html</h3>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <div class="portfolio-item">
                            <a href="https://mdmourshad.github.io/Slicing-Travel/" target="_blank" class="portfolio-img position-relative">
                                <img src="assets/images/travel-slicing.png" alt="portfolio-img" class="img-fluid w-100 portfolio-img-1">
                            </a>
                            <div class="portfolio-desc background-color-1 text-center transition-3s-ease">
                                <h3 class="font-size-22 text-color-3 font-weight-600 transition-3s-ease">Figma to Html</h3>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 mx-0">
                        <div class="portfolio-item">
                            <a href="https://mdmourshad.github.io/BeStrong/" target="_blank" class="portfolio-img position-relative">
                                <img src="assets/images/bestrong.png" alt="portfolio-img" class="img-fluid w-100 portfolio-img-1">
                            </a>
                            <div class="portfolio-desc background-color-1 text-center transition-3s-ease">
                                <h3 class="font-size-22 text-color-3 font-weight-600 transition-3s-ease">Xd to Html</h3>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--
			========================================
			End Portfolio Section
			========================================
			-->


        <!--
			========================================
			Start Testimonial Section
			========================================
			-->
        <section class="testimonial pt-90 pb-85 background-color-1 pt-md-60 pb-md-70" id="testimonial">
            <div class="container">
                <div class="section-title text-center testimonial-title">
                    <h2 class="position-relative">Happy Clients</h2>
                    <p class="mx-0">To achieve 100% customer satisfaction, I make sure my services are of the highest quality. Receiving their feedback is always motivating. </p>
                </div>
                <!-- Swiper -->
                <div class="swiper mt-60">
                    <div class="swiper-wrapper pb-85">
                        <div class="swiper-slide">
                            <div class="testimonial-desc text-center text-sm-start ps-40 pb-40 ps-45 pe-45 background-color-2">
                                <div class="testimonial-desc-top">
                                    <h3 class="font-weight-600 font-size-20 text-color-3">Seo Expert</h3>
                                    <p class="font-weight-400 font-size-14 text-color-3 mb-10">I think there are many sectors in which Mourshad can do better.Hope he will be do good in future...But i am happy to see his dedication to give best to his customer.</p>
                                </div>
                                <div class="img-designation d-flex align-items-center justify-content-center justify-content-sm-start">
                                    <img src="assets/images/client-1.png" alt="client">
                                    <div class="designation">
                                        <span class="font-weight-600 font-size-20 text-color-3">Kaium</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="testimonial-desc text-center text-sm-start ps-40 pb-40 ps-45 pe-45 background-color-2">
                                <div class="testimonial-desc-top">
                                    <h3 class="font-weight-600 font-size-20 text-color-3">Manager of Al Imam overseas</h3>
                                    <p class="font-weight-400 font-size-14 text-color-3 mb-10">I noticed that he put a lot of attention to detail. The project was challenging because of its detailed requirements. Mourshad kept working with me until I was 100% satisfied with everything and did a great job</p>
                                </div>
                                <div class="img-designation d-flex align-items-center justify-content-center justify-content-sm-start">
                                    <img src="assets/images/client-2.png" alt="client">
                                    <div class="designation">
                                        <span class="font-weight-600 font-size-20 text-color-3">Mohiuddin</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="testimonial-desc text-center text-sm-start ps-40 pb-40 ps-45 pe-45 background-color-2">
                                <div class="testimonial-desc-top">
                                    <h3 class="font-weight-600 font-size-20 text-color-3">Graphic Designer</h3>
                                    <p class="font-weight-400 font-size-14 text-color-3 mb-10">Mourshad is amazing person to work with him.he knows how to please cutomer by providing wow service delivery. I am pleased to work with him..</p>
                                </div>
                                <div class="img-designation d-flex align-items-center justify-content-center justify-content-sm-start">
                                    <img src="assets/images/client-3.png" alt="client">
                                    <div class="designation">
                                        <span class="font-weight-600 font-size-20 text-color-3 ">Sanjidul Islam</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Add Pagination -->
                    <div class="swiper-pagination"></div>
                </div>
            </div>
        </section>
        <!--
			========================================
			End Testimonial Section
			========================================
			-->

        <!--
			========================================
			Start Pricing Section
			========================================
			-->
        <section class="pricing pt-90 pb-70 background-color-2 price-title pt-md-60 pb-md-40">
            <div class="container">
                <div class="section-title text-center">
                    <h2 class="position-relative">Price Plans</h2>
                    <p class="mx-0">Below is a description of my all-inclusive service packages. The bundles you choose will have quality services inshallah. 100% money-back guaranteed until you are not satisfied. </p>
                </div>
                <div class="row mt-60 price-row">
                    <div class="col-lg-4 col-md-6">
                        <div class="price-box background-color-1 pb-25">
                            <div class="price-top pt-20 ps-30">
                                <h3 class="font-size-30 font-weight-500 text-color-3">Basic</h3>
                            </div>
                            <div class="price-middle d-flex ps-30 pt-35">
                                <span class="font-weight-300 font-size-18 text-color-3">$</span>
                                <span class="font-size-80 font-weight-700 text-color-4">35</span>
                            </div>
                            <ul class="package-desc ps-30">
                                <li class="font-size-16 font-weight-300 text-color-3 pb-10"><i class="fas fa-check text-color-4 me-10"></i><span>1 Page</span></li>
                                <li class="font-size-16 font-weight-300 text-color-3 pb-10 pt-05"><i class="fas fa-check text-color-4 me-10"></i><span>Responsive Design</span></li>
                                <li class="font-size-16 font-weight-300 text-color-3 pb-10 pt-05"><i class="fas fa-check text-color-4 me-10"></i><span>Slider/Scroller</span></li>
                                <li class="font-size-16 font-weight-300 text-color-3 pb-10 pt-05"><i class="fas fa-check text-color-4 me-10"></i><span>Server Upload</span></li>
                                <li class="font-size-16 font-weight-300 text-color-3 pt-05"><i class="fas fa-check text-color-4 me-10"></i><span>Browser Compatibility</span></li>
                            </ul>
                            <div class="price-bottom text-center mt-35">
                                <a href="#" class="font-size-16 font-weight-600 text-color-4">Get Started</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <div class="price-box background-color-1 pb-25">
                            <div class="price-top pt-20 ps-30">
                                <h3 class="font-size-30 font-weight-500 text-color-3">Premium</h3>
                            </div>
                            <div class="price-middle d-flex ps-30 pt-35">
                                <span class="font-weight-300 font-size-18 text-color-3">$</span>
                                <span class="font-size-80 font-weight-700 text-color-4">70</span>
                            </div>
                            <ul class="package-desc ps-30">
                                <li class="font-size-16 font-weight-300 text-color-3 pb-10"><i class="fas fa-check text-color-4 me-10"></i><span>2 Page</span></li>
                                <li class="font-size-16 font-weight-300 text-color-3 pb-10 pt-05"><i class="fas fa-check text-color-4 me-10"></i><span>Responsive Design</span></li>
                                <li class="font-size-16 font-weight-300 text-color-3 pb-10 pt-05"><i class="fas fa-check text-color-4 me-10"></i><span>Slider/Scroller</span></li>
                                <li class="font-size-16 font-weight-300 text-color-3 pb-10 pt-05"><i class="fas fa-check text-color-4 me-10"></i><span>Server Upload</span></li>
                                <li class="font-size-16 font-weight-300 text-color-3 pt-05"><i class="fas fa-check text-color-4 me-10"></i><span>Browser Compatibility</span></li>
                            </ul>
                            <div class="price-bottom text-center mt-35">
                                <a href="#" class="font-size-16 font-weight-600 text-color-4">Get Started</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 mx-0">
                        <div class="price-box background-color-1 pb-25">
                            <div class="price-top pt-20 ps-30">
                                <h3 class="font-size-30 font-weight-500 text-color-3">Ultimate</h3>
                            </div>
                            <div class="price-middle d-flex ps-30 pt-35">
                                <span class="font-weight-300 font-size-18 text-color-3">$</span>
                                <span class="font-size-80 font-weight-700 text-color-4">160</span>
                            </div>
                            <ul class="package-desc ps-30">
                                <li class="font-size-16 font-weight-300 text-color-3 pb-10"><i class="fas fa-check text-color-4 me-10"></i><span>5 Page</span></li>
                                <li class="font-size-16 font-weight-300 text-color-3 pb-10 pt-05"><i class="fas fa-check text-color-4 me-10"></i><span>Responsive Design</span></li>
                                <li class="font-size-16 font-weight-300 text-color-3 pb-10 pt-05"><i class="fas fa-check text-color-4 me-10"></i><span>Slider/Scroller</span></li>
                                <li class="font-size-16 font-weight-300 text-color-3 pb-10 pt-05"><i class="fas fa-check text-color-4 me-10"></i><span>Server Upload</span></li>
                                <li class="font-size-16 font-weight-300 text-color-3 pt-05"><i class="fas fa-check text-color-4 me-10"></i><span>Browser Compatibility</span></li>
                            </ul>
                            <div class="price-bottom text-center mt-35">
                                <a href="#" class="font-size-16 font-weight-600 text-color-4">Get Started</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--
			========================================
			End Pricing Section
			========================================
			-->


        <!--
			========================================
			Start Contact Section
			========================================
			-->
        <section class="contact pt-85 pb-100 bg-dark contact-title pt-md-60 pb-md-70" id="contact">
            <div class="container">
                <div class="section-title text-center">
                    <h2 class="position-relative">Contact Me</h2>
                    <p class="mx-0">Do you have any projects or need any assistance with project-related please contact me via email, message, or social media. You can also hire me through the freelancing marketplace. </p>
                </div>
                <div class="row mt-60 contact-row ">
                    <div class="col-md-7">
                        <div class="form-wrapper  py-40 px-35">
                            <form class="form">
                                <input type="text" name="name" placeholder="Name" required>
                                <input type="email" name="email" placeholder="Email" required>
                                <input type="tel" name="phone" placeholder="Phone" required>
                                <textarea placeholder="Message" required></textarea>
                                <input type="submit" value="Submit">
                            </form>
                        </div>
                    </div>
                    <div class="col-md-5 align-self-center">
                        <div class="contact-title text-center text-lg-start">
                            <h2 class="font-size-34 font-weight-700 text-color-4">Let's discuss your project</h2>
                            <ul class="contact-adress">
                                <li class="mb-20"><a href="tel:8801722754100"><i class="fas fa-phone font-size-20 text-color-4 d-block d-lg-inline-block"></i><span class="ms-15 font-weight-400 font-size-18 text-color-3">+8801722754100</span></a></li>
                                <li class="	mb-20"><a href="mailto:engr.riazul@gmail.com"><i class="fas fa-envelope font-size-20 text-color-4"></i><span class="ms-15 font-weight-400 font-size-18 text-color-3">engr.riazul@gmail.com</span></a></li>
                                <li><i class="fas fa-map font-size-20 text-color-4"></i><span class="ms-15 font-weight-400 font-size-18 text-color-3">Mirpur, Dhaka, Bangladesh</span></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--
			========================================
			End Contact Section
			========================================
			-->

    </main>

    <!--
		========================================
		Start Footer Section
		========================================
		-->
    <footer class="background-color-3 pb-20 ">
        <div class="container footer-container">
            <div class="row footer-bottom-row pt-25">
                <div class="col-lg-6 col-md-7 text-start d-none d-md-block align-self-center">
                    <div class="copywright text-center text-md-satart">
                        <p class="font-weight-400 font-size-14 text-color-1">Md Riazul Islam © Copyright 2021. All Right Reserved.</p>
                    </div>
                </div>
                <div class="col-lg-6 col-md-4">
                    <ul class="footer-icon text-center text-md-end">
                        <li class="d-inline-block me-05"><a href="https://web.facebook.com/morshad.chy.71/" class="font-size-16 text-color-1 background-color-4 d-flex align-items-center justify-content-center" target="_blank"><i class="fab fa-facebook-f"></i></a></li>
                        <li class="d-inline-block me-05"><a href="https://twitter.com/MDMOURSHAD66" class="font-size-16 text-color-1 background-color-4 d-flex align-items-center justify-content-center" target="_blank"><i class="fab fa-twitter"></i></a></li>
                        <li class="d-inline-block me-05"><a href="https://www.instagram.com/mdmourshad66/" class="font-size-16 text-color-1 background-color-4 d-flex align-items-center justify-content-center" target="_blank"><i class="fab fa-instagram"></i></a></li>
                        <li class="d-inline-block me-05"><a href="https://www.linkedin.com/in/md-mourshad-alam-5808bb227" class="font-size-16 text-color-1 background-color-4 d-flex align-items-center justify-content-center" target="_blank"><i class="fab fa-linkedin-in"></i></a></li>
                        <li class="d-inline-block me-05"><a href="https://github.com/MDMOURSHAD" class="font-size-16 text-color-1 background-color-4 d-flex align-items-center justify-content-center" target="_blank"><i class="fab fa-github"></i></a></li>
                    </ul>
                </div>
                <div class="col-lg-6 col-md-7 text-start d-block d-md-none align-self-center">
                    <div class="copywright text-center text-md-satart">
                        <p class="font-weight-400 font-size-14 text-color-1">Md Riazul Islam © Copyright 2021. All Right Reserved.</p>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!--
		========================================
		End Footer Section
		========================================
		-->

    <!--
		====================
		Start Scroll to top
		====================
		-->

    <div>
        <a href="#" class="scroll-top hvr-bob"><span class="icon-arrow-up-solid"></span></a>
    </div>

    <!--
		====================
		End Scroll to top
		====================
		-->

    <!-- Js Files -->
    <script src="{{ asset('assets/js/jquery.min.js') }}"></script>
    <script src="https://cdn.jsdelivr.net/npm/typed.js@2.0.12"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/waypoints/4.0.1/jquery.waypoints.js"></script>
    <script src="{{ asset('assets/js/jQuery.rProgressbar.min.js') }}"></script>
    <script src="{{ asset('assets/js/active.js') }}"></script>
    <script src="{{ asset('assets/js/swiper-bundle.min.js') }}"></script>
    <script src="{{ asset('assets/js/main.js') }}"></script>
    <script>
        // MOBILE MENU //
        const menuIcon = document.querySelector('.hamburger-menu');
        const navlist = document.querySelector('.nav-list');

        menuIcon.addEventListener("click", () => {

            menuIcon.classList.toggle('change');
            navlist.classList.toggle('slide-menu');

        });

        function myFunction() {

            menuIcon.classList.remove('change');
            navlist.classList.remove('slide-menu');

        }
        // Testimonial Slider
        var swiper = new Swiper('.swiper', {
            autoplay: {
                delay: 3500,
                disableOnInteraction: false,
            },
            loop: true,
            speed: 1500,
            spaceBetween: 30,
            pagination: {
                el: '.swiper-pagination',
                clickable: true,
            },
            breakpoints: {
                // when window width is >= 992px
                992: {
                    slidesPerView: 2,
                    spaceBetween: 30
                }
            }
        });
    </script>
</body>

</html>
