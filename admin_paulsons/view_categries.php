<?php
	include 'connection.php';
	echo "<table id='example' class='table table-hover table-striped table-responsive text-center'>
			<caption>LIST OF CATEGORIES</caption>
			<thead>
			<tr>
				<th class='text-center'>ID</th>
				<th class='text-center'>Category</th>
				<th class='text-center'>CATEGORY IMAGE(1366 X 400)</th>
				<th class='text-center'>UPDATE</th>
				<th class='text-center'>DELETE</th>
			</tr></thead><tbody>";
		  
	$stmt=$con->prepare("select * from tbl_category");
	$stmt->execute();
	while($res=$stmt->fetch())
	{
		$id=$res['id'];
		
		$img=$res['cat_banner'];

		echo "<tr>";
			echo "<td><a href='#' data-toggle='tooltip' title='CATEGORY ID'>".$res['id']."</a></td>";
			echo "<td><a href='#' data-toggle='tooltip' title='CATEGORY NAME'>".$res['cat_name']."</a></td>";
			echo "<td class='text-center'><a href='#' data-toggle='tooltip' title='BANNER IMAGE'><img src='img/banner_image/$img' width='100px'></a></td>";
			echo "<td class='text-center'><a href='dashboard.php?page=update_category&id=$id' data-toggle='tooltip' title='EDIT'><img src='pro_img/edit.png'></a></td>";
			echo "<td class='text-center'><a href='delete_cat.php?id=$id' data-toggle='tooltip' title='DELETE'><img src='pro_img/icon-delete.png'></a></td>";
		echo "<tr>";
	}
	
	echo "</tbody></table>";
?>