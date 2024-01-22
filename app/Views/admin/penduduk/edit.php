<!-- admin/pasien/edit.php -->
<!-- ... (bagian head sebelumnya) ... -->
<body>
    <div class="container mt-5">
        <?php 
        $validation = \Config\Services::validation(); 
        if (!empty($validation->getErrors())) : 
        ?>
            <div class="alert alert-danger" role="alert">
                <?= $validation->listErrors() ?>
            </div>
        <?php endif; ?>

        <form action="<?= base_url('admin/penduduk/update') ?>" method="post">
            <h2>Edit Data Penduduk</h2>

            <!-- Tambahkan input field untuk menyimpan ID -->
            <input type="hidden" name="id" value="<?= $penduduk['id'] ?>">

            <div class="mb-3">
                <label for="nik" class="form-label">NIK</label>
                <input type="text" value="<?= $penduduk['nik'] ?>" class="form-control" id="nik" name="nik" aria-describedby="nik" required>
            </div>
            <div class="mb-3">
                <label for="namapenduduk" class="form-label">Nama Penduduk</label>
                <input type="text" value="<?= $penduduk['namapenduduk'] ?>" class="form-control" id="namapenduduk" name="namapenduduk" aria-describedby="namapenduduk" required>
            </div>
            <div class="mb-3">
                <label for="jk" class="form-label">Jenis Kelamin</label>
                <input type="text" value="<?= $penduduk['jk'] ?>" class="form-control" id="jk" name="jk" aria-describedby="jk" required>
            </div>
            <div class="mb-3">
                <label for="alamat" class="form-label">Alamat</label>
                <input type="text" value="<?= $penduduk['alamat'] ?>" class="form-control" id="alamat" name="alamat" aria-describedby="alamat" required>
          
            <button type="submit" name="update" class="btn btn-primary">Update</button>
        </form>
    </div>
    <!-- ... (bagian script setelahnya) ... -->
</body>
</html>