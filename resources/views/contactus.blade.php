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
                    <h5 class="title wow fadeInUp" data-wow-delay="200ms" data-wow-duration="1500ms">Contact us</h5>
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
                            <h2><a class="text-white">Get in touch with us</a></h2>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        
        <section class="contact-two-area pt-130 pb-130 bg-sub">
            <div class="container-lg">
                <div class="row g-4 g-xl-0 align-items-center">
                    <div class="col-xl-6 order-2 order-xl-1">
                        <div class="contact-two-left">
                            <div class="contact-two__content">
                                <div class="section-header mb-20">
                                    <h2 class="wow splt-txt words chars splitting animated" data-splitting="" style="--word-total: 5; --char-total: 18; visibility: visible;"><span class="word" data-word="Contact" style="--word-index: 0;"><span class="char" data-char="C" style="--char-index: 0;">C</span><span class="char" data-char="o" style="--char-index: 1;">o</span><span class="char" data-char="n" style="--char-index: 2;">n</span><span class="char" data-char="t" style="--char-index: 3;">t</span><span class="char" data-char="a" style="--char-index: 4;">a</span><span class="char" data-char="c" style="--char-index: 5;">c</span><span class="char" data-char="t" style="--char-index: 6;">t</span></span><span class="whitespace"> </span><span class="word" data-word="Us" style="--word-index: 1;"><span class="char" data-char="U" style="--char-index: 7;">U</span><span class="char" data-char="s" style="--char-index: 8;">s</span></span><span class="whitespace"> </span><span class="word" data-word="or" style="--word-index: 2;"><span class="char" data-char="o" style="--char-index: 9;">o</span><span class="char" data-char="r" style="--char-index: 10;">r</span></span><span class="whitespace"> </span><span class="word" data-word="Visit" style="--word-index: 3;"><span class="char" data-char="V" style="--char-index: 11;">V</span><span class="char" data-char="i" style="--char-index: 12;">i</span><span class="char" data-char="s" style="--char-index: 13;">s</span><span class="char" data-char="i" style="--char-index: 14;">i</span><span class="char" data-char="t" style="--char-index: 15;">t</span></span><span class="whitespace"> </span><span class="word" data-word="Us" style="--word-index: 4;"><span class="char" data-char="U" style="--char-index: 16;">U</span><span class="char" data-char="s" style="--char-index: 17;">s</span></span></h2>
                                </div>
                                <ul>
                                    <li class="wow fadeInUp" data-wow-delay="00ms" data-wow-duration="1500ms" style="visibility: visible; animation-duration: 1500ms; animation-delay: 0ms; animation-name: fadeInUp;">
                                        <svg width="15" height="15" viewBox="0 0 15 15" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M7.50079 0C4.50533 0 2.06836 2.43697 2.06836 5.4324C2.06836 9.14982 6.92985 14.6072 7.13684 14.8377C7.33125 15.0543 7.67068 15.0539 7.86475 14.8377C8.07173 14.6072 12.9332 9.14982 12.9332 5.4324C12.9332 2.43697 10.4962 0 7.50079 0ZM7.50079 8.1656C5.9937 8.1656 4.76763 6.93949 4.76763 5.4324C4.76763 3.92531 5.99373 2.69924 7.50079 2.69924C9.00785 2.69924 10.2339 3.92534 10.2339 5.43243C10.2339 6.93952 9.00785 8.1656 7.50079 8.1656Z" fill="#121C27"></path>
                                        </svg>

                                        <a href="#0">
                                            5th Floor, Atlantic Tower , Airport City, Accra
                                            </a>
                                    </li>
                                    <li class="wow fadeInUp" data-wow-delay="200ms" data-wow-duration="1500ms" style="visibility: visible; animation-duration: 1500ms; animation-delay: 200ms; animation-name: fadeInUp;">
                                        <svg width="15" height="15" viewBox="0 0 15 15" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M9.71865 8.12305L8.46237 9.38357C7.95293 9.8948 7.05656 9.90582 6.5361 9.38357L5.27977 8.12305L0.767578 12.6499C0.935537 12.7275 1.12072 12.7739 1.3176 12.7739H13.6809C13.8778 12.7739 14.0629 12.7276 14.2308 12.6499L9.71865 8.12305Z" fill="#121C27"></path>
                                            <path d="M13.6808 2.22656H1.31754C1.12066 2.22656 0.935479 2.27291 0.767578 2.35058L5.58917 7.18816C5.58949 7.18849 5.58987 7.18855 5.5902 7.18887C5.59052 7.18919 5.59058 7.18963 5.59058 7.18963L7.15834 8.76258C7.32486 8.9291 7.67355 8.9291 7.84008 8.76258L9.40752 7.18989C9.40752 7.18989 9.4079 7.18919 9.40822 7.18887C9.40822 7.18887 9.40893 7.18849 9.40925 7.18816L14.2307 2.35055C14.0628 2.27285 13.8777 2.22656 13.6808 2.22656Z" fill="#121C27"></path>
                                            <path d="M0.140215 2.96484C0.0533203 3.14057 0 3.33563 0 3.54457V11.4547C0 11.6637 0.0532617 11.8587 0.140186 12.0345L4.6602 7.49979L0.140215 2.96484Z" fill="#121C27"></path>
                                            <path d="M14.8598 2.96484L10.3398 7.49985L14.8598 12.0346C14.9467 11.8588 15 11.6638 15 11.4548V3.54463C15 3.33563 14.9467 3.14057 14.8598 2.96484Z" fill="#121C27"></path>
                                        </svg>

                                        <a href="mailto:accra@dillenandco.com">accra@dillenandco.com, +233 24 082 7857</a>
                                    </li>
                                </ul>
                            </div>
                            <div class="contact-two__form">
                                <form id="" name="contact_form" action="{{ route('contact.send') }}" method="post">
                                    @csrf
                                    <div class="row g-4 mb-4">
                                        <div class="col-6">
                                            <div class="input">
                                                <input name="name" class="required" type="text" placeholder="Enter Name">
                                            </div>
                                        </div>
                                        <div class="col-6">
                                            <div class="input">
                                                <input name="email" class="required email" type="email" placeholder="E-mail address">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row g-4 mb-4">
                                        <div class="col-12">
                                            <div class="input">
                                                <input name="phone" class="required" type="text" placeholder="Phone Number">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="textarea">
                                        <textarea name="message" placeholder="Message" id=""></textarea>
                                    </div>
                                    <button type="submit" class="btn-one mt-50" data-loading-text="Please wait...">Send message</button>
                                </form>
                            @if(session('success'))
                                <div class="alert alert-success mt-4">
                                    {{ session('success') }}
                                </div>
                            @endif

                            @if(session('error'))
                                <div class="alert alert-danger mt-4">
                                    {{ session('error') }}
                                </div>
                            @endif

                            @if ($errors->any())
                                <div class="alert alert-danger mt-4">
                                    <ul>
                                        @foreach ($errors->all() as $error)
                                            <li>{{ $error }}</li>
                                        @endforeach
                                    </ul>
                                </div>
                            @endif
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-6 order-1 order-xl-2">
                        <div class="contact-two__map">
                            <img src="assets/images/contact/map.png" alt="image">
                            <div class="location">
                                <img class="wow bounceIn" src="assets/images/contact/map-location.png" alt="image" style="visibility: visible; animation-name: bounceIn;">
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


        

        @include('layouts.getintouch')


    </main>

@endsection
