<!DOCTYPE html>
<html lang="en">
<?php
 include "head.php";
 ?>
    <link rel="stylesheet" href="./styling/log.css"/>
<style>
.vl {
  border-left: 2px solid black;
  height: 75vh;
  margin: 40px;
}
</style>
<body>
    <div class="nav">
            <div class="log">
                <a href="view.php">
                PostTime
                </a>
            </div>
           
    </div>

    <div class="bg">
        

                <div>

                                    <br>
                                <div class="patr">


                                    <center>
                                    <form method="post" action="login.php">
                                        <div class="cabi">Cabinetul personal</div>
                                        <input type="text" name="username" class="data2" title="Introduceti text" placeholder="Login" required>
                                        <input type="password" class="data2" name="password" pattern=".{8,}" title="Opt sau mai multe caractere" placeholder="Parola" required>

                                        <div class="uitat">Ai uitat parola?</div>

                                        <input type="submit" name="submit" value="Continua" class="nextbut">
                                    </form>
                                    </center>



                                </div>





                </div>
              <div class="vl"></div>
                <div>

                                <br>
                            <div class="patr2">


                                <center>
                                    <form method="post" action="register.php">
                                    <div class="cabi">Înregistrare</div>
                                    <input type="text" name="username" class="data2 mic" title="Introduceti text" placeholder="Nume" required>
                                    <input type="text" name="name" class="data2 mic" title="Introduceti text" placeholder="Prenume" required>

                                    <input type="text" name="mail" class="data2 mare"  title="Introduceti emailul dvs." placeholder="Email" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,}$" required>

                                    <input type="password" class="data2 mic" name="password" pattern=".{8,}" title="Opt sau mai multe caractere" placeholder="Parola" required>
                                    <input type="password" class="data2 mic" name="pwd" pattern=".{8,}" title="Opt sau mai multe caractere" placeholder="Repeta" required>

                                    
                                    <label class="container"> <div class="newus2">Sunt de acord cu termenii & politica acestui magazin.</div>
                                <input type="checkbox" required>
                                <span class="checkmark"></span>
                                </label>

                                

                                   <input type="submit" name="submit" value="Continua" class="nextbut">

</form>
                                </center>



                            </div>

                </div>



    </div>



    
    
</body>
</html>