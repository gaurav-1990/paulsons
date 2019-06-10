<?php
include 'connection.php';
$id=$_GET['id'];
$stmt=$con->prepare("select * from tbl_product join tbl_category on tbl_category.id=tbl_product.cat_id where tbl_product.id=?");
$stmt->execute([$id]);
$res=$stmt->fetch();
$img1=$res['image1'];
$img2=$res['image2'];
$img3=$res['image3'];
$img4=$res['image4'];
$img5=$res['main_img'];
$cat_name=$res['cat_name'];

unlink("img/$cat_name/$img1");
unlink("img/$cat_name/$img2");
unlink("img/$cat_name/$img3");
unlink("img/$cat_name/$img4");
unlink("img/$cat_name/$img5");

$sql="delete from tbl_product where id=?";
$stmt1=$con->prepare($sql);
$stmt1->execute([$id]);
header('location:dashboard.php?page=view_product');
?>