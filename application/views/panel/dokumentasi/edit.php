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
                            <span class="h5">Ubah <?= $pages ?></span>
                            <div class="card-tools">
                                <button type="button" class="btn btn-secondary btn-sm" onclick="window.location.href='<?= base_url() ?>dokumentasi'">
                                    <i class="fas fa-chevron-circle-left"></i> Kembali
                                </button>
                            </div>
                        </div>
                        <form action="" method="post" class="form-horizontal" enctype="multipart/form-data">
                            <div class="card-body">
                                <div class="form-group row">
                                    <label for="deskripsi" class="col-sm-2 col-form-label">Deskripsi</label>
                                    <div class="col-sm-10">
                                        <input type="text" class="form-control" name="deskripsi" id="deskripsi" placeholder="Isikan Deskripsi" maxlength="35" autocomplete="off" value="<?= $res->deskripsi ?>" required>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="sampul" class="col-sm-2 col-form-label">Sampul</label>
                                    <div class="col-sm-10">
                                        <div class="custom-file">
                                            <input type="hidden" name="sampul_old" value="<?= $res->sampul ?>">
                                            <input type="file" class="custom-file-input" name="sampul" id="sampul" accept="image/*">
                                            <label class="custom-file-label" for="sampul">Choose image file</label>
                                        </div>
                                        <img src="<?= base_url() ?>assets/img/dokumentasi/<?= $res->sampul ?>" alt="" class="img-thumbnail">
                                    </div>
                                </div>
                            </div>
                            <div class="card-footer">
                                <button type="submit" class="btn btn-info float-right">
                                    <i class="fas fa-edit"></i> Change
                                </button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>