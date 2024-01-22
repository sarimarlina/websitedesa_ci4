<!-- Menampilan alert hasil verifikasi -->
<?php session();
if (session()->getFlashdata('pesan')) : ?>
    <div class="mb-3 pl-3 pr-3">
        <div class="alert alert-<?= $_SESSION['color'] ?> alert-dismissible fade show" role="alert">
            <div class="alert-icon">
                <i class="far fa-fw fa-bell"></i>
                <strong class="ml-3"><?= session()->getFlashdata('pesan'); ?></strong>
            </div>
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>
    </div>
<?php endif; ?>