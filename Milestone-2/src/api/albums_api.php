<?php 
include __DIR__ . '/../templates/albums.php';

header('Content-Type: application/json');

echo json_encode($database);
?>