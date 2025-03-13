<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dillen & Company</title>
    <!-- Favicon img -->
    <link rel="shortcut icon" href="assets/images/favicon.png">
    <!-- Bootstarp min css -->
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <!-- Mean menu css -->
    <link rel="stylesheet" href="assets/css/meanmenu.css">
    <!-- All min css -->
    <link rel="stylesheet" href="assets/css/all.min.css">
    <!-- Swiper bundle min css -->
    <link rel="stylesheet" href="assets/css/swiper-bundle.min.css">
    <!-- Magnigic popup css -->
    <link rel="stylesheet" href="assets/css/magnific-popup.css">
    <!-- Animate css -->
    <link rel="stylesheet" href="assets/css/animate.css">
    <!-- Splitting css -->
    <link rel="stylesheet" href="assets/css/splitting.css">
    <!-- Nice select css -->
    <link rel="stylesheet" href="assets/css/nice-select.css">
    <!-- Style css -->
    <link rel="stylesheet" href="assets/css/style.css">


</head>

<body>

<!-- Preloader area start -->
{{-- <div id="preloader">
    <div class="animation-preloader">
        <div class="spinner"></div>
        <div class="txt-loading">
            <span data-text-preloader="S" class="letters-loading">
                S
            </span>
            <span data-text-preloader="T" class="letters-loading">
                T
            </span>
            <span data-text-preloader="R" class="letters-loading">
                R
            </span>
            <span data-text-preloader="A" class="letters-loading">
                A
            </span>
            <span data-text-preloader="T" class="letters-loading">
                T
            </span>
            <span data-text-preloader="I" class="letters-loading">
                I
            </span>
            <span data-text-preloader="F" class="letters-loading">
                F
            </span>
            <span data-text-preloader="Y" class="letters-loading">
                Y
            </span>
        </div>
        <p class="text-center">Loading...</p>
    </div>
    <div class="loader">
        <div class="row">
            <div class="col-3 loader-section section-left">
                <div class="bg"></div>
            </div>
            <div class="col-3 loader-section section-left">
                <div class="bg"></div>
            </div>
            <div class="col-3 loader-section section-right">
                <div class="bg"></div>
            </div>
            <div class="col-3 loader-section section-right">
                <div class="bg"></div>
            </div>
        </div>
    </div>
</div> --}}
<!-- Preloader area end -->
<!-- Add this in the <head> section -->
    <style>
        /* Navigation styles */
        .main-menu nav {
            display: flex;
            justify-content: center;
            width: 100%;
        }
    
        .main-menu nav ul {
            display: flex;
            justify-content: center;
            align-items: center;
            gap: 2rem;
        }
    
        .header__main {
            display: flex;
            justify-content: space-between;
            align-items: left;
            width: 100%;
        }
    
        .logo {
            flex: 0 0 auto;
        }
    
        .main-menu {
            flex: 1;
            display: flex;
            justify-content: center;
        }
    
        .menu-btns {
            flex: 0 0 auto;
        }
    
        /* Banner title specific styles */
        .banner-two-area .title {
            color: black !important;
            font-size: 66px !important;
        }
    
        /* Responsive styles for banner title only */
        @media (max-width: 992px) {
            .banner-two-area .title {
                font-size: 48px !important;
            }
        }
    
        @media (max-width: 768px) {
            .banner-two-area .title {
                font-size: 36px !important;
            }
        }
    
        @media (max-width: 480px) {
            .banner-two-area .title {
                font-size: 28px !important;
            }
        }
    </style>

@include('layouts.mckinsey-nav')
<!-- Sidebar area start here -->
<div class="sidebar-area offcanvas offcanvas-end" id="menubar">
    <div class="offcanvas-header">
        <a href="index.html" class="logo"> <img src="assets/images/logo/logo-light.png" alt="logo"></a>
        <button type="button" class="btn-close" data-bs-dismiss="offcanvas"><i
                class="fa-regular fa-xmark"></i></button>
    </div>
    <div class="offcanvas-body sidebar__body">
        <div class="mobile-menu overflow-hidden"></div>
        <div class="d-none d-lg-block">
            <h5 class="text-white mb-20">About Us</h5>
            <p class="sidebar__text">Unleash the full potential of your website and elevate its online presence
                with our comprehensive consultation solutions.</p>
        </div>
        <div class="sidebar__contact-info mt-30">
            <h5 class="text-white mb-20">Contact Info</h5>
            <ul>
                <li><i class="fa-solid fa-location-dot"></i> <a href="#0">121 King Street, Melbourne</a></li>
                <li class="py-2"><i class="fa-solid fa-phone-volume"></i> <a href="tel:+912659302003">+91
                        2659302 003</a></li>
                <li><i class="fa-solid fa-paper-plane"></i> <a
                        href="/cdn-cgi/l/email-protection#f69f989099d895999b8697988fb6919b979f9ad895999b"><span
                            class="__cf_email__"
                            data-cfemail="751c1b131a5b161a1805141b0c351218141c195b161a18">[email&#160;protected]</span></a>
                </li>
            </ul>
        </div>
        <div class="sidebar__btns my-4">
            <a href="#">Sign Up</a>
            <a class="sign-in" href="#">Sign In</a>
        </div>
        <div class="sidebar__socials">
            <ul>
                <li>
                    <a href="#0">
                        <svg width="16" height="16" viewbox="0 0 16 16" fill="none"
                             xmlns="http://www.w3.org/2000/svg">
                            <path
                                d="M7.76562 0H8.20406C9.50719 0.0371875 10.8041 0.385625 11.9359 1.03531C13.3297 1.82094 14.4756 3.03625 15.1816 4.47188C15.6875 5.49438 15.9603 6.62656 16 7.76562V8.205C15.9647 9.38344 15.6775 10.5553 15.1419 11.6069C14.6209 12.6316 13.8803 13.5447 12.9794 14.2594C12.0306 15.0175 10.9072 15.5569 9.71937 15.8141C9.22219 15.9275 8.71313 15.9788 8.20438 16H7.795C6.40844 15.9609 5.03281 15.5628 3.84875 14.8387C2.44469 13.985 1.3125 12.6919 0.659063 11.1838C0.252187 10.255 0.0365625 9.2475 0 8.23531V7.79406C0.0359375 6.53 0.366875 5.27437 0.976875 4.16594C1.73094 2.78781 2.8975 1.64031 4.28937 0.911563C5.35844 0.34625 6.55844 0.041875 7.76562 0ZM3.40094 3.29594C4.59812 5.03813 5.79531 6.78 6.99188 8.52219C5.79563 9.91344 4.59812 11.3038 3.40219 12.6953C3.6325 12.6966 3.86313 12.695 4.09344 12.6962C4.13844 12.6884 4.20125 12.7166 4.23281 12.6722C5.27312 11.4641 6.3125 10.2553 7.35219 9.04656C8.18937 10.2625 9.02344 11.4809 9.86156 12.6962C10.7741 12.695 11.6866 12.6962 12.5988 12.6956C11.3594 10.8869 10.1119 9.08313 8.87594 7.27219C10.0203 5.94969 11.1578 4.62156 12.2987 3.29625C12.0281 3.29563 11.7578 3.29563 11.4872 3.29625C10.4987 4.44875 9.50437 5.59656 8.51844 6.75094C7.72031 5.60344 6.93437 4.44688 6.14062 3.29625C5.2275 3.29563 4.31437 3.29594 3.40094 3.29594Z"
                                fill="white"></path>
                        </svg>
                    </a>
                </li>
                <li>
                    <a href="#0">
                        <svg width="8" height="16" viewbox="0 0 8 16" fill="none"
                             xmlns="http://www.w3.org/2000/svg">
                            <path
                                d="M5.10223 8.99555V16H1.97333V8.99555H0V6.09778H1.97333V3.89334C1.97333 1.38667 3.46666 0 5.76 0C6.85333 0 8 0.195557 8 0.195557V2.65778H6.73778C5.49334 2.65778 5.10223 3.43111 5.10223 4.22222V6.09778H7.88444L7.44 8.99555H5.10223Z"
                                fill="white"></path>
                        </svg>
                    </a>
                </li>

                <li>
                    <a href="#0">
                        <svg width="16" height="16" viewbox="0 0 16 16" fill="none"
                             xmlns="http://www.w3.org/2000/svg">
                            <path
                                d="M3.58958 15.9911H0.222698V5.89045H3.58958V15.9911ZM3.92717 1.96389C3.92717 0.897859 3.08323 0.0361424 2.01719 0.000607979C0.933392 -0.0260429 0.0272588 0.826778 0.00060798 1.91058C-0.0260429 2.99438 0.826779 3.90051 1.91058 3.92716C3.01215 3.93605 3.9094 3.06546 3.92717 1.96389ZM15.9467 9.88807C15.9467 6.74327 13.9124 5.78383 12.1801 5.78383C10.963 5.7483 9.81701 6.34351 9.15074 7.35624V5.89932H5.89933V16H9.26622V10.7587C9.26622 10.7054 9.26622 10.6521 9.26622 10.5988C9.26622 10.5988 9.26622 10.5988 9.26622 10.5899C9.19515 9.51495 10.0124 8.58218 11.0874 8.51111C11.9668 8.51111 12.6331 9.07966 12.6331 10.6787V16H16L15.9556 9.89695L15.9467 9.88807Z"
                                fill="white"></path>
                        </svg>
                    </a>
                </li>

                <li>
                    <a href="#0">
                        <svg width="16" height="16" viewbox="0 0 16 16" fill="none"
                             xmlns="http://www.w3.org/2000/svg">
                            <path
                                d="M15.9466 4.69593C15.8843 3.41522 15.5906 2.27682 14.6563 1.34297C13.7219 0.409114 12.5829 0.11562 11.3014 0.053363C9.97553 -0.0177877 6.01557 -0.0177877 4.69855 0.053363C3.41713 0.11562 2.28699 0.409114 1.34372 1.34297C0.400455 2.27682 0.115684 3.41522 0.0533926 4.69593C-0.0177975 6.02111 -0.0177975 9.97887 0.0533926 11.3041C0.115684 12.5848 0.409354 13.7232 1.34372 14.657C2.28699 15.5909 3.41713 15.8844 4.69855 15.9466C6.02447 16.0178 9.98443 16.0178 11.3014 15.9466C12.5829 15.8844 13.7219 15.5909 14.6563 14.657C15.5906 13.7232 15.8843 12.5848 15.9466 11.3041C16.0178 9.97887 16.0178 6.02112 15.9466 4.70483V4.69593ZM7.99111 12.2201C5.65963 12.2201 3.76419 10.3257 3.76419 7.99555C3.76419 5.66536 5.65963 3.77098 7.99111 3.77098C10.3226 3.77098 12.218 5.66536 12.218 7.99555C12.218 10.3257 10.3226 12.2201 7.99111 12.2201ZM12.9032 3.99332C12.4138 3.99332 12.0133 3.5931 12.0133 3.10394C12.0133 2.61478 12.4049 2.21456 12.9032 2.21456C13.3926 2.21456 13.7931 2.61478 13.7931 3.10394C13.7931 3.5931 13.3926 3.99332 12.9032 3.99332ZM10.8832 7.99555C10.8832 9.58754 9.58399 10.886 7.99111 10.886C6.39823 10.886 5.09901 9.58754 5.09901 7.99555C5.09901 6.40355 6.39823 5.10505 7.99111 5.10505C9.58399 5.10505 10.8832 6.40355 10.8832 7.99555Z"
                                fill="white"></path>
                        </svg>
                    </a>
                </li>
            </ul>
        </div>
    </div>
</div>
<!-- Sidebar area end here -->

<!-- Fullscreen search area start here -->
<div class="search-wrap">
    <div class="search-inner">
        <i class="fa-light fa-xmark search-close" id="search-close"></i>
        <div class="search-cell">
            <form method="get">
                <div class="search-field-holder">
                    <input type="search" class="main-search-input" placeholder="Search...">
                </div>
            </form>
        </div>
    </div>
</div>
<!-- Fullscreen search area end here -->

@yield('content')
<footer class="footer-eleven-area ">
    <div class="footer-eleven-top ">
        <div class="container">
            <div class="wrp  ">
                {{--                <ul class="footer-menu">--}}
                {{--                    <li><a href="#0">Resources</a></li>--}}
                {{--                    <li><a href="#0">Documentation</a></li>--}}
                {{--                    <li><a href="#0">Developers</a></li>--}}
                {{--                    <li><a href="#0">Portfolio</a></li>--}}
                {{--                </ul>--}}
                {{--                <ul class="footer-info">--}}
                {{--                    <li><a href="#0"><svg width="18" height="18" viewBox="0 0 18 18" fill="none" xmlns="http://www.w3.org/2000/svg">--}}
                {{--                                <g clip-path="url(#clip0_1349_1447)">--}}
                {{--                                    <path d="M14.2263 11.1504C13.8577 10.7667 13.4133 10.5615 12.9422 10.5615C12.4749 10.5615 12.0266 10.7629 11.6429 11.1466L10.4424 12.3432C10.3437 12.2901 10.2449 12.2407 10.1499 12.1913C10.0131 12.1229 9.88397 12.0583 9.7738 11.9899C8.64929 11.2757 7.62735 10.345 6.6472 9.14067C6.17233 8.54043 5.85321 8.03516 5.62147 7.52229C5.93299 7.23736 6.22171 6.94104 6.50284 6.65611C6.60921 6.54974 6.71559 6.43957 6.82196 6.33319C7.61975 5.5354 7.61975 4.50206 6.82196 3.70427L5.78482 2.66714C5.66706 2.54937 5.54549 2.4278 5.43152 2.30623C5.20357 2.07069 4.96424 1.82755 4.7173 1.59961C4.34879 1.2349 3.90811 1.04115 3.44463 1.04115C2.98115 1.04115 2.53286 1.2349 2.15296 1.59961L2.14536 1.60721L0.853692 2.91027C0.367417 3.39655 0.0900887 3.9892 0.0293043 4.67682C-0.0618723 5.78613 0.264844 6.81947 0.515579 7.49569C1.13102 9.15587 2.05038 10.6945 3.42183 12.3432C5.0858 14.3301 7.08789 15.8991 9.3749 17.0047C10.2487 17.4187 11.415 17.9088 12.718 17.9924C12.7978 17.9962 12.8814 18 12.9574 18C13.835 18 14.572 17.6847 15.1494 17.0578C15.1532 17.0502 15.1608 17.0464 15.1646 17.0388C15.3622 16.7995 15.5901 16.583 15.8294 16.3512C15.9928 16.1955 16.16 16.0321 16.3233 15.8611C16.6994 15.4698 16.897 15.014 16.897 14.5467C16.897 14.0756 16.6956 13.6235 16.3119 13.2436L14.2263 11.1504ZM15.5863 15.1507C15.5825 15.1507 15.5825 15.1545 15.5863 15.1507C15.4381 15.3103 15.2862 15.4546 15.1228 15.6142C14.8759 15.8497 14.6252 16.0967 14.3896 16.374C14.0059 16.7843 13.5538 16.9781 12.9612 16.9781C12.9042 16.9781 12.8434 16.9781 12.7864 16.9743C11.6581 16.9021 10.6096 16.4614 9.82319 16.0853C7.67294 15.0444 5.78482 13.5665 4.21583 11.6936C2.92036 10.1322 2.05418 8.68859 1.48053 7.13859C1.12722 6.19263 0.998055 5.45562 1.05504 4.7604C1.09303 4.31591 1.26399 3.94741 1.57931 3.63209L2.87477 2.33662C3.06093 2.16187 3.25847 2.06689 3.45222 2.06689C3.69156 2.06689 3.88531 2.21125 4.00688 2.33282L4.01828 2.34422C4.25002 2.56076 4.47036 2.78491 4.7021 3.02424C4.81987 3.14581 4.94144 3.26738 5.06301 3.39275L6.10014 4.42988C6.50284 4.83258 6.50284 5.20488 6.10014 5.60758C5.98997 5.71775 5.8836 5.82792 5.77343 5.9343C5.45431 6.26101 5.15039 6.56493 4.81987 6.86126C4.81227 6.86886 4.80468 6.87265 4.80088 6.88025C4.47416 7.20697 4.53495 7.52609 4.60333 7.74263L4.61473 7.77682C4.88446 8.43025 5.26436 9.0457 5.84181 9.77891L5.84561 9.78271C6.89414 11.0744 7.99966 12.0811 9.21914 12.8523C9.3749 12.9511 9.53446 13.0309 9.68642 13.1069C9.82319 13.1752 9.95235 13.2398 10.0625 13.3082C10.0777 13.3158 10.0929 13.3272 10.1081 13.3348C10.2373 13.3994 10.3588 13.4298 10.4842 13.4298C10.7995 13.4298 10.9971 13.2322 11.0617 13.1676L12.3609 11.8684C12.4901 11.7392 12.6952 11.5834 12.9346 11.5834C13.1701 11.5834 13.3639 11.7316 13.4816 11.8608L13.4892 11.8684L15.5825 13.9616C15.9738 14.3491 15.9738 14.748 15.5863 15.1507ZM9.72821 4.28172C10.7236 4.44888 11.6277 4.91996 12.3495 5.64177C13.0714 6.36358 13.5386 7.26775 13.7096 8.2631C13.7514 8.51383 13.9679 8.68859 14.2149 8.68859C14.2453 8.68859 14.2718 8.68479 14.3022 8.68099C14.5834 8.6354 14.7695 8.36947 14.7239 8.08834C14.5188 6.88405 13.9489 5.78613 13.079 4.91616C12.209 4.04618 11.1111 3.47633 9.90677 3.27118C9.62564 3.22559 9.36351 3.41174 9.31412 3.68907C9.26473 3.9664 9.44708 4.23613 9.72821 4.28172ZM17.9797 7.94018C17.6416 5.95709 16.707 4.15255 15.271 2.71652C13.835 1.28049 12.0304 0.345932 10.0473 0.00781895C9.77 -0.0415684 9.50787 0.148383 9.45848 0.425712C9.41289 0.706839 9.59904 0.968972 9.88017 1.01836C11.6505 1.31848 13.2651 2.15807 14.5492 3.43834C15.8332 4.72241 16.669 6.33699 16.9692 8.10734C17.0109 8.35807 17.2275 8.53283 17.4744 8.53283C17.5048 8.53283 17.5314 8.52903 17.5618 8.52523C17.8391 8.48344 18.0291 8.21751 17.9797 7.94018Z" fill="white"></path>--}}
                {{--                                </g>--}}
                {{--                                <defs>--}}
                {{--                                    <clipPath id="clip0_1349_1447">--}}
                {{--                                        <rect width="18" height="18" fill="white"></rect>--}}
                {{--                                    </clipPath>--}}
                {{--                                </defs>--}}
                {{--                            </svg>--}}
                {{--                            (+1) 123 - 654 - 798</a></li>--}}
                {{--                    <li><a href="#0"><svg width="18" height="18" viewBox="0 0 18 18" fill="none" xmlns="http://www.w3.org/2000/svg">--}}
                {{--                                <g clip-path="url(#clip0_1349_1442)">--}}
                {{--                                    <path d="M17.7461 7.14828C17.748 7.13017 17.7482 7.11193 17.7471 7.09372C17.7535 6.98874 17.7107 6.88241 17.6223 6.8117L15.531 5.13795V4.31182C15.531 3.53529 14.8993 2.90355 14.1228 2.90355H12.7392L9.26842 0.125792C9.2683 0.125639 9.26821 0.125477 9.26809 0.125315C9.2005 0.0408678 9.10036 -0.00185522 8.99996 6.17832e-05C8.89958 -0.00185522 8.79943 0.0408588 8.73185 0.125315C8.73173 0.125468 8.73164 0.12563 8.73152 0.125792L5.26075 2.90355H3.87719C3.10066 2.90355 2.46892 3.53529 2.46892 4.31182V5.13795L0.377593 6.81169C0.289231 6.8824 0.246445 6.98873 0.252808 7.09371C0.251692 7.11192 0.251953 7.13016 0.253798 7.14827C0.25261 7.15978 0.251953 7.17146 0.251953 7.18329V16.4141C0.251953 17.2886 1.00275 18 1.92559 18H16.0743C16.9972 18 17.748 17.2886 17.748 16.4141V7.18329C17.748 7.17147 17.7473 7.15979 17.7461 7.14828ZM15.531 5.99592L16.9027 7.09371L15.531 8.19151V5.99592ZM8.99997 0.768896L11.6672 2.90353H6.33278L8.99997 0.768896ZM3.13878 4.3118C3.13878 3.90466 3.47005 3.57339 3.87719 3.57339H14.1228C14.5299 3.57339 14.8612 3.90466 14.8612 4.3118V5.30304C14.8612 5.30336 14.8611 5.30368 14.8612 5.30399V8.72762L8.99997 13.4185L3.13878 8.72763V4.3118ZM2.46892 5.99592V8.19151L1.09724 7.09371L2.46892 5.99592ZM0.921823 16.4141V7.8113L6.37313 12.1742L1.01874 16.8065C0.956671 16.6875 0.921823 16.5545 0.921823 16.4141ZM16.0743 17.3301H1.9256C1.78338 17.3301 1.64808 17.3028 1.52538 17.2539L6.905 12.5998L8.73153 14.0617C8.73165 14.0618 8.73174 14.062 8.73186 14.0621C8.798 14.1448 8.89533 14.1878 8.99356 14.1878C8.9957 14.1878 8.99783 14.1876 8.99997 14.1875C9.00211 14.1876 9.00426 14.1878 9.0064 14.1878C9.10463 14.1878 9.20196 14.1448 9.2681 14.0621C9.26822 14.062 9.26831 14.0618 9.26842 14.0617L11.095 12.5998L16.4746 17.2539C16.3519 17.3028 16.2166 17.3301 16.0743 17.3301ZM17.0781 16.4141C17.0781 16.5545 17.0433 16.6875 16.9812 16.8065L11.6268 12.1742L17.0781 7.81131V16.4141ZM5.55298 6.74254H12.4823C12.6673 6.74254 12.8173 6.59259 12.8173 6.4076C12.8173 6.22262 12.6673 6.07267 12.4823 6.07267H5.55298C5.36799 6.07267 5.21805 6.22262 5.21805 6.4076C5.21805 6.59258 5.36799 6.74254 5.55298 6.74254ZM12.8173 8.42276C12.8173 8.23777 12.6673 8.08782 12.4823 8.08782H5.55298C5.36799 8.08782 5.21805 8.23777 5.21805 8.42276C5.21805 8.60774 5.36799 8.75769 5.55298 8.75769H12.4823C12.6673 8.75769 12.8173 8.60774 12.8173 8.42276Z" fill="white"></path>--}}
                {{--                                </g>--}}
                {{--                                <defs>--}}
                {{--                                    <clipPath id="clip0_1349_1442">--}}
                {{--                                        <rect width="18" height="18" fill="white"></rect>--}}
                {{--                                    </clipPath>--}}
                {{--                                </defs>--}}
                {{--                            </svg>--}}
                {{--                            accra@dillenandco.com--}}
                {{--                        </a>--}}
                {{--                    </li>--}}
                {{--                </ul>--}}
            </div>
        </div>
    </div>
    <div class="container">
        <div class="footer-eleven__wrp mt-60">
            <div class="row g-5 m-0">
                <div class="col-lg-5">
                    <div class="footer-eleven-left">
                        <a href="" class="logo text-center">
                            <img src="assets/images/logo/logo-white.png" alt="logo">
                        </a>
                        <p class="mt-20 text">Subscribe and stay current with our latest insights</p>
                        <div class="input dark-area">
                            <input type="text" placeholder="Enter your e-amil">
                            <button>Send<i class="fa-thin fa-arrow-up-right"></i></button>
                        </div>
                    </div>
                </div>
                <div class="col-lg-7">
                    <div class="footer-eleven-righ mb-60">

                        <div class="row g-4">
                            <div class="col-md-4">

                                <div class="footer-eleven__item">
                                    <a href="#0" class="title ">Terms and Condition</a>

                                    <h5 class="title">Contact Us</h5>
                                    <ul>
                                        <li><a href="#0">accra@dillenandco.com</a></li>
                                        <li><a href="#0">+1 234 5644 5698</a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="footer-eleven__item">
                                    <a href="#0" class="title">Privacy Policy</a>

                                    <h5 class="title">Our Address</h5>
                                    <ul>
                                        <li><a href="#0">Old Wesbury 356, New York <br> 11230, United Stats</a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="footer-eleven__item">
                                    {{--                                    <a class="title">  </a>--}}

                                    <h5 class="title">Our Social</h5>
                                    <div class="socials">
                                        <a href="#"><i class="fa-brands fa-facebook-f"></i></a>
                                        <a href="#"><i class="fa-brands fa-instagram"></i></a>
                                        <a href="#"><i class="fa-brands fa-linkedin-in"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="footer-eleven-bottom">

                            <p>© {{date("Y")}}&nbsp;<a href="#0">Dillen and Company </a>, All Rights Reserved | powered by MinfInnovations</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</footer>



<!-- Back to top area start here -->
<div class="scroll-up">
    <svg class="scroll-circle svg-content" width="100%" height="100%" viewbox="-1 -1 102 102">
        <path d="M50,1 a49,49 0 0,1 0,98 a49,49 0 0,1 0,-98"></path>
    </svg>
</div>
<!-- Back to top area end here -->

<!-- Jquery 3.7.0 Min Js -->
<script data-cfasync="false" src="../../cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script>
<script src="assets/js/jquery-3.7.1.min.js"></script>
<!-- Bootstrap min Js -->
<script src="assets/js/bootstrap.min.js"></script>
<!-- Mean menu Js -->
<script src="assets/js/meanmenu.js"></script>
<!-- Swiper bundle min Js -->
<script src="assets/js/swiper-bundle.min.js"></script>
<!-- Counterup min Js -->
<script src="assets/js/jquery.counterup.min.js"></script>
<!-- Wow min Js -->
<script src="assets/js/wow.min.js"></script>
<!-- Magnific popup min Js -->
<script src="assets/js/magnific-popup.min.js"></script>
<!-- Nice select min Js -->
<script src="assets/js/nice-select.min.js"></script>
<!-- Isotope pkgd min Js -->
<script src="assets/js/isotope.pkgd.min.js"></script>
<!-- Parallax Js -->
<script src="assets/js/parallax.js"></script>
<!-- Splitting Js -->
<script src="assets/js/splitting.js"></script>
<!-- Waypoints Js -->
<script src="assets/js/jquery.waypoints.js"></script>
<!-- Gsap -->
<script src="assets/js/gsap/gsap.min.js"></script>
<script src="assets/js/gsap/ScrollTrigger.min.js"></script>
<script src="assets/js/gsap/ScrollSmoother.min.js"></script>
<!-- Script Js -->
<script src="assets/js/script.js"></script>
</body>

</html>
