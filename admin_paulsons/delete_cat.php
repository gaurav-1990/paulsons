<?php
	include 'connection.php';

	$id=$_GET['id'];

	$query1="select * from tbl_category where id=?";
	$stmt1=$con->prepare($query1);
	$stmt1->execute([$id]);
	$res=$stmt1->fetch();
	$cat=$res['cat_name'];
	
	$query="delete from tbl_category where id=?";
	$stmt=$con->prepare($query);
	$stmt->execute([$id]);

	rmdir("img/$cat");

	header("location:dashboard.php?page=view_con_banner");
?>