<?php

  $id = $_GET['id'];
  // do some validation here to ensure id is safe

  $connect = mysqli_connect("localhost", "root", "", "testing");
  
  $query = "SELECT * FROM tbl_images ORDER BY id DESC";
  $result = mysqli_query($connect, $query);
  
  while($row = mysqli_fetch_array($result))
    {
      if($row["id"] == $id){
          header("Content-type: image/jpg");
          echo $row['name'];
      }
  }
?>