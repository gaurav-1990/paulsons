//update_product.php (begin)

<?php
include 'connection.php';

$id=$_GET['id'];
extract($_REQUEST);
if(isset($update))
{
	$img1=$_FILES['img1']['name'];
	$img2=$_FILES['img2']['name'];
	$img3=$_FILES['img3']['name'];
	$img4=$_FILES['img4']['name'];
	$img5=$_FILES['img5']['name'];
	
		$query="update tbl_product set cat_id=?,pro_name=?,available=?,pro_details=?,note=?,image1=?,image2=?,image3=?,image4=?,main_img=?,pro_price=?,f_act_price=?,f_offer_price=?,f_offer=?,is_new=?,single_price=?,meta_desc=?,meta_key=?,title=? where id=?";
		$stmt=$con->prepare($query);
		$stmt->execute([$cat, $pro_name, $stock, $pro_detail, $note, $img1, $img2, $img3, $img4, $img5, $pro_price, $f_act_price, $offer_price, $offer, $is_new, $single_price, $meta_desc, $meta_key, $title, $id]);
		move_uploaded_file($_FILES['img1']['tmp_name'], "pro_img/".$_FILES['img1']['name']);
		move_uploaded_file($_FILES['img2']['tmp_name'], "pro_img/".$_FILES['img2']['name']);
		move_uploaded_file($_FILES['img3']['tmp_name'], "pro_img/".$_FILES['img3']['name']);
		move_uploaded_file($_FILES['img4']['tmp_name'], "pro_img/".$_FILES['img4']['name']);
		move_uploaded_file($_FILES['img5']['tmp_name'], "pro_img/".$_FILES['img5']['name']);

	
}
$q="select * from tbl_product where id=?";
$stmt1=$con->prepare($q);
$stmt1->execute([$id]);
$res=$stmt1->fetch();
$image1=$res['image1'];
$image2=$res['image2'];
$image3=$res['image3'];
$image4=$res['image4'];
$image5=$res['main_img'];
?>
<!DOCTYPE html>
<html>
<head>

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
			<input type="text" class="form-control" name="note" placeholder="NOTE" value="<?php echo $res['note'];?>">
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
			<label>PRO PRICE:</label>			
			<input type="text" class="form-control" name="pro_price" placeholder="PRO PRICE">
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
			<input type="text" class="form-control" name="meta_desc" placeholder="META DESCRIPTION" value="<?php echo $res['meta_desc'];?>">
		</div>
		<div class="form-group col-md-7">
			<label>META KEY:</label>			
			<input type="text" class="form-control" name="meta_key" placeholder="META KEY" value="<?php echo $res['meta_key'];?>">
		</div>
		<div class="form-group col-md-7">
			<label>TITLE:</label>			
			<input type="text" class="form-control" name="title" placeholder="TITLE" value="<?php echo $res['title'];?>">
		</div>
		<div class="form-group col-md-7">
			<label>ADD THUMBNAILS:</label>	
			<div class="abc" style="width: 100%; height: 60px" >
				<div class="left"  style="width: 20%; float: left;">
					<?php echo "<img src='pro_img/$image1' width='50px' height='50px'>";?>
				</div>
				<div class="right"  style="width: 80%; float: right;">
					<input type="file" class="form-control btn btn-info" name="img1" value="<?php echo $image1;?>">
				</div>
			</div>

			<div class="abc" style="width: 100%; height: 60px" >
				<div class="left"  style="width: 20%; float: left;">
					<?php echo "<img src='pro_img/$image2' width='50px' height='50px'>";?>
				</div>
				<div class="right"  style="width: 80%; float: right;">
					<input type="file" class="form-control btn btn-info" name="img2">
				</div>
			</div>

			<div class="abc" style="width: 100%; height: 60px" >
				<div class="left"  style="width: 20%; float: left;">
					<?php echo "<img src='pro_img/$image3' width='50px' height='50px'>";?>
				</div>
				<div class="right"  style="width: 80%; float: right;">
					<input type="file" class="form-control btn btn-info" name="img3">
				</div>
			</div>

			<div class="abc" style="width: 100%; height: 60px"  >
				<div class="left"  style="width: 20%; float: left;">
					<?php echo "<img src='pro_img/$image4' width='50px' height='50px'>";?>
				</div>
				<div class="right"  style="width: 80%; float: right;">
					<input type="file" class="form-control btn btn-info" name="img4">
				</div>
			</div>

		</div>

		<div class="form-group col-md-7">
			<label>ADD MAIN IMAGE:</label>			
			
			<div class="abc" style="width: 100%; height: 60px"  >
				<div class="left"  style="width: 20%; float: left;">
					<?php echo "<img src='pro_img/$image5' width='50px' height='50px'>";?>
				</div>
				<div class="right"  style="width: 80%; float: right;">
					<input type="file" class="form-control btn btn-primary" name="img5">
				</div>
			</div>
		</div>

		<div class="form-group col-md-7">
			<input type="submit" class="form-control btn btn-success" name="update" value="SUBMIT">
		</div>
	</form>
</body>
</html>


//update_product.php (end)





//add_product.php (begin)


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
	$query="insert into tbl_product(cat_id,pro_name,available,pro_details,note,image1,image2,image3,image4,main_img,pro_price,f_act_price,f_offer_price,f_offer,is_new,single_price,meta_desc,meta_key,title) values(?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?)";
	$stmt=$con->prepare($query);
	$stmt->execute([$cat, $pro_name, $stock, $pro_detail, $note, $img1, $img2, $img3, $img4, $img5, $pro_price, $f_act_price, $offer_price, $offer, $is_new, $single_price, $meta_desc, $meta_key, $title]);
	

	move_uploaded_file($_FILES['img1']['tmp_name'], "pro_img/".$_FILES['img1']['name']);
	move_uploaded_file($_FILES['img2']['tmp_name'], "pro_img/".$_FILES['img2']['name']);
	move_uploaded_file($_FILES['img3']['tmp_name'], "pro_img/".$_FILES['img3']['name']);
	move_uploaded_file($_FILES['img4']['tmp_name'], "pro_img/".$_FILES['img4']['name']);
	move_uploaded_file($_FILES['img5']['tmp_name'], "pro_img/".$_FILES['img5']['name']);
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
			<input type="text" class="form-control" name="note" placeholder="NOTE">
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
			<label>PRO PRICE:</label>			
			<input type="text" class="form-control" name="pro_price" placeholder="PRO PRICE">
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
			<input type="text" class="form-control" name="meta_desc" placeholder="META DESCRIPTION">
		</div>
		<div class="form-group col-md-7">
			<label>META KEY:</label>			
			<input type="text" class="form-control" name="meta_key" placeholder="META KEY">
		</div>
		<div class="form-group col-md-7">
			<label>TITLE:</label>			
			<input type="text" class="form-control" name="title" placeholder="TITLE">
		</div>
		<div class="form-group col-md-7">
			<label>ADD THUMBNAILS:</label>			
			<input type="file" class="form-control btn btn-info" name="img1" required>
			<input type="file" class="form-control btn btn-info" name="img2" required>
			<input type="file" class="form-control btn btn-info" name="img3">
			<input type="file" class="form-control btn btn-info" name="img4">
		</div>
		<div class="form-group col-md-7">
			<label>ADD MAIN IMAGE:</label>			
			<input type="file" class="form-control btn btn-primary" name="img5" required>
		</div>
		<div class="form-group col-md-7">
			<input type="submit" class="form-control btn btn-success" name="save" value="SUBMIT">
		</div>
	</form>
</body>
</html>


//add_product.php (end)







//view_products.php (begin)

<?php
include 'connection.php';

echo "<table class='table table-hover table-striped table-info table-bordered'>
		<tr>
		<th class='text-center'>PRODUCT ID</th>
		<th class='text-center'>CATEGORY ID</th>
		<th class='text-center'>PRODUCT NAME</th>
		<th class='text-center'>AVAILABILITY</th>
		<th class='text-center'>PRODUCT DETAIL</th>
		<th class='text-center'>NOTE</th>
		<th class='text-center'>PRICE</th>
		<th class='text-center'>OFFER PRICE</th>
		<th class='text-center'>OFFER</th>
		<th class='text-center'>MAIN IMAGE</th>
		<th class='text-center'>UPDATE</th>
		<th class='text-center'>DELETE</th>
		</tr>";

		$stmt=$con->prepare("select * from tbl_category join tbl_product on tbl_category.id=tbl_product.cat_id order by tbl_product.id");
		$stmt->execute();
		while($res=$stmt->fetch())
		{
			$id=$res['id'];
			$img=$res['main_img'];
			$cat=$res['cat_name'];

			echo "<tr>";
				echo "<td class='text-center'>".$res['id']."</td>";
				echo "<td class='text-center'>".$res['cat_id']."</td>";
				echo "<td>".$res['pro_name']."</td>";
				echo "<td>".$res['available']."</td>";
				echo "<td>".$res['pro_details']."</td>";
				echo "<td>".$res['note']."</td>";
				echo "<td>".$res['f_act_price']."</td>";
				echo "<td>".$res['f_offer_price']."</td>";
				echo "<td class='text-center'>".$res['f_offer']."</td>";
				echo "<td class='text-center'><img src='img/$cat/$img' width='100px'></td>";
				echo "<td class='text-center'><a href='dashboard.php?page=update_product&id=$id'><img src='img/edit.png'></a></td>";
				echo "<td class='text-center'><a href='delete_product.php?id=$id'><img src='img/icon-delete.png'></a></td>";
			echo "</tr>";
		}

echo "</table>";
?>

//view_products.php (end)