<main id="main">

    <!-- ======= Breadcrumbs ======= -->
    <div class="breadcrumbs">
        <div class="container">

            <div class="d-flex justify-content-between align-items-center">
                <h2>Artikel Details</h2>
                <ol>
                    <li><a href="<?= base_url() ?>">Home</a></li>
                    <li><a href="<?= base_url('artikel') ?>">Artikel</a></li>
                    <li>Artikel Details</li>
                </ol>
            </div>

        </div>
    </div>

    <section id="blog" class="blog">
        <div class="container" data-aos="fade-up">

            <div class="row g-5">

                <div class="col-lg-8">

                    <article class="blog-details">

                        <div class="post-img">
                            <img src="<?= base_url() ?>assets/img/blog/<?= $res->sampul ?>" alt="" class="img-fluid">
                        </div>

                        <h2 class="title"><?= $res->judul ?></h2>

                        <div class="meta-top">
                            <ul>
                                <li class="d-flex align-items-center"><i class="bi bi-person"></i> <?= $res->nama_lengkap ?></li>
                                <li class="d-flex align-items-center"><i class="bi bi-clock"></i> <time><?= date('F d, Y', strtotime($res->created_at)) ?></time></li>
                                <!-- <li class="d-flex align-items-center"><i class="bi bi-eye"></i> <?= $res->count_view ?></li> -->
                            </ul>
                        </div>

                        <div class="content">
                            <?= htmlspecialchars_decode($res->deskripsi) ?>
                        </div>
                    </article>
                </div>

                <div class="col-lg-4">
                    <div class="sidebar">

                        <div class="sidebar-item search-form">
                            <h3 class="sidebar-title">Search</h3>
                            <form action="" class="mt-3">
                                <input type="text">
                                <button type="submit"><i class="bi bi-search"></i></button>
                            </form>
                        </div><!-- End sidebar search formn-->

                        <div class="sidebar-item recent-posts">
                            <h3 class="sidebar-title">Populer Posts</h3>
                            <div class="mt-3">
                                <?php foreach ($blog_populer as $res) : ?>
                                    <div class="post-item mt-3">
                                        <img src="<?= base_url() ?>assets/img/blog/<?= $res->sampul ?>" alt="" class="flex-shrink-0">
                                        <div>
                                            <h4><a href="<?= base_url('artikel-details/' . $res->slug) ?>" class="updateCountView" data-article-id="<?= $res->artikel_id ?>"><?= substr(strip_tags(htmlspecialchars_decode($res->judul)), 0, 35) ?></a></h4>
                                            <time><?= date('F d, Y', strtotime($res->created_at)) ?></time>
                                        </div>
                                    </div>
                                <?php endforeach; ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</main>
<script>
    $(document).ready(function() {
        $('.updateCountView').on('click', function(e) {
            e.preventDefault();
            var articleId = $(this).data('article-id');

            $.ajax({
                url: '<?= base_url("updateCountView") ?>',
                method: 'POST',
                data: {
                    article_id: articleId
                },
                success: function(response) {
                    if (response === 'success') {
                        // Redirect to the article details page
                        window.location.href = $(e.target).attr('href');
                    } else {
                        console.error('Failed to update count_view.');
                    }
                },
                error: function() {
                    console.error('AJAX request failed.');
                }
            });
        });
    });
</script>