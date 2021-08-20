<?php
  $conn = mysqli_connect("localhost", "root", "smfi1004", "acsdb");
  $sql = "SELECT * FROM acs where ap_name='SMFi_T1'";
  $result = mysqli_query($conn, $sql);
  $row = mysqli_fetch_assoc($result);

  echo '$row : '.$row["id_ping"].'<br>';


  
  mysqli_close($conn);
  ?>
