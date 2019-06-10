<?php
include 'connection.php';
extract($_REQUEST);
if(isset($save))
{
	
	$img=$_FILES['img']['name'];
	$query="insert into tbl_category (cat_name,cat_banner) values (?,?)";
	$stmt=$con->prepare($query);
	$stmt->execute([$cat,$img]);
	move_uploaded_file($_FILES['img']['tmp_name'], "img/banner_image/". $_FILES['img']['name']);

	mkdir("img/$cat");

}
?>
<!DOCTYPE html>
<html>
<head>

</head>
<body>
	<h4 >ADD CATEGORIES</h4>
	<form method="POST" enctype="multipart/form-data">
		<div class="form-group col-md-7">
			<label>CATEGORY NAME:</label>
			<input type="text" class="form-control" name="cat" placeholder="ADD CATEGORY" required>
		</div>
		<div class="form-group col-md-7">
			<label>CATEGORY IMAGE (1366 X 400):</label>
			<input type="file" class="form-control btn btn-info" name="img" required>
		</div>
		<div class="col-md-7">
			<input type="submit" class="btn btn-primary" name="save" value="SUBMIT">
		</div>
	</form>
</body>
</html>