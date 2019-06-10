<?php
include 'connection.php';

echo "<table id='example' class='table table-hover table-striped table-info table-bordered'>

		<caption>LIST OF PRODUCTS</caption>

		<thead>
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
		</tr></thead><tbody>";

		$stmt=$con->prepare("select * from tbl_category join tbl_product on tbl_category.id=tbl_product.cat_id order by tbl_product.id");
		$stmt->execute();
		while($res=$stmt->fetch())
		{
			$id=$res['id'];
			$img=$res['main_img'];
			$cat=$res['cat_name'];

			echo "<tr>";
				echo "<td class='text-center'><a href='#' data-toggle='tooltip' title='PRODUCT ID'>".$res['id']."</a></td>";
				echo "<td class='text-center'><a href='#' data-toggle='tooltip' title='CATEGORY ID'>".$res['cat_id']."</a></td>";
				echo "<td><a href='#' data-toggle='tooltip' title='PRODUCT NAME'>".$res['pro_name']."</a></td>";
				echo "<td><a href='#' data-toggle='tooltip' title='AVAILABILITY'>".$res['available']."</a></td>";
				echo "<td><a href='#' data-toggle='tooltip' title='PRODUCT DETAIL'>".$res['pro_details']."</a></td>";
				echo "<td><a href='#' data-toggle='tooltip' title='NOTE'>".$res['note']."</a></td>";
				echo "<td><a href='#' data-toggle='tooltip' title='ORIGINAL PRICE'>".$res['f_act_price']."</a></td>";
				echo "<td><a href='#' data-toggle='tooltip' title='OFFER PRICE'>".$res['f_offer_price']."</a></td>";
				echo "<td class='text-center'><a href='#' data-toggle='tooltip' title='OFFER'>".$res['f_offer']."</td>";
				echo "<td class='text-center'><a href='#' data-toggle='tooltip' title='IMAGE'><img src='img/$cat/$img' width='100px'></a></td>";
				echo "<td class='text-center'><a href='dashboard.php?page=update_product&id=$id' data-toggle='tooltip' title='EDIT'><img src='pro_img/edit.png'></a></td>";
				echo "<td class='text-center'><a href='delete_product.php?id=$id' data-toggle='tooltip' title='DELETE'><img src='pro_img/icon-delete.png'></a></td>";
			echo "</tr>";
		}

echo "</tbody></table>";
?>


