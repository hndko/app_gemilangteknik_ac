<div class="content-wrapper">
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0"><?= $pages ?></h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="<?= base_url() ?>">Home</a></li>
                        <li class="breadcrumb-item active"><?= $pages ?></li>
                    </ol>
                </div>
            </div>
        </div>
    </div>

    <div class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12">
                    <div class="card card-primary card-outline">
                        <div class="card-header">
                            <span class="h5">Tambah <?= $pages ?></span>
                            <div class="card-tools">
                                <button type="button" class="btn btn-secondary btn-sm" onclick="window.location.href='<?= base_url() ?>blog'">
                                    <i class="fas fa-chevron-circle-left"></i> Kembali
                                </button>
                            </div>
                        </div>
                        <form action="" method="post" class="form-horizontal" enctype="multipart/form-data">
                            <div class="card-body">
                                <div class="form-group row">
                                    <label for="slug" class="col-sm-2 col-form-label">Slug</label>
                                    <div class="col-sm-10">
                                        <input type="text" class="form-control bg-transparent" name="slug" id="slug" placeholder="Slug Otomatis" maxlength="50" autocomplete="off" readonly>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="judul" class="col-sm-2 col-form-label">Judul</label>
                                    <div class="col-sm-10">
                                        <input type="text" class="form-control" name="judul" id="judul" placeholder="Isikan judul" maxlength="155" autocomplete="off" required>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="deskripsi" class="col-sm-2 col-form-label">Deskripsi</label>
                                    <div class="col-sm-10">
                                        <textarea name="deskripsi" id="summernote" cols="30" rows="5" class="form-control" autocomplete="off" placeholder="Deskripsi" required></textarea>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="sampul" class="col-sm-2 col-form-label">Sampul</label>
                                    <div class="col-sm-10">
                                        <div class="custom-file">
                                            <input type="file" class="custom-file-input" name="sampul" id="sampul" accept="image/*" required>
                                            <label class="custom-file-label" for="sampul">Choose image file</label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="card-footer">
                                <button type="submit" class="btn btn-info float-right">
                                    <i class="fas fa-save"></i> Submit
                                </button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<script>
    $(document).ready(function() {
        $('#judul').on('input', function() {
            // Mendapatkan judul yang diinputkan
            var judul = $(this).val().toLowerCase();

            // Mengganti spasi dengan tanda penghubung "-"
            judul = judul.replace(/\s+/g, '-');

            // Memastikan hanya karakter yang diperbolehkan untuk slug
            judul = judul.replace(/[^a-z0-9-]/g, '');

            // Memastikan panjang slug tidak melebihi 50 karakter
            judul = judul.substring(0, 50);

            // Menghapus tanda penghubung "-" terakhir (jika ada)
            judul = judul.replace(/-+$/, '');

            // Menyisipkan hasil ke dalam input slug
            $('#slug').val(judul);
        });
    });
</script>