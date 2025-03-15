@extends('layouts.base')
@section('content')
    <main>

        <section class="banner-five-area paralax__animation">
            <!-- Add dark overlay -->
            <div class="banner-overlay"
                 style="position: absolute; top: 0; left: 0; width: 100%; height: 100%; background: linear-gradient(to bottom, rgba(0, 0, 0, 0) 0%, rgba(0, 0, 0, 0.8) 100%); z-index: 1;"></div>

            <video class="banner-five__video parallaxScaleScroll" autoplay="" muted="" loop=""
                   style="transform: scale(1);">
                <source src="assets/images/video/banner-five-video.mp4" type="video/mp4">
            </video>

            <div class="banner-five__shape">
                <img src="assets/images/banner/banner-five-shape.png" alt="image">
            </div>
            <div class="banner-five__wrp " style="position: relative; z-index: 2;">
                <div class="banner-five__content">
                    <br>
                    <h5 class="title wow fadeInUp" data-wow-delay="200ms" data-wow-duration="1500ms">How We Work</h5>
                    <div class="info d-flex gap-3 align-items-center wow fadeInDown" data-wow-delay="400ms"
                         data-wow-duration="1500ms">
                        <!-- Existing SVG and content -->
                        <svg data-depth="0.01" width="50" height="50" viewBox="0 0 50 50" fill="none"
                             xmlns="http://www.w3.org/2000/svg">
                            <!-- ... existing SVG paths ... -->
                        </svg>
                        <div>
                            {{--                            <span class="text-white">Got Questions?</span>--}}
                            {{--                            <h4><a class="text-white" href="tel:00022220000">000 2222 0000</a></h4>--}}
                            <h3><a class="text-white">
                                    At Dillen & Company, we take a structured, research-driven approach
                                </a></h3>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section id="feature" class="feature-area pb-0 footer-eleven-area">
            <div class="feature__wrp">
                <div class="row g-0" style="margin-top: -30px; margin-bottom: -30px;">
                    <div class="col-sm-6 col-lg-2">
                        <div class="feature__item">
                            <div class="feature__content">

                            </div>
                        </div>
                    </div>

                    <div class="col-sm-6 col-lg-8">
                        <div class="feature__item">
                            <div class="feature__content">
                                <div style="display: flex; align-items: center;">

                                    <p style="margin-left: -20px; " class="color-light align-text-center">
                                        At Dillen & Company, we take a structured, research-driven approach to helping African institutional investors access secure, high-yield opportunities in global markets. Our process is built on rigorous due diligence, strategic partnerships, and a commitment to delivering long-term value.
                                        <br>

                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-lg-2">
                        <div class="feature__item">
                        </div>
                    </div>

                </div>
            </div>

        </section>

        <!-- Project area start here -->
        <section class="project-area pt-130">
            <div class="container">
                <div class="section-header__flex mb-50">
                    <div>
                        {{--                    <h6></h6>--}}
                        <h2 class="wow splt-txt" data-splitting="">HOW WE WORK
                        </h2>
                    </div>
                    <p class="wow fadeInUp" data-wow-delay="200ms" data-wow-duration="1500ms">
                        At Dillen & Company, we take a structured, research-driven approach to helping African
                        institutional investors access secure,
                        high-yield opportunities in global markets. Our process is built on rigorous due diligence,
                        strategic partnerships,
                        and a commitment to delivering long-term value.
                    </p>
                </div>
            </div>
            <div class="project__wrp">
                <div class="swiper project__slider">
                    <div class="swiper-wrapper">
                        <div class="swiper-slide" data-tab="tab-1">
                            <a href="page-project-details.html" class="project__item">
                                <div class="content">
                                    <span>01</span>
                                    <h4>Understanding Your <br> Investment Objectives</h4>
                                    <p class="text">
                                        We begin by engaging with institutional investors to gain a deep understanding
                                        of their financial goals, risk appetite, and investment horizon.
                                        This ensures that every opportunity we present aligns with their strategic
                                        needs.
                                    </p>

                                </div>
                            </a>
                        </div>
                        <div class="swiper-slide" data-tab="tab-2">
                            <a href="page-project-details.html" class="project__item">
                                <div class="content">
                                    <span>02</span>
                                    <h4>Identifying Secure,<br> High-Performing Investments</h4>
                                    <p>
                                        Leveraging our expertise and global network, we identify investment
                                        opportunities in well-regulated markets such as the UK and the US.
                                        We focus on structured fixed-income investments that offer stable and
                                        predictable returns.
                                    </p>
                                </div>
                            </a>
                        </div>
                        <div class="swiper-slide" data-tab="tab-3">
                            <a href="page-project-details.html" class="project__item">
                                <div class="content">
                                    <span>03</span>
                                    <h4>Partnering with <br> Industry Leaders</h4>
                                    <p>
                                        We collaborate with multi-billion-dollar institutions, including publicly listed
                                        companies on the NYSE,
                                        to provide our clients with access to institutional-grade investment
                                        opportunities backed by strong financial fundamentals.
                                    </p>
                                </div>
                            </a>
                        </div>
                        <div class="swiper-slide" data-tab="tab-4">
                            <a href="page-project-details.html" class="project__item">
                                <div class="content">
                                    <span>04</span>
                                    <h4>Conducting Rigorous <br> Due Diligence</h4>
                                    <p>
                                        Every investment undergoes a thorough risk assessment, legal review, and
                                        financial analysis to ensure capital preservation and growth.
                                        We prioritize security and transparency in all our transactions.
                                    </p>
                                </div>
                            </a>
                        </div>
                        <div class="swiper-slide" data-tab="tab-5">
                            <a href="page-project-details.html" class="project__item">
                                <div class="content">
                                    <span>05</span>
                                    <h4> Seamless Execution <br> & Compliance</h4>
                                    <p>
                                        Once an investment is selected, we facilitate the entire execution process,
                                        ensuring compliance with international regulatory standards and seamless
                                        transaction processing.
                                    </p>
                                </div>
                            </a>
                        </div>
                        <div class="swiper-slide" data-tab="tab-6">
                            <a href="page-project-details.html" class="project__item">
                                <div class="content">
                                    <span>06</span>
                                    <h4>Continuous Monitoring <br> & Reporting</h4>
                                    <p>
                                        We provide ongoing portfolio monitoring and regular performance updates,
                                        ensuring that our clients remain informed and in control of their investments.
                                        Our team proactively manages risks and identifies opportunities for portfolio
                                        optimization.
                                    </p>
                                </div>
                            </a>
                        </div>
                        {{--                    <div class="swiper-slide" data-tab="tab-7">--}}
                        {{--                        <a href="page-project-details.html" class="project__item">--}}
                        {{--                            <div class="content">--}}
                        {{--                                <span>07</span>--}}
                        {{--                                <h4>Start the in-depth <br> design process</h4>--}}
                        {{--                                <p>We specialize in serving industries like healthcare, Computer Design.</p>--}}
                        {{--                            </div>--}}
                        {{--                        </a>--}}
                        {{--                    </div>--}}
                        {{--                    <div class="swiper-slide" data-tab="tab-8">--}}
                        {{--                        <a href="page-project-details.html" class="project__item">--}}
                        {{--                            <div class="content">--}}
                        {{--                                <span>08</span>--}}
                        {{--                                <h4>Assembly Home</h4>--}}
                        {{--                                <p>We specialize in serving industries like healthcare, Computer Design.</p>--}}
                        {{--                            </div>--}}
                        {{--                        </a>--}}
                        {{--                    </div>--}}
                    </div>
                </div>
                <div class="project__slider-arrys">
                    <button class="project__arry-prev"><i class="fa-regular fa-arrow-left"></i></button>
                    <button class="project__arry-next"><i class="fa-regular fa-arrow-right"></i></button>
                </div>
                <div class="project__image">
                    <img id="tab-1" class="tab-img active" src="assets/images/project/1.jpg" alt="image">
                    <img id="tab-2" class="tab-img" src="assets/images/project/2.jpg" alt="image">
                    <img id="tab-3" class="tab-img" src="assets/images/project/3.jpg" alt="image">
                    <img id="tab-4" class="tab-img" src="assets/images/project/4.jpg" alt="image">
                    <img id="tab-5" class="tab-img" src="assets/images/project/5.jpg" alt="image">
                    <img id="tab-6" class="tab-img" src="assets/images/project/6.jpg" alt="image">
                    {{--                <img id="tab-7" class="tab-img" src="assets/images/project/7.jpg" alt="image">--}}
                    {{--                <img id="tab-8" class="tab-img" src="assets/images/project/8.jpg" alt="image">--}}
                </div>
            </div>
        </section>
        <!-- Project area end here -->



        <!-- Add this before </body> tag, after other script imports -->
        {{-- <script>
            document.addEventListener('DOMContentLoaded', function() {
                var projectSwiper = new Swiper('.project__slider', {
                    slidesPerView: 1,
                    spaceBetween: 30,
                    loop: true,
                    autoplay: {
                        delay: 3000,
                        disableOnInteraction: false,
                    },
                    navigation: {
                        nextEl: '.project__arry-next',
                        prevEl: '.project__arry-prev',
                    },
                    on: {
                        slideChange: function () {
                            const activeTab = this.slides[this.activeIndex].getAttribute('data-tab');
                            document.querySelectorAll('.tab-img').forEach(img => {
                                img.classList.remove('active');
                            });
                            document.getElementById(activeTab)?.classList.add('active');
                        }
                    }
                });
            });
        </script> --}}




        <section class="funfact-area pt-80 pb-80">
            <div class="container">
                <div class="row g-5">
                    <div class="col-md-6 col-xxl-2">
                    </div>
                    <div class="col-md-6 col-xxl-8">
                        <div class="text-center">
                            <h2 class="title color-light"><a href="contact.html">How can we help you?</a>
                            </h2>

                            <p class="wow color-light fadeInUp" data-wow-delay="200ms" data-wow-duration="1500ms">
                                <a href="page-about.html" class="hover-link-light"><u>Get in touch</u></a> with us or
                                find an office closest to you.
                            </p>
                        </div>
                    </div>
                    <div class="col-md-6 col-xxl-2">
                    </div>
                </div>
            </div>
        </section>


    </main>

@endsection
