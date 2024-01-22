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
       
      </tr>
     <?php endforeach; ?>
    </tbody>
  </table>
   </div>
</div>

</body>
</html>
