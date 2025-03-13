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
                        <li><a href="{{route('home')}}" class="nav-link">Home</a></li>
                        <li><a href="{{route('about')}}" class="nav-link">About</a></li>
                        <li><a href="#0" class="nav-link">Services</a></li>
                        <li><a href="#0" class="nav-link">Blog</a></li>
                        <li><a href="contact.html" class="nav-link">Contact</a></li>
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
</script>
