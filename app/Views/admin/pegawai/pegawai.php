<!DOCTYPE html>
<html lang="en">
<head>
  <title>Sari</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
  <script>
      $(function() {
         $('#save').click(function() {
            $('#myForm').submit()
            $('#tambahdata').modal('hide')
         })
      })
   </script>
</head>
<body>

<div class="container mt-3">
   <h1>Tambah Data <?= session()->get('id'); ?></h1>
  <a href="/admin/pegawai/tambahdata" class="btn btn-primary">Tambah Data</a>
  <p></p>
  <table class="table table-bordered table-striped" id="example">
    <thead>
      <tr class="text-center">
        <th>No.</th>
        <th>Nama</th>
        <th>NIK</th>
        <th>Jabatan</th>
        <th>Jenis Kelamin</th>
        <th>Alamat</th>
        <th>nomor hp</th>
        <th>Email</th>
        <th>Opsi</th>

      </tr> 
    </thead>
    <tbody>
      
      <?php
      $no = 0 ;
      foreach($pegawai as $data):
        $no++;
        ?>
      <tr class="text-center">
        <td><?= $no;?></td>
        <td><?= $data['namapegawai'];?></td>
        <td><?= $data['nik'];?></td>
        <td><?= $data['jabatan'];?></td>
        <td><?= $data['jk'];?></td>
        <td><?= $data['alamat'];?></td>
        <td><?= $data['nohp'];?></td>
        <td><?= $data['email'];?></td>
       
        <td>
                     <a class="btn btn-success" href="/admin/pegawai/edit/<?= $data['id']; ?>" role="button">Edit</a>
                     <a class="btn btn-danger text-white" onclick="hapusData(<?= $data['id']; ?>)" role="button">Delete</a>
                  </td>
      </tr>
     <?php endforeach; ?>
    </tbody>
  </table>
   </div>
</div>
<script>
      function hapusData(id) {
         message = confirm('anda ingin menghapus data ?')

         if (message) {
            window.location.href = ("<?= base_url('/admin/pegawai/delete'); ?>") + "/" + id
         } else return false
      }
   </script>

</body>
</html>
