<?php
  include 'connection.php';
  echo "<table id='example' class='table table-hover table-striped table-responsive text-center'>
      <caption>LIST OF HOME PAGE BANNER</caption>
      <thead>
      <tr>
        <th class='text-center'>ID</th>
        <th class='text-center'>OUR STORY BANNER IMAGE(1366 X 400)</th>
        <th class='text-center'>UPDATE</th>
        <th class='text-center'>DELETE</th>
      </tr></thead><tbody>";
      
  $stmt=$con->prepare("select * from tbl_story_img");
  $stmt->execute();
  while($res=$stmt->fetch())
  {
    $sid=$res['id'];
    $img=$res['img'];

    echo "<tr>";
      echo "<td><a href='#' data-toggle='tooltip' title='ID'>".$res['id']."</a></td>";
      echo "<td class='text-center'><a href='#' data-toggle='tooltip' title='OUR STORY BANNER IMAGE'><img src='img/banner_image/$img' width='100px'></a></td>";
      echo "<td class='text-center'><a href='dashboard.php?page=update_story_banner&id=$sid' data-toggle='tooltip' title='EDIT'><img src='pro_img/edit.png'></a></td>";
      echo "<td class='text-center'><a href='delete_story_banner.php?id=$sid&img=$img' data-toggle='tooltip' title='DELETE'><img src='pro_img/icon-delete.png'></a></td>";
    echo "<tr>";
  }
  
  echo "</tbody></table>";
?>