<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="<?= base_url() ?>" class="brand-link">
        <img src="<?= base_url() ?>assets/img/logo.webp" alt="Gemilang Teknik AC" class="brand-image img-circle elevation-3" style="opacity: .8">
        <span class="brand-text font-weight-light">Dashboard</span>
    </a>

    <div class="sidebar">
        <div class="user-panel mt-3 pb-3 mb-3 d-flex">
            <div class="image">
                <img src="<?= base_url() ?>assets/img/pengguna/<?= $account->sampul ?>" class="img-circle elevation-2" alt="Gemilang Teknik AC">
            </div>
            <div class="info">
                <a href="#" class="d-block"><?= $account->nama_lengkap ?></a>
            </div>
        </div>

        <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                <li class="nav-item">
                    <a href="<?= base_url() ?>panel" class="nav-link <?= $pages === 'Dashboard' ? 'active' : '' ?>">
                        <i class="nav-icon fas fa-home"></i>
                        <p>Beranda </p>
                    </a>
                </li>
                <?php if ($account->role === 'Superadmin') : ?>
                    <li class="nav-item">
                        <a href="<?= base_url() ?>blog" class="nav-link <?= $pages === 'Artikel' ? 'active' : '' ?>">
                            <i class="nav-icon fas fa-newspaper"></i>
                            <p>Artikel </p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="<?= base_url() ?>layanan" class="nav-link <?= $pages === 'Layanan' ? 'active' : '' ?>">
                            <i class="nav-icon fas fa-list-alt"></i>
                            <p>Layanan </p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="<?= base_url() ?>klien" class="nav-link <?= $pages === 'Klien' ? 'active' : '' ?>">
                            <i class="nav-icon fas fa-people-arrows"></i>
                            <p>Klien </p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="<?= base_url() ?>dokumentasi" class="nav-link <?= $pages === 'Dokumentasi' ? 'active' : '' ?>">
                            <i class="nav-icon fas fa-images"></i>
                            <p>Dokumentasi </p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="<?= base_url() ?>pengguna" class="nav-link <?= $pages === 'Pengguna' ? 'active' : '' ?>">
                            <i class="nav-icon fas fa-users"></i>
                            <p>Pengguna </p>
                        </a>
                    </li>
                <?php elseif ($account->role === 'Admin') : ?>
                    <li class="nav-item">
                        <a href="<?= base_url() ?>blog" class="nav-link <?= $pages === 'Blog' ? 'active' : '' ?>">
                            <i class="nav-icon fas fa-newspaper"></i>
                            <p>Artikel </p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="<?= base_url() ?>layanan" class="nav-link <?= $pages === 'Layanan' ? 'active' : '' ?>">
                            <i class="nav-icon fas fa-list-alt"></i>
                            <p>Layanan </p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="<?= base_url() ?>klien" class="nav-link <?= $pages === 'Klien' ? 'active' : '' ?>">
                            <i class="nav-icon fas fa-people-arrows"></i>
                            <p>Klien </p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="<?= base_url() ?>dokumentasi" class="nav-link <?= $pages === 'Dokumentasi' ? 'active' : '' ?>">
                            <i class="nav-icon fas fa-images"></i>
                            <p>Dokumentasi </p>
                        </a>
                    </li>
                <?php elseif ($account->role === 'Admin Content') : ?>
                    <li class="nav-item">
                        <a href="<?= base_url() ?>blog" class="nav-link <?= $pages === 'Blog' ? 'active' : '' ?>">
                            <i class="nav-icon fas fa-newspaper"></i>
                            <p>Artikel </p>
                        </a>
                    </li>
                <?php endif; ?>
                <!-- <li class="nav-item">
                    <a href="<?= base_url() ?>pengaturan" class="nav-link <?= $pages === 'Pengaturan' ? 'active' : '' ?>">
                        <i class="nav-icon fas fa-cogs"></i>
                        <p>Pengaturan </p>
                    </a>
                </li> -->
                <li class="nav-item">
                    <a href="<?= base_url() ?>logout" class="nav-link">
                        <i class="nav-icon fas fa-sign-out-alt"></i>
                        <p>Keluar </p>
                    </a>
                </li>
            </ul>
        </nav>
    </div>
</aside>