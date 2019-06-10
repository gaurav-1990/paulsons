<?php
include 'connection.php';
extract($_REQUEST);
if(isset($save))
{
	
	$img=$_FILES['img']['name'];
	$query="insert into tbl_contact_img (img) values (?)";
	$stmt=$con->prepare($query);
	$stmt->execute([$img]);
	move_uploaded_file($_FILES['img']['tmp_name'], "img/banner_image/". $_FILES['img']['name']);

}
?>
<!DOCTYPE html>
<html>
<head>

</head>
<body>
	<u><h4>ADD BANNER TO CONTACT US</h4></u><br>
	<form method="POST" enctype="multipart/form-data">
		<div class="form-group col-md-7">
			<label>ADD BANNER IMAGE(1366 X 400):</label>
			<input type="file" class="form-control btn btn-info" name="img" required>
		</div>
		<div class="col-md-7">
			<input type="submit" class="btn btn-primary" name="save" value="SUBMIT">
		</div>
	</form>
</body>
</html>