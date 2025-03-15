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
                    <h5 class="title wow fadeInUp" data-wow-delay="200ms" data-wow-duration="1500ms">Who We Are</h5>
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
                            <h3><a class="text-white">We accelerate sustainable and inclusive growth</a></h3>
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
                                        Our clients are always pushing forward. Testing. Challenging.
                                        Striving for the change that changes everything.
                                        We partner with bold leaders every step of the way. Pinpointing the strategy
                                        that will reshape tomorrow.
                                        Harnessing innovation to reach net zero.
                                        Transforming through technology. Developing skills and capabilities across their
                                        organization.
                                        <br>
                                        Together we’re accelerating toward a more sustainable, inclusive, and growing
                                        future for all.
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

        <section class="choose-seven-area" style="heigth:700px">
            <div class="row g-0">
                <div class="col-lg-6 order-1 order-lg-2">
                    <div class="choose-seven__image">
                        <img src="gettyimages.jpg" alt="image">
                    </div>
                </div>

                <div class="col-lg-6 order-2 order-lg-1">
                    <div class="choose-seven__wrp">
                        <div class="wrp">
                            <div class="section-header">
                                {{--                                <h6>Who We Are</h6>--}}
                                <h2 class="wow splt-txt words chars splitting animated" data-splitting=""
                                    style="--word-total: 4; --char-total: 20; visibility: visible;"><span
                                        class="word" data-word="Who" style="--word-index: 0;"><span class="char"
                                                                                                    data-char="W"
                                                                                                    style="--char-index: 0;">W</span><span
                                            class="char"
                                            data-char="h" style="--char-index: 1;">h</span><span class="char"
                                                                                                 data-char="o"
                                                                                                 style="--char-index: 2;">o</span></span><span
                                        class="whitespace"> </span><span class="word" data-word="We"
                                                                         style="--word-index: 1;"><span class="char"
                                                                                                        data-char="W"
                                                                                                        style="--char-index: 3;">W</span><span
                                            class="char" data-char="e"
                                            style="--char-index: 4;">e</span></span><span class="whitespace">
                                    </span><span class="word" data-word="Are" style="--word-index: 2;"><span
                                            class="char" data-char="A" style="--char-index: 5;">A</span><span
                                            class="char" data-char="r" style="--char-index: 6;">r</span><span
                                            class="char" data-char="e" style="--char-index: 7;">e</span></span>
                                </h2>
                                <p>
                                    Dillen & Company is a trusted investment advisory firm dedicated to helping African
                                    institutional investors build globally diversified portfolios in secure, high-growth
                                    markets.
                                    We specialize in structuring fixed-income investment opportunities in the UK and the
                                    US.
                                </p>
                                <p>
                                    With deep expertise in global finance, we partner with multi-billion-dollar
                                    institutions, including publicly listed companies on the NYSE, to provide African
                                    investors with access to world-class opportunities.
                                    Our approach is rooted in integrity, discipline, and a commitment to long-term value
                                    creation.
                                </p>
                                <p>
                                    At Dillen & Company, we don’t just offer investment solutions—we empower African
                                    institutions with the knowledge, strategy, and partnerships needed to navigate the
                                    global financial landscape with confidence.
                                </p>
{{--                                <a href="page-about.html" class="mt-30"--}}
{{--                                   style="color: black; font-size: large; transition: color 0.3s ease;"--}}
{{--                                   onmouseover="this.style.color='blue'; this.querySelector('i').style.transform='translateX(15px)'"--}}
{{--                                   onmouseout="this.style.color='black'; this.querySelector('i').style.transform='translateX(0)'">--}}
{{--                                    Read More <i class="fa-light fa-arrow-right"--}}
{{--                                                 style="transition: transform 0.3s ease; color: blue; font-weight: bold; display: inline-block;"></i></a>--}}

                            </div>


                        </div>
                    </div>
                </div>
            </div>

            <div class="row g-0">
                <div class="col-lg-6">
                    <div class="choose-seven__image">
                        <img src="mobileupdate.jpg" alt="image">
                        <div class="icon">
                            {{-- <svg class="animation__rotate" width="154" height="161" viewBox="0 0 154 161" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <g filter="url(#filter0_b_1349_5060)">
                                    <g clip-path="url(#clip0_1349_5060)">
                                        <path d="M151.19 55.0528C151.19 44.3552 139.766 27.6956 137.295 24.6089C122.022 8.75266 101.766 0 80.2137 0C39.4995 0 5.71265 31.5011 0.0410156 72.3468C10.2232 61.1064 17.299 50.6976 28.1562 47.6533C46.1434 42.6215 66.8449 52.0507 89.6528 75.6446C89.8961 75.8985 90.1394 76.1524 90.4228 76.4057L91.1927 77.2513C97.6341 85.539 107.195 90.2746 117.403 90.2746C136.039 90.2746 151.19 74.4607 151.19 55.0528Z" fill="white" fill-opacity="0.49"></path>
                                    </g>
                                    <path d="M39.1907 54.123C17.3804 58.3132 6.24808 80.3115 3.4082 90.7869C7.95201 115.229 29.9895 163.416 81.7889 160.623C54.5261 155.036 55.662 112.902 59.6378 92.5328C47.3696 85.5492 40.8946 64.0165 39.1907 54.123Z" fill="white" fill-opacity="0.49"></path>
                                    <path d="M66.8863 101.601C81.9271 113.293 118.188 133.279 146.538 122.212C79.7438 180.875 65.6059 132.914 66.8863 101.601Z" fill="white" fill-opacity="0.49"></path>
                                </g>
                                <defs>
                                    <filter id="filter0_b_1349_5060" x="-20" y="-20" width="193.354" height="200.739" filterUnits="userSpaceOnUse" color-interpolation-filters="sRGB">
                                        <feFlood flood-opacity="0" result="BackgroundImageFix"></feFlood>
                                        <feGaussianBlur in="BackgroundImageFix" stdDeviation="10"></feGaussianBlur>
                                        <feComposite in2="SourceAlpha" operator="in" result="effect1_backgroundBlur_1349_5060"></feComposite>
                                        <feBlend mode="normal" in="SourceGraphic" in2="effect1_backgroundBlur_1349_5060" result="shape"></feBlend>
                                    </filter>
                                    <clipPath id="clip0_1349_5060">
                                        <rect width="153.354" height="90.7867" fill="white"></rect>
                                    </clipPath>
                                </defs>
                            </svg> --}}
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="choose-seven__wrp">
                        <div class="wrp">
                            <div class="section-header mb0">
                                {{--                                <h6>About Dillen & Company</h6>--}}

                                <h2 class="wow splt-txt words chars splitting animated" data-splitting=""
                                    style="--word-total: 3; --char-total: 19; visibility: visible;"><span
                                        class="word" data-word="About" style="--word-index: 0;"><span
                                            class="char" data-char="A" style="--char-index: 0;">A</span><span
                                            class="char" data-char="b" style="--char-index: 1;">b</span><span
                                            class="char" data-char="o" style="--char-index: 2;">o</span><span
                                            class="char" data-char="u" style="--char-index: 3;">u</span><span
                                            class="char" data-char="t" style="--char-index: 4;">t</span></span><span
                                        class="whitespace"> </span><span
                                        class="word" data-word="Dillen" style="--word-index: 1;"><span
                                            class="char" data-char="D" style="--char-index: 5;">D</span><span
                                            class="char" data-char="i" style="--char-index: 6;">i</span><span
                                            class="char" data-char="l" style="--char-index: 7;">l</span><span
                                            class="char" data-char="l" style="--char-index: 8;">l</span><span
                                            class="char" data-char="e" style="--char-index: 9;">e</span><span
                                            class="char" data-char="n" style="--char-index: 10;">n</span></span><span
                                        class="whitespace"> </span><span
                                        class="word" data-word="&amp;" style="--word-index: 2;"><span
                                            class="char" data-char="&"
                                            style="--char-index: 11;">&amp;</span></span><span
                                        class="whitespace"> </span><span
                                        class="word" data-word="Company" style="--word-index: 3;"><span
                                            class="char" data-char="C" style="--char-index: 12;">C</span><span
                                            class="char" data-char="o" style="--char-index: 13;">o</span><span
                                            class="char" data-char="m" style="--char-index: 14;">m</span><span
                                            class="char" data-char="p" style="--char-index: 15;">p</span><span
                                            class="char" data-char="a" style="--char-index: 16;">a</span><span
                                            class="char" data-char="n" style="--char-index: 17;">n</span><span
                                            class="char" data-char="y" style="--char-index: 18;">y</span></span>
                                </h2>

                                <p>
                                    Dillen & Company is a premier investment advisory firm dedicated to helping
                                    institutional investors in Africa diversify their assets into secure,
                                    high-performing jurisdictions in the UK and the US.
                                    We specialize in structuring fixed-income investment opportunities that
                                    deliver stable returns.
                                    <br><br>
                                    Our firm partners with multi-billion-dollar companies, including publicly
                                    traded entities on the NYSE, to provide our clients with access to
                                    world-class investment opportunities.

                                    With a deep understanding of global markets and a commitment to integrity, we bridge
                                    the gap between African institutional capital and secure, growth-oriented investment
                                    landscapes abroad.
                                    <br><br>
                                    At Dillen & Company, we believe in disciplined wealth management, strategic global
                                    expansion, and long-term value creation. Our mission is to empower African investors
                                    with the tools, insights, and opportunities needed to build resilient, globally
                                    diversified portfolios.

                                </p>


                            </div>


                        </div>
                    </div>
                </div>
            </div>


        </section>



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
