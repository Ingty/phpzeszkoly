<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <style media="screen">
      body{
        background: black;
        color: #FC0;
      }
    </style>
  </head>
  <body>
    <?php
      $str = "Test funkcji explode oraz implode";
      echo "---Explode---<br>";
      print_r (explode(" ","$str"));
      echo "<br>---Implode---<br>";
      $arr = array("funkcja","implode","tak","o","normalnie","testowana");
      echo implode(" ",$arr)."<br>";
      echo implode("+",$arr)."<br>";
      echo implode("-",$arr)."<br>";
      echo implode("X",$arr);
     ?>
  </body>
</html>
