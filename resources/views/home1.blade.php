@extends('layouts.base')
@section('content')
    <main>

        <!-- Banner area start here -->
        <section class="banner-two-area paralax__animation"
                 data-background="{{ asset('assets/images/Background.jpg') }}" style="height: 680px;">
            <div class="banner-two__wrp">
                <div class="banner-two__content mt-1 mb-20">
                    <br><br>
                    <h1 class="title mt-30 wow splt-txt-bounce " data-splitting=""
                        style="color:black !important; font-size: 66px; ">
                        Dillen & Company</h1>
                    <p class=" wow fadeInUp mb-20" data-wow-delay="200ms" data-wow-duration="1500ms"
                       style="color:black !important">
                        We empower African institutional investors by providing access to secure, high-yield investment
                        opportunities in global markets.
                        We bridge the gap between African capital and stable, well-regulated financial ecosystems, ensuring
                        long-term wealth preservation and growth.
                    </p>

                   <h6> <a href="page-about.html" class="mt-30" style="color: black; font-size: large; transition: color 0.3s ease;"
                       onmouseover="this.style.color='blue'; this.querySelector('i').style.transform='translateX(15px)'"
                       onmouseout="this.style.color='black'; this.querySelector('i').style.transform='translateX(0)'">
                        Build experience capital <i class="fa-light fa-arrow-right"
                                     style="transition: transform 0.3s ease; color: blue; font-weight: bold; display: inline-block;"></i></a>

                   </h6>
                    <h6 style="margin-top: -20px">
                       <a href="page-about.html" class="mt-30" style="color: black; font-size: large; transition: color 0.3s ease;"
                       onmouseover="this.style.color='blue'; this.querySelector('i').style.transform='translateX(15px)'"
                       onmouseout="this.style.color='black'; this.querySelector('i').style.transform='translateX(0)'">
                        Preorder The Broken Rung <i class="fa-light fa-arrow-right"
                                                    style="transition: transform 0.3s ease; color: blue; font-weight: bold; display: inline-block;"></i></a>
                    </h6>

                    </div>

                </div>
            </div>
            <div class="banner-two__image">
                <img class="animation__arryLeftRight" src="assets/images/banner/artwork.png" alt="image">
                {{-- <div class="info1">
                    <img data-depth="0.03" src="assets/images/banner/banner-two-info1.png" alt="image">
                </div> --}}
                {{-- <div class="info2">
                    <img data-depth="0.05" src="assets/images/banner/banner-two-info2.png" alt="image">
                </div> --}}
                {{-- <div class="info3">
                    <img class="animation__rotate" src="assets/images/banner/banner-two-info3.png" alt="image">
                </div> --}}
            </div>
        </section>
        <!-- Banner area end here -->

        <section id="feature" class="feature-area pb-0">
            <div class="feature__wrp">
                <div class="row g-0" style="margin-top: -30px; margin-bottom: -30px;">
                    <div class="col-sm-6 col-lg-3">
                        <div class="feature__item">
                            <div class="feature__content">
                                <h6><a class="hover-link" style="font-family: MckinseySans-regular"
                                       href="{{ route('insights') }}">TRENDING <br> INSIGHTS</a>
                                </h6>
                            </div>
                        </div>
                    </div>

                    <div class="col-sm-6 col-lg-3">
                        <div class="feature__item">
                            <div class="feature__content">
                                <div style="display: flex; align-items: center;">

                                    <p style="margin-left: -15px; ">
                                    <h3
                                        style="text-align: right; vertical-align: top; margin-left: -10px; blue; font-family: MckinseySans-regular">
                                        1</h3>
                                        <hr style="border: 1.5px solid blue; transform: rotate(90deg); width: 80px; margin-left: -10px;"></hr>
                                    
                                    <a style="font-family: MckinseySans-regular !important; margin-left: -1px;"
                                       class="hover-link"
                                       href="{{ route('insights') }}">
                                       Market Trends & Analysis
                                       <br><br>
                                    </a></p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-lg-3">
                        <div class="feature__item">
                            <div class="feature__content">
                                <div style="display: flex; align-items: center;">

                                    <p style="margin-left: -16px; ">
                                    <h3
                                        style="text-align: right; vertical-align: top; margin-left: -10px; blue; font-family: MckinseySans-regular">
                                        2</h3>
                                    <hr
                                        style="border: 1.5px solid blue; transform: rotate(90deg); width: 100px; margin-left: -10px;">
                                    <a style="font-family: MckinseySans-regular !important; margin-left: -1px;"
                                       class="hover-link"
                                       href="{{ route('insights') }}">
                                       Investment Strategies & Opportunities
                                    </a></p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-lg-3">
                        <div class="feature__item">
                            <div class="feature__content">
                                <div style="display: flex; align-items: center;">

                                    <p style="margin-left: -16px; ">
                                    <h3
                                        style="text-align: right; vertical-align: top; margin-left: -10px; blue; font-family: MckinseySans-regular">
                                        3</h3>
                                    <hr
                                        style="border: 1.5px solid blue; transform: rotate(90deg); width: 100px; margin-left: -10px;">
                                    <a style="font-family: MckinseySans-regular !important; margin-left: -1px;"
                                       class="hover-link"
                                       href="{{ route('insights') }}">
                                       Risk Management & Due Diligence
                                    </a></p>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>

        </section>

        <section class="choose-seven-area" style="heigth:700px">
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
                                            class="char" data-char="&" style="--char-index: 11;">&amp;</span></span><span
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
                                    <br>
                                    Our firm partners with multi-billion-dollar companies, including publicly
                                    traded entities on the NYSE, to provide our clients with access to
                                    world-class investment opportunities.

                                </p>


                            </div>

                            <a href="page-about.html" class="mt-30" style="color: black; font-size: large; transition: color 0.3s ease;"
                               onmouseover="this.style.color='blue'; this.querySelector('i').style.transform='translateX(15px)'"
                               onmouseout="this.style.color='black'; this.querySelector('i').style.transform='translateX(0)'">
                                Read More <i class="fa-light fa-arrow-right"
                                             style="transition: transform 0.3s ease; color: blue; font-weight: bold; display: inline-block;"></i></a>



                        </div>
                    </div>
                </div>
            </div>

            <div class="row g-0">
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
                                    Dillen & Company is a trusted investment advisory firm dedicated to helping African institutional investors build globally diversified portfolios in secure, high-growth markets.
                                    We specialize in structuring fixed-income investment opportunities in the UK and the US.
                                </p>
                                <p>
                                    With deep expertise in global finance, we partner with multi-billion-dollar institutions, including publicly listed companies on the NYSE, to provide African investors with access to world-class opportunities.
                                    Our approach is rooted in integrity, discipline, and a commitment to long-term value creation.
                                </p>
                                <a href="page-about.html" class="mt-30" style="color: black; font-size: large; transition: color 0.3s ease;"
                                   onmouseover="this.style.color='blue'; this.querySelector('i').style.transform='translateX(15px)'"
                                   onmouseout="this.style.color='black'; this.querySelector('i').style.transform='translateX(0)'">
                                    Read More <i class="fa-light fa-arrow-right"
                                                 style="transition: transform 0.3s ease; color: blue; font-weight: bold; display: inline-block;"></i></a>

                            </div>



                        </div>
                    </div>
                </div>
                <div class="col-lg-6 order-1 order-lg-2">
                    <div class="choose-seven__image">
                        <img src="gettyimages.jpg" alt="image">
                    </div>
                </div>
            </div>
            <div class="row g-0">
                <div class="col-lg-6">
                    <div class="choose-seven__image">
                        <img src="thumb-gettyimages.jpg" alt="image">
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
                    <div class="faq__item">

                        <h2 class="wow splt-txt words chars splitting animated" data-splitting=""
                            style="--word-total: 3; --char-total: 19; visibility: visible;"><span
                                class="word" data-word="Why" style="--word-index: 0;"><span
                                    class="char" data-char="W" style="--char-index: 0;">W</span><span
                                    class="char" data-char="h" style="--char-index: 1;">h</span><span
                                    class="char" data-char="y" style="--char-index: 2;">y</span></span><span
                                class="whitespace"> </span><span
                                class="word" data-word="Choose" style="--word-index: 1;"><span
                                    class="char" data-char="C" style="--char-index: 3;">C</span><span
                                    class="char" data-char="h" style="--char-index: 4;">h</span><span
                                    class="char" data-char="o" style="--char-index: 5;">o</span><span
                                    class="char" data-char="o" style="--char-index: 6;">o</span><span
                                    class="char" data-char="s" style="--char-index: 7;">s</span><span
                                    class="char" data-char="e" style="--char-index: 8;">e</span></span><span
                                class="whitespace"> </span><span
                                class="word" data-word="Us" style="--word-index: 2;"><span
                                    class="char" data-char="U" style="--char-index: 9;">U</span><span
                                    class="char" data-char="s" style="--char-index: 10;">s</span></span><span
                                class="char" data-char="?" style="--char-index: 11;">?</span>
                        </h2>
                        <div class="faq__accordion wow fadeInRight" data-wow-delay="200ms" data-wow-duration="1500ms" style="visibility: visible; animation-duration: 1500ms; animation-delay: 200ms; animation-name: fadeInRight;">
                            <div class="accordion" id="accordionExample">
                                <div class="accordion-item">
                                    <h2 class="accordion-header">
                                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="false" aria-controls="collapseOne">
                                            &nbsp Secure Investments:
                                        </button>
                                    </h2>
                                    <div id="collapseOne" class="accordion-collapse collapse" data-bs-parent="#accordionExample" style="">
                                        <div class="accordion-body">
                                            <p class="ml-3">
                                                  We focus on stable, well-regulated markets to ensure asset protection.
                                            </p>
                                        </div>
                                    </div>
                                </div>

                                <div class="accordion-item">
                                    <h2 class="accordion-header">
                                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                            &nbsp  Global Partnerships:
                                        </button>
                                    </h2>
                                    <div id="collapseTwo" class="accordion-collapse collapse" data-bs-parent="#accordionExample" style="">
                                        <div class="accordion-body">
                                            <p class="ml-3">
                                                We work with top-tier financial institutions to deliver best-in-class solutions.
                                            </p>
                                        </div>
                                    </div>
                                </div>

                                <div class="accordion-item">
                                    <h2 class="accordion-header">
                                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                            &nbsp Bespoke Advisory:
                                        </button>
                                    </h2>
                                    <div id="collapseThree" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                                        <div class="accordion-body">
                                            <p>
                                                Our client-centric approach ensures tailored investment strategies that align with institutional goals.
                                            </p>
                                        </div>
                                    </div>
                                </div>
                                <p class="wow fadeInUp mt-20" data-wow-delay="00ms" data-wow-duration="1500ms">
                                    Dillen & Company be your trusted partner in navigating the global financial landscape.
                                </p>
                            </div>
                            <h5>
                                <a href="page-about.html" class="mt-30" style="color: black; font-size: large; transition: color 0.3s ease;"
                                   onmouseover="this.style.color='blue'; this.querySelector('i').style.transform='translateX(15px)'"
                                   onmouseout="this.style.color='black'; this.querySelector('i').style.transform='translateX(0)'">
                                    Read More <i class="fa-light fa-arrow-right"
                                                 style="transition: transform 0.3s ease; color: blue; font-weight: bold; display: inline-block;"></i></a>


                            </h5>
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
                        At Dillen & Company, we take a structured, research-driven approach to helping African institutional investors access secure,
                        high-yield opportunities in global markets. Our process is built on rigorous due diligence, strategic partnerships,
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
                                    <h4>Understanding Your  <br> Investment Objectives</h4>
                                    <p class="text">
                                        We begin by engaging with institutional investors to gain a deep understanding of their financial goals, risk appetite, and investment horizon.
                                        This ensures that every opportunity we present aligns with their strategic needs.
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
                                        Leveraging our expertise and global network, we identify investment opportunities in well-regulated markets such as the UK and the US.
                                        We focus on structured fixed-income investments that offer stable and predictable returns.
                                    </p>
                                </div>
                            </a>
                        </div>
                        <div class="swiper-slide" data-tab="tab-3">
                            <a href="page-project-details.html" class="project__item">
                                <div class="content">
                                    <span>03</span>
                                    <h4>Partnering with  <br> Industry Leaders</h4>
                                    <p>
                                        We collaborate with multi-billion-dollar institutions, including publicly listed companies on the NYSE,
                                        to provide our clients with access to institutional-grade investment opportunities backed by strong financial fundamentals.
                                    </p>
                                </div>
                            </a>
                        </div>
                        <div class="swiper-slide" data-tab="tab-4">
                            <a href="page-project-details.html" class="project__item">
                                <div class="content">
                                    <span>04</span>
                                    <h4>Conducting Rigorous  <br> Due Diligence</h4>
                                    <p>
                                        Every investment undergoes a thorough risk assessment, legal review, and financial analysis to ensure capital preservation and growth.
                                        We prioritize security and transparency in all our transactions.
                                    </p>
                                </div>
                            </a>
                        </div>
                        <div class="swiper-slide" data-tab="tab-5">
                            <a href="page-project-details.html" class="project__item">
                                <div class="content">
                                    <span>05</span>
                                    <h4> Seamless Execution  <br> & Compliance</h4>
                                    <p>
                                        Once an investment is selected, we facilitate the entire execution process,
                                        ensuring compliance with international regulatory standards and seamless transaction processing.
                                    </p>
                                </div>
                            </a>
                        </div>
                        <div class="swiper-slide" data-tab="tab-6">
                            <a href="page-project-details.html" class="project__item">
                                <div class="content">
                                    <span>06</span>
                                    <h4>Continuous Monitoring  <br> & Reporting</h4>
                                    <p>
                                        We provide ongoing portfolio monitoring and regular performance updates, ensuring that our clients remain informed and in control of their investments.
                                        Our team proactively manages risks and identifies opportunities for portfolio optimization.
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


        <section class="choose-seven-area" style="heigth:700px">

            <div class="row g-0">
                <div class="col-lg-6 order-2 order-lg-1">
                    <div class="choose-seven__wrp">
                        <div class="wrp">
                            <div class="section-header">
                                <h2>Are you seeking an exciting role that will challenge and inspire you?</h2>

                                <a href="page-about.html" class="mt-30" style="color: black; font-size: large; transition: color 0.3s ease;"
                                   onmouseover="this.style.color='blue'; this.querySelector('i').style.transform='translateX(15px)'"
                                   onmouseout="this.style.color='black'; this.querySelector('i').style.transform='translateX(0)'">
                                    Read More <i class="fa-light fa-arrow-right"
                                                 style="transition: transform 0.3s ease; color: blue; font-weight: bold; display: inline-block;"></i></a>

                            </div>



                        </div>
                    </div>
                </div>
                <div class="col-lg-6 order-1 order-lg-2">
                    <div class="choose-seven__image">
                        <img src="careers_thumb.jpg" alt="image">
                    </div>
                </div>
            </div>

        </section>


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
                                <a href="page-about.html" class="hover-link-light"><u>Get in touch</u></a>  with us or find an office closest to you.
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
