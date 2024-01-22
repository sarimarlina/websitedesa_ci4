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
  <form action="/admin/penduduk/tambahdata" method="post">
  <div class="mb-3">
    <label for="nik" class="form-label">NIK</label>
    <input type="text" class="form-control" id="nik" name="nik" aria-describedby="nik">
  </div>

    <div class="mb-3 mt-3">
      <label for="text">Nama Penduduk:</label>
      <input type="text" class="form-control" id="email" placeholder="Namapenduduk" name="namapenduduk">
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
  
    <button type="submit" name="tambah" class="btn btn-primary">Submit</button>
</form>

  </form>
</div>

</body>
</html>
