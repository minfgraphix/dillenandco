<!-- Header area start here -->
<header class="header-area header-two-area">
    <div class="container">
        <div class="header__main">
            <div class="menu-btns dark-area mr-20">
                <button class="menubars menubars-dark" type="button" data-bs-toggle="offcanvas" data-bs-target="#menubar">
                    <span></span>
                    <span></span>
                    <span></span>
                </button>
            </div>
            <a href="{{route('home')}}" class="logo">
                <img src="assets/images/logo/logo-light.png" alt="logo">
            </a>
            <div class="main-menu main-menu-light">
                <nav>
                    <ul>
                        <li>
                            <a href="{{route('home')}}" class="nav-link">Home</a>
                        </li>

                        <li>
                            <a href="{{route('insights')}}" class="nav-link">Featured Insights</a>
{{--                            <ul class="sub-menu">--}}
{{--                                <li><a href="#0">Our Leadership</a></li>--}}
{{--                                <li><a href="#0">Purpose, Mission & Values</a></li>--}}
{{--                                <li><a href="#0">How We Work</a></li>--}}
{{--                            </ul>--}}
                        </li>
                        <li>
                            <a href="{{route('about')}}" class="nav-link">About Us <i class="fa-solid fa-angle-down"></i></a>
                            <ul class="sub-menu">
                                <li><a href="{{route('who')}}">Who We Are</a></li>
                                <li><a href="{{route('leadership')}}">Our Leadership</a></li>
                                <li><a href="{{route('purpose')}}">Purpose, Mission & Values</a></li>
                                <li><a href="{{route('how')}}">How We Work</a></li>
                            </ul>
                        </li>
                        <li><a href="contact.html" class="nav-link">Location</a></li>


                        <li>
                            <a href="#0" class="nav-link">Dillenandco Blog <i class="fa-solid fa-angle-down"></i></a>
                            <ul class="sub-menu">
                                <li><a href="#0">Blog Grid</a></li>
                                <li><a href="#0">Blog Details</a></li>
                            </ul>
                        </li>
                    </ul>
                </nav>
                <div class="menu-btns dark-area mr-20">
                    <button class="search-trigger d-none d-lg-block">
                        <i class="fa-light fa-magnifying-glass"></i>
                    </button>
                </div>
            </div>
        </div>
    </div>
</header>

<style>
/* Remove or update these conflicting rules */
.header-area .main-menu nav ul li .sub-menu {
    position: absolute;
    top: 100%;
    left: 0;
    min-width: 200px;
    padding: 10px 0;
    opacity: 0;
    visibility: hidden;
    transform: translateY(20px);
    transition: all 0.3s ease;
    border-radius: 4px;
    z-index: 999;
    display: block;
    /* Dark theme styles */
    background: #1a1a1a !important;  /* Using !important to override any conflicts */
    box-shadow: 0 2px 15px rgba(0, 0, 0, 0.2);
}

.header-area .main-menu nav ul .sub-menu li a {
    display: block;
    padding: 8px 20px;
    font-size: 14px;
    transition: all 0.3s ease;
    text-align: left;
    /* Dark theme styles */
    color: #ffffff !important;  /* Using !important to override any conflicts */
    border-bottom: 1px solid rgba(255, 255, 255, 0.1);
}

.header-area .main-menu nav ul .sub-menu li:last-child a {
    border-bottom: none;
}

.header-area .main-menu nav ul .sub-menu li a:hover {
    background: rgba(255, 255, 255, 0.1);
    color: #0066ff !important;
    transform: translateX(5px);
}

/* Mobile submenu styles */
@media (max-width: 992px) {
    .header-area .main-menu nav ul .sub-menu {
        position: static;
        opacity: 1;
        visibility: visible;
        transform: none;
        box-shadow: none;
        background: #1a1a1a !important;
        padding-left: 15px;
        display: none;
    }

    .header-area .main-menu nav ul li.active > .sub-menu {
        display: block;
    }
}

.header-area .main-menu nav ul li {
    position: relative;
}

.header-area .main-menu nav ul li .sub-menu {
    position: absolute;
    top: 100%;
    left: 0;
    background: #ffffff;
    min-width: 200px;
    padding: 10px 0;
    box-shadow: 0 2px 15px rgba(0, 0, 0, 0.1);
    opacity: 0;
    visibility: hidden;
    transform: translateY(20px);
    transition: all 0.3s ease;
    border-radius: 4px;
    z-index: 999;
    display: block;
}

.header-area .main-menu nav ul li:hover > .sub-menu {
    opacity: 1;
    visibility: visible;
    transform: translateY(0);
}

.header-area .main-menu nav ul .sub-menu li {
    display: block;
    margin: 0;
    padding: 0;
}

.header-area .main-menu nav ul .sub-menu li a {
    display: block;
    padding: 8px 20px;
    color: #000000;
    font-size: 14px;
    transition: all 0.3s ease;
    text-align: left;
}

.header-area .main-menu nav ul .sub-menu li a:hover {
    background: rgba(0, 102, 255, 0.1);
    color: #0066ff;
    transform: translateX(5px);
}

/* Mobile submenu styles */
@media (max-width: 992px) {
    .header-area .main-menu nav ul .sub-menu {
        position: static;
        opacity: 1;
        visibility: visible;
        transform: none;
        box-shadow: none;
        background: rgba(0, 0, 0, 0.03);
        padding-left: 15px;
        display: none;
    }

    .header-area .main-menu nav ul li.active > .sub-menu {
        display: block;
    }
}
    /* Header specific styles */
    .header-area.header-two-area {
        width: 100%;
    }

    .header-area .container {
        display: flex;
        justify-content: center;
    }

    .header-area .header__main {
        display: flex;
        justify-content: space-between;
        align-items: center;
        width: 100%;
        padding: 1rem 0;
    }

    /* Navigation specific styles */
    .header-area .main-menu {
        display: flex;
        justify-content: center;
        flex: 1;
    }

    .header-area .main-menu nav {
        display: flex;
        justify-content: center;
        width: 100%;
        text-align: center;
    }

    .header-area .main-menu nav ul {
        display: flex;
        justify-content: center;
        align-items: center;
        gap: 2.5rem;
        padding: 0;
        margin: 0;
        list-style: none;
    }

    .header-area .nav-link {
        color: #000000 !important;
        text-decoration: none;
        padding: 0.5rem 1rem;
        transition: color 0.3s ease, transform 0.2s ease;
        position: relative;
        font-weight: 500;
        text-align: center;
        display: inline-block;
    }

    .header-area .nav-link:hover {
        color: #0066ff !important;
        transform: translateY(-2px);
    }

    .header-area .nav-link::after {
        content: '';
        position: absolute;
        width: 0;
        height: 2px;
        bottom: 0;
        left: 50%;
        background-color: #0066ff;
        transition: all 0.3s ease;
        transform: translateX(-50%);
    }

    .header-area .nav-link:hover::after {
        width: 100%;
    }

    /* Logo styles */
    .header-area .logo {
        flex: 0 0 auto;
        margin-right: 2rem;
    }

    /* Menu buttons styles */
    .header-area .menu-btns {
        flex: 0 0 auto;
    }

    /* Responsive styles */
    @media (max-width: 1200px) {
        .header-area .main-menu nav ul {
            gap: 1.5rem;
        }
    }

    @media (max-width: 992px) {
        .header-area .main-menu nav {
            display: none;
        }

        .header-area .header__main {
            justify-content: space-between;
        }

        .header-area .menu-btns {
            display: block !important;
        }
    }

    @media (max-width: 768px) {
        .header-area .container {
            padding: 0 15px;
        }

        .header-area .logo img {
            max-width: 120px;
        }
    }

    /* Mobile menu styles */
    .header-area .offcanvas {
        max-width: 300px;
    }

    .header-area .offcanvas .nav-link {
        display: block;
        padding: 1rem;
        border-bottom: 1px solid rgba(0,0,0,0.1);
        text-align: left;
        color: #000000 !important;
    }

    .header-area .offcanvas ul {
        flex-direction: column;
        align-items: flex-start;
        width: 100%;
    }

    .header-area .offcanvas .nav-link:hover {
        background-color: rgba(0,102,255,0.1);
    }

    /* Search trigger button */
    .header-area .search-trigger {
        color: #000000;
    }
</style>
<script>
    document.addEventListener('DOMContentLoaded', function() {
        // Check if the current route is not the homepage
        if (window.location.pathname !== '/') {
            // Add a wide background to the navigation bar
            const headerArea = document.querySelector('.header-area');
            if (headerArea) {
                headerArea.classList.add('wide-background');

                // Add the necessary CSS for the wide background
                const style = document.createElement('style');
                style.textContent = `
                    .header-area.wide-background {
                        background-color: #ffffff;
                        box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
                        width: 100%;
                    }

                    .header-area.wide-background .header__main {
                        padding: 15px 0;
                    }
                `;
                document.head.appendChild(style);
            }
        }
    });

    // Add submenu toggle functionality for mobile
document.addEventListener('DOMContentLoaded', function() {
    const menuItems = document.querySelectorAll('.main-menu nav ul li a');

    menuItems.forEach(item => {
        if (item.querySelector('.fa-angle-down')) {
            item.addEventListener('click', function(e) {
                if (window.innerWidth <= 992) {
                    e.preventDefault();
                    const parent = this.parentElement;
                    parent.classList.toggle('active');
                }
            });
        }
    });
});
</script>
