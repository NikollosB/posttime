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
  .ins{
      width:1000px;
      margin:0 auto;
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
      cursor:pointer;
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



 <?php
  include ("conexiune.php");
  $id=$_POST['id'];
    $result=mysqli_query($conexiune, "SELECT * FROM info WHERE id='$id'");
   
  while($row = mysqli_fetch_assoc($result)) {
   
  ?>
  <div class="bghome">
  <form action="updated.php" method="post" class="ins">
      
     <input type="hidden" name="ud_id" value="<?php echo  $row['id'];?>">
     <input type="text" id="ftitle" name="ud_nume" class="rosu" placeholder="Enter title..." value="<?php echo $row['title'];?>">
      <textarea id="info" name="ud_prenume" rows="4" cols="50" class="alb">
      <?php echo $row['content'];?>
     </textarea>


        <button type="submit" class="post">
      Modifica
          </button>


  </form>
  <?php
   }
  ?>

                    


           

</div>

</body>
</html>
