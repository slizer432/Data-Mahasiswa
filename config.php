<?php

try {
    $serverName = "UHERRRR\\SQLEXPRESS";
    $dbName = "Web_Mahasiswa";

    $conn = new PDO("sqlsrv:server=$serverName;Database= $dbName");
} catch (\Throwable $e) {
    die("Koneksi gagal");
}