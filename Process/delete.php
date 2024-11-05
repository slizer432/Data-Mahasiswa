<?php

require '../config.php';

$query = $conn->prepare("DELETE FROM Data WHERE ID = :id");

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $id = $_POST['id'];
    $query->execute(['id' => $id]);
    unset($_POST);
    header("Location: ../index.php");
    exit();
}