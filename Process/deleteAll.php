<?php

require '../config.php';

$delete = $conn->prepare("DELETE FROM Data");

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $delete->execute();
    unset($_POST);
    header("Location: ../index.php");
    exit();
}

?>