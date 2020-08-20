<header>
    <div class="header-container">
        <div class="header-items">
            <div id=logo-container>
                <img src="assets/imgs/logo.jpg" alt="Logo" id="main-logo">
            </div>
            <div class="burger-button side-right-pushy-button">
                <span id="burger-line-1"></span>
                <span id="burger-line-2"></span>
                <span id="burger-line-3"></span>
            </div>
             <div class="full-nav-items">
                <a class="nav-link <?php if($page == "pages/about-us.php"){ echo "active"; } ?>" href="./index.php?page=pages/about-us.php">About Us</a>
                <a class="nav-link <?php if($page == "pages/our-services.php"){ echo "active"; } ?>" href="./index.php?page=pages/our-services.php">Our Services</a>
                <a class="nav-link <?php if($page == "pages/testimonials.php"){ echo "active"; } ?>" href="./index.php?page=pages/testimonials.php">Testimonials</a> 
                <a class="nav-link <?php if($page == "pages/contact-us.php"){ echo "active"; } ?>" href="./index.php?page=pages/contact-us.php">Contact Us</a>
                <div class="nav-link phone">
                    <i class="fas fa-phone"></i>
                    <strong>01603 670909</strong>
                </div>
            </div>
        </div>
</header>

