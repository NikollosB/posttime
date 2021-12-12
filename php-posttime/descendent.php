<!DOCTYPE html>
<html lang="en">
<?php
 include "navbar.php";
 ?>
 <head>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css">
   <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/css/bootstrap.min.css" rel="stylesheet" >
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" ></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.min.js" integrity="sha384-Atwg2Pkwv9vp0ygtn1JAojH0nYbwNJLPhwyoVbhoPwBhjQPR5VtM2+xf0Uwh9KtT" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="./styling/home.css"/>
    </head>
    <style>
         body{
    margin: 0;
    padding:0;
    background-color: rgba(155, 154, 154, 0.74);
}
.cct{
    width: 1000px;
    margin: 0 auto;
    padding-top: 40px;
}


.search-container {
    float: right;
  }

input[type=text] {
    padding: 6px;
    margin-top: 8px;
    font-size: 17px;
    border: none;
  }
  
.search-container button {
    float: right;
    padding: 6px 10px;
    margin-top: 8px;
    margin-right: 16px;
    background: #ddd;
    font-size: 17px;
    border: none;
    cursor: pointer;
  }
  
.search-container button:hover {
    background: #ccc;
  }
  .liniuta{
    margin: 0 auto;
    margin-top: 120px;
    width:1200px;
}

      </style>
<body>
    

<div class="bghome">

<div class="cct">

<div class="dropdown" style="float:left">
        <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Sort
        </button>
        <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
        <a class="dropdown-item" href="ascendent.php">Ascendent</a>
          <div class="dropdown-divider"></div>
          <a class="dropdown-item" href="descendent.php">Descendent</a>
        </div>
      </div>

<div class="search-container">
    <form action="where.php" method="post">
      <input type="text" placeholder="Search.." name="search">
      <button type="submit"><i class="fa fa-search"></i></button>
    </form>
  </div>

</div>

<hr class="liniuta">




<!-- <div class="rosu">
  <div class="titlepost">
    Title
</div>
</div>
<div class="alb">
  Text
</div> -->


<?php
  include ("conexiune.php");
  $sql=mysqli_query($conexiune, "SELECT * FROM info ORDER BY title DESC");
  echo "<div class=\"bghome\">";
  while ($row=mysqli_fetch_row($sql)) {
 
    echo "<div class='item'>";
    echo "<div class='item-title'>$row[1]</div>";
    echo "<div class='item-body'>$row[2]</div>";
    echo "</div>";

  }
 
  mysqli_close($conexiune);
  ?>


    
</body>
</html>