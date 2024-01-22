<!DOCTYPE html>
<html lang="en">
<head>
  <title>Latihan Web</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body>

<div class="container mt-3">
  <h2>Isikan Data</h2>
  <form action="/admin/pegawai/tambahdata" method="post">
  <div class="mb-3">
    <label for="namapegawai" class="form-label">Nama Pegawai</label>
    <input type="text" class="form-control" id="namapegawai" name="namapegawai" aria-describedby="namapegawai">
  </div>
    <div class="mb-3 mt-3">
      <label for="text">NIK:</label>
      <input type="text" class="form-control" id="email" placeholder="NIK" name="nik">
    </div>
    <div class="input-group">
      <label class="label">JABATAN--:</label>
           <label class="radio-container m-r-45">Ketua
                <input type="radio" checked="checked" name="jabatan" value="laki-laki">
                   <span class="checkmark"></span>
             </label>
               <label class="radio-container">Wakil ketua
                  <input type="radio" name="jabatan" checked="checked" value="perempuan">
                    <span class="checkmark"></span>
              </label>
              <label class="radio-container">Sekretaris
                  <input type="radio" name="jabatan" checked="checked" value="perempuan">
                    <span class="checkmark"></span>
              </label>
      </div>
   
    <div class="input-group">
      <label class="label">Jenis Kelamin--:</label>
           <label class="radio-container m-r-45">Laki-laki
                <input type="radio" checked="checked" name="jk" value="laki-laki">
                   <span class="checkmark"></span>
             </label>
               <label class="radio-container">Perempuan
                  <input type="radio" name="jk" checked="checked" value="perempuan">
                    <span class="checkmark"></span>
              </label>
      </div>
    
    <div class="mb-3 mt-3">
      <label for="text">Alamat:</label>
      <input type="text" class="form-control" id="alamat" placeholder="Alamat" name="alamat">
    </div>
    <div class="mb-3 mt-3">
      <label for="text">Nomor Hp:</label>
      <input type="text" class="form-control" id="nohp" placeholder="nohp" name="nohp">
    </div>
    <div class="mb-3 mt-3">
      <label for="text">Email:</label>
      <input type="text" class="form-control" id="email" placeholder="email" name="email">
    </div>
    <button type="submit" name="tambah" class="btn btn-primary">Submit</button>
</form>

  </form>
</div>

</body>
</html>
