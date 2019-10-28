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
    if(isset($_POST["name"]) && isset($_POST["password"])){

    }
    else{
      print '
        <br>Odczyt z pliku:
        <form action="zadanko2.php" method="get">
          Login: <input type="text" name="user">
          Password: <input type="text" name="password">
          <input type="submit" value="Wyslij">
        </form>
      ';
    }
     ?>
  </body>
</html>
