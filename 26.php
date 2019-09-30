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
    <?php
      $zmienna = $_POST['opcja'];
      echo "User wybral opcje: ";
      echo $zmienna;
      echo "<br>";
     ?>
  </body>
</html>
