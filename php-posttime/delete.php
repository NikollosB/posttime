<?php
  include ("conexiune.php");
  $id=$_POST['id'];
  $sql=mysqli_query($conexiune, "DELETE FROM info WHERE id='$id'");
  if (!$sql) {
  die(mysqli_error());
  } else {
    echo "<script> window.location.href = 'view.php'; </script>";
  }
  mysqli_close($conexiune);
  ?>