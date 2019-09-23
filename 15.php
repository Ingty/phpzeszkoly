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
      $x = 10.365;
      echo "zmienna $x jest liczba: ";
      var_dump(is_float($x));
      echo "<br>";
      $x=5985;
      echo "zmienna $x jest liczba: ";
      var_dump(is_numeric($x));
      echo "<br>";
      $x="5985";
      echo "zmienna $x jest liczba: ";
      var_dump(is_numeric($x));
      echo "<br>";
      $x="59.85" + 100;
      echo "zmienna $x jest liczba: ";
      var_dump(is_numeric($x));
      echo "<br>";
     ?>
  </body>
</html>
