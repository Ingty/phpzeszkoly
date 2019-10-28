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
  <body style="font-size: 20px">
    <?php

      $suma = 0;
      for($i = 1; $i <= 100; $i++){
        $suma += $i;
        echo @"i= $i + suma = $suma <br/>";
      }

      echo "Suma liczb od 1 do 100 daje: ";
      echo $suma;
      echo "<br/>";
      echo "<br/>";

      $sumak = 0;
      $liczb = 0;

      for($i = 1; $sumak < 100; $i++){
        $sumak += $i;
        $liczb++;
        echo @"i= $i i + suma = $sumak <br/>";
      }

      echo "Ile liczb do przekroczenia 100 ";
      echo $liczb;
      echo " daje ";
      echo $sumak;


      ?>
  </body>
</html>
