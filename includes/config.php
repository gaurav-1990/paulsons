<?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "paulsons";

try {
    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (Exception $e) {
    echo "Error: " . $e->getMessage();
}

function cleanurl($string) {
    $string = str_replace(' ', '-', $string); // Replaces all spaces with hyphens.
    return preg_replace('/[^A-Za-z0-9\-]/', '', strtolower($string)); // Removes special chars.
}
