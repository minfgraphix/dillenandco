@extends('layouts.base')
@section('content')
    <main>

        <section class="banner-five-area paralax__animation">
            <!-- Add dark overlay -->
            <div class="banner-overlay"
                style="position: absolute; top: 0; left: 0; width: 100%; height: 100%; background: linear-gradient(to bottom, rgba(0, 0, 0, 0) 0%, rgba(0, 0, 0, 0.8) 100%); z-index: 1;">
            </div>

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
                    <h5 class="title wow fadeInUp" data-wow-delay="200ms" data-wow-duration="1500ms">Purpose, Mission &
                        Values</h5>
                    <div class="info d-flex gap-3 align-items-center wow fadeInDown" data-wow-delay="400ms"
                        data-wow-duration="1500ms">
                        <!-- Existing SVG and content -->
                        <svg data-depth="0.01" width="50" height="50" viewBox="0 0 50 50" fill="none"
                            xmlns="http://www.w3.org/2000/svg">
                            <!-- ... existing SVG paths ... -->
                        </svg>
                        <div>
                            {{--                            <span class="text-white">Got Questions?</span> --}}
                            {{--                            <h4><a class="text-white" href="tel:00022220000">000 2222 0000</a></h4> --}}
                            <h3><a class="text-white">
                                    Our purpose is to empower African institutional investors
                                </a></h3>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section id="feature" class="feature-area pb-0 ">
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

                                    <p style="margin-left: -20px; " class="align-text-center">
                                        At Dillen & Company, we take a structured, research-driven approach to helping
                                        African institutional investors access secure, high-yield opportunities in global
                                        markets. Our process is built on rigorous due diligence, strategic partnerships, and
                                        a commitment to delivering long-term value.
                                        

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
{{--        <section class="about-area">--}}
{{--            <div class="about__wrp">--}}
{{--                <div class="row g-0">--}}
{{--                    <div class="col-lg-4">--}}
{{--                        <div class="about__item about__content">--}}
{{--                            <h4 class="color-light wow mb-30 splt-txt words chars splitting animated" data-splitting=""--}}
{{--                                style="--word-total: 2; --char-total: 11; visibility: visible;"><span class="word"--}}
{{--                                                                                                      data-word="Our" style="--word-index: 0;"><span class="char" data-char="O"--}}
{{--                                                                                                                                                         style="--char-index: 0;">O</span><span class="char" data-char="u"--}}
{{--                                                                                                                                                                                                style="--char-index: 1;">u</span><span class="char" data-char="r"--}}
{{--                                                                                                                                                                                                                                       style="--char-index: 2;">r</span></span><span class="whitespace"> </span><span--}}
{{--                                    class="word" data-word="Purpose" style="--word-index: 1;"><span class="char"--}}
{{--                                                                                                   data-char="P" style="--char-index: 3;">P</span><span class="char"--}}
{{--                                                                                                                                                        data-char="u" style="--char-index: 4;">u</span><span class="char"--}}
{{--                                                                                                                                                                                                             data-char="r" style="--char-index: 5;">r</span><span class="char"--}}
{{--                                                                                                                                                                                                                                                                  data-char="p" style="--char-index: 6;">p</span><span class="char"--}}
{{--                                                                                                                                                                                                                                                                                                                        data-char="o" style="--char-index: 7;">o</span><span class="char"--}}
{{--                                                                                                                                                                                                                                                                                                                                                                              data-char="s" style="--char-index: 8;">s</span><span class="char"--}}
{{--                                                                                                                                                                                                                                                                                                                                                                                                                                    data-char="e" style="--char-index: 9;">e</span></span></h4>--}}
{{--                            <div >--}}
{{--                                <p style="color: white; text-transform: none !important;">--}}
{{--                                    At Dillen & Company, our purpose is to empower African institutional investors by providing access to secure, high-yield investment opportunities in global markets. We bridge the gap between African capital and stable, well-regulated financial ecosystems, ensuring long-term wealth preservation and growth.--}}
{{--                                </p>--}}
{{--                               <h2 class=""></h2>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                    <div class="col-lg-4">--}}
{{--                        <div class="about__item about__content">--}}
{{--                            <h4 class="color-light wow splt-txt words chars splitting animated" data-splitting=""--}}
{{--                                style="--word-total: 8; --char-total: 58; visibility: visible;"><span class="word"--}}
{{--                                    data-word="Our" style="--word-index: 0;"><span class="char" data-char="O"--}}
{{--                                        style="--char-index: 0;">O</span><span class="char" data-char="u"--}}
{{--                                        style="--char-index: 1;">u</span><span class="char" data-char="r"--}}
{{--                                        style="--char-index: 2;">r</span></span><span class="whitespace"> </span><span--}}
{{--                                    class="word" data-word="user-centred" style="--word-index: 1;"><span class="char"--}}
{{--                                        data-char="u" style="--char-index: 3;">u</span><span class="char" data-char="s"--}}
{{--                                        style="--char-index: 4;">s</span><span class="char" data-char="e"--}}
{{--                                        style="--char-index: 5;">e</span><span class="char" data-char="r"--}}
{{--                                        style="--char-index: 6;">r</span><span class="char" data-char="-"--}}
{{--                                        style="--char-index: 7;">-</span><span class="char" data-char="c"--}}
{{--                                        style="--char-index: 8;">c</span><span class="char" data-char="e"--}}
{{--                                        style="--char-index: 9;">e</span><span class="char" data-char="n"--}}
{{--                                        style="--char-index: 10;">n</span><span class="char" data-char="t"--}}
{{--                                        style="--char-index: 11;">t</span><span class="char" data-char="r"--}}
{{--                                        style="--char-index: 12;">r</span><span class="char" data-char="e"--}}
{{--                                        style="--char-index: 13;">e</span><span class="char" data-char="d"--}}
{{--                                        style="--char-index: 14;">d</span></span><span class="whitespace"> </span><span--}}
{{--                                    class="word" data-word="design" style="--word-index: 2;"><span class="char"--}}
{{--                                        data-char="d" style="--char-index: 15;">d</span><span class="char"--}}
{{--                                        data-char="e" style="--char-index: 16;">e</span><span class="char"--}}
{{--                                        data-char="s" style="--char-index: 17;">s</span><span class="char"--}}
{{--                                        data-char="i" style="--char-index: 18;">i</span><span class="char"--}}
{{--                                        data-char="g" style="--char-index: 19;">g</span><span class="char"--}}
{{--                                        data-char="n" style="--char-index: 20;">n</span></span><span class="whitespace">--}}
{{--                                </span><span class="word" data-word="encourages" style="--word-index: 3;"><span--}}
{{--                                        class="char" data-char="e" style="--char-index: 21;">e</span><span--}}
{{--                                        class="char" data-char="n" style="--char-index: 22;">n</span><span--}}
{{--                                        class="char" data-char="c" style="--char-index: 23;">c</span><span--}}
{{--                                        class="char" data-char="o" style="--char-index: 24;">o</span><span--}}
{{--                                        class="char" data-char="u" style="--char-index: 25;">u</span><span--}}
{{--                                        class="char" data-char="r" style="--char-index: 26;">r</span><span--}}
{{--                                        class="char" data-char="a" style="--char-index: 27;">a</span><span--}}
{{--                                        class="char" data-char="g" style="--char-index: 28;">g</span><span--}}
{{--                                        class="char" data-char="e" style="--char-index: 29;">e</span><span--}}
{{--                                        class="char" data-char="s" style="--char-index: 30;">s</span></span><span--}}
{{--                                    class="whitespace"> </span><span class="word" data-word="productivity"--}}
{{--                                    style="--word-index: 4;"><span class="char" data-char="p"--}}
{{--                                        style="--char-index: 31;">p</span><span class="char" data-char="r"--}}
{{--                                        style="--char-index: 32;">r</span><span class="char" data-char="o"--}}
{{--                                        style="--char-index: 33;">o</span><span class="char" data-char="d"--}}
{{--                                        style="--char-index: 34;">d</span><span class="char" data-char="u"--}}
{{--                                        style="--char-index: 35;">u</span><span class="char" data-char="c"--}}
{{--                                        style="--char-index: 36;">c</span><span class="char" data-char="t"--}}
{{--                                        style="--char-index: 37;">t</span><span class="char" data-char="i"--}}
{{--                                        style="--char-index: 38;">i</span><span class="char" data-char="v"--}}
{{--                                        style="--char-index: 39;">v</span><span class="char" data-char="i"--}}
{{--                                        style="--char-index: 40;">i</span><span class="char" data-char="t"--}}
{{--                                        style="--char-index: 41;">t</span><span class="char" data-char="y"--}}
{{--                                        style="--char-index: 42;">y</span></span><span class="whitespace"> </span><span--}}
{{--                                    class="word" data-word="&amp;" style="--word-index: 5;"><span class="char"--}}
{{--                                        data-char="&amp;" style="--char-index: 43;">&amp;</span></span><span--}}
{{--                                    class="whitespace"> </span><span class="word" data-word="boosts"--}}
{{--                                    style="--word-index: 6;"><span class="char" data-char="b"--}}
{{--                                        style="--char-index: 44;">b</span><span class="char" data-char="o"--}}
{{--                                        style="--char-index: 45;">o</span><span class="char" data-char="o"--}}
{{--                                        style="--char-index: 46;">o</span><span class="char" data-char="s"--}}
{{--                                        style="--char-index: 47;">s</span><span class="char" data-char="t"--}}
{{--                                        style="--char-index: 48;">t</span><span class="char" data-char="s"--}}
{{--                                        style="--char-index: 49;">s</span></span><span class="whitespace"> </span><span--}}
{{--                                    class="word" data-word="revenue." style="--word-index: 7;"><span class="char"--}}
{{--                                        data-char="r" style="--char-index: 50;">r</span><span class="char"--}}
{{--                                        data-char="e" style="--char-index: 51;">e</span><span class="char"--}}
{{--                                        data-char="v" style="--char-index: 52;">v</span><span class="char"--}}
{{--                                        data-char="e" style="--char-index: 53;">e</span><span class="char"--}}
{{--                                        data-char="n" style="--char-index: 54;">n</span><span class="char"--}}
{{--                                        data-char="u" style="--char-index: 55;">u</span><span class="char"--}}
{{--                                        data-char="e" style="--char-index: 56;">e</span><span class="char"--}}
{{--                                        data-char="." style="--char-index: 57;">.</span></span></h4>--}}
{{--                            <ul>--}}
{{--                                <li>--}}
{{--                                    <svg width="16" height="16" viewBox="0 0 16 16" fill="none"--}}
{{--                                        xmlns="http://www.w3.org/2000/svg">--}}
{{--                                        <path--}}
{{--                                            d="M8 0.5C7.66563 7.39062 7.39062 7.66563 0.5 8C7.39062 8.33437 7.66563 8.60938 8 15.5C8.33437 8.60938 8.60938 8.33437 15.5 8C8.60938 7.66563 8.33437 7.39062 8 0.5Z"--}}
{{--                                            fill="white"></path>--}}
{{--                                    </svg>--}}
{{--                                    Clarify the company's vision growth objectives.--}}
{{--                                </li>--}}
{{--                                <li>--}}
{{--                                    <svg width="16" height="16" viewBox="0 0 16 16" fill="none"--}}
{{--                                        xmlns="http://www.w3.org/2000/svg">--}}
{{--                                        <path--}}
{{--                                            d="M8 0.5C7.66563 7.39062 7.39062 7.66563 0.5 8C7.39062 8.33437 7.66563 8.60938 8 15.5C8.33437 8.60938 8.60938 8.33437 15.5 8C8.60938 7.66563 8.33437 7.39062 8 0.5Z"--}}
{{--                                            fill="white"></path>--}}
{{--                                    </svg>--}}
{{--                                    Business Management consultation--}}
{{--                                </li>--}}
{{--                                <li>--}}
{{--                                    <svg width="16" height="16" viewBox="0 0 16 16" fill="none"--}}
{{--                                        xmlns="http://www.w3.org/2000/svg">--}}
{{--                                        <path--}}
{{--                                            d="M8 0.5C7.66563 7.39062 7.39062 7.66563 0.5 8C7.39062 8.33437 7.66563 8.60938 8 15.5C8.33437 8.60938 8.60938 8.33437 15.5 8C8.60938 7.66563 8.33437 7.39062 8 0.5Z"--}}
{{--                                            fill="white"></path>--}}
{{--                                    </svg>--}}
{{--                                    Clearly communicate the team's mission--}}
{{--                                </li>--}}
{{--                                <li>--}}
{{--                                    <svg width="16" height="16" viewBox="0 0 16 16" fill="none"--}}
{{--                                        xmlns="http://www.w3.org/2000/svg">--}}
{{--                                        <path--}}
{{--                                            d="M8 0.5C7.66563 7.39062 7.39062 7.66563 0.5 8C7.39062 8.33437 7.66563 8.60938 8 15.5C8.33437 8.60938 8.60938 8.33437 15.5 8C8.60938 7.66563 8.33437 7.39062 8 0.5Z"--}}
{{--                                            fill="white"></path>--}}
{{--                                    </svg>--}}
{{--                                    Review report's objectives to understand purpose--}}
{{--                                </li>--}}
{{--                            </ul>--}}
{{--                            <a href="page-about.html" class="btn-two-light words chars splitting" data-splitting=""--}}
{{--                                data-text="Learn More" style="--word-total: 2; --char-total: 9;"><span class="word"--}}
{{--                                    data-word="Learn" style="--word-index: 0;"><span class="char" data-char="L"--}}
{{--                                        style="--char-index: 0;">L</span><span class="char" data-char="e"--}}
{{--                                        style="--char-index: 1;">e</span><span class="char" data-char="a"--}}
{{--                                        style="--char-index: 2;">a</span><span class="char" data-char="r"--}}
{{--                                        style="--char-index: 3;">r</span><span class="char" data-char="n"--}}
{{--                                        style="--char-index: 4;">n</span></span><span class="whitespace"> </span><span--}}
{{--                                    class="word" data-word="More" style="--word-index: 1;"><span class="char"--}}
{{--                                        data-char="M" style="--char-index: 5;">M</span><span class="char"--}}
{{--                                        data-char="o" style="--char-index: 6;">o</span><span class="char"--}}
{{--                                        data-char="r" style="--char-index: 7;">r</span><span class="char"--}}
{{--                                        data-char="e" style="--char-index: 8;">e</span></span></a>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                    <div class="col-lg-4">--}}
{{--                        <div class="about__item about__testimonial">--}}
{{--                            <div>--}}
{{--                                <div class="icon mb-50">--}}
{{--                                    <svg width="24" height="22" viewBox="0 0 24 22" fill="none"--}}
{{--                                        xmlns="http://www.w3.org/2000/svg">--}}
{{--                                        <g clip-path="url(#clip0_99_7624)">--}}
{{--                                            <path--}}
{{--                                                d="M13.5302 16.2398C15.5748 11.7362 19.8683 12.1278 21.9164 14.5977C23.9644 17.0677 21.4017 20.254 19.1527 20.6456C16.9037 21.0373 13.3258 19.5686 13.332 14.6571C13.3404 8.11369 20.4386 1.84444 21.2186 1.29395"--}}
{{--                                                stroke="white" stroke-width="3" stroke-linecap="round"></path>--}}
{{--                                            <path--}}
{{--                                                d="M1.53027 16.2398C3.57479 11.7362 7.8683 12.1278 9.91637 14.5977C11.9644 17.0677 9.4017 20.254 7.1527 20.6456C4.90373 21.0373 1.32581 19.5686 1.33204 14.6571C1.34034 8.11369 8.43857 1.84444 9.21857 1.29395"--}}
{{--                                                stroke="white" stroke-width="3" stroke-linecap="round"></path>--}}
{{--                                        </g>--}}
{{--                                        <defs>--}}
{{--                                            <clipPath>--}}
{{--                                                <rect width="24" height="22" fill="white"></rect>--}}
{{--                                            </clipPath>--}}
{{--                                        </defs>--}}
{{--                                    </svg>--}}
{{--                                </div>--}}
{{--                                <p>Their user-cantered design approach streamlines outer operations and significantly--}}
{{--                                    boosts your productivity--}}
{{--                                    and revenue. From the start, they took the time to understand best time.</p>--}}
{{--                            </div>--}}
{{--                            <h4 class="title">Ronex HM. <span>Spain</span></h4>--}}
{{--                        </div>--}}
{{--                    </div>--}}

{{--                </div>--}}
{{--            </div>--}}
{{--        </section>--}}
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
