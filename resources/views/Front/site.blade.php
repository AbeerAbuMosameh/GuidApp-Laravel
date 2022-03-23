@extends('Front.layouts.main')
@section('title', 'main page ')

@section('header')
    <!-- ======= Header ======= -->
    <header id="header" class="header fixed-top">
        <div class="container-fluid container-xl d-flex align-items-center justify-content-between">

            <a href={{ route('Home') }} class="logo d-flex align-items-center">
                <img src={{ asset('Front/assets/img/logo.png') }} alt="">
                <span>GuidApp</span>
            </a>

            <nav id="navbar" class="navbar">
                <ul>
                    <li><a class="nav-link scrollto active" href={{ route('Home') }}>Home</a></li>
                    <li><a class="nav-link scrollto" href={{ asset('#about') }}>About</a></li>
                    <li><a class="nav-link scrollto" href={{ asset('#category') }}>Categories</a></li>
                    <li><a class="nav-link scrollto" href={{ asset('#features') }}>features</a></li>
                    <li><a class="nav-link scrollto" href={{ asset('#Photos') }}>Photos</a></li>
                    <li><a class="nav-link scrollto" href={{ asset('#testimonials') }}>Testimonials</a></li>
                    <li><a class="nav-link scrollto" href={{ route('login') }}>Login</a></li>
                </ul>
                <i class="bi bi-list mobile-nav-toggle"></i>
            </nav><!-- .navbar -->

        </div>
    </header><!-- End Header -->
@stop


@section('content')
    <main id="main">
        <!-- ======= Hero Section ======= -->
        <section id="hero" class="hero d-flex align-items-center">

            <div class="container">
                <div class="row">

                    <div class="col-lg-6 d-flex flex-column justify-content-center">
                        <h1 data-aos="fade-up">We provide all the needs that you want during your travel trip </h1>
                        <h2 data-aos="fade-up" data-aos-delay="400">We are team of talented designers making websites with
                            Bootstrap</h2>
                        <div data-aos="fade-up" data-aos-delay="600">
                            <div class="text-center text-lg-start">
                                <a href={{ asset('#about') }}
                                    class="btn-get-started scrollto d-inline-flex align-items-center justify-content-center align-self-center">
                                    <span>Get Started</span>
                                    <i class="bi bi-arrow-right"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 hero-img" data-aos="zoom-out" data-aos-delay="200">
                        <img src={{ asset('Front/assets/img/hero-img1.svg') }} class="img-fluid" alt="">
                    </div>
                </div>
            </div>



        </section><!-- End Hero Section -->

        <!-- ======= About Section ======= -->
        <section id="about" class="about">

            <div class="container" data-aos="fade-up">
                <div class="row gx-0">

                    <div class="col-lg-6 d-flex flex-column justify-content-center" data-aos="fade-up" data-aos-delay="200">
                        <div class="content">
                            <h3>Who We Are</h3>
                            <h2>Expedita voluptas omnis cupiditate totam eveniet nobis sint iste. Dolores est repellat
                                corrupti reprehenderit.</h2>
                            <p>
                                Quisquam vel ut sint cum eos hic dolores aperiam. Sed deserunt et. Inventore et et dolor
                                consequatur itaque ut voluptate sed et. Magnam nam ipsum tenetur suscipit voluptatum nam et
                                est corrupti.
                            </p>
                            <div class="text-center text-lg-start">
                                <a href={{ asset('#') }}
                                    class="btn-read-more d-inline-flex align-items-center justify-content-center align-self-center">
                                    <span>Read More</span>
                                    <i class="bi bi-arrow-right"></i>
                                </a>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-6 d-flex align-items-center" data-aos="zoom-out" data-aos-delay="200">
                        <img src={{ asset('Front/assets/img/about.png') }} class="img-fluid" alt=""
                            style="height:-webkit-fill-available;">
                    </div>

                </div>
            </div>

        </section><!-- End About Section -->

        <!-- ======= Category Section ======= -->
        <section id="category" class="values">

            <div class="container" data-aos="fade-up">

                <header class="section-header">
                    <h2>Our Categories</h2>
                    <p>All Categories we have available</p>
                </header>

                <div class="row">

                    @foreach ($categories as $category)

                        <div class="col-lg-4" data-aos="fade-up" data-aos-delay="200">

                            <a href="{{ url("/allStores/$category->id/$category->name") }}">
                                <div class="box">
                                    <img src={{ Storage::url($category->image) }} width="300px" height="200px" alt="">
                                    <h3>{{ $category->name }}</h3>
                                    <p>{{ $category->description }}</p>
                                </div>
                            </a>
                        </div>
                    @endforeach
                </div>

            </div>

        </section><!-- End Values Section -->

        <!-- ======= Features Section ======= -->
        <section id="features" class="features">

            <div class="container" data-aos="fade-up">

                <header class="section-header">
                    <h2>Features</h2>
                    <p>We offer you many advantages</p>
                </header>


                <!-- Feature Icons -->
                <div class="row feature-icons" data-aos="fade-up">
                    <div class="row">
                        <div class="col-xl-4 text-center" data-aos="fade-right" data-aos-delay="100">
                            <img src={{ asset('Front/assets/img/features-3.png') }} class="img-fluid p-4" alt="">
                        </div>

                        <div class="col-xl-8 d-flex content">
                            <div class="row align-self-center gy-4">

                                <div class="col-md-6 icon-box" data-aos="fade-up">
                                    <i class="ri-line-chart-line"></i>
                                    <div>
                                        <h4>Shopping convenience</h4>
                                        <p>We offer products of excellent quality, high quality, and wide variety to promote a better life for everyone and everywhere.</p>
                                    </div>
                                </div>

                                <div class="col-md-6 icon-box" data-aos="fade-up" data-aos-delay="100">
                                    <i class="ri-stack-line"></i>
                                    <div>
                                        <h4>Wide Choice</h4>
                                        <p>Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia
                                            deserunt</p>
                                    </div>
                                </div>

                                <div class="col-md-6 icon-box" data-aos="fade-up" data-aos-delay="200">
                                    <i class="ri-brush-4-line"></i>
                                    <div>
                                        <h4>Economies of large scale</h4>
                                        <p>Aut suscipit aut cum nemo deleniti aut omnis. Doloribus ut maiores omnis facere
                                        </p>
                                    </div>
                                </div>

                                <div class="col-md-6 icon-box" data-aos="fade-up" data-aos-delay="300">
                                    <i class="ri-magic-line"></i>
                                    <div>
                                        <h4>Large Volume of Sales</h4>
                                        <p>Expedita veritatis consequuntur nihil tempore laudantium vitae denat pacta</p>
                                    </div>
                                </div>

                                <div class="col-md-6 icon-box" data-aos="fade-up" data-aos-delay="400">
                                    <i class="ri-command-line"></i>
                                    <div>
                                        <h4>Customer services</h4>
                                        <p>Et fuga et deserunt et enim. Dolorem architecto ratione tensa raptor marte</p>
                                    </div>
                                </div>

                                <div class="col-md-6 icon-box" data-aos="fade-up" data-aos-delay="500">
                                    <i class="ri-radar-line"></i>
                                    <div>
                                        <h4>Efficiency in operations</h4>
                                        <p>We offer lowest and best price and best services to meet customer requirements and customer satisfaction.</p>
                                    </div>
                                </div>

                            </div>
                        </div>

                    </div>

                </div><!-- End Feature Icons -->

            </div>

        </section><!-- End Features Section -->


        <!-- ======= Photo Section ======= -->
        <section id="Photos" class="portfolio">

            <div class="container" data-aos="fade-up">

                <header class="section-header">
                    <h2>Photos</h2>
                    <p>Photos about Categories & Stores</p>
                </header>

                <div class="row" data-aos="fade-up" data-aos-delay="100">
                    <div class="col-lg-12 d-flex justify-content-center">
                        <ul id="portfolio-flters">
                            <li data-filter="*" class="filter-active">All</li>
                            <li data-filter=".filter-app">Categories</li>
                            <li data-filter=".filter-card">Stores</li>
                        </ul>
                    </div>
                </div>

                <div class="row gy-4 portfolio-container" data-aos="fade-up" data-aos-delay="200">
                    @foreach ($categories as $category)
                        <div class="col-lg-4 col-md-6 portfolio-item filter-app">
                            <div class="portfolio-wrap">
                                <img src={{ Storage::url($category->image) }} alt="" width="300px" height="200px">
                                <div class="portfolio-info">
                                    <h4>Category</h4>
                                    <p>{{ $category->name }}</p>
                                    <div class="portfolio-links">
                                        <a href={{ Storage::url($category->image) }} data-gallery="portfolioGallery"
                                            class="portfokio-lightbox" title="Category name : {{ $category->name }}"><i
                                                class="bi bi-plus"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach


                    @foreach ($stores as $store)
                        <div class="col-lg-4 col-md-6 portfolio-item filter-card">
                            <div class="portfolio-wrap">
                                <img src={{ Storage::url($store->image) }} alt="" width="300px" height="200px">
                                <div class="portfolio-info">
                                    <h4>Store</h4>
                                    <p>{{ $store->name }}</p>
                                    <div class="portfolio-links">
                                        <a href={{ Storage::url($store->image) }} data-gallery="portfolioGallery"
                                            class="portfokio-lightbox" title="Store name : {{ $store->name }}"><i
                                                class="bi bi-plus"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach



                </div>

            </div>

        </section><!-- End Photo Section -->

        <!-- ======= Testimonials Section ======= -->
        <section id="testimonials" class="testimonials">

            <div class="container" data-aos="fade-up">

                <header class="section-header">
                    <h2>Testimonials</h2>
                    <p>What they are saying about us</p>
                </header>

                <div class="testimonials-slider swiper" data-aos="fade-up" data-aos-delay="200">
                    <div class="swiper-wrapper">

                        <div class="swiper-slide">
                            <div class="testimonial-item">
                                <div class="stars">
                                    <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i
                                        class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i
                                        class="bi bi-star-fill"></i>
                                </div>
                                <p>
                                    Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the...
                                </p>
                                <div class="profile mt-auto">
                                    <img src={{ asset('Front/assets/img/testimonials/testimonials-1.png') }}
                                        class="testimonial-img" alt="">
                                    <h3>Abeer</h3>
                                    <h4>Ceo &amp; Founder</h4>
                                </div>
                            </div>
                        </div><!-- End testimonial item -->

                        <div class="swiper-slide">
                            <div class="testimonial-item">
                                <div class="stars">
                                    <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i
                                        class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i
                                        class="bi bi-star-fill"></i>
                                </div>
                                <p>
                                    Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the...
                                </p>
                                <div class="profile mt-auto">
                                    <img src={{ asset('Front/assets/img/testimonials/testimonials-2.jpg') }}
                                        class="testimonial-img" alt="">
                                    <h3>Sara </h3>
                                    <h4>Designer</h4>
                                </div>
                            </div>
                        </div><!-- End testimonial item -->

                        <div class="swiper-slide">
                            <div class="testimonial-item">
                                <div class="stars">
                                    <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i
                                        class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i
                                        class="bi bi-star-fill"></i>
                                </div>
                                <p>
                                    Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the...
                                </p>
                                <div class="profile mt-auto">
                                    <img src={{ asset('Front/assets/img/testimonials/testimonials-3.png') }}
                                        class="testimonial-img" alt="">
                                    <h3>Tasneem</h3>
                                    <h4>Store Owner</h4>
                                </div>
                            </div>
                        </div><!-- End testimonial item -->

                    </div>
                    <div class="swiper-pagination"></div>
                </div>

            </div>

        </section><!-- End Testimonials Section -->


        <!-- ======= Contact Section ======= -->
        <section id="contact" class="contact">

            <div class="container" data-aos="fade-up">

                <header class="section-header">
                    <h2>Contact</h2>
                    <p>Contact Us</p>
                </header>

                <div class="row gy-4">

                    <div class="col-lg-6">

                        <div class="row gy-4">
                            <div class="col-md-6">
                                <div class="info-box">
                                    <i class="bi bi-geo-alt"></i>
                                    <h3>Address</h3>
                                    <p>A108 Adam Street,<br>New York, NY 535022</p>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="info-box">
                                    <i class="bi bi-telephone"></i>
                                    <h3>Call Us</h3>
                                    <p>+1 5589 55488 55<br>+1 6678 254445 41</p>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="info-box">
                                    <i class="bi bi-envelope"></i>
                                    <h3>Email Us</h3>
                                    <p>info@example.com<br>contact@example.com</p>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="info-box">
                                    <i class="bi bi-clock"></i>
                                    <h3>Open Hours</h3>
                                    <p>Monday - Friday<br>9:00AM - 05:00PM</p>
                                </div>
                            </div>
                        </div>

                    </div>

                    <div class="col-lg-6">
                        <form action="forms/contact.php" method="post" class="php-email-form">
                            <div class="row gy-4">

                                <div class="col-md-6">
                                    <input type="text" name="name" class="form-control" placeholder="Your Name" required>
                                </div>

                                <div class="col-md-6 ">
                                    <input type="email" class="form-control" name="email" placeholder="Your Email"
                                        required>
                                </div>

                                <div class="col-md-12">
                                    <input type="text" class="form-control" name="subject" placeholder="Subject"
                                        required>
                                </div>

                                <div class="col-md-12">
                                    <textarea class="form-control" name="message" rows="6" placeholder="Message"
                                        required></textarea>
                                </div>

                                <div class="col-md-12 text-center">
                                    <div class="loading">Loading</div>
                                    <div class="error-message"></div>
                                    <div class="sent-message">Your message has been sent. Thank you!</div>

                                    <button type="submit">Send Message</button>
                                </div>

                            </div>
                        </form>

                    </div>

                </div>

            </div>

        </section><!-- End Contact Section -->

        <!-- ======= Footer ======= -->
        <footer id="footer" class="footer">
            <div class="footer-top">
                <div class="container">
                    <div class="row gy-4">
                        <div class="col-lg-5 col-md-12 footer-info">
                            <a href={{ asset('index.html') }} class="logo d-flex align-items-center">
                                <img src={{ asset('Front/assets/img/logo.png') }} alt="">
                                <span>Guid App</span>
                            </a>
                            <p>Cras fermentum odio eu feugiat lide par naso tierra. Justo eget nada terra videa magna derita
                                valies darta donna mare fermentum iaculis eu non diam phasellus.</p>
                            <div class="social-links mt-3">
                                <a href={{ asset('#') }} class="twitter"><i class="bi bi-twitter"></i></a>
                                <a href={{ asset('#') }} class="facebook"><i class="bi bi-facebook"></i></a>
                                <a href={{ asset('#') }} class="instagram"><i class="bi bi-instagram"></i></a>
                                <a href={{ asset('#') }} class="linkedin"><i class="bi bi-linkedin"></i></a>
                            </div>
                        </div>

                        <div class="col-lg-2 col-6 footer-links">
                            <h4>Useful Links</h4>
                            <ul>
                                <li><i class="bi bi-chevron-right"></i> <a href={{ asset('#') }}>Home</a></li>
                                <li><i class="bi bi-chevron-right"></i> <a href={{ asset('#') }}>About us</a></li>
                                <li><i class="bi bi-chevron-right"></i> <a href={{ asset('#') }}>Services</a></li>
                                <li><i class="bi bi-chevron-right"></i> <a href={{ asset('#') }}>Terms of service</a>
                                </li>
                                <li><i class="bi bi-chevron-right"></i> <a href={{ asset('#') }}>Privacy policy</a>
                                </li>
                            </ul>
                        </div>

                        <div class="col-lg-2 col-6 footer-links">
                            <h4>Our Services</h4>
                            <ul>
                                <li><i class="bi bi-chevron-right"></i> <a href={{ asset('#') }}>Web Design</a></li>
                                <li><i class="bi bi-chevron-right"></i> <a href={{ asset('#') }}>Web Development</a>
                                </li>
                                <li><i class="bi bi-chevron-right"></i> <a href={{ asset('#') }}>Product Management</a>
                                </li>
                                <li><i class="bi bi-chevron-right"></i> <a href={{ asset('#') }}>Marketing</a></li>
                                <li><i class="bi bi-chevron-right"></i> <a href={{ asset('#') }}>Graphic Design</a>
                                </li>
                            </ul>
                        </div>

                        <div class="col-lg-3 col-md-12 footer-contact text-center text-md-start">
                            <h4>Contact Us</h4>
                            <p>
                                A108 Adam Street <br>
                                New York, NY 535022<br>
                                United States <br><br>
                                <strong>Phone:</strong> +1 5589 55488 55<br>
                                <strong>Email:</strong> info@example.com<br>
                            </p>

                        </div>

                    </div>
                </div>
            </div>

            <div class="container">
                <div class="copyright">
                    &copy; Copyright <strong><span>FlexStart</span></strong>. All Rights Reserved
                </div>
                <div class="credits">
                    <!-- All the links in the footer should remain intact. -->
                    <!-- You can delete the links only if you purchased the pro version. -->
                    <!-- Licensing information: https://bootstrapmade.com/license/ -->
                    <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/flexstart-bootstrap-startup-template/ -->
                    Designed by <a href={{ asset('https://bootstrapmade.com/ ') }}>BootstrapMade</a>
                </div>
            </div>
        </footer><!-- End Footer -->

    </main>
@stop()
