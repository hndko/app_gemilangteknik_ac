<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title><?= $title ?></title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Gemilang Teknik AC menyediakan layanan terbaik untuk perbaikan, instalasi, dan pemeliharaan AC di Jakarta. Hubungi kami untuk pengalaman AC yang nyaman.">
    <meta name="keywords" content="Gemilang Teknik AC, service AC, perbaikan AC, instalasi AC, layanan AC, Jakarta">
    <meta name="author" content="Gemilang Teknik AC">
    <meta name="robots" content="index, follow">

    <!-- Open Graph Meta Tags -->
    <meta property="og:title" content="Gemilang Teknik AC | Service dan Perbaikan AC Terbaik di Jakarta">
    <meta property="og:description" content="Gemilang Teknik AC menyediakan layanan terbaik untuk perbaikan, instalasi, dan pemeliharaan AC di Jakarta. Hubungi kami untuk pengalaman AC yang nyaman.">
    <meta property="og:image" content="<?= base_url() ?>assets/img/logo.webp">
    <meta property="og:url" content="<?= base_url() ?>">

    <!-- Twitter Meta Tags -->
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="Gemilang Teknik AC | Service dan Perbaikan AC Terbaik di Jakarta">
    <meta name="twitter:description" content="Gemilang Teknik AC menyediakan layanan terbaik untuk perbaikan, instalasi, dan pemeliharaan AC di Jakarta. Hubungi kami untuk pengalaman AC yang nyaman.">
    <meta name="twitter:image" content="<?= base_url() ?>assets/img/logo.webp">

    <!-- Favicons -->
    <link href="<?= base_url() ?>assets/img/logo.webp" rel="icon">

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,700,700i|Raleway:300,400,500,700,800|Montserrat:300,400,700" rel="stylesheet">

    <!-- Vendor CSS Files -->
    <link href="<?= base_url() ?>assets/vendor/aos/aos.css" rel="stylesheet">
    <link href="<?= base_url() ?>assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="<?= base_url() ?>assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
    <link href="<?= base_url() ?>assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
    <link href="<?= base_url() ?>assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
    <link href="<?= base_url() ?>assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">

    <!-- Template Main CSS File -->
    <link href="<?= base_url() ?>assets/css/style.css" rel="stylesheet">
    <style>
        .float {
            position: fixed;
            width: 60px;
            height: 60px;
            bottom: 20px;
            left: 20px;
            background-color: #25d366;
            color: #FFF;
            border-radius: 50px;
            text-align: center;
            font-size: 30px;
            box-shadow: 2px 2px 3px #999;
            z-index: 100;
        }

        .my-float {
            margin-top: 16px;
        }

        .bounce {
            animation: bounce 2s infinite;
        }

        @keyframes bounce {

            0%,
            25%,
            50%,
            75%,
            100% {
                transform: translateY(0);
            }

            40% {
                transform: translateY(-20px);
            }

            60% {
                transform: translateY(-12px);
            }
        }
    </style>

</head>

<body>

    <!-- ======= Top Bar ======= -->
    <section id="topbar" class="d-flex align-items-center">
        <div class="container d-flex justify-content-center justify-content-md-between">
            <div class="contact-info d-flex align-items-center">
                <i class="bi bi-envelope d-flex align-items-center"><a href="mailto:<?= $email ?>"><?= $email ?></a></i>
                <i class="bi bi-phone d-flex align-items-center ms-4"><span><?= substr(chunk_split($phone_number, 4, '-'), 0, -1) ?></span></i>
            </div>
            <div class="social-links d-none d-md-flex align-items-center">
                <a href="#" class="twitter"><i class="bi bi-twitter"></i></a>
                <a href="#" class="facebook"><i class="bi bi-facebook"></i></a>
                <a href="#" class="instagram"><i class="bi bi-instagram"></i></a>
                <a href="#" class="linkedin"><i class="bi bi-linkedin"></i></i></a>
            </div>
        </div>
    </section><!-- End Top Bar-->

    <!-- ======= Header ======= -->
    <header id="header" class="d-flex align-items-center">
        <div class="container d-flex justify-content-between">

            <div id="logo">
                <h1><a href="index.html">Gemilang Teknik</span></a></h1>
                <!-- Uncomment below if you prefer to use an image logo -->
                <!-- <a href="index.html"><img src="<?= base_url() ?>assets/img/logo.webp" alt=""></a>-->
            </div>

            <nav id="navbar" class="navbar">
                <ul>
                    <li><a class="nav-link scrollto" href="<?= base_url() ?>">Home</a></li>
                    <li><a class="nav-link scrollto" href="#about">Tentang</a></li>
                    <li><a class="nav-link scrollto" href="#services">Layanan</a></li>
                    <li><a class="nav-link scrollto " href="#portfolio">Dokumentasi</a></li>
                    <li><a class="nav-link scrollto" href="#contact">Contact</a></li>
                </ul>
                <i class="bi bi-list mobile-nav-toggle"></i>
            </nav><!-- .navbar -->

        </div>
    </header><!-- End Header -->

    <!-- ======= hero Section ======= -->
    <section id="hero">

        <div class="hero-content" data-aos="fade-up">
            <h2>Service AC <span>Jakarta</span> Terpercaya</h2>
            <div>
                <button type="button" class="btn-projects scrollto" onclick="window.open('https://api.whatsapp.com/send/?phone=<?= "62" . substr($phone_number, 1) ?>&text=Hi%20Gemilang%20Teknik%20AC,%20saya%20tertarik%20dengan%20layanan%20AC%20Anda.%20Bisakah%20Anda%20memberikan%20informasi%20lebih%20lanjut%20atau%20membuatkan%20penawaran%20khusus%20untuk%20saya?', '_blank')">Hubungi Kami</button>
            </div>
        </div>

        <div class="hero-slider swiper">
            <div class="swiper-wrapper">
                <div class="swiper-slide" style="background-image: url('<?= base_url() ?>assets/img/hero-carousel/1.webp');"></div>
            </div>
        </div>

    </section><!-- End Hero Section -->

    <main id="main">

        <!-- ======= About Section ======= -->
        <section id="about">
            <div class="container" data-aos="fade-up">
                <div class="row">
                    <div class="col-lg-6 about-img">
                        <img src="<?= base_url() ?>assets/img/logo.webp" alt="">
                    </div>

                    <div class="col-lg-6 content">
                        <h2>Selamat Datang di Gemilang Teknik</h2>
                        <p>Kami, di PT Gemilang Teknik AC, berkomitmen untuk memberikan layanan terbaik dalam dunia penyejukan udara. Sebagai perusahaan yang didedikasikan untuk kenyamanan dan kualitas udara dalam setiap ruangan, kami hadir untuk memenuhi kebutuhan layanan AC Anda dengan penuh perhatian dan profesionalisme.</p>
                        <p>Misi Kami: Dengan pengalaman bertahun-tahun di industri ini, misi kami adalah memberikan solusi AC yang inovatif dan terpercaya. Kami tidak hanya menyediakan pemasangan dan perawatan AC, tetapi juga menjaga performa optimal peralatan penyejuk udara Anda melalui layanan maintenance berkala.</p>
                        <p>Kenapa Memilih Kami: Kami percaya bahwa kualitas layanan adalah kunci keberhasilan. Dengan tim teknisi berpengalaman dan komitmen untuk memberikan kepuasan pelanggan, kami siap menjadi mitra terpercaya Anda dalam menjaga kenyamanan udara di setiap ruangan.</p>
                    </div>
                </div>

            </div>
        </section><!-- End About Section -->

        <!-- ======= Services Section ======= -->
        <section id="services">
            <div class="container" data-aos="fade-up">
                <div class="section-header">
                    <h2>Layanan Unggulan Kami:</h2>
                </div>
                <div class="row gy-4">
                    <div class="col-lg-6" data-aos="fade-up" data-aos-delay="100">
                        <div class="box">
                            <div class="icon"><i class="bi bi-tools"></i></div>
                            <h4 class="title"><a href="">Pemasangan Unit AC</a></h4>
                            <p class="description">Dukungan profesional untuk memasang unit AC baru dengan presisi dan efisiensi.</p>
                        </div>
                    </div>
                    <div class="col-lg-6" data-aos="fade-up" data-aos-delay="200">
                        <div class="box">
                            <div class="icon"><i class="bi bi-tools"></i></div>
                            <h4 class="title"><a href="">Maintenance AC</a></h4>
                            <p class="description">Perawatan rutin yang teliti untuk memastikan AC Anda berfungsi dengan optimal.</p>
                        </div>
                    </div>
                    <div class="col-lg-6" data-aos="fade-up" data-aos-delay="300">
                        <div class="box">
                            <div class="icon"><i class="bi bi-tools"></i></div>
                            <h4 class="title"><a href="">Service Berkala</a></h4>
                            <p class="description">Layanan berkala untuk mencegah masalah dan menjaga performa AC dalam kondisi terbaik.</p>
                        </div>
                    </div>
                    <div class="col-lg-6" data-aos="fade-up" data-aos-delay="400">
                        <div class="box">
                            <div class="icon"><i class="bi bi-tools"></i></div>
                            <h4 class="title"><a href="">Cuci AC</a></h4>
                            <p class="description">Pembersihan menyeluruh untuk menjaga kebersihan dan kinerja maksimal AC Anda.</p>
                        </div>
                    </div>
                    <div class="col-lg-6" data-aos="fade-up" data-aos-delay="400">
                        <div class="box">
                            <div class="icon"><i class="bi bi-tools"></i></div>
                            <h4 class="title"><a href="">Penambahan Freon</a></h4>
                            <p class="description">Solusi efisien untuk menjaga kesejukan dengan menambahkan freon sesuai kebutuhan.</p>
                        </div>
                    </div>
                    <div class="col-lg-6" data-aos="fade-up" data-aos-delay="400">
                        <div class="box">
                            <div class="icon"><i class="bi bi-tools"></i></div>
                            <h4 class="title"><a href="">Instalasi AC</a></h4>
                            <p class="description">Profesionalisme dalam setiap langkah untuk memastikan instalasi AC yang tepat dan handal.</p>
                        </div>
                    </div>
                </div>
            </div>
        </section><!-- End Services Section -->

        <!-- ======= Clients Section ======= -->
        <section id="clients">
            <div class="container" data-aos="fade-up">
                <div class="section-header">
                    <h2>Klien</h2>
                </div>

                <div class="clients-slider swiper" data-aos="fade-up" data-aos-delay="100">
                    <div class="swiper-wrapper align-items-center">

                        <?php
                        $directory = "assets/img/clients/"; // Ganti dengan path direktori yang sesuai

                        // Mendapatkan daftar file dalam direktori
                        $files = scandir($directory);

                        // Loop untuk menampilkan gambar-gambar dari direktori
                        foreach ($files as $file) {
                            // Hanya menampilkan file dengan ekstensi tertentu (misalnya jpg, png)
                            $allowed_extensions = ['jpg', 'jpeg', 'png', 'gif'];
                            $file_info = pathinfo($file);

                            if (in_array(strtolower($file_info['extension']), $allowed_extensions)) {
                                echo '<div class="swiper-slide"><img src="' . base_url($directory . $file) . '" class="img-fluid" alt=""></div>';
                            }
                        }
                        ?>

                    </div>
                    <div class="swiper-pagination"></div>
                </div>

            </div>
        </section><!-- End Clients Section -->

        <!-- ======= Portfolio Section ======= -->
        <section id="portfolio" class="portfolio">
            <div class="container" data-aos="fade-up">
                <div class="section-header">
                    <h2>Dokumentasi</h2>
                </div>

                <div class="row" data-aos="fade-up" data-aos-delay="100">
                    <div class="col-lg-12 d-flex justify-content-center">
                        <ul id="portfolio-flters">
                            <!-- <li data-filter="*" class="filter-active">All</li>
                            <li data-filter=".filter-app">App</li>
                            <li data-filter=".filter-card">Card</li>
                            <li data-filter=".filter-web">Web</li> -->
                        </ul>
                    </div>
                </div>

                <div class="row portfolio-container" data-aos="fade-up" data-aos-delay="200">
                    <div class="col-lg-4 col-md-6 portfolio-item filter-app">
                        <img src="<?= base_url() ?>assets/img/documentation/documentation-1.webp" class="img-fluid" alt="">
                        <a href="<?= base_url() ?>assets/img/documentation/documentation-1.webp" data-gallery="portfolioGallery" class="portfolio-lightbox preview-link">
                            <div class="portfolio-info">
                                <h4 class="pt-3">Penanganan Masalah AC Tidak Dingin</h4>
                            </div>
                        </a>
                    </div>
                    <div class="col-lg-4 col-md-6 portfolio-item filter-app">
                        <img src="<?= base_url() ?>assets/img/documentation/documentation-2.webp" class="img-fluid" alt="">
                        <a href="<?= base_url() ?>assets/img/documentation/documentation-2.webp" data-gallery="portfolioGallery" class="portfolio-lightbox preview-link">
                            <div class="portfolio-info">
                                <h4 class="pt-3">Layanan Rutin Perawatan AC</h4>
                            </div>
                        </a>
                    </div>
                    <div class="col-lg-4 col-md-6 portfolio-item filter-app">
                        <img src="<?= base_url() ?>assets/img/documentation/documentation-3.webp" class="img-fluid" alt="">
                        <a href="<?= base_url() ?>assets/img/documentation/documentation-3.webp" data-gallery="portfolioGallery" class="portfolio-lightbox preview-link">
                            <div class="portfolio-info">
                                <h4 class="pt-3">Penambahan Freon Profesional</h4>
                            </div>
                        </a>
                    </div>
                    <div class="col-lg-4 col-md-6 portfolio-item filter-app">
                        <img src="<?= base_url() ?>assets/img/documentation/documentation-4.webp" class="img-fluid" alt="">
                        <a href="<?= base_url() ?>assets/img/documentation/documentation-4.webp" data-gallery="portfolioGallery" class="portfolio-lightbox preview-link">
                            <div class="portfolio-info">
                                <h4 class="pt-3">Penanganan Perbaikan AC Netes Air</h4>
                            </div>
                        </a>
                    </div>
                    <div class="col-lg-4 col-md-6 portfolio-item filter-app">
                        <img src="<?= base_url() ?>assets/img/documentation/documentation-5.webp" class="img-fluid" alt="">
                        <a href="<?= base_url() ?>assets/img/documentation/documentation-5.webp" data-gallery="portfolioGallery" class="portfolio-lightbox preview-link">
                            <div class="portfolio-info">
                                <h4 class="pt-3">Pengecekan dan Pemeliharaan Freon</h4>
                            </div>
                        </a>
                    </div>
                    <div class="col-lg-4 col-md-6 portfolio-item filter-app">
                        <img src="<?= base_url() ?>assets/img/documentation/documentation-6.webp" class="img-fluid" alt="">
                        <a href="<?= base_url() ?>assets/img/documentation/documentation-6.webp" data-gallery="portfolioGallery" class="portfolio-lightbox preview-link">
                            <div class="portfolio-info">
                                <h4 class="pt-3">Penanganan Perbaikan Freon Bocor</h4>
                            </div>
                        </a>
                    </div>
                </div>

            </div>
        </section><!-- End Portfolio Section -->

        <!-- ======= Call To Action Section ======= -->
        <section id="call-to-action">
            <div class="container" data-aos="zoom-out">
                <div class="row">
                    <div class="col-lg-9 text-center text-lg-start">
                        <h3 class="cta-title">Layanan AC Terbaik Menanti Anda</h3>
                        <p class="cta-text">Nikmati kenyamanan dalam ruangan dengan layanan AC unggulan dari Gemilang Teknik AC. Kami siap memberikan solusi terbaik untuk kebutuhan pendinginan Anda. Jangan lewatkan pengalaman AC yang optimal!</p>
                    </div>
                    <div class="col-lg-3 cta-btn-container text-center">
                        <a class="cta-btn align-middle" href="https://api.whatsapp.com/send/?phone=<?= "62" . substr($phone_number, 1) ?>&text=Hi%20Gemilang%20Teknik%20AC,%20saya%20tertarik%20dengan%20layanan%20AC%20Anda.%20Bisakah%20Anda%20memberikan%20informasi%20lebih%20lanjut%20atau%20membuatkan%20penawaran%20khusus%20untuk%20saya?" target="_blank">Hubungi Kami Sekarang</a>
                    </div>
                </div>
            </div>
        </section>
        <!-- End Call To Action Section -->

        <!-- ======= Contact Section ======= -->
        <section id="contact">
            <div class="container" data-aos="fade-up">
                <div class="section-header">
                    <h2>Hubungi Kami</h2>
                    <p>Butuh bantuan atau memiliki pertanyaan? Jangan ragu untuk menghubungi kami. Kami siap memberikan solusi terbaik untuk kebutuhan AC Anda. Segera hubungi Gemilang Teknik AC untuk pengalaman layanan yang memuaskan!</p>
                </div>

                <div class="row contact-info">

                    <div class="col-md-4">
                        <div class="contact-address">
                            <i class="bi bi-geo-alt"></i>
                            <h3>Kunjungi Kami</h3>
                            <address>
                                Jl Jati 3 RT 006 RW 006 <br>
                                Kelurahan Jatipadang, Kecamatan Pasar Minggu <br>
                                Jakarta Selatan, DKI Jakarta
                            </address>
                        </div>
                    </div>

                    <div class="col-md-4">
                        <div class="contact-phone">
                            <i class="bi bi-phone"></i>
                            <h3>Hubungi Kami</h3>
                            <p>Butuh bantuan segera? Jangan ragu untuk menghubungi tim layanan pelanggan kami di</p>
                            <p><a href="https://api.whatsapp.com/send/?phone=<?= "62" . substr($phone_number, 1) ?>"><?= substr(chunk_split($phone_number, 4, '-'), 0, -1) ?></a></p>
                        </div>
                    </div>

                    <div class="col-md-4">
                        <div class="contact-email">
                            <i class="bi bi-envelope"></i>
                            <h3>Kirim Kami Email</h3>
                            <p>Ingin berkomunikasi lebih lanjut? Jangan ragu untuk mengirimkan pertanyaan Anda ke alamat email kami:</p>
                            <p><a href="mailto:<?= $email ?>"><?= $email ?></a></p>
                        </div>
                    </div>

                </div>
            </div>

            <div class="container mb-4">
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3965.80803040563!2d106.8328989758688!3d-6.288945161557284!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e69f20e0777236f%3A0x79fbc257d3aa768f!2sJl.%20Jati%20Raya%20No.3%2C%20RT.6%2FRW.6%2C%20Jati%20Padang%2C%20Ps.%20Minggu%2C%20Kota%20Jakarta%20Selatan%2C%20Daerah%20Khusus%20Ibukota%20Jakarta%2012540!5e0!3m2!1sen!2sid!4v1703239280457!5m2!1sen!2sid" width="100%" height="380" frameborder="0" style="border:0" allowfullscreen></iframe>
            </div>
        </section><!-- End Contact Section -->

    </main><!-- End #main -->

    <!-- ======= Footer ======= -->
    <footer id="footer">
        <div class="container">
            <div class="copyright">
                &copy; Copyright <strong>Gemilang Teknik</strong>. All Rights Reserved
            </div>
        </div>
    </footer><!-- End Footer -->

    <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>
    <!-- render the button and direct it to wa.me -->
    <a href="https://api.whatsapp.com/send/?phone=<?= "62" . substr($phone_number, 1) ?>&text=Hi%20Gemilang%20Teknik%20AC,%20saya%20tertarik%20dengan%20layanan%20AC%20Anda.%20Bisakah%20Anda%20memberikan%20informasi%20lebih%20lanjut%20atau%20membuatkan%20penawaran%20khusus%20untuk%20saya?" class="float bounce" target="_blank">
        <i class="fa fa-whatsapp my-float"></i>
    </a>

    <!-- Vendor JS Files -->
    <script src="<?= base_url() ?>assets/vendor/aos/aos.js"></script>
    <script src="<?= base_url() ?>assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="<?= base_url() ?>assets/vendor/glightbox/js/glightbox.min.js"></script>
    <script src="<?= base_url() ?>assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
    <script src="<?= base_url() ?>assets/vendor/swiper/swiper-bundle.min.js"></script>

    <!-- Template Main JS File -->
    <script src="<?= base_url() ?>assets/js/main.js"></script>

</body>

</html>