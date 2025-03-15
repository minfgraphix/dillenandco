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
                    <h5 class="title wow fadeInUp" data-wow-delay="200ms" data-wow-duration="1500ms">Featured Insights</h5>
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
                            <h3><a class="text-white">Our Featured Insights section is your gateway to the latest expert analysis</a></h3>
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
                                        Our Featured Insights section is your gateway to the latest expert analysis, market trends, and strategic perspectives shaping the global investment landscape. Here, we share our research,
                                        commentary, and in-depth reports on topics critical to African institutional investors and beyond.

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
        <section class="faq-area bg-sub">
            <div class="row g-0 align-items-center">
                <div class="col-xl-6">
                    <div class="faq__item">
                        <div class="section-header mb-30">
                            <h2>Featured Insights</h2>
{{--                            <h2 class="wow splt-txt words chars splitting animated" data-splitting="" style="--word-total: 3; --char-total: 24; visibility: visible;"><span class="word" data-word="Frequently" style="--word-index: 0;"><span class="char" data-char="F" style="--char-index: 0;">F</span><span class="char" data-char="r" style="--char-index: 1;">r</span><span class="char" data-char="e" style="--char-index: 2;">e</span><span class="char" data-char="q" style="--char-index: 3;">q</span><span class="char" data-char="u" style="--char-index: 4;">u</span><span class="char" data-char="e" style="--char-index: 5;">e</span><span class="char" data-char="n" style="--char-index: 6;">n</span><span class="char" data-char="t" style="--char-index: 7;">t</span><span class="char" data-char="l" style="--char-index: 8;">l</span><span class="char" data-char="y" style="--char-index: 9;">y</span></span><span class="whitespace"> </span><span class="word" data-word="Asked" style="--word-index: 1;"><span class="char" data-char="A" style="--char-index: 10;">A</span><span class="char" data-char="s" style="--char-index: 11;">s</span><span class="char" data-char="k" style="--char-index: 12;">k</span><span class="char" data-char="e" style="--char-index: 13;">e</span><span class="char" data-char="d" style="--char-index: 14;">d</span></span><span class="whitespace"> </span><span class="word" data-word="Questions" style="--word-index: 2;"><span class="char" data-char="Q" style="--char-index: 15;">Q</span><span class="char" data-char="u" style="--char-index: 16;">u</span><span class="char" data-char="e" style="--char-index: 17;">e</span><span class="char" data-char="s" style="--char-index: 18;">s</span><span class="char" data-char="t" style="--char-index: 19;">t</span><span class="char" data-char="i" style="--char-index: 20;">i</span><span class="char" data-char="o" style="--char-index: 21;">o</span><span class="char" data-char="n" style="--char-index: 22;">n</span><span class="char" data-char="s" style="--char-index: 23;">s</span></span></h2>--}}
                        </div>
                        <div class="faq__accordion wow fadeInLeft" data-wow-delay="200ms" data-wow-duration="1500ms" style="visibility: visible; animation-duration: 1500ms; animation-delay: 200ms; animation-name: fadeInLeft;">
                            <div class="accordion" id="accordionExample">
                                <div class="accordion-item">
                                    <h2 class="accordion-header">
                                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="false" aria-controls="collapseOne">
                                            Market Trends & Analysis
                                        </button>
                                    </h2>
                                    <div id="collapseOne" class="accordion-collapse collapse" data-bs-parent="#accordionExample" style="">
                                        <div class="accordion-body">
                                            <p>
                                                Stay ahead of the curve with our regular updates on global economic indicators, emerging market opportunities, and shifts in regulatory environments across the UK and the US.
                                            </p>
                                        </div>
                                    </div>
                                </div>

                                <div class="accordion-item">
                                    <h2 class="accordion-header">
                                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                            Investment Strategies & Opportunities
                                        </button>
                                    </h2>
                                    <div id="collapseTwo" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                                        <div class="accordion-body">
                                            <p>
                                                Discover detailed case studies and success stories that highlight our structured investment approach, fixed-income opportunities, and our partnerships with industry-leading institutions.
                                            </p>
                                        </div>
                                    </div>
                                </div>

                                <div class="accordion-item">
                                    <h2 class="accordion-header">
                                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                            Risk Management & Due Diligence
                                        </button>
                                    </h2>
                                    <div id="collapseThree" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                                        <div class="accordion-body">
                                            <p>
                                                Gain insights into our rigorous due diligence processes, risk mitigation strategies, and best practices in safeguarding capital while pursuing attractive returns.
                                            </p>
                                        </div>
                                    </div>
                                </div>

                                <div class="accordion-item">
                                    <h2 class="accordion-header">
                                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                                            Expert Commentary
                                        </button>
                                    </h2>
                                    <div id="collapseFour" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                                        <div class="accordion-body">
                                            <p>
                                                Benefit from thought leadership articles and expert commentary on global financial trends, providing clarity and context in an ever-changing market environment.
                                            </p>
                                        </div>
                                    </div>
                                </div>


                            </div>
                        </div>
                        <div class="section-header mb-30">
                            <p>
                                Our commitment is to empower you with knowledge and actionable insights that help drive informed decision-making and sustainable financial growth. Explore our Featured Insights to discover how Dillen & Company is shaping the future of global investments for African institutions.
                            </p>
                            {{--                            <h2 class="wow splt-txt words chars splitting animated" data-splitting="" style="--word-total: 3; --char-total: 24; visibility: visible;"><span class="word" data-word="Frequently" style="--word-index: 0;"><span class="char" data-char="F" style="--char-index: 0;">F</span><span class="char" data-char="r" style="--char-index: 1;">r</span><span class="char" data-char="e" style="--char-index: 2;">e</span><span class="char" data-char="q" style="--char-index: 3;">q</span><span class="char" data-char="u" style="--char-index: 4;">u</span><span class="char" data-char="e" style="--char-index: 5;">e</span><span class="char" data-char="n" style="--char-index: 6;">n</span><span class="char" data-char="t" style="--char-index: 7;">t</span><span class="char" data-char="l" style="--char-index: 8;">l</span><span class="char" data-char="y" style="--char-index: 9;">y</span></span><span class="whitespace"> </span><span class="word" data-word="Asked" style="--word-index: 1;"><span class="char" data-char="A" style="--char-index: 10;">A</span><span class="char" data-char="s" style="--char-index: 11;">s</span><span class="char" data-char="k" style="--char-index: 12;">k</span><span class="char" data-char="e" style="--char-index: 13;">e</span><span class="char" data-char="d" style="--char-index: 14;">d</span></span><span class="whitespace"> </span><span class="word" data-word="Questions" style="--word-index: 2;"><span class="char" data-char="Q" style="--char-index: 15;">Q</span><span class="char" data-char="u" style="--char-index: 16;">u</span><span class="char" data-char="e" style="--char-index: 17;">e</span><span class="char" data-char="s" style="--char-index: 18;">s</span><span class="char" data-char="t" style="--char-index: 19;">t</span><span class="char" data-char="i" style="--char-index: 20;">i</span><span class="char" data-char="o" style="--char-index: 21;">o</span><span class="char" data-char="n" style="--char-index: 22;">n</span><span class="char" data-char="s" style="--char-index: 23;">s</span></span></h2>--}}
                        </div>

                    </div>

                </div>
                <div class="col-xl-6">
                    <div class="faq__image imageRightToLeft wow animated" style="visibility: visible;">
                        <img src="assets\images\service\service-seven-image5.jpg" alt="image" style="translate: none; rotate: none; scale: none; transform: translate(0%, 1.5906%) translate3d(0px, 0px, 0px);">
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
