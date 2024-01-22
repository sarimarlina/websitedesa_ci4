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

        <form action="<?= base_url('admin/pegawai/update') ?>" method="post">
            <h2>Edit Data Pasien</h2>

            <!-- Tambahkan input field untuk menyimpan ID -->
            <input type="hidden" name="id" value="<?= $pegawai['id'] ?>">

            <div class="mb-3">
                <label for="namapegawai" class="form-label">Nama Pegawai</label>
                <input type="text" value="<?= $pegawai['namapegawai'] ?>" class="form-control" id="namapegawai" name="namapegawai" aria-describedby="namapegawai" required>
            </div>
            <div class="mb-3">
                <label for="nik" class="form-label">NIK</label>
                <input type="text" value="<?= $pegawai['nik'] ?>" class="form-control" id="nik" name="nik" aria-describedby="nik" required>
            </div>
            <div class="mb-3">
                <label for="jabatan" class="form-label">Jabatan</label>
                <input type="text" value="<?= $pegawai['jabatan'] ?>" class="form-control" id="jabatan" name="jabatan" aria-describedby="jabatan" required>
            </div>
            <div class="mb-3">
                <label for="jk" class="form-label">Jenis Kelamin</label>
                <input type="text" value="<?= $pegawai['jk'] ?>" class="form-control" id="jk" name="jk" aria-describedby="jk" required>
            </div>
            <div class="mb-3">
                <label for="alamat" class="form-label">Alamat</label>
                <input type="text" value="<?= $pegawai['alamat'] ?>" class="form-control" id="alamat" name="alamat" aria-describedby="alamat" required>
            </div>
            <div class="mb-3">
                <label for="nohp" class="form-label">No Hp</label>
                <input type="text" value="<?= $pegawai['nohp'] ?>" class="form-control" id="nohp" name="nohp" aria-describedby="nohp" required>
            </div>
            <div class="mb-3">
                <label for="email" class="form-label">Email</label>
                <input type="text" value="<?= $pegawai['email'] ?>" class="form-control" id="email" name="email" aria-describedby="email" required>
            </div>
            <button type="submit" name="update" class="btn btn-primary">Update</button>
        </form>
    </div>
    <!-- ... (bagian script setelahnya) ... -->
</body>
</html>