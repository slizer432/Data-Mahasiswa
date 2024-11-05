<?php

require 'config.php';

$query = $conn->prepare("SELECT * FROM Data");
$query->execute();
$data = $query->fetchAll(PDO::FETCH_ASSOC);
