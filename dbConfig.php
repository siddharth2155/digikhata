<?php
$conn = new mysqli(hostname: "localhost", username: "root", password: "", database: "digikhata");

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>