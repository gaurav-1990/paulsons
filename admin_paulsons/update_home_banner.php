<?php
include 'connection.php';

$id=$_GET['id'];

$query1="select * from tbl_home_img where id=?";
$stmt1=$con->prepare($query1);
$stmt1->execute([$id]);
$res=$stmt1->fetch();
$image=$res['img'];

extract($_REQUEST);
if(isset($update))
{
	@$img=$_FILES['img']['name'];

	$hidden_img=$_POST['hide_img'];
	
	if($img=='')
	{
		$img=$hidden_img;
	}

	$query="update tbl_home_img set img=? where id=?";
	$stmt=$con->prepare($query);
	$stmt->execute([$img,$id]);
	@move_uploaded_file($_FILES['img']['tmp_name'], "img/banner_image/".$_FILES['img']['name']);
}

?>
<!DOCTYPE html>
<html>
<head>
	<style>
	.abc
	{
		width: 100%;
		height: 60px;
	}
	.left
	{
		width: 20%;
		float: left;
	}
	.right
	{
		width: 80%;
		float: right;
	}
</style>
</head>
<body>
	<h4>UPDATE HOME BANNER</h4>
	<form method="POST" enctype="multipart/form-data">
		<div class="form-group col-md-7">
			<label>UPDATE HOME BANNER IMAGE (1366 X 650):</label>
			<div class="abc">
				<div class="left">
					<?php echo "<img src='img/banner_image/$image' width='75px' height='50px'>";?>
				</div>
				<div class="right">
					<input type="file" class="form-control btn btn-info" name="img">
					<input type="hidden" name="hide_img" class="form-control" value="<?php echo $image;?>">
				</div>
			</div>
		</div>
		<div class="col-md-7">
			<input type="submit" class="btn btn-primary" name="update" value="UPDATE">
		</div>
	</form>
</body>
</html>