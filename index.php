<?php

require 'config.php';
require 'Process/getData.php';

?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Mahasiswa</title>
    <link rel="stylesheet" href="css/styles.css">
</head>

<body>
    <h1>Data Mahasiswa</h1>
    <div class="top">
        <a href="addPage.php"><img src="res/Plus Math.png" alt=""></a>
        <form action="Process/deleteAll.php" method="POST">
            <input type="image" src="res/Delete All.png">
        </form>
    </div>
    <table>
        <tr>
            <th>Nama</th>
            <th>NIM</th>
            <th>Perguruan Tinggi</th>
            <th>Program Studi</th>
            <th>Alat</th>
        </tr>
        <?php foreach ($data as $data) { ?>
            <tr>
                <td><?php echo $data["Nama"] ?></td>
                <td><?php echo $data["NIM"] ?></td>
                <td><?php echo $data["Perguruan_Tinggi"] ?></td>
                <td><?php echo $data["Program_Studi"] ?></td>
                <td>
                    <div class="tools">
                        <a
                            href="editPage.php?id=<?php echo ($data['ID']); ?>&nama=<?php echo ($data['Nama']); ?>&nim=<?php echo ($data['NIM']); ?>&perguruan=<?php echo ($data['Perguruan_Tinggi']); ?>&prodi=<?php echo ($data['Program_Studi']); ?>">
                            <img src="res/Edit.png" alt="">
                        </a>
                        <form action="Process/delete.php" method="POST">
                            <input type="hidden" name="id" value="<?php echo $data['ID']; ?>">
                            <input type="image" src="res/Trash.png" id="delete">
                        </form>
                    </div>
                </td>
            </tr>
            <?php
        } ?>
    </table>
</body>

</html>