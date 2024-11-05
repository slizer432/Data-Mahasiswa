<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit</title>
    <link rel="stylesheet" href="css/edit.css">
</head>

<h1>Edit Data Mahasiswa</h1>

<body>
    <form action="process/edit.php" method="POST">
        <div class="container">
            <input type="hidden" name="id" value="<?php echo $_GET['id'] ?? ''; ?>">
            <label for="nama">Nama: </label><br>
            <input type="text" name="nama" value="<?php echo $_GET['nama'] ?? ''; ?>"><br><br>
            <label for="nim">NIM: </label><br>
            <input type="text" name="nim" value="<?php echo $_GET['nim'] ?? ''; ?>"><br><br>
            <label for="perting">Perguruan Tinggi: </label><br>
            <input type="text" name="perguruan" value="<?php echo $_GET['perguruan'] ?? ''; ?>"><br><br>
            <label for="prodi">Program Studi: </label><br>
            <input type="text" name="prodi" value="<?php echo $_GET['prodi'] ?? ''; ?>"><br><br>
            <input type="submit" value="submit">
        </div>
    </form>
</body>

</html>