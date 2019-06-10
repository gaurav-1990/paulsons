<?php
include 'connection.php';
$id=$_GET['id'];
$img=$_GET['img'];

unlink("img/banner_image/$img");

$stmt=$con->prepare("delete from tbl_home_img where id=?");
$stmt->execute([$id]);

header("location:dashboard.php?page=view_home_banner");
?>