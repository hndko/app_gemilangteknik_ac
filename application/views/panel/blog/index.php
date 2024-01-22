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
                            <span class="h5">Daftar <?= $pages ?></span>
                            <div class="card-tools">
                                <button type="button" class="btn btn-primary btn-sm" onclick="window.location.href='<?= base_url() ?>blog/create'">
                                    <i class="fas fa-plus-square"></i> Tambah Data
                                </button>
                            </div>
                        </div>
                        <div class="card-body">
                            <?php if ($this->session->flashdata('success')) : ?>
                                <div class="alert alert-success alert-dismissible fade show" role="alert" id="autoCloseAlert">
                                    <?= $this->session->flashdata('message') ?>
                                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                                <script>
                                    // Menutup alert otomatis setelah 2 detik dengan efek fade
                                    setTimeout(function() {
                                        $("#autoCloseAlert").fadeOut(1000, function() {
                                            $(this).alert('close');
                                        });
                                    }, 2000);
                                </script>
                            <?php endif; ?>
                            <table id="example2" class="table table-bordered table-striped">
                                <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>Pengguna</th>
                                        <th>Judul</th>
                                        <th>Deskripsi</th>
                                        <th>Status Artikel</th>
                                        <th>Aksi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php $no = 1; ?>
                                    <?php foreach ($result as $res) : ?>
                                        <tr>
                                            <td><?= $no++ ?></td>
                                            <td><?= $res->nama_lengkap ?></td>
                                            <td><?= $res->judul ?></td>
                                            <td><?= substr(strip_tags(htmlspecialchars_decode($res->deskripsi)), 0, 200) ?>...</td>
                                            <td>
                                                <?php if ($res->is_active === '1') : ?>
                                                    <span class="badge badge-success" style="cursor: pointer;" data-toggle="modal" data-target="#modal-status<?= $res->artikel_id ?>">Artikel Aktif</span>
                                                <?php else : ?>
                                                    <span class="badge badge-danger" style="cursor: pointer;" data-toggle="modal" data-target="#modal-status<?= $res->artikel_id ?>">Artikel Dinonaktifkan</span>
                                                <?php endif; ?>
                                            </td>
                                            <td>
                                                <?php if ($res->user_id === $account->user_id) : ?>
                                                    <button type="button" class="btn btn-info btn-sm" onclick="editData('<?= base_url('blog') ?>', '<?= $res->artikel_id ?>')">
                                                        <i class="fas fa-edit"></i> Ubah
                                                    </button>
                                                    <button type="button" class="btn btn-danger btn-sm" onclick="confirmDelete('<?= base_url('blog') ?>', '<?= $res->artikel_id ?>')">
                                                        <i class="fas fa-trash-alt"></i> Hapus
                                                    </button>
                                                <?php else : ?>
                                                    <button type="button" class="btn btn-secondary btn-sm">
                                                        <i class="fas fa-lock"></i> Access Denied
                                                    </button>
                                                <?php endif; ?>
                                            </td>
                                        </tr>
                                    <?php endforeach; ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<?php foreach ($result as $res) : ?>
    <div class="modal fade" id="modal-status<?= $res->artikel_id ?>">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title">Ubah Status blog</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <form action="<?= base_url() ?>blog/is_active/<?= $res->artikel_id ?>" method="post">
                    <div class="modal-body">
                        <select name="is_active" id="is_active" class="form-control" required>
                            <option value="">--- Choose One ---</option>
                            <option value="1" <?= $res->is_active === '1' ? 'selected' : '' ?>>Artikel Aktif</option>
                            <option value="0" <?= $res->is_active === '0' ? 'selected' : '' ?>>Artikel Dinonaktifkan</option>
                        </select>
                    </div>
                    <div class="modal-footer justify-content-between">
                        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary">Save changes</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
<?php endforeach; ?>

<script>
    function editData(baseUrl, id) {
        window.location.href = baseUrl + '/edit/' + id;
    }

    function confirmDelete(baseUrl, id) {
        if (confirm("Apakah Anda yakin ingin menghapus data?")) {
            window.location.href = baseUrl + '/delete/' + id;
        }
    }
</script>