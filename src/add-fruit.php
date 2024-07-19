<?php
require_once('db.php');

// Insert a fruit:
$stmt = $db->prepare("INSERT INTO fruits(name) VALUES (?)");
$stmt->bind_param('s', $_POST['name']);
$stmt->execute();

// Redirect back to the root page:
header('Location: /');
