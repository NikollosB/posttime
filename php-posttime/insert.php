<?php
include ("conexiune.php");
$titlu=$_POST['ftitle'];
$informatia=$_POST['info'];
$query="INSERT INTO info (title, content) VALUES ('$titlu','$informatia')";
if (!mysqli_query($conexiune, $query)) {
die(mysqli_error());
} else {
    echo "<script> window.location.href = 'view.php'; </script>";
}
mysqli_close($conexiune);
?>