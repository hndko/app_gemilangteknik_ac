<main id="main">
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
    </section>

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
    </section>

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
                    <a class="cta-btn align-middle" href="https://api.whatsapp.com/send/?phone=<?= "62" . substr($phone_number, 1) ?>&text=<?= $message ?>" target="_blank">Hubungi Kami Sekarang</a>
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
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3965.7957581238866!2d106.83311247475113!3d-6.29055379369844!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e69f3d0cc0c601b%3A0xf1b3b9a47e9aca26!2sGemilang%20AC!5e0!3m2!1sid!2sid!4v1704294791575!5m2!1sid!2sid" width="100%" height="380" frameborder="0" style="border:0" allowfullscreen></iframe>
        </div>
    </section>
</main>