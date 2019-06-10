<?php
include 'connection.php';

extract($_REQUEST);
if(isset($save))
{
	$img1=$_FILES['img1']['name'];
	$img2=$_FILES['img2']['name'];
	$img3=$_FILES['img3']['name'];
	$img4=$_FILES['img4']['name'];
	$img5=$_FILES['img5']['name'];
	$query="insert into tbl_product(cat_id,pro_name,available,pro_details,note,image1,image2,image3,image4,main_img,pro_price,f_act_price,f_offer_price,f_offer,is_new,single_price,meta_desc,meta_key,title) values(?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?)";
	$stmt=$con->prepare($query);
	$stmt->execute([$cat, $pro_name, $stock, $pro_detail, $note, $img1, $img2, $img3, $img4, $img5, $pro_price, $f_act_price, $offer_price, $offer, $is_new, $single_price, $meta_desc, $meta_key, $title]);
	
	$pid=$con->lastInsertId();


	$q="select * from tbl_product join tbl_category on tbl_category.id=tbl_product.cat_id where tbl_product.id=?";
	$stmt1=$con->prepare($q);
	$stmt1->execute([$pid]);
	$res=$stmt1->fetch();
	$cat=$res['cat_name'];


	move_uploaded_file($_FILES['img1']['tmp_name'], "img/$cat/".$_FILES['img1']['name']);
	move_uploaded_file($_FILES['img2']['tmp_name'], "img/$cat/".$_FILES['img2']['name']);
	move_uploaded_file($_FILES['img3']['tmp_name'], "img/$cat/".$_FILES['img3']['name']);
	move_uploaded_file($_FILES['img4']['tmp_name'], "img/$cat/".$_FILES['img4']['name']);
	move_uploaded_file($_FILES['img5']['tmp_name'], "img/$cat/".$_FILES['img5']['name']);
}
?>
<!DOCTYPE html>
<html>
<head>

</head>
<body>
<h4>ADD PRODUCT</h4>
	<form method="POST" enctype="multipart/form-data">
		<div class="form-group col-md-7">
			<label>PRODUCT NAME:</label>
			<input type="text" class="form-control" name="pro_name" placeholder="PRODUCT NAME">
		</div>
		<div class="form-group col-md-7">
			<label>STOCK STATUS:</label>
			<input type="text" class="form-control" name="stock" placeholder="STOCK STATUS">
		</div>
		<div class="form-group col-md-7">
			<label>PRODUCT DETAIL:</label>
			<input type="text" class="form-control" name="pro_detail" placeholder="PRODUCT DETAIL">
		</div>
		<div class="form-group col-md-7">
			<label>NOTE:</label>
			<textarea class="form-control" name="note" placeholder="NOTE"></textarea>
		</div>
		<div class="form-group col-md-7">
                    <label>CATEGORY:</label>

                    <?php
                    $stmt = $con->prepare("select * from tbl_category");
                    $stmt->execute();
                    ?>
                    <select name="cat">
                        <option value="">CATEGORY</option>
                        <?php
                        while ($res = $stmt->fetch()) 
                        {
                            ?>
                            <option value="<?= $res['id'] ?>"><?= $res['cat_name'] ?></option>
                            <?php
                        }
                        ?>
                    </select>
        </div>
        <div class="form-group col-md-7">
			<label>PRICE:</label>			
			<input type="text" class="form-control" name="f_act_price" placeholder="PRICE">
		</div>
		<div class="form-group col-md-7">
			<label>OFFER PRICE:</label>			
			<input type="text" class="form-control" name="offer_price" placeholder="OFFER PRICE">
		</div>
		<div class="form-group col-md-7">
			<label>OFFER:</label>			
			<input type="text" class="form-control" name="offer" placeholder="OFFER">
		</div>
		<div class="form-group col-md-7">
			<label>IS NEW:</label>			
			<input type="text" class="form-control" name="is_new" placeholder="IS NEW">
		</div>
		<div class="form-group col-md-7">
			<label>SINGLE PRICE:</label>			
			<input type="text" class="form-control" name="single_price" placeholder="SINGLE PRICE">
		</div>
		<div class="form-group col-md-7">
			<label>META DESCRIPTION:</label>			
			<textarea class="form-control" name="meta_desc" placeholder="META DESCRIPTION"></textarea>
		</div>
		<div class="form-group col-md-7">
			<label>META KEY:</label>			
			<textarea class="form-control" name="meta_key" placeholder="META KEY"></textarea>
		</div>
		<div class="form-group col-md-7">
			<label>TITLE:</label>			
			<input type="text" class="form-control" name="title" placeholder="TITLE">
		</div>
		<div class="form-group col-md-7">
			<label>ADD THUMBNAILS (845 X 1204):</label>			
			<input type="file" class="form-control btn btn-info" name="img1" required>
			<input type="file" class="form-control btn btn-info" name="img2" required>
			<input type="file" class="form-control btn btn-info" name="img3">
			<input type="file" class="form-control btn btn-info" name="img4">
		</div>
		<div class="form-group col-md-7">
			<label>ADD MAIN IMAGE (845 X 1204):</label>			
			<input type="file" class="form-control btn btn-primary" name="img5" required>
		</div>
		<div class="form-group col-md-7">
			<input type="submit" class="form-control btn btn-success" name="save" value="SUBMIT">
		</div>
	</form>

</body>
</html>