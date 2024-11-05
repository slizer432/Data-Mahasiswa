<?php

require '../config.php';

$query = $conn->prepare('INSERT INTO Data (Nama, NIM, Perguruan_Tinggi, Program_Studi) VALUES (:nama, :nim, :perguruan, :prodi)');

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $nama = $_POST['nama'];
    $nim = $_POST['nim'];
    $perguruan = $_POST['perguruan'];
    $prodi = $_POST['perguruan'];
    $query->execute(['nama' => $nama, 'nim' => $nim, 'perguruan' => $perguruan, 'prodi' => $prodi]);
    unset($_POST);
    header('Location: ../index.php');
    exit();
}