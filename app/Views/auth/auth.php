<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            background-color: #f8f9fa;
        }

        .container {
            max-width: 400px;
            margin-top: 100px;
        }

        h2 {
            text-align: center;
            color: #007bff;
        }

        form {
            background-color: #ffffff;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        label {
            font-weight: bold;
        }

        select,
        input {
            margin-bottom: 15px;
        }

        button {
            background-color: #007bff;
            color: #ffffff;
            width: 100%;
            padding: 10px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }

        button:hover {
            background-color: #0056b3;
        }

        p {
            text-align: center;
            margin-top: 15px;
        }

        p a {
            color: #007bff;
        }

        p a:hover {
            text-decoration: none;
            color: #0056b3;
        }
    </style>
</head>

<body>

    <div class="container">
        <h2>Login</h2>

        <form action="<?= base_url('auth/processLogin'); ?>" method="post">
            <div class="mb-3">
                <label for="username">Username:</label>
                <input type="text" name="username" class="form-control" required>
            </div>

            <div class="mb-3">
                <label for="password">Password:</label>
                <input type="password" name="password" class="form-control" required>
            </div>

            <div class="mb-3">
                <label for="level">Level:</label>
                <select name="level" class="form-select" required>
                    <option value="admin">Admin</option>
                    <option value="user">Pegawai</option>
                </select>
            </div>

            <button type="submit" name="login">Login</button>
        </form>

        <p>Belum memiliki akun? <a href="/auth/registrasi">Daftar disini</a></p>
    </div>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>