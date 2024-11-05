<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit</title>
    <link rel="stylesheet" href="css/edit.css">
</head>

<h1>Tambah Data Mahasiswa</h1>

<body>
    <form action="process/add.php" method="POST">
        <div class="container">
            <label for="nama">Nama: </label><br>
            <input type="text" name="nama"><br><br>
            <label for="nim">NIM: </label><br>
            <input type="text" name="nim"><br><br>
            <label for="perting">Perguruan Tinggi: </label><br>
            <input type="text" name="perguruan"><br><br>
            <label for="prodi">Program Studi: </label><br>
            <input type="text" name="prodi"><br><br>
            <input type="submit" value="submit">
        </div>
    </form>
</body>

</html>