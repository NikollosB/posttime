<?php
  include ("conexiune.php");
  $ud_id=$_POST['ud_id'];
  $ud_nume=$_POST['ud_nume'];
  $ud_prenume=$_POST['ud_prenume'];
  $query="UPDATE info SET title='$ud_nume', content='$ud_prenume' WHERE  id='$ud_id'";
  $checkresult = mysqli_query($conexiune, $query);
  if ($checkresult) {
    echo "<script> window.location.href = 'view.php'; </script>";
  } else {
  echo "Modificare neefectuata";
  }
  mysqli_close($conexiune);
  ?>