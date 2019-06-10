<?php
session_start();
unset($_SESSION['x']);
header('location:index.php');
?>