<?php

require '../config.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $id = $_POST['id'];
    $nama = $_POST['nama'];
    $nim = $_POST['nim'];
    $perguruan = $_POST['perguruan'];
    $prodi = $_POST['prodi'];

    $query = $conn->prepare('UPDATE Data SET Nama = :nama, NIM = :nim, Perguruan_Tinggi = :perguruan, Program_Studi = :prodi WHERE ID = :id');
    $query->execute(['id' => $id, 'nama' => $nama, 'nim' => $nim, 'perguruan' => $perguruan, 'prodi' => $prodi]);

    header('Location: ../index.php');
    exit();
}