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
  <form action="/action_page.php">
    <div class="mb-3 mt-3">
      <label for="text">Nama Guru:</label>
      <input type="text" class="form-control" id="email" placeholder="Nama Guru" name="namaguru">
    </div>
    <div class="mb-3 mt-3">
      <label for="text">NIP:</label>
      <input type="text" class="form-control" id="email" placeholder="NIP" name="nip">
    </div>
    <div class="mb-3 mt-3">
      <label for="text">Alamat:</label>
      <input type="text" class="form-control" id="email" placeholder="Alamat" name="alamat">
    </div>
    <button type="submit" class="btn btn-primary">Submit</button>
  </form>
</div>

</body>
</html>
