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
                    <h5 class="title wow fadeInUp" data-wow-delay="200ms" data-wow-duration="1500ms">Our Leadership</h5>
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
                            <h3><a class="text-white">Our leadership team is the cornerstone of our success</a></h3>
                        </div>
                    </div>
                </div>
            </div>
        </section>
{{--        <section id="feature" class="feature-area pb-0 footer-eleven-area">--}}
{{--            <div class="feature__wrp">--}}
{{--                <div class="row g-0" style="margin-top: -30px; margin-bottom: -30px;">--}}
{{--                    <div class="col-sm-6 col-lg-2">--}}
{{--                        <div class="feature__item">--}}
{{--                            <div class="feature__content">--}}

{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </div>--}}

{{--                    <div class="col-sm-6 col-lg-8">--}}
{{--                        <div class="feature__item">--}}
{{--                            <div class="feature__content">--}}
{{--                                <div style="display: flex; align-items: center;">--}}

{{--                                    <p style="margin-left: -20px; " class="color-light align-text-center">--}}
{{--                                        Our clients are always pushing forward. Testing. Challenging.--}}
{{--                                        Striving for the change that changes everything.--}}
{{--                                        We partner with bold leaders every step of the way. Pinpointing the strategy--}}
{{--                                        that will reshape tomorrow.--}}
{{--                                        Harnessing innovation to reach net zero.--}}
{{--                                        Transforming through technology. Developing skills and capabilities across their--}}
{{--                                        organization.--}}
{{--                                        <br>--}}
{{--                                        Together we’re accelerating toward a more sustainable, inclusive, and growing--}}
{{--                                        future for all.--}}
{{--                                    </p>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                    <div class="col-sm-6 col-lg-2">--}}
{{--                        <div class="feature__item">--}}
{{--                        </div>--}}
{{--                    </div>--}}

{{--                </div>--}}
{{--            </div>--}}

{{--        </section>--}}

        <section class="choose-twelve-area">
            <div class="row g-0">
                <div class="col-lg-5">
                    <div class="choose-twelve__image">
                        <img src="assets/images/case/case-image3.jpg" alt="image">
                    </div>
                </div>
                <div class="col-lg-7">
                    <div class="choose-twelve__wrp">
                        <div class="section-header mb-50">
{{--                            <h6>WE WORK WITH INTEGRITY</h6>--}}
                            <h2 class="wow splt-txt words chars splitting animated" data-splitting="" style="--word-total: 3; --char-total: 14; visibility: visible;"><span class="word" data-word="Our" style="--word-index: 0;">
                                    <span class="char" data-char="O" style="--char-index: 0;">O</span>
                                    <span class="char" data-char="u" style="--char-index: 1;">u</span>
                                    <span class="char" data-char="r" style="--char-index: 2;">r</span>
                                    </span><span class="whitespace"> </span>
                                    <span class="word" data-word="Leadership" style="--word-index: 1;">
                                        <span class="char" data-char="L" style="--char-index: 3;">L</span>
                                        <span class="char" data-char="e" style="--char-index: 4;">e</span>
                                        <span class="char" data-char="a" style="--char-index: 5;">a</span>
                                        <span class="char" data-char="d" style="--char-index: 6;">d</span>
                                        <span class="char" data-char="e" style="--char-index: 7;">e</span>
                                        <span class="char" data-char="r" style="--char-index: 8;">r</span>
                                        <span class="char" data-char="s" style="--char-index: 9;">s</span>
                                        <span class="char" data-char="h" style="--char-index: 10;">h</span>
                                        <span class="char" data-char="i" style="--char-index: 11;">i</span>
                                        <span class="char" data-char="p" style="--char-index: 12;">p</span>
                                    </span></h2>
                            <p class="text wow fadeInUp" data-wow-delay="00ms" data-wow-duration="1500ms" style="visibility: visible; animation-duration: 1500ms; animation-delay: 0ms; animation-name: fadeInUp;">
                                At Dillen & Company, our leadership team is the cornerstone of our success, blending deep industry expertise with an unwavering commitment to innovation,
                                integrity, and client-centric service. Spearheading our strategic vision is Jeffrey, whose nearly decade-long career in investment consulting has
                                equipped him with a unique global perspective. Jeffrey's experience—from advising high-net-worth individuals in West Africa with the deVere Group
                                to guiding institutional investors through complex portfolio diversification strategies at Dillen & Company—exemplifies our approach to delivering secure,
                                high-yield investment opportunities.
                            </p>
                            <p class="text wow fadeInUp" data-wow-delay="00ms" data-wow-duration="1500ms" style="visibility: visible; animation-duration: 1500ms; animation-delay: 0ms; animation-name: fadeInUp;">
                                Under his guidance, we have forged strong partnerships with multibillion-dollar financial institutions and publicly listed companies on the NYSE, ensuring our clients gain access to world-class investment solutions. Jeffrey’s leadership extends to orchestrating major initiatives, such as the capital raise for the 79th Group’s inaugural $100M Private Equity Fund in Gibraltar, demonstrating our ability to manage and execute large-scale financial projects.
                            </p>
                            <p class="text wow fadeInUp" data-wow-delay="00ms" data-wow-duration="1500ms" style="visibility: visible; animation-duration: 1500ms; animation-delay: 0ms; animation-name: fadeInUp;">
                                Our leadership team’s combined experience, strategic insights, and commitment to disciplined wealth management empower us to navigate the global financial landscape with confidence. This dynamic leadership not only drives our operational excellence but also shapes our mission to help African institutional investors achieve sustainable, long-term growth through diversified, secure investments.                            </p>
                        </div>
                        {{-- <div class="choose__tab">
                            <ul class="nav nav-tabs" id="myTab" role="tablist">
                                <li class="nav-item" role="presentation">
                                    <button class="nav-link active" id="home-tab" data-bs-toggle="tab" data-bs-target="#home" type="button" role="tab" aria-controls="home" aria-selected="true">
                                        What do we have
                                    </button>
                                </li>
                                <li class="nav-item" role="presentation">
                                    <button class="nav-link" id="profile-tab" data-bs-toggle="tab" data-bs-target="#profile" type="button" role="tab" aria-controls="profile" aria-selected="false" tabindex="-1">
                                        Our Skills
                                    </button>
                                </li>
                                <li class="nav-item" role="presentation">
                                    <button class="nav-link" id="contact-tab" data-bs-toggle="tab" data-bs-target="#contact" type="button" role="tab" aria-controls="contact" aria-selected="false" tabindex="-1">
                                        Our Award
                                    </button>
                                </li>
                                <li class="nav-item" role="presentation">
                                    <button class="nav-link" id="history-tab" data-bs-toggle="tab" data-bs-target="#history" type="button" role="tab" aria-controls="history" aria-selected="false" tabindex="-1">
                                        History Company
                                    </button>
                                </li>
                            </ul>
                        </div>
                        <div class="tab-content mt-30" id="myTabContent">
                            <div class="tab-pane fade active show" id="home" role="tabpanel" aria-labelledby="home-tab">
                                <div class="choose-twelve__content">
                                    <p class="wow fadeInDown" data-wow-delay="00ms" data-wow-duration="1500ms" style="visibility: visible; animation-duration: 1500ms; animation-delay: 0ms; animation-name: fadeInDown;">From
                                        advanced
                                        digital technologies to the forefront of sustainable solutions, we’re
                                        always exploring new ways to deliver
                                        exceptional value for a diverse range of clients. By bringing together the right
                                        teams,
                                        we uncover the best paths
                                        forward, elevating your vision of success through our digital agency services.
                                    </p>
                                    <div class="list mt-30 mb-40">
                                        <ul class="wow fadeInDown" data-wow-delay="200ms" data-wow-duration="1500ms" style="visibility: visible; animation-duration: 1500ms; animation-delay: 200ms; animation-name: fadeInDown;">
                                            <li>
                                                <svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <path d="M8 0C6.41775 0 4.87103 0.469192 3.55544 1.34824C2.23985 2.22729 1.21447 3.47672 0.608967 4.93853C0.00346629 6.40034 -0.15496 8.00887 0.153721 9.56072C0.462403 11.1126 1.22433 12.538 2.34315 13.6569C3.46197 14.7757 4.88743 15.5376 6.43928 15.8463C7.99113 16.155 9.59966 15.9965 11.0615 15.391C12.5233 14.7855 13.7727 13.7602 14.6518 12.4446C15.5308 11.129 16 9.58225 16 8C15.9972 5.87913 15.1534 3.84594 13.6537 2.34626C12.1541 0.846583 10.1209 0.00282218 8 0ZM12.47 5.80333L7.47 10.8033C7.4086 10.8656 7.33543 10.9151 7.25474 10.9488C7.17406 10.9826 7.08747 11 7 11C6.91254 11 6.82595 10.9826 6.74526 10.9488C6.66458 10.9151 6.59141 10.8656 6.53 10.8033L4.19667 8.47C4.07202 8.34535 4.00199 8.17628 4.00199 8C4.00199 7.82371 4.07202 7.65465 4.19667 7.53C4.32132 7.40535 4.49039 7.33532 4.66667 7.33532C4.84295 7.33532 5.01202 7.40535 5.13667 7.53L7 9.39L11.53 4.86333C11.6547 4.73868 11.8237 4.66865 12 4.66865C12.1763 4.66865 12.3453 4.73868 12.47 4.86333C12.5947 4.98798 12.6647 5.15705 12.6647 5.33333C12.6647 5.50962 12.5947 5.67868 12.47 5.80333Z" fill="#121C27"></path>
                                                    <path d="M12.3273 5.98823L7.5926 10.6828C7.53446 10.7413 7.46517 10.7878 7.38876 10.8194C7.31236 10.8511 7.23036 10.8675 7.14754 10.8675C7.06472 10.8675 6.98272 10.8511 6.90632 10.8194C6.82991 10.7878 6.76062 10.7413 6.70248 10.6828L4.49295 8.49202C4.37491 8.37498 4.30859 8.21624 4.30859 8.05072C4.30859 7.88521 4.37491 7.72647 4.49295 7.60943C4.61098 7.49239 4.77108 7.42664 4.93801 7.42664C5.10494 7.42664 5.26503 7.49239 5.38307 7.60943L7.14754 9.35583L11.4372 5.10564C11.5552 4.9886 11.7153 4.92285 11.8823 4.92285C12.0492 4.92285 12.2093 4.9886 12.3273 5.10564C12.4454 5.22268 12.5117 5.38142 12.5117 5.54693C12.5117 5.71245 12.4454 5.87119 12.3273 5.98823Z" fill="white"></path>
                                                </svg>
                                                Growth Method Analysis
                                            </li>
                                            <li>
                                                <svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <path d="M8 0C6.41775 0 4.87103 0.469192 3.55544 1.34824C2.23985 2.22729 1.21447 3.47672 0.608967 4.93853C0.00346629 6.40034 -0.15496 8.00887 0.153721 9.56072C0.462403 11.1126 1.22433 12.538 2.34315 13.6569C3.46197 14.7757 4.88743 15.5376 6.43928 15.8463C7.99113 16.155 9.59966 15.9965 11.0615 15.391C12.5233 14.7855 13.7727 13.7602 14.6518 12.4446C15.5308 11.129 16 9.58225 16 8C15.9972 5.87913 15.1534 3.84594 13.6537 2.34626C12.1541 0.846583 10.1209 0.00282218 8 0ZM12.47 5.80333L7.47 10.8033C7.4086 10.8656 7.33543 10.9151 7.25474 10.9488C7.17406 10.9826 7.08747 11 7 11C6.91254 11 6.82595 10.9826 6.74526 10.9488C6.66458 10.9151 6.59141 10.8656 6.53 10.8033L4.19667 8.47C4.07202 8.34535 4.00199 8.17628 4.00199 8C4.00199 7.82371 4.07202 7.65465 4.19667 7.53C4.32132 7.40535 4.49039 7.33532 4.66667 7.33532C4.84295 7.33532 5.01202 7.40535 5.13667 7.53L7 9.39L11.53 4.86333C11.6547 4.73868 11.8237 4.66865 12 4.66865C12.1763 4.66865 12.3453 4.73868 12.47 4.86333C12.5947 4.98798 12.6647 5.15705 12.6647 5.33333C12.6647 5.50962 12.5947 5.67868 12.47 5.80333Z" fill="#121C27"></path>
                                                    <path d="M12.3273 5.98823L7.5926 10.6828C7.53446 10.7413 7.46517 10.7878 7.38876 10.8194C7.31236 10.8511 7.23036 10.8675 7.14754 10.8675C7.06472 10.8675 6.98272 10.8511 6.90632 10.8194C6.82991 10.7878 6.76062 10.7413 6.70248 10.6828L4.49295 8.49202C4.37491 8.37498 4.30859 8.21624 4.30859 8.05072C4.30859 7.88521 4.37491 7.72647 4.49295 7.60943C4.61098 7.49239 4.77108 7.42664 4.93801 7.42664C5.10494 7.42664 5.26503 7.49239 5.38307 7.60943L7.14754 9.35583L11.4372 5.10564C11.5552 4.9886 11.7153 4.92285 11.8823 4.92285C12.0492 4.92285 12.2093 4.9886 12.3273 5.10564C12.4454 5.22268 12.5117 5.38142 12.5117 5.54693C12.5117 5.71245 12.4454 5.87119 12.3273 5.98823Z" fill="white"></path>
                                                </svg>
                                                Project Management consultation
                                            </li>
                                            <li>
                                                <svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <path d="M8 0C6.41775 0 4.87103 0.469192 3.55544 1.34824C2.23985 2.22729 1.21447 3.47672 0.608967 4.93853C0.00346629 6.40034 -0.15496 8.00887 0.153721 9.56072C0.462403 11.1126 1.22433 12.538 2.34315 13.6569C3.46197 14.7757 4.88743 15.5376 6.43928 15.8463C7.99113 16.155 9.59966 15.9965 11.0615 15.391C12.5233 14.7855 13.7727 13.7602 14.6518 12.4446C15.5308 11.129 16 9.58225 16 8C15.9972 5.87913 15.1534 3.84594 13.6537 2.34626C12.1541 0.846583 10.1209 0.00282218 8 0ZM12.47 5.80333L7.47 10.8033C7.4086 10.8656 7.33543 10.9151 7.25474 10.9488C7.17406 10.9826 7.08747 11 7 11C6.91254 11 6.82595 10.9826 6.74526 10.9488C6.66458 10.9151 6.59141 10.8656 6.53 10.8033L4.19667 8.47C4.07202 8.34535 4.00199 8.17628 4.00199 8C4.00199 7.82371 4.07202 7.65465 4.19667 7.53C4.32132 7.40535 4.49039 7.33532 4.66667 7.33532C4.84295 7.33532 5.01202 7.40535 5.13667 7.53L7 9.39L11.53 4.86333C11.6547 4.73868 11.8237 4.66865 12 4.66865C12.1763 4.66865 12.3453 4.73868 12.47 4.86333C12.5947 4.98798 12.6647 5.15705 12.6647 5.33333C12.6647 5.50962 12.5947 5.67868 12.47 5.80333Z" fill="#121C27"></path>
                                                    <path d="M12.3273 5.98823L7.5926 10.6828C7.53446 10.7413 7.46517 10.7878 7.38876 10.8194C7.31236 10.8511 7.23036 10.8675 7.14754 10.8675C7.06472 10.8675 6.98272 10.8511 6.90632 10.8194C6.82991 10.7878 6.76062 10.7413 6.70248 10.6828L4.49295 8.49202C4.37491 8.37498 4.30859 8.21624 4.30859 8.05072C4.30859 7.88521 4.37491 7.72647 4.49295 7.60943C4.61098 7.49239 4.77108 7.42664 4.93801 7.42664C5.10494 7.42664 5.26503 7.49239 5.38307 7.60943L7.14754 9.35583L11.4372 5.10564C11.5552 4.9886 11.7153 4.92285 11.8823 4.92285C12.0492 4.92285 12.2093 4.9886 12.3273 5.10564C12.4454 5.22268 12.5117 5.38142 12.5117 5.54693C12.5117 5.71245 12.4454 5.87119 12.3273 5.98823Z" fill="white"></path>
                                                </svg>
                                                Assessment Report Analysis
                                            </li>
                                        </ul>
                                        <ul class="wow fadeInDown" data-wow-delay="300ms" data-wow-duration="1500ms" style="visibility: visible; animation-duration: 1500ms; animation-delay: 300ms; animation-name: fadeInDown;">
                                            <li>
                                                <svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <path d="M8 0C6.41775 0 4.87103 0.469192 3.55544 1.34824C2.23985 2.22729 1.21447 3.47672 0.608967 4.93853C0.00346629 6.40034 -0.15496 8.00887 0.153721 9.56072C0.462403 11.1126 1.22433 12.538 2.34315 13.6569C3.46197 14.7757 4.88743 15.5376 6.43928 15.8463C7.99113 16.155 9.59966 15.9965 11.0615 15.391C12.5233 14.7855 13.7727 13.7602 14.6518 12.4446C15.5308 11.129 16 9.58225 16 8C15.9972 5.87913 15.1534 3.84594 13.6537 2.34626C12.1541 0.846583 10.1209 0.00282218 8 0ZM12.47 5.80333L7.47 10.8033C7.4086 10.8656 7.33543 10.9151 7.25474 10.9488C7.17406 10.9826 7.08747 11 7 11C6.91254 11 6.82595 10.9826 6.74526 10.9488C6.66458 10.9151 6.59141 10.8656 6.53 10.8033L4.19667 8.47C4.07202 8.34535 4.00199 8.17628 4.00199 8C4.00199 7.82371 4.07202 7.65465 4.19667 7.53C4.32132 7.40535 4.49039 7.33532 4.66667 7.33532C4.84295 7.33532 5.01202 7.40535 5.13667 7.53L7 9.39L11.53 4.86333C11.6547 4.73868 11.8237 4.66865 12 4.66865C12.1763 4.66865 12.3453 4.73868 12.47 4.86333C12.5947 4.98798 12.6647 5.15705 12.6647 5.33333C12.6647 5.50962 12.5947 5.67868 12.47 5.80333Z" fill="#121C27"></path>
                                                    <path d="M12.3273 5.98823L7.5926 10.6828C7.53446 10.7413 7.46517 10.7878 7.38876 10.8194C7.31236 10.8511 7.23036 10.8675 7.14754 10.8675C7.06472 10.8675 6.98272 10.8511 6.90632 10.8194C6.82991 10.7878 6.76062 10.7413 6.70248 10.6828L4.49295 8.49202C4.37491 8.37498 4.30859 8.21624 4.30859 8.05072C4.30859 7.88521 4.37491 7.72647 4.49295 7.60943C4.61098 7.49239 4.77108 7.42664 4.93801 7.42664C5.10494 7.42664 5.26503 7.49239 5.38307 7.60943L7.14754 9.35583L11.4372 5.10564C11.5552 4.9886 11.7153 4.92285 11.8823 4.92285C12.0492 4.92285 12.2093 4.9886 12.3273 5.10564C12.4454 5.22268 12.5117 5.38142 12.5117 5.54693C12.5117 5.71245 12.4454 5.87119 12.3273 5.98823Z" fill="white"></path>
                                                </svg>
                                                Project Management consultations
                                            </li>
                                            <li>
                                                <svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <path d="M8 0C6.41775 0 4.87103 0.469192 3.55544 1.34824C2.23985 2.22729 1.21447 3.47672 0.608967 4.93853C0.00346629 6.40034 -0.15496 8.00887 0.153721 9.56072C0.462403 11.1126 1.22433 12.538 2.34315 13.6569C3.46197 14.7757 4.88743 15.5376 6.43928 15.8463C7.99113 16.155 9.59966 15.9965 11.0615 15.391C12.5233 14.7855 13.7727 13.7602 14.6518 12.4446C15.5308 11.129 16 9.58225 16 8C15.9972 5.87913 15.1534 3.84594 13.6537 2.34626C12.1541 0.846583 10.1209 0.00282218 8 0ZM12.47 5.80333L7.47 10.8033C7.4086 10.8656 7.33543 10.9151 7.25474 10.9488C7.17406 10.9826 7.08747 11 7 11C6.91254 11 6.82595 10.9826 6.74526 10.9488C6.66458 10.9151 6.59141 10.8656 6.53 10.8033L4.19667 8.47C4.07202 8.34535 4.00199 8.17628 4.00199 8C4.00199 7.82371 4.07202 7.65465 4.19667 7.53C4.32132 7.40535 4.49039 7.33532 4.66667 7.33532C4.84295 7.33532 5.01202 7.40535 5.13667 7.53L7 9.39L11.53 4.86333C11.6547 4.73868 11.8237 4.66865 12 4.66865C12.1763 4.66865 12.3453 4.73868 12.47 4.86333C12.5947 4.98798 12.6647 5.15705 12.6647 5.33333C12.6647 5.50962 12.5947 5.67868 12.47 5.80333Z" fill="#121C27"></path>
                                                    <path d="M12.3273 5.98823L7.5926 10.6828C7.53446 10.7413 7.46517 10.7878 7.38876 10.8194C7.31236 10.8511 7.23036 10.8675 7.14754 10.8675C7.06472 10.8675 6.98272 10.8511 6.90632 10.8194C6.82991 10.7878 6.76062 10.7413 6.70248 10.6828L4.49295 8.49202C4.37491 8.37498 4.30859 8.21624 4.30859 8.05072C4.30859 7.88521 4.37491 7.72647 4.49295 7.60943C4.61098 7.49239 4.77108 7.42664 4.93801 7.42664C5.10494 7.42664 5.26503 7.49239 5.38307 7.60943L7.14754 9.35583L11.4372 5.10564C11.5552 4.9886 11.7153 4.92285 11.8823 4.92285C12.0492 4.92285 12.2093 4.9886 12.3273 5.10564C12.4454 5.22268 12.5117 5.38142 12.5117 5.54693C12.5117 5.71245 12.4454 5.87119 12.3273 5.98823Z" fill="white"></path>
                                                </svg>
                                                Quality and Process Driven
                                            </li>
                                            <li>
                                                <svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <path d="M8 0C6.41775 0 4.87103 0.469192 3.55544 1.34824C2.23985 2.22729 1.21447 3.47672 0.608967 4.93853C0.00346629 6.40034 -0.15496 8.00887 0.153721 9.56072C0.462403 11.1126 1.22433 12.538 2.34315 13.6569C3.46197 14.7757 4.88743 15.5376 6.43928 15.8463C7.99113 16.155 9.59966 15.9965 11.0615 15.391C12.5233 14.7855 13.7727 13.7602 14.6518 12.4446C15.5308 11.129 16 9.58225 16 8C15.9972 5.87913 15.1534 3.84594 13.6537 2.34626C12.1541 0.846583 10.1209 0.00282218 8 0ZM12.47 5.80333L7.47 10.8033C7.4086 10.8656 7.33543 10.9151 7.25474 10.9488C7.17406 10.9826 7.08747 11 7 11C6.91254 11 6.82595 10.9826 6.74526 10.9488C6.66458 10.9151 6.59141 10.8656 6.53 10.8033L4.19667 8.47C4.07202 8.34535 4.00199 8.17628 4.00199 8C4.00199 7.82371 4.07202 7.65465 4.19667 7.53C4.32132 7.40535 4.49039 7.33532 4.66667 7.33532C4.84295 7.33532 5.01202 7.40535 5.13667 7.53L7 9.39L11.53 4.86333C11.6547 4.73868 11.8237 4.66865 12 4.66865C12.1763 4.66865 12.3453 4.73868 12.47 4.86333C12.5947 4.98798 12.6647 5.15705 12.6647 5.33333C12.6647 5.50962 12.5947 5.67868 12.47 5.80333Z" fill="#121C27"></path>
                                                    <path d="M12.3273 5.98823L7.5926 10.6828C7.53446 10.7413 7.46517 10.7878 7.38876 10.8194C7.31236 10.8511 7.23036 10.8675 7.14754 10.8675C7.06472 10.8675 6.98272 10.8511 6.90632 10.8194C6.82991 10.7878 6.76062 10.7413 6.70248 10.6828L4.49295 8.49202C4.37491 8.37498 4.30859 8.21624 4.30859 8.05072C4.30859 7.88521 4.37491 7.72647 4.49295 7.60943C4.61098 7.49239 4.77108 7.42664 4.93801 7.42664C5.10494 7.42664 5.26503 7.49239 5.38307 7.60943L7.14754 9.35583L11.4372 5.10564C11.5552 4.9886 11.7153 4.92285 11.8823 4.92285C12.0492 4.92285 12.2093 4.9886 12.3273 5.10564C12.4454 5.22268 12.5117 5.38142 12.5117 5.54693C12.5117 5.71245 12.4454 5.87119 12.3273 5.98823Z" fill="white"></path>
                                                </svg>
                                                Assessment Report Analysis
                                            </li>
                                        </ul>
                                    </div>
                                    <a href="page-about.html" class="btn-one wow fadeInDown words chars splitting" data-wow-delay="400ms" data-wow-duration="1500ms" data-splitting="" data-text="About Us" style="--word-total: 2; --char-total: 7; visibility: visible; animation-duration: 1500ms; animation-delay: 400ms; animation-name: fadeInDown;"><span class="word" data-word="About" style="--word-index: 0;"><span class="char" data-char="A" style="--char-index: 0;">A</span><span class="char" data-char="b" style="--char-index: 1;">b</span><span class="char" data-char="o" style="--char-index: 2;">o</span><span class="char" data-char="u" style="--char-index: 3;">u</span><span class="char" data-char="t" style="--char-index: 4;">t</span></span><span class="whitespace"> </span><span class="word" data-word="Us" style="--word-index: 1;"><span class="char" data-char="U" style="--char-index: 5;">U</span><span class="char" data-char="s" style="--char-index: 6;">s</span></span></a>
                                </div>
                            </div>

                            <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">
                                <div class="choose-twelve__content">
                                    <p>From
                                        advanced
                                        digital technologies to the forefront of sustainable solutions, we’re
                                        always exploring new ways to deliver
                                        exceptional value for a diverse range of clients. By bringing together the right
                                        teams,
                                        we uncover the best paths
                                        forward, elevating your vision of success through our digital agency services.
                                    </p>
                                    <div class="list mt-30 mb-40">
                                        <ul>
                                            <li>
                                                <svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <path d="M8 0C6.41775 0 4.87103 0.469192 3.55544 1.34824C2.23985 2.22729 1.21447 3.47672 0.608967 4.93853C0.00346629 6.40034 -0.15496 8.00887 0.153721 9.56072C0.462403 11.1126 1.22433 12.538 2.34315 13.6569C3.46197 14.7757 4.88743 15.5376 6.43928 15.8463C7.99113 16.155 9.59966 15.9965 11.0615 15.391C12.5233 14.7855 13.7727 13.7602 14.6518 12.4446C15.5308 11.129 16 9.58225 16 8C15.9972 5.87913 15.1534 3.84594 13.6537 2.34626C12.1541 0.846583 10.1209 0.00282218 8 0ZM12.47 5.80333L7.47 10.8033C7.4086 10.8656 7.33543 10.9151 7.25474 10.9488C7.17406 10.9826 7.08747 11 7 11C6.91254 11 6.82595 10.9826 6.74526 10.9488C6.66458 10.9151 6.59141 10.8656 6.53 10.8033L4.19667 8.47C4.07202 8.34535 4.00199 8.17628 4.00199 8C4.00199 7.82371 4.07202 7.65465 4.19667 7.53C4.32132 7.40535 4.49039 7.33532 4.66667 7.33532C4.84295 7.33532 5.01202 7.40535 5.13667 7.53L7 9.39L11.53 4.86333C11.6547 4.73868 11.8237 4.66865 12 4.66865C12.1763 4.66865 12.3453 4.73868 12.47 4.86333C12.5947 4.98798 12.6647 5.15705 12.6647 5.33333C12.6647 5.50962 12.5947 5.67868 12.47 5.80333Z" fill="#121C27"></path>
                                                    <path d="M12.3273 5.98823L7.5926 10.6828C7.53446 10.7413 7.46517 10.7878 7.38876 10.8194C7.31236 10.8511 7.23036 10.8675 7.14754 10.8675C7.06472 10.8675 6.98272 10.8511 6.90632 10.8194C6.82991 10.7878 6.76062 10.7413 6.70248 10.6828L4.49295 8.49202C4.37491 8.37498 4.30859 8.21624 4.30859 8.05072C4.30859 7.88521 4.37491 7.72647 4.49295 7.60943C4.61098 7.49239 4.77108 7.42664 4.93801 7.42664C5.10494 7.42664 5.26503 7.49239 5.38307 7.60943L7.14754 9.35583L11.4372 5.10564C11.5552 4.9886 11.7153 4.92285 11.8823 4.92285C12.0492 4.92285 12.2093 4.9886 12.3273 5.10564C12.4454 5.22268 12.5117 5.38142 12.5117 5.54693C12.5117 5.71245 12.4454 5.87119 12.3273 5.98823Z" fill="white"></path>
                                                </svg>
                                                Growth Method Analysis
                                            </li>
                                            <li>
                                                <svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <path d="M8 0C6.41775 0 4.87103 0.469192 3.55544 1.34824C2.23985 2.22729 1.21447 3.47672 0.608967 4.93853C0.00346629 6.40034 -0.15496 8.00887 0.153721 9.56072C0.462403 11.1126 1.22433 12.538 2.34315 13.6569C3.46197 14.7757 4.88743 15.5376 6.43928 15.8463C7.99113 16.155 9.59966 15.9965 11.0615 15.391C12.5233 14.7855 13.7727 13.7602 14.6518 12.4446C15.5308 11.129 16 9.58225 16 8C15.9972 5.87913 15.1534 3.84594 13.6537 2.34626C12.1541 0.846583 10.1209 0.00282218 8 0ZM12.47 5.80333L7.47 10.8033C7.4086 10.8656 7.33543 10.9151 7.25474 10.9488C7.17406 10.9826 7.08747 11 7 11C6.91254 11 6.82595 10.9826 6.74526 10.9488C6.66458 10.9151 6.59141 10.8656 6.53 10.8033L4.19667 8.47C4.07202 8.34535 4.00199 8.17628 4.00199 8C4.00199 7.82371 4.07202 7.65465 4.19667 7.53C4.32132 7.40535 4.49039 7.33532 4.66667 7.33532C4.84295 7.33532 5.01202 7.40535 5.13667 7.53L7 9.39L11.53 4.86333C11.6547 4.73868 11.8237 4.66865 12 4.66865C12.1763 4.66865 12.3453 4.73868 12.47 4.86333C12.5947 4.98798 12.6647 5.15705 12.6647 5.33333C12.6647 5.50962 12.5947 5.67868 12.47 5.80333Z" fill="#121C27"></path>
                                                    <path d="M12.3273 5.98823L7.5926 10.6828C7.53446 10.7413 7.46517 10.7878 7.38876 10.8194C7.31236 10.8511 7.23036 10.8675 7.14754 10.8675C7.06472 10.8675 6.98272 10.8511 6.90632 10.8194C6.82991 10.7878 6.76062 10.7413 6.70248 10.6828L4.49295 8.49202C4.37491 8.37498 4.30859 8.21624 4.30859 8.05072C4.30859 7.88521 4.37491 7.72647 4.49295 7.60943C4.61098 7.49239 4.77108 7.42664 4.93801 7.42664C5.10494 7.42664 5.26503 7.49239 5.38307 7.60943L7.14754 9.35583L11.4372 5.10564C11.5552 4.9886 11.7153 4.92285 11.8823 4.92285C12.0492 4.92285 12.2093 4.9886 12.3273 5.10564C12.4454 5.22268 12.5117 5.38142 12.5117 5.54693C12.5117 5.71245 12.4454 5.87119 12.3273 5.98823Z" fill="white"></path>
                                                </svg>
                                                Project Management consultation
                                            </li>
                                            <li>
                                                <svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <path d="M8 0C6.41775 0 4.87103 0.469192 3.55544 1.34824C2.23985 2.22729 1.21447 3.47672 0.608967 4.93853C0.00346629 6.40034 -0.15496 8.00887 0.153721 9.56072C0.462403 11.1126 1.22433 12.538 2.34315 13.6569C3.46197 14.7757 4.88743 15.5376 6.43928 15.8463C7.99113 16.155 9.59966 15.9965 11.0615 15.391C12.5233 14.7855 13.7727 13.7602 14.6518 12.4446C15.5308 11.129 16 9.58225 16 8C15.9972 5.87913 15.1534 3.84594 13.6537 2.34626C12.1541 0.846583 10.1209 0.00282218 8 0ZM12.47 5.80333L7.47 10.8033C7.4086 10.8656 7.33543 10.9151 7.25474 10.9488C7.17406 10.9826 7.08747 11 7 11C6.91254 11 6.82595 10.9826 6.74526 10.9488C6.66458 10.9151 6.59141 10.8656 6.53 10.8033L4.19667 8.47C4.07202 8.34535 4.00199 8.17628 4.00199 8C4.00199 7.82371 4.07202 7.65465 4.19667 7.53C4.32132 7.40535 4.49039 7.33532 4.66667 7.33532C4.84295 7.33532 5.01202 7.40535 5.13667 7.53L7 9.39L11.53 4.86333C11.6547 4.73868 11.8237 4.66865 12 4.66865C12.1763 4.66865 12.3453 4.73868 12.47 4.86333C12.5947 4.98798 12.6647 5.15705 12.6647 5.33333C12.6647 5.50962 12.5947 5.67868 12.47 5.80333Z" fill="#121C27"></path>
                                                    <path d="M12.3273 5.98823L7.5926 10.6828C7.53446 10.7413 7.46517 10.7878 7.38876 10.8194C7.31236 10.8511 7.23036 10.8675 7.14754 10.8675C7.06472 10.8675 6.98272 10.8511 6.90632 10.8194C6.82991 10.7878 6.76062 10.7413 6.70248 10.6828L4.49295 8.49202C4.37491 8.37498 4.30859 8.21624 4.30859 8.05072C4.30859 7.88521 4.37491 7.72647 4.49295 7.60943C4.61098 7.49239 4.77108 7.42664 4.93801 7.42664C5.10494 7.42664 5.26503 7.49239 5.38307 7.60943L7.14754 9.35583L11.4372 5.10564C11.5552 4.9886 11.7153 4.92285 11.8823 4.92285C12.0492 4.92285 12.2093 4.9886 12.3273 5.10564C12.4454 5.22268 12.5117 5.38142 12.5117 5.54693C12.5117 5.71245 12.4454 5.87119 12.3273 5.98823Z" fill="white"></path>
                                                </svg>
                                                Assessment Report Analysis
                                            </li>
                                        </ul>
                                        <ul>
                                            <li>
                                                <svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <path d="M8 0C6.41775 0 4.87103 0.469192 3.55544 1.34824C2.23985 2.22729 1.21447 3.47672 0.608967 4.93853C0.00346629 6.40034 -0.15496 8.00887 0.153721 9.56072C0.462403 11.1126 1.22433 12.538 2.34315 13.6569C3.46197 14.7757 4.88743 15.5376 6.43928 15.8463C7.99113 16.155 9.59966 15.9965 11.0615 15.391C12.5233 14.7855 13.7727 13.7602 14.6518 12.4446C15.5308 11.129 16 9.58225 16 8C15.9972 5.87913 15.1534 3.84594 13.6537 2.34626C12.1541 0.846583 10.1209 0.00282218 8 0ZM12.47 5.80333L7.47 10.8033C7.4086 10.8656 7.33543 10.9151 7.25474 10.9488C7.17406 10.9826 7.08747 11 7 11C6.91254 11 6.82595 10.9826 6.74526 10.9488C6.66458 10.9151 6.59141 10.8656 6.53 10.8033L4.19667 8.47C4.07202 8.34535 4.00199 8.17628 4.00199 8C4.00199 7.82371 4.07202 7.65465 4.19667 7.53C4.32132 7.40535 4.49039 7.33532 4.66667 7.33532C4.84295 7.33532 5.01202 7.40535 5.13667 7.53L7 9.39L11.53 4.86333C11.6547 4.73868 11.8237 4.66865 12 4.66865C12.1763 4.66865 12.3453 4.73868 12.47 4.86333C12.5947 4.98798 12.6647 5.15705 12.6647 5.33333C12.6647 5.50962 12.5947 5.67868 12.47 5.80333Z" fill="#121C27"></path>
                                                    <path d="M12.3273 5.98823L7.5926 10.6828C7.53446 10.7413 7.46517 10.7878 7.38876 10.8194C7.31236 10.8511 7.23036 10.8675 7.14754 10.8675C7.06472 10.8675 6.98272 10.8511 6.90632 10.8194C6.82991 10.7878 6.76062 10.7413 6.70248 10.6828L4.49295 8.49202C4.37491 8.37498 4.30859 8.21624 4.30859 8.05072C4.30859 7.88521 4.37491 7.72647 4.49295 7.60943C4.61098 7.49239 4.77108 7.42664 4.93801 7.42664C5.10494 7.42664 5.26503 7.49239 5.38307 7.60943L7.14754 9.35583L11.4372 5.10564C11.5552 4.9886 11.7153 4.92285 11.8823 4.92285C12.0492 4.92285 12.2093 4.9886 12.3273 5.10564C12.4454 5.22268 12.5117 5.38142 12.5117 5.54693C12.5117 5.71245 12.4454 5.87119 12.3273 5.98823Z" fill="white"></path>
                                                </svg>
                                                Project Management consultations
                                            </li>
                                            <li>
                                                <svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <path d="M8 0C6.41775 0 4.87103 0.469192 3.55544 1.34824C2.23985 2.22729 1.21447 3.47672 0.608967 4.93853C0.00346629 6.40034 -0.15496 8.00887 0.153721 9.56072C0.462403 11.1126 1.22433 12.538 2.34315 13.6569C3.46197 14.7757 4.88743 15.5376 6.43928 15.8463C7.99113 16.155 9.59966 15.9965 11.0615 15.391C12.5233 14.7855 13.7727 13.7602 14.6518 12.4446C15.5308 11.129 16 9.58225 16 8C15.9972 5.87913 15.1534 3.84594 13.6537 2.34626C12.1541 0.846583 10.1209 0.00282218 8 0ZM12.47 5.80333L7.47 10.8033C7.4086 10.8656 7.33543 10.9151 7.25474 10.9488C7.17406 10.9826 7.08747 11 7 11C6.91254 11 6.82595 10.9826 6.74526 10.9488C6.66458 10.9151 6.59141 10.8656 6.53 10.8033L4.19667 8.47C4.07202 8.34535 4.00199 8.17628 4.00199 8C4.00199 7.82371 4.07202 7.65465 4.19667 7.53C4.32132 7.40535 4.49039 7.33532 4.66667 7.33532C4.84295 7.33532 5.01202 7.40535 5.13667 7.53L7 9.39L11.53 4.86333C11.6547 4.73868 11.8237 4.66865 12 4.66865C12.1763 4.66865 12.3453 4.73868 12.47 4.86333C12.5947 4.98798 12.6647 5.15705 12.6647 5.33333C12.6647 5.50962 12.5947 5.67868 12.47 5.80333Z" fill="#121C27"></path>
                                                    <path d="M12.3273 5.98823L7.5926 10.6828C7.53446 10.7413 7.46517 10.7878 7.38876 10.8194C7.31236 10.8511 7.23036 10.8675 7.14754 10.8675C7.06472 10.8675 6.98272 10.8511 6.90632 10.8194C6.82991 10.7878 6.76062 10.7413 6.70248 10.6828L4.49295 8.49202C4.37491 8.37498 4.30859 8.21624 4.30859 8.05072C4.30859 7.88521 4.37491 7.72647 4.49295 7.60943C4.61098 7.49239 4.77108 7.42664 4.93801 7.42664C5.10494 7.42664 5.26503 7.49239 5.38307 7.60943L7.14754 9.35583L11.4372 5.10564C11.5552 4.9886 11.7153 4.92285 11.8823 4.92285C12.0492 4.92285 12.2093 4.9886 12.3273 5.10564C12.4454 5.22268 12.5117 5.38142 12.5117 5.54693C12.5117 5.71245 12.4454 5.87119 12.3273 5.98823Z" fill="white"></path>
                                                </svg>
                                                Quality and Process Driven
                                            </li>
                                            <li>
                                                <svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <path d="M8 0C6.41775 0 4.87103 0.469192 3.55544 1.34824C2.23985 2.22729 1.21447 3.47672 0.608967 4.93853C0.00346629 6.40034 -0.15496 8.00887 0.153721 9.56072C0.462403 11.1126 1.22433 12.538 2.34315 13.6569C3.46197 14.7757 4.88743 15.5376 6.43928 15.8463C7.99113 16.155 9.59966 15.9965 11.0615 15.391C12.5233 14.7855 13.7727 13.7602 14.6518 12.4446C15.5308 11.129 16 9.58225 16 8C15.9972 5.87913 15.1534 3.84594 13.6537 2.34626C12.1541 0.846583 10.1209 0.00282218 8 0ZM12.47 5.80333L7.47 10.8033C7.4086 10.8656 7.33543 10.9151 7.25474 10.9488C7.17406 10.9826 7.08747 11 7 11C6.91254 11 6.82595 10.9826 6.74526 10.9488C6.66458 10.9151 6.59141 10.8656 6.53 10.8033L4.19667 8.47C4.07202 8.34535 4.00199 8.17628 4.00199 8C4.00199 7.82371 4.07202 7.65465 4.19667 7.53C4.32132 7.40535 4.49039 7.33532 4.66667 7.33532C4.84295 7.33532 5.01202 7.40535 5.13667 7.53L7 9.39L11.53 4.86333C11.6547 4.73868 11.8237 4.66865 12 4.66865C12.1763 4.66865 12.3453 4.73868 12.47 4.86333C12.5947 4.98798 12.6647 5.15705 12.6647 5.33333C12.6647 5.50962 12.5947 5.67868 12.47 5.80333Z" fill="#121C27"></path>
                                                    <path d="M12.3273 5.98823L7.5926 10.6828C7.53446 10.7413 7.46517 10.7878 7.38876 10.8194C7.31236 10.8511 7.23036 10.8675 7.14754 10.8675C7.06472 10.8675 6.98272 10.8511 6.90632 10.8194C6.82991 10.7878 6.76062 10.7413 6.70248 10.6828L4.49295 8.49202C4.37491 8.37498 4.30859 8.21624 4.30859 8.05072C4.30859 7.88521 4.37491 7.72647 4.49295 7.60943C4.61098 7.49239 4.77108 7.42664 4.93801 7.42664C5.10494 7.42664 5.26503 7.49239 5.38307 7.60943L7.14754 9.35583L11.4372 5.10564C11.5552 4.9886 11.7153 4.92285 11.8823 4.92285C12.0492 4.92285 12.2093 4.9886 12.3273 5.10564C12.4454 5.22268 12.5117 5.38142 12.5117 5.54693C12.5117 5.71245 12.4454 5.87119 12.3273 5.98823Z" fill="white"></path>
                                                </svg>
                                                Assessment Report Analysis
                                            </li>
                                        </ul>
                                    </div>
                                    <a href="page-about.html" class="btn-one words chars splitting" data-splitting="" data-text="About Us" style="--word-total: 2; --char-total: 7;"><span class="word" data-word="About" style="--word-index: 0;"><span class="char" data-char="A" style="--char-index: 0;">A</span><span class="char" data-char="b" style="--char-index: 1;">b</span><span class="char" data-char="o" style="--char-index: 2;">o</span><span class="char" data-char="u" style="--char-index: 3;">u</span><span class="char" data-char="t" style="--char-index: 4;">t</span></span><span class="whitespace"> </span><span class="word" data-word="Us" style="--word-index: 1;"><span class="char" data-char="U" style="--char-index: 5;">U</span><span class="char" data-char="s" style="--char-index: 6;">s</span></span></a>
                                </div>
                            </div>

                            <div class="tab-pane fade" id="contact" role="tabpanel" aria-labelledby="contact-tab">
                                <div class="choose-twelve__content">
                                    <p>From
                                        advanced
                                        digital technologies to the forefront of sustainable solutions, we’re
                                        always exploring new ways to deliver
                                        exceptional value for a diverse range of clients. By bringing together the right
                                        teams,
                                        we uncover the best paths
                                        forward, elevating your vision of success through our digital agency services.
                                    </p>
                                    <div class="list mt-30 mb-40">
                                        <ul>
                                            <li>
                                                <svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <path d="M8 0C6.41775 0 4.87103 0.469192 3.55544 1.34824C2.23985 2.22729 1.21447 3.47672 0.608967 4.93853C0.00346629 6.40034 -0.15496 8.00887 0.153721 9.56072C0.462403 11.1126 1.22433 12.538 2.34315 13.6569C3.46197 14.7757 4.88743 15.5376 6.43928 15.8463C7.99113 16.155 9.59966 15.9965 11.0615 15.391C12.5233 14.7855 13.7727 13.7602 14.6518 12.4446C15.5308 11.129 16 9.58225 16 8C15.9972 5.87913 15.1534 3.84594 13.6537 2.34626C12.1541 0.846583 10.1209 0.00282218 8 0ZM12.47 5.80333L7.47 10.8033C7.4086 10.8656 7.33543 10.9151 7.25474 10.9488C7.17406 10.9826 7.08747 11 7 11C6.91254 11 6.82595 10.9826 6.74526 10.9488C6.66458 10.9151 6.59141 10.8656 6.53 10.8033L4.19667 8.47C4.07202 8.34535 4.00199 8.17628 4.00199 8C4.00199 7.82371 4.07202 7.65465 4.19667 7.53C4.32132 7.40535 4.49039 7.33532 4.66667 7.33532C4.84295 7.33532 5.01202 7.40535 5.13667 7.53L7 9.39L11.53 4.86333C11.6547 4.73868 11.8237 4.66865 12 4.66865C12.1763 4.66865 12.3453 4.73868 12.47 4.86333C12.5947 4.98798 12.6647 5.15705 12.6647 5.33333C12.6647 5.50962 12.5947 5.67868 12.47 5.80333Z" fill="#121C27"></path>
                                                    <path d="M12.3273 5.98823L7.5926 10.6828C7.53446 10.7413 7.46517 10.7878 7.38876 10.8194C7.31236 10.8511 7.23036 10.8675 7.14754 10.8675C7.06472 10.8675 6.98272 10.8511 6.90632 10.8194C6.82991 10.7878 6.76062 10.7413 6.70248 10.6828L4.49295 8.49202C4.37491 8.37498 4.30859 8.21624 4.30859 8.05072C4.30859 7.88521 4.37491 7.72647 4.49295 7.60943C4.61098 7.49239 4.77108 7.42664 4.93801 7.42664C5.10494 7.42664 5.26503 7.49239 5.38307 7.60943L7.14754 9.35583L11.4372 5.10564C11.5552 4.9886 11.7153 4.92285 11.8823 4.92285C12.0492 4.92285 12.2093 4.9886 12.3273 5.10564C12.4454 5.22268 12.5117 5.38142 12.5117 5.54693C12.5117 5.71245 12.4454 5.87119 12.3273 5.98823Z" fill="white"></path>
                                                </svg>
                                                Growth Method Analysis
                                            </li>
                                            <li>
                                                <svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <path d="M8 0C6.41775 0 4.87103 0.469192 3.55544 1.34824C2.23985 2.22729 1.21447 3.47672 0.608967 4.93853C0.00346629 6.40034 -0.15496 8.00887 0.153721 9.56072C0.462403 11.1126 1.22433 12.538 2.34315 13.6569C3.46197 14.7757 4.88743 15.5376 6.43928 15.8463C7.99113 16.155 9.59966 15.9965 11.0615 15.391C12.5233 14.7855 13.7727 13.7602 14.6518 12.4446C15.5308 11.129 16 9.58225 16 8C15.9972 5.87913 15.1534 3.84594 13.6537 2.34626C12.1541 0.846583 10.1209 0.00282218 8 0ZM12.47 5.80333L7.47 10.8033C7.4086 10.8656 7.33543 10.9151 7.25474 10.9488C7.17406 10.9826 7.08747 11 7 11C6.91254 11 6.82595 10.9826 6.74526 10.9488C6.66458 10.9151 6.59141 10.8656 6.53 10.8033L4.19667 8.47C4.07202 8.34535 4.00199 8.17628 4.00199 8C4.00199 7.82371 4.07202 7.65465 4.19667 7.53C4.32132 7.40535 4.49039 7.33532 4.66667 7.33532C4.84295 7.33532 5.01202 7.40535 5.13667 7.53L7 9.39L11.53 4.86333C11.6547 4.73868 11.8237 4.66865 12 4.66865C12.1763 4.66865 12.3453 4.73868 12.47 4.86333C12.5947 4.98798 12.6647 5.15705 12.6647 5.33333C12.6647 5.50962 12.5947 5.67868 12.47 5.80333Z" fill="#121C27"></path>
                                                    <path d="M12.3273 5.98823L7.5926 10.6828C7.53446 10.7413 7.46517 10.7878 7.38876 10.8194C7.31236 10.8511 7.23036 10.8675 7.14754 10.8675C7.06472 10.8675 6.98272 10.8511 6.90632 10.8194C6.82991 10.7878 6.76062 10.7413 6.70248 10.6828L4.49295 8.49202C4.37491 8.37498 4.30859 8.21624 4.30859 8.05072C4.30859 7.88521 4.37491 7.72647 4.49295 7.60943C4.61098 7.49239 4.77108 7.42664 4.93801 7.42664C5.10494 7.42664 5.26503 7.49239 5.38307 7.60943L7.14754 9.35583L11.4372 5.10564C11.5552 4.9886 11.7153 4.92285 11.8823 4.92285C12.0492 4.92285 12.2093 4.9886 12.3273 5.10564C12.4454 5.22268 12.5117 5.38142 12.5117 5.54693C12.5117 5.71245 12.4454 5.87119 12.3273 5.98823Z" fill="white"></path>
                                                </svg>
                                                Project Management consultation
                                            </li>
                                            <li>
                                                <svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <path d="M8 0C6.41775 0 4.87103 0.469192 3.55544 1.34824C2.23985 2.22729 1.21447 3.47672 0.608967 4.93853C0.00346629 6.40034 -0.15496 8.00887 0.153721 9.56072C0.462403 11.1126 1.22433 12.538 2.34315 13.6569C3.46197 14.7757 4.88743 15.5376 6.43928 15.8463C7.99113 16.155 9.59966 15.9965 11.0615 15.391C12.5233 14.7855 13.7727 13.7602 14.6518 12.4446C15.5308 11.129 16 9.58225 16 8C15.9972 5.87913 15.1534 3.84594 13.6537 2.34626C12.1541 0.846583 10.1209 0.00282218 8 0ZM12.47 5.80333L7.47 10.8033C7.4086 10.8656 7.33543 10.9151 7.25474 10.9488C7.17406 10.9826 7.08747 11 7 11C6.91254 11 6.82595 10.9826 6.74526 10.9488C6.66458 10.9151 6.59141 10.8656 6.53 10.8033L4.19667 8.47C4.07202 8.34535 4.00199 8.17628 4.00199 8C4.00199 7.82371 4.07202 7.65465 4.19667 7.53C4.32132 7.40535 4.49039 7.33532 4.66667 7.33532C4.84295 7.33532 5.01202 7.40535 5.13667 7.53L7 9.39L11.53 4.86333C11.6547 4.73868 11.8237 4.66865 12 4.66865C12.1763 4.66865 12.3453 4.73868 12.47 4.86333C12.5947 4.98798 12.6647 5.15705 12.6647 5.33333C12.6647 5.50962 12.5947 5.67868 12.47 5.80333Z" fill="#121C27"></path>
                                                    <path d="M12.3273 5.98823L7.5926 10.6828C7.53446 10.7413 7.46517 10.7878 7.38876 10.8194C7.31236 10.8511 7.23036 10.8675 7.14754 10.8675C7.06472 10.8675 6.98272 10.8511 6.90632 10.8194C6.82991 10.7878 6.76062 10.7413 6.70248 10.6828L4.49295 8.49202C4.37491 8.37498 4.30859 8.21624 4.30859 8.05072C4.30859 7.88521 4.37491 7.72647 4.49295 7.60943C4.61098 7.49239 4.77108 7.42664 4.93801 7.42664C5.10494 7.42664 5.26503 7.49239 5.38307 7.60943L7.14754 9.35583L11.4372 5.10564C11.5552 4.9886 11.7153 4.92285 11.8823 4.92285C12.0492 4.92285 12.2093 4.9886 12.3273 5.10564C12.4454 5.22268 12.5117 5.38142 12.5117 5.54693C12.5117 5.71245 12.4454 5.87119 12.3273 5.98823Z" fill="white"></path>
                                                </svg>
                                                Assessment Report Analysis
                                            </li>
                                        </ul>
                                        <ul>
                                            <li>
                                                <svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <path d="M8 0C6.41775 0 4.87103 0.469192 3.55544 1.34824C2.23985 2.22729 1.21447 3.47672 0.608967 4.93853C0.00346629 6.40034 -0.15496 8.00887 0.153721 9.56072C0.462403 11.1126 1.22433 12.538 2.34315 13.6569C3.46197 14.7757 4.88743 15.5376 6.43928 15.8463C7.99113 16.155 9.59966 15.9965 11.0615 15.391C12.5233 14.7855 13.7727 13.7602 14.6518 12.4446C15.5308 11.129 16 9.58225 16 8C15.9972 5.87913 15.1534 3.84594 13.6537 2.34626C12.1541 0.846583 10.1209 0.00282218 8 0ZM12.47 5.80333L7.47 10.8033C7.4086 10.8656 7.33543 10.9151 7.25474 10.9488C7.17406 10.9826 7.08747 11 7 11C6.91254 11 6.82595 10.9826 6.74526 10.9488C6.66458 10.9151 6.59141 10.8656 6.53 10.8033L4.19667 8.47C4.07202 8.34535 4.00199 8.17628 4.00199 8C4.00199 7.82371 4.07202 7.65465 4.19667 7.53C4.32132 7.40535 4.49039 7.33532 4.66667 7.33532C4.84295 7.33532 5.01202 7.40535 5.13667 7.53L7 9.39L11.53 4.86333C11.6547 4.73868 11.8237 4.66865 12 4.66865C12.1763 4.66865 12.3453 4.73868 12.47 4.86333C12.5947 4.98798 12.6647 5.15705 12.6647 5.33333C12.6647 5.50962 12.5947 5.67868 12.47 5.80333Z" fill="#121C27"></path>
                                                    <path d="M12.3273 5.98823L7.5926 10.6828C7.53446 10.7413 7.46517 10.7878 7.38876 10.8194C7.31236 10.8511 7.23036 10.8675 7.14754 10.8675C7.06472 10.8675 6.98272 10.8511 6.90632 10.8194C6.82991 10.7878 6.76062 10.7413 6.70248 10.6828L4.49295 8.49202C4.37491 8.37498 4.30859 8.21624 4.30859 8.05072C4.30859 7.88521 4.37491 7.72647 4.49295 7.60943C4.61098 7.49239 4.77108 7.42664 4.93801 7.42664C5.10494 7.42664 5.26503 7.49239 5.38307 7.60943L7.14754 9.35583L11.4372 5.10564C11.5552 4.9886 11.7153 4.92285 11.8823 4.92285C12.0492 4.92285 12.2093 4.9886 12.3273 5.10564C12.4454 5.22268 12.5117 5.38142 12.5117 5.54693C12.5117 5.71245 12.4454 5.87119 12.3273 5.98823Z" fill="white"></path>
                                                </svg>
                                                Project Management consultations
                                            </li>
                                            <li>
                                                <svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <path d="M8 0C6.41775 0 4.87103 0.469192 3.55544 1.34824C2.23985 2.22729 1.21447 3.47672 0.608967 4.93853C0.00346629 6.40034 -0.15496 8.00887 0.153721 9.56072C0.462403 11.1126 1.22433 12.538 2.34315 13.6569C3.46197 14.7757 4.88743 15.5376 6.43928 15.8463C7.99113 16.155 9.59966 15.9965 11.0615 15.391C12.5233 14.7855 13.7727 13.7602 14.6518 12.4446C15.5308 11.129 16 9.58225 16 8C15.9972 5.87913 15.1534 3.84594 13.6537 2.34626C12.1541 0.846583 10.1209 0.00282218 8 0ZM12.47 5.80333L7.47 10.8033C7.4086 10.8656 7.33543 10.9151 7.25474 10.9488C7.17406 10.9826 7.08747 11 7 11C6.91254 11 6.82595 10.9826 6.74526 10.9488C6.66458 10.9151 6.59141 10.8656 6.53 10.8033L4.19667 8.47C4.07202 8.34535 4.00199 8.17628 4.00199 8C4.00199 7.82371 4.07202 7.65465 4.19667 7.53C4.32132 7.40535 4.49039 7.33532 4.66667 7.33532C4.84295 7.33532 5.01202 7.40535 5.13667 7.53L7 9.39L11.53 4.86333C11.6547 4.73868 11.8237 4.66865 12 4.66865C12.1763 4.66865 12.3453 4.73868 12.47 4.86333C12.5947 4.98798 12.6647 5.15705 12.6647 5.33333C12.6647 5.50962 12.5947 5.67868 12.47 5.80333Z" fill="#121C27"></path>
                                                    <path d="M12.3273 5.98823L7.5926 10.6828C7.53446 10.7413 7.46517 10.7878 7.38876 10.8194C7.31236 10.8511 7.23036 10.8675 7.14754 10.8675C7.06472 10.8675 6.98272 10.8511 6.90632 10.8194C6.82991 10.7878 6.76062 10.7413 6.70248 10.6828L4.49295 8.49202C4.37491 8.37498 4.30859 8.21624 4.30859 8.05072C4.30859 7.88521 4.37491 7.72647 4.49295 7.60943C4.61098 7.49239 4.77108 7.42664 4.93801 7.42664C5.10494 7.42664 5.26503 7.49239 5.38307 7.60943L7.14754 9.35583L11.4372 5.10564C11.5552 4.9886 11.7153 4.92285 11.8823 4.92285C12.0492 4.92285 12.2093 4.9886 12.3273 5.10564C12.4454 5.22268 12.5117 5.38142 12.5117 5.54693C12.5117 5.71245 12.4454 5.87119 12.3273 5.98823Z" fill="white"></path>
                                                </svg>
                                                Quality and Process Driven
                                            </li>
                                            <li>
                                                <svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <path d="M8 0C6.41775 0 4.87103 0.469192 3.55544 1.34824C2.23985 2.22729 1.21447 3.47672 0.608967 4.93853C0.00346629 6.40034 -0.15496 8.00887 0.153721 9.56072C0.462403 11.1126 1.22433 12.538 2.34315 13.6569C3.46197 14.7757 4.88743 15.5376 6.43928 15.8463C7.99113 16.155 9.59966 15.9965 11.0615 15.391C12.5233 14.7855 13.7727 13.7602 14.6518 12.4446C15.5308 11.129 16 9.58225 16 8C15.9972 5.87913 15.1534 3.84594 13.6537 2.34626C12.1541 0.846583 10.1209 0.00282218 8 0ZM12.47 5.80333L7.47 10.8033C7.4086 10.8656 7.33543 10.9151 7.25474 10.9488C7.17406 10.9826 7.08747 11 7 11C6.91254 11 6.82595 10.9826 6.74526 10.9488C6.66458 10.9151 6.59141 10.8656 6.53 10.8033L4.19667 8.47C4.07202 8.34535 4.00199 8.17628 4.00199 8C4.00199 7.82371 4.07202 7.65465 4.19667 7.53C4.32132 7.40535 4.49039 7.33532 4.66667 7.33532C4.84295 7.33532 5.01202 7.40535 5.13667 7.53L7 9.39L11.53 4.86333C11.6547 4.73868 11.8237 4.66865 12 4.66865C12.1763 4.66865 12.3453 4.73868 12.47 4.86333C12.5947 4.98798 12.6647 5.15705 12.6647 5.33333C12.6647 5.50962 12.5947 5.67868 12.47 5.80333Z" fill="#121C27"></path>
                                                    <path d="M12.3273 5.98823L7.5926 10.6828C7.53446 10.7413 7.46517 10.7878 7.38876 10.8194C7.31236 10.8511 7.23036 10.8675 7.14754 10.8675C7.06472 10.8675 6.98272 10.8511 6.90632 10.8194C6.82991 10.7878 6.76062 10.7413 6.70248 10.6828L4.49295 8.49202C4.37491 8.37498 4.30859 8.21624 4.30859 8.05072C4.30859 7.88521 4.37491 7.72647 4.49295 7.60943C4.61098 7.49239 4.77108 7.42664 4.93801 7.42664C5.10494 7.42664 5.26503 7.49239 5.38307 7.60943L7.14754 9.35583L11.4372 5.10564C11.5552 4.9886 11.7153 4.92285 11.8823 4.92285C12.0492 4.92285 12.2093 4.9886 12.3273 5.10564C12.4454 5.22268 12.5117 5.38142 12.5117 5.54693C12.5117 5.71245 12.4454 5.87119 12.3273 5.98823Z" fill="white"></path>
                                                </svg>
                                                Assessment Report Analysis
                                            </li>
                                        </ul>
                                    </div>
                                    <a href="page-about.html" class="btn-one words chars splitting" data-splitting="" data-text="About Us" style="--word-total: 2; --char-total: 7;"><span class="word" data-word="About" style="--word-index: 0;"><span class="char" data-char="A" style="--char-index: 0;">A</span><span class="char" data-char="b" style="--char-index: 1;">b</span><span class="char" data-char="o" style="--char-index: 2;">o</span><span class="char" data-char="u" style="--char-index: 3;">u</span><span class="char" data-char="t" style="--char-index: 4;">t</span></span><span class="whitespace"> </span><span class="word" data-word="Us" style="--word-index: 1;"><span class="char" data-char="U" style="--char-index: 5;">U</span><span class="char" data-char="s" style="--char-index: 6;">s</span></span></a>
                                </div>
                            </div>

                            <div class="tab-pane fade" id="history" role="tabpanel" aria-labelledby="history-tab">
                                <div class="choose-twelve__content">
                                    <p>From
                                        advanced
                                        digital technologies to the forefront of sustainable solutions, we’re
                                        always exploring new ways to deliver
                                        exceptional value for a diverse range of clients. By bringing together the right
                                        teams,
                                        we uncover the best paths
                                        forward, elevating your vision of success through our digital agency services.
                                    </p>
                                    <div class="list mt-30 mb-40">
                                        <ul>
                                            <li>
                                                <svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <path d="M8 0C6.41775 0 4.87103 0.469192 3.55544 1.34824C2.23985 2.22729 1.21447 3.47672 0.608967 4.93853C0.00346629 6.40034 -0.15496 8.00887 0.153721 9.56072C0.462403 11.1126 1.22433 12.538 2.34315 13.6569C3.46197 14.7757 4.88743 15.5376 6.43928 15.8463C7.99113 16.155 9.59966 15.9965 11.0615 15.391C12.5233 14.7855 13.7727 13.7602 14.6518 12.4446C15.5308 11.129 16 9.58225 16 8C15.9972 5.87913 15.1534 3.84594 13.6537 2.34626C12.1541 0.846583 10.1209 0.00282218 8 0ZM12.47 5.80333L7.47 10.8033C7.4086 10.8656 7.33543 10.9151 7.25474 10.9488C7.17406 10.9826 7.08747 11 7 11C6.91254 11 6.82595 10.9826 6.74526 10.9488C6.66458 10.9151 6.59141 10.8656 6.53 10.8033L4.19667 8.47C4.07202 8.34535 4.00199 8.17628 4.00199 8C4.00199 7.82371 4.07202 7.65465 4.19667 7.53C4.32132 7.40535 4.49039 7.33532 4.66667 7.33532C4.84295 7.33532 5.01202 7.40535 5.13667 7.53L7 9.39L11.53 4.86333C11.6547 4.73868 11.8237 4.66865 12 4.66865C12.1763 4.66865 12.3453 4.73868 12.47 4.86333C12.5947 4.98798 12.6647 5.15705 12.6647 5.33333C12.6647 5.50962 12.5947 5.67868 12.47 5.80333Z" fill="#121C27"></path>
                                                    <path d="M12.3273 5.98823L7.5926 10.6828C7.53446 10.7413 7.46517 10.7878 7.38876 10.8194C7.31236 10.8511 7.23036 10.8675 7.14754 10.8675C7.06472 10.8675 6.98272 10.8511 6.90632 10.8194C6.82991 10.7878 6.76062 10.7413 6.70248 10.6828L4.49295 8.49202C4.37491 8.37498 4.30859 8.21624 4.30859 8.05072C4.30859 7.88521 4.37491 7.72647 4.49295 7.60943C4.61098 7.49239 4.77108 7.42664 4.93801 7.42664C5.10494 7.42664 5.26503 7.49239 5.38307 7.60943L7.14754 9.35583L11.4372 5.10564C11.5552 4.9886 11.7153 4.92285 11.8823 4.92285C12.0492 4.92285 12.2093 4.9886 12.3273 5.10564C12.4454 5.22268 12.5117 5.38142 12.5117 5.54693C12.5117 5.71245 12.4454 5.87119 12.3273 5.98823Z" fill="white"></path>
                                                </svg>
                                                Growth Method Analysis
                                            </li>
                                            <li>
                                                <svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <path d="M8 0C6.41775 0 4.87103 0.469192 3.55544 1.34824C2.23985 2.22729 1.21447 3.47672 0.608967 4.93853C0.00346629 6.40034 -0.15496 8.00887 0.153721 9.56072C0.462403 11.1126 1.22433 12.538 2.34315 13.6569C3.46197 14.7757 4.88743 15.5376 6.43928 15.8463C7.99113 16.155 9.59966 15.9965 11.0615 15.391C12.5233 14.7855 13.7727 13.7602 14.6518 12.4446C15.5308 11.129 16 9.58225 16 8C15.9972 5.87913 15.1534 3.84594 13.6537 2.34626C12.1541 0.846583 10.1209 0.00282218 8 0ZM12.47 5.80333L7.47 10.8033C7.4086 10.8656 7.33543 10.9151 7.25474 10.9488C7.17406 10.9826 7.08747 11 7 11C6.91254 11 6.82595 10.9826 6.74526 10.9488C6.66458 10.9151 6.59141 10.8656 6.53 10.8033L4.19667 8.47C4.07202 8.34535 4.00199 8.17628 4.00199 8C4.00199 7.82371 4.07202 7.65465 4.19667 7.53C4.32132 7.40535 4.49039 7.33532 4.66667 7.33532C4.84295 7.33532 5.01202 7.40535 5.13667 7.53L7 9.39L11.53 4.86333C11.6547 4.73868 11.8237 4.66865 12 4.66865C12.1763 4.66865 12.3453 4.73868 12.47 4.86333C12.5947 4.98798 12.6647 5.15705 12.6647 5.33333C12.6647 5.50962 12.5947 5.67868 12.47 5.80333Z" fill="#121C27"></path>
                                                    <path d="M12.3273 5.98823L7.5926 10.6828C7.53446 10.7413 7.46517 10.7878 7.38876 10.8194C7.31236 10.8511 7.23036 10.8675 7.14754 10.8675C7.06472 10.8675 6.98272 10.8511 6.90632 10.8194C6.82991 10.7878 6.76062 10.7413 6.70248 10.6828L4.49295 8.49202C4.37491 8.37498 4.30859 8.21624 4.30859 8.05072C4.30859 7.88521 4.37491 7.72647 4.49295 7.60943C4.61098 7.49239 4.77108 7.42664 4.93801 7.42664C5.10494 7.42664 5.26503 7.49239 5.38307 7.60943L7.14754 9.35583L11.4372 5.10564C11.5552 4.9886 11.7153 4.92285 11.8823 4.92285C12.0492 4.92285 12.2093 4.9886 12.3273 5.10564C12.4454 5.22268 12.5117 5.38142 12.5117 5.54693C12.5117 5.71245 12.4454 5.87119 12.3273 5.98823Z" fill="white"></path>
                                                </svg>
                                                Project Management consultation
                                            </li>
                                            <li>
                                                <svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <path d="M8 0C6.41775 0 4.87103 0.469192 3.55544 1.34824C2.23985 2.22729 1.21447 3.47672 0.608967 4.93853C0.00346629 6.40034 -0.15496 8.00887 0.153721 9.56072C0.462403 11.1126 1.22433 12.538 2.34315 13.6569C3.46197 14.7757 4.88743 15.5376 6.43928 15.8463C7.99113 16.155 9.59966 15.9965 11.0615 15.391C12.5233 14.7855 13.7727 13.7602 14.6518 12.4446C15.5308 11.129 16 9.58225 16 8C15.9972 5.87913 15.1534 3.84594 13.6537 2.34626C12.1541 0.846583 10.1209 0.00282218 8 0ZM12.47 5.80333L7.47 10.8033C7.4086 10.8656 7.33543 10.9151 7.25474 10.9488C7.17406 10.9826 7.08747 11 7 11C6.91254 11 6.82595 10.9826 6.74526 10.9488C6.66458 10.9151 6.59141 10.8656 6.53 10.8033L4.19667 8.47C4.07202 8.34535 4.00199 8.17628 4.00199 8C4.00199 7.82371 4.07202 7.65465 4.19667 7.53C4.32132 7.40535 4.49039 7.33532 4.66667 7.33532C4.84295 7.33532 5.01202 7.40535 5.13667 7.53L7 9.39L11.53 4.86333C11.6547 4.73868 11.8237 4.66865 12 4.66865C12.1763 4.66865 12.3453 4.73868 12.47 4.86333C12.5947 4.98798 12.6647 5.15705 12.6647 5.33333C12.6647 5.50962 12.5947 5.67868 12.47 5.80333Z" fill="#121C27"></path>
                                                    <path d="M12.3273 5.98823L7.5926 10.6828C7.53446 10.7413 7.46517 10.7878 7.38876 10.8194C7.31236 10.8511 7.23036 10.8675 7.14754 10.8675C7.06472 10.8675 6.98272 10.8511 6.90632 10.8194C6.82991 10.7878 6.76062 10.7413 6.70248 10.6828L4.49295 8.49202C4.37491 8.37498 4.30859 8.21624 4.30859 8.05072C4.30859 7.88521 4.37491 7.72647 4.49295 7.60943C4.61098 7.49239 4.77108 7.42664 4.93801 7.42664C5.10494 7.42664 5.26503 7.49239 5.38307 7.60943L7.14754 9.35583L11.4372 5.10564C11.5552 4.9886 11.7153 4.92285 11.8823 4.92285C12.0492 4.92285 12.2093 4.9886 12.3273 5.10564C12.4454 5.22268 12.5117 5.38142 12.5117 5.54693C12.5117 5.71245 12.4454 5.87119 12.3273 5.98823Z" fill="white"></path>
                                                </svg>
                                                Assessment Report Analysis
                                            </li>
                                        </ul>
                                        <ul>
                                            <li>
                                                <svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <path d="M8 0C6.41775 0 4.87103 0.469192 3.55544 1.34824C2.23985 2.22729 1.21447 3.47672 0.608967 4.93853C0.00346629 6.40034 -0.15496 8.00887 0.153721 9.56072C0.462403 11.1126 1.22433 12.538 2.34315 13.6569C3.46197 14.7757 4.88743 15.5376 6.43928 15.8463C7.99113 16.155 9.59966 15.9965 11.0615 15.391C12.5233 14.7855 13.7727 13.7602 14.6518 12.4446C15.5308 11.129 16 9.58225 16 8C15.9972 5.87913 15.1534 3.84594 13.6537 2.34626C12.1541 0.846583 10.1209 0.00282218 8 0ZM12.47 5.80333L7.47 10.8033C7.4086 10.8656 7.33543 10.9151 7.25474 10.9488C7.17406 10.9826 7.08747 11 7 11C6.91254 11 6.82595 10.9826 6.74526 10.9488C6.66458 10.9151 6.59141 10.8656 6.53 10.8033L4.19667 8.47C4.07202 8.34535 4.00199 8.17628 4.00199 8C4.00199 7.82371 4.07202 7.65465 4.19667 7.53C4.32132 7.40535 4.49039 7.33532 4.66667 7.33532C4.84295 7.33532 5.01202 7.40535 5.13667 7.53L7 9.39L11.53 4.86333C11.6547 4.73868 11.8237 4.66865 12 4.66865C12.1763 4.66865 12.3453 4.73868 12.47 4.86333C12.5947 4.98798 12.6647 5.15705 12.6647 5.33333C12.6647 5.50962 12.5947 5.67868 12.47 5.80333Z" fill="#121C27"></path>
                                                    <path d="M12.3273 5.98823L7.5926 10.6828C7.53446 10.7413 7.46517 10.7878 7.38876 10.8194C7.31236 10.8511 7.23036 10.8675 7.14754 10.8675C7.06472 10.8675 6.98272 10.8511 6.90632 10.8194C6.82991 10.7878 6.76062 10.7413 6.70248 10.6828L4.49295 8.49202C4.37491 8.37498 4.30859 8.21624 4.30859 8.05072C4.30859 7.88521 4.37491 7.72647 4.49295 7.60943C4.61098 7.49239 4.77108 7.42664 4.93801 7.42664C5.10494 7.42664 5.26503 7.49239 5.38307 7.60943L7.14754 9.35583L11.4372 5.10564C11.5552 4.9886 11.7153 4.92285 11.8823 4.92285C12.0492 4.92285 12.2093 4.9886 12.3273 5.10564C12.4454 5.22268 12.5117 5.38142 12.5117 5.54693C12.5117 5.71245 12.4454 5.87119 12.3273 5.98823Z" fill="white"></path>
                                                </svg>
                                                Project Management consultations
                                            </li>
                                            <li>
                                                <svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <path d="M8 0C6.41775 0 4.87103 0.469192 3.55544 1.34824C2.23985 2.22729 1.21447 3.47672 0.608967 4.93853C0.00346629 6.40034 -0.15496 8.00887 0.153721 9.56072C0.462403 11.1126 1.22433 12.538 2.34315 13.6569C3.46197 14.7757 4.88743 15.5376 6.43928 15.8463C7.99113 16.155 9.59966 15.9965 11.0615 15.391C12.5233 14.7855 13.7727 13.7602 14.6518 12.4446C15.5308 11.129 16 9.58225 16 8C15.9972 5.87913 15.1534 3.84594 13.6537 2.34626C12.1541 0.846583 10.1209 0.00282218 8 0ZM12.47 5.80333L7.47 10.8033C7.4086 10.8656 7.33543 10.9151 7.25474 10.9488C7.17406 10.9826 7.08747 11 7 11C6.91254 11 6.82595 10.9826 6.74526 10.9488C6.66458 10.9151 6.59141 10.8656 6.53 10.8033L4.19667 8.47C4.07202 8.34535 4.00199 8.17628 4.00199 8C4.00199 7.82371 4.07202 7.65465 4.19667 7.53C4.32132 7.40535 4.49039 7.33532 4.66667 7.33532C4.84295 7.33532 5.01202 7.40535 5.13667 7.53L7 9.39L11.53 4.86333C11.6547 4.73868 11.8237 4.66865 12 4.66865C12.1763 4.66865 12.3453 4.73868 12.47 4.86333C12.5947 4.98798 12.6647 5.15705 12.6647 5.33333C12.6647 5.50962 12.5947 5.67868 12.47 5.80333Z" fill="#121C27"></path>
                                                    <path d="M12.3273 5.98823L7.5926 10.6828C7.53446 10.7413 7.46517 10.7878 7.38876 10.8194C7.31236 10.8511 7.23036 10.8675 7.14754 10.8675C7.06472 10.8675 6.98272 10.8511 6.90632 10.8194C6.82991 10.7878 6.76062 10.7413 6.70248 10.6828L4.49295 8.49202C4.37491 8.37498 4.30859 8.21624 4.30859 8.05072C4.30859 7.88521 4.37491 7.72647 4.49295 7.60943C4.61098 7.49239 4.77108 7.42664 4.93801 7.42664C5.10494 7.42664 5.26503 7.49239 5.38307 7.60943L7.14754 9.35583L11.4372 5.10564C11.5552 4.9886 11.7153 4.92285 11.8823 4.92285C12.0492 4.92285 12.2093 4.9886 12.3273 5.10564C12.4454 5.22268 12.5117 5.38142 12.5117 5.54693C12.5117 5.71245 12.4454 5.87119 12.3273 5.98823Z" fill="white"></path>
                                                </svg>
                                                Quality and Process Driven
                                            </li>
                                            <li>
                                                <svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <path d="M8 0C6.41775 0 4.87103 0.469192 3.55544 1.34824C2.23985 2.22729 1.21447 3.47672 0.608967 4.93853C0.00346629 6.40034 -0.15496 8.00887 0.153721 9.56072C0.462403 11.1126 1.22433 12.538 2.34315 13.6569C3.46197 14.7757 4.88743 15.5376 6.43928 15.8463C7.99113 16.155 9.59966 15.9965 11.0615 15.391C12.5233 14.7855 13.7727 13.7602 14.6518 12.4446C15.5308 11.129 16 9.58225 16 8C15.9972 5.87913 15.1534 3.84594 13.6537 2.34626C12.1541 0.846583 10.1209 0.00282218 8 0ZM12.47 5.80333L7.47 10.8033C7.4086 10.8656 7.33543 10.9151 7.25474 10.9488C7.17406 10.9826 7.08747 11 7 11C6.91254 11 6.82595 10.9826 6.74526 10.9488C6.66458 10.9151 6.59141 10.8656 6.53 10.8033L4.19667 8.47C4.07202 8.34535 4.00199 8.17628 4.00199 8C4.00199 7.82371 4.07202 7.65465 4.19667 7.53C4.32132 7.40535 4.49039 7.33532 4.66667 7.33532C4.84295 7.33532 5.01202 7.40535 5.13667 7.53L7 9.39L11.53 4.86333C11.6547 4.73868 11.8237 4.66865 12 4.66865C12.1763 4.66865 12.3453 4.73868 12.47 4.86333C12.5947 4.98798 12.6647 5.15705 12.6647 5.33333C12.6647 5.50962 12.5947 5.67868 12.47 5.80333Z" fill="#121C27"></path>
                                                    <path d="M12.3273 5.98823L7.5926 10.6828C7.53446 10.7413 7.46517 10.7878 7.38876 10.8194C7.31236 10.8511 7.23036 10.8675 7.14754 10.8675C7.06472 10.8675 6.98272 10.8511 6.90632 10.8194C6.82991 10.7878 6.76062 10.7413 6.70248 10.6828L4.49295 8.49202C4.37491 8.37498 4.30859 8.21624 4.30859 8.05072C4.30859 7.88521 4.37491 7.72647 4.49295 7.60943C4.61098 7.49239 4.77108 7.42664 4.93801 7.42664C5.10494 7.42664 5.26503 7.49239 5.38307 7.60943L7.14754 9.35583L11.4372 5.10564C11.5552 4.9886 11.7153 4.92285 11.8823 4.92285C12.0492 4.92285 12.2093 4.9886 12.3273 5.10564C12.4454 5.22268 12.5117 5.38142 12.5117 5.54693C12.5117 5.71245 12.4454 5.87119 12.3273 5.98823Z" fill="white"></path>
                                                </svg>
                                                Assessment Report Analysis
                                            </li>
                                        </ul>
                                    </div>
                                    <a href="page-about.html" class="btn-one words chars splitting" data-splitting="" data-text="About Us" style="--word-total: 2; --char-total: 7;"><span class="word" data-word="About" style="--word-index: 0;"><span class="char" data-char="A" style="--char-index: 0;">A</span><span class="char" data-char="b" style="--char-index: 1;">b</span><span class="char" data-char="o" style="--char-index: 2;">o</span><span class="char" data-char="u" style="--char-index: 3;">u</span><span class="char" data-char="t" style="--char-index: 4;">t</span></span><span class="whitespace"> </span><span class="word" data-word="Us" style="--word-index: 1;"><span class="char" data-char="U" style="--char-index: 5;">U</span><span class="char" data-char="s" style="--char-index: 6;">s</span></span></a>
                                </div>
                            </div>
                        </div> --}}
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
