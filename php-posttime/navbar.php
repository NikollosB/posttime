<?php
 include "head.php";
 ?>
 <link rel="stylesheet" href="./styling/menu.css"/>
 <style>
     /* unvisited link */

     </style>

<?php

if (isset($_SESSION['username']) || !empty($_SESSION['username'])) {
    $username = $_SESSION['username']; }
    else  $username="----";
?>
<div class="navbarn">

<div class="logon">
    <a href="view.php">
    PostTime
</a>
</div>
<div class="spacen">
</div>
<div class="whon">
    conected as <span> <?php  echo $username; ?> </span>
    <div class="iedit buttonn">
    <a href="logout.php">
    <i class="fas fa-user-times"></i>
</a>
    </div>
    <?php
    if (isset($_SESSION['role']) || !empty($_SESSION['role'])) {
    $rol = $_SESSION['role']; 

    if ($_SESSION['role'] == "admin") {
   echo "<div class='iedit buttonn'>";
   echo     "<a href='admen.php'>";
   echo "<i class='fas fa-edit'></i>";
   echo "</a>";
   echo "</div>";
    }
}
    ?>
</div>

</div>

