<!DOCTYPE html>
<html lang="en">
<?php
 include "navbar.php";
 
 ?>

<style>
 .liniuta{
    margin: 0 auto;
    margin-top: 120px;
    width:1200px;
    height:1px;
    background-color: black;
    border: 0;
}

.rosu{
    
    background-color: #C64656;
    width: 1000px;
    margin: 0 auto;
    
    color: white;
    height: 40px;
    box-sizing: border-box;
    
    padding: 4px;
    padding-left: 10px;
    padding-right: 10px;
    font-size: 20px;
    margin-top:30px;
  }

  .titlepost{
    float:left;
  }

  .namepost{
    float:right;
    display: flex;
    
  }

  .alb{
    background-color: white;
    width: 1000px;
    margin: 0 auto;
    height: 150px;
    box-sizing: border-box;
    padding: 4px;
  
    font-size: 20px;
  }

  .ins{
      width:1000px;
      margin:0 auto;
  }

  .post{
      background-color: #C64656;
      border: 0;
      color: white;
      padding: 10px;
      font-size: 20px;
      cursor: pointer;
  }

  .butoane{
    display:flex;
    float:right;
  }


  ::placeholder { 
  color: white;
  opacity: .5; 
}
</style>

 <head>
 <link rel="stylesheet" href="./styling/home.css"/>
 </head>
 <body>




 <div class="bghome">

                     <form action="insert.php" method="post" class="ins">


                     <input type="text" id="ftitle" name="ftitle" class="rosu" placeholder="Enter title...">
                     <textarea id="info" name="info" rows="4" cols="50" class="alb">
                        Enter text...
                    </textarea>


                                <button type="submit" class="post">
                                Post
                                </button>

                      </form>


            <hr class="liniuta">
            <?php
                    include ("conexiune.php");
                    $sql=mysqli_query($conexiune, "SELECT * FROM info");
                    echo "<div class=\"bghome\">";
                    
                    while ($row=mysqli_fetch_row($sql)) {
                    
                    // echo "<div class=\"rosu\">";
                    // echo "<div class=\"titlepost\">$row[1]</div>";
                    // echo "<div class=\"namepost\">";
                    // echo "<form action=\"delete.php\" method=\"post\">";
                    // echo "<input type=\"hidden\" name=\"id\" value=\"$row[0]\">";
                    // echo "<button type=\"submit\">";
                    // echo "<i class=\"fas fa-trash-alt\"></i></button></form>";
                    // echo "<form action=\"edits.php\" method=\"post\">";
                    // echo "<input type=\"hidden\" name=\"id\" value=\"$row[0]\">";
                    // echo "<button type=\"submit\">";
                    // echo "<i class=\"fas fa-pencil-alt\"></i></button></form>";
                    // echo "</div>";
                    // echo "</div>";
                    // echo "<div class=\"alb\">$row[2]</div>";



                    echo "<div class='item'>";
                    echo "<div class='item-title'>$row[1]";
                    echo "<div class='butoane'>";
                    echo "<form action=\"delete.php\" method=\"post\">";
                    echo "<input type=\"hidden\" name=\"id\" value=\"$row[0]\">";
                    echo "<button type=\"submit\">";
                    echo "<i class=\"fas fa-trash-alt\"></i></button></form>";
                      
                    echo "<form action=\"edits.php\" method=\"post\">";
                    echo "<input type=\"hidden\" name=\"id\" value=\"$row[0]\">";
                    echo "<button type=\"submit\">";
                    echo "<i class=\"fas fa-pencil-alt\"></i></button></form>";
                    echo "</div>";
                    echo "</div>";
                    echo "<div class='item-body'>$row[2]</div>";
                    echo "</div>";

                    }
                    
                    mysqli_close($conexiune);
  ?>




</div>

</body>
</html>
