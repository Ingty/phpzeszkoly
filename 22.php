<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <style media="screen">
      body{
        background: black;
        color: #FC0;
      }
      input{
        background: none;
        border: 1px solid #fc0;
        color: #FC0;
      }
    </style>
  </head>
  <body>
    <form action="22.php" method="GET">
      <input type="text" name="x">
      <input type="submit" value="wyslij">
      <input type="reset" value="wyczysc">
    </form>
    <?php
        if(!empty($_GET["x"])){
          $x = $_GET["x"];
          if(is_numeric($x)){
            $x = $_GET["x"];
            $suma = 0;
            for($i=0;$i<=$x;$i++){
              $suma += $i;
            }
            echo "Suma wynosi: ";
            echo $suma;
            echo "<br>";
          }
          else{
            echo "Miales wpisac liczbe <br>";
          }
        }
     ?>
  </body>
</html>
