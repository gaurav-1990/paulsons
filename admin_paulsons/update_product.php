<?php
include 'connection.php';

$id=$_GET['id'];

$q="select * from tbl_category join tbl_product on tbl_category.id=tbl_product.cat_id where tbl_product.id=?";
$stmt1=$con->prepare($q);
$stmt1->execute([$id]);
$res=$stmt1->fetch();
$image1=$res['image1'];
$image2=$res['image2'];
$image3=$res['image3'];
$image4=$res['image4'];
$image5=$res['main_img'];
$cat_name=$res['cat_name'];

extract($_REQUEST);
if(isset($update))
{

	$img1=$_FILES['img1']['name'];

	$hidden_img1=$_POST['hide_img1'];
	
	if($img1=='')
	{
		$img1=$hidden_img1;
	}

	
	$img2=$_FILES['img2']['name'];

	$hidden_img2=$_POST['hide_img2'];
	
	if($img2=='')
	{
		$img2=$hidden_img2;
	}

	$img3=$_FILES['img3']['name'];

	$hidden_img3=$_POST['hide_img3'];
	
	if($img3=='')
	{
		$img3=$hidden_img3;
	}

	$img4=$_FILES['img4']['name'];

	$hidden_img4=$_POST['hide_img4'];
	
	if($img4=='')
	{
		$img4=$hidden_img4;
	}

	$img5=$_FILES['img5']['name'];

	$hidden_img5=$_POST['hide_img5'];
	
	if($img5=='')
	{
		$img5=$hidden_img5;
	}
	


	$query="update tbl_product set cat_id=?,pro_name=?,available=?,pro_details=?,note=?,image1=?,image2=?,image3=?,image4=?,main_img=?,pro_price=?,f_act_price=?,f_offer_price=?,f_offer=?,is_new=?,single_price=?,meta_desc=?,meta_key=?,title=? where id=?";
		$stmt=$con->prepare($query);
		$stmt->execute([$cat, $pro_name, $stock, $pro_detail, $note, $img1, $img2, $img3, $img4, $img5, $pro_price, $f_act_price, $offer_price, $offer, $is_new, $single_price, $meta_desc, $meta_key, $title, $id]);
		move_uploaded_file($_FILES['img1']['tmp_name'], "img/$cat_name/".$_FILES['img1']['name']);
		move_uploaded_file($_FILES['img2']['tmp_name'], "img/$cat_name/".$_FILES['img2']['name']);
		move_uploaded_file($_FILES['img3']['tmp_name'], "img/$cat_name/".$_FILES['img3']['name']);
		move_uploaded_file($_FILES['img4']['tmp_name'], "img/$cat_name/".$_FILES['img4']['name']);
		move_uploaded_file($_FILES['img5']['tmp_name'], "img/$cat_name/".$_FILES['img5']['name']);
	

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
<h4>UPDATE PRODUCT</h4>
	<form method="POST" enctype="multipart/form-data">
		<div class="form-group col-md-7">
			<label>PRODUCT NAME:</label>
			<input type="text" class="form-control" name="pro_name" placeholder="PRODUCT NAME" value="<?php echo $res['pro_name'];?>">
		</div>
		<div class="form-group col-md-7">
			<label>STOCK STATUS:</label>
			<input type="text" class="form-control" name="stock" placeholder="STOCK STATUS" value="<?php echo $res['available'];?>">
		</div>
		<div class="form-group col-md-7">
			<label>PRODUCT DETAIL:</label>
			<input type="text" class="form-control" name="pro_detail" placeholder="PRODUCT DETAIL" value="<?php echo $res['pro_details'];?>">
		</div>
		<div class="form-group col-md-7">
			<label>NOTE:</label>
			<textarea class="form-control" name="note" placeholder="NOTE"><?php echo $res['note'];?></textarea>
		</div>
		<div class="form-group col-md-7">
                    <label>CATEGORY:</label>

                    <?php
                    $stmt2 = $con->prepare("select * from tbl_category");
                    $stmt2->execute([$id]);
                    ?>
                    <select name="cat">
                        <option value="">CATEGORY</option>
                        <?php
                        while ($res2 = $stmt2->fetch()) 
                        {                      
                            ?>
                          <option <?php if($res['cat_id']==$res2['id']) echo 'selected';?> value="<?= $res2['id'] ?>"><?= $res2['cat_name'] ?> </option>
                            <?php
                        }
                        ?>
                    </select>
        </div>
        <div class="form-group col-md-7">
			<label>PRICE:</label>			
			<input type="text" class="form-control" name="f_act_price" placeholder="PRICE" value="<?php echo $res['f_act_price'];?>">
		</div>
		<div class="form-group col-md-7">
			<label>OFFER PRICE:</label>			
			<input type="text" class="form-control" name="offer_price" placeholder="OFFER PRICE" value="<?php echo $res['f_offer_price'];?>">
		</div>
		<div class="form-group col-md-7">
			<label>OFFER:</label>			
			<input type="text" class="form-control" name="offer" placeholder="OFFER" value="<?php echo $res['f_offer'];?>">
		</div>
		<div class="form-group col-md-7">
			<label>IS NEW:</label>			
			<input type="text" class="form-control" name="is_new" placeholder="IS NEW" value="<?php echo $res['is_new'];?>">
		</div>
		<div class="form-group col-md-7">
			<label>SINGLE PRICE:</label>			
			<input type="text" class="form-control" name="single_price" placeholder="SINGLE PRICE" value="<?php echo $res['single_price'];?>">
		</div>
		<div class="form-group col-md-7">
			<label>META DESCRIPTION:</label>			
			<textarea class="form-control" name="meta_desc" placeholder="META DESCRIPTION"><?php echo $res['meta_desc'];?></textarea>
		</div>
		<div class="form-group col-md-7">
			<label>META KEY:</label>			
			<textarea class="form-control" name="meta_key" placeholder="META KEY"><?php echo $res['meta_key'];?></textarea>
			
		</div>
		<div class="form-group col-md-7">
			<label>TITLE:</label>			
			<input type="text" class="form-control" name="title" placeholder="TITLE" value="<?php echo $res['title'];?>">
		</div>
		<div class="form-group col-md-7">
			<label>ADD THUMBNAILS (845 X 1204):</label>	
			
			<div class="abc">
				<div class="left">
					<?php echo "<img src='img/$cat_name/$image1' width='50px' height='50px'>";?>
				</div>
				<div class="right">
					<input type="file" class="form-control btn btn-info" name="img1">
					<input type="hidden" name="hide_img1" class="form-control" value="<?php echo $image1;?>">
				</div>
			</div>

			<div class="abc">
				<div class="left">
					<?php echo "<img src='img/$cat_name/$image2' width='50px' height='50px'>";?>
				</div>
				<div class="right">
					<input type="file" class="form-control btn btn-info" name="img2">
					<input type="hidden" name="hide_img2" class="form-control" value="<?php echo $image2;?>">
				</div>
			</div>

			<div class="abc">
				<div class="left">
					<?php echo "<img src='img/$cat_name/$image3' width='50px' height='50px'>";?>
				</div>
				<div class="right">
					<input type="file" class="form-control btn btn-info" name="img3">
					<input type="hidden" name="hide_img3" class="form-control" value="<?php echo $image3;?>">
				</div>
			</div>

			<div class="abc">
				<div class="left">
					<?php echo "<img src='img/$cat_name/$image4' width='50px' height='50px'>";?>
				</div>
				<div class="right">
					<input type="file" class="form-control btn btn-info" name="img4">
					<input type="hidden" name="hide_img4" class="form-control" value="<?php echo $image4;?>">
				</div>
			</div>

		</div>

		<div class="form-group col-md-7">
			<label>ADD MAIN IMAGE (845 X 1204):</label>			
			
			<div class="abc">
				<div class="left">
					<?php echo "<img src='img/$cat_name/$image5' width='50px' height='50px'>";?>
				</div>
				<div class="right">
					<input type="file" class="form-control btn btn-primary" name="img5">
					<input type="hidden" name="hide_img5" class="form-control" value="<?php echo $image5;?>">
				</div>
			</div>
		</div>

		<div class="form-group col-md-7">
			<input type="submit" class="form-control btn btn-success" name="update" value="SUBMIT">
		</div>
	</form>
</body>
</html>