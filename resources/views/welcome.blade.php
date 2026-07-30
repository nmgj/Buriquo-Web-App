<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>{{ __('Welcome') }} to {{ config('app.name') }}</title>

    <link rel="icon" href="/icon_app.svg" sizes="any">
    <link rel="icon" href="/icon_app.svg" type="image/svg+xml">
    <link rel="icon" href="/icon_app.svg">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css"
        crossorigin="anonymous" referrerpolicy="no-referrer">

    @fonts
    @vite(['resources/css/app.css', 'resources/css/style.css'])

</head>

<body class="bg-[#F7AA45] text-[#1b1b18] flex p-0 lg:justify-center flex-col">
    <header class="bg-[#FFFAFA] w-full mb-6 text-sm text-white shadow-md not-has-[nav]:hidden">
        <div class="w-full max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <nav class="flex items-center justify-between py-3 w-full">
                {{-- Left: Logo --}}
                <a class="flex items-center" href="{{ url('/') }}">
                    <img src="/icon_app.svg" alt="Buriquo Pizza" class="h-16 w-auto object-contain">
                </a>

                <div class="ml-auto flex items-center" id="navMenu">
                    <ul class="flex flex-wrap items-center gap-2 sm:gap-3 list-none m-0 p-0">
                        <li class="flex">
                            <x-button-header href="#aboutus">About Us</x-button-header>
                        </li>
                        <li class="flex">
                            <x-button-header href="#products">Products</x-button-header>
                        </li>
                        <li class="flex">
                            <x-button-header href="#contact">Contact Us</x-button-header>
                        </li>
                    </ul>
                </div>
            </nav>
        </div>
    </header>
    <div
        class="flex items-center justify-center w-full transition-opacity opacity-100 duration-750 lg:grow starting:opacity-0">
    </div>

    @if (Route::has('login'))
        <div class="h-14.5 hidden lg:block"></div>
    @endif

    <section class="hero d-flex align-items-center w-full">
        <div class="w-full max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 text-center text-white">
            <h1 class="fw-bold" data-aos="fade-up">Your Trusted Filipino Pizza Franchise</h1>
            <p class="lead mt-3" data-aos="fade-up">Over 40 Years of Quality, Taste, and Business Excellence</p>
            <a href="#franchise" class="btn btn-light btn-lg mt-3">Explore Franchise Models</a>
        </div>
    </section>


    <!-- WHY LOTSA -->
    <section id="aboutus" class="py-5 w-full">
        <div class="w-full max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-5">
                <h2 class="fw-bold">Why Choose Buriquo Pizza</h2>
                <p class="text-muted">Built for success, trusted by generations</p>
            </div>

            <div class="row g-4">

                <!-- OUR BRAND -->
                <div class="col-md-4" data-aos="fade-up">
                    <div class="info-card new-card">

                        <div class="card-header-title">
                            Our Brand
                        </div>

                        <div class="card-image">
                            <img src="assets/img/our-brand.jpg" alt="Our Brand" loading="lazy">
                        </div>

                        <div class="card-body-text">
                            <p>
                                Buriquo Pizza has over 40 years of proven experience in the Philippine
                                food industry, earning trust and loyalty nationwide.
                            </p>
                        </div>

                    </div>
                </div>

                <!-- OUR MENU -->
                <div class="col-md-4" data-aos="fade-up" data-aos-delay="150">
                    <div class="info-card new-card">

                        <div class="card-header-title">
                            Our Menu
                        </div>

                        <div class="card-image">
                            <img src="assets/img/our-menu.jpg" alt="Our Menu" loading="lazy">
                        </div>

                        <div class="card-body-text">
                            <p>
                                Recognized as the Filipino Pizza, our menu is designed to match
                                local taste preferences while staying affordable.
                            </p>
                        </div>

                    </div>
                </div>

                <!-- OUR SUPPORT -->
                <div class="col-md-4" data-aos="fade-up" data-aos-delay="300">
                    <div class="info-card new-card">

                        <div class="card-header-title">
                            Our Support
                        </div>

                        <div class="card-image">
                            <img src="assets/img/our-support.jpg" alt="Our Support" loading="lazy">
                        </div>

                        <div class="card-body-text">
                            <p>
                                We provide comprehensive franchise support including training,
                                operations, marketing, and continuous guidance.
                            </p>
                        </div>

                    </div>
                </div>

                <!-- add card -->

                <div class="row mt-5 text-center" data-aos="fade-up">

                    <div class="col-md-3 col-6 mb-4">
                        <div class="why-stat">
                            <h3>40</h3>
                            <p>Years of Experience</p>
                        </div>
                    </div>

                    <div class="col-md-3 col-6 mb-4">
                        <div class="why-stat">
                            <h3>100+</h3>
                            <p>Branches Nationwide</p>
                        </div>
                    </div>

                    <div class="col-md-3 col-6 mb-4">
                        <div class="why-stat">
                            <h3>Filipino</h3>
                            <p>Pizza Brand</p>
                        </div>
                    </div>

                    <div class="col-md-3 col-6 mb-4">
                        <div class="why-stat">
                            <h3>Proven</h3>
                            <p>Franchise System</p>
                        </div>
                    </div>

                </div>
                <!-- add card -->
                <!-- add card 2    -->
                <div class="why-commitment mt-5" data-aos="fade-up">
                    <p>
                        At Buriquo Pizza, we are committed to helping our franchise partners succeed
                        through a proven business model, continuous support, and a brand trusted
                        by Filipino families for generations.
                    </p>
                </div>
                <!-- add card 2    -->



            </div>
    </section>

    <!-- PRODUCTS -->
    <section id="products" class="py-5 w-full">
        <div class="w-full max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-5">
                <h2 class="fw-bold">Our Menu</h2>
                <p class="text-muted">Filipino favorites, crafted with quality</p>
            </div>

            <!-- ================= BEST SELLER ================= -->
            <div class="menu-section" data-category="best">
                <h2 class="menu-title mt-5">🍕 Best Seller</h2>
                <div class="menu-grid">
                    <div class="menu-card" data-name="BQ Special"
                        data-desc="A top choice! Signature crust with pizza sauce, pizza cheese, mozzarella, pure beef, pepperoni, spiced ham, mushrooms, pineapple tidbits, and green bell peppers.">
                        <img src="{{ asset('assets/img/products/best-seller/bq-special.png') }}" loading="lazy">
                        <h6>BQ Special</h6>
                    </div>

                    <div class="menu-card" data-name="Beef Overload"
                        data-desc="A top choice! Signature crust with pizza sauce, pizza cheese, mozzarella, pure beef, pepperoni, spiced ham, mushrooms, pineapple tidbits, and green bell peppers.">
                        <img src="{{ asset('assets/img/products/best-seller/bq-special.png') }}" loading="lazy">
                        <h6>Beef Overload</h6>
                    </div>

                    <div class="menu-card" data-name="Hawaiian"
                        data-desc="Our best seller! Signature crust with pizza sauce, pizza cheese, mozzarella, shredded ham, and pineapple tidbits.">
                        <img src="{{ asset('assets/img/products/best-seller/hawaiian.png') }}" loading="lazy">
                        <h6>Hawaiian</h6>
                    </div>

                    <div class="menu-card" data-name="Pepperoni"
                        data-desc="Everyone's Favorite! Signature crust with pizza sauce, pizza cheese, mozzarella, and pepperoni.">
                        <img src="{{ asset('assets/img/products/best-seller/pepperoni.png') }}" loading="lazy">
                        <h6>Pepperoni</h6>
                    </div>

                    <div class="menu-card" data-name="White Spinach"
                        data-desc="A preferred flavor! Signature crust with pizza sauce, pizza cheese, mozzarella, pure beef, mushrooms, and green bell peppers.">
                        <img src="{{ asset('assets/img/products/best-seller/spinach.png') }}" loading="lazy">
                        <h6>White Spinach</h6>
                    </div>
                </div>
            </div>

            <!-- ================= CLASSICS ================= -->
            <div class="menu-section" data-category="classics">
                <h2 class="menu-title mt-5">🍕 Classics</h2>
                <div class="menu-grid">
                    <div class="menu-card" data-name="Bacon Overload"
                        data-desc="Made with our signature pizza crust, layered with pizza sauce and pizza cheese, then topped with smoky bacon and pineapple tidbits.">
                        <img src="{{ asset('assets/img/products/classic/bacon-overload.png') }}" loading="lazy">
                        <h6>Bacon Overload</h6>
                    </div>

                    <div class="menu-card" data-name="Ham and Cheese"
                        data-desc="Made with our signature pizza crust, layered with pizza sauce and pizza cheese, then topped with spiced ham and pre-cut ham. ">
                        <img src="{{ asset('assets/img/products/classic/ham-and-cheese.png') }}" loading="lazy">
                        <h6>Ham and Cheese</h6>
                    </div>

                    <div class="menu-card" data-name="All Cheese"
                        data-desc="Made with our signature pizza crust, layered with pizza sauce and pizza cheese, then topped with mushrooms, pineapple tidbits, green bell peppers, and white onion rings.">
                        <img src="{{ asset('assets/img/products/classic/all-cheese.png') }}" loading="lazy">
                        <h6>All Cheese</h6>
                    </div>
                </div>
            </div>

            <!-- ================= Promo ================= -->
            <div class="menu-section" data-category="promo">
                <h4 class="menu-title mt-5">🍕 Promo</h4>
                <div class="menu-grid">
                    <div class="menu-card" data-name="Double Best Seller"
                        data-desc="Cheese Heaven! Signature crust with cheese sauce, pizza cheese, mozzarella, and coloured sliced cheese.">
                        <img src="{{ asset('assets/img/products/promo/double-bestseller.png') }}" loading="lazy">
                        <h6>All Cheese</h6>
                    </div>

                    <div class="menu-card" data-name="4 in 1 Pizza"
                        data-desc="All 4 Best Seller flavors in one pizza. Just Pepperoni, Hawaiian Delight, Pure Beef Special, and Great Manhattan.">
                        <img src="{{ asset('assets/img/products/promo/4-in-1.png') }}" loading="lazy">
                        <h6>4 in 1</h6>
                    </div>

                    <div class="menu-card" data-name="2 in 1 Pizza"
                        data-desc="Your choice of 2 of your favorite flavors in one pizza.">
                        <img src="assets/img/products/2 in 1.jpg" loading="lazy">
                        <h6>2 in 1</h6>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <!-- CONTACT -->


    <section class="contact-section w-full max-w-7xl mx-auto px-4 sm:px-6 lg:px-8" id="contact">
        <div class="w-full max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">

            <h1 class="contact-title">
                <b>Pizza Delivery Hotlines</b>
            </h1>

            <div class="contact-grid">
                <div class="contact-card">
                    <div class="contact-address">
                        <div>DINALUPIHAN, BATAAN</div>
                        <div>San Ramon Highway (7-Eleven Munisipyo)</div>
                        <div>9:30AM - 9:00PM</div>
                        <div class="highlight">Also available on: ordermo.ph</div>
                    </div>
                    <div class="contact-phone-list">
                        <a href="tel:0969-136-4287" class="contact-phone-link" role="button">
                            <i class="fa-solid fa-phone"></i>
                            <span>0969-136-4287 (Smart)</span>
                        </a>
                        <a href="tel:09437050457" class="contact-phone-link" role="button">
                            <i class="fa-solid fa-phone"></i>
                            <span>0943-705-0457 (Sun)</span>
                        </a>
                    </div>
                    <button type="button" class="contact-location-btn"
                        data-map-src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3856.2374839830904!2d120.45902907595054!3d14.86799318565065!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3396663dd35dd989%3A0x27216d9d167d652a!2sBURIQUO%20PIZZA!5e0!3m2!1sen!2sph!4v1785379604566!5m2!1sen!2sph">
                        <i class="fa-solid fa-map-location-dot me-2"></i>
                        Show Location
                    </button>
                </div>
                <div class="contact-card">
                    <div class="contact-address">
                        <div>DINALUPIHAN, BATAAN</div>
                        <div>San Ramon Highway (Public Market)</div>
                        <div>10:00AM - 8:30PM</div>
                        <div class="highlight">Also available on: ordermo.ph</div>
                    </div>
                    <div class="contact-phone-list">
                        <a href="tel:09610443988" class="contact-phone-link" role="button">
                            <i class="fa-solid fa-phone"></i>
                            <span>0961-044-3988 (Smart)</span>
                        </a>
                    </div>
                    <button type="button" class="contact-location-btn"
                        data-map-src="https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d241.01537827355617!2d120.4637782814837!3d14.867513638713435!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e0!3m2!1sen!2sph!4v1785391599641!5m2!1sen!2sph">
                        <i class="fa-solid fa-map-location-dot me-2"></i>
                        Show Location
                    </button>
                </div>
                <div class="contact-card">
                    <div class="contact-address">
                        <div>BALANGA, BATAAN</div>
                        <div>Don Manuel Banzon Ave., Doña Francisca (St. Joseph Hospital)</div>
                        <div>10:00AM - 9:00PM</div>
                        <div class="highlight">Also available on: ordermo.ph and Grab Food</div>
                    </div>
                    <div class="contact-phone-list">
                        <a href="tel:09324941746" class="contact-phone-link" role="button">
                            <i class="fa-solid fa-phone"></i>
                            <span>0932-494-1746 (Sun)</span>
                        </a>
                    </div>
                    <button type="button" class="contact-location-btn"
                        data-map-src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3859.556593856882!2d120.53909617594769!3d14.681086985814892!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3396410043ab4a7b%3A0xe34b6310c564f702!2sBURIQUO!5e0!3m2!1sen!2sph!4v1785391974138!5m2!1sen!2sph">
                        <i class="fa-solid fa-map-location-dot me-2"></i>
                        Show Location
                    </button>
                </div>
                <div class="contact-card">
                    <div class="contact-address">
                        <div>ORION, BATAAN</div>
                        <div>Arellano (Beside Jollibee)</div>
                        <div>10:00AM - 9:00PM</div>
                    </div>
                    <div class="contact-phone-list">
                        <a href="tel:09542468690" class="contact-phone-link" role="button">
                            <i class="fa-solid fa-phone"></i>
                            <span>0954-246-8690 (Globe)</span>
                        </a>
                    </div>
                    <button type="button" class="contact-location-btn"
                        data-map-src="https://www.google.com/maps/embed?pb=!1m16!1m12!1m3!1d625.8220591001665!2d120.57667127613837!3d14.621949368987208!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!2m1!1szagu%20orion!5e0!3m2!1sen!2sph!4v1785392144041!5m2!1sen!2sph">
                        <i class="fa-solid fa-map-location-dot me-2"></i>
                        Show Location
                    </button>
                </div>
                <div class="contact-card">
                    <div class="contact-address">
                        <div>LIMAY, BATAAN</div>
                        <div>Barangay Townsite (Municipal Hall)</div>
                        <div>9:00AM - 9:00PM</div>
                        <div class="highlight">Also available on: Limayan Food Grab and Paspas Delivery</div>
                    </div>
                    <div class="contact-phone-list">
                        <a href="tel:09297254812" class="contact-phone-link" role="button">
                            <i class="fa-solid fa-phone"></i>
                            <span>0929-725-4812 (Smart)</span>
                        </a>
                        <a href="tel:09543784007" class="contact-phone-link" role="button">
                            <i class="fa-solid fa-phone"></i>
                            <span>0954-378-4007 (Globe)</span>
                        </a>
                    </div>
                    <button type="button" class="contact-location-btn"
                        data-map-src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3861.6541814155453!2d120.59302607594586!3d14.561757785920108!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x33963c401546d89f%3A0xc2a9d671643e9147!2sBURIQUO%20PIZZA!5e0!3m2!1sen!2sph!4v1785391856966!5m2!1sen!2sph">
                        <i class="fa-solid fa-map-location-dot me-2"></i>
                        Show Location
                    </button>
                </div>
                <div class="contact-card">
                    <div class="contact-address">
                        <div>GUIGUINTO, BULACAN</div>
                        <div>Valley Road, Sta. Rita (Dali Grocery)</div>
                        <div>9:00AM - 9:00PM</div>
                        <div class="highlight">Also available on: Foodpanda, Grab Food, GOP Delivery Service</div>
                    </div>
                    <div class="contact-phone-list">
                        <a href="tel:09437050476" class="contact-phone-link" role="button">
                            <i class="fa-solid fa-phone"></i>
                            <span>0943-705-0476 (Sun)</span>
                        </a>
                        <a href="tel:09456007908" class="contact-phone-link" role="button">
                            <i class="fa-solid fa-phone"></i>
                            <span>0945-600-7908 (Globe)</span>
                        </a>
                    </div>
                    <button type="button" class="contact-location-btn"
                        data-map-src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d123403.31814698463!2d120.57857369335437!3d14.861488082742127!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3396530d6982abf1%3A0x20372268166c673a!2sBURIQUO!5e0!3m2!1sen!2sph!4v1785392344693!5m2!1sen!2sph">
                        <i class="fa-solid fa-map-location-dot me-2"></i>
                        Show Location
                    </button>
                </div>
                <div class="contact-card">
                    <div class="contact-address">
                        <div>PACO, MANILA</div>
                        <div>Paz St, 681 (PS bank)</div>
                        <div>9:00AM - 9:00PM</div>
                        <div class="highlight">Also available on: Grab Food</div>
                    </div>
                    <div class="contact-phone-list">
                        <a href="tel:09477372478" class="contact-phone-link" role="button">
                            <i class="fa-solid fa-phone"></i>
                            <span>0947-737-2478 (Smart)</span>
                        </a>
                    </div>
                    <button type="button" class="contact-location-btn"
                        data-map-src="https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d241.33454582786064!2d120.99519704118157!3d14.578965591366245!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e0!3m2!1sen!2sph!4v1785392439208!5m2!1sen!2sph">
                        <i class="fa-solid fa-map-location-dot me-2"></i>
                        Show Location
                    </button>
                </div>
            </div>
        </div>
    </section>

    <div class="contact-modal" id="contactMapModal" role="dialog" aria-modal="true" aria-label="Location map">
        <div class="contact-modal-dialog">
            <button type="button" class="contact-modal-close" aria-label="Close map">×</button>
            <iframe
                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3856.2374839830904!2d120.45902907595054!3d14.86799318565065!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3396663dd35dd989%3A0x27216d9d167d652a!2sBURIQUO%20PIZZA!5e0!3m2!1sen!2sph!4v1785379604566!5m2!1sen!2sph"
                loading="eager" allowfullscreen="" referrerpolicy="no-referrer-when-downgrade">
            </iframe>
        </div>
    </div>

    <footer class="site-footer w-full">
        <div class="w-full max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">

            <div class="row gy-4">

                <!-- BRAND -->
                <div class="col-lg-3 col-md-6">
                    <img src="/icon_app.svg" alt="Buriquo Pizza" class="footer-logo mb-3 h-20 w-auto object-contain"
                        loading="lazy">

                    <p class="footer-desc">
                        Buriquo pizza is a lorem ipsum dolor sit amet consectetur adipiscing elit.
                        Amet consectetur adipiscing elit quisque faucibus ex sapien.
                        Quisque faucibus ex sapien vitae pellentesque sem placerat.
                        Vitae pellentesque sem placerat in id cursus mi.
                    </p>
                </div>

                <!-- QUICK LINKS -->
                <div class="col-lg-3 col-md-6 footer-column">
                    <h6 class="footer-title">Quick Links</h6>

                    <ul class="footer-links">
                        <li><a href="#aboutus">About Us</a></li>
                        <li><a href="#products">Products</a></li>
                        <li><a href="#contact">Contact Us</a></li>
                    </ul>

                </div>

                <!-- SOCIAL MEDIA -->
                <div class="col-lg-3 col-md-6 footer-column">

                    <h6 class="footer-title">Follow Us</h6>

                    <ul class="footer-icon-list">

                        <li>
                            <a href="https://www.facebook.com/BuriquoPizzaBataanPH" target="_blank">
                                <span class="icon">
                                    <i class="fa-brands fa-facebook-f"></i>
                                </span>
                                Facebook
                            </a>
                        </li>

                        <li>
                            <a href="https://www.instagram.com/buriquopizza/" target="_blank">
                                <span class="icon">
                                    <i class="fa-brands fa-instagram"></i>
                                </span>
                                Instagram
                            </a>
                        </li>

                    </ul>

                </div>

                <!-- ORDER ONLINE -->
                <div class="col-lg-3 col-md-6 footer-column">

                    <h6 class="footer-title">Order Online</h6>

                    <div class="order-links">

                        <a href="https://www.grab.com/ph/food/" target="_blank">
                            <img src="assets/img/grab.jpg" alt="GrabFood">
                            GrabFood
                        </a>

                        <a href="https://www.foodpanda.ph/" target="_blank">
                            <img src="assets/img/foodpanda.png" alt="Foodpanda">
                            Foodpanda
                        </a>

                    </div>

                </div>

            </div>

            <hr class="footer-divider">

            <!-- NPC DATA PRIVACY COMPLIANCE -->

            <div class="footer-compliance">

                <div class="row align-items-center gy-3">

                    <div class="col-lg-8 col-md-7">

                        <div class="privacy-text">

                            <strong>Data Privacy Compliance</strong>

                            <p>
                                Buriquo Pizza respects your privacy and is committed to protecting your personal data
                                in accordance with the Philippine Data Privacy Act of 2012 (RA 10173).
                            </p>

                        </div>

                    </div>

                    <div class="col-lg-4 col-md-5 text-md-end text-center">

                        <div class="npc-badge">

                            <img src="assets/img/npc-seal.png" alt="NPC Registered Organization" loading="lazy">

                            <div class="npc-info">
                                <span>NPC Registered Organization</span>
                                <small>National Privacy Commission</small>
                            </div>

                        </div>

                    </div>

                </div>

            </div>

            <hr class="footer-divider">

            <div class="footer-bottom text-center">

                © 2026 Buriquo Pizza. All Rights Reserved.

            </div>

        </div>
    </footer>
</body>



</html>

<script>
    const sections = document.querySelectorAll("section[id]");
    const navLinks = document.querySelectorAll(".navbar .nav-link");

    function setActiveNav() {
        let scrollY = window.pageYOffset + 120; // offset dahil fixed navbar

        sections.forEach(section => {
            const sectionTop = section.offsetTop;
            const sectionHeight = section.offsetHeight;
            const sectionId = section.getAttribute("id");

            if (scrollY >= sectionTop && scrollY < sectionTop + sectionHeight) {
                navLinks.forEach(link => link.classList.remove("active"));

                const activeLink = document.querySelector(
                    '.navbar .nav-link[href="#' + sectionId + '"]'
                );
                if (activeLink) activeLink.classList.add("active");
            }
        });
    }

    window.addEventListener("scroll", setActiveNav);
    window.addEventListener("load", setActiveNav);

    const mapModal = document.getElementById('contactMapModal');
    const mapFrame = mapModal?.querySelector('iframe');

    document.querySelectorAll('.contact-location-btn').forEach(button => {
        button.addEventListener('click', () => {
            if (mapFrame && button.dataset.mapSrc) {
                mapFrame.src = button.dataset.mapSrc;
            }

            mapModal?.classList.add('is-open');
        });
    });

    const closeMapModal = () => mapModal?.classList.remove('is-open');

    mapModal?.querySelector('.contact-modal-close')?.addEventListener('click', closeMapModal);

    mapModal?.addEventListener('click', (event) => {
        if (event.target === mapModal) {
            closeMapModal();
        }
    });

    document.addEventListener('keydown', (event) => {
        if (event.key === 'Escape') {
            closeMapModal();
        }
    });
</script>